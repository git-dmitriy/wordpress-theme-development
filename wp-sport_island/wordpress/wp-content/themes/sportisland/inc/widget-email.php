<?php
class SI_Widget_contacts_mail extends WP_Widget
{
  public function __construct()
  {
    parent::__construct(
      'si_widget_contacts_mail',
      'SportIsland - Виджет почты',
      [
        'name' => 'SportIsland - Виджет почты',
        'description' => 'Выводит текст и ссылку на почту'
      ]
    );
  }
  public function form($instance)
  {
?>
    <p>
      <label for="<?php echo $this->get_field_id('id-text') ?>">
        Введите текст:
      </label>
      <input type="text" id="<?php echo $this->get_field_id('id-text') ?>" name="<?php echo $this->get_field_name('text'); ?>" value="<?php echo $instance['text']; ?>" class="widefat">
    </p>
    <p>
      <label for="<?php echo $this->get_field_id('id-email') ?>">
        Введите email:
      </label>
      <input type="text" id="<?php echo $this->get_field_id('id-email') ?>" name="<?php echo $this->get_field_name('email'); ?>" value="<?php echo $instance['email']; ?>" class="widefat">
    </p>
  <?php
  }
  public function widget($args, $instance)
  {
    // $tel_text = $instance['phone'];
    // $pattern = '/[^+0-9]/';
    // $tel = preg_replace($pattern, '', $tel_text)
  ?>
    <p class="widget-contact-mail">
      <?php echo $instance['text'] ?>
      <a href="mailto:<?php echo $instance['email'] ?>"><?php echo $instance['email'] ?></a>
    </p>


<?php
  }
  public function update($new_instance, $old_instance)
  {
    return $new_instance;
  }
}
