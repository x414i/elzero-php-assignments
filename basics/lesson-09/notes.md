# Lesson 09 – PHP Basics 

## 📝 Description
This assignment focuses on **using PHP variables inside an HTML page**.  
The goal is to make the text `"Elzero Courses"` **dynamic**, so it can be changed easily in the future by modifying **one variable**.

---

## 🔹 Problem / Original HTML
```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Elzero Courses">
    <title>Welcome To Elzero Courses</title>
  </head>
  <body>
    <h1>Elzero Courses</h1>
    <p>Here In Elzero Courses We Provide Front-End And Back-End Courses</p>
    <hr>
    <div>Elzero Courses Is The What You Need.</div>
    <footer>All Right Reserved To Elzero Courses</footer>
  </body>
</html>
```
## ❌ Problem

- The text "Elzero Courses" is hard-coded multiple times in the page.
- Any future update would require changing it in every place manually → error-prone and inefficient.

## 🔹 Solution Using PHP Variables
```
<?php
// Elzero Web School
// PHP - Basics
// Lesson 09

$name = "Elzero Courses"; // The variable contains the dynamic text
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $name; ?>">
    <title>Welcome To <?php echo $name; ?></title>
  </head>
  <body>
    <h1><?php echo $name; ?></h1>
    <p>Here In <?php echo $name; ?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?php echo $name; ?> Is The What You Need.</div>
    <footer>All Right Reserved To <?php echo $name; ?></footer>
  </body>
</html>
```
## 🔍 Explanation

- Defined a variable $name with the text `"Elzero Courses"`.

- Replaced all hard-coded instances of `"Elzero Courses"` in the HTML with `<?php echo $name; ?>`.

- Now, updating the page only requires changing the value of `$name`, making it dynamic and maintainable.

## ✅ Key Concepts Used

- PHP variables to store strings

- `<?php echo $variable; ?>` to insert variables inside HTML

- Separation of content from HTML structure for easier maintenance

### 🔹 Output in Browser
```
<meta name="description" content="Elzero Courses">
<title>Welcome To Elzero Courses</title>
<h1>Elzero Courses</h1>
<p>Here In Elzero Courses We Provide Front-End And Back-End Courses</p>
<div>Elzero Courses Is The What You Need.</div>
<footer>All Right Reserved To Elzero Courses</footer>

```
All occurrences of `"Elzero Courses"` are dynamically generated from the $name variable.
