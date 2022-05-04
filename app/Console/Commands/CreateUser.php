<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Hash;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create new user.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $email = $this->ask('Email adresse');
        $name = $this->ask('Fullname');
        $password = $this->secret('Password');
        $password = Hash::make($password);

        $this->line('Email : '.$email);
        $this->line('Fullname : '.$name);

        if ($this->confirm('Informations are correct ?')) {
            try {
                User::create([
                    'name' => $name,
                    'email' => $email,
                    'password' => $password,
                ]);
                $this->info('User registered !');
            } catch (QueryException $exception) {
                $this->error($exception->errorInfo[2]);
                $this->handle();
            }
        } else {
            $this->handle();
        }
    }
}
