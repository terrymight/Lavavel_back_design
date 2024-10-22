<?php

namespace App\Console\Commands;

use App\Mail\VerificationEmail;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Console\Command;
use ReflectionClass;
use ReflectionProperty;

class CheckMailClass extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature =  'check:mailclass';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check if mailable class has closures or non-serializable properties';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->checkMailClassProperties(VerificationEmail::class);
    }

    private function checkMailClassProperties($mailClass)
    {
        $reflection = new ReflectionClass($mailClass);
        $properties = $reflection->getProperties(
            ReflectionProperty::IS_PUBLIC
                | ReflectionProperty::IS_PROTECTED
                | ReflectionProperty::IS_PRIVATE
        );

        foreach ($properties as $property) {
            $property->setAccessible(true);
            $value = $property->getValue(new $mailClass);

            if ($value instanceof \Closure) {
                $this->error("Property " . $property->getName() . " is a closure.");
            } elseif (is_object($value) && !method_exists($value, '__serialize')) {
                $this->error("Property " . $property->getName() . " is a non-serializable object.");
            }
        }

        $this->info('Check completed');
    }
}
