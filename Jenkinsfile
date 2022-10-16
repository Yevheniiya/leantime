pipeline {
  agent any
  stages {
    stage('verify php version') {
      steps {
        sh 'php --version'
      }
    }
    stage('start hello world test') {
      steps {
        sh '''cp exampleTest.php /home/jenkins/tests/exampleTest.php
	cd /home/jenkins/
	ls
	./vendor/bin/phpunit'''
      }
    }
    stage('start app') {
      steps {
        sh '''cd public 
	ls
	php index.php'''
      }
    }
  }
}
