// JavaScript Document
function st_osgo(obj){
  var a=obj.k1.value;
  var b=obj.k2.value;
  var c=obj.k4.value;
  var d=obj.bm.value;
  var s=180*a*b*c*d;
  s=s.toFixed(2);
  obj.res.value=s;
}