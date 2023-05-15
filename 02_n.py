
def recursiveTraversal(arr, index):
    if index >= len(arr):
        return
    print(arr[index])
    recursiveTraversal(arr, index + 1)

# time : O(n) | space : O(1) 