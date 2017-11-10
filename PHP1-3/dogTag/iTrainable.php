<?php

interface ITrainable
{
    function learnTrick($trick);
    function doTrick($trick);
    function getReward($snack);
}