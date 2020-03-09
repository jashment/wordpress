// "use strict";

// var currentUrl = location.href
// var resultsArray = currentUrl.split('/')

// var numberOfParts = resultsArray.length

// var pieceINeed = resultsArray[numberOfParts - 1]
// console.log(pieceINeed)

// var menu = document.querySelectorAll("ul#primaryNav li a");
// var menu2 = document.querySelectorAll("ul#primaryNav li li ul li")

// var i;

// for (i = 0; i < menu.length; i++) {
//     var activePage = menu[i].getAttribute("href")

//     var currentArray = activePage.split('?')

//     var currentArray2 = currentArray[0]

//     var currentArray3 = currentArray2.split('#')


//     if (currentArray3[0].includes('/')) {
//         currentArray3 = currentArray3[0].split('/').join('')
//         // console.log(`This does!!! ${currentArray3}`)
//     }


//     var activePage2 = currentArray3[0]
//     // console.log(activePage2)

//     if (activePage2 === pieceINeed || currentArray3 === pieceINeed) {
//         console.log(`Main Active: ${activePage2}`)
//         console.log(`Main piece: ${pieceINeed}`)
//         menu[i].parentNode.className = "active"
//         if (currentArray3 === 'agent1.php' || currentArray3 === 'agent2.php') {
//             // menu[i].parentNode.className = "active"
//             menu[i].parentNode.parentNode.parentNode.parentNode.childNodes[5].className = "active"
//             // menu[i].parentNode.parentNode.parentNode.parentNode.childNodes[1].className = "parent"
//             menu[i].parentNode.parentNode.parentNode.className = "active"
//             menu[i].parentNode.parentNode.parentNode.childNodes[3].className = "parent"
//         } else {
//             menu[i].parentNode.parentNode.className = ""
//         }


//     } else {
//         menu[i].parentNode.className = ""
//         console.log(`Else Active: ${activePage2}`)
//         console.log(`Else Piece: ${pieceINeed}`)
//         console.log(menu[i].parentNode.parentNode.parentNode)
//     }

//     // for (i = 0; i < menu2.length; i++) {
//     //     var activePage3 = menu2[i].getAttribute("href")
//     //     // console.log(activePage)
//     //     var currentArray4 = activePage.split("?")
//     //     // console.log(currentArray)
//     //     var currentArray5 = currentArray4[0]
//     //     // console.log(currentArray2)
//     //     var currentArray6 = currentArray5.split('#')
//     //     // console.log(currentArray3)

//     //     if (currentArray6[0].includes('/')) {
//     //         currentArray6 = currentArray6[0].split('/').join('')
//     //         console.log(`This does!!! ${currentArray6}`)
//     //     }
//     //     var activePage4 = currentArray6[0]
//     //     console.log(currentArray6)

//     //     if (currentArray6 === pieceINeed) {
//     //         console.log(`Main Active: ${currentArray6}`)
//     //         console.log(`Main Piece: ${pieceINeed}`)
//     //         // menu2[i].parentNode.className = "active"
//     //         menu2[i].parentNode.parentNode.parentNode.childNodes[1] = "active"
//     //         menu2[i].parentNode.parentNode.parentNode.className = "parent"
//     //         console.log(menu2[i].parentNode.parentNode.childNodes[1])
//     //     } else {
//     //         menu2[i].parentNode.className = ""
//     //         console.log(`Else Active: ${currentArray6}`)
//     //         console.log(`Else Piece: ${pieceINeed}`)
//     //     }
//     // }
// }

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