/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************************!*\
  !*** ./resources/js/company/company.js ***!
  \*****************************************/
$(document).ready(function () {
  $('#cnpj').mask('00.000.000/0000-00', {
    reverse: true
  });
  var SPMaskBehavior = function SPMaskBehavior(val) {
      return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    spOptions = {
      onKeyPress: function onKeyPress(val, e, field, options) {
        field.mask(SPMaskBehavior.apply({}, arguments), options);
      }
    };
  $('#phone').mask(SPMaskBehavior, spOptions);
  $('#btnCad').click(function (e) {
    e.preventDefault();
    $('#cnpj').unmask();
    $('#phone').unmask();
    $('#formCad').submit();
  });
});
/******/ })()
;