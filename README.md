# PHP Foreach Loop Pass-by-Reference Issue

This repository demonstrates a subtle but common error in PHP related to the use of pass-by-reference in `foreach` loops.  Incorrect handling of pass-by-reference can lead to unexpected modifications to the original array, particularly when nested structures or complex operations are involved.

The `bug.php` file shows the problematic code. The `bugSolution.php` provides a corrected version.

## Problem
When using `foreach` with `&` (pass-by-reference), modifications made inside the loop directly affect the original array. This behavior can be problematic if you're not aware of it, potentially leading to hard-to-debug issues.