!function(t){define(["scripts/upfront/upfront-views-editor/content-editor/content-editor-pagination"],function(n){return n.extend({className:"upfront-selector-navigation",handle_pagination_request:function(n,e){e=e?e:parseInt(t(n.target).attr("data-page_idx"),10)||0;this.collection.pagination;this.options.pageSelection(e)}})})}(jQuery);