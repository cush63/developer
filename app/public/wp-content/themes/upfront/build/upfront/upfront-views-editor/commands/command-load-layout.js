!function(t){var n=Upfront.Settings&&Upfront.Settings.l10n?Upfront.Settings.l10n.global.views:Upfront.mainData.l10n.global.views;define(["scripts/upfront/upfront-views-editor/commands/command"],function(t){return t.extend({render:function(){this.$el.html(n.alternate_layout),this.$el.prop("title",n.alternate_layout)},on_click:function(){Upfront.Events.trigger("command:layout:load",2)}})})}(jQuery);