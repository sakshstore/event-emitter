<?php

namespace saksh\SakshEventEmitter;
 

class EventEmitter {
private $events = [];

public function on($event, $listener) {
if (!isset($this->events[$event])) {
$this->events[$event] = [];
}
$this->events[$event][] = $listener;
}

public function off($event, $listenerToRemove) {
if (!isset($this->events[$event])) return;

$this->events[$event] = array_filter($this->events[$event], function($listener) use ($listenerToRemove) {
return $listener !== $listenerToRemove;
});
}

public function emit($event, ...$args) {
if (!isset($this->events[$event])) return;

foreach ($this->events[$event] as $listener) {
call_user_func_array($listener, $args);
}
}
}