(function(a){function t(t){for(var r,o,l=t[0],s=t[1],c=t[2],v=0,p=[];v<l.length;v++)o=l[v],Object.prototype.hasOwnProperty.call(n,o)&&n[o]&&p.push(n[o][0]),n[o]=0;for(r in s)Object.prototype.hasOwnProperty.call(s,r)&&(a[r]=s[r]);u&&u(t);while(p.length)p.shift()();return i.push.apply(i,c||[]),e()}function e(){for(var a,t=0;t<i.length;t++){for(var e=i[t],r=!0,l=1;l<e.length;l++){var s=e[l];0!==n[s]&&(r=!1)}r&&(i.splice(t--,1),a=o(o.s=e[0]))}return a}var r={},n={settings:0},i=[];function o(t){if(r[t])return r[t].exports;var e=r[t]={i:t,l:!1,exports:{}};return a[t].call(e.exports,e,e.exports,o),e.l=!0,e.exports}o.m=a,o.c=r,o.d=function(a,t,e){o.o(a,t)||Object.defineProperty(a,t,{enumerable:!0,get:e})},o.r=function(a){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(a,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(a,"__esModule",{value:!0})},o.t=function(a,t){if(1&t&&(a=o(a)),8&t)return a;if(4&t&&"object"===typeof a&&a&&a.__esModule)return a;var e=Object.create(null);if(o.r(e),Object.defineProperty(e,"default",{enumerable:!0,value:a}),2&t&&"string"!=typeof a)for(var r in a)o.d(e,r,function(t){return a[t]}.bind(null,r));return e},o.n=function(a){var t=a&&a.__esModule?function(){return a["default"]}:function(){return a};return o.d(t,"a",t),t},o.o=function(a,t){return Object.prototype.hasOwnProperty.call(a,t)},o.p="/";var l=window["webpackJsonp"]=window["webpackJsonp"]||[],s=l.push.bind(l);l.push=t,l=l.slice();for(var c=0;c<l.length;c++)t(l[c]);var u=s;i.push([5,"chunk-vendors"]),e()})({"402c":function(a,t,e){"use strict";var r=e("2b0e"),n=e("f309");r["a"].use(n["a"]),t["a"]=new n["a"]({})},4425:function(a,t,e){"use strict";var r=e("ae68"),n=e.n(r);n.a},5:function(a,t,e){a.exports=e("c699")},ae68:function(a,t,e){},c699:function(a,t,e){"use strict";e.r(t);e("e260"),e("e6cf"),e("cca6"),e("a79d");var r=e("2b0e"),n=function(){var a=this,t=a.$createElement,e=a._self._c||t;return e("v-app",[e("v-app-bar",{attrs:{fixed:"",color:"white",elevation:"1"}},[e("v-app-bar-nav-icon",[e("i",{staticClass:"fa fa-arrow-left fa-2x",staticStyle:{color:"#000000"},attrs:{"aria-hidden":"true"}})]),e("v-spacer"),e("v-toolbar-title",{attrs:{id:"Title"}},[a._v("Edit Profile")]),e("v-spacer")],1),e("v-main",{attrs:{id:"main"}},[e("v-container",[e("div",{staticClass:"content"},[e("image-input",{model:{value:a.avatar,callback:function(t){a.avatar=t},expression:"avatar"}},[e("div",{attrs:{slot:"activator"},slot:"activator"},[a.userData.avatar?e("v-avatar",{directives:[{name:"ripple",rawName:"v-ripple"}],staticClass:"mb-3",attrs:{size:"150px"}},[e("img",{attrs:{src:a.avatar,alt:"avatar"}})]):e("v-avatar",{directives:[{name:"ripple",rawName:"v-ripple"}],staticClass:"grey lighten-3 mb-3",attrs:{size:"150px"}},[e("span",[a._v("Click to add avatar")])])],1)]),e("v-slide-x-transition",[a.userData.avatar&&0==a.saved?e("div",[e("v-btn",{staticClass:"primary",attrs:{loading:a.saving},on:{click:a.uploadImage}},[a._v("Save Avatar")])],1):a._e()])],1)])],1)],1)},i=[],o=function(){var a=this,t=a.$createElement,e=a._self._c||t;return e("div",[e("div",{on:{click:function(t){return a.launchFilePicker()}}},[a._t("activator")],2),e("input",{ref:"file",staticStyle:{display:"none"},attrs:{type:"file",name:a.uploadFieldName},on:{change:function(t){return a.onFileChange(t.target.name,t.target.files)}}}),e("v-dialog",{attrs:{"max-width":"300"},model:{value:a.errorDialog,callback:function(t){a.errorDialog=t},expression:"errorDialog"}},[e("v-card",[e("v-card-text",{staticClass:"subheading"},[a._v(a._s(a.errorText))]),e("v-card-actions",[e("v-spacer"),e("v-btn",{attrs:{flat:""},on:{click:function(t){a.errorDialog=!1}}},[a._v("Got it!")])],1)],1)],1)],1)},l=[],s=(e("d3b7"),e("ac1f"),e("3ca3"),e("466d"),e("ddb0"),e("2b3d"),{name:"image-input",data:function(){return{errorDialog:null,errorText:"",uploadFieldName:"file",maxSize:1024}},props:{value:Object},methods:{launchFilePicker:function(){this.$refs.file.click()},onFileChange:function(a,t){var e=this.maxSize,r=t[0];if(t.length>0){var n=r.size/e/e;if(r.type.match("image.*"))if(n>1)this.errorDialog=!0,this.errorText="Your file is too big! Please select an image under 1MB";else{var i=new FormData,o=URL.createObjectURL(r);i.append(a,r),this.$emit("input",{formData:i,imageURL:o})}else this.errorDialog=!0,this.errorText="Please choose an image file"}}}}),c=s,u=e("2877"),v=e("6544"),p=e.n(v),f=e("8336"),d=e("b0af"),g=e("99d9"),h=e("169a"),m=e("2fa4"),b=Object(u["a"])(c,o,l,!1,null,null,null),y=b.exports;p()(b,{VBtn:f["a"],VCard:d["a"],VCardActions:g["a"],VCardText:g["c"],VDialog:h["a"],VSpacer:m["a"]});var x=e("bc3a"),w=e.n(x),_={name:"App",components:{ImageInput:y},data:function(){return{userData:null,saving:!1,saved:!1,avatar:null}},mounted:function(){var a=this;w.a.get("/public/profile/getUserData").then((function(t){return a.userData=t["data"]})),this.setOriginalAvatar()},methods:{setOriginalAvatar:function(){this.avatar=this.userData.avatar},uploadImage:function(){var a=this;this.saving=!0,setTimeout((function(){return a.savedAvatar()}),1e3)},savedAvatar:function(){this.saving=!1,this.saved=!0}}},O=_,D=(e("4425"),e("7496")),V=e("40dc"),j=e("5bc1"),C=e("8212"),S=e("a523"),T=e("f6c4"),k=e("0789"),P=e("2a7f"),A=e("269a"),F=e.n(A),M=e("5607"),z=Object(u["a"])(O,n,i,!1,null,null,null),B=z.exports;p()(z,{VApp:D["a"],VAppBar:V["a"],VAppBarNavIcon:j["a"],VAvatar:C["a"],VBtn:f["a"],VContainer:S["a"],VMain:T["a"],VSlideXTransition:k["c"],VSpacer:m["a"],VToolbarTitle:P["a"]}),F()(z,{Ripple:M["a"]});var I=e("402c");e("15f5"),e("7051");r["a"].config.productionTip=!1,new r["a"]({vuetify:I["a"],render:function(a){return a(B)}}).$mount("#app")}});
//# sourceMappingURL=settings.0c062a75.js.map