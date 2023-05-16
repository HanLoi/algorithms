# algorithms
Algorithms with example
# Linked list

## Introduction 
A linked list is a data structure used for organizing and storing a collection of elements called nodes. Unlike arrays, which store elements in contiguous memory locations, a linked list stores elements in separate objects called nodes, where each node contains a reference to the next node in the list.

A node in a linked list consists of two parts: the data (which can be any type of information you want to store) and a pointer/reference to the next node in the list. The pointer/reference connects one node to the next, forming a chain-like structure.

Here's a simple example to illustrate the concept:

mathematica

Node             Node             Node             Node
+-------+       +-------+       +-------+       +-------+
| Data  |  ---> | Data  |  ---> | Data  |  ---> | Data  |
|       |       |       |       |       |       |       |
| Next  |       | Next  |       | Next  |       | Next  |
+-------+       +-------+       +-------+       +-------+

In this example, each node contains some data and a reference to the next node. The last node in the list typically has a null or empty reference to indicate the end of the list.

Linked lists offer several advantages and use cases. Since each node only requires memory for its data and a reference, they can dynamically grow or shrink as elements are added or removed. This flexibility is particularly useful when the number of elements is unknown or changes frequently. Additionally, linked lists provide efficient insertion and deletion operations at the beginning or end of the list.

However, linked lists also have some drawbacks. Random access to elements (e.g., accessing the nth element) is not as efficient as in arrays because you need to traverse the list from the beginning. Moreover, extra memory is required to store the references, increasing the overall memory usage compared to arrays.

In brief :

* Advantages of Linked Lists:

1. Dynamic Size: Linked lists can grow or shrink dynamically, meaning they can efficiently handle elements being added or removed without needing to allocate a fixed amount of memory in advance. This flexibility is particularly useful when the number of elements is unknown or changes frequently.

2. Insertion and Deletion: Insertion and deletion operations can be performed efficiently in a linked list, especially when adding or removing elements at the beginning or end of the list. These operations involve changing a few pointers, making them faster compared to arrays, where shifting elements may be required.

3. Memory Efficiency: Linked lists use memory efficiently since they only require memory for the elements themselves and the pointers/references connecting them. This can be advantageous when memory is a limited resource.

Disadvantages of Linked Lists:

1. Lack of Random Access: Unlike arrays, linked lists do not provide direct or efficient access to elements at arbitrary positions. To access a particular element, you need to traverse the list from the beginning, which can be time-consuming, especially for large lists. Random access is a key strength of arrays.

2. Extra Memory Overhead: Linked lists require additional memory to store the pointers or references linking the nodes. This overhead increases the overall memory usage compared to arrays. In some cases, the additional memory usage can be significant, especially for small-sized elements.

3. Sequential Access: While linked lists excel at insertion and deletion, they are not optimal for tasks that require sequential access to elements. Traversing a linked list sequentially can be slower compared to arrays because the elements are not stored in contiguous memory locations.

It's important to consider these advantages and disadvantages when choosing a data structure for a particular application. Linked lists are often preferred when frequent insertion and deletion operations are required, or when the size of the collection is unpredictable. However, if random access or memory efficiency is a priority, other data structures like arrays may be more suitable.

# Structure of linked list

* How a node is made :

A node is generaly made this way (Python) :

```
class Node:
    def __init__(self, data):
        self.data = data
        self.next = None
```

1. data: This attribute holds the actual data or value of the node. You can store any type of data in this attribute.

2. next: This attribute is a reference to the next node in the linked list. Initially, it is set to None to indicate that there is no next node.

With this Node class, you can create nodes and link them together to form a linked list. Here's an example of how you can use the Node class to create a linked list with three nodes:

```
# Create nodes
node1 = Node(10)
node2 = Node(20)
node3 = Node(30)

# Link nodes together
node1.next = node2
node2.next = node3
```

In this example, we create three nodes (node1, node2, and node3) with values 10, 20, and 30, respectively. We then link the nodes together by assigning the next attribute of each node to the next node in the list.

* How add a node :

In this example, we have a LinkedList class that has an add method to add a new node to the linked list. 

```
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
```

In this example, we have a LinkedList class that has an add method to add a new node to the linked list. Here's how it works:

1. First, we create a new node using the provided data.
2. If the linked list is empty (i.e., the head is None), we make the new node the head of the list. This handles the case when the list is initially empty.
3. If the list is not empty, we need to traverse to the end of the list to find the last node.
    * We start at the head of the list (current = self.head).
    * We iterate through the list by following the next references of each node until we reach the last node (while current.next is not None).
    * Inside the loop, we update current to point to the next node in the list (current = current.next).
4. Once we reach the last node, we append the new node to the list by assigning the next attribute of the last node to the new node (current.next = new_node).

This add function ensures that the new node is inserted at the end of the linked list. If the list is empty, it becomes the first node (head), and if the list is not empty, it is appended after the last node.

* How to delete a node :

If we tke the previous class LinkedList, we add the delete function like this way :

```
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
```

So, this additional delete method added to the LinkedList class is use to remove a node with the specified data. Here's how it works:

1. First, we check if the linked list is empty. If it is, there is nothing to delete, so we return from the function.
2. If the head node contains the data to delete (i.e., self.head.data == data), we update the head to the next node (self.head = self.head.next). This effectively removes the head node from the list.
3. If the data to delete is not in the head node, we need to traverse the list to find the node to delete.
    * We maintain two pointers: current and prev.
    * We start at the head of the list (current = self.head) and set prev to None.
    * We iterate through the list, checking each node's data against the specified data (while current is not None).
    * If we find the node to delete (i.e., current.data == data), we update the pointers to remove it:
        * Set prev.next to current.next to bypass the node we want to delete.
        * Return from the function after deletion.
    * If the node is not found, we move prev and current to the next nodes in the list (prev = current and current = current.next).

This delete function ensures that the specified node is removed from the linked list while maintaining the integrity of the list.

