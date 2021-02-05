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

    $form['mobile_configs'] = [
      '#type' => 'details',
      '#title' => $this->t('Mobile Configuration'),
    ];

    $form['mobile_configs']['hide_on_mobile'] = [
      '#type' => 'select',
      '#title' => $this->t('Hide On Mobile?'),
      '#description' => $this->t('Select if widget should be shown for mobile devices.'),
      '#default_value' => $configs->get('hide_on_mobile'),
      '#options' => [
        'false' => $this->t('Show'),
        'true' => $this->t('Hide'),
      ],
      '#required' => TRUE,
    ];

    $form['mobile_configs']['details'] = [
      '#type' => 'fieldset',
      '#states' => array(
        'visible' => array(
          ':input[name="hide_on_mobile"]' => array('value' => 'false'),
        ),
      ),
    ];

    $form['mobile_configs']['details']['mobile_trigger_horizontal_position'] = [
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

    $form['mobile_configs']['details']['mobile_trigger_vertical_position'] = [
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

    $form['mobile_configs']['details']['mobile_trigger_size'] = [
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

    $form['mobile_configs']['details']['mobile_trigger_shape'] = [
      '#type' => 'select',
      '#title' => $this->t('Trigger Mobile Shape'),
      '#description' => $this->t('Select button shape for trigger button on mobile devices.'),
      '#default_value' => $configs->get('mobile_trigger_shape'),
      '#options' => [
        '50%' => $this->t('Round'),
        '0%' => $this->t('Square'),
        '10px' => $this->t('Squircle Big'),
        '5px' => $this->t('Squircle Small'),
      ],
      '#required' => TRUE,
    ];

    $form['mobile_configs']['details']['mobile_trigger_horizontal_offset'] = [
      '#type' => 'number',
      '#title' => $this->t('Trigger Horizontal Offset'),
      '#description' => $this->t('Specify horizontal offset on mobile devices.'),
      '#default_value' => $configs->get('mobile_trigger_horizontal_offset'),
      '#required' => TRUE,
    ];

    $form['mobile_configs']['details']['mobile_trigger_vertical_offset'] = [
      '#type' => 'number',
      '#title' => $this->t('Trigger Vertical Offset'),
      '#description' => $this->t('Specify vertical offset on mobile devices.'),
      '#default_value' => $configs->get('mobile_trigger_vertical_offset'),
      '#required' => TRUE,
    ];

    $form['links_configs'] = [
      '#type' => 'details',
      '#title' => $this->t('Links'),
    ];

    $form['links_configs']['accessibility_statement_link'] = [
      '#type' => 'url',
      '#title' => $this->t('Accessibility Statement Link'),
      '#description' => $this->t('Specify here URL for page with accessibility statement.'),
      '#default_value' => $configs->get('accessibility_statement_link'),
    ];

    $form['links_configs']['feedback_form_link'] = [
      '#type' => 'url',
      '#title' => $this->t('Feedback Form Link'),
      '#description' => $this->t('Specify here URL for feedback form.'),
      '#default_value' => $configs->get('feedback_form_link'),
    ];

    // Visibility settings.
    $form['display_settings'] = [
      '#type' => 'vertical_tabs',
      '#title' => $this->t('Display settings'),
    ];

    $form['display']['page_visibility_settings'] = [
      '#type' => 'details',
      '#title' => $this->t('Pages'),
      '#group' => 'display_settings',
    ];

    $form['display']['page_visibility_settings']['visibility_request_path_mode'] = [
      '#type' => 'radios',
      '#title' => $this->t('Add widget to specific pages'),
      '#options' => [
        $this->t('Every page except the listed pages'),
        $this->t('The listed pages only'),
      ],
      '#default_value' => $configs->get('visibility_request_path_mode'),
    ];

    $visibility_request_path_pages = $configs->get('visibility_request_path_pages');
    $form['display']['page_visibility_settings']['visibility_request_path_pages'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Pages'),
      '#title_display' => 'invisible',
      '#default_value' => !empty($visibility_request_path_pages) ? $visibility_request_path_pages : '',
      '#description' => $this->t("Specify pages by using their paths. Enter one path per line. The '*' character is a wildcard. Example paths are %blog for the blog page and %blog-wildcard for every personal blog. %front is the front page.", ['%blog' => '/blog', '%blog-wildcard' => '/blog/*', '%front' => '<front>']),
      '#rows' => 10,
    ];

    $form['display']['role_visibility_settings'] = [
      '#type' => 'details',
      '#title' => $this->t('Roles'),
      '#group' => 'display_settings',
    ];

    $form['display']['role_visibility_settings']['visibility_user_role_mode'] = [
      '#type' => 'radios',
      '#title' => $this->t('Add widget for specific roles'),
      '#options' => [
        $this->t('Add to the selected roles only'),
        $this->t('Add to every role except the selected ones'),
      ],
      '#default_value' => $configs->get('visibility_user_role_mode'),
    ];

    $visibility_user_role_roles = $configs->get('visibility_user_role_roles');
    $form['display']['role_visibility_settings']['visibility_user_role_roles'] = [
      '#type' => 'checkboxes',
      '#title' => $this->t('Roles'),
      '#default_value' => !empty($visibility_user_role_roles) ? $visibility_user_role_roles : [],
      '#options' => array_map('\Drupal\Component\Utility\Html::escape', user_role_names()),
      '#description' => $this->t('If none of the roles are selected, widget will be shown for all users. If a user has any of the roles checked, widget will be shown for that user (or excluded, depending on the setting above).'),
    ];

    $form['debug'] = [
      '#type' => 'details',
      '#title' => $this->t('Debug'),
    ];

    $crownpeak_js_suffix = \Drupal::state()->get('crownpeak_js_suffix') ?: NULL;
    $crownpeak_current_js = CROWNPEAK_JS_PATH . '/crownpeak_' . $crownpeak_js_suffix . '.js';

    $form['debug']['info'] = [
      '#type' => 'markup',
      '#markup' => file_create_url($crownpeak_current_js),
    ];

    $form['#attached']['library'][] = 'crownpeak/crownpeak.admin';

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
      ->set('hide_on_mobile', $values['hide_on_mobile'])
      ->set('trigger_horizontal_position', $values['trigger_horizontal_position'])
      ->set('trigger_vertical_position', $values['trigger_vertical_position'])
      ->set('mobile_trigger_horizontal_position', $values['mobile_trigger_horizontal_position'])
      ->set('mobile_trigger_vertical_position', $values['mobile_trigger_vertical_position'])
      ->set('trigger_button_size', $values['trigger_button_size'])
      ->set('mobile_trigger_size', $values['mobile_trigger_size'])
      ->set('trigger_button_shape', $values['trigger_button_shape'])
      ->set('mobile_trigger_shape', $values['mobile_trigger_shape'])
      ->set('trigger_button_icon', $values['trigger_button_icon'])
      ->set('trigger_horizontal_offset', $values['trigger_horizontal_offset'])
      ->set('trigger_vertical_offset', $values['trigger_vertical_offset'])
      ->set('mobile_trigger_horizontal_offset', $values['mobile_trigger_horizontal_offset'])
      ->set('mobile_trigger_vertical_offset', $values['mobile_trigger_vertical_offset'])
      ->set('visibility_request_path_mode', $values['visibility_request_path_mode'])
      ->set('visibility_request_path_pages', $values['visibility_request_path_pages'])
      ->set('visibility_user_role_mode', $values['visibility_user_role_mode'])
      ->set('visibility_user_role_roles', $values['visibility_user_role_roles'])
      ->save();

    drupal_flush_all_caches();
    parent::submitForm($form, $form_state);
  }

}
