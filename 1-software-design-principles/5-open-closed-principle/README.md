# Open Closed Design Principle (OCP)

- Classes and Methods should be Open for extension (new functionality) and closed for modification.
- A class should be easily extendable without modifying the class itself.
- A module is said to be closed if it is available for use by other modules.
- Add functionality with changing existing code.
- reduce tight coupling.

**Note**: inheritance introduces tight coupling if the subclasses depend on implementation details of their parent class.

- Sometimes called Polymorphic Open/Closed principle
- uses interfaces instead of super classes to allow different implementation.
- interfaces by default are closed for modification.