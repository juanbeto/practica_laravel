<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Note;
class NotesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_notes_list()
    {
       /* Note::create(['note'=>'My firts note']);
        Note::create(['note'=>'My second note']);
        
        $this->visit('notes')
            ->see('My firts note')
            ->see('My second note');*/
    }
    
    public function test_create_note(){
        $this->visit('notes')
              ->click('Add a notes')
                    ->seePageIs('notes/create')
                        ->type('A new note', 'note')
                            ->press('Create note')
                                ->seePageIs('notes')
                                    ->see('A new note')
                                        ->seeInDatabase('notes',
                                          ['note'=>'A new note']
                                        );
    }
}
