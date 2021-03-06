<?hh // strict
/**
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the "hack" directory of this source tree. An additional grant
 * of patent rights can be found in the PATENTS file in the same directory.
 *
 */

interface I {}
class A implements I {}
class B implements I {}
class Z {}

function foo(Vector<I> $x): void { 
  $x[32] = new A();
}
function callA(A $x): void {}

function bar(): Vector<I> {
  $x = Vector {};
  $x[] = new A();
  $x[] = new B();
  return $x;
}
