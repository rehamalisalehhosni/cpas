import React, {StyleSheet, Dimensions, PixelRatio} from "react-native";
const {width, height, scale} = Dimensions.get("window"),
    vw = width / 100,
    vh = height / 100,
    vmin = Math.min(vw, vh),
    vmax = Math.max(vw, vh);

export default StyleSheet.create({
    "demo-button button": {
        "marginBottom": 5
    },
    "demo-icons li": {
        "marginBottom": 50,
        "textAlign": "center"
    },
    "demo-icons lnr": {
        "fontSize": 28
    },
    "demo-icons fa": {
        "fontSize": 28
    },
    "demo-icons cssclass": {
        "display": "block",
        "marginTop": 5,
        "marginLeft": 5
    },
    "body": {
        "overflowX": "hidden"
    },
    "logo": {
        "maxHeight": 120,
        "marginTop": 0,
        "marginRight": "auto",
        "marginBottom": 0,
        "marginLeft": "auto"
    },
    "sidebar brand": {
        "paddingTop": 20,
        "paddingRight": "!important",
        "paddingBottom": 20,
        "paddingLeft": "!important"
    },
    "img_view": {
        "width": "60px !important",
        "height": "60px !important"
    },
    "imgs": {
        "display": "inline-block",
        "position": "relative",
        "cursor": "pointer"
    },
    "lis": {
        "display": "inline-block",
        "position": "relative",
        "cursor": "pointer"
    },
    "imgs i": {
        "position": "absolute",
        "color": "red",
        "display": "inline-flex",
        "top": "53%",
        "left": "60%",
        "fontSize": 22
    },
    "lis i": {
        "position": "absolute",
        "color": "red",
        "display": "inline-flex",
        "top": "53%",
        "left": "60%",
        "fontSize": 22
    }
});