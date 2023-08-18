## Software Design Principles

- Software Design principles strive for **high cohesion** (every unit has one responsibility) and **low coupling** (has less dependencies).
- patterns will use the principles and patterns favor aggregation/composition over the inheritance
  - aggregation means a collection of things that are **not** part of it.
    - independent
    - example: airplanes at the airport
  - composition means something is part of another thing.
    - cannot exist independently of the parent.
    - example: wheels on an airplanes.

-------------------------

- The Software Design principles are:
  1. Programming to an interface
  2. Using composition over inheritance
  3. Delegation Principle
  4. The single responsibility principle
  5. The open closed principle
  6. Liskov substitution principle
  7. Interface segregation principle
  8. Dependency injection/inversion principle




## Design Smells
1. Rigidity
2. Fragility
3. Immobility
4. Viscosity
5. Needless repetition
6. Opacity
7. Needless complexity

- Design smells often end up creating code that is hard to read, breaks easily.
- Good software design is lightweight, flexible, easy to read and understand and before all easy to change.
