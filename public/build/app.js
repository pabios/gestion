(self["webpackChunk"] = self["webpackChunk"] || []).push([["app"],{

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _styles_app_css__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./styles/app.css */ "./assets/styles/app.css");
Object(function webpackMissingModule() { var e = new Error("Cannot find module './bootstrap'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());
/* harmony import */ var _js_global__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./js/global */ "./assets/js/global.js");
/* harmony import */ var _js_global__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_js_global__WEBPACK_IMPORTED_MODULE_2__);
/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */
// any CSS you import will output into a single css file (app.css in this case)
 // start the Stimulus application




__webpack_require__(Object(function webpackMissingModule() { var e = new Error("Cannot find module '../../images'"); e.code = 'MODULE_NOT_FOUND'; throw e; }()));

/***/ }),

/***/ "./assets/js/global.js":
/*!*****************************!*\
  !*** ./assets/js/global.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");

__webpack_require__(/*! core-js/modules/es.promise.js */ "./node_modules/core-js/modules/es.promise.js");

__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");

__webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");

__webpack_require__(/*! core-js/modules/es.array.concat.js */ "./node_modules/core-js/modules/es.array.concat.js");

__webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");

__webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");

/**
 * fetch api 
 * method -> get 
 * return text
 */
var resultat = document.querySelector('.resultat');
var apiGet = '/api/5 ';
console.log('bonjour le monde');
document.addEventListener('DOMContentLoaded', function () {
  fetch(apiGet).then(function (res) {
    if (res.ok) {
      return res.text();
    }
  }).then(function (data) {
    console.log(data);
    data.forEach(function (elm) {
      resultat.innerHTML += "\n                        <tr>\n                            <td> \n                                ".concat(elm.id, "\n                            </td>\n                            <td> \n                                ").concat(elm.title, "\n                            </td>\n                            <td> \n                            ").concat(elm.description, "\n                        </td>\n                    </tr> \n                 ");
    });
  })["catch"](function (e) {
    console.log('erreur de lecture' + e);
  });
}); // lien.addEventListener('click',ismaApi,false)

/***/ }),

/***/ "./assets/styles/app.css":
/*!*******************************!*\
  !*** ./assets/styles/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_modules_es_array_concat_js-node_modules_core-js_modules_es_array-fa604e"], () => (__webpack_exec__("./assets/app.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiYXBwLmpzIiwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7O0FBQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBRUE7Q0FHQTs7QUFDQTtBQUNBOztBQUtBQSxtQkFBTyxDQUFDLDJJQUFELENBQVA7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7OztBQ2pCQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0MsSUFBSUMsUUFBUSxHQUFHQyxRQUFRLENBQUNDLGFBQVQsQ0FBdUIsV0FBdkIsQ0FBZjtBQUVBLElBQUlDLE1BQU0sR0FBRyxTQUFiO0FBRURDLE9BQU8sQ0FBQ0MsR0FBUixDQUFZLGtCQUFaO0FBQ0FKLFFBQVEsQ0FBQ0ssZ0JBQVQsQ0FBMEIsa0JBQTFCLEVBQTZDLFlBQVU7QUFFL0NDLEVBQUFBLEtBQUssQ0FBQ0osTUFBRCxDQUFMLENBQ0NLLElBREQsQ0FDTSxVQUFBQyxHQUFHLEVBQUk7QUFDVCxRQUFHQSxHQUFHLENBQUNDLEVBQVAsRUFBVTtBQUNOLGFBQU9ELEdBQUcsQ0FBQ0UsSUFBSixFQUFQO0FBQ0g7QUFDSixHQUxELEVBTUNILElBTkQsQ0FNTSxVQUFBSSxJQUFJLEVBQUc7QUFDVFIsSUFBQUEsT0FBTyxDQUFDQyxHQUFSLENBQVlPLElBQVo7QUFDSUEsSUFBQUEsSUFBSSxDQUFDQyxPQUFMLENBQWEsVUFBQUMsR0FBRyxFQUFJO0FBQ2hCZCxNQUFBQSxRQUFRLENBQUNlLFNBQVQsaUhBR2NELEdBQUcsQ0FBQ0UsRUFIbEIscUhBTWNGLEdBQUcsQ0FBQ0csS0FObEIsaUhBU1VILEdBQUcsQ0FBQ0ksV0FUZDtBQWFILEtBZEQ7QUFlUCxHQXZCRCxXQXdCTyxVQUFBQyxDQUFDLEVBQUk7QUFDUmYsSUFBQUEsT0FBTyxDQUFDQyxHQUFSLENBQVksc0JBQW9CYyxDQUFoQztBQUNILEdBMUJEO0FBNEJQLENBOUJELEdBa0NJOzs7Ozs7Ozs7Ozs7QUM1Q0oiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvYXBwLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9qcy9nbG9iYWwuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3N0eWxlcy9hcHAuY3NzIl0sInNvdXJjZXNDb250ZW50IjpbIi8qXG4gKiBXZWxjb21lIHRvIHlvdXIgYXBwJ3MgbWFpbiBKYXZhU2NyaXB0IGZpbGUhXG4gKlxuICogV2UgcmVjb21tZW5kIGluY2x1ZGluZyB0aGUgYnVpbHQgdmVyc2lvbiBvZiB0aGlzIEphdmFTY3JpcHQgZmlsZVxuICogKGFuZCBpdHMgQ1NTIGZpbGUpIGluIHlvdXIgYmFzZSBsYXlvdXQgKGJhc2UuaHRtbC50d2lnKS5cbiAqL1xuXG4vLyBhbnkgQ1NTIHlvdSBpbXBvcnQgd2lsbCBvdXRwdXQgaW50byBhIHNpbmdsZSBjc3MgZmlsZSAoYXBwLmNzcyBpbiB0aGlzIGNhc2UpXG5pbXBvcnQgJy4vc3R5bGVzL2FwcC5jc3MnO1xuXG4vLyBzdGFydCB0aGUgU3RpbXVsdXMgYXBwbGljYXRpb25cbmltcG9ydCAnLi9ib290c3RyYXAnO1xuaW1wb3J0ICcuL2pzL2dsb2JhbCc7XG5cbiBcblxuXG5yZXF1aXJlKCcuLi8uLi9pbWFnZXMnKTsiLCIvKipcbiAqIGZldGNoIGFwaSBcbiAqIG1ldGhvZCAtPiBnZXQgXG4gKiByZXR1cm4gdGV4dFxuICovXG4gbGV0IHJlc3VsdGF0ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLnJlc3VsdGF0JylcblxuIGxldCBhcGlHZXQgPSAnL2FwaS81ICdcblxuY29uc29sZS5sb2coJ2JvbmpvdXIgbGUgbW9uZGUnKVxuZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignRE9NQ29udGVudExvYWRlZCcsZnVuY3Rpb24oKXtcbiAgICBcbiAgICAgICAgZmV0Y2goYXBpR2V0KVxuICAgICAgICAudGhlbihyZXMgPT4ge1xuICAgICAgICAgICAgaWYocmVzLm9rKXtcbiAgICAgICAgICAgICAgICByZXR1cm4gcmVzLnRleHQoKVxuICAgICAgICAgICAgfVxuICAgICAgICB9KVxuICAgICAgICAudGhlbihkYXRhID0+e1xuICAgICAgICAgICAgY29uc29sZS5sb2coZGF0YSlcbiAgICAgICAgICAgICAgICBkYXRhLmZvckVhY2goZWxtID0+IHtcbiAgICAgICAgICAgICAgICAgICAgcmVzdWx0YXQuaW5uZXJIVE1MICs9IGBcbiAgICAgICAgICAgICAgICAgICAgICAgIDx0cj5cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8dGQ+IFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAke2VsbS5pZH1cbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L3RkPlxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDx0ZD4gXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICR7ZWxtLnRpdGxlfVxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHRkPiBcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAke2VsbS5kZXNjcmlwdGlvbn1cbiAgICAgICAgICAgICAgICAgICAgICAgIDwvdGQ+XG4gICAgICAgICAgICAgICAgICAgIDwvdHI+IFxuICAgICAgICAgICAgICAgICBgICAgICAgICAgICAgIFxuICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICB9KVxuICAgICAgICAuY2F0Y2goZSA9PiB7XG4gICAgICAgICAgICBjb25zb2xlLmxvZygnZXJyZXVyIGRlIGxlY3R1cmUnK2UpO1xuICAgICAgICB9KVxuICAgIFxufSlcblxuXG5cbiAgICAvLyBsaWVuLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJyxpc21hQXBpLGZhbHNlKSIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJuYW1lcyI6WyJyZXF1aXJlIiwicmVzdWx0YXQiLCJkb2N1bWVudCIsInF1ZXJ5U2VsZWN0b3IiLCJhcGlHZXQiLCJjb25zb2xlIiwibG9nIiwiYWRkRXZlbnRMaXN0ZW5lciIsImZldGNoIiwidGhlbiIsInJlcyIsIm9rIiwidGV4dCIsImRhdGEiLCJmb3JFYWNoIiwiZWxtIiwiaW5uZXJIVE1MIiwiaWQiLCJ0aXRsZSIsImRlc2NyaXB0aW9uIiwiZSJdLCJzb3VyY2VSb290IjoiIn0=