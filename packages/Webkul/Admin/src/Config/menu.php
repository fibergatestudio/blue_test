<?php

return [
    // [
    //     'key' => 'statistic',
    //     'name' => 'Statistic',
    //     'route' => 'admin.statistic.index',
    //     'sort' => 0,
    //     'icon-class' => 'sales-icon',
    // ], [
    //     'key' => 'statistic.clients',
    //     'name' => 'Clients',
    //     'route' => 'admin.statistic.index',
    //     'sort' => 1,
    //     'icon-class' => '',
    // ], [
    //     'key' => 'statistic.orders',
    //     'name' => 'Orders',
    //     'route' => 'admin.statistic.orders.index',
    //     'sort' => 2,
    //     'icon-class' => '',
    // ], [
    //     'key' => 'statistic.sum',
    //     'name' => 'Summary',
    //     'route' => 'admin.statistic.sum.index',
    //     'sort' => 3,
    //     'icon-class' => '',
    // ],
    [
        'key' => 'pages',          // uniquely defined key for menu-icon
        'name' => 'Pages',        //  name of menu-icon
        'route' => 'admin.dashboard.pages',  // the route for your menu-icon
        'sort' => 0,                    // Sort number on which your menu-icon should display
        'icon-class' => 'pages-icon',   //class of menu-icn
    ],
    // [
    //     'key' => 'bluebox',          // uniquely defined key for menu-icon
    //     'name' => 'BlueBox',        //  name of menu-icon
    //     'route' => 'admin.dashboard.bluebox',  // the route for your menu-icon
    //     'sort' => 0,                    // Sort number on which your menu-icon should display
    //     'icon-class' => 'dashboard-icon',   //class of menu-icn
    // ],
    // [
    //     'key' => 'voucher',          // uniquely defined key for menu-icon
    //     'name' => 'Voucher',        //  name of menu-icon
    //     'route' => 'admin.dashboard.voucher',  // the route for your menu-icon
    //     'sort' => 0,                    // Sort number on which your menu-icon should display
    //     'icon-class' => 'dashboard-icon',   //class of menu-icn
    // ],
    // [
    //     'key' => 'tasks',          // uniquely defined key for menu-icon
    //     'name' => 'Calendar Tasks',        //  name of menu-icon
    //     'route' => 'admin.dashboard.tasks',  // the route for your menu-icon
    //     'sort' => 0,                    // Sort number on which your menu-icon should display
    //     'icon-class' => 'dashboard-icon',   //class of menu-icn
    // ],

    [
        'key' => 'loyalty',          // uniquely defined key for menu-icon
        'name' => 'Loyalty Program',        //  name of menu-icon
        'route' => 'admin.dashboard.loyalty',  // the route for your menu-icon
        'sort' => 0,                    // Sort number on which your menu-icon should display
        'icon-class' => 'loyalty-icon',   //class of menu-icn
    ],
    [
        'key' => 'dashboard',
        'name' => 'admin::app.layouts.dashboard',
        'route' => 'admin.dashboard.index',
        'sort' => 1,
        'icon-class' => 'dashboard-icon',
    ], [
        'key' => 'sales',
        'name' => 'admin::app.layouts.sales',
        'route' => 'admin.sales.orders.index',
        'sort' => 2,
        'icon-class' => 'sales-icon',
    ], [
        'key' => 'sales.orders',
        'name' => 'admin::app.layouts.orders',
        'route' => 'admin.sales.orders.index',
        'sort' => 1,
        'icon-class' => '',
    ], [
        'key' => 'sales.shipments',
        'name' => 'admin::app.layouts.shipments',
        'route' => 'admin.sales.shipments.index',
        'sort' => 2,
        'icon-class' => '',
    ], [
        'key' => 'sales.invoices',
        'name' => 'admin::app.layouts.invoices',
        'route' => 'admin.sales.invoices.index',
        'sort' => 3,
        'icon-class' => '',
    ],[
        'key' => 'sales.tasks',
        'name' => 'Calendar Tasks',
        'route' => 'admin.dashboard.tasks',
        'sort' => 4,
        'icon-class' => '',
    ],[
        'key' => 'sales.form',
        'name' => 'Contac Form',
        'route' => 'admin.dashboard.form',
        'sort' => 5,
        'icon-class' => '',
    ],[
        'key' => 'sales.capsules',
        'name' => 'Coffee Capsules',
        'route' => 'admin.dashboard.capsules',
        'sort' => 6,
        'icon-class' => '',
    ],[
        'key' => 'sales.turkish',
        'name' => 'Turkish Coffee',
        'route' => 'admin.dashboard.turkish',
        'sort' => 7,
        'icon-class' => '',
    ],[
        'key' => 'sales.beans',
        'name' => 'Coffee Beans',
        'route' => 'admin.dashboard.beans',
        'sort' => 8,
        'icon-class' => '',
    ],[
        'key' => 'sales.flavored',
        'name' => 'Flavored Coffee',
        'route' => 'admin.dashboard.flavored',
        'sort' => 9,
        'icon-class' => '',
    ],
    [
        'key' => 'catalog',
        'name' => 'admin::app.layouts.catalog',
        'route' => 'admin.catalog.products.index',
        'sort' => 3,
        'icon-class' => 'catalog-icon',
    ], [
        'key' => 'catalog.products',
        'name' => 'admin::app.layouts.products',
        'route' => 'admin.catalog.products.index',
        'sort' => 1,
        'icon-class' => '',
    ], [
        'key' => 'catalog.categories',
        'name' => 'admin::app.layouts.categories',
        'route' => 'admin.catalog.categories.index',
        'sort' => 2,
        'icon-class' => '',
    ], [
        'key' => 'catalog.attributes',
        'name' => 'admin::app.layouts.attributes',
        'route' => 'admin.catalog.attributes.index',
        'sort' => 3,
        'icon-class' => '',
    ], [
        'key' => 'catalog.families',
        'name' => 'admin::app.layouts.attribute-families',
        'route' => 'admin.catalog.families.index',
        'sort' => 4,
        'icon-class' => '',
    ], [
        'key' => 'customers',
        'name' => 'admin::app.layouts.customers',
        'route' => 'admin.customer.index',
        'sort' => 4,
        'icon-class' => 'customer-icon',
    ], [
        'key' => 'customers.customers',
        'name' => 'admin::app.layouts.customers',
        'route' => 'admin.customer.index',
        'sort' => 1,
        'icon-class' => '',
    ], [
        'key' => 'customers.groups',
        'name' => 'admin::app.layouts.groups',
        'route' => 'admin.groups.index',
        'sort' => 2,
        'icon-class' => '',
    ], [
        'key' => 'customers.reviews',
        'name' => 'admin::app.layouts.reviews',
        'route' => 'admin.customer.review.index',
        'sort' => 3,
        'icon-class' => '',
    ], [
        'key' => 'customers.subscribers',
        'name' => 'admin::app.layouts.newsletter-subscriptions',
        'route' => 'admin.customers.subscribers.index',
        'sort' => 4,
        'icon-class' => '',
    ], [
        'key' => 'configuration',
        'name' => 'admin::app.layouts.configure',
        'route' => 'admin.configuration.index',
        'sort' => 7,
        'icon-class' => 'configuration-icon',
    ], [
        'key' => 'settings',
        'name' => 'admin::app.layouts.settings',
        'route' => 'admin.locales.index',
        'sort' => 6,
        'icon-class' => 'settings-icon',
    ], [
        'key' => 'settings.locales',
        'name' => 'admin::app.layouts.locales',
        'route' => 'admin.locales.index',
        'sort' => 1,
        'icon-class' => '',
    ], [
        'key' => 'settings.currencies',
        'name' => 'admin::app.layouts.currencies',
        'route' => 'admin.currencies.index',
        'sort' => 2,
        'icon-class' => '',
    ], [
        'key' => 'settings.exchange_rates',
        'name' => 'admin::app.layouts.exchange-rates',
        'route' => 'admin.exchange_rates.index',
        'sort' => 3,
        'icon-class' => '',
    ], [
        'key' => 'settings.inventory_sources',
        'name' => 'admin::app.layouts.inventory-sources',
        'route' => 'admin.inventory_sources.index',
        'sort' => 4,
        'icon-class' => '',
    ], [
        'key' => 'settings.channels',
        'name' => 'admin::app.layouts.channels',
        'route' => 'admin.channels.index',
        'sort' => 5,
        'icon-class' => '',
    ], [
        'key' => 'settings.users',
        'name' => 'admin::app.layouts.users',
        'route' => 'admin.users.index',
        'sort' => 6,
        'icon-class' => '',
    ], [
        'key' => 'settings.users.users',
        'name' => 'admin::app.layouts.users',
        'route' => 'admin.users.index',
        'sort' => 1,
        'icon-class' => '',
    ], [
        'key' => 'settings.users.roles',
        'name' => 'admin::app.layouts.roles',
        'route' => 'admin.roles.index',
        'sort' => 2,
        'icon-class' => '',
    ], [
        'key' => 'settings.sliders',
        'name' => 'admin::app.layouts.sliders',
        'route' => 'admin.sliders.index',
        'sort' => 7,
        'icon-class' => '',
    ], [
        'key' => 'settings.taxes',
        'name' => 'admin::app.layouts.taxes',
        'route' => 'admin.tax-categories.index',
        'sort' => 8,
        'icon-class' => '',
    ], [
        'key' => 'settings.taxes.tax-categories',
        'name' => 'admin::app.layouts.tax-categories',
        'route' => 'admin.tax-categories.index',
        'sort' => 1,
        'icon-class' => '',
    ], [
        'key' => 'settings.taxes.tax-rates',
        'name' => 'admin::app.layouts.tax-rates',
        'route' => 'admin.tax-rates.index',
        'sort' => 2,
        'icon-class' => '',
    ], [
        'key' => 'promotions',
        'name' => 'admin::app.layouts.promotion',
        'route' => 'admin.cart-rule.index',
        'sort' => 5,
        'icon-class' => 'promotion-icon',
    ], [
        'key' => 'promotions.cart-rule',
        'name' => 'admin::app.promotion.cart-rule',
        'route' => 'admin.cart-rule.index',
        'sort' => 1,
        'icon-class' => '',
    ]
];