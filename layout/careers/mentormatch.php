<?php
	ini_set("include_path", ".:../:./includes:../includes");
	$pageTemplate = "interior";
	$pageTitle = "Mentoring";
	// $metaDesc = "";
	$ogTitle = "Mentor Match via Baltimore Women in Tech";
	// $ogType = "article";
	$ogImage = "http://baltimorewomenintech.com/images/bwit_logotext_li.png";
	$ogURL = "http://baltimorewomenintech.com/careers/mentormatch/";
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
				<article id="GFormMentor">
					<header class="articleHeader">
						<h1 class="articleHeadline">Mentoring Matching Form</h1>
					</header>
					<div class="articleContent">
					<div itemscope="" itemtype="http://schema.org/CreativeWork/FormObject">
					<meta itemprop="name" content="Mentoring Matching Form">

					<meta itemprop="url" content="https://docs.google.com/forms/d/1eykz1TYBfl2GEICMCzEqP4OY1L2QuewPHSP8QfHhFdU/viewform">
					<meta itemprop="embedUrl" content="https://docs.google.com/forms/d/1eykz1TYBfl2GEICMCzEqP4OY1L2QuewPHSP8QfHhFdU/viewform?embedded=true">

					<div class="ss-form-container"><div class="ss-header-image-container"><div class="ss-header-image-image"><div class="ss-header-image-sizer"></div></div></div>
					<div class="ss-top-of-page"><div class="ss-form-heading">
					<div class="ss-required-asterisk" aria-hidden="true">* Required</div></div></div>
					<div class="ss-form"><form action="https://docs.google.com/forms/d/1eykz1TYBfl2GEICMCzEqP4OY1L2QuewPHSP8QfHhFdU/formResponse" method="POST" id="ss-form" target="_blank" onsubmit=""><ol role="list" class="ss-question-list" style="padding-left: 0">
					<div class="ss-form-question errorbox-good" role="listitem">
					<div dir="auto" class="ss-item ss-item-required ss-text"><div class="ss-form-entry">
					<label class="ss-q-item-label" for="entry_490239661"><div class="ss-q-title">First name
					<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
					<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
					<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
					<input type="text" name="entry.490239661" value="" class="ss-q-short" id="entry_490239661" dir="auto" aria-label="First name  " aria-required="true" required="" title="">
					<div class="error-message" id="775371283_errorMessage"></div>
					<div class="required-message">This is a required question</div>
					</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
					<div dir="auto" class="ss-item ss-item-required ss-text"><div class="ss-form-entry">
					<label class="ss-q-item-label" for="entry_207519935"><div class="ss-q-title">Last name
					<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
					<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
					<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
					<input type="text" name="entry.207519935" value="" class="ss-q-short" id="entry_207519935" dir="auto" aria-label="Last name  " aria-required="true" required="" title="">
					<div class="error-message" id="881405585_errorMessage"></div>
					<div class="required-message">This is a required question</div>
					</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
					<div dir="auto" class="ss-item ss-item-required ss-checkbox"><div class="ss-form-entry">
					<label class="ss-q-item-label" for="entry_1556930613"><div class="ss-q-title">Are you looking to be a mentor and/or mentee?
					<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
					<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
					<div class="ss-q-help ss-secondary-text" dir="auto">It's great to be both!</div></label>

					<ul class="ss-choices ss-choices-required" role="group" aria-label="Are you looking to be a mentor and/or mentee? It's great to be both! "><li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1581094433" value="Mentor" id="group_1581094433_1" role="checkbox" class="ss-q-checkbox" aria-required="true"></span>
					<span class="ss-choice-label">Mentor</span>
					</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.1581094433" value="Mentee" id="group_1581094433_2" role="checkbox" class="ss-q-checkbox" aria-required="true"></span>
					<span class="ss-choice-label">Mentee</span>
					</label></li></ul>
					<div class="error-message" id="1556930613_errorMessage"></div>
					<div class="required-message">This is a required question</div></div></div></div> <div class="errorbox-good" role="listitem">
					<div dir="auto" class="ss-item  ss-section-header"><div class="ss-form-entry">
					<h2 class="ss-section-title">Your Contact Info</h2>
					<div class="ss-section-description ss-no-ignore-whitespace"></div>
					</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
					<div dir="auto" class="ss-item ss-item-required ss-text"><div class="ss-form-entry">
					<label class="ss-q-item-label" for="entry_1599897104"><div class="ss-q-title">Email 
					<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
					<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
					<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
					<input type="email" name="entry.1599897104" value="" class="ss-q-short" id="entry_1599897104" dir="auto" aria-label="Email   Must be a valid email address" aria-required="true" required="" title="Must be a valid email address">
					<div class="error-message" id="608004881_errorMessage">Must be a valid email address</div>
					<div class="required-message">This is a required question</div>
					</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
					<div dir="auto" class="ss-item  ss-text"><div class="ss-form-entry">
					<label class="ss-q-item-label" for="entry_1133634673"><div class="ss-q-title">Phone number
					</div>
					<div class="ss-q-help ss-secondary-text" dir="auto">optional</div></label>
					<input type="text" name="entry.1133634673" value="" class="ss-q-short" id="entry_1133634673" dir="auto" aria-label="Phone number optional " title="">
					<div class="error-message" id="1550350937_errorMessage"></div>
					<div class="required-message">This is a required question</div>
					</div></div></div> <div class="errorbox-good" role="listitem">
					<div dir="auto" class="ss-item  ss-section-header"><div class="ss-form-entry">
					<h2 class="ss-section-title">For Those Currently Employed</h2>
					<div class="ss-section-description ss-no-ignore-whitespace"></div>
					</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
					<div dir="auto" class="ss-item  ss-text"><div class="ss-form-entry">
					<label class="ss-q-item-label" for="entry_735541560"><div class="ss-q-title">Your job title
					</div>
					<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
					<input type="text" name="entry.735541560" value="" class="ss-q-short" id="entry_735541560" dir="auto" aria-label="Your job title  " title="">
					<div class="error-message" id="534602054_errorMessage"></div>
					<div class="required-message">This is a required question</div>
					</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
					<div dir="auto" class="ss-item  ss-text"><div class="ss-form-entry">
					<label class="ss-q-item-label" for="entry_239064049"><div class="ss-q-title">Your current employer
					</div>
					<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
					<input type="text" name="entry.239064049" value="" class="ss-q-short" id="entry_239064049" dir="auto" aria-label="Your current employer  " title="">
					<div class="error-message" id="1868895659_errorMessage"></div>
					<div class="required-message">This is a required question</div>
					</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
					<div dir="auto" class="ss-item  ss-text"><div class="ss-form-entry">
					<label class="ss-q-item-label" for="entry_1298564097"><div class="ss-q-title">Total years of experience
					</div>
					<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
					<input type="text" name="entry.1298564097" value="" class="ss-q-short" id="entry_1298564097" dir="auto" aria-label="Total years of experience  " title="">
					<div class="error-message" id="451844731_errorMessage"></div>
					<div class="required-message">This is a required question</div>
					</div></div></div> <div class="errorbox-good" role="listitem">
					<div dir="auto" class="ss-item  ss-section-header"><div class="ss-form-entry">
					<h2 class="ss-section-title">For Those Currently Enrolled in School</h2>
					<div class="ss-section-description ss-no-ignore-whitespace"></div>
					</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
					<div dir="auto" class="ss-item  ss-text"><div class="ss-form-entry">
					<label class="ss-q-item-label" for="entry_900453470"><div class="ss-q-title">Your major
					</div>
					<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
					<input type="text" name="entry.900453470" value="" class="ss-q-short" id="entry_900453470" dir="auto" aria-label="Your major  " title="">
					<div class="error-message" id="565683422_errorMessage"></div>
					<div class="required-message">This is a required question</div>
					</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
					<div dir="auto" class="ss-item  ss-text"><div class="ss-form-entry">
					<label class="ss-q-item-label" for="entry_1464598516"><div class="ss-q-title">Your school
					</div>
					<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
					<input type="text" name="entry.1464598516" value="" class="ss-q-short" id="entry_1464598516" dir="auto" aria-label="Your school  " title="">
					<div class="error-message" id="1437326978_errorMessage"></div>
					<div class="required-message">This is a required question</div>
					</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
					<div dir="auto" class="ss-item  ss-select"><div class="ss-form-entry">
					<label class="ss-q-item-label" for="entry_1511470199"><div class="ss-q-title">Anticipated graduation date
					</div>
					<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
					<select name="entry.1511470199" id="entry_1511470199" aria-label="Anticipated graduation date  "><option value=""></option>
					<option value="2015">2015</option> <option value="2016">2016</option> <option value="2017">2017</option> <option value="2018">2018</option> <option value="2019">2019</option> <option value="2020">2020</option></select>
					<div class="required-message">This is a required question</div></div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
					<div dir="auto" class="ss-item ss-item-required ss-paragraph-text"><div class="ss-form-entry">
					<label class="ss-q-item-label" for="entry_695687783"><div class="ss-q-title">Describe your technology skills.
					<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
					<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
					<div class="ss-q-help ss-secondary-text" dir="auto">(example: java, networking, testing, wordpress, project management, excel macro wizard)</div></label>
					<textarea name="entry.695687783" rows="8" cols="0" class="ss-q-long" id="entry_695687783" dir="auto" aria-label="Describe your technology skills. (example: java, networking, testing, wordpress, project management, excel macro wizard) " aria-required="true" required=""></textarea>
					<div class="error-message" id="321852830_errorMessage"></div>
					<div class="required-message">This is a required question</div>
					</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
					<div dir="auto" class="ss-item ss-item-required ss-paragraph-text"><div class="ss-form-entry">
					<label class="ss-q-item-label" for="entry_1056130825"><div class="ss-q-title">What would you like to get out of this?
					<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
					<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
					<div class="ss-q-help ss-secondary-text" dir="auto">If you want to be matched with both a mentor AND a mentoree, list your expectations for both roles.</div></label>
					<textarea name="entry.1056130825" rows="8" cols="0" class="ss-q-long" id="entry_1056130825" dir="auto" aria-label="What would you like to get out of this? If you want to be matched with both a mentor AND a mentoree, list your expectations for both roles. " aria-required="true" required=""></textarea>
					<div class="error-message" id="1166112955_errorMessage"></div>
					<div class="required-message">This is a required question</div>
					</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
					<div dir="auto" class="ss-item ss-item-required ss-paragraph-text"><div class="ss-form-entry">
					<label class="ss-q-item-label" for="entry_1108650922"><div class="ss-q-title">What skills and/or qualities are important to you in a mentor and/or a mentee?
					<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
					<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
					<div class="ss-q-help ss-secondary-text" dir="auto">(example: a leader who has a software development background, a recent college grad)</div></label>
					<textarea name="entry.1108650922" rows="8" cols="0" class="ss-q-long" id="entry_1108650922" dir="auto" aria-label="What skills and/or qualities are important to you in a mentor and/or a mentee? (example: a leader who has a software development background, a recent college grad) " aria-required="true" required=""></textarea>
					<div class="error-message" id="78066508_errorMessage"></div>
					<div class="required-message">This is a required question</div>
					</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
					<div dir="auto" class="ss-item ss-item-required ss-paragraph-text"><div class="ss-form-entry">
					<label class="ss-q-item-label" for="entry_1242734903"><div class="ss-q-title">Share something else about yourself.
					<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
					<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
					<div class="ss-q-help ss-secondary-text" dir="auto">What interests do you have outside of tech? Hobbies, groups you belong to or support? Sometimes having something else in common is a good way to spark initial conversation!</div></label>
					<textarea name="entry.1242734903" rows="8" cols="0" class="ss-q-long" id="entry_1242734903" dir="auto" aria-label="Share something else about yourself. What interests do you have outside of tech? Hobbies, groups you belong to or support? Sometimes having something else in common is a good way to spark initial conversation! " aria-required="true" required=""></textarea>
					<div class="error-message" id="1285716286_errorMessage"></div>
					<div class="required-message">This is a required question</div>
					</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
					<div dir="auto" class="ss-item ss-item-required ss-select"><div class="ss-form-entry">
					<label class="ss-q-item-label" for="entry_940716856"><div class="ss-q-title">What distance are you willing to travel to meet with your mentor/mentee?
					<label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
					<span class="ss-required-asterisk" aria-hidden="true">*</span></div>
					<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
					<select name="entry.940716856" id="entry_940716856" aria-label="What distance are you willing to travel to meet with your mentor/mentee?  " aria-required="true" required=""><option value=""></option>
					<option value="5 mi">5 mi</option> <option value="10 mi">10 mi</option> <option value="25 mi">25 mi</option> <option value="50 mi">50 mi</option></select>
					<div class="required-message">This is a required question</div></div></div></div>
					<input type="hidden" name="draftResponse" value="[,,&quot;-6602151936963741495&quot;]
					">
					<input type="hidden" name="pageHistory" value="0">

					<input type="hidden" name="fvv" value="0">


					<input type="hidden" name="fbzx" value="-6602151936963741495">

					<div class="ss-item ss-navigate"><table id="navigation-table"><tbody><tr><td class="ss-form-entry goog-inline-block" id="navigation-buttons" dir="ltr">
					<input type="submit" name="submit" value="Submit" id="ss-submit" class="jfk-button jfk-button-action ">
					</td>
					</tr></tbody></table></div></ol></form></div>


					<div id="docs-aria-speakable" class="docs-a11y-ariascreenreader-speakable docs-offscreen" aria-live="assertive" role="region" aria-atomic="" aria-relevant="additions">Screen reader support enabled. </div></div>


					<script type="text/javascript" src="https://docs.google.com/static/forms/client/js/1773870735-formviewer_prd.js"></script>
					<script type="text/javascript">H5F.setup(document.getElementById('ss-form'));
							  _initFormViewer(
								"[100,,[[[1599897104,[[2,102]\n]\n]\n]\n]\n]\n");</script></div>

					</div>
				</article>
			</main>

			<?php include "footer.php" ?>

		<?php include "footer-js.php" ?>
