
<!doctype html>
<html lang="vi">
<head><meta charset="UTF-8"><script>if(navigator.userAgent.match(/MSIE|Internet Explorer/i)||navigator.userAgent.match(/Trident\/7\..*?rv:11/i)){var href=document.location.href;if(!href.match(/[?&]nowprocket/)){if(href.indexOf("?")==-1){if(href.indexOf("#")==-1){document.location.href=href+"?nowprocket=1"}else{document.location.href=href.replace("#","?nowprocket=1#")}}else{if(href.indexOf("#")==-1){document.location.href=href+"&nowprocket=1"}else{document.location.href=href.replace("#","&nowprocket=1#")}}}}</script><script>class RocketLazyLoadScripts{constructor(){this.triggerEvents=["keydown","mousedown","mousemove","touchmove","touchstart","touchend","wheel"],this.userEventHandler=this._triggerListener.bind(this),this.touchStartHandler=this._onTouchStart.bind(this),this.touchMoveHandler=this._onTouchMove.bind(this),this.touchEndHandler=this._onTouchEnd.bind(this),this.clickHandler=this._onClick.bind(this),this.interceptedClicks=[],window.addEventListener("pageshow",(e=>{this.persisted=e.persisted})),window.addEventListener("DOMContentLoaded",(()=>{this._preconnect3rdParties()})),this.delayedScripts={normal:[],async:[],defer:[]},this.allJQueries=[]}_addUserInteractionListener(e){document.hidden?e._triggerListener():(this.triggerEvents.forEach((t=>window.addEventListener(t,e.userEventHandler,{passive:!0}))),window.addEventListener("touchstart",e.touchStartHandler,{passive:!0}),window.addEventListener("mousedown",e.touchStartHandler),document.addEventListener("visibilitychange",e.userEventHandler))}_removeUserInteractionListener(){this.triggerEvents.forEach((e=>window.removeEventListener(e,this.userEventHandler,{passive:!0}))),document.removeEventListener("visibilitychange",this.userEventHandler)}_onTouchStart(e){"HTML"!==e.target.tagName&&(window.addEventListener("touchend",this.touchEndHandler),window.addEventListener("mouseup",this.touchEndHandler),window.addEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.addEventListener("mousemove",this.touchMoveHandler),e.target.addEventListener("click",this.clickHandler),this._renameDOMAttribute(e.target,"onclick","rocket-onclick"))}_onTouchMove(e){window.removeEventListener("touchend",this.touchEndHandler),window.removeEventListener("mouseup",this.touchEndHandler),window.removeEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.removeEventListener("mousemove",this.touchMoveHandler),e.target.removeEventListener("click",this.clickHandler),this._renameDOMAttribute(e.target,"rocket-onclick","onclick")}_onTouchEnd(e){window.removeEventListener("touchend",this.touchEndHandler),window.removeEventListener("mouseup",this.touchEndHandler),window.removeEventListener("touchmove",this.touchMoveHandler,{passive:!0}),window.removeEventListener("mousemove",this.touchMoveHandler)}_onClick(e){e.target.removeEventListener("click",this.clickHandler),this._renameDOMAttribute(e.target,"rocket-onclick","onclick"),this.interceptedClicks.push(e),e.preventDefault(),e.stopPropagation(),e.stopImmediatePropagation()}_replayClicks(){window.removeEventListener("touchstart",this.touchStartHandler,{passive:!0}),window.removeEventListener("mousedown",this.touchStartHandler),this.interceptedClicks.forEach((e=>{e.target.dispatchEvent(new MouseEvent("click",{view:e.view,bubbles:!0,cancelable:!0}))}))}_renameDOMAttribute(e,t,n){e.hasAttribute&&e.hasAttribute(t)&&(event.target.setAttribute(n,event.target.getAttribute(t)),event.target.removeAttribute(t))}_triggerListener(){this._removeUserInteractionListener(this),"loading"===document.readyState?document.addEventListener("DOMContentLoaded",this._loadEverythingNow.bind(this)):this._loadEverythingNow()}_preconnect3rdParties(){let e=[];document.querySelectorAll("script[type=rocketlazyloadscript]").forEach((t=>{if(t.hasAttribute("src")){const n=new URL(t.src).origin;n!==location.origin&&e.push({src:n,crossOrigin:t.crossOrigin||"module"===t.getAttribute("data-rocket-type")})}})),e=[...new Map(e.map((e=>[JSON.stringify(e),e]))).values()],this._batchInjectResourceHints(e,"preconnect")}async _loadEverythingNow(){this.lastBreath=Date.now(),this._delayEventListeners(),this._delayJQueryReady(this),this._handleDocumentWrite(),this._registerAllDelayedScripts(),this._preloadAllScripts(),await this._loadScriptsFromList(this.delayedScripts.normal),await this._loadScriptsFromList(this.delayedScripts.defer),await this._loadScriptsFromList(this.delayedScripts.async);try{await this._triggerDOMContentLoaded(),await this._triggerWindowLoad()}catch(e){}window.dispatchEvent(new Event("rocket-allScriptsLoaded")),this._replayClicks()}_registerAllDelayedScripts(){document.querySelectorAll("script[type=rocketlazyloadscript]").forEach((e=>{e.hasAttribute("src")?e.hasAttribute("async")&&!1!==e.async?this.delayedScripts.async.push(e):e.hasAttribute("defer")&&!1!==e.defer||"module"===e.getAttribute("data-rocket-type")?this.delayedScripts.defer.push(e):this.delayedScripts.normal.push(e):this.delayedScripts.normal.push(e)}))}async _transformScript(e){return await this._littleBreath(),new Promise((t=>{const n=document.createElement("script");[...e.attributes].forEach((e=>{let t=e.nodeName;"type"!==t&&("data-rocket-type"===t&&(t="type"),n.setAttribute(t,e.nodeValue))})),e.hasAttribute("src")?(n.addEventListener("load",t),n.addEventListener("error",t)):(n.text=e.text,t());try{e.parentNode.replaceChild(n,e)}catch(e){t()}}))}async _loadScriptsFromList(e){const t=e.shift();return t?(await this._transformScript(t),this._loadScriptsFromList(e)):Promise.resolve()}_preloadAllScripts(){this._batchInjectResourceHints([...this.delayedScripts.normal,...this.delayedScripts.defer,...this.delayedScripts.async],"preload")}_batchInjectResourceHints(e,t){var n=document.createDocumentFragment();e.forEach((e=>{if(e.src){const i=document.createElement("link");i.href=e.src,i.rel=t,"preconnect"!==t&&(i.as="script"),e.getAttribute&&"module"===e.getAttribute("data-rocket-type")&&(i.crossOrigin=!0),e.crossOrigin&&(i.crossOrigin=e.crossOrigin),n.appendChild(i)}})),document.head.appendChild(n)}_delayEventListeners(){let e={};function t(t,n){!function(t){function n(n){return e[t].eventsToRewrite.indexOf(n)>=0?"rocket-"+n:n}e[t]||(e[t]={originalFunctions:{add:t.addEventListener,remove:t.removeEventListener},eventsToRewrite:[]},t.addEventListener=function(){arguments[0]=n(arguments[0]),e[t].originalFunctions.add.apply(t,arguments)},t.removeEventListener=function(){arguments[0]=n(arguments[0]),e[t].originalFunctions.remove.apply(t,arguments)})}(t),e[t].eventsToRewrite.push(n)}function n(e,t){let n=e[t];Object.defineProperty(e,t,{get:()=>n||function(){},set(i){e["rocket"+t]=n=i}})}t(document,"DOMContentLoaded"),t(window,"DOMContentLoaded"),t(window,"load"),t(window,"pageshow"),t(document,"readystatechange"),n(document,"onreadystatechange"),n(window,"onload"),n(window,"onpageshow")}_delayJQueryReady(e){let t=window.jQuery;Object.defineProperty(window,"jQuery",{get:()=>t,set(n){if(n&&n.fn&&!e.allJQueries.includes(n)){n.fn.ready=n.fn.init.prototype.ready=function(t){e.domReadyFired?t.bind(document)(n):document.addEventListener("rocket-DOMContentLoaded",(()=>t.bind(document)(n)))};const t=n.fn.on;n.fn.on=n.fn.init.prototype.on=function(){if(this[0]===window){function e(e){return e.split(" ").map((e=>"load"===e||0===e.indexOf("load.")?"rocket-jquery-load":e)).join(" ")}"string"==typeof arguments[0]||arguments[0]instanceof String?arguments[0]=e(arguments[0]):"object"==typeof arguments[0]&&Object.keys(arguments[0]).forEach((t=>{delete Object.assign(arguments[0],{[e(t)]:arguments[0][t]})[t]}))}return t.apply(this,arguments),this},e.allJQueries.push(n)}t=n}})}async _triggerDOMContentLoaded(){this.domReadyFired=!0,await this._littleBreath(),document.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._littleBreath(),window.dispatchEvent(new Event("rocket-DOMContentLoaded")),await this._littleBreath(),document.dispatchEvent(new Event("rocket-readystatechange")),await this._littleBreath(),document.rocketonreadystatechange&&document.rocketonreadystatechange()}async _triggerWindowLoad(){await this._littleBreath(),window.dispatchEvent(new Event("rocket-load")),await this._littleBreath(),window.rocketonload&&window.rocketonload(),await this._littleBreath(),this.allJQueries.forEach((e=>e(window).trigger("rocket-jquery-load"))),await this._littleBreath();const e=new Event("rocket-pageshow");e.persisted=this.persisted,window.dispatchEvent(e),await this._littleBreath(),window.rocketonpageshow&&window.rocketonpageshow({persisted:this.persisted})}_handleDocumentWrite(){const e=new Map;document.write=document.writeln=function(t){const n=document.currentScript,i=document.createRange(),r=n.parentElement;let o=e.get(n);void 0===o&&(o=n.nextSibling,e.set(n,o));const s=document.createDocumentFragment();i.setStart(s,0),s.appendChild(i.createContextualFragment(t)),r.insertBefore(s,o)}}async _littleBreath(){Date.now()-this.lastBreath>45&&(await this._requestAnimFrame(),this.lastBreath=Date.now())}async _requestAnimFrame(){return document.hidden?new Promise((e=>setTimeout(e))):new Promise((e=>requestAnimationFrame(e)))}static run(){const e=new RocketLazyLoadScripts;e._addUserInteractionListener(e)}}RocketLazyLoadScripts.run();</script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

    <!-- This site is optimized with the Yoast SEO Premium plugin v20.7 (Yoast SEO v20.7) - https://yoast.com/wordpress/plugins/seo/ -->
    <title>Công Ty Tư vấn Du học New Ocean | Trung Tâm Tư Vấn Du Học</title>
    <link rel="stylesheet preload prefetch" as="style" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%20Condensed%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;subset=vietnamese&#038;display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%20Condensed%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;subset=vietnamese&#038;display=swap" media="print" onload="this.media='all'" /><noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%20Condensed%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;subset=vietnamese&#038;display=swap" /></noscript><style id="rocket-critical-css">.screen-reader-text{clip:rect(1px,1px,1px,1px);height:1px;overflow:hidden;position:absolute!important;width:1px;word-wrap:normal!important}.site-navigation{grid-area:nav-menu;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1}ul{box-sizing:border-box}:root{--wp--preset--font-size--normal:16px;--wp--preset--font-size--huge:42px}.screen-reader-text{border:0;clip:rect(1px,1px,1px,1px);clip-path:inset(50%);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;word-wrap:normal!important}@font-face{font-family:'Roboto';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fCRc4EsA.woff2) format('woff2');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:'Roboto';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fABc4EsA.woff2) format('woff2');unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Roboto';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fCBc4EsA.woff2) format('woff2');unicode-range:U+1F00-1FFF}@font-face{font-family:'Roboto';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fBxc4EsA.woff2) format('woff2');unicode-range:U+0370-03FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fCxc4EsA.woff2) format('woff2');unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Roboto';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fChc4EsA.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fBBc4.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu72xKOzY.woff2) format('woff2');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu5mxKOzY.woff2) format('woff2');unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu7mxKOzY.woff2) format('woff2');unicode-range:U+1F00-1FFF}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu4WxKOzY.woff2) format('woff2');unicode-range:U+0370-03FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu7WxKOzY.woff2) format('woff2');unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu7GxKOzY.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu4mxK.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Roboto';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fCRc4EsA.woff2) format('woff2');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:'Roboto';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fABc4EsA.woff2) format('woff2');unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Roboto';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fCBc4EsA.woff2) format('woff2');unicode-range:U+1F00-1FFF}@font-face{font-family:'Roboto';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fBxc4EsA.woff2) format('woff2');unicode-range:U+0370-03FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fCxc4EsA.woff2) format('woff2');unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Roboto';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fChc4EsA.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fBBc4.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfCRc4EsA.woff2) format('woff2');unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfABc4EsA.woff2) format('woff2');unicode-range:U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfCBc4EsA.woff2) format('woff2');unicode-range:U+1F00-1FFF}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfBxc4EsA.woff2) format('woff2');unicode-range:U+0370-03FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfCxc4EsA.woff2) format('woff2');unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+1EA0-1EF9,U+20AB}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfChc4EsA.woff2) format('woff2');unicode-range:U+0100-024F,U+0259,U+1E00-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:'Roboto';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmWUlfBBc4.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD}.arcuAnimated{animation-duration:1s;animation-fill-mode:both}@keyframes arcu_flipInY{from{transform:perspective(400px) rotate3d(0,1,0,90deg);animation-timing-function:ease-in;opacity:0}40%{transform:perspective(400px) rotate3d(0,1,0,-20deg);animation-timing-function:ease-in}60%{transform:perspective(400px) rotate3d(0,1,0,10deg);opacity:1}80%{transform:perspective(400px) rotate3d(0,1,0,-5deg)}to{transform:perspective(400px)}}.arcuAnimated.flipInY{-webkit-backface-visibility:visible!important;backface-visibility:visible!important;animation-name:arcu_flipInY}.arcu-text-left{text-align:left}.arcu-widget{opacity:0;line-height:1}.arcu-widget *{box-sizing:border-box}.arcu-widget .arcu-backdrop{position:fixed;top:0;left:0;bottom:0;right:0;background:rgba(0,0,0,0.2);z-index:0;opacity:0}.arcu-widget .arcu-online-badge{position:absolute;top:6px;right:6px;width:10px;height:10px;border-radius:50%;z-index:1}.arcu-widget .arcu-online-badge.online{background-color:#35ac19}.arcu-widget .arcu-unread-badge{display:flex;flex-flow:row wrap;-moz-box-pack:center;place-content:center;-moz-box-align:center;align-items:center;position:absolute;box-sizing:border-box;font-family:'Roboto',sans-serif,Arial;font-size:12px;min-width:20px;line-height:1;padding:0px 6px;height:20px;border-radius:10px;z-index:1;background-color:#CC0000;color:#FFF;top:1px;right:1px;font-weight:700;transform:scale(0)}.arcu-widget.left.arcu-message{left:20px;right:auto}.arcu-widget.left .arcu-message-button{right:auto;left:0}.arcu-widget.left .arcu-prompt{left:calc(100% + 10px);right:auto;transform-origin:0% 50%}.arcu-widget.left .arcu-prompt.arcu-prompt-top{left:0;right:auto}.arcu-widget.left .arcu-prompt.arcu-prompt-top:before{border-right:8px solid transparent;border-top:8px solid #FFFFFF;border-left:8px solid transparent;border-bottom:0 none;left:25px;right:auto}.arcu-widget.left .arcu-prompt:before{border-right:8px solid #FFF;border-top:8px solid transparent;border-left:8px solid transparent;border-bottom:8px solid transparent;right:auto;left:-15px}.arcu-widget.left .messangers-block{right:auto;left:0;-webkit-transform-origin:10% 105%;-ms-transform-origin:10% 105%;transform-origin:10% 105%}.arcu-widget.left .arcu-forms-container{left:0;right:auto}.arcu-widget.left .messangers-block::before,.arcu-widget.left .arcu-forms-container::before{left:25px;right:auto}.arcu-widget.active{opacity:1}.arcu-widget.arcu-message{z-index:1000000;right:20px;bottom:20px;position:fixed!important;height:70px}.arcu-widget .arcu-message-button{min-width:70px;padding-left:70px;z-index:1;height:70px;right:0;background-color:red;border-radius:50px;-webkit-box-sizing:border-box;box-sizing:border-box;text-align:center;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.arcu-widget .arcu-message-button .arcu-button-icon{position:absolute;left:0;right:0;width:70px;height:100%;-webkit-box-sizing:border-box;box-sizing:border-box;text-align:center;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.arcu-widget .arcu-message-button p{font-family:'Roboto',sans-serif,Arial;color:#fff;font-weight:700;font-size:10px;line-height:11px;margin:0}.arcu-widget .arcu-message-button .pulsation{width:100%;height:100%;background-color:red;border-radius:50px;position:absolute;left:0;top:0;bottom:0;right:0;margin:auto;z-index:-1;-webkit-transform:translate(0,0);-ms-transform:translate(0,0);transform:translate(0,0);-webkit-animation:arcu-pulse 2s infinite;animation:arcu-pulse 2s infinite}.arcu-widget .arcu-message-button .icons{background-color:#fff;width:44px;height:44px;border-radius:50px;position:absolute;overflow:hidden;top:50%;left:50%;margin-top:-22px;margin-left:-22px}.arcu-widget .arcu-message-button .static div{margin:auto}.arcu-widget .arcu-message-button .static .static-container{width:60px;height:60px;border-radius:50px;position:absolute;overflow:hidden;top:50%;left:50%;margin-top:-30px;margin-left:-30px;display:flex}.arcu-widget .arcu-message-button .form-icon{transform:scale(0)}.arcu-widget .arcu-message-button .form-icon svg{transform:scale(1.5)}.arcu-widget .arcu-message-button .static,.arcu-widget .arcu-message-button .form-icon{position:absolute;top:0;left:0;bottom:0;right:0;margin:0;padding:0;width:100%;height:100%;text-align:center;display:flex;flex:auto}.arcu-widget .arcu-message-button .static svg,.arcu-widget .arcu-message-button .form-icon svg{width:24px;height:24px;color:#FFFFFF;line-height:24px;font-size:24px;margin:auto}.arcu-widget .pulsation:nth-of-type(2n){-webkit-animation-delay:.5s;animation-delay:.5s}.arcu-widget .icons-line{top:10px;left:12px;display:-webkit-box;display:-ms-flexbox;display:flex;position:absolute;-webkit-animation-delay:0s;animation-delay:0s;-webkit-transform:translateX(30px);-ms-transform:translateX(30px);transform:translateX(30px);height:24px}.arcu-widget .icons-line span{display:inline-block;width:24px;height:24px;color:red}.arcu-widget .icons-line span svg{width:24px;height:24px}.arcu-widget .icons-line span{margin-right:40px}.arcu-widget .icons.arcu-hide{transform:scale(0);opacity:0}.arcu-widget .icons.arcu-hide .icons-line{transform:scale(0)}.arcu-widget .arcu-close{color:#FFFFFF}.arcu-widget .arcu-close svg{-webkit-transform:rotate(180deg) scale(0);-ms-transform:rotate(180deg) scale(0);transform:rotate(180deg) scale(0);display:block}.arcu-widget .arcu-prompt{display:-webkit-box;display:-ms-flexbox;display:flex}.arcu-widget .arcu-forms-container,.arcu-widget .messangers-block,.arcu-widget .arcu-prompt{background:#FFFFFF;box-shadow:0 0 40px rgba(0,0,0,0.2);width:300px;background-repeat:no-repeat;background-position:center;position:absolute;bottom:80px;right:0px;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start;padding:10px 0;-webkit-box-sizing:border-box;box-sizing:border-box;border-radius:7px;z-index:1000000;transform:scale(1);display:none}.arcu-widget .arcu-forms-container:before,.arcu-widget .messangers-block:before,.arcu-widget .arcu-prompt:before{position:absolute;bottom:-7px;right:25px;left:auto;display:inline-block!important;border-right:8px solid transparent;border-top:8px solid #FFFFFF;border-left:8px solid transparent;content:''}.arcu-widget .arcu-forms-container .arcu-form-container{display:none}.arcu-widget.arcu-fadeindown .arcu-forms-container,.arcu-widget.arcu-fadeindown .messangers-block,.arcu-widget.arcu-fadeindown .arcu-prompt{display:block;visibility:hidden;opacity:0;transform:translate3d(0,-20%,0)}.arcu-widget .arcu-prompt.arcu-prompt-top{right:0;max-width:260px;bottom:80px}.arcu-widget .arcu-prompt.arcu-prompt-top:before{bottom:-7px;right:25px;left:auto;border-right:8px solid transparent;border-top:8px solid #FFFFFF;border-left:8px solid transparent;border-bottom:0 none}.arcu-widget .messangers-block{display:block}.arcu-widget .messangers-block.has-header{padding-top:0}.arcu-widget .messangers-block .messangers-list-container{overflow:hidden}.arcu-widget .messangers-block .arcu-menu-header{padding:18px 15px;color:#FFFFFF;background:#787878;border-radius:7px 7px 0 0;font-family:'Roboto',sans-serif,Arial;margin-bottom:10px;font-size:17px;position:relative;line-height:1.4}.arcu-widget .messangers-block .arcu-menu-header .arcu-header-icon{position:absolute;width:42px;height:42px;left:11px;top:50%;margin-top:-21px}.arcu-widget .messangers-block .arcu-menu-header .arcu-header-icon .arcu-online-badge{height:11px;width:11px;border:2px solid red;bottom:-2px;right:3px;top:auto}.arcu-widget .messangers-block .arcu-menu-header .arcu-header-icon.arcu-bg-image{background-size:cover;border-radius:50%}.arcu-widget .messangers-block .arcu-menu-header.arcu-icon-left{position:relative;padding-left:68px}.arcu-widget .arcu-header-close{position:absolute;right:0;top:-30px;padding:0;margin:0;border:0 none;background:none;line-height:1;width:26px;height:26px;color:#FFFFFF;background:#787878;border-radius:50%;text-align:center}.arcu-widget .arcu-header-close svg{height:12px;width:12px;display:block;position:absolute;left:50%;top:50%;margin:-6px 0 0 -6px}.arcu-widget .arcu-prompt{color:#787878;font-family:'Roboto',sans-serif,Arial;font-size:16px;line-height:18px;width:auto;bottom:10px;right:105%;left:auto;white-space:nowrap;padding:14px 20px 14px}.arcu-widget .arcu-prompt:before{border-right:8px solid transparent;border-top:8px solid transparent;border-left:8px solid #FFF;border-bottom:8px solid transparent;bottom:16px;right:-15px}.arcu-widget .arcu-prompt .arcu-prompt-close{opacity:0;position:absolute;right:-10px;top:-10px;padding:0;margin:0;border:0 none;background:none;line-height:1;width:26px;height:26px;color:#FFFFFF;background:#787878;border-radius:50%;text-align:center}.arcu-widget .arcu-prompt .arcu-prompt-close svg{height:12px;width:12px;display:block;position:absolute;left:50%;top:50%;margin:-6px 0 0 -6px}.arcu-widget .messangers-block .messangers-list{list-style:none;margin:0;padding:0}.arcu-widget .messangers-block .messangers-list.arcu-downtoup{-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}.arcu-widget .arcu-forms-container{background:#FFFFFF;box-shadow:0 0 40px rgba(0,0,0,0.2);width:410px;background-repeat:no-repeat;background-position:center;position:absolute;bottom:80px;left:auto;right:0;align-items:center;border-radius:7px;-webkit-transform-origin:85% 100%;-ms-transform-origin:85% 100%;transform-origin:85% 100%;-webkit-transform:scale(1);-ms-transform:scale(1);transform:scale(1);z-index:1000000;color:red;padding-top:5px;padding-left:8px;padding-right:8px;display:none}.arcu-widget .arcu-forms-container:before{position:absolute;bottom:-7px;right:25px;left:auto;display:inline-block!important;border-right:8px solid transparent;border-top:8px solid #FFFFFF;border-left:8px solid transparent;content:''}.arcu-widget .arcu-forms-container .arcu-form-container{font-family:'Roboto',sans-serif,Arial;font-size:15px;line-height:18px;padding:0 10px 10px;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;display:none;width:100%;position:relative}.arcu-widget .arcu-forms-container .arcu-form-container .arcu-form-success,.arcu-widget .arcu-forms-container .arcu-form-container .arcu-form-error{font-size:18px;position:absolute;top:0;bottom:-10px;left:-8px;right:-8px;border-radius:7px;background:rgba(255,255,255,0.9);text-align:center;vertical-align:middle;align-items:center;display:none}.arcu-widget .arcu-forms-container .arcu-form-container .arcu-form-success>div,.arcu-widget .arcu-forms-container .arcu-form-container .arcu-form-error>div{flex:1 auto}.arcu-widget .arcu-forms-container .arcu-form-container .arcu-form-header{text-align:center;margin-bottom:10px;margin-top:-5px;margin-left:-18px;margin-right:-18px;padding:18px 15px;color:#FFFFFF;border-radius:7px 7px 0 0}.arcu-widget .arcu-forms-container .arcu-form-container .arcu-form-group{margin-bottom:10px}.arcu-widget .arcu-forms-container .arcu-form-container .arcu-form-group .arcu-form-field-errors{display:none;font-size:12px;line-height:14px;margin-left:3px}.arcu-widget .arcu-forms-container .arcu-form-container .arcu-form-group.arcu-form-group-type-hidden{display:none}.arcu-widget .arcu-forms-container .arcu-form-container .arcu-form-group.arcu-form-group-required .arcu-form-label label{display:block;padding:0;margin:0}.arcu-widget .arcu-forms-container .arcu-form-container .arcu-form-group.arcu-form-group-required .arcu-form-label label:after{content:" *";color:#c7254e}.arcu-widget .arcu-forms-container .arcu-form-container .arcu-form-label{font-size:14px;margin-bottom:3px;color:#333333}.arcu-widget .arcu-forms-container .arcu-form-container .arcu-form-field{display:block;width:100%;font-family:'Roboto',sans-serif,Arial;font-size:14px;line-height:16px;border-radius:4px;border:0;height:36px;-webkit-box-sizing:border-box;box-sizing:border-box;padding:6px 10px 6px;border:1px solid #DDDDDD;margin:0!important}.arcu-widget .arcu-forms-container .arcu-form-container textarea.arcu-form-field{height:80px;resize:vertical;max-height:140px;min-height:60px}.arcu-widget .arcu-forms-container .arcu-form-container .arcu-button{display:block;width:100%;border-radius:4px;border:0;background-color:red;color:#fff;font-family:'Roboto',sans-serif,Arial;font-size:14px;padding:7px 5px 7px;height:36px;margin:0;line-height:20px;text-decoration:none;text-align:center}.arcu-widget .arcu-forms-container .arcu-form-close{position:absolute;right:0;top:-30px;padding:0;margin:0;border:0 none;background:none;line-height:1;width:26px;height:26px;color:#FFFFFF;background:#787878;border-radius:50%;z-index:1;text-align:center}.arcu-widget .arcu-forms-container .arcu-form-close svg{height:12px;width:12px;display:block;position:absolute;left:50%;top:50%;margin:-6px 0 0 -6px;transform:none}@-webkit-keyframes arcu-pulse{0%{-webkit-transform:scale(0);transform:scale(0);opacity:1}50%{opacity:.5}100%{-webkit-transform:scale(1.3);transform:scale(1.3);opacity:0}}@media (max-height:400px){.arcu-widget .arcu-prompt .arcu-prompt-close{opacity:1}}@media (max-width:428px){.arcu-widget .arcu-prompt .arcu-prompt-close{opacity:1}.arcu-widget.arcu-message .messangers-block,.arcu-widget.arcu-message .arcu-forms-container{bottom:0;border-radius:0;width:100%;position:fixed}.arcu-widget.arcu-message .arcu-form-container .arcu-form-header,.arcu-widget.arcu-message .arcu-form-container .arcu-form-error,.arcu-widget.arcu-message .arcu-form-container .arcu-form-success{border-radius:0}}@keyframes arcu-pulse{0%{-webkit-transform:scale(0);transform:scale(0);opacity:1}50%{opacity:.5}100%{-webkit-transform:scale(1.3);transform:scale(1.3);opacity:0}}.arcu-widget .messangers-block{background-color:#FFFFFF}.arcu-widget .messangers-block:before{border-top-color:#FFFFFF}.arcu-widget.left.arcu-message{left:20px}.arcu-widget .arcu-message-button .static div svg{width:24px;height:24px}.arcu-widget.left.arcu-message{bottom:20px}.arcu-widget .messangers-block,.arcu-widget .arcu-prompt{box-shadow:0 0 30px rgba(0,0,0,0.2)}.arcu-widget .arcu-message-button .pulsation{-webkit-animation-duration:2s;animation-duration:2s}.arcu-widget .messangers-block{width:300px}.arcu-widget .arcu-forms-container{width:auto}.arcu-widget .arcu-forms-container #arcu-form-callback{width:300px}.arcu-widget .arcu-forms-container #arcu-form-email{width:300px}html{line-height:1.15;-webkit-text-size-adjust:100%}*,:after,:before{-webkit-box-sizing:border-box;box-sizing:border-box}body{margin:0;font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;font-size:1rem;font-weight:400;line-height:1.5;color:#333;background-color:#fff;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}h1,h2,h3,h4{margin-top:.5rem;margin-bottom:1rem;font-family:inherit;font-weight:500;line-height:1.2;color:inherit}h1{font-size:2.5rem}h2{font-size:2rem}h3{font-size:1.75rem}h4{font-size:1.5rem}p{margin-top:0;margin-bottom:.9rem}a{background-color:transparent;text-decoration:none;color:#c36}img{border-style:none;height:auto;max-width:100%}[hidden]{display:none}label{display:inline-block;line-height:1;vertical-align:middle}button,input,textarea{font-family:inherit;font-size:1rem;line-height:1.5;margin:0}input[type=email],input[type=search],input[type=tel],input[type=text],textarea{width:100%;border:1px solid #666;border-radius:3px;padding:.5rem 1rem}button,input{overflow:visible}button{text-transform:none}[type=submit],button{width:auto;-webkit-appearance:button}[type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=submit]:-moz-focusring,button:-moz-focusring{outline:1px dotted ButtonText}[type=submit],button{display:inline-block;font-weight:400;color:#c36;text-align:center;white-space:nowrap;background-color:transparent;border:1px solid #c36;padding:.5rem 1rem;font-size:1rem;border-radius:3px}textarea{overflow:auto;resize:vertical}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}li,ul{margin-top:0;margin-bottom:0;border:0;outline:0;font-size:100%;vertical-align:baseline;background:transparent}.fa,.fas{-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;display:inline-block;font-style:normal;font-variant:normal;text-rendering:auto;line-height:1}.fa-lg{font-size:1.33333em;line-height:.75em;vertical-align:-.0667em}.fa-angle-down:before{content:"\f107"}.fa-caret-right:before{content:"\f0da"}.fa-chevron-up:before{content:"\f077"}.fa-home:before{content:"\f015"}.fa-search:before{content:"\f002"}@font-face{font-family:"Font Awesome 5 Free";font-style:normal;font-weight:400;font-display:swap;src:url(https://newocean.edu.vn/wp-content/plugins/jet-menu/assets/public/lib/font-awesome/webfonts/fa-regular-400.eot);src:url(https://newocean.edu.vn/wp-content/plugins/jet-menu/assets/public/lib/font-awesome/webfonts/fa-regular-400.eot?#iefix) format("embedded-opentype"),url(https://newocean.edu.vn/wp-content/plugins/jet-menu/assets/public/lib/font-awesome/webfonts/fa-regular-400.woff2) format("woff2"),url(https://newocean.edu.vn/wp-content/plugins/jet-menu/assets/public/lib/font-awesome/webfonts/fa-regular-400.woff) format("woff"),url(https://newocean.edu.vn/wp-content/plugins/jet-menu/assets/public/lib/font-awesome/webfonts/fa-regular-400.ttf) format("truetype"),url(https://newocean.edu.vn/wp-content/plugins/jet-menu/assets/public/lib/font-awesome/webfonts/fa-regular-400.svg#fontawesome) format("svg")}@font-face{font-family:"Font Awesome 5 Free";font-style:normal;font-weight:900;font-display:swap;src:url(https://newocean.edu.vn/wp-content/plugins/jet-menu/assets/public/lib/font-awesome/webfonts/fa-solid-900.eot);src:url(https://newocean.edu.vn/wp-content/plugins/jet-menu/assets/public/lib/font-awesome/webfonts/fa-solid-900.eot?#iefix) format("embedded-opentype"),url({{asset('public/assets/fonts/awesome/fa-solid-900.woff2')}}) format("woff2"),url(https://newocean.edu.vn/wp-content/plugins/jet-menu/assets/public/lib/font-awesome/webfonts/fa-solid-900.woff) format("woff"),url(https://newocean.edu.vn/wp-content/plugins/jet-menu/assets/public/lib/font-awesome/webfonts/fa-solid-900.ttf) format("truetype"),url(https://newocean.edu.vn/wp-content/plugins/jet-menu/assets/public/lib/font-awesome/webfonts/fa-solid-900.svg#fontawesome) format("svg")}.fa,.fas{font-family:"Font Awesome 5 Free"}.fa,.fas{font-weight:900}.jet-menu-container{position:relative;width:100%}.jet-menu{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-flow:row wrap;flex-flow:row wrap;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:stretch;-ms-flex-align:stretch;align-items:stretch;width:100%;position:relative;margin:0;padding:0;list-style:none}.jet-menu.jet-menu--roll-up>.jet-menu-item[hidden]{display:none}.jet-menu .jet-menu-item{display:-webkit-box;display:-ms-flexbox;display:flex}.jet-menu .top-level-link{width:100%;margin:0;padding:10px;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.jet-menu ul{left:0}.jet-menu-item{position:relative}.jet-menu-item>a{display:block;text-decoration:none;width:auto}.jet-menu-item.jet-mega-menu-item{position:static}.jet-menu-item .jet-sub-menu{display:block;min-width:200px;margin:0;background-color:#fff;list-style:none;top:100%;left:0;right:auto;position:absolute;padding:0;-webkit-box-shadow:2px 2px 5px rgba(0,0,0,.2);box-shadow:2px 2px 5px rgba(0,0,0,.2);z-index:999}.jet-menu-item .jet-sub-menu>li{display:block}.jet-menu-item .jet-sub-menu>li>a{padding:10px}.jet-menu-item .jet-sub-mega-menu{width:100%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;position:absolute;background-color:#fff;top:100%;left:0;-webkit-box-shadow:2px 2px 5px rgba(0,0,0,.2);box-shadow:2px 2px 5px rgba(0,0,0,.2);z-index:999}.jet-menu-item .jet-sub-mega-menu>.elementor{width:100%}.jet-menu-item-wrapper{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.jet-menu-item-wrapper .jet-dropdown-arrow{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-ms-flex-item-align:center;align-self:center;margin-left:10px}.jet-sub-menu,.jet-sub-mega-menu{opacity:0;visibility:hidden}.jet-menu.jet-menu--animation-type-fade .jet-sub-menu{opacity:0;visibility:hidden}.jet-menu.jet-menu--animation-type-fade .jet-sub-mega-menu{opacity:0;visibility:hidden}.jet-mega-menu-item{position:relative;-webkit-transform-origin:0;-ms-transform-origin:0;transform-origin:0}.jet-menu{justify-content:flex-end!important}.jet-menu ul.jet-sub-menu{min-width:200px}@font-face{font-display:swap;font-family:eicons;src:url(https://newocean.edu.vn/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.17.0);src:url(https://newocean.edu.vn/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.17.0#iefix) format("embedded-opentype"),url({{asset('public/assets/fonts/eicons/eicons.woff2')}}) format("woff2"),url(https://newocean.edu.vn/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff?5.17.0) format("woff"),url(https://newocean.edu.vn/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.ttf?5.17.0) format("truetype"),url(https://newocean.edu.vn/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.svg?5.17.0#eicon) format("svg");font-weight:400;font-style:normal}[class^=eicon]{display:inline-block;font-family:eicons;font-size:inherit;font-weight:400;font-style:normal;font-variant:normal;line-height:1;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.eicon-close:before{content:'\e87f'}.dialog-close-button{position:absolute;margin-top:15px;right:15px;font-size:15px;line-height:1}.dialog-close-button:not(:hover){opacity:.4}.elementor-screen-only,.screen-reader-text{position:absolute;top:-10000em;width:1px;height:1px;margin:-1px;padding:0;overflow:hidden;clip:rect(0,0,0,0);border:0}.elementor{-webkit-hyphens:manual;hyphens:manual}.elementor *,.elementor :after,.elementor :before{box-sizing:border-box}.elementor a{box-shadow:none;text-decoration:none}.elementor img{height:auto;max-width:100%;border:none;border-radius:0;box-shadow:none}.elementor-widget-wrap>.elementor-element.elementor-fixed{position:fixed}.elementor-widget-wrap .elementor-element.elementor-widget__width-initial{max-width:100%}.elementor-element{--flex-direction:initial;--flex-wrap:initial;--justify-content:initial;--align-items:initial;--align-content:initial;--gap:initial;--flex-basis:initial;--flex-grow:initial;--flex-shrink:initial;--order:initial;--align-self:initial;flex-basis:var(--flex-basis);flex-grow:var(--flex-grow);flex-shrink:var(--flex-shrink);order:var(--order);align-self:var(--align-self)}.elementor-element.elementor-fixed{z-index:1}.elementor-align-right{text-align:right}.elementor-align-right .elementor-button{width:auto}:root{--page-title-display:block}.elementor-section{position:relative}.elementor-section .elementor-container{display:flex;margin-right:auto;margin-left:auto;position:relative}@media (max-width:1024px){.elementor-section .elementor-container{flex-wrap:wrap}}.elementor-section.elementor-section-boxed>.elementor-container{max-width:1140px}.elementor-section.elementor-section-stretched{position:relative;width:100%}.elementor-widget-wrap{position:relative;width:100%;flex-wrap:wrap;align-content:flex-start}.elementor:not(.elementor-bc-flex-widget) .elementor-widget-wrap{display:flex}.elementor-widget-wrap>.elementor-element{width:100%}.elementor-widget{position:relative}.elementor-widget:not(:last-child){margin-bottom:20px}.elementor-column{position:relative;min-height:1px;display:flex}.elementor-column-gap-default>.elementor-column>.elementor-element-populated{padding:10px}@media (min-width:768px){.elementor-column.elementor-col-25{width:25%}.elementor-column.elementor-col-33{width:33.333%}.elementor-column.elementor-col-100{width:100%}}@media (max-width:767px){.elementor-column{width:100%}}@media (min-width:1025px){#elementor-device-mode:after{content:"desktop"}}@media (min-width:-1px){#elementor-device-mode:after{content:"widescreen"}}@media (max-width:-1px){#elementor-device-mode:after{content:"laptop";content:"tablet_extra"}}@media (max-width:1024px){#elementor-device-mode:after{content:"tablet"}}@media (max-width:-1px){#elementor-device-mode:after{content:"mobile_extra"}}@media (max-width:767px){#elementor-device-mode:after{content:"mobile"}}.elementor-form-fields-wrapper{display:flex;flex-wrap:wrap}.elementor-field-group{flex-wrap:wrap;align-items:center}.elementor-field-group.elementor-field-type-submit{align-items:flex-end}.elementor-field-group .elementor-field-textual{width:100%;max-width:100%;border:1px solid #818a91;background-color:transparent;color:#373a3c;vertical-align:middle;flex-grow:1}.elementor-field-group .elementor-field-textual::-moz-placeholder{color:inherit;font-family:inherit;opacity:.6}.elementor-field-textual{line-height:1.4;font-size:15px;min-height:40px;padding:5px 14px;border-radius:3px}.elementor-field-textual.elementor-size-md{font-size:16px;min-height:47px;padding:6px 16px;border-radius:4px}.elementor-button-align-stretch .elementor-field-type-submit:not(.e-form__buttons__wrapper) .elementor-button{flex-basis:100%}.elementor-form .elementor-button{padding-top:0;padding-bottom:0;border:none}.elementor-form .elementor-button>span{display:flex;justify-content:center}.elementor-form .elementor-button.elementor-size-md{min-height:47px}.elementor-button{display:inline-block;line-height:1;background-color:#818a91;font-size:15px;padding:12px 24px;border-radius:3px;color:#fff;fill:#fff;text-align:center}.elementor-button:visited{color:#fff}.elementor-button-content-wrapper{display:flex;justify-content:center}.elementor-button-icon{flex-grow:0;order:5}.elementor-button-text{flex-grow:1;order:10;display:inline-block}.elementor-button.elementor-size-md{font-size:16px;padding:15px 30px;border-radius:4px}.elementor-button span{text-decoration:inherit}.elementor-view-stacked .elementor-icon{padding:.5em;background-color:#818a91;color:#fff;fill:#fff}.elementor-view-framed .elementor-icon{padding:.5em;color:#818a91;border:3px solid #818a91;background-color:transparent}.elementor-icon{display:inline-block;line-height:1;color:#818a91;font-size:50px;text-align:center}.elementor-icon i,.elementor-icon svg{width:1em;height:1em;position:relative;display:block}.elementor-icon i:before,.elementor-icon svg:before{position:absolute;left:50%;transform:translateX(-50%)}.elementor-shape-circle .elementor-icon{border-radius:50%}.swiper-container{margin-left:auto;margin-right:auto;position:relative;overflow:hidden;z-index:1}.swiper-wrapper{position:relative;width:100%;height:100%;z-index:1;display:flex;box-sizing:content-box}.swiper-wrapper{transform:translateZ(0)}.swiper-slide{flex-shrink:0;width:100%;height:100%;position:relative}.elementor-pagination-position-outside .swiper-container{padding-bottom:30px}.elementor-swiper{position:relative}.elementor-main-swiper{position:static}.animated{animation-duration:1.25s}@media (prefers-reduced-motion:reduce){.animated{animation:none}}.elementor .elementor-element ul.elementor-icon-list-items{padding:0}@media (max-width:767px){.elementor .elementor-hidden-mobile{display:none}}@media (min-width:768px) and (max-width:1024px){.elementor .elementor-hidden-tablet{display:none}}.elementor-counter .elementor-counter-number-wrapper{display:flex;font-size:69px;font-weight:600;line-height:1}.elementor-counter .elementor-counter-number-prefix,.elementor-counter .elementor-counter-number-suffix{flex-grow:1;white-space:pre-wrap}.elementor-counter .elementor-counter-number-prefix{text-align:right}.elementor-counter .elementor-counter-number-suffix{text-align:left}.elementor-counter .elementor-counter-title{text-align:center;font-size:19px;font-weight:400;line-height:2.5}.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget .elementor-icon-list-items{list-style-type:none;margin:0;padding:0}.elementor-widget .elementor-icon-list-item{margin:0;padding:0;position:relative}.elementor-widget .elementor-icon-list-item:after{position:absolute;bottom:0;width:100%}.elementor-widget .elementor-icon-list-item,.elementor-widget .elementor-icon-list-item a{display:flex;align-items:center;font-size:inherit}.elementor-widget .elementor-icon-list-icon+.elementor-icon-list-text{align-self:center;padding-left:5px}.elementor-widget .elementor-icon-list-icon{display:flex}.elementor-widget .elementor-icon-list-icon i{width:1.25em;font-size:var(--e-icon-list-icon-size)}.elementor-widget.elementor-widget-icon-list .elementor-icon-list-icon{text-align:var(--e-icon-list-icon-align)}.elementor-widget.elementor-list-item-link-full_width a{width:100%}.elementor-widget:not(.elementor-align-right) .elementor-icon-list-item:after{left:0}.elementor-widget:not(.elementor-align-left) .elementor-icon-list-item:after{right:0}@media (min-width:-1px){.elementor-widget:not(.elementor-widescreen-align-right) .elementor-icon-list-item:after{left:0}.elementor-widget:not(.elementor-widescreen-align-left) .elementor-icon-list-item:after{right:0}}@media (max-width:-1px){.elementor-widget:not(.elementor-laptop-align-right) .elementor-icon-list-item:after{left:0}.elementor-widget:not(.elementor-laptop-align-left) .elementor-icon-list-item:after{right:0}}@media (max-width:-1px){.elementor-widget:not(.elementor-tablet_extra-align-right) .elementor-icon-list-item:after{left:0}.elementor-widget:not(.elementor-tablet_extra-align-left) .elementor-icon-list-item:after{right:0}}@media (max-width:1024px){.elementor-widget:not(.elementor-tablet-align-right) .elementor-icon-list-item:after{left:0}.elementor-widget:not(.elementor-tablet-align-left) .elementor-icon-list-item:after{right:0}}@media (max-width:-1px){.elementor-widget:not(.elementor-mobile_extra-align-right) .elementor-icon-list-item:after{left:0}.elementor-widget:not(.elementor-mobile_extra-align-left) .elementor-icon-list-item:after{right:0}}@media (max-width:767px){.elementor-widget:not(.elementor-mobile-align-right) .elementor-icon-list-item:after{left:0}.elementor-widget:not(.elementor-mobile-align-left) .elementor-icon-list-item:after{right:0}}.elementor-widget-image{text-align:center}.elementor-widget-image a{display:inline-block}.elementor-widget-image img{vertical-align:middle;display:inline-block}.elementor-column .elementor-spacer-inner{height:var(--spacer-size)}.elementor-kit-10750{--e-global-color-primary:#0D509C;--e-global-color-accent:#F44336;--e-global-color-2668858c:#6EC1E4;--e-global-color-12e07cf6:#7A7A7A;--e-global-color-25250f0e:#4054B2;--e-global-color-42c626ee:#23A455;--e-global-color-42ebf043:#000;--e-global-color-3654844:#FFF;--e-global-color-202dc50f:#FF9800;--e-global-color-fbfee34:#00209F;--e-global-color-7d5d97a:#C40E37;--e-global-color-70f6924:#280A6F;--e-global-color-1761d5f:#333333;--e-global-color-cddfb78:#555555;--e-global-color-b4c21f1:#757575;--e-global-color-ed769e4:#4F4F4F;--e-global-color-4871044:#08B0F7;--e-global-typography-primary-font-family:"Roboto";--e-global-typography-primary-font-weight:600;--e-global-typography-secondary-font-family:"Roboto";--e-global-typography-secondary-font-weight:400;--e-global-typography-text-font-family:"Arial";--e-global-typography-text-font-size:18px;--e-global-typography-text-font-weight:400;--e-global-typography-accent-font-family:"Roboto";--e-global-typography-accent-font-weight:500;font-family:"Arial",Sans-serif}.elementor-kit-10750 a{color:var(--e-global-color-primary)}.elementor-kit-10750 h1{font-size:32px}.elementor-kit-10750 h2{font-size:28px}.elementor-kit-10750 h3{font-size:24px}.elementor-kit-10750 h4{font-size:20px}.elementor-kit-10750 button,.elementor-kit-10750 .elementor-button{color:var(--e-global-color-3654844);background-color:#0D509C;border-radius:5px 5px 5px 5px;padding:10px 10px 10px 10px}.elementor-kit-10750 label{font-size:14px}.elementor-kit-10750 input:not([type="button"]):not([type="submit"]),.elementor-kit-10750 textarea,.elementor-kit-10750 .elementor-field-textual{font-size:14px}.elementor-section.elementor-section-boxed>.elementor-container{max-width:1140px}.elementor-widget:not(:last-child){margin-bottom:20px}.elementor-element{--widgets-spacing:20px}@media (max-width:1024px){.elementor-section.elementor-section-boxed>.elementor-container{max-width:1024px}}@media (max-width:767px){.elementor-section.elementor-section-boxed>.elementor-container{max-width:767px}}.elementor-location-header:before{content:"";display:table;clear:both}[data-elementor-type=popup]:not(.elementor-edit-area){display:none}.elementor-search-form{display:block}.elementor-search-form input[type=search]{margin:0;border:0;padding:0;display:inline-block;vertical-align:middle;white-space:normal;background:none;line-height:1;min-width:0;font-size:15px;-webkit-appearance:none;-moz-appearance:none}.elementor-search-form__container{display:flex;overflow:hidden;border:0 solid transparent;min-height:50px}.elementor-search-form__container:not(.elementor-search-form--full-screen){background:#eceeef}.elementor-search-form__input{flex-basis:100%;color:#55595c}.elementor-search-form__input::-moz-placeholder{color:inherit;font-family:inherit;opacity:.6}.elementor-search-form--skin-full_screen .elementor-search-form input[type=search].elementor-search-form__input{font-size:50px;text-align:center;border:solid #fff;border-width:0 0 1px;line-height:1.5;color:#fff}.elementor-search-form--skin-full_screen .elementor-search-form__toggle{display:inline-block;vertical-align:middle;color:var(--e-search-form-toggle-color,#494c4f);font-size:var(--e-search-form-toggle-size,33px)}.elementor-search-form--skin-full_screen .elementor-search-form__toggle i{position:relative;display:block;width:var(--e-search-form-toggle-size,33px);height:var(--e-search-form-toggle-size,33px);background-color:var(--e-search-form-toggle-background-color,rgba(0,0,0,.05));border:var(--e-search-form-toggle-border-width,0) solid var(--e-search-form-toggle-color,#494c4f);border-radius:var(--e-search-form-toggle-border-radius,3px)}.elementor-search-form--skin-full_screen .elementor-search-form__toggle i:before{position:absolute;left:50%;top:50%;transform:translate(-50%,-50%)}.elementor-search-form--skin-full_screen .elementor-search-form__toggle i:before{font-size:var(--e-search-form-toggle-icon-size,.55em)}.elementor-search-form--skin-full_screen .elementor-search-form__container{align-items:center;position:fixed;z-index:9998;top:0;left:0;right:0;bottom:0;height:100vh;padding:0 15%;background-color:rgba(0,0,0,.8)}.elementor-search-form--skin-full_screen .elementor-search-form__container:not(.elementor-search-form--full-screen){overflow:hidden;opacity:0;transform:scale(0)}.elementor-search-form--skin-full_screen .elementor-search-form__container:not(.elementor-search-form--full-screen) .dialog-lightbox-close-button{display:none}.elementor-icon-list-items .elementor-icon-list-item .elementor-icon-list-text{display:inline-block}.e-form__buttons{flex-wrap:wrap}.e-form__buttons{display:flex}.elementor-form .elementor-button>span{display:flex;justify-content:center;align-items:center}.elementor-form .elementor-button .elementor-button-text{white-space:normal;flex-grow:0}.elementor-skin-carousel .elementor-main-swiper{height:230px}.elementor-carousel-image{background:no-repeat 50%;background-size:cover;height:100%;position:relative}.swiper-slide{will-change:transform;border-style:solid;border-width:0;overflow:hidden}.swiper-slide a{display:inline}.elementor-item:after,.elementor-item:before{display:block;position:absolute}.elementor-item:not(:hover):not(:focus):not(.elementor-item-active):not(.highlighted):after,.elementor-item:not(:hover):not(:focus):not(.elementor-item-active):not(.highlighted):before{opacity:0}.elementor-nav-menu--main .elementor-nav-menu a{padding:13px 20px}.elementor-nav-menu--layout-horizontal{display:flex}.elementor-nav-menu--layout-horizontal .elementor-nav-menu{display:flex;flex-wrap:wrap}.elementor-nav-menu--layout-horizontal .elementor-nav-menu a{white-space:nowrap;flex-grow:1}.elementor-nav-menu--layout-horizontal .elementor-nav-menu>li{display:flex}.elementor-nav-menu--layout-horizontal .elementor-nav-menu>li:not(:first-child)>a{-webkit-margin-start:var(--e-nav-menu-horizontal-menu-item-margin);margin-inline-start:var(--e-nav-menu-horizontal-menu-item-margin)}.elementor-nav-menu--layout-horizontal .elementor-nav-menu>li:not(:last-child)>a{-webkit-margin-end:var(--e-nav-menu-horizontal-menu-item-margin);margin-inline-end:var(--e-nav-menu-horizontal-menu-item-margin)}.elementor-nav-menu--layout-horizontal .elementor-nav-menu>li:not(:last-child):after{content:var(--e-nav-menu-divider-content,none);height:var(--e-nav-menu-divider-height,35%);border-left:var(--e-nav-menu-divider-width,2px) var(--e-nav-menu-divider-style,solid) var(--e-nav-menu-divider-color,#000);border-bottom-color:var(--e-nav-menu-divider-color,#000);border-right-color:var(--e-nav-menu-divider-color,#000);border-top-color:var(--e-nav-menu-divider-color,#000);align-self:center}.elementor-nav-menu__align-right .elementor-nav-menu{margin-left:auto;justify-content:flex-end}.elementor-widget-nav-menu .elementor-widget-container{display:flex;flex-direction:column}.elementor-nav-menu{position:relative;z-index:2}.elementor-nav-menu:after{content:" ";display:block;height:0;font:0/0 serif;clear:both;visibility:hidden;overflow:hidden}.elementor-nav-menu,.elementor-nav-menu li{display:block;list-style:none;margin:0;padding:0;line-height:normal}.elementor-nav-menu a,.elementor-nav-menu li{position:relative}.elementor-nav-menu li{border-width:0}.elementor-nav-menu a{display:flex;align-items:center}.elementor-nav-menu a{padding:10px 20px;line-height:20px}.elementor-nav-menu--dropdown{background-color:#fff;font-size:13px}.elementor-nav-menu--dropdown.elementor-nav-menu__container{margin-top:10px;transform-origin:top;overflow-y:auto;overflow-x:hidden}.elementor-nav-menu--dropdown a{color:#494c4f}@media (min-width:1025px){.elementor-nav-menu--dropdown-tablet .elementor-nav-menu--dropdown{display:none}.elementor-nav-menu--dropdown-tablet nav.elementor-nav-menu--dropdown.elementor-nav-menu__container{overflow-y:hidden}}@media (max-width:1024px){.elementor-nav-menu--dropdown-tablet .elementor-nav-menu--main{display:none}}body,html{box-sizing:border-box}.elementor-widget-heading .elementor-heading-title{color:var(--e-global-color-primary);font-family:var(--e-global-typography-primary-font-family),Sans-serif;font-weight:var(--e-global-typography-primary-font-weight)}.elementor-widget-text-editor{font-family:var(--e-global-typography-text-font-family),Sans-serif;font-size:var(--e-global-typography-text-font-size);font-weight:var(--e-global-typography-text-font-weight)}.elementor-widget-button .elementor-button{font-family:var(--e-global-typography-accent-font-family),Sans-serif;font-weight:var(--e-global-typography-accent-font-weight);background-color:var(--e-global-color-accent)}.elementor-widget-icon.elementor-view-stacked .elementor-icon{background-color:var(--e-global-color-primary)}.elementor-widget-icon.elementor-view-framed .elementor-icon{color:var(--e-global-color-primary);border-color:var(--e-global-color-primary)}.elementor-widget-icon.elementor-view-framed .elementor-icon{fill:var(--e-global-color-primary)}.elementor-widget-icon-list .elementor-icon-list-icon i{color:var(--e-global-color-primary)}.elementor-widget-icon-list .elementor-icon-list-item>a{font-family:var(--e-global-typography-text-font-family),Sans-serif;font-size:var(--e-global-typography-text-font-size);font-weight:var(--e-global-typography-text-font-weight)}.elementor-widget-counter .elementor-counter-number-wrapper{color:var(--e-global-color-primary);font-family:var(--e-global-typography-primary-font-family),Sans-serif;font-weight:var(--e-global-typography-primary-font-weight)}.elementor-widget-counter .elementor-counter-title{font-family:var(--e-global-typography-secondary-font-family),Sans-serif;font-weight:var(--e-global-typography-secondary-font-weight)}.elementor-field{{$ID??''}}.elementor-button{font-family:var(--e-global-typography-text-font-family),Sans-serif;font-size:var(--e-global-typography-text-font-size);font-weight:var(--e-global-typography-text-font-weight);background-color:var(--e-global-color-primary)}.elementor-widget-form .elementor-field-group>label{font-family:var(--e-global-typography-text-font-family),Sans-serif;font-size:var(--e-global-typography-text-font-size);font-weight:var(--e-global-typography-text-font-weight)}.elementor-widget-form .elementor-field-group .elementor-field{font-family:var(--e-global-typography-text-font-family),Sans-serif;font-size:var(--e-global-typography-text-font-size);font-weight:var(--e-global-typography-text-font-weight)}.elementor-widget-form .elementor-button{font-family:var(--e-global-typography-accent-font-family),Sans-serif;font-weight:var(--e-global-typography-accent-font-weight)}.elementor-widget-form .elementor-button[type="submit"]{background-color:var(--e-global-color-accent)}.elementor-widget-form{--e-form-steps-indicator-active-primary-color:var( --e-global-color-accent );--e-form-steps-indicator-completed-primary-color:var( --e-global-color-accent );--e-form-steps-indicator-progress-color:var( --e-global-color-accent )}.elementor-widget-nav-menu .elementor-nav-menu .elementor-item{font-family:var(--e-global-typography-primary-font-family),Sans-serif;font-weight:var(--e-global-typography-primary-font-weight)}.elementor-widget-nav-menu .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item:before,.elementor-widget-nav-menu .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item:after{background-color:var(--e-global-color-accent)}.elementor-widget-nav-menu .elementor-nav-menu--dropdown .elementor-item{font-family:var(--e-global-typography-accent-font-family),Sans-serif;font-weight:var(--e-global-typography-accent-font-weight)}.elementor-widget-search-form input[type="search"].elementor-search-form__input{font-family:var(--e-global-typography-text-font-family),Sans-serif;font-size:var(--e-global-typography-text-font-size);font-weight:var(--e-global-typography-text-font-weight)}@media (max-width:1024px){.elementor-widget-text-editor{font-size:var(--e-global-typography-text-font-size)}.elementor-widget-icon-list .elementor-icon-list-item>a{font-size:var(--e-global-typography-text-font-size)}.elementor-field{{$ID??''}}.elementor-button{font-size:var(--e-global-typography-text-font-size)}.elementor-widget-form .elementor-field-group>label{font-size:var(--e-global-typography-text-font-size)}.elementor-widget-form .elementor-field-group .elementor-field{font-size:var(--e-global-typography-text-font-size)}.elementor-widget-search-form input[type="search"].elementor-search-form__input{font-size:var(--e-global-typography-text-font-size)}}@media (max-width:767px){.elementor-widget-text-editor{font-size:var(--e-global-typography-text-font-size)}.elementor-widget-icon-list .elementor-icon-list-item>a{font-size:var(--e-global-typography-text-font-size)}.elementor-field{{$ID??''}}.elementor-button{font-size:var(--e-global-typography-text-font-size)}.elementor-widget-form .elementor-field-group>label{font-size:var(--e-global-typography-text-font-size)}.elementor-widget-form .elementor-field-group .elementor-field{font-size:var(--e-global-typography-text-font-size)}.elementor-widget-search-form input[type="search"].elementor-search-form__input{font-size:var(--e-global-typography-text-font-size)}}.elementor-174 .elementor-element.elementor-element-8d2a4c7{padding:10px 0px 10px 0px}.elementor-174 .elementor-element.elementor-element-06153c3:not(.elementor-motion-effects-element-type-background){background-color:#f7f5f4}.elementor-174 .elementor-element.elementor-element-06153c3{padding:20px 0px 0px 0px}.elementor-174 .elementor-element.elementor-element-c2167f6 .elementor-icon-wrapper{text-align:center}.elementor-174 .elementor-element.elementor-element-c2167f6 .elementor-icon{font-size:38px}.elementor-174 .elementor-element.elementor-element-0d3b378 .elementor-counter-number-wrapper{color:#0d509c;font-family:"Roboto",Sans-serif;font-size:32px;font-weight:500}.elementor-174 .elementor-element.elementor-element-0d3b378 .elementor-counter-title{color:#0d509c;font-family:"Roboto",Sans-serif;font-size:14px;line-height:1.6em}.elementor-174 .elementor-element.elementor-element-f284d95{--spacer-size:10px}.elementor-174 .elementor-element.elementor-element-c9b8816 .elementor-icon-wrapper{text-align:center}.elementor-174 .elementor-element.elementor-element-c9b8816.elementor-view-framed .elementor-icon{color:#0D509C;border-color:#0D509C}.elementor-174 .elementor-element.elementor-element-c9b8816.elementor-view-framed .elementor-icon{fill:#0D509C}.elementor-174 .elementor-element.elementor-element-c9b8816 .elementor-icon{font-size:38px}.elementor-174 .elementor-element.elementor-element-bd493b2 .elementor-counter-number-wrapper{color:#0d509c;font-family:"Roboto",Sans-serif;font-size:32px;font-weight:500}.elementor-174 .elementor-element.elementor-element-bd493b2 .elementor-counter-title{color:#0d509c;font-family:"Roboto",Sans-serif;font-size:14px;line-height:1.6em}.elementor-174 .elementor-element.elementor-element-9ba00c0{--spacer-size:10px}.elementor-174 .elementor-element.elementor-element-611792f .elementor-icon-wrapper{text-align:center}.elementor-174 .elementor-element.elementor-element-611792f.elementor-view-framed .elementor-icon{color:#0D509C;border-color:#0D509C}.elementor-174 .elementor-element.elementor-element-611792f.elementor-view-framed .elementor-icon{fill:#0D509C}.elementor-174 .elementor-element.elementor-element-611792f .elementor-icon{font-size:38px}.elementor-174 .elementor-element.elementor-element-28e17cd .elementor-counter-number-wrapper{color:#0d509c;font-family:"Roboto",Sans-serif;font-size:32px;font-weight:500}.elementor-174 .elementor-element.elementor-element-28e17cd .elementor-counter-title{color:#0d509c;font-family:"Roboto",Sans-serif;font-size:14px;line-height:1.6em}.elementor-174 .elementor-element.elementor-element-fc6a6dd{--spacer-size:10px}.elementor-174 .elementor-element.elementor-element-05671f5 .elementor-icon-wrapper{text-align:center}.elementor-174 .elementor-element.elementor-element-05671f5.elementor-view-framed .elementor-icon{color:#0D509C;border-color:#0D509C}.elementor-174 .elementor-element.elementor-element-05671f5.elementor-view-framed .elementor-icon{fill:#0D509C}.elementor-174 .elementor-element.elementor-element-05671f5 .elementor-icon{font-size:38px}.elementor-174 .elementor-element.elementor-element-0d436dc .elementor-counter-number-wrapper{color:#0d509c;font-family:"Roboto",Sans-serif;font-size:32px;font-weight:500}.elementor-174 .elementor-element.elementor-element-0d436dc .elementor-counter-title{color:#0d509c;font-family:"Roboto",Sans-serif;font-size:14px;line-height:1.6em}.elementor-174 .elementor-element.elementor-element-a50a698{--spacer-size:10px}.elementor-174 .elementor-element.elementor-element-d4696b4{margin-top:20px;margin-bottom:0px}.elementor-174 .elementor-element.elementor-element-49524d6{text-align:center}.elementor-174 .elementor-element.elementor-element-49524d6 .elementor-heading-title{color:#0D509C;font-family:"Roboto",Sans-serif;font-weight:400;text-transform:uppercase;font-style:normal;text-decoration:none;line-height:1em}.elementor-174 .elementor-element.elementor-element-49524d6>.elementor-widget-container{padding:10px 0px 10px 0px}.elementor-174 .elementor-element.elementor-element-203cf98 .elementor-main-swiper{height:378px}.elementor-174 .elementor-element.elementor-element-203cf98 .elementor-main-swiper .swiper-slide{border-radius:5px}@media (max-width:1024px){.elementor-174 .elementor-element.elementor-element-203cf98 .elementor-main-swiper{height:300px}}@media (max-width:767px){.elementor-174 .elementor-element.elementor-element-8d2a4c7{padding:0px 0px 0px 0px}.elementor-174 .elementor-element.elementor-element-f5f345f{width:50%}.elementor-174 .elementor-element.elementor-element-c2167f6 .elementor-icon{font-size:32px}.elementor-174 .elementor-element.elementor-element-5950186{width:50%}.elementor-174 .elementor-element.elementor-element-c9b8816 .elementor-icon{font-size:32px}.elementor-174 .elementor-element.elementor-element-8c36b24{width:50%}.elementor-174 .elementor-element.elementor-element-611792f .elementor-icon{font-size:32px}.elementor-174 .elementor-element.elementor-element-90ecce8{width:50%}.elementor-174 .elementor-element.elementor-element-05671f5 .elementor-icon{font-size:32px}.elementor-174 .elementor-element.elementor-element-203cf98 .elementor-main-swiper{height:258px;width:339px}}.elementor-20880 .elementor-element.elementor-element-cb01285{border-style:solid;border-width:0px 0px 1px 0px;border-color:#E5E5E5}.elementor-20880 .elementor-element.elementor-element-60fc103{color:var(--e-global-color-primary);font-family:"Roboto",Sans-serif;font-size:14px;font-weight:500}.elementor-20880 .elementor-element.elementor-element-60fc103>.elementor-widget-container{padding:10px 0px 0px 10px}.elementor-20880 .elementor-element.elementor-element-b59c2bb .elementor-search-form{text-align:right}.elementor-20880 .elementor-element.elementor-element-b59c2bb .elementor-search-form__toggle{--e-search-form-toggle-size:32px;--e-search-form-toggle-color:var( --e-global-color-primary );--e-search-form-toggle-background-color:#02010100}.elementor-20880 .elementor-element.elementor-element-b59c2bb.elementor-search-form--skin-full_screen input[type="search"].elementor-search-form__input{border-width:1px 1px 1px 1px;border-radius:10px}.elementor-20880 .elementor-element.elementor-element-b59c2bb>.elementor-widget-container{padding:5px 0px 0px 0px}.elementor-20880 .elementor-element.elementor-element-277796a .elementor-nav-menu .elementor-item{font-size:13px;font-weight:500}.elementor-20880 .elementor-element.elementor-element-277796a .elementor-nav-menu--main .elementor-item{color:var(--e-global-color-primary);fill:var(--e-global-color-primary);padding-left:15px;padding-right:15px;padding-top:10px;padding-bottom:10px}.elementor-20880 .elementor-element.elementor-element-7621bb2{border-style:solid;border-width:0px 0px 1px 0px;border-color:#E5E5E5}.elementor-20880 .elementor-element.elementor-element-c189633 img{width:100%}.elementor-20880 .elementor-element.elementor-element-c189633>.elementor-widget-container{padding:15px 0px 15px 0px}.elementor-20880 .elementor-element.elementor-element-4a35e75 .jet-menu{justify-content:flex-end!important}.jet-desktop-menu-active .elementor-20880 .elementor-element.elementor-element-4a35e75 .jet-menu>.jet-menu-item{flex-grow:0}.elementor-20880 .elementor-element.elementor-element-4a35e75 .jet-menu .jet-menu-item .top-level-link{font-family:"Roboto",Sans-serif;font-size:14px;font-weight:600;text-transform:uppercase;color:#0D509C;margin:5px 5px 5px 5px}.elementor-20880 .elementor-element.elementor-element-4a35e75 .jet-menu .jet-menu-item.jet-current-menu-item .top-level-link{color:#FF9800}.elementor-20880 .elementor-element.elementor-element-4a35e75 .jet-menu ul.jet-sub-menu{background-color:var(--e-global-color-primary);border-radius:5px 5px 5px 5px}.elementor-20880 .elementor-element.elementor-element-4a35e75 .jet-menu li.jet-sub-menu-item .sub-level-link{font-family:"Roboto",Sans-serif;font-size:14px;color:var(--e-global-color-3654844)}.elementor-20880 .elementor-element.elementor-element-4a35e75>.elementor-widget-container{padding:15px 0px 0px 0px}.elementor-20880 .elementor-element.elementor-element-365dd88 .elementor-button{font-size:13px;font-weight:500;text-transform:uppercase;fill:var(--e-global-color-3654844);color:var(--e-global-color-3654844);background-color:var(--e-global-color-202dc50f);border-radius:90px 90px 90px 90px;padding:10px 15px 10px 15px}.elementor-20880 .elementor-element.elementor-element-365dd88>.elementor-widget-container{padding:23px 0px 0px 0px}@media (min-width:768px){.elementor-20880 .elementor-element.elementor-element-1bee1f2{width:37.279%}.elementor-20880 .elementor-element.elementor-element-90c4824{width:29.026%}.elementor-20880 .elementor-element.elementor-element-3339d72{width:18%}.elementor-20880 .elementor-element.elementor-element-f9ac3e1{width:66.664%}.elementor-20880 .elementor-element.elementor-element-5fd0382{width:15%}}@media (max-width:1024px){.elementor-20880 .elementor-element.elementor-element-60fc103{text-align:center}}@media (max-width:767px){.elementor-20880 .elementor-element.elementor-element-60fc103>.elementor-widget-container{padding:10px 0px 10px 0px}.elementor-20880 .elementor-element.elementor-element-3339d72{width:60%}.elementor-20880 .elementor-element.elementor-element-c189633 img{width:100%}.elementor-20880 .elementor-element.elementor-element-c189633>.elementor-widget-container{margin:5px 5px 5px 5px}.elementor-20880 .elementor-element.elementor-element-f9ac3e1{width:40%}.elementor-20880 .elementor-element.elementor-element-4a35e75>.elementor-widget-container{padding:30px 15px 0px 0px}}@media (max-width:1024px) and (min-width:768px){.elementor-20880 .elementor-element.elementor-element-a5fce40{width:100%}.elementor-20880 .elementor-element.elementor-element-1bee1f2{width:100%}}.elementor-20951 .elementor-element.elementor-element-e8ea893 .elementor-icon-wrapper{text-align:center}.elementor-20951 .elementor-element.elementor-element-e8ea893.elementor-view-stacked .elementor-icon{background-color:#BFBFBF}.elementor-20951 .elementor-element.elementor-element-e8ea893 .elementor-icon{font-size:22px}.elementor-20951 .elementor-element.elementor-element-e8ea893{width:initial;max-width:initial;bottom:100px}body:not(.rtl) .elementor-20951 .elementor-element.elementor-element-e8ea893{right:35px}.elementor-16420 .elementor-element.elementor-element-2a4211e{text-align:center}.elementor-16420 .elementor-element.elementor-element-2a4211e .elementor-heading-title{font-family:"Roboto",Sans-serif;font-weight:600}.elementor-16420 .elementor-element.elementor-element-2a4211e>.elementor-widget-container{padding:0px 0px 10px 0px}.elementor-16420 .elementor-element.elementor-element-9423370 .elementor-field-group{padding-right:calc(10px/2);padding-left:calc(10px/2);margin-bottom:21px}.elementor-16420 .elementor-element.elementor-element-9423370 .elementor-form-fields-wrapper{margin-left:calc(-10px/2);margin-right:calc(-10px/2);margin-bottom:-21px}.elementor-16420 .elementor-element.elementor-element-9423370 .elementor-field-group.recaptcha_v3-bottomleft{margin-bottom:0}.elementor-16420 .elementor-element.elementor-element-9423370 .elementor-field-group .elementor-field{font-family:"Roboto",Sans-serif;font-size:13px;font-weight:500}.elementor-16420 .elementor-element.elementor-element-9423370 .elementor-field-group:not(.elementor-field-type-upload) .elementor-field:not(.elementor-select-wrapper){background-color:#ffffff;border-width:0px 0px 0px 0px;border-radius:90px 90px 90px 90px}.elementor-16420 .elementor-element.elementor-element-9423370 .elementor-button[type="submit"]{background-color:var(--e-global-color-202dc50f);color:#ffffff}.elementor-16420 .elementor-element.elementor-element-9423370 .elementor-button{border-radius:90px 90px 90px 90px}.elementor-16420 .elementor-element.elementor-element-9423370{--e-form-steps-indicators-spacing:20px;--e-form-steps-indicator-padding:30px;--e-form-steps-indicator-inactive-secondary-color:#ffffff;--e-form-steps-indicator-active-secondary-color:#ffffff;--e-form-steps-indicator-completed-secondary-color:#ffffff;--e-form-steps-divider-width:1px;--e-form-steps-divider-gap:10px}.elementor-16420 .elementor-element.elementor-element-9423370>.elementor-widget-container{padding:0px 10px 0px 10px}.elementor-15925 .elementor-element.elementor-element-db2ccbc{text-align:center}.elementor-15925 .elementor-element.elementor-element-db2ccbc .elementor-heading-title{color:var(--e-global-color-3654844);font-family:"Roboto Condensed",Sans-serif}.elementor-15925 .elementor-element.elementor-element-db2ccbc>.elementor-widget-container{padding:20px 0px 0px 0px}.elementor-15925 .elementor-element.elementor-element-5cf7125 .elementor-field-group{padding-right:calc(10px/2);padding-left:calc(10px/2);margin-bottom:20px}.elementor-15925 .elementor-element.elementor-element-5cf7125 .elementor-form-fields-wrapper{margin-left:calc(-10px/2);margin-right:calc(-10px/2);margin-bottom:-20px}.elementor-15925 .elementor-element.elementor-element-5cf7125 .elementor-field-group.recaptcha_v3-bottomleft{margin-bottom:0}.elementor-15925 .elementor-element.elementor-element-5cf7125 .elementor-field-group .elementor-field{color:var(--e-global-color-1761d5f)}.elementor-15925 .elementor-element.elementor-element-5cf7125 .elementor-field-group .elementor-field{font-family:"Roboto Condensed",Sans-serif;font-size:16px;font-weight:500}.elementor-15925 .elementor-element.elementor-element-5cf7125 .elementor-field-group:not(.elementor-field-type-upload) .elementor-field:not(.elementor-select-wrapper){background-color:#ffffff;border-color:var(--e-global-color-3654844);border-width:0px 0px 0px 0px;border-radius:90px 90px 90px 90px}.elementor-15925 .elementor-element.elementor-element-5cf7125 .elementor-button{font-family:"Roboto Condensed",Sans-serif;font-weight:600;border-radius:90px 90px 90px 90px}.elementor-15925 .elementor-element.elementor-element-5cf7125 .elementor-button[type="submit"]{background-color:var(--e-global-color-202dc50f);color:#ffffff}.elementor-15925 .elementor-element.elementor-element-5cf7125{--e-form-steps-indicators-spacing:20px;--e-form-steps-indicator-padding:30px;--e-form-steps-indicator-inactive-secondary-color:#ffffff;--e-form-steps-indicator-active-secondary-color:#ffffff;--e-form-steps-indicator-completed-secondary-color:#ffffff;--e-form-steps-divider-width:1px;--e-form-steps-divider-gap:10px}.elementor-15925 .elementor-element.elementor-element-5cf7125>.elementor-widget-container{padding:20px 20px 20px 20px}@media (max-width:767px){.elementor-15925 .elementor-element.elementor-element-db2ccbc .elementor-heading-title{font-size:22px;line-height:1.9em}}.fa,.fas{-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;display:inline-block;font-style:normal;font-variant:normal;text-rendering:auto;line-height:1}.fa-lg{font-size:1.33333em;line-height:.75em;vertical-align:-.0667em}.fa-angle-down:before{content:"\f107"}.fa-caret-right:before{content:"\f0da"}.fa-chevron-up:before{content:"\f077"}.fa-home:before{content:"\f015"}.fa-search:before{content:"\f002"}@font-face{font-family:"Font Awesome 5 Free";font-style:normal;font-weight:900;font-display:swap;src:url(https://newocean.edu.vn/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-solid-900.eot);src:url(https://newocean.edu.vn/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-solid-900.eot?#iefix) format("embedded-opentype"),url({{asset('public/assets/fonts/awesome/fa-solid-900.woff2')}}) format("woff2"),url({{asset('public/assets/fonts/awesome/fa-solid-900.woff')}}) format("woff"),url(https://newocean.edu.vn/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-solid-900.ttf) format("truetype"),url(https://newocean.edu.vn/wp-content/plugins/elementor/assets/lib/font-awesome/webfonts/fa-solid-900.svg#fontawesome) format("svg")}.fa,.fas{font-family:"Font Awesome 5 Free";font-weight:900}.elementor-20924 .elementor-element.elementor-element-8f0d5cb:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap{background-color:var(--e-global-color-primary)}.elementor-20924 .elementor-element.elementor-element-8f0d5cb>.elementor-element-populated{border-radius:5px 0px 0px 5px}.elementor-20924 .elementor-element.elementor-element-909a84c .elementor-heading-title{color:var(--e-global-color-3654844);font-size:13px;font-weight:500}.elementor-20924 .elementor-element.elementor-element-909a84c>.elementor-widget-container{padding:10px 5px 5px 5px}.elementor-20924 .elementor-element.elementor-element-684374e .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child){padding-bottom:calc(13px/2)}.elementor-20924 .elementor-element.elementor-element-684374e .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child){margin-top:calc(13px/2)}.elementor-20924 .elementor-element.elementor-element-684374e .elementor-icon-list-icon i{color:var(--e-global-color-3654844)}.elementor-20924 .elementor-element.elementor-element-684374e{--e-icon-list-icon-size:12px;--e-icon-list-icon-align:right;--e-icon-list-icon-margin:0 0 0 calc(var(--e-icon-list-icon-size, 1em) * 0.25)}.elementor-20924 .elementor-element.elementor-element-684374e .elementor-icon-list-text{color:var(--e-global-color-3654844)}.elementor-20924 .elementor-element.elementor-element-684374e .elementor-icon-list-item>a{font-family:"Roboto",Sans-serif;font-size:14px;font-weight:400}.elementor-20924 .elementor-element.elementor-element-d4b0de5:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap{background-color:var(--e-global-color-primary)}.elementor-20924 .elementor-element.elementor-element-2162367 .elementor-heading-title{color:var(--e-global-color-3654844);font-size:13px;font-weight:500}.elementor-20924 .elementor-element.elementor-element-2162367>.elementor-widget-container{padding:10px 5px 5px 5px}.elementor-20924 .elementor-element.elementor-element-4a443eb .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child){padding-bottom:calc(13px/2)}.elementor-20924 .elementor-element.elementor-element-4a443eb .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child){margin-top:calc(13px/2)}.elementor-20924 .elementor-element.elementor-element-4a443eb .elementor-icon-list-icon i{color:var(--e-global-color-3654844)}.elementor-20924 .elementor-element.elementor-element-4a443eb{--e-icon-list-icon-size:12px;--e-icon-list-icon-align:right;--e-icon-list-icon-margin:0 0 0 calc(var(--e-icon-list-icon-size, 1em) * 0.25)}.elementor-20924 .elementor-element.elementor-element-4a443eb .elementor-icon-list-text{color:var(--e-global-color-3654844)}.elementor-20924 .elementor-element.elementor-element-4a443eb .elementor-icon-list-item>a{font-family:"Roboto",Sans-serif;font-size:14px;font-weight:400}.elementor-20924 .elementor-element.elementor-element-dd691cd:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap{background-color:var(--e-global-color-primary)}.elementor-20924 .elementor-element.elementor-element-6f1e6be .elementor-heading-title{color:var(--e-global-color-3654844);font-size:13px;font-weight:500}.elementor-20924 .elementor-element.elementor-element-6f1e6be>.elementor-widget-container{padding:10px 5px 5px 5px}.elementor-20924 .elementor-element.elementor-element-18a1dae .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child){padding-bottom:calc(13px/2)}.elementor-20924 .elementor-element.elementor-element-18a1dae .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child){margin-top:calc(13px/2)}.elementor-20924 .elementor-element.elementor-element-18a1dae .elementor-icon-list-icon i{color:var(--e-global-color-3654844)}.elementor-20924 .elementor-element.elementor-element-18a1dae{--e-icon-list-icon-size:12px;--e-icon-list-icon-align:right;--e-icon-list-icon-margin:0 0 0 calc(var(--e-icon-list-icon-size, 1em) * 0.25)}.elementor-20924 .elementor-element.elementor-element-18a1dae .elementor-icon-list-text{color:var(--e-global-color-3654844)}.elementor-20924 .elementor-element.elementor-element-18a1dae .elementor-icon-list-item>a{font-family:"Roboto",Sans-serif;font-size:14px;font-weight:400}.elementor-20924 .elementor-element.elementor-element-18a1dae>.elementor-widget-container{padding:0px 0px 15px 0px}.elementor-20924 .elementor-element.elementor-element-be43f4c:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap{background-color:var(--e-global-color-primary)}.elementor-20924 .elementor-element.elementor-element-be43f4c>.elementor-element-populated{border-radius:0px 5px 5px 0px}.elementor-20924 .elementor-element.elementor-element-c0ee130 .elementor-heading-title{color:var(--e-global-color-3654844);font-size:13px;font-weight:500}.elementor-20924 .elementor-element.elementor-element-c0ee130>.elementor-widget-container{padding:10px 5px 5px 5px}.elementor-20924 .elementor-element.elementor-element-d71f05f .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child){padding-bottom:calc(13px/2)}.elementor-20924 .elementor-element.elementor-element-d71f05f .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child){margin-top:calc(13px/2)}.elementor-20924 .elementor-element.elementor-element-d71f05f .elementor-icon-list-icon i{color:var(--e-global-color-3654844)}.elementor-20924 .elementor-element.elementor-element-d71f05f{--e-icon-list-icon-size:12px;--e-icon-list-icon-align:right;--e-icon-list-icon-margin:0 0 0 calc(var(--e-icon-list-icon-size, 1em) * 0.25)}.elementor-20924 .elementor-element.elementor-element-d71f05f .elementor-icon-list-text{color:var(--e-global-color-3654844)}.elementor-20924 .elementor-element.elementor-element-d71f05f .elementor-icon-list-item>a{font-family:"Roboto",Sans-serif;font-size:14px;font-weight:400}@keyframes fadeIn{from{opacity:0}to{opacity:1}}.fadeIn{animation-name:fadeIn}.wp-block-themepunch-revslider{position:relative}@font-face{font-family:'revicons';src:url(https://newocean.edu.vn/wp-content/plugins/revslider/public/assets/fonts/revicons/revicons.eot?5510888);src:url(https://newocean.edu.vn/wp-content/plugins/revslider/public/assets/fonts/revicons/revicons.eot?5510888#iefix) format('embedded-opentype'),url({{asset('public/assets/fonts/revicons/revicons.woff')}}) format('woff'),url({{asset('assets/fonts/revicons/revicons.ttf')}}) format('truetype'),url(https://newocean.edu.vn/wp-content/plugins/revslider/public/assets/fonts/revicons/revicons.svg?5510888#revicons) format('svg');font-weight:normal;font-style:normal;font-display:swap}rs-module-wrap{visibility:hidden}rs-module-wrap,rs-module-wrap *{box-sizing:border-box}rs-module-wrap{position:relative;z-index:1;width:100%;display:block}rs-module{position:relative;overflow:hidden;display:block}rs-sbg{display:block}rs-sbg-px,rs-sbg-wrap{position:absolute;top:0px;left:0px;z-index:0;width:100%;height:100%;display:block}rs-module img{max-width:none!important;margin:0px;padding:0px;border:none}rs-slides,rs-slide,rs-slide:before{position:absolute;text-indent:0em;top:0px;left:0px}rs-slide,rs-slide:before{display:block;visibility:hidden}rs-module rs-layer,rs-module .rs-layer{opacity:0;position:relative;visibility:hidden;display:block;-webkit-font-smoothing:antialiased!important;-moz-osx-font-smoothing:grayscale;z-index:1;font-display:swap}rs-module rs-mask-wrap .rs-layer,rs-module rs-mask-wrap *:last-child{margin-bottom:0}rs-layer:not(.rs-wtbindex),.rs-layer:not(.rs-wtbindex),.rs-layer *:not(.rs-wtbindex){outline:none!important}rs-layer-wrap,rs-loop-wrap,rs-mask-wrap{display:block}rs-layer-wrap,rs-mask-wrap{transform-style:flat}@-moz-document url-prefix(){rs-layer-wrap,rs-mask-wrap{perspective:none}}rs-mask-wrap{overflow:hidden}.rs-layer img,rs-layer img{vertical-align:top}.rs-parallax-wrap.rs-layer-hidden{visibility:hidden!important;display:none!important}rs-progress{visibility:hidden;position:absolute;z-index:200;width:100%;height:100%}rs-progress-bar{display:block;z-index:20;box-sizing:border-box;background-clip:content-box;position:absolute;line-height:0px;width:100%;height:100%}.rs-layer img{background:transparent;-ms-filter:"progid:DXImageTransform.Microsoft.gradient(startColorstr=#00FFFFFF,endColorstr=#00FFFFFF)";filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#00FFFFFF,endColorstr=#00FFFFFF)}.rs-layer.slidelink{width:100%;height:100%}rs-bullet,rs-bullets,rs-arrow{display:block}.tp-bullets{position:absolute;display:block;z-index:1000;top:0px;left:0px}.tp-bullet{width:15px;height:15px;position:absolute;background:#fff;background:rgba(255,255,255,0.3)}.tp-bullet.selected{background:#fff}.tparrows{background:#000;background:rgba(0,0,0,0.5);width:40px;height:40px;position:absolute;display:block;z-index:1000}.tparrows:before{font-family:"revicons";font-size:15px;color:#fff;display:block;line-height:40px;text-align:center}.tparrows.tp-leftarrow:before{content:'\e824'}.tparrows.tp-rightarrow:before{content:'\e825'}rs-sbg canvas{overflow:hidden;z-index:5;-webkit-backface-visibility:hidden;backface-visibility:hidden}</style>
    <link rel="stylesheet preload prefetch" href="{{asset('public/css/1ab8181ff7d8c241e0921085c97e1980.css')}}" as="style" media="all" />
    <meta name="description" content="Công Ty Tư vấn Du học New Ocean, Trung Tâm Tư Vấn Du Học hỗ trợ chuyên sâu dịch vụ về du học như tư vấn chọn trường, xin thư mời, phỏng vấn" />
    <link rel="canonical" href="https://newocean.edu.vn/" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Công Ty Tư vấn Du học New Ocean | Trung Tâm Tư Vấn Du Học" />
    <meta property="og:description" content="Công Ty Tư vấn Du học New Ocean, Trung Tâm Tư Vấn Du Học hỗ trợ chuyên sâu dịch vụ về du học như tư vấn chọn trường, xin thư mời, phỏng vấn" />
    <meta property="og:url" content="https://newocean.edu.vn/" />
    <meta property="og:site_name" content="Du học New Ocean™" />
    <meta property="article:publisher" content="https://www.facebook.com/uocmoduhoc" />
    <meta property="article:modified_time" content="2023-04-20T09:40:49+00:00" />
    <meta property="og:image" content="https://newocean.edu.vn/wp-content/uploads/2020/05/Tu-van-Du-hoc-1200x628-1.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="628" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:label1" content="Ước tính thời gian đọc" />
    <meta name="twitter:data1" content="10 phút" />
    <script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"WebPage","@id":"https://newocean.edu.vn/","url":"https://newocean.edu.vn/","name":"Công Ty Tư vấn Du học New Ocean | Trung Tâm Tư Vấn Du Học","isPartOf":{"@id":"https://newocean.edu.vn/#website"},"about":{"@id":"https://newocean.edu.vn/#organization"},"primaryImageOfPage":{"@id":"https://newocean.edu.vn/#primaryimage"},"image":{"@id":"https://newocean.edu.vn/#primaryimage"},"thumbnailUrl":"https://newocean.edu.vn/wp-content/uploads/2020/05/Tu-van-Du-hoc-1200x628-1.jpg","datePublished":"2019-11-26T12:36:36+00:00","dateModified":"2023-04-20T09:40:49+00:00","description":"Công Ty Tư vấn Du học New Ocean, Trung Tâm Tư Vấn Du Học hỗ trợ chuyên sâu dịch vụ về du học như tư vấn chọn trường, xin thư mời, phỏng vấn","breadcrumb":{"@id":"https://newocean.edu.vn/#breadcrumb"},"inLanguage":"vi","potentialAction":[{"@type":"ReadAction","target":["https://newocean.edu.vn/"]}]},{"@type":"ImageObject","inLanguage":"vi","@id":"https://newocean.edu.vn/#primaryimage","url":"https://newocean.edu.vn/wp-content/uploads/2020/05/Tu-van-Du-hoc-1200x628-1.jpg","contentUrl":"https://newocean.edu.vn/wp-content/uploads/2020/05/Tu-van-Du-hoc-1200x628-1.jpg","width":1200,"height":628,"caption":"Công ty tư vấn du học, công ty du học, trung tâm du học, trung tâm tư vấn du học"},{"@type":"BreadcrumbList","@id":"https://newocean.edu.vn/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home"}]},{"@type":"WebSite","@id":"https://newocean.edu.vn/#website","url":"https://newocean.edu.vn/","name":"Du học New Ocean | Tư Vấn Du Học New Ocean | Công Ty Du học New Ocean","description":"Chắp cánh ước mơ du học","publisher":{"@id":"https://newocean.edu.vn/#organization"},"potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://newocean.edu.vn/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"vi"},{"@type":"Organization","@id":"https://newocean.edu.vn/#organization","name":"Công ty tư vấn du học New Ocean","url":"https://newocean.edu.vn/","logo":{"@type":"ImageObject","inLanguage":"vi","@id":"https://newocean.edu.vn/#/schema/logo/image/","url":"https://newocean.edu.vn/wp-content/uploads/2019/12/logo-du-hoc-new-ocean-scaled.png","contentUrl":"https://newocean.edu.vn/wp-content/uploads/2019/12/logo-du-hoc-new-ocean-scaled.png","width":2560,"height":1970,"caption":"Công ty tư vấn du học New Ocean"},"image":{"@id":"https://newocean.edu.vn/#/schema/logo/image/"},"sameAs":["https://www.facebook.com/uocmoduhoc","https://www.youtube.com/channel/UCOkhgPaV1JJPtOUaRwuW3mA/videos","https://www.flickr.com/photos/new-ocean/albums","https://www.google.com/search?q=Tư Vấn Du Học New Ocean&amp;amp;stick=H4sIAAAAAAAA_-NgU1I1qDA2NDZNTDJPSTUytDCxMDS1MqgwNDQ3MTA0NrAwMEkxT0w0X8QqE3Jsg0LYw11L8xRcShU8Hu7uTVbwSy1X8E9OTcwDAL4VPTZIAAAA&amp;amp;hl=vi&amp;amp;mat=CecDnxXRrSHAElcB8pgkaL0aAHmrKfcuaIYyZWWBPOCa-WbY3bjwJLjTVdJZqG6NsvcXhdvnKnPY9jaqqrG8wYZOOepyU2ULGyxGdOx6RByKnRK8d0o1aPK9ASWN08ncR58&amp;amp;authuser=1","https://www.google.com/search?q=Tư Vấn Du Học New Ocean&amp;amp;stick=H4sIAAAAAAAA_-NgU1I1qDA2NDc1SjMxNkw2MUoxTkyzMqhITUu0SDMwTkpMNjKwMElNW8QqE3Jsg0LYw11L8xRcShU8Hu7uTVbwSy1X8E9OTcwDADDSGDVIAAAA&amp;amp;hl=vi&amp;amp;mat=CZhOr7W6nIYrElcB8pgkaA3I9nca90qT-RfHzMwF9OG1CDy9-QDsobfv0O_s2DQKDIiED37yCdd0oxxKG21qW0X_1LIiBd3ZSvxsF1cwDHNUo58kfDcm83isQKOvMYh9k7U&amp;amp;authuser=1"]}]}</script>
    <!-- / Yoast SEO Premium plugin. -->


    <link rel='dns-prefetch' href='//connect.facebook.net' />
    <link rel='dns-prefetch' href='//maps.googleapis.com' />
    <link rel='dns-prefetch' href='//maps.gstatic.com' />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel='dns-prefetch' href='//fonts.gstatic.com' />
    <link rel='dns-prefetch' href='//ajax.googleapis.com' />
    <link rel='dns-prefetch' href='//apis.google.com' />
    <link rel='dns-prefetch' href='//google-analytics.com' />
    <link rel='dns-prefetch' href='//www.google-analytics.com' />
    <link rel='dns-prefetch' href='//ssl.google-analytics.com' />
    <link rel='dns-prefetch' href='//youtube.com' />
    <link rel='dns-prefetch' href='//i.ytimg.com' />
    <link rel='dns-prefetch' href='//ad.doubleclick.net' />
    <link rel='dns-prefetch' href='//googleads.g.doubleclick.net' />
    <link rel='dns-prefetch' href='//stats.g.doubleclick.net' />
    <link rel='dns-prefetch' href='//cm.g.doubleclick.net' />
    <link rel='dns-prefetch' href='//www.googletagmanager.com' />
    <link rel='dns-prefetch' href='//www.googletagservices.com' />
    <link rel='dns-prefetch' href='//adservice.google.com' />
    <link rel='dns-prefetch' href='//use.fontawesome.com' />
    <link rel='dns-prefetch' href='//0.gravatar.com' />
    <link rel='dns-prefetch' href='//2.gravatar.com' />
    <link rel='dns-prefetch' href='//1.gravatar.com' />
    <link rel='dns-prefetch' href='//code.jquery.com' />
    <link rel='dns-prefetch' href='//scontent-mia3-1.xx.fbcdn.net' />
    <link rel='dns-prefetch' href='//www.google.com' />
    <link rel='dns-prefetch' href='//www.gstatic.com' />
    <link rel='dns-prefetch' href='//cdn.jsdelivr.net' />
    <link href='https://fonts.gstatic.com' crossorigin rel='preconnect' />




    <style id='global-styles-inline-css'>
        body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
        .wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
        :where(.wp-block-columns.is-layout-flex){gap: 2em;}
        .wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
    </style>










    <link rel='preload'  href='https://newocean.edu.vn/wp-content/uploads/elementor/css/post-10750.css?ver=1684549523' data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')"  media='all' />





    <link rel='preload'  href='https://newocean.edu.vn/wp-content/uploads/elementor/css/global.css?ver=1684549524' data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')"  media='all' />
    <link rel='preload'  href='https://newocean.edu.vn/wp-content/uploads/elementor/css/post-174.css?ver=1684549583' data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')"  media='all' />
    <link rel='preload'  href='https://newocean.edu.vn/wp-content/uploads/elementor/css/post-20880.css?ver=1684549525' data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')"  media='all' />
    <link rel='preload'  href='https://newocean.edu.vn/wp-content/uploads/elementor/css/post-20951.css?ver=1684549525' data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')"  media='all' />
    <link rel='preload'  href='https://newocean.edu.vn/wp-content/uploads/elementor/css/post-16420.css?ver=1684549525' data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')"  media='all' />
    <link rel='preload'  href='https://newocean.edu.vn/wp-content/uploads/elementor/css/post-15925.css?ver=1684549525' data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')"  media='all' />
    <style id='rocket-lazyload-inline-css'>
        .rll-youtube-player{position:relative;padding-bottom:56.23%;height:0;overflow:hidden;max-width:100%;}.rll-youtube-player:focus-within{outline: 2px solid currentColor;outline-offset: 5px;}.rll-youtube-player iframe{position:absolute;top:0;left:0;width:100%;height:100%;z-index:100;background:0 0}.rll-youtube-player img{bottom:0;display:block;left:0;margin:auto;max-width:100%;width:100%;position:absolute;right:0;top:0;border:none;height:auto;-webkit-transition:.4s all;-moz-transition:.4s all;transition:.4s all}.rll-youtube-player img:hover{-webkit-filter:brightness(75%)}.rll-youtube-player .play{height:100%;width:100%;left:0;top:0;position:absolute;background:url(https://newocean.edu.vn/wp-content/plugins/wp-rocket/assets/img/youtube.png) no-repeat center;background-color: transparent !important;cursor:pointer;border:none;}
    </style>




    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin><script src='https://newocean.edu.vn/wp-includes/js/jquery/jquery.min.js?ver=3.6.4' id='jquery-core-js'></script>
    <script src='https://newocean.edu.vn/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.0' id='jquery-migrate-js'></script>
    <script id='contactus-js-extra'>
        var arCUVars = {"url":"https:\/\/newocean.edu.vn\/wp-admin\/admin-ajax.php","version":"2.2.7","_wpnonce":"<input type=\"hidden\" id=\"_wpnonce\" name=\"_wpnonce\" value=\"06bde1af4a\" \/><input type=\"hidden\" name=\"_wp_http_referer\" value=\"\/\" \/>"};
    </script>
    <script src='https://newocean.edu.vn/wp-content/plugins/ar-contactus/res/js/contactus.min.js?ver=2.2.7' id='contactus-js' defer></script>
    <script data-minify="1" src='https://newocean.edu.vn/wp-content/cache/min/1/wp-content/plugins/ar-contactus/res/js/scripts.js?ver=1682646089' id='contactus.scripts-js' defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Google Tag Manager -->

    <!-- End Google Tag Manager -->
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <link rel="preload" as="font" href="{{asset('public/assets/fonts/awesome/fa-solid-900.woff2')}}" crossorigin>
    <link as="font" href="{{asset('public/assets/fonts/awesome/fa-brands-400.woff')}}2" crossorigin>
    <link as="font" href="{{asset('public/assets/fonts/awesome/fa-regular-400.woff2')}}" crossorigin>
    <link rel="preload" as="font" href="{{asset('public/assets/fonts/eicons/eicons.woff2')}}" crossorigin><meta name="generator" content="Elementor 3.13.2; features: e_dom_optimization, e_optimized_assets_loading, a11y_improvements, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <meta property="fb:app_id" content="394781937574480" /><meta name="generator" content="Powered by Slider Revolution 6.5.31 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <link rel="icon" href="https://newocean.edu.vn/wp-content/uploads/2020/03/ico.png" sizes="32x32" />
    <link rel="icon" href="https://newocean.edu.vn/wp-content/uploads/2020/03/ico.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="https://newocean.edu.vn/wp-content/uploads/2020/03/ico.png" />
    <meta name="msapplication-TileImage" content="https://newocean.edu.vn/wp-content/uploads/2020/03/ico.png" />
    <script>function setREVStartSize(e){
            //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW===undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH===undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw===0 || isNaN(pw) || (e.l=="fullwidth" || e.layout=="fullwidth") ? window.RSIW : pw;
                e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);
                if(e.layout==="fullscreen" || e.l==="fullscreen")
                    newh = Math.max(e.mh,window.RSIH);
                else{
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];
                    e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];

                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide>=pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide>=pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i]<window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}
                    var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);
                    newh =  (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                var el = document.getElementById(e.c);
                if (el!==null && el) el.style.height = newh+"px";
                el = document.getElementById(e.c+"_wrapper");
                if (el!==null && el) {
                    el.style.height = newh+"px";
                    el.style.display = "block";
                }
            } catch(e){
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        };</script>
    <style id="wp-custom-css">
        .jet-menu.jet-menu--animation-type-fade .jet-mega-menu-item.jet-menu-hover .jet-sub-mega-menu{background:transparent}
        ul{margin-bottom:10px}
        .grecaptcha-badge{visibility: hidden;}
        /*phone
         */
        .phonering-alo-phone.phonering-alo-static {
            opacity:.6
        }

        .phonering-alo-phone.phonering-alo-hover,.phonering-alo-phone:hover {
            opacity:1
        }
        .phonering-alo-ph-img-circle {
            width: 50px;
            height: 50px;
            margin-top: -12px;
            position:absolute;
            background:rgba(30,30,30,0.1) url(https://newocean.edu.vn/wp-content/uploads/2022/04/icon-phone.png) no-repeat center center;
            border-radius:100% !important;
            border:2px solid transparent;
            -webkit-animation:phonering-alo-circle-img-anim 1s infinite ease-in-out;
            animation:phonering-alo-circle-img-anim 1s infinite ease-in-out;
            -webkit-transform-origin:50% 50%;
            -ms-transform-origin:50% 50%;
            transform-origin:50% 50%
        }
        .phonering-alo-phone span{
            color: #fff;
            border: solid 1px;
            border-radius: 90px;
            padding: 12px;
            padding-left: 30px;
            margin-left: 31px;
            font-weight: 600;
            font-size: 18px;}
        .phonering-alo-phone.phonering-alo-active .phonering-alo-ph-img-circle {
            -webkit-animation:phonering-alo-circle-img-anim 1s infinite ease-in-out!important;
            animation:phonering-alo-circle-img-anim 1s infinite ease-in-out!important
        }

        .phonering-alo-phone.phonering-alo-static .phonering-alo-ph-img-circle {
            -webkit-animation:phonering-alo-circle-img-anim 0 infinite ease-in-out!important;
            animation:phonering-alo-circle-img-anim 0 infinite ease-in-out!important
        }
        .phonering-alo-phone.phonering-alo-green .phonering-alo-ph-img-circle {
            background-color:#fff;
        }
        .phonering-alo-phone.phonering-alo-gray .phonering-alo-ph-img-circle {
            background-color:#75eb50
        }

        @-webkit-keyframes phonering-alo-circle-anim {
            0% {
                -webkit-transform:rotate(0) scale(.5) skew(1deg);
                -webkit-opacity:.1
            }

            30% {
                -webkit-transform:rotate(0) scale(.7) skew(1deg);
                -webkit-opacity:.5
            }

            100% {
                -webkit-transform:rotate(0) scale(1) skew(1deg);
                -webkit-opacity:.1
            }
        }

        @-webkit-keyframes phonering-alo-circle-fill-anim {
            0% {
                -webkit-transform:rotate(0) scale(.7) skew(1deg);
                opacity:.2
            }

            50% {
                -webkit-transform:rotate(0) scale(1) skew(1deg);
                opacity:.2
            }

            100% {
                -webkit-transform:rotate(0) scale(.7) skew(1deg);
                opacity:.2
            }
        }

        @-webkit-keyframes phonering-alo-circle-img-anim {
            0% {
                -webkit-transform:rotate(0) scale(1) skew(1deg)
            }

            10% {
                -webkit-transform:rotate(-25deg) scale(1) skew(1deg)
            }

            20% {
                -webkit-transform:rotate(25deg) scale(1) skew(1deg)
            }

            30% {
                -webkit-transform:rotate(-25deg) scale(1) skew(1deg)
            }

            40% {
                -webkit-transform:rotate(25deg) scale(1) skew(1deg)
            }

            50% {
                -webkit-transform:rotate(0) scale(1) skew(1deg)
            }

            100% {
                -webkit-transform:rotate(0) scale(1) skew(1deg)
            }
        }

        @-webkit-keyframes fadeInRight {
            0% {
                opacity:0;
                -webkit-transform:translate3d(100%,0,0);
                -ms-transform:translate3d(100%,0,0);
                transform:translate3d(100%,0,0)
            }

            100% {
                opacity:1;
                -webkit-transform:none;
                -ms-transform:none;
                transform:none
            }
        }

        @keyframes fadeInRight {
            0% {
                opacity:0;
                -webkit-transform:translate3d(100%,0,0);
                -ms-transform:translate3d(100%,0,0);
                transform:translate3d(100%,0,0)
            }

            100% {
                opacity:1;
                -webkit-transform:none;
                -ms-transform:none;
                transform:none
            }
        }

        @-webkit-keyframes fadeOutRight {
            0% {
                opacity:1
            }

            100% {
                opacity:0;
                -webkit-transform:translate3d(100%,0,0);
                -ms-transform:translate3d(100%,0,0);
                transform:translate3d(100%,0,0)
            }
        }

        @keyframes fadeOutRight {
            0% {
                opacity:1
            }

            100% {
                opacity:0;
                -webkit-transform:translate3d(100%,0,0);
                -ms-transform:translate3d(100%,0,0);
                transform:translate3d(100%,0,0)
            }
        }

        @-webkit-keyframes phonering-alo-circle-anim {
            0% {
                -webkit-transform:rotate(0) scale(.5) skew(1deg);
                transform:rotate(0) scale(.5) skew(1deg);
                opacity:.1
            }

            30% {
                -webkit-transform:rotate(0) scale(.7) skew(1deg);
                transform:rotate(0) scale(.7) skew(1deg);
                opacity:.5
            }

            100% {
                -webkit-transform:rotate(0) scale(1) skew(1deg);
                transform:rotate(0) scale(1) skew(1deg);
                opacity:.1
            }
        }

        @keyframes phonering-alo-circle-anim {
            0% {
                -webkit-transform:rotate(0) scale(.5) skew(1deg);
                transform:rotate(0) scale(.5) skew(1deg);
                opacity:.1
            }

            30% {
                -webkit-transform:rotate(0) scale(.7) skew(1deg);
                transform:rotate(0) scale(.7) skew(1deg);
                opacity:.5
            }

            100% {
                -webkit-transform:rotate(0) scale(1) skew(1deg);
                transform:rotate(0) scale(1) skew(1deg);
                opacity:.1
            }
        }

        @-webkit-keyframes phonering-alo-circle-fill-anim {
            0% {
                -webkit-transform:rotate(0) scale(.7) skew(1deg);
                transform:rotate(0) scale(.7) skew(1deg);
                opacity:.2
            }

            50% {
                -webkit-transform:rotate(0) scale(1) skew(1deg);
                transform:rotate(0) scale(1) skew(1deg);
                opacity:.2
            }

            100% {
                -webkit-transform:rotate(0) scale(.7) skew(1deg);
                transform:rotate(0) scale(.7) skew(1deg);
                opacity:.2
            }
        }

        @keyframes phonering-alo-circle-fill-anim {
            0% {
                -webkit-transform:rotate(0) scale(.7) skew(1deg);
                transform:rotate(0) scale(.7) skew(1deg);
                opacity:.2
            }

            50% {
                -webkit-transform:rotate(0) scale(1) skew(1deg);
                transform:rotate(0) scale(1) skew(1deg);
                opacity:.2
            }

            100% {
                -webkit-transform:rotate(0) scale(.7) skew(1deg);
                transform:rotate(0) scale(.7) skew(1deg);
                opacity:.2
            }
        }

        @-webkit-keyframes phonering-alo-circle-img-anim {
            0% {
                -webkit-transform:rotate(0) scale(1) skew(1deg);
                transform:rotate(0) scale(1) skew(1deg)
            }

            10% {
                -webkit-transform:rotate(-25deg) scale(1) skew(1deg);
                transform:rotate(-25deg) scale(1) skew(1deg)
            }

            20% {
                -webkit-transform:rotate(25deg) scale(1) skew(1deg);
                transform:rotate(25deg) scale(1) skew(1deg)
            }

            30% {
                -webkit-transform:rotate(-25deg) scale(1) skew(1deg);
                transform:rotate(-25deg) scale(1) skew(1deg)
            }

            40% {
                -webkit-transform:rotate(25deg) scale(1) skew(1deg);
                transform:rotate(25deg) scale(1) skew(1deg)
            }

            50% {
                -webkit-transform:rotate(0) scale(1) skew(1deg);
                transform:rotate(0) scale(1) skew(1deg)
            }

            100% {
                -webkit-transform:rotate(0) scale(1) skew(1deg);
                transform:rotate(0) scale(1) skew(1deg)
            }
        }

        @keyframes phonering-alo-circle-img-anim {
            0% {
                -webkit-transform:rotate(0) scale(1) skew(1deg);
                transform:rotate(0) scale(1) skew(1deg)
            }

            10% {
                -webkit-transform:rotate(-25deg) scale(1) skew(1deg);
                transform:rotate(-25deg) scale(1) skew(1deg)
            }

            20% {
                -webkit-transform:rotate(25deg) scale(1) skew(1deg);
                transform:rotate(25deg) scale(1) skew(1deg)
            }

            30% {
                -webkit-transform:rotate(-25deg) scale(1) skew(1deg);
                transform:rotate(-25deg) scale(1) skew(1deg)
            }

            40% {
                -webkit-transform:rotate(25deg) scale(1) skew(1deg);
                transform:rotate(25deg) scale(1) skew(1deg)
            }

            50% {
                -webkit-transform:rotate(0) scale(1) skew(1deg);
                transform:rotate(0) scale(1) skew(1deg)
            }

            100% {
                -webkit-transform:rotate(0) scale(1) skew(1deg);
                transform:rotate(0) scale(1) skew(1deg)
            }
        }		</style>
    <noscript><style id="rocket-lazyload-nojs-css">.rll-youtube-player, [data-lazy-src]{display:none !important;}</style></noscript><script type="rocketlazyloadscript">
/*! loadCSS rel=preload polyfill. [c]2017 Filament Group, Inc. MIT License */
(function(w){"use strict";if(!w.loadCSS){w.loadCSS=function(){}}
var rp=loadCSS.relpreload={};rp.support=(function(){var ret;try{ret=w.document.createElement("link").relList.supports("preload")}catch(e){ret=!1}
return function(){return ret}})();rp.bindMediaToggle=function(link){var finalMedia=link.media||"all";function enableStylesheet(){link.media=finalMedia}
if(link.addEventListener){link.addEventListener("load",enableStylesheet)}else if(link.attachEvent){link.attachEvent("onload",enableStylesheet)}
setTimeout(function(){link.rel="stylesheet";link.media="only x"});setTimeout(enableStylesheet,3000)};rp.poly=function(){if(rp.support()){return}
var links=w.document.getElementsByTagName("link");for(var i=0;i<links.length;i++){var link=links[i];if(link.rel==="preload"&&link.getAttribute("as")==="style"&&!link.getAttribute("data-loadcss")){link.setAttribute("data-loadcss",!0);rp.bindMediaToggle(link)}}};if(!rp.support()){rp.poly();var run=w.setInterval(rp.poly,500);if(w.addEventListener){w.addEventListener("load",function(){rp.poly();w.clearInterval(run)})}else if(w.attachEvent){w.attachEvent("onload",function(){rp.poly();w.clearInterval(run)})}}
if(typeof exports!=="undefined"){exports.loadCSS=loadCSS}
else{w.loadCSS=loadCSS}}(typeof global!=="undefined"?global:this))
</script></head>
<body class="home page-template page-template-elementor_header_footer page page-id-174 wp-custom-logo jet-desktop-menu-active elementor-default elementor-template-full-width elementor-kit-10750 elementor-page elementor-page-174">

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-dark-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0.49803921568627" /><feFuncG type="table" tableValues="0 0.49803921568627" /><feFuncB type="table" tableValues="0 0.49803921568627" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-grayscale"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-purple-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-red"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 1" /><feFuncG type="table" tableValues="0 0.27843137254902" /><feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-midnight"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0 0" /><feFuncG type="table" tableValues="0 0.64705882352941" /><feFuncB type="table" tableValues="0 1" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-magenta-yellow"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.78039215686275 1" /><feFuncG type="table" tableValues="0 0.94901960784314" /><feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-purple-green"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" /><feFuncG type="table" tableValues="0 1" /><feFuncB type="table" tableValues="0.44705882352941 0.4" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" ><defs><filter id="wp-duotone-blue-orange"><feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " /><feComponentTransfer color-interpolation-filters="sRGB" ><feFuncR type="table" tableValues="0.098039215686275 1" /><feFuncG type="table" tableValues="0 0.66274509803922" /><feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" /><feFuncA type="table" tableValues="1 1" /></feComponentTransfer><feComposite in2="SourceGraphic" operator="in" /></filter></defs></svg><!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WKSJ2SZ"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- Messenger Plugin chat Code -->
<div id="fb-root"></div>

<!-- Your Plugin chat code -->

<!-- Your SDK code -->

<a class="skip-link screen-reader-text" href="#content">
    Skip to content</a>

<header data-elementor-type="header" data-elementor-id="20880" class="elementor elementor-20880 elementor-location-header">
    <header class="elementor-section elementor-top-section elementor-element elementor-element-cb01285 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="cb01285" data-element_type="section" id="scrolltop" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-a5fce40" data-id="a5fce40" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-60fc103 elementor-widget elementor-widget-text-editor" data-id="60fc103" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <span>Hotline: <a href="tel:0964562233">096.456.2233</a> &#8211; <a href="tel:02435378311">024.3537.8311</a></span>						</div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-1bee1f2 elementor-hidden-tablet elementor-hidden-mobile" data-id="1bee1f2" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-b59c2bb elementor-search-form--skin-full_screen elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-search-form" data-id="b59c2bb" data-element_type="widget" data-settings="{&quot;skin&quot;:&quot;full_screen&quot;}" data-widget_type="search-form.default">
                        <div class="elementor-widget-container">
                            <form class="elementor-search-form" action="https://newocean.edu.vn" method="get" role="search">
                                <div class="elementor-search-form__toggle" tabindex="0" role="button">
                                    <i aria-hidden="true" class="fas fa-search"></i>				<span class="elementor-screen-only">Search</span>
                                </div>
                                <div class="elementor-search-form__container">
                                    <label class="elementor-screen-only" for="elementor-search-form-b59c2bb">Search</label>


                                    <input id="elementor-search-form-b59c2bb" placeholder="Nhập từ khóa tìm kiếm..." class="elementor-search-form__input" type="search" name="s" value="">


                                    <div class="dialog-lightbox-close-button dialog-close-button" role="button" tabindex="0">
                                        <i aria-hidden="true" class="eicon-close"></i>					<span class="elementor-screen-only">Close this search box.</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-90c4824 elementor-hidden-tablet elementor-hidden-mobile" data-id="90c4824" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-277796a elementor-nav-menu__align-right elementor-hidden-tablet elementor-hidden-mobile elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-widget elementor-widget-nav-menu" data-id="277796a" data-element_type="widget" data-settings="{&quot;layout&quot;:&quot;horizontal&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;i class=\&quot;fas fa-caret-down\&quot;&gt;&lt;\/i&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;}}" data-widget_type="nav-menu.default">
                        <div class="elementor-widget-container">
                            <nav class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-none">
                                <ul id="menu-1-277796a" class="elementor-nav-menu"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14749"><a href="https://newocean.edu.vn/tin-tuc" class="elementor-item">Tin tức</a></li>
                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-21602"><a href="https://newocean.edu.vn/tin-tuc-du-hoc/su-kien" class="elementor-item">Sự kiện</a></li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2884"><a href="/tuyen-dung" class="elementor-item">Tuyển dụng</a></li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-44"><a href="/sitemap" class="elementor-item">Sitemap</a></li>
                                </ul>			</nav>
                            <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" aria-hidden="true">
                                <ul id="menu-2-277796a" class="elementor-nav-menu"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14749"><a href="https://newocean.edu.vn/tin-tuc" class="elementor-item" tabindex="-1">Tin tức</a></li>
                                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-21602"><a href="https://newocean.edu.vn/tin-tuc-du-hoc/su-kien" class="elementor-item" tabindex="-1">Sự kiện</a></li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2884"><a href="/tuyen-dung" class="elementor-item" tabindex="-1">Tuyển dụng</a></li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-44"><a href="/sitemap" class="elementor-item" tabindex="-1">Sitemap</a></li>
                                </ul>			</nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <header class="elementor-section elementor-top-section elementor-element elementor-element-7621bb2 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7621bb2" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-3339d72" data-id="3339d72" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-c189633 elementor-widget elementor-widget-theme-site-logo elementor-widget-image" data-id="c189633" data-element_type="widget" data-widget_type="theme-site-logo.default">
                        <div class="elementor-widget-container">
                            <a href="https://newocean.edu.vn">
                                <img width="299" height="70" src="https://newocean.edu.vn/wp-content/uploads/2020/03/logo.svg" class="attachment-full size-full wp-image-12698" alt="Công ty tư vấn du học, công ty du học, trung tâm du học, trung tâm tư vấn du học" />				</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-f9ac3e1" data-id="f9ac3e1" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-4a35e75 elementor-widget elementor-widget-jet-mega-menu" data-id="4a35e75" data-element_type="widget" data-widget_type="jet-mega-menu.default">
                        <div class="elementor-widget-container">
                            <div class="menu-jet_main-container"><div class="jet-menu-container"><div class="jet-menu-inner"><ul class="jet-menu jet-menu--animation-type-fade jet-menu--roll-up"><li id="jet-menu-item-20889" class="jet-menu-item jet-menu-item-type-custom jet-menu-item-object-custom jet-current-menu-item jet-current_page_item jet-has-roll-up jet-simple-menu-item jet-regular-item jet-menu-item-20889"><a href="/" class="top-level-link"><div class="jet-menu-item-wrapper"><div class="jet-menu-title"><i class="fa fa-home fa-lg" aria-hidden="true"></i>  Home</div></div></a></li>
                                            <li id="jet-menu-item-20891" class="jet-menu-item jet-menu-item-type-post_type jet-menu-item-object-page jet-menu-item-has-children jet-has-roll-up jet-simple-menu-item jet-regular-item jet-menu-item-20891"><a href="https://newocean.edu.vn/gioi-thieu-chung" class="top-level-link"><div class="jet-menu-item-wrapper"><div class="jet-menu-title">Giới thiệu</div><i class="jet-dropdown-arrow fa fa-angle-down"></i></div></a>
                                                <ul  class="jet-sub-menu">
                                                    <li id="jet-menu-item-24666" class="jet-menu-item jet-menu-item-type-post_type jet-menu-item-object-page jet-has-roll-up jet-simple-menu-item jet-regular-item jet-menu-item-24666 jet-sub-menu-item"><a href="https://newocean.edu.vn/tam-nhin-va-su-menh-cong-ty-new-ocean" class="sub-level-link"><div class="jet-menu-item-wrapper"><div class="jet-menu-title">Tầm nhìn &#038; Sứ mệnh</div></div></a></li>
                                                </ul>
                                            </li>
                                            <li id="jet-menu-item-20892" class="jet-menu-item jet-menu-item-type-custom jet-menu-item-object-custom jet-has-roll-up jet-mega-menu-item jet-regular-item jet-menu-item-has-children jet-menu-item-20892"><a rel="nofollow" href="#" class="top-level-link"><div class="jet-menu-item-wrapper"><div class="jet-menu-title">Du học</div><i class="jet-dropdown-arrow fa fa-angle-down"></i></div></a><div class="jet-sub-mega-menu" data-template-id="20924">		<div data-elementor-type="wp-post" data-elementor-id="20924" class="elementor elementor-20924">
                                                        <section class="elementor-section elementor-top-section elementor-element elementor-element-9c9ec1d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9c9ec1d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                            <div class="elementor-container elementor-column-gap-default">
                                                                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-8f0d5cb" data-id="8f0d5cb" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-element elementor-element-909a84c elementor-widget elementor-widget-heading" data-id="909a84c" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2 class="elementor-heading-title elementor-size-small"><a href="https://newocean.edu.vn/du-hoc-chau-uc">DU HỌC CHÂU ÚC</a></h2>		</div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-684374e elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="684374e" data-element_type="widget" data-widget_type="icon-list.default">
                                                                            <div class="elementor-widget-container">
                                                                                <ul class="elementor-icon-list-items">
                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="https://newocean.edu.vn/du-hoc-uc">

												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-caret-right"></i>						</span>
                                                                                            <span class="elementor-icon-list-text">Du học Úc</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="https://newocean.edu.vn/du-hoc-new-zealand">

												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-caret-right"></i>						</span>
                                                                                            <span class="elementor-icon-list-text">Du học New Zealand</span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-d4b0de5" data-id="d4b0de5" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-element elementor-element-2162367 elementor-widget elementor-widget-heading" data-id="2162367" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2 class="elementor-heading-title elementor-size-small"><a href="https://newocean.edu.vn/du-hoc-chau-my">DU HỌC CHÂU MỸ</a></h2>		</div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-4a443eb elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="4a443eb" data-element_type="widget" data-widget_type="icon-list.default">
                                                                            <div class="elementor-widget-container">
                                                                                <ul class="elementor-icon-list-items">
                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="https://newocean.edu.vn/du-hoc-my">

												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-caret-right"></i>						</span>
                                                                                            <span class="elementor-icon-list-text">Du học Mỹ</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="https://newocean.edu.vn/du-hoc-canada">

												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-caret-right"></i>						</span>
                                                                                            <span class="elementor-icon-list-text">Du học Canada</span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-dd691cd" data-id="dd691cd" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-element elementor-element-6f1e6be elementor-widget elementor-widget-heading" data-id="6f1e6be" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2 class="elementor-heading-title elementor-size-small"><a href="https://newocean.edu.vn/du-hoc-chau-au">DU HỌC CHÂU ÂU</a></h2>		</div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-18a1dae elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="18a1dae" data-element_type="widget" data-widget_type="icon-list.default">
                                                                            <div class="elementor-widget-container">
                                                                                <ul class="elementor-icon-list-items">
                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="https://newocean.edu.vn/du-hoc-anh">

												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-caret-right"></i>						</span>
                                                                                            <span class="elementor-icon-list-text">Du học Anh</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="https://newocean.edu.vn/du-hoc-ba-lan">

												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-caret-right"></i>						</span>
                                                                                            <span class="elementor-icon-list-text">Du học Ba Lan</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="https://newocean.edu.vn/du-hoc-ha-lan">

												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-caret-right"></i>						</span>
                                                                                            <span class="elementor-icon-list-text">Du học Hà Lan</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="https://newocean.edu.vn/du-hoc-thuy-si">

												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-caret-right"></i>						</span>
                                                                                            <span class="elementor-icon-list-text">Du học Thụy Sĩ</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="https://newocean.edu.vn/du-hoc-ireland">

												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-caret-right"></i>						</span>
                                                                                            <span class="elementor-icon-list-text">Du học Ireland</span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-be43f4c" data-id="be43f4c" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                                        <div class="elementor-element elementor-element-c0ee130 elementor-widget elementor-widget-heading" data-id="c0ee130" data-element_type="widget" data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2 class="elementor-heading-title elementor-size-small"><a href="https://newocean.edu.vn/du-hoc-chau-a">DU HỌC CHÂU Á</a></h2>		</div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-d71f05f elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="d71f05f" data-element_type="widget" data-widget_type="icon-list.default">
                                                                            <div class="elementor-widget-container">
                                                                                <ul class="elementor-icon-list-items">
                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="https://newocean.edu.vn/du-hoc-singapore">

												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-caret-right"></i>						</span>
                                                                                            <span class="elementor-icon-list-text">Du học Singapore</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="https://newocean.edu.vn/du-hoc-han-quoc">

												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-caret-right"></i>						</span>
                                                                                            <span class="elementor-icon-list-text">Du học Hàn Quốc</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="https://newocean.edu.vn/du-hoc-trung-quoc">

												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-caret-right"></i>						</span>
                                                                                            <span class="elementor-icon-list-text">Du học Trung Quốc</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="elementor-icon-list-item">
                                                                                        <a href="https://newocean.edu.vn/du-hoc-philippines">

												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-caret-right"></i>						</span>
                                                                                            <span class="elementor-icon-list-text">Du học Philippines</span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                </div></li>
                                            <li id="jet-menu-item-20917" class="jet-menu-item jet-menu-item-type-post_type jet-menu-item-object-page jet-has-roll-up jet-simple-menu-item jet-regular-item jet-menu-item-20917"><a href="https://newocean.edu.vn/hoc-bong-du-hoc" class="top-level-link"><div class="jet-menu-item-wrapper"><div class="jet-menu-title">Học bổng</div></div></a></li>
                                            <li id="jet-menu-item-20913" class="jet-menu-item jet-menu-item-type-post_type jet-menu-item-object-page jet-menu-item-has-children jet-has-roll-up jet-simple-menu-item jet-regular-item jet-menu-item-20913"><a href="https://newocean.edu.vn/dich-vu-tu-van-du-hoc" class="top-level-link"><div class="jet-menu-item-wrapper"><div class="jet-menu-title">Góc tư vấn</div><i class="jet-dropdown-arrow fa fa-angle-down"></i></div></a>
                                                <ul  class="jet-sub-menu">
                                                    <li id="jet-menu-item-20916" class="jet-menu-item jet-menu-item-type-taxonomy jet-menu-item-object-category jet-has-roll-up jet-simple-menu-item jet-regular-item jet-menu-item-20916 jet-sub-menu-item"><a href="https://newocean.edu.vn/chuong-trinh-du-hoc" class="sub-level-link"><div class="jet-menu-item-wrapper"><div class="jet-menu-title">Chương trình du học</div></div></a></li>
                                                    <li id="jet-menu-item-20914" class="jet-menu-item jet-menu-item-type-post_type jet-menu-item-object-page jet-has-roll-up jet-simple-menu-item jet-regular-item jet-menu-item-20914 jet-sub-menu-item"><a href="https://newocean.edu.vn/dieu-kien-du-hoc" class="sub-level-link"><div class="jet-menu-item-wrapper"><div class="jet-menu-title">Điều kiện du học</div></div></a></li>
                                                    <li id="jet-menu-item-20915" class="jet-menu-item jet-menu-item-type-post_type jet-menu-item-object-page jet-has-roll-up jet-simple-menu-item jet-regular-item jet-menu-item-20915 jet-sub-menu-item"><a href="https://newocean.edu.vn/visa-du-hoc" class="sub-level-link"><div class="jet-menu-item-wrapper"><div class="jet-menu-title">Visa du học</div></div></a></li>
                                                    <li id="jet-menu-item-24665" class="jet-menu-item jet-menu-item-type-post_type jet-menu-item-object-page jet-has-roll-up jet-simple-menu-item jet-regular-item jet-menu-item-24665 jet-sub-menu-item"><a href="https://newocean.edu.vn/hoi-dap-du-hoc" class="sub-level-link"><div class="jet-menu-item-wrapper"><div class="jet-menu-title">FAQ</div></div></a></li>
                                                </ul>
                                            </li>
                                            <li id="jet-menu-item-20912" class="jet-menu-item jet-menu-item-type-custom jet-menu-item-object-custom jet-has-roll-up jet-simple-menu-item jet-regular-item jet-menu-item-20912"><a target="_blank" rel="nofollow" href="https://newoceanimmi.com/" class="top-level-link"><div class="jet-menu-item-wrapper"><div class="jet-menu-title">Định cư</div></div></a></li>
                                            <li id="jet-menu-item-20890" class="jet-menu-item jet-menu-item-type-post_type jet-menu-item-object-page jet-has-roll-up jet-simple-menu-item jet-regular-item jet-menu-item-20890"><a href="https://newocean.edu.vn/lien-he-new-ocean" class="top-level-link"><div class="jet-menu-item-wrapper"><div class="jet-menu-title">Liên hệ</div></div></a></li>
                                        </ul></div></div></div>		</div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-5fd0382 elementor-hidden-tablet elementor-hidden-mobile" data-id="5fd0382" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-365dd88 elementor-align-right elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-button" data-id="365dd88" data-element_type="widget" data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a href="#elementor-action%3Aaction%3Dpopup%3Aopen%26settings%3DeyJpZCI6IjE1OTI1IiwidG9nZ2xlIjpmYWxzZX0%3D" class="elementor-button-link elementor-button elementor-size-sm" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Đăng ký tư vấn</span>
		</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</header>
<div data-elementor-type="wp-post" data-elementor-id="174" class="elementor elementor-174">
    <section class="elementor-section elementor-top-section elementor-element elementor-element-8d2a4c7 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8d2a4c7" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a5fb2c5" data-id="a5fb2c5" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-bac50ba elementor-widget elementor-widget-slider_revolution" data-id="bac50ba" data-element_type="widget" data-widget_type="slider_revolution.default">
                        <div class="elementor-widget-container">

                            <div class="wp-block-themepunch-revslider">
                                <!-- START Slider 1 REVOLUTION SLIDER 6.5.31 --><p class="rs-p-wp-fix"></p>
                                <rs-module-wrap id="rev_slider_20_1_wrapper" data-source="gallery" style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                                    <rs-module id="rev_slider_20_1" style="" data-version="6.5.31">
                                        <rs-slides>
                                            <rs-slide style="position: absolute;" data-key="rs-164" data-title="Slide" data-thumb="//newocean.edu.vn/wp-content/uploads/2023/02/du-hoc-ba-lan-1120x400-min.jpg" data-link="//newocean.edu.vn/du-hoc-anh" data-tag="l" data-target="_self" data-seoz="front" data-anim="ms:10;" data-in="o:1;" data-out="a:false;">
                                                <img decoding="async" src="//newocean.edu.vn/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="Du Học Ba Lan 2023" title="du-hoc-ba-lan-1120&#215;400-min" width="1120" height="400" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="//newocean.edu.vn/wp-content/plugins/revslider/public/assets/assets/transparent.png" data-bg="f:contain;" data-no-retina>
                                                <!--
                                                                            --><rs-layer
                                                        id="slider-20-slide-164-layer-4"
                                                        data-type="image"
                                                        data-rsp_ch="on"
                                                        data-xy="x:c;xo:0,0,0,-466px;y:m;yo:0,0,0,16px;"
                                                        data-text="w:normal;s:20,20,20,8;l:0,0,0,9;"
                                                        data-dim="w:1120px,1120px,1120px,128px;h:400px,400px,400px,46px;"
                                                        data-vbility="t,t,t,f"
                                                        data-frame_0="x:-50,-50,-50,-20;"
                                                        data-frame_1="sp:1000;"
                                                        data-frame_999="x:50,50,50,20;o:0;st:w;sp:1000;"
                                                        style="z-index:9;"
                                                ><img decoding="async" src="//newocean.edu.vn/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="Du học Anh 2023" class="tp-rs-img rs-lazyload" width="1120" height="400" data-lazyload="//newocean.edu.vn/wp-content/uploads/2023/02/DU-HOC-ENGLAND-1120x400-min-min.jpg" data-no-retina>
                                                </rs-layer><!--

							--><rs-layer
                                                        id="slider-20-slide-164-layer-5"
                                                        data-type="image"
                                                        data-rsp_ch="on"
                                                        data-xy="x:l,l,l,c;xo:1149px,1149px,1149px,0;y:t,t,t,m;yo:20px,20px,20px,0;"
                                                        data-text="w:normal;s:20,20,20,8;l:0,0,0,9;"
                                                        data-dim="w:340px,340px,340px,480px;h:284px,284px,284px,400px;"
                                                        data-vbility="f,f,f,t"
                                                        data-frame_0="x:-50,-50,-50,-20;"
                                                        data-frame_1="sp:1000;"
                                                        data-frame_999="x:50,50,50,20;o:0;st:w;sp:1000;"
                                                        style="z-index:8;"
                                                ><img decoding="async" src="//newocean.edu.vn/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="Du học Anh 2023" class="tp-rs-img rs-lazyload" width="680" height="567" data-lazyload="//newocean.edu.vn/wp-content/uploads/2023/02/du-hoc-Anh-680x567-min.jpg" data-no-retina>
                                                </rs-layer><!--
-->						</rs-slide>
                                            <rs-slide style="position: absolute;" data-key="rs-161" data-title="Slide" data-thumb="//newocean.edu.vn/wp-content/uploads/2023/02/du-hoc-singapore-2023-min.jpg" data-link="//newocean.edu.vn/du-hoc-singapore" data-tag="l" data-target="_self" data-seoz="front" data-anim="ms:10;" data-in="o:1;" data-out="a:false;">
                                                <img decoding="async" src="//newocean.edu.vn/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="Slide" title="Du học Úc 2023" width="1120" height="400" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="//newocean.edu.vn/wp-content/plugins/revslider/public/assets/assets/transparent.png" data-bg="f:contain;" data-no-retina>
                                                <!--
                                                                            --><rs-layer
                                                        id="slider-20-slide-161-layer-2"
                                                        data-type="image"
                                                        data-rsp_ch="on"
                                                        data-xy="x:c;xo:0,0,0,645px;y:m;yo:0,0,0,120px;"
                                                        data-text="w:normal;s:20,20,20,8;l:0,0,0,9;"
                                                        data-dim="w:1120px,1120px,1120px,128px;h:400px,400px,400px,46px;"
                                                        data-vbility="t,t,t,f"
                                                        data-frame_0="x:50,50,50,20;"
                                                        data-frame_1="sp:1000;"
                                                        data-frame_999="x:-50,-50,-50,-20;o:0;st:w;sp:1000;"
                                                        style="z-index:9;"
                                                ><img decoding="async" src="//newocean.edu.vn/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="Du học Singapore 2023" class="tp-rs-img rs-lazyload" width="1120" height="400" data-lazyload="//newocean.edu.vn/wp-content/uploads/2023/02/du-hoc-singapore-2023-min.jpg" data-no-retina>
                                                </rs-layer><!--

							--><rs-layer
                                                        id="slider-20-slide-161-layer-3"
                                                        data-type="image"
                                                        data-rsp_ch="on"
                                                        data-xy="x:l,l,l,c;xo:50px,50px,50px,0;y:t,t,t,m;yo:50px,50px,50px,0;"
                                                        data-text="w:normal;s:20,20,20,8;l:0,0,0,9;"
                                                        data-dim="w:300px,300px,300px,480px;h:180px,180px,180px,400px;"
                                                        data-vbility="f,f,f,t"
                                                        data-frame_0="x:50,50,50,20;"
                                                        data-frame_1="sp:1000;"
                                                        data-frame_999="x:-50,-50,-50,-20;o:0;st:w;sp:1000;"
                                                        style="z-index:8;"
                                                ><img decoding="async" src="//newocean.edu.vn/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="Du học Singapore 2023" class="tp-rs-img rs-lazyload" width="680" height="567" data-lazyload="//newocean.edu.vn/wp-content/uploads/2023/02/du-hoc-singapore-2023-c-min.jpg" data-no-retina>
                                                </rs-layer><!--
-->						</rs-slide>
                                            <rs-slide style="position: absolute;" data-key="rs-103" data-title="Slide" data-thumb="//newocean.edu.vn/wp-content/uploads/2022/04/poster-canada-50x100.jpg" data-link="//newocean.edu.vn/du-hoc-canada/du-hoc-canada-khong-chung-minh-tai-chinh/?click=banner-home" data-tag="l" data-target="_self" data-seoz="front" data-anim="f:slidebased;" data-in="o:1;y:(100%);m:true;col:5;" data-out="a:false;">
                                                <img decoding="async" src="//newocean.edu.vn/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="" title="poster canada" width="2297" height="822" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="//newocean.edu.vn/wp-content/uploads/2022/04/poster-canada.jpg" data-no-retina>
                                                <!--
                                                                            --><rs-layer
                                                        id="slider-20-slide-103-layer-7"
                                                        data-type="image"
                                                        data-rsp_ch="on"
                                                        data-xy="xo:576px,576px,576px,318px;yo:-2px,-2px,-2px,-184px;"
                                                        data-text="w:normal;s:20,20,20,8;l:0,0,0,9;"
                                                        data-dim="w:543px,543px,543px,580px;h:402px,402px,402px,429px;"
                                                        data-frame_0="x:50,50,50,20;"
                                                        data-frame_1="st:320;sp:1000;sR:320;"
                                                        data-frame_999="o:0;st:w;sR:7680;"
                                                        style="z-index:13;"
                                                ><img decoding="async" src="//newocean.edu.vn/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="" class="tp-rs-img rs-lazyload" width="580" height="429" data-lazyload="//newocean.edu.vn/wp-content/uploads/2022/04/poster-canada-min.png" data-no-retina>
                                                </rs-layer><!--

							--><rs-layer
                                                        id="slider-20-slide-103-layer-8"
                                                        data-type="image"
                                                        data-rsp_ch="on"
                                                        data-xy="xo:455px,455px,455px,347px;yo:36px,36px,36px,-19px;"
                                                        data-text="w:normal;s:20,20,20,8;l:0,0,0,9;"
                                                        data-dim="w:296px,296px,296px,130px;h:321px,321px,321px,141px;"
                                                        data-frame_0="x:-50,-50,-50,-20;"
                                                        data-frame_1="st:210;sp:1000;sR:210;"
                                                        data-frame_999="o:0;st:w;sR:7790;"
                                                        style="z-index:15;"
                                                ><img decoding="async" src="//newocean.edu.vn/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="" class="tp-rs-img rs-lazyload" width="349" height="379" data-lazyload="//newocean.edu.vn/wp-content/uploads/2022/04/poster-canada-min-1.png" data-no-retina>
                                                </rs-layer><!--

							--><rs-layer
                                                        id="slider-20-slide-103-layer-9"
                                                        data-type="image"
                                                        data-rsp_ch="on"
                                                        data-xy="xo:559px,559px,559px,394px;yo:160px,160px,160px,40px;"
                                                        data-text="w:normal;s:20,20,20,8;l:0,0,0,9;"
                                                        data-dim="w:92px,92px,92px,36px;h:95px,95px,95px,37px;"
                                                        data-frame_0="y:100%;"
                                                        data-frame_0_mask="u:t;"
                                                        data-frame_1="st:360;sp:1200;sR:360;"
                                                        data-frame_1_mask="u:t;"
                                                        data-frame_999="o:0;st:w;sR:7440;"
                                                        style="z-index:16;"
                                                ><img decoding="async" src="//newocean.edu.vn/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="" class="tp-rs-img rs-lazyload" width="110" height="113" data-lazyload="//newocean.edu.vn/wp-content/uploads/2022/04/poster-canada-min-2.png" data-no-retina>
                                                </rs-layer><!--

							--><rs-layer
                                                        id="slider-20-slide-103-layer-10"
                                                        data-type="image"
                                                        data-rsp_ch="on"
                                                        data-xy="x:l,l,l,c;xo:53px,53px,53px,0;y:t,t,t,m;yo:77px,77px,77px,-63px;"
                                                        data-text="w:normal;s:20,20,20,8;l:0,0,0,9;"
                                                        data-dim="w:398px,398px,398px,336px;h:51px,51px,51px,43px;"
                                                        data-frame_0="y:-50,-50,-50,-20;"
                                                        data-frame_1="st:230;sp:1000;sR:230;"
                                                        data-frame_999="o:0;st:w;sR:7770;"
                                                        style="z-index:14;"
                                                ><img decoding="async" src="//newocean.edu.vn/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="" class="tp-rs-img rs-lazyload" width="398" height="51" data-lazyload="//newocean.edu.vn/wp-content/uploads/2022/04/poster-canada-min-3.png" data-no-retina>
                                                </rs-layer><!--

							--><rs-layer
                                                        id="slider-20-slide-103-layer-11"
                                                        data-type="image"
                                                        data-rsp_ch="on"
                                                        data-xy="x:l,l,l,c;xo:139px,139px,139px,0;yo:122px,122px,122px,154px;"
                                                        data-text="w:normal;s:20,20,20,8;l:0,0,0,9;"
                                                        data-dim="w:238px,238px,238px,255px;h:99px,99px,99px,106px;"
                                                        data-frame_0="sX:0.9;sY:0.9;"
                                                        data-frame_1="st:450;sp:1000;sR:450;"
                                                        data-frame_999="o:0;st:w;sR:7550;"
                                                        style="z-index:12;"
                                                ><img decoding="async" src="//newocean.edu.vn/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="" class="tp-rs-img rs-lazyload" width="238" height="99" data-lazyload="//newocean.edu.vn/wp-content/uploads/2022/12/poster-canada4.png" data-no-retina>
                                                </rs-layer><!--

							--><rs-layer
                                                        id="slider-20-slide-103-layer-12"
                                                        data-type="image"
                                                        data-rsp_ch="on"
                                                        data-xy="x:l,l,l,c;xo:86px,86px,86px,0;yo:216px,216px,216px,251px;"
                                                        data-text="w:normal;s:20,20,20,8;l:0,0,0,9;"
                                                        data-dim="w:334px,334px,334px,294px;h:33px,33px,33px,29px;"
                                                        data-frame_0="x:-175%;o:1;"
                                                        data-frame_0_mask="u:t;x:100%;"
                                                        data-frame_1="e:power3.out;st:650;sp:1000;sR:650;"
                                                        data-frame_1_mask="u:t;"
                                                        data-frame_999="o:0;st:w;sR:7350;"
                                                        style="z-index:11;"
                                                ><img decoding="async" src="//newocean.edu.vn/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="" class="tp-rs-img rs-lazyload" width="334" height="33" data-lazyload="//newocean.edu.vn/wp-content/uploads/2022/04/poster-canada-min-5.png" data-no-retina>
                                                </rs-layer><!--

							--><rs-layer
                                                        id="slider-20-slide-103-layer-13"
                                                        data-type="image"
                                                        data-rsp_ch="on"
                                                        data-xy="x:l,l,l,c;xo:85px,85px,85px,0;yo:259px,259px,259px,290px;"
                                                        data-text="w:normal;s:20,20,20,8;l:0,0,0,9;"
                                                        data-dim="w:334px,334px,334px,265px;h:34px,34px,34px,27px;"
                                                        data-frame_0="x:100%;"
                                                        data-frame_0_mask="u:t;"
                                                        data-frame_1="st:780;sp:1000;sR:780;"
                                                        data-frame_1_mask="u:t;"
                                                        data-frame_999="o:0;st:w;sR:7220;"
                                                        style="z-index:10;"
                                                ><img decoding="async" src="//newocean.edu.vn/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="" class="tp-rs-img rs-lazyload" width="334" height="34" data-lazyload="//newocean.edu.vn/wp-content/uploads/2022/04/poster-canada6-min.png" data-no-retina>
                                                </rs-layer><!--

							--><rs-layer
                                                        id="slider-20-slide-103-layer-14"
                                                        data-type="image"
                                                        data-rsp_ch="on"
                                                        data-xy="xo:56px,56px,56px,51px;yo:150px,150px,150px,201px;"
                                                        data-text="w:normal;s:20,20,20,8;l:0,0,0,9;"
                                                        data-dim="w:52px,52px,52px,42px;h:161px,161px,161px,130px;"
                                                        data-frame_0="x:-100%;"
                                                        data-frame_0_mask="u:t;"
                                                        data-frame_1="st:840;sp:1000;sR:840;"
                                                        data-frame_1_mask="u:t;"
                                                        data-frame_999="o:0;st:w;sR:7160;"
                                                        style="z-index:9;"
                                                ><img decoding="async" src="//newocean.edu.vn/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="" class="tp-rs-img rs-lazyload" width="97" height="300" data-lazyload="//newocean.edu.vn/wp-content/uploads/2022/04/poster-canada7-min-97x300.png" data-no-retina>
                                                </rs-layer><!--

							--><rs-layer
                                                        id="slider-20-slide-103-layer-15"
                                                        data-type="image"
                                                        data-rsp_ch="on"
                                                        data-xy="xo:396px,396px,396px,388px;yo:151px,151px,151px,200px;"
                                                        data-text="w:normal;s:20,20,20,8;l:0,0,0,9;"
                                                        data-dim="w:52px,52px,52px,43px;h:159px,159px,159px,131px;"
                                                        data-frame_0="x:100%;"
                                                        data-frame_0_mask="u:t;"
                                                        data-frame_1="st:920;sp:1000;sR:920;"
                                                        data-frame_1_mask="u:t;"
                                                        data-frame_999="o:0;st:w;sR:7080;"
                                                        style="z-index:8;"
                                                ><img decoding="async" src="//newocean.edu.vn/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="" class="tp-rs-img rs-lazyload" width="98" height="300" data-lazyload="//newocean.edu.vn/wp-content/uploads/2022/04/poster-canada8-min-98x300.png" data-no-retina>
                                                </rs-layer><!--
-->						</rs-slide>
                                            <rs-slide style="position: absolute;" data-key="rs-105" data-title="Slide" data-thumb="//newocean.edu.vn/wp-content/uploads/2023/02/du-hoc-uc-2023-1120x400-min.jpg" data-link="//newocean.edu.vn/du-hoc-uc" data-tag="l" data-target="_self" data-seoz="front" data-anim="ms:10;" data-in="o:1;" data-out="a:false;">
                                                <img decoding="async" src="//newocean.edu.vn/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="Slide" title="Du học Úc 2023" width="1120" height="400" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="//newocean.edu.vn/wp-content/plugins/revslider/public/assets/assets/transparent.png" data-bg="f:contain;" data-no-retina>
                                                <!--
                                                                            --><rs-layer
                                                        id="slider-20-slide-105-layer-0"
                                                        data-type="image"
                                                        data-rsp_ch="on"
                                                        data-xy="x:c;xo:0,0,0,539px;y:m;yo:0,0,0,-12px;"
                                                        data-text="w:normal;s:20,20,20,8;l:0,0,0,9;"
                                                        data-dim="w:1120px,1120px,1120px,128px;h:400px,400px,400px,46px;"
                                                        data-vbility="t,t,t,f"
                                                        data-frame_0="x:-50,-50,-50,-20;"
                                                        data-frame_1="sp:1000;"
                                                        data-frame_999="x:50,50,50,20;o:0;st:w;sp:1000;"
                                                        style="z-index:8;"
                                                ><img decoding="async" src="//newocean.edu.vn/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="Du Học Úc 2023" class="tp-rs-img rs-lazyload" width="1120" height="400" data-lazyload="//newocean.edu.vn/wp-content/uploads/2023/02/du-hoc-uc-2023-1120x400-min.jpg" data-no-retina>
                                                </rs-layer><!--

							--><rs-layer
                                                        id="slider-20-slide-105-layer-1"
                                                        data-type="image"
                                                        data-rsp_ch="on"
                                                        data-xy="x:c;xo:820px,820px,820px,0;y:m;yo:-8px,-8px,-8px,0;"
                                                        data-text="w:normal;s:20,20,20,8;l:0,0,0,9;"
                                                        data-dim="w:['480px','480px','480px','480px'];h:['400px','400px','400px','400px'];"
                                                        data-vbility="f,f,f,t"
                                                        data-frame_0="x:-50,-50,-50,-20;"
                                                        data-frame_1="sp:1000;"
                                                        data-frame_999="x:50,50,50,20;o:0;st:w;sp:1000;"
                                                        style="z-index:9;"
                                                ><img decoding="async" src="//newocean.edu.vn/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="Du học úc 2023" class="tp-rs-img rs-lazyload" width="680" height="567" data-lazyload="//newocean.edu.vn/wp-content/uploads/2023/02/du-hoc-uc-2023-mb-min.jpg" data-no-retina>
                                                </rs-layer><!--
-->						</rs-slide>
                                            <rs-slide style="position: absolute;" data-key="rs-104" data-title="Slide" data-thumb="//newocean.edu.vn/wp-content/uploads/2023/02/du-hoc-ba-lan-1120x400-min.jpg" data-link="//newocean.edu.vn/du-hoc-ba-lan-hoc-bang-tieng-ba-lan-voi-chi-phi-thap-co-hoi-dinh-cu.html" data-tag="l" data-target="_self" data-seoz="front" data-anim="ms:10;" data-in="o:1;" data-out="a:false;">
                                                <img decoding="async" src="//newocean.edu.vn/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="Du Học Ba Lan 2023" title="du-hoc-ba-lan-1120&#215;400-min" width="1120" height="400" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="//newocean.edu.vn/wp-content/plugins/revslider/public/assets/assets/transparent.png" data-bg="f:contain;" data-no-retina>
                                                <!--
                                                                            --><rs-layer
                                                        id="slider-20-slide-104-layer-4"
                                                        data-type="image"
                                                        data-rsp_ch="on"
                                                        data-xy="x:c;xo:0,0,0,-466px;y:m;yo:0,0,0,16px;"
                                                        data-text="w:normal;s:20,20,20,8;l:0,0,0,9;"
                                                        data-dim="w:1120px,1120px,1120px,128px;h:400px,400px,400px,46px;"
                                                        data-vbility="t,t,t,f"
                                                        data-frame_0="x:-50,-50,-50,-20;"
                                                        data-frame_1="sp:1000;"
                                                        data-frame_999="x:50,50,50,20;o:0;st:w;sp:1000;"
                                                        style="z-index:9;"
                                                ><img decoding="async" src="//newocean.edu.vn/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="Du Học Ba Lan 2023" class="tp-rs-img rs-lazyload" width="1120" height="400" data-lazyload="//newocean.edu.vn/wp-content/uploads/2023/02/du-hoc-ba-lan-1120x400-min.jpg" data-no-retina>
                                                </rs-layer><!--

							--><rs-layer
                                                        id="slider-20-slide-104-layer-5"
                                                        data-type="image"
                                                        data-rsp_ch="on"
                                                        data-xy="x:l,l,l,c;xo:1149px,1149px,1149px,0;y:t,t,t,m;yo:20px,20px,20px,0;"
                                                        data-text="w:normal;s:20,20,20,8;l:0,0,0,9;"
                                                        data-dim="w:340px,340px,340px,480px;h:284px,284px,284px,400px;"
                                                        data-vbility="f,f,f,t"
                                                        data-frame_0="x:-50,-50,-50,-20;"
                                                        data-frame_1="sp:1000;"
                                                        data-frame_999="x:50,50,50,20;o:0;st:w;sp:1000;"
                                                        style="z-index:8;"
                                                ><img decoding="async" src="//newocean.edu.vn/wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="Du học Ba Lan" class="tp-rs-img rs-lazyload" width="680" height="567" data-lazyload="//newocean.edu.vn/wp-content/uploads/2023/02/du-hoc-ba-lan-680x567-min.jpg" data-no-retina>
                                                </rs-layer><!--
-->						</rs-slide>
                                        </rs-slides>
                                    </rs-module>
                                    <script>
                                        setREVStartSize({c: 'rev_slider_20_1',rl:[1240,1240,1240,480],el:[400,400,400,400],gw:[1120,1120,1120,480],gh:[400,400,400,400],type:'standard',justify:'',layout:'fullwidth',mh:"0"});if (window.RS_MODULES!==undefined && window.RS_MODULES.modules!==undefined && window.RS_MODULES.modules["revslider201"]!==undefined) {window.RS_MODULES.modules["revslider201"].once = false;window.revapi20 = undefined;if (window.RS_MODULES.checkMinimal!==undefined) window.RS_MODULES.checkMinimal()}
                                    </script>
                                </rs-module-wrap>
                                <!-- END REVOLUTION SLIDER -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-06153c3 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="06153c3" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-f5f345f" data-id="f5f345f" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-c2167f6 elementor-view-framed elementor-shape-circle elementor-widget elementor-widget-icon" data-id="c2167f6" data-element_type="widget" data-widget_type="icon.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-icon-wrapper">
                                <div class="elementor-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="38pt" height="38pt" viewBox="0 0 38 38"><g id="surface1"><path style=" stroke:none;fill-rule:nonzero;fill:rgb(5.098039%,31.372549%,61.176471%);fill-opacity:1;" d="M 26.753906 32.953125 C 26.414062 32.867188 26.070312 33.074219 25.984375 33.414062 L 25.351562 35.945312 C 25.265625 36.285156 25.472656 36.628906 25.8125 36.714844 C 25.863281 36.726562 25.917969 36.734375 25.96875 36.734375 C 26.25 36.734375 26.507812 36.542969 26.582031 36.253906 L 27.214844 33.71875 C 27.300781 33.382812 27.09375 33.039062 26.753906 32.953125 Z M 26.753906 32.953125 "></path><path style=" stroke:none;fill-rule:nonzero;fill:rgb(5.098039%,31.372549%,61.176471%);fill-opacity:1;" d="M 19 20.265625 C 19.082031 20.265625 19.164062 20.25 19.242188 20.21875 L 26.207031 17.335938 C 26.53125 17.203125 26.683594 16.832031 26.550781 16.507812 C 26.417969 16.183594 26.046875 16.03125 25.722656 16.164062 L 19 18.949219 L 1.265625 11.609375 L 1.265625 11.398438 C 1.265625 11.050781 0.984375 10.765625 0.632812 10.765625 C 0.285156 10.765625 0 11.050781 0 11.398438 L 0 12.035156 C 0 12.289062 0.15625 12.519531 0.390625 12.617188 L 18.757812 20.21875 C 18.835938 20.25 18.917969 20.265625 19 20.265625 Z M 19 20.265625 "></path><path style=" stroke:none;fill-rule:nonzero;fill:rgb(5.098039%,31.372549%,61.176471%);fill-opacity:1;" d="M 26.535156 26.753906 C 26.378906 26.441406 26 26.3125 25.6875 26.46875 C 24.484375 27.0625 22.472656 27.753906 19.632812 27.847656 L 19.632812 22.167969 C 19.632812 21.816406 19.351562 21.535156 19 21.535156 C 18.652344 21.535156 18.367188 21.816406 18.367188 22.167969 L 18.367188 27.84375 C 10.503906 27.589844 7.964844 22.828125 7.601562 22.035156 L 7.601562 17.734375 C 7.601562 17.382812 7.316406 17.101562 6.964844 17.101562 C 6.617188 17.101562 6.332031 17.382812 6.332031 17.734375 L 6.332031 22.167969 C 6.332031 22.246094 6.347656 22.328125 6.378906 22.402344 C 6.488281 22.675781 9.183594 29.132812 19 29.132812 C 22.429688 29.132812 24.835938 28.300781 26.246094 27.601562 C 26.5625 27.449219 26.691406 27.070312 26.535156 26.753906 Z M 26.535156 26.753906 "></path><path style=" stroke:none;fill-rule:nonzero;fill:rgb(5.098039%,31.372549%,61.176471%);fill-opacity:1;" d="M 28.5 33.566406 C 28.148438 33.566406 27.867188 33.851562 27.867188 34.199219 L 27.867188 36.101562 C 27.867188 36.449219 28.148438 36.734375 28.5 36.734375 C 28.851562 36.734375 29.132812 36.449219 29.132812 36.101562 L 29.132812 34.199219 C 29.132812 33.851562 28.851562 33.566406 28.5 33.566406 Z M 28.5 33.566406 "></path><path style=" stroke:none;fill-rule:nonzero;fill:rgb(5.098039%,31.372549%,61.176471%);fill-opacity:1;" d="M 37.367188 10.765625 C 37.015625 10.765625 36.734375 11.050781 36.734375 11.398438 L 36.734375 11.609375 L 29.132812 14.738281 L 29.132812 13.59375 L 37.609375 10.085938 C 37.84375 9.988281 38 9.757812 38 9.5 C 38 9.242188 37.84375 9.011719 37.609375 8.914062 L 19.242188 1.316406 C 19.085938 1.25 18.914062 1.25 18.757812 1.316406 L 0.390625 8.914062 C 0.15625 9.011719 0 9.242188 0 9.5 C 0 9.757812 0.15625 9.988281 0.390625 10.085938 L 18.757812 17.683594 C 18.835938 17.71875 18.917969 17.734375 19 17.734375 C 19.082031 17.734375 19.164062 17.71875 19.242188 17.683594 L 25.882812 14.9375 C 26.207031 14.804688 26.359375 14.433594 26.226562 14.109375 C 26.09375 13.785156 25.722656 13.632812 25.398438 13.765625 L 19 16.414062 L 2.289062 9.5 L 19 2.585938 L 35.710938 9.5 L 28.4375 12.507812 L 21.472656 9.910156 C 21.511719 9.777344 21.535156 9.640625 21.535156 9.5 C 21.535156 8.433594 20.421875 7.601562 19 7.601562 C 17.578125 7.601562 16.464844 8.433594 16.464844 9.5 C 16.464844 10.566406 17.578125 11.398438 19 11.398438 C 19.632812 11.398438 20.199219 11.226562 20.640625 10.949219 L 27.867188 13.648438 L 27.867188 29.25 C 27.132812 29.511719 26.601562 30.207031 26.601562 31.035156 C 26.601562 32.082031 27.453125 32.933594 28.5 32.933594 C 29.546875 32.933594 30.398438 32.082031 30.398438 31.035156 C 30.398438 30.207031 29.867188 29.511719 29.132812 29.25 L 29.132812 25.65625 C 30.953125 24.28125 31.601562 22.453125 31.632812 22.375 C 31.65625 22.308594 31.667969 22.238281 31.667969 22.167969 L 31.667969 17.734375 C 31.667969 17.382812 31.382812 17.101562 31.035156 17.101562 C 30.683594 17.101562 30.398438 17.382812 30.398438 17.734375 L 30.398438 22.050781 C 30.289062 22.316406 29.910156 23.144531 29.132812 23.964844 L 29.132812 16.105469 L 37.609375 12.617188 C 37.84375 12.523438 38 12.289062 38 12.035156 L 38 11.398438 C 38 11.050781 37.71875 10.765625 37.367188 10.765625 Z M 19 10.132812 C 18.226562 10.132812 17.734375 9.757812 17.734375 9.5 C 17.734375 9.242188 18.226562 8.867188 19 8.867188 C 19.773438 8.867188 20.265625 9.242188 20.265625 9.5 C 20.265625 9.757812 19.773438 10.132812 19 10.132812 Z M 28.5 31.667969 C 28.152344 31.667969 27.867188 31.382812 27.867188 31.035156 C 27.867188 30.683594 28.152344 30.398438 28.5 30.398438 C 28.847656 30.398438 29.132812 30.683594 29.132812 31.035156 C 29.132812 31.382812 28.847656 31.667969 28.5 31.667969 Z M 28.5 31.667969 "></path><path style=" stroke:none;fill-rule:nonzero;fill:rgb(5.098039%,31.372549%,61.176471%);fill-opacity:1;" d="M 31.015625 33.414062 C 30.929688 33.074219 30.585938 32.867188 30.246094 32.953125 C 29.90625 33.035156 29.699219 33.382812 29.785156 33.71875 L 30.417969 36.253906 C 30.492188 36.542969 30.75 36.734375 31.03125 36.734375 C 31.082031 36.734375 31.136719 36.726562 31.1875 36.714844 C 31.527344 36.628906 31.734375 36.285156 31.648438 35.945312 Z M 31.015625 33.414062 "></path></g></svg>			</div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-0d3b378 elementor-widget elementor-widget-counter" data-id="0d3b378" data-element_type="widget" data-widget_type="counter.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-counter">
                                <div class="elementor-counter-number-wrapper">
                                    <span class="elementor-counter-number-prefix"></span>
                                    <span class="elementor-counter-number" data-duration="1000" data-to-value="15" data-from-value="0">0</span>
                                    <span class="elementor-counter-number-suffix">+</span>
                                </div>
                                <div class="elementor-counter-title">NĂM KINH NGHIỆM</div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-f284d95 elementor-widget elementor-widget-spacer" data-id="f284d95" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-5950186" data-id="5950186" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-c9b8816 elementor-view-framed elementor-shape-circle elementor-widget elementor-widget-icon" data-id="c9b8816" data-element_type="widget" data-widget_type="icon.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-icon-wrapper">
                                <div class="elementor-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="38pt" height="38pt" viewBox="0 0 38 38"><g id="surface1"><path style=" stroke:none;fill-rule:nonzero;fill:rgb(5.098039%,31.372549%,61.176471%);fill-opacity:1;" d="M 27.691406 8.453125 L 27.726562 8.734375 L 27.304688 8.820312 L 27.246094 9.421875 L 27.753906 9.421875 L 28.425781 9.359375 L 28.773438 8.945312 L 28.40625 8.800781 L 28.203125 8.566406 L 27.898438 8.074219 L 27.753906 7.378906 L 27.183594 7.496094 L 27.023438 7.742188 L 27.023438 8.015625 L 27.296875 8.207031 Z M 27.691406 8.453125 "></path><path style=" stroke:none;fill-rule:nonzero;fill:rgb(5.098039%,31.372549%,61.176471%);fill-opacity:1;" d="M 27.203125 8.683594 L 27.234375 8.304688 L 26.898438 8.160156 L 26.429688 8.269531 L 26.082031 8.828125 L 26.082031 9.191406 L 26.488281 9.191406 Z M 27.203125 8.683594 "></path><path style=" stroke:none;fill-rule:nonzero;fill:rgb(5.098039%,31.372549%,61.176471%);fill-opacity:1;" d="M 17.550781 10.28125 L 17.449219 10.546875 L 16.949219 10.546875 L 16.949219 10.804688 L 17.066406 10.804688 C 17.066406 10.804688 17.074219 10.859375 17.085938 10.933594 L 17.390625 10.90625 L 17.582031 10.789062 L 17.632812 10.546875 L 17.878906 10.527344 L 17.976562 10.324219 L 17.75 10.277344 Z M 17.550781 10.28125 "></path><path style=" stroke:none;fill-rule:nonzero;fill:rgb(5.098039%,31.372549%,61.176471%);fill-opacity:1;" d="M 16.265625 10.75 L 16.246094 11.003906 L 16.605469 10.972656 L 16.644531 10.71875 L 16.425781 10.546875 Z M 16.265625 10.75 "></path><path style=" stroke:none;fill-rule:nonzero;fill:rgb(5.098039%,31.372549%,61.176471%);fill-opacity:1;" d="M 37.996094 18.804688 C 37.988281 18.246094 37.960938 17.695312 37.910156 17.152344 C 37.734375 15.34375 37.300781 13.605469 36.652344 11.980469 C 36.601562 11.859375 36.558594 11.734375 36.507812 11.617188 C 35.644531 9.574219 34.429688 7.714844 32.945312 6.109375 C 32.847656 6.003906 32.746094 5.902344 32.648438 5.800781 C 32.367188 5.507812 32.078125 5.226562 31.78125 4.953125 C 28.402344 1.878906 23.917969 0 19 0 C 14.042969 0 9.523438 1.910156 6.136719 5.03125 C 5.347656 5.761719 4.621094 6.554688 3.964844 7.40625 C 1.480469 10.613281 0 14.636719 0 19 C 0 29.476562 8.523438 38 19 38 C 26.371094 38 32.769531 33.78125 35.917969 27.632812 C 36.589844 26.316406 37.117188 24.914062 37.46875 23.445312 C 37.558594 23.074219 37.636719 22.699219 37.703125 22.320312 C 37.894531 21.242188 38 20.132812 38 19 C 38 18.933594 37.996094 18.867188 37.996094 18.804688 Z M 34.417969 11.210938 L 34.53125 11.085938 C 34.675781 11.367188 34.808594 11.652344 34.9375 11.941406 L 34.757812 11.933594 L 34.417969 11.980469 Z M 31.675781 7.894531 L 31.675781 7.046875 C 31.976562 7.363281 32.261719 7.6875 32.539062 8.027344 L 32.195312 8.535156 L 31 8.523438 L 30.925781 8.273438 Z M 8.753906 5.785156 L 8.753906 5.753906 L 9.136719 5.753906 L 9.167969 5.621094 L 9.789062 5.621094 L 9.789062 5.894531 L 9.613281 6.132812 L 8.753906 6.132812 Z M 9.363281 6.632812 C 9.363281 6.632812 9.742188 6.570312 9.777344 6.570312 C 9.808594 6.570312 9.777344 6.949219 9.777344 6.949219 L 8.917969 7.003906 L 8.753906 6.808594 Z M 35.628906 14.175781 L 34.238281 14.175781 L 33.390625 13.542969 L 32.5 13.632812 L 32.5 14.175781 L 32.21875 14.175781 L 31.914062 13.957031 L 30.371094 13.566406 L 30.371094 12.566406 L 28.414062 12.71875 L 27.804688 13.042969 L 27.03125 13.042969 L 26.648438 13.007812 L 25.707031 13.53125 L 25.707031 14.515625 L 23.777344 15.90625 L 23.9375 16.5 L 24.328125 16.5 L 24.226562 17.066406 L 23.949219 17.167969 L 23.9375 18.644531 L 25.601562 20.542969 L 26.328125 20.542969 L 26.371094 20.425781 L 27.675781 20.425781 L 28.050781 20.078125 L 28.789062 20.078125 L 29.195312 20.484375 L 30.296875 20.601562 L 30.152344 22.066406 L 31.375 24.226562 L 30.730469 25.457031 L 30.773438 26.035156 L 31.28125 26.539062 L 31.28125 27.933594 L 31.949219 28.832031 L 31.949219 29.988281 L 32.523438 29.988281 C 29.320312 33.917969 24.449219 36.4375 19 36.4375 C 9.386719 36.4375 1.5625 28.613281 1.5625 19 C 1.5625 16.578125 2.058594 14.273438 2.953125 12.175781 L 2.953125 11.632812 L 3.578125 10.875 C 3.792969 10.464844 4.027344 10.066406 4.273438 9.679688 L 4.304688 9.996094 L 3.578125 10.875 C 3.355469 11.296875 3.144531 11.730469 2.957031 12.175781 L 2.957031 13.167969 L 3.679688 13.515625 L 3.679688 14.894531 L 4.375 16.082031 L 4.941406 16.167969 L 5.011719 15.761719 L 4.347656 14.734375 L 4.214844 13.734375 L 4.605469 13.734375 L 4.769531 14.761719 L 5.734375 16.167969 L 5.484375 16.621094 L 6.097656 17.558594 L 7.621094 17.9375 L 7.621094 17.691406 L 8.230469 17.777344 L 8.171875 18.210938 L 8.648438 18.296875 L 9.386719 18.5 L 10.429688 19.6875 L 11.765625 19.789062 L 11.894531 20.875 L 10.980469 21.515625 L 10.9375 22.484375 L 10.808594 23.078125 L 12.128906 24.730469 L 12.230469 25.296875 C 12.230469 25.296875 12.707031 25.425781 12.765625 25.425781 C 12.824219 25.425781 13.835938 26.195312 13.835938 26.195312 L 13.835938 29.179688 L 14.199219 29.28125 L 13.953125 30.65625 L 14.5625 31.46875 L 14.449219 32.832031 L 15.253906 34.246094 L 16.285156 35.148438 L 17.324219 35.167969 L 17.425781 34.835938 L 16.664062 34.191406 L 16.707031 33.871094 L 16.84375 33.480469 L 16.871094 33.082031 L 16.355469 33.066406 L 16.097656 32.742188 L 16.523438 32.328125 L 16.582031 32.019531 L 16.105469 31.882812 L 16.132812 31.59375 L 16.8125 31.488281 L 17.851562 30.992188 L 18.199219 30.355469 L 19.285156 28.960938 L 19.039062 27.875 L 19.371094 27.296875 L 20.371094 27.328125 L 21.042969 26.792969 L 21.261719 24.695312 L 22.007812 23.746094 L 22.136719 23.136719 L 21.457031 22.917969 L 21.007812 22.183594 L 19.472656 22.167969 L 18.253906 21.703125 L 18.195312 20.835938 L 17.789062 20.125 L 16.691406 20.109375 L 16.054688 19.109375 L 15.488281 18.832031 L 15.460938 19.136719 L 14.429688 19.199219 L 14.054688 18.675781 L 12.980469 18.457031 L 12.097656 19.476562 L 10.707031 19.242188 L 10.605469 17.675781 L 9.589844 17.5 L 9.996094 16.730469 L 9.882812 16.289062 L 8.546875 17.183594 L 7.707031 17.078125 L 7.410156 16.421875 L 7.589844 15.746094 L 8.054688 14.894531 L 9.121094 14.355469 L 11.175781 14.355469 L 11.171875 14.984375 L 11.910156 15.328125 L 11.851562 14.253906 L 12.382812 13.71875 L 13.460938 13.011719 L 13.53125 12.515625 L 14.605469 11.398438 L 15.746094 10.765625 L 15.644531 10.683594 L 16.417969 9.957031 L 16.699219 10.03125 L 16.828125 10.195312 L 17.121094 9.871094 L 17.195312 9.839844 L 16.875 9.792969 L 16.546875 9.683594 L 16.546875 9.371094 L 16.71875 9.230469 L 17.101562 9.230469 L 17.273438 9.308594 L 17.425781 9.613281 L 17.609375 9.582031 L 17.609375 9.558594 L 17.664062 9.574219 L 18.199219 9.492188 L 18.273438 9.230469 L 18.578125 9.308594 L 18.578125 9.589844 L 18.296875 9.785156 L 18.335938 10.097656 L 19.304688 10.394531 C 19.304688 10.394531 19.308594 10.398438 19.308594 10.40625 L 19.53125 10.386719 L 19.546875 9.96875 L 18.777344 9.617188 L 18.734375 9.417969 L 19.371094 9.199219 L 19.398438 8.589844 L 18.734375 8.183594 L 18.691406 7.15625 L 17.777344 7.605469 L 17.445312 7.605469 L 17.53125 6.824219 L 16.289062 6.53125 L 15.773438 6.917969 L 15.773438 8.101562 L 14.851562 8.394531 L 14.480469 9.167969 L 14.078125 9.234375 L 14.078125 8.246094 L 13.210938 8.125 L 12.773438 7.84375 L 12.601562 7.203125 L 14.15625 6.292969 L 14.914062 6.0625 L 14.992188 6.574219 L 15.414062 6.550781 L 15.449219 6.292969 L 15.890625 6.230469 L 15.898438 6.140625 L 15.707031 6.0625 L 15.664062 5.789062 L 16.207031 5.742188 L 16.539062 5.402344 L 16.554688 5.375 L 16.558594 5.378906 L 16.660156 5.273438 L 17.804688 5.128906 L 18.3125 5.558594 L 16.984375 6.265625 L 18.671875 6.664062 L 18.890625 6.101562 L 19.628906 6.101562 L 19.890625 5.609375 L 19.371094 5.476562 L 19.371094 4.855469 L 17.730469 4.128906 L 16.601562 4.261719 L 15.964844 4.59375 L 16.007812 5.40625 L 15.339844 5.304688 L 15.238281 4.855469 L 15.878906 4.273438 L 14.71875 4.21875 L 14.386719 4.316406 L 14.242188 4.707031 L 14.675781 4.78125 L 14.589844 5.214844 L 13.851562 5.261719 L 13.734375 5.550781 L 12.664062 5.578125 C 12.664062 5.578125 12.632812 4.972656 12.589844 4.972656 C 12.546875 4.972656 13.429688 4.957031 13.429688 4.957031 L 14.070312 4.332031 L 13.71875 4.160156 L 13.257812 4.609375 L 12.488281 4.566406 L 12.023438 3.925781 L 11.039062 3.925781 L 10.011719 4.695312 L 10.953125 4.695312 L 11.039062 4.972656 L 10.792969 5.199219 L 11.839844 5.226562 L 11.996094 5.605469 L 10.824219 5.558594 L 10.765625 5.269531 L 10.027344 5.109375 L 9.636719 4.894531 L 8.757812 4.902344 C 11.636719 2.804688 15.175781 1.5625 19 1.5625 C 23.410156 1.5625 27.4375 3.210938 30.511719 5.917969 L 30.304688 6.289062 L 29.5 6.605469 L 29.160156 6.972656 L 29.238281 7.402344 L 29.652344 7.460938 L 29.902344 8.085938 L 30.621094 7.796875 L 30.738281 8.632812 L 30.523438 8.632812 L 29.933594 8.546875 L 29.28125 8.65625 L 28.652344 9.546875 L 27.75 9.6875 L 27.621094 10.460938 L 28 10.550781 L 27.890625 11.046875 L 26.996094 10.867188 L 26.171875 11.046875 L 26 11.503906 L 26.140625 12.460938 L 26.625 12.6875 L 27.433594 12.683594 L 27.976562 12.632812 L 28.144531 12.199219 L 28.996094 11.089844 L 29.558594 11.207031 L 30.113281 10.707031 L 30.214844 11.097656 L 31.578125 12.015625 L 31.410156 12.238281 L 30.796875 12.207031 L 31.035156 12.539062 L 31.410156 12.621094 L 31.855469 12.4375 L 31.84375 11.90625 L 32.039062 11.808594 L 31.882812 11.640625 L 30.972656 11.132812 L 30.734375 10.460938 L 31.488281 10.460938 L 31.730469 10.699219 L 32.382812 11.257812 L 32.410156 11.9375 L 33.082031 12.65625 L 33.332031 11.671875 L 33.800781 11.417969 L 33.886719 12.222656 L 34.34375 12.722656 L 35.253906 12.707031 C 35.429688 13.15625 35.585938 13.617188 35.722656 14.089844 Z M 10.363281 8.632812 L 10.820312 8.414062 L 11.230469 8.511719 L 11.089844 9.066406 L 10.644531 9.210938 Z M 12.785156 9.9375 L 12.785156 10.296875 L 11.742188 10.296875 L 11.351562 10.1875 L 11.449219 9.9375 L 11.949219 9.730469 L 12.636719 9.730469 L 12.636719 9.9375 Z M 13.265625 10.4375 L 13.265625 10.785156 L 13.003906 10.953125 L 12.679688 11.011719 C 12.679688 11.011719 12.679688 10.492188 12.679688 10.4375 Z M 12.972656 10.296875 L 12.972656 9.882812 L 13.328125 10.207031 Z M 13.132812 11.132812 L 13.132812 11.46875 L 12.886719 11.71875 L 12.332031 11.71875 L 12.417969 11.339844 L 12.679688 11.316406 L 12.734375 11.1875 Z M 11.753906 10.4375 L 12.332031 10.4375 L 11.59375 11.46875 L 11.285156 11.304688 L 11.351562 10.871094 Z M 14.113281 11.011719 L 14.113281 11.351562 L 13.558594 11.351562 L 13.40625 11.132812 L 13.40625 10.816406 L 13.449219 10.816406 Z M 13.601562 10.546875 L 13.757812 10.382812 L 14.027344 10.546875 L 13.8125 10.722656 Z M 35.914062 15.054688 L 35.96875 14.992188 C 35.988281 15.089844 36.015625 15.1875 36.035156 15.289062 Z M 35.914062 15.054688 "></path><path style=" stroke:none;fill-rule:nonzero;fill:rgb(5.098039%,31.372549%,61.176471%);fill-opacity:1;" d="M 2.957031 11.632812 L 2.957031 12.175781 C 3.144531 11.730469 3.355469 11.296875 3.578125 10.875 Z M 2.957031 11.632812 "></path></g></svg>			</div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-bd493b2 elementor-widget elementor-widget-counter" data-id="bd493b2" data-element_type="widget" data-widget_type="counter.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-counter">
                                <div class="elementor-counter-number-wrapper">
                                    <span class="elementor-counter-number-prefix"></span>
                                    <span class="elementor-counter-number" data-duration="1000" data-to-value="12" data-from-value="0">0</span>
                                    <span class="elementor-counter-number-suffix">+</span>
                                </div>
                                <div class="elementor-counter-title">QUỐC GIA DU HỌC</div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-9ba00c0 elementor-widget elementor-widget-spacer" data-id="9ba00c0" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-8c36b24" data-id="8c36b24" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-611792f elementor-view-framed elementor-shape-circle elementor-widget elementor-widget-icon" data-id="611792f" data-element_type="widget" data-widget_type="icon.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-icon-wrapper">
                                <div class="elementor-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="38pt" height="38pt" viewBox="0 0 38 38"><g id="surface1"><path style=" stroke:none;fill-rule:nonzero;fill:rgb(5.098039%,31.372549%,61.176471%);fill-opacity:1;" d="M 37.34375 17.78125 L 28.964844 17.78125 L 28.964844 16.164062 C 28.964844 15.925781 28.835938 15.707031 28.632812 15.59375 L 19.65625 10.546875 L 19.65625 7.980469 L 21.429688 7.980469 L 21.429688 8.957031 C 21.429688 9.316406 21.722656 9.613281 22.085938 9.613281 L 27.4375 9.613281 C 27.800781 9.609375 28.09375 9.316406 28.09375 8.957031 C 28.09375 8.878906 28.082031 8.804688 28.054688 8.734375 L 27.515625 7.207031 L 28.0625 5.714844 C 28.183594 5.371094 28.007812 4.996094 27.667969 4.875 C 27.597656 4.847656 27.519531 4.835938 27.445312 4.835938 L 25.007812 4.835938 L 25.007812 3.886719 C 25.007812 3.523438 24.714844 3.230469 24.351562 3.230469 L 19.65625 3.230469 L 19.65625 2.429688 C 19.65625 2.070312 19.363281 1.777344 19 1.777344 C 18.636719 1.777344 18.34375 2.070312 18.34375 2.429688 L 18.34375 10.546875 L 9.367188 15.585938 C 9.164062 15.703125 9.035156 15.921875 9.035156 16.15625 L 9.035156 17.773438 L 0.65625 17.773438 C 0.292969 17.773438 0 18.066406 0 18.429688 L 0 35.570312 C 0 35.929688 0.292969 36.222656 0.65625 36.222656 L 37.34375 36.222656 C 37.707031 36.222656 38 35.929688 38 35.570312 L 38 18.4375 C 38 18.074219 37.707031 17.78125 37.34375 17.78125 Z M 25.007812 7.324219 L 24.980469 7.296875 L 24.980469 6.171875 L 26.476562 6.171875 L 26.207031 7.011719 C 26.152344 7.15625 26.152344 7.316406 26.207031 7.460938 L 26.515625 8.300781 L 22.742188 8.300781 L 22.742188 7.980469 L 24.351562 7.980469 C 24.714844 7.980469 25.007812 7.6875 25.007812 7.324219 Z M 19.65625 4.539062 L 23.699219 4.539062 L 23.699219 6.667969 L 19.65625 6.667969 Z M 9.035156 34.914062 L 1.308594 34.914062 L 1.308594 19.089844 L 9.035156 19.089844 Z M 18.34375 34.914062 L 14.90625 34.914062 L 14.90625 27.433594 L 18.34375 27.433594 Z M 23.09375 34.914062 L 19.65625 34.914062 L 19.65625 27.433594 L 23.09375 27.433594 Z M 27.679688 34.914062 L 24.40625 34.914062 L 24.40625 26.777344 C 24.40625 26.414062 24.113281 26.121094 23.75 26.121094 L 14.25 26.121094 C 13.886719 26.121094 13.59375 26.414062 13.59375 26.777344 L 13.59375 34.914062 L 10.320312 34.914062 L 10.320312 16.570312 L 19 11.683594 L 27.65625 16.542969 L 27.679688 18.429688 Z M 36.691406 34.914062 L 28.964844 34.914062 L 28.964844 19.089844 L 36.691406 19.089844 Z M 36.691406 34.914062 "></path><path style=" stroke:none;fill-rule:nonzero;fill:rgb(5.098039%,31.372549%,61.176471%);fill-opacity:1;" d="M 19 13.6875 C 17.484375 13.691406 16.253906 14.921875 16.253906 16.4375 C 16.257812 17.953125 17.492188 19.179688 19.007812 19.175781 C 20.523438 19.171875 21.75 17.941406 21.746094 16.425781 C 21.742188 14.910156 20.511719 13.6875 19 13.6875 Z M 19 17.867188 C 18.207031 17.863281 17.566406 17.21875 17.570312 16.425781 C 17.574219 15.636719 18.210938 15 19 14.996094 C 19.792969 15 20.433594 15.644531 20.433594 16.4375 L 20.441406 16.4375 C 20.4375 17.230469 19.792969 17.871094 19 17.867188 Z M 19 17.867188 "></path><path style=" stroke:none;fill-rule:nonzero;fill:rgb(5.098039%,31.372549%,61.176471%);fill-opacity:1;" d="M 2.890625 20.53125 L 4.199219 20.53125 L 4.199219 23.152344 L 2.890625 23.152344 Z M 2.890625 20.53125 "></path><path style=" stroke:none;fill-rule:nonzero;fill:rgb(5.098039%,31.372549%,61.176471%);fill-opacity:1;" d="M 6.121094 20.53125 L 7.429688 20.53125 L 7.429688 23.152344 L 6.121094 23.152344 Z M 6.121094 20.53125 "></path><path style=" stroke:none;fill-rule:nonzero;fill:rgb(5.098039%,31.372549%,61.176471%);fill-opacity:1;" d="M 12.3125 20.53125 L 14.929688 20.53125 L 14.929688 21.84375 L 12.3125 21.84375 Z M 12.3125 20.53125 "></path><path style=" stroke:none;fill-rule:nonzero;fill:rgb(5.098039%,31.372549%,61.176471%);fill-opacity:1;" d="M 17.691406 20.53125 L 20.308594 20.53125 L 20.308594 21.84375 L 17.691406 21.84375 Z M 17.691406 20.53125 "></path><path style=" stroke:none;fill-rule:nonzero;fill:rgb(5.098039%,31.372549%,61.176471%);fill-opacity:1;" d="M 23.070312 20.53125 L 25.6875 20.53125 L 25.6875 21.84375 L 23.070312 21.84375 Z M 23.070312 20.53125 "></path><path style=" stroke:none;fill-rule:nonzero;fill:rgb(5.098039%,31.372549%,61.176471%);fill-opacity:1;" d="M 12.3125 23.585938 L 14.929688 23.585938 L 14.929688 24.898438 L 12.3125 24.898438 Z M 12.3125 23.585938 "></path><path style=" stroke:none;fill-rule:nonzero;fill:rgb(5.098039%,31.372549%,61.176471%);fill-opacity:1;" d="M 17.691406 23.585938 L 20.308594 23.585938 L 20.308594 24.898438 L 17.691406 24.898438 Z M 17.691406 23.585938 "></path><path style=" stroke:none;fill-rule:nonzero;fill:rgb(5.098039%,31.372549%,61.176471%);fill-opacity:1;" d="M 23.070312 23.585938 L 25.6875 23.585938 L 25.6875 24.898438 L 23.070312 24.898438 Z M 23.070312 23.585938 "></path><path style=" stroke:none;fill-rule:nonzero;fill:rgb(5.098039%,31.372549%,61.176471%);fill-opacity:1;" d="M 2.890625 25.6875 L 4.199219 25.6875 L 4.199219 28.308594 L 2.890625 28.308594 Z M 2.890625 25.6875 "></path><path style=" stroke:none;fill-rule:nonzero;fill:rgb(5.098039%,31.372549%,61.176471%);fill-opacity:1;" d="M 6.121094 25.6875 L 7.429688 25.6875 L 7.429688 28.308594 L 6.121094 28.308594 Z M 6.121094 25.6875 "></path><path style=" stroke:none;fill-rule:nonzero;fill:rgb(5.098039%,31.372549%,61.176471%);fill-opacity:1;" d="M 2.890625 30.851562 L 4.199219 30.851562 L 4.199219 33.472656 L 2.890625 33.472656 Z M 2.890625 30.851562 "></path><path style=" stroke:none;fill-rule:nonzero;fill:rgb(5.098039%,31.372549%,61.176471%);fill-opacity:1;" d="M 6.121094 30.851562 L 7.429688 30.851562 L 7.429688 33.472656 L 6.121094 33.472656 Z M 6.121094 30.851562 "></path><path style=" stroke:none;fill-rule:nonzero;fill:rgb(5.098039%,31.372549%,61.176471%);fill-opacity:1;" d="M 30.570312 20.53125 L 31.878906 20.53125 L 31.878906 23.152344 L 30.570312 23.152344 Z M 30.570312 20.53125 "></path><path style=" stroke:none;fill-rule:nonzero;fill:rgb(5.098039%,31.372549%,61.176471%);fill-opacity:1;" d="M 33.800781 20.53125 L 35.109375 20.53125 L 35.109375 23.152344 L 33.800781 23.152344 Z M 33.800781 20.53125 "></path><path style=" stroke:none;fill-rule:nonzero;fill:rgb(5.098039%,31.372549%,61.176471%);fill-opacity:1;" d="M 30.570312 25.6875 L 31.878906 25.6875 L 31.878906 28.308594 L 30.570312 28.308594 Z M 30.570312 25.6875 "></path><path style=" stroke:none;fill-rule:nonzero;fill:rgb(5.098039%,31.372549%,61.176471%);fill-opacity:1;" d="M 33.800781 25.6875 L 35.109375 25.6875 L 35.109375 28.308594 L 33.800781 28.308594 Z M 33.800781 25.6875 "></path><path style=" stroke:none;fill-rule:nonzero;fill:rgb(5.098039%,31.372549%,61.176471%);fill-opacity:1;" d="M 30.570312 30.851562 L 31.878906 30.851562 L 31.878906 33.472656 L 30.570312 33.472656 Z M 30.570312 30.851562 "></path><path style=" stroke:none;fill-rule:nonzero;fill:rgb(5.098039%,31.372549%,61.176471%);fill-opacity:1;" d="M 33.800781 30.851562 L 35.109375 30.851562 L 35.109375 33.472656 L 33.800781 33.472656 Z M 33.800781 30.851562 "></path></g></svg>			</div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-28e17cd elementor-widget elementor-widget-counter" data-id="28e17cd" data-element_type="widget" data-widget_type="counter.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-counter">
                                <div class="elementor-counter-number-wrapper">
                                    <span class="elementor-counter-number-prefix"></span>
                                    <span class="elementor-counter-number" data-duration="1000" data-to-value="900" data-from-value="0">0</span>
                                    <span class="elementor-counter-number-suffix">+</span>
                                </div>
                                <div class="elementor-counter-title">TRƯỜNG ĐỐI TÁC</div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-fc6a6dd elementor-widget elementor-widget-spacer" data-id="fc6a6dd" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-90ecce8" data-id="90ecce8" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-05671f5 elementor-view-framed elementor-shape-circle elementor-widget elementor-widget-icon" data-id="05671f5" data-element_type="widget" data-widget_type="icon.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-icon-wrapper">
                                <div class="elementor-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="38pt" height="38pt" viewBox="0 0 38 38"><g id="surface1"><path style=" stroke:none;fill-rule:nonzero;fill:rgb(5.098039%,31.372549%,61.176471%);fill-opacity:1;" d="M 19.554688 27.421875 C 19.554688 27.730469 19.308594 27.980469 19 27.980469 C 18.691406 27.980469 18.445312 27.730469 18.445312 27.421875 C 18.445312 27.117188 18.691406 26.867188 19 26.867188 C 19.308594 26.867188 19.554688 27.117188 19.554688 27.421875 Z M 19.554688 27.421875 "></path><path style=" stroke:none;fill-rule:nonzero;fill:rgb(5.098039%,31.372549%,61.176471%);fill-opacity:1;" d="M 38 9.460938 C 38 7.929688 36.75 6.679688 35.21875 6.679688 L 26.234375 6.679688 L 26.234375 3.898438 C 26.234375 2.363281 24.988281 1.113281 23.453125 1.113281 L 14.546875 1.113281 C 13.011719 1.113281 11.765625 2.363281 11.765625 3.898438 L 11.765625 7.234375 C 11.765625 7.542969 12.011719 7.792969 12.320312 7.792969 L 35.21875 7.792969 C 36.136719 7.792969 36.886719 8.542969 36.886719 9.460938 L 36.886719 19.632812 C 36.886719 21.78125 35.140625 23.527344 32.992188 23.527344 L 25.125 23.527344 L 25.125 21.859375 C 25.125 21.550781 24.875 21.300781 24.566406 21.300781 L 13.433594 21.300781 C 13.125 21.300781 12.875 21.550781 12.875 21.859375 L 12.875 23.527344 L 5.007812 23.527344 C 2.859375 23.527344 1.113281 21.78125 1.113281 19.632812 L 1.113281 9.460938 C 1.113281 8.542969 1.863281 7.792969 2.78125 7.792969 L 10.09375 7.792969 C 10.402344 7.792969 10.648438 7.542969 10.648438 7.234375 C 10.648438 6.929688 10.402344 6.679688 10.09375 6.679688 L 2.78125 6.679688 C 1.25 6.679688 0 7.929688 0 9.460938 L 0 19.632812 C 0 20.820312 0.417969 21.914062 1.113281 22.773438 L 1.113281 31.875 C 1.113281 34.640625 3.359375 36.886719 6.125 36.886719 L 31.875 36.886719 C 34.640625 36.886719 36.886719 34.640625 36.886719 31.875 L 36.886719 22.773438 C 37.582031 21.914062 38 20.820312 38 19.632812 Z M 22.898438 6.679688 L 15.101562 6.679688 L 15.101562 5.566406 L 22.898438 5.566406 Z M 25.125 6.679688 L 24.007812 6.679688 L 24.007812 5.007812 C 24.007812 4.703125 23.761719 4.453125 23.453125 4.453125 L 14.546875 4.453125 C 14.238281 4.453125 13.992188 4.703125 13.992188 5.007812 L 13.992188 6.679688 L 12.875 6.679688 L 12.875 3.898438 C 12.875 2.976562 13.625 2.226562 14.546875 2.226562 L 23.453125 2.226562 C 24.375 2.226562 25.125 2.976562 25.125 3.898438 Z M 22.898438 27.980469 L 21.78125 27.980469 L 21.78125 26.867188 L 22.898438 26.867188 Z M 22.898438 25.753906 L 21.226562 25.753906 C 20.917969 25.753906 20.671875 26.003906 20.671875 26.3125 L 20.671875 28.539062 C 20.671875 28.84375 20.917969 29.09375 21.226562 29.09375 L 22.898438 29.09375 L 22.898438 30.207031 L 15.101562 30.207031 L 15.101562 29.09375 L 16.773438 29.09375 C 17.082031 29.09375 17.328125 28.84375 17.328125 28.539062 L 17.328125 26.3125 C 17.328125 26.003906 17.082031 25.753906 16.773438 25.753906 L 15.101562 25.753906 L 15.101562 24.640625 L 22.898438 24.640625 Z M 15.101562 26.867188 L 16.21875 26.867188 L 16.21875 27.980469 L 15.101562 27.980469 Z M 13.992188 22.414062 L 24.007812 22.414062 L 24.007812 23.527344 L 13.992188 23.527344 Z M 13.992188 24.640625 L 13.992188 30.765625 C 13.992188 31.070312 14.238281 31.320312 14.546875 31.320312 L 23.453125 31.320312 C 23.761719 31.320312 24.007812 31.070312 24.007812 30.765625 L 24.007812 24.640625 L 32.992188 24.640625 C 33.179688 24.640625 33.363281 24.628906 33.546875 24.609375 L 33.546875 31.875 C 33.546875 32.796875 32.796875 33.546875 31.875 33.546875 L 6.125 33.546875 C 5.203125 33.546875 4.453125 32.796875 4.453125 31.875 L 4.453125 24.609375 C 4.636719 24.628906 4.820312 24.640625 5.007812 24.640625 Z M 31.875 35.773438 L 6.125 35.773438 C 3.972656 35.773438 2.226562 34.027344 2.226562 31.875 L 2.226562 23.792969 C 2.570312 24.023438 2.945312 24.214844 3.339844 24.351562 L 3.339844 31.875 C 3.339844 33.410156 4.589844 34.660156 6.125 34.660156 L 31.875 34.660156 C 33.410156 34.660156 34.660156 33.410156 34.660156 31.875 L 34.660156 24.351562 C 35.054688 24.214844 35.429688 24.023438 35.773438 23.792969 L 35.773438 31.875 C 35.773438 34.027344 34.027344 35.773438 31.875 35.773438 Z M 31.875 35.773438 "></path></g></svg>			</div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-0d436dc elementor-widget elementor-widget-counter" data-id="0d436dc" data-element_type="widget" data-widget_type="counter.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-counter">
                                <div class="elementor-counter-number-wrapper">
                                    <span class="elementor-counter-number-prefix"></span>
                                    <span class="elementor-counter-number" data-duration="1000" data-to-value="12000" data-from-value="0">0</span>
                                    <span class="elementor-counter-number-suffix">+</span>
                                </div>
                                <div class="elementor-counter-title">HỒ SƠ THÀNH CÔNG</div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-a50a698 elementor-widget elementor-widget-spacer" data-id="a50a698" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-d4696b4 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d4696b4" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-35d5e40" data-id="35d5e40" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-49524d6 elementor-invisible elementor-widget elementor-widget-heading" data-id="49524d6" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h1 class="elementor-heading-title elementor-size-large">TƯ VẤN DU HỌC</h1>		</div>
                    </div>
                    <div class="elementor-element elementor-element-203cf98 elementor-skin-carousel elementor-arrows-yes elementor-pagination-type-bullets elementor-pagination-position-outside elementor-widget elementor-widget-media-carousel" data-id="203cf98" data-element_type="widget" data-settings="{&quot;slides_per_view&quot;:&quot;4&quot;,&quot;space_between&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:25,&quot;sizes&quot;:[]},&quot;slides_to_scroll&quot;:&quot;4&quot;,&quot;slides_per_view_tablet&quot;:&quot;4&quot;,&quot;slides_per_view_mobile&quot;:&quot;2&quot;,&quot;slides_to_scroll_tablet&quot;:&quot;4&quot;,&quot;slides_to_scroll_mobile&quot;:&quot;2&quot;,&quot;lazyload&quot;:&quot;yes&quot;,&quot;skin&quot;:&quot;carousel&quot;,&quot;effect&quot;:&quot;slide&quot;,&quot;show_arrows&quot;:&quot;yes&quot;,&quot;pagination&quot;:&quot;bullets&quot;,&quot;speed&quot;:500,&quot;autoplay&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;loop&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;space_between_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;space_between_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]}}" data-widget_type="media-carousel.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-swiper">
                                <div class="elementor-main-swiper swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <a href="/du-hoc-uc">		<div class="elementor-carousel-image swiper-lazy" role="img" aria-label="Du học Úc" data-background="https://newocean.edu.vn/wp-content/uploads/2020/03/uc.jpg">

                                                    <div class="swiper-lazy-preloader"></div>

                                                </div>
                                            </a>						</div>
                                        <div class="swiper-slide">
                                            <a href="/du-hoc-canada">		<div class="elementor-carousel-image swiper-lazy" role="img" aria-label="Du học Canada" data-background="https://newocean.edu.vn/wp-content/uploads/2020/03/canada.jpg">

                                                    <div class="swiper-lazy-preloader"></div>

                                                </div>
                                            </a>						</div>
                                        <div class="swiper-slide">
                                            <a href="/du-hoc-singapore">		<div class="elementor-carousel-image swiper-lazy" role="img" aria-label="Du học Singapore" data-background="https://newocean.edu.vn/wp-content/uploads/2020/03/singapore.jpg">

                                                    <div class="swiper-lazy-preloader"></div>

                                                </div>
                                            </a>						</div>
                                        <div class="swiper-slide">
                                            <a href="/du-hoc-anh">		<div class="elementor-carousel-image swiper-lazy" role="img" aria-label="Du học Anh" data-background="https://newocean.edu.vn/wp-content/uploads/2020/03/anh-1.jpg">

                                                    <div class="swiper-lazy-preloader"></div>

                                                </div>
                                            </a>						</div>
                                        <div class="swiper-slide">
                                            <a href="/du-hoc-han-quoc">		<div class="elementor-carousel-image swiper-lazy" role="img" aria-label="Du học Hàn Quốc" data-background="https://newocean.edu.vn/wp-content/uploads/2020/03/hanquoc.jpg">

                                                    <div class="swiper-lazy-preloader"></div>

                                                </div>
                                            </a>						</div>
                                        <div class="swiper-slide">
                                            <a href="/du-hoc-new-zealand">		<div class="elementor-carousel-image swiper-lazy" role="img" aria-label="Du học New Zealand" data-background="https://newocean.edu.vn/wp-content/uploads/2020/03/newzealand.jpg">

                                                    <div class="swiper-lazy-preloader"></div>

                                                </div>
                                            </a>						</div>
                                        <div class="swiper-slide">
                                            <a href="/du-hoc-ba-lan">		<div class="elementor-carousel-image swiper-lazy" role="img" aria-label="Du học Ba Lan" data-background="https://newocean.edu.vn/wp-content/uploads/2020/03/balan.jpg">

                                                    <div class="swiper-lazy-preloader"></div>

                                                </div>
                                            </a>						</div>
                                        <div class="swiper-slide">
                                            <a href="/du-hoc-trung-quoc">		<div class="elementor-carousel-image swiper-lazy" role="img" aria-label="Du học Trung Quốc" data-background="https://newocean.edu.vn/wp-content/uploads/2020/03/trungquoc.jpg">

                                                    <div class="swiper-lazy-preloader"></div>

                                                </div>
                                            </a>						</div>
                                        <div class="swiper-slide">
                                            <a href="/du-hoc-thuy-si">		<div class="elementor-carousel-image swiper-lazy" role="img" aria-label="Du học Thụy Sĩ" data-background="https://newocean.edu.vn/wp-content/uploads/2020/03/thuysi.jpg">

                                                    <div class="swiper-lazy-preloader"></div>

                                                </div>
                                            </a>						</div>
                                        <div class="swiper-slide">
                                            <a href="/du-hoc-ireland">		<div class="elementor-carousel-image swiper-lazy" role="img" aria-label="Du học Ireland" data-background="https://newocean.edu.vn/wp-content/uploads/2020/03/ireland.jpg">

                                                    <div class="swiper-lazy-preloader"></div>

                                                </div>
                                            </a>						</div>
                                        <div class="swiper-slide">
                                            <a href="/du-hoc-my">		<div class="elementor-carousel-image swiper-lazy" role="img" aria-label="Du học Mỹ" data-background="https://newocean.edu.vn/wp-content/uploads/2020/03/usa.jpg">

                                                    <div class="swiper-lazy-preloader"></div>

                                                </div>
                                            </a>						</div>
                                        <div class="swiper-slide">
                                            <a href="https://newocean.edu.vn/du-hoc-ha-lan">		<div class="elementor-carousel-image swiper-lazy" role="img" aria-label="Du học Hà Lan" data-background="https://newocean.edu.vn/wp-content/uploads/2020/03/halan.jpg">

                                                    <div class="swiper-lazy-preloader"></div>

                                                </div>
                                            </a>						</div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="elementor-swiper-button elementor-swiper-button-prev" role="button" tabindex="0">
                                        <i aria-hidden="true" class="eicon-chevron-left"></i>							<span class="elementor-screen-only">Previous</span>
                                    </div>
                                    <div class="elementor-swiper-button elementor-swiper-button-next" role="button" tabindex="0">
                                        <i aria-hidden="true" class="eicon-chevron-right"></i>							<span class="elementor-screen-only">Next</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-847f870 elementor-widget elementor-widget-spacer" data-id="847f870" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-ada7582 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ada7582" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6fa9242" data-id="6fa9242" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-0ed1dfc elementor-widget elementor-widget-heading" data-id="0ed1dfc" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h3 class="elementor-heading-title elementor-size-large">TIN TỨC DU HỌC</h3>		</div>
                    </div>
                    <div class="elementor-element elementor-element-2804b5b elementor-widget elementor-widget-jet-blog-smart-listing" data-id="2804b5b" data-element_type="widget" data-widget_type="jet-blog-smart-listing.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-jet-blog-smart-listing jet-blog"><div class="jet-smart-listing-wrap" data-settings='{&quot;block_title&quot;:&quot;&quot;,&quot;title_tag&quot;:&quot;h3&quot;,&quot;featured_post&quot;:&quot;yes&quot;,&quot;featured_position&quot;:&quot;left&quot;,&quot;featured_width&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;featured_layout&quot;:&quot;simple&quot;,&quot;featured_image_size&quot;:&quot;medium_large&quot;,&quot;featured_image_position&quot;:&quot;top&quot;,&quot;featured_image_width&quot;:null,&quot;featured_excerpt_length&quot;:30,&quot;featured_excerpt_trimmed_ending&quot;:&quot;...&quot;,&quot;featured_read_more&quot;:&quot;&quot;,&quot;featured_read_more_text&quot;:null,&quot;featured_show_meta&quot;:&quot;yes&quot;,&quot;featured_show_author&quot;:&quot;yes&quot;,&quot;featured_show_author_icon&quot;:null,&quot;selected_featured_show_author_icon&quot;:{&quot;value&quot;:&quot;fas fa-user&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;featured_show_date&quot;:&quot;yes&quot;,&quot;featured_show_date_icon&quot;:null,&quot;selected_featured_show_date_icon&quot;:{&quot;value&quot;:&quot;fas fa-calendar-alt&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;featured_show_comments&quot;:&quot;&quot;,&quot;featured_show_comments_icon&quot;:null,&quot;selected_featured_show_comments_icon&quot;:null,&quot;posts_columns_widescreen&quot;:null,&quot;posts_columns&quot;:&quot;1&quot;,&quot;posts_columns_laptop&quot;:null,&quot;posts_columns_tablet_extra&quot;:null,&quot;posts_columns_tablet&quot;:null,&quot;posts_columns_mobile_extra&quot;:null,&quot;posts_columns_mobile&quot;:null,&quot;posts_rows&quot;:&quot;4&quot;,&quot;image_size&quot;:&quot;medium&quot;,&quot;image_position&quot;:&quot;left&quot;,&quot;image_width&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:29,&quot;sizes&quot;:[]},&quot;excerpt_length&quot;:20,&quot;excerpt_trimmed_ending&quot;:&quot;...&quot;,&quot;read_more&quot;:&quot;&quot;,&quot;read_more_text&quot;:null,&quot;show_meta&quot;:&quot;yes&quot;,&quot;show_author&quot;:&quot;yes&quot;,&quot;show_author_icon&quot;:null,&quot;selected_show_author_icon&quot;:{&quot;value&quot;:&quot;fas fa-user&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;show_date&quot;:&quot;yes&quot;,&quot;show_date_icon&quot;:null,&quot;selected_show_date_icon&quot;:{&quot;value&quot;:&quot;fas fa-calendar-alt&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;show_comments&quot;:&quot;&quot;,&quot;show_comments_icon&quot;:null,&quot;selected_show_comments_icon&quot;:null,&quot;query_by&quot;:&quot;category&quot;,&quot;category_ids&quot;:[&quot;10&quot;],&quot;post_tag_ids&quot;:null,&quot;include_ids&quot;:null,&quot;exclude_ids&quot;:&quot;&quot;,&quot;custom_query_by&quot;:null,&quot;custom_terms_ids&quot;:null,&quot;meta_query&quot;:&quot;&quot;,&quot;meta_key&quot;:null,&quot;meta_value&quot;:null,&quot;show_filter&quot;:&quot;&quot;,&quot;filter_by&quot;:null,&quot;show_all_btn&quot;:null,&quot;all_btn_label&quot;:null,&quot;more_terms_icon&quot;:null,&quot;selected_more_terms_icon&quot;:null,&quot;show_arrows&quot;:&quot;&quot;,&quot;arrow_type&quot;:null,&quot;show_featured_terms&quot;:&quot;&quot;,&quot;show_featured_terms_tax&quot;:null,&quot;show_terms&quot;:&quot;&quot;,&quot;show_terms_tax&quot;:null,&quot;featured_meta_position&quot;:&quot;after-excerpt&quot;,&quot;meta_position&quot;:&quot;after-excerpt&quot;,&quot;show_image&quot;:&quot;yes&quot;,&quot;post_type&quot;:&quot;post&quot;,&quot;post_ids&quot;:null,&quot;content_related_meta&quot;:null,&quot;show_content_related_meta&quot;:&quot;&quot;,&quot;meta_content_related_position&quot;:null,&quot;title_related_meta&quot;:null,&quot;show_title_related_meta&quot;:&quot;&quot;,&quot;meta_title_related_position&quot;:null,&quot;featured_title_length&quot;:0,&quot;title_length&quot;:&quot;&quot;,&quot;add_button_icon&quot;:&quot;&quot;,&quot;button_icon&quot;:null,&quot;selected_button_icon&quot;:null,&quot;post_add_button_icon&quot;:&quot;&quot;,&quot;post_button_icon&quot;:null,&quot;selected_post_button_icon&quot;:null,&quot;use_custom_query&quot;:&quot;&quot;,&quot;custom_query&quot;:null,&quot;posts_offset&quot;:0,&quot;order&quot;:&quot;DESC&quot;,&quot;order_by&quot;:&quot;date&quot;,&quot;is_archive_template&quot;:&quot;&quot;}' data-page="1" data-term="0" data-scroll-top=>
                                    <div class="jet-smart-listing__heading"><span class="jet-smart-listing__title-placeholder"></span></div>
                                    <div class="jet-smart-listing rows-4 has-featured-position-left">	<div class="jet-smart-listing__featured featured-layout-simple featured-position-left featured-img-top has-post-thumb">
                                            <div class="jet-smart-listing__post-thumbnail post-thumbnail-featured"><a href="https://newocean.edu.vn/ky-thi-aeis-vao-cac-truong-pho-thong-cong-lap-singapore.html"><img width="768" height="576" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20768%20576'%3E%3C/svg%3E" class="jet-smart-listing__post-thumbnail-img post-thumbnail-img-featured wp-post-image" alt="Kỳ thi AEIS vào các trường Phổ thông Công lập Singapore" decoding="async" data-lazy-srcset="https://newocean.edu.vn/wp-content/uploads/2023/05/Ky-thi-AIES-768x576.jpg 768w, https://newocean.edu.vn/wp-content/uploads/2023/05/Ky-thi-AIES-400x300.jpg 400w, https://newocean.edu.vn/wp-content/uploads/2023/05/Ky-thi-AIES.jpg 800w" data-lazy-sizes="(max-width: 768px) 100vw, 768px" data-lazy-src="https://newocean.edu.vn/wp-content/uploads/2023/05/Ky-thi-AIES-768x576.jpg" /><noscript><img width="768" height="576" src="https://newocean.edu.vn/wp-content/uploads/2023/05/Ky-thi-AIES-768x576.jpg" class="jet-smart-listing__post-thumbnail-img post-thumbnail-img-featured wp-post-image" alt="Kỳ thi AEIS vào các trường Phổ thông Công lập Singapore" decoding="async" srcset="https://newocean.edu.vn/wp-content/uploads/2023/05/Ky-thi-AIES-768x576.jpg 768w, https://newocean.edu.vn/wp-content/uploads/2023/05/Ky-thi-AIES-400x300.jpg 400w, https://newocean.edu.vn/wp-content/uploads/2023/05/Ky-thi-AIES.jpg 800w" sizes="(max-width: 768px) 100vw, 768px" /></noscript></a></div><div class="jet-smart-listing__featured-content"><div class="jet-smart-listing__post-title post-title-featured"><a href="https://newocean.edu.vn/ky-thi-aeis-vao-cac-truong-pho-thong-cong-lap-singapore.html">Kỳ thi AEIS vào các trường Phổ thông Công lập Singapore</a></div><div class="jet-smart-listing__post-excerpt post-excerpt-featured">Kỳ thi AEIS (viết tắt của “The Admissions Exercise for International Students”) là kỳ thi tuyển sinh dành cho các học sinh quốc tế, trong đó có học sinh Việt...</div><div class="jet-smart-listing__meta"><span class="posted-by post-meta__item jet-smart-listing__meta-item"><span class="jet-smart-listing__meta-icon jet-blog-icon"><i aria-hidden="true" class="fas fa-user"></i></span><a href="https://newocean.edu.vn/author/quang-trung"  class="posted-by__author" rel="author">Quang Trung</a></span><span class="post__date post-meta__item jet-smart-listing__meta-item"><span class="jet-smart-listing__meta-icon jet-blog-icon"><i aria-hidden="true" class="fas fa-calendar-alt"></i></span><a href="https://newocean.edu.vn/2023/05/18"  class="post__date-link " ><time datetime="2023-05-18T14:22:41+07:00" title="2023-05-18T14:22:41+07:00">18/05/2023</time></a></span></div></div>	</div>
                                        <div class="jet-smart-listing__posts">
                                            <div class="jet-smart-listing__post-wrapper">
                                                <div class="jet-smart-listing__post has-post-thumb has-thumb-postion-left">
                                                    <div class="jet-smart-listing__post-thumbnail post-thumbnail-simple"><a href="https://newocean.edu.vn/gap-go-dai-dien-truong-hoc-vien-dai-hoc-crown-uc-cihe-thang-5-nam-2023.html"><img width="400" height="300" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20400%20300'%3E%3C/svg%3E" class="jet-smart-listing__post-thumbnail-img post-thumbnail-img-simple wp-post-image" alt="Gặp gỡ đại diện Trường Học viện Đại học Crown, Úc (CIHE) tháng 5 năm 2023" decoding="async" data-lazy-srcset="https://newocean.edu.vn/wp-content/uploads/2023/05/Gap-go-Truong-Hoc-vien-Dai-hoc-Crown-Uc-400x300.jpg 400w, https://newocean.edu.vn/wp-content/uploads/2023/05/Gap-go-Truong-Hoc-vien-Dai-hoc-Crown-Uc-768x576.jpg 768w, https://newocean.edu.vn/wp-content/uploads/2023/05/Gap-go-Truong-Hoc-vien-Dai-hoc-Crown-Uc.jpg 800w" data-lazy-sizes="(max-width: 400px) 100vw, 400px" data-lazy-src="https://newocean.edu.vn/wp-content/uploads/2023/05/Gap-go-Truong-Hoc-vien-Dai-hoc-Crown-Uc-400x300.jpg" /><noscript><img width="400" height="300" src="https://newocean.edu.vn/wp-content/uploads/2023/05/Gap-go-Truong-Hoc-vien-Dai-hoc-Crown-Uc-400x300.jpg" class="jet-smart-listing__post-thumbnail-img post-thumbnail-img-simple wp-post-image" alt="Gặp gỡ đại diện Trường Học viện Đại học Crown, Úc (CIHE) tháng 5 năm 2023" decoding="async" srcset="https://newocean.edu.vn/wp-content/uploads/2023/05/Gap-go-Truong-Hoc-vien-Dai-hoc-Crown-Uc-400x300.jpg 400w, https://newocean.edu.vn/wp-content/uploads/2023/05/Gap-go-Truong-Hoc-vien-Dai-hoc-Crown-Uc-768x576.jpg 768w, https://newocean.edu.vn/wp-content/uploads/2023/05/Gap-go-Truong-Hoc-vien-Dai-hoc-Crown-Uc.jpg 800w" sizes="(max-width: 400px) 100vw, 400px" /></noscript></a></div>					<div class="jet-smart-listing__post-content"><div class="jet-smart-listing__post-title post-title-simple"><a href="https://newocean.edu.vn/gap-go-dai-dien-truong-hoc-vien-dai-hoc-crown-uc-cihe-thang-5-nam-2023.html">Gặp gỡ đại diện Trường Học viện Đại học Crown, Úc (CIHE) tháng 5 năm 2023</a></div><div class="jet-smart-listing__post-excerpt post-excerpt-simple">Ngày 31/05/2023 tới đây, Du học New Ocean tổ chức buổi gặp gỡ trực tiếp với Đại diện tuyển sinh...</div><div class="jet-smart-listing__meta"><span class="posted-by post-meta__item jet-smart-listing__meta-item"><span class="jet-smart-listing__meta-icon jet-blog-icon"><i aria-hidden="true" class="fas fa-user"></i></span><a href="https://newocean.edu.vn/author/thu-trang"  class="posted-by__author" rel="author">Thu Trang</a></span><span class="post__date post-meta__item jet-smart-listing__meta-item"><span class="jet-smart-listing__meta-icon jet-blog-icon"><i aria-hidden="true" class="fas fa-calendar-alt"></i></span><a href="https://newocean.edu.vn/2023/05/16"  class="post__date-link " ><time datetime="2023-05-16T11:50:17+07:00" title="2023-05-16T11:50:17+07:00">16/05/2023</time></a></span></div></div>
                                                </div>
                                            </div>
                                            <div class="jet-smart-listing__post-wrapper">
                                                <div class="jet-smart-listing__post has-post-thumb has-thumb-postion-left">
                                                    <div class="jet-smart-listing__post-thumbnail post-thumbnail-simple"><a href="https://newocean.edu.vn/tin-nong-nhat-du-hoc-sinh-uc-sau-tot-nghiep-co-the-o-lai-toi-8-nam.html"><img width="400" height="300" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20400%20300'%3E%3C/svg%3E" class="jet-smart-listing__post-thumbnail-img post-thumbnail-img-simple wp-post-image" alt="Tin nóng nhất: Du học sinh Úc sau tốt nghiệp có thể ở lại tới 8 năm" decoding="async" data-lazy-srcset="https://newocean.edu.vn/wp-content/uploads/2023/05/O-lai-8-nam-sau-tot-nghiep-400x300.jpg 400w, https://newocean.edu.vn/wp-content/uploads/2023/05/O-lai-8-nam-sau-tot-nghiep-768x576.jpg 768w, https://newocean.edu.vn/wp-content/uploads/2023/05/O-lai-8-nam-sau-tot-nghiep.jpg 800w" data-lazy-sizes="(max-width: 400px) 100vw, 400px" data-lazy-src="https://newocean.edu.vn/wp-content/uploads/2023/05/O-lai-8-nam-sau-tot-nghiep-400x300.jpg" /><noscript><img width="400" height="300" src="https://newocean.edu.vn/wp-content/uploads/2023/05/O-lai-8-nam-sau-tot-nghiep-400x300.jpg" class="jet-smart-listing__post-thumbnail-img post-thumbnail-img-simple wp-post-image" alt="Tin nóng nhất: Du học sinh Úc sau tốt nghiệp có thể ở lại tới 8 năm" decoding="async" srcset="https://newocean.edu.vn/wp-content/uploads/2023/05/O-lai-8-nam-sau-tot-nghiep-400x300.jpg 400w, https://newocean.edu.vn/wp-content/uploads/2023/05/O-lai-8-nam-sau-tot-nghiep-768x576.jpg 768w, https://newocean.edu.vn/wp-content/uploads/2023/05/O-lai-8-nam-sau-tot-nghiep.jpg 800w" sizes="(max-width: 400px) 100vw, 400px" /></noscript></a></div>					<div class="jet-smart-listing__post-content"><div class="jet-smart-listing__post-title post-title-simple"><a href="https://newocean.edu.vn/tin-nong-nhat-du-hoc-sinh-uc-sau-tot-nghiep-co-the-o-lai-toi-8-nam.html">Tin nóng nhất: Du học sinh Úc sau tốt nghiệp có thể ở lại tới 8 năm</a></div><div class="jet-smart-listing__post-excerpt post-excerpt-simple">Như đã biết, từ tháng 2 năm 2023, Bộ giáo dục Úc đã công bố chính sách mở rộng quyền...</div><div class="jet-smart-listing__meta"><span class="posted-by post-meta__item jet-smart-listing__meta-item"><span class="jet-smart-listing__meta-icon jet-blog-icon"><i aria-hidden="true" class="fas fa-user"></i></span><a href="https://newocean.edu.vn/author/tuanhung"  class="posted-by__author" rel="author">Tuấn Hưng</a></span><span class="post__date post-meta__item jet-smart-listing__meta-item"><span class="jet-smart-listing__meta-icon jet-blog-icon"><i aria-hidden="true" class="fas fa-calendar-alt"></i></span><a href="https://newocean.edu.vn/2023/05/12"  class="post__date-link " ><time datetime="2023-05-12T14:47:26+07:00" title="2023-05-12T14:47:26+07:00">12/05/2023</time></a></span></div></div>
                                                </div>
                                            </div>
                                            <div class="jet-smart-listing__post-wrapper">
                                                <div class="jet-smart-listing__post has-post-thumb has-thumb-postion-left">
                                                    <div class="jet-smart-listing__post-thumbnail post-thumbnail-simple"><a href="https://newocean.edu.vn/the-russell-group-university-nhom-24-truong-dai-hoc-hang-dau-vuong-quoc-anh.html"><img width="400" height="300" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20400%20300'%3E%3C/svg%3E" class="jet-smart-listing__post-thumbnail-img post-thumbnail-img-simple wp-post-image" alt="The Russell Group University – Nhóm 24 trường Đại học hàng Đầu Vương Quốc Anh" decoding="async" data-lazy-srcset="https://newocean.edu.vn/wp-content/uploads/2023/05/The-Russell-Group-University-400x300.jpg 400w, https://newocean.edu.vn/wp-content/uploads/2023/05/The-Russell-Group-University-768x576.jpg 768w, https://newocean.edu.vn/wp-content/uploads/2023/05/The-Russell-Group-University.jpg 800w" data-lazy-sizes="(max-width: 400px) 100vw, 400px" data-lazy-src="https://newocean.edu.vn/wp-content/uploads/2023/05/The-Russell-Group-University-400x300.jpg" /><noscript><img width="400" height="300" src="https://newocean.edu.vn/wp-content/uploads/2023/05/The-Russell-Group-University-400x300.jpg" class="jet-smart-listing__post-thumbnail-img post-thumbnail-img-simple wp-post-image" alt="The Russell Group University – Nhóm 24 trường Đại học hàng Đầu Vương Quốc Anh" decoding="async" srcset="https://newocean.edu.vn/wp-content/uploads/2023/05/The-Russell-Group-University-400x300.jpg 400w, https://newocean.edu.vn/wp-content/uploads/2023/05/The-Russell-Group-University-768x576.jpg 768w, https://newocean.edu.vn/wp-content/uploads/2023/05/The-Russell-Group-University.jpg 800w" sizes="(max-width: 400px) 100vw, 400px" /></noscript></a></div>					<div class="jet-smart-listing__post-content"><div class="jet-smart-listing__post-title post-title-simple"><a href="https://newocean.edu.vn/the-russell-group-university-nhom-24-truong-dai-hoc-hang-dau-vuong-quoc-anh.html">The Russell Group University – Nhóm 24 trường Đại học hàng Đầu Vương Quốc Anh</a></div><div class="jet-smart-listing__post-excerpt post-excerpt-simple">The Russell Group là nhóm gồm 24 trường Đại học Công lập hàng đầu tại nước Anh. Thành lập năm...</div><div class="jet-smart-listing__meta"><span class="posted-by post-meta__item jet-smart-listing__meta-item"><span class="jet-smart-listing__meta-icon jet-blog-icon"><i aria-hidden="true" class="fas fa-user"></i></span><a href="https://newocean.edu.vn/author/phuongdung"  class="posted-by__author" rel="author">Phương Dung</a></span><span class="post__date post-meta__item jet-smart-listing__meta-item"><span class="jet-smart-listing__meta-icon jet-blog-icon"><i aria-hidden="true" class="fas fa-calendar-alt"></i></span><a href="https://newocean.edu.vn/2023/05/11"  class="post__date-link " ><time datetime="2023-05-11T12:06:54+07:00" title="2023-05-11T12:06:54+07:00">11/05/2023</time></a></span></div></div>
                                                </div>
                                            </div>
                                            <div class="jet-smart-listing__post-wrapper">
                                                <div class="jet-smart-listing__post has-post-thumb has-thumb-postion-left">
                                                    <div class="jet-smart-listing__post-thumbnail post-thumbnail-simple"><a href="https://newocean.edu.vn/gap-go-truong-niagara-college-truong-dao-tao-quan-tri-kinh-doanh-nau-an-du-lich-khach-san-noi-tieng-nhat-canada.html"><img width="400" height="300" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20400%20300'%3E%3C/svg%3E" class="jet-smart-listing__post-thumbnail-img post-thumbnail-img-simple wp-post-image" alt="Gặp gỡ Trường Niagara, College &#8211; Trường đào tạo quản trị kinh doanh, nấu ăn, du lịch khách sạn nổi tiếng nhất Canada" decoding="async" data-lazy-srcset="https://newocean.edu.vn/wp-content/uploads/2023/05/Gap-go-truong-Niagara-Canada-400x300.jpg 400w, https://newocean.edu.vn/wp-content/uploads/2023/05/Gap-go-truong-Niagara-Canada-768x576.jpg 768w, https://newocean.edu.vn/wp-content/uploads/2023/05/Gap-go-truong-Niagara-Canada.jpg 800w" data-lazy-sizes="(max-width: 400px) 100vw, 400px" data-lazy-src="https://newocean.edu.vn/wp-content/uploads/2023/05/Gap-go-truong-Niagara-Canada-400x300.jpg" /><noscript><img width="400" height="300" src="https://newocean.edu.vn/wp-content/uploads/2023/05/Gap-go-truong-Niagara-Canada-400x300.jpg" class="jet-smart-listing__post-thumbnail-img post-thumbnail-img-simple wp-post-image" alt="Gặp gỡ Trường Niagara, College &#8211; Trường đào tạo quản trị kinh doanh, nấu ăn, du lịch khách sạn nổi tiếng nhất Canada" decoding="async" srcset="https://newocean.edu.vn/wp-content/uploads/2023/05/Gap-go-truong-Niagara-Canada-400x300.jpg 400w, https://newocean.edu.vn/wp-content/uploads/2023/05/Gap-go-truong-Niagara-Canada-768x576.jpg 768w, https://newocean.edu.vn/wp-content/uploads/2023/05/Gap-go-truong-Niagara-Canada.jpg 800w" sizes="(max-width: 400px) 100vw, 400px" /></noscript></a></div>					<div class="jet-smart-listing__post-content"><div class="jet-smart-listing__post-title post-title-simple"><a href="https://newocean.edu.vn/gap-go-truong-niagara-college-truong-dao-tao-quan-tri-kinh-doanh-nau-an-du-lich-khach-san-noi-tieng-nhat-canada.html">Gặp gỡ Trường Niagara, College &#8211; Trường đào tạo quản trị kinh doanh, nấu ăn, du lịch khách sạn nổi tiếng nhất Canada</a></div><div class="jet-smart-listing__post-excerpt post-excerpt-simple">Ngày 11/05, Du học New Ocean tổ chức buổi gặp gỡ với Đại diện Trường Niagara, College, Canada tại văn...</div><div class="jet-smart-listing__meta"><span class="posted-by post-meta__item jet-smart-listing__meta-item"><span class="jet-smart-listing__meta-icon jet-blog-icon"><i aria-hidden="true" class="fas fa-user"></i></span><a href="https://newocean.edu.vn/author/trung-tran"  class="posted-by__author" rel="author">Tran Trung</a></span><span class="post__date post-meta__item jet-smart-listing__meta-item"><span class="jet-smart-listing__meta-icon jet-blog-icon"><i aria-hidden="true" class="fas fa-calendar-alt"></i></span><a href="https://newocean.edu.vn/2023/05/09"  class="post__date-link " ><time datetime="2023-05-09T16:30:32+07:00" title="2023-05-09T16:30:32+07:00">09/05/2023</time></a></span></div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="jet-smart-listing-loading"></div></div>		</div>
                    </div>
                    <div class="elementor-element elementor-element-2b34650 elementor-align-center elementor-widget elementor-widget-button" data-id="2b34650" data-element_type="widget" data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a href="https://newocean.edu.vn/tin-tuc" class="elementor-button-link elementor-button elementor-size-sm" role="button">
						<span class="elementor-button-content-wrapper">
							<span class="elementor-button-icon elementor-align-icon-left">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" x="0px" y="0px" viewBox="0 0 300 300" style="enable-background:new 0 0 300 300;" xml:space="preserve"> <g> <g> <path d="M150,0C67.157,0,0,67.157,0,150c0,82.841,67.157,150,150,150s150-67.159,150-150C300,67.157,232.843,0,150,0z M195.708,160.159c-0.731,0.731-1.533,1.349-2.368,1.886l-56.295,56.295c-2.734,2.736-6.318,4.103-9.902,4.103 s-7.166-1.367-9.902-4.103c-5.47-5.47-5.47-14.34,0-19.808l48.509-48.516l-48.265-48.265c-5.47-5.473-5.47-14.34,0-19.808 c5.47-5.47,14.338-5.467,19.808-0.003l56.046,56.043c0.835,0.537,1.637,1.154,2.365,1.886c2.796,2.796,4.145,6.479,4.082,10.146 C199.852,153.68,198.506,157.361,195.708,160.159z"></path> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>			</span>
						<span class="elementor-button-text">Xem thêm</span>
		</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-49fc4ca elementor-hidden-tablet elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="49fc4ca" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2009f73" data-id="2009f73" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-3f639ea elementor-widget elementor-widget-heading" data-id="3f639ea" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">SỰ KIỆN DU HỌC</h2>		</div>
                    </div>
                    <div class="elementor-element elementor-element-9e97130 sukien_csss elementor-widget elementor-widget-jet-blog-smart-listing" data-id="9e97130" data-element_type="widget" data-widget_type="jet-blog-smart-listing.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-jet-blog-smart-listing jet-blog"><div class="jet-smart-listing-wrap" data-settings='{&quot;block_title&quot;:&quot;&quot;,&quot;title_tag&quot;:&quot;h2&quot;,&quot;featured_post&quot;:&quot;&quot;,&quot;featured_position&quot;:null,&quot;featured_width&quot;:null,&quot;featured_layout&quot;:null,&quot;featured_image_size&quot;:null,&quot;featured_image_position&quot;:null,&quot;featured_image_width&quot;:null,&quot;featured_excerpt_length&quot;:null,&quot;featured_excerpt_trimmed_ending&quot;:null,&quot;featured_read_more&quot;:null,&quot;featured_read_more_text&quot;:null,&quot;featured_show_meta&quot;:null,&quot;featured_show_author&quot;:null,&quot;featured_show_author_icon&quot;:null,&quot;selected_featured_show_author_icon&quot;:null,&quot;featured_show_date&quot;:null,&quot;featured_show_date_icon&quot;:null,&quot;selected_featured_show_date_icon&quot;:null,&quot;featured_show_comments&quot;:null,&quot;featured_show_comments_icon&quot;:null,&quot;selected_featured_show_comments_icon&quot;:null,&quot;posts_columns_widescreen&quot;:null,&quot;posts_columns&quot;:1,&quot;posts_columns_laptop&quot;:null,&quot;posts_columns_tablet_extra&quot;:null,&quot;posts_columns_tablet&quot;:null,&quot;posts_columns_mobile_extra&quot;:null,&quot;posts_columns_mobile&quot;:null,&quot;posts_rows&quot;:&quot;4&quot;,&quot;image_size&quot;:null,&quot;image_position&quot;:null,&quot;image_width&quot;:null,&quot;excerpt_length&quot;:&quot;&quot;,&quot;excerpt_trimmed_ending&quot;:&quot;...&quot;,&quot;read_more&quot;:&quot;&quot;,&quot;read_more_text&quot;:null,&quot;show_meta&quot;:&quot;&quot;,&quot;show_author&quot;:null,&quot;show_author_icon&quot;:null,&quot;selected_show_author_icon&quot;:null,&quot;show_date&quot;:null,&quot;show_date_icon&quot;:null,&quot;selected_show_date_icon&quot;:null,&quot;show_comments&quot;:null,&quot;show_comments_icon&quot;:null,&quot;selected_show_comments_icon&quot;:null,&quot;query_by&quot;:&quot;category&quot;,&quot;category_ids&quot;:[&quot;232&quot;],&quot;post_tag_ids&quot;:null,&quot;include_ids&quot;:null,&quot;exclude_ids&quot;:&quot;&quot;,&quot;custom_query_by&quot;:null,&quot;custom_terms_ids&quot;:null,&quot;meta_query&quot;:&quot;&quot;,&quot;meta_key&quot;:null,&quot;meta_value&quot;:null,&quot;show_filter&quot;:&quot;&quot;,&quot;filter_by&quot;:null,&quot;show_all_btn&quot;:null,&quot;all_btn_label&quot;:null,&quot;more_terms_icon&quot;:null,&quot;selected_more_terms_icon&quot;:null,&quot;show_arrows&quot;:&quot;&quot;,&quot;arrow_type&quot;:null,&quot;show_featured_terms&quot;:null,&quot;show_featured_terms_tax&quot;:null,&quot;show_terms&quot;:&quot;&quot;,&quot;show_terms_tax&quot;:null,&quot;featured_meta_position&quot;:null,&quot;meta_position&quot;:null,&quot;show_image&quot;:&quot;&quot;,&quot;post_type&quot;:&quot;post&quot;,&quot;post_ids&quot;:null,&quot;content_related_meta&quot;:[{&quot;meta_label&quot;:&quot;&lt;i class=\&quot;fas fa-clock\&quot;&gt;&lt;\/i&gt; Th\u1eddi gian:&quot;,&quot;_id&quot;:&quot;328d225&quot;,&quot;meta_key&quot;:&quot;sukien_thoigian&quot;,&quot;meta_format&quot;:&quot;%s&quot;,&quot;date_format&quot;:null,&quot;meta_callback&quot;:&quot;&quot;},{&quot;meta_label&quot;:&quot;&lt;i class=\&quot;fas fa-map-marker-alt\&quot;&gt;&lt;\/i&gt;&ensp;\u0110\u1ecba \u0111i\u1ec3m: &quot;,&quot;meta_key&quot;:&quot;sukien_diadiem&quot;,&quot;meta_format&quot;:&quot;%s&quot;,&quot;date_format&quot;:null,&quot;_id&quot;:&quot;eedb6a8&quot;,&quot;meta_callback&quot;:&quot;&quot;}],&quot;show_content_related_meta&quot;:&quot;yes&quot;,&quot;meta_content_related_position&quot;:&quot;before&quot;,&quot;title_related_meta&quot;:[{&quot;meta_key&quot;:&quot;sukien_thu&quot;,&quot;meta_format&quot;:&quot;%s&lt;div class=\&quot;sukien_thu\&quot;&gt;&lt;\/div&gt;&quot;,&quot;date_format&quot;:null,&quot;_id&quot;:&quot;919ff8e&quot;,&quot;meta_label&quot;:&quot;&quot;,&quot;meta_callback&quot;:&quot;&quot;},{&quot;_id&quot;:&quot;b5d8a5a&quot;,&quot;meta_key&quot;:&quot;sukien_ngay&quot;,&quot;meta_format&quot;:&quot;&lt;span class=\&quot;sukien_ngay\&quot;&gt;%s&lt;\/span&gt;&quot;,&quot;date_format&quot;:null,&quot;meta_label&quot;:&quot;&quot;,&quot;meta_callback&quot;:&quot;&quot;},{&quot;meta_key&quot;:&quot;sukien_thang&quot;,&quot;meta_format&quot;:&quot;&lt;span class=\&quot;sukien_thang\&quot;&gt;%s&lt;\/span&gt;&quot;,&quot;date_format&quot;:null,&quot;_id&quot;:&quot;c11bf79&quot;,&quot;meta_label&quot;:&quot;&quot;,&quot;meta_callback&quot;:&quot;&quot;}],&quot;show_title_related_meta&quot;:&quot;yes&quot;,&quot;meta_title_related_position&quot;:&quot;before&quot;,&quot;featured_title_length&quot;:null,&quot;title_length&quot;:0,&quot;add_button_icon&quot;:&quot;&quot;,&quot;button_icon&quot;:null,&quot;selected_button_icon&quot;:null,&quot;post_add_button_icon&quot;:&quot;&quot;,&quot;post_button_icon&quot;:null,&quot;selected_post_button_icon&quot;:null,&quot;use_custom_query&quot;:&quot;&quot;,&quot;custom_query&quot;:null,&quot;posts_offset&quot;:0,&quot;order&quot;:&quot;DESC&quot;,&quot;order_by&quot;:&quot;date&quot;,&quot;is_archive_template&quot;:&quot;&quot;}' data-page="1" data-term="0" data-scroll-top=>
                                    <div class="jet-smart-listing__heading"><span class="jet-smart-listing__title-placeholder"></span></div>
                                    <div class="jet-smart-listing rows-4 no-featured"><div class="jet-smart-listing__posts">
                                            <div class="jet-smart-listing__post-wrapper">
                                                <div class="jet-smart-listing__post has-thumb-postion-">
                                                    <div class="jet-smart-listing__post-content"><div class="jet-title-fields"><div class="jet-title-fields__item"><div class="jet-title-fields__item-value">Thứ 4<div class="sukien_thu"></div></div></div><div class="jet-title-fields__item"><div class="jet-title-fields__item-value"><span class="sukien_ngay">31</span></div></div><div class="jet-title-fields__item"><div class="jet-title-fields__item-value"><span class="sukien_thang">Tháng 5</span></div></div></div><div class="jet-smart-listing__post-title post-title-simple"><a href="https://newocean.edu.vn/gap-go-dai-dien-truong-hoc-vien-dai-hoc-crown-uc-cihe-thang-5-nam-2023.html">Gặp gỡ đại diện Trường Học viện Đại học Crown, Úc (CIHE) tháng 5 năm 2023</a></div><div class="jet-content-fields"><div class="jet-content-fields__item"><div class="jet-content-fields__item-label"><i class="fas fa-clock"></i> Thời gian:</div><div class="jet-content-fields__item-value">14h - 16h</div></div><div class="jet-content-fields__item"><div class="jet-content-fields__item-label"><i class="fas fa-map-marker-alt"></i>&ensp;Địa điểm: </div><div class="jet-content-fields__item-value">Tầng 3, Số 43 Nguyễn Hy Quang, Đống Đa, Hà Nội</div></div></div></div>
                                                </div>
                                            </div>
                                            <div class="jet-smart-listing__post-wrapper">
                                                <div class="jet-smart-listing__post has-thumb-postion-">
                                                    <div class="jet-smart-listing__post-content"><div class="jet-title-fields"><div class="jet-title-fields__item"><div class="jet-title-fields__item-value">Thứ 5<div class="sukien_thu"></div></div></div><div class="jet-title-fields__item"><div class="jet-title-fields__item-value"><span class="sukien_ngay">11</span></div></div><div class="jet-title-fields__item"><div class="jet-title-fields__item-value"><span class="sukien_thang">Tháng 5</span></div></div></div><div class="jet-smart-listing__post-title post-title-simple"><a href="https://newocean.edu.vn/gap-go-truong-niagara-college-truong-dao-tao-quan-tri-kinh-doanh-nau-an-du-lich-khach-san-noi-tieng-nhat-canada.html">Gặp gỡ Trường Niagara, College &#8211; Trường đào tạo quản trị kinh doanh, nấu ăn, du lịch khách sạn nổi tiếng nhất Canada</a></div><div class="jet-content-fields"><div class="jet-content-fields__item"><div class="jet-content-fields__item-label"><i class="fas fa-clock"></i> Thời gian:</div><div class="jet-content-fields__item-value">9h00 - 10h30</div></div><div class="jet-content-fields__item"><div class="jet-content-fields__item-label"><i class="fas fa-map-marker-alt"></i>&ensp;Địa điểm: </div><div class="jet-content-fields__item-value">Tầng 3, Số 43 Nguyễn Hy Quang, Đống Đa, Hà Nội</div></div></div></div>
                                                </div>
                                            </div>
                                            <div class="jet-smart-listing__post-wrapper">
                                                <div class="jet-smart-listing__post has-thumb-postion-">
                                                    <div class="jet-smart-listing__post-content"><div class="jet-title-fields"><div class="jet-title-fields__item"><div class="jet-title-fields__item-value">Thứ 2<div class="sukien_thu"></div></div></div><div class="jet-title-fields__item"><div class="jet-title-fields__item-value"><span class="sukien_ngay">17</span></div></div><div class="jet-title-fields__item"><div class="jet-title-fields__item-value"><span class="sukien_thang">Tháng 4</span></div></div></div><div class="jet-smart-listing__post-title post-title-simple"><a href="https://newocean.edu.vn/gap-go-truong-dai-hoc-southern-cross-uc-nam-trong-danh-sach-100-truong-dai-hoc-tre-xuat-sac-nhat-the-gioi.html">Gặp gỡ Trường Đại học Southern Cross, Úc nằm trong danh sách 100 trường đại học trẻ xuất sắc nhất thế giới</a></div><div class="jet-content-fields"><div class="jet-content-fields__item"><div class="jet-content-fields__item-label"><i class="fas fa-clock"></i> Thời gian:</div><div class="jet-content-fields__item-value">10h00 - 11h30</div></div><div class="jet-content-fields__item"><div class="jet-content-fields__item-label"><i class="fas fa-map-marker-alt"></i>&ensp;Địa điểm: </div><div class="jet-content-fields__item-value">Tầng 3, Số 43 Nguyễn Hy Quang, Đống Đa, Hà Nội</div></div></div></div>
                                                </div>
                                            </div>
                                            <div class="jet-smart-listing__post-wrapper">
                                                <div class="jet-smart-listing__post has-thumb-postion-">
                                                    <div class="jet-smart-listing__post-content"><div class="jet-title-fields"><div class="jet-title-fields__item"><div class="jet-title-fields__item-value">Thứ 7<div class="sukien_thu"></div></div></div><div class="jet-title-fields__item"><div class="jet-title-fields__item-value"><span class="sukien_ngay">15</span></div></div><div class="jet-title-fields__item"><div class="jet-title-fields__item-value"><span class="sukien_thang">Tháng 4</span></div></div></div><div class="jet-smart-listing__post-title post-title-simple"><a href="https://newocean.edu.vn/hoi-thao-truc-tiep-du-hoc-anh-truong-dai-hoc-northampton-top-20-truong-kinh-doanh-hang-dau-vuong-quoc-anh.html">Hội thảo trực tiếp Du học Anh trường Đại học Northampton – Top 20 trường Kinh doanh hàng đầu Vương quốc Anh</a></div><div class="jet-content-fields"><div class="jet-content-fields__item"><div class="jet-content-fields__item-label"><i class="fas fa-clock"></i> Thời gian:</div><div class="jet-content-fields__item-value">14h30 - 16h30</div></div><div class="jet-content-fields__item"><div class="jet-content-fields__item-label"><i class="fas fa-map-marker-alt"></i>&ensp;Địa điểm: </div><div class="jet-content-fields__item-value">Tầng 3, Số 43 Nguyễn Hy Quang, Đống Đa, Hà Nội</div></div></div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="jet-smart-listing-loading"></div></div>		</div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3890473" data-id="3890473" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-6ba72f9 elementor-widget elementor-widget-heading" data-id="6ba72f9" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">VIDEO DU HỌC</h2>		</div>
                    </div>
                    <div class="elementor-element elementor-element-55e45c0 elementor-widget elementor-widget-video" data-id="55e45c0" data-element_type="widget" data-settings="{&quot;youtube_url&quot;:&quot;https:\/\/www.youtube.com\/watch?v=H-EwvU00nP4&quot;,&quot;lazy_load&quot;:&quot;yes&quot;,&quot;show_image_overlay&quot;:&quot;yes&quot;,&quot;image_overlay&quot;:{&quot;url&quot;:&quot;https:\/\/newocean.edu.vn\/wp-content\/uploads\/2023\/04\/EwvU00nP4-1.jpg&quot;,&quot;id&quot;:24963,&quot;size&quot;:&quot;&quot;,&quot;alt&quot;:&quot;H\u1ecdc sinh nh\u1ead visa du h\u1ecdc \u00daC, H\u1ecdc b\u1ed5ng 30% ng\u00e0nh Marketing du h\u1ecdc t\u1ea1i \u00dac&quot;,&quot;source&quot;:&quot;library&quot;},&quot;lightbox&quot;:&quot;yes&quot;,&quot;video_type&quot;:&quot;youtube&quot;,&quot;controls&quot;:&quot;yes&quot;}" data-widget_type="video.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-wrapper elementor-open-lightbox">
                                <div class="elementor-custom-embed-image-overlay" data-elementor-open-lightbox="yes" data-elementor-lightbox="{&quot;type&quot;:&quot;video&quot;,&quot;videoType&quot;:&quot;youtube&quot;,&quot;url&quot;:&quot;https:\/\/www.youtube.com\/embed\/H-EwvU00nP4?feature=oembed&amp;start&amp;end&amp;wmode=opaque&amp;loop=0&amp;controls=1&amp;mute=0&amp;rel=0&amp;modestbranding=0&quot;,&quot;modalOptions&quot;:{&quot;id&quot;:&quot;elementor-lightbox-55e45c0&quot;,&quot;entranceAnimation&quot;:&quot;&quot;,&quot;entranceAnimation_tablet&quot;:&quot;&quot;,&quot;entranceAnimation_mobile&quot;:&quot;&quot;,&quot;videoAspectRatio&quot;:&quot;169&quot;}}" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJ0eXBlIjoidmlkZW8iLCJ2aWRlb1R5cGUiOiJ5b3V0dWJlIiwidXJsIjoiaHR0cHM6XC9cL3d3dy55b3V0dWJlLmNvbVwvZW1iZWRcL0gtRXd2VTAwblA0P2ZlYXR1cmU9b2VtYmVkJnN0YXJ0JmVuZCZ3bW9kZT1vcGFxdWUmbG9vcD0wJmNvbnRyb2xzPTEmbXV0ZT0wJnJlbD0wJm1vZGVzdGJyYW5kaW5nPTAiLCJtb2RhbE9wdGlvbnMiOnsiaWQiOiJlbGVtZW50b3ItbGlnaHRib3gtNTVlNDVjMCIsImVudHJhbmNlQW5pbWF0aW9uIjoiIiwiZW50cmFuY2VBbmltYXRpb25fdGFibGV0IjoiIiwiZW50cmFuY2VBbmltYXRpb25fbW9iaWxlIjoiIiwidmlkZW9Bc3BlY3RSYXRpbyI6IjE2OSJ9fQ%3D%3D">
                                    <img decoding="async" width="1280" height="720" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201280%20720'%3E%3C/svg%3E" class="attachment-full size-full wp-image-24963" alt="Học sinh nhậ visa du học ÚC, Học bổng 30% ngành Marketing du học tại Úc" data-lazy-srcset="https://newocean.edu.vn/wp-content/uploads/2023/04/EwvU00nP4-1.jpg 1280w, https://newocean.edu.vn/wp-content/uploads/2023/04/EwvU00nP4-1-533x300.jpg 533w, https://newocean.edu.vn/wp-content/uploads/2023/04/EwvU00nP4-1-1024x576.jpg 1024w, https://newocean.edu.vn/wp-content/uploads/2023/04/EwvU00nP4-1-768x432.jpg 768w" data-lazy-sizes="(max-width: 1280px) 100vw, 1280px" data-lazy-src="https://newocean.edu.vn/wp-content/uploads/2023/04/EwvU00nP4-1.jpg" /><noscript><img decoding="async" width="1280" height="720" src="https://newocean.edu.vn/wp-content/uploads/2023/04/EwvU00nP4-1.jpg" class="attachment-full size-full wp-image-24963" alt="Học sinh nhậ visa du học ÚC, Học bổng 30% ngành Marketing du học tại Úc" srcset="https://newocean.edu.vn/wp-content/uploads/2023/04/EwvU00nP4-1.jpg 1280w, https://newocean.edu.vn/wp-content/uploads/2023/04/EwvU00nP4-1-533x300.jpg 533w, https://newocean.edu.vn/wp-content/uploads/2023/04/EwvU00nP4-1-1024x576.jpg 1024w, https://newocean.edu.vn/wp-content/uploads/2023/04/EwvU00nP4-1-768x432.jpg 768w" sizes="(max-width: 1280px) 100vw, 1280px" /></noscript>																<div class="elementor-custom-embed-play" role="button" aria-label="Play Video about Học sinh nhậ visa du học ÚC, Học bổng 30% ngành Marketing du học tại Úc" tabindex="0">
                                        <i aria-hidden="true" class="eicon-play"></i>							<span class="elementor-screen-only">Play Video about Học sinh nhậ visa du học ÚC, Học bổng 30% ngành Marketing du học tại Úc</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-2bf13a2 elementor-skin-carousel elementor-widget elementor-widget-media-carousel" data-id="2bf13a2" data-element_type="widget" data-settings="{&quot;slides_per_view&quot;:&quot;3&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;lazyload&quot;:&quot;yes&quot;,&quot;skin&quot;:&quot;carousel&quot;,&quot;effect&quot;:&quot;slide&quot;,&quot;speed&quot;:500,&quot;autoplay&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;loop&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;space_between&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;space_between_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;space_between_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]}}" data-widget_type="media-carousel.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-swiper">
                                <div class="elementor-main-swiper swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <a href="https://newocean.edu.vn/wp-content/uploads/2023/03/visa-du-hoc-uc-39-2023.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="2bf13a2" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjQ4NDUsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAzXC92aXNhLWR1LWhvYy11Yy0zOS0yMDIzLmpwZyIsInNsaWRlc2hvdyI6IjJiZjEzYTIifQ%3D%3D" data-elementor-lightbox-video="https://www.youtube.com/embed/fGFrLQaK_NE?feature=oembed&amp;autoplay=1&amp;rel=0&amp;controls=0">		<div class="elementor-carousel-image swiper-lazy" role="img" aria-label="Visa du học Úc 2023 có nhanh nhất trong 1 ngày" data-background="https://newocean.edu.vn/wp-content/uploads/2023/03/visa-du-hoc-uc-39-2023-533x300.jpg">

                                                    <div class="swiper-lazy-preloader"></div>

                                                    <div class="elementor-custom-embed-play">
                                                        <i aria-hidden="true" class="eicon-play"></i>					<span class="elementor-screen-only">Play</span>
                                                    </div>
                                                </div>
                                            </a>						</div>
                                        <div class="swiper-slide">
                                            <a href="https://newocean.edu.vn/wp-content/uploads/2023/02/Hoi-thao-du-hoc-Singapore-2023-truong-JCU.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="2bf13a2" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjQ2MzUsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAyXC9Ib2ktdGhhby1kdS1ob2MtU2luZ2Fwb3JlLTIwMjMtdHJ1b25nLUpDVS5qcGciLCJzbGlkZXNob3ciOiIyYmYxM2EyIn0%3D" data-elementor-lightbox-video="https://www.youtube.com/embed/sW1keA6G_s4?feature=oembed&amp;autoplay=1&amp;rel=0&amp;controls=0">		<div class="elementor-carousel-image swiper-lazy" role="img" aria-label="Hội thảo du học Singapore 2023 trường JCU" data-background="https://newocean.edu.vn/wp-content/uploads/2023/02/Hoi-thao-du-hoc-Singapore-2023-truong-JCU-533x300.jpg">

                                                    <div class="swiper-lazy-preloader"></div>

                                                    <div class="elementor-custom-embed-play">
                                                        <i aria-hidden="true" class="eicon-play"></i>					<span class="elementor-screen-only">Play</span>
                                                    </div>
                                                </div>
                                            </a>						</div>
                                        <div class="swiper-slide">
                                            <a href="https://newocean.edu.vn/wp-content/uploads/2023/02/visa-du-hoc-vu-tu-anh.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="2bf13a2" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjQ0ODIsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAyXC92aXNhLWR1LWhvYy12dS10dS1hbmguanBnIiwic2xpZGVzaG93IjoiMmJmMTNhMiJ9" data-elementor-lightbox-video="https://www.youtube.com/embed/cV_gOXcTIsM?feature=oembed&amp;autoplay=1&amp;rel=0&amp;controls=0">		<div class="elementor-carousel-image swiper-lazy" role="img" aria-label="Visa du học Vũ Tú Anh" data-background="https://newocean.edu.vn/wp-content/uploads/2023/02/visa-du-hoc-vu-tu-anh-533x300.jpg">

                                                    <div class="swiper-lazy-preloader"></div>

                                                    <div class="elementor-custom-embed-play">
                                                        <i aria-hidden="true" class="eicon-play"></i>					<span class="elementor-screen-only">Play</span>
                                                    </div>
                                                </div>
                                            </a>						</div>
                                        <div class="swiper-slide">
                                            <a href="https://newocean.edu.vn/wp-content/uploads/2023/02/visa-du-hoc-balan.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="2bf13a2" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjQ0MzMsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAyXC92aXNhLWR1LWhvYy1iYWxhbi5qcGciLCJzbGlkZXNob3ciOiIyYmYxM2EyIn0%3D" data-elementor-lightbox-video="https://www.youtube.com/embed/BbnMrx3Ik8Y?feature=oembed&amp;autoplay=1&amp;rel=0&amp;controls=0">		<div class="elementor-carousel-image swiper-lazy" role="img" aria-label="Du học sinh nhận visa du học Ba Lan" data-background="https://newocean.edu.vn/wp-content/uploads/2023/02/visa-du-hoc-balan-533x300.jpg">

                                                    <div class="swiper-lazy-preloader"></div>

                                                    <div class="elementor-custom-embed-play">
                                                        <i aria-hidden="true" class="eicon-play"></i>					<span class="elementor-screen-only">Play</span>
                                                    </div>
                                                </div>
                                            </a>						</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-df9f39d elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="df9f39d" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-092491b" data-id="092491b" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-80ef570 elementor-widget elementor-widget-heading" data-id="80ef570" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h3 class="elementor-heading-title elementor-size-large">HÌNH ẢNH HOẠT ĐỘNG</h3>		</div>
                    </div>
                    <div class="elementor-element elementor-element-c7ca10e elementor-widget elementor-widget-gallery" data-id="c7ca10e" data-element_type="widget" data-settings="{&quot;columns_tablet&quot;:3,&quot;columns_mobile&quot;:2,&quot;gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:15,&quot;sizes&quot;:[]},&quot;lazyload&quot;:&quot;yes&quot;,&quot;gallery_layout&quot;:&quot;grid&quot;,&quot;columns&quot;:4,&quot;gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;link_to&quot;:&quot;file&quot;,&quot;aspect_ratio&quot;:&quot;3:2&quot;,&quot;content_hover_animation&quot;:&quot;fade-in&quot;}" data-widget_type="gallery.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-gallery__titles-container e--pointer-underline e--animation-fade" aria-label="Gallery filter">

                                <a class="elementor-item elementor-gallery-title" role="button" tabindex="0" data-gallery-index="0">
                                    Visa news					</a>
                                <a class="elementor-item elementor-gallery-title" role="button" tabindex="0" data-gallery-index="1">
                                    Workshop event					</a>
                                <a class="elementor-item elementor-gallery-title" role="button" tabindex="0" data-gallery-index="2">
                                    New Ocean’s Team					</a>
                            </div>
                            <div class="elementor-gallery__container">
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="2" href="https://newocean.edu.vn/wp-content/uploads/2021/01/122070134_3980340578661350_1710989647291885484_o-scaled.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU0NjMsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjFcLzAxXC8xMjIwNzAxMzRfMzk4MDM0MDU3ODY2MTM1MF8xNzEwOTg5NjQ3MjkxODg1NDg0X28tc2NhbGVkLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2021/01/122070134_3980340578661350_1710989647291885484_o-600x400.jpg" data-width="600" data-height="400" aria-label="Sự kiện quyên góp từ thiện tại trung tâm du học New Ocean" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="0" href="https://newocean.edu.vn/wp-content/uploads/2023/04/Visa-Nguyen-cuong-Thinh-900-×-600-px.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjUwMzEsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzA0XC9WaXNhLU5ndXllbi1jdW9uZy1UaGluaC05MDAtXHUwMGQ3LTYwMC1weC5qcGciLCJzbGlkZXNob3ciOiJhbGwtYzdjYTEwZSJ9">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2023/04/Visa-Nguyen-cuong-Thinh-900-×-600-px.jpg" data-width="900" data-height="600" aria-label="Visa Nguyen cuong Thinh (900 × 600 px)" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="2" href="https://newocean.edu.vn/wp-content/uploads/2021/01/140898595_4247168181978587_5585821619500291228_o-scaled.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU0NjgsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjFcLzAxXC8xNDA4OTg1OTVfNDI0NzE2ODE4MTk3ODU4N181NTg1ODIxNjE5NTAwMjkxMjI4X28tc2NhbGVkLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2021/01/140898595_4247168181978587_5585821619500291228_o-600x400.jpg" data-width="600" data-height="400" aria-label="New Ocean Team Du Học Tổng Công Ty Tân Đại Dương" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="2" href="https://newocean.edu.vn/wp-content/uploads/2021/01/122332738_3973855389309869_6909492643877186191_o-scaled.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU0NjQsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjFcLzAxXC8xMjIzMzI3MzhfMzk3Mzg1NTM4OTMwOTg2OV82OTA5NDkyNjQzODc3MTg2MTkxX28tc2NhbGVkLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2021/01/122332738_3973855389309869_6909492643877186191_o-600x400.jpg" data-width="600" data-height="400" aria-label="Tư vấn du học New Ocean chúc mừng ngày 8/3" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="1" href="https://newocean.edu.vn/wp-content/uploads/2020/06/event-09.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTM3NjIsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjBcLzA2XC9ldmVudC0wOS5qcGciLCJzbGlkZXNob3ciOiJhbGwtYzdjYTEwZSJ9">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2020/06/event-09-600x340.jpg" data-width="600" data-height="340" aria-label="Công ty du học New Ocean và đại diện trường trao học bổng du học" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="1" href="https://newocean.edu.vn/wp-content/uploads/2020/06/event-04-scaled.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTM3NzIsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjBcLzA2XC9ldmVudC0wNC1zY2FsZWQuanBnIiwic2xpZGVzaG93IjoiYWxsLWM3Y2ExMGUifQ%3D%3D">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2020/06/event-04-600x338.jpg" data-width="600" data-height="338" aria-label="Không gian hội thảo du học New Ocean" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="0" href="https://newocean.edu.vn/wp-content/uploads/2022/04/MAI-NGUYEN-ANH-TRUONG-VISA-DU-HOC-BA-LAN.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTgxNDAsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjJcLzA0XC9NQUktTkdVWUVOLUFOSC1UUlVPTkctVklTQS1EVS1IT0MtQkEtTEFOLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2022/04/MAI-NGUYEN-ANH-TRUONG-VISA-DU-HOC-BA-LAN.jpg" data-width="600" data-height="400" aria-label="visa du học ba lan mai nguyễn anh trường" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="2" href="https://newocean.edu.vn/wp-content/uploads/2021/01/120201724_3903169733045102_7763519464906043400_o-scaled.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU0NjIsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjFcLzAxXC8xMjAyMDE3MjRfMzkwMzE2OTczMzA0NTEwMl83NzYzNTE5NDY0OTA2MDQzNDAwX28tc2NhbGVkLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2021/01/120201724_3903169733045102_7763519464906043400_o-600x400.jpg" data-width="600" data-height="400" aria-label="1/6 tết thiếu nhi tại trung tâm tư vấn du học New Ocean" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="1" href="https://newocean.edu.vn/wp-content/uploads/2020/06/event-01-scaled.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTM3NjksInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjBcLzA2XC9ldmVudC0wMS1zY2FsZWQuanBnIiwic2xpZGVzaG93IjoiYWxsLWM3Y2ExMGUifQ%3D%3D">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2020/06/event-01-600x338.jpg" data-width="600" data-height="338" aria-label="Học sinh, sinh viên nhận tư vấn du học từ đại diện trường" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="0" href="https://newocean.edu.vn/wp-content/uploads/2022/01/hoang-khanh-linh.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc2NzMsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjJcLzAxXC9ob2FuZy1raGFuaC1saW5oLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2022/01/hoang-khanh-linh.jpg" data-width="600" data-height="400" aria-label="" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="0" href="https://newocean.edu.vn/wp-content/uploads/2022/04/HOANG-THU-HA-VISA-DU-HOC-UC.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTgxNzMsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjJcLzA0XC9IT0FORy1USFUtSEEtVklTQS1EVS1IT0MtVUMuanBnIiwic2xpZGVzaG93IjoiYWxsLWM3Y2ExMGUifQ%3D%3D">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2022/04/HOANG-THU-HA-VISA-DU-HOC-UC.jpg" data-width="600" data-height="400" aria-label="visa du học Úc Hoàng Thu Hà" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="1" href="https://newocean.edu.vn/wp-content/uploads/2020/06/event-10-scaled.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTM3NjQsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjBcLzA2XC9ldmVudC0xMC1zY2FsZWQuanBnIiwic2xpZGVzaG93IjoiYWxsLWM3Y2ExMGUifQ%3D%3D">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2020/06/event-10-600x338.jpg" data-width="600" data-height="338" aria-label="Trung tâm tư vấn du học New Ocean tổ chức hội thảo" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="0" href="https://newocean.edu.vn/wp-content/uploads/2022/03/LE-MANH-AN-VISA-DU-HOC-CANADA.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc5OTAsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjJcLzAzXC9MRS1NQU5ILUFOLVZJU0EtRFUtSE9DLUNBTkFEQS5qcGciLCJzbGlkZXNob3ciOiJhbGwtYzdjYTEwZSJ9">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2022/03/LE-MANH-AN-VISA-DU-HOC-CANADA.jpg" data-width="600" data-height="400" aria-label="LÊ MẠNH AN - VISA DU HỌC CANADA" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="0" href="https://newocean.edu.vn/wp-content/uploads/2023/04/NGO-LAN-ANH-DU-HOC-UC-900-×-600-px.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjUwMTAsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzA0XC9OR08tTEFOLUFOSC1EVS1IT0MtVUMtOTAwLVx1MDBkNy02MDAtcHguanBnIiwic2xpZGVzaG93IjoiYWxsLWM3Y2ExMGUifQ%3D%3D">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2023/04/NGO-LAN-ANH-DU-HOC-UC-900-×-600-px.jpg" data-width="900" data-height="600" aria-label="NGO LAN ANH - DU HOC UC (900 × 600 px)" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="1" href="https://newocean.edu.vn/wp-content/uploads/2020/06/event-06.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTM3NzMsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjBcLzA2XC9ldmVudC0wNi5qcGciLCJzbGlkZXNob3ciOiJhbGwtYzdjYTEwZSJ9">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2020/06/event-06-600x450.jpg" data-width="600" data-height="450" aria-label="Hội thảo du học New Ocean" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="1" href="https://newocean.edu.vn/wp-content/uploads/2020/06/event-07.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTM3NzQsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjBcLzA2XC9ldmVudC0wNy5qcGciLCJzbGlkZXNob3ciOiJhbGwtYzdjYTEwZSJ9">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2020/06/event-07-600x400.jpg" data-width="600" data-height="400" aria-label="Sinh viên nhận tư vấn du học từ trung tâm du học New Ocean" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="2" href="https://newocean.edu.vn/wp-content/uploads/2021/01/141683027_4247163928645679_2480284445418297371_o-scaled.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU0ODIsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjFcLzAxXC8xNDE2ODMwMjdfNDI0NzE2MzkyODY0NTY3OV8yNDgwMjg0NDQ1NDE4Mjk3MzcxX28tc2NhbGVkLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2021/01/141683027_4247163928645679_2480284445418297371_o-600x400.jpg" data-width="600" data-height="400" aria-label="Lễ tổng kết công ty du học New Ocean" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="0" href="https://newocean.edu.vn/wp-content/uploads/2022/04/Visa-du-hoc-Ba-Lan-Nguyen-Tri-Kiet.png" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTkyMTIsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjJcLzA0XC9WaXNhLWR1LWhvYy1CYS1MYW4tTmd1eWVuLVRyaS1LaWV0LnBuZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2022/04/Visa-du-hoc-Ba-Lan-Nguyen-Tri-Kiet.png" data-width="600" data-height="400" aria-label="Visa du học Ba Lan - Nguyễn Trí Kiệt" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="0" href="https://newocean.edu.vn/wp-content/uploads/2022/03/thanh-min.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc5MTgsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjJcLzAzXC90aGFuaC1taW4uanBnIiwic2xpZGVzaG93IjoiYWxsLWM3Y2ExMGUifQ%3D%3D">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2022/03/thanh-min.jpg" data-width="600" data-height="400" aria-label="" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="0" href="https://newocean.edu.vn/wp-content/uploads/2023/03/Nguyen-Thi-Thuy-Nga-Du-hoc-Uc-2023.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjQ5MDQsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjNcLzAzXC9OZ3V5ZW4tVGhpLVRodXktTmdhLUR1LWhvYy1VYy0yMDIzLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2023/03/Nguyen-Thi-Thuy-Nga-Du-hoc-Uc-2023.jpg" data-width="900" data-height="600" aria-label="Nguyen Thi Thuy Nga Du hoc Uc 2023" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="1" href="https://newocean.edu.vn/wp-content/uploads/2020/06/event-02-scaled.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTM3NzAsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjBcLzA2XC9ldmVudC0wMi1zY2FsZWQuanBnIiwic2xpZGVzaG93IjoiYWxsLWM3Y2ExMGUifQ%3D%3D">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2020/06/event-02-600x338.jpg" data-width="600" data-height="338" aria-label="Hội thảo du học New Ocean" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="0" href="https://newocean.edu.vn/wp-content/uploads/2022/03/tan-min.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc5MjEsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjJcLzAzXC90YW4tbWluLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2022/03/tan-min.jpg" data-width="600" data-height="400" aria-label="" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="1" href="https://newocean.edu.vn/wp-content/uploads/2020/06/evnet-05-scaled.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTM3NjYsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjBcLzA2XC9ldm5ldC0wNS1zY2FsZWQuanBnIiwic2xpZGVzaG93IjoiYWxsLWM3Y2ExMGUifQ%3D%3D">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2020/06/evnet-05-600x338.jpg" data-width="600" data-height="338" aria-label="Tư vấn du học New Ocean &amp; đại diện trường đang tư vấn cho các bạn sinh viên" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="2" href="https://newocean.edu.vn/wp-content/uploads/2020/04/Team-Du-hoc-New-Ocean-1.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTI4MDEsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjBcLzA0XC9UZWFtLUR1LWhvYy1OZXctT2NlYW4tMS5qcGciLCJzbGlkZXNob3ciOiJhbGwtYzdjYTEwZSJ9">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2020/04/Team-Du-hoc-New-Ocean-1-600x411.jpg" data-width="600" data-height="411" aria-label="Khai trương văn phòng mới công ty tư vấn du học New Ocean" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="0" href="https://newocean.edu.vn/wp-content/uploads/2022/12/Ban-Mai-Ngoc-Khanh-Visa-Uc-compressed.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjA4MjIsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjJcLzEyXC9CYW4tTWFpLU5nb2MtS2hhbmgtVmlzYS1VYy1jb21wcmVzc2VkLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2022/12/Ban-Mai-Ngoc-Khanh-Visa-Uc-compressed-600x342.jpg" data-width="600" data-height="342" aria-label="" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="2" href="https://newocean.edu.vn/wp-content/uploads/2021/01/134112058_4174286132600126_3244883302894266373_o-scaled.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU0NjcsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjFcLzAxXC8xMzQxMTIwNThfNDE3NDI4NjEzMjYwMDEyNl8zMjQ0ODgzMzAyODk0MjY2MzczX28tc2NhbGVkLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2021/01/134112058_4174286132600126_3244883302894266373_o-600x400.jpg" data-width="600" data-height="400" aria-label="Noel tại công ty tư vấn du học New Ocean" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="1" href="https://newocean.edu.vn/wp-content/uploads/2020/06/event-08.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTM3NzUsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjBcLzA2XC9ldmVudC0wOC5qcGciLCJzbGlkZXNob3ciOiJhbGwtYzdjYTEwZSJ9">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2020/06/event-08-600x337.jpg" data-width="600" data-height="337" aria-label="Ngày hội du học được tổ chức bởi công ty du học New Ocean" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="0" href="https://newocean.edu.vn/wp-content/uploads/2022/03/Thiet-ke-chua-co-ten-1.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTgwNzgsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjJcLzAzXC9UaGlldC1rZS1jaHVhLWNvLXRlbi0xLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2022/03/Thiet-ke-chua-co-ten-1.jpg" data-width="600" data-height="400" aria-label="visa du học úc đậu nguyễn duy anh" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="2" href="https://newocean.edu.vn/wp-content/uploads/2021/01/141669955_4247167398645332_1843586900798798637_o-scaled.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU0NjksInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjFcLzAxXC8xNDE2Njk5NTVfNDI0NzE2NzM5ODY0NTMzMl8xODQzNTg2OTAwNzk4Nzk4NjM3X28tc2NhbGVkLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2021/01/141669955_4247167398645332_1843586900798798637_o-600x400.jpg" data-width="600" data-height="400" aria-label="Lễ tổng kết 2020 công ty du học New Ocean" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="2" href="https://newocean.edu.vn/wp-content/uploads/2021/01/134054615_4174285395933533_1978368020839203680_o-scaled.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU0NjYsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjFcLzAxXC8xMzQwNTQ2MTVfNDE3NDI4NTM5NTkzMzUzM18xOTc4MzY4MDIwODM5MjAzNjgwX28tc2NhbGVkLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2021/01/134054615_4174285395933533_1978368020839203680_o-600x400.jpg" data-width="600" data-height="400" aria-label="Noel tại Du Học New Ocean" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="2" href="https://newocean.edu.vn/wp-content/uploads/2021/01/133844278_4174285992600140_8775293905750105615_o-scaled.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU0NjUsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjFcLzAxXC8xMzM4NDQyNzhfNDE3NDI4NTk5MjYwMDE0MF84Nzc1MjkzOTA1NzUwMTA1NjE1X28tc2NhbGVkLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2021/01/133844278_4174285992600140_8775293905750105615_o-600x450.jpg" data-width="600" data-height="450" aria-label="Noel tại công ty tư vấn du học New Ocean" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="1" href="https://newocean.edu.vn/wp-content/uploads/2020/06/event-11-scaled.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTM3NjUsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjBcLzA2XC9ldmVudC0xMS1zY2FsZWQuanBnIiwic2xpZGVzaG93IjoiYWxsLWM3Y2ExMGUifQ%3D%3D">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2020/06/event-11-600x360.jpg" data-width="600" data-height="360" aria-label="Đại diện trường được mời từ trung tâm du học New Ocean" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="1" href="https://newocean.edu.vn/wp-content/uploads/2020/06/event-03-scaled.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTM3NzEsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjBcLzA2XC9ldmVudC0wMy1zY2FsZWQuanBnIiwic2xpZGVzaG93IjoiYWxsLWM3Y2ExMGUifQ%3D%3D">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2020/06/event-03-600x338.jpg" data-width="600" data-height="338" aria-label="Không gian hội thảo du học New Ocean" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="2" href="https://newocean.edu.vn/wp-content/uploads/2021/01/141257014_4247166741978731_7659781083252009299_o-scaled.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTU0NzUsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjFcLzAxXC8xNDEyNTcwMTRfNDI0NzE2Njc0MTk3ODczMV83NjU5NzgxMDgzMjUyMDA5Mjk5X28tc2NhbGVkLmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2021/01/141257014_4247166741978731_7659781083252009299_o-600x400.jpg" data-width="600" data-height="400" aria-label="Hoạt động trung tâm tư vấn du học New Ocean" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="0" href="https://newocean.edu.vn/wp-content/uploads/2022/03/linh-min.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc5MjIsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjJcLzAzXC9saW5oLW1pbi5qcGciLCJzbGlkZXNob3ciOiJhbGwtYzdjYTEwZSJ9">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2022/03/linh-min.jpg" data-width="600" data-height="400" aria-label="" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="2" href="https://newocean.edu.vn/wp-content/uploads/2020/04/Team-Du-hoc-New-Ocean-3.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTI4MDMsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjBcLzA0XC9UZWFtLUR1LWhvYy1OZXctT2NlYW4tMy5qcGciLCJzbGlkZXNob3ciOiJhbGwtYzdjYTEwZSJ9">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2020/04/Team-Du-hoc-New-Ocean-3-600x425.jpg" data-width="600" data-height="425" aria-label="Lễ khai trương trung tâm tư vấn du học New Ocean" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="0" href="https://newocean.edu.vn/wp-content/uploads/2022/03/vy-min.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc5MTYsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjJcLzAzXC92eS1taW4uanBnIiwic2xpZGVzaG93IjoiYWxsLWM3Y2ExMGUifQ%3D%3D">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2022/03/vy-min.jpg" data-width="600" data-height="400" aria-label="" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="0" href="https://newocean.edu.vn/wp-content/uploads/2022/03/thang-min.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc5MjAsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjJcLzAzXC90aGFuZy1taW4uanBnIiwic2xpZGVzaG93IjoiYWxsLWM3Y2ExMGUifQ%3D%3D">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2022/03/thang-min.jpg" data-width="600" data-height="400" aria-label="" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="0" href="https://newocean.edu.vn/wp-content/uploads/2022/03/phat-min.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MTc5MjMsInVybCI6Imh0dHBzOlwvXC9uZXdvY2Vhbi5lZHUudm5cL3dwLWNvbnRlbnRcL3VwbG9hZHNcLzIwMjJcLzAzXC9waGF0LW1pbi5qcGciLCJzbGlkZXNob3ciOiJhbGwtYzdjYTEwZSJ9">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2022/03/phat-min.jpg" data-width="600" data-height="400" aria-label="" role="img" ></div>
                                </a>
                                <a class="e-gallery-item elementor-gallery-item elementor-animated-content" data-e-gallery-tags="1" href="https://newocean.edu.vn/wp-content/uploads/2019/12/event-05.jpg" data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="all-c7ca10e" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6NjgzOCwidXJsIjoiaHR0cHM6XC9cL25ld29jZWFuLmVkdS52blwvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAxOVwvMTJcL2V2ZW50LTA1LmpwZyIsInNsaWRlc2hvdyI6ImFsbC1jN2NhMTBlIn0%3D">
                                    <div class="e-gallery-image elementor-gallery-item__image" data-thumbnail="https://newocean.edu.vn/wp-content/uploads/2019/12/event-05-600x338.jpg" data-width="600" data-height="338" aria-label="Công ty tư vấn du học New Ocean" role="img" ></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-d5145fa elementor-widget elementor-widget-spacer" data-id="d5145fa" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-dc3690c elementor-align-center elementor-widget elementor-widget-button" data-id="dc3690c" data-element_type="widget" data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a href="https://www.flickr.com/photos/185102004@N08/albums/with/72157712555573808" target="_blank" class="elementor-button-link elementor-button elementor-size-sm" role="button">
						<span class="elementor-button-content-wrapper">
							<span class="elementor-button-icon elementor-align-icon-left">
				<i aria-hidden="true" class="fab fa-flickr"></i>			</span>
						<span class="elementor-button-text">Xem nhiều hơn trên Flick</span>
		</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-d249696 elementor-widget elementor-widget-spacer" data-id="d249696" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-9594080 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9594080" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6f00ae6" data-id="6f00ae6" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-fee8db8 elementor-widget elementor-widget-heading" data-id="fee8db8" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h3 class="elementor-heading-title elementor-size-large">ĐỐI TÁC</h3>		</div>
                    </div>
                    <div class="elementor-element elementor-element-80b927a elementor-skin-carousel elementor-arrows-yes elementor-widget elementor-widget-media-carousel" data-id="80b927a" data-element_type="widget" data-settings="{&quot;slides_per_view&quot;:&quot;5&quot;,&quot;slides_per_view_tablet&quot;:&quot;4&quot;,&quot;slides_per_view_mobile&quot;:&quot;2&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;skin&quot;:&quot;carousel&quot;,&quot;effect&quot;:&quot;slide&quot;,&quot;show_arrows&quot;:&quot;yes&quot;,&quot;speed&quot;:500,&quot;autoplay&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;loop&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;space_between&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;space_between_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;space_between_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]}}" data-widget_type="media-carousel.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-swiper">
                                <div class="elementor-main-swiper swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div data-bg="https://newocean.edu.vn/wp-content/uploads/2019/11/logo-lincoln-uni-large.png" class="elementor-carousel-image rocket-lazyload" role="img" aria-label="logo-lincoln-uni-large" style="">


                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div data-bg="https://newocean.edu.vn/wp-content/uploads/2019/11/centennial-college.jpg" class="elementor-carousel-image rocket-lazyload" role="img" aria-label="centennial-college" style="">


                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div data-bg="https://newocean.edu.vn/wp-content/uploads/2019/11/chungang-university.png" class="elementor-carousel-image rocket-lazyload" role="img" aria-label="chungang-university" style="">


                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div data-bg="https://newocean.edu.vn/wp-content/uploads/2019/11/hanze.png" class="elementor-carousel-image rocket-lazyload" role="img" aria-label="hanze" style="">


                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div data-bg="https://newocean.edu.vn/wp-content/uploads/2020/03/Kaplan_University_logo.jpg" class="elementor-carousel-image rocket-lazyload" role="img" aria-label="Kaplan_University_logo" style="">


                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-swiper-button elementor-swiper-button-prev" role="button" tabindex="0">
                                        <i aria-hidden="true" class="eicon-chevron-left"></i>							<span class="elementor-screen-only">Previous</span>
                                    </div>
                                    <div class="elementor-swiper-button elementor-swiper-button-next" role="button" tabindex="0">
                                        <i aria-hidden="true" class="eicon-chevron-right"></i>							<span class="elementor-screen-only">Next</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-6c6c892 elementor-widget elementor-widget-spacer" data-id="6c6c892" data-element_type="widget" data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div data-elementor-type="footer" data-elementor-id="20951" class="elementor elementor-20951 elementor-location-footer">
    <footer class="elementor-section elementor-top-section elementor-element elementor-element-0b13df5 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0b13df5" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;gradient&quot;}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-043701e" data-id="043701e" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-822d460 elementor-widget elementor-widget-heading" data-id="822d460" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h4 class="elementor-heading-title elementor-size-default">CÔNG TY TƯ VẤN DU HỌC NEW OCEAN</h4>		</div>
                    </div>
                    <div class="elementor-element elementor-element-d18a278 elementor-widget elementor-widget-image" data-id="d18a278" data-element_type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <img width="299" height="70" src="https://newocean.edu.vn/wp-content/uploads/2020/03/logo.svg" class="attachment-full size-full wp-image-12698" alt="Công ty tư vấn du học, công ty du học, trung tâm du học, trung tâm tư vấn du học" />															</div>
                    </div>
                    <div class="elementor-element elementor-element-b5b89f7 elementor-widget elementor-widget-text-editor" data-id="b5b89f7" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <p>VĂN PHÒNG HÀ NỘI (<a href="https://g.page/r/Cad6TYAwAXQREAE" target="_blank" rel="noopener">Xem bản đồ</a>)</p><p>New Ocean Building, 43 Nguyễn Hy Quang, Ô Chợ Dừa, Đống Đa, Hà Nội<br />Điện thoại: <a href="tel:0964562233">096 456 2233</a> – <a href="tel:02435378311">024 3537 8311</a></p><p>VĂN PHÒNG HỒ CHÍ MINH (<a href="https://g.page/r/Ce-EIKw78KjvEAE">Xem bản đồ</a>)</p><p>CJ Building, tầng 14, 6 Lê Thánh Tôn, Bến Nghé, Quận 1, TP. HCM<br />Điện Thoại: <a href="tel:0964561122">096 456 1122</a> – <a href="tel:02822603388">028 2260 3388</a><br />Email: <a href="mailto:info@newocean.edu.vn">info@newocean.edu.vn</a></p><p>Giấy chứng nhận ĐKKD số 0102142490 – Sở KHĐT thành phố Hà nội cấp ngày 17/01/2007.</p>						</div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-13415ba" data-id="13415ba" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-c060e94 elementor-widget elementor-widget-heading" data-id="c060e94" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h4 class="elementor-heading-title elementor-size-default">HỖ TRỢ KHÁCH HÀNG</h4>		</div>
                    </div>
                    <div class="elementor-element elementor-element-016c223 elementor-widget elementor-widget-text-editor" data-id="016c223" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <p>Hotline tư vấn Hà Nội : <a href="tel:0964562233">096 456 2233</a> <span class="small-text">(8-21h kể cả T7, CN)</span></p><p>Hotline tư vấn  TP.HCM : <a href="tel:0964561122">096 456 1122</a> <span class="small-text">(8-21h kể cả T7, CN)</span></p><p>Giờ làm việc: T2-T6 8h-17h; T7 8h-12h; CN nghỉ</p>						</div>
                    </div>
                    <div class="elementor-element elementor-element-68c0d7e elementor-widget elementor-widget-heading" data-id="68c0d7e" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h4 class="elementor-heading-title elementor-size-default">THÔNG TIN CHUNG</h4>		</div>
                    </div>
                    <div class="elementor-element elementor-element-820156f elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="820156f" data-element_type="widget" data-widget_type="icon-list.default">
                        <div class="elementor-widget-container">
                            <ul class="elementor-icon-list-items">
                                <li class="elementor-icon-list-item">
                                    <a href="https://newocean.edu.vn/dieu-khoan-su-dung">

												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-caret-right"></i>						</span>
                                        <span class="elementor-icon-list-text">Điều khoản sử dụng</span>
                                    </a>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <a href="https://newocean.edu.vn/chinh-sach-bao-mat">

												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-caret-right"></i>						</span>
                                        <span class="elementor-icon-list-text">Chính sách bảo mật</span>
                                    </a>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <a href="https://newocean.edu.vn/hop-tac-va-lien-ket">

												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-caret-right"></i>						</span>
                                        <span class="elementor-icon-list-text">Hợp tác & liên kết</span>
                                    </a>
                                </li>
                                <li class="elementor-icon-list-item">
                                    <a href="https://newocean.edu.vn/lien-he-new-ocean">

												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="fas fa-caret-right"></i>						</span>
                                        <span class="elementor-icon-list-text">Liên hệ</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-6840879" data-id="6840879" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-343962e elementor-widget elementor-widget-heading" data-id="343962e" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h4 class="elementor-heading-title elementor-size-default">ĐĂNG KÝ NHẬN TIN</h4>		</div>
                    </div>
                    <div class="elementor-element elementor-element-45629c2 elementor-widget elementor-widget-text-editor" data-id="45629c2" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <p>Đừng bỏ lỡ những thông tin du học hữu ích cập nhật liên tục trên New Ocean</p>						</div>
                    </div>
                    <div class="elementor-element elementor-element-72cbe67 elementor-button-align-stretch elementor-widget elementor-widget-form" data-id="72cbe67" data-element_type="widget" data-settings="{&quot;button_width&quot;:&quot;33&quot;,&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width_mobile&quot;:&quot;40&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}" data-widget_type="form.default">
                        <div class="elementor-widget-container">
                            <form class="elementor-form" method="post" name="New Form">
                                <input type="hidden" name="post_id" value="20951"/>
                                <input type="hidden" name="form_id" value="72cbe67"/>
                                <input type="hidden" name="referer_title" value="Công Ty Tư vấn Du học New Ocean | Trung Tâm Tư Vấn Du Học" />

                                <input type="hidden" name="queried_id" value="174"/>

                                <div class="elementor-form-fields-wrapper elementor-labels-">
                                    <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-66 elementor-sm-60 elementor-field-required">
                                        <label for="form-field-email" class="elementor-field-label elementor-screen-only">
                                            Email							</label>
                                        <input size="1" type="email" name="form_fields[email]" id="form-field-email" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Nhập email của bạn" required="required" aria-required="true">
                                    </div>
                                    <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-33 e-form__buttons elementor-sm-40">
                                        <button type="submit" class="elementor-button elementor-size-sm">
						<span >
															<span class=" elementor-button-icon">
																										</span>
																						<span class="elementor-button-text">đăng ký</span>
													</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-12b9717 elementor-widget elementor-widget-heading" data-id="12b9717" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h4 class="elementor-heading-title elementor-size-default">KẾT NỐI VỚI CHÚNG TÔI</h4>		</div>
                    </div>
                    <div class="elementor-element elementor-element-50b384e elementor-shape-circle e-grid-align-left elementor-grid-0 elementor-widget elementor-widget-social-icons" data-id="50b384e" data-element_type="widget" data-widget_type="social-icons.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-social-icons-wrapper elementor-grid">
							<span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-e94783e" href="https://www.facebook.com/uocmoduhoc/" target="_blank">
						<span class="elementor-screen-only">Facebook</span>
						<i class="fab fa-facebook"></i>					</a>
				</span>
                                <span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-repeater-item-3961653" href="https://www.youtube.com/channel/UCOkhgPaV1JJPtOUaRwuW3mA/videos" target="_blank">
						<span class="elementor-screen-only">Youtube</span>
						<i class="fab fa-youtube"></i>					</a>
				</span>
                                <span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-flickr elementor-repeater-item-212aedc" href="https://www.flickr.com/photos/new-ocean/albums" target="_blank">
						<span class="elementor-screen-only">Flickr</span>
						<i class="fab fa-flickr"></i>					</a>
				</span>
                                <span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-google elementor-repeater-item-b15c4eb" href="https://g.page/r/Cad6TYAwAXQREBM" target="_blank">
						<span class="elementor-screen-only">Google</span>
						<i class="fab fa-google"></i>					</a>
				</span>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-2ef5ccc elementor-widget elementor-widget-html" data-id="2ef5ccc" data-element_type="widget" data-widget_type="html.default">
                        <div class="elementor-widget-container">
                            <a href="//www.dmca.com/Protection/Status.aspx?ID=0ee65dba-9c39-4583-88a7-60bf6f1462e4" title="DMCA.com Protection Status" class="dmca-badge"> <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"  alt="DMCA.com Protection Status" data-lazy-src="https://images.dmca.com/Badges/dmca_protected_sml_120m.png?ID=0ee65dba-9c39-4583-88a7-60bf6f1462e4" /><noscript><img src ="https://images.dmca.com/Badges/dmca_protected_sml_120m.png?ID=0ee65dba-9c39-4583-88a7-60bf6f1462e4"  alt="DMCA.com Protection Status" /></noscript></a>  <script data-minify="1" src="https://newocean.edu.vn/wp-content/cache/min/1/Badges/DMCABadgeHelper.min.js?ver=1682646090" defer> </script>		</div>
                    </div>
                    <div class="elementor-element elementor-element-e8ea893 elementor-view-stacked elementor-widget__width-initial elementor-fixed elementor-hidden-mobile elementor-shape-circle elementor-widget elementor-widget-icon" data-id="e8ea893" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;fixed&quot;}" data-widget_type="icon.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-icon-wrapper">
                                <a class="elementor-icon" href="#scrolltop">
                                    <i aria-hidden="true" class="fas fa-chevron-up"></i>			</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <footer class="elementor-section elementor-top-section elementor-element elementor-element-e701c35 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e701c35" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-32e671e" data-id="32e671e" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-d2fb487 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="d2fb487" data-element_type="widget" data-widget_type="divider.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-677ccbe elementor-widget elementor-widget-text-editor" data-id="677ccbe" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <span>Copyright © 2023 New Ocan Inc. All rights reserved.</span>						</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<script type='text/javascript'>
    /* <![CDATA[ */
    var hasJetBlogPlaylist = 0;
    /* ]]> */
</script>

<script type="rocketlazyloadscript">
			window.RS_MODULES = window.RS_MODULES || {};
			window.RS_MODULES.modules = window.RS_MODULES.modules || {};
			window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
			window.RS_MODULES.defered = true;
			window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
			window.RS_MODULES.type = 'compiled';
		</script>
<div id="arcontactus"></div>

<script src="https://newocean.edu.vn/wp-content/plugins/ar-contactus/res/js/maskedinput.min.js?version=2.2.7" defer></script>
<script type="text/javascript" id="arcu-main-js">
    var $arcuWidget;
    var zaloWidgetInterval;
    var tawkToInterval;
    var tawkToHideInterval;
    var skypeWidgetInterval;
    var lcpWidgetInterval;
    var closePopupTimeout;
    var lzWidgetInterval;
    var paldeskInterval;
    var arcuOptions;
    var hideCustomerChatInterval;
    var _arCuTimeOut = null;
    var arCuPromptClosed = false;
    var _arCuWelcomeTimeOut = null;
    var arCuMenuOpenedOnce = false;
    var arcuAppleItem = null;

    var arcItems = [];
    window.addEventListener('load', function(){
        $arcuWidget = document.createElement('div');
        var body = document.getElementsByTagName('body')[0];
        $arcuWidget.id = 'arcontactus';

        if (document.getElementById('arcontactus')) {
            document.getElementById('arcontactus').parentElement.removeChild(document.getElementById('arcontactus'));
        }

        body.appendChild($arcuWidget);

        arCuClosedCookie = arCuGetCookie('arcu-closed');
        $arcuWidget.addEventListener('arcontactus.init', function(){
            $arcuWidget.classList.add('arcuAnimated');
            $arcuWidget.classList.add('flipInY');

            setTimeout(function(){
                $arcuWidget.classList.remove('flipInY');
            }, 1000);


            if (document.querySelector('#arcu-form-callback form')) {
                document.querySelector('#arcu-form-callback form').append(contactUs.utils.DOMElementFromHTML(arCUVars._wpnonce));
            }


            if (document.querySelector('#arcu-form-email form')) {
                document.querySelector('#arcu-form-email form').append(contactUs.utils.DOMElementFromHTML(arCUVars._wpnonce));
            }




            $arcuWidget.addEventListener('arcontactus.successSendFormData', function(event){
            });
            $arcuWidget.addEventListener('arcontactus.successSendFormData', function(event){
            });
            $arcuWidget.addEventListener('arcontactus.errorSendFormData', function(event){
                if (event.detail.data && event.detail.data.message) {
                    alert(event.detail.data.message);
                }
            });
            $arcuWidget.addEventListener('arcontactus.hideFrom', function(){
                clearTimeout(closePopupTimeout);
            });
        });
        $arcuWidget.addEventListener('arcontactus.closeMenu', function(){
            arCuCreateCookie('arcumenu-closed', 1, 1);
        });
        var arcItem = {};
        arcItem.id = 'msg-item-6';
        arcItem.class = 'msg-item-envelope';
        arcItem.title = "Liên hệ qua Email";
        arcItem.subTitle = "info@newocean.edu.vn";
        arcItem.icon = '<svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z"></path></svg>';
        arcItem.includeIconToSlider = true;

        arcItem.href = 'mailto:info@newocean.edu.vn';

        arcItem.color = '#FF643A';
        arcItems.push(arcItem);
        var arcItem = {};
        arcItem.id = 'msg-item-1';
        arcItem.class = 'msg-item-facebook-messenger';
        arcItem.title = "Nhắn tin Messenger";
        arcItem.subTitle = "Fanpage Ước mơ du học";
        arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224 32C15.9 32-77.5 278 84.6 400.6V480l75.7-42c142.2 39.8 285.4-59.9 285.4-198.7C445.8 124.8 346.5 32 224 32zm23.4 278.1L190 250.5 79.6 311.6l121.1-128.5 57.4 59.6 110.4-61.1-121.1 128.5z"></path></svg>';
        arcItem.includeIconToSlider = true;

        arcItem.href = 'https://m.me/uocmoduhoc';

        arcItem.color = '#0084FF';
        arcItems.push(arcItem);
        var arcItem = {};
        arcItem.id = 'msg-item-7';
        arcItem.class = 'msg-item-phone';
        arcItem.title = "Gọi điện trực tiếp 24/7";
        arcItem.subTitle = "096.456.2233";
        arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>';
        arcItem.includeIconToSlider = true;

        arcItem.href = 'tel:0964562233';

        arcItem.target = '_self';
        arcItem.color = '#168900';
        arcItems.push(arcItem);
        var arcItem = {};
        arcItem.id = 'msg-item-12';
        arcItem.class = 'msg-item-phone';
        arcItem.title = "Gọi máy bàn (8h00 - 17h00)";
        arcItem.subTitle = "(024) 3537.8311";
        arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>';
        arcItem.includeIconToSlider = true;

        arcItem.href = 'tel:02435378311';

        arcItem.color = '#106500';
        arcItems.push(arcItem);
        var arcItem = {};
        arcItem.id = 'msg-item-10';
        arcItem.class = 'msg-item-zalo';
        arcItem.title = "Liên hệ Zalo";
        arcItem.subTitle = "096.456.0011 ";
        arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 460.1 436.6"><path fill="currentColor" class="st0" d="M82.6 380.9c-1.8-.8-3.1-1.7-1-3.5 1.3-1 2.7-1.9 4.1-2.8 13.1-8.5 25.4-17.8 33.5-31.5 6.8-11.4 5.7-18.1-2.8-26.5C69 269.2 48.2 212.5 58.6 145.5 64.5 107.7 81.8 75 107 46.6c15.2-17.2 33.3-31.1 53.1-42.7 1.2-.7 2.9-.9 3.1-2.7-.4-1-1.1-.7-1.7-.7-33.7 0-67.4-.7-101 .2C28.3 1.7.5 26.6.6 62.3c.2 104.3 0 208.6 0 313 0 32.4 24.7 59.5 57 60.7 27.3 1.1 54.6.2 82 .1 2 .1 4 .2 6 .2H290c36 0 72 .2 108 0 33.4 0 60.5-27 60.5-60.3v-.6-58.5c0-1.4.5-2.9-.4-4.4-1.8.1-2.5 1.6-3.5 2.6-19.4 19.5-42.3 35.2-67.4 46.3-61.5 27.1-124.1 29-187.6 7.2-5.5-2-11.5-2.2-17.2-.8-8.4 2.1-16.7 4.6-25 7.1-24.4 7.6-49.3 11-74.8 6zm72.5-168.5c1.7-2.2 2.6-3.5 3.6-4.8 13.1-16.6 26.2-33.2 39.3-49.9 3.8-4.8 7.6-9.7 10-15.5 2.8-6.6-.2-12.8-7-15.2-3-.9-6.2-1.3-9.4-1.1-17.8-.1-35.7-.1-53.5 0-2.5 0-5 .3-7.4.9-5.6 1.4-9 7.1-7.6 12.8 1 3.8 4 6.8 7.8 7.7 2.4.6 4.9.9 7.4.8 10.8.1 21.7 0 32.5.1 1.2 0 2.7-.8 3.6 1-.9 1.2-1.8 2.4-2.7 3.5-15.5 19.6-30.9 39.3-46.4 58.9-3.8 4.9-5.8 10.3-3 16.3s8.5 7.1 14.3 7.5c4.6.3 9.3.1 14 .1 16.2 0 32.3.1 48.5-.1 8.6-.1 13.2-5.3 12.3-13.3-.7-6.3-5-9.6-13-9.7-14.1-.1-28.2 0-43.3 0zm116-52.6c-12.5-10.9-26.3-11.6-39.8-3.6-16.4 9.6-22.4 25.3-20.4 43.5 1.9 17 9.3 30.9 27.1 36.6 11.1 3.6 21.4 2.3 30.5-5.1 2.4-1.9 3.1-1.5 4.8.6 3.3 4.2 9 5.8 14 3.9 5-1.5 8.3-6.1 8.3-11.3.1-20 .2-40 0-60-.1-8-7.6-13.1-15.4-11.5-4.3.9-6.7 3.8-9.1 6.9zm69.3 37.1c-.4 25 20.3 43.9 46.3 41.3 23.9-2.4 39.4-20.3 38.6-45.6-.8-25-19.4-42.1-44.9-41.3-23.9.7-40.8 19.9-40 45.6zm-8.8-19.9c0-15.7.1-31.3 0-47 0-8-5.1-13-12.7-12.9-7.4.1-12.3 5.1-12.4 12.8-.1 4.7 0 9.3 0 14v79.5c0 6.2 3.8 11.6 8.8 12.9 6.9 1.9 14-2.2 15.8-9.1.3-1.2.5-2.4.4-3.7.2-15.5.1-31 .1-46.5z"/></svg>';
        arcItem.includeIconToSlider = true;

        arcItem.href = 'https://zalo.me/0964560011';

        arcItem.color = '#0180C7';
        arcItems.push(arcItem);
        var arcItem = {};
        arcItem.id = 'msg-item-9';
        arcItem.onClick = function(e){
            e.preventDefault();
            contactUs.closeMenu();
            contactUs.showForm('callback');
            return false;
        }
        arcItem.class = 'msg-item-phone';
        arcItem.title = "Yêu cầu gọi lại";
        arcItem.subTitle = "Vui lòng để lại số điện thoại";
        arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>';
        arcItem.includeIconToSlider = true;

        arcItem.href = null;
        arcItem.color = '#4EB625';
        arcItems.push(arcItem);
        arcuOptions = {
            rootElementId: 'arcontactus',
            credits: false,
            visible: true,
            wordpressPluginVersion: '2.2.7',
            online: true,
            buttonIcon: '<svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Canvas" transform="translate(-825 -308)"><g id="Vector"><use xlink:href="#path0_fill0123" transform="translate(825 308)" fill="currentColor"></use></g></g><defs><path fill="currentColor" id="path0_fill0123" d="M 19 4L 17 4L 17 13L 4 13L 4 15C 4 15.55 4.45 16 5 16L 16 16L 20 20L 20 5C 20 4.45 19.55 4 19 4ZM 15 10L 15 1C 15 0.45 14.55 0 14 0L 1 0C 0.45 0 0 0.45 0 1L 0 15L 4 11L 14 11C 14.55 11 15 10.55 15 10Z"></path></defs></svg>',
            layout: 'default',
            drag: false,
            mode: 'regular',
            buttonIconUrl: 'https://newocean.edu.vn/wp-content/plugins/ar-contactus/res/img/msg.svg',
            showMenuHeader: true,
            menuHeaderText: "New Ocean có thể hỗ trợ gì cho bạn?",
            menuSubheaderText: "",

            menuHeaderLayout: 'icon-left',
            menuHeaderIcon: 'https://newocean.edu.vn/wp-content/uploads/2023/01/no-chat-1.jpg',
            menuHeaderTextAlign: 'left',

            showHeaderCloseBtn: true,
            headerCloseBtnBgColor: '#008749',
            headerCloseBtnColor: '#FFFFFF',
            itemsIconType: 'rounded',
            align: 'left',
            reCaptcha: false,
            reCaptchaKey: '',
            countdown: 0,
            theme: '#008749',
            buttonText: "Liên hệ",
            buttonSize: 'large',
            buttonIconSize: 24,
            menuSize: 'normal',
            phonePlaceholder: '',
            callbackSubmitText: '',
            errorMessage: '',
            callProcessText: '',
            callSuccessText: '',
            callbackFormText: '',
            iconsAnimationSpeed: 600,
            iconsAnimationPause: 2000,
            items: arcItems,
            ajaxUrl: 'https://newocean.edu.vn/wp-admin/admin-ajax.php',
            promptPosition: 'top',
            popupAnimation: 'fadeindown',
            style: '',
            itemsAnimation: 'downtoup',
            menuStyle: 'regular',
            backdrop: true,
            forms: {
                callback: {
                    id: 'callback',
                    header: {
                        content: "Vui lòng để lại số điện thoại . Chúng tôi sẽ gọi lại sớm!",
                        layout: "text",
                    },
                    icon: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>',
                    success: "Đã gửi yêu cầu gọi lại! Chúng tôi sẽ liên hệ lại với bạn sớm.",
                    error: "Lỗi khi gửi yêu cầu gọi lại! Vui lòng thử lại!",
                    action: 'https://newocean.edu.vn/wp-admin/admin-ajax.php',
                    buttons: [
                        {
                            name: "submit",
                            label: "Yêu cầu gọi lại",
                            type: "submit",
                        },
                    ],
                    fields: {
                        formId: {
                            name: 'formId',
                            value: 'callback',
                            type: 'hidden'
                        },
                        action: {
                            name: 'action',
                            value: 'arcontactus_request_callback',
                            type: 'hidden'
                        },
                        name: {
                            name: "name",
                            enabled: true,
                            required: false,
                            type: "text",
                            label: "Họ tên",
                            placeholder: "Nhập Họ tên",
                            values: [],
                            value: "",
                        },
                        phone: {
                            name: "phone",
                            enabled: true,
                            required: true,
                            type: "tel",
                            label: "Số điện thoại",
                            placeholder: "Nhập số điện thoại",
                            values: [],
                            value: "",
                        },
                    }
                },
                email: {
                    id: 'email',
                    header: {
                        content: "Đăng ký tư vấn",
                        layout: "text",
                    },
                    icon: '<svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z"></path></svg>',
                    success: "Đã gửi! Chúng tôi sẽ liên hệ lại với bạn sớm.",
                    error: "Lỗi đăng ký! Vui lòng thử lại!",
                    action: 'https://newocean.edu.vn/wp-admin/admin-ajax.php',
                    buttons: [
                        {
                            name: "submit",
                            label: "ĐĂNG KÝ",
                            type: "submit",
                        },
                    ],
                    fields: {
                        formId: {
                            name: 'formId',
                            value: 'email',
                            type: 'hidden'
                        },
                        action: {
                            name: 'action',
                            value: 'arcontactus_request_email',
                            type: 'hidden'
                        },
                        name: {
                            name: "name",
                            enabled: true,
                            required: false,
                            type: "text",
                            label: "Họ tên",
                            placeholder: "Nhập Họ tên",
                            values: [],
                            value: "",
                        },
                        email: {
                            name: "email",
                            enabled: true,
                            required: true,
                            type: "email",
                            label: "Địa chỉ email",
                            placeholder: "Nhập địa chỉ email",
                            values: [],
                            value: "",
                        },
                        phone: {
                            name: "phone",
                            enabled: true,
                            required: true,
                            type: "tel",
                            label: "Số điện thoại",
                            placeholder: "Nhập số điện thoại",
                            values: [],
                            value: "",
                        },
                        message: {
                            name: "message",
                            enabled: true,
                            required: true,
                            type: "textarea",
                            label: "Lời nhắn",
                            placeholder: "Nội dung email",
                            values: [],
                            value: "",
                        },
                    }
                },

            }
        };
        contactUs.init(arcuOptions);
    });
</script>
<script type="text/x-template" id="mobile-menu-item-template"><li
    :id="'jet-mobile-menu-item-'+itemDataObject.itemId"
    :class="itemClasses"
    >
    <div
            class="jet-mobile-menu__item-inner"
            tabindex="1"
            :aria-label="itemDataObject.name"
            v-on:click="itemSubHandler"
            v-on:keyup.enter="itemSubHandler"
    >
        <a
                :class="itemLinkClasses"
                :href="itemDataObject.url"
                :rel="itemDataObject.xfn"
                :title="itemDataObject.attrTitle"
                :target="itemDataObject.target"
        >
            <div class="jet-menu-item-wrapper">
                <div
                        class="jet-menu-icon"
                        v-if="isIconVisible"
                        v-html="itemIconHtml"
                ></div>
                <div class="jet-menu-name">
					<span
                            class="jet-menu-label"
                            v-html="itemDataObject.name"
                    ></span>
                    <small
                            class="jet-menu-desc"
                            v-if="isDescVisible"
                            v-html="itemDataObject.description"
                    ></small>
                </div>
                <div
                        class="jet-menu-badge"
                        v-if="isBadgeVisible"
                >
                    <div class="jet-menu-badge__inner" v-html="itemDataObject.badgeContent"></div>
                </div>
            </div>
        </a>
        <span
                class="jet-dropdown-arrow"
                v-if="isSub && !templateLoadStatus"
                v-html="dropdownIconHtml"
                v-on:click="markerSubHandler"
        >
		</span>
        <div
                class="jet-mobile-menu__template-loader"
                v-if="templateLoadStatus"
        >
            <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" width="24px" height="25px" viewBox="0 0 128 128" xml:space="preserve">
				<g>
                    <linearGradient id="linear-gradient">
                        <stop offset="0%" :stop-color="loaderColor" stop-opacity="0"/>
                        <stop offset="100%" :stop-color="loaderColor" stop-opacity="1"/>
                    </linearGradient>
                    <path d="M63.85 0A63.85 63.85 0 1 1 0 63.85 63.85 63.85 0 0 1 63.85 0zm.65 19.5a44 44 0 1 1-44 44 44 44 0 0 1 44-44z" fill="url(#linear-gradient)" fill-rule="evenodd"/>
                    <animateTransform attributeName="transform" type="rotate" from="0 64 64" to="360 64 64" dur="1080ms" repeatCount="indefinite"></animateTransform>
                </g>
			</svg>
        </div>
    </div>

    <transition name="menu-container-expand-animation">
        <mobile-menu-list
                v-if="isDropdownLayout && subDropdownVisible"
                :depth="depth+1"
                :children-object="itemDataObject.children"
        ></mobile-menu-list>
    </transition>

    </li>
</script>					<script type="text/x-template" id="mobile-menu-list-template"><div
    class="jet-mobile-menu__list"
    role="navigation"
    >
    <ul class="jet-mobile-menu__items">
        <mobile-menu-item
                v-for="(item, index) in childrenObject"
                :key="item.id"
                :item-data-object="item"
                :depth="depth"
        ></mobile-menu-item>
    </ul>
    </div>
</script>					<script type="text/x-template" id="mobile-menu-template"><div
    :class="instanceClass"
    v-on:keyup.esc="escapeKeyHandler"
    >
    <div
            class="jet-mobile-menu__toggle"
            ref="toggle"
            tabindex="1"
            aria-label="Open/Close Menu"
            v-on:click="menuToggle"
            v-on:keyup.enter="menuToggle"
    >
        <div
                class="jet-mobile-menu__template-loader"
                v-if="toggleLoaderVisible"
        >
            <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" width="24px" height="25px" viewBox="0 0 128 128" xml:space="preserve">
				<g>
                    <linearGradient id="linear-gradient">
                        <stop offset="0%" :stop-color="loaderColor" stop-opacity="0"/>
                        <stop offset="100%" :stop-color="loaderColor" stop-opacity="1"/>
                    </linearGradient>
                    <path d="M63.85 0A63.85 63.85 0 1 1 0 63.85 63.85 63.85 0 0 1 63.85 0zm.65 19.5a44 44 0 1 1-44 44 44 44 0 0 1 44-44z" fill="url(#linear-gradient)" fill-rule="evenodd"/>
                    <animateTransform attributeName="transform" type="rotate" from="0 64 64" to="360 64 64" dur="1080ms" repeatCount="indefinite"></animateTransform>
                </g>
			</svg>
        </div>

        <div
                class="jet-mobile-menu__toggle-icon"
                v-if="!menuOpen && !toggleLoaderVisible"
                v-html="toggleClosedIcon"
        ></div>
        <div
                class="jet-mobile-menu__toggle-icon"
                v-if="menuOpen && !toggleLoaderVisible"
                v-html="toggleOpenedIcon"
        ></div>
        <span
                class="jet-mobile-menu__toggle-text"
                v-if="toggleText"
                v-html="toggleText"
        ></span>

    </div>

    <transition name="cover-animation">
        <div
                class="jet-mobile-menu-cover"
                v-if="menuContainerVisible && coverVisible"
                v-on:click="closeMenu"
        ></div>
    </transition>

    <transition :name="showAnimation">
        <div
                class="jet-mobile-menu__container"
                v-if="menuContainerVisible"
        >
            <div
                    class="jet-mobile-menu__container-inner"
            >
                <div
                        class="jet-mobile-menu__header-template"
                        v-if="headerTemplateVisible"
                >
                    <div
                            class="jet-mobile-menu__header-template-content"
                            ref="header-template-content"
                            v-html="headerContent"
                    ></div>
                </div>

                <div
                        class="jet-mobile-menu__controls"
                >
                    <div
                            class="jet-mobile-menu__breadcrumbs"
                            v-if="isBreadcrumbs"
                    >
                        <div
                                class="jet-mobile-menu__breadcrumb"
                                v-for="(item, index) in breadcrumbsPathData"
                                :key="index"
                        >
                            <div
                                    class="breadcrumb-label"
                                    v-on:click="breadcrumbHandle(index+1)"
                                    v-html="item"
                            ></div>
                            <div
                                    class="breadcrumb-divider"
                                    v-html="breadcrumbIcon"
                                    v-if="(breadcrumbIcon && index !== breadcrumbsPathData.length-1)"
                            ></div>
                        </div>
                    </div>
                    <div
                            class="jet-mobile-menu__back"
                            ref="back"
                            tabindex="1"
                            aria-label="Close Menu"
                            v-if="!isBack && isClose"
                            v-html="closeIcon"
                            v-on:click="menuToggle"
                            v-on:keyup.enter="menuToggle"
                    ></div>
                    <div
                            class="jet-mobile-menu__back"
                            ref="back"
                            tabindex="1"
                            aria-label="Back to Prev Items"
                            v-if="isBack"
                            v-html="backIcon"
                            v-on:click="goBack"
                            v-on:keyup.enter="goBack"
                    ></div>
                </div>

                <div
                        class="jet-mobile-menu__before-template"
                        v-if="beforeTemplateVisible"
                >
                    <div
                            class="jet-mobile-menu__before-template-content"
                            ref="before-template-content"
                            v-html="beforeContent"
                    ></div>
                </div>

                <div
                        class="jet-mobile-menu__body"
                >
                    <transition :name="animation">
                        <mobile-menu-list
                                v-if="!templateVisible"
                                :key="depth"
                                :depth="depth"
                                :children-object="itemsList"
                        ></mobile-menu-list>
                        <div
                                class="jet-mobile-menu__template"
                                ref="template-content"
                                v-if="templateVisible"
                        >
                            <div
                                    class="jet-mobile-menu__template-content"
                                    v-html="itemTemplateContent"
                            ></div>
                        </div>
                    </transition>
                </div>

                <div
                        class="jet-mobile-menu__after-template"
                        v-if="afterTemplateVisible"
                >
                    <div
                            class="jet-mobile-menu__after-template-content"
                            ref="after-template-content"
                            v-html="afterContent"
                    ></div>
                </div>

            </div>
        </div>
    </transition>
    </div>
</script>		<div data-elementor-type="popup" data-elementor-id="15925" class="elementor elementor-15925 elementor-location-popup" data-elementor-settings="{&quot;a11y_navigation&quot;:&quot;yes&quot;,&quot;triggers&quot;:[],&quot;timing&quot;:[]}">
    <section class="elementor-section elementor-top-section elementor-element elementor-element-0f6d276 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0f6d276" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3674da4" data-id="3674da4" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-db2ccbc elementor-widget elementor-widget-heading" data-id="db2ccbc" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h3 class="elementor-heading-title elementor-size-default">ĐĂNG KÝ TƯ VẤN DU HỌC</h3>		</div>
                    </div>
                    <div class="elementor-element elementor-element-5cf7125 elementor-button-align-stretch elementor-widget elementor-widget-form" data-id="5cf7125" data-element_type="widget" data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}" data-widget_type="form.default">
                        <div class="elementor-widget-container">
                            <form class="elementor-form" method="post" name="New Form">
                                <input type="hidden" name="post_id" value="15925"/>
                                <input type="hidden" name="form_id" value="5cf7125"/>
                                <input type="hidden" name="referer_title" value="Công Ty Tư vấn Du học New Ocean | Trung Tâm Tư Vấn Du Học" />

                                <input type="hidden" name="queried_id" value="174"/>

                                <div class="elementor-form-fields-wrapper elementor-labels-">
                                    <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100 elementor-field-required">
                                        <label for="form-field-name" class="elementor-field-label elementor-screen-only">
                                            Name							</label>
                                        <input size="1" type="text" name="form_fields[name]" id="form-field-name" class="elementor-field elementor-size-md  elementor-field-textual" placeholder="Họ và tên*" required="required" aria-required="true">
                                    </div>
                                    <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-100 elementor-field-required">
                                        <label for="form-field-email" class="elementor-field-label elementor-screen-only">
                                            Email							</label>
                                        <input size="1" type="email" name="form_fields[email]" id="form-field-email" class="elementor-field elementor-size-md  elementor-field-textual" placeholder="Địa chỉ email*" required="required" aria-required="true">
                                    </div>
                                    <div class="elementor-field-type-tel elementor-field-group elementor-column elementor-field-group-field_fc6f8c2 elementor-col-100 elementor-field-required">
                                        <label for="form-field-field_fc6f8c2" class="elementor-field-label elementor-screen-only">
                                            Điện thoại							</label>
                                        <input size="1" type="tel" name="form_fields[field_fc6f8c2]" id="form-field-field_fc6f8c2" class="elementor-field elementor-size-md  elementor-field-textual" placeholder="Số điện thoại*" required="required" aria-required="true" pattern="[0-9()#&amp;+*-=.]+" title="Only numbers and phone characters (#, -, *, etc) are accepted.">

                                    </div>
                                    <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_0b6025f elementor-col-100 elementor-field-required">
                                        <label for="form-field-field_0b6025f" class="elementor-field-label elementor-screen-only">
                                            Tỉnh thành phố							</label>
                                        <input size="1" type="text" name="form_fields[field_0b6025f]" id="form-field-field_0b6025f" class="elementor-field elementor-size-md  elementor-field-textual" placeholder="Tỉnh thành phố*" required="required" aria-required="true">
                                    </div>
                                    <div class="elementor-field-type-recaptcha_v3 elementor-field-group elementor-column elementor-field-group-field_b3c68d3 elementor-col-100 recaptcha_v3-bottomleft">
                                        <div class="elementor-field" id="form-field-field_b3c68d3"><div class="elementor-g-recaptcha" data-sitekey="6Lcw6UwfAAAAAGXcOj2XWURSOpcfspOUPqGfV5EF" data-type="v3" data-action="Form" data-badge="bottomleft" data-size="invisible"></div></div>				</div>
                                    <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
                                        <button type="submit" class="elementor-button elementor-size-md">
						<span >
															<span class=" elementor-button-icon">
																										</span>
																						<span class="elementor-button-text">ĐĂNG KÝ</span>
													</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div data-elementor-type="popup" data-elementor-id="16420" class="elementor elementor-16420 elementor-location-popup" data-elementor-settings="{&quot;a11y_navigation&quot;:&quot;yes&quot;,&quot;triggers&quot;:[],&quot;timing&quot;:[]}">
    <section class="elementor-section elementor-top-section elementor-element elementor-element-e5a6d33 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e5a6d33" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f08cf1d" data-id="f08cf1d" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-2a4211e elementor-widget elementor-widget-heading" data-id="2a4211e" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h4 class="elementor-heading-title elementor-size-default">ĐĂNG KÝ NHẬN HỌC BỔNG</h4>		</div>
                    </div>
                    <div class="elementor-element elementor-element-9423370 elementor-button-align-stretch elementor-widget elementor-widget-form" data-id="9423370" data-element_type="widget" data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}" data-widget_type="form.default">
                        <div class="elementor-widget-container">
                            <form class="elementor-form" method="post" name="New Form">
                                <input type="hidden" name="post_id" value="16420"/>
                                <input type="hidden" name="form_id" value="9423370"/>
                                <input type="hidden" name="referer_title" value="Công Ty Tư vấn Du học New Ocean | Trung Tâm Tư Vấn Du Học" />

                                <input type="hidden" name="queried_id" value="174"/>

                                <div class="elementor-form-fields-wrapper elementor-labels-">
                                    <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100 elementor-field-required">
                                        <label for="form-field-name" class="elementor-field-label elementor-screen-only">
                                            Họ và tên							</label>
                                        <input size="1" type="text" name="form_fields[name]" id="form-field-name" class="elementor-field elementor-size-md  elementor-field-textual" placeholder="Nhập họ tên*" required="required" aria-required="true">
                                    </div>
                                    <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-100 elementor-field-required">
                                        <label for="form-field-email" class="elementor-field-label elementor-screen-only">
                                            Email							</label>
                                        <input size="1" type="email" name="form_fields[email]" id="form-field-email" class="elementor-field elementor-size-md  elementor-field-textual" placeholder="Email*" required="required" aria-required="true">
                                    </div>
                                    <div class="elementor-field-type-tel elementor-field-group elementor-column elementor-field-group-field_0d2b337 elementor-col-100 elementor-field-required">
                                        <label for="form-field-field_0d2b337" class="elementor-field-label elementor-screen-only">
                                            Điện thoại							</label>
                                        <input size="1" type="tel" name="form_fields[field_0d2b337]" id="form-field-field_0d2b337" class="elementor-field elementor-size-md  elementor-field-textual" placeholder="Số điện thoại*" required="required" aria-required="true" pattern="[0-9()#&amp;+*-=.]+" title="Only numbers and phone characters (#, -, *, etc) are accepted.">

                                    </div>
                                    <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_605cd5f elementor-col-100">
                                        <label for="form-field-field_605cd5f" class="elementor-field-label elementor-screen-only">
                                            Tỉnh thành							</label>
                                        <input size="1" type="text" name="form_fields[field_605cd5f]" id="form-field-field_605cd5f" class="elementor-field elementor-size-md  elementor-field-textual" placeholder="Nhập tỉnh thành">
                                    </div>
                                    <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_b891124 elementor-col-100">
                                        <label for="form-field-field_b891124" class="elementor-field-label elementor-screen-only">
                                            Bạn quan tâm học bổng quốc gia nào?							</label>
                                        <input size="1" type="text" name="form_fields[field_b891124]" id="form-field-field_b891124" class="elementor-field elementor-size-md  elementor-field-textual" placeholder="Bạn quan tâm học bổng quốc gia nào?">
                                    </div>
                                    <div class="elementor-field-type-textarea elementor-field-group elementor-column elementor-field-group-field_aa7b0a3 elementor-col-100">
                                        <label for="form-field-field_aa7b0a3" class="elementor-field-label elementor-screen-only">
                                            Mô tả thêm về bạn							</label>
                                        <textarea class="elementor-field-textual elementor-field  elementor-size-md" name="form_fields[field_aa7b0a3]" id="form-field-field_aa7b0a3" rows="2" placeholder="Mô tả thêm về chứng chỉ ngoại ngữ, thành tích học tập, thu nhập gia đình (nếu có)"></textarea>				</div>
                                    <div class="elementor-field-type-recaptcha_v3 elementor-field-group elementor-column elementor-field-group-field_fd7a11d elementor-col-100 recaptcha_v3-bottomleft">
                                        <div class="elementor-field" id="form-field-field_fd7a11d"><div class="elementor-g-recaptcha" data-sitekey="6Lcw6UwfAAAAAGXcOj2XWURSOpcfspOUPqGfV5EF" data-type="v3" data-action="Form" data-badge="bottomleft" data-size="invisible"></div></div>				</div>
                                    <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
                                        <button type="submit" class="elementor-button elementor-size-md">
						<span >
															<span class=" elementor-button-icon">
																										</span>
																						<span class="elementor-button-text">ĐĂNG KÝ</span>
													</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<style>@font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: local('Roboto'), local('Roboto'), url({{asset('public/assets/fonts/roboto/roboto-400.woff2')}}) format('woff2');
    }</style>
<script>
    if(typeof revslider_showDoubleJqueryError === "undefined") {function revslider_showDoubleJqueryError(sliderID) {console.log("You have some jquery.js library include that comes after the Slider Revolution files js inclusion.");console.log("To fix this, you can:");console.log("1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on");console.log("2. Find the double jQuery.js inclusion and remove it");return "Double Included jQuery Library";}}
</script>
<link rel="preload" as="font" id="rs-icon-set-revicon-woff" href="{{asset('public/assets/fonts/revicons/revicons.woff')}}" type="font/woff" crossorigin="anonymous" media="all" />
<link rel='preload'  href='https://newocean.edu.vn/wp-content/uploads/elementor/css/post-20924.css?ver=1684549525' data-rocket-async="style" as="style" onload="this.onload=null;this.rel='stylesheet'" onerror="this.removeAttribute('data-rocket-async')"  media='all' />



<style id='rs-plugin-settings-inline-css'>
    #rev_slider_20_1_wrapper .hesperiden.tparrows{cursor:pointer;background:rgba(0,0,0,0.5);width:40px;height:40px;position:absolute;display:block;z-index:1000;  border-radius:50%}#rev_slider_20_1_wrapper .hesperiden.tparrows.rs-touchhover{background:#000000}#rev_slider_20_1_wrapper .hesperiden.tparrows:before{font-family:'revicons';font-size:20px;color:#ffffff;display:block;line-height:40px;text-align:center}#rev_slider_20_1_wrapper .hesperiden.tparrows.tp-leftarrow:before{content:'\e82c';  margin-left:-3px}#rev_slider_20_1_wrapper .hesperiden.tparrows.tp-rightarrow:before{content:'\e82d';  margin-right:-3px}#rev_slider_20_1_wrapper .ares.tp-bullets{}#rev_slider_20_1_wrapper .ares.tp-bullets:before{content:' ';position:absolute;width:100%;height:100%;background:transparent;padding:10px;margin-left:-10px;margin-top:-10px;box-sizing:content-box}#rev_slider_20_1_wrapper .ares .tp-bullet{width:8px;height:8px;position:absolute;background:#e5e5e5;border-radius:50%;cursor:pointer;box-sizing:content-box}#rev_slider_20_1_wrapper .ares .tp-bullet.rs-touchhover,#rev_slider_20_1_wrapper .ares .tp-bullet.selected{background:#ffffff}#rev_slider_20_1_wrapper .ares .tp-bullet-title{position:absolute; color:#888888; font-size:12px; padding:0px 10px; font-weight:600; right:27px; top:-4px;  background:rgba(255,255,255,0.75); visibility:hidden; transform:translatex(-20px); -webkit-transform:translatex(-20px); transition:transform 0.3s; -webkit-transition:transform 0.3s; line-height:20px; white-space:nowrap}#rev_slider_20_1_wrapper .ares .tp-bullet-title:after{width:0px;height:0px;border-style:solid;border-width:10px 0 10px 10px;border-color:transparent transparent transparent rgba(255,255,255,0.75);content:' ';  position:absolute;  right:-10px;top:0px}#rev_slider_20_1_wrapper .ares .tp-bullet.rs-touchhover .tp-bullet-title{visibility:visible;  transform:translatex(0px); -webkit-transform:translatex(0px)}#rev_slider_20_1_wrapper .ares .tp-bullet.selected.rs-touchhover .tp-bullet-title{background:#ffffff}#rev_slider_20_1_wrapper .ares .tp-bullet.selected.rs-touchhover .tp-bullet-title:after{border-color:transparent transparent transparent #ffffff}#rev_slider_20_1_wrapper .ares.tp-bullets.rs-touchhover .tp-bullet-title{visibility:hidden}#rev_slider_20_1_wrapper .ares.tp-bullets.rs-touchhover .tp-bullet.rs-touchhover .tp-bullet-title{visibility:visible;  transform:translateX(0px) translatey(0px); -webkit-transform:translateX(0px) translatey(0px)}#rev_slider_20_1_wrapper .ares.nav-dir-vertical.nav-pos-hor-left .tp-bullet-title{right:auto; left:27px; transform:translatex(20px); -webkit-transform:translatex(20px)}#rev_slider_20_1_wrapper .ares.nav-dir-vertical.nav-pos-hor-left .tp-bullet-title:after{border-width:10px 10px 10px 0 !important; border-color:transparent rgba(255,255,255,0.75) transparent transparent; right:auto !important; left:-10px !important}#rev_slider_20_1_wrapper .ares.nav-dir-vertical.nav-pos-hor-left .tp-bullet.selected.rs-touchhover .tp-bullet-title:after{border-color:transparent #ffffff transparent transparent !important}#rev_slider_20_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-center .tp-bullet-title,#rev_slider_20_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-bottom .tp-bullet-title{top:-35px; left:50%; right:auto; transform:translateX(-50%) translateY(-10px);-webkit-transform:translateX(-50%) translateY(-10px)}#rev_slider_20_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-center .tp-bullet-title:after,#rev_slider_20_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-bottom .tp-bullet-title:after{border-width:10px 10px 0px 10px; border-color:rgba(255,255,255,0.75) transparent transparent transparent; right:auto; left:50%; margin-left:-10px; top:auto; bottom:-10px}#rev_slider_20_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-center .tp-bullet.selected.rs-touchhover .tp-bullet-title:after,#rev_slider_20_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-bottom .tp-bullet.selected.rs-touchhover .tp-bullet-title:after{border-color:#ffffff transparent transparent transparent}#rev_slider_20_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-center .tp-bullet.rs-touchhover .tp-bullet-title,#rev_slider_20_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-bottom .tp-bullet.rs-touchhover .tp-bullet-title{transform:translateX(-50%) translatey(0px); -webkit-transform:translateX(-50%) translatey(0px)}#rev_slider_20_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-top .tp-bullet-title{top:25px; left:50%; right:auto; transform:translateX(-50%) translateY(10px);-webkit-transform:translateX(-50%) translateY(10px)}#rev_slider_20_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-top .tp-bullet-title:after{border-width:0 10px 10px 10px; border-color:transparent transparent rgba(255,255,255,0.75) transparent; right:auto; left:50%; margin-left:-10px; bottom:auto; top:-10px}#rev_slider_20_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-top .tp-bullet.selected.rs-touchhover .tp-bullet-title:after{border-color:transparent transparent #ffffff transparent}#rev_slider_20_1_wrapper .ares.nav-dir-horizontal.nav-pos-ver-top .tp-bullet.rs-touchhover .tp-bullet-title{transform:translateX(-50%) translatey(0px); -webkit-transform:translateX(-50%) translatey(0px)}
</style>
<script src='https://newocean.edu.vn/wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.5.18' defer async id='tp-tools-js'></script>
<script src='https://newocean.edu.vn/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.5.31' defer async id='revmin-js'></script>
<script id='rocket-browser-checker-js-after'>
    "use strict";var _createClass=function(){function defineProperties(target,props){for(var i=0;i<props.length;i++){var descriptor=props[i];descriptor.enumerable=descriptor.enumerable||!1,descriptor.configurable=!0,"value"in descriptor&&(descriptor.writable=!0),Object.defineProperty(target,descriptor.key,descriptor)}}return function(Constructor,protoProps,staticProps){return protoProps&&defineProperties(Constructor.prototype,protoProps),staticProps&&defineProperties(Constructor,staticProps),Constructor}}();function _classCallCheck(instance,Constructor){if(!(instance instanceof Constructor))throw new TypeError("Cannot call a class as a function")}var RocketBrowserCompatibilityChecker=function(){function RocketBrowserCompatibilityChecker(options){_classCallCheck(this,RocketBrowserCompatibilityChecker),this.passiveSupported=!1,this._checkPassiveOption(this),this.options=!!this.passiveSupported&&options}return _createClass(RocketBrowserCompatibilityChecker,[{key:"_checkPassiveOption",value:function(self){try{var options={get passive(){return!(self.passiveSupported=!0)}};window.addEventListener("test",null,options),window.removeEventListener("test",null,options)}catch(err){self.passiveSupported=!1}}},{key:"initRequestIdleCallback",value:function(){!1 in window&&(window.requestIdleCallback=function(cb){var start=Date.now();return setTimeout(function(){cb({didTimeout:!1,timeRemaining:function(){return Math.max(0,50-(Date.now()-start))}})},1)}),!1 in window&&(window.cancelIdleCallback=function(id){return clearTimeout(id)})}},{key:"isDataSaverModeOn",value:function(){return"connection"in navigator&&!0===navigator.connection.saveData}},{key:"supportsLinkPrefetch",value:function(){var elem=document.createElement("link");return elem.relList&&elem.relList.supports&&elem.relList.supports("prefetch")&&window.IntersectionObserver&&"isIntersecting"in IntersectionObserverEntry.prototype}},{key:"isSlowConnection",value:function(){return"connection"in navigator&&"effectiveType"in navigator.connection&&("2g"===navigator.connection.effectiveType||"slow-2g"===navigator.connection.effectiveType)}}]),RocketBrowserCompatibilityChecker}();
</script>
<script id='rocket-preload-links-js-extra'>
    var RocketPreloadLinksConfig = {"excludeUris":"\/(?:.+\/)?feed(?:\/(?:.+\/?)?)?$|\/(?:.+\/)?embed\/|\/(index\\.php\/)?wp\\-json(\/.*|$)|\/refer\/|\/go\/|\/recommend\/|\/recommends\/","usesTrailingSlash":"1","imageExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php","fileExt":"jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php|html|htm","siteUrl":"https:\/\/newocean.edu.vn","onHoverDelay":"100","rateThrottle":"3"};
</script>
<script id='rocket-preload-links-js-after'>
    (function() {
        "use strict";var r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e=function(){function i(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(e,t,n){return t&&i(e.prototype,t),n&&i(e,n),e}}();function i(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}var t=function(){function n(e,t){i(this,n),this.browser=e,this.config=t,this.options=this.browser.options,this.prefetched=new Set,this.eventTime=null,this.threshold=1111,this.numOnHover=0}return e(n,[{key:"init",value:function(){!this.browser.supportsLinkPrefetch()||this.browser.isDataSaverModeOn()||this.browser.isSlowConnection()||(this.regex={excludeUris:RegExp(this.config.excludeUris,"i"),images:RegExp(".("+this.config.imageExt+")$","i"),fileExt:RegExp(".("+this.config.fileExt+")$","i")},this._initListeners(this))}},{key:"_initListeners",value:function(e){-1<this.config.onHoverDelay&&document.addEventListener("mouseover",e.listener.bind(e),e.listenerOptions),document.addEventListener("mousedown",e.listener.bind(e),e.listenerOptions),document.addEventListener("touchstart",e.listener.bind(e),e.listenerOptions)}},{key:"listener",value:function(e){var t=e.target.closest("a"),n=this._prepareUrl(t);if(null!==n)switch(e.type){case"mousedown":case"touchstart":this._addPrefetchLink(n);break;case"mouseover":this._earlyPrefetch(t,n,"mouseout")}}},{key:"_earlyPrefetch",value:function(t,e,n){var i=this,r=setTimeout(function(){if(r=null,0===i.numOnHover)setTimeout(function(){return i.numOnHover=0},1e3);else if(i.numOnHover>i.config.rateThrottle)return;i.numOnHover++,i._addPrefetchLink(e)},this.config.onHoverDelay);t.addEventListener(n,function e(){t.removeEventListener(n,e,{passive:!0}),null!==r&&(clearTimeout(r),r=null)},{passive:!0})}},{key:"_addPrefetchLink",value:function(i){return this.prefetched.add(i.href),new Promise(function(e,t){var n=document.createElement("link");n.rel="prefetch",n.href=i.href,n.onload=e,n.onerror=t,document.head.appendChild(n)}).catch(function(){})}},{key:"_prepareUrl",value:function(e){if(null===e||"object"!==(void 0===e?"undefined":r(e))||!1 in e||-1===["http:","https:"].indexOf(e.protocol))return null;var t=e.href.substring(0,this.config.siteUrl.length),n=this._getPathname(e.href,t),i={original:e.href,protocol:e.protocol,origin:t,pathname:n,href:t+n};return this._isLinkOk(i)?i:null}},{key:"_getPathname",value:function(e,t){var n=t?e.substring(this.config.siteUrl.length):e;return n.startsWith("/")||(n="/"+n),this._shouldAddTrailingSlash(n)?n+"/":n}},{key:"_shouldAddTrailingSlash",value:function(e){return this.config.usesTrailingSlash&&!e.endsWith("/")&&!this.regex.fileExt.test(e)}},{key:"_isLinkOk",value:function(e){return null!==e&&"object"===(void 0===e?"undefined":r(e))&&(!this.prefetched.has(e.href)&&e.origin===this.config.siteUrl&&-1===e.href.indexOf("?")&&-1===e.href.indexOf("#")&&!this.regex.excludeUris.test(e.href)&&!this.regex.images.test(e.href))}}],[{key:"run",value:function(){"undefined"!=typeof RocketPreloadLinksConfig&&new n(new RocketBrowserCompatibilityChecker({capture:!0,passive:!0}),RocketPreloadLinksConfig).init()}}]),n}();t.run();
    }());
</script>
<script src='https://newocean.edu.vn/wp-content/plugins/jet-menu/assets/public/lib/vue/vue.min.js?ver=2.6.11' id='jet-vue-js' defer></script>
<script id='jet-menu-public-scripts-js-extra'>
    var jetMenuPublicSettings = {"version":"2.2.4","ajaxUrl":"https:\/\/newocean.edu.vn\/wp-admin\/admin-ajax.php","isMobile":"false","getElementorTemplateApiUrl":"https:\/\/newocean.edu.vn\/wp-json\/jet-menu-api\/v2\/get-elementor-template-content","getBlocksTemplateApiUrl":"https:\/\/newocean.edu.vn\/wp-json\/jet-menu-api\/v2\/get-blocks-template-content","menuItemsApiUrl":"https:\/\/newocean.edu.vn\/wp-json\/jet-menu-api\/v2\/get-menu-items","restNonce":"0037ca6127","devMode":"false","wpmlLanguageCode":"","menuSettings":{"jetMenuRollUp":"true","jetMenuMouseleaveDelay":"500","jetMenuMegaWidthType":"container","jetMenuMegaWidthSelector":"","jetMenuMegaOpenSubType":"hover","jetMenuMegaAjax":"false"}};
</script>
<script data-minify="1" src='https://newocean.edu.vn/wp-content/cache/min/1/wp-content/plugins/jet-menu/assets/public/js/legacy/jet-menu-public-scripts.js?ver=1682646090' id='jet-menu-public-scripts-js' defer></script>
<script id='jet-menu-public-scripts-js-after'>
    function CxCSSCollector(){"use strict";var t,e=window.CxCollectedCSS;void 0!==e&&((t=document.createElement("style")).setAttribute("title",e.title),t.setAttribute("type",e.type),t.textContent=e.css,document.head.appendChild(t))}CxCSSCollector();
</script>
<script src='https://newocean.edu.vn/wp-content/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.min.js?ver=1.0.1' id='smartmenus-js' defer></script>
<script src='https://newocean.edu.vn/wp-content/plugins/elementor/assets/lib/jquery-numerator/jquery-numerator.min.js?ver=0.2.1' id='jquery-numerator-js' defer></script>
<script src='https://newocean.edu.vn/wp-includes/js/imagesloaded.min.js?ver=4.1.4' id='imagesloaded-js' defer></script>
<script src='https://newocean.edu.vn/wp-content/plugins/elementor/assets/lib/e-gallery/js/e-gallery.min.js?ver=1.2.0' id='elementor-gallery-js' defer></script>
<script type="rocketlazyloadscript" src='https://www.google.com/recaptcha/api.js?render=explicit&#038;ver=3.13.1' id='elementor-recaptcha_v3-api-js'></script>
<script src='https://newocean.edu.vn/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.13.1' id='elementor-pro-webpack-runtime-js' defer></script>
<script src='https://newocean.edu.vn/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.13.2' id='elementor-webpack-runtime-js' defer></script>
<script src='https://newocean.edu.vn/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.13.2' id='elementor-frontend-modules-js' defer></script>
<script src='https://newocean.edu.vn/wp-includes/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2' id='wp-polyfill-inert-js' defer></script>
<script src='https://newocean.edu.vn/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.11' id='regenerator-runtime-js' defer></script>
<script src='https://newocean.edu.vn/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0' id='wp-polyfill-js'></script>
<script src='https://newocean.edu.vn/wp-includes/js/dist/hooks.min.js?ver=4169d3cf8e8d95a3d6d5' id='wp-hooks-js'></script>
<script src='https://newocean.edu.vn/wp-includes/js/dist/i18n.min.js?ver=9e794f35a71bb98672ae' id='wp-i18n-js'></script>
<script id='wp-i18n-js-after'>
    wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
</script>
<script id='elementor-pro-frontend-js-before'>
    var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/newocean.edu.vn\/wp-admin\/admin-ajax.php","nonce":"7b6a7f7c73","urls":{"assets":"https:\/\/newocean.edu.vn\/wp-content\/plugins\/elementor-pro\/assets\/","rest":"https:\/\/newocean.edu.vn\/wp-json\/"},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},
        "facebook_sdk":{"lang":"vi","app_id":"394781937574480"},"lottie":{"defaultAnimationUrl":"https:\/\/newocean.edu.vn\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
</script>
<script src='https://newocean.edu.vn/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.13.1' id='elementor-pro-frontend-js' defer></script>
<script src='https://newocean.edu.vn/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2' id='elementor-waypoints-js' defer></script>
<script src='https://newocean.edu.vn/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2' id='jquery-ui-core-js' defer></script>
<script id='elementor-frontend-js-before'>
    var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Chia s\u1ebb tr\u00ean Facebook","shareOnTwitter":"Chia s\u1ebb tr\u00ean Twitter","pinIt":"Ghim n\u00f3","download":"T\u1ea3i xu\u1ed1ng","downloadImage":"T\u1ea3i h\u00ecnh \u1ea3nh","fullscreen":"To\u00e0n m\u00e0n h\u00ecnh","zoom":"Thu ph\u00f3ng","share":"Chia s\u1ebb","playVideo":"Ch\u01a1i Video","previous":"Previous","next":"Next","close":"\u0110\u00f3ng"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},
        "version":"3.13.2","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"a11y_improvements":true,"additional_custom_breakpoints":true,"theme_builder_v2":true,"landing-pages":true,"page-transitions":true,"notes":true,"loop":true,"form-submissions":true,"e_scroll_snap":true},"urls":{"assets":"https:\/\/newocean.edu.vn\/wp-content\/plugins\/elementor\/assets\/"},"swiperClass":"swiper-container","settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes"},"post":{"id":174,"title":"C%C3%B4ng%20Ty%20T%C6%B0%20v%E1%BA%A5n%20Du%20h%E1%BB%8Dc%20New%20Ocean%20%7C%20Trung%20T%C3%A2m%20T%C6%B0%20V%E1%BA%A5n%20Du%20H%E1%BB%8Dc","excerpt":"","featuredImage":"https:\/\/newocean.edu.vn\/wp-content\/uploads\/2020\/05\/Tu-van-Du-hoc-1200x628-1-1024x536.jpg"}};
</script>
<script src='https://newocean.edu.vn/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.13.2' id='elementor-frontend-js' defer></script>
<script src='https://newocean.edu.vn/wp-content/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=3.13.1' id='pro-elements-handlers-js' defer></script>
<script data-minify="1" src='https://newocean.edu.vn/wp-content/cache/min/1/wp-content/plugins/jet-menu/includes/elementor/assets/public/js/legacy/widgets-scripts.js?ver=1682646090' id='jet-menu-elementor-widgets-scripts-js' defer></script>
<script id='jet-blog-js-extra'>
    var JetBlogSettings = {"ajaxurl":"https:\/\/newocean.edu.vn\/?nocache=1684578148&jet_blog_ajax=1"};
</script>
<script src='https://newocean.edu.vn/wp-content/plugins/jet-blog/assets/js/jet-blog.min.js?ver=2.3.1' id='jet-blog-js' defer></script>
<script data-minify="1" src='https://newocean.edu.vn/wp-content/cache/min/1/ajax/libs/gsap/2.1.3/TweenMax.min.js?ver=1682646090' id='gsap-js-js' defer></script>
<script id='elementor-extras-frontend-js-extra'>
    var elementorExtrasFrontendConfig = {"urls":{"assets":"https:\/\/newocean.edu.vn\/wp-content\/plugins\/elementor-extras\/assets\/"},"refreshableWidgets":["ee-offcanvas.classic","ee-popup.classic","gallery-slider.default","media-carousel.default","image-carousel.default","slides.default"]};
</script>
<script src='https://newocean.edu.vn/wp-content/plugins/elementor-extras/assets/js/frontend.min.js?ver=2.2.51' id='elementor-extras-frontend-js' defer></script>
<script id="rs-initialisation-scripts">
    var	tpj = jQuery;

    var	revapi20;

    if(window.RS_MODULES === undefined) window.RS_MODULES = {};
    if(RS_MODULES.modules === undefined) RS_MODULES.modules = {};
    RS_MODULES.modules["revslider201"] = {once: RS_MODULES.modules["revslider201"]!==undefined ? RS_MODULES.modules["revslider201"].once : undefined, init:function() {
            window.revapi20 = window.revapi20===undefined || window.revapi20===null || window.revapi20.length===0  ? document.getElementById("rev_slider_20_1") : window.revapi20;
            if(window.revapi20 === null || window.revapi20 === undefined || window.revapi20.length==0) { window.revapi20initTry = window.revapi20initTry ===undefined ? 0 : window.revapi20initTry+1; if (window.revapi20initTry<20) requestAnimationFrame(function() {RS_MODULES.modules["revslider201"].init()}); return;}
            window.revapi20 = jQuery(window.revapi20);
            if(window.revapi20.revolution==undefined){ revslider_showDoubleJqueryError("rev_slider_20_1"); return;}
            revapi20.revolutionInit({
                revapi:"revapi20",
                DPR:"dpr",
                visibilityLevels:"1240,1240,1240,480",
                gridwidth:"1120,1120,1120,480",
                gridheight:"400,400,400,400",
                lazyType:"smart",
                perspective:600,
                perspectiveType:"global",
                editorheight:"400,768,960,400",
                responsiveLevels:"1240,1240,1240,480",
                progressBar:{disableProgressBar:true},
                navigation: {
                    wheelCallDelay:1000,
                    onHoverStop:false,
                    arrows: {
                        enable:true,
                        style:"hesperiden",
                        left: {
                            container:"layergrid",
                            h_offset:5
                        },
                        right: {
                            container:"layergrid",
                            h_offset:5
                        }
                    },
                    bullets: {
                        enable:true,
                        tmp:"<span class=\"tp-bullet-title\">{{$title??''}}</span>",
                        style:"ares",
                        v_offset:10
                    }
                },
                viewPort: {
                    global:true,
                    globalDist:"-200px",
                    enable:false
                },
                fallbacks: {
                    allowHTML5AutoPlayOnAndroid:true
                },
            });

        }} // End of RevInitScript

    if (window.RS_MODULES.checkMinimal!==undefined) { window.RS_MODULES.checkMinimal();};
</script>
<script>window.lazyLoadOptions=[{elements_selector:"img[data-lazy-src],.rocket-lazyload,iframe[data-lazy-src]",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,callback_loaded:function(element){if(element.tagName==="IFRAME"&&element.dataset.rocketLazyload=="fitvidscompatible"){if(element.classList.contains("lazyloaded")){if(typeof window.jQuery!="undefined"){if(jQuery.fn.fitVids){jQuery(element).parent().fitVids()}}}}}},{elements_selector:".rocket-lazyload",data_src:"lazy-src",data_srcset:"lazy-srcset",data_sizes:"lazy-sizes",class_loading:"lazyloading",class_loaded:"lazyloaded",threshold:300,}];window.addEventListener('LazyLoad::Initialized',function(e){var lazyLoadInstance=e.detail.instance;if(window.MutationObserver){var observer=new MutationObserver(function(mutations){var image_count=0;var iframe_count=0;var rocketlazy_count=0;mutations.forEach(function(mutation){for(var i=0;i<mutation.addedNodes.length;i++){if(typeof mutation.addedNodes[i].getElementsByTagName!=='function'){continue}
        if(typeof mutation.addedNodes[i].getElementsByClassName!=='function'){continue}
        images=mutation.addedNodes[i].getElementsByTagName('img');is_image=mutation.addedNodes[i].tagName=="IMG";iframes=mutation.addedNodes[i].getElementsByTagName('iframe');is_iframe=mutation.addedNodes[i].tagName=="IFRAME";rocket_lazy=mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');image_count+=images.length;iframe_count+=iframes.length;rocketlazy_count+=rocket_lazy.length;if(is_image){image_count+=1}
        if(is_iframe){iframe_count+=1}}});if(image_count>0||iframe_count>0||rocketlazy_count>0){lazyLoadInstance.update()}});var b=document.getElementsByTagName("body")[0];var config={childList:!0,subtree:!0};observer.observe(b,config)}},!1)</script><script data-no-minify="1" async src="https://newocean.edu.vn/wp-content/plugins/wp-rocket/assets/js/lazyload/17.5/lazyload.min.js"></script><script>function lazyLoadThumb(e){var t='<img data-lazy-src="https://i.ytimg.com/vi/ID/hqdefault.jpg" alt="" width="480" height="360"><noscript><img src="https://i.ytimg.com/vi/ID/hqdefault.jpg" alt="" width="480" height="360"></noscript>',a='<button class="play" aria-label="play Youtube video"></button>';return t.replace("ID",e)+a}function lazyLoadYoutubeIframe(){var e=document.createElement("iframe"),t="ID?autoplay=1";t+=0===this.parentNode.dataset.query.length?'':'&'+this.parentNode.dataset.query;e.setAttribute("src",t.replace("ID",this.parentNode.dataset.src)),e.setAttribute("frameborder","0"),e.setAttribute("allowfullscreen","1"),e.setAttribute("allow", "accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"),this.parentNode.parentNode.replaceChild(e,this.parentNode)}document.addEventListener("DOMContentLoaded",function(){var e,t,p,a=document.getElementsByClassName("rll-youtube-player");for(t=0;t<a.length;t++)e=document.createElement("div"),e.setAttribute("data-id",a[t].dataset.id),e.setAttribute("data-query", a[t].dataset.query),e.setAttribute("data-src", a[t].dataset.src),e.innerHTML=lazyLoadThumb(a[t].dataset.id),a[t].appendChild(e),p=e.querySelector('.play'),p.onclick=lazyLoadYoutubeIframe});</script>

<script>class RocketElementorAnimation {
        constructor() {
            this.deviceMode=document.createElement("span"),
                this.deviceMode.id="elementor-device-mode",
                this.deviceMode.setAttribute("class", "elementor-screen-only"),
                document.body.appendChild(this.deviceMode)
        }
        _detectAnimations() {
            let t=getComputedStyle(this.deviceMode, ":after").content.replace(/"/g,"");this.animationSettingKeys=this._listAnimationSettingsKeys(t),document.querySelectorAll(".elementor-invisible[data-settings]").forEach(t=>{const e=t.getBoundingClientRect();if(e.bottom>=0&&e.top<=window.innerHeight)try{this._animateElement(t)}catch(t){}})}_animateElement(t){const e=JSON.parse(t.dataset.settings),i=e._animation_delay||e.animation_delay||0,n=e[this.animationSettingKeys.find(t=>e[t])];if("none"===n)return void t.classList.remove("elementor-invisible");t.classList.remove(n),this.currentAnimation&&t.classList.remove(this.currentAnimation),this.currentAnimation=n;let s=setTimeout(()=>{t.classList.remove("elementor-invisible"),t.classList.add("animated",n),this._removeAnimationSettings(t,e)},i);window.addEventListener("rocket-startLoading",function(){clearTimeout(s)})}_listAnimationSettingsKeys(t="mobile"){const e=[""];switch(t){case"mobile":e.unshift("_mobile");case"tablet":e.unshift("_tablet");case"desktop":e.unshift("_desktop")}const i=[];return["animation","_animation"].forEach(t=>{e.forEach(e=>{i.push(t+e)})}),i}_removeAnimationSettings(t,e){this._listAnimationSettingsKeys().forEach(t=>delete e[t]),t.dataset.settings=JSON.stringify(e)}static run(){const t=new RocketElementorAnimation;requestAnimationFrame(t._detectAnimations.bind(t))}}document.addEventListener("DOMContentLoaded",RocketElementorAnimation.run);
</script>
<noscript>
    <link rel="stylesheet" href="{{asset('public/css/1ab8181ff7d8c241e0921085c97e1980.css')}}" media="all" data-minify="1" /><link rel='stylesheet' id='elementor-post-10750-css' href='https://newocean.edu.vn/wp-content/uploads/elementor/css/post-10750.css?ver=1684549523' media='all' /><link rel='stylesheet' id='elementor-global-css' href='https://newocean.edu.vn/wp-content/uploads/elementor/css/global.css?ver=1684549524' media='all' /><link rel='stylesheet' id='elementor-post-174-css' href='https://newocean.edu.vn/wp-content/uploads/elementor/css/post-174.css?ver=1684549583' media='all' /><link rel='stylesheet' id='elementor-post-20880-css' href='https://newocean.edu.vn/wp-content/uploads/elementor/css/post-20880.css?ver=1684549525' media='all' /><link rel='stylesheet' id='elementor-post-20951-css' href='https://newocean.edu.vn/wp-content/uploads/elementor/css/post-20951.css?ver=1684549525' media='all' /><link rel='stylesheet' id='elementor-post-16420-css' href='https://newocean.edu.vn/wp-content/uploads/elementor/css/post-16420.css?ver=1684549525' media='all' /><link rel='stylesheet' id='elementor-post-15925-css' href='https://newocean.edu.vn/wp-content/uploads/elementor/css/post-15925.css?ver=1684549525' media='all' /><link rel='stylesheet' id='elementor-post-20924-css' href='https://newocean.edu.vn/wp-content/uploads/elementor/css/post-20924.css?ver=1684549525' media='all' />
</noscript>
</body>
</html>
<!--
Performance optimized by Redis Object Cache. Learn more: https://wprediscache.com

Retrieved 32285 objects (3 MB) from Redis using PhpRedis (v5.3.7).
-->

<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me - Debug: cached@1684578148 -->
