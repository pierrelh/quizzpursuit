provider "heroku" {
  email   = var.heroku_email
  api_key = var.heroku_api_key
}

variable "heroku_api_key" {
}

variable "heroku_email" {
}

# Create new app
resource "heroku_app" "staging" {
  name   = "stagingprojectName"
  region = "eu"

  buildpacks = [
    "heroku/php",
  ]
}

# Create new app
resource "heroku_app" "production" {
  name   = "productionprojectName"
  region = "eu"

  buildpacks = [
    "heroku/php",
    "https://github.com/a2ikm/heroku-buildpack-libjpeg-turbo.git",
  ]
}

# Create a Heroku pipeline
resource "heroku_pipeline" "projectNamepipeline" {
  name = "projectNamepipeline"
}

# Couple apps to different pipeline stages
resource "heroku_pipeline_coupling" "staging" {
  app      = heroku_app.staging.name
  pipeline = heroku_pipeline.projectNamepipeline.id
  stage    = "staging"
}

resource "heroku_pipeline_coupling" "production" {
  app      = heroku_app.production.name
  pipeline = heroku_pipeline.projectNamepipeline.id
  stage    = "production"
}
