"use strict";
let ProjectArray = [
    {
        'name':"Shrikant hospital & Research Institute",
        'desc':"Shrikant hospital is a multispecialist hospital and they provide many facilities but there speciality is pediatrics treatment ",
        'date':"may, 2024",
        'tech':"html5,css3,js",
        'type':"Health & Care",
        'url':"https://www.shishubhawan.com",
        'imgUrl':"hospital1.png"
    },
    {
        'name':"Shrikant hospital & Research Institute",
        'desc':"Shrikant hospital is a multispecialist hospital and they provide many facilities but there speciality is pediatrics treatment ",
        'date':"may, 2024",
        'tech':"html5,css3,js",
        'type':"Health & Care",
        'url':"https://www.shishubhawan.com",
        'imgUrl':"chatbot.png"
    },
    {
        'name':"Shrikant hospital & Research Institute",
        'desc':"Shrikant hospital is a multispecialist hospital and they provide many facilities but there speciality is pediatrics treatment ",
        'date':"may, 2024",
        'tech':"html5,css3,js",
        'type':"Health & Care",
        'url':"https://www.shishubhawan.com",
        'imgUrl':"hospital.jpg"
    },
    {
        'name':"Shrikant hospital & Research Institute",
        'desc':"Shrikant hospital is a multispecialist hospital and they provide many facilities but there speciality is pediatrics treatment ",
        'date':"may, 2024",
        'tech':"html5,css3,js",
        'type':"Health & Care",
        'url':"https://www.shishubhawan.com",
        'imgUrl':"hospital.jpg"
    }
];

ProjectArray.forEach((item, index)=>{
    project_row.innerHTML+=`
        <div class="mt-5 p-2 project-cards" data-aos="zoom-in">
            <h3 class="text-white font-serif">${item.name}</h3>
            <p class="text-gray">${item.desc}</p>

            <div class="project-card-row">
                <div class="project-card-aside">
                    <img src="img/${item.imgUrl}" alt="${item.name}-img" width="100%" height="100%">
                </div>

                <div class="project-card-bside p-3">
                    <table>
                        <tbody class="text-gray">
                            <tr>
                                <td>Date</td>
                                <td>:</td>
                                <td>${item.date}</td>
                            </tr>
                            <tr>
                                <td>Tech</td>
                                <td>:</td>
                                <td>${item.tech}</td>
                            </tr>
                            <tr>
                                <td>Type</td>
                                <td>:</td>
                                <td>${item.type}</td>
                            </tr>
                            <tr>
                                <td>URL</td>
                                <td>:</td>
                                <td>${item.url}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    `;
});



/************************************************Media-query-js**********************************************************/
function medQueryFun(){
    if(x.matches){
        document.querySelector("#home").style.display="none";   //hide profile descriptions

        front_view.innerHTML=`
            <div class="container">
                <div>
                    <h2 class="zoom-in-element font-cursive text-white">My Self, <span class="text-yellow">Sameer Sinha</span></h2>

                    <p class="text-gray zoom-in-element">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum excepturi architecto, soluta totam eligendi pariatur. Corrupti harum, expedita quasi dolore, doloremque voluptatum quaerat.</p>

                    <div class="clearfix">
                        <div class="cv_btn float-end mt-3 zoom-in-element">
                            <a href="/img/SameerSinhaResume.pdf" download>Download CV</a>
                        </div>
                    </div>

                    <!-----------------------------Personal-Image---------------------------->
                    <div class="personal-img position-relative zoom-in-element mt-5">
                        <img src="img/edit img1.jpeg" alt="personal-img" width="100%" height="100%">
                    </div>

                    <h2 class="font-cursive text-white mt-2 zoom-in-element">I am a <br /> <span class="text-yellow">Frontend Developer</span></h2>
                </div>
            </div>
        `;

    }
    else{
        document.querySelector("#home").style.display="block";
        document.querySelector("#front_view").style.display="none";
    }
}

// Create a MediaQueryList object
var x = window.matchMedia("(max-width: 1110px)");

// Call listener function at run time
medQueryFun(x);

// Attach listener function on state changes
x.addEventListener("change", function() {
    medQueryFun(x);
});


/***************************go to top of the page when load the page********************/
// window.addEventListener('load', function() {
//     window.scrollTo(0, 0);
// });


/*************************inquiry-msg-sending-js*******************/
function goToWhatsapp() {
    var name = document.getElementById("name").value;
    var phone = document.getElementById("email").value;
    var email = document.getElementById("message").value;
    var url = "https://wa.me/919770661844?text="
    + "Name: " + name + "%0a"
    + "Email: " + email + "%0a"
    + "Message: " + message;
    window.open(url, '_blank').focus();
}