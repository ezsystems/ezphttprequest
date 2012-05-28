ezphttprequest
==============

License
-------
This extension is licensed under the GPL license, copyright 2012 to eZ Systems AS. All rights reserved.

Purpose
-------
This extension provides ezpHttpRequest, a child class of HttpRequest, provided by the PECL package.

Installation
------------
Drop the extension's folder in your extension folder, and regenerate the extensions autoload. You don't need to enable
the extension, as autoloads are independant of wether extensions are loaded or not.

Reason
------
While this would fit better in the eZ Publish kernel, we chose to publish this as an extension.

Two extensions we are working on did require HTTP requests support, and both needed proxy support. This class is used
by both projects in order to avoid duplication.

The goal is in the end to make this extension part of the next eZ Publish version, at which point the extension will
be useless and deprecated.

Homepage
--------
http://github.com/ezsystems/ezphttprequest