<?php 


if(empty($_GET['page'])){
    require "views/accueil.php";
} else {
    switch ($_GET['page']) {
        case "accueil":
            require "views/accueil.php";
            break;
        case "my_portfolio":
            require "views/about.php";
            break;
        case "skills":
            require "views/skills.php";
            break;
        case "experience":
            require "views/experience.php";
            break;
        case "education":
            require "views/education.php";
            break;
        case "projet":
            require "views/projet.php";
            break;
        case "contact":
            require "views/contact.php";
            break;
        case "contact_form":
            require "views/contact_form.php";
            break; 
        case "mentions légales":
            require "views/mention.php";
            break;  
        default:
            throw new Exception("la page n'existe pas");
    }
}
?>