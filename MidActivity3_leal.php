<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'links/head.php' ?>
</head>
<body>
    <?php include 'header.php' ?>
    <table class="table container">
        <tr>
            <th>Name:</th>
            <td>LEAL, RICKY ANDREW II, R.</td>
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
    <div class="container">
    <?php
        $poem_title = "DESIDERATA";
        $poem = "Go placidly amid the noise and the haste, and remember what peace there may be in silence. As far as possible, without surrender, be on good terms with all persons. Speak your truth quietly and clearly; and listen to others, even to the dull and the ignorant; they too have their story. Avoid loud and aggressive persons; they are vexatious to the spirit. If you compare yourself with others, you may become vain or bitter, for always there will be greater and lesser persons than yourself. Enjoy your achievements as well as your plans. Keep interested in your own career, however humble; it is a real possession in the changing fortunes of time. Exercise caution in your business affairs, for the world is full of trickery. But let this not blind you to what virtue there is; many persons strive for high ideals, and everywhere life is full of heroism. Be yourself. Especially do not feign affection. Neither be cynical about love; for in the face of all aridity and disenchantment, it is as perennial as the grass. Take kindly the counsel of the years, gracefully surrendering the things of youth. Nurture strength of spirit to shield you in sudden misfortune. But do not distress yourself with dark imaginings. Many fears are born of fatigue and loneliness. Beyond a wholesome discipline, be gentle with yourself. You are a child of the universe no less than the trees and the stars; you have a right to be here. And whether or not it is clear to you, no doubt the universe is unfolding as it should. Therefore be at peace with God, whatever you conceive Him to be. And whatever your labors and aspirations, in the noisy confusion of life, keep peace in your soul. With all its sham, drudgery and broken dreams, it is still a beautiful world. Be cheerful. Strive to be happy.";
        
        echo "
        <div class=poem py-4>
            <h2 class=\"text-center text-primary display-1\">$poem_title</h2>";
        echo "
            <div>
                <p>$poem</p>
            </div>
        </div>";
        //problem 1
        $word_count = str_word_count($poem_title) + str_word_count($poem);
        
        echo "
        <div class=problem>
            <div>    
                <h4>1. How many words?</h4>
                <p>The poem contains $word_count words.</p>
            </div>";

                //problem 2
                $poem_store = $poem;
                $word_split = explode(" ", $poem_store);
                $a_count = 0;
                $an_count = 0;
                $the_count = 0;
                foreach ($word_split as $poem_store) {
                    if($poem_store == "a"){
                        $a_count++;
                    }
                    else if($poem_store == "an"){
                        $an_count++;
                    }
                    else if($poem_store == "the"){
                        $the_count++;
                    }
                }
                $total_count = $a_count + $an_count + $the_count;

            echo "
            <div>
                <h4>2. How many articles present?</h4>
                <p>a = $a_count</p>
                <p>an = $an_count</p>
                <p>the = $the_count</p>
                <p>TOTAL = $total_count</p>
            </div>";


            //problem 3
            $poem_store= $poem_title . ". " . $poem;
            $replace = str_replace("the ", "THE ", $poem_store);
            echo "
            <div>
                <h4>2. Change \"the\" to \"THE\".</h4>
                <p>$replace</p>
            </div>";


            //problem 4
            $word = "happily";
            $poem_store = $poem;
            $word_split = preg_split("/:| |;/", $poem_store);
            echo "
            <div>
                <h4>4. Output the wordings ending with \"ly\"</h4>";
                foreach ($word_split as $poem_store) {
                    if(substr($poem_store, -2, 2) == "ly"){
                        echo "<p>$poem_store</p>";
                    }
                }
        echo "
            </div>
        </div>";
    ?>
    </div>
    
    <?php include 'links/footer.php' ?>
</body>
</html>