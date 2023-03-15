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
    <?php $plugin_dir = '/evaluation-calculator/wp-content/plugins/evaluation-calc'; ?>
    <style>h1.wp-block-post-title {display:none;}</style>
    <div class="initial--content">
        <img src="<?= $plugin_dir . '/public/img/logo.jpeg' ?>">
        <h4>Monitoring and evaluation planning calculator</h4>
        <p>The following calculator estimates the amount of time it will take to develop an evaluation and/or monitoring plan relevant to your specific needs. The calculator estimates the required time based on your responses to a series of 9 questions.</p>
    </div>
    <div class="evaluation-form-container">
        <form action="" method="post">

            <!-- Name Field -->
            <!-- <div class="evaluation-field">
                <label>Your name</label>
                <input type="text" name="your-name" value="" required>
            </div> -->

            <!-- Name Field -->
            <!-- <div class="evaluation-field">
                <label>Your email</label>
                <input type="email" name="your-email" value="" required>
            </div> -->

            <!-- QUESTION 1 -->
            <div class="question-1 evaluation-question">
                <label>1. How large or complex is the programme, policy, activity or intervention (the 'evaluand')? </label>
                <div class="evaluation-mcq">
                    <div>
                        <input type="checkbox" name="question_1[]" value="a">
                        <label> The delivery is small, usually involving few people or groups (n&lt;5) in the delivery, and benefiting small cohorts (e.g. pilot-size initiatives, or a simple activity or output).</label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_1[]" value="b">
                        <label> The evaluand involves either many people and beneficiaries, but have a simple design and delivery; or it involves few people, albeit with a complex design and delivery approach. </label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_1[]" value="c">
                        <label> The delivery is large and complex, involving many different components of a system or systems, and/or across sectors or populations of people</label>
                    </div>
                </div>
                <!-- Pass Form Data -->
                <input type="hidden" class="selected_answer" name="selected_answer_1" value="">
            </div>

            <!-- QUESTION 2 -->
            <div class="question-2 evaluation-question allow-multiple">
                <label>2. What is the purpose of your monitoring and evaluation activities? </label>
                <div class="evaluation-mcq allow-multiple">
                    <div>
                        <input type="checkbox" name="question_2[]" value="a">
                        <label> Funders (or otherwise) want to decide about ongoing funding decisions and understand what was achieved.</label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_2[]" value="b">
                        <label> Our delivery teams and others want to learn to make adjustments to the evaluand </label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_2[]" value="c">
                        <label> Monitoring: we want to periodically track progress against a range of indicators.</label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_2[]" value="d">
                        <label> Advice and technical support, or capability building in relation to monitoring and evaluation.</label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_2[]" value="e">
                        <label> other purposes</label>
                    </div>
                </div>
                <!-- Pass Form Data -->
                <input type="hidden" class="selected_answer" name="selected_answer_2" value="">
            </div>

            <!-- QUESTION 3 -->
            <!-- <div class="question-3 evaluation-question allow-multiple">
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
                <input type="hidden" class="selected_answer" name="selected_answer_3" value="">
            </div> -->

            <!-- QUESTION 4 -->
            <div class="question-4 evaluation-question">
                <label>3. How well is your programme, policy, activity or intervention understood and documented? </label>
                <div class="evaluation-mcq">
                    <div>
                        <input type="checkbox" name="question_4[]" value="a">
                        <label>We understand the activities, the expected outputs or deliverables and what you'd expect to achieve, and this is documented through a logic model or theory of change.</label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_4[]" value="b">
                        <label>We understand the activities, the expected outputs or deliverables and what you'd expect to achieve, but require this to be pulled together as a logic model or theory of change. </label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_4[]" value="c">
                        <label>We understand the activities and the expected outputs or deliverables, but require this to be well mapped out onto the expected and longer-term outcomes.</label>
                    </div>
                </div>
                <!-- Pass Form Data -->
                <input type="hidden" class="selected_answer" name="selected_answer_4" value="">
            </div>

            <!-- QUESTION 5 -->
            <!-- <div class="question-5 evaluation-question allow-multiple">
                <label>5. What types of approaches would you or your stakeholders value most for this work? </label>
                <div class="evaluation-mcq">
                    <div>
                        <input type="checkbox" name="question_5[]" value="a">
                        <label>a.Generalisable findings about populations or groups.</label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_5[]" value="b">
                        <label>b.Individual's stories and localised contexts.</label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_5[]" value="c">
                        <label>c.Learning through success.</label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_5[]" value="d">
                        <label>d.Learning from success and non-success.</label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_5[]" value="e">
                        <label>e.Learning through internal delivery processes.</label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_5[]" value="f">
                        <label>f.Statistical comparisons between groups of people (or comparison groups).</label>
                    </div>
                </div>
                <input type="hidden" class="selected_answer" name="selected_answer_5" value="">
            </div> -->

            <!-- QUESTION 6 -->
            <div class="question-6 evaluation-question">
                <label>4. How would you like to be involved in the design of the monitoring and evaluation plan? </label>
                <div class="evaluation-mcq">
                    <div>
                        <input type="checkbox" name="question_6[]" value="a">
                        <label>We want the evaluation team to design the plan independently, with minimal effort from our teams.</label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_6[]" value="b">
                        <label>We want to review and contribute information, but for the evaluation team to design the plan. </label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_6[]" value="c">
                        <label>We want the plan to be co-designed with the evaluation team.</label>
                    </div>
                </div>
                <!-- Pass Form Data -->
                <input type="hidden" class="selected_answer" name="selected_answer_6" value="">
            </div>

            <!-- QUESTION 7 -->
            <div class="question-7 evaluation-question">
                <label>5. Apart from the evaluation team, how many people or groups would you like to be involved in the review and development of the monitoring and evaluation plan design? </label>
                <div class="evaluation-mcq">
                    <div>
                        <input type="checkbox" name="question_7[]" value="a">
                        <label>Approximately 1-2 people</label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_7[]" value="b">
                        <label>Approximately 3-6 people</label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_7[]" value="c">
                        <label>Likely more than 6 people</label>
                    </div>
                </div>
                <!-- Pass Form Data -->
                <input type="hidden" class="selected_answer" name="selected_answer_7" value="">
            </div>

            <!-- QUESTION 8 -->
            <div class="question-8 evaluation-question">
                <label>6. Do you know what questions you'd like answered? </label>
                <div class="evaluation-mcq">
                    <div>
                        <input type="checkbox" name="question_8[]" value="a">
                        <label>Yes, and this is agreed with all those involved.</label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_8[]" value="b">
                        <label>Yes, but this is not yet agreed internally.</label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_8[]" value="c">
                        <label>No.</label>
                    </div>
                </div>
                <!-- Pass Form Data -->
                <input type="hidden" class="selected_answer" name="selected_answer_8" value="">
            </div>

            <!-- QUESTION 9 -->
            <div class="question-9 evaluation-question">
                <label>7. Do you know what success is expected to look like, and is this agreed among all relevant stakeholders? </label>
                <div class="evaluation-mcq">
                    <div>
                        <input type="checkbox" name="question_9[]" value="a">
                        <label>Yes, and this is agreed with all those involved.</label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_9[]" value="b">
                        <label>Yes, but this is not yet agreed internally.</label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_9[]" value="c">
                        <label>No.</label>
                    </div>
                </div>
                <!-- Pass Form Data -->
                <input type="hidden" class="selected_answer" name="selected_answer_9" value="">
            </div>

            <!-- QUESTION 10 -->
            <div class="question-10 evaluation-question">
                <label>8. Do you know the range of indicators that would suggest your programme, policy or intervention has achieved what it set out to achieve? </label>
                <div class="evaluation-mcq">
                    <div>
                        <input type="checkbox" name="question_10[]" value="a">
                        <label>Yes, these are clearly identified</label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_10[]" value="b">
                        <label>Yes, but these are not yet agreed or well documented</label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_10[]" value="c">
                        <label>No</label>
                    </div>
                </div>
                <!-- Pass Form Data -->
                <input type="hidden" class="selected_answer" name="selected_answer_10" value="">
            </div>

            <!-- QUESTION 11 -->
            <div class="question-11 evaluation-question">
                <label>9. Do you have relevant data and data systems available? </label>
                <div class="evaluation-mcq">
                    <div>
                        <input type="checkbox" name="question_11[]" value="a">
                        <label>We have a lot of relevant data available.</label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_11[]" value="b">
                        <label>We have no relevant data and/or data system available.</label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_11[]" value="c">
                        <label>We have some relevant data and/or data systems available, but we may need more</label>
                    </div>
                    <div>
                        <input type="checkbox" name="question_11[]" value="c">
                        <label>It's unclear if we have relevant data and data systems.</label>
                    </div>
                </div>
                <!-- Pass Form Data -->
                <input type="hidden" class="selected_answer" name="selected_answer_11" value="">
            </div>

            <!-- Form Validation -->
            <input type="hidden" name="do_evaluation" value="1">
            <button type="submit">Submit</button>
        </form>
    </div>
<?php } ?>

<!-- THE EVALUATION -->
<?php if(isset($_POST['do_evaluation']) == '1') { ?>

    <?php $plugin_dir = '/evaluation-calculator/wp-content/plugins/evaluation-calc'; ?>
    <style>h1.wp-block-post-title {display:none;}</style>
    <div class="initial--content">
        <img src="<?= $plugin_dir . '/public/img/logo.jpeg' ?>">
        <h4>Monitoring and evaluation planning calculator</h4>
        <p>You have provided us with the following information.</p>
    </div>

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
        $answer_2 = explode(",", $answer_2);

        $result2_a = "<li>a high-stakes evaluation, focused on accountability</li>";
        $result2_b = "<li>an evaluation focused on learning</li>";
        $result2_c = "<li>a monitoring programme</li>";
        $result2_d = "<li>advice, support and capability development (note, the time required to provide this type of support would need to be considered seperately)</li>";
        $result2_e = "<li>other purposes (note, the time required to provide the specific support you need would require separate consideration)</li>";

        // need to do the time calculation for Q1 & Q2
        

        /* OUTPUT 3 CALCULATION
        ------------------------------------------------------------------------------------------------*/
        // $answer_3 = $_POST['selected_answer_3'];
        // $answer_3 = explode(",", $answer_3);

        // $result3_a = "<li>efficiency</li>";
        // $result3_b = "<li>relevance</li>";
        // $result3_c = "<li>coherence</li>";
        // $result3_d = "<li>effectiveness</li>";
        // $result3_e = "<li>impact</li>";
        // $result3_f = "<li>longer-term, unexpected and expected outcomes</li>";
        // $result3_g = "<li>sustainability of the evaluand</li>";
        // $result3_h = "<li>aspects of merit, worth and significance</li>";

        /* OUTPUT 4 CALCULATION
        ------------------------------------------------------------------------------------------------*/
        $answer_4 = $_POST['selected_answer_4'];

        if($answer_4 == "a") {
            $output_4 = "<li>no logic model or programme theory required</li>";
            // Time Calculation
            if($answer_1 == "a" || $answer_1 == "b" || $answer_1 == "c") {
                $duration_4 = 0;
            }
        } elseif ( $answer_4 == "b" ) {
            $output_4 = "<li>logic model or programme theory collated from documents</li>";
            // Time Calculation
            if( $answer_1 == "a" ) {
                $duration_4 = 10;
            } elseif( $answer_1 == "b" ) {
                $duration_4 = 14;
            } elseif( $answer_1 == "c" ) {
                $duration_4 = 17;
            }
        } elseif ( $answer_4 == "c" ) {
            $output_4 = "<li>a workshop to document our logic model and programme theory</li>";
            // Time Calculation
            if( $answer_1 == "a" ) {
                $duration_4 = 20;
            } elseif( $answer_1 == "b" ) {
                $duration_4 = 24;
            } elseif( $answer_1 == "c" ) {
                $duration_4 = 27;
            }
        }

        /* OUTPUT 5 CALCULATION
        ------------------------------------------------------------------------------------------------*/
        // $answer_5 = $_POST['selected_answer_5'];
        // $answer_5 = explode(",", $answer_5);

        // $result5_a = "<li>numbers and statistics</li>";
        // $result5_b = "<li>case-level information</li>";
        // $result5_c = "<li>strengths-focused approaches</li>";
        // $result5_d = "<li>balanced approaches</li>";
        // $result5_e = "<li>embedded monitoring systems</li>";
        // $result5_f = "<li>comparative methods</li>";

        /* OUTPUT 6 CALCULATION
        ------------------------------------------------------------------------------------------------*/
        $answer_6 = $_POST['selected_answer_6'];

        if($answer_6 == "a") {
            $output_6 = "independent M&E plan designed with a final review from us";
        } elseif ( $answer_6 == "b" ) {
            $output_6 = "independent M&E plan designed and reviewed by us at different stages of the design process";
        } elseif ( $answer_6 == "c" ) {
            $output_6 = "co-designed M&E plan";
        }

        /* OUTPUT 7 CALCULATION
        ------------------------------------------------------------------------------------------------*/
        $answer_7 = $_POST['selected_answer_7'];

        if($answer_7 == "a") {
            $output_7 = "approximately 1-2 people";
            // Time Calculation if a
            if( $answer_6 == "a" ) {
                $duration_7 = 20;
            } elseif( $answer_6 == "b" ) {
                $duration_7 = 14;
            } elseif( $answer_6 == "c" ) {
                $duration_7 = 20;
            }
        } elseif ( $answer_7 == "b" ) {
            $output_7 = "approximately 3-6 people";
            // Time Calculation if b
            if( $answer_6 == "a" ) {
                $duration_7 = 27;
            } elseif( $answer_6 == "b" ) {
                $duration_7 = 20;
            } elseif( $answer_6 == "c" ) {
                $duration_7 = 27;
            }
        } elseif ( $answer_7 == "c" ) {
            $output_7 = "likely more than 6 people";
            // Time Calculation if c
            if( $answer_6 == "a" ) {
                $duration_7 = 34;
            } elseif( $answer_6 == "b" ) {
                $duration_7 = 27;
            } elseif( $answer_6 == "c" ) {
                $duration_7 = 34;
            }
        }

        /* OUTPUT 8 CALCULATION
        ------------------------------------------------------------------------------------------------*/
        $answer_8 = $_POST['selected_answer_8'];

        if($answer_8 == "a") {
            $output_8 = "no question design support other than a review against objectives";
            // Time Calculation if a
            if( $answer_7 == "a" ) {
                $duration_8 = 0;
            } elseif( $answer_7 == "b" ) {
                $duration_8 = 0;
            } elseif( $answer_7 == "c" ) {
                $duration_8 = 0;
            }
        } elseif ( $answer_8 == "b" ) {
            $output_8 = "facilitation to confirm the questions";
            // Time Calculation if b
            if( $answer_7 == "a" ) {
                $duration_8 = 4;
            } elseif( $answer_7 == "b" ) {
                $duration_8 = 7;
            } elseif( $answer_7 == "c" ) {
                $duration_8 = 10;
            }
        } elseif ( $answer_8 == "c" ) {
            $output_8 = "facilitation to design relevant and appropriate questions";
            // Time Calculation if c
            if( $answer_7 == "a" ) {
                $duration_8 = 7;
            } elseif( $answer_7 == "b" ) {
                $duration_8 = 10;
            } elseif( $answer_7 == "c" ) {
                $duration_8 = 14;
            }
        }

        /* OUTPUT 9 CALCULATION
        ------------------------------------------------------------------------------------------------*/
        $answer_9 = $_POST['selected_answer_9'];

        if($answer_9 == "a") {
            $output_9 = "no support for defining success, other than a review of the standards of success";
            // Time Calculation if a
            if( $answer_7 == "a" ) {
                $duration_9 = 1;
            } elseif( $answer_7 == "b" ) {
                $duration_9 = 1;
            } elseif( $answer_7 == "c" ) {
                $duration_9 = 2;
            }
        } elseif ( $answer_9 == "b" ) {
            $output_9 = "facilitation to confirm the standards of success";
            // Time Calculation if b
            if( $answer_7 == "a" ) {
                $duration_9 = 2;
            } elseif( $answer_7 == "b" ) {
                $duration_9 = 4;
            } elseif( $answer_7 == "c" ) {
                $duration_9 = 6;
            }
        } elseif ( $answer_9 == "c" ) {
            $output_9 = "identify potential standards of success, and facilitate for agreement";
            // Time Calculation if c
            if( $answer_7 == "a" ) {
                $duration_9 = 4;
            } elseif( $answer_7 == "b" ) {
                $duration_9 = 6;
            } elseif( $answer_7 == "c" ) {
                $duration_9 = 8;
            }
        }

        /* OUTPUT 10 CALCULATION
        ------------------------------------------------------------------------------------------------*/
        $answer_10 = $_POST['selected_answer_10'];

        if($answer_10 == "a") {
            $output_10 = "<li>no support for describing success</li>";
            // Time Calculation if a
            if( $answer_1 == "a" ) {
                $duration_10 = 1;
            } elseif( $answer_1 == "b" ) {
                $duration_10 = 1;
            } elseif( $answer_1 == "c" ) {
                $duration_10 = 2;
            }
        } elseif ( $answer_10 == "b" ) {
            $output_10 = "<li>facilitation to confirm indicators of success</li>";
            // Time Calculation if b
            if( $answer_1 == "a" ) {
                $duration_10 = 2;
            } elseif( $answer_1 == "b" ) {
                $duration_10 = 4;
            } elseif( $answer_1 == "c" ) {
                $duration_10 = 6;
            }
        } elseif ( $answer_10 == "c" ) {
            $output_10 = "<li>identify potentially relevant indicators of success, and facilitate for agreement</li>";
            // Time Calculation if c
            if( $answer_1 == "a" ) {
                $duration_10 = 4;
            } elseif( $answer_1 == "b" ) {
                $duration_10 = 6;
            } elseif( $answer_1 == "c" ) {
                $duration_10 = 8;
            }
        }

        /* OUTPUT 11 CALCULATION
        ------------------------------------------------------------------------------------------------*/
        $answer_11 = $_POST['selected_answer_11'];

        if($answer_11 == "a") {
            $output_11 = "<li>mapping available data to the framework</li>";
            // Time Calculation if a
            if( $answer_1 == "a" ) {
                $duration_11 = 4;
            } elseif( $answer_1 == "b" ) {
                $duration_11 = 8;
            } elseif( $answer_1 == "c" ) {
                $duration_11 = 12;
            }
        } elseif ( $answer_11 == "b" ) {
            $output_11 = "<li>developing measures and/or data systems</li>";
            // Time Calculation if b
            if( $answer_1 == "a" ) {
                $duration_11 = 14;
            } elseif( $answer_1 == "b" ) {
                $duration_11 = 20;
            } elseif( $answer_1 == "c" ) {
                $duration_11 = 30;
            }
        } elseif ( $answer_11 == "c" ) {
            $output_11 = "<li>mapping available data to the framework</li><li>developing measures and/or data systems to ensure coverage</li>";
            // Time Calculation if b
            if( $answer_1 == "a" ) {
                $duration_11 = 18;
            } elseif( $answer_1 == "b" ) {
                $duration_11 = 28;
            } elseif( $answer_1 == "c" ) {
                $duration_11 = 42;
            }
        } elseif ( $answer_11 == "d" ) {
            $output_11 = "<li>scoping data availability and relevance</li>";
            // Time Calculation if b
            if( $answer_1 == "a" ) {
                $duration_11 = 7;
            } elseif( $answer_1 == "b" ) {
                $duration_11 = 14;
            } elseif( $answer_1 == "c" ) {
                $duration_11 = 27;
            }
        }
        
    ?>

    <!-- THE RENDERING -->
    <div class="calculated-evalution-container">

        <!-- OUTPUT RENDER -->
        <div class="main-calc">
            <div class="evaluation-outputs">
                We have a <?= $output_1 ?> (the 'evaluand'), requiring: <br>
                <ul>
                    <?php 
                        foreach($answer_2 as $answer) {
                            if($answer == "a") {
                                echo $result2_a;

                                // Time Calculation if a
                                if( $answer_1 == "a" ) {
                                    $duration_2a1a = 27;
                                } elseif( $answer_1 == "b" ) {
                                    $duration_2a1b = 34;
                                } elseif( $answer_1 == "c" ) {
                                    $duration_2a1c = 40;
                                }
                            } elseif($answer == "b") {
                                echo $result2_b;

                                // Time Calculation if a
                                if( $answer_1 == "a" ) {
                                    $duration_2b1a = 14;
                                } elseif( $answer_1 == "b" ) {
                                    $duration_2b1b = 14;
                                } elseif( $answer_1 == "c" ) {
                                    $duration_2b1c = 17;
                                }
                            } elseif($answer == "c") {
                                echo $result2_c;

                                // Time Calculation if a
                                if( $answer_1 == "a" ) {
                                    $duration_2c1a = 14;
                                } elseif( $answer_1 == "b" ) {
                                    $duration_2c1b = 14;
                                } elseif( $answer_1 == "c" ) {
                                    $duration_2c1c = 17;
                                }
                            } elseif($answer == "d") {
                                echo $result2_d;

                                // Time Calculation if a
                                if( $answer_1 == "a" ) {
                                    $duration_2d1a = 0;
                                } elseif( $answer_1 == "b" ) {
                                    $duration_2d1b = 0;
                                } elseif( $answer_1 == "c" ) {
                                    $duration_2d1c = 0;
                                }
                            } elseif($answer == "e") {
                                echo $result2_e;

                                // Time Calculation if a
                                if( $answer_1 == "a" ) {
                                    $duration_2e1a = 0;
                                } elseif( $answer_1 == "b" ) {
                                    $duration_2e1b = 0;
                                } elseif( $answer_1 == "c" ) {
                                    $duration_2e1c = 0;
                                }
                            }
                        }

                        $duration_2 = $duration_2a1a + $duration_2a1b + $duration_2a1c + $duration_2b1a + $duration_2b1b + $duration_2b1c + $duration_2c1a + $duration_2c1b + $duration_2c1c + $duration_2d1a + $duration_2d1b + $duration_2d1c + $duration_2e1a + $duration_2e1b + $duration_2e1c;
                    ?>
                </ul>
                <!-- <div class="evaluation-outputs">
                    In relation to the evaluation, the plan would likely focus on: <br>
                    <ul>
                        <?php 
                            foreach($answer_3 as $answer) {
                                if($answer == "a") {
                                    echo $result3_a;
                                } elseif($answer == "b") {
                                    echo $result3_b;
                                } elseif($answer == "c") {
                                    echo $result3_c;
                                } elseif($answer == "d") {
                                    echo $result3_d;
                                } elseif($answer == "e") {
                                    echo $result3_e;
                                } elseif($answer == "f") {
                                    echo $result3_f;
                                } elseif($answer == "g") {
                                    echo $result3_g;
                                } elseif($answer == "h") {
                                    echo $result3_h;
                                }
                            }
                        ?>
                    </ul>
                </div> -->
                <div class="evaluation-outputs">
                    For the framework and plan, we would likely need: <br>
                    <ul>
                        <?= $output_4 ?>
                        <li><?= $output_6 . ', involving ' . $output_7 ?></li>
                        <li><?= $output_8 ?></li>
                        <li><?= $output_9 ?></li>
                        <?= $output_10 ?>
                        <?= $output_11 ?>
                    </ul>
                </div>
                <!-- <div class="evaluation-outputs">
                    Our teams would value for this work: <br>
                    <ul>
                        <?php 
                            foreach($answer_5 as $answer) {
                                if($answer == "a") {
                                    echo $result5_a;
                                } elseif($answer == "b") {
                                    echo $result5_b;
                                } elseif($answer == "c") {
                                    echo $result5_c;
                                } elseif($answer == "d") {
                                    echo $result5_d;
                                } elseif($answer == "e") {
                                    echo $result5_e;
                                } elseif($answer == "f") {
                                    echo $result5_f;
                                }
                            }
                        ?>
                    </ul>
                </div> -->
            </div>
        </div>

        <hr style="margin:30px 0">

        <!-- TIME RESULT -->
        <div class="time-calc">
            <h5>Just for calculation purposes (will remove once development is completed)</h5>
            (Q1 & Q2)  = <?= $duration_2 ?> hours <br>
            (Q1 & Q4)  = <?= $duration_4 ?> hours <br>
            (Q6 & Q7)  = <?= $duration_7 ?> hours <br>
            (Q7 & Q8)  = <?= $duration_8 ?> hours <br>
            (Q7 & Q9)  = <?= $duration_9 ?> hours <br>
            (Q1 & Q10) = <?= $duration_10 ?> hours <br>
            (Q1 & Q11) = <?= $duration_11 ?> hours <br>

            <?php 
                $total_hours = $duration_2 + $duration_4 + $duration_7 + $duration_8 + $duration_9 + $duration_10 + $duration_11;
                echo 'total hours = ' . $total_hours;
                echo '<input type="hidden" name="time_meter" value="'.$total_hours.'">'
            ?>
        </div>

        <hr style="margin:30px 0">

        <div class="time-estimate">
            <div class="left-box">
                <h5>Time Estimate</h5>
                <?php
                    if($total_hours <= 70) { ?>
                        <p>It looks like your project would require a minor contribution to get you to an agreed M&E framework and plan. We estimate that this contribution would be up to 70 hours of time to finalise a plan for you.</p>
                        <p>Please provide your name and email below if you'd like to talk to an evaluation specialist about your specific needs. Your summary and estimate above will be sent to you, and your provided information will be matched to one of our evaluation specialists. Our specialist will then contact you within a few days.</p>
                        <form action="" method="post">
                            <div class="evaluation-field">
                                <label>Your Name</label>
                                <input required type="text" name="" value="<?= $_POST['your-name'] ?>">
                            </div>
                            <div class="evaluation-field">
                                <label>Your Email</label>
                                <input required type="email" name="" value="<?= $_POST['your-email'] ?>">
                            </div>
                            <div class="evaluation-field">
                                <label>Phone number (optional)</label>
                                <input type="text" name="" value="">
                            </div>
                            <button type="submit">Submit</button>
                            <input type="hidden" name="time_estimate_1" value="1">
                        </form>
                <?php } elseif($total_hours > 70 && $total_hours < 121) { ?>
                        <p>It looks like your project would require some contribution to get you to an agreed M&E framework and plan. We estimate that this contribution would be approximately 60-120 of time to finalise a plan for you.</p>
                        <p>Please provide your name and email below if you'd like to talk to an evaluation specialist about your specific needs. Your summary and estimate above will be sent to you and to one of our evaluation specialists. Our specialist will then contact you within a few days.</p>
                        <form action="" method="post">
                            <div class="evaluation-field">
                                <label>Your Name</label>
                                <input required type="text" name="" value="">
                            </div>
                            <div class="evaluation-field">
                                <label>Your Email</label>
                                <input required type="email" name="" value="">
                            </div>
                            <button type="submit">Submit</button>
                            <input type="hidden" name="time_estimate_2" value="1">
                        </form>
                <?php } elseif($total_hours > 120) { ?>
                        <p>It looks like your project would require significant design and facilitation support to get you to an agreed M&E framework and plan. From the information you provided, we estimate this will require at least 120 hours of time from an evaluation team.</p>
                        <p>Please provide your name and email below if you'd like to talk to an evaluation specialist about your specific needs. Your summary and estimate above will be sent to you and to one of our evaluation specialists. Our specialist will then contact you within a few days.</p>
                        <form action="" method="post">
                            <div class="evaluation-field">
                                <label>Your name</label>
                                <input required type="text" name="" value="">
                            </div>
                            <div class="evaluation-field">
                                <label>Your email contact</label>
                                <input required type="email" name="" value="">
                            </div>
                            <button type="submit">Submit</button>
                            <input type="hidden" name="time_estimate_3" value="1">
                        </form>
                <?php } ?>
            </div>
            <div class="right-box">
                <h5> Time estimate </h5>
                <div class="outer-meter"></div>
                <meter id="time_meter" value="" min="16" max="200"></meter><br>
            </div>
        </div>
    </div>

    <!-- REFRESH BUTTON -->
    <div class="btn-wrapper">
        <div class="btn-refresh">
            <a href="/evaluation-calculator">Evaluate Again</a>
        </div>
        <div class="btn-print">
            <a href="javascript:void()" onclick="window.print()">Print</a>
        </div>
    </div>
<?php } ?>