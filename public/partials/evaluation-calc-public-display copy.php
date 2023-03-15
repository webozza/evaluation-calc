<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://webozza.com
 * @since      1.0.0
 *
 * @package    Evaluation_Calc
 * @subpackage Evaluation_Calc/public/partials
 * 
 *
 */
?>

<!-- THE FORM -->
<?php if(isset($_POST['do_evaluation']) != '1') { ?>
    <div class="evaluation-form-container">
        <form action="" method="post">

            <!-- Name Field -->
            <div class="evaluation-field">
                <label>Your name</label>
                <input type="text" name="your-name" value="">
            </div>

            <!-- Name Field -->
            <div class="evaluation-field">
                <label>Your email</label>
                <input type="email" name="your-email" value="">
            </div>

            <!-- QUESTION 1 -->
            <div class="question-1 evaluation-question">
                <label>1. How large or complex is the programme, policy, activity or intervention (the 'evaluand')? </label>
                <div class="evaluation-mcq">
                    <div>
                        <input type="checkbox" name="question_1[]" value="a">
                        <label> a.The delivery is small, usually involving few people or groups (n&lt;5) in the delivery, and benefiting small cohorts (e.g. pilot-size initiatives, or a simple activity or output).</label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_1[]" value="b">
                        <label> b.The evaluand involves either many people and beneficiaries, but have a simple design and delivery; or it involves few people, albeit with a complex design and delivery approach. </label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_1[]" value="c">
                        <label> c.The delivery is large and complex, involving many different components of a system or systems, and/or across sectors or populations of people</label>
                    </div>
                </div>
                <!-- Pass Form Data -->
                <input type="hidden" class="selected_answer" name="selected_answer_1" value="">
            </div>

            <!-- QUESTION 2 -->
            <div class="question-2 evaluation-question allow-multiple">
                <label>2. What is the purpose of your monitoring and evaluation activities? </label>
                <div class="evaluation-mcq">
                    <div>
                        <input type="checkbox" name="question_2[]" value="a">
                        <label> a.Funders (or otherwise) want to decide about ongoing funding decisions and understand what was achieved.</label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_2[]" value="b">
                        <label> b.Our delivery teams and others want to learn to make adjustments to the evaluand </label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_2[]" value="c">
                        <label> c.Monitoring: we want to periodically track progress against a range of indicators.</label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_2[]" value="d">
                        <label> d. Advice and technical support, or capability building in relation to monitoring and evaluation.</label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_2[]" value="e">
                        <label> e. other purposes</label>
                    </div>
                </div>
                <!-- Pass Form Data -->
                <input type="hidden" class="selected_answer" name="selected_answer_2" value="">
            </div>

            <!-- QUESTION 3 -->
            <div class="question-3 evaluation-question allow-multiple">
                <label>3. What do you want the monitoring and evaluation activity to focus on? </label>
                <div class="evaluation-mcq">
                    <div>
                        <input type="checkbox" name="question_3[]" value="a">
                        <label>a. efficiency</label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_3[]" value="b">
                        <label>b. relevance</label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_3[]" value="c">
                        <label>c. coherence (e.g. alignment with strategies or existing activities)</label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_3[]" value="d">
                        <label>d. effectiveness (e.g. achieving what it set out to achieve)</label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_3[]" value="e">
                        <label>e. causal impact (e.g. an estimate of the benefit of the programme, above what would have been achieved otherwise)</label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_3[]" value="f">
                        <label>f. longer-term, unexpected and expected outcomes</label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_3[]" value="g">
                        <label>g. sustainability</label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_3[]" value="h">
                        <label>h. other or unknown</label>
                    </div>
                </div>
                <!-- Pass Form Data -->
                <input type="hidden" class="selected_answer" name="selected_answer_3" value="">
            </div>

            <!-- QUESTION 4 -->
            <div class="question-4 evaluation-question">
                <label>4. How well is your programme, policy, activity or intervention understood and documented? </label>
                <div class="evaluation-mcq">
                    <div>
                        <input type="checkbox" name="question_4[]" value="a">
                        <label>a.We understand the activities, the expected outputs or deliverables and what you'd expect to achieve, and this is documented through a logic model or theory of change.</label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_4[]" value="b">
                        <label>b.We understand the activities, the expected outputs or deliverables and what you'd expect to achieve, but require this to be pulled together as a logic model or theory of change. </label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_4[]" value="c">
                        <label>c.We understand the activities and the expected outputs or deliverables, but require this to be well mapped out onto the expected and longer-term outcomes.</label>
                    </div>
                </div>
                <!-- Pass Form Data -->
                <input type="hidden" class="selected_answer" name="selected_answer_4" value="">
            </div>

            <!-- Form Validation -->
            <input type="hidden" name="do_evaluation" value="1">
            <button type="submit">Submit</button>
        </form>
    </div>
<?php } ?>

<!-- THE EVALUATION -->
<?php if(isset($_POST['do_evaluation']) == '1') { ?>

    <!-- THE MATH HAPPENS HERE -->
    <?php

        /* OUTPUT 1 CALCULATION
        ------------------------------------------------------------------------------------------------*/
        $answer_1 = $_POST['selected_answer_1'];
        if ($answer_1 == "a") {
            $output_1 = "small programme, policy, activity or intervention";
        } elseif ($answer_1 == "b") {
            $output_1 = "mixed or medium-sized programme, policy, activity or intervention";
        } elseif ($answer_1 == "c") {
            $output_1 = "large programme, policy, activity or intervention";
        } else {
            $output_1 = "";
        }

        /* OUTPUT 2 CALCULATION
        ------------------------------------------------------------------------------------------------*/
        $answer_2 = $_POST['selected_answer_2'];
        
        if ($answer_2 == "a") {
            $output_2 = "<li>a high-stakes evaluation, focused on accountability</li>";
        } elseif ($answer_2 == "b") {
            $output_2 = "<li>an evaluation focused on learning</li>";
        } elseif ($answer_2 == "c") {
            $output_2 = "<li>a monitoring programme</li>";
        } elseif ($answer_2 == "d") {
            $output_2 = "<li>advice, support and capability development (note, the time required to provide this type of support would need to be considered seperately)</li>";
        } elseif ($answer_2 == "e") { 
            $output_2 = "<li>other purposes (note, the time required to provide the specific support you need would require separate consideration)</li>";
        } elseif ($answer_2 == "a,b") { // Variation ax2 starts
            $output_2 = "<li>a high-stakes evaluation, focused on accountability</li><li>an evaluation focused on learning</li>";
        } elseif ($answer_2 == "a,c") {
            $output_2 = "<li>a high-stakes evaluation, focused on accountability</li><li>a monitoring programme</li>";
        } elseif ($answer_2 == "a,d") {
            $output_2 = "<li>a high-stakes evaluation, focused on accountability</li><li>advice, support and capability development (note, the time required to provide this type of support would need to be considered seperately)</li>";
        } elseif ($answer_2 == "a,e") {
            $output_2 = "<li>a high-stakes evaluation, focused on accountability</li><li>other purposes (note, the time required to provide the specific support you need would require separate consideration)</li>";
        } elseif ($answer_2 == "b,c") { // Variation bx2 starts
            $output_2 = "<li>an evaluation focused on learning</li><li>a monitoring programme</li>";
        } elseif ($answer_2 == "b,d") { 
            $output_2 = "<li>an evaluation focused on learning</li><li>advice, support and capability development (note, the time required to provide this type of support would need to be considered seperately)</li>";
        } elseif ($answer_2 == "b,e") {
            $output_2 = "<li>an evaluation focused on learning</li><li>a monitoring programme</li><li>other purposes (note, the time required to provide the specific support you need would require separate consideration)</li>";
        } elseif ($answer_2 == "c,d") { // Variation cx2 starts
            $output_2 = "<li>a monitoring programme</li><li>advice, support and capability development (note, the time required to provide this type of support would need to be considered seperately)</li>";
        } elseif ($answer_2 == "c,e") {
            $output_2 = "<li>a monitoring programme</li><li>other purposes (note, the time required to provide the specific support you need would require separate consideration)</li>";
        } elseif ($answer_2 == "d,e") { // Variation dx2 starts
            $output_2 = "<li>advice, support and capability development (note, the time required to provide this type of support would need to be considered seperately)</li><li>other purposes (note, the time required to provide the specific support you need would require separate consideration)</li>";
        } elseif ($answer_2 == "a,b,c") { // Variation ax3 starts
            $output_2 = "<li>a high-stakes evaluation, focused on accountability</li><li>an evaluation focused on learning</li><li>a monitoring programme</li>";
        } elseif ($answer_2 == "a,c,d") {
            $output_2 = "<li>a high-stakes evaluation, focused on accountability</li><li>a monitoring programme</li><li>advice, support and capability development (note, the time required to provide this type of support would need to be considered seperately)</li>";
        } elseif ($answer_2 == "a,d,e") {
            $output_2 = "<li>a high-stakes evaluation, focused on accountability</li><li>advice, support and capability development (note, the time required to provide this type of support would need to be considered seperately)</li><li>other purposes (note, the time required to provide the specific support you need would require separate consideration)</li>";
        } elseif ($answer_2 == "b,c,d") { // Variation bx3 starts
            $output_2 = "<li>an evaluation focused on learning</li><li>a monitoring programme</li><li>advice, support and capability development (note, the time required to provide this type of support would need to be considered seperately)</li>";
        } elseif ($answer_2 == "b,d,e") {
            $output_2 = "<li>an evaluation focused on learning</li><li>advice, support and capability development (note, the time required to provide this type of support would need to be considered seperately)</li><li>other purposes (note, the time required to provide the specific support you need would require separate consideration)</li>";
        } elseif ($answer_2 == "c,d,e") { // Variation cx3 starts
            $output_2 = "<li>a monitoring programme</li><li>advice, support and capability development (note, the time required to provide this type of support would need to be considered seperately)</li><li>other purposes (note, the time required to provide the specific support you need would require separate consideration)</li>";
        } elseif ($answer_2 == "a,b,c,d") { // Variation ax4 starts
            $output_2 = "<li>a high-stakes evaluation, focused on accountability</li><li>an evaluation focused on learning</li><li>a monitoring programme</li><li>advice, support and capability development (note, the time required to provide this type of support would need to be considered seperately)</li>";
        } elseif ($answer_2 == "a,c,d,e") {
            $output_2 = "<li>a high-stakes evaluation, focused on accountability</li><li>a monitoring programme</li><li>advice, support and capability development (note, the time required to provide this type of support would need to be considered seperately)</li><li>other purposes (note, the time required to provide the specific support you need would require separate consideration)</li>";
        } elseif ($answer_2 == "b,c,d,e") { // Variation bx4 starts
            $output_2 = "<li>an evaluation focused on learning</li><li>a monitoring programme</li><li>advice, support and capability development (note, the time required to provide this type of support would need to be considered seperately)</li><li>other purposes (note, the time required to provide the specific support you need would require separate consideration)</li>";
        } elseif ($answer_2 == "a,b,c,d,e") { // Variation ax5 starts
            $output_2 = "<li>a high-stakes evaluation, focused on accountability</li><li>an evaluation focused on learning</li><li>a monitoring programme</li><li>advice, support and capability development (note, the time required to provide this type of support would need to be considered seperately)</li><li>other purposes (note, the time required to provide the specific support you need would require separate consideration)</li>";
        }

        /* OUTPUT 3 CALCULATION
        ------------------------------------------------------------------------------------------------*/
        $answer_3 = $_POST['selected_answer_3'];
        $result_a = "<li>efficiency</li>";
        $result_b = "<li>relevance</li>";
        $result_c = "<li>coherence</li>";
        $result_d = "<li>effectiveness</li>";
        $result_e = "<li>impact</li>";
        $result_f = "<li>longer-term, unexpected and expected outcomes</li>";
        $result_g = "<li>sustainability of the evaluand</li>";
        $result_h = "<li>aspects of merit, worth and significance</li>";

        if($answer_3 == "a") {
            $output_3 = $result_a;
        } elseif($answer_3 == "b") {
            $output_3 = $result_b;
        } elseif($answer_3 == "c") {
            $output_3 = $result_c;
        } elseif($answer_3 == "d") {
            $output_3 = $result_d;
        } elseif($answer_3 == "e") {
            $output_3 = $result_e;
        } elseif($answer_3 == "f") {
            $output_3 = $result_f;
        } elseif($answer_3 == "g") {
            $output_3 = $result_g;
        } elseif($answer_3 == "h") {
            $output_3 = $result_h;
        } elseif($answer_3 == "a,b") { // variation ax2 starts
            $output_3 = $result_a . $result_b;
        } elseif($answer_3 == "a,c") {
            $output_3 = $result_a . $result_c;
        } elseif($answer_3 == "a,d") {
            $output_3 = $result_a . $result_d;
        } elseif($answer_3 == "a,e") {
            $output_3 = $result_a . $result_e;
        } elseif($answer_3 == "a,f") {
            $output_3 = $result_a . $result_f;
        } elseif($answer_3 == "a,g") {
            $output_3 = $result_a . $result_g;
        } elseif($answer_3 == "a,h") {
            $output_3 = $result_a . $result_h;
        } elseif($answer_3 == "b,c") { // variation bx2 starts
            $output_3 = $result_b . $result_c;
        } elseif($answer_3 == "b,d") {
            $output_3 = $result_b . $result_d;
        } elseif($answer_3 == "b,e") {
            $output_3 = $result_b . $result_e;
        } elseif($answer_3 == "b,f") {
            $output_3 = $result_b . $result_f;
        } elseif($answer_3 == "b,g") {
            $output_3 = $result_b . $result_g;
        } elseif($answer_3 == "b,h") {
            $output_3 = $result_b . $result_h;
        } elseif($answer_3 == "c,d") { // variation cx2 starts
            $output_3 = $result_c . $result_d;
        } elseif($answer_3 == "c,e") {
            $output_3 = $result_c . $result_e;
        } elseif($answer_3 == "c,f") {
            $output_3 = $result_c . $result_f;
        } elseif($answer_3 == "c,g") {
            $output_3 = $result_c . $result_g;
        } elseif($answer_3 == "c,h") {
            $output_3 = $result_c . $result_h;
        } elseif($answer_3 == "d,e") { // variation dx2 starts
            $output_3 = $result_d . $result_e;
        } elseif($answer_3 == "d,f") {
            $output_3 = $result_d . $result_f;
        } elseif($answer_3 == "d,g") {
            $output_3 = $result_d . $result_g;
        } elseif($answer_3 == "d,h") {
            $output_3 = $result_d . $result_h;
        } elseif($answer_3 == "e,f") { // variation ex2 starts
            $output_3 = $result_e . $result_f;
        } elseif($answer_3 == "e,g") {
            $output_3 = $result_e . $result_g;
        } elseif($answer_3 == "e,h") {
            $output_3 = $result_e . $result_h;
        } elseif($answer_3 == "f,g") { // variation fx2 starts
            $output_3 = $result_f . $result_g;
        } elseif($answer_3 == "f,h") {
            $output_3 = $result_f . $result_h;
        } elseif($answer_3 == "g,h") { // variation gx2 starts
            $output_3 = $result_g . $result_h;
        } elseif($answer_3 == "a,b,c") { // variation ax3 starts
            $output_3 = $result_a . $result_b . $result_c;
        } elseif($answer_3 == "a,b,d") {
            $output_3 = $result_a . $result_b . $result_e;
        } elseif($answer_3 == "a,b,e") {
            $output_3 = $result_a . $result_g . $result_h;
        } elseif($answer_3 == "a,c,d") {
            $output_3 = $result_a . $result_c . $result_d;
        } elseif($answer_3 == "a,d,e") {
            $output_3 = $result_a . $result_d . $result_e;
        } elseif($answer_3 == "a,e,f") {
            $output_3 = $result_a . $result_e . $result_f;
        } elseif($answer_3 == "a,f,g") {
            $output_3 = $result_a . $result_f . $result_g;
        } elseif($answer_3 == "a,g,h") {
            $output_3 = $result_a . $result_g . $result_h;
        } elseif($answer_3 == "b,c,d") { // variation bx3 starts
            $output_3 = $result_b . $result_c . $result_d;
        } elseif($answer_3 == "b,d,e") {
            $output_3 = $result_b . $result_d . $result_e;
        } elseif($answer_3 == "b,e,f") {
            $output_3 = $result_b . $result_e . $result_f;
        } elseif($answer_3 == "b,f,g") {
            $output_3 = $result_b . $result_f . $result_g;
        } elseif($answer_3 == "b,g,h") {
            $output_3 = $result_b . $result_g . $result_h;
        } elseif($answer_3 == "c,d,e") { // variation cx3 starts
            $output_3 = $result_c . $result_d . $result_e;
        } elseif($answer_3 == "c,e,f") {
            $output_3 = $result_c . $result_e . $result_f;
        } elseif($answer_3 == "c,f,g") {
            $output_3 = $result_c . $result_f . $result_g;
        } elseif($answer_3 == "c,g,h") {
            $output_3 = $result_c . $result_g . $result_h;
        } elseif($answer_3 == "d,e,f") { // variation dx3 starts
            $output_3 = $result_d . $result_e . $result_f;
        } elseif($answer_3 == "d,f,g") {
            $output_3 = $result_d . $result_f . $result_g;
        } elseif($answer_3 == "d,g,h") {
            $output_3 = $result_d . $result_g . $result_h;
        } elseif($answer_3 == "e,f,g") { // variation ex3 starts
            $output_3 = $result_e . $result_f . $result_g;
        } elseif($answer_3 == "e,g,h") {
            $output_3 = $result_e . $result_g . $result_h;
        } elseif($answer_3 == "f,g,h") { // variation fx3 starts
            $output_3 = $result_f . $result_g . $result_h;
        } elseif($answer_3 == "a,b,c,d") { // variation ax4 starts
            $output_3 = $result_a . $result_b . $result_c . $result_d;
        } elseif($answer_3 == "a,c,d,e") {
            $output_3 = $result_a . $result_c . $result_d . $result_e;
        } elseif($answer_3 == "a,d,e,f") {
            $output_3 = $result_a . $result_d . $result_e . $result_f;
        } elseif($answer_3 == "a,e,f,g") {
            $output_3 = $result_a . $result_e . $result_f . $result_g;
        } elseif($answer_3 == "a,f,g,h") {
            $output_3 = $result_a . $result_f . $result_g . $result_h;
        } elseif($answer_3 == "b,c,d,e") { // variation bx4 starts
            $output_3 = $result_b . $result_c . $result_d . $result_e;
        } elseif($answer_3 == "b,d,e,f") {
            $output_3 = $result_b . $result_d . $result_e . $result_f;
        } elseif($answer_3 == "b,e,f,g") {
            $output_3 = $result_b . $result_e . $result_f . $result_g;
        } elseif($answer_3 == "b,f,g,h") {
            $output_3 = $result_b . $result_f . $result_g . $result_h;
        } elseif($answer_3 == "c,d,e,f") { // variation cx4 starts
            $output_3 = $result_c . $result_d . $result_e . $result_f;
        } elseif($answer_3 == "c,e,f,g") {
            $output_3 = $result_c . $result_e . $result_f . $result_g;
        } elseif($answer_3 == "c,f,g,h") {
            $output_3 = $result_c . $result_f . $result_g . $result_h;
        } elseif($answer_3 == "d,e,f,g") { // variation dx4 starts
            $output_3 = $result_d . $result_e . $result_f . $result_g;
        } elseif($answer_3 == "d,f,g,h") {
            $output_3 = $result_d . $result_f . $result_g . $result_h;
        } elseif($answer_3 == "e,f,g,h") { // variation ex4 starts
            $output_3 = $result_e . $result_f . $result_g . $result_h;
        } elseif($answer_3 == "a,b,c,d,e") { // variation ax5 starts
            $output_3 = $result_a . $result_b . $result_c . $result_d . $result_e;
        } elseif($answer_3 == "a,c,d,e,f") {
            $output_3 = $result_a . $result_c . $result_d . $result_e . $result_f;
        } elseif($answer_3 == "a,d,e,f,g") {
            $output_3 = $result_a . $result_d . $result_e . $result_f . $result_g;
        } elseif($answer_3 == "a,e,f,g,h") {
            $output_3 = $result_a . $result_e . $result_f . $result_g . $result_h;
        } elseif($answer_3 == "b,c,d,e,f") { // variation bx5 starts
            $output_3 = $result_b . $result_c . $result_d . $result_e . $result_f;
        } elseif($answer_3 == "b,d,e,f,g") {
            $output_3 = $result_b . $result_d . $result_e . $result_f . $result_g;
        } elseif($answer_3 == "b,e,f,g,h") {
            $output_3 = $result_b . $result_e . $result_f . $result_g . $result_h;
        }  elseif($answer_3 == "c,d,e,f,g") { // variation cx5 starts
            $output_3 = $result_c . $result_d . $result_e . $result_f . $result_g;
        } elseif($answer_3 == "c,e,f,g,h") {
            $output_3 = $result_c . $result_e . $result_f . $result_g . $result_h;
        } elseif($answer_3 == "d,e,f,g,h") { // variation dx5 starts
            $output_3 = $result_d . $result_e . $result_f . $result_g . $result_h;
        } elseif($answer_3 == "a,b,c,d,e,f") { // variation ax6 starts
            $output_3 = $result_a . $result_b . $result_c . $result_d . $result_e . $result_f;
        } elseif($answer_3 == "a,c,d,e,f,g") {
            $output_3 = $result_a . $result_c . $result_d . $result_e . $result_f . $result_g;
        } elseif($answer_3 == "a,d,e,f,g,h") {
            $output_3 = $result_a . $result_d . $result_e . $result_f . $result_g . $result_h;
        } elseif($answer_3 == "b,c,d,e,f,g") { // variation bx6 starts
            $output_3 = $result_b . $result_c . $result_d . $result_e . $result_f . $result_g;
        } elseif($answer_3 == "b,d,e,f,g,h") {
            $output_3 = $result_b . $result_d . $result_e . $result_f . $result_g . $result_h;
        } elseif($answer_3 == "c,d,e,f,g,h") { // variation cx6 starts
            $output_3 = $result_c . $result_d . $result_e . $result_f . $result_g . $result_h;
        } elseif($answer_3 == "a,b,c,d,e,f,g") { // variation ax7 starts
            $output_3 = $result_a . $result_b . $result_c . $result_d . $result_e . $result_f . $result_g;
        } elseif($answer_3 == "b,c,d,e,f,g,h") { // variation bx7 starts
            $output_3 = $result_b . $result_c . $result_d . $result_e . $result_f . $result_g . $result_h;
        } elseif($answer_3 == "a,b,c,d,e,f,g,h") { // variation ax8 starts
            $output_3 = $result_a . $result_b . $result_c . $result_d . $result_e . $result_f . $result_g . $result_h;
        }

        /* OUTPUT 4 CALCULATION
        ------------------------------------------------------------------------------------------------*/
        $answer_4 = $_POST['selected_answer_4'];
        if($answer_4 == "a") {
            $output_4 = "<li>no logic model or programme theory required</li>";
        } elseif ( $answer_4 == "b" ) {
            $output_4 = "<li>logic model or programme theory collated from documents</li>";
        } elseif ( $answer_4 == "c" ) {
            $output_4 = "<li></li>";
        }
        
    ?>

    <!-- THE RENDERING -->
    <div class="calculated-evalution-container">

        <!-- OUTPUT RENDER -->
        <div class="main-calc">
            <div class="">
                <div class="evaluation-outputs">
                    We have a <?= $output_1 ?> (the 'evaluand'), requiring: <br>
                    <ul>
                        <?= $output_2 ?>
                    </ul>
                </div>
                <div class="evaluation-outputs">
                    In relation to the evaluation, the plan would likely focus on: <br>
                    <ul>
                        <?= $output_3 ?>
                    </ul>
                </div>
                <div class="evaluation-outputs">
                    For the framework and plan, we would likely need: <br>
                    <ul>
                        <?= $output_4 ?>
                    </ul>
                </div>
            </div>
        </div>

        <!-- TIME RESULT -->
        <div class="time-calc">

        </div>

        <hr style="margin-top:30px">

        <!-- USER DETAILS -->
        <div class="user-details">
            <div class="submitted-name">
                <h5>Your name (required): <strong><?= $_POST['your-name'] ?></strong></h5>
            </div>
            <div class="submitted-email">
                <h5>Your email (required): <strong><?= $_POST['your-email'] ?></strong></h5>
            </div>
        </div>
    </div>
<?php } ?>