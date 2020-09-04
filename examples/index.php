<?
class Article
{
  public $title;
  public $titleFontSize;
  public $articleBody;
  public $articleBodyFontSize;
  public $border;
  public $bg;

  public function __construct(string $title, int $titleFontSize, string $articleBody, int $articleBodyFontSize, string $border, string $bg)
  {
    $this->title = $title;
    $this->titleFontSize = $titleFontSize;
    $this->articleBody = $articleBody;
    $this->articleBodyFontSize = $articleBodyFontSize;
    $this->border = $border;
    $this->bg = $bg;
  }

  public function publishArticle()
  {
    echo "<div style='border: {$this->border}; background: {$this->bg}; font-size: {this->articleBodyFontSize}px;'>
            <h2>{$this->title};</h2>
            <p>{$this->articleBody};</p>
                      </div>";
  }
}

$newsItem = new Article('Спортивная новость', 20, 'lorem ipsum dollar', 14, '1px solid #2e2e2e', 'grey');

$newsItem->publishArticle();
