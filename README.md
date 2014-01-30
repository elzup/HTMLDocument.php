HTMLDocument
===========
###HTMLDocument class

php DOMDocument class を HTMLのDOMに特化させる
新規性や需要は謎

```php:test.php
<?php
$hdom = new HTMLDocument();

/*DomElementインスタンスの生成*/
$tagE = $hdom->createTag('div',
                         'テキスト',
                         array('name' => 'name-1'),
                         'id-1',
                         array('class-a', 'class-b')
                         array('background-color' => white, 'color' => 'black')
                        ); 
$tagE->addClass('class-c');
$hdom->appendChild($tagE);
echo $hdom->saveHTML();

/*
->
in html
<div id="id-1" class="class-a class-b class-c" name="name-1" style="background-color:white;color:black">
テキスト
</div>
*/

?>
```

like this
