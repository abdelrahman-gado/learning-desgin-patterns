# Adapter Pattern
- the adapter pattern converts an interface of a class into another interface that clients expect.
  - works as a bridge between two incompatible interfaces.
  - also known as a "wrapper"

- the adapter acts to decouple the client from the implemented interface.
  - client does not need to be modified each time it needs to operate against a different interface.

- Software examples:
  - Iterator interface
  - Enumeration interface

## when to use the adapter pattern
1. When you want to use an existing class, and its interface does not match the one you need.
2. when you want to create a reusable class that cooperates with unrelated classes.

## There are two ways to implement a Adapter:
   1. Object Adapter Implementation (composition)
   2. Class Adapter Implementation (multiple inheritance)