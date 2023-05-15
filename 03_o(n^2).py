def recursiveFunction(n):
    if n <= 0:
        return
    for i in range(n):
        print(i)
    recursiveFunction(n - 1)

# time : o(n^2) space : o(n)