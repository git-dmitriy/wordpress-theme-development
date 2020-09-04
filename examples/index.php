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
    echo "<div style='border: {$this->border}; background: {$this->bg}; font-size: {$this->articleBodyFontSize}px;'>
            <h2>{$this->title}</h2>
            <p>{$this->articleBody}</p>
                      </div>";
  }
}

class SportArticle extends Article
{
  public $image;
}

class WeatherArticle extends Article
{
  public $temperature;
}

class PoliticsArticle extends Article
{
  public $link;
}

$sportNews = new SportArticle('Sport news', 20, 'Sport is the foundation of health', 16, '2px dashed red', 'yellow');
$sportNews->publishArticle();

$weatherNews = new WeatherArticle('Weather news', 20, 'Weather is the foundation of leisure', 16, '2px dashed red', 'green');
$weatherNews->publishArticle();

$politicsNews = new PoliticsArticle('Politics news', 20, 'Politics is the foundation of dispute', 16, '2px dashed red', 'pink');
$politicsNews->publishArticle();
