<?php

use Illuminate\Support\Facades\Route;
use App\Models\posteo;
use App\Models\informacion;
Route::get('/', function () {
    $post = new posteo();
    $post->titulo = "Billie Ellish";
    $post->subtitulo = "Grammys";
    $post->autor = "Sebastian Smith Castillo";
    $post->fecha="19 de Septiembre de 2019";
    //objeto 2
    $post2 = new posteo();
    $post2->titulo = "NF";
    $post2->subtitulo = "Mejor cancion titulada Oh lord";
    $post2->autor = "Gerardo Antonio Perez Garcia";
    $post2->fecha = "20 de Noviembre de 2018";
    //objeto 3
    $post3 = new posteo();
    $post3->titulo = "xxxtentacion muere";
    $post3->subtitulo = "Artista muere baleado por criminales";
    $post3->autor = "Andrea Saltillo Mendez";
    $post3->fecha = "6 de Julio de 2018";
    //objeto 4
    $post4=new posteo();
    $post4->titulo = "Linkin park";
    $post4->subtitulo = "Se suicida vocalista de la banda linkin park por motivos personales";
    $post4->autor = "Pedro Hernandez Castillo";
    $post4->fecha = "20 de Julio de 2019";
    $git = "https://github.com/Codeunit6";
    $facebook = "https://www.facebook.com/BlackF.art/";
    $twitter = "https://twitter.com/hackingzone";
    
    return view('blog.index',['post'=>$post,'post2'=>$post2,'post3'=>$post3,'post4'=>$post4, 'git'=>$git, 'facebook'=>$facebook,'twitter'=>$twitter]);
})->name('index');


Route::get('/about', function () {
    //objetos locales
    $mision = "Somos una empresa dedicada a la informar a la gente sobre la musica y traer las mejores novedades de este mundo";
    $vision = "Nosotros qnos empeñamos en ser una de las mejores empresa de  noticas sobre los artistas para mantener informada a la gente";
    $valores = "Somos una empresa con mucho respeto hacia nuestros seguidores, asi como tambien nos empeñados en ser muy puntuales con nuestro trabajo a la hora de publicarlas, tambien nosotros nos concideramos muy coperativos y empaticos con los artistas para no invadir su vida privada";
    $git = "https://github.com/Codeunit6";
    $facebook = "https://www.facebook.com/BlackF.art/";
    $twitter = "https://twitter.com/hackingzone";
    return view('blog.about', ['mision'=>$mision,'vision'=>$vision, 'valores'=>$valores, 'git'=>$git, 'facebook'=>$facebook,'twitter'=>$twitter]);
})->name('about');

Route::get('/post', function () {
    $post = new posteo();
    $post->titulo = "Billie Ellish";
    $post->subtitulo = "Grammys";
    $post->autor = "Sebastian Smith Castillo";
    $post->fecha="19 de Septiembre de 2019";
    //objeto de otra clase
    $info=new informacion();
    $info->parrafo1="La artista adolescente gana todas las categorías principales de los premios de la música con un disco grabado en su casa. La cantante catalana y Alejandro Sanz dominan en los latinos";
    $info->parrafo2="Los premios Grammy de 2020 coronaron a la pareja artística formada por Billie Eilish y su hermano Finneas O’Connell como los artistas con mayor impacto en la industria el año pasado. Billie Eilish se llevó el premio al mejor nuevo artista de la industria de la música en Estados Unidos. Bad Guy es la canción del año y la grabación del año. El disco When We All Fall Asleep, Where Do We Go? es el mejor álbum de pop vocal contemporáneo, la categoría en la que decidió ponerlo la Academia. La clasificación da un poco igual: también ganó álbum del año en general. Finneas O’Connell triunfó por la producción del disco y se llevó el codiciado premio de productor del año.";
    $info->parrafo3="Billie Eilish hizo historia al ganar las cuatro categorías generales de los premios Grammy en un mismo año. Solo ha ocurrido dos veces en 62 ediciones de los Grammy. El anterior fue Christopher Cross en 1981. Adele ha ganado las cuatro categorías, pero en años distintos.";
    $info->parrafo4="Los dos hermanos grabaron el disco literalmente en su casa en el barrio de Highland Park, en Los Ángeles. Pertenecen a una generación que graba música en su casa, se la producen ellos mismos y la comparten directamente en las redes mientras los sellos discográficos ";
    $info->parrafo5="Antes de arrasar, Billie Eilish ya había hecho historia al ser la persona más joven nominada en las cuatro categorías principales de los Grammy. Las candidaturas se anunciaron cuando tenía 17 años y se presentó en la gala con 18. La edición de este domingo era la primera en la que había dos artistas nominadas en las cuatro categorías, Eilish y la rapera Lizzo.";
    $info->parrafo6="Lizzo fue la otra triunfadora de la noche con tres Grammy. Hizo honor a su personaje público con sus primeras palabras al recoger un premio: “Esto es una puta locura”. Nacida en Detroit y criada en Texas, en apenas dos años de éxito comercial Lizzo, una artista que vivió en su coche durante años antes del éxito, se ha convertido en un símbolo de superación y energía positiva. El primer verso de su éxito Truth Hurts (“me he hecho un test de ADN y resulta que soy al 100% una perra”) es una de las frases del año en la música. ";
    $info->titulo2="El impacto de Rosalía";
    $info->titulo3="Billie la mejor artista";
    $git = "https://github.com/Codeunit6";
    $facebook = "https://www.facebook.com/BlackF.art/";
    $twitter = "https://twitter.com/hackingzone";
    return view('blog.post',['post'=>$post, 'git'=>$git, 'facebook'=>$facebook,'twitter'=>$twitter, 'info'=>$info]);
})->name('post');



Route::get('/post2', function () {
    $post = new posteo();
    $post->titulo = "NF";
    $post->subtitulo = "Mejor cancion titulada Oh lord";
    $post->autor = "Sebastian Smith Castillo";
    $post->fecha="19 de Septiembre de 2019";
    //objeto de otra clase
    $info=new informacion();
    $info->parrafo1="Los funcionarios de Walmart AMP continúan agregando a su alineación de temporada.";
    $info->parrafo2="Los funcionarios anunciaron esta semana que el rapero NF se presentará en el lugar el jueves 14 de octubre.";
    $info->parrafo3="El álbum Therapy Session de NF ganó el premio Dove de la Asociación de Música Gospel por Álbum del Año de Rap/Hip Hop, y sus dos canciones Perception y The Search fueron los debuts número 1 en las listas Billboard 200. Además, su canción, Let You Down, alcanzó un sencillo certificado triple platino en los Estados Unidos y llegó a las listas internacionales.";
    $info->parrafo4="Los boletos salen a la venta al público el viernes 25 de junio a las 10 a. m. y cuestan entre $29.50 y $69.50 más las tarifas correspondientes.
    Para comprar, llame al 479-443-5600, visite amptickets.com o pase por la taquilla de Walmart AMP. El horario de taquilla de la AMP es de 10 a. m. a 5 p. m. de lunes a viernes. La taquilla del Walton Arts Center todavía está cerrada a las ventas sin cita previa.";
    $info->parrafo5="La invitada especial Michl también actuará en el espectáculo.";
    $info->parrafo6="Las puertas abren a las 7 p.m. y la música comienza a las 8 p.m.";
    $info->titulo2="Oh lord";
    $info->titulo3="NF el mejor rapero";
    $git = "https://github.com/Codeunit6";
    $facebook = "https://www.facebook.com/BlackF.art/";
    $twitter = "https://twitter.com/hackingzone";
    return view('blog.post2',['post'=>$post, 'git'=>$git, 'facebook'=>$facebook,'twitter'=>$twitter, 'info'=>$info]);
})->name('postnf');


Route::get('/post3', function () {
    $post = new posteo();
    $post->titulo = "xxxtentacion muere";
    $post->subtitulo = "Artista muere baleado por criminales";
    $post->autor = "Andrea Saltillo Mendez";
    $post->fecha = "6 de Julio de 2018";
    //objeto de otra clase
    $info=new informacion();
    $info->parrafo1="La oficina del sheriff del condado de Broward informó que dos hombres armados se acercaron al auto del artista cuando salía de una tienda de motocicletas en la zona de Deerfield Beach.";
    $info->parrafo2="Al menos uno de ellos le disparó con una pistola antes de darse a la fuga. La policía calificó el suceso como un aparente robo";
    $info->parrafo3="";
    $info->parrafo4="";
    $info->parrafo5="El artista, cuyo verdadero nombre era Jahseh Dwayne Onfroy, fue trasladado en estado crítico al hospital donde falleció poco después.";
    $info->parrafo6="La investigación está abierta y la policía pidió la colaboración de cualquier testigo del asesinato.";
    $info->titulo2="XXXtentacion";
    $info->titulo3="RIP TENTACION";
    $git = "https://github.com/Codeunit6";
    $facebook = "https://www.facebook.com/BlackF.art/";
    $twitter = "https://twitter.com/hackingzone";
    return view('blog.post3',['post'=>$post, 'git'=>$git, 'facebook'=>$facebook,'twitter'=>$twitter, 'info'=>$info]);
})->name('postten');


Route::get('/post4', function () {
    $post=new posteo();
    $post->titulo = "Linkin park";
    $post->subtitulo = "Se suicida vocalista de la banda linkin park por motivos personales";
    $post->autor = "Pedro Hernandez Castillo";
    $post->fecha = "20 de Julio de 2019";
    //objeto de otra clase
    $info=new informacion();
    $info->parrafo1="Cuando pensamos que nada más catastrófico puede ocurrir en el 2020, aparece Anonymous para revelar los secretos más escondidos. Uno de ellos involucra al ex vocalista de Linkin Park, Chester Benington.";
    $info->parrafo2="Según Anonymous el supuesto suicidio de Chester Bennington solo fue una cortina de humo. Su muerte, en realidad, fue un asesinato que estaba relacionado con una revelación de secretos respecto a una red de pedofilia surgida en Hollywood hace unos años, y que tenía a Jeffrey Epstein como líder y Donald Trump estaba involucrado.";
    $info->parrafo3="De acuerdo con la información que posee Anonymous y que fue difundida el pasado 31 de mayo, Chester era conocedor de la situación porque había estado en lujosas fiestas en Estados Unidos. Por ese motivo, encubrieron su asesinato y lo hicieron pasar como suicidio.";
    $info->parrafo4="Recordemos, que unos años antes de su muerte, Chester dio una entrevista para la revista Kerrang, confesando el tiempo doloroso que paso en su niñez:";
    $info->parrafo5="El artista, cuyo verdadero nombre era Jahseh Dwayne Onfroy, fue trasladado en estado crítico al hospital donde falleció poco después.";
    $info->parrafo6="“Al recordar los abusos que sufrí cuando era muy pequeño (…) me estremezco, fue de un delicado y curioso ‘¿Qué hace esta cosa?’ a plenas y locas violaciones. Fui golpeado y obligado a hacer cosas que no quería hacer. Destruyó la confianza en mí mismo y guardó silencio por seis años por miedo a que pensaran que “era gay” o que “estaba mintiendo”, confesó el cantante en  el 2008.";
    $info->titulo2="Quien era Cheester";
    $info->titulo3="Vocalista de Linkin Park";
    $git = "https://github.com/Codeunit6";
    $facebook = "https://www.facebook.com/BlackF.art/";
    $twitter = "https://twitter.com/hackingzone";
    return view('blog.post4',['post'=>$post, 'git'=>$git, 'facebook'=>$facebook,'twitter'=>$twitter, 'info'=>$info]);
})->name('postlin');


Route::get('/template/layout', function () {
    $post = new posteo();
    $post->titulo = "Billie Ellish";
    $post->subtitulo = "Grammys";
    $post->autor = "Sebastian Smith Castillo";
    $post->fecha="19 de Septiembre de 2019";
    $git = "https://github.com/Codeunit6";
    $facebook = "https://www.facebook.com/BlackF.art/";
    $twitter = "https://twitter.com/hackingzone";
    return view('blog.template.layaout',['post'=>$post, 'git'=>$git, 'facebook'=>$facebook,'twitter'=>$twitter]);
})->name('post2');
