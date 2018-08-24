
![Craft Query Strings](banner.png)



A Craft CMS plugin to provide twig filters and functions to help with query string management. This is especially helpful for adding query strings back to pagination.

[![version 1.0.7](https://img.shields.io/badge/version-1.0.7-brightgreen.svg)](https://github.com/mrnebbi/craft-query-strings)

## preserveQueryStrings

The Preserve Query String filter allows you to add `|preserveQueryStrings` to any URL output in twig, and it will keep the query strings as they should appear in the URL.

E.g.

```twig
{% if pageInfo.prevUrl %}<a href="{{ pageInfo.prevUrl|preserveQueryStrings }}">Previous Page</a>{% endif %}
{% if pageInfo.nextUrl %}<a href="{{ pageInfo.nextUrl|preserveQueryStrings }}">Next Page</a>{% endif %}
```

## getQueryStrings

Pull an array of query strings from Craft. This gets around the problem of duplicated query string keys being lost, turning them into an array you can loop through.

An array will be returned with objects. Use `.key` and `.value`.

### Return all URL queries

```twig
{% for query in getQueryStrings() %}
  {{ query.key }} - {{ query.value }}
{% endfor %}
```

### Return only URL queries that match a key

```twig
{% for query in getQueryStrings('lookForKey') %}
  {{ query.key }} - {{ query.value }}
{% endfor %}
```

## getQueryFormFields

Sometimes you want to use query fields in a form, to preserve these values you can use the following in your templates.

```twig
{{ getQueryFormFields() }}
```

which is shorthand/equivalent to:

```twig
{% for query in getQueryStrings() %}
  <input type="hidden" name="{{ query.key }}" value="{{ query.value }}">
{% endfor %}
```