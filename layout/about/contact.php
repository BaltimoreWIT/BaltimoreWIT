<?php
	ini_set("include_path", ".:../:./includes:../includes");
	$pageTemplate = "interior";
	$pageTitle = "Contact Us";
	// $metaDesc = "";
	$ogTitle = "Contact Baltimore Women in Tech";
	// $ogType = "article";
	$ogImage = "http://baltimorewit.org/images/bwit_logotext_li.png";
	$ogURL = "http://baltimorewit.org/about/contact";
	include "header.php";
?>

<script type="text/javascript">
/**
 * @license
 *
 * H5F 1.1.1
 * See https://github.com/ryanseddon/H5F/ for details.
 *
 * Copyright (c) 2013 Ryan Seddon
 *
 * Permission is hereby granted, free of charge, to any person
 * obtaining a copy of this software and associated documentation
 * files (the "Software"), to deal in the Software without
 * restriction, including without limitation the rights to use,
 * copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following
 * conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 * OTHER DEALINGS IN THE SOFTWARE.
 */
	(function(e,t){"function"==typeof define&&define.amd?define(t):"object"==typeof module&&module.exports?module.exports=t():e.H5F=t()})(this,function(){var e,t,a,i,n,r,l,s,o,u,d,c,v,p,f,m,b,h,g,y,w,C,N,A,E,$,x=document,k=x.createElement("input"),q=/^[a-zA-Z0-9.!#$%&'*+-\/=?\^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/,M=/[a-z][\-\.+a-z]*:\/\//i,L=/^(input|select|textarea)$/i;return r=function(e,t){var a=!e.nodeType||!1,i={validClass:"valid",invalidClass:"error",requiredClass:"required",placeholderClass:"placeholder",onSubmit:Function.prototype,onInvalid:Function.prototype};if("object"==typeof t)for(var r in i)t[r]===void 0&&(t[r]=i[r]);if(n=t||i,a)for(var s=0,o=e.length;o>s;s++)l(e[s]);else l(e)},l=function(a){var i,r=a.elements,l=r.length,c=!!a.attributes.novalidate;if(g(a,"invalid",o,!0),g(a,"blur",o,!0),g(a,"input",o,!0),g(a,"keyup",o,!0),g(a,"focus",o,!0),g(a,"change",o,!0),g(a,"click",u,!0),g(a,"submit",function(i){return e=!0,t||c||a.checkValidity()?(n.onSubmit.call(a,i),void 0):(w(i),void 0)},!1),!v())for(a.checkValidity=function(){return d(a)};l--;)i=!!r[l].attributes.required,"fieldset"!==r[l].nodeName.toLowerCase()&&s(r[l])},s=function(e){var t=e,a=h(t),n={type:t.getAttribute("type"),pattern:t.getAttribute("pattern"),placeholder:t.getAttribute("placeholder")},r=/^(email|url)$/i,l=/^(input|keyup)$/i,s=r.test(n.type)?n.type:n.pattern?n.pattern:!1,o=p(t,s),u=m(t,"step"),v=m(t,"min"),b=m(t,"max"),g=!(""===t.validationMessage||void 0===t.validationMessage);t.checkValidity=function(){return d.call(this,t)},t.setCustomValidity=function(e){c.call(t,e)},t.validity={valueMissing:a,patternMismatch:o,rangeUnderflow:v,rangeOverflow:b,stepMismatch:u,customError:g,valid:!(a||o||u||v||b||g)},n.placeholder&&!l.test(i)&&f(t)},o=function(e){var t=C(e)||e,a=/^(input|keyup|focusin|focus|change)$/i,r=/^(submit|image|button|reset)$/i,l=/^(checkbox|radio)$/i,u=!0;!L.test(t.nodeName)||r.test(t.type)||r.test(t.nodeName)||(i=e.type,v()||s(t),t.validity.valid&&(""!==t.value||l.test(t.type))||t.value!==t.getAttribute("placeholder")&&t.validity.valid?(A(t,[n.invalidClass,n.requiredClass]),N(t,n.validClass)):a.test(i)?t.validity.valueMissing&&A(t,[n.requiredClass,n.invalidClass,n.validClass]):t.validity.valueMissing?(A(t,[n.invalidClass,n.validClass]),N(t,n.requiredClass)):t.validity.valid||(A(t,[n.validClass,n.requiredClass]),N(t,n.invalidClass)),"input"===i&&u&&(y(t.form,"keyup",o,!0),u=!1))},d=function(t){var a,i,r,l,s,u=!1;if("form"===t.nodeName.toLowerCase()){a=t.elements;for(var d=0,c=a.length;c>d;d++)i=a[d],r=!!i.attributes.disabled,l=!!i.attributes.required,s=!!i.attributes.pattern,"fieldset"!==i.nodeName.toLowerCase()&&!r&&(l||s&&l)&&(o(i),i.validity.valid||u||(e&&i.focus(),u=!0,n.onInvalid.call(t,i)));return!u}return o(t),t.validity.valid},c=function(e){var t=this;t.validationMessage=e},u=function(e){var a=C(e);a.attributes.formnovalidate&&"submit"===a.type&&(t=!0)},v=function(){return E(k,"validity")&&E(k,"checkValidity")},p=function(e,t){if("email"===t)return!q.test(e.value);if("url"===t)return!M.test(e.value);if(t){var i=e.getAttribute("placeholder"),n=e.value;return a=RegExp("^(?:"+t+")$"),n===i?!1:""===n?!1:!a.test(e.value)}return!1},f=function(e){var t={placeholder:e.getAttribute("placeholder")},a=/^(focus|focusin|submit)$/i,r=/^(input|textarea)$/i,l=/^password$/i,s=!!("placeholder"in k);s||!r.test(e.nodeName)||l.test(e.type)||(""!==e.value||a.test(i)?e.value===t.placeholder&&a.test(i)&&(e.value="",A(e,n.placeholderClass)):(e.value=t.placeholder,g(e.form,"submit",function(){i="submit",f(e)},!0),N(e,n.placeholderClass)))},m=function(e,t){var a=parseInt(e.getAttribute("min"),10)||0,i=parseInt(e.getAttribute("max"),10)||!1,n=parseInt(e.getAttribute("step"),10)||1,r=parseInt(e.value,10),l=(r-a)%n;return h(e)||isNaN(r)?"number"===e.getAttribute("type")?!0:!1:"step"===t?e.getAttribute("step")?0!==l:!1:"min"===t?e.getAttribute("min")?a>r:!1:"max"===t?e.getAttribute("max")?r>i:!1:void 0},b=function(e){var t=!!e.attributes.required;return t?h(e):!1},h=function(e){var t=e.getAttribute("placeholder"),a=/^(checkbox|radio)$/i,i=!!e.attributes.required;return!(!i||""!==e.value&&e.value!==t&&(!a.test(e.type)||$(e)))},g=function(e,t,a,i){E(window,"addEventListener")?e.addEventListener(t,a,i):E(window,"attachEvent")&&window.event!==void 0&&("blur"===t?t="focusout":"focus"===t&&(t="focusin"),e.attachEvent("on"+t,a))},y=function(e,t,a,i){E(window,"removeEventListener")?e.removeEventListener(t,a,i):E(window,"detachEvent")&&window.event!==void 0&&e.detachEvent("on"+t,a)},w=function(e){e=e||window.event,e.stopPropagation&&e.preventDefault?(e.stopPropagation(),e.preventDefault()):(e.cancelBubble=!0,e.returnValue=!1)},C=function(e){return e=e||window.event,e.target||e.srcElement},N=function(e,t){var a;e.className?(a=RegExp("(^|\\s)"+t+"(\\s|$)"),a.test(e.className)||(e.className+=" "+t)):e.className=t},A=function(e,t){var a,i,n="object"==typeof t?t.length:1,r=n;if(e.className)if(e.className===t)e.className="";else for(;n--;)a=RegExp("(^|\\s)"+(r>1?t[n]:t)+"(\\s|$)"),i=e.className.match(a),i&&3===i.length&&(e.className=e.className.replace(a,i[1]&&i[2]?" ":""))},E=function(e,t){var a=typeof e[t],i=RegExp("^function|object$","i");return!!(i.test(a)&&e[t]||"unknown"===a)},$=function(e){for(var t=document.getElementsByName(e.name),a=0;t.length>a;a++)if(t[a].checked)return!0;return!1},{setup:r}});
</script>

<main>
<article id="GFormContact">
	<header class="articleHeader">
		<h1 class="articleHeadline">Contact Us</h1>
	</header>
	<div class="articleContent">

		<div class="ss-form-container">
			<div class="ss-top-of-page"><div class="ss-form-heading">
			<div class="ss-required-asterisk" aria-hidden="true">* Required</div></div></div>
			<div class="ss-form"><form action="https://docs.google.com/forms/d/1QmJOBceMUNyJid13oxc_U1sM1qms75kSi319jZDbHD8/formResponse?embedded=true" method="POST" id="ss-form" target="_self" onsubmit=""><ol role="list" class="ss-question-list" style="padding-left: 0">
				<div class="ss-form-question errorbox-good" role="listitem">
					<div dir="auto" class="ss-item ss-item-required ss-text"><div class="ss-form-entry">
						<label class="ss-q-item-label" for="entry_1297232259"><div class="ss-q-title">Your Name
							<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
							<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
						<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
						<input type="text" name="entry.1297232259" value="" class="ss-q-short" id="entry_1297232259" dir="auto" aria-label="Your Name  " aria-required="true" required="" title="">
					<div class="error-message" id="843834026_errorMessage"></div>
				<div class="required-message">This is a required question</div>
			</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
			<div dir="auto" class="ss-item ss-item-required ss-text"><div class="ss-form-entry">
				<label class="ss-q-item-label" for="entry_695654500"><div class="ss-q-title">Your Email Address
					<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
					<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
				<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
				<input type="email" name="entry.695654500" value="" class="ss-q-short" id="entry_695654500" dir="auto" aria-label="Your Email Address  Must be a valid email address" aria-required="true" required="" title="Must be a valid email address">
			<div class="error-message" id="245869338_errorMessage">Must be a valid email address</div>
			<div class="required-message">This is a required question</div>
			</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
			<div dir="auto" class="ss-item ss-item-required ss-paragraph-text"><div class="ss-form-entry">
				<label class="ss-q-item-label" for="entry_1332390857"><div class="ss-q-title">Your Comment or Question
					<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
					<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
				<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
				<textarea name="entry.1332390857" rows="8" cols="0" class="ss-q-long" id="entry_1332390857" dir="auto" aria-label="Your Comment or Question  " aria-required="true" required=""></textarea>
			<div class="error-message" id="785344622_errorMessage"></div>
			<div class="required-message">This is a required question</div>
			</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
			<div dir="auto" class="ss-item  ss-checkbox"><div class="ss-form-entry">
			<label class="ss-q-item-label" for="entry_427165807"><div class="ss-q-title">
			</div>
			<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
			<ul class="ss-choices" role="group" aria-label="  "><li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1742539628" value="Yes, add me to the Baltimore Women in Tech Newsletter" id="group_1742539628_1" role="checkbox" class="ss-q-checkbox"></span>
			<span class="ss-choice-label">Yes, add me to the Baltimore Women in Tech Newsletter</span>
			</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1742539628" value="I am interested in sponsorship opportunities" id="group_1742539628_2" role="checkbox" class="ss-q-checkbox"></span>
			<span class="ss-choice-label">I am interested in sponsorship opportunities</span>
			</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1742539628" value="I run a local group and am interested in becoming a member of your network" id="group_1742539628_3" role="checkbox" class="ss-q-checkbox"></span>
			<span class="ss-choice-label">I run a local group and am interested in becoming a member of your network</span>
			</label></li></ul>
			<div class="error-message" id="427165807_errorMessage"></div>
			<div class="required-message">This is a required question</div></div></div></div>
			<input type="hidden" name="draftResponse" value="[,,&quot;-3068917282449369263&quot;]
			">
			<input type="hidden" name="pageHistory" value="0">
			<input type="hidden" name="fvv" value="0">
			<input type="hidden" name="fbzx" value="-3068917282449369263">
			<div class="ss-item ss-navigate"><table id="navigation-table"><tbody><tr><td class="ss-form-entry goog-inline-block" id="navigation-buttons" dir="ltr">
			<input type="submit" name="submit" value="Submit" id="ss-submit" class="jfk-button jfk-button-action ">
			</td>
			</tr></tbody></table></div></ol></form></div>
			<div id="docs-aria-speakable" class="docs-a11y-ariascreenreader-speakable docs-offscreen" aria-live="assertive" role="region" aria-atomic="" aria-relevant="additions">Screen reader support enabled. </div>
		</div>
		<script type='text/javascript' src='https://docs.google.com/static/forms/client/js/4252569003-formviewer_prd.js'></script>
		<script type="text/javascript">H5F.setup(document.getElementById('ss-form'));
		_initFormViewer("[100,,[[[695654500,[[2,102,,\x22\x22]\n]\n]\n]\n]\n]\n", true);</script>
	</div><!-- .articleContent -->
</article>
</main>
<?php include "footer.php" ?>
<?php include "footer-js.php" ?>