class Node:
    def __init__(self, data):
        self.data = data
        self.next = None

class LinkedList:
    def __init__(self):
        self.head = None

    def add(self, data):
        new_node = Node(data)
        
        if self.head is None:
            # If the list is empty, make the new node the head
            self.head = new_node
        else:
            # Traverse to the end of the list
            current = self.head
            while current.next is not None:
                current = current.next

            # Append the new node to the last node
            current.next = new_node
    
    def delete(self, data):
        if self.head is None:
            # If the list is empty, nothing to delete
            return

        if self.head.data == data:
            # If the head node contains the data to delete, update the head
            self.head = self.head.next
            return

        # Traverse the list to find the node to delete
        current = self.head
        prev = None
        while current is not None:
            if current.data == data:
                # Found the node to delete, update the pointers to remove it
                prev.next = current.next
                return

            prev = current
            current = current.next