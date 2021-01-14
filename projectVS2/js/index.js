window.onscroll = function() {
    myFunction();
};

function myFunction() {
    if (document.body.scrollTop > 68 || document.documentElement.scrollTop > 68) {
        document.getElementById("sidebar").className = "fixed";
        document.getElementById("content").className = "content";
        document.getElementById("under-sidebar").className = "under-sidebar-after";
    } else {
        document.getElementById("sidebar").className = "sidebar";
        document.getElementById("under-sidebar").className = "under-sidebar";
    }
}
// get data infor

function showInfor(first_name, last_name, birthday, address, phone, position, gmail, skype, facebook, git, image) {
    let showList = document.querySelector('#sidebar');
    showList.insertAdjacentHTML(
        "beforeEnd",
        `
          <div class="stickyColumn">
          <div class="avartar">
              <img src="../img/${image}" alt="" class="img1">
          </div>
          <div class="textCenter">
              <h3 class="title_sidebar-name"><span class="spanFirtName">${first_name}</span> ${last_name}</h3>
              <div class="badges badge--gray">${position}</div>
              <div class="social">
                  <a href="${facebook}" class="social-link"><i class="font-icon fab fa-facebook-f"></i></a>
                  <a href="" class="social-link"><i class="font-icon fab fa-instagram"></i></a>
                  <a href="${git}" class="social-link"><i class="font-icon fab fa-github"></i></a>
              </div>
          </div>
          <ul class="contactBlock">
              <li class="contactBlock-items" title="Birthday"><i class="far fa-calendar"></i>${birthday}</li>
              <li class="contactBlock-items" title="Address"><i class="fas fa-map-marker-alt"></i>${address}</li>
              <li class="contactBlock-items" title="E-mail" style="font-size:14px"><i class="far fa-envelope"></i>${gmail}</li>
              <li class="contactBlock-items" title="Phone"><i class="fas fa-mobile"></i>${phone}</li>
              <li class="contactBlock-items" title="Skype"><i class="fab fa-skype"></i>${skype}</li>

          </ul>
      </div>
    `
    );
}

const api_url = "http://localhost/test_api/api/infor/read.php";

async function getapi(url) {
    await fetch(url, {
            method: "GET",
        })
        .then((response) => response.json())
        .then((data) => {
            let x = data.data[0];
            let first_name = x.first_name
            let last_name = x.last_name
            let birthday = x.birthday
            let address = x.address
            let phone = x.phone
            let position = x.position
            let gmail = x.gmail
            let skype = x.skype
            let facebook = x.facebook
            let git = x.git
            let image = x.image
            
            showInfor(first_name, last_name, birthday, address, phone, position, gmail, skype, facebook, git, image)
            
        })
        .catch((error) => {
            console.error("Error:", error);
        });
}

getapi(api_url);

// let NameSkill = document.querySelector(".name-skill");
// let percentSkill = document.querySelector(".percent-skill");
// console.log(percentSkill.getAttribute("value"));
// console.log(NameSkill.getAttribute("value"))
window.addEventListener("load", () => {
    let progessBars = document.querySelectorAll(".progess-bar");
    // let values = document.querySelectorAll(".percent-skill")
    // let Arr=[]
    
    // values.forEach((Arr,index)=>{
    //     Arr.push(values.getAttribute("data-value"))
    // })
    // console.log(values.value)
    console.log("hello")
    
    let val = ["80%","70%","90%"];
    
    progessBars.forEach((progess, index) => {
        progess.style.width = val[index]
    })

})

