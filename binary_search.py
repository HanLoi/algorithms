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
