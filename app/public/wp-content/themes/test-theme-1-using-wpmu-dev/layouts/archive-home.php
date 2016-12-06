<?php
$layout_version = '1.0.0';

$main = upfront_create_region(
			array (
  'name' => 'main',
  'title' => 'Main Area',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'main',
  'position' => 10,
  'allow_sidebar' => true,
),
			array (
  'row' => 200,
  'background_type' => 'color',
  'background_color' => 'rgba(247,247,247,1)',
  'version' => '1.0.0',
  'breakpoint' => 
  (array)(array(
     'tablet' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
     'mobile' => 
    (array)(array(
       'edited' => false,
       'col' => 24,
    )),
  )),
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => false,
  ),
  'bg_padding_type' => 'varied',
  'top_bg_padding_slider' => 0,
  'top_bg_padding_num' => 0,
  'bottom_bg_padding_slider' => 0,
  'bottom_bg_padding_num' => 0,
  'bg_padding_slider' => 0,
  'bg_padding_num' => 0,
)
			);

$main->add_element("Uimage", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1468468775154-1739',
  'id' => 'module-1468468775154-1739',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/archive-home/uf_logo-47x47.png',
    'srcFull' => '{{upfront:style_url}}/images/archive-home/uf_logo.png',
    'srcOriginal' => '{{upfront:style_url}}/images/archive-home/uf_logo.png',
    'image_title' => '',
    'alternative_text' => '',
    'include_image_caption' => true,
    'image_caption' => '<p>My awesome image caption</p>',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' => 
    (array)(array(
       'width' => 47,
       'height' => 47,
    )),
    'fullSize' => 
    (array)(array(
       'width' => 90,
       'height' => 90,
    )),
    'position' => 
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 36.5,
    'element_size' => 
    (array)(array(
       'width' => 1050,
       'height' => 90,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '16651',
    'align' => 'center',
    'stretch' => false,
    'vstretch' => false,
    'quick_swap' => false,
    'is_locked' => true,
    'gifImage' => 0,
    'placeholder_class' => '',
    'preset' => 'default',
    'display_caption' => 'showCaption',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image',
    'id_slug' => 'image',
    'when_clicked' => false,
    'image_link' => '',
    'link' => 
    (array)(array(
       'type' => false,
       'url' => '',
       'target' => false,
    )),
    'element_id' => 'image-1468468775152-1436',
    'padding_slider' => 15,
    'top_padding_num' => '80',
    'bottom_padding_num' => '40',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'row' => 24,
    'valign' => 'center',
    'isDotAlign' => true,
    'lock_padding' => '',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '80',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '40',
    'left_padding_num' => 15,
    'right_padding_num' => 15,
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1468469358762-1976',
  'edited' => true,
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 12,
      'order' => 1,
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 1,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
));

$main->add_element("PlainTxt", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1468409923827-1672',
  'id' => 'module-1468409923827-1672',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h2 style="text-align: center;">Welcome to the Homepage of Test Theme 1 using WPMU DEV</h2>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1468409923826-1943',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'preset' => 'default',
    'padding_slider' => 15,
    'top_padding_num' => 15,
    'bottom_padding_num' => 15,
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'lock_padding' => '',
    'padding_number' => 15,
    'left_padding_num' => 15,
    'right_padding_num' => 15,
    'anchor' => '',
    'current_preset' => 'default',
    'breakpoint_presets' => 
    (array)(array(
       'desktop' => 
      (array)(array(
         'preset' => 'default',
      )),
    )),
    'is_edited' => true,
    'theme_style' => '',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1468409954037-1564',
  'edited' => true,
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 12,
      'order' => 2,
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 2,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
));

$main->add_element("PlainTxt", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1468468185982-1850',
  'id' => 'module-1468468185982-1850',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p style="text-align: center;">Get started building right away.</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1468468185981-1427',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'preset' => 'default',
    'padding_slider' => 15,
    'top_padding_num' => 15,
    'bottom_padding_num' => '0',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'lock_padding' => '',
    'padding_number' => 15,
    'left_padding_num' => 15,
    'right_padding_num' => 15,
    'anchor' => '',
    'current_preset' => 'default',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '0',
    'row' => 12,
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1468471260996-1730',
  'edited' => true,
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 12,
      'order' => 3,
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 3,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
));

$main->add_element("Uimage", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => 'upfront-image_module',
  'id' => 'module-1480607738040-1564',
  'options' => 
  array (
    'src' => false,
    'srcFull' => false,
    'srcOriginal' => false,
    'image_title' => '',
    'alternative_text' => '',
    'include_image_caption' => true,
    'image_caption' => '<p>My awesome image caption</p>',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'starting',
    'size' => 
    (array)(array(
       'width' => '100%',
       'height' => 'auto',
    )),
    'fullSize' => 
    (array)(array(
       'width' => 0,
       'height' => 0,
    )),
    'position' => 
    (array)(array(
       'top' => 0,
       'left' => 0,
    )),
    'marginTop' => 0,
    'element_size' => 
    (array)(array(
       'width' => '100%',
       'height' => 250,
    )),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => 0,
    'align' => 'center',
    'stretch' => false,
    'vstretch' => false,
    'quick_swap' => false,
    'is_locked' => true,
    'gifImage' => 0,
    'placeholder_class' => '',
    'preset' => 'default',
    'display_caption' => 'showCaption',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 0,
    'class' => 'upfront-image',
    'id_slug' => 'image',
    'when_clicked' => false,
    'image_link' => '',
    'link' => 
    (array)(array(
       'type' => false,
       'url' => '',
       'target' => false,
    )),
    'element_id' => 'image-1480607738039-1869',
    'padding_slider' => 15,
    'top_padding_num' => 15,
    'left_padding_num' => 15,
    'right_padding_num' => 15,
    'bottom_padding_num' => 15,
    'lock_padding' => 0,
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'row' => 103,
  ),
  'row' => 103,
  'wrapper_id' => 'wrapper-1480607993079-1407',
  'edited' => true,
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 12,
      'order' => 4,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 4,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
));

$main->add_element("Button", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => 'button-style',
  'id' => 'module-1480608082672-1314',
  'options' => 
  array (
    'content' => 'Click here',
    'href' => '',
    'linkTarget' => '',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'ubutton',
    'preset' => 'default',
    'element_id' => 'object-1480608082672-1323',
    'link' => 
    (array)(array(
       'type' => 'unlink',
       'url' => '',
       'target' => '',
    )),
    'padding_slider' => 15,
    'top_padding_num' => 15,
    'left_padding_num' => 15,
    'right_padding_num' => 15,
    'bottom_padding_num' => 15,
    'lock_padding' => 0,
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
  ),
  'content' => 'Click here',
  'href' => '',
  'align' => 'center',
  'row' => 11,
  'wrapper_id' => 'wrapper-1480608085457-1508',
  'edited' => true,
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 12,
      'order' => 5,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 5,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
));

$main->add_element("Button", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => 'button-style',
  'id' => 'module-1480608089095-1151',
  'options' => 
  array (
    'content' => 'Click here',
    'href' => '',
    'linkTarget' => '',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'ubutton',
    'preset' => 'default',
    'element_id' => 'object-1480608089095-1178',
    'link' => 
    (array)(array(
       'type' => 'unlink',
       'url' => '',
       'target' => '',
    )),
    'padding_slider' => 15,
    'top_padding_num' => 15,
    'left_padding_num' => 15,
    'right_padding_num' => 15,
    'bottom_padding_num' => 15,
    'lock_padding' => 0,
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
  ),
  'content' => 'Click here',
  'href' => '',
  'align' => 'center',
  'row' => 11,
  'wrapper_id' => 'wrapper-1480608091312-1823',
  'edited' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 12,
      'order' => 6,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 6,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
));

$main->add_element("Button", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => 'button-style',
  'id' => 'module-1480607738056-1046',
  'options' => 
  array (
    'content' => 'Click here',
    'href' => '',
    'linkTarget' => '',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'ubutton',
    'preset' => 'default',
    'element_id' => 'button-object-1480607738055-1426',
    'link' => 
    (array)(array(
       'type' => 'unlink',
       'url' => '',
       'target' => '',
    )),
    'padding_slider' => 15,
    'top_padding_num' => 15,
    'left_padding_num' => 15,
    'right_padding_num' => 15,
    'bottom_padding_num' => 15,
    'lock_padding' => 0,
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
  ),
  'content' => 'Click here',
  'href' => '',
  'align' => 'center',
  'row' => 11,
  'wrapper_id' => 'wrapper-1480608068767-1369',
  'edited' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 12,
      'order' => 7,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 7,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
));

$main->add_element("PlainTxt", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => '',
  'id' => 'module-1480607738038-1171',
  'options' => 
  array (
    'content' => '<p style="margin-left: 20px;">This is a test</p>',
    'type' => 'PlainTxtModel',
    'view_class' => 'PlainTxtView',
    'element_id' => 'text-object-1480607738038-1597',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'id_slug' => 'plain_text',
    'preset' => 'default',
    'padding_slider' => 15,
    'top_padding_num' => 15,
    'left_padding_num' => 15,
    'right_padding_num' => 15,
    'bottom_padding_num' => 15,
    'lock_padding' => '',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'is_edited' => true,
  ),
  'row' => 15,
  'wrapper_id' => 'wrapper-1480608112564-1370',
  'edited' => true,
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 12,
      'order' => 8,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 8,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
));

$main->add_element("PlainTxt", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => '',
  'id' => 'module-1480608127367-1081',
  'options' => 
  array (
    'content' => '<p>Test 2</p>',
    'type' => 'PlainTxtModel',
    'view_class' => 'PlainTxtView',
    'element_id' => 'object-1480608127368-1346',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'id_slug' => 'plain_text',
    'preset' => 'default',
    'padding_slider' => 15,
    'top_padding_num' => 15,
    'left_padding_num' => 15,
    'right_padding_num' => 15,
    'bottom_padding_num' => 15,
    'lock_padding' => '',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'is_edited' => true,
  ),
  'row' => 15,
  'wrapper_id' => 'wrapper-1480608132329-1278',
  'edited' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 12,
      'order' => 9,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 9,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
));

$main->add_element("PlainTxt", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => '',
  'id' => 'module-1480608123239-1222',
  'options' => 
  array (
    'content' => '<p>Test 3</p>',
    'type' => 'PlainTxtModel',
    'view_class' => 'PlainTxtView',
    'element_id' => 'object-1480608123239-1393',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'id_slug' => 'plain_text',
    'preset' => 'default',
    'padding_slider' => 15,
    'top_padding_num' => 15,
    'left_padding_num' => 15,
    'right_padding_num' => 15,
    'bottom_padding_num' => 15,
    'lock_padding' => '',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'is_edited' => true,
  ),
  'row' => 15,
  'wrapper_id' => 'wrapper-1480608125287-1577',
  'edited' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 12,
      'order' => 10,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 10,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
));

$main->add_element("Utabs", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => 'upfront-tabs_module',
  'id' => 'module-1480607738053-1648',
  'options' => 
  array (
    'type' => 'UtabsModel',
    'view_class' => 'UtabsView',
    'has_settings' => 1,
    'class' => 'upfront-tabs',
    'tabs' => 
    array (
      0 => 
      (array)(array(
         'content' => '<p>Click on active tab title to edit title. Confirm with Enter key.</p><p>Click on plus button [+] to add new tab.</p>',
         'title' => '<p class="">Why use this</p>',
      )),
      1 => 
      (array)(array(
         'content' => 'Have fun with tabs.',
         'title' => '<p class="">Will this work</p>',
      )),
    ),
    'tabs_count' => 2,
    'id_slug' => 'utabs',
    'preset' => 'default',
    'element_id' => 'utabs-object-1480607738052-1368',
    'padding_slider' => 15,
    'top_padding_num' => 15,
    'left_padding_num' => 15,
    'right_padding_num' => 15,
    'bottom_padding_num' => 15,
    'lock_padding' => '',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'anchor' => '',
    'current_preset' => 'default',
  ),
  'row' => 45,
  'wrapper_id' => 'wrapper-1480608183766-1656',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 12,
      'order' => 11,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 11,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
));

$regions->add($main);

