<?php
//File: Designer.php
class Designer
{
    public $name = '';
    public $portfolioUrl = '';

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getPortfolioUrl(): string
    {
        return $this->portfolioUrl;
    }

    public function setPortfolioUrl(string $portfolioUrl)
    {
        $this->portfolioUrl = $portfolioUrl;
    }
}

//File: Programmer.php
class Programmer
{
    public $name = '';
    public $githubUrl = '';

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getGithubUrl(): string
    {
        return $this->githubUrl;
    }

    public function setGithubUrl(string $githubUrl)
    {
        $this->githubUrl = $githubUrl;
    }
}


//File: index.php
//... some code...
$programmer = new Programmer();
$programmer->setName('John Doe')
    ->setGithubUrl('https://github.com/github');

//... some more code...
$designer = new Designer();
$designer->setName('Jane Smith')
    ->setPorfolio('https://www.behance.net/jane_smthith_90');


//... some more code...
