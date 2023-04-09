<?php

namespace app\models;

use nazares\decoracore\Model;

/**
 * Class ContactForm
 *
 * @author Sergei Nazarenko <nazares@icloud.com>
 * @package app\models
 */
class ContactForm extends Model
{
    public string $subject = '';
    public string $email = '';
    public string $body = '';

    public function rules(): array
    {
        return [
            'subject' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'body' => [self::RULE_REQUIRED],
        ];
    }

    public function labels(): array
    {
        return [
            'subject' => 'Enter your subject',
            'email' => 'Your E-mail',
            'body' => 'Type your text here'
        ];
    }

    public function send(): bool
    {
        return true;
    }
}
