!function(F,A,T){var e=function(){function e(){var e,t,n,a;"string"==typeof A.pagenow&&(y.screenId=A.pagenow),"string"==typeof A.ajaxurl&&(y.url=A.ajaxurl),"object"==typeof A.heartbeatSettings&&(e=A.heartbeatSettings,!y.url&&e.ajaxurl&&(y.url=e.ajaxurl),e.interval&&(y.mainInterval=e.interval,y.mainInterval<15?y.mainInterval=15:120<y.mainInterval&&(y.mainInterval=120)),e.minimalInterval&&(e.minimalInterval=parseInt(e.minimalInterval,10),y.minimalInterval=0<e.minimalInterval&&e.minimalInterval<=600?1e3*e.minimalInterval:0),y.minimalInterval&&y.mainInterval<y.minimalInterval&&(y.mainInterval=y.minimalInterval),y.screenId||(y.screenId=e.screenId||"front"),"disable"===e.suspension&&(y.suspendEnabled=!1)),y.mainInterval=1e3*y.mainInterval,y.originalInterval=y.mainInterval,void 0!==document.hidden?(t="hidden",a="visibilitychange",n="visibilityState"):void 0!==document.msHidden?(t="msHidden",a="msvisibilitychange",n="msVisibilityState"):void 0!==document.webkitHidden&&(t="webkitHidden",a="webkitvisibilitychange",n="webkitVisibilityState"),t&&(document[t]&&(y.hasFocus=!1),k.on(a+".wp-heartbeat",function(){"hidden"===document[n]?(u(),A.clearInterval(y.checkFocusTimer)):(l(),document.hasFocus&&(y.checkFocusTimer=A.setInterval(i,1e4)))})),document.hasFocus&&(y.checkFocusTimer=A.setInterval(i,1e4)),F(A).on("unload.wp-heartbeat",function(){y.suspend=!0,y.xhr&&4!==y.xhr.readyState&&y.xhr.abort()}),A.setInterval(v,3e4),k.ready(function(){y.lastTick=r(),s()})}function r(){return(new Date).getTime()}function n(e){var t,n=e.src;if(n&&/^https?:\/\//.test(n)&&(t=A.location.origin?A.location.origin:A.location.protocol+"//"+A.location.host,0!==n.indexOf(t)))return!1;try{if(e.contentWindow.document)return!0}catch(e){}return!1}function i(){y.hasFocus&&!document.hasFocus()?u():!y.hasFocus&&document.hasFocus()&&l()}function o(e,t){var n;if(e){switch(e){case"abort":break;case"timeout":n=!0;break;case"error":if(503===t&&y.hasConnected){n=!0;break}case"parsererror":case"empty":case"unknown":y.errorcount++,2<y.errorcount&&y.hasConnected&&(n=!0)}n&&!m()&&(y.connectionError=!0,k.trigger("heartbeat-connection-lost",[e,t]),wp.hooks.doAction("heartbeat.connection-lost",e,t))}}function c(){y.hasConnected=!0,m()&&(y.errorcount=0,y.connectionError=!1,k.trigger("heartbeat-connection-restored"),wp.hooks.doAction("heartbeat.connection-restored"))}function a(){var e,t;y.connecting||y.suspend||(y.lastTick=r(),t=F.extend({},y.queue),y.queue={},k.trigger("heartbeat-send",[t]),wp.hooks.doAction("heartbeat.send",t),e={data:t,interval:y.tempInterval?y.tempInterval/1e3:y.mainInterval/1e3,_nonce:"object"==typeof A.heartbeatSettings?A.heartbeatSettings.nonce:"",action:"heartbeat",screen_id:y.screenId,has_focus:y.hasFocus},"customize"===y.screenId&&(e.wp_customize="on"),y.connecting=!0,y.xhr=F.ajax({url:y.url,type:"post",timeout:3e4,data:e,dataType:"json"}).always(function(){y.connecting=!1,s()}).done(function(e,t,n){var a;return e?(c(),e.nonces_expired&&(k.trigger("heartbeat-nonces-expired"),wp.hooks.doAction("heartbeat.nonces-expired")),e.heartbeat_interval&&(a=e.heartbeat_interval,delete e.heartbeat_interval),e.heartbeat_nonce&&"object"==typeof A.heartbeatSettings&&(A.heartbeatSettings.nonce=e.heartbeat_nonce,delete e.heartbeat_nonce),e.rest_nonce&&"object"==typeof A.wpApiSettings&&(A.wpApiSettings.nonce=e.rest_nonce),k.trigger("heartbeat-tick",[e,t,n]),wp.hooks.doAction("heartbeat.tick",e,t,n),void(a&&b(a))):void o("empty")}).fail(function(e,t,n){o(t||"unknown",e.status),k.trigger("heartbeat-error",[e,t,n]),wp.hooks.doAction("heartbeat.error",e,t,n)}))}function s(){var e=r()-y.lastTick,t=y.mainInterval;y.suspend||(y.hasFocus?0<y.countdown&&y.tempInterval&&(t=y.tempInterval,y.countdown--,y.countdown<1&&(y.tempInterval=0)):t=12e4,y.minimalInterval&&t<y.minimalInterval&&(t=y.minimalInterval),A.clearTimeout(y.beatTimer),e<t?y.beatTimer=A.setTimeout(function(){a()},t-e):a())}function u(){y.hasFocus=!1}function l(){y.userActivity=r(),y.suspend=!1,y.hasFocus||(y.hasFocus=!0,s())}function d(){y.userActivityEvents=!1,k.off(".wp-heartbeat-active"),F("iframe").each(function(e,t){n(t)&&F(t.contentWindow).off(".wp-heartbeat-active")}),l()}function v(){var e=y.userActivity?r()-y.userActivity:0;3e5<e&&y.hasFocus&&u(),(y.suspendEnabled&&6e5<e||36e5<e)&&(y.suspend=!0),y.userActivityEvents||(k.on("mouseover.wp-heartbeat-active keyup.wp-heartbeat-active touchend.wp-heartbeat-active",function(){d()}),F("iframe").each(function(e,t){n(t)&&F(t.contentWindow).on("mouseover.wp-heartbeat-active keyup.wp-heartbeat-active touchend.wp-heartbeat-active",function(){d()})}),y.userActivityEvents=!0)}function t(){return y.hasFocus}function m(){return y.connectionError}function h(){y.lastTick=0,s()}function p(){y.suspendEnabled=!1}function b(e,t){var n,a=y.tempInterval?y.tempInterval:y.mainInterval;if(e){switch(e){case"fast":case 5:n=5e3;break;case 15:n=15e3;break;case 30:n=3e4;break;case 60:n=6e4;break;case 120:n=12e4;break;case"long-polling":return y.mainInterval=0;default:n=y.originalInterval}y.minimalInterval&&n<y.minimalInterval&&(n=y.minimalInterval),5e3===n?(t=(t=parseInt(t,10)||30)<1||30<t?30:t,y.countdown=t,y.tempInterval=n):(y.countdown=0,y.tempInterval=0,y.mainInterval=n),n!==a&&s()}return y.tempInterval?y.tempInterval/1e3:y.mainInterval/1e3}function I(e,t,n){return!(!e||n&&this.isQueued(e)||(y.queue[e]=t,0))}function f(e){if(e)return y.queue.hasOwnProperty(e)}function w(e){e&&delete y.queue[e]}function g(e){if(e)return this.isQueued(e)?y.queue[e]:T}var k=F(document),y={suspend:!1,suspendEnabled:!0,screenId:"",url:"",lastTick:0,queue:{},mainInterval:60,tempInterval:0,originalInterval:0,minimalInterval:0,countdown:0,connecting:!1,connectionError:!1,errorcount:0,hasConnected:!1,hasFocus:!0,userActivity:0,userActivityEvents:!1,checkFocusTimer:0,beatTimer:0};return e(),{hasFocus:t,connectNow:h,disableSuspend:p,interval:b,hasConnectionError:m,enqueue:I,dequeue:w,isQueued:f,getQueuedItem:g}};A.wp=A.wp||{},A.wp.heartbeat=new e}(jQuery,window);