<?php
return array(
    'router' => array(
        'routes' => array(
            'code-orders.rest.ptypes' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/ptypes[/:ptypes_id]',
                    'defaults' => array(
                        'controller' => 'CodeOrders\\V1\\Rest\\Ptypes\\Controller',
                    ),
                ),
            ),
            'code-orders.rest.users' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/users[/:users_id]',
                    'defaults' => array(
                        'controller' => 'CodeOrders\\V1\\Rest\\Users\\Controller',
                    ),
                ),
            ),
            'code-orders.rest.clients' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/clients[/:clients_id]',
                    'defaults' => array(
                        'controller' => 'CodeOrders\\V1\\Rest\\Clients\\Controller',
                    ),
                ),
            ),
            'code-orders.rest.products' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/products[/:products_id]',
                    'defaults' => array(
                        'controller' => 'CodeOrders\\V1\\Rest\\Products\\Controller',
                    ),
                ),
            ),
            'code-orders.rest.orders' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/orders[/:orders_id]',
                    'defaults' => array(
                        'controller' => 'CodeOrders\\V1\\Rest\\Orders\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'code-orders.rest.ptypes',
            1 => 'code-orders.rest.users',
            2 => 'code-orders.rest.clients',
            3 => 'code-orders.rest.products',
            4 => 'code-orders.rest.orders',
        ),
    ),
    'zf-rest' => array(
        'CodeOrders\\V1\\Rest\\Ptypes\\Controller' => array(
            'listener' => 'CodeOrders\\V1\\Rest\\Ptypes\\PtypesResource',
            'route_name' => 'code-orders.rest.ptypes',
            'route_identifier_name' => 'ptypes_id',
            'collection_name' => 'ptypes',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'CodeOrders\\V1\\Rest\\Ptypes\\PtypesEntity',
            'collection_class' => 'CodeOrders\\V1\\Rest\\Ptypes\\PtypesCollection',
            'service_name' => 'ptypes',
        ),
        'CodeOrders\\V1\\Rest\\Users\\Controller' => array(
            'listener' => 'CodeOrders\\V1\\Rest\\Users\\UsersResource',
            'route_name' => 'code-orders.rest.users',
            'route_identifier_name' => 'users_id',
            'collection_name' => 'users',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => '1',
            'page_size_param' => null,
            'entity_class' => 'CodeOrders\\V1\\Rest\\Users\\UsersEntity',
            'collection_class' => 'CodeOrders\\V1\\Rest\\Users\\UsersCollection',
            'service_name' => 'users',
        ),
        'CodeOrders\\V1\\Rest\\Clients\\Controller' => array(
            'listener' => 'CodeOrders\\V1\\Rest\\Clients\\ClientsResource',
            'route_name' => 'code-orders.rest.clients',
            'route_identifier_name' => 'clients_id',
            'collection_name' => 'clients',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'CodeOrders\\V1\\Rest\\Clients\\ClientsEntity',
            'collection_class' => 'CodeOrders\\V1\\Rest\\Clients\\ClientsCollection',
            'service_name' => 'clients',
        ),
        'CodeOrders\\V1\\Rest\\Products\\Controller' => array(
            'listener' => 'CodeOrders\\V1\\Rest\\Products\\ProductsResource',
            'route_name' => 'code-orders.rest.products',
            'route_identifier_name' => 'products_id',
            'collection_name' => 'products',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => '1',
            'page_size_param' => null,
            'entity_class' => 'CodeOrders\\V1\\Rest\\Products\\ProductsEntity',
            'collection_class' => 'CodeOrders\\V1\\Rest\\Products\\ProductsCollection',
            'service_name' => 'products',
        ),
        'CodeOrders\\V1\\Rest\\Orders\\Controller' => array(
            'listener' => 'CodeOrders\\V1\\Rest\\Orders\\OrdersResource',
            'route_name' => 'code-orders.rest.orders',
            'route_identifier_name' => 'orders_id',
            'collection_name' => 'orders',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'CodeOrders\\V1\\Rest\\Orders\\OrdersEntity',
            'collection_class' => 'CodeOrders\\V1\\Rest\\Orders\\OrdersCollection',
            'service_name' => 'Orders',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'CodeOrders\\V1\\Rest\\Ptypes\\Controller' => 'HalJson',
            'CodeOrders\\V1\\Rest\\Users\\Controller' => 'HalJson',
            'CodeOrders\\V1\\Rest\\Clients\\Controller' => 'HalJson',
            'CodeOrders\\V1\\Rest\\Products\\Controller' => 'HalJson',
            'CodeOrders\\V1\\Rest\\Orders\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'CodeOrders\\V1\\Rest\\Ptypes\\Controller' => array(
                0 => 'application/vnd.code-orders.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'CodeOrders\\V1\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.code-orders.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'CodeOrders\\V1\\Rest\\Clients\\Controller' => array(
                0 => 'application/vnd.code-orders.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'CodeOrders\\V1\\Rest\\Products\\Controller' => array(
                0 => 'application/vnd.code-orders.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'CodeOrders\\V1\\Rest\\Orders\\Controller' => array(
                0 => 'application/vnd.code-orders.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'CodeOrders\\V1\\Rest\\Ptypes\\Controller' => array(
                0 => 'application/vnd.code-orders.v1+json',
                1 => 'application/json',
            ),
            'CodeOrders\\V1\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.code-orders.v1+json',
                1 => 'application/json',
            ),
            'CodeOrders\\V1\\Rest\\Clients\\Controller' => array(
                0 => 'application/vnd.code-orders.v1+json',
                1 => 'application/json',
            ),
            'CodeOrders\\V1\\Rest\\Products\\Controller' => array(
                0 => 'application/vnd.code-orders.v1+json',
                1 => 'application/json',
            ),
            'CodeOrders\\V1\\Rest\\Orders\\Controller' => array(
                0 => 'application/vnd.code-orders.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'CodeOrders\\V1\\Rest\\Country\\CountryEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'code-orders.rest.country',
                'route_identifier_name' => 'country_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'CodeOrders\\V1\\Rest\\Country\\CountryCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'code-orders.rest.country',
                'route_identifier_name' => 'country_id',
                'is_collection' => true,
            ),
            'CodeOrders\\V1\\Rest\\Ptypes\\PtypesEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'code-orders.rest.ptypes',
                'route_identifier_name' => 'ptypes_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'CodeOrders\\V1\\Rest\\Ptypes\\PtypesCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'code-orders.rest.ptypes',
                'route_identifier_name' => 'ptypes_id',
                'is_collection' => true,
            ),
            'CodeOrders\\V1\\Rest\\Users\\UsersEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'code-orders.rest.users',
                'route_identifier_name' => 'users_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ClassMethods',
            ),
            'CodeOrders\\V1\\Rest\\Users\\UsersCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'code-orders.rest.users',
                'route_identifier_name' => 'users_id',
                'is_collection' => true,
            ),
            'CodeOrders\\V1\\Rest\\Clients\\ClientsEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'code-orders.rest.clients',
                'route_identifier_name' => 'clients_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'CodeOrders\\V1\\Rest\\Clients\\ClientsCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'code-orders.rest.clients',
                'route_identifier_name' => 'clients_id',
                'is_collection' => true,
            ),
            'CodeOrders\\V1\\Rest\\Products\\ProductsEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'code-orders.rest.products',
                'route_identifier_name' => 'products_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ClassMethods',
            ),
            'CodeOrders\\V1\\Rest\\Products\\ProductsCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'code-orders.rest.products',
                'route_identifier_name' => 'products_id',
                'is_collection' => true,
            ),
            'CodeOrders\\V1\\Rest\\Orders\\OrdersEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'code-orders.rest.orders',
                'route_identifier_name' => 'orders_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ClassMethods',
            ),
            'CodeOrders\\V1\\Rest\\Orders\\OrdersCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'code-orders.rest.orders',
                'route_identifier_name' => 'orders_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'CodeOrders\\V1\\Rest\\Country\\CountryResource' => array(
                'adapter_name' => 'DbAdapter',
                'table_name' => 'country',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'CodeOrders\\V1\\Rest\\Country\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'CodeOrders\\V1\\Rest\\Ptypes\\PtypesResource' => array(
                'adapter_name' => 'DbAdapter',
                'table_name' => 'ptypes',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'CodeOrders\\V1\\Rest\\Ptypes\\Controller',
                'entity_identifier_name' => 'id',
            ),
            'CodeOrders\\V1\\Rest\\Clients\\ClientsResource' => array(
                'adapter_name' => 'DbAdapter',
                'table_name' => 'clients',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'CodeOrders\\V1\\Rest\\Clients\\Controller',
                'entity_identifier_name' => 'id',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'CodeOrders\\V1\\Rest\\Ptypes\\Controller' => array(
            'input_filter' => 'CodeOrders\\V1\\Rest\\Ptypes\\Validator',
        ),
        'CodeOrders\\V1\\Rest\\Clients\\Controller' => array(
            'input_filter' => 'CodeOrders\\V1\\Rest\\Clients\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'CodeOrders\\V1\\Rest\\Cdr\\Validator' => array(
            0 => array(
                'name' => 'country_code',
                'required' => false,
                'filters' => array(),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'DbAdapter',
                            'table' => 'country',
                            'field' => 'code',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'reseller_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '11',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'customer_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '11',
                        ),
                    ),
                ),
            ),
            3 => array(
                'name' => 'type',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '32',
                        ),
                    ),
                ),
            ),
            4 => array(
                'name' => 'contact_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '32',
                        ),
                    ),
                ),
            ),
            5 => array(
                'name' => 'department_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '32',
                        ),
                    ),
                ),
            ),
            6 => array(
                'name' => 'is_missed_call',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            7 => array(
                'name' => 'caller_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '32',
                        ),
                    ),
                ),
            ),
            8 => array(
                'name' => 'caller_label',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            9 => array(
                'name' => 'callee_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '32',
                        ),
                    ),
                ),
            ),
            10 => array(
                'name' => 'callee_label',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            11 => array(
                'name' => 'billing_seconds',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            12 => array(
                'name' => 'duration_seconds',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            13 => array(
                'name' => 'account_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '32',
                        ),
                    ),
                ),
            ),
            14 => array(
                'name' => 'reference_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '64',
                        ),
                    ),
                ),
            ),
            15 => array(
                'name' => 'reference_rev',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '64',
                        ),
                    ),
                ),
            ),
            16 => array(
                'name' => 'action',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            17 => array(
                'name' => 'date_created',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '19',
                        ),
                    ),
                ),
            ),
            18 => array(
                'name' => 'timezone',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '64',
                        ),
                    ),
                ),
            ),
            19 => array(
                'name' => 'user_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '32',
                        ),
                    ),
                ),
            ),
            20 => array(
                'name' => 'ring_group_name',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            21 => array(
                'name' => 'is_hidden',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            22 => array(
                'name' => 'voicemail_box_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '32',
                        ),
                    ),
                ),
            ),
            23 => array(
                'name' => 'from',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            24 => array(
                'name' => 'to',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            25 => array(
                'name' => 'mark_as_read',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            26 => array(
                'name' => 'mark_as_deleted',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            27 => array(
                'name' => 'rev',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '64',
                        ),
                    ),
                ),
            ),
            28 => array(
                'name' => 'from_user_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '32',
                        ),
                    ),
                ),
            ),
            29 => array(
                'name' => 'to_user_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '32',
                        ),
                    ),
                ),
            ),
            30 => array(
                'name' => 'account_seats',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
        ),
        'CodeOrders\\V1\\Rest\\Account\\Validator' => array(
            0 => array(
                'name' => 'contact_info_id',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbNoRecordExists',
                        'options' => array(
                            'adapter' => 'DbAdapter',
                            'table' => 'account',
                            'field' => 'contact_info_id',
                        ),
                    ),
                    1 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbRecordExists',
                        'options' => array(
                            'adapter' => 'DbAdapter',
                            'table' => null,
                            'field' => null,
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'customer_id',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\Digits',
                    ),
                ),
                'validators' => array(),
            ),
            2 => array(
                'name' => 'name',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            3 => array(
                'name' => 'realm',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '256',
                        ),
                    ),
                ),
            ),
            4 => array(
                'name' => 'business_type',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '128',
                        ),
                    ),
                ),
            ),
            5 => array(
                'name' => 'timezone',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '64',
                        ),
                    ),
                ),
            ),
            6 => array(
                'name' => 'api_key',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '64',
                        ),
                    ),
                ),
            ),
            7 => array(
                'name' => 'rev',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '64',
                        ),
                    ),
                ),
            ),
        ),
        'CodeOrders\\V1\\Rest\\ApplicationEndpoint\\Validator' => array(
            0 => array(
                'name' => 'path',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'ZF\\ContentValidation\\Validator\\DbNoRecordExists',
                        'options' => array(
                            'adapter' => 'DbAdapter',
                            'table' => 'application_endpoint',
                            'field' => 'path',
                        ),
                    ),
                    1 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '64',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'description',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '64',
                        ),
                    ),
                ),
            ),
        ),
        'CodeOrders\\V1\\Rest\\Ptypes\\Validator' => array(
            0 => array(
                'name' => 'name',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '45',
                        ),
                    ),
                ),
            ),
        ),
        'CodeOrders\\V1\\Rest\\Clients\\Validator' => array(
            0 => array(
                'name' => 'name',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '60',
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'document',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '45',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'address',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '200',
                        ),
                    ),
                ),
            ),
            3 => array(
                'name' => 'zipcode',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            4 => array(
                'name' => 'city',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '60',
                        ),
                    ),
                ),
            ),
            5 => array(
                'name' => 'state',
                'required' => true,
                'filters' => array(),
                'validators' => array(),
            ),
            6 => array(
                'name' => 'responsible',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '60',
                        ),
                    ),
                ),
            ),
            7 => array(
                'name' => 'email',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '100',
                        ),
                    ),
                ),
            ),
            8 => array(
                'name' => 'phone',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '15',
                        ),
                    ),
                ),
            ),
            9 => array(
                'name' => 'obs',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '65535',
                        ),
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'CodeOrders\\V1\\Rest\\Users\\UsersResource' => 'CodeOrders\\V1\\Rest\\Users\\UsersResourceFactory',
            'CodeOrders\\V1\\Rest\\Users\\UsersRepository' => 'CodeOrders\\V1\\Rest\\Users\\UsersRepositoryFactory',
            'CodeOrders\\V1\\Rest\\Products\\ProductsResource' => 'CodeOrders\\V1\\Rest\\Products\\ProductsResourceFactory',
            'CodeOrders\\V1\\Rest\\Products\\ProductsRepository' => 'CodeOrders\\V1\\Rest\\Products\\ProductsRepositoryFactory',
            'CodeOrders\\V1\\Rest\\Orders\\OrdersResource' => 'CodeOrders\\V1\\Rest\\Orders\\OrdersResourceFactory',
            'CodeOrders\\V1\\Rest\\Orders\\OrdersRepository' => 'CodeOrders\\V1\\Rest\\Orders\\OrdersRepositoryFactory',
        	'CodeOrders\\V1\\Rest\\Orders\\OrdersService' => 'CodeOrders\\V1\\Rest\\Orders\\OrdersServiceFactory',
            'CodeOrders\\V1\\Rest\\Orders\\OrderItemTableGataway' => 'CodeOrders\\V1\\Rest\\Orders\\OrderItemTableGatewayFactory',
        ),
    ),
    'zf-mvc-auth' => array(
        'authorization' => array(
            'CodeOrders\\V1\\Rest\\Users\\Controller' => array(
                'collection' => array(
                    'GET' => true,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
                'entity' => array(
                    'GET' => true,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ),
            ),
        ),
    ),
);
