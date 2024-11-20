<?php

$grade = "D";

switch ($grade) {
    case "A":
        echo "Excellent!";
        break;
    case "B":
        echo "Very good!";
        break;
    case "C":
        echo "Good!";
        break;
    case "D":
        echo "Needs improvement.";
        break;
    default:
        echo "Invalid grade.";
        break;
}
