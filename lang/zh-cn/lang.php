<?php return [
    'plugin' => [
        'name' => '通用记录',
        'name_short' => '通用记录',
        'name_original' => '通用记录',
        'description' => '通用记录存储插件',
    ],

    'common' => [

        'import' => '导入',
        'export' => '导出',
        'edit' => '编辑',
        'desc' => '倒序',
        'asc' => '升序',

        'menu' => [
            'areas' => '清单',
            'area' => '清单',
        ],

        'tabs' => [
            'info' => '信息',
            'images' => '图片',
            'content' => '内容',
            'fields' => '字段',
            'notes' => '说明',
            'tags' => '标签',
            'attributes' => '属性',
            'attachments' => '附件',
            'secondary_categories' => '分类',
            'testimonials' => '客户评价',
            'content_blocks' => '内容块',
            'records' => '记录',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => '名称',
            'slug' => 'Slug',
            'active' => '激活',
            'favourite' => '热门',
            'date' => '日期',
            'url' => '链接',
            'description' => '描述',
            'content' => '内容',
            'preview_image' => '预览图',
            'preview_image_media' => '预览图 (媒体)',
            'images' => '图片',
            'images_media' => '图片 (媒体)',
            'attached_images_count' => '图片',
            'area' => '清单',
            'category' => '主要分类',
            'category_comment' => '您可以在<a href="'.Backend::url('janvince/smallrecords/categories/index').'">分类页</a>管理分类项',
            'tags' => '标签',
            'attributes' => '属性',
            'files' => '文件',
            'categories' => '分类',
            'repeater' => '信息',
            'repeater_prompt' => '添加新记录 ...',
            'testimonials' => '客户评价',
            'testimonials_prompt' => '添加新记录 ...',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
            'created_by' => '创建人',
            'updated_by' => '更新人',
            'sort_order' => '自定义排序',
            'author' => '作者',
        ],

        'fields' => [
            'empty_option' => '请选择 ...',
        ],

        'buttons' => [
            'reorder' => '重新排序',
            'back_to_list' => '返回列表',
            'create_and_new' => '创建和新建',
            'update_and_new' => '保存和新建',
        ],

        'import_settings' => [
            'truncate_table' => '导入前清空表格',
            'truncate_table_description' => '删除所有类别并重置自增',
            'delete_relations' => '删除记录与分类的关系',
            'delete_relations_description' => '删除所有记录与分类的关系',
        ],

    ],

    'areas' => [
        'new_area' => '新建记录清单',
        'menu_label' => '记录清单',

        'import' => [
            'import_records' => '导入记录',
            'export_records' => '导出记录',
            'area_id_description' => '您只能从特定列表导出数据',
            'area_id_empty_option' => '-- 所有记录 --',
        ],

        'columns' => [
            'allowed_fields' => '可用的记录字段',
            'allowed_fields_comment' => '选中的字段将在记录编辑表单中可见。这个列表很长，请向下滚动！< br><em >创建记录后，某些字段将可见(取决于记录的标识)！</em >',

            'custom_repeater_allow' => '允许自定义表单字段块',
            'custom_repeater_tab_title' => '自定义表单字段选项卡标题',
            'custom_repeater_prompt' => '自定义表单字段“添加新项”自定义提示',
            'custom_repeater_min_items' => '自定义表单字段需要的最少项',
            'custom_repeater_max_items' => '自定义表单字段不能超过的最大项',

            'custom_repeater' => [
                'repeater_prompt' => '添加字段',
                'field_type' => '字段类型',
                'field_name' => '字段名称',
                'field_name_comment' => '字段名称，如:my_record_name。您将在“Twig”中使用它来访问字段值',
                'field_label' => '字段标签',
                'field_span' => '字段跨度',
                'field_mode' => '方式',
                'field_size' => '大小',
                'options' => [
                    'text' => 'Text',
                    'textarea' => 'Text area',
                    'richeditor' => 'Richtext editor',
                    'number' => 'Number',
                    'checkbox' => 'Checkbox',
                    'mediafinder' => 'Mediafinder',
                    'section' => 'Section',
                    'left' => 'Left',
                    'right' => 'Right',
                    'full' => 'Full',
                    'file' => 'File',
                    'image' => 'Image',
                    'tiny' => 'Tiny',
                    'small' => 'Small',
                    'large' => 'Large',
                    'huge' => 'Huge',
                    'giant' => 'Giant',
                    'empty_option' => '请选择 ...'
                ]
            ],
        ],

        'tabs' => [
            'custom_repeater' => '自定义表单字段',
        ]
    ],

    'records' => [
        'menu_label' => '记录',
        'return_to_records' => '返回记录列表',
        'reordering_description' => '在组件的排序选项中使用“自定义顺序”。',
        'reorder' => '自定义排序',

        'images_media' => [
            'image' => '图片',
            'title' => '标题',
            'description' => '描述',
        ],

        'repeater' => [
            'repeater_prompt' => '添加项目 ...',
            'value1' => '值 1',
            'value2' => '值 2',
            'value3' => '值 3',
            'value4' => '值 4',
            'text' => '文本',
        ],

        'testimonials' => [
            'title' => '标题',
            'image' => '图片',
            'author' => '作者',
            'date' => '日期',
            'content' => '内容',
        ],

        'content_blocks' => [
            'title' => '标题',
            'subtitle' => '子标题',
            'image' => '图片',
            'author' => '作者',
            'date' => '日期',
            'content' => '内容',
            'preview_image' => '预览图',
            'description' => '描述',
            'code' => '编码',
            'disable' => '禁用',
            'favourite' => '热门',
        ],

        'scoreboard' => [
            'records_count' => '记录数',
            'records_active' => '激活',
            'records_hidden' => '隐藏',
            'records_favourite' => '热门',
            'records_common' => '通用',
            'latest_record' => '最近',
            'latest_record_date' => '创建于: ',
            'active_area' => '{0} records in|{1} record in|[2,Inf[ %count% records in',
        ]

    ],

    'categories' => [
        'menu_label' => '分类',
        'category' => '分类',
        'new_category' => '新建 分类',
        'return_to_categories' => '返回分类列表',
        'category' => '分类',
        'secondary_categories' => '更多分类',

        'columns' => [
            'main_category' => '主分类',
            'parent' => '父分类',
            'parent_comment' => '你可以在 <a href="'.Backend::url('janvince/smallrecords/categories/reorder').'">重新排序页面</a> 重新排序和改变层级',
        ],

        'tabs' => [
            'secondary_categories' => '次要分类',
            'secondary_categories_comment' => '记录可以有一个主要分类和许多次要分类',
        ]

    ],

    'attributes' => [
        'menu_label' => '属性',
        'new_attribute' => '新建属性',
        'attribute' => '属性',
        'return_to_attributes' => '返回属性列表',

        'columns' => [
            'name' => '名称',
            'slug' => 'Slug',
            'value_text' => '文本',
            'value_number' => '数字',
            'value_boolean' => '状态',
            'value_switch' => '开关 (是/否)',
            'value_type' => '数据值类型',
            'value_type_comment' => '根据选择的数据类型，关联表单将显示正确的输入字段',
            'value_string' => '字符串',
        ],

        'tabs' => [
            'attributes' => '属性',
            'attributes_comment' => '您可以分配属性并添加它们的值',

        ],


    ],

    'tags' => [
        'menu_label' => '标签',
        'return_to_tags' => '返回标签列表',
        'new_tag' => '新建标签',
        'tag' => '标签',
        'reorder' => '重新排序',

        'columns' => [
            'name' => '名称',
            'slug' => 'Slug',
            'description' => '描述',
            'value' => '值',
            'icon' => '图标',
        ],

        'tabs' => [
            'tags' => '标签'
        ]

    ],

    'forms' => [
        'reorder' => '重新排序',
        'delete_attached_images' => '删除所有附加的图片',
        'delete_attached_images_confirm' => '确认要删除在图片标签下的所有图片？',
        'deleting_attached_images' => '所有附加图片删除中 ...',
    ],

    'components' => [

        'common' => [
            
            'properties' => [
                'active_only' => 'Active',
                'active_only_description' => 'Filter only active records',
                'active_records_only' => 'Active records',
                'active_records_only_description' => 'Filter with active records only',
                'favourite_only' => 'Favourite',
                'favourite_only_description' => 'Get only favourite records (unchecked will get all records)',
                'root_categories_only' => 'Root categories only',
                'root_categories_description' => 'Return only root categories',

                'area_slug' => 'Filter records by list',
                'area_slug_description' => 'Select a List to get records from',
                'category_slug' => 'Category slug',
                'category_slug_description' => 'Filter with dynamic URL parameter like ":category" or manually entered like "my-category".',
                'record_slug' => 'Record slug',
                'record_slug_description' => 'Filter with dynamic URL parameter like ":record" or manually entered like "my-record".',
                'tag_slug' => 'Tag slug',
                'tag_slug_description' => 'Filter with dynamic URL parameter like ":tag" or manually entered like "my-tag".',
                'page_slug' => 'Page slug',
                'page_slug_description' => 'Filter with dynamic URL parameter like ":page" or manually entered like "1".',
                'parent_category_slug' => 'Parent category slug',
                'parent_category_slug_description' => 'Filter with dynamic URL parameter like ":parent-category" or manually entered like "my-parent_category".',

                'record_page' => 'Record page name',
                'record_page_description' => 'Enter name of CMS page where you want to render a single record (eg. "record")',
                'record_page_slug' => 'Record page slug',
                'record_page_slug_description' => 'Enter URL parameter name used on the single record page (eg. "slug" for page URL like /record/:slug).',

                'category_page' => 'Category page name',
                'category_page_description' => 'Enter name of CMS page where you want to render single category (eg. "category")',
                'category_page_slug' => 'Category page slug',
                'category_page_slug_description' => 'Enter URL parameter name used on the single category page (eg. ":category" for page URL like /category/:category).',
                'categories_page' => 'Categories page name',
                'categories_page_description' => 'Enter name of CMS page where you want to render categories list (eg. "categories")',
                'categories_page_slug' => 'Categories page slug',
                'categories_page_slug_description' => 'Enter URL slug name used on the categories page (eg. ":category" for page URL like /records/:category).',

                'tag_page' => 'Tag page name',
                'tag_page_description' => 'Enter name of CMS page where you want to render single tag (eg. "tag")',
                'tag_page_slug' => 'Tag page slug',
                'tag_page_slug_description' => 'Enter URL parameter name used on the single tag page (eg. ":category" for page URL like /tag/:tag).',
                'tags_page' => 'Tags page name',
                'tags_page_description' => 'Enter name of CMS page where you want to render tags list (eg. "tags")',
                'tags_page_slug' => 'Tags page slug',
                'tags_page_slug_description' => 'Enter URL slug name used on the tags page (eg. ":tag" for page URL like /records/:tag).',

                'use_main_category' => 'Filter by main category',
                'use_main_category_description' => 'If category slug is set, return only record with this main category assigned.',
                'use_multicategories' => 'Filter by secondary category',
                'use_multicategories_description' => 'If category slug is set, return only record with this secondary category assigned.',

                'order_by' => 'Order by',
                'order_by_direction' => 'Order by direction',
                'order_as_collection' => 'Order as collection',
                'order_as_collection_description' => 'Get all data in collection and sort it. Usefull when database cannot order data correctly in current locale.',

                'allow_limit' => 'Limit number or records',
                'allow_limit_description' => 'If checked, only required number of records will be returned. Also a pagination will be allowed.',
                'limit' => 'Number of returned records',
                'limit_description' => 'How many records will be returned.',

                'throw404' => '404 error on error',
                'throw404_description' => 'Return 404 error when any record has not been found.',
                'set_page_meta' => 'Set page meta properties',
                'set_page_meta_description' => 'page_title, meta_title and meta_description will be set from record name and description.',
            ],

            'forms' => [
                'empty_option' => 'Not selected',
            ],

            'groups' => [
                'links' => 'Links',
                'order' => 'Order by',
                'limit' => 'Limit',
                'filter_area' => 'Filter by List',
                'filter_category' => 'Filter by Category',
                'filter_tag' => 'Filter by Tag',
                'filter_records' => 'Filter by Records',
                'seo' => 'SEO',
                'links' => 'Links',
            ],            
        ],

        'records' => [
            'name' => 'Records',
            'description' => 'Get list of records',
        ],

        'record' => [
            'name' => 'Record',
            'description' => 'Get one specific record',
        ],

        'categories' => [
            'name' => 'Categories',
            'description' => 'Get list of categories',

            'properties' => [
                'category_slug_description' => 'Set dynamic URL parameter like ":category" or manually entered like "my-category". This can be used eg. to set active category in categories menu.',
            ],
        ],

        'category' => [
            'name' => 'Category',
            'description' => 'Get one specific category',
        ],

                'categories' => [
            'name' => 'Categories',
            'description' => 'Get list of categories',

            'properties' => [
                'category_slug_description' => 'Set dynamic URL parameter like ":category" or manually entered like "my-category". This can be used eg. to set active category in categories menu.',
            ],
        ],

        'tags' => [
            'name' => 'Tags',
            'description' => 'Get list of tags',

            'properties' => [
                'tag_slug_description' => 'Set dynamic URL parameter like ":tag" or manually entered like "my-tag". This can be used eg. to set active tag in tags menu.',
            ],
        ],

        'tag' => [
            'name' => 'Tag',
            'description' => 'Get one specific tag',
        ],
    ],

    'permissions' => [
        'tab_name' => 'Small records permissions',
        'access_areas' => 'Access Lists',
        'access_area' => '> Access to list ',
        'access_records' => 'Access Records',
        'access_categories' => 'Access Categories',
        'access_attributes' => 'Access Attributes',
        'access_settings' => 'Access Settings',
        'access_tags' => 'Access Tags',
        'access_denied' => 'Access denied',
    ],

    'settings' => [
        'main_section' => '记录设置',
        'main_section_comment' => '一些通用记录设置',

        'tabs' => [
            'lists' => '清单',
            'connections' => '连接',
        ],

        'fields' => [
            'preview_width' => '预览图宽度',
            'preview_height' => '预览图高度',
            'connections_section_blog' => '(Rainlab) 博客',
            'connections_section_pages' => '(Rainlab) 静态页面',
            'allow_records_in_blog_posts' => '允许在博客文章中使用记录',
            'allow_records_in_blog_posts_comment' => '在博客文章中显示记录列表(Rainlab。博客插件必须安装)',
            'allow_records_in_blog_posts_area' => '显示清单中的记录',

            'allow_records_in_pages' => '允许在静态页面中使用记录',
            'allow_records_in_pages_comment' => '在静态页面中显示记录列表(Rainlab。页面插件必须安装)',
            'allow_records_in_pages_area' => '显示清单中的记录',
        ],
    ]
];
