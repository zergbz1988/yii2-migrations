add to your composer.json file:


    "zergbz1988/yii2-migrations": "@dev"

  "scripts": {
    "post-install-cmd": "php vendor/zergbz1988/yii2-migrations/init --env=Prod --overwrite=n"
  }
