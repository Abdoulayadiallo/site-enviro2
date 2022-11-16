<?php
/**
 * @package Contact_plugin
 * @version 0.0.1
 */
/*
Plugin Name:Contact Plugin
Plugin URI: https://github.com/
Description: Used by millions, Contact Plugin is quite possibly the best way in the world to <strong>protect your blog from spam</strong>. It keeps your site protected even while you sleep. To get started: activate the Akismet plugin and then go to your Akismet Settings page to set up your API key.
Version: 0.0.1
Author: Groupe 4
Author URI:https://mali-enviro.ml
License: GPLv2 or later
Text Domain: contact_plugin
*/
function contact_plugin(){

    $content ='';
    $content .='<h2>Formulaire de contact</h2>';

    $content .='<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">';
    $content .='<form method="post" action="https://maliartisanat.ml/contact/">';

    $content .='<label for="email_client"> Email </label>';
    $content .='<input type="email" name="your_email" class="form-control" required placeholder = "name@example.com"/>';

    $content .='<label for="objet_client"> Objet </label>';
    $content .='<input type="text" name="your_objet" class="form-control" required placeholder = "Veuillez saisir votre demande"/>';

    $content .='<label for="description_client"> Description </label>';
    $content .= '<textarea name="your_description" class="form-control" required placeholder = "Description" cols="30" rows="10"> </textarea>'; 

    $content .='<br/><input type="submit" name="example_form_submit" class="btn " style="background-color: #00BF87 ;border-color: #00BF87" value="Envoyer" />';
    //$content .='<button $_POST>  Envoyez </button>';
    $content .='</form>';
    return $content;
}

    add_shortcode('contact_plugin','contact_plugin');
    function example_form_capture() 
    {
      if(isset($_POST['example_form_submit'])){
         if(isset($_POST['your_email']) AND isset($_POST['your_objet']) AND isset($_POST['your_description']))

         {
            if(!empty($_POST['your_email']) AND !empty($_POST['your_objet']) AND !empty($_POST['your_description']))
            {
       if (isset($_POST['example_form_submit'])){
          $email = htmlspecialchars($_POST['your_email']);
          $objet = htmlspecialchars($_POST['your_objet']);
          $description = htmlspecialchars($_POST['your_description']);
   
          $to = 'd.abdoulayead28@gmail.com';
          $subject = 'Formulaire de contacts';
          $message = ''.$email.' - '.$objet.' - '.$description;
   
          wp_mail($to, $subject, $message);

          echo "<h2> Bonjour,merci pour votre email:<mark><b> $email </b></mark>";
       }
      }

    }
   }
}
   add_action('wp_head','example_form_capture');
?>