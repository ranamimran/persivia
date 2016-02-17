

/*===============================
/2Demo/templates/uber/acm/container-slideshow/js/script.js
================================================================================*/;
(function($){$(document).ready(function(){if($('.indicators-menu').length>0){$('.indicators-menu').mouseover(function(){$('.mn-carousel').addClass('show-menu');});$('.carousel-ctrl').mouseleave(function(){$('.mn-carousel').removeClass('show-menu');});}
if($('.acm-features.style-6 .content-left').length>0){$('.acm-container-slide.slide-3').addClass('ft-left');}
if($('.acm-features.style-6 .content-right').length>0){$('.acm-container-slide .content-right').each(function(){var ctr=$(this).parents('.acm-container-slide.slide-3:first');ctr.addClass('ft-right');ctr.removeClass('ft-left');});}});})(jQuery);


/*===============================
/2Demo/templates/uber/acm/hero/js/script.js
================================================================================*/;
(function($){$(document).ready(function(){if($('.full-screen').length>0){var heightscreen=$(window).height()-$('.t3-header').outerHeight()-$('.uber-header').outerHeight()-$('.uber-bar').outerHeight()-$('.slideshow-thumbs .carousel-indicators').height(),videoscreen=$('.video-wrapper').outerHeight(),widthscreen=$('.full-screen').width(),pdcenter=(heightscreen-$('.hero-content').height())/2,pdvideo=(videoscreen-$('.hero-content').height())/2;$('.full-screen').height(heightscreen);$('.full-screen .hero-content').css('padding-top',pdcenter);if(widthscreen/heightscreen>16/9){$('.full-screen.style-4').height(heightscreen);$('.full-screen.style-4 .hero-content').css('padding-top',pdcenter);}else{$('.full-screen.style-4').height(videoscreen);$('.full-screen.style-4 .hero-content').css('padding-top',pdvideo);}
$(window).resize(function(){var heightscreen=$(window).height()-$('.t3-header').outerHeight()-$('.uber-header').outerHeight()-$('.uber-bar').outerHeight()-$('.slideshow-thumbs .carousel-indicators').height(),videoscreen=$('.video-wrapper').outerHeight(),widthscreen=$('.full-screen').width(),pdcenter=(heightscreen-$('.hero-content').height())/2,pdvideo=(videoscreen-$('.hero-content').height())/2;$('.full-screen').height(heightscreen);$('.full-screen .hero-content').css('padding-top',pdcenter);if(widthscreen/heightscreen>16/9){$('.full-screen.style-4').height(heightscreen);$('.full-screen.style-4 .hero-content').css('padding-top',pdcenter);}else{$('.full-screen.style-4').height(videoscreen);$('.full-screen.style-4 .hero-content').css('padding-top',pdvideo);}});}
$('.acm-hero').each(function(){var hero=$(this),url=hero.css('background-image');url=url.replace(/url\(\"?/,'').replace(/\"?\)/,'');if(url!='none'){var bgImg=new Image();bgImg.src=url;bgImg.onload=function(){hero.data('imgHeight',bgImg.height);hero.data('imgWidth',bgImg.width);hero.trigger('hero.resize');}}});$(window).resize(function(){$('.acm-hero').trigger('hero.resize');});$('.acm-hero').on('hero.resize',function(){var hero=$(this),carousel=hero.parents('.carousel-inner').first(),screenHeight=carousel.length?carousel.outerHeight():hero.outerHeight(),screenWidth=carousel.length?carousel.outerWidth():hero.outerWidth(),imgHeight=hero.data('imgHeight'),imgWidth=hero.data('imgWidth');if(imgHeight&&imgWidth){if(imgWidth/imgHeight>screenWidth/screenHeight){hero.css('background-size','auto 100%');}else{hero.css('background-size','100% auto');}}});if($('html.ie8').length>0){$('.acm-hero').each(function(){var bg=$(this).css('background-image');bg=bg.replace('url("','').replace('")','');if(typeof bg!=='none'){$(this).css({"filter":"progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"+bg+"', sizingMethod='scale')"});}});}});})(jQuery);(function($){$(document).ready(function(){if($('.block-landing-item .full-screen').length>0){var heightscreen=$(window).height(),videoscreen=$('.video-wrapper').outerHeight(),widthscreen=$('.block-landing-item .full-screen').width(),pdcenter=(heightscreen-$('.hero-content').height())/2,pdvideo=(videoscreen-$('.hero-content').height())/2;$('.block-landing-item .full-screen').height(heightscreen);$('.block-landing-item .full-screen .hero-content').css('padding-top',pdcenter);if(widthscreen/heightscreen>16/9){$('.block-landing-item .full-screen.style-4').height(heightscreen);$('.block-landing-item .full-screen.style-4 .hero-content').css('padding-top',pdcenter);}else{$('.block-landing-item .full-screen.style-4').height(videoscreen);$('.block-landing-item .full-screen.style-4 .hero-content').css('padding-top',pdvideo);}
$(window).resize(function(){var heightscreen=$(window).height(),videoscreen=$('.video-wrapper').outerHeight(),widthscreen=$('.block-landing-item .full-screen').width(),pdcenter=(heightscreen-$('.hero-content').height())/2,pdvideo=(videoscreen-$('.hero-content').height())/2;$('.block-landing-item .full-screen').height(heightscreen);$('.block-landing-item .full-screen .hero-content').css('padding-top',pdcenter);if(widthscreen/heightscreen>16/9){$('.block-landing-item .full-screen.style-4').height(heightscreen);$('.block-landing-item .full-screen.style-4 .hero-content').css('padding-top',pdcenter);}else{$('.block-landing-item .full-screen.style-4').height(videoscreen);$('.block-landing-item .full-screen.style-4 .hero-content').css('padding-top',pdvideo);}});}});})(jQuery);


/*===============================
/2Demo/templates/uber/acm/header/js/script.js
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


/*===============================
/2Demo/plugins/system/t3/base-bs3/js/nav-collapse.js
================================================================================*/;
jQuery(document).ready(function($){$('.t3-navbar').each(function(){var $navwrapper=$(this),$menu=null,$placeholder=null;if($navwrapper.find('.t3-megamenu').length){$menu=$navwrapper.find('ul.level0').clone(),$placeholder=$navwrapper.prev('.navbar-collapse');if(!$placeholder.length){$placeholder=$navwrapper.closest('.container, .t3-mainnav').find('.navbar-collapse:empty');}
var lis=$menu.find('li[data-id]'),liactive=lis.filter('.current');lis.removeClass('mega dropdown mega-align-left mega-align-right mega-align-center mega-align-adjust');lis.each(function(){var $li=$(this),$child=$li.find('>:first-child');if($child[0].nodeName=='DIV'){$child.find('>:first-child').prependTo($li);$child.remove();}
if($li.data('hidewcol')){$child.find('.caret').remove();$child.nextAll().remove();return;}
var subul=$li.find('ul.level'+$li.data('level'));if(subul.length){$ul=$('<ul class="level'+$li.data('level')+' dropdown-menu">');subul.each(function(){if($(this).parents('.mega-col-nav').data('hidewcol'))return;$(this).find('>li').appendTo($ul);});if($ul.children().length){$ul.appendTo($li);}}
$li.find('>div').remove();if(!$li.children('ul').length){$child.find('.caret').remove();}
var divider=$li.hasClass('divider');for(var x in $li.data()){$li.removeAttr('data-'+x)}
$child.removeAttr('class');for(var x in $child.data()){$child.removeAttr('data-'+x)}
if(divider){$li.addClass('divider');}});liactive.addClass('current active');}else{$menu=$navwrapper.find('ul.nav').clone();$placeholder=$('.t3-navbar-collapse:empty, .navbar-collapse:empty').eq(0);}
$menu.find('a[data-toggle="dropdown"]').removeAttr('data-toggle').removeAttr('data-target');$menu.find('> li > ul.dropdown-menu').prev('a').attr('data-toggle','dropdown').attr('data-target','#').parent('li').addClass(function(){return'dropdown'+($(this).data('level')>1?' dropdown-submenu':'');});$menu.appendTo($placeholder);});});


/*===============================
/2Demo/media/system/js/html5fallback.js
================================================================================*/;
(function(c,a,d){if(typeof Object.create!=="function"){Object.create=function(f){function e(){}e.prototype=f;return new e()}}var b={init:function(f,g){var e=this;e.elem=g;e.$elem=c(g);g.H5Form=e;e.options=c.extend({},c.fn.h5f.options,f);e.field=a.createElement("input");e.checkSupport(e);if(g.nodeName.toLowerCase()==="form"){e.bindWithForm(e.elem,e.$elem)}},bindWithForm:function(k,i){var h=this,e=!!i.attr("novalidate"),l=k.elements,g=l.length;if(h.options.formValidationEvent==="onSubmit"){i.on("submit",function(m){var f=this.H5Form.donotValidate!=d?this.H5Form.donotValidate:false;if(!f&&!e&&!h.validateForm(h)){m.preventDefault();this.donotValidate=false}else{i.find(":input").each(function(){h.placeholder(h,this,"submit")})}})}i.on("focusout focusin",function(f){h.placeholder(h,f.target,f.type)});i.on("focusout change",h.validateField);i.find("fieldset").on("change",function(){h.validateField(this)});if(!h.browser.isFormnovalidateNative){i.find(":submit[formnovalidate]").on("click",function(){h.donotValidate=true})}while(g--){var j=l[g];h.polyfill(j);h.autofocus(h,j)}},polyfill:function(f){if(f.nodeName.toLowerCase()==="form"){return true}var e=f.form.H5Form;e.placeholder(e,f);e.numberType(e,f)},checkSupport:function(e){e.browser={};e.browser.isRequiredNative=!!("required"in e.field);e.browser.isPatternNative=!!("pattern"in e.field);e.browser.isPlaceholderNative=!!("placeholder"in e.field);e.browser.isAutofocusNative=!!("autofocus"in e.field);e.browser.isFormnovalidateNative=!!("formnovalidate"in e.field);e.field.setAttribute("type","email");e.browser.isEmailNative=(e.field.type=="email");e.field.setAttribute("type","url");e.browser.isUrlNative=(e.field.type=="url");e.field.setAttribute("type","number");e.browser.isNumberNative=(e.field.type=="number");e.field.setAttribute("type","range");e.browser.isRangeNative=(e.field.type=="range")},validateForm:function(){var g=this,l=g.elem,m=l.elements,e=m.length,h=true;l.isValid=true;for(var j=0;j<e;j++){var k=m[j];k.isRequired=!!k.required;k.isDisabled=!!k.disabled;if(!k.isDisabled){h=g.validateField(k);if(l.isValid&&!h){g.setFocusOn(k)}l.isValid=h&&l.isValid}}if(g.options.doRenderMessage){g.renderErrorMessages(g,l)}return l.isValid},validateField:function(m){var j=m.target||m;if(j.form===d){return null}var h=j.form.H5Form,g=c(j),l=false,k=!!(c(j).attr("required")),f=!!(g.attr("disabled"));if(!j.isDisabled){l=!h.browser.isRequiredNative&&k&&h.isValueMissing(h,j);isPatternMismatched=!h.browser.isPatternNative&&h.matchPattern(h,j)}j.validityState={valueMissing:l,patterMismatch:isPatternMismatched,valid:(j.isDisabled||!(l||isPatternMismatched))};if(!h.browser.isRequiredNative){if(j.validityState.valueMissing){g.addClass(h.options.requiredClass)}else{g.removeClass(h.options.requiredClass)}}if(!h.browser.isPatternNative){if(j.validityState.patterMismatch){g.addClass(h.options.patternClass)}else{g.removeClass(h.options.patternClass)}}if(!j.validityState.valid){g.addClass(h.options.invalidClass);var i=h.findLabel(g);i.addClass(h.options.invalidClass);i.attr("aria-invalid","true")}else{g.removeClass(h.options.invalidClass);var i=h.findLabel(g);i.removeClass(h.options.invalidClass);i.attr("aria-invalid","false")}return j.validityState.valid},isValueMissing:function(o,j){var g=c(j),k=/^(input|textarea|select)$/i,m=/^submit$/i,h=g.val(),n=j.type!==d?j.type:j.tagName.toLowerCase(),f=/^(checkbox|radio|fieldset)$/i;if(!f.test(n)&&!m.test(n)){if(h===""){return true}else{if(!o.browser.isPlaceholderNative&&g.hasClass(o.options.placeholderClass)){return true}}}else{if(f.test(n)){if(n==="checkbox"){return!g.is(":checked")}else{var e;if(n==="fieldset"){e=g.find("input")}else{e=a.getElementsByName(j.name)}for(var l=0;l<e.length;l++){if(c(e[l]).is(":checked")){return false}}return true}}}return false},matchPattern:function(f,k){var e=c(k),m=!f.browser.isPlaceholderNative&&e.attr("placeholder")&&e.hasClass(f.options.placeholderClass)?"":e.attr("value"),l=e.attr("pattern"),h=e.attr("type");if(m!==""){if(h==="email"){var j=true;if(e.attr("multiple")!==d){m=m.split(f.options.mutipleDelimiter);for(var g=0;g<m.length;g++){j=f.options.emailPatt.test(m[g].replace(/[ ]*/g,""));if(!j){return true}}}else{return!f.options.emailPatt.test(m)}}else{if(h==="url"){return!f.options.urlPatt.test(m)}else{if(h==="text"){if(l!==d){usrPatt=new RegExp("^(?:"+l+")$");return!usrPatt.test(m)}}}}}return false},placeholder:function(l,h,f){var g=c(h),k={placeholder:g.attr("placeholder")},m=/^(focusin|submit)$/i,i=/^(input|textarea)$/i,j=/^password$/i,e=l.browser.isPlaceholderNative;if(!e&&i.test(h.nodeName)&&!j.test(h.type)&&k.placeholder!==d){if(h.value===""&&!m.test(f)){h.value=k.placeholder;g.addClass(l.options.placeholderClass)}else{if(h.value===k.placeholder&&m.test(f)){h.value="";g.removeClass(l.options.placeholderClass)}}}},numberType:function(p,h){var f=c(h);node=/^input$/i,type=f.attr("type");if(node.test(h.nodeName)&&((type=="number"&&!p.browser.isNumberNative)||(type=="range"&&!p.browser.isRangeNative))){var k=parseInt(f.attr("min")),n=parseInt(f.attr("max")),g=parseInt(f.attr("step")),o=parseInt(f.attr("value")),l=f.prop("attributes"),j=c("<select>"),e;k=isNaN(k)?-100:k;for(var m=k;m<=n;m+=g){e=c("<option>").attr("value",m).text(m);if(o==m||(o>m&&o<m+g)){e.attr("selected","")}j.append(e)}c.each(l,function(){j.attr(this.name,this.value)});f.replaceWith(j)}},autofocus:function(g,j){var f=c(j),h=!!f.attr("autofocus"),i=/^(input|textarea|select|fieldset)$/i,k=/^submit$/i,e=g.browser.isAutofocusNative;if(!e&&i.test(j.nodeName)&&!k.test(j.type)&&h){c(a).ready(function(){g.setFocusOn(j)})}},findLabel:function(g){var e=c('label[for="'+g.attr("id")+'"]');if(e.length<=0){var h=g.parent(),f=h.get(0).tagName.toLowerCase();if(f=="label"){e=h}}return e},setFocusOn:function(e){if(e.tagName.toLowerCase()==="fieldset"){c(e).find(":first").focus()}else{c(e).focus()}},renderErrorMessages:function(i,k){var l=k.elements,h=l.length,j={};j.errors=new Array();while(h--){var g=c(l[h]),e=i.findLabel(g);if(g.hasClass(i.options.requiredClass)){j.errors[h]=e.text().replace("*","")+i.options.requiredMessage}if(g.hasClass(i.options.patternClass)){j.errors[h]=e.text().replace("*","")+i.options.patternMessage}}if(j.errors.length>0){Joomla.renderMessages(j)}}};c.fn.h5f=function(e){return this.each(function(){var f=Object.create(b);f.init(e,this)})};c.fn.h5f.options={invalidClass:"invalid",requiredClass:"required",requiredMessage:" is required.",placeholderClass:"placeholder",patternClass:"pattern",patternMessage:" doesn't match pattern.",doRenderMessage:false,formValidationEvent:"onSubmit",emailPatt:/^[a-zA-Z0-9.!#$%&‚Äô*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/,urlPatt:/[a-z][\-\.+a-z]*:\/\//i};c(function(){c("form").h5f({doRenderMessage:true,requiredClass:"musthavevalue"})})})(jQuery,document);