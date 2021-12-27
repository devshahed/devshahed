function submit(){
    let title = document.getElementById('title').value;
    let sdesc = document.getElementById('sdesc').value;
    let desc = textField.document.body.innerHTML;
    let bannerImage = document.getElementById('bannerImage').files[0];
    let form_data = new FormData();
    form_data.append("title", title);
    form_data.append("sdesc", sdesc);
    form_data.append("desc", desc);
    form_data.append("bannerImage", bannerImage);
    async function data(){
        try{
            return (await fetch("savepost.php", {
                method: 'POST',
                body: form_data
            })).text();
        }catch(err){
            console.log(err);
        }
    }
    data().then(result => document.getElementById('saved').innerHTML=result);
}