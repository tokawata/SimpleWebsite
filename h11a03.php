<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../html5.css">

<title>入力されたデータを自分自身に送る</title>
<style type="text/css">
.byphp { border:solid 1px #0000ff; padding:4px 8px;}
em {
  font-style:normal;
  color:blue;
  }
b{font-weight: normal; color: #900;}
</style>
</head>
<body>
<div id="fnav">
<a href="h11a02.html">前</a>
<a href="../index.html#php">目</a>
<a href="h11a06.php">次</a>
</div>

<h1>入力されたデータを自分自身に送る</h1>
<h2>ひとつ前に送られてきたデータ</h2>
<p>1番最初に来た時はメッセージがありません。</p>
<p class="byphp">
さん、こんにちは。「  」というメッセージをいただきました。</p>

<h2>入力されたデータをサーバーに送る</h2>
<form action="h11a03.php" method="post">
<p><label>名前：<input name="YourName"></label></p>
<p><label>メッセージ：<input name="Message"></label></p>
<p><button>送信</button></p>
</form>

<h3>「入力されたデータをサーバーに送る」の部分。</h3>
<pre class="rei">
&lt;form action="h11a03.php" method="post">
&lt;p>&lt;label>名前：&lt;input name="YourName">&lt;/label>&lt;/p>
&lt;p>&lt;label>メッセージ：&lt;input name="Message">&lt;/label>&lt;/p>
&lt;p>&lt;button>送信&lt;/button>&lt;/p>
&lt;/form>
</pre>

<p>ここで、<code>h11a03.php</code> はこのデータを処理するphpプログラムを書くファイル名ですが、今回は自分自身のファイル名を書いています。</p>

<h3>「ひとつ前に送られてきたデータ」の部分</h3>
<pre class="rei">
&lt;p>
&lt;?php
$name    = $_POST['YourName'];
$message = $_POST["Message"] ;
print "$name さん、こんにちは。";
print "「 $message 」というメッセージをいただきました。" ;
?&gt;
&lt;/p>
</pre>

<h2>課題</h2>
<p>上記のような form と phpプログラムをもったファイルをつくり、<code>jibunni.php</code> という名前で保存します。上記の action の部分の <code>h11a03.php</code> は <code>jibunni.php</code> に直す必用があります。index.htmlに「自分に送信」という名前のリンクを作ります。</p>
<p>作るファイルは<code>jibunni.php</code>一つです。 </p>

<h3>ちょっと応用</h3>
<p>メッセージがまだないときの表示がを「メッセージはまだありません。」にする。</p>
<pre class="rei">
&lt;p>
&lt;?php
$name    = $_POST['YourName'];
$message = $_POST["Message"] ;
<b>if ( $message != "" ) {</b>
     print "$name さん、こんにちは。";
     print "「 $message 」というメッセージをいただきました。" ;
<b>}
else {
     print "メッセージはまだありません。";
}</b>
?&gt;
&lt;/p>
</pre>
<p>こう見えます。</p>
<p class="byphp">
メッセージはまだありません。
</p>

<footer>
<p>ウェブページ作成<br>
Feb.2009 初稿<br>
Feb.2014 改訂</p>
<address>
聖愛中学高等学校<br>
<a href="http://www.seiai.ed.jp/">http://www.seiai.ed.jp/</a>
</address>
</footer>
</body>
</html>