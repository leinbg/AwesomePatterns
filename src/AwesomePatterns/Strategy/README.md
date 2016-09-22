Strategy Pattern
==================
Define a family of algorithms, encapsulate each one, and force them __interchangeable at run time__ 
by capturing the abstraction in an interface and bury implementation details in derived classes.

Strategy lets the algorithm vary independently from the clients that use it.

Example
---------
EmailClient can send Email by Google, Yahoo client or direct to Logger and which one to use will be determined on the fly.

comparison with others
----------------------
- Strategy is like Template Method except in its granularity.
- State is like Strategy except in its intent.
- Strategy lets you change the guts of an object. Decorator lets you change the skin.
- State, Strategy, Bridge (and to some degree Adapter) have similar solution structures. They all share elements of the 'handle/body' idiom. They differ in intent, that is, they solve different problems.
- Strategy has 2 different implementations, the first is similar to State. The difference is in binding times (Strategy is a bind-once pattern, whereas State is more dynamic).
- Strategy objects often make good Flyweights.