!function(e){var t={};function n(r){if(t[r])return t[r].exports;var o=t[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)n.d(r,o,function(t){return e[t]}.bind(null,o));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=7)}([function(e,t){!function(){e.exports=this.wp.data}()},function(e,t){!function(){e.exports=this.wp.i18n}()},function(e,t){!function(){e.exports=this.wp.element}()},function(e,t){!function(){e.exports=this.wp.compose}()},function(e,t){!function(){e.exports=this.wp.editPost}()},function(e,t){!function(){e.exports=this.wp.components}()},function(e,t){!function(){e.exports=this.wp.plugins}()},function(e,t,n){"use strict";n.r(t);var r=n(1),o=n(2),i=n(3),c=n(0),u=n(4),l=n(5),s=n(6);function f(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function a(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?f(Object(n),!0).forEach((function(t){p(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):f(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}function p(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}var b=Object(i.compose)([Object(c.withSelect)((function(e){return{hideTitle:e("core/editor").getEditedPostAttribute("meta")._genesis_block_theme_hide_title}})),Object(c.withDispatch)((function(e,t,n){var r=n.select;return{onUpdate:function(t){var n=a(a({},r("core/editor").getEditedPostAttribute("meta")),{},{_genesis_block_theme_hide_title:t});e("core/editor").editPost({meta:n})}}}))])((function(e){var t=e.hideTitle,n=e.onUpdate;return React.createElement(o.Fragment,null,React.createElement(u.PluginPostStatusInfo,{className:"edit-post-hideTitle"},React.createElement(l.CheckboxControl,{label:Object(r.__)("Hide Page Title","genesis-block-theme"),checked:t,onChange:function(){return n(!t)}})))}));Object(s.registerPlugin)("genesis-block-theme-title-toggle",{render:b})}]);;
