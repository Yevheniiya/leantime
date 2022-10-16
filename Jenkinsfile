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
        sh '''cp exampleTest.php tests/exampleTest.php'''
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
