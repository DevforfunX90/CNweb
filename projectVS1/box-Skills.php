<?php
    require_once './header.php';
?>
<div class="section">
    <div class="mySkills">
        <h2 class="mySkills">My Skills</h2>
        <div class="boxSkills">
            <div class="skill">
                <span class="name-skill" value="Web Design">Web Design</span>
                <div class="progess">
                    <div class="progess-bar">
                        <span class="percent-skill" data-value="80%">80%</span>
                    </div>
                </div>
            </div>
            <div class="skill">
                <span class="name-skill" value="Web Design">Graphic </span>
                <div class="progess">
                    <div class="progess-bar">
                        <span class="percent-skill" data-value="70%">70%</span>
                    </div>
                </div>
            </div>
            <div class="skill">
                <span class="name-skill" value="Web Design">HTML</span>
                <div class="progess">
                    <div class="progess-bar">
                        <span class="percent-skill" data-value="90%">90%</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script>
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
    
    
    let val = ["80%","70%","90%"];
    
    progessBars.forEach((progess, index) => {
        progess.style.width = val[index]
    })

})
</script>
<?php
    require_once './footer.php';
?>