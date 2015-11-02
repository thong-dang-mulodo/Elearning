<?php

class TestCase extends Illuminate\Foundation\Testing\TestCase {

    /*
     * @test
    */

    public function createApplication() {

    }

    public function itWorks() {
        $unitTesting = true;

        $testEnvironment = 'testing';

        return require __DIR__.'/../../bootstrap/start.php';
    }
}