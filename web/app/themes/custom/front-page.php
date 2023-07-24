<?php
use utils\Utils;

get_header();
get_template_part('template-parts/masthead');
?>

<main role="main" id="main">
  <div class="section-wrapper">
    <div class="container">
      <p>Praesent ac adipiscing ullamcorper semper ut amet ac risus. Lorem sapien ut odio odio nunc. Ac adipiscing nibh porttitor erat risus justo adipiscing adipiscing amet placerat accumsan. Vis. Faucibus odio magna tempus adipiscing a non. In mi primis arcu ut non accumsan vivamus ac blandit adipiscing adipiscing arcu metus praesent turpis eu ac lacinia nunc ac commodo gravida adipiscing eget accumsan ac nunc adipiscing adipiscing.</p>
      <div class="row">
        <div class="col-md-6">
          <h3>Sem turpis amet semper</h3>
          <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat commodo eu sed ante lacinia. Sapien a lorem in integer ornare praesent commodo adipiscing arcu in massa commodo lorem accumsan at odio massa ac ac. Semper adipiscing varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
        </div>
        <div class="col-md-6">
          <h3>Magna odio tempus commodo</h3>
          <p>In arcu accumsan arcu adipiscing accumsan orci ac. Felis id enim aliquet. Accumsan ac integer lobortis commodo ornare aliquet accumsan erat tempus amet porttitor. Ante commodo blandit adipiscing integer semper orci eget. Faucibus commodo adipiscing mi eu nullam accumsan morbi arcu ornare odio mi adipiscing nascetur lacus ac interdum morbi accumsan vis mi accumsan ac praesent.</p>
        </div>
        <div class="col-lg-4">
          <h3>Interdum sapien gravida</h3>
          <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
        </div>
        <div class="col-lg-4">
          <h3>Faucibus consequat lorem</h3>
          <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
        </div>
        <div class="col-lg-4">
          <h3>Accumsan montes viverra</h3>
          <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-lg-6">
          <h3>Text</h3>
          <p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>. This is <sup>superscript</sup> text and this is <sub>subscript</sub> text. This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, this is a <a>link</a>.</p>
          <hr>
          <h2>Heading Level 2</h2>
          <h3>Heading Level 3</h3>
          <h4>Heading Level 4</h4>
          <h5>Heading Level 5</h5>
          <h6>Heading Level 6</h6>
          <hr>
          <h3>Lists</h3>
          <div class="row">
            <div class="col-md-6">
              <h4>Unordered</h4>
              <ul>
                <li>Dolor pulvinar etiam magna etiam.</li>
                <li>Sagittis adipiscing lorem eleifend.</li>
                <li>Felis enim feugiat dolore viverra.</li>
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Asperiores fugiat placeat quis illo.</li>
                <li>Nulla nesciunt ratione eos tempore?</li>
              </ul>
            </div>
            <div class="col-md-6">
              <h4>Ordered</h4>
              <ol>
                <li>Dolor pulvinar etiam magna etiam.</li>
                <li>Etiam vel felis at lorem sed viverra.</li>
                <li>Felis enim feugiat dolore viverra.</li>
                <li>Dolor pulvinar etiam magna etiam.</li>
                <li>Etiam vel felis at lorem sed viverra.</li>
                <li>Felis enim feugiat dolore viverra.</li>
              </ol>
            </div>
            <div class="col-xs-12">
              <h4>Inline</h4>
              <ul class="list-inline">
                <li>Dolor pulvinar etiam</li>
                <li>Sagittis adipiscing.</li>
                <li>Felis enim feugiat</li>
              </ul>
            </div>
          </div>
          <h4>Definition</h4>
          <dl>
            <dt>Item 1</dt>
            <dd>
              <p>Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
            </dd>
            <dt>Item 2</dt>
            <dd>
              <p>Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
            </dd>
            <dt>Item 3</dt>
            <dd>
              <p>Lorem ipsum dolor vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
            </dd>
          </dl>
          <hr>
          <h3>Blockquote</h3>
          <blockquote>
            Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis.
          </blockquote>
        </div>
        <div class="col-md-6">
          <h3>Buttons</h3>
          <ul class="list-inline">
            <li><a class="button">Default</a></li>
            <li><a class="button -style-1">Style 1</a></li>
            <li><a class="button -style-2">Style 2</a></li>
            <li><a class="button -style-3">Style 3</a></li>
          </ul>
          <ul class="list-inline">
            <li><a class="button -alt">Alternative</a></li>
            <li><a class="button -alt -style-1">Style 1</a></li>
            <li><a class="button -alt -style-2">Style 2</a></li>
            <li><a class="button -alt -style-3">Style 3</a></li>
          </ul>
          <ul class="list-inline">
            <li><a class="button -style-1 -big">Big</a></li>
            <li><a class="button">Normal</a></li>
            <li><a class="button -small">Small</a></li>
          </ul>
          <ul class="list-inline">
            <li><a class="button -style-1">
              <?= Utils::svg('facebook') ?> Icon
            </a></li>
            <li><a class="button -style-2">
              <?= Utils::svg('twitter') ?> Icon
            </a></li>
            <li><button class="button -style-1 -alt" disabled>Disabled</button></li>
            <li><button class="button" disabled>Disabled</button></li>
          </ul>
          <hr>
          <h3>Form</h3>
          <form action="#" method="POST">
            <div class="row">
              <div class="col-md-6 form-group">
                <label for="name">Name</label>
                <input id="name" name="name" type="text" value="">
              </div>
              <div class="col-md-6 form-group">
                <label for="email">Email</label>
                <input id="email" name="email" type="email" value="">
              </div>
              <!-- Break -->
              <div class="col-xs-12 form-group">
                <label for="category">Category</label>
                <select id="category" name="category">
                  <option value="">- Choose one -</option>
                  <option value="1">Manufacturing</option>
                  <option value="1">Shipping</option>
                  <option value="1">Administration</option>
                  <option value="1">Human Resources</option>
                </select>
              </div>
              <!-- Break -->
              <div class="col-xs-12">
                <label class="control-label">What do you like?</label>
                <ul class="list-inline _mb-0">
                  <li>
                    <label for="id_checkbox_0">
                    <input id="id_checkbox_0" name="checkbox" value="One" type="checkbox">
                      Option 1
                    </label>
                  </li>
                  <li>
                    <label for="id_checkbox_1">
                    <input id="id_checkbox_1" name="checkbox" value="Two" type="checkbox">
                      Option 2
                    </label>
                  </li>
                  <li>
                    <label for="id_checkbox_2">
                    <input id="id_checkbox_2" name="checkbox" value="Three" type="checkbox">
                      Option 3
                    </label>
                  </li>
                </ul>
              </div>
              <div class="col-xs-12 form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Enter your message" rows="6"></textarea>
              </div>
              <!-- Break -->
              <div class="col-xs-12">
                <ul class="list-inline">
                  <li><input class="button" type="reset" value="Reset"></li>
                  <li class="_float-md-right"><input class="button -style-1" type="submit" value="Send"></li>
                </ul>
              </div>
            </div>
          </form>
          <hr>
          <h3>Image</h3>
          <p>
            <img alt="" src="http://placehold.it/600x400">
          </p>
          <div class="row">
            <div class="col-md-4">
              <p><img alt="" src="http://placehold.it/400x250"></p>
            </div>
            <div class="col-md-4">
              <p><img alt="" src="http://placehold.it/400x250"></p>
            </div>
            <div class="col-md-4">
              <p><img alt="" src="http://placehold.it/400x250"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
