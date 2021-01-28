<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product_detail($slug)
    {

        $products = [
            'mosto-verde' => [
                'name' => 'MOSTO VERDE',
                'description' => 'Se puede tomar puro para identificar su cuerpo, sabor y aroma a caña de azúcar.',
                'suggest' => 'Chilcano',
                'preparation' => [
                    'En un vaso colocar cubos de hielo.',
                    'Agregar CAÑABLANCA Mosto verde sobre el hielo para despertar su sabor.',
                    'Llenar a tres cuartos del vaso con gaseosa de jengibre o Evervess.',
                    'Unas gotas de limón.',
                ],
                'main_img' => './assets/images/products/mosto_verde.png',
                'banner_img' => './assets/images/slider/mosto_verde.jpeg',
            ],
            'macerado-damascos' => [
                'name' => 'MACERADO EN DAMASCOS',
                'description' => 'Al tomarlo puro podrá degustar el dulzor natural del damasco, su naturaleza y consistencia que envuelven al paladar.',
                'suggest' => 'Sunrise',
                'preparation' => [
                    'En un vaso alto agregar hielo.',
                    'Añadir CAÑABLANCA Macerado en Damasco sobre el hielo.',
                    'Completar con jugo de naranja.',
                    'Adicionar un fino chorro de granadina.',
                ],
                'main_img' => './assets/images/products/macerado_damascos.png',
                'banner_img' => './assets/images/slider/mosto_verde.jpeg',
            ],
            'uva-italia' => [
                'name' => 'UVA ITALIA',
                'description' => 'La finura de un destilado combinado con el sabor natural de la uva Italia, hacen que tenga una experiencia de un mismo pisco.',
                'suggest' => 'Piña Colada',
                'preparation' => [
                    'En una coctelera con hielo mezclar licor de coco, jugo de piña.',
                    'CAÑABLANCA Uva Italia y un golpe de nata liquida.',
                    'Agitar y servir en vaso alto.',
                    'Se decora con una rodaja de piña.',
                ],
                'main_img' => './assets/images/products/azul_ancha.jpg',
                'banner_img' => './assets/images/slider/mosto_verde.jpeg',
            ],
            'macerado-arandanos' => [
                'name' => 'MACERADO EN ARANDANOS',
                'description' => 'De color intenso y de sabor agradable, lo hace el predilecto de los tragos cortos macerados.',
                'suggest' => 'Coctel de Arándanos',
                'preparation' => [
                    'Hielo en un vaso alto.',
                    'Agregar CAÑABLANCA de Arándanos.',
                    'Completar con gaseosa de jengibre o Evervess.',
                    'Asegurar que se viertan los frutos secos de arándano en el vaso.',
                ],
                'main_img' => './assets/images/products/macerado_arandanos.png',
                'banner_img' => './assets/images/slider/mosto_verde.jpeg',
            ],
            'hierba-luisa' => [
                'name' => 'HIERBA LUISA',
                'description' => 'Sabores herbáceos y cítricos muy intensos a la vez, con tonalidades ligeras de dulzor propias de la hierba.',
                'suggest' => 'Caipirinha versión con CAÑABLANCA',
                'preparation' => [
                    'En un vaso ancho colocar un limón cortado en tiras.',
                    'machacarlo con CAÑABLANCA Hierva Luisa y azúcar.',
                    'Agregar hielo picado.',
                    'Adicionar solo un poco de gaseosa de Jengibre o Evervess.',
                ],
                'main_img' => './assets/images/products/hierba_luisa.png',
                'banner_img' => './assets/images/slider/mosto_verde.jpeg',
            ],
            'manzanilla' => [
                'name' => 'MANZANILLA',
                'description' => 'Digestivo por naturaleza e ideal para dolores estomacales y varias más. De aroma afrutado y sabor sutil, dominantemente dulce y con ligeros destellos amargos en el pos gusto.',
                'suggest' => 'Coctel de Manzanilla',
                'preparation' => [
                    'En un vaso alto colocar cubos de hielo',
                    'Agregar CAÑABLANCA Manzanilla',
                    'Completar a tres cuartos del vaso con gaseosa de jengibre o Evervess',
                ],
                'main_img' => './assets/images/products/manzanilla.png',
                'banner_img' => './assets/images/slider/mosto_verde.jpeg',
            ],
            'cogollito' => [
                'name' => 'COGOLLITO',
                'description' => 'Idealmente es para tomarlo solo, su sabor pronunciado a caña de azúcar lo hacen el preferido de los short drinks, se sirve en copas pequeñas.',
                'suggest' => 'Coctel de Mojito',
                'preparation' => [
                    'En vaso mediano ancho colocar unas rodajas de limón',
                    'Hierba buena y una pizca de azúcar blanca',
                    'Agregar CAÑABLANCA Cogollito y apisonar suavemente',
                    'Adicionar hielo y ginger ale',
                    'Unas gotas de limón',
                ],
                'main_img' => './assets/images/products/cogollito.png',
                'banner_img' => './assets/images/slider/mosto_verde.jpeg',
            ],
        ];

        $product = $products[$slug];

//        dd($product);

        return view('product-detail',compact('product'));
    }
}
