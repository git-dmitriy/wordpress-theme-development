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
  public function __construct(string $title, int $titleFontSize, string $articleBody, int $articleBodyFontSize, string $border, string $bg, string $image)
  {
    $this->image = $image;
    parent::__construct($title, $titleFontSize, $articleBody, $articleBodyFontSize, $border, $bg);
  }
  public function publishArticle()
  {
    echo "<div style='border: {$this->border}; background: {$this->bg}; font-size: {$this->articleBodyFontSize}px;'>
            <h2>{$this->title}</h2>
            <p>{$this->articleBody} <img src='{$this->image}'> </p>
          </div>";
  }
}

class WeatherArticle extends Article
{
  public $temperature;
  public function __construct(string $title, int $titleFontSize, string $articleBody, int $articleBodyFontSize, string $border, string $bg, string $temperature)
  {
    $this->temperature = $temperature;
    parent::__construct($title, $titleFontSize, $articleBody, $articleBodyFontSize, $border, $bg);
  }
  public function publishArticle()
  {
    echo "<div style='border: {$this->border}; background: {$this->bg}; font-size: {$this->articleBodyFontSize}px;'>
            <h2>{$this->title}</h2>
            <p>{$this->articleBody} <span>{$this->temperature}</span></p>
          </div>";
  }
}

class PoliticsArticle extends Article
{
  public $link;
  public function __construct(string $title, int $titleFontSize, string $articleBody, int $articleBodyFontSize, string $border, string $bg, string $link)
  {
    $this->link = $link;
    parent::__construct($title, $titleFontSize, $articleBody, $articleBodyFontSize, $border, $bg);
  }
  public function publishArticle()
  {
    echo "<div style='border: {$this->border}; background: {$this->bg}; font-size: {$this->articleBodyFontSize}px;'>
            <h2>{$this->title}</h2>
            <p>{$this->articleBody} <a href='https://{$this->link}'>{$this->link}</a></p>
          </div>";
  }
}

$sportNews = new SportArticle('Sport news', 20, 'Sport is the foundation of health', 16, '2px dashed red', 'yellow', './../career_profile/assets/images/profile.png');
$sportNews->publishArticle();

$weatherNews = new WeatherArticle('Weather news', 20, 'Weather is the foundation of leisure', 16, '2px dashed red', 'green', '+29 C');
$weatherNews->publishArticle();

$politicsNews = new PoliticsArticle('Politics news', 20, 'Politics is the foundation of dispute', 16, '2px dashed red', 'pink', 'google.com');
$politicsNews->publishArticle();
