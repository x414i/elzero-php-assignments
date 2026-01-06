# Lesson 12 – PHP Basics Assignment 04

## 📝 Description
This assignment demonstrates how to use **PHP Predefined Variables (Superglobals)**  
to retrieve important **server and system information**.

The goal is to print:
1. Document Root
2. Server Name
3. System Root
4. OpenSSL Configuration file path

---

## 🔹 Solution
```php
<?php
// Elzero Web School
// PHP - Basics
// Lesson 12

echo $_SERVER['DOCUMENT_ROOT'] . "<br>";
echo $_SERVER['SERVER_NAME'] . "<br>";
echo $_SERVER['SystemRoot'] . "<br>";
echo $_SERVER['OPENSSL_CONF'];
```

---

## 🔍 Explanation

### 1️⃣ Document Root

```php
$_SERVER['DOCUMENT_ROOT']
```

* Returns the root directory of the project (e.g. `C:/xampp/htdocs`)

---

### 2️⃣ Server Name

```php
$_SERVER['SERVER_NAME']
```

* Returns the server host name (e.g. `localhost`)

---

### 3️⃣ System Root

```php
$_SERVER['SystemRoot']
```

* Returns the Windows system root directory (e.g. `C:\WINDOWS`)
* Available on Windows-based servers

---

### 4️⃣ OpenSSL Configuration

```php
$_SERVER['OPENSSL_CONF']
```

* Returns the path to the OpenSSL configuration file used by PHP

---

## ✅ Expected Output

```
C:/xampp/htdocs
localhost
C:\WINDOWS
C:/xampp/apache/bin/openssl.cnf
```

---

## 🧠 Key Concepts Used

* PHP Superglobals
* `$_SERVER` predefined variable
* Server & system environment values

