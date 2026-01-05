# Lesson 08 – PHP Basics Assignment 08

## 📝 Description
This assignment is about **working with multidimensional arrays in PHP**.  
The goal is to **create a nested array containing FrontEnd, BackEnd, Git/Github, and Testing skills** and **print it exactly** in the required structured format.

---

## 🚫 Restrictions
- ❌ Do NOT use `echo` to print the array directly  
- ✅ Use **`print_r()`** or **`var_dump()`** to display the array structure  
- ✅ All array keys that are strings must be **quoted** (`"FrontEnd"`, `"BackEnd"`, etc.)

---

## 🔹 Needed Output
```
Array
(
[FrontEnd] => Array
(
[0] => HTML
[1] => CSS
[JS] => Array
(
[Vuejs] => Array
(
[2] => v2
[3] => v3
)
      [0] => Reactjs
      [1] => Svelte
    )
)

[BackEnd] => Array
(
[0] => PHP
[1] => MySQL
[2] => Security
)

[0] => Git
[1] => Github
[Testing] => Array
(
[0] => Unit Testing
[1] => End To End
[2] => Integration
)
)
```

---

## 🔹 Original Code (Incorrect)
```php
<?php

echo array(
 [FrontEnd] => array
    (
      [0] => "HTML",
      [1] => "CSS",
      [JS] => Array
        (
          [Vuejs] => array
            (
              [2] => v2,
              [3] => v3,
            ),

          [0] => "Reactjs",
          [1] => "Svelte",
        )
        ),

  [BackEnd] => array
    (
      [0] => "PHP",
      [1] => "MySQL",
      [2] => "Security",
    ),

  [0] => "Git",
  [1] => "Github",
  [Testing] => array
    (
      [0] => "Unit Testing",
      [1] => "End To End",
      [2] => "Integration",
    ),
);
```


### Issues in the code:

- Using echo on an array → PHP cannot print arrays with echo.

- Array keys like `FrontEnd`, `BackEnd`, `JS`, `Vuejs`, `Testing` are unquoted → treated as constants → errors.

Some extra commas in values (e.g., "v2,") → may cause unexpected results.

## 🔹 Solution
```php

<?php
// Elzero Web School
// PHP - Basics
// Lesson 08

print_r(array(
    "FrontEnd" => array(
        "HTML",
        "CSS",
        "JS" => array(
            "Vuejs" => array(
                2 => "v2",
                3 => "v3",
            ),
            0 => "Reactjs",
            1 => "Svelte",
        ),
    ),

    "BackEnd" => array(
        0 => "PHP",
        1 => "MySQL",
        2 => "Security",
    ),

    0 => "Git",
    1 => "Github",

    "Testing" => array(
        0 => "Unit Testing",
        1 => "End To End",
        2 => "Integration",
    ),
));
```

## 🔹 Explanation

- `print_r()` is used to display nested arrays in a readable format.

- All string keys are quoted to avoid PHP treating them as undefined constants.

- The array is structured to match the required output format exactly, including numeric keys and nested arrays.

### ✅ Notes

- echo cannot print arrays directly.

- Quoting array keys is mandatory for string keys.

- `print_r()` prints the array with proper indentation and structure.

## 🔹 Expected Output
```
Array
(
  [FrontEnd] => Array
    (
      [0] => HTML
      [1] => CSS
      [JS] => Array
        (
          [Vuejs] => Array
            (
              [2] => v2
              [3] => v3
            )

          [0] => Reactjs
          [1] => Svelte
        )
    )

  [BackEnd] => Array
    (
      [0] => PHP
      [1] => MySQL
      [2] => Security
    )

  [0] => Git
  [1] => Github
  [Testing] => Array
    (
      [0] => Unit Testing
      [1] => End To End
      [2] => Integration
    )
)
```