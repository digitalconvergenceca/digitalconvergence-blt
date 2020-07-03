<?php

namespace DigitalConvergence\Blt\Plugin\EnvironmentDetector;

use Acquia\Blt\Robo\Common\EnvironmentDetector;

class EnvironmentVariableDetector extends EnvironmentDetector {

  protected static $environmentName = 'local';

  public static function isLocalEnv() {
    return self::getEnvNameValue() === 'local';
  }

  public static function isDevEnv() {
    return self::getEnvNameValue() === 'dev';
  }

  public static function isStageEnv() {
    return self::getEnvNameValue() === 'stage';
  }

  public static function isProdEnv() {
    return self::getEnvNameValue() === 'prod';
  }

  protected static function getEnvNameValue() {
    if ($value = getenv('ENVIRONMENT_ID')) {
      self::$environmentName = $value;
    }
    return self::$environmentName;
  }

}
