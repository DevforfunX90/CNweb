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
                        <span class="percent-skill" value="80">80%</span>
                    </div>
                </div>
            </div>
            <div class="skill">
                <span class="name-skill" value="Web Design">HTML</span>
                <div class="progess">
                    <div class="progess-bar">
                        <span class="percent-skill" value="70">70%</span>
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
window.addEventListener("load",async ()=>{
  let progessBars = document.querySelector(".progess-bar");
  let value =["80%","70%"];
  console.log('hello')
//   Array.prototype.forEach.call(progessBars,(progess,index)=>{
//       progess.style.width =value[index]
//       console.log('hello')
//   })
await progessBars.forEach((progess,index)=>{
    progess.style.width =value[index]
})

})
</script>
<?php
    require_once './footer.php';
?>