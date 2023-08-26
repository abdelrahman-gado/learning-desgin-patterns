# Builder Pattern

- The builder design pattern separates the construction of a complex object from its representation.
- uses the same construction processes to create the same object. however, these processes can create different representations of the object.
- useful when creating the object is very complex and is independent of the assembly of the parts of the object.

- An Example that we can encapsulate the creation of the trip planner in an object (a builder), have our client ask the builder to construct the trip planner structure for it.

## Why the builder pattern?
- the pattern was introduced to solve problems with the factory and abstract factory design patterns.
- theses patterns don't work well when the objects to be created contains a lot of attributes.
- There are two major issues
  - Too many arguments to pass from the client to the factory class.
  - if the object is heavy and it creation is complex, all the complexity will be part of the factory class.

## Advantages
- it encapsulates the way a complex object is constructed.
- allows objects to be constructed in a multistep and varying process.
- product implementations can be swapped in and out because the client only sees an abstract interface
- focus on how the product will be built

## Disadvantages
- requires some amount of code duplication.
- constructing objects require more domain knowledge of the client.


- **We should not use this  pattern if we want a mutable object, (an object which can be modified after the creation process.)**

