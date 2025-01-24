/*!
 App Connect Bootstrap 5 Alert
 Version: 2.0.1
 (c) 2024 Wappler.io
 @build 2024-06-19 11:47:06
 */
dmx.Component("bs5-alert",{initialData:{visible:!1},attributes:{show:{type:Boolean,default:!1},type:{type:String,default:"primary",enum:["primary","secondary","success","danger","warning","info","light","dark"]},closable:{type:Boolean,default:!1}},methods:{toggle(){this._toggle()},show(){this._show()},hide(){this._hide()},setType(t){this._setType(t)},setTextContent(t){this._setTextContent(t)}},init(t){this._transitionendHandler=this._transitionendHandler.bind(this),this._closeButton=document.createElement("button"),this._closeButton.setAttribute("type","button"),this._closeButton.setAttribute("aria-label","Close"),this._closeButton.className="btn-close",this._closeButton.addEventListener("click",this._hide.bind(this)),t.setAttribute("role","alert"),t.classList.add("alert"),this.props.closable&&(t.appendChild(this._closeButton),t.classList.add("alert-dismissible")),this.props.show?(t.classList.add("show"),this.set("visible",!0)):t.style.setProperty("display","none"),this._setType(this.props.type)},performUpdate(t){t.has("type")&&this._setType(this.props.type),t.has("show")&&this[this.props.show?"_show":"_hide"](),t.has("closable")&&(this.props.closable?(this.$node.appendChild(this._closeButton),this.$node.classList.add("alert-dismissible")):(this.$closeButton.remove(),this.$node.classList.remove("alert-dismissible")))},_show:function(){this.$node.removeEventListener("transitionend",this._transitionendHandler),this.$node.style.removeProperty("display"),this.$node.offsetWidth,this.$node.classList.add("show"),this.set("visible",!0)},_hide:function(){this.$node.removeEventListener("transitionend",this._transitionendHandler),this.$node.classList.contains("fade")?this.$node.addEventListener("transitionend",this._transitionendHandler,{once:!0}):this.$node.style.setProperty("display","none"),this.$node.classList.remove("show"),this.set("visible",!1)},_transitionendHandler:function(){this.$node.style.setProperty("display","none")},_setType:function(t){var s=["primary","secondary","success","danger","warning","info","light","dark"].map((function(t){return"alert-"+t}));this.$node.classList.remove.apply(this.$node.classList,s),this.$node.classList.add("alert-"+t)},_setTextContent:function(t){this._closeButton.remove(),this.$node.textContent=t,this.props.closable&&this.$node.appendChild(this._closeButton)}});
//# sourceMappingURL=dmxBootstrap5Alert.js.map
