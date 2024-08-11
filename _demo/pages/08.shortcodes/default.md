---
title: Shortcodes
show_pageimage: true
image_width: 1000
image_height: 300
show_sidebar: true
---

## Box Shortcode

### Usage

Wrap some content block in [raw]`[sc-box]`[/raw] tags.  The [raw]`[sc-box]`[/raw] shortcode has some optional parameters:
    
* `heading` - The heading for box
* `color` - `primary`, `secondary`, `success`, `warning` and `info`. 
* `class` - `alt` (this class remove border from box). 

An example of the Box shortcode is as follows:
    
[raw]
```markdown
[sc-box color="primary" heading="Primary Box Shortcode"]
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed eleifend magna, non tempor urna. 
[/sc-box]
[sc-box color="secondary" heading="Secondary Box Shortcode"]
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed eleifend magna, non tempor urna. 
[/sc-box]
[sc-box color="success" heading="Success Box Shortcode"]
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed eleifend magna, non tempor urna. 
[/sc-box]
[sc-box color="info" heading="Info Box Shortcode"]
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed eleifend magna, non tempor urna. 
[/sc-box]
[sc-box color="warning" heading="Warning Box Shortcode"]
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed eleifend magna, non tempor urna. 
[/sc-box]
[sc-box color="danger" heading="Danger Box Shortcode"]
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed eleifend magna, non tempor urna. 
[/sc-box]
```
[/raw]

#### Example
    
[sc-box color="primary" heading="Primary Box Shortcode"]
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed eleifend magna, non tempor urna. 
[/sc-box]
[sc-box color="secondary" heading="Secondary Box Shortcode"]
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed eleifend magna, non tempor urna. 
[/sc-box]
[sc-box color="success" heading="Success Box Shortcode"]
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed eleifend magna, non tempor urna. 
[/sc-box]
[sc-box color="info" heading="Info Box Shortcode"]
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed eleifend magna, non tempor urna. 
[/sc-box]
[sc-box color="warning" heading="Warning Box Shortcode"]
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed eleifend magna, non tempor urna. 
[/sc-box]
[sc-box color="danger" heading="Danger Box Shortcode"]
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed eleifend magna, non tempor urna. 
[/sc-box]

## Buttons Shortcode
    
### Usage

Wrap some buttons in [raw]`[sc-buttons]`[/raw] tags.  The [raw]`[sc-buttons]`[/raw] has the parameter `ulclass` with the following values:  `stacked`, `special` or`fit`
    
The `[sc-button]` shortcode that defines each _button_ has the following parameters:
    
* `class`- custom classes for button
* `type` - `primary`, `secondary`, `success`, `info`, `warning` or `danger`. 
* `size` - `small`, `medium`or `large`
* `url`- The button url
* `target`- The target of url

An example of the Buttons shortcode is as follows:

[raw]
```markdown
[sc-buttons]
    [sc-button type="primary"  url="#"]Primary[/sc-button]
    [sc-button type="secondary" url="#"]Secondary[/sc-button]
    [sc-button type="success" url="#"]Success[/sc-button]
    [sc-button type="info" url="#"]Info[/sc-button]
    [sc-button type="warning" url="#"]Warning[/sc-button]
    [sc-button type="danger" url="#"]Danger[/sc-button]
[/sc-buttons]
[sc-buttons]
    [sc-button type="primary" size="small"  url="#"]Primary[/sc-button]
    [sc-button type="secondary" size="small"   url="#"]Secondary[/sc-button]
    [sc-button type="success" size="small"   url="#"]Success[/sc-button]
    [sc-button type="info" size="small" url="#"]Info[/sc-button]
    [sc-button type="warning" size="small" url="#"]Warning[/sc-button]
    [sc-button type="danger" size="small" url="#"]Danger[/sc-button]
[/sc-buttons]
[sc-buttons ulclass="special"]
    [sc-button type="primary" size="small"  url="#"]Primary[/sc-button]
    [sc-button type="secondary" size="small"   url="#"]Secondary[/sc-button]
[/sc-buttons]
[sc-buttons ulclass="stacked"]
    [sc-button type="primary" size="small"  url="#"]Primary[/sc-button]
    [sc-button type="secondary" size="small"   url="#"]Secondary[/sc-button]
[/sc-buttons]
[sc-buttons ulclass="fit"]
    [sc-button type="primary" size="small"  url="#"]Primary[/sc-button]
    [sc-button type="secondary" size="small"   url="#"]Secondary[/sc-button]
[/sc-buttons]
```
[/raw]

#### Example
    
[sc-buttons]
    [sc-button type="primary"  url="#"]Primary[/sc-button]
    [sc-button type="secondary" url="#"]Secondary[/sc-button]
    [sc-button type="success" url="#"]Success[/sc-button]
    [sc-button type="info" url="#"]Info[/sc-button]
    [sc-button type="warning" url="#"]Warning[/sc-button]
    [sc-button type="danger" url="#"]Danger[/sc-button]
[/sc-buttons]
[sc-buttons]
    [sc-button type="primary" size="small"  url="#"]Primary[/sc-button]
    [sc-button type="secondary" size="small"   url="#"]Secondary[/sc-button]
    [sc-button type="success" size="small"   url="#"]Success[/sc-button]
    [sc-button type="info" size="small" url="#"]Info[/sc-button]
    [sc-button type="warning" size="small" url="#"]Warning[/sc-button]
    [sc-button type="danger" size="small" url="#"]Danger[/sc-button]
[/sc-buttons]
[sc-buttons ulclass="special"]
    [sc-button type="primary" size="small"  url="#"]Primary[/sc-button]
    [sc-button type="secondary" size="small"   url="#"]Secondary[/sc-button]
[/sc-buttons]
[sc-buttons ulclass="stacked"]
    [sc-button type="primary" size="small"  url="#"]Primary[/sc-button]
    [sc-button type="secondary" size="small"   url="#"]Secondary[/sc-button]
[/sc-buttons]
[sc-buttons ulclass="fit"]
    [sc-button type="primary disable" size="small"  url="#"]Primary[/sc-button]
    [sc-button type="secondary" size="small"   url="#"]Secondary[/sc-button]
[/sc-buttons]

## Flex Shortcode
    
### Usage

Use the [raw]`[sc-flex]`[/raw] shortcode to set the number of columns that best render your content and layout. The [raw]`[sc-flex]`[/raw] has the following parameters: 
    * `class`- Row classes from Editorial theme (space separated): `gtr-uniform`, `gtr-0`, `gtr-25`, `gtr-50`, `gtr-150`, `gtr-200`, `aln-between`, `aln-around`, `aln-evenly`, `aln-left`, `aln-center`, `aln-right`, `aln-top`, `aln-bottom` and `aln-middle` . 
    
The [raw]`[column]`[/raw] shortcode that defines each to the individual columns (e.g., .col-4 col-12-medium),  has the following parameters:
    
* `class`- Column classes  from Editorial theme (space separated), indicate the number of columns you’d like to use out of the possible 12 per row. So, if you want three equal-width columns across, you can use col-4. To make the grid responsive, there are five grid breakpoints, one for each responsive breakpoint : `xsmall`, `small`, `medium`, `large` and `xlarge`.

An example of the Flex row shortcode is as follows:
    
[raw]
```markdown
[sc-flex class="gtr-50"]
[column class="col-3 col-12-medium"]
[sc-box color="primary" heading="Primary"]
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed eleifend magna, non tempor urna. Integer maximus, velit non scelerisque ornare, ante libero porta lorem, ac eleifend felis sapien eu leo. Fusce mauris justo, ullamcorper ut urna a, scelerisque viverra magna.
[/sc-box]
[/column]
    
[column class="col-3 col-12-medium"]
[sc-box color="secondary" heading="Secondary"]
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed eleifend magna, non tempor urna. Integer maximus, velit non scelerisque ornare, ante libero porta lorem, ac eleifend felis sapien eu leo. Fusce mauris justo, ullamcorper ut urna a, scelerisque viverra magna.
[/sc-box]
[/column]
    
[column class="col-3 col-12-medium"]
[sc-box color="success" heading="Success"]
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed eleifend magna, non tempor urna. Integer maximus, velit non scelerisque ornare, ante libero porta lorem, ac eleifend felis sapien eu leo. Fusce mauris justo, ullamcorper ut urna a, scelerisque viverra magna.
[/sc-box]
[/column]
    
[column class="col-3 col-12-medium"]
[sc-buttons  ulclass="stacked fit"]
    [sc-button type="primary"  url="#"]Primary[/sc-button]
    [sc-button type="secondary" url="#"]Secondary[/sc-button]
    [sc-button type="success" url="#"]Success[/sc-button]
    [sc-button type="info" url="#"]Info[/sc-button]
    [sc-button type="warning" url="#"]Warning[/sc-button]
    [sc-button type="danger" url="#"]Danger[/sc-button]
[/sc-buttons]
[/column]
    
[/sc-flex]
```
[/raw]

#### Example
    
[sc-flex class="gtr-50"]
[column class="col-3 col-12-medium"]
[sc-box color="primary" heading="Primary"]
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed eleifend magna, non tempor urna. Integer maximus, velit non scelerisque ornare, ante libero porta lorem, ac eleifend felis sapien eu leo. Fusce mauris justo, ullamcorper ut urna a, scelerisque viverra magna.
[/sc-box]
[/column]
    
[column class="col-3 col-12-medium"]
[sc-box color="secondary" heading="Secondary"]
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed eleifend magna, non tempor urna. Integer maximus, velit non scelerisque ornare, ante libero porta lorem, ac eleifend felis sapien eu leo. Fusce mauris justo, ullamcorper ut urna a, scelerisque viverra magna.
[/sc-box]
[/column]
    
[column class="col-3 col-12-medium"]
[sc-box color="success" heading="Success"]
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sed eleifend magna, non tempor urna. Integer maximus, velit non scelerisque ornare, ante libero porta lorem, ac eleifend felis sapien eu leo. Fusce mauris justo, ullamcorper ut urna a, scelerisque viverra magna.
[/sc-box]
[/column]
    
[column class="col-3 col-12-medium"]
[sc-buttons ulclass="stacked fit"]
    [sc-button type="primary"  url="#"]Primary[/sc-button]
    [sc-button type="secondary" url="#"]Secondary[/sc-button]
    [sc-button type="success" url="#"]Success[/sc-button]
    [sc-button type="info" url="#"]Info[/sc-button]
    [sc-button type="warning" url="#"]Warning[/sc-button]
    [sc-button type="danger" url="#"]Danger[/sc-button]
[/sc-buttons]
[/column]
    
[/sc-flex]