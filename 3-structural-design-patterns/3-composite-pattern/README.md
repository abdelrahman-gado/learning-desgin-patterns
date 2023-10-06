# Composite Design Pattern

- The Composite Design Pattern composes objects into tree structures to represent part or whole hierarchies
- let clients treat individual objects and compositions of objects uniformly.
- A composite is an object designed as a composition of one-or-more similar objects all exhibits similar functionality
  - A group of objects that is treated the same way as a single instance of the same type of object.
- when we have many objects with common functionalities we create a composite object
  - create a class that contains a group of its own objects

- allows us to build structures of objects in the form of trees
  - contains both compositions of objects and individual objects

- The main purpose of the composite is to allow you manipulate a single instance as you would manipulate a group of them.

- Any Tree Structure in CS follows the same concept as composite.

## When to use the composite pattern
1. when the clients needs to ignore the difference between compositions of objects and individual objects
2. when you are worried about memory usage
   1. less number of objects reduces the memory usage.
3. when efficiency is a concern
4. when you are forced to maintain child ordering.


## Benefits
1. make it easy to add new kinds of components
2. clients don't have to know if they are dealing with a leaf or a composite

## Disadvantages
1. makes it harder to restrict the type of components of a composite.


## Usage
1. the client uses the component class interface to interact with objects in the composition structure
2. if the recipient is a leaf then request is handled directly.
3. if the recipient is a composite, then it usually forwards request to its child components
   1. also may perform additional operations before and after forwarding.

## Note
- the composite pattern breaks the single responsibility principle.