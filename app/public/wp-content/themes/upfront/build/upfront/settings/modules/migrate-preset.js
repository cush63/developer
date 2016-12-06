define(["scripts/upfront/settings/modules/base-module"],function(e){var t=Upfront.Settings.l10n.preset_manager,s=e.extend({className:"migrate-preset-overlay",initialize:function(e){this.options=e||{};var s=this,n=Upfront.Views.Editor.Field.Text.extend({get_field_html:function(){return""}}),i=Upfront.Views.Editor.Field.Chosen_Select.extend({className:"preset select-preset-field-overlay",render:function(){Upfront.Views.Editor.Field.Chosen_Select.prototype.render.call(this);this.$el.find(".upfront-chosen-select").val();return this.$el.find(".upfront-chosen-select").chosen({search_contains:!0,width:"171px"}),this},get_value_html:function(e,t){var s="",n=this.get_saved_value()?this.get_saved_value():"default";return this.model.get_property_value_by_name("usingNewAppearanche")||(n=""),e.value===this.clear_preset_name(n)&&(s=' selected="selected"'),['<option value="',e.value,'"',s,">",e.label,"</option>"].join("")},clear_preset_name:function(e){return e=e.replace(" ","-"),e=e.replace(/[^-a-zA-Z0-9]/,"")},on_change:function(e){this.trigger("change",this.get_value())}});this.selectPresetField=new i({model:this.model,label:"",values:this.get_presets(),change:function(e){}}),this.listenTo(this.selectPresetField,"change",this.previewPreset);var l=[new Upfront.Views.Editor.Settings.Item({model:this.model,className:"new-preset-module",fields:[new n({model:this.model,label:t.convert_preset_info,className:"migrate-preset-info migrate-info-icon"}),new n({model:this.model,label:t.select_preset_info,className:"migrate-preset-info"}),this.selectPresetField,new Upfront.Views.Editor.Field.Button({model:this.model,label:t.apply_label,className:"migrate-preset-apply",compact:!0,on_click:function(){s.trigger("upfront:presets:change",s.selectPresetField.get_value())}}),new n({model:this.model,label:t.save_as_preset_button_info,className:"migrate-preset-info save-as-preset-info"}),new Upfront.Views.Editor.Field.Button({model:this.model,label:t.convert_style_to_preset,className:"migrate-preset-button",compact:!0,on_click:function(){s.show_new_preset_fields()}}),new Upfront.Views.Editor.Field.Button({model:this.model,label:t.cancel_label,className:"new-preset-button-cancel",compact:!0,on_click:function(){s.hide_new_preset_fields()}}),new Upfront.Views.Editor.Field.Text({model:this.model,label:"",default_value:s.suggestPresetName(this.options.elementPreset),className:"new-preset-button-input"}),new Upfront.Views.Editor.Field.Button({model:this.model,label:t.ok_label,className:"new-preset-button-submit",compact:!0,on_click:function(){var e=s.$el.find(".new-preset-button-input input").val();return""===e.trim()?void alert(t.not_empty_label):e.match(/[^A-Za-z0-9 ]/)?void alert(t.special_character_label):e.match(/^[A-Za-z][A-Za-z0-9 ]*$/)?void s.trigger("upfront:presets:new",e.trim()):void alert(t.invalid_preset_label)}})]})];setTimeout(function(){s.hide_new_preset_fields()},20),this.fields=_(l)},suggestPresetName:function(e){for(var s=this.capitalisePreset(e.replace(/-preset/,"")),n=s+t.preset,i=n,l=1,r=this.get_all_preset_names();0<r.indexOf(i);)i=n+l,l++;return i},capitalisePreset:function(e){return e.charAt(0).toUpperCase()+e.slice(1).toLowerCase()},hide_new_preset_fields:function(){var e=this;e.$el.find(".new-preset-button-cancel").hide(),e.$el.find(".new-preset-button-input").hide(),e.$el.find(".new-preset-button-submit").hide(),e.$el.find(".migrate-preset-button").show(),e.$el.find(".existing-preset-overlay-layout").remove()},show_new_preset_fields:function(){var e=this;e.$el.find(".new-preset-button-cancel").show(),e.$el.find(".new-preset-button-input").show(),e.$el.find(".new-preset-button-submit").show(),e.$el.find(".migrate-preset-button").hide(),e.$el.find(".existing-preset-module").append('<div class="existing-preset-overlay-layout">&nbsp;</div>')},previewPreset:function(e){this.trigger("upfront:presets:preview",e)},get_all_preset_names:function(){var e=[];return _.each(this.options.presets.models,function(t){var s="undefined"==typeof t.get("name")?t.get("id"):t.get("name");e.push(s)}),e},get_presets:function(){var e=[{label:"No preset",value:""}];return _.each(this.options.presets.models,function(t){"undefined"==typeof t.get("legacy")&&("undefined"==typeof t.get("name")?e.push({label:t.get("id"),value:t.get("id")}):e.push({label:t.get("name"),value:t.get("id")}))}),e}});return s});