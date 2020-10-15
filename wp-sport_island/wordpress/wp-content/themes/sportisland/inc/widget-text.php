<?php
class SI_Widget_Text extends WP_Widget
{
  public function __construct()
  {
    parent::__construct(
      'si_widget_text',
      'SportIsland - Текстовый виджет',
      [
        'name' => 'SportIsland - Текстовый виджет',
        'description' => 'Выводит простой текст без вёрстки'
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
<?php
  }
  public function widget($args, $instance)
  {
    echo $instance['text'];
  }
  public function update($new_instance, $old_instance)
  {
    return $new_instance;
  }
}
