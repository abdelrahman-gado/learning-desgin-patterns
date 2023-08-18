# Programming to an interface
- "Program to an interface" means "Program to a supertype"
- The declared type of the variable should be a supertype, usually an abstract class or interface
- The objects assigned to those variables can be of any concrete implementation of the supertype.
- That make us can use the interface types on variables, return types of the methods or parameter types in a method.
- The point is to exploit polymorphism by programming to a supertype.


* Note::
  * you want to utilize the abstract classes when abstract class have a relationship between other classes
  * you want to utilize the interfaces to establish a relationship between unrelated classes (like interface `comparable` or `cloneable`)
