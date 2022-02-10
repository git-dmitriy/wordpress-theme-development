<?php
class SI_Widget_Info extends WP_Widget
{
  public function __construct()
  {
    parent::__construct(
      'si_widget_info',
      'SportIsland - Информация',
      [
        'name' => 'SportIsland - Информация',
        'description' => 'Выводит информацию об организации'
      ]
    );
  }
  public function form($instance)
  {
    $types = [
      'address' => 'Адрес',
      'time' => 'Рабочее время',
      'phone' => 'Номер телефона',
      'email' => 'Электронная почта',
    ];

?> <p>
      <label for="<?php echo $this->get_field_id('id-info') ?>">
        Текст:
      </label>
      <input type="text" id="<?php echo $this->get_field_id('id-info') ?>" name="<?php echo $this->get_field_name('info'); ?>" value="<?php echo $instance['info']; ?>" class="widefat">
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('id-type') ?>">
        Выберите вариант отображения:
      </label>

      <select name="<?php echo $this->get_field_name('type'); ?>" id="<?php echo $this->get_field_id('id-type') ?>" class="widefat">

        <?php foreach ($types as $type => $desc) : ?>

          <option value="<?php echo $type; ?>" <?php selected($instance['type'], $type, true); ?>>
            <?php echo $desc; ?>
          </option>
        <?php endforeach; ?>
      </select>

    </p>

    <?php
  }
  public function widget($args, $instance)
  {
    switch ($instance['type']) {
      case 'address':
    ?>
        <span class="widget-address"> <?php echo $instance['info']; ?> </span>

      <?php
        break;
      case 'time':
      ?>
        <span class="widget-working-time"> <?php echo $instance['info']; ?> </span>

      <?php
        break;
      case 'phone':
        $tel = preg_replace('/[^+0-9]/', '', $instance['info']);
      ?>
        <a href="tel:<?php echo $tel; ?>" class="widget-phone"> <?php echo $instance['info']; ?> </a>

      <?php
        break;
      case 'email':
      ?>
        <a href="mailto:<?php echo $instance['info']; ?>" class="widget-email"><?php echo $instance['info']; ?></a>
<?php
        break;
      default:
        echo '';
        break;
    }
  }
  public function update($new_instance, $old_instance)
  {
    return $new_instance;
  }
}
