<?php
/**
 * portal-config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

//site keys for web-students.net (we used these in WEB110 - yours will be new and based upon your own server)
$siteKey = "6LeDaSoUAAAAACnEiqA3QAkiRU-Q_wtk0vuBa_OX";
$secretKey = "6LeDaSoUAAAAACJ69mIHYOxL4atri9oPrjkIVMFv";

//this helps eliminate PHP date errors
date_default_timezone_set('America/Los Angeles');

//this constant allows a page to know it's own url/name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Sara";

switch(THIS_PAGE)
{
    case "index.php":
        $title = "Derek Hendrick: WEB120 Portal Website";
        $logo = "fa-home";
        $PageID = "Welcome";
    break;
    
    case "aia.php":
        $title = "Derek Hendrick: Final Project AIA";
        $logo = "fa-users";
        $PageID = "Final Project:Audience, Issues and Approach";
    break;
        
    case "ux.php":
        $title = "Derek Hendrick: Final Project Flowchart and Layout";
        $logo = "fa-file-text-o";
        $PageID = "Final Project: Flowchart and Layout";
    break;
    
    case "contactme.php":
        $title = "Derek Hendrick: Contact Form";
        $logo = "fa-pencil-square-o";
        $PageID = "Contact Sara";
    break;
        
    default:
        $title = THIS_PAGE;
        $logo = "";
        $PageID = "";
    break;
        
}

function makeLinks($nav)
{
    $myReturn = '';
    foreach($nav as $url => $text)
    {
        if(THIS_PAGE == $url)
        {//add class
           $myReturn .= '<li><a href="' . $url . '" class="selected">' . $text . '</a></li>';            
        }else{//no class
           $myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'; 
  
        }
        
    }
    
    return $myReturn;
}
