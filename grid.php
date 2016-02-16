<html>
<body>
<style type="text/css"><!--
   .tile {
 width: 900px !important;
 margin-left: 3% !important;
 }
   .tile, .tile tr, .tile td, .tile img, .tile figure{
     background-color: #000;
     margin: 0px;
 padding: 0px;
 }
   .tile td{
 width: 300px;
 }

   .slide figure {
 position: relative;
 overflow: hidden;
 width: 300px
     }
   .slide figcaption {
 position: absolute;
 top: -100%;
 left: 0;
   z-index: 2;
 width: 100%;
 height: 100%;
 background: rgba(0,0,0,.6);
   -webkit-transition: .3s;
 transition: .3s;
 opacity: 1;
 }
   .slide figure:hover figcaption {
 top: 0;
 left: 0;
 }
.caption {
 color: 0xfff;
 }

.transform01 {
  -webkit-transform: scale(1);
 transform: scale(1);
   -webkit-transition: all .3s ease-in-out;
 transition: all .3s ease-in-out;
 }
figure:hover .transform01 {
  -webkit-transform: scale(1.2);
 transform: scale(1.2);
 }
figure h3 {
padding: 20px 0 5px;
color: #fff;
  font-size: 24px;
  text-align: center;
  font-family: 'Open Sans', sans-serif;
  font-weight: 600;
}
figure p {
color: #fff;
  text-align: center;
  font-family: 'Open Sans', sans-serif;
  font-weight: 400;
}

.item {
width: 300px;
height: 150px;
  background-color: #ac4d4d;
  border: solid;
 }
-->
</style>

<script src="../shared_js/masonry.pkgd.min.js"></script>

<?php
header("Content-Type: text/html; charset=UTF-8");
define("IMAGE_DIR", "./images/table/");
$table = array(
	       'img' => array('kaikoTH.jpg', 'yama.jpg'),
	       'url' => array('', ''),
	       'caption1' => array('カイコガ', 'オニヤンマ'),
	       'caption2' => array('Silkmoth <i>(Bombyx mori)</i>', 'Spiketail <i>(Anotogaster sieboldii)</i>')
	       );

?>

<h1>variable grid implement (masonry)</h1>
<div class="js-masonry">
<div class="item"></div>
<div class="item"></div>
<div class="item"></div>
<div class="item"></div>
<div class="item"></div>
<div class="item"></div>
</div>



<h1>Table implement</h1>

<table class="tile">
  <tbody>
  <tr>
  <td class="slide"><a href="https://invbrain.neuroinf.jp/modules/newdb1/detail.php?id=59">
  <figure><img alt="Camera" class="transform01" src="<?php echo IMAGE_DIR ?>kaikoTH.jpg" width="300px" />

  <figcaption>
  <h3>カイコガ</h3>

  <p>Silkmoth <i>(Bombyx mori)</i></p>
  </figcaption>
  </figure>
  </a></td>
  <td class="slide"><a href="https://invbrain.neuroinf.jp/modules/newdb1/detail.php?id=44">
  <figure><img alt="Camera" class="transform01" src="/images/cns/table/yanma.jpg" width="300px" />
  <figcaption>
  <h3>オニヤンマ</h3>

  <p>Spiketail <i>(Anotogaster sieboldii)</i></p>
  </figcaption>
  </figure>
  </a></td>
  <td class="slide"><a href="https://invbrain.neuroinf.jp/modules/newdb1/detail.php?id=42">
  <figure><img alt="Camera" class="transform01" src="/images/cns/table/umi.jpg" width="300px" />
  <figcaption>
  <h3>ウミザリガニ</h3>

  <p>Lobster <i>(Homarus americanus)</i></p>
  </figcaption>
  </figure>
  </a></td>
  </tr>
  <tr>
  <td class="slide"><a href="https://invbrain.neuroinf.jp/modules/newdb1/detail.php?id=55">
  <figure><img alt="Camera" class="transform01" src="/images/cns/table/kawagera.jpg" width="300px" />
  <figcaption>
  <h3>カワゲラ</h3>

  <p>Stonefly <i>(Kamimuria tibialis)</i></p>
  </figcaption>
  </figure>
  </a></td>
  <td class="slide"><a href="https://invbrain.neuroinf.jp/modules/newdb1/detail.php?id=57">
  <figure><img alt="Camera" class="transform01" src="/images/cns/table/dro.jpg" width="300px" />
  <figcaption>
  <h3>キイロショウジョウバエ</h3>

  <p>Fruit-fly <i>Drosophila melanogaster)</i></p>
  </figcaption>
  </figure>
  </a></td>
  <td class="slide"><a href="https://invbrain.neuroinf.jp/modules/newdb1/list.php?id=2&n=20&sort=1&sort_method=desc&item=0&ml_lang=ja">
  <figure><img alt="Camera" class="transform01" src="/images/cns/black.png" width="300px" />
  <figcaption>
  <h3>View more!</h3>
  <p>&nbsp;</p>
  </figcaption>
  </figure>
  </a></td>
  </tr>
  </tbody>
</table>
</body>
</html>
