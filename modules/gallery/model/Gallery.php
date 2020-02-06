<?php
/**
 * Gallery
 * @package gallery
 * @version 0.0.1
 */

namespace Gallery\Model;

class Gallery extends \Mim\Model
{

    protected static $table = 'gallery';

    protected static $chains = [];

    protected static $q = ['title'];
}