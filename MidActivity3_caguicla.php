<!DOCTYPE html>
<html>
<head>
<?php include 'links/head.php' ?>
<style>
  body{
    color: white;
    background-color:#4B56D2;
  }

  h3{
    text-align:center;
    margin-bottom:90px;
    font-style: oblique
  }
  p{
    font-style: oblique
  }


</style>
</head>
<body>
<?php include 'header.php' ?>
<div class="container">
<table class="table text-light">
        <tr>
            <th>Name:</th>
            <td>CAGUICLA, ASHLEY DIANE, M.</td>
            <th>Topic</th>
            <td>Chapter 3 Manipulating Strings</td>
        </tr>
        <tr>
            <th>Activity No.</th>
            <td>Activity 3</td>
            <th>Date</th>
            <td>06/29/2023</td>
        </tr>
    </table>
<h3>DESIDERATA</h3>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Go placidly amid the noise and the haste, and remember what peace there may be in silence. As far as possible, without surrender, be on good terms with all persons. Speak your truth quietly and clearly; and listen to others, even to the dull and the ignorant; they too have their story. Avoid loud and aggressive persons; they are vexatious to the spirit. If you compare yourself with others, you may become vain or bitter, for always there will be greater and lesser persons than yourself. Enjoy your achievements as well as your plans. Keep interested in your own career, however humble; it is a real possession in the changing fortunes of time. Exercise caution in your business affairs, for the world is full of trickery. But let this not blind you to what virtue there is; many persons strive for high ideals, and everywhere life is full of heroism. Be yourself. Especially do not feign affection. Neither be cynical about love; for in the face of all aridity and disenchantment, it is as perennial as the grass. Take kindly the counsel of the years, gracefully surrendering the things of youth. Nurture strength of spirit to shield you in sudden misfortune. But do not distress yourself with dark imaginings. Many fears are born of fatigue and loneliness. Beyond a wholesome discipline, be gentle with yourself. You are a child of the universe no less than the trees and the stars; you have a right to be here. And whether or not it is clear to you, no doubt the universe is unfolding as it should. Therefore be at peace with God, whatever you conceive Him to be. And whatever your labors and aspirations, in the noisy confusion of life, keep peace in your soul. With all its sham, drudgery and broken dreams, it is still a beautiful world. Be cheerful. Strive to be happy.</p>
<?php
$text = " DESIDERATA: Go placidly amid the noise and the haste, and remember what peace there may be in silence. As far as possible, without surrender, be on good terms with all persons. Speak your truth quietly and clearly; and listen to others, even to the dull and the ignorant; they too have their story. Avoid loud and aggressive persons; they are vexatious to the spirit. If you compare yourself with others, you may become vain or bitter, for always there will be greater and lesser persons than yourself. Enjoy your achievements as well as your plans. Keep interested in your own career, however humble; it is a real possession in the changing fortunes of time. Exercise caution in your business affairs, for the world is full of trickery. But let this not blind you to what virtue there is; many persons strive for high ideals, and everywhere life is full of heroism. Be yourself. Especially do not feign affection. Neither be cynical about love; for in the face of all aridity and disenchantment, it is as perennial as the grass. Take kindly the counsel of the years, gracefully surrendering the things of youth. Nurture strength of spirit to shield you in sudden misfortune. But do not distress yourself with dark imaginings. Many fears are born of fatigue and loneliness. Beyond a wholesome discipline, be gentle with yourself. You are a child of the universe no less than the trees and the stars; you have a right to be here. And whether or not it is clear to you, no doubt the universe is unfolding as it should. Therefore be at peace with God, whatever you conceive Him to be. And whatever your labors and aspirations, in the noisy confusion of life, keep peace in your soul. With all its sham, drudgery and broken dreams, it is still a beautiful world. Be cheerful. Strive to be happy.";


$wordCount = str_word_count($text);
echo "1 How many words? <br><br>";
echo "The poems contains " . $wordCount . " words.<br><br>";
echo "2. How many articles present? <br><br>";

$aWord = substr_count(($text), ' a ');
echo "a = " . $aWord . "<br><br>";
$anWord = substr_count(strtolower($text), ' an ');
echo "an = " . $anWord . "<br><br>";
$theWord = substr_count(strtolower($text), ' the ');
echo "the = " . $theWord . "<br><br>";
$total = $aWord + $anWord + $theWord;
echo "TOTAL=" .$total. "<br><br>";

echo '3. Change "the" to "THE". <br><br>';
$theWord = str_replace(" the ", " THE ", $text);
echo $theWord;

$words = strtok(" ", $text);
$lyWords = [];
$words = preg_split('/\s+/', $text);
foreach ($words as $words) {
if (preg_match('/ly/ ', $words)) {
$lyWords[] = $words;

}
}
echo "<br><br> 4. Output the words ending with 'ly'. <br><br>" . implode("<br><br>", $lyWords) . "<br><br>";

?>
</div>
  
<?php include 'links/footer.php' ?>
</body>
</html>
