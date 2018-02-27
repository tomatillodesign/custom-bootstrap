<div class="wrap">

	<h1>Custom Bootstrap Instructions</h1>

	<div id="poststuff">

	<div id="post-body" class="metabox-holder columns-2">

		<!-- main content -->
		<div id="post-body-content">

					<h3>Collapse Shortcode + CSS</h3>
					<br/>
					[collapse title="Button Title Here"]<br/>
					Your Content Here.<br/>
					[/collapse]<br/>
					<br/><br/>
					Here is the CSS that you may want to customize:<br/>
					<br/>
					<code>
					.collapse-button-area {<br/>
					     text-align: center;<br/>
					     width: 100%;<br/>
					     padding: 20px;<br/>
					     background: #333;<br/>
					     color: #fff;<br/>
					     border: 1px solid #333;<br/>
					}<br/>
					<br/>
					a.collapse-section {<br/>
					     color: #fff;<br/>
					     font-weight: 700;<br/>
					     text-decoration: none;<br/>
					}<br/>
					<br/>
					.collapse, .collapsing {<br/>
					     text-align: left;<br/>
					     border: 1px solid #555;<br/>
					     background: #fafafa;<br/>
					     padding: 30px;<br/>
					     color: #333;<br/>
					}<br/>
					<br/>
					.clb-collapse-area {<br/>
					     margin-bottom: 20px;<br/>
					}<br/>
					</code>

					<hr/>
					<h3>Modal HTML Markup</h3>
					<textarea rows="20" style="width: 100%;">
<!-- Button trigger modal -->
<a class="button" href="#myModal1" data-toggle="modal">Launch demo modal</a>

<!-- Modal -->
<div id="myModal1" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

               <h4 class="modal-title">My Title in a Modal Window</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">×</span>
        			</button>
            </div>

            <div class="modal-body">This is the body of a modal...</div>

		  <div class="modal-footer">This is the footer of a modal...</div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal --></textarea>

					<hr/>

					<h3>Nav Tabs Shortcode + CSS</h3>

[tabs]<br/>
[tab title="REST API"]<br/>
The WordPress REST API makes it easier than ever to use WordPress in new and exciting ways, such as creating Single Page Applications on top of WordPress.<br/>
[/tab]<br/>
[tab title="More about the REST API"]<br/>
You could create a plugin to provide an entirely new admin experiences for WordPress, or create a brand new interactive front-end experience.<br/>
[/tab]<br/>
[/tabs]<br/>
<h4>HTML Markup</h4>
<textarea rows="20" style="width: 100%;"><div class="clb-nav-tabs-top">
  <ul class="nav nav-tabs" role="tablist">

    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" role="tab" href="#rest">REST</a>
    </li>

    <li class="nav-item">
      <a class="nav-link " data-toggle="tab" role="tab" href="#rest-2">REST-2</a>
    </li>

    <li class="nav-item">
      <a class="nav-link " data-toggle="tab" role="tab" href="#yet-another-tab">Yet Another Tab</a>
    </li>

    <li class="nav-item">
      <a class="nav-link " data-toggle="tab" role="tab" href="#lets-do-one-more-tab">Lets Do One More Tab</a>
    </li>

  </ul>
</div>

<div class="tab-content">

  <div class="tab-pane fade" id="rest" role="tabpanel">
    <p>The WordPress REST API makes it easier than ever to use WordPress in new and exciting ways, such as creating Single Page Applications on top of WordPress. You could create a plugin to provide an entirely new admin experiences for WordPress, or create a brand new interactive front-end experience.</p>
  </div>

  <div class="tab-pane fade" id="rest-2" role="tabpanel">
    <p>REST2: You could create a plugin to provide an entirely new admin experiences for WordPress, or create a brand new interactive front-end experience.</p>
  </div>

  <div class="tab-pane fade" id="yet-another-tab" role="tabpanel">
    <p>Yet Another Tab: You could create a plugin to provide an entirely new admin experiences for WordPress, or create a brand new interactive front-end experience.</p>
  </div>

  <div class="tab-pane fade" id="lets-do-one-more-tab" role="tabpanel">
    <p>Lets Do One More Tab: You could create a plugin to provide an entirely new admin experiences for WordPress, or create a brand new interactive front-end experience.</p>
</div></textarea>
<br/>
<h4>Nav Tabs CSS</h4>
<code>
/* ------- CLB Custom NavTabs Bootstrap CSS ----------- */<br/>
.clb-nav-tabs-top ul {<br/>
     margin-left: 0px;<br/>
}<br/>
<br/>
.clb-nav-tabs-top ul > li {<br/>
    list-style-type: none;<br/>
}<br/>
<br/>
.tab-content {<br/>
     margin-bottom: 26px;<br/>
     padding-bottom: 26px;<br/>
     border-bottom: 1px solid #ddd;<br/>
}<br/><br/>
@media (max-width: 800px) {<br/><br/>
	.nav-tabs .nav-link.active {<br/>
	    font-weight: 700;<br/>
	    color: #fff;<br/>
	    background: #eee;<br/>
	    border-radius: 0px;<br/>
	    box-shadow: inset 0 0 8px rgba(0,0,0,.15);<br/>
    }<br/><br/>
}<br/>
</code>

</div>


		<!-- post-body-content -->

		<!-- sidebar -->
		<div id="postbox-container-1" class="postbox-container">

			<div class="meta-box-sortables">

				<div class="postbox">

					<h2>About Tomatillo Design</h2>

					<div class="inside">
						<p><strong>Chris Liu-Beers</strong> builds amazing, affordable websites for nonprofits. Learn more at his website: <a href="http://www.tomatillodesign.com" target="_blank">www.tomatillodesign.com</a></p>
					</div>
					<!-- .inside -->

				</div>
				<!-- .postbox -->

			</div>
			<!-- .meta-box-sortables -->

		</div>
		<!-- #postbox-container-1 .postbox-container -->

	</div>
	<!-- #post-body .metabox-holder .columns-2 -->

	<br class="clear">
</div>
<!-- #poststuff -->

</div>
