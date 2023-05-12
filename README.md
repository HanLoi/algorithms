# algorithms
Algorithms with example
## Recursive function

Recursive functions are functions that call themselves within their own definition. They are used in situations where a problem can be divided into several similar subproblems, which can be solved by calling the same function on the subproblems.

Recursive functions are particularly useful when a problem can be broken down into smaller, similar sub-problems that can be solved by calling the same function. In general, recursive functions are used when:

* The problem can be divided into simpler sub-problems of the same type.
* The problem can be solved by combining solutions to the sub-problems.
* There is a base case that is simple enough to solve directly.

For example, recursive functions can be used in a variety of applications such as:

* Traversing a tree or a graph data structure.
* Solving problems related to combinatorics, such as permutations and combinations.
* Implementing sorting and searching algorithms, such as quicksort or binary search.
* Implementing mathematical functions such as the Fibonacci sequence or the factorial function.

In general, recursive functions can provide a more elegant and simpler solution to some types of problems. However, it's important to keep in mind that recursive functions can use a lot of memory, and they can also be slower than iterative solutions for some problems. Therefore, it's important to carefully consider whether a recursive function is the best approach for a particular problem.

## Anatomy of recursive function

The anatomy of a recursive function typically consists of two main components:

* The base case: This is the simplest case of the problem that can be solved directly, without further recursion. The base case is necessary to prevent the function from calling itself infinitely and causing a stack overflow error. In other words, the base case is the stopping condition for the recursion.

* The recursive case: This is the case where the function calls itself to solve a smaller sub-problem of the original problem. In the recursive case, the problem is broken down into one or more smaller sub-problems that can be solved by calling the same function recursively. The recursive case typically involves passing a modified version of the original input to the recursive call, in order to solve the smaller sub-problem.

Here is an example of a recursive function to calculate the factorial of a number:

### recursive function (factorial) in python

def factorial(n):
    # Base case: factorial of 0 or 1 is 1
    if n == 0 or n == 1:
        return 1
    # Recursive case: factorial of n is n * factorial(n-1)
    else:
        return n * factorial(n-1)


## Use of recursive function for binary search

Binary search is a searching algorithm that operates on a sorted list or array of elements. It works by repeatedly dividing the search interval in half, until the target value is found or the search interval is empty.

Here's how binary search works:

* Given a sorted array or list of elements and a target value to search for.
* Set two pointers, one at the beginning of the array (left pointer) and one at the end (right pointer).
* While the left pointer is less than or equal to the right pointer, repeat the following steps:
    1. Calculate the middle index of the array by adding the left and right pointers and dividing by 2 (integer division).
    2. If the value at the middle index is equal to the target value, return the middle index as the position of the target value.
    3. If the value at the middle index is greater than the target value, set the right pointer to be the index immediately to the left of the middle index.
    4. If the value at the middle index is less than the target value, set the left pointer to be the index immediately to the right of the middle index.
* If the target value is not found after the entire array has been searched, return -1 or any other appropriate value to indicate that the target value is not present in the array.

Binary search has a time complexity of O(log n), where n is the number of elements in the array or list. This is because the search interval is halved in each iteration, and the algorithm only needs to search half of the previous search interval in each iteration. This makes binary search much more efficient than linear search for large arrays or lists.