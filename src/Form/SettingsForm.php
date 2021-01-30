<?php

namespace Drupal\crownpeak\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Defines a form that configures integration with crownpeak service.
 */
class SettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'crownpeak_admin_settings_form';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'crownpeak.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    # For form elements check:
    # https://developer.crownpeak.com/autofix/Generatescript.html

    $configs = $this->config('crownpeak.settings');

    $form['accessibility_statement_link'] = [
      '#type' => 'url',
      '#title' => $this->t('Accessibility Statement Link'),
      '#description' => $this->t('Specify here URL for page with accessibility statement.'),
      '#default_value' => $configs->get('accessibility_statement_link'),
    ];

    $form['feedback_form_link'] = [
      '#type' => 'url',
      '#title' => $this->t('Feedback Form Link'),
      '#description' => $this->t('Specify here URL for feedback form.'),
      '#default_value' => $configs->get('feedback_form_link'),
    ];

    $form['hide_trigger_button'] = [
      '#type' => 'select',
      '#title' => $this->t('Hide Trigger Button'),
      '#description' => $this->t('Select showing trigger button option.'),
      '#default_value' => $configs->get('hide_trigger_button'),
      '#options' => [
        'false' => $this->t('Show'),
        'true' => $this->t('Hide'),
      ],
      '#required' => TRUE,
    ];

    $form['interface_language'] = [
      '#type' => 'select',
      '#title' => $this->t('Interface Language'),
      '#description' => $this->t('Select language for widget interface.'),
      '#default_value' => $configs->get('interface_language'),
      '#options' => [
        'en' => $this->t('English'),
        'es' => $this->t('Spanish'),
        'fr' => $this->t('French'),
        'de' => $this->t('German'),
        'it' => $this->t('Italian'),
        'pt' => $this->t('Portuguese'),
        'nl' => $this->t('Dutch'),
        'ja' => $this->t('Japanese'),
        'tw' => $this->t('Chinese (tw)'),
        'ct' => $this->t('Chinese (ct)'),
        'he' => $this->t('Hebrew'),
        'ru' => $this->t('Russian'),
        'ar' => $this->t('Arabic'),
      ],
      '#required' => TRUE,
    ];

    $form['interface_lead_color'] = [
      '#type' => 'color',
      '#title' => $this->t('Interface Lead Color'),
      '#description' => $this->t('Specify lead color for widget interface.'),
      '#default_value' => $configs->get('interface_lead_color'),
      '#required' => TRUE,
    ];

    $form['trigger_button_color'] = [
      '#type' => 'color',
      '#title' => $this->t('Trigger Button Color'),
      '#description' => $this->t('Specify lead color for trigger button.'),
      '#default_value' => $configs->get('trigger_button_color'),
      '#required' => TRUE,
    ];

    $form['interface_position'] = [
      '#type' => 'select',
      '#title' => $this->t('Interface Position'),
      '#description' => $this->t('Select showing trigger button option.'),
      '#default_value' => $configs->get('interface_position'),
      '#options' => [
        'left' => $this->t('Left'),
        'right' => $this->t('Right'),
      ],
      '#required' => TRUE,
    ];

    $form['show_on_mobile'] = [
      '#type' => 'select',
      '#title' => $this->t('Show On Mobile?'),
      '#description' => $this->t('Select if widget should be shown for mobile devices.'),
      '#default_value' => $configs->get('show_on_mobile'),
      '#options' => [
        'true' => $this->t('Show'),
        'false' => $this->t('Hide'),
      ],
      '#required' => TRUE,
    ];

    $form['trigger_horizontal_position'] = [
      '#type' => 'select',
      '#title' => $this->t('Trigger Horizontal Position'),
      '#description' => $this->t('Select horizontal position for trigger.'),
      '#default_value' => $configs->get('trigger_horizontal_position'),
      '#options' => [
        'left' => $this->t('Left'),
        'right' => $this->t('Right'),
      ],
      '#required' => TRUE,
    ];

    $form['trigger_vertical_position'] = [
      '#type' => 'select',
      '#title' => $this->t('Trigger Vertical Position'),
      '#description' => $this->t('Select vertical position for trigger.'),
      '#default_value' => $configs->get('trigger_vertical_position'),
      '#options' => [
        'top' => $this->t('Top'),
        'center' => $this->t('Center'),
        'bottom' => $this->t('Bottom'),
      ],
      '#required' => TRUE,
    ];

    // @TODO: add form state based on `show_on_mobile`.
    $form['mobile_trigger_horizontal_position'] = [
      '#type' => 'select',
      '#title' => $this->t('Mobile Trigger Horizontal Position'),
      '#description' => $this->t('Select horizontal position for trigger on mobile devices.'),
      '#default_value' => $configs->get('mobile_trigger_horizontal_position'),
      '#options' => [
        'left' => $this->t('Left'),
        'right' => $this->t('Right'),
      ],
      '#required' => TRUE,
    ];

    $form['mobile_trigger_vertical_position'] = [
      '#type' => 'select',
      '#title' => $this->t('Mobile Trigger Vertical Position'),
      '#description' => $this->t('Select vertical position for trigger.'),
      '#default_value' => $configs->get('mobile_trigger_vertical_position'),
      '#options' => [
        'top' => $this->t('Top'),
        'center' => $this->t('Center'),
        'bottom' => $this->t('Bottom'),
      ],
      '#required' => TRUE,
    ];

    $form['trigger_button_size'] = [
      '#type' => 'select',
      '#title' => $this->t('Trigger Button Size'),
      '#description' => $this->t('Select button size for trigger.'),
      '#default_value' => $configs->get('trigger_button_size'),
      '#options' => [
        'small' => $this->t('Small'),
        'medium' => $this->t('Medium'),
        'big' => $this->t('Big'),
      ],
      '#required' => TRUE,
    ];

    $form['mobile_trigger_size'] = [
      '#type' => 'select',
      '#title' => $this->t('Mobile Trigger Size'),
      '#description' => $this->t('Select button size for trigger on mobile devices.'),
      '#default_value' => $configs->get('mobile_trigger_size'),
      '#options' => [
        'small' => $this->t('Small'),
        'medium' => $this->t('Medium'),
        'big' => $this->t('Big'),
      ],
      '#required' => TRUE,
    ];

    $form['trigger_button_shape'] = [
      '#type' => 'select',
      '#title' => $this->t('Trigger Button Shape'),
      '#description' => $this->t('Select button shape for trigger button.'),
      '#default_value' => $configs->get('trigger_button_shape'),
      '#options' => [
        '50%' => $this->t('Round'),
        '0%' => $this->t('Square'),
        '10px' => $this->t('Squircle Big'),
        '5px' => $this->t('Squircle Small'),
      ],
      '#required' => TRUE,
    ];

    $form['trigger_mobile_shape'] = [
      '#type' => 'select',
      '#title' => $this->t('Trigger Mobile Shape'),
      '#description' => $this->t('Select button shape for trigger button on mobile devices.'),
      '#default_value' => $configs->get('trigger_mobile_shape'),
      '#options' => [
        '50%' => $this->t('Round'),
        '0%' => $this->t('Square'),
        '10px' => $this->t('Squircle Big'),
        '5px' => $this->t('Squircle Small'),
      ],
      '#required' => TRUE,
    ];

    $form['trigger_button_icon'] = [
      '#type' => 'radios',
      '#title' => $this->t('Trigger Button Icon'),
      '#description' => $this->t('Select button icon for trigger.'),
      '#default_value' => $configs->get('trigger_button_icon'),
      '#options' => [
        'default' => $this->t('Default'),
        'display' => $this->t('Display'),
        'display2' => $this->t('Display 2'),
        'display3' => $this->t('Display 3'),
        'help' => $this->t('Help'),
        'help2' => $this->t('Help 2'),
        'people' => $this->t('People'),
        'people2' => $this->t('People 2'),
        'people3' => $this->t('People 3'),
        'people4' => $this->t('People 4'),
        'settings' => $this->t('Settings'),
        'settings2' => $this->t('Settings 2'),
        'settings3' => $this->t('Settings 3'),
        'wheel_chair' => $this->t('Wheel Chair'),
        'wheel_chair2' => $this->t('Wheel Chair 2'),
        'wheel_chair3' => $this->t('Wheel Chair 3'),
        'wheel_chair4' => $this->t('Wheel Chair 4'),
        'wheel_chair5' => $this->t('Wheel Chair 5'),
        'wheel_chair6' => $this->t('Wheel Chair 6'),
        'wheel_chair7' => $this->t('Wheel Chair 7'),
      ],
      '#required' => TRUE,
    ];

    $form['trigger_horizontal_offset'] = [
      '#type' => 'number',
      '#title' => $this->t('Trigger Horizontal Offset'),
      '#description' => $this->t('Specify horizontal offset.'),
      '#default_value' => $configs->get('trigger_horizontal_offset'),
      '#required' => TRUE,
    ];

    $form['trigger_vertical_offset'] = [
      '#type' => 'number',
      '#title' => $this->t('Trigger Vertical Offset'),
      '#description' => $this->t('Specify vertical offset.'),
      '#default_value' => $configs->get('trigger_vertical_offset'),
      '#required' => TRUE,
    ];

    $form['mobile_trigger_horizontal_offset'] = [
      '#type' => 'number',
      '#title' => $this->t('Trigger Horizontal Offset'),
      '#description' => $this->t('Specify horizontal offset on mobile devices.'),
      '#default_value' => $configs->get('mobile_trigger_horizontal_offset'),
      '#required' => TRUE,
    ];

    $form['mobile_trigger_vertical_offset'] = [
      '#type' => 'number',
      '#title' => $this->t('Trigger Vertical Offset'),
      '#description' => $this->t('Specify vertical offset on mobile devices.'),
      '#default_value' => $configs->get('mobile_trigger_vertical_offset'),
      '#required' => TRUE,
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $values = $form_state->getValues();
    $this->config('crownpeak.settings')
      ->set('accessibility_statement_link', $values['accessibility_statement_link'])
      ->set('feedback_form_link', $values['feedback_form_link'])
      ->set('hide_trigger_button', $values['hide_trigger_button'])
      ->set('interface_language', $values['interface_language'])
      ->set('interface_lead_color', $values['interface_lead_color'])
      ->set('trigger_button_color', $values['trigger_button_color'])
      ->set('interface_position', $values['interface_position'])
      ->set('show_on_mobile', $values['show_on_mobile'])
      ->set('trigger_horizontal_position', $values['trigger_horizontal_position'])
      ->set('trigger_vertical_position', $values['trigger_vertical_position'])
      ->set('mobile_trigger_horizontal_position', $values['mobile_trigger_horizontal_position'])
      ->set('mobile_trigger_vertical_position', $values['mobile_trigger_vertical_position'])
      ->set('trigger_button_size', $values['trigger_button_size'])
      ->set('mobile_trigger_size', $values['mobile_trigger_size'])
      ->set('trigger_button_shape', $values['trigger_button_shape'])
      ->set('trigger_mobile_shape', $values['trigger_mobile_shape'])
      ->set('trigger_button_icon', $values['trigger_button_icon'])
      ->set('trigger_horizontal_offset', $values['trigger_horizontal_offset'])
      ->set('trigger_vertical_offset', $values['trigger_vertical_offset'])
      ->set('mobile_trigger_horizontal_offset', $values['mobile_trigger_horizontal_offset'])
      ->set('mobile_trigger_vertical_offset', $values['mobile_trigger_vertical_offset'])
      ->save();

    parent::submitForm($form, $form_state);
  }

}
