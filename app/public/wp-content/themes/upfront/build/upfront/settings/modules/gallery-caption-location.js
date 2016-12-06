define(["scripts/upfront/settings/modules/base-module"],function(e){var i=Upfront.Settings.l10n.gallery_element,t=e.extend({className:"settings_module caption_location gallery-caption-location clearfix",group:!1,initialize:function(e){this.options=e||{};var t=this,o=this.options.state;this.fields=_([new Upfront.Views.Editor.Field.Checkboxes({model:this.model,className:"useCaptions checkbox-title",name:"use_captions",label:"",default_value:1,multiple:!1,values:[{label:i.panel.show_caption,value:"yes"}],change:function(e){t.model.set("use_captions",e)},show:function(e,i){var n=i.closest(".state_modules");if("yes"==e){n.find("."+o+"-caption-select").show(),n.find("."+o+"-caption-trigger").show(),n.find("."+o+"-caption-height").show();var l=t.model.get("caption-height",e);"fixed"===l&&n.find("."+o+"-caption-height-number").show()}else n.find("."+o+"-caption-select").hide(),n.find("."+o+"-caption-trigger").hide(),n.find("."+o+"-caption-height").hide(),n.find("."+o+"-caption-height-number").hide()}}),new Upfront.Views.Editor.Field.Select({model:this.model,className:o+"-caption-select caption_select",name:"captionType",default_value:"below",label:i.panel.caption_location,values:[{value:"over",label:i.panel.over,icon:"over"},{value:"below",label:i.panel.under,icon:"below"}],change:function(e){t.model.set("captionType",e),"below"==e&&t.model.set("showCaptionOnHover","0")},show:function(e,i){var t=i.closest(".state_modules");"below"===e||"undefined"==typeof e?t.find(".gallery-caption-on-hover").hide():t.find(".gallery-caption-on-hover").show()}}),new Upfront.Views.Editor.Field.Radios({className:o+"-caption-trigger field-caption_trigger gallery-caption-on-hover upfront-field-wrap upfront-field-wrap-multiple upfront-field-wrap-radios over_image_field",model:this.model,name:"showCaptionOnHover",label:"",layout:"horizontal-inline",values:[{label:i.panel.always,value:"0"},{label:i.panel.hover,value:"1"}],change:function(e){t.model.set("showCaptionOnHover",e)}}),new Upfront.Views.Editor.Field.Radios({className:o+"-caption-height field-caption-height upfront-field-wrap upfront-field-wrap-multiple upfront-field-wrap-radios",model:this.model,name:"caption-height",label:i.panel.caption_height,layout:"horizontal-inline",values:[{label:i.panel.auto,value:"auto"},{label:i.panel.fixed,value:"fixed"}],change:function(e){t.model.set("caption-height",e)},show:function(e,i){var n=i.closest(".state_modules"),l=t.model.get("use_captions");"yes"===l&&("fixed"===e?n.find("."+o+"-caption-height-number").show():n.find("."+o+"-caption-height-number").hide())}}),new Upfront.Views.Editor.Field.Number({model:this.model,className:o+"-caption-height-number caption-height-number",name:"thumbCaptionsHeight",min:1,label:"",default_value:20,values:[{label:"px",value:"1"}],change:function(e){t.model.set("thumbCaptionsHeight",e)}})]),this.listenToOnce(this,"rendered",function(){setTimeout(function(){if("yes"===t.model.get("use_captions")){t.$el.find("."+o+"-caption-select").show(),t.$el.find("."+o+"-caption-trigger").show(),t.$el.find("."+o+"-caption-height").show();var e=t.model.get("caption-height");"fixed"===e&&t.$el.find("."+o+"-caption-height-number").show()}else t.$el.find("."+o+"-caption-select").hide(),t.$el.find("."+o+"-caption-trigger").hide(),t.$el.find("."+o+"-caption-height").hide(),t.$el.find("."+o+"-caption-height-number").hide()},500)})}});return t});