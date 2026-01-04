# Lesson 02 – PHP Basics Assignment 02

## 📝 Description
This assignment is about **checking and displaying data types** in PHP.  
The goal is to **explore different methods to identify the type of a variable**, in this case the number `100`.  

We will use **three methods**:
1. `var_dump()`  
2. `gettype()`  
3. `is_int()`  

---

## 🔹 Original Code
```php
<?php
// Elzero Web School
// PHP - Basics
// Lesson 02

var_dump(100);
echo "<br>";
echo gettype(100);
echo "<br>";
echo is_int(100);
```
The original output:
```php

int(100)
integer
1
```
var_dump(100) → Shows type and value (int(100)).

gettype(100) → Returns type as string (integer).

is_int(100) → Checks if variable is integer, returns 1 for true (true).

## 🔹 Solution

We use three methods to display or check the type of 100.
```php

<?php

$number = 100;

// Method One: var_dump() → Shows type and value
var_dump($number);
echo "<br>";

// Method Two: gettype() → Returns type as string
echo gettype($number);
echo "<br>";

// Method Three: is_int() → Checks if the value is integer (1 = true)
echo is_int($number);

?>
```
Expected Output:
```php

int(100)
integer
1
```
