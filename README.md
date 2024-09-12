The Reverse Hash and PIN Cracking Application
=============================================

This application demonstrates a simple brute force attack to "reverse" an MD5 hash for two types of inputs:

1. A two-character lower case string (as in the original version).
2. A four-digit PIN (new feature).

For the two-character string, it uses two nested loops and tests all 26*26 combinations of two lower case letters, computes their MD5 hashes, and checks if the computed hash matches the input hash.

For the four-digit PIN, the application generates all 10,000 possible PINs (0000 to 9999), computes their MD5 hashes, and checks for a match with the input hash.

You can try out this application at:

http://www.wa4e.com/code/crack

This lesson shows how easy it is to crack short passwords or PINs with a limited character set. While this brute force attack works for small inputs, it becomes impractical as the password length or complexity increases.

A more advanced technique to reverse hashes that uses a large precomputed dataset of hashes, called "Rainbow Tables", is not implemented in this application. This application demonstrates a brute force approach only.

