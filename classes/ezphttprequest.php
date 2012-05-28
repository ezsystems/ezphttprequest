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
        static $proxyOptions = array(), $hasProxyOptions = false;

        // Proxy settings from site.ini
        if ( !$hasProxyOptions )
        {
            $ini = eZINI::instance();
            $proxyServer = $ini->hasVariable( 'ProxySettings', 'ProxyServer' ) ? $ini->variable( 'ProxySettings', 'ProxyServer' ) : false;

            if ( $proxyServer )
            {
                $proxyServerParts = parse_url( $proxyServer );
                $proxyOptions['proxyhost'] = $proxyServerParts['host'];
                $proxyOptions['proxyport'] = $proxyServerParts['port'];
                $proxyOptions['proxytype'] = HTTP_PROXY_HTTP;
                $proxyUsername = $ini->hasVariable( 'ProxySettings', 'User' ) ? $ini->variable( 'ProxySettings', 'User' ) : false;
                $proxyPassword = $ini->hasVariable( 'ProxySettings', 'Password' ) ? $ini->variable( 'ProxySettings', 'Password' ) : false;
                if ( $proxyUsername )
                {
                    $proxyOptions['proxyauth'] = "$proxyUsername:$proxyPassword";
                }
            }

            $hasProxyOptions = true;
        }

        parent::__construct( $url, $requestMethod, $options + $proxyOptions );
    }
}
?>
