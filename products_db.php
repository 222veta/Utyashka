<?php
function get_products() {
  return [
    '1' => [
      'title' => 'Уточка простая',
      'url' => 'img/утка1.jpg',
    ],

    '2' => [
      'title' => 'Утка коллекционная',
      'url' => 'img/утка2.jpg',
    ],

    '3' => [
      'title' => 'Утка коллекционная бейби',
      'url' => 'img/утка3.jpg',
    ],

    '4' => [
      'title' => 'Утка как настоящая',
      'url' => 'img/утка4.jpg',
    ],

    '5' => [
      'title' => 'Утка как настоящая 2',
      'url' => 'img/утка5.jpg',
    ],

    '6' => [
      'title' => 'Семейство уточек',
      'url' => 'img/утка6.jpg',
    ],

    '7' => [
      'title' => 'Уточка большая простая',
      'url' => 'img/утка7.jpg',
    ],

    '8' => [
      'title' => 'Утка диван',
      'url' => 'img/.утка8jpg',
    ],

    '9' => [
      'title' => 'Утка милашка',
      'url' => 'img/утка9.jpg',
    ],

    '10' => [
      'title' => 'Круглая утка',
      'url' => 'img/утка10.jpg',
    ],

    '11' => [
      'title' => 'Утка тоего детства',
      'url' => 'img/утка11.jpg',
    ]
      
  ];
}

function get_product_attribute($id, $attr) {
  $products = get_products();
  $result = $products[$id][$attr] ?? null;
  return $result;
}

function get_product_title($id) {
  return get_product_attribute($id, 'title');
}

function get_img_url($id) {
  return get_product_attribute($id, 'url');
}
