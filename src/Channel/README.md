# Kraken Framework - Channel Component

[![Build Status](https://travis-ci.org/kraken-php/framework.svg)](https://travis-ci.org/kraken-php/framework)
[![Total Downloads](https://poser.pugx.org/kraken-php/channel/downloads)](https://packagist.org/packages/kraken-php/channel) 
[![Latest Stable Version](https://poser.pugx.org/kraken-php/channel/v/stable)](https://packagist.org/packages/kraken-php/channel) 
[![Latest Unstable Version](https://poser.pugx.org/kraken-php/channel/v/unstable)](https://packagist.org/packages/kraken-php/channel) 
[![License](https://poser.pugx.org/kraken-php/framework/license)](https://packagist.org/packages/kraken-php/framework)

> **Note:** This repository is part of [Kraken Framework][3]. It can be used as standalone library, but for the best 
efficiency we suggest you to also check out the rest of [Kraken Repository][5].

<br>
<p align="center">
<img src="https://avatars2.githubusercontent.com/u/15938282?v=3&s=150" />
</p>

## Description

Kraken/Channel is event-based component that allows sending and receiving messsages asynchronously. It provides 
abstraction for various IPC models and is designed to be used in multi-threaded, multi-processed systems. It
provides complex routing mechanisms, protocols, message encoders and extends behaviour of decorated IPC models by 
implementing hearbeat mechanisms, reconnect mechanisms and allowing usage of both async and request-reply messaging 
patterns.

## Feature Highlights

Kraken/Channel features:

* Message-driven communication,
* IPC models abstraction,
* Support for sending asynchronous messages,
* Support for request-reply pattern,
* Built-in offline and online message buffers,
* Built-in configurable protocol-based routing mechanisms,
* Separation of input and output routers,
* Heartbeat mechanism,
* Reconnect mechanism,
* Event-based API,
* Promise-based helpers,
* Kraken Framework compatibility,
* ...and more.

## Interface

See more in [official documentation][2].

## Requirements

* PHP-5.5, PHP-5.6 or PHP-7.0+,
* UNIX or ~~Windows~~ OS.

## Installation

```
composer require kraken-php/channel
```

## Tests

Tests are provided in [Framework Repository][3].

## Documentation

Documentation for this module can be found in the [official documentation][2].

## Contributing

This library is read-only subtree split of Kraken Framework. To make contributions, please go to [Framework Repository][3].

## License

This library licensed under the same license as [Kraken Framework][3].

[1]: http://kraken-php.com
[2]: http://kraken-php.com/docs/0.3/channel
[3]: https://github.com/kraken-php/framework
[4]: https://github.com/kraken-php/kraken
[5]: https://github.com/kraken-php
