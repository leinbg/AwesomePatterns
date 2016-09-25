Template Pattern
==================
Template Method lets subclasses redefine certain steps of an algorithm 
without changing the algorithm's structure defined in base (abstract) class 
Base class declares algorithm __'placeholders'__, and derived classes implement the placeholders.

Example
---------
Billing and Order Parser implement customized parsing algorithms and use the same parse service provider

comparison with others
----------------------
- Strategy is like Template Method except in its granularity.
- Template Method uses inheritance to vary part of an algorithm. Strategy uses delegation to vary the entire algorithm.
- Strategy modifies the logic of individual objects. Template Method modifies the logic of an entire class.
- Factory Method is a specialization of Template Method.