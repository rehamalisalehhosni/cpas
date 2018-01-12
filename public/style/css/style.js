import React, {StyleSheet, Dimensions, PixelRatio} from "react-native";
const {width, height, scale} = Dimensions.get("window"),
    vw = width / 100,
    vh = height / 100,
    vmin = Math.min(vw, vh),
    vmax = Math.max(vw, vh);

export default StyleSheet.create({
    "body": {
        "fontFamily": "DroidSansArabic",
        "color": "#555",
        "textAlign": "right",
        "direction": "rtl",
        "backgroundColor": "#F8F8F8"
    },
    "animatedParent:not(carousel-caption)": {
        "overflowX": "hidden !important"
    },
    "a:hover": {
        "textDecoration": "none"
    },
    "topbar": {
        "backgroundColor": "#FF7200",
        "borderBottom": "0px solid #0a2544",
        "color": "#fff",
        "lineHeight": 3.85,
        "verticalAlign": "middle"
    },
    "topbar a": {
        "color": "#fff"
    },
    "nav:before": {
        "content": " ",
        "display": "table"
    },
    "nav:after": {
        "content": " ",
        "display": "table"
    },
    "*:before": {
        "WebkitBoxSizing": "border-box",
        "MozBoxSizing": "border-box",
        "boxSizing": "border-box"
    },
    "*:after": {
        "WebkitBoxSizing": "border-box",
        "MozBoxSizing": "border-box",
        "boxSizing": "border-box"
    },
    "topbar links  a:last-child": {
        "color": "#0a2544"
    },
    "topbar nav-top li": {
        "paddingTop": 0,
        "paddingRight": 4,
        "paddingBottom": 0,
        "paddingLeft": 4
    },
    "topbar nav-top li a:hover": {
        "color": "#0a2544"
    },
    "share-links a": {
        "borderRadius": 5,
        "backgroundColor": "#0a2544",
        "color": "#fcfcfc",
        "width": 30,
        "height": 30,
        "marginTop": 0,
        "marginRight": 2,
        "marginBottom": 0,
        "marginLeft": 2,
        "overflow": "hidden",
        "boxShadow": "0 2px 2px 0 rgba(0, 0, 0, .3)",
        "WebkitTransition": "all 0.2s ease 0s",
        "MozTransition": "all 0.2s ease 0s",
        "transition": "all 0.2s ease 0s",
        "display": "inline-flex",
        "verticalAlign": "middle",
        "fontSize": 20
    },
    "share-links share-facebook:before": {
        "content": "\\f09a"
    },
    "share-links a:before": {
        "fontFamily": "FontAwesome",
        "textIndent": 0,
        "lineHeight": 23,
        "height": 22,
        "verticalAlign": "middle",
        "marginTop": "auto",
        "marginRight": "auto",
        "marginBottom": "auto",
        "marginLeft": "auto"
    },
    "share-links share-youtube:before": {
        "content": "\\f167"
    },
    "share-links share-linkedin:before": {
        "content": "\\f0e1"
    },
    "share-links": {
        "fontSize": 1.4545,
        "verticalAlign": "middle",
        "display": "inline-flex"
    },
    "searchform": {
        "border": "solid 2px #eee",
        "borderRadius": 20,
        "display": "inline-block",
        "lineHeight": 40,
        "fontSize": 13,
        "paddingTop": 0,
        "paddingRight": 0,
        "paddingBottom": 0,
        "paddingLeft": 0,
        "verticalAlign": "middle",
        "background": "#fff",
        "borderColor": "#ccc",
        "boxShadow": "0 1px 1px rgba(0, 0, 0, .075) inset",
        "width": 201,
        "position": "absolute",
        "top": 36
    },
    "searchform text": {
        "float": "right",
        "display": "inline-block",
        "textAlign": "right"
    },
    "searchform cat": {
        "float": "right",
        "display": "inline-block",
        "textAlign": "right"
    },
    "searchform button-wrap": {
        "float": "right",
        "display": "inline-block",
        "textAlign": "right"
    },
    "searchform selectric-cat": {
        "float": "right",
        "display": "inline-block",
        "textAlign": "right"
    },
    "searchform:before": {
        "content": " ",
        "display": "table",
        "width": 0,
        "height": 0,
        "borderLeft": "7px solid transparent",
        "borderRight": "7px solid transparent",
        "borderBottom": "7px solid #efefef",
        "position": "relative",
        "top": -9,
        "right": 20
    },
    "searchform:after": {
        "content": " ",
        "display": "table"
    },
    "searchform input": {
        "border": "none",
        "paddingTop": 0,
        "paddingRight": 15,
        "paddingBottom": 0,
        "paddingLeft": 20,
        "width": 150,
        "height": 40,
        "lineHeight": 34,
        "borderRadius": 0,
        "color": "#555",
        "background": "transparent",
        "float": "right",
        "outline": "none",
        "boxShadow": "none",
        "marginBottom": 0
    },
    "searchform select": {
        "height": 40,
        "lineHeight": 34,
        "color": "#555",
        "background": "transparent",
        "borderRadius": 0,
        "float": "right",
        "border": "none",
        "outline": "none",
        "boxShadow": "none",
        "marginBottom": 0
    },
    "searchform button": {
        "height": 40,
        "lineHeight": 34,
        "color": "#555",
        "background": "transparent",
        "borderRadius": 0,
        "float": "right",
        "border": "none",
        "outline": "none",
        "boxShadow": "none",
        "marginBottom": 0
    },
    "searchform  fa": {
        "position": "relative",
        "top": -4
    },
    "left": {
        "textAlign": "left"
    },
    "col-4:before": {
        "clear": "both"
    },
    "right": {
        "textAlign": "right"
    },
    "search-toggle": {
        "color": "#999",
        "position": "fixed",
        "right": 30,
        "top": 10
    },
    "padd": {
        "paddingTop": 30,
        "paddingRight": 0,
        "paddingBottom": 30,
        "paddingLeft": 0
    },
    "menu fixed-top": {
        "backgroundColor": "#0a2544"
    },
    "card-img img": {
        "maxWidth": "100%"
    },
    "founder": {
        "backgroundColor": "#EAEEF3"
    },
    "swiper-container": {
        "width": "100%",
        "height": "100%"
    },
    "swiper-slide": {
        "textAlign": "center",
        "fontSize": 18,
        "display": "flex",
        "WebkitBoxPack": "center",
        "MsFlexPack": "center",
        "WebkitJustifyContent": "center",
        "justifyContent": "center",
        "WebkitBoxAlign": "center",
        "MsFlexAlign": "center",
        "WebkitAlignItems": "center",
        "alignItems": "center"
    },
    "card-marg": {
        "marginTop": "10%",
        "marginRight": "10%",
        "marginBottom": "10%",
        "marginLeft": "10%"
    },
    "green": {
        "backgroundColor": "#2baab1"
    },
    "grey": {
        "backgroundColor": "#383f48"
    },
    "red": {
        "backgroundColor": "#e36159"
    },
    "blue": {
        "backgroundColor": "#0a2544"
    },
    "html thumb-info-ribbon-tertiary": {
        "color": "#fff",
        "display": "block",
        "paddingTop": 5,
        "paddingRight": 20,
        "paddingBottom": 5,
        "paddingLeft": 20,
        "position": "absolute",
        "zIndex": 10,
        "top": -15,
        "fontStyle": "italic",
        "right": 30
    },
    "thumb-info-ribbon:before": {
        "borderRightColor": "#000101",
        "borderRight": "10px solid #646464",
        "borderTop": "16px solid transparent",
        "content": "",
        "display": "block",
        "height": 0,
        "left": -10,
        "position": "absolute",
        "top": 0,
        "width": 7
    },
    "cart-custom  card-block": {
        "paddingTop": 0.6,
        "paddingRight": "!important",
        "paddingBottom": 0.6,
        "paddingLeft": "!important"
    },
    "card-marg card-block": {
        "paddingTop": 0.65,
        "paddingRight": 0.65,
        "paddingBottom": 0.65,
        "paddingLeft": 0.65
    },
    "thumb-info-wrapper": {
        "WebkitBackfaceVisibility": "hidden",
        "backfaceVisibility": "hidden",
        "WebkitTransform": "translate3d(0, 0, 0)",
        "MozTransform": "translate3d(0, 0, 0)",
        "MsTransform": "translate3d(0, 0, 0)",
        "OTransform": "translate3d(0, 0, 0)",
        "transform": "translate3d(0, 0, 0)",
        "borderRadius": 4,
        "marginTop": 4,
        "marginRight": 4,
        "marginBottom": 4,
        "marginLeft": 4,
        "overflow": "hidden",
        "display": "block",
        "position": "relative"
    },
    "thumb-info-image": {
        "minHeight": 232,
        "display": "block",
        "backgroundPosition": "center top",
        "backgroundRepeat": "no-repeat",
        "backgroundSize": "100% auto",
        "position": "relative",
        "WebkitTransition": "background-position 0.8s linear 0s",
        "MozTransition": "background-position 0.8s linear 0s",
        "transition": "background-position 0.8s linear 0s"
    },
    "thumb-info-wrapper:hover thumb-info-image": {
        "WebkitTransition": "background-position 1s linear 0s",
        "MozTransition": "background-position 1s linear 0s",
        "transition": "background-position 1s linear 0s",
        "backgroundPosition": "center bottom"
    },
    "text h2": {
        "color": "#fe7200"
    },
    "text p": {
        "color": "#5472d2"
    },
    "text": {
        "textAlign": "right"
    },
    "footer": {
        "backgroundRepeat": "repeat",
        "backgroundSize": "auto",
        "backgroundAttachment": "scroll",
        "backgroundPosition": "initial",
        "backgroundImage": "none",
        "color": "#777",
        "backgroundColor": "#0e0e0e",
        "minHeight": 200
    },
    "navbar": {
        "background": "#0a2544"
    },
    "navbar-nav li  a": {
        "color": "#fe7200 !important"
    },
    "dropdown:hover>dropdown-menu": {
        "display": "block"
    },
    "dropdown>dropdown-menu": {
        "borderTopColor": "#f67200",
        "borderTopWidth": 5,
        "borderTopStyle": "solid"
    },
    "dropdown-menu": {
        "borderRadius": "6px 0px 0px 6px  !important",
        "minWidth": 240,
        "paddingTop": 5,
        "paddingRight": 5,
        "paddingBottom": 5,
        "paddingLeft": 5,
        "boxShadow": "0 2px 3px rgba(0, 0, 0, 0.15)",
        "width": "auto",
        "right": 0,
        "left": "auto"
    },
    "navbar > show > a:focus": {
        "background": "transparent",
        "outline": 0
    },
    "dropdown-menu show > dropdown-toggle::after": {
        "transform": "rotate(90deg)"
    },
    "dropdown-submenu": {
        "position": "relative"
    },
    "dropdown-submenu a::after": {
        "transform": "rotate(-90deg)",
        "position": "absolute",
        "left": 3,
        "top": "40%"
    },
    "dropdown-submenu:hover dropdown-menu": {
        "display": "flex",
        "flexDirection": "column",
        "position": "absolute !important",
        "marginTop": -30,
        "right": "100%"
    },
    "dropdown-submenu:focus dropdown-menu": {
        "display": "flex",
        "flexDirection": "column",
        "position": "absolute !important",
        "marginTop": -30,
        "right": "100%"
    },
    "navbar-nav li": {
        "textAlign": "right"
    },
    "dropdown-item": {
        "textAlign": "right",
        "paddingTop": 4,
        "paddingRight": 0,
        "paddingBottom": 4,
        "paddingLeft": 0
    },
    "lidropdown-item:not(:last-child)": {
        "borderBottom": "solid 1px #ccc"
    }
});