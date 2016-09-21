Strategy Pattern
==================
Convert the interface of a class into another __interface clients expect__. Adapter lets classes work together that couldn't otherwise because of incompatible interfaces.

Wrap an existing class with a new interface or Impedance match an old component to a new system

Example
---------
a filesystem needs a unique api for different file service providers (local, dropbox), and then
it is able to fetch file from everywhere despite different api thanks to adapters (drivers) for each that implemented same interface.

comparison with others
----------------------
- Adapter makes things work after they're designed; Bridge makes them work before they are.
- Bridge is designed up-front to let the abstraction and the implementation vary independently. Adapter is retrofitted to make unrelated classes work together.
- Adapter provides a different interface to its subject. Proxy provides the same interface. Decorator provides an enhanced interface.
- Adapter is meant to change the interface of an existing object. Decorator enhances another object without changing its interface. Decorator is thus more transparent to the application than an adapter is. As a consequence, Decorator supports recursive composition, which isn't possible with pure Adapters.
- Facade defines a new interface, whereas Adapter reuses an old interface. Remember that Adapter makes two existing interfaces work together as opposed to defining an entirely new one.