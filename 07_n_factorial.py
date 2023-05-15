def permute(elements):
    if len(elements) <= 1:
        return [elements]
    else:
        result = []
        for i in range(len(elements)):
            m = elements[i]
            remaining_elements = elements[:i] + elements[i+1:]
            for p in permute(remaining_elements):
                result.append([m] + p)
        return result
    
# time : O(n!) | space : ...