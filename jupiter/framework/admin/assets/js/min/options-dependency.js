!function($){"use strict";var Dependency=function(el){this.el=el};Dependency.prototype={init:function(){this.cacheElements(),this.bindEvents()},cacheElements:function(){this.$child=$(this.el),this.vals=this.$child.data("dependency-value");var motherName=this.$child.data("dependency-mother");this.$mother=$("#"+motherName)},bindEvents:function(){var self=this;this.$mother.on("change",this.resolveDependency.bind(this)),this.$mother.attrchange({callback:self.resolveDependency.bind(self)}),$(window).on("load",function(){setTimeout(self.resolveDependency.bind(self),100)})},resolveDependency:function(){var val=this.$mother.val();this.hasValue(val)?this.show():this.hide()},hasValue:function(val){return this.vals.indexOf(val)!==-1},show:function(){this.$child.show()},hide:function(){this.$child.hide()}};var $dependencyChildren=$("[data-dependency-mother]");$dependencyChildren.each(function(){var dep=new Dependency(this);dep.init()})}(jQuery);;
