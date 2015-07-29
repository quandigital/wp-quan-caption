# wp-quan-caption
WordPress plugin to override the default `[caption]` shortcode

## Usage

```
[caption src="IMAGEURL" width="WIDTH%"]CAPTION[/caption]
```

* Although the width is specified in percentages, the shortcode creates a `full` class that is added to the container if width is `100` or a `half` class if the width is anything else.
* If caption is empty (i.e. there is no content in the shortcode), only the images gets returned

## Example

```
[caption src="http://www.quandigital.com/uploads/2014/08/3_kaufprozess.png" width="100"]Unterschiedliche Kaufentscheidungsprozesse bei Männern und Frauen (<a href="http://webmagazin.de/business/ecommerce/Webdesign-E-Commerce-Frauen-shoppen-anders-Maenner-auch-Gender-Commerce?page=2">Marti Barletta, 2006</a>)[/caption]
```

## Output

```
<div class="content-image full">
    <img src="http://www.quandigital.com/uploads/2014/08/3_kaufprozess.png" />
    <div class="caption">
        Unterschiedliche Kaufentscheidungsprozesse bei Männern und Frauen (<a href="http://webmagazin.de/business/ecommerce/Webdesign-E-Commerce-Frauen-shoppen-anders-Maenner-auch-Gender-Commerce?page=2">Marti Barletta, 2006</a>)
    </div>
</div>
```