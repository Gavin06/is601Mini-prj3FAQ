<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class answerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testSave()
    {
        $user = factory(\App\User::class)->make();
        $user->save();
        $question = factory(\App\Question::class)->make();
        $question->user()->associate($user);
        $question->save();
        $answer = factory(\App\Answer::class)->make();
        $answer->user()->associate($user);
        $answer->question()->associate($question);
        $this->assertTrue($answer->save());
    }

}