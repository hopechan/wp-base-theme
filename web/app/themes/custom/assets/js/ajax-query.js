/* global AJAX_QUERY */

export default function initAjaxQuery() {
  const container = document.querySelector("[data-ajax-query-container]");
  if (!container) return;

  const { security, action, endpoint } = AJAX_QUERY; // Provide by PHP as a global

  // Parse the query from the container node
  const query = JSON.parse(container.getAttribute("data-ajax-query-container"));
  if (!query) throw Error("Missing AJAX query vars");

  // Request new data for the specified query (returns a promise)
  function runQuery(q) {
    container.setAttribute("aria-live", "polite");
    container.setAttribute("aria-busy", "true");

    const body = new FormData();
    body.append("action", action);
    body.append("security", security);
    body.append("query", JSON.stringify(q));

    const request = fetch(endpoint, { method: "POST", body });
    return request.then((response) => {
      if (!response.ok) return Promise.reject(response);
      container.setAttribute("aria-busy", "false");
      return response.text();
    });
  }

  // Load more posts, adding them to the end of the container
  function loadMore(btn) {
    query.paged = query.paged || 1;
    query.paged++;
    btn.disabled = true;
    runQuery(query).then((response) => {
      if (!response) {
        btn.textContent = "All posts loaded";
        return;
      }
      container.insertAdjacentHTML("beforeend", response);
      btn.disabled = false;
    });
  }

  // Load posts from a particular page and replace all previous ones
  function loadPage(btn) {
    query.paged = btn.getAttribute("data-ajax-query-page");
    document
      .querySelectorAll("[data-ajax-query-page]")
      .forEach((b) => b.setAttribute("aria-current", false));
    runQuery(query).then((response) => {
      if (!response) return;
      container.innerHTML = response;
      btn.setAttribute("aria-current", true);
    });
  }

  // Set up event handlers
  document.addEventListener("click", ({ target }) => {
    if (target.matches("[data-ajax-query-more]")) loadMore(target);
    if (target.matches("[data-ajax-query-page]")) loadPage(target);
  });
}
