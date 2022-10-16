
pipeline {
  node{
  stages {
    stage('verify php version') {
      steps {
        sh 'php --version'
      }
    }
    stage('run  hello world test') {
      steps {
        sh '''cp exampleTest.php tests/exampleTest.php
	./vendor/bin/phpunit'''
      }
    }
    stage('start application') {
      steps {
        sh '''cd public 
	ls
	php index.php'''
      }
    }
  }
}
}
