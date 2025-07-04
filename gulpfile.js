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
  "app/js/_src/*.js",
];

function styles() {
  return src("app/scss/style.scss")
    .pipe(autoprefixer({ overrideBrowserslist: ["last 10 version"] }))
    .pipe(concat("style.css"))
    .pipe(scss({ outputStyle: "compressed" }))
    .pipe(dest("app/css"))
    .pipe(browserSync.stream());
}

function scripts() {
  return src(scriptsPaths)
    .pipe(concat("main.min.js"))
    .pipe(uglify())
    .pipe(dest("app/js"))
    .pipe(browserSync.stream());
}

function images() {
  return src("app/images/_src/**/*.*")
    .pipe(newer("app/images/"))
    .pipe(webp())
    .pipe(dest("app/images/"));
}

function fonts() {
  return src("app/fonts/_src/*.*")
    .pipe(
      fonter({
        formats: ["woff", "ttf"],
      })
    )
    .pipe(src("app/fonts/*.ttf"))
    .pipe(ttf2woff2())
    .pipe(dest("app/fonts"));
}

function watching() {
  browserSync.init({
    proxy: "http://krimok",
    host: "krimok",
    open: "external",
  });
  watch(["app/scss/**/*.scss"], styles);
  watch(["app/images/_src/"], images);
  watch(["app/js/_src/*.js"], scripts);
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
