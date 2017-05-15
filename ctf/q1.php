<?php
 $quiz = array(
 'question' => 'Flag{}の形式で送信してください。',
 'answer' => "Flag{RepEat_qNigwVIMj5H0}");

 if($_SERVER['REQUEST_METHOD'] =="POST"){
 $message = ($quiz['answer'] == $_POST['answer']) ? "正解。一言@hiwwまでください。" : "不正解";
 echo $message;
 exit;
 }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="utf-8">
 <title>testctf</title>
</head>
<body>
 <h1>testctf by hiww</h1>
 <form action="" method="post">
 <p><?php echo $quiz['question']; ?></p>
 <p><a href="http://testctf.webcrow.jp/q/5moji.zip">問題</a></p>
 <ul>
 <input name="answer" type="text" value="">
 </ul>
 <input type="submit" value="submit">
 </form>
</body>
</html>