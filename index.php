<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tıfıl Hayvan Sahiplendirme</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .logo{
            width: 220px;
            height: 149px;
            background: url("res/1.png") no-repeat;
        }
        .logo:hover {
            background: url("res/2.png") no-repeat;
        }
    </style>
    <meta name="MobileOptimized" content="510">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <center>
                    <br />
                    <a href="/tifil">
                        <div class="logo"></div>
                    </a>
                    <br />
                    <em>
                        Veriler Instagram <strong>#hayvansahiplen</strong> etiketinden çekilmedentedir.
                        <br />
                        <a href="http://github.com/ugurkilci" target="_blank">Açık Kaynak</a>
                        </em>
                </center>
                <?php
                    $xml=simplexml_load_file("https://rss.app/feeds/EOeDgPpDi1E8orYU.xml");
                    $sayi = 0;
                    while($sayi < 25) {
                        echo '<a href="'.$xml->channel->item[$sayi]->link.'" target="_blank"><img class="img-thumbnail" src="'.$xml->channel->item[$sayi]->enclosure->attributes()->url.'" style="width:200px;height:200px;margin:10px;"></a>';
                        $sayi++;
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>

