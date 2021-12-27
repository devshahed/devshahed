const buttons = document.querySelectorAll('button');
var show = false;
textField.document.designMode = "on";

for(let i = 0; i < buttons.length; i++){
    buttons[i].addEventListener('click', ()=>{
        let cmd = buttons[i].getAttribute('data-cmd');
        let tag = buttons[i].getAttribute('data-tag');
        buttons[i].classList.toggle('active');
        if(cmd === "bold"){
            textField.document.execCommand(cmd);
        }
        if(cmd === "italic"){
            textField.document.execCommand(cmd);
        }
        if(cmd === "underline"){
            textField.document.execCommand(cmd);
        }
        if(cmd === "justifyLeft"){
            textField.document.execCommand(cmd);
        }
        if(cmd === "justifyCenter"){
            textField.document.execCommand(cmd);
        }
        if(cmd === "justifyFull"){
            textField.document.execCommand(cmd);
        }
        if(cmd === "justifyRight"){
            textField.document.execCommand(cmd);
        }
        if(cmd === "insertImage"){
            let url = prompt("Enter Image Url: ");
            textField.document.execCommand(cmd, false, url);
            let imgs = textField.document.querySelectorAll('img');
            imgs.forEach(item => {
                item.width = "400";
                item.height = "300";
            });
        }
        if(cmd === "createLink"){
            let url = prompt("Enter Url: ");
            textField.document.execCommand(cmd, false, url);
            let links = textField.document.querySelectorAll('a');
            links.forEach(item => {
                item.target = "_blank";
                item.addEventListener('mouseover', ()=>{
                    textField.document.designMode = "off";
                });
                item.addEventListener('mouseout', ()=>{
                    textField.document.designMode = "on";
                });
            });
        }
        if(cmd === "insertOrderedList"){
            textField.document.execCommand(cmd);
        }
        if(cmd === "insertUnorderedList"){
            textField.document.execCommand(cmd);
        }
        if(cmd === "formatBlock"){
            if(tag === "h1"){
                textField.document.execCommand(cmd,false, tag)
            }
            if(tag === "h2"){
                textField.document.execCommand(cmd,false, tag)
            }
            if(tag === "h3"){
                textField.document.execCommand(cmd,false, tag)
            }
            if(tag === "h4"){
                textField.document.execCommand(cmd,false, tag)
            }
            if(tag === "h5"){
                textField.document.execCommand(cmd,false, tag)
            }
            if(tag === "h6"){
                textField.document.execCommand(cmd,false, tag)
            }
            if(tag === "p"){
                textField.document.execCommand(cmd,false, tag)
            }
        }
    });
}
let select = document.getElementById("fontSizeSelect");
select.onchange = ()=>{
    let cmd = select.getAttribute('data-cmd');
    let size = select.value;
    textField.document.execCommand(cmd, false, size);
}

function prev(event){
    let banner = document.getElementById('banner');
    banner.src = URL.createObjectURL(event.target.files[0]);
}
