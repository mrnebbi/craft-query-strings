
![Craft Query Strings](banner.png)



A Craft CMS plugin to provide twig filters and functions to help with query string management. This is especially helpful for adding query strings back to pagination.

[![version 1.0.6](https://img.shields.io/badge/version-1.0.6-brightgreen.svg)](https://github.com/mrnebbi/craft-query-strings)

## preserveQueryStrings

The Preserve Query String filter allows you to add `|preserveQueryStrings` to any URL output in twig, and it will keep the query strings as they should appear in the URL.

E.g.

```
{% if pageInfo.prevUrl %}<a href="{{ pageInfo.prevUrl|preserveQueryStrings }}">Previous Page</a>{% endif %}
{% if pageInfo.nextUrl %}<a href="{{ pageInfo.nextUrl|preserveQueryStrings }}">Next Page</a>{% endif %}
```


## getQueryStrings

Pull an array of query strings from Craft. This gets around the problem of duplicated query string keys being lost, turning them into an array you can loop through.

An array will be returned with objects. Use `.key` and `.value`.

### Return all URL queries

```
{% for query in getQueryStrings() %}
	{{ query.key }} - {{ query.value }}
{% endfor %}
```

### Return only URL queries that match a key

```
{% for query in getQueryStrings('lookForKey') %}
	{{ query.key }} - {{ query.value }}
{% endfor %}
```
