<?php

namespace Orweb\EasyLastTweetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TwitterController extends Controller
{
    public function lastTweetAction($screen, $number)
    {
        $tweets = $this->get('orweb.twitter')->getLastTweets($screen, $number, false, true);
        $template = $this->container->getParameter('tweet_template');

        return $this->render(
            empty($template) ? "OrwebEasyLastTweetBundle:Twitter:last.html.twig" : $template, [
            'tweets' => $tweets
        ]);
    }


}
