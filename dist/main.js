window.onload=()=>{console.log("Page loaded.");let e={};!function(){if(localStorage.getItem("utm_param_data")){let t=JSON.parse(localStorage.getItem("utm_param_data")),a=new Date(t.expiry);if(Date.now()>a.getTime())return void localStorage.removeItem("utm_param_data");e={...t.detectedParams}}}(),function(){const t=new URLSearchParams(window.location.search);["utm_source","utm_medium","utm_term","utm_content","utm_campaign","gclid","email","username"].forEach((a=>{t.get(a)&&(e[a]=t.get(a))}))}(),function(){let t=new Date((new Date).getFullYear(),(new Date).getMonth()+1,(new Date).getDate());localStorage.getItem("utm_param_data")&&(t=new Date(JSON.parse(localStorage.getItem("utm_param_data")).expiry)),localStorage.setItem("utm_param_data",JSON.stringify({detectedParams:e,expiry:t}))}(),function(){let t=document.querySelectorAll(".wrap a.btn");Object.keys(e).length>0&&t.length>0&&t.forEach((t=>{let a=new URL(t.href),r=new URLSearchParams(a.search);Object.keys(e).forEach((t=>{r.set(t,e[t])})),t.href+="?"+r.toString().replace("+","%20")}))}()};