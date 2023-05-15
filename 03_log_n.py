# Recursive function of factorial

def factorial(n):
    # Base case: factorial of 0 or 1 is 1
    if n == 0 or n == 1:
        return 1
    # Recursive case: factorial of n is n * factorial(n-1)
    else:
        return n * factorial(n-1)

print(factorial(5)) # 120
# time : O(n) / space : O(n)

#----------------------------------------------------------------------------------

# binary search with iterration
def binary_search(arr, target):
    left = 0
    right = len(arr) - 1

    while left <= right:
        mid = (left + right) // 2
        
        if arr[mid] == target:
            return True # target found
        elif arr[mid] < target:
            left = mid + 1 # search right half
        else:
            right = mid - 1 # search left half

    return False # target not found

# example usage
arr = [1, 3, 5, 7, 9]
target = 5

print(binary_search(arr, target)) # true

# binary search with recursive function
def binary_search(arr, target, left=0, right=None):
    if right is None:
        right = len(arr) - 1

    if left > right:
        return False  # target not found

    mid = (left + right) // 2
    
    if arr[mid] == target:
        return True  # target found
    elif arr[mid] < target:
        return binary_search(arr, target, mid + 1, right)  # search right half
    else:
        return binary_search(arr, target, left, mid - 1)  # search left half


