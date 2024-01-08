# v1.2.5
## 01/08/2024

1.  [](#new)
    * New demo page url
2.  [](#improved)
    * Added language selector on mobile
    * Added display swap when loading Google fonts
    * Updated CSS Styles

# v1.2.4
## 01/04/2024

1.  [](#new)
    * Added option to display image logo in header
2.  [](#improved)
    * Updated CSS styles
    * Updated translations
  
# v1.2.3
## 11/26/2023

1.  [](#improved)
    * Updated CSS styles
    * Macros redefined for navigation (now, clickable parent menu items)
2.  [](#bugfix)
    * Fixed pimary image definition in base template
  
# v1.2.2
## 10/28/2023

1.  [](#new)
    * Added option to load Google fonts from local folder.
    * New captions on hover for portfolio images.
2.  [](#improved)
    * Updated translations
    * Updated CSS styles
    * Redefined macros for navigation and page toc plugin
3.  [](#bugfix)
    * Fixed sort filter error when taxonomy is empty 
  
# v1.2.1
## 09/28/2023

1.  [](#new)
    * New template for Page Toc plugin compatibility
2.  [](#improved)
    * Removed the extra text from the checkbox label, from the privacy.html.twig template (Note: use the `markdown` attribute on the form field to be able to use html tags within the privacy field)
    * Code restructured in some twig templates
    * Redesigned default template layout
    * Improved code for datestamp on blog pages
    * Improved css styles
3.  [](#bugfix)
    * Fixed `blog_page` variable in blog templates.
    * Fixed links in recent posts images
# v1.2.0
## 08/13/2023

1.  [](#new)
    * New recent posts partial template and theme option to enable it.
    * New related pages partial template
    * New demo content
2.  [](#improved)
    * Updated CSS styles
    * Updated translations
    * Readme updated
    * Relocated the templates for the sidebar
    * Redefined the url of the base page for the blog
3.  [](#bugfix)
    * Fixed archives templates 
# v1.0.7
## 07/20/2023

1.  [](#bugfix)
    * Fixed page date in miniposts [#43](https://github.com/pmoreno-rodriguez/grav-theme-future2021/issues/43)
2.  [](#improved)
    * Updated css to avoid content overflow [#42](https://github.com/pmoreno-rodriguez/grav-theme-future2021/issues/42)
# v1.0.6
## 07/13/2023

1.  [](#improved)
    * Updated demo content [#38](https://github.com/pmoreno-rodriguez/grav-theme-future2021/issues/38)
    * Relocated some variables used in all theme templates
    * Improved css styles
    * Updated translations
    * Improved html header tags (h1,h2,etc), to improve SEO
2.  [](#new)
    * New option to choose the style of social media icons [#34](https://github.com/pmoreno-rodriguez/grav-theme-future2021/issues/34)
    * Added crossmark to close the side menu [#24](https://github.com/pmoreno-rodriguez/grav-theme-future2021/issues/24)
    * Added css styles to support plugin `Editable with ContentTools` [#39](https://github.com/pmoreno-rodriguez/grav-theme-future2021/issues/39)
# v1.0.5
## 04/17/2023

1.  [](#bugfix)
    * Fixed raw filter in several templates.
    * Fixed pagination in blog
2.  [](#improved)
    * Updated translations.
    * Updated css styles.
    * Improved author styles in blog items.
3.  [](#new)
    * Added support for Owl Carousel plugin
    * Added support for Reading time plugin in blog
    * Added option to enable or disable primary image in pages
# v1.0.4
## 02/27/2023

1.  [](#bugfix)
    * Fixed Spanish translation for custom menu items.
    * Fixed support for the twig-extensions plugin in blog posts.
    * Fixed issues with login [#27](https://github.com/pmoreno-rodriguez/grav-theme-future2021/issues/27)
2.  [](#improved)
    * Updated translations.
    * Updated css styles.
    * Optimized js loading for sidebar menu.
    * Improved loading of FontAwesome styles with the `preload` option
    * Improved `aria-label` attribute in all templates
3.  [](#new)
    * New styles for login forms.
    * New option to show icons in the top menu.
    * Added option on blog posts to choose to share on social media. (thanks to [b.da](https://discourse.getgrav.org/u/b.da))
    * Added body classes to default template.
    * Added option to show custom menu items.
    * New options in portofolio template.
    * Added OpenGraph metadata
    * Added `decoding=async` option for all images.
    * Added quick README instructions for configuring Future2021
# v1.0.3
## 02/08/2023

1.  [](#bugfix)
    * Fixed logo display when only mobile logo is chosen.
    * Fixed bug in simplesearch item (added `striptags` filter in page.summary)[#26](https://github.com/pmoreno-rodriguez/grav-theme-future2021/issues/26).
    * Fixed demo content removing .es prefix [#1](https://github.com/pmoreno-rodriguez/grav-theme-future2021/issues/1).
    * Fixed search results image with `|raw` filter.
    * Fixed display of svg in search results.
2.  [](#improved)
    * Autoformatted some twigs (thanks to [@pikim](https://github.com/pikim)).
    * Improved the definition of variables in twig templates.
    * Minimal options in future2021.yaml file.
    * Added German translation (thanks to [@pikim](https://github.com/pikim)).
    * Renamed custom.css to misc.css.
    * Update author and avatar variables in blog.
3.  [](#new)
    * Added filter by URI on results page by taxonomy.
    * Added support for translate-date (thanks to [@pikim](https://github.com/pikim)) and twig-extensions plugins.
    * Allow disabling sidebar in all pages.
    * Added support to Login Form
# v1.0.2
## 11/08/2022

1.  [](#bugfix)
    * Fixed code in sidebar_navigation.html.twig and topmenu.html.twig
    * Fixed code to choose columns number in portfolio and features templates.
2.  [](#improved)
    * Updated header.class to header.layout in several blueprints
    * Updated CSS and SCSS assets
    * Updated languages.yaml
    * Improved several templates to include subtitle and primary image.
3.  [](#new)
    * Added centered alignment for images in portfolio template.
    * Added option in theme to choose the miniposts category name.
    * New logo twig template
# v1.0.1
## 02/05/2022

1.  [](#bugfix)
    * Updated CSS Styles to show FontAwesome 5

# v1.0.0
## 02/04/2022

1.  [](#new)
    * Drop down menu functionality
    * Fixed autoescaping in all twig templates
    * Added slidedown functionality for sidebar menu with JQuery
    * Full translation English and Spanish for administration and frontend
    * Added Back-to-Top button
    * Added Offline template
    * Added option to choose the number of miniposts will be showed in sidebar (in Theme options)
    * Added the order option in the blog item to order the miniposts as you want
    * Add shadown to header
    * Added avatarImage and subtitle options in blueprints
