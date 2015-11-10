<?php
switch (date("G")) {
    case 10:
        print " 10時のおやつです。";
        break;
        case 15:
        print " 15時のおやつです。";
        break;
        default:
        print " おやつではありません。";
}