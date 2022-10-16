pipeline {
  agent any
  stages {
    stage('verify version') {
      steps {
        sh 'php --version'
      }
    }
    stage('hello') {
      steps {
        sh '''cp exampleTest.php /home/jenkins/tests/exampleTest.php
	cd /home/jenkins/
	ls
	./vendor/bin/phpunit'''
      }
    }
    stage('open') {
      steps {
        sh '''cd public 
	ls
	php index.php'''
      }
    }
  }
}
