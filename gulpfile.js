const { src, dest, watch, parallel } = require("gulp");

const scss = require("gulp-sass")(require("sass"));
const concat = require("gulp-concat");
const uglify = require("gulp-uglify-es").default;
const browserSync = require("browser-sync").create();
const autoprefixer = require("gulp-autoprefixer");
const webp = require("gulp-webp");
const newer = require("gulp-newer");
const fonter = require("gulp-fonter");
const ttf2woff2 = require("gulp-ttf2woff2");

const scriptsPaths = [
  "node_modules/@fancyapps/ui/dist/fancybox/fancybox.umd.js",
  "node_modules/swiper/swiper-bundle.min.js",
  "assets/js/_src/*.js",
];

function styles() {
  return src("assets/scss/style.scss")
    .pipe(autoprefixer({ overrideBrowserslist: ["last 10 version"] }))
    .pipe(concat("style.css"))
    .pipe(scss({ outputStyle: "compressed" }))
    .pipe(dest("assets/css"))
    .pipe(browserSync.stream());
}

function scripts() {
  return src(scriptsPaths)
    .pipe(concat("main.min.js"))
    .pipe(
      uglify({
        mangle: false,
      })
    )
    .pipe(dest("assets/js"))
    .pipe(browserSync.stream());
}

function images() {
  return src("assets/images/_src/**/*.*")
    .pipe(newer("assets/images/"))
    .pipe(webp())
    .pipe(dest("assets/images/"));
}

function fonts() {
  return src("assets/fonts/_src/*.*")
    .pipe(
      fonter({
        formats: ["woff", "ttf", "otf"],
      })
    )
    .pipe(src("assets/fonts/*.ttf"))
    .pipe(ttf2woff2())
    .pipe(dest("assets/fonts"));
}

function watching() {
  browserSync.init({
    proxy: "http://abakumov",
    host: "abakumov",
    open: "external",
  });
  watch(["assets/scss/**/*.scss"], styles);
  watch(["assets/images/_src/"], images);
  watch(["assets/js/_src/*.js"], scripts);
  watch(["*.php"]).on("change", () => {
    browserSync.reload();
  });
}

exports.images = images;
exports.fonts = fonts;
exports.scripts = scripts;
exports.styles = styles;
exports.watching = watching;

exports.default = parallel(fonts, styles, images, scripts, watching);
