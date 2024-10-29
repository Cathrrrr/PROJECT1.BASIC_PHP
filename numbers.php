<?php
// Data for Midterm Grades
$midtermQuizzes = [1.5, 2.0, 1.76];
$midtermProjects = [1.3, 2.0];
$midtermExam = 1.79;

// Data for Tentative Final Grades
$finalQuizzes = [1.8, 2.0, 1.75];
$finalProjects = [1.3, 1.0];
$finalExam = 1.5;

// Data for Final Grade 
$finalGradeQuizzes = [1.2, 2.1, 1.76];
$finalGradeProjects = [1.2, 2.0];
$finalGradeExam = 1.9;

// Function to calculate grade and show details
function calculateGrade($quizzes, $projects, $exam) {
    $averageQuiz = array_sum($quizzes) / count($quizzes);
    $averageProject = array_sum($projects) / count($projects);
    $grade = ($averageQuiz * 0.30) + ($averageProject * 0.20) + ($exam * 0.50);
    return [
        'grade' => round($grade, 2),
        'averageQuiz' => round($averageQuiz, 2),
        'averageProject' => round($averageProject, 2),
        'exam' => $exam
    ];
}

// Calculate Midterm Grade
$midtermResult = calculateGrade($midtermQuizzes, $midtermProjects, $midtermExam);
$midtermGrade = $midtermResult['grade'];

// Calculate Tentative Final Grade
$tentativeFinalResult = calculateGrade($finalQuizzes, $finalProjects, $finalExam);
$tentativeFinalGrade = $tentativeFinalResult['grade'];

// Calculate Final-Final Grade (average of Midterm and Tentative Final)
$finalFinalGrade = ($midtermGrade + $tentativeFinalGrade) / 2;

// Calculate the final period grade (based on final grades data)
$finalPeriodResult = calculateGrade($finalGradeQuizzes, $finalGradeProjects, $finalGradeExam);
$finalPeriodGrade = $finalPeriodResult['grade'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulating Numbers</title>
    <style>
        body {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            background-color: #e8f5e9;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #2e7d32;
        }
        .grade-container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        p {
            font-size: 1.2em;
            line-height: 1.5em;
        }
        .button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #388e3c;
            color: white;
            text-align: center;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
        }
        .button:hover {
            background-color: #2e7d32;
        }
    </style>
</head>
<body>
    <div class="grade-container">
        <h1>Grade Calculation for CTU Students</h1>
        
        <h2>Midterm Grade Calculation</h2>
        <p><strong>Average Quiz Grade:</strong> <?php echo $midtermResult['averageQuiz']; ?></p>
        <p><strong>Average Project Grade:</strong> <?php echo $midtermResult['averageProject']; ?></p>
        <p><strong>Exam Grade:</strong> <?php echo $midtermResult['exam']; ?></p>
        <p><strong>Computed Midterm Grade:</strong> <?php echo $midtermGrade; ?></p>
        
        <h2>Tentative Final Grade Calculation</h2>
        <p><strong>Average Quiz Grade:</strong> <?php echo $tentativeFinalResult['averageQuiz']; ?></p>
        <p><strong>Average Project Grade:</strong> <?php echo $tentativeFinalResult['averageProject']; ?></p>
        <p><strong>Exam Grade:</strong> <?php echo $tentativeFinalResult['exam']; ?></p>
        <p><strong>Computed Tentative Final Grade:</strong> <?php echo $tentativeFinalGrade; ?></p>

        <h2>Overall Final-Final Grade</h2>
        <p><strong>Final-Final Grade:</strong> <?php echo round($finalFinalGrade, 2); ?></p>
        
        <a class="button" href="javascript:void(0);" onclick="closeAndGoBack()">Back to Main Page</a>
    </div>

    <div> 
        Creator's Name: Menzi Ann Bacalso  
    </div>
    <div>  
        Date Created: October 20, 2024
    </div>

<script>
    function closeAndGoBack() {
        window.close();
        window.location.href = "mainpage.php";
    }
</script>

</body>
</html>
