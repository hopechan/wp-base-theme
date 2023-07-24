import "focus-visible";
import "../scss/index.scss";
import initAjaxQuery from "./ajax-query";

const root = document.documentElement;

// Update <html> class to indicate JS is enabled
root.classList.remove("no-js");
root.classList.add("js");

// Polyfill Array.from if needed
if (!Array.from) Array.from = (object) => [].slice.call(object);

// Activate AJAX query on the entire site
initAjaxQuery();
