<html>

<head>
    <title>PHP Multiple Choice Questions and Answers</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Multiple Choice Questions Answers</h1>
        <p>Please fill the details and answers the all questions-</p>
        <form action="score.php" method="post">
            <div class="form-group">
                <strong>Name*:</strong><br />
                <input type="text" name="name" value="" required />
            </div>
            <div class="form-group">
                <strong>Age*:</strong><br />
                <input type="text" name="age" value="" required />
            </div>
            <div class="form-group">
                <strong>Phone*:</strong><br />
                <input type="text" name="phone" value="" required />
            </div>
            <h3>Ques1 : Who is the father of PHP? </h3>
            <div class="form-group">
                <ol>
                    <li>
                        <input type="radio" name="q1" value="1" />Rasmus Lerdorf
                    </li>
                    <li>
                        <input type="radio" name="q1" value="2" />Larry Wall
                    </li>
                    <li>
                        <input type="radio" name="q1" value="3" />Zeev Suraski
                    </li>
                </ol>
            </div>
            <br />
            <div class="form-group">
                <h3>Ques2 : Which of the functions is used to sort an array in descending order?</h3>
                <ol>
                    <li>
                        <input type="radio" name="q2" value="1" />sort()
                    </li>
                    <li>
                        <input type="radio" name="q2" value="2" />asort()
                    </li>
                    <li>
                        <input type="radio" name="q2" value="3" />rsort()
                    </li>
                </ol>
            </div>
            <br />
            <div class="form-group">
                <h3>Ques3 : Which version of PHP introduced the instanceof keyword?</h3>
                <ol>
                    <li>
                        <input type="radio" name="q3" value="1" />PHP 4
                    </li>
                    <li>
                        <input type="radio" name="q3" value="2" />PHP 5
                    </li>
                    <li>
                        <input type="radio" name="q3" value="3" />PHP 6
                    </li>
                </ol>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit" name="submit" class="btn btn-primary" />
            </div>
        </form>
    </div>
</body>

</html>

<?php 
if($_POST['submit']) {
    $name = $_POST['name'];
	$age = $_POST['age'];
	$phone = $_POST['phone'];
	if($name == '' || $age == '' || $phone == '') {
		echo '<h2>Please fill all * mandatory fields.</h2>';
	}	

	if($q1=='' || $q2 =='' || $q3 =='')
    $q1 = $_POST['q1'];
	$q2 = $_POST['q2'];
	$q3 = $_POST['q3'];


	if($q1=='' || $q2 =='' || $q3 =='') {
		echo '<h2>Please answer all questions.</h2>';
	}
	else {
		$score = 0;
		if($q1 == 1) { // 1st option is correct
		$score++;
		}
		if($q2 == 3) { // 3rd option is correct
		$score++;
		}
		if($q3 == 2) { // 2nd option is correct
		$score++;
		}
	        $score = $score	/ 3 *100;
		
		if($score < 50)
		{
		echo '<h2>You need to score at least 50% to pass the exam.</h2>';
		}
		else {
		echo '<h2>You have passed the exam and scored '.$score.'%.</h2>';
		}
	}
}
?>