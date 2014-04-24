<?php
/**
 * Created by PhpStorm.
 * User: Jae
 * Date: 4/25/14
 * Time: 12:12 AM
 */


class Jobeet {
  static public function slugify($text)
  {
    // replace all non letters or digits by -
    $text = preg_replace('/\W+/', '-', $text);

    // trim and lowercase
    $text = strtolower(trim($text, '-'));

    return $text;
  }
} 