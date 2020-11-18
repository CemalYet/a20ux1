(function(e){function a(a){for(var r,o,l=a[0],s=a[1],c=a[2],p=0,f=[];p<l.length;p++)o=l[p],Object.prototype.hasOwnProperty.call(n,o)&&n[o]&&f.push(n[o][0]),n[o]=0;for(r in s)Object.prototype.hasOwnProperty.call(s,r)&&(e[r]=s[r]);u&&u(a);while(f.length)f.shift()();return i.push.apply(i,c||[]),t()}function t(){for(var e,a=0;a<i.length;a++){for(var t=i[a],r=!0,l=1;l<t.length;l++){var s=t[l];0!==n[s]&&(r=!1)}r&&(i.splice(a--,1),e=o(o.s=t[0]))}return e}var r={},n={settings:0},i=[];function o(a){if(r[a])return r[a].exports;var t=r[a]={i:a,l:!1,exports:{}};return e[a].call(t.exports,t,t.exports,o),t.l=!0,t.exports}o.m=e,o.c=r,o.d=function(e,a,t){o.o(e,a)||Object.defineProperty(e,a,{enumerable:!0,get:t})},o.r=function(e){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o.t=function(e,a){if(1&a&&(e=o(e)),8&a)return e;if(4&a&&"object"===typeof e&&e&&e.__esModule)return e;var t=Object.create(null);if(o.r(t),Object.defineProperty(t,"default",{enumerable:!0,value:e}),2&a&&"string"!=typeof e)for(var r in e)o.d(t,r,function(a){return e[a]}.bind(null,r));return t},o.n=function(e){var a=e&&e.__esModule?function(){return e["default"]}:function(){return e};return o.d(a,"a",a),a},o.o=function(e,a){return Object.prototype.hasOwnProperty.call(e,a)},o.p="/";var l=window["webpackJsonp"]=window["webpackJsonp"]||[],s=l.push.bind(l);l.push=a,l=l.slice();for(var c=0;c<l.length;c++)a(l[c]);var u=s;i.push([5,"chunk-vendors"]),t()})({"402c":function(e,a,t){"use strict";var r=t("2b0e"),n=t("f309");r["a"].use(n["a"]),a["a"]=new n["a"]({})},4425:function(e,a,t){"use strict";var r=t("ae68"),n=t.n(r);n.a},5:function(e,a,t){e.exports=t("c699")},ae68:function(e,a,t){},c699:function(e,a,t){"use strict";t.r(a);t("e260"),t("e6cf"),t("cca6"),t("a79d");var r=t("2b0e"),n=function(){var e=this,a=e.$createElement,t=e._self._c||a;return t("v-app",[t("v-app-bar",{attrs:{fixed:"",color:"white",elevation:"1"}},[t("v-app-bar-nav-icon",{on:{click:function(a){return e.profile()}}},[t("i",{staticClass:"fa fa-arrow-left fa-2x",staticStyle:{color:"#000000"},attrs:{"aria-hidden":"true"}})]),t("v-spacer"),t("v-toolbar-title",{attrs:{id:"Title"}},[e._v("Edit Profile")]),t("v-spacer")],1),t("v-main",{attrs:{id:"main"}},[t("v-container",[t("div",{staticClass:"content"},[t("image-input",{on:{input:function(a){return e.changeAvatar(a)}}},[t("div",{attrs:{slot:"activator"},slot:"activator"},[t("v-avatar",{directives:[{name:"ripple",rawName:"v-ripple"}],attrs:{size:"150px"}},[t("img",{attrs:{src:e.userData.avatar}})])],1)]),t("br"),t("br"),t("v-slide-x-transition",[0==e.saved?t("div",[t("v-btn",{staticClass:"primary",attrs:{loading:e.saving},on:{click:e.uploadImage}},[e._v("Save Avatar")])],1):e._e()]),t("form",{staticClass:"settingsForm",on:{submit:function(a){return a.preventDefault(),e.handleSubmit(a)}}},[t("div",{staticClass:"field"},[t("input",{directives:[{name:"model",rawName:"v-model",value:e.username,expression:"username"}],attrs:{type:"text",name:"username"},domProps:{value:e.username},on:{input:function(a){a.target.composing||(e.username=a.target.value)}}})]),t("div",{staticClass:"field"},[t("input",{directives:[{name:"model",rawName:"v-model",value:e.email,expression:"email"},{name:"validate",rawName:"v-validate",value:"required|email",expression:"'required|email'"}],attrs:{type:"email",name:"email",placeholder:"Email"},domProps:{value:e.email},on:{input:function(a){a.target.composing||(e.email=a.target.value)}}})]),t("button",{staticClass:"ui button primary"},[e._v("Update profile")])])],1)])],1)],1)},i=[],o=(t("b0c0"),function(){var e=this,a=e.$createElement,t=e._self._c||a;return t("div",[t("div",{on:{click:function(a){return e.launchFilePicker()}}},[e._t("activator")],2),t("input",{ref:"file",staticStyle:{display:"none"},attrs:{type:"file",name:e.uploadFieldName},on:{change:function(a){return e.onFileChange(a.target.name,a.target.files)}}}),t("v-dialog",{attrs:{"max-width":"300"},model:{value:e.errorDialog,callback:function(a){e.errorDialog=a},expression:"errorDialog"}},[t("v-card",[t("v-card-text",{staticClass:"subheading"},[e._v(e._s(e.errorText))]),t("v-card-actions",[t("v-spacer"),t("v-btn",{attrs:{flat:""},on:{click:function(a){e.errorDialog=!1}}},[e._v("Got it!")])],1)],1)],1)],1)}),l=[],s=(t("d3b7"),t("ac1f"),t("3ca3"),t("466d"),t("ddb0"),t("2b3d"),{name:"image-input",data:function(){return{errorDialog:null,errorText:"",uploadFieldName:"file",maxSize:1024}},props:{value:Object},methods:{launchFilePicker:function(){this.$refs.file.click()},onFileChange:function(e,a){var t=this.maxSize,r=a[0];if(a.length>0){var n=r.size/t/t;if(r.type.match("image.*"))if(n>1)this.errorDialog=!0,this.errorText="Your file is too big! Please select an image under 1MB";else{var i=new FormData,o=URL.createObjectURL(r);i.append(e,r),this.$emit("input",{formData:i,imageURL:o})}else this.errorDialog=!0,this.errorText="Please choose an image file"}}}}),c=s,u=t("2877"),p=t("6544"),f=t.n(p),v=t("8336"),d=t("b0af"),m=t("99d9"),g=t("169a"),h=t("2fa4"),b=Object(u["a"])(c,o,l,!1,null,null,null),y=b.exports;f()(b,{VBtn:v["a"],VCard:d["a"],VCardActions:m["a"],VCardText:m["c"],VDialog:g["a"],VSpacer:h["a"]});var x=t("bc3a"),w=t.n(x),_={name:"App",components:{ImageInput:y},data:function(){return{userData:null,saving:!1,saved:!1,username:"",email:""}},beforeCreate:function(){var e=this;w.a.get("/public/profile/getUserData").then((function(a){return e.userData=a["data"]}))},methods:{profile:function(){window.location.href="/public/profile"},changeAvatar:function(e){this.userData.avatar=e.imageURL},uploadImage:function(){var e=this;this.saving=!0,setTimeout((function(){return e.savedAvatar()}),1e3)},savedAvatar:function(){this.saving=!1,this.saved=!0},handleSubmit:function(){console.log("Name".this.name),console.log("Gender".this.gender)}}},D=_,V=(t("4425"),t("7496")),C=t("40dc"),O=t("5bc1"),S=t("8212"),P=t("a523"),j=t("f6c4"),T=t("0789"),k=t("2a7f"),A=t("269a"),F=t.n(A),N=t("5607"),M=Object(u["a"])(D,n,i,!1,null,null,null),U=M.exports;f()(M,{VApp:V["a"],VAppBar:C["a"],VAppBarNavIcon:O["a"],VAvatar:S["a"],VBtn:v["a"],VContainer:P["a"],VMain:j["a"],VSlideXTransition:T["c"],VSpacer:h["a"],VToolbarTitle:k["a"]}),F()(M,{Ripple:N["a"]});var B=t("402c");t("15f5"),t("7051");r["a"].config.productionTip=!1,new r["a"]({vuetify:B["a"],render:function(e){return e(U)}}).$mount("#app")}});
//# sourceMappingURL=settings.fa1e4535.js.map