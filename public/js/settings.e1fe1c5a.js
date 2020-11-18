(function(e){function a(a){for(var r,s,o=a[0],u=a[1],l=a[2],d=0,p=[];d<o.length;d++)s=o[d],Object.prototype.hasOwnProperty.call(n,s)&&n[s]&&p.push(n[s][0]),n[s]=0;for(r in u)Object.prototype.hasOwnProperty.call(u,r)&&(e[r]=u[r]);c&&c(a);while(p.length)p.shift()();return i.push.apply(i,l||[]),t()}function t(){for(var e,a=0;a<i.length;a++){for(var t=i[a],r=!0,o=1;o<t.length;o++){var u=t[o];0!==n[u]&&(r=!1)}r&&(i.splice(a--,1),e=s(s.s=t[0]))}return e}var r={},n={settings:0},i=[];function s(a){if(r[a])return r[a].exports;var t=r[a]={i:a,l:!1,exports:{}};return e[a].call(t.exports,t,t.exports,s),t.l=!0,t.exports}s.m=e,s.c=r,s.d=function(e,a,t){s.o(e,a)||Object.defineProperty(e,a,{enumerable:!0,get:t})},s.r=function(e){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},s.t=function(e,a){if(1&a&&(e=s(e)),8&a)return e;if(4&a&&"object"===typeof e&&e&&e.__esModule)return e;var t=Object.create(null);if(s.r(t),Object.defineProperty(t,"default",{enumerable:!0,value:e}),2&a&&"string"!=typeof e)for(var r in e)s.d(t,r,function(a){return e[a]}.bind(null,r));return t},s.n=function(e){var a=e&&e.__esModule?function(){return e["default"]}:function(){return e};return s.d(a,"a",a),a},s.o=function(e,a){return Object.prototype.hasOwnProperty.call(e,a)},s.p="/";var o=window["webpackJsonp"]=window["webpackJsonp"]||[],u=o.push.bind(o);o.push=a,o=o.slice();for(var l=0;l<o.length;l++)a(o[l]);var c=u;i.push([5,"chunk-vendors"]),t()})({"402c":function(e,a,t){"use strict";var r=t("2b0e"),n=t("f309");r["a"].use(n["a"]),a["a"]=new n["a"]({})},4425:function(e,a,t){"use strict";var r=t("ae68"),n=t.n(r);n.a},5:function(e,a,t){e.exports=t("c699")},ae68:function(e,a,t){},c699:function(e,a,t){"use strict";t.r(a);t("e260"),t("e6cf"),t("cca6"),t("a79d");var r=t("2b0e"),n=function(){var e=this,a=e.$createElement,t=e._self._c||a;return t("v-app",[t("v-app-bar",{attrs:{fixed:"",color:"white",elevation:"1"}},[t("v-app-bar-nav-icon",{on:{click:function(a){return e.profile()}}},[t("i",{staticClass:"fa fa-arrow-left fa-2x",staticStyle:{color:"#000000"},attrs:{"aria-hidden":"true"}})]),t("v-spacer"),t("v-toolbar-title",{attrs:{id:"Title"}},[e._v("Edit Profile")]),t("v-spacer")],1),t("v-main",{attrs:{id:"main"}},[t("v-container",[t("div",{staticClass:"content"},["update"==e.tab?t("div",[t("image-input",{staticClass:"avatar",on:{input:function(a){return e.changeAvatar(a)}}},[t("div",{attrs:{slot:"activator"},slot:"activator"},[t("v-avatar",{directives:[{name:"ripple",rawName:"v-ripple"}],attrs:{size:"150px"}},[t("img",{attrs:{src:e.userData.avatar}})])],1)]),t("form",{staticClass:"settingsForm",on:{submit:function(a){return a.preventDefault(),e.updateProfile()}}},[t("div",{staticClass:"field"},[t("label",[e._v("Username")]),t("input",{directives:[{name:"model",rawName:"v-model",value:e.username,expression:"username"}],attrs:{type:"text",name:"username"},domProps:{value:e.username},on:{input:function(a){a.target.composing||(e.username=a.target.value)}}})]),t("div",{staticClass:"field"},[t("label",[e._v("Email")]),t("input",{directives:[{name:"model",rawName:"v-model",value:e.email,expression:"email"},{name:"validate",rawName:"v-validate",value:"required|email",expression:"'required|email'"}],attrs:{type:"email",name:"email"},domProps:{value:e.email},on:{input:function(a){a.target.composing||(e.email=a.target.value)}}})]),t("button",{staticClass:"submitButton",attrs:{type:"submit"}},[e._v("Update profile")]),t("button",{staticClass:"submitButton",attrs:{type:"button"},on:{click:function(a){e.tab="password",e.output=""}}},[e._v("Change Password")])])],1):e._e(),"password"==e.tab?t("div",[t("form",{staticClass:"settingsForm",on:{submit:function(a){return a.preventDefault(),e.changePassword()}}},[t("div",{staticClass:"field"},[t("label",[e._v("Current Password")]),t("input",{directives:[{name:"model",rawName:"v-model",value:e.password,expression:"password"},{name:"validate",rawName:"v-validate",value:"required",expression:"'required'"}],attrs:{type:"password",name:"password","data-vv-as":"current password"},domProps:{value:e.password},on:{input:function(a){a.target.composing||(e.password=a.target.value)}}})]),t("div",{staticClass:"field"},[t("label",[e._v("New Password")]),t("input",{directives:[{name:"model",rawName:"v-model",value:e.newPassword,expression:"newPassword"},{name:"validate",rawName:"v-validate",value:"required",expression:"'required'"}],attrs:{type:"password",name:"newPassword","data-vv-as":"new password"},domProps:{value:e.newPassword},on:{input:function(a){a.target.composing||(e.newPassword=a.target.value)}}})]),t("div",{staticClass:"field"},[t("label",[e._v("Confirm New Password")]),t("input",{directives:[{name:"model",rawName:"v-model",value:e.confirmPassword,expression:"confirmPassword"},{name:"validate",rawName:"v-validate",value:"required|confirmed:newPassword",expression:"'required|confirmed:newPassword'"}],attrs:{type:"password",name:"confirmPassword","data-vv-as":"confirm password"},domProps:{value:e.confirmPassword},on:{input:function(a){a.target.composing||(e.confirmPassword=a.target.value)}}})]),t("button",{staticClass:"submitButton",attrs:{type:"submit"}},[e._v("Update password")]),t("button",{staticClass:"submitButton",attrs:{type:"button"},on:{click:function(a){e.tab="update"}}},[e._v("Go Back")])])]):e._e(),e._v(" "+e._s(e.output)+" ")])])],1)],1)},i=[],s=function(){var e=this,a=e.$createElement,t=e._self._c||a;return t("div",[t("div",{on:{click:function(a){return e.launchFilePicker()}}},[e._t("activator")],2),t("input",{ref:"file",staticStyle:{display:"none"},attrs:{type:"file",name:e.uploadFieldName},on:{change:function(a){return e.onFileChange(a.target.name,a.target.files)}}}),t("v-dialog",{attrs:{"max-width":"300"},model:{value:e.errorDialog,callback:function(a){e.errorDialog=a},expression:"errorDialog"}},[t("v-card",[t("v-card-text",{staticClass:"subheading"},[e._v(e._s(e.errorText))]),t("v-card-actions",[t("v-spacer"),t("v-btn",{attrs:{flat:""},on:{click:function(a){e.errorDialog=!1}}},[e._v("Got it!")])],1)],1)],1)],1)},o=[],u=(t("d3b7"),t("ac1f"),t("3ca3"),t("466d"),t("ddb0"),t("2b3d"),{name:"image-input",data:function(){return{errorDialog:null,errorText:"",uploadFieldName:"file",maxSize:1024}},props:{value:Object},methods:{launchFilePicker:function(){this.$refs.file.click()},onFileChange:function(e,a){var t=this.maxSize,r=a[0];if(a.length>0){var n=r.size/t/t;if(r.type.match("image.*"))if(n>1)this.errorDialog=!0,this.errorText="Your file is too big! Please select an image under 1MB";else{var i=new FormData,s=URL.createObjectURL(r);i.append(e,r),this.$emit("input",{formData:i,imageURL:s})}else this.errorDialog=!0,this.errorText="Please choose an image file"}}}}),l=u,c=t("2877"),d=t("6544"),p=t.n(d),v=t("8336"),f=t("b0af"),m=t("99d9"),w=t("169a"),g=t("2fa4"),h=Object(c["a"])(l,s,o,!1,null,null,null),b=h.exports;p()(h,{VBtn:v["a"],VCard:f["a"],VCardActions:m["a"],VCardText:m["c"],VDialog:w["a"],VSpacer:g["a"]});var P=t("bc3a"),y=t.n(P),x={name:"App",components:{ImageInput:b},data:function(){return{userData:null,avatar:null,username:"",email:"",password:"",newPassword:"",confirmPassword:"",saving:!1,saved:!1,tab:"update",output:""}},mounted:function(){var e=this;y.a.get("/public/profile/getUserData").then((function(a){return e.userData=a["data"]})),this.initForm()},methods:{fetchUserData:function(){return y.a.get("/public/profile/getUserData").then((function(e){return e["data"]}))},initForm:function(){var e=this;this.fetchUserData().then((function(a){e.username=a.userName,e.email=a.emailAddress}))},profile:function(){window.location.href="/public/profile"},changeAvatar:function(e){this.userData.avatar=e.imageURL,this.avatar=e.imageURL},uploadImage:function(){var e=this;this.saving=!0,setTimeout((function(){return e.savedAvatar()}),1e3)},savedAvatar:function(){this.saving=!1,this.saved=!0},updateProfile:function(){this.userData.userName=this.username,this.userData.emailAddress=this.email;var e=this,a=JSON.stringify(this.userData),t=new FormData;t.append("data",a),y.a.post("/public/profile/updateProfile",t).then((function(a){e.output=a.data})).catch((function(a){e.output=a}))},changePassword:function(){}}},_=x,C=(t("4425"),t("7496")),D=t("40dc"),N=t("5bc1"),O=t("8212"),V=t("a523"),j=t("f6c4"),k=t("2a7f"),A=t("269a"),F=t.n(A),S=t("5607"),T=Object(c["a"])(_,n,i,!1,null,null,null),U=T.exports;p()(T,{VApp:C["a"],VAppBar:D["a"],VAppBarNavIcon:N["a"],VAvatar:O["a"],VContainer:V["a"],VMain:j["a"],VSpacer:g["a"],VToolbarTitle:k["a"]}),F()(T,{Ripple:S["a"]});var B=t("402c");t("15f5"),t("7051");r["a"].config.productionTip=!1,new r["a"]({vuetify:B["a"],render:function(e){return e(U)}}).$mount("#app")}});
//# sourceMappingURL=settings.e1fe1c5a.js.map