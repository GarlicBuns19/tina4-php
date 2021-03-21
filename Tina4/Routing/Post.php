<?php

namespace Tina4;
/**
 * Tina4 - This is not a 4ramework.
 * Copy-right 2007 - current Tina4 (Andre van Zuydam)
 * License: MIT https://opensource.org/licenses/MIT
 *
 * Class Post Sets the $method variable in Class Route to POST using the definition in Class Tina4Php
 * Post route intercepts post calls made to the web server e.g. Post::add()
 * @package Tina4
 * @example examples\exampleRoutePostAdd.php
 */
class Post extends Route
{
    /**
     * @var string Sets $method to POST
     */
    public static string $method = TINA4_POST;
}