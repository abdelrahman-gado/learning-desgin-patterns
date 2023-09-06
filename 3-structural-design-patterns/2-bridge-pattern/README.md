# Bridge Design Pattern

- The bridge design pattern will decouple an abstraction from its implementation so that the two can vary independently
  - decouples implementation class and abstract class by providing a bridge structure between them.

- decoupling means to have things behave independently from each other.
- abstraction is hiding details.

- this pattern helps us to make concrete class functionalities independent from the interface implementer class


## When to use the bridge pattern
- when the implementation must be switched or selected at run-time.
- when both the abstraction and their implementation must be extensible by subclassing.
- when changes in the implementation of an abstraction should have no impact in clients
- when you hav a ton of implementation classes.

## Advantages
- decouples an implementation from abstraction.
- abstraction and implementation can be extended independently.
- changes to the concrete abstraction classes do not affect the client.

## Disadvantages
- increase complexity.


## Note
- the adapter pattern is geared towards making unrelated classes work together -> usually applied to systems after they have been designed.
- In contrast, the bridge is used up-front in a design.

## Implementation Overview
- there are 2 parts in the bridge design pattern implementation:
    1. Abstraction -> an interface or an abstract class
    2. Implementation -> an interface or abstract class

- allows the abstraction and the implementation to be developed independently.

- the abstraction contains a reference of the implementer.

- the children if the implementer are concrete implementers.

- the implementation of bridge pattern follows the notion to prefer composition over inheritance. 

- the bridge pattern allows us to vary the two hierarchies independently.