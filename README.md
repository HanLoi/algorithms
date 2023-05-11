# algorithms
Algorithms with example


## Big-o

This branch contain explication of how calcul Big-o with some example

### Utility of Big O

Big-O notation calculation is a method for analyzing the complexity of an algorithm in terms of the size of its input. It is used to evaluate the performance of an algorithm in terms of execution time and memory usage.

To calculate big-O, we determine the upper bound of an algorithm's execution time, based on the size of the input. We use the worst-case scenario, where the input is as large as possible. We then eliminate constant terms and lower-order terms, and keep only the dominant term, which determines the algorithm's complexity.

We express the complexity of an algorithm using big-O notation, which uses the notation O(f(n)), where f(n) is the function that describes the algorithm's complexity in terms of the input size n. For example, if an algorithm has a complexity of n², we can write it as O(n²).

### Types of algorithmic complexity

There are several types of algorithmic complexity, including:

* Constant complexity: An algorithm has constant complexity if the execution time does not depend on the size of the input.

** Example: Accessing an element in an array takes the same amount of time, regardless of the size of the array. Therefore, the time complexity of array access is O(1).

* Logarithmic complexity: An algorithm has logarithmic complexity if the number of operations grows proportionally to the logarithm of the input size.

** Example: Searching for a value in a sorted array using binary search requires O(log n) time complexity, where n is the size of the array.

* Linear complexity: An algorithm has linear complexity if the number of operations grows proportionally to the input size.

** Example: Finding the maximum value in an unsorted array requires O(n) time complexity, where n is the size of the array.

* Common polynomial time complexity classes in Big O notation are:

** Quadratic complexity: An algorithm has quadratic complexity if the number of operations grows proportionally to the square of the input size.

*** Example: Sorting an array using insertion sort requires O(n^2) time complexity, where n is the size of the array.

** Cubic complexity. The running time of the algorithm grows proportionally to the cube of the size of the input. O(n^3)
** Polynomial time complexity of degree k, where k is a fixed constant. O(n^k)

* Exponential complexity: An algorithm has exponential complexity if the number of operations grows exponentially with the input size.

** Example: Solving the traveling salesman problem by trying every possible combination of cities requires O(2^n) time complexity, where n is the number of cities to visit.

* Factorial complexity : An algorithm with factorial time complexity where n is the size of the set.

** Example : checking every possible permutation of a set of elements, which has a running time of O(n!) where n is the size of the set.

### rules of simplification :

* Sum rule: If the Big O is the sum of multiple terms, only keep the largest term, drop the rest.
** Example :
*** O(n+1000) => O(n)
*** O(n^2 + n) => O(n^2)
*** O(n + 500 + n^3 + n^2) => O(n^3)

* Product rule: If the Big O is the product of multiple terms, drop the constant terms.
** Example : 
*** O(4*n) => O(n)
*** O(512*n) => O(n)
*** O(n/3) => O(1/3*n) => O(n)
*** O(5*n*n) => O(n*n) => O(n^2)
*** O(765) => O(1)


* Example with product rule + sum rule :
** O(5n^2 + 100n + 17) => O(n^2 + n + 1) => O(n^2)
** O( (n/3)^6 + 10n ) => O ( (n*1/3)^6 + n ) => O(n^6 + n) => O(n^6)


* Power rule: If a function has a big-O expression that contains a power, you can replace the power with a polynomial function. This means that if f(n) = O(n^k), then f(n) can be replaced with a polynomial function of degree k.

* Substitution rule: If a function has a big-O expression that contains another function which itself is in big-O notation, you can replace that function with its big-O expression. This means that if f(n) = O(g(n)) and g(n) = O(h(n)), then f(n) = O(h(n)).

### Big-O Cheat Sheet 

https://www.bigocheatsheet.com/