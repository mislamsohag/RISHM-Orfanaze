(window.webpackJsonp_N_E=window.webpackJsonp_N_E||[]).push([[3],{"++Bh":function(e,t,r){"use strict";function n(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}r.d(t,"a",(function(){return n}))},"6FTQ":function(e,t,r){"use strict";function n(e,t){(null==t||t>e.length)&&(t=e.length);for(var r=0,n=new Array(t);r<t;r++)n[r]=e[r];return n}r.d(t,"a",(function(){return n}))},"6JSF":function(e,t,r){"use strict";r.d(t,"a",(function(){return s})),r.d(t,"b",(function(){return f}));var n=r("nKUr"),a=r("q1tI"),o=r.n(a),i=r("8Xma"),c=[{width:359,size:"xxs"},{width:575,size:"xs"},{width:767,size:"sm"},{width:991,size:"md"},{width:1199,size:"lg"},{width:1365,size:"xl"}],u=o.a.createContext({}),s=function(e){var t=e.children,r=Object(a.useState)(!1),o=r[0],s=r[1],f=Object(a.useState)({}),l=f[0],p=f[1],d=Object(a.useState)("sm"),h=d[0],g=d[1],y=Object(a.useState)(!1),b=y[0],m=y[1],v=Object(a.useState)(!1),O=v[0],E=v[1];return Object(a.useEffect)((function(){var e=function(){s(!!(i.isMobileDevice.any()||window.innerWidth<=767)),p({width:window.innerWidth,height:window.innerHeight});var e="xl";for(var t in c)if(window.innerWidth<=c[t].width){e=c[t].size;break}g(e),m(window.innerWidth<=767),E(window.innerWidth>=992)};return e(),window.addEventListener("resize",e),function(){window.removeEventListener("resize",e)}}),[]),Object(n.jsx)(u.Provider,{value:{isMobile:o,screenResolution:l,screenSize:h,isSmScreen:b,isLgScreen:O},children:t})},f=function(){var e=o.a.useContext(u);return{isMobile:e.isMobile,screenResolution:e.screenResolution,screenSize:e.screenSize,isSmScreen:e.isSmScreen,isLgScreen:e.isLgScreen}}},"8Xma":function(e,t,r){"use strict";r.r(t),r.d(t,"getParameterByName",(function(){return n})),r.d(t,"getCurrencySymbol",(function(){return a})),r.d(t,"isMobileDevice",(function(){return i}));var n=function(e,t){t||(t=window.location.href),e=e.replace(/[\[\]]/g,"\\$&");var r=new RegExp("[?&]"+e+"(=([^&#]*)|&|#|$)").exec(t);return r?r[2]?decodeURIComponent(r[2].replace(/\+/g," ")):"":null},a=function(e){switch(e.toLowerCase()){case"inr":return"\u20b9";case"eur":return"\u20ac";case"gbp":return"\xa3";case"aud":return"A$";case"cad":return"C$";case"aed":return"\u062f.\u0627\u0655";case"sar":return"\u0631.\u0633";case"myr":return"RM";case"omr":return"\ufdfc";default:return"$"}},o=window.navigator.userAgent,i={Android:function(){return o.match(/Android/i)},BlackBerry:function(){return o.match(/BlackBerry/i)},iOS:function(){return o.match(/iPhone|iPad|iPod/i)},Opera:function(){return o.match(/Opera Mini/i)},Windows:function(){return o.match(/IEMobile/i)||o.match(/WPDesktop/i)},any:function(){return i.Android()||i.BlackBerry()||i.iOS()||i.Opera()||i.Windows()}};!function(){window.isPartnerUrl=!1,window.partnerName="";var e=window.location.hostname.split(".");if(3===e.length){var t=e[0].toLowerCase().replace("test","");""!==t&&"www"!==t&&(window.isPartnerUrl=!0,window.partnerName=t)}window.isMobileDevice=i,window.getParameterByName=n,window.getCurrencySymbol=a}()},"8rE2":function(e,t,r){"use strict";r.d(t,"a",(function(){return a}));var n=r("6FTQ");function a(e,t){if(e){if("string"===typeof e)return Object(n.a)(e,t);var r=Object.prototype.toString.call(e).slice(8,-1);return"Object"===r&&e.constructor&&(r=e.constructor.name),"Map"===r||"Set"===r?Array.from(e):"Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)?Object(n.a)(e,t):void 0}}},"8tO+":function(e,t,r){"use strict";function n(e){if("undefined"!==typeof Symbol&&Symbol.iterator in Object(e))return Array.from(e)}r.d(t,"a",(function(){return n}))},DvaS:function(e,t,r){"use strict";r.d(t,"a",(function(){return o}));var n=r("H+61"),a=r("UlJF"),o=function(){function e(){Object(n.a)(this,e)}return Object(a.a)(e,[{key:"successCallback",value:function(e){if(!e.ok){if(e.status>500&&window.location.replace("/underMaintenance"),403===e.status||401===e.status)throw e;return e.json().then((function(t){var r=new Error;throw r.response=e,r.data=t,r}))}return e}},{key:"get",value:function(e){return fetch(e,{headers:this.getHeaders,method:"GET"}).catch((function(e){throw e})).then(this.successCallback).then((function(e){return e.json()}))}},{key:"post",value:function(e,t){return fetch(e,{headers:this.postHeaders,method:"POST",body:JSON.stringify(t||{})}).then(this.successCallback)}},{key:"postFile",value:function(e,t){return fetch(e,{headers:this.postFileHeaders,method:"POST",body:t}).then(this.successCallback)}},{key:"getWithTokens",value:function(e,t){return fetch(e,{headers:{accept:"application/json","Content-Type":"application/json",Authorization:"Bearer ".concat(t)},method:"GET"}).then(this.successCallback).then((function(e){return e.json()}))}},{key:"multiFetch",value:function(e){return Promise.all(e).then((function(e){return e})).catch((function(e){throw console.log(e),e}))}},{key:"getHeaders",get:function(){var e={accept:"application/json"};if("undefined"!==typeof localStorage){var t=JSON.parse(localStorage.getItem("authorizationData"));t&&(e.Authorization="Bearer ".concat(t.token))}return e}},{key:"postHeaders",get:function(){var e={accept:"application/json","Content-Type":"application/json"};if("undefined"!==typeof localStorage){var t=JSON.parse(localStorage.getItem("authorizationData"));t&&(e.Authorization="Bearer ".concat(t.token))}return e}},{key:"postFileHeaders",get:function(){var e={};if(localStorage){var t=JSON.parse(localStorage.getItem("authorizationData"));t&&(e.Authorization="Bearer ".concat(t.token))}return e}}]),e}()},"H+61":function(e,t,r){"use strict";function n(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}r.d(t,"a",(function(){return n}))},"T/aA":function(e,t,r){"use strict";function n(e){if(Array.isArray(e))return e}r.d(t,"a",(function(){return n}))},U8pU:function(e,t,r){"use strict";function n(e){return(n="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}r.d(t,"a",(function(){return n}))},UlJF:function(e,t,r){"use strict";function n(e,t){for(var r=0;r<t.length;r++){var n=t[r];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}function a(e,t,r){return t&&n(e.prototype,t),r&&n(e,r),e}r.d(t,"a",(function(){return a}))},Y94s:function(e,t,r){"use strict";var n=r("o46R");function a(e,t,r){return(t=Object(n.a)(t))in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}function o(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)}return r}function i(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?o(Object(r),!0).forEach((function(t){a(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):o(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}function c(e){return"Minified Redux error #"+e+"; visit https://redux.js.org/Errors?code="+e+" for the full message or use the non-minified dev environment for full errors. "}var u="function"===typeof Symbol&&Symbol.observable||"@@observable",s=function(){return Math.random().toString(36).substring(7).split("").join(".")},f={INIT:"@@redux/INIT"+s(),REPLACE:"@@redux/REPLACE"+s(),PROBE_UNKNOWN_ACTION:function(){return"@@redux/PROBE_UNKNOWN_ACTION"+s()}};function l(e){if("object"!==typeof e||null===e)return!1;for(var t=e;null!==Object.getPrototypeOf(t);)t=Object.getPrototypeOf(t);return Object.getPrototypeOf(e)===t}function p(e,t,r){var n;if("function"===typeof t&&"function"===typeof r||"function"===typeof r&&"function"===typeof arguments[3])throw new Error(c(0));if("function"===typeof t&&"undefined"===typeof r&&(r=t,t=void 0),"undefined"!==typeof r){if("function"!==typeof r)throw new Error(c(1));return r(p)(e,t)}if("function"!==typeof e)throw new Error(c(2));var a=e,o=t,i=[],s=i,d=!1;function h(){s===i&&(s=i.slice())}function g(){if(d)throw new Error(c(3));return o}function y(e){if("function"!==typeof e)throw new Error(c(4));if(d)throw new Error(c(5));var t=!0;return h(),s.push(e),function(){if(t){if(d)throw new Error(c(6));t=!1,h();var r=s.indexOf(e);s.splice(r,1),i=null}}}function b(e){if(!l(e))throw new Error(c(7));if("undefined"===typeof e.type)throw new Error(c(8));if(d)throw new Error(c(9));try{d=!0,o=a(o,e)}finally{d=!1}for(var t=i=s,r=0;r<t.length;r++){(0,t[r])()}return e}function m(e){if("function"!==typeof e)throw new Error(c(10));a=e,b({type:f.REPLACE})}function v(){var e,t=y;return(e={subscribe:function(e){if("object"!==typeof e||null===e)throw new Error(c(11));function r(){e.next&&e.next(g())}return r(),{unsubscribe:t(r)}}})[u]=function(){return this},e}return b({type:f.INIT}),(n={dispatch:b,subscribe:y,getState:g,replaceReducer:m})[u]=v,n}function d(){for(var e=arguments.length,t=new Array(e),r=0;r<e;r++)t[r]=arguments[r];return 0===t.length?function(e){return e}:1===t.length?t[0]:t.reduce((function(e,t){return function(){return e(t.apply(void 0,arguments))}}))}function h(e){return function(t){var r=t.dispatch,n=t.getState;return function(t){return function(a){return"function"===typeof a?a(r,n,e):t(a)}}}}var g=h();g.withExtraArgument=h;var y=g,b=r("z7pX"),m=r("xvhg"),v=r("cpVT"),O=r("jYb/");function E(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)}return r}function w(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?E(Object(r),!0).forEach((function(t){Object(v.a)(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):E(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}var S={currency:"inr",mode:O.a.localPaymentProvider,method:"",provider:"",campaigns:[],isShakeCart:!1,giftDetails:{couponAmount:0,cardNumber:"",cardPin:""},chargesList:{inr:{exchangeRate:1,percentageCharge:0,description:"Indian Rupees"}},currentCharges:{exchangeRate:1,percentageCharge:0},couponDetails:{id:null,code:"",value:0},preferredDay:8},T={couponDetails:{price:0,priceInInr:0,quantity:1,occassion:"Christmas"},receiversInfo:[],isValidated:!0},j={isSynced:!1,type:"",categoryId:-1,campaigner:{name:"",email:"",phone:"",phoneCode:"+91"},ngo:{id:null,name:"",type:"",relation:"",phoneCode:"+91",phone:"",state:"",location:""},medicalDetails:{requiredAmount:1e5,hospitalName:"",hospitalState:"",hospitalLocation:"",hospitalisationStatus:"",ailment:"",endDate:""},campaign:{imageSrc:"",imageFile:"",fileName:"",title:"",description:""},products:[],documents:[]},A=p(function(e){for(var t=Object.keys(e),r={},n=0;n<t.length;n++){var a=t[n];0,"function"===typeof e[a]&&(r[a]=e[a])}var o,i=Object.keys(r);try{!function(e){Object.keys(e).forEach((function(t){var r=e[t];if("undefined"===typeof r(void 0,{type:f.INIT}))throw new Error(c(12));if("undefined"===typeof r(void 0,{type:f.PROBE_UNKNOWN_ACTION()}))throw new Error(c(13))}))}(r)}catch(u){o=u}return function(e,t){if(void 0===e&&(e={}),o)throw o;for(var n=!1,a={},u=0;u<i.length;u++){var s=i[u],f=r[s],l=e[s],p=f(l,t);if("undefined"===typeof p){t&&t.type;throw new Error(c(14))}a[s]=p,n=n||p!==l}return(n=n||i.length!==Object.keys(e).length)?a:e}}({app:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{loading:!0},t=arguments.length>1?arguments[1]:void 0;switch(t.type){case"SET_LOADING":return w(w({},e),{},{loading:t.loading});default:return e}},navBar:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{useFixedTop:!0,showMiniCart:!1},t=arguments.length>1?arguments[1]:void 0;switch(t.type){case"REMOVE_FIXED_TOP":return Object.assign({},e,{useFixedTop:!1});case"RESET_FIXED_TOP":return Object.assign({},e,{useFixedTop:!0});case"SET_NAVBAR":return w(w({},e),t.data);default:return e}},authentication:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{isSynced:!1,isAuth:!1,email:"",name:"",image:"",token:"",phoneNumber:"",expiration:"",role:"guest"},t=arguments.length>1?arguments[1]:void 0;switch(t.type){case"SET_AUTHENTICATION":return w(w({},e),t.authentication);case"UPDATE_ROLE":return w(w({},e),{},{role:t.role});default:return e}},cart:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:S,t=arguments.length>1?arguments[1]:void 0;switch(t.type){case"SET_CART":return w(w({},e),t.cart);case"SET_CURRENCY":var r=Object.entries(e.chargesList).map((function(e){return Object(m.a)(e,1)[0]}))||[],n=r.includes(t.currency)?t.currency:"inr";return w(w({},e),{},{currency:n,currentCharges:e.chargesList[n.toLowerCase()],mode:"inr"===n?O.a.localPaymentProvider:"RazorPay"});case"SET_PAYMENT_DATA":var a=Object.entries(e.chargesList).map((function(e){return Object(m.a)(e,1)[0]}))||[],o=e.currency;return"Stripe"===t.mode&&"inr"===e.currency&&(o="inr"!==t.geoDataCurrency&&a.includes(t.geoDataCurrency)?t.geoDataCurrency:a[0]),w(w({},e),{},{mode:t.mode,method:t.method,provider:t.provider,currency:o,currentCharges:e.chargesList[o.toLowerCase()]});case"RESET_PROVIDER":return w(w({},e),{},{provider:""});case"SET_PRODUCTS":return w(w({},e),{},{products:[].concat(Object(b.a)(e.products),Object(b.a)(t.products))});case"CLEAR_PRODUCTS":return w(w({},e),{},{campaigns:[]});case"UPDATE_CAMPAIGNS":return w(w({},e),{},{campaigns:t.campaigns});case"SET_CHARGES_LIST":return w(w({},e),{},{chargesList:t.chargesList});case"SHAKE_CART":return w(w({},e),{},{isShakeCart:t.isShakeCart});case"COUPON_AMOUNT":return w(w({},e),{},{couponAmount:t.couponAmount});case"GIFT_DETAILS":return w(w({},e),{},{giftDetails:t.giftDetails});case"RESET_CART":return w({},S);case"SET_CORPORATE_COUPON_DETAILS":return w(w({},e),{},{couponDetails:t.couponDetails});case"SET_PREFERRED_DATE":return w(w({},e),{},{preferredDay:t.preferredDay});default:return e}},payment:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{transactionId:"",transactionType:0,amount:"",tipValue:0,tipOption:1,currency:"",productDescription:"",anonymous:!1,name:"",phoneNumber:"",email:"",whatsAppUpdate:!0,externalReference:"",stripePaymentIntentToken:"",customerId:""},t=arguments.length>1?arguments[1]:void 0;switch(t.type){case"SET_PAYMENT":return w(w({},e),t.payment);case"SET_DONATION_TIP":return w(w({},e),{},{tipValue:t.tipValue,tipOption:t.tipOption});case"SET_STRIPE_PAYMENT_INTENT_TOKEN":return w(w({},e),{},{stripePaymentIntentToken:t.stripePaymentIntentToken});default:return e}},billing:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{city:"",state:"",country:"India",address:"",phoneCode:"+91",phone:"",displayName:"",indianNationality:!0,notes:""},t=arguments.length>1?arguments[1]:void 0;switch(t.type){case"SET_BILLING":return w(w({},e),t.billing);case"SET_PHONE":return w(w({},e),{},{phone:t.phone&&t.phone.startsWith(e.phoneCode)?t.phone.replace(e.phoneCode,""):t.phone});default:return e}},geoData:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{city:"",country:"India",phoneCode:"+91",currency:"inr"},t=arguments.length>1?arguments[1]:void 0;switch(t.type){case"SET_GEO_DATA":return w(w({},e),t.geoData);default:return e}},giftCard:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:w({},T),t=arguments.length>1?arguments[1]:void 0;switch(t.type){case"SET_GIFT_CARD":return w(w({},e),t.giftCard);case"RESET_GIFT_CARD":return w(w({},e),T);case"SET_COUPON_DETAILS":return w(w({},e),{},{couponDetails:w({},t.couponDetails)});case"SET_RECEIVERS_INFO":return w(w({},e),{},{receiversInfo:Object(b.a)(t.receiversInfo)});case"CLEAR_RECEIVER_INFO":return w(w({},e),{},{receiversInfo:[]});case"SET_IS_VALIDATED":return w(w({},e),{},{isValidated:t.validated});default:return e}},category:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{list:[],dictionary:{}},t=arguments.length>1?arguments[1]:void 0;switch(t.type){case"SET_CATEGORY_LIST":return w(w({},e),{},{list:Object(b.a)(t.list),dictionary:w({},t.dictionary)});default:return e}},fundraiser:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:w({},j),t=arguments.length>1?arguments[1]:void 0;switch(t.type){case"SET_FUNDRAISER":return w(w({},e),t.fundraiser);case"SET_FUNDRAISER_TYPE":return w(w({},e),{},{type:t.fundraiserType});case"SET_CAMPAIGNER":return w(w({},e),{},{campaigner:w({},t.campaigner)});case"SET_NGO":return w(w({},e),{},{ngo:w({},t.ngo)});case"SET_NGO_ID":return w(w({},e),{},{ngo:w(w({},e.ngo),{},{id:t.id})});case"SET_CAMPAIGN_DETAILS":return w(w({},e),{},{campaign:w({},t.campaign)});case"SET_CAMPAIGN_CATEGORY":return w(w({},e),{},{categoryId:t.category});case"SET_MEDICAL_DETAILS":return w(w({},e),{},{medicalDetails:w({},t.medicalDetails)});case"SET_DOCUMENTS":return w(w({},e),{},{documents:Object(b.a)(t.documents)});case"ADD_DOCUMENT":return w(w({},e),{},{documents:[].concat(Object(b.a)(e.documents),[w({},t.document)])});case"SET_CAMPAIGN_PRODUCTS":return w(w({},e),{},{products:Object(b.a)(t.products)});case"RESET_FUNDRAISER":return w(w(w({},e),j),{},{type:"",campaigner:w({},j.campaigner),ngo:w({},j.ngo),medicalDetails:w({},j.medicalDetails),campaign:w({},j.campaign),products:[],documents:[],isSynced:!0});default:return e}}}),function(){for(var e=arguments.length,t=new Array(e),r=0;r<e;r++)t[r]=arguments[r];return function(e){return function(){var r=e.apply(void 0,arguments),n=function(){throw new Error(c(15))},a={getState:r.getState,dispatch:function(){return n.apply(void 0,arguments)}},o=t.map((function(e){return e(a)}));return n=d.apply(void 0,o)(r.dispatch),i(i({},r),{},{dispatch:n})}}}(y));t.a=A},ZtjB:function(e,t,r){"use strict";r.d(t,"a",(function(){return u})),r.d(t,"b",(function(){return s}));var n=r("nKUr"),a=r("q1tI"),o=r.n(a),i=r("Y94s"),c=o.a.createContext({}),u=function(e){var t=e.children,r=i.a.getState(),o=Object(a.useState)(r.authentication),u=o[0],s=o[1],f=Object(a.useState)(r.app),l=f[0],p=f[1],d=Object(a.useState)(r.cart),h=d[0],g=d[1],y=Object(a.useState)(r.payment),b=y[0],m=y[1],v=Object(a.useState)(r.billing),O=v[0],E=v[1],w=Object(a.useState)(r.navBar),S=w[0],T=w[1],j=Object(a.useState)(r.giftCard),A=j[0],C=j[1],D=Object(a.useState)(r.category),P=D[0],I=D[1],_=Object(a.useState)(r.fundraiser),N=_[0],R=_[1],k=Object(a.useState)(r.geoData),x=k[0],F=k[1],U=function(e){s(e.authentication),g(e.cart),p(e.app),m(e.payment),E(e.billing),T(e.navBar),C(e.giftCard),I(e.category),F(e.geoData),R(e.fundraiser)};return Object(a.useEffect)((function(){return U(i.a.getState()),i.a.subscribe((function(){var e=i.a.getState();U(e)}))}),[]),Object(n.jsx)(c.Provider,{value:{app:l,authentication:u,cart:h,payment:b,billing:O,navBar:S,category:P,giftCard:A,geoData:x,fundraiser:N},children:t})},s=function(){var e=o.a.useContext(c),t=e.app,r=e.authentication,n=e.cart,a=e.payment,i=e.billing,u=e.navBar,s=e.category,f=e.giftCard,l=e.geoData,p=e.fundraiser;return{app:t,authentication:r,cart:n,payment:a,billing:i,navBar:u,giftCard:f,exchangeRate:n.currentCharges.exchangeRate,amounts:function(){var e=0,t=0;0===n.campaigns.length?e=f.couponDetails.price*f.couponDetails.quantity:(e=n.campaigns.reduce((function(e,t){return e+t.amount}),0),t=n.couponDetails.id?n.couponDetails.value:n.giftDetails.couponAmount/n.currentCharges.exchangeRate);var r=Number(a.tipValue)||0,o=e*(n.currentCharges.exchangeRate>1?n.currentCharges.percentageCharge/100:0),i=parseFloat(e.toFixed(2)),c=parseFloat(o.toFixed(2));return{subTotal:i,tipAmount:parseFloat(r.toFixed(2)),charges:c,sumCharge:parseFloat((e+o).toFixed(2)),total:parseFloat((e+r+o).toFixed(2)),totalPayableAmount:parseFloat((e+r+o-t).toFixed(2))}}(),category:s,geoData:l,fundraiser:p}}},cpVT:function(e,t,r){"use strict";function n(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}r.d(t,"a",(function(){return n}))},"jYb/":function(e,t,r){"use strict";t.a={environment:"Productio",baseUrl:"https://donatekart.com",hostUrl:"https://api.donatekart.com/",authUrl:"https://authentication-production-api.donatekart.com/",imagesHost:"https://images.donatekart.com",localPaymentProvider:"RazorPay",clientID:"donateKartWeb",facebookClientID:"1750549388530011",googleClientID:"581839059949-7opmgvbfubtjasabda0t9q13ap0r7492.apps.googleusercontent.com",instagramClientID:"dff01ffa3da54c8aaae6060f1eb5a050",whatsAppChatUrl:"https://api.whatsapp.com/send?phone=",whatsAppPhoneNumber:"918555016332",internationalPaymentProvider:"Stripe",stripePublishKey:"pk_live_YRdE5gles3qyvPQ4dp3S55qT",stripeConnectAccount:"acct_1AyKKLBtFDCfA6cU",razorPayKey:"rzp_live_aI4ZUy22jj6Z5g",googleAdwordsKey:"AW-936249635/Vt5rCI-K0IcBEKOSuL4D",version:"72",ipApiAccessKey:"XQxL3h5TIZNCcrPiiqh0ToUtVVcby2VAp7AZgsEGAbhPF2NYSJ",dkImagesHost:"https://images.donatekart.com",gumletHost:"dkprodimages.gumlet.io",gtm:"GTM-KVZ2D75",moengageAppId:"JNHR8P6YUX1U3TT8EEYX5YRI",moengageDebugLogs:"0",locationApiKey:"THRFQnlqbkVsdXdYcWVLdDZiMTdDVGdUMEE1OFNMeDFma3Fzb0lUcw=="}},o46R:function(e,t,r){"use strict";r.d(t,"a",(function(){return a}));var n=r("U8pU");function a(e){var t=function(e,t){if("object"!==Object(n.a)(e)||null===e)return e;var r=e[Symbol.toPrimitive];if(void 0!==r){var a=r.call(e,t||"default");if("object"!==Object(n.a)(a))return a;throw new TypeError("@@toPrimitive must return a primitive value.")}return("string"===t?String:Number)(e)}(e,"string");return"symbol"===Object(n.a)(t)?t:String(t)}},xvhg:function(e,t,r){"use strict";r.d(t,"a",(function(){return i}));var n=r("T/aA");var a=r("8rE2"),o=r("++Bh");function i(e,t){return Object(n.a)(e)||function(e,t){if("undefined"!==typeof Symbol&&Symbol.iterator in Object(e)){var r=[],n=!0,a=!1,o=void 0;try{for(var i,c=e[Symbol.iterator]();!(n=(i=c.next()).done)&&(r.push(i.value),!t||r.length!==t);n=!0);}catch(u){a=!0,o=u}finally{try{n||null==c.return||c.return()}finally{if(a)throw o}}return r}}(e,t)||Object(a.a)(e,t)||Object(o.a)()}},z7pX:function(e,t,r){"use strict";r.d(t,"a",(function(){return i}));var n=r("6FTQ");var a=r("8tO+"),o=r("8rE2");function i(e){return function(e){if(Array.isArray(e))return Object(n.a)(e)}(e)||Object(a.a)(e)||Object(o.a)(e)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}}}]);