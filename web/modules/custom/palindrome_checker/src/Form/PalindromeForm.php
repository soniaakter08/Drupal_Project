<?php

namespace Drupal\palindrome_checker\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class PalindromeForm extends FormBase
{

    public function getFormId()
    {
        return 'palindrome_checker_form';
    }

    public function buildForm(array $form, FormStateInterface $form_state)
    {

        $form['word'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Enter a word or phrase'),
            '#required' => TRUE,
        ];

        $form['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Check'),
        ];

        if ($form_state->get('result')) {
            $form['result'] = [
                '#markup' => '<p>' . $form_state->get('result') . '</p>',
            ];
        }

        return $form;
    }

    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        $word = $form_state->getValue('word');
        $cleaned = preg_replace('/[^a-z0-9]/i', '', strtolower($word));
        $is_palindrome = $cleaned === strrev($cleaned);

        $message = $is_palindrome ? "$word is a palindrome!" : "$word is not a palindrome.";

        $form_state->set('result', $message);
        $form_state->setRebuild(TRUE);
    }
}
