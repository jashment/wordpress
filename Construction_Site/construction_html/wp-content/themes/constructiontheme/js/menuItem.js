// JavaScript Document
/* jslint browser:true */
"use strict";
let found = false;
(function () {
    let elements = document.querySelectorAll("#primaryNav li a");
    let getPageName = function (str) {
        let queryIgnore = /\/+|[?\#].*$/;
        let parts = str.split(queryIgnore);
        let pageName;
        while (!pageName && parts.length) pageName = parts.pop();
        return pageName;
    };
    let setParent = function (element) {
        let listElement = element.parentNode;
        if (listElement.tagName == "UL" && listElement.id != 'primaryNav') {
            listElement.parentNode.classList.add("active")
            console.log(listElement.parentNode)
        }
    };
    let pageName = getPageName(document.location.href);
    for (let i = 0, len = elements.length; i < len; ++i) {
        let element = elements[i];
        let parent = element.parentNode;

        if (getPageName(element.getAttribute("href")) == pageName) {
            parent.classList.add("active");
            setParent(parent);
            console.log(parent)
        }
        else {
            parent.classList.remove("active");
        }
    }
})();

$(window).load(function () {
    $('#nav > ul:first-child > li > a').removeAttr('href');
});