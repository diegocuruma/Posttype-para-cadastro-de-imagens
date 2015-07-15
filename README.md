# TEMA

## O que é?

Plugin para criação de Posttype de imagens.


## Fotos em campo repeater (Campo Repeater, Advanced Custom Field)

Um Post Type com um campo repetidor de imagens e links, útil para criar pagina de logos, fotos e etc. Pode ser utilizada em um carrousel ou pagina de fotos com logos ou qualquer pagina de galeria fotos.

## Como aplica?

PARTE 1 WP:

1 - Baixe o Plugin.

2 - Na pasta Logos voce encontrará o arquivo de posttype com o nome logos, renomei ao seu gosto, não esqueça de renomear a pasta e o conteúdo do post.

3 - No painel do wordpress ative o em Plugins.

##--------------------------------------------------------------------

PARTE 2 WP:

1 - Instale e Ative o plugin Advanced Custom Fields: Repeater Field, caso não possua o plugin que é pago, a primeira parte do plugin está funcionando e gerando um posttype automatico. (Caso não possua o advanced custom field veja a parte 3).

2 - Em ferramentas -> importar -> wordpress voce vai xamar o ACF - Post Type com Campo repeater para Imagens que está na pasta. 

3 - Verifique se está nos campos personalizados, após isso voce aplica ao post ou quais páginas quer aplicar.


PARTE CÓD:

1 - Insira o código: 
## Exemplo de uso em um carrousel:


<ul>
<!--while do post - -->
<!--posttype 'produtos' pode haver vários post's, então captura-se a ID da page que queira trazer-->
<?php $fotos = new WP_Query ( array ( 'post_type' => 'produto','page_id'=>coloque a id da pagina aqui));
while($fotos->have_posts()) : $fotos->the_post();
?>

    <!--if dos campos pra cadastrar as imagens-->
    <?php 
        if( have_rows('listagem') ):
        while ( have_rows('listagem') ) : the_row();

    ?>
        <li>  
          <!--if pra ver se tem link ou nao-->                         
            <?php if(get_sub_field('links') != '') : ?>
            <a href="<?php the_sub_field('links'); ?>"  class="pure-u-md-24-24" title="Acesse: <?php the_sub_field('links'); ?>">
                <img src="<?php the_sub_field('imagens'); ?>" alt="" class="">
            </a>
             <!--se nao tiver link joga a imagem-->  
            <?php else : ?>
            <img src="<?php the_sub_field('imagens'); ?>" alt="<?php the_sub_field('links'); ?>" class="">

            <?php endif; ?>
        </li>
        <?php endwhile; endif; ?>

        <?php     
         endwhile; wp_reset_query(); 
        ?>
    </ul>   

<div class="customNavigation">
  <a class="btn prev img_rep">Previous</a>
  <a class="btn next img_rep">Next</a>
</div>

2 - Pronto!





## PARTE 3 WP:

Se voce nao possui o Plugin Advanced Custom Field, faça o seguinte.

1 - faça o mesmo procedimento da Parte 1.

2 - Vai gerar um posttype de paginas, então cadastre uma pagina e uma foto até cadastrar tudo.

PARTE CÓD:

1 - Insira o código: 
## Exemplo de uso em um carrousel:
<ul id="logo" class="owl-carousel">				        
<?php $lg = New wp_query(array('post_type' => 'logo', 'orderby' => 'title', 'order' => 'asc' , 'showposts' => -1));
    while($lg -> have_posts()): $lg -> the_post();

?>                                                
<li class="">
    <a href="<?php the_permalink(); ?>" class="" title="<?php the_title(); ?>">
        <?php the_post_thumbnail(); ?>
    </a>        
</li>

<?php endwhile; ?>
</ul>
<a class="prev1 img_rep">Previous</a>
<a class="next1 img_rep">Next</a>





* Versão 0.0.3 - Modo inicial, testes e aplicação estão começando.


## Autores

* Diego Curuma [Link's'](https://www.github.com/diegocuruma, https://www.behance.net/diegocuruma)
* Isabela [Link](https://www.link)
* Jonas Sousa [Behance](https://www.behance.net/onasousa)
* Allef Bruno [Behance](https://www.behance.net/)

## Referências 

* [Sass](http://sass-lang.com/)
* [Compass](http://compass-style.org/)
* [Grunt](http://gruntjs.com/)
* [Normalize CSS](http://necolas.github.io/normalize.css/)
* [HTML5 Boilerplate](http://html5boilerplate.com/)
* [HTML5 Shiv](https://github.com/aFarkas/html5shiv)
