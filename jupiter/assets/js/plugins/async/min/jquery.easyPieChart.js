!function($){$.easyPieChart=function(el,options){var addScaleLine,animateLine,drawLine,easeInOutQuad,rAF,renderBackground,renderScale,renderTrack,_this=this;return this.el=el,this.$el=$(el),this.$el.data("easyPieChart",this),this.init=function(){var percent,scaleBy;return _this.options=$.extend({},$.easyPieChart.defaultOptions,options),percent=parseInt(_this.$el.data("percent"),10),_this.percentage=0,_this.canvas=$("<canvas width='"+_this.options.size+"' height='"+_this.options.size+"'></canvas>").get(0),_this.$el.append(_this.canvas),"undefined"!=typeof G_vmlCanvasManager&&null!==G_vmlCanvasManager&&G_vmlCanvasManager.initElement(_this.canvas),_this.ctx=_this.canvas.getContext("2d"),window.devicePixelRatio>1&&(scaleBy=window.devicePixelRatio,$(_this.canvas).css({width:_this.options.size,height:_this.options.size}),_this.canvas.width*=scaleBy,_this.canvas.height*=scaleBy,_this.ctx.scale(scaleBy,scaleBy)),_this.ctx.translate(_this.options.size/2,_this.options.size/2),_this.$el.addClass("easyPieChart"),_this.$el.css({width:_this.options.size,height:_this.options.size,lineHeight:""+_this.options.size+"px"}),_this.update(percent),_this},this.update=function(percent){return percent=parseFloat(percent)||0,_this.options.animate===!1?drawLine(percent):animateLine(_this.percentage,percent),_this},renderScale=function(){var i,_i,_results;for(_this.ctx.fillStyle=_this.options.scaleColor,_this.ctx.lineWidth=1,_results=[],i=_i=0;_i<=24;i=++_i)_results.push(addScaleLine(i));return _results},addScaleLine=function(i){var offset;offset=i%6===0?0:.017*_this.options.size,_this.ctx.save(),_this.ctx.rotate(i*Math.PI/12),_this.ctx.fillRect(_this.options.size/2-offset,0,.05*-_this.options.size+offset,1),_this.ctx.restore()},renderTrack=function(){var offset;offset=_this.options.size/2-_this.options.lineWidth/2,_this.options.scaleColor!==!1&&(offset-=.08*_this.options.size),_this.ctx.beginPath(),_this.ctx.arc(0,0,offset,0,2*Math.PI,!0),_this.ctx.closePath(),_this.ctx.strokeStyle=_this.options.trackColor,_this.ctx.lineWidth=_this.options.lineWidth,_this.ctx.stroke()},renderBackground=function(){_this.options.scaleColor!==!1&&renderScale(),_this.options.trackColor!==!1&&renderTrack()},drawLine=function(percent){var offset;renderBackground(),_this.ctx.strokeStyle=$.isFunction(_this.options.barColor)?_this.options.barColor(percent):_this.options.barColor,_this.ctx.lineCap=_this.options.lineCap,_this.ctx.lineWidth=_this.options.lineWidth,offset=_this.options.size/2-_this.options.lineWidth/2,_this.options.scaleColor!==!1&&(offset-=.08*_this.options.size),_this.ctx.save(),_this.ctx.rotate(-Math.PI/2),_this.ctx.beginPath(),_this.ctx.arc(0,0,offset,0,2*Math.PI*percent/100,!1),_this.ctx.stroke(),_this.ctx.restore()},rAF=function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||function(callback){return window.setTimeout(callback,1e3/60)}}(),animateLine=function(from,to){var anim,startTime;_this.options.onStart.call(_this),_this.percentage=to,startTime=Date.now(),anim=function(){var currentValue,process;if(process=Date.now()-startTime,process<_this.options.animate&&rAF(anim),_this.ctx.clearRect(-_this.options.size/2,-_this.options.size/2,_this.options.size,_this.options.size),renderBackground.call(_this),currentValue=[easeInOutQuad(process,from,to-from,_this.options.animate)],_this.options.onStep.call(_this,currentValue),drawLine.call(_this,currentValue),process>=_this.options.animate)return _this.options.onStop.call(_this)},rAF(anim)},easeInOutQuad=function(t,b,c,d){var easeIn,easing;return easeIn=function(t){return Math.pow(t,2)},easing=function(t){return t<1?easeIn(t):2-easeIn(t/2*-2+2)},t/=d/2,c/2*easing(t)+b},this.init()},$.easyPieChart.defaultOptions={barColor:"#ef1e25",trackColor:"#f2f2f2",scaleColor:"#dfe0e0",lineCap:"round",size:110,lineWidth:3,animate:!1,onStart:$.noop,onStop:$.noop,onStep:$.noop},$.fn.easyPieChart=function(options){return $.each(this,function(i,el){var $el;if($el=$(el),!$el.data("easyPieChart"))return $el.data("easyPieChart",new $.easyPieChart(el,options))})}}(jQuery);;