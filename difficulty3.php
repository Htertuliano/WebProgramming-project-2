<?php include("header.html"); ?>

<h1> Difficulty 3 </h1>

<div class="landing">
     <form action="difficulty1-submit.php" method="post">
        <fieldset>

        <ol>
            <!-- quetion 1 answer: E -->
            <li>
                <h2>Which letter comes next in this series of letters?</h2>
                <b><h3> B A C B D C E D F ? </h3></b>
                <div>
                    <input type="radio" name="q1" id="q1a" value="a">
                    <label for="q1a"> F </label>
                </div>

                <div>
                    <input type="radio" name="q1" id="q1b" value="b">
                    <label for="q1b"> D </label>
                </div>

                <div>
                    <input type="radio" name="q1" id="q1c" value="c">
                    <label for="q1c"> C </label>
                </div>

                <div>
                    <input type="radio" name="q1" id="q1d" value="d">
                    <label for="q1d"> E </label>
                </div>
            </li>

            <!-- question 2 answer: 64-->
            <li>
                <h2> Following the pattern shown in the number sequence below, what is the missing number? </h2>
                <b><h3> 1 8 27 ? 125 216 </h3></b>

                <div>
                    <input type="radio" name="q2" id="q2a" value="a">
                    <label for="q2a"> 64 </label>
                </div>

                <div>
                    <input type="radio" name="q2" id="q2b" value="b">
                    <label for="q2b"> 53 </label>
                </div>

                <div>
                    <input type="radio" name="q2" id="q2c" value="c">
                    <label for="q2c"> 63 </label>
                </div>

                <div>
                    <input type="radio" name="q2" id="q2d" value="d">
                    <label for="q2d"> 60 </label>
                </div>
            </li>

            <!-- question 3 answer: 12 -->
            <li>
                <h2> Four years ago, Jane was twice as old as Sam. Four years on from now, Sam will be 3/4 of Jane's age. How old is Jane now? </h2>

                <div>
                    <input type="radio" name="q3" id="q3a" value="a">
                    <label for="q3a"> 12 </label>
                </div>

                <div>
                    <input type="radio" name="q3" id="q3b" value="b">
                    <label for="q3b"> 12.5 </label>
                </div>

                <div>
                    <input type="radio" name="q3" id="q3c" value="c">
                    <label for="q3c"> 14 </label>
                </div>

                <div>
                    <input type="radio" name="q3" id="q3d" value="d">
                    <label for="q3d"> 24 </label>
                </div>
            </li>


            <!-- question 4 answer: flower (iz all natural baybee)-->
            <li>
                <h2> Which of the following objects is least like the others? </h2>
                
                <div>
                    <input type="radio" name="q4" id="q4a" value="a">
                    <label for="q4a"> flower </label>
                </div>

                <div>
                    <input type="radio" name="q4" id="q4b" value="b">
                    <label for="q4b"> statue </label>
                </div>

                <div>
                    <input type="radio" name="q4" id="q4c" value="c">
                    <label for="q4c"> poem </label>
                </div>

                <div>
                    <input type="radio" name="q4" id="q4d" value="d">
                    <label for="q4d"> novel </label>
                </div>
            </li>

        </ol>

        <input class="button" type="submit" value="Submit Difficulty 1">
        </fieldset>
     </form>
</div>