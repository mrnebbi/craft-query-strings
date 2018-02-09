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
        return '1.0.7';
    }

    function getDeveloper()
    {
        return 'Mr Nebbi';
    }

    function getDeveloperUrl()
    {
        return 'http://ianisted.co.uk';
    }

    function getDocumentationUrl()
    {
        return 'https://github.com/mrnebbi/craft-query-strings/';
    }

    function getReleaseFeedUrl()
    {
        return 'https://raw.github.com/mrnebbi/craft-query-strings/master/releases.json';
    }
    
    public function addTwigExtension()
    {
        Craft::import( 'plugins.querystrings.twigextensions.QueryStringsTwigExtension' );
        return new QueryStringsTwigExtension();
    }
}
