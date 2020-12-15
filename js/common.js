function loadingMsg(data){
    let wrap=document.getElementById(data.id);
    wrap.innerHTML=`<div class="loading-wait">
                        <p>${data.message}</p>
                        ${data.icon}
                        </div>`
}