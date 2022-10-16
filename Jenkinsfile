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
        sh '''pwd
	ls'''
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
