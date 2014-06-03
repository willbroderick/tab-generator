/* Willtabs!
* Simple tab JS
* Published under MIT License
* Copyright (c) 2013 Will Broderick
*/

(function($){
	$.fn.willtabs = function(params){
		//Defaults
        var settings = {
        	tabTextColour: '#333',
        	tabBG: '#f5f5f5',
        	activeTabTextColour: '#333',
        	activeTabBG: '#fff',
        	borderStyle: '1px solid #aaa',
        	tabTopMargin: '20px',
        	contentPadding: '10px 0',
        	tabButtonPaddingTopBottom: 5,
        	tabButtonPaddingLeftRight: 20,
        	activeTabVerticalOffset: 6,
        	borderRadius: 2
        };
        $.extend(settings, params);
        //Find tab groups
        $(this).each(function(){
        	if($(this).hasClass('.willtab-container')) {
	        	var $toProcess = $(this);
			} else {
				var $toProcess = $(this).find('.willtab-container');
			}
			$toProcess.each(function(){
				//Handy vars
				var $tabs = $(this).children('.willtab-tabs');
				var $content = $(this).children('.willtab-content');
				//Styles
				$tabs.css({
					'margin': settings.tabTopMargin + ' 0 0 0',
					'display': 'block',
					'border-bottom': settings.borderStyle
				}).bind('checkstyle', function(){
					var $lis = $(this).find('li');
					$lis.find('a').css({
						'float': 'left',
						'border-top': settings.borderStyle,
						'border-right': settings.borderStyle,
						'border-left': settings.borderStyle,
						'border-bottom': 'none',
						'background': settings.tabBG,
						'padding': settings.tabButtonPaddingTopBottom + 'px ' + settings.tabButtonPaddingLeftRight + 'px',
						'margin': settings.activeTabVerticalOffset + 'px 0 0',
						'text-decoration': 'none',
						'color': settings.tabTextColour,
						'border-top-left-radius': settings.borderRadius,
						'border-top-right-radius': settings.borderRadius,
						'position': 'relative',
						'top': 0
					}).each(function(index){
						if(index > 0) {
							//For all but first, nudge over to the left 1px to make a nice overlap
							$(this).css('margin-left', '-1px');
						}
					});
					$lis.filter('.active').find('a').css({
						'color': settings.activeTabTextColour,
						'background': settings.activeTabBG,
						'padding-top': settings.tabButtonPaddingTopBottom + settings.activeTabVerticalOffset - 1,
						'padding-bottom': settings.tabButtonPaddingTopBottom + 1,
						'margin-top': '0',
						'top': 1
					});
				});
				$tabs.find('li').css({
					'float': 'left',
					'list-style': 'none',
					'margin': '0'
				});
				//Add clearing-li onto end (the simplest of the many choices of hacks)
				$('<li />').css({
					'list-style': 'none',
					'clear': 'both',
					'height': 0
				}).appendTo($tabs);
				//Content style
				$content.css({
					'clear': 'both',
					'padding': settings.contentPadding
				});
				//Set titles when hidden
				$tabs.find('a[data-title]').each(function(){
					$(this).html($(this).attr('data-title'));
				});
				//Set events
				$tabs.find('a').bind('click', function(){
					$content.children('.tab-' + $(this).attr('data-tab')).show().siblings().hide();
					$tabs.children('.active').removeClass('active');
					$(this).parent().addClass('active');
					$tabs.trigger('checkstyle');
					return false;
				});
				//Select first tab
				$tabs.find('a:first').trigger('click');
			});
        });
	};
	$(function(){
		//DOM ready? Go!
		$('body').willtabs();
	});
}(jQuery));