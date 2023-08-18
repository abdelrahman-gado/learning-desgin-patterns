# Using Composition over Inheritance

- Helps keep each class encapsulated and focus on one task.
- Composition --> loosely coupled
- Inheritance --> tightly coupled
- When you think about code reuse, think first about composition then inheritance.
- Composition is referred as a **HAS-A** relationship between classes in OOD. (an object owns another object as a member variable of its class)
- composition implies a relationship where the child cannot exist independent of the parent. like wheels on an airplane. (when the airplane get destroyed, the wheels also get destroyed, it cannot exist independently)
- aggregation is a **HAS-A** relationship between objects and implies a relationship where child can exist independently of the parent. like airplanes at the airport

- **Note** that the distinction between composition and aggregation loses its importance in languages that have garbage collection.
