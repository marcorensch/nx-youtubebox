/*

    youtube API Base
	from https://developers.google.com/youtube/iframe_api_reference
	
	This code loads the IFrame Player API code asynchronously.

*/
var tag = document.createElement('script');

tag.src = "http://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);