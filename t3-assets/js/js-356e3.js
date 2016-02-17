

/*===============================
/webdemo/templates/uber/acm/container-slideshow/js/script.js
================================================================================*/;
(function($){$(document).ready(function(){if($('.indicators-menu').length>0){$('.indicators-menu').mouseover(function(){$('.mn-carousel').addClass('show-menu');});$('.carousel-ctrl').mouseleave(function(){$('.mn-carousel').removeClass('show-menu');});}
if($('.acm-features.style-6 .content-left').length>0){$('.acm-container-slide.slide-3').addClass('ft-left');}
if($('.acm-features.style-6 .content-right').length>0){$('.acm-container-slide .content-right').each(function(){var ctr=$(this).parents('.acm-container-slide.slide-3:first');ctr.addClass('ft-right');ctr.removeClass('ft-left');});}});})(jQuery);


/*===============================
/webdemo/templates/uber/acm/hero/js/script.js
================================================================================*/;
(function($){$(document).ready(function(){if($('.full-screen').length>0){var heightscreen=$(window).height()-$('.t3-header').outerHeight()-$('.uber-header').outerHeight()-$('.uber-bar').outerHeight()-$('.slideshow-thumbs .carousel-indicators').height(),videoscreen=$('.video-wrapper').outerHeight(),widthscreen=$('.full-screen').width(),pdcenter=(heightscreen-$('.hero-content').height())/2,pdvideo=(videoscreen-$('.hero-content').height())/2;$('.full-screen').height(heightscreen);$('.full-screen .hero-content').css('padding-top',pdcenter);if(widthscreen/heightscreen>16/9){$('.full-screen.style-4').height(heightscreen);$('.full-screen.style-4 .hero-content').css('padding-top',pdcenter);}else{$('.full-screen.style-4').height(videoscreen);$('.full-screen.style-4 .hero-content').css('padding-top',pdvideo);}
$(window).resize(function(){var heightscreen=$(window).height()-$('.t3-header').outerHeight()-$('.uber-header').outerHeight()-$('.uber-bar').outerHeight()-$('.slideshow-thumbs .carousel-indicators').height(),videoscreen=$('.video-wrapper').outerHeight(),widthscreen=$('.full-screen').width(),pdcenter=(heightscreen-$('.hero-content').height())/2,pdvideo=(videoscreen-$('.hero-content').height())/2;$('.full-screen').height(heightscreen);$('.full-screen .hero-content').css('padding-top',pdcenter);if(widthscreen/heightscreen>16/9){$('.full-screen.style-4').height(heightscreen);$('.full-screen.style-4 .hero-content').css('padding-top',pdcenter);}else{$('.full-screen.style-4').height(videoscreen);$('.full-screen.style-4 .hero-content').css('padding-top',pdvideo);}});}
$('.acm-hero').each(function(){var hero=$(this),url=hero.css('background-image');url=url.replace(/url\(\"?/,'').replace(/\"?\)/,'');if(url!='none'){var bgImg=new Image();bgImg.src=url;bgImg.onload=function(){hero.data('imgHeight',bgImg.height);hero.data('imgWidth',bgImg.width);hero.trigger('hero.resize');}}});$(window).resize(function(){$('.acm-hero').trigger('hero.resize');});$('.acm-hero').on('hero.resize',function(){var hero=$(this),carousel=hero.parents('.carousel-inner').first(),screenHeight=carousel.length?carousel.outerHeight():hero.outerHeight(),screenWidth=carousel.length?carousel.outerWidth():hero.outerWidth(),imgHeight=hero.data('imgHeight'),imgWidth=hero.data('imgWidth');if(imgHeight&&imgWidth){if(imgWidth/imgHeight>screenWidth/screenHeight){hero.css('background-size','auto 100%');}else{hero.css('background-size','100% auto');}}});if($('html.ie8').length>0){$('.acm-hero').each(function(){var bg=$(this).css('background-image');bg=bg.replace('url("','').replace('")','');if(typeof bg!=='none'){$(this).css({"filter":"progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"+bg+"', sizingMethod='scale')"});}});}});})(jQuery);(function($){$(document).ready(function(){if($('.block-landing-item .full-screen').length>0){var heightscreen=$(window).height(),videoscreen=$('.video-wrapper').outerHeight(),widthscreen=$('.block-landing-item .full-screen').width(),pdcenter=(heightscreen-$('.hero-content').height())/2,pdvideo=(videoscreen-$('.hero-content').height())/2;$('.block-landing-item .full-screen').height(heightscreen);$('.block-landing-item .full-screen .hero-content').css('padding-top',pdcenter);if(widthscreen/heightscreen>16/9){$('.block-landing-item .full-screen.style-4').height(heightscreen);$('.block-landing-item .full-screen.style-4 .hero-content').css('padding-top',pdcenter);}else{$('.block-landing-item .full-screen.style-4').height(videoscreen);$('.block-landing-item .full-screen.style-4 .hero-content').css('padding-top',pdvideo);}
$(window).resize(function(){var heightscreen=$(window).height(),videoscreen=$('.video-wrapper').outerHeight(),widthscreen=$('.block-landing-item .full-screen').width(),pdcenter=(heightscreen-$('.hero-content').height())/2,pdvideo=(videoscreen-$('.hero-content').height())/2;$('.block-landing-item .full-screen').height(heightscreen);$('.block-landing-item .full-screen .hero-content').css('padding-top',pdcenter);if(widthscreen/heightscreen>16/9){$('.block-landing-item .full-screen.style-4').height(heightscreen);$('.block-landing-item .full-screen.style-4 .hero-content').css('padding-top',pdcenter);}else{$('.block-landing-item .full-screen.style-4').height(videoscreen);$('.block-landing-item .full-screen.style-4 .hero-content').css('padding-top',pdvideo);}});}});})(jQuery);


/*===============================
/webdemo/templates/uber/acm/statistics/js/script.js
================================================================================*/;
/*!
 * Masonry PACKAGED v3.0.0
 * Cascading grid layout library
 * http://masonry.desandro.com
 * MIT License
 * by David DeSandro
 */
(function($){$.fn.appear=function(fn,options){var settings=$.extend({data:undefined,one:true,accX:0,accY:0},options);return this.each(function(){var t=$(this);t.appeared=false;if(!fn){t.trigger('appear',settings.data);return;}
var w=$(window);var check=function(){if(!t.is(':visible')){t.appeared=false;return;}
var a=w.scrollLeft();var b=w.scrollTop();var o=t.offset();var x=o.left;var y=o.top;var ax=settings.accX;var ay=settings.accY;var th=t.height();var wh=w.height();var tw=t.width();var ww=w.width();if(y+th+ay>=b&&y<=b+wh+ay&&x+tw+ax>=a&&x<=a+ww+ax){if(!t.appeared)t.trigger('appear',settings.data);}else{t.appeared=false;}};var modifiedFn=function(){t.appeared=true;if(settings.one){w.unbind('scroll',check);var i=$.inArray(check,$.fn.appear.checks);if(i>=0)$.fn.appear.checks.splice(i,1);}
fn.apply(this,arguments);};if(settings.one)t.one('appear',settings.data,modifiedFn);else t.bind('appear',settings.data,modifiedFn);w.scroll(check);$.fn.appear.checks.push(check);(check)();});};$.extend($.fn.appear,{checks:[],timeout:null,checkAll:function(){var length=$.fn.appear.checks.length;if(length>0)
while(length--)($.fn.appear.checks[length])();},run:function(){if($.fn.appear.timeout)clearTimeout($.fn.appear.timeout);$.fn.appear.timeout=setTimeout($.fn.appear.checkAll,20);}});$.each(['append','prepend','after','before','attr','removeAttr','addClass','removeClass','toggleClass','remove','css','show','hide'],function(i,n){var old=$.fn[n];if(old){$.fn[n]=function(){var r=old.apply(this,arguments);$.fn.appear.run();return r;}}});})(jQuery);(function($){$.fn.countTo=function(options){options=options||{};return $(this).each(function(){var settings=$.extend({},$.fn.countTo.defaults,{from:$(this).data('from'),to:$(this).data('to'),speed:$(this).data('speed'),refreshInterval:$(this).data('refresh-interval'),decimals:$(this).data('decimals')},options);var loops=Math.ceil(settings.speed/settings.refreshInterval),increment=(settings.to-settings.from)/loops;var self=this,$self=$(this),loopCount=0,value=settings.from,data=$self.data('countTo')||{};$self.data('countTo',data);if(data.interval){clearInterval(data.interval);}
data.interval=setInterval(updateTimer,settings.refreshInterval);render(value);function updateTimer(){value+=increment;loopCount++;render(value);if(typeof(settings.onUpdate)=='function'){settings.onUpdate.call(self,value);}
if(loopCount>=loops){$self.removeData('countTo');clearInterval(data.interval);value=settings.to;if(typeof(settings.onComplete)=='function'){settings.onComplete.call(self,value);}}}
function render(value){var formattedValue=settings.formatter.call(self,value,settings);$self.html(formattedValue);}});};$.fn.countTo.defaults={from:0,to:0,speed:1000,refreshInterval:100,decimals:0,formatter:formatter,onUpdate:null,onComplete:null};function formatter(value,settings){return value.toFixed(settings.decimals);}}(jQuery));(function($){$(document).ready(function(){var deviceAgent=navigator.userAgent.toLowerCase(),isMobileAlt=deviceAgent.match(/(iphone|ipod|ipad|android|iemobile)/);(function($){$('.style-2 .stats-asset, .style-4 .stats-asset').each(function(){var countAsset=$(this),countNumber=countAsset.find('.stats-item-counter'),countSubject=countAsset.find('.stats-item-subject');if(!isMobileAlt){countAsset.appear(function(){countNumber.countTo({onComplete:function(){countSubject.delay(100).animate({'opacity':1,'bottom':'0px'},600);}});},{accX:0,accY:-150},'easeInCubic');}else{countNumber.countTo({onComplete:function(){countSubject.delay(100).animate({'opacity':1,'bottom':'0px'},600);}});}});})($)});})(jQuery);


/*===============================
/webdemo/templates/uber/acm/header/js/script.js
================================================================================*/;
+function($){'use strict';var Affix=function(element,options){this.options=$.extend({},Affix.DEFAULTS,options)
this.$target=$(this.options.target).on('scroll.bs.affix.data-api',$.proxy(this.checkPosition,this)).on('click.bs.affix.data-api',$.proxy(this.checkPositionWithEventLoop,this))
this.$element=$(element)
this.affixed=this.unpin=this.pinnedOffset=null
this.checkPosition()}
Affix.VERSION='3.2.0'
Affix.RESET='affix affix-top affix-bottom'
Affix.DEFAULTS={offset:0,target:window}
Affix.prototype.getPinnedOffset=function(){if(this.pinnedOffset)return this.pinnedOffset
this.$element.removeClass(Affix.RESET).addClass('affix')
var scrollTop=this.$target.scrollTop()
var position=this.$element.offset()
return(this.pinnedOffset=position.top-scrollTop)}
Affix.prototype.checkPositionWithEventLoop=function(){setTimeout($.proxy(this.checkPosition,this),1)}
Affix.prototype.checkPosition=function(){if(!this.$element.is(':visible'))return
var scrollHeight=$(document).height()
var scrollTop=this.$target.scrollTop()
var position=this.$element.offset()
var offset=this.options.offset
var offsetTop=offset.top
var offsetBottom=offset.bottom
if(typeof offset!='object')offsetBottom=offsetTop=offset
if(typeof offsetTop=='function')offsetTop=offset.top(this.$element)
if(typeof offsetBottom=='function')offsetBottom=offset.bottom(this.$element)
var affix=this.unpin!=null&&(scrollTop+this.unpin<=position.top)?false:offsetBottom!=null&&(position.top+this.$element.height()>=scrollHeight-offsetBottom)?'bottom':offsetTop!=null&&(scrollTop<=offsetTop)?'top':false
if(this.affixed===affix)return
if(this.unpin!=null)this.$element.css('top','')
var affixType='affix'+(affix?'-'+affix:'')
var e=$.Event(affixType+'.bs.affix')
this.$element.trigger(e)
if(e.isDefaultPrevented())return
this.affixed=affix
this.unpin=affix=='bottom'?this.getPinnedOffset():null
this.$element.removeClass(Affix.RESET).addClass(affixType).trigger($.Event(affixType.replace('affix','affixed')))
if(affix=='bottom'){this.$element.offset({top:scrollHeight-this.$element.height()-offsetBottom})}}
function Plugin(option){return this.each(function(){var $this=$(this)
var data=$this.data('bs.affix')
var options=typeof option=='object'&&option
if(!data)$this.data('bs.affix',(data=new Affix(this,options)))
if(typeof option=='string')data[option]()})}
var old=$.fn.affix
$.fn.affix=Plugin
$.fn.affix.Constructor=Affix
$.fn.affix.noConflict=function(){$.fn.affix=old
return this}
$(window).on('load',function(){$('[data-spy="affix"]').each(function(){var $spy=$(this)
var data=$spy.data()
data.offset=data.offset||{}
if(data.offsetBottom)data.offset.bottom=data.offsetBottom
if(data.offsetTop)data.offset.top=data.offsetTop
Plugin.call($spy,data)})})}(jQuery);