this.wp=this.wp||{},this.wp.dom=function(n){var r={};function o(e){if(r[e])return r[e].exports;var t=r[e]={i:e,l:!1,exports:{}};return n[e].call(t.exports,t,t.exports,o),t.l=!0,t.exports}return o.m=n,o.c=r,o.d=function(e,t,n){o.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},o.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o.t=function(t,e){if(1&e&&(t=o(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var n=Object.create(null);if(o.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var r in t)o.d(n,r,function(e){return t[e]}.bind(null,r));return n},o.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(t,"a",t),t},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},o.p="",o(o.s=323)}({19:function(e,t,n){"use strict";var r=n(33);function o(e){return function(e){if(Array.isArray(e)){for(var t=0,n=new Array(e.length);t<e.length;t++)n[t]=e[t];return n}}(e)||Object(r.a)(e)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance")}()}n.d(t,"a",function(){return o})},2:function(e,t){!function(){e.exports=this.lodash}()},323:function(e,t,n){"use strict";n.r(t);var r={};n.r(r),n.d(r,"find",function(){return l});var o={};n.r(o),n.d(o,"isTabbableIndex",function(){return d}),n.d(o,"find",function(){return p});var i=n(19),a=["[tabindex]","a[href]","button:not([disabled])",'input:not([type="hidden"]):not([disabled])',"select:not([disabled])","textarea:not([disabled])","iframe","object","embed","area[href]","[contenteditable]:not([contenteditable=false])"].join(",");function u(e){return 0<e.offsetWidth||0<e.offsetHeight||0<e.getClientRects().length}function l(e){var t=e.querySelectorAll(a);return Object(i.a)(t).filter(function(e){return!!u(e)&&("AREA"!==e.nodeName||function(e){var t=e.closest("map[name]");if(!t)return!1;var n=document.querySelector('img[usemap="#'+t.name+'"]');return!!n&&u(n)}(e))})}function c(e){var t=e.getAttribute("tabindex");return null===t?0:parseInt(t,10)}function d(e){return-1!==c(e)}function f(e,t){return{element:e,index:t}}function s(e){return e.element}function g(e,t){var n=c(e.element),r=c(t.element);return n===r?e.index-t.index:n-r}function p(e){return l(e).filter(d).map(f).sort(g).map(s)}var v=n(2),m=window.getComputedStyle,b=window.Node,h=b.TEXT_NODE,C=b.ELEMENT_NODE,N=b.DOCUMENT_POSITION_PRECEDING,E=b.DOCUMENT_POSITION_FOLLOWING;function R(e,t){if(Object(v.includes)(["INPUT","TEXTAREA"],e.tagName))return e.selectionStart===e.selectionEnd&&(t?0===e.selectionStart:e.value.length===e.selectionStart);if(!e.isContentEditable)return!0;var n=window.getSelection(),r=n.getRangeAt(0).cloneRange(),o,i,a,u,l,c;n.isCollapsed||r.collapse((i=(o=n).anchorNode,a=o.focusNode,u=o.anchorOffset,l=o.focusOffset,!(!((c=i.compareDocumentPosition(a))&N)&&(c&E||0!==c||u<=l))));var d,f=r.startContainer;if(d=t?0:f.nodeValue?f.nodeValue.length:f.childNodes.length,r["".concat(t?"start":"end","Offset")]!==d)return!1;for(var s=t?"first":"last";f!==e;){var g=f.parentNode;if(g["".concat(s,"Child")]!==f)return!1;f=g}return!0}function w(e,t){if(Object(v.includes)(["INPUT","TEXTAREA"],e.tagName))return R(e,t);if(!e.isContentEditable)return!0;var n=window.getSelection(),r=n.rangeCount?n.getRangeAt(0):null;if(!r)return!1;var o=y(r);if(!o)return!1;var i=o.height/2,a=e.getBoundingClientRect();return!(t&&o.top-i>a.top||!t&&o.bottom+i<a.bottom)}function y(e){if(!e.collapsed)return e.getBoundingClientRect();var t=e.getClientRects()[0];if(!t){var n=document.createTextNode("​");e.insertNode(n),t=e.getClientRects()[0],n.parentNode.removeChild(n)}return t}function S(e){if(e.isContentEditable){var t=window.getSelection(),n=t.rangeCount?t.getRangeAt(0):null;if(n)return y(n)}}function T(e,t){if(e){if(Object(v.includes)(["INPUT","TEXTAREA"],e.tagName))return e.focus(),void(e.selectionEnd=t?(e.selectionStart=e.value.length,e.value.length):e.selectionStart=0);if(e.focus(),e.isContentEditable){var n=e[t?"lastChild":"firstChild"];if(n){var r=window.getSelection(),o=document.createRange();o.selectNodeContents(n),o.collapse(!t),r.removeAllRanges(),r.addRange(o)}}}}function O(e,t,n,r){r.style.zIndex="10000";var o=function(e,t,n){if(e.caretRangeFromPoint)return e.caretRangeFromPoint(t,n);if(!e.caretPositionFromPoint)return null;var r=e.caretPositionFromPoint(t,n);if(!r)return null;var o=e.createRange();return o.setStart(r.offsetNode,r.offset),o.collapse(!0),o}(e,t,n);return r.style.zIndex=null,o}function A(e,t,n){var r=!(3<arguments.length&&void 0!==arguments[3])||arguments[3];if(e)if(n&&e.isContentEditable){var o=n.height/2,i=e.getBoundingClientRect(),a=n.left,u=t?i.bottom-o:i.top+o,l=window.getSelection(),c=O(document,a,u,e);if(!c||!e.contains(c.startContainer))return!r||c&&c.startContainer&&c.startContainer.contains(e)?void T(e,t):(e.scrollIntoView(t),void A(e,t,n,!1));if(c.startContainer.nodeType===h){var d=c.startContainer.parentNode,f=d.getBoundingClientRect(),s=t?"bottom":"top",g=parseInt(m(d).getPropertyValue("padding-".concat(s)),10)||0,p=t?f.bottom-g-o:f.top+g+o;u!==p&&(c=O(document,a,p,e))}l.removeAllRanges(),l.addRange(c),e.focus(),l.removeAllRanges(),l.addRange(c)}else T(e,t)}function P(e){try{var t=e.nodeName,n=e.selectionStart,r=e.contentEditable;return"INPUT"===t&&null!==n||"TEXTAREA"===t||"true"===r}catch(e){return!1}}function j(){if(P(document.activeElement))return!0;var e=window.getSelection(),t=e.rangeCount?e.getRangeAt(0):null;return t&&!t.collapsed}function x(e){if(Object(v.includes)(["INPUT","TEXTAREA"],e.nodeName))return 0===e.selectionStart&&e.value.length===e.selectionEnd;if(!e.isContentEditable)return!0;var t=window.getSelection(),n=t.rangeCount?t.getRangeAt(0):null;if(!n)return!0;var r=n.startContainer,o=n.endContainer,i=n.startOffset,a=n.endOffset;if(r===e&&o===e&&0===i&&a===e.childNodes.length)return!0;var u=e.lastChild,l=u.nodeType===h?u.data.length:u.childNodes.length;return r===e.firstChild&&o===e.lastChild&&0===i&&a===l}function I(e){if(e){if(e.scrollHeight>e.clientHeight){var t=window.getComputedStyle(e).overflowY;if(/(auto|scroll)/.test(t))return e}return I(e.parentNode)}}function _(e){for(var t;(t=e.parentNode)&&t.nodeType!==C;);return t?"static"!==m(t).position?t:t.offsetParent:null}function B(e,t){F(t,e.parentNode),D(e)}function D(e){e.parentNode.removeChild(e)}function F(e,t){t.parentNode.insertBefore(e,t.nextSibling)}function M(e){for(var t=e.parentNode;e.firstChild;)t.insertBefore(e.firstChild,e);t.removeChild(e)}function U(e,t){for(var n=e.ownerDocument.createElement(t);e.firstChild;)n.appendChild(e.firstChild);return e.parentNode.replaceChild(n,e),n}function H(e,t){t.parentNode.insertBefore(e,t),e.appendChild(t)}n.d(t,"focus",function(){return V}),n.d(t,"isHorizontalEdge",function(){return R}),n.d(t,"isVerticalEdge",function(){return w}),n.d(t,"getRectangleFromRange",function(){return y}),n.d(t,"computeCaretRect",function(){return S}),n.d(t,"placeCaretAtHorizontalEdge",function(){return T}),n.d(t,"placeCaretAtVerticalEdge",function(){return A}),n.d(t,"isTextField",function(){return P}),n.d(t,"documentHasSelection",function(){return j}),n.d(t,"isEntirelySelected",function(){return x}),n.d(t,"getScrollContainer",function(){return I}),n.d(t,"getOffsetParent",function(){return _}),n.d(t,"replace",function(){return B}),n.d(t,"remove",function(){return D}),n.d(t,"insertAfter",function(){return F}),n.d(t,"unwrap",function(){return M}),n.d(t,"replaceTag",function(){return U}),n.d(t,"wrap",function(){return H});var V={focusable:r,tabbable:o}},33:function(e,t,n){"use strict";function r(e){if(Symbol.iterator in Object(e)||"[object Arguments]"===Object.prototype.toString.call(e))return Array.from(e)}n.d(t,"a",function(){return r})}});