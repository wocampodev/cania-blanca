<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public $products = [
        'mosto-verde' => [
            'name' => 'MOSTO VERDE',
            'description-long' => 'Netamente es un destilado de caña obtenido mediante una fermentación cortada, evitando así que todos los azucares presentes en el mosto se conviertan en alcohol y que estos se aparezcan en el destilado, dando su fina dulzura y aromas de fructosa y sacarosa.',
            'description-short' => 'Se puede tomar puro para identificar su cuerpo, sabor y aroma a caña de azúcar.',
            'suggest' => 'Chilcano',
            'preparation' => [
                'En un vaso colocar cubos de hielo.',
                'Agregar CAÑABLANCA Mosto verde sobre el hielo para despertar su sabor.',
                'Llenar a tres cuartos del vaso con gaseosa de jengibre o Evervess.',
                'Unas gotas de limón.',
            ],
            'main_img' => './assets/images/products/mosto_verde.png',
        ],
        'macerado-damascos' => [
            'name' => 'MACERADO EN DAMASCOS',
            'description-long' => 'Nuestro fino destilado recibe los frutos del damasco deshidratado, que en un tiempo prolongado estos frutos se embeben del licor circundante soltando a la vez sus aromas y azucares propios de las frutas, como la conocida fructosa. La presión de vapor del alcohol juega un papel preponderante para penetrar en el fruto y suceda el intercambio volumétrico con sus azucares. El resultado es un fino destilado con agradables sabores de la fruta.',
            'description-short' => 'Al tomarlo puro podrá degustar el dulzor natural del damasco, su naturaleza y consistencia que envuelven al paladar.',
            'suggest' => 'Sunrise',
            'preparation' => [
                'En un vaso alto agregar hielo.',
                'Añadir CAÑABLANCA Macerado en Damasco sobre el hielo.',
                'Completar con jugo de naranja.',
                'Adicionar un fino chorro de granadina.',
            ],
            'main_img' => './assets/images/products/macerado_damascos.png',
        ],
        'uva-italia' => [
            'name' => 'UVA ITALIA',
            'description-long' => 'Empleamos esta variedad de uva deshidratada que es sometida a una destilación junto con el mosto verde de la caña de azúcar, a altas temperaturas se logra extraer todos los sabores y azucares de la uva, dando como resultado una combinación de sabores y aromas del mosto verde y uva Italia.',
            'description-short' => 'La finura de un destilado combinado con el sabor natural de la uva Italia, hacen que tenga una experiencia de un mismo pisco.',
            'suggest' => 'Piña Colada',
            'preparation' => [
                'En una coctelera con hielo mezclar licor de coco, jugo de piña.',
                'CAÑABLANCA Uva Italia y un golpe de nata liquida.',
                'Agitar y servir en vaso alto.',
                'Se decora con una rodaja de piña.',
            ],
            'main_img' => './assets/images/products/uva_italia.png',
        ],
        'macerado-arandanos' => [
            'name' => 'MACERADO EN ARANDANOS',
            'description-long' => 'En el proceso de maceración sucede el intercambio de azucares de la fruta y el alcohol circundante, donde uno se enriquece del otro teniendo como resultado un licor de consistencia de un tinto y sabroso como el propio arándano, además de tener las propiedades benéficas de este fruto que es poseer más vitamina C que cualquier cítrico.',
            'description-short' => 'De color intenso y de sabor agradable, lo hace el predilecto de los tragos cortos macerados.',
            'suggest' => 'Coctel de Arándanos',
            'preparation' => [
                'Hielo en un vaso alto.',
                'Agregar CAÑABLANCA de Arándanos.',
                'Completar con gaseosa de jengibre o Evervess.',
                'Asegurar que se viertan los frutos secos de arándano en el vaso.',
            ],
            'main_img' => './assets/images/products/macerado_arandanos.png',
        ],
        'hierba-luisa' => [
            'name' => 'HIERBA LUISA',
            'description-long' => 'Excelente combinación de una bebida digestiva aromática y de sabor cítrico. Se puede tomar sola o en cocteles. Su procesamiento por largo tiempo, aseguran intensidad de sabores de la hierba, aportando a la vez sus propiedades medicinales al licor y su intenso sabor. Su presentación con las hiervas dentro de la botella intensifica el sabor natural de la misma denotando un color cada vez más intenso al paso del tiempo.',
            'description-short' => 'Sabores herbáceos y cítricos muy intensos a la vez, con tonalidades ligeras de dulzor propias de la hierba.',
            'suggest' => 'Caipirinha versión con CAÑABLANCA',
            'preparation' => [
                'En un vaso ancho colocar un limón cortado en tiras.',
                'machacarlo con CAÑABLANCA Hierva Luisa y azúcar.',
                'Agregar hielo picado.',
                'Adicionar solo un poco de gaseosa de Jengibre o Evervess.',
            ],
            'main_img' => './assets/images/products/hierba_luisa.png',
        ],
        'manzanilla' => [
            'name' => 'MANZANILLA',
            'description-long' => 'La suavidad de nuestro destilado combinado con el aromático sabor floral de la manzanilla   hacen de esta presentación una de las preferidas y acertadas por sus propiedades medicinales para el sistema digestivo, hígado y muchos más. El paso del tiempo con la flor dentro de la botella, aseguran siempre el enriquecimiento de la bebida con las propiedades de la hierba.',
            'description-short' => 'Digestivo por naturaleza e ideal para dolores estomacales y varias más. De aroma afrutado y sabor sutil, dominantemente dulce y con ligeros destellos amargos en el pos gusto.',
            'suggest' => 'Coctel de Manzanilla',
            'preparation' => [
                'En un vaso alto colocar cubos de hielo',
                'Agregar CAÑABLANCA Manzanilla',
                'Completar a tres cuartos del vaso con gaseosa de jengibre o Evervess',
            ],
            'main_img' => './assets/images/products/manzanilla.png',
        ],
        'cogollito' => [
            'name' => 'COGOLLITO',
            'description-long' => 'Tradicional bebida extraída del destilado de caña de azúcar, pero en cantidades pequeñas en el procesamiento. Esta es una versión muy saludable del ya conocido cogollito serrano. Es destilado y rectificado con nuevas tecnologías que nos permite degustar una bebida espiritosa sin tener la llamada mala resaca o dolores de cabeza post bebida. Su fino destilado y dulzor natural hacen de esta bebida una opción nueva y saludable.',
            'description-short' => 'Idealmente es para tomarlo solo, su sabor pronunciado a caña de azúcar lo hacen el preferido de los short drinks, se sirve en copas pequeñas.',
            'suggest' => 'Coctel de Mojito',
            'preparation' => [
                'En vaso mediano ancho colocar unas rodajas de limón',
                'Hierba buena y una pizca de azúcar blanca',
                'Agregar CAÑABLANCA Cogollito y apisonar suavemente',
                'Adicionar hielo y ginger ale',
                'Unas gotas de limón',
            ],
            'main_img' => './assets/images/products/cogollito.png',
        ],
    ];

    public function getProducts()
    {
        // dd($this->products);
        return view('products', ['products' => $this->products]);
    }

    public function product_detail($slug = null)
    {
        if (is_null($slug)) {
            $product = $this->products['mosto-verde'];
        } else {
            $product = $this->products[$slug];
        }
        return view('product-detail', compact('product'));
    }
}
