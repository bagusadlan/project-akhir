<?php

namespace admin\models;

use admin\core\Model;

class Contact extends Model
{
    public string $name = '';
    public string $email = '';
    public string $subject = '';
    public string $message = '';

    public function rules(): array
    {
        return [
            'name' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'subject' => [[self::RULE_MIN, 'min' => 2], [self::RULE_MAX, 'max' => 100]],
            'message' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 2], [self::RULE_MAX, 'max' => 500]],
        ];
    }

    public function attributes(): array
    {
        return ['email', 'password'];
    }

    public function labels(): array
    {
        return [
            'name' => 'Name',
            'email' => 'Email',
            'subject' => 'Subject',
            'message' => 'Message'
        ];
    }

    public function send()
    {
        return true;
    }
}