<?php include("header.html"); ?>

<h1> Difficulty 2 </h1>

<div class="landing">
     <form action="difficulty1-submit.php" method="post">
        <fieldset>

        <ol>
            <!-- quetion 1 correct answer is 20-->
            <li>
                <h2>If you count from 1 to 100, how many 7's will you pass on the way?</h2>

                <div>
                    <input type="radio" name="q1" id="q1a" value="a">
                    <label for="q1a"> 20 </label>
                </div>

                <div>
                    <input type="radio" name="q1" id="q1b" value="b">
                    <label for="q1b"> 18 </label>
                </div>

                <div>
                    <input type="radio" name="q1" id="q1c" value="c">
                    <label for="q1c"> 21 </label>
                </div>

                <div>
                    <input type="radio" name="q1" id="q1d" value="d">
                    <label for="q1d"> 19 </label>
                </div>
            </li>

            <!-- question 2 answer: 10m (sqrt(3*3 + 4*4) * 2)-->
            <li>
                <h2> Two men, starting at the same point, walk in opposite directions for 4 meters, turn left and walk another 3 meters. What is the distance between them? </h2>
                
				<div>
                    <input type="radio" name="q2" id="q2a" value="a">
                    <label for="q2a"> 2m </label>
                </div>

                <div>
                    <input type="radio" name="q2" id="q2b" value="b">
                    <label for="q2b"> 6m </label>
                </div>

                <div>
                    <input type="radio" name="q2" id="q2c" value="c">
                    <label for="q2c"> 12.5m </label>
                </div>

                <div>
                    <input type="radio" name="q2" id="q2d" value="d">
                    <label for="q2d"> 10m </label>
                </div>
            </li>

            <!-- question 3 answer "A man is known by the company he keeps"-->
            <li>
                <h2> One of the following proverbs is closest in meaning to the saying, "Birds of a feather, flock together." Choose one: </h2>

                <div>
                    <input type="radio" name="q3" id="q3a" value="a">
                    <label for="q3a"> "Fine feathers make fine birds." </label>
                </div>

                <div>
                    <input type="radio" name="q3" id="q3b" value="b">
                    <label for="q3b"> "A bird in the hand is worth two in the bush." </label>
                </div>

                <div>
                    <input type="radio" name="q3" id="q3c" value="c">
                    <label for="q3c"> "A man is known by the company he keeps." </label>
                </div>

                <div>
                    <input type="radio" name="q3" id="q3d" value="d">
                    <label for="q3d"> "One swallow doesn"t make a summer." </label>
                </div>
            </li>


            <!-- question 4 answer: 17-->
            <li>
                <h2> Which number comes next in this series of numbers? </h2>
                <b><h3> 2 3 5 7 11 13 ? </h3></b>

                <div>
                    <input type="radio" name="q4" id="q4a" value="a">
                    <label for="q4a"> 16 </label>
                </div>

                <div>
                    <input type="radio" name="q4" id="q4b" value="b">
                    <label for="q4b"> 18 </label>
                </div>

                <div>
                    <input type="radio" name="q4" id="q4c" value="c">
                    <label for="q4c"> 15 </label>
                </div>

                <div>
                    <input type="radio" name="q4" id="q4d" value="d">
                    <label for="q4d"> 17 </label>
                </div>
            </li>

        </ol>

        <input class="button" type="submit" value="Submit Difficulty 1">
        </fieldset>
     </form>
</div>