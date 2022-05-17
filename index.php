<?php
include("simple_html_dom.php");
$html = file_get_html('https://election.ekantipur.com/pradesh-3/district-kathmandu/kathmandu?lng=nep');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <link rel="stylesheet" href="https://nikas.com.np/cascadelib/center.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&family=Roboto:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1024">
    <link rel="image_src" href="preview.jpg"/>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>नेपाल स्थानीय तह निर्वाचन २०७९ | निर्वाचन विवरण | Kathmandu Metropolitan City</title>
</head>
<body>
<div class="main">
    काठमाडौं महानगरपालिका - नेपाल स्थानीय तह निर्वाचन २०७९ <br> निर्वाचन विवरण तथा नतिजा
    <br><br>
    <center>
<table border="1">
    <tr>
        <td id="title">CANDIDATE NAME</td>
        <td id="infv">NO OF VOTES</td>
    </tr>

    <tr>
        <td class="name">1. <?php echo $html->find('.candidate-name', 0)->plaintext;?></td>
        <td class="votes"><?php echo $html->find('.vote-numbers', 0)->plaintext;?></td>
    </tr>

    <tr>
        <td class="name">2. <?php echo $html->find('.candidate-name', 1)->plaintext;?></td>
        <td class="votes"><?php echo $html->find('.vote-numbers', 1)->plaintext;?></td>
    </tr>

    <tr>
        <td class="name">3. <?php echo $html->find('.candidate-name', 2)->plaintext;?></td>
        <td class="votes"><?php echo $html->find('.vote-numbers', 2)->plaintext;?></td>
    </tr>
</table>
    </center>
<br>
<span class="footing"><button onClick="window.location.reload();" class="button">REFRESH VOTES</button></span>
<br><br><br><span class="source">SOURCE : EKANTIPUR</span>
</div>
</body>
</html>