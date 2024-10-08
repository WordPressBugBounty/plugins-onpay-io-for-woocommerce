<?php

/*
 * Copyright (c) 2017, 2018 François Kooman <fkooman@tuxed.net>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */
namespace WoocommerceOnpay\fkooman\OAuth\Client\Http\Tests;

use WoocommerceOnpay\fkooman\OAuth\Client\Http\Request;
use WoocommerceOnpay\PHPUnit\Framework\TestCase;
class RequestTest extends TestCase
{
    public function testToString()
    {
        $request = new Request('GET', 'http://example.org/foo', ['Foo' => 'Bar'], 'Hello World!');
        $this->assertSame('[requestMethod=GET, requestUri=http://example.org/foo, requestHeaders=[Foo: Bar], requestBody=Hello World!]', (string) $request);
    }
    public function testReplacedBasicAuth()
    {
        $request = new Request('GET', 'http://example.org/foo', ['Authorization' => 'Basic Zm9vOmJhcg=='], 'Hello World!');
        $this->assertSame('[requestMethod=GET, requestUri=http://example.org/foo, requestHeaders=[Authorization: XXX-REPLACED-FOR-LOG-XXX], requestBody=Hello World!]', (string) $request);
    }
}
