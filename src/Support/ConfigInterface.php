<?php

namespace PHPStan\HigherOrderCollections\Support;

interface ConfigInterface
{
    /**
     * @return class-string
     */
    public function collectionClass(): string;
    
    /**
     * @return class-string
     */
    public function proxyClass(): string;

    /**
     * @return string[]
     */
    public function proxyMethods(): array;

    public function keyTemplate(): string;
    
    public function typeTemplate(): string;
    
    public function proxyTemplate(): string;
}
