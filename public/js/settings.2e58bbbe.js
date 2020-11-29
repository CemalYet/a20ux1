(function(e){function t(t){for(var r,o,s=t[0],l=t[1],u=t[2],p=0,f=[];p<s.length;p++)o=s[p],Object.prototype.hasOwnProperty.call(n,o)&&n[o]&&f.push(n[o][0]),n[o]=0;for(r in l)Object.prototype.hasOwnProperty.call(l,r)&&(e[r]=l[r]);c&&c(t);while(f.length)f.shift()();return i.push.apply(i,u||[]),a()}function a(){for(var e,t=0;t<i.length;t++){for(var a=i[t],r=!0,s=1;s<a.length;s++){var l=a[s];0!==n[l]&&(r=!1)}r&&(i.splice(t--,1),e=o(o.s=a[0]))}return e}var r={},n={settings:0},i=[];function o(t){if(r[t])return r[t].exports;var a=r[t]={i:t,l:!1,exports:{}};return e[t].call(a.exports,a,a.exports,o),a.l=!0,a.exports}o.m=e,o.c=r,o.d=function(e,t,a){o.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:a})},o.r=function(e){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o.t=function(e,t){if(1&t&&(e=o(e)),8&t)return e;if(4&t&&"object"===typeof e&&e&&e.__esModule)return e;var a=Object.create(null);if(o.r(a),Object.defineProperty(a,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)o.d(a,r,function(t){return e[t]}.bind(null,r));return a},o.n=function(e){var t=e&&e.__esModule?function(){return e["default"]}:function(){return e};return o.d(t,"a",t),t},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},o.p="/";var s=window["webpackJsonp"]=window["webpackJsonp"]||[],l=s.push.bind(s);s.push=t,s=s.slice();for(var u=0;u<s.length;u++)t(s[u]);var c=l;i.push([5,"chunk-vendors"]),a()})({"402c":function(e,t,a){"use strict";var r=a("2b0e"),n=a("f309");r["a"].use(n["a"]),t["a"]=new n["a"]({})},4425:function(e,t,a){"use strict";var r=a("ae68"),n=a.n(r);n.a},5:function(e,t,a){e.exports=a("c699")},ae68:function(e,t,a){},c699:function(e,t,a){"use strict";a.r(t);a("e260"),a("e6cf"),a("cca6"),a("a79d");var r=a("2b0e"),n=function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("v-app",[a("v-app-bar",{attrs:{fixed:"",color:"white",elevation:"1"}},[a("v-app-bar-nav-icon",{on:{click:function(t){return e.profile()}}},[a("i",{staticClass:"fa fa-arrow-left fa-2x",staticStyle:{color:"#000000"},attrs:{"aria-hidden":"true"}})]),a("v-spacer"),a("v-toolbar-title",{attrs:{id:"Title"}},[e._v("Edit Profile")]),a("v-spacer")],1),a("v-main",{attrs:{id:"main"}},[a("v-container",[a("div",{staticClass:"content"},["settings"==e.tab?a("div",[a("image-input",{staticClass:"avatar",on:{input:function(t){return e.changeAvatar(t)}}},[a("div",{attrs:{slot:"activator"},slot:"activator"},[a("v-avatar",{directives:[{name:"ripple",rawName:"v-ripple"}],attrs:{size:"150px"}},[a("img",{attrs:{src:e.userData.avatar}})])],1)]),e._v(" "+e._s(e.username)+" "),a("form",{staticClass:"settingsForm",on:{submit:function(t){return t.preventDefault(),e.handleSubmit()}}},[a("div",{staticClass:"field"},[a("label",[e._v("Username")]),a("input",{directives:[{name:"model",rawName:"v-model",value:e.username,expression:"username"}],attrs:{type:"text",name:"username"},domProps:{value:e.username},on:{input:function(t){t.target.composing||(e.username=t.target.value)}}})]),a("div",{staticClass:"field"},[a("label",[e._v("Email")]),a("input",{directives:[{name:"model",rawName:"v-model",value:e.email,expression:"email"},{name:"validate",rawName:"v-validate",value:"required|email",expression:"'required|email'"}],attrs:{type:"email",name:"email"},domProps:{value:e.email},on:{input:function(t){t.target.composing||(e.email=t.target.value)}}})]),a("button",{staticClass:"submitButton",attrs:{type:"submit"}},[e._v("Update profile")]),a("button",{staticClass:"submitButton",attrs:{type:"button"},on:{click:function(t){e.tab="password"}}},[e._v("Change Password")])])],1):e._e(),"password"==e.tab?a("div",[e._v(" supp ")]):e._e()])])],1)],1)},i=[],o=function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("div",[a("div",{on:{click:function(t){return e.launchFilePicker()}}},[e._t("activator")],2),a("input",{ref:"file",staticStyle:{display:"none"},attrs:{type:"file",name:e.uploadFieldName},on:{change:function(t){return e.onFileChange(t.target.name,t.target.files)}}}),a("v-dialog",{attrs:{"max-width":"300"},model:{value:e.errorDialog,callback:function(t){e.errorDialog=t},expression:"errorDialog"}},[a("v-card",[a("v-card-text",{staticClass:"subheading"},[e._v(e._s(e.errorText))]),a("v-card-actions",[a("v-spacer"),a("v-btn",{attrs:{flat:""},on:{click:function(t){e.errorDialog=!1}}},[e._v("Got it!")])],1)],1)],1)],1)},s=[],l=(a("d3b7"),a("ac1f"),a("3ca3"),a("466d"),a("ddb0"),a("2b3d"),{name:"image-input",data:function(){return{errorDialog:null,errorText:"",uploadFieldName:"file",maxSize:1024}},props:{value:Object},methods:{launchFilePicker:function(){this.$refs.file.click()},onFileChange:function(e,t){var a=this.maxSize,r=t[0];if(t.length>0){var n=r.size/a/a;if(r.type.match("image.*"))if(n>1)this.errorDialog=!0,this.errorText="Your file is too big! Please select an image under 1MB";else{var i=new FormData,o=URL.createObjectURL(r);i.append(e,r),this.$emit("input",{formData:i,imageURL:o})}else this.errorDialog=!0,this.errorText="Please choose an image file"}}}}),u=l,c=a("2877"),p=a("6544"),f=a.n(p),v=a("8336"),d=a("b0af"),m=a("99d9"),g=a("169a"),h=a("2fa4"),b=Object(c["a"])(u,o,s,!1,null,null,null),y=b.exports;f()(b,{VBtn:v["a"],VCard:d["a"],VCardActions:m["a"],VCardText:m["c"],VDialog:g["a"],VSpacer:h["a"]});var w=a("bc3a"),x=a.n(w),_={name:"App",components:{ImageInput:y},data:function(){return{userData:null,saving:!1,saved:!1,username:"",email:"",tab:"settings"}},mounted:function(){var e=this;x.a.get("/public/profile/getUserData").then((function(t){return e.userData=t["data"]})),console.log(this.userData)},methods:{profile:function(){window.location.href="/public/profile"},changeAvatar:function(e){this.userData.avatar=e.imageURL},uploadImage:function(){var e=this;this.saving=!0,setTimeout((function(){return e.savedAvatar()}),1e3)},savedAvatar:function(){this.saving=!1,this.saved=!0},initForm:function(){this.username=this.userData.userName,this.email=this.userData.emailAddress},handleSubmit:function(){console.log(this.userData)}}},D=_,C=(a("4425"),a("7496")),O=a("40dc"),P=a("5bc1"),V=a("8212"),j=a("a523"),S=a("f6c4"),T=a("2a7f"),k=a("269a"),A=a.n(k),F=a("5607"),N=Object(c["a"])(D,n,i,!1,null,null,null),U=N.exports;f()(N,{VApp:C["a"],VAppBar:O["a"],VAppBarNavIcon:P["a"],VAvatar:V["a"],VContainer:j["a"],VMain:S["a"],VSpacer:h["a"],VToolbarTitle:T["a"]}),A()(N,{Ripple:F["a"]});var B=a("402c");a("15f5"),a("7051");r["a"].config.productionTip=!1,new r["a"]({vuetify:B["a"],render:function(e){return e(U)}}).$mount("#app")}});
//# sourceMappingURL=settings.2e58bbbe.js.map