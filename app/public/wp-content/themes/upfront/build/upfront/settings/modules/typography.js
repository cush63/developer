define(["scripts/upfront/settings/modules/base-module"],function(e){var t=Upfront.Settings.l10n.preset_manager,i=e.extend({className:"settings_module typography_settings_item",group:!0,get_title:function(){return this.options.title},initialize:function(e){this.options=e||{},this.fieldCounter=0,this.currentElement="";var i=this,s=this.options.state,o="no-toggle";"undefined"!=typeof i.options.elements&&this.fieldCounter++,"undefined"!=typeof this.options.default_element&&(this.currentElement=this.options.default_element+"-"),"undefined"!=typeof this.model.get(s+"-element-type")&&"undefined"!=typeof this.options.elements&&(this.currentElement=this.model.get(s+"-element-type")+"-"),this.options.toggle===!0&&(this.fieldCounter++,o="element-toggled"),this.fields=_([new Upfront.Views.Editor.Field.Typeface_Chosen_Select({name:this.currentElement+this.options.fields.typeface,model:this.model,values:Upfront.Views.Editor.Fonts.theme_fonts_collection.get_fonts_for_select(),default_value:this.model.get(this.currentElement+this.options.fields.typeface),label:t.typeface,select_width:"225px",label_style:"inline",className:s+"-font-face static typeFace "+o,change:function(e){i.model.set(i.currentElement+i.options.fields.typeface,e),i.fields._wrapped[1+i.fieldCounter].stopListening(),i.fields._wrapped[1+i.fieldCounter]=new Upfront.Views.Editor.Field.Typeface_Style_Chosen_Select({model:this.model,name:i.currentElement+i.options.fields.fontstyle,values:Upfront.Views.Editor.Fonts.theme_fonts_collection.get_variants_for_select(i.model.get(i.currentElement+i.options.fields.typeface)),label:t.weight_style,font_family:i.model.get(i.options.fields.typeface),select_width:"225px",label_style:"inline",className:s+"-font-style static weightStyle "+o,change:function(e){var t=Upfront.Views.Font_Model.parse_variant(e),s={};s[i.currentElement+i.options.fields.fontstyle]=e,s[i.currentElement+i.options.fields.weight]=t.weight,s[i.currentElement+i.options.fields.style]=t.style,i.model.set(s)},show:function(e){null!==e&&i.fields._wrapped[1+i.fieldCounter].set_option_font(e)}}),i.$el.empty(),i.render()}}),new Upfront.Views.Editor.Field.Typeface_Style_Chosen_Select({model:this.model,name:this.currentElement+this.options.fields.fontstyle,values:Upfront.Views.Editor.Fonts.theme_fonts_collection.get_variants_for_select(i.model.get(this.currentElement+i.options.fields.typeface)),default_value:this.model.get(this.currentElement+this.options.fields.fontstyle),label:t.weight_style,font_family:i.model.get(this.options.fields.typeface),select_width:"225px",label_style:"inline",className:s+"-font-style static weightStyle "+o,change:function(e){var t=Upfront.Views.Font_Model.parse_variant(e);i.model.set(i.currentElement+i.options.fields.fontstyle,e),i.model.set(i.currentElement+i.options.fields.weight,t.weight),i.model.set(i.currentElement+i.options.fields.style,t.style)},show:function(e){null!==e&&i.fields._wrapped[1+i.fieldCounter].set_option_font(e)}}),new Upfront.Views.Editor.Field.Number({model:this.model,className:s+"-font-size fontSize "+o,name:this.currentElement+this.options.fields.size,default_value:this.model.get(this.currentElement+this.options.fields.size),label:t.size,label_style:"inline",suffix:t.px,change:function(e){i.model.set(i.currentElement+i.options.fields.size,e)}}),new Upfront.Views.Editor.Field.Number({model:this.model,className:s+"-font-lineheight lineHeight "+o,name:this.currentElement+this.options.fields.line_height,label:t.line_height,label_style:"inline",default_value:this.model.get(this.currentElement+this.options.fields.line_height),min:0,step:.1,change:function(e){i.model.set(i.currentElement+i.options.fields.line_height,e)}}),new Upfront.Views.Editor.Field.Color({model:this.model,className:s+"-font-color upfront-field-wrap upfront-field-wrap-color sp-cf fontColor "+o,name:this.currentElement+this.options.fields.color,default_value:this.model.get(this.currentElement+this.options.fields.color),blank_alpha:0,label_style:"inline",label:t.color,spectrum:{preferredFormat:"rgb",change:function(e){if(!e)return!1;var t=e.get_is_theme_color()!==!1?e.theme_color:e.toRgbString();i.model.set(i.currentElement+i.options.fields.color,t)},move:function(e){if(!e)return!1;var t=e.get_is_theme_color()!==!1?e.theme_color:e.toRgbString();i.model.set(i.currentElement+i.options.fields.color,t)}}})]),"undefined"!=typeof i.options.elements&&this.fields.unshift(new Upfront.Views.Editor.Field.Select({model:this.model,label:t.type_element,label_style:"inline",name:s+"-element-type",className:s+"-select-element selectElement "+o,values:i.options.elements,change:function(e){i.model.set(s+"-element-type",e),i.$el.empty(),i.render()},show:function(e){i.currentElement=e+"-";var t=i.get_field_values(e);i.update_fields(t)}})),this.options.toggle===!0&&(this.group=!1,this.fields.unshift(new Upfront.Views.Editor.Field.Checkboxes({model:this.model,className:"useTypography checkbox-title "+o,name:i.options.fields.use,label:"",multiple:!1,values:[{label:t.typography,value:"yes",checked:this.model.get(i.options.fields.use)}],change:function(e){console.log("triggered change on checkbox"),i.model.set(i.options.fields.use,e),i.reset_fields(e)},show:function(e,t){var i=t.closest(".state_modules");"yes"==e?(i.find("."+s+"-select-element").show(),i.find("."+s+"-font-face").show(),i.find("."+s+"-font-style").show(),i.find("."+s+"-font-size").show(),i.find("."+s+"-font-lineheight").show(),i.find("."+s+"-font-color").show()):(i.find("."+s+"-select-element").hide(),i.find("."+s+"-font-face").hide(),i.find("."+s+"-font-style").hide(),i.find("."+s+"-font-size").hide(),i.find("."+s+"-font-lineheight").hide(),i.find("."+s+"-font-color").hide())}})))},reset_fields:function(e){var t,i=this;"undefined"!=typeof e&&"yes"===e&&("undefined"!=typeof this.options.elements?_.each(this.options.elements,function(e){var s=e.value+"-";t=i.get_static_field_values(i.options.prepend,s),i.update_fields(t),i.save_static_values(t,s)}):(t=this.get_static_field_values(this.options.prepend,""),i.update_fields(t),this.save_static_values(t,"")),this.$el.empty(),this.render())},save_static_values:function(e,t){var i=Upfront.Views.Font_Model.parse_variant(e.fontstyle);this.model.set(t+this.options.fields.typeface,e.typeface),this.model.set(t+this.options.fields.fontstyle,e.fontstyle),this.model.set(t+this.options.fields.weight,i.weight),this.model.set(t+this.options.fields.style,i.style),this.model.set(t+this.options.fields.size,e.fontsize),this.model.set(t+this.options.fields.line_height,e.line_height),this.model.set(t+this.options.fields.color,e.color)},get_static_field_values:function(e,t){var i={},s="";return"undefined"!=typeof this.options.prefix&&(s=this.options.prefix+"-"),i.typeface=this.model.get(this.clear_prepend(t+s+this.options.fields.typeface,e))||"",i.fontstyle=this.model.get(this.clear_prepend(t+s+this.options.fields.fontstyle,e))||"",i.fontsize=this.model.get(this.clear_prepend(t+s+this.options.fields.size,e))||"",i.line_height=this.model.get(this.clear_prepend(t+s+this.options.fields.line_height,e))||"",i.color=this.model.get(this.clear_prepend(t+s+this.options.fields.color,e))||"",i},clear_prepend:function(e,t){return e.replace(t,"")},get_field_values:function(e){var t={};if("undefined"!=typeof this.options.global_typography&&this.options.global_typography===!0){var i=Upfront.mainData.global_typography[this.normalize_elements_selector(e)];i=i||{},t.typeface=this.model.get(this.currentElement+this.options.fields.typeface)||i.font_face||"",t.fontstyle=this.model.get(this.currentElement+this.options.fields.fontstyle)||i.weight+" "+i.style||"",t.fontsize=this.model.get(this.currentElement+this.options.fields.size)||i.size||"",t.line_height=this.model.get(this.currentElement+this.options.fields.line_height)||i.line_height||"",t.color=this.model.get(this.currentElement+this.options.fields.color)||i.color||""}else t.typeface=this.model.get(this.currentElement+this.options.fields.typeface)||"",t.fontstyle=this.model.get(this.currentElement+this.options.fields.fontstyle)||"",t.fontsize=this.model.get(this.currentElement+this.options.fields.size)||"",t.line_height=this.model.get(this.currentElement+this.options.fields.line_height)||"",t.color=this.model.get(this.currentElement+this.options.fields.color)||"";return t},update_fields:function(e){this.fields._wrapped[this.fieldCounter].set_value(e.typeface),this.fields._wrapped[this.fieldCounter].set_option_font(e.typeface),this.fields._wrapped[this.fieldCounter+1].options.values=Upfront.Views.Editor.Fonts.theme_fonts_collection.get_variants_for_select(e.typeface),this.fields._wrapped[this.fieldCounter+1].set_value(e.fontstyle),this.fields._wrapped[this.fieldCounter+1].set_option_font(e.fontstyle),this.fields._wrapped[this.fieldCounter+2].set_value(e.fontsize),this.fields._wrapped[this.fieldCounter+3].set_value(e.line_height),this.fields._wrapped[this.fieldCounter+4].set_value(e.color),this.fields._wrapped[this.fieldCounter+4].update_input_border_color(e.color)},normalize_elements_selector:function(e){return"a-hover"===e?"a:hover":"blockquote-alternative"===e?"blockquote.upfront-quote-alternative":e}});return i});