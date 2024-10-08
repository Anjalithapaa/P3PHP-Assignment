<?php
// Get user details
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];

// Define correct answers
$correct_answers = array(
    "q1" => "a",
    "q2" => "c",
    "q3" => "a",
    "q4" => "a",
    "q5" => "c",
    "q6" => "b",
    "q7" => "a",
    "q8" => "c",
    "q9" => "a",
    "q10" => "a"
);

// Initialize the score
$score = 0;
$total_questions = count($correct_answers);

// Process each question
echo "First Name: $firstName, Last Name: $lastName<br>";
echo "<h2>Your CMPS401 PHP Quiz Results:</h2>";

foreach ($correct_answers as $question => $correct_answer) {
    if (isset($_POST[$question])) {
        $user_answer = $_POST[$question];
        $is_correct = ($user_answer == $correct_answer);
        if ($is_correct) {
            $score++;
            echo "Your answer to $question is correct.<br>";
        } else {
            echo "Your answer to $question is incorrect. Correct answer is $correct_answer.<br>";
        }
    } else {
        echo "You did not answer question $question.<br>";
    }
}

// Calculate the final score
$percentage = ($score / $total_questions) * 100;

echo "<p>Your final grade is $score / $total_questions.</p>";
echo "<p>Your percentage score is $percentage%.</p>";
?>
