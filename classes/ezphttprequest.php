<?php
/**
 * File containing the ezpHttpRequest class.
 *
 * @copyright Copyright (C) 1999-2012 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

class ezpHttpRequest extends HttpRequest
{
    public function __construct( $url, $requestMethod = HTTP_METH_GET, array $options = array() )
    {
	parent::__construct( $url, $requestMethod, $options );
    }
}
?>
