!function(e,t){e.PluginManager.add("wpview",function(n){function o(){}function i(e){return n.dom.hasClass(e,"wpview")}function c(e){function t(e,t){return"<p>"+window.decodeURIComponent(t)+"</p>"}return e?e.replace(/<div[^>]+data-wpview-text="([^"]+)"[^>]*>(?:\.|[\s\S]+?wpview-end[^>]+>\s*<\/span>\s*)?<\/div>/g,t).replace(/<p[^>]+data-wpview-marker="([^"]+)"[^>]*>[\s\S]*?<\/p>/g,t):e}return t&&t.mce&&t.mce.views?(n.on("init",function(){var e=window.MutationObserver||window.WebKitMutationObserver;e&&new e(function(){n.fire("wp-body-class-change")}).observe(n.getBody(),{attributes:!0,attributeFilter:["class"]}),n.on("wp-body-class-change",function(){var e=n.getBody().className;n.$('iframe[class="wpview-sandbox"]').each(function(t,n){if(!n.src||'javascript:""'===n.src)try{n.contentWindow.document.body.className=e}catch(e){}})})}),n.on("beforesetcontent",function(e){var o;if(e.selection||t.mce.views.unbind(),e.content){if(!e.load&&(o=n.selection.getNode())&&o!==n.getBody()&&/^\s*https?:\/\/\S+\s*$/i.test(e.content)){if(!(o=n.dom.getParent(o,"p"))||!/^[\s\uFEFF\u00A0]*$/.test(n.$(o).text()||""))return;o.innerHTML=""}e.content=t.mce.views.setMarkers(e.content,n)}}),n.on("setcontent",function(){t.mce.views.render()}),n.on("preprocess hide",function(e){n.$("div[data-wpview-text], p[data-wpview-marker]",e.node).each(function(e,t){t.innerHTML="."})},!0),n.on("postprocess",function(e){e.content=c(e.content)}),n.on("beforeaddundo",function(e){e.level.content=c(e.level.content)}),n.on("drop objectselected",function(e){i(e.targetClone)&&(e.targetClone=n.getDoc().createTextNode(window.decodeURIComponent(n.dom.getAttrib(e.targetClone,"data-wpview-text"))))}),n.on("pastepreprocess",function(t){var n=t.content;n&&(n=e.trim(n.replace(/<[^>]+>/g,"")),/^https?:\/\/\S+$/i.test(n)&&(t.content=n))}),n.on("resolvename",function(e){i(e.target)&&(e.name=n.dom.getAttrib(e.target,"data-wpview-type")||"object")}),n.on("click keyup",function(){var e=n.selection.getNode();i(e)&&n.dom.getAttrib(e,"data-mce-selected")&&e.setAttribute("data-mce-selected","2")}),n.addButton("wp_view_edit",{tooltip:"Edit|button",icon:"dashicon dashicons-edit",onclick:function(){var e=n.selection.getNode();i(e)&&t.mce.views.edit(n,e)}}),n.addButton("wp_view_remove",{tooltip:"Remove",icon:"dashicon dashicons-no",onclick:function(){n.fire("cut")}}),n.once("preinit",function(){var e;n.wp&&n.wp._createToolbar&&(e=n.wp._createToolbar(["wp_view_edit","wp_view_remove"]),n.on("wptoolbar",function(t){!t.collapsed&&i(t.element)&&(t.toolbar=e)}))}),n.wp=n.wp||{},n.wp.getView=o,n.wp.setViewCursor=o,{getView:o}):{getView:o}})}(window.tinymce,window.wp);