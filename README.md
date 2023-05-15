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

### recursive function (factorial) in python (01)

`def factorial(n):
    # Base case: factorial of 0 or 1 is 1
    if n == 0 or n == 1:
        return 1
    # Recursive case: factorial of n is n * factorial(n-1)
    else:
        return n * factorial(n-1)`

## Complex recursion explained

### example of a recursive function from less to more complex

#### Why is impossible to get a recursive function with O(1) complexity

It is impossible to have a constant time complexity of O(1) with a recursive function because recursion involves repeated function calls and processing of subproblems. Each recursive call adds overhead in terms of function call stack and resource consumption. The number of recursive calls grows with the input size, meaning the algorithm's runtime scales with the size of the problem. Consequently, the time complexity of recursive functions is typically dependent on the input size and cannot be a constant O(1), which implies a fixed number of operations regardless of the input.

#### recursive function with O(n) complexity

`def recursiveTraversal(arr, index):
    if index >= len(arr):
        return
    print(arr[index])
    recursiveTraversal(arr, index + 1)`

In this example, we have an input array arr and an index parameter representing the current index being traversed. The recursiveTraversal function recursively traverses the array and prints each element.

Let's analyze the complexity of this recursive function:

* The function performs a constant number of operations (printing the element) for each index in the array.
* The number of recursive calls is directly proportional to the number of elements in the array, which is n.
* Therefore, the total number of operations performed by the function is directly proportional to the size of the input array, resulting in a linear time complexity of O(n).

As the index parameter increases from 0 to n-1, the function visits each element in the array exactly once, resulting in a linear traversal.

It's important to note that the recursive function's stack space usage also increases linearly with the input size n, which should be taken into consideration when dealing with very large arrays or when recursion depth becomes a concern.

In summary, this recursive function demonstrates linear time complexity O(n) as it performs a constant number of operations for each element in the array.

#### recursive function with O(log n) complexity | 02

Example with binary search function :

`def binarySearch(arr, target, low, high):
    if low > high:
        return -1
    mid = (low + high) // 2
    if arr[mid] == target:
        return mid
    elif arr[mid] < target:
        return binarySearch(arr, target, mid + 1, high)
    else:
        return binarySearch(arr, target, low, mid - 1)`

Here's how binary search works:

* Given a sorted array or list of elements and a target value to search for.
* Set two pointers, one at the beginning of the array (left pointer) and one at the end (right pointer).
* While the left pointer is less than or equal to the right pointer, repeat the following steps:
    1. Calculate the middle index of the array by adding the left and right pointers and dividing by 2 (integer division).
    2. If the value at the middle index is equal to the target value, return the middle index as the position of the target value.
    3. If the value at the middle index is greater than the target value, set the right pointer to be the index immediately to the left of the middle index.
    4. If the value at the middle index is less than the target value, set the left pointer to be the index immediately to the right of the middle index.
* If the target value is not found after the entire array has been searched, return -1 or any other appropriate value to indicate that the target value is not present in the array.

In this example, arr is a sorted array, target is the element we want to find, low is the lowest index to consider, and high is the highest index to consider.

Let's analyze the complexity of this binary search algorithm:

1. In each recursive call, the algorithm compares the target element with the middle element of the current range.
2. If the middle element matches the target, the algorithm returns the index.
3. If the middle element is less than the target, the algorithm recursively calls itself with the right half of the array.
4. If the middle element is greater than the target, the algorithm recursively calls itself with the left half of the array.

By dividing the search range in half with each recursive call, the algorithm effectively eliminates half of the remaining elements at each step. This division continues until the target element is found or until the search range becomes empty.

The number of recursive calls required to find the target element is proportional to the logarithm of the size of the input n, which is the length of the array.

Hence, the time complexity of this binary search algorithm is O(log n). As the size of the input (n) increases, the number of recursive calls and the runtime grow logarithmically.

Binary search is a highly efficient algorithm for searching in sorted arrays due to its logarithmic time complexity, making it suitable for large input sizes.

It's important to note that binary search requires the input array to be sorted. If the array is not sorted, additional steps will be needed to sort it, resulting in a different time complexity.

#### recursive function with O(n log n) complexity 

Example with Mergesort algorithme :


`def mergeSort(arr):
    if len(arr) <= 1:
        return arr

    mid = len(arr) // 2
    left_half = mergeSort(arr[:mid])
    right_half = mergeSort(arr[mid:])
    
    return merge(left_half, right_half)

def merge(left, right):
    merged = []
    left_index = right_index = 0

    while left_index < len(left) and right_index < len(right):
        if left[left_index] <= right[right_index]:
            merged.append(left[left_index])
            left_index += 1
        else:
            merged.append(right[right_index])
            right_index += 1

    merged.extend(left[left_index:])
    merged.extend(right[right_index:])
    return merged`

In this example, the mergeSort function takes an input array arr and recursively divides it into smaller subarrays until the base case is reached (when the array has only one element or is empty). Then, it merges the sorted subarrays back together using the merge function.

Let's analyze the complexity of this merge sort algorithm:

* The mergeSort function divides the input array in half with each recursive call, resulting in a depth of recursion that is logarithmic with respect to the input size n. This step contributes to the O(log n) factor.
* The merge function merges two sorted subarrays of size n/2. The merging process compares and combines the elements from both subarrays. Since the merging step takes O(n) time for two subarrays of size n/2, it contributes to the O(n) factor.
* Combining these factors, we get a total time complexity of O(n log n) for merge sort.

Therefore, as the size of the input array (n) increases, the number of recursive calls increases logarithmically, and the merging step takes linear time. The overall runtime of merge sort grows in a near-linear, or O(n log n), fashion.

Merge sort is an efficient sorting algorithm that is often used for large input sizes due to its O(n log n) time complexity. Its divide-and-conquer approach and ability to handle large datasets make it a popular choice for sorting applications.
####  recursive function with O(n^2) complexity

`def recursiveFunction(n):
    if n <= 0:
        return
    for i in range(n):
        print(i)
    recursiveFunction(n - 1)`

In this example, we have a recursive function that takes an input n. The base case is when n is less than or equal to 0, at which point the function returns. Otherwise, the function enters the recursive case, where it performs a loop from 0 to n-1 and then makes a recursive call with the input n-1.

Let's analyze the complexity of this recursive function:

* The recursive function is called n times before reaching the base case, as it starts with the initial value of n and decrements by 1 in each recursive call.
* In each recursive call, the loop runs n times, as it iterates from 0 to n-1.

Therefore, the total number of iterations can be computed as the sum of the integers from 1 to n, which is given by the formula n * (n + 1) / 2. Since we are only interested in the dominant term, the complexity is O(n^2).

It's worth noting that recursive functions with O(n^2) complexity can be inefficient for large values of n due to the quadratic growth in the number of iterations. If possible, consider optimizing the algorithm by exploring alternative approaches or employing memoization techniques to avoid redundant computations.

#### Recursive function with O(2^n) complexity

`function fibonacci(n):
    if n <= 1:
        return n
    return fibonacci(n-1) + fibonacci(n-2)`

(The Fibonacci (03) sequence is a classic example with exponential complexity. Each recursive call generates two more recursive calls, leading to a runtime of O(2^n).)

Same as 

`def recursiveFunction(n):
    if n <= 0:
        return
    recursiveFunction(n - 1)
    recursiveFunction(n - 2)`

In this example, we have a recursive function that takes an input n. The base case is when n is less than or equal to 0, at which point the function returns. Otherwise, the function enters the recursive case, where it makes two recursive calls, each with the input n-1.

Let's analyze the complexity of this recursive function:

* For each recursive call, the function makes two additional recursive calls, resulting in a branching factor of 2.
* As a result, the number of function calls doubles with each recursive level.

Therefore, the total number of function calls can be computed as 2^n. Each level of recursion doubles the number of function calls, leading to an exponential growth pattern.

Hence, the time complexity of this recursive function is O(2^n). As the input size (n) increases, the number of function calls grows exponentially.

It's important to note that exponential time complexity can quickly become computationally infeasible for larger input sizes. If possible, consider optimizing the algorithm by exploring alternative approaches, such as dynamic programming or memoization, to reduce the exponential growth and improve the efficiency of the solution.

#### Recursive function with O(n!) complexity (permutations) 

`function permutations($string) {
    $length = strlen($string);
    if ($length == 1) {
        return [$string];
    }
    $result = [];
    for ($i = 0; $i < $length; $i++) {
        $firstChar = $string[$i];
        $remainingChars = substr($string, 0, $i) . substr($string, $i+1);
        $subPermutations = permutations($remainingChars);
        foreach ($subPermutations as $perm) {
            $result[] = $firstChar . $perm;
        }
    }
    return $result;
}`

In this example, we have a recursive function that takes an input n. The base case is when n is less than or equal to 1, at which point the function returns 1. Otherwise, the function enters the recursive case, where it performs a loop from 0 to n-1 and recursively calls itself with the input n-1. The results of the recursive calls are accumulated and returned.

Let's analyze the complexity of this recursive function:

* In each recursive call, the function performs a loop from 0 to n-1.
* The number of iterations in the loop decreases by 1 with each recursive call.
* Therefore, the total number of iterations can be computed as the product of the integers from 1 to n, which is n! (n factorial).

Hence, the time complexity of this recursive function is O(n!). As the input size (n) increases, the number of iterations grows factorially, resulting in a rapidly increasing runtime.
### Tips

When dealing with recursive functions, managing complexity is crucial to ensure efficient and correct execution. Here are some tips:

1. Understand the problem: Gain a clear understanding of the problem you are trying to solve and how a recursive approach can be applied. Analyze the problem's requirements, constraints, and expected input/output.

2. Define the base case: Every recursive function must have a base case, which is the simplest scenario that can be solved directly without further recursion. Make sure to identify the base case(s) accurately, as they determine when the recursion should stop.

3. Identify the recursive case: Determine how the problem can be broken down into smaller subproblems. Identify the recursive case(s) that involve solving a smaller or simpler version of the original problem. It is essential to make progress toward the base case with each recursive call.

4. Analyze the recursion tree: Visualize the recursion tree by tracing the execution of recursive calls. This helps in understanding the pattern of function calls and how they contribute to the overall complexity of the algorithm.

5. Avoid redundant calculations: Recursive functions can sometimes perform redundant calculations due to repeated calls with the same inputs. To mitigate this, consider using memoization (caching intermediate results) or dynamic programming techniques to store and reuse computed values.

6. Optimize recursive calls: Optimize the parameters passed to recursive calls. Ensure that unnecessary data is not passed down the recursion stack, as it can increase memory usage and slow down the function. Pass only the required information to each recursive call.

7. Analyze time and space complexity: Analyze the time complexity (how the runtime grows with input size) and space complexity (how the memory usage grows with input size) of your recursive function. This analysis helps in understanding the efficiency and scalability of your algorithm.

8. Test with large inputs: Test your recursive function with larger inputs to identify any performance issues or potential stack overflow errors. This will help you assess the practical scalability of your solution.

9. Consider alternative approaches: Recursive solutions are not always the most efficient or appropriate for every problem. Evaluate whether an iterative (loop-based) approach or a different algorithmic technique might be more suitable for the problem at hand.

10. Profile and optimize: If you encounter performance issues, use profiling tools to identify bottlenecks and optimize your code. Look for opportunities to reduce unnecessary recursion, optimize data structures, or find alternative algorithms that can achieve the same result with better performance.

Remember, understanding the problem, designing efficient recursion, and optimizing where necessary are key aspects of managing the complexity of recursive functions effectively.