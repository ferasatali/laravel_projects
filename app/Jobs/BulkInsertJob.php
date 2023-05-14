<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class BulkInsertJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()  {
        $data = [
            ['name' => 'ferasat', 'email' => 'ferasat@example.com','password'=> \Hash::make('password')],
            ['name' => 'asad', 'email' => 'asad@example.com','password'=> \Hash::make('password')],
            ['name' => 'hassan', 'email' => 'hassan@example.com','password'=> \Hash::make('password')],
            ['name' => 'basit', 'email' => 'basit@example.com','password'=> \Hash::make('password')],
            ['name' => 'ali', 'email' => 'ali@example.com','password'=> \Hash::make('password')],
        ];

        foreach ($data as $row) {
            \DB::table('users')->insert($row);
        }
    }
}
