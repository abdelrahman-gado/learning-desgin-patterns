# Dependency Inversion Principle (DIP)

- Dependency inversion is a principle that states that entities must depend on abstractions and not on concretions.
- The goal is to reduce the dependencies on concrete classes.
- "The high level modules should not depend on low level module; Both should depend on abstraction. Abstraction doesn't depend on details, Details depend on abstraction"
- We invert the dependency tree to depend on abstraction instead of details.

1. What are the abstraction?
   - |> abstraction is the interface 

2. What are low level modules?
   - |> Any class implementing the abstraction. it contains its own details on how to implement it. 

3. What are high level modules?
   - |> the classes that digest and accept the abstraction. 

So,

- low level module --> implement interface

- high level module --> accept interface in a method

- Both low level & high level must depend on the interface.

## OO guidelines for adhering DIP
- no variable should hold a reference to a concrete class.
- no class should subclass from a concrete class.