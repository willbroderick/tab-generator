/* Willtabs!
* Simple tab JS
* Published under MIT License
* Copyright (c) 2013 Will Broderick
*/

$(function(){
	$.fn.willtabs = function(params){
        var settings = {
        	tabBG: '#eee',
        	activeTabBG: '#fff',
        	borderStyle: '1px solid #999',
        	tabTopMargin: '20px',
        	contentPadding: '10px 0'
        };
        $.extend(settings, params);
        $(this).each(function(){
        	if($(this).hasClass('.willtab-container')) {
	        	var $toProcess = $(this);
			} else {
				var $toProcess = $(this).find('.willtab-container');
			}
			$toProcess.each(function(){
				//Vars
				var $tabs = $(this).children('.willtab-tabs');
				var $content = $(this).children('.willtab-content');
				//Styles
				$tabs.css({
					'margin': settings.tabTopMargin + ' 0 0 0',
					'display': 'block'
				}).bind('checkstyle', function(){
					var $lis = $(this).find('li').css({
						'float': 'left',
						'list-style': 'none'
					});
					$lis.find('a').css({
						'border': settings.borderStyle,
						'background': settings.tabBG,
						'padding': '5px 15px',
						'color': 'inherit'
					}).each(function(index){
						if(index > 0) {
							$(this).css('margin-left', '-1px');
						}
					});
					$lis.filter('.active').find('a').css({
						'background': settings.activeTabBG,
						'padding-top': '7px',
						'margin-top': '-2px'
					});
				});
				$content.css({
					'clear': 'both',
					'padding': settings.contentPadding
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
});	