Awesome Patterns
=================

[![Build Status](https://travis-ci.org/leinbg/AwesomePatterns.svg?branch=master)](https://travis-ci.org/leinbg/AwesomePatterns)
[![Code Climate](https://codeclimate.com/github/leinbg/AwesomePatterns/badges/gpa.svg)](https://codeclimate.com/github/leinbg/AwesomePatterns)

what is it, why is it useful, how to use it.

done list
-------
- Adapter
    - __matches interfaces__ of different classes
    - same api for all relative services (fetching data from filesystem)
- Chain of Responsibility
    - passes request through chain of classes
    - decouples request and real handlers by chaining handlers (System Check)
- Command
    - __encapsulates__ each command as an object
    - decouples request and real handlers by abstract each handler as a command (File Action)
- Decorator
    - __wraps__ the core class __recursively__.
    - extends functionality of the core class dynamically, flexible than sub class (diverse vouchers)
- Factory
    - constructs a class or set of classes in a customized manner 
    - standardizes the creation of a class (how to create a badge)
- Fluent Interface
    - chains method invocation by __returning $this__
    - sometimes simplifies api calls and increases readability (api design)
- Null Object
    - acts as __default value__ of core class
    - saves tons of if statement in template (null User)
- Observer
    - notifies observer classes when subject class changes 
    - defines __one-to-many__ relationship (event system)
- Specification
    - acts as __special values__ of core class
    - makes it easier for further filtering and manipulations of a complex class (premium users) 
- Strategy
    - defines __a family of algorithms__, encapsulate each one, and make them interchangeable.
    - makes it flexible for client to decide which algorithm to use at the run time (multiple email service providers) 
- Template
    - declares __placeholders__ of an algorithm in base class, and implements them in derived classes.
    - standardizes business logic while leaving some flexibilities. (multiple xml parsers)
- View Presenter
    - outsources view specific variable from model
    - makes model cleaner