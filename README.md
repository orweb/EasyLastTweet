# lastTweet
Symfony 2 bundle to add quickly last tweets on your website, you can choose and change the screen name, 
override template and use your own template, this bundle reqiure dependency on abraham/twitteroauth bundle

# Installation

## prerequisites
when you install OrwebEasyLastTweetBundle for symfony, this dependency will be add :
    
    https://github.com/abraham/twitteroauth

## installation
    
1. Add this bundle to your project in composer.json:
    
<pre>
{
    "require": {
        "orweb/EasylastTweet": "^1.0",
    }
}
</pre>

2. Install with composer

<pre>
composer.phar require orweb/EasylastTweet 
</pre>

3. Register the bundle


```php
<?php
// app/AppKernel.php
public function registerBundles()
{
    $bundles = array(
        // ...
        new \Orweb\EasyLastTweetBundle\OrwebEasyLastTweetBundle(),
    );
    // ...
}
```

#configuration 

##application twitter

first you must create an twitter application  on https://apps.twitter.com/ ,and create a token (read permission)

##parameters

you must add your twitter api parameters in app/config/config.yml, the required parameters must be added like this :

```yml
# app/config/config.yml
orweb_easy_last_tweet:
    twitter:
        consumer_key: "your_application_key"
        consumer_secret: "your_application_secret_key"
        token: "your_application_token"
        token_secret: "your_application_token_secret"
```


#Usage

##twig usage: 

just add this render command in your twig template (in this example we display the last 3 tweets 
from the @lyfeor account) :
<pre>
{% render path('orweb_easy_last_tweet', {screen: 'lyfeor', number: 3}) %}
</pre>

##controller usage:

if you want to use it in a controller you can get an entity Array 
with this code: 

```php
<?php
// src/controller/someController.php
public function someAction()
{
    $tweets = $this->get('orweb.twitter')->getLastTweets($screen, $number);
    // ...
    
    //if you want retweets and mention 
    $tweets = $this->get('orweb.twitter')->getLastTweets($screen, $number, false, true,true);
}
```

#Override template

if you want to custom the render (in a twig template usage), you cans specify the path of your 
override template in the app/config/config.yml :

##config
```yml
# app/config/config.yml
orweb_easy_last_tweet:
    twitter:
        consumer_key: "your_application_key"
        consumer_secret: "your_application_secret_key"
        token: "your_application_token"
        token_secret: "your_application_token_secret"
    template:
        path: "path/of/custom/template/tweet.html.twig"
```


##template

you can use the "tweets" entities Array like this :

```twig
{% for tweet in tweets %}
    <dl>
        <dt>{{ tweet.getDate() }}</dt>
        <dd>{{ tweet.getFormatText() | raw }}</dd>
    </dl>
{% endfor %}
```

to see all the 'tweet' parameters open the Entity/Tweet.php



