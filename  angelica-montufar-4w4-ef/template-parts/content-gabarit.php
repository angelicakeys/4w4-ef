<?php
/**
 * Template part l'affichage des bloc de cours dans front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme4w4
 */
global $tPropriété;
?>

<!-- permet de mettre le numero de la session, il c'est jamais placer il comme il faut :( -->
<!-- <divNoSession> 
    <h4><?php //echo $tPropriété['session'] ?> <h4>
</divNoSession> -->
<article>
   
	<p><?php echo $tPropriété['titrePartiel'] /* . " - " . $tPropriété['session'] */  ?></p>
	<a href="<?php echo get_permalink() ?>"><?php echo $tPropriété['sigle']; ?></a>
	 <p> <?php echo $tPropriété['nbHeure']; ?></p> 
 
</article>

