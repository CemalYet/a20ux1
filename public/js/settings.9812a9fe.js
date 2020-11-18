(function(a){function e(e){for(var r,s,o=e[0],l=e[1],u=e[2],d=0,p=[];d<o.length;d++)s=o[d],Object.prototype.hasOwnProperty.call(n,s)&&n[s]&&p.push(n[s][0]),n[s]=0;for(r in l)Object.prototype.hasOwnProperty.call(l,r)&&(a[r]=l[r]);c&&c(e);while(p.length)p.shift()();return i.push.apply(i,u||[]),t()}function t(){for(var a,e=0;e<i.length;e++){for(var t=i[e],r=!0,o=1;o<t.length;o++){var l=t[o];0!==n[l]&&(r=!1)}r&&(i.splice(e--,1),a=s(s.s=t[0]))}return a}var r={},n={settings:0},i=[];function s(e){if(r[e])return r[e].exports;var t=r[e]={i:e,l:!1,exports:{}};return a[e].call(t.exports,t,t.exports,s),t.l=!0,t.exports}s.m=a,s.c=r,s.d=function(a,e,t){s.o(a,e)||Object.defineProperty(a,e,{enumerable:!0,get:t})},s.r=function(a){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(a,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(a,"__esModule",{value:!0})},s.t=function(a,e){if(1&e&&(a=s(a)),8&e)return a;if(4&e&&"object"===typeof a&&a&&a.__esModule)return a;var t=Object.create(null);if(s.r(t),Object.defineProperty(t,"default",{enumerable:!0,value:a}),2&e&&"string"!=typeof a)for(var r in a)s.d(t,r,function(e){return a[e]}.bind(null,r));return t},s.n=function(a){var e=a&&a.__esModule?function(){return a["default"]}:function(){return a};return s.d(e,"a",e),e},s.o=function(a,e){return Object.prototype.hasOwnProperty.call(a,e)},s.p="/";var o=window["webpackJsonp"]=window["webpackJsonp"]||[],l=o.push.bind(o);o.push=e,o=o.slice();for(var u=0;u<o.length;u++)e(o[u]);var c=l;i.push([5,"chunk-vendors"]),t()})({"402c":function(a,e,t){"use strict";var r=t("2b0e"),n=t("f309");r["a"].use(n["a"]),e["a"]=new n["a"]({})},4425:function(a,e,t){"use strict";var r=t("ae68"),n=t.n(r);n.a},5:function(a,e,t){a.exports=t("c699")},ae68:function(a,e,t){},c699:function(a,e,t){"use strict";t.r(e);t("e260"),t("e6cf"),t("cca6"),t("a79d");var r=t("2b0e"),n=function(){var a=this,e=a.$createElement,t=a._self._c||e;return t("v-app",[t("v-app-bar",{attrs:{fixed:"",color:"white",elevation:"1"}},[t("v-app-bar-nav-icon",{on:{click:function(e){return a.profile()}}},[t("i",{staticClass:"fa fa-arrow-left fa-2x",staticStyle:{color:"#000000"},attrs:{"aria-hidden":"true"}})]),t("v-spacer"),t("v-toolbar-title",{attrs:{id:"Title"}},[a._v("Edit Profile")]),t("v-spacer")],1),t("v-main",{attrs:{id:"main"}},[t("v-container",[t("div",{staticClass:"content"},["update"==a.tab?t("div",{staticClass:"tabs"},[t("image-input",{staticClass:"avatar",on:{input:function(e){return a.changeAvatar(e)}}},[t("div",{attrs:{slot:"activator"},slot:"activator"},[t("v-avatar",{directives:[{name:"ripple",rawName:"v-ripple"}],attrs:{size:"200px"}},[t("img",{attrs:{src:a.userData.avatar}})])],1)]),t("form",{staticClass:"settingsForm",on:{submit:function(e){return e.preventDefault(),a.updateProfile()}}},[t("div",{staticClass:"field"},[t("label",[a._v("Username")]),t("input",{directives:[{name:"model",rawName:"v-model",value:a.username,expression:"username"}],attrs:{type:"text",name:"username"},domProps:{value:a.username},on:{input:function(e){e.target.composing||(a.username=e.target.value)}}})]),t("div",{staticClass:"field"},[t("label",[a._v("Email")]),t("input",{directives:[{name:"model",rawName:"v-model",value:a.email,expression:"email"},{name:"validate",rawName:"v-validate",value:"required|email",expression:"'required|email'"}],attrs:{type:"email",name:"email"},domProps:{value:a.email},on:{input:function(e){e.target.composing||(a.email=e.target.value)}}})]),t("button",{staticClass:"submitButton",attrs:{type:"submit"}},[a._v("Update profile")]),t("button",{staticClass:"submitButton",attrs:{type:"button"},on:{click:function(e){a.tab="password",a.output=""}}},[a._v("Change Password")])])],1):a._e(),"password"==a.tab?t("div",{staticClass:"tabs"},[t("form",{staticClass:"settingsForm",on:{submit:function(e){return e.preventDefault(),a.changePassword()}}},[t("div",{staticClass:"field"},[t("label",[a._v("Current Password")]),t("input",{directives:[{name:"model",rawName:"v-model",value:a.password,expression:"password"},{name:"validate",rawName:"v-validate",value:"required",expression:"'required'"}],attrs:{type:"password",name:"password","data-vv-as":"current password"},domProps:{value:a.password},on:{input:function(e){e.target.composing||(a.password=e.target.value)}}})]),t("div",{staticClass:"field"},[t("label",[a._v("New Password")]),t("input",{directives:[{name:"model",rawName:"v-model",value:a.newPassword,expression:"newPassword"},{name:"validate",rawName:"v-validate",value:"required",expression:"'required'"}],attrs:{type:"password",name:"newPassword","data-vv-as":"new password"},domProps:{value:a.newPassword},on:{input:function(e){e.target.composing||(a.newPassword=e.target.value)}}})]),t("div",{staticClass:"field"},[t("label",[a._v("Confirm New Password")]),t("input",{directives:[{name:"model",rawName:"v-model",value:a.confirmPassword,expression:"confirmPassword"},{name:"validate",rawName:"v-validate",value:"required|confirmed:newPassword",expression:"'required|confirmed:newPassword'"}],attrs:{type:"password",name:"confirmPassword","data-vv-as":"confirm password"},domProps:{value:a.confirmPassword},on:{input:function(e){e.target.composing||(a.confirmPassword=e.target.value)}}})]),t("button",{staticClass:"submitButton",attrs:{type:"submit"}},[a._v("Update password")]),t("button",{staticClass:"submitButton",attrs:{type:"button",loading:a.saving},on:{click:function(e){a.tab="update",a.output=""}}},[a._v("Go Back")])])]):a._e(),t("v-dialog",{attrs:{"max-width":"300"},model:{value:a.errorDialog,callback:function(e){a.errorDialog=e},expression:"errorDialog"}},[t("v-card",[t("v-card-text",{staticClass:"subheading"},[a._v(a._s(a.errorText))]),t("v-card-actions",[t("v-spacer"),t("v-btn",{attrs:{flat:""},on:{click:function(e){a.errorDialog=!1}}},[a._v("Got it!")])],1)],1)],1)],1)])],1)],1)},i=[],s=function(){var a=this,e=a.$createElement,t=a._self._c||e;return t("div",[t("div",{on:{click:function(e){return a.launchFilePicker()}}},[a._t("activator")],2),t("input",{ref:"file",staticStyle:{display:"none"},attrs:{type:"file",name:a.uploadFieldName},on:{change:function(e){return a.onFileChange(e.target.name,e.target.files)}}}),t("v-dialog",{attrs:{"max-width":"300"},model:{value:a.errorDialog,callback:function(e){a.errorDialog=e},expression:"errorDialog"}},[t("v-card",[t("v-card-text",{staticClass:"subheading"},[a._v(a._s(a.errorText))]),t("v-card-actions",[t("v-spacer"),t("v-btn",{attrs:{flat:""},on:{click:function(e){a.errorDialog=!1}}},[a._v("Got it!")])],1)],1)],1)],1)},o=[],l=(t("ac1f"),t("466d"),{name:"image-input",data:function(){return{errorDialog:null,errorText:"",uploadFieldName:"file",maxSize:1024}},props:{value:Object},methods:{launchFilePicker:function(){this.$refs.file.click()},onFileChange:function(a,e){var t=this,r=this.maxSize,n=e[0],i=new FileReader;if(e.length>0){var s=n.size/r/r;n.type.match("image.*")?s>1?(this.errorDialog=!0,this.errorText="Your file is too big! Please select an image under 1MB"):(i.onload=function(a){return t.$emit("input",a.target.result)},i.readAsDataURL(n)):(this.errorDialog=!0,this.errorText="Please choose an image file")}}}}),u=l,c=t("2877"),d=t("6544"),p=t.n(d),v=t("8336"),f=t("b0af"),m=t("99d9"),w=t("169a"),g=t("2fa4"),h=Object(c["a"])(u,s,o,!1,null,null,null),b=h.exports;p()(h,{VBtn:v["a"],VCard:f["a"],VCardActions:m["a"],VCardText:m["c"],VDialog:w["a"],VSpacer:g["a"]});var P=t("bc3a"),x=t.n(P),y={name:"App",components:{ImageInput:b},data:function(){return{userData:null,username:"",email:"",password:"",newPassword:"",confirmPassword:"",errorDialog:null,errorText:"",saving:!1,saved:!1,tab:"update"}},mounted:function(){var a=this;x.a.get("/public/profile/getUserData").then((function(e){return a.userData=e["data"]})),this.initForm()},methods:{fetchUserData:function(){return x.a.get("/public/profile/getUserData").then((function(a){return a["data"]}))},initForm:function(){var a=this;this.fetchUserData().then((function(e){a.username=e.userName,a.email=e.emailAddress}))},profile:function(){window.location.href="/public/profile"},changeAvatar:function(a){this.userData.avatar=a},uploadImage:function(){var a=this;this.saving=!0,setTimeout((function(){return a.savedAvatar()}),1e3)},savedAvatar:function(){this.saving=!1,this.saved=!0},updateProfile:function(){this.userData.userName=this.username,this.userData.emailAddress=this.email;var a=this,e=JSON.stringify(this.userData),t=new FormData;t.append("data",e),this.errorDialog=!0,x.a.post("/public/profile/updateProfile",t).then((function(e){a.errorText=e.data})).catch((function(e){a.errorText=e}))},changePassword:function(){var a=this;if(this.newPassword!=this.confirmPassword)this.errorDialog=!0,this.errorText="New password and confirmed password don't match!";else{var e={password:this.password,newPassword:this.newPassword},t=JSON.stringify(e);console.log(e);var r=new FormData;r.append("data",t),this.errorDialog=!0,x.a.post("/public/profile/updatePassword",r).then((function(e){a.errorText=e.data})).catch((function(e){a.errorText=e}))}}}},D=y,C=(t("4425"),t("7496")),_=t("40dc"),N=t("5bc1"),T=t("8212"),V=t("a523"),O=t("f6c4"),k=t("2a7f"),A=t("269a"),F=t.n(A),S=t("5607"),j=Object(c["a"])(D,n,i,!1,null,null,null),B=j.exports;p()(j,{VApp:C["a"],VAppBar:_["a"],VAppBarNavIcon:N["a"],VAvatar:T["a"],VBtn:v["a"],VCard:f["a"],VCardActions:m["a"],VCardText:m["c"],VContainer:V["a"],VDialog:w["a"],VMain:O["a"],VSpacer:g["a"],VToolbarTitle:k["a"]}),F()(j,{Ripple:S["a"]});var q=t("402c");t("15f5"),t("7051");r["a"].config.productionTip=!1,new r["a"]({vuetify:q["a"],render:function(a){return a(B)}}).$mount("#app")}});
//# sourceMappingURL=settings.9812a9fe.js.map