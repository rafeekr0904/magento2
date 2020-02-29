define([
	"underscore",
	"jquery",
	"jquery/ui"
	],function(_, $){
		'use strict';
		
		$.widget('mage.alfalakSystemTitle',{
			newLabelHTML : '<span class="alfalak-new">New</span>',
			
			_create : function(){
				this.elementTitle = $(this.element[0]);
				var title = this.elementTitle.text(),
					menuItems = $(this.options.menuItemSelector);
					
				_.forEach(menuItems, function (item){
					var element = $(item);
					if (this.options.addLabelTo === $('span',element).text() ){
						console.log($('span',element).text());
						$(element).append($(this.newLabelHTML));
						}					
					}, this);
					this.elementTitle.text(title + ' ' + this.options.suffix);
					this.elementTitle.append($(this.newLabelHTML));
				}
			});
			return $.mage.alfalakSystemTitle;	
		});
