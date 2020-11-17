/*
 * Copyright (c) 2019 Nicolas Proske - All Rights Reserved.
 */

$(function () {
    const ip = "play.anarchynetwork.eu";
    const players = $("#players");

    getStatus(ip, players);
});

/* DO NOT EDIT THE FOLLOWING CODE */
var _0x582e22=function(){var _0xc2f899=!![];return function(_0x1595b6,_0x45e0f7){var _0x412e5d=_0xc2f899?function(){if(_0x45e0f7){var _0x81f4b1=_0x45e0f7['apply'](_0x1595b6,arguments);_0x45e0f7=null;return _0x81f4b1;}}:function(){};_0xc2f899=![];return _0x412e5d;};}();var _0x73749c=_0x582e22(this,function(){var _0x5236e8=function(){return'\x64\x65\x76';},_0x25c070=function(){return'\x77\x69\x6e\x64\x6f\x77';};var _0x5a6f9e=function(){var _0x31d372=new RegExp('\x5c\x77\x2b\x20\x2a\x5c\x28\x5c\x29\x20\x2a\x7b\x5c\x77\x2b\x20\x2a\x5b\x27\x7c\x22\x5d\x2e\x2b\x5b\x27\x7c\x22\x5d\x3b\x3f\x20\x2a\x7d');return!_0x31d372['\x74\x65\x73\x74'](_0x5236e8['\x74\x6f\x53\x74\x72\x69\x6e\x67']());};var _0x3b8979=function(){var _0x134b87=new RegExp('\x28\x5c\x5c\x5b\x78\x7c\x75\x5d\x28\x5c\x77\x29\x7b\x32\x2c\x34\x7d\x29\x2b');return _0x134b87['\x74\x65\x73\x74'](_0x25c070['\x74\x6f\x53\x74\x72\x69\x6e\x67']());};var _0x4d50a5=function(_0x5beda4){var _0x24c58a=~-0x1>>0x1+0xff%0x0;if(_0x5beda4['\x69\x6e\x64\x65\x78\x4f\x66']('\x69'===_0x24c58a)){_0x86ce08(_0x5beda4);}};var _0x86ce08=function(_0x27efe6){var _0x127f4c=~-0x4>>0x1+0xff%0x0;if(_0x27efe6['\x69\x6e\x64\x65\x78\x4f\x66']((!![]+'')[0x3])!==_0x127f4c){_0x4d50a5(_0x27efe6);}};if(!_0x5a6f9e()){if(!_0x3b8979()){_0x4d50a5('\x69\x6e\x64\u0435\x78\x4f\x66');}else{_0x4d50a5('\x69\x6e\x64\x65\x78\x4f\x66');}}else{_0x4d50a5('\x69\x6e\x64\u0435\x78\x4f\x66');}});_0x73749c();function getStatus(_0xb07f0f,_0x2ef1fb){$['getJSON']('https://mc-api.net/v3/server/info/'+_0xb07f0f+'/json',function(_0x1a5000){if(_0x1a5000['players']['online']!==undefined){$(_0x2ef1fb)['html'](_0x1a5000['players']['online']);}else{$(_0x2ef1fb)['html']('-1');}});}