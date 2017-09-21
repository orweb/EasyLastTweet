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
        "orweb/EasylastTweet": "1.*",
    }
}
</pre>

2. Install with composer

<pre>
composer.phar require orweb/EasylastTweet dev-master
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


