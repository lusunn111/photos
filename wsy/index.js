function imgs(img){
var url = "https://cdn.jsdelivr.net/gh/mlxxs/photos/wsy/";
url=url+string(rand(1,51));
url=url+".jpg";
img.src = url;
img.onerror = null;
}