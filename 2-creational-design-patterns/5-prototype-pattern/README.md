# Prototype Pattern
- prototype pattern refers to creating a duplicate object while keeping performance in mind.
- used when the creation of an object is costly, requires a lot of time and resource and you have a similar object already existing
  - creating a new instance is normally treated as expensive operation.
  - focus here is to reduce the expense of this creational process of a new instance.

- provides a mechanism to copy the original object to a new object and then modify it according  to our needs.
  - using cloning
  - de-serialization
- mandates that the object which you are copying should provide the copying feature.

## When should we use a prototype?
- we can use this pattern when we need to instantiate classes at runtime. (dynamic loading)
- when a system must create new objects of many types in a complex class hierarchy.
- when instances of a class can have one of only a few different combinations of state.

## Advantages
- hides the complexity of making new objects.
- provides the option for client to generate objects whose type is unknown.
- when copying an object can be more efficient than creating a new object.
- we can create new instances with a cheaper cost.

## Drawbacks
- each subclass has to implement the cloning mechanism
- implementing the cloning mechanism can be challenging.


## Notes
- Shallow Copy --> means if the copied object contains references to other objects, these objects are not cloned or clone it shallow through copy the address location only.
- Deep Copy --> would clone even referenced objects.