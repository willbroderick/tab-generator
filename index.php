
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Clean Themes - Tabs!</title>

	<!-- Description meta-->
	<meta name="description" content="Clean Shopify Theme Support Site" />

	<!--Google fonts-->
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif:regular,italic,bold' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="http://cleanthemes.co.uk/clean/wp-content/themes/the_cotton_1.1.3/style.css?1365756968" type="text/css" media="screen, projection" />
	<link rel="stylesheet" href="http://cleanthemes.co.uk/clean/wp-content/themes/the_cotton_1.1.3/css/cssLoader.php" type="text/css" media="screen" charset="utf-8" />
	<link rel="stylesheet" href="style.css" type="text/css" media="screen" charset="utf-8" />
	
	<link rel="shortcut icon" type="image/x-icon" href="http://cleanthemes.co.uk/clean/wp-content/uploads/2012/10/ct-favi.png" />

	<link rel='stylesheet' id='fvch-styles-css'  href='http://cleanthemes.co.uk/clean/wp-content/plugins/fv-code-highlighter/public/css/fvch-styles.css?ver=1.1' type='text/css' media='all' />

	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
	<script type='text/javascript' src='jquery.snippet.min.js'></script>
	<script type='text/javascript' src='willtabs.js'></script>
	
	<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>


	<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-6562341-11']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script>

</head>
<body>
	<div id="main-container">
		<div id="line-top"></div>
		<div class="center" >
			<!--HEADER -->
			<div id="header"  >
				<div id="logo-container"><a href="http://www.cleanthemes.co.uk"></a></div>
				<div id="menu-container">
					<div id="menu">
						<div class="menu-menu-container"><ul id="menu-menu" class="menu"><li id="menu-item-38" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-38"><a href="http://cleanthemes.co.uk/tabitha/">Generate Tabs</a></li>
						</ul></div>
					</div>
				</div>
				<div class="clear"></div>

				<div id="intro">
					<h1>General-Purpose Tab Generator by Clean Themes</h1>
					<div class="double-line"></div>
				</div>

				<div class="clear"></div>
			</div>

			<div id="content-container">
				<div id="content">
					<p>First, some quick instructions!</p>
					<p>
						<ol>
							<li>If you haven't already done so already, copy the code from the bottom of this page into your template. Note that this code comes bundled with the Expression theme, from March onwards.</li>
							<li>Choose the number of tabs to show.</li>
							<li>Enter your content into each of the big text input areas. Make sure it looks right in here before copying the code over to Shopify later!</li>
							<li>Click 'Generate Tabs' to regenerate the code-to-copy.</li>
							<li>Copy and paste the generated HTML into your Shopify description. Make sure to click 'Show HTML' before doing so! This is HTML you're copying in, not text!</li>
						</ol>
					</p>
					<hr />
					<p>
						<h2><label for="tab-count">How many tabs do you need?</label></h2>
						<select id="tab-count">
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
						</select>
					</p>

					<hr />
					
					<h2>Enter your content here (paste it in from Word, if you like)</h2>
					<div id="tab-content-entry"></div>

					
					<br /><br />
					<hr />
					<h2>How does it look?</h2>
					
					<p>
						Click this button to generate the tabs: <button id="generate-tabs" class="button">GENERATE TABS</button>
					</p>
					<p>Then, see how it looks below:</p>

					<br />
					<br />

					<div id="tab-demo"></div>

					<br />
					<br />
					<hr />

					<h2>Now, copy the following into the HTML view of your description</h2>
					<div id="tab-resultant-markup"></div>

					<div>
						<br /><br /><br /><br /><br /><br /><hr /><br />
						<h4>Are you using this somewhere where the tab code isn't already installed?</h4>
						<p>Copy and paste the following code into your theme, just above the &lt;/body&gt; tag in theme.liquid:</p>
<pre class="html-code">
&lt;script&gt;<?php
$js_string = file_get_contents('willtabs.min.js');
echo htmlentities($js_string);
?>
&lt;/script&gt;</pre>
					</div>
				</div>
			</div>
<script id="tab-content-template" type="text/template">
	<div id="tab-content-entry-COUNT">
		<h4>Tab COUNT</h4>
		<div class="tab-title">
			<label for="t-c-i-COUNT">Tab title:</label>
			<input id="t-c-i-COUNT" value="Tab COUNT" />
		</div>
		<div class="tab-content">
			<label for="t-c-t-COUNT">Tab content:</label><br />
			<textarea id="t-c-t-COUNT">Enter content for tab COUNT here</textarea>
		</div>
	</div>
</script>
<script type="text/javascript">
	function htmlEntities(str) {
		return String(str).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
	}

	$(function(){
		//Add all the tab areas
		var max_count = parseInt($('#tab-count option:last').val());
		var enter_content_tmpl = $('#tab-content-template').html();
		for(var i=0; i<max_count; i++) {
			$('#tab-content-entry').append(enter_content_tmpl.replace(/COUNT/g, i+1));
		}
		$('#tab-content-entry').children().hide();
		
		//Init wysiwyg editor
		tinymce.init({
			selector:'textarea',
			plugins: 'paste code'
		});

		//Init code regions
		$("pre.html-code").snippet("html", { style: "acid" /*clipboard:'ZeroClipboard.swf'*/});

		//Events for editing etc
		$('#tab-count').bind('change', function(){
			$('#tab-content-entry').children().hide().slice(0, parseInt($(this).val())).show();
		}).trigger('change');

		function redrawTabOutput(){
			//Create new markup
			var $newTabs = $('<ul class="willtab-tabs"></ul>');
			var $newTabAreas = $('<div class="willtab-content"></div>');

			$('#tab-content-entry').children().slice(0, parseInt($('#tab-count').val())).each(function(index){
				//Add tab
				$('<li></li>').append($('<a href="#"></a>').attr({ 'data-tab': index, 'data-title': $(this).find('input').val() })).appendTo($newTabs);
				//Add tab content
				$('<div></div>').html($(this).find('textarea').val()).addClass('tab-' + index).appendTo($newTabAreas);
			});

			var newTabCont = $('<div class="willtab-container" />').append($newTabs).append($newTabAreas);
			var newTabContHTML = htmlEntities(newTabCont.wrap('<div />').parent().html());

			//Populate outputs
			$('#tab-demo').empty().append(newTabCont).willtabs();

			$('#tab-resultant-markup').html('<pre>' + newTabContHTML + '</pre>');
			$("#tab-resultant-markup pre").snippet("html", { style: "acid" /*clipboard:'ZeroClipboard.swf'*/});
		};

		$('#generate-tabs').bind('click', function(){
			tinyMCE.triggerSave();
			redrawTabOutput();
			return false;
		});

		redrawTabOutput();
	});

</script>

			<div id="footer-container">
				<div id="footer" class="center">
					<div class="columns-wrapper">

						<div class="four-columns"></div>
						<div class="four-columns"></div>
						<div class="four-columns"></div>
						<div class="four-columns nomargin"></div>
					</div>
				</div>
			</div>

			<div id="copyrights" >
				<p class="center"> © Copyright Clean Shopify Theme</p>
			</div>
			<!-- FOOTER ENDS -->
			<div class="clear"></div>
		</div>
	</div>
</body>
</html>
