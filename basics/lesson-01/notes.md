# Lesson 01 – PHP Basics Assignment 01

## 📝 Description
This assignment is about **type casting** in PHP.  
The goal is to **convert numbers to integers** so that the final result is **50** and the **data type is integer**.

---

## 🔹 Original Code
```php
echo 15.2 + 14.7 + (10.5 + 10.5);
echo 15.2 + 14.7 + (10.5 + 10.5);
```

We are not allowed to change the numbers or their positions.

The original output:
```php

50.9 (float)

50.9 (float)
```

## 🔹 Solution
Use type casting (int) to convert floating numbers to integers.

Convert the sum of (10.5 + 10.5) to integer as well.

```php

echo (int)15.2 + (int)14.7 + (int)(10.5 + 10.5); // 50
echo "<br>";
echo gettype((int)15.2 + (int)14.7 + (int)(10.5 + 10.5)); // Integer
```
