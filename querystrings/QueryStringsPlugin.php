<?php
namespace Craft;

class QueryStringsPlugin extends BasePlugin
{
    function getName()
    {
         return Craft::t('Query Strings');
    }

    function getVersion()
    {
        return '1.0.2';
    }

    function getDeveloper()
    {
        return 'Ian Isted';
    }

    function getDeveloperUrl()
    {
        return 'http://ianisted.co.uk';
    }
    
    public function addTwigExtension()
    {
        Craft::import( 'plugins.querystrings.twigextensions.QueryStringsTwigExtension' );
        return new QueryStringsTwigExtension();
    }
}
