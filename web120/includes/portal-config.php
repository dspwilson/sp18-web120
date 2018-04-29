<?php 
/* portal-config.php
/  
/  Derek S Wilson
/  web 120
/  Seattle Central College
/  Spring 2018
/
*/

// echo basename($_SERVER['PHP_SELF']);

define ('THIS_PAGE', basename($_SERVER['PHP_SELF']));
// echo THIS_PAGE;
// die;

switch (THIS_PAGE) {
    case 'index.php': 
        $title = "Derek's Web 120 Page";
        $logo = 'fa-home';
        $pageID = 'Welcome';
    break;
        
    case 'aia.php': 
        $title = 'Derek Wilson: Final Project AIA';
        $logo = 'fa-edit';
        $pageID = 'Final Project: Audience, Issues, and Approach';
    break;
        
    case 'flowchart.php': 
        $title = 'Derek Wilson: Final Project Flowchart';
        $logo = 'fa-table';
        $pageID = 'Final Project: Flowchart and Layout';
    break;
        
    case 'contactme.php': 
        $title = 'Derek Wilson: Contact Me';
        $logo = 'fa-comment';
        $pageID = 'Contact Derek';
    break;
        
    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $pageID = '';
}

// Create associative array with navigation list items
// Associative array indices are the link href from the html 

$links['index.php']        = 'Welcome';
$links['big/index.php']    = 'Big';
$links['aia.php']          = 'AIA';
$links['flowchart.php']    = 'Flowchart';
$links['fpindex.php']      = 'Final Project';
$links['contactme.php']    = 'Contact Derek';

// create nav function to highlight

function makeNav ($nav) {
    $navItem = '';
    foreach ($nav as $href => $link_title) {
        if(THIS_PAGE == $href)
        { //add class selected
           $navItem .= '<li><a href="' . $href . '" class="selected">' . $link_title . '</a></li>';
        } else { //no class selected
           $navItem .= '<li><a href="' . $href . '">' . $link_title . '</a></li>'; 
        } //end else
    } //end foreach
    return $navItem;
} // end makeNav

?>
