# Phase Blog Demo

[▲ Deploy to Vercel (formerly ZEIT)](https://vercel.co/new/project?template=https://github.com/reed-jones/phase-blog-demo/tree/master/)

Here is a minimal Phase blog theme heavily inspired by the [Gatsby Lumen](https://github.com/alxshelepenok/gatsby-starter-lumen).

This project comes out of the box with [Phase](https://phased.dev) & [Tailwind](https://tailwindcss.com) and is based on the latest Laravel 7.x version

---
### Deployment with Vercel

Some slight modifications have been made to the base laravel install to make this work on Vercel. In the AppServiceProvider a few things have been added to make the Vercel deploy slightly smoother.

The most important thing to note is the new `VERCEL_DEMO_MODE` environment variable added to `now.json` which sets the APP_KEY on every request. This is needed for the initial deploy to work as there is no way to set environment variables prior to deploy. It is _highly_ encouraged to add an APP_KEY as soon as possible, without
this some parts of laravel may not work as expected.

Also you may notice that we are creating some directories in the boot method. This is due to the fact that Vercel deploys are read-only with the exception of the `/tmp` directory and so any temporary files such as the ones required for Vue.js Server Side Rendering will be created there.

Other key things to take note of if you are new to Vercel are the environment variables set are set in `now.json`. Some are as you would expect such as `APP_ENV` & `APP_URL`, however any secrets (such as `APP_KEY`) should be set using [Vercels Environment Variables](https://vercel.com/docs/v2/build-step#environment-variables).
