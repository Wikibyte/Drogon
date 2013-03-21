/**
 *
 * @file is grypticle!
 * @Wikibyte.org - Skining extensions for Axomicversion: Dragon Skin
 * @skin Wikibyte Dragon
 * @author Michael McCouman jr.
 * @copyright Copyright © 2012 Michael McCouman jr.
 * @license Copyright © 2012 Michael McCouman jr.
 *
 */
!function ($) { "use strict"; var Popover = function ( element, options ) { this.init('popover', element, options) } Popover.prototype = $.extend({}, $.fn.tooltip.Constructor.prototype, { constructor: Popover , setContent: function () { var $tip = this.tip() , title = this.getTitle() , content = this.getContent() $tip.find('.popover-title')[this.isHTML(title) ? 'html' : 'text'](title) $tip.find('.popover-content > *')[this.isHTML(content) ? 'html' : 'text'](content) $tip.removeClass('fade top bottom left right in') } , hasContent: function () { return this.getTitle() || this.getContent() } , getContent: function () { var content , $e = this.$element , o = this.options content = $e.attr('data-content') || (typeof o.content == 'function' ? o.content.call($e[0]) : o.content) return content } , tip: function () { if (!this.$tip) { this.$tip = $(this.options.template) } return this.$tip } }) $.fn.popover = function (option) { return this.each(function () { var $this = $(this) , data = $this.data('popover') , options = typeof option == 'object' && option if (!data) $this.data('popover', (data = new Popover(this, options))) if (typeof option == 'string') data[option]() }) } $.fn.popover.Constructor = Popover $.fn.popover.defaults = $.extend({} , $.fn.tooltip.defaults, { placement: 'right' , content: '' , template: '<div class="popover"><div class="arrow"></div><div class="popover-inner"><h3 class="popover-title"></h3><div class="popover-content"><p></p></div></div></div>' })}(window.jQuery);