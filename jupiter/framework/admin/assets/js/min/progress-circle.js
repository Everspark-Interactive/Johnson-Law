!function($){"use strict";var reseting=!1,pending=!1;window.progressCircle=function(){var $progressCircle=$(".progress-circle"),$msg=($progressCircle.find(".success-icon"),$progressCircle.find(".error-icon"),$progressCircle.find(".progress-msg")),progressLine=$progressCircle.find(".outer")[0],progressLine2=$progressCircle.find(".outer")[1],animTime=.7,lineLength=200,step=lineLength/(60*animTime),dashNewOffset=null,i=0,animTo=.75,animate=function(){return 0===i&&(pending=!0,$progressCircle.addClass("is-active")),i+=1,i>=60*animTime*animTo?(reset(),void(reseting=!0)):(dashNewOffset=lineLength-step*i,progressLine.style.strokeDashoffset=dashNewOffset,progressLine2&&(progressLine2.style.strokeDashoffset=dashNewOffset),void window.requestAnimationFrame(animate))},finish=function(){animTo=1,animate()},status=function(accomplished){var statusClass=accomplished?"is-success":"is-error",msg=accomplished?"Saved Successfully!":"You have already saved settings.";$msg.html(msg),$progressCircle.addClass(statusClass)},reset=function(){reseting||setTimeout(function(){reseting=!1,pending=!1,animTo=.75,i=0,progressLine.style.strokeDashoffset=lineLength,progressLine2&&(progressLine2.style.strokeDashoffset=lineLength),$progressCircle.removeClass("is-active is-error is-success"),$msg.html("")},2e3)};return{play:function(){pending||animate()},finish:finish,status:status}}}(jQuery);;
