# PHP Notice: Undefined index Bug

This repository demonstrates a common PHP error: "Undefined index". This error occurs when you try to access an array element using a key that doesn't exist.  The example shows how to reproduce and fix this error.

## Bug Description
The `processData` function iterates through an array and attempts to access elements with 'id' and 'value' keys.  However, the fourth element in the `$data` array is missing the 'value' key, causing a Notice.  These notices, while not fatal, can clutter error logs and make debugging more difficult.

## How to Reproduce
1. Clone this repository.
2. Run `bug.php`.
3. Observe the Notice error message.

## Solution
The improved solution, `bugSolution.php`, uses `isset()` to check if the key exists before attempting to access it. This avoids the Notice and makes the code more robust.
