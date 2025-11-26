<?php
require_once 'data.php';

$score = 0;
$total = count($questions);

if(isset($_POST['answer'])){
    foreach($questions as $index => $q){
        $userAnswer = $_POST['answer'][$index] ?? [];
        sort($userAnswer);
        $correctAnswer = $q['answer'];
        sort($correctAnswer);
        if($userAnswer === $correctAnswer){
            $score++;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<title>Kết quả bài thi</title>
<style>
body { font-family: Arial; background: #f4f4f4; }
.container { width: 50%; margin: 50px auto; background:white; padding:20px; text-align:center; box-shadow:0 0 10px rgba(0,0,0,0.1); }
.score { font-size:24px; font-weight:bold; margin-bottom:20px; }
a { text-decoration:none; color:white; background:#007bff; padding:10px 20px; border-radius:4px; }
a:hover { background:#0056b3; }
</style>
</head>
<body>
<div class="container">
    <div class="score">Bạn trả lời đúng <?= $score ?> / <?= $total ?> câu</div>
    <a href="quiz.php">Làm lại</a>
</div>
</body>
</html>
