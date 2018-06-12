<?php

/**
 * Class IndexController
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

namespace Mini\Controller;

class IndexController
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {

       if (file_exists(APP . "Upload/Upload.txt")) {

           $wer_raw_data = file_get_contents(APP . "Upload/Upload.txt");

           $data_rows = explode(PHP_EOL, $wer_raw_data);

           $information_row = [];
           $player_rows = [];

           foreach ($data_rows as $row) {
               if ($this->startsWith($row, "#")) continue;
               if (strlen($row) < 2) break;
               if (!count($information_row)) $information_row = explode("\t", $row);
               else $player_rows[] = explode("\t", $row);
           }

           require APP . 'view/_templates/pairings/header.php';
           require APP . 'view/pairings/show.php';
           require APP . 'view/_templates/pairings/footer.php';

       } else {

           require APP . 'view/_templates/pairings/header.php';
           require APP . 'view/pairings/no_pairings.php';
           require APP . 'view/_templates/pairings/footer.php';

       }

    }

    function startsWith($haystack, $needle) {
        // search backwards starting from haystack length characters from the end
        return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== false;
    }

    function endsWith($haystack, $needle) {
        // search forward starting from end minus needle length characters
        return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== false);
    }

}
