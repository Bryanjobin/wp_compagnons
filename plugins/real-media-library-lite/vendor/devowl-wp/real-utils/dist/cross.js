(()=>{"use strict";var t={n:i=>{var e=i&&i.__esModule?()=>i.default:()=>i;return t.d(e,{a:e}),e},d:(i,e)=>{for(var o in e)t.o(e,o)&&!t.o(i,o)&&Object.defineProperty(i,o,{enumerable:!0,get:e[o]})},o:(t,i)=>Object.prototype.hasOwnProperty.call(t,i)};const i=jQuery;var e=t.n(i);const o=devowlWp_utils,n=()=>window[o.BaseOptions.getPureSlug("real-utils",!0)].others;let a,s;function r(){return a||(a=(0,o.createRequestFactory)(window[o.BaseOptions.getPureSlug("real-utils",!0)]))}function l(){return s||(s=(0,o.createLocalizationFactory)("devowl-wp-real-utils"))}const c=function(){return l().__(...arguments)},p={path:"/cross/:slug/:action/dismiss",method:o.RouteHttpVerb.DELETE},d="crossSellingPointer";class h{constructor(t,i,e,o){this.slug=void 0,this.action=void 0,this.position=void 0,this.$handler=void 0,this.slug=i,this.action=e,this.position=o,this.$handler=t,this.init()}static waitForVisibleElement(t,i,o,n){if(!this.isActionAvailable(i,o))return!1;const a=e()(t);return a.length&&!a.data(d)&&(a.data(d,!0),new h(a,i,o,n)),a.length>0}static isActionAvailable(t,i){return!!n().cross?.[t]?.[i]}close(t,i){t.preventDefault();const e=this.$handler.pointer("widget").find('input[type="checkbox"]').is(":checked");if(this.$handler.pointer("close"),this.$handler.pointer("destroy"),i){const{link:t}=this.getAction();window.open(t,"_blank")}!function(){r().request(...arguments)}({location:p,params:{slug:this.slug,action:this.action,force:e}})}buttons(){const t=e()(`<a class="button" href="#">${c("Not now")}</a>`).click((t=>{this.close(t,!1)})),i=e()(`<a class="button button-primary" href="#">${c("Learn more!")}</a>`).click((t=>{this.close(t,!0)}));return e()('<div class="real-utils-pointer-buttons" />').append(i,t)}getAction(){return n().cross?.[this.slug][this.action]}init(){const{position:t}=this,{title:i,description:e,image:o}=this.getAction(),n=`<label><input type="checkbox" /> ${c("Never show this popup again")}</label>`;this.$handler.pointer({pointerClass:"wp-pointer real-utils-cross-pointer",content:`<h3>${i}</h3><p><img src="${o}" />${e}${n}</p>`,buttons:this.buttons.bind(this),position:t}).pointer("open").pointer("widget").find("img").get(0).onload=()=>this.$handler.pointer("reposition")}}const u="real-media-library",b="real-category-library",m="real-physical-media",g=()=>e()("select#parent").length&&h.isActionAvailable(b,"add-category")&&e()("body.wp-admin.edit-tags-php:not(.woocommerce-page,.post-type-attachment) form#addtag #submit").one("click",(function(){new h(e()(this),b,"add-category","bottom")})),w=()=>e()("select#parent").length&&h.isActionAvailable(b,"add-wc-category")&&e()("body.wp-admin.edit-tags-php.woocommerce-page form#addtag #submit").one("click",(function(){new h(e()(this),b,"add-wc-category","bottom")}));class y{static onChange(){new h(e()(this),b,"assign"),e()(y.SELECTOR).off("change",y.onChange)}static bind(){h.isActionAvailable(b,"assign")&&e()(this.SELECTOR).one("change",this.onChange)}}y.SELECTOR='body.wp-admin.post-php:not(.post-type-attachment) #categorychecklist input[type="checkbox"]';class v{static onClick(t){const i=e()(this).attr("href");return new h(e()(this),b,"pagination"),e()(this).pointer("widget").find(".button").click((()=>{setTimeout((()=>window.open(i,"_self")),1e3)})),e()(v.SELECTOR).off("click",v.onClick),t.preventDefault(),!1}static bind(){h.isActionAvailable(b,"pagination")&&e()(this.SELECTOR).one("click",this.onClick)}}v.SELECTOR="body.wp-admin.edit-php:not(.post-type-attachment) .tablenav-pages .pagination-links a",e()(document).ready((()=>{setTimeout((function t(){let i=!1;!i&&(i=h.waitForVisibleElement("body.wp-admin.upload-php .attachment-info > .details:visible, body.wp-admin.post-php.post-type-attachment #post-body-content #titlewrap:visible",u,"attachment-details")),!i&&(i=h.waitForVisibleElement("body.wp-admin.plugins-php #wpbody-content > div.wrap > h1:first","real-cookie-banner","gdpr-compliant")),!i&&(i=h.waitForVisibleElement('body > div > .media-modal.wp-core-ui .media-frame-router button[role="tab"]:eq(1).active',u,"insert-dialog")),!i&&(i=h.waitForVisibleElement("body.wp-admin .editor-post-taxonomies__hierarchical-terms-list:visible",b,"assign","bottom")),!i&&(i=h.waitForVisibleElement("body.wp-admin.upload-php #wpbody-content .upload-ui .button-hero:visible, body.wp-admin.media-new-php #media-items .media-item:first:visible",m,"upload")),!i&&setTimeout(t,1e3)}),1e3),g(),w(),h.isActionAvailable(m,"move")&&window.rml?.hooks.register("attachment/move/finished",((t,i)=>{new h(e()(`.rml-container:visible li[data-li-id="${i}"]`),m,"move")})),y.bind(),v.bind()}))})();
//# sourceMappingURL=https://sourcemap.devowl.io/real-media-library/4.21.9/f3fd26af178524d7ef9ddeee53dfc422/cross.js.map
