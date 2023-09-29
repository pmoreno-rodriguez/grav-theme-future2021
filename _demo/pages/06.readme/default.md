---
title: Readme
show_pageimage: true
toc_enabled: true
image_width: 1038
image_height: 437
show_sidebar: true
---

## Future Theme for Grav CMS

Future Imperfect theme by HTML5UP ported from scratch to Grav. Version 2021 

Future Imperfect by HTML5UP, features a clean, minimalistic design, styling for all basic page elements and HTML5/CSS3 code designed for quick and easy customization.

### Features
Redesigned from scratch (version 2021)

- HTML5 and CSS3
- Fully Responsive
- Microdata for blogs
- ARIA accessibility conformance
- Various templates for presenting your content
- Full dropdown menu integrated in menu bar and sidebar.
- Styling for all basic page elements
- Styling for various modules
- Cross browser compatible
- Sharing buttons for Facebook, Twitter, Whatsapp and Telegram.
- Top content pages in sidebar
- Fully responsive with full-page mobile navigation
- SCSS based CSS source files for easy customization
- Blueprints for Footer, Slogan and Social icons.
- Full Portfolio template with Glightbox library
- Ready to work with Archives, Breadcrumbs, Editable with Contenttools, Feed, Langswitcher, Maintenance, Reading time, Related pages, Twig extensions, Simplesearch and Taxonomylist.

#### Supported Page Templates

* Default view template `default.md`
* Error view template `error.md`
* Blog view template `blog.md`
* Blog item view template `item.md`
* Portfolio view template
* Form view template `form.md`
* Modular view templates: `modular.md`
    - Features Modular view template `features.md`
    - Banner Modular view template `banner.md`
    - Contact Modular view template `contact.md`
* Owlcarousel template
* Recent posts partial template
* Related posts partial template

## Installation

Installing the Future 2021 theme can be done in one of two ways. Our GPM (Grav Package Manager) installation method enables you to quickly and easily install the theme with a simple terminal command, while the manual method enables you to do so via a zip file.

### GPM Installation (Preferred)

The simplest way to install this theme is via the [Grav Package Manager (GPM)](https://learn.getgrav.org/17/cli-console/grav-cli-gpm) through your system's Terminal (also called the command line).  From the root of your Grav install type:

    bin/gpm install future2021

This will install the Future2021 theme into your `/user/themes` directory within Grav. Its files can be found under `/your/site/grav/user/themes/future2021`.

### Manual Installation

To install this theme, just download the zip version of this repository and unzip it under `/your/site/grav/user/themes`. Then, rename the folder to `future2021`. You can find these files either on [GitHub](https://github.com/pmoreno-rodriguez/grav-theme-future2021) or via [GetGrav.org](http://getgrav.org/downloads/themes).

You should now have all the theme files under

    /your/site/grav/user/themes/future2021
## Default Options

Future2021 comes with a few default options that can be set site-wide.  These options are:

```yaml
production-mode: true         # In production mode, only minified CSS is used. When disabled, nested CSS are enabled
sidebar:                      # Enable/Disable sidebar in non-editable pages such as simplesearch results, offline, etc.
favicon:                      # Choosse your own favicon
custom_logo:                  # A custom logo rather than the default (see below)  
custom_logo_mobile:           # A custom logo to use for mobile navigation
slogan:                       # Custom text for slogan
menu_langswitcher:            # Enable/Disable langswitcher icon in menu (langswitcher plugin needed)
menu_search:                  # Enable/Disable search icon in menu (simplesearch plugin needed)
menu_login:                   # Enable/Disable login icon in menu
blog-page: '/blog'            # The route to the blog listing page, useful for a blog style layout
miniposts:                    # Enable/Disable miniposts in left sidebar
miniposts_category:           # Select category name for miniposts (configured in taxonomies)
miniposts_number:             # The number of mini posts will be displayed on the left sidebar
recent_posts_enabled:         # Enable/Disable recent posts in left sidebar
recent_posts_number:          # The number of recent posts will be displayed on the left sidebar
footer.title:                 # Footer block title in left sidebar
footer.description:           # Footer block description in left sidebar
footer.copyright_text:        # Footer block copyright text in left sidebar
footer.button_text:           # Footer block button text in left sidebar
footer.button_url:            # Footer block button url in left sidebar
enable_social:                # Enable/Disable social icons in footer
social_style:                 # Select the style for Fontawesome icons
custommenus.enabled:          # Enable/Disable custom menus in top menu
```
To make modifications, you can copy the `user/themes/future2021/future2021.yaml` file to `user/config/themes/` folder and modify, or you can use the admin plugin.

> NOTE: Do not modify the `user/themes/future2021/future2021.yaml` file directly or your changes will be lost with any updates
## Custom Logos

To add a custom logo, you should put the log into the `user/themes/future2021/images/logo` folder.  Standard image formats are support (`.png`,`.jpg`, `.gif`, `.svg`, etc.).  Then reference the logo via the YAML like so:

```yaml
custom_logo:
    - name: 'my-custom-logo.png'
custom_logo_mobile:
    - name: 'my-custom-mobile-logo.png'    
```
Alternatively, you can you use the drag-n-drop "Custom Logo" field in the Future2021 theme options.
## Portfolio Options

| Option | Type | Default | Description |
| --- | --- | --- | --- |
| openEffect | string | `zoom` | Name of the effect on lightbox open. (zoom, fade, none) |
| closeEffect | string | `zoom` | Name of the effect on lightbox close. (zoom, fade, none) |
| slideEffect | string | `slide` | Name of the effect on slide change. (slide, fade, zoom, none) |
| moreText | string | `See more` | More text for descriptions on mobile devices. |
| moreLength | number | `60` | Number of characters to display on the description before adding the moreText link (only for mobiles), if 0 it will display the entire description. |
| closeButton | boolean | `true` | Show or hide the close button. |
| touchNavigation | boolean | `true` | Enable or disable the touch navigation (swipe). |
| touchFollowAxis | boolean | `true` | Image follow axis when dragging on mobile. |
| keyboardNavigation | boolean | `true` | Enable or disable the keyboard navigation. |
| closeOnOutsideClick | boolean | `true` | Close the lightbox when clicking outside the active slide. |
| startAt | number | `0` | Start lightbox at defined index. |
| width | number | `900px` | Default width for inline elements and iframes, you can define a specific size on each slide. You can use any unit for example 90% or 100vw for full width |
| height | number | `506px` | Default height for inline elements and iframes, you can define a specific size on each slide.You can use any unit for example 90% or 100vh **For inline elements you can set the height to auto**. |
| descPosition | string | `bottom` | Global position for slides description, you can define a specific position on each slide (bottom, top, left, right). |
| loop | boolean | `false` | Loop slides on end. |
| zoomable | boolean | `true` | Enable or disable zoomable images you can also use data-zoomable="false" on individual nodes. |
| draggable | boolean | `true` | Enable or disable mouse drag to go prev and next slide (only images and inline content), you can also use data-draggable="false" on individual nodes. |
| dragToleranceX | number | `40` | Used with draggable. Number of pixels the user has to drag to go to prev or next slide. |
| dragToleranceY | number | `65` | Used with draggable. Number of pixels the user has to drag up or down to close the lightbox (Set 0 to disable vertical drag). |
| dragAutoSnap | boolean | `false` | If true the slide will automatically change to prev/next or close if dragToleranceX or dragToleranceY is reached, otherwise it will wait till the mouse is released. |
| preload | boolean | `true` | Enable or disable preloading. |
## Demo page

[http://future.juanvillen.es/](http://future.juanvillen.es/)
## Future plans

- Create a Flex Directory for authors and avatars.