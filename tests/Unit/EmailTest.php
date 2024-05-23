<?php

use app\library\Email;

it('Can Be Created From Valid Email', function () {
  $string = 'user@example.com';

  $email = Email::fromString($string);

  $this->assertSame($string, $email->asString());
});

it('Cannot Be Created From Invalid Email', function () {
  $this->expectException(InvalidArgumentException::class);

  Email::fromString('invalid');
});
