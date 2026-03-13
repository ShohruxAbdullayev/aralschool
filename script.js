const visionContent = {
    about: {
        title: "About",
        text: "The Aral School is a nomadic educational platform that investigates the complex relationship between human activity and environmental change in the Aral Sea region. We invite researchers, designers, and scientists to collaborate on sustainable futures in one of the most challenging ecological contexts on Earth. By connecting global expertise with local wisdom, we aim to design resilient systems for the generations to come.",
        pos: { top: "350px", left: "10%" }
    },
    goals: {
        title: "Goals",
        text: "The Aral school wants to connect a new generation of design practitioners, and position Uzbekistan as a global laboratory of the future. Working from the Aral Sea region context, the initiative promotes regenerative practices, stimulates new ways of learning and collaborating, and learns from local know-how, communities and stakeholders. \n\nThe postgraduate programme brings together twenty participants per year, each cohort contributing to create a growing global community around themes of sustainability and regeneration. With a yearly programme of events around the globe, including a presentation at the Milan Design Week 2026 and the Aral Culture Summit later on in October 2026, the Aral School becomes a global platform for knowledge exchange on ecological restoration and sustainability.",
        pos: { top: "380px", left: "47%" }
    },
    mission: {
        title: "Mission",
        text: "Our mission is to foster a new generation of bioregional designers who can propose radical solutions for ecological restoration. Through interdisciplinary research and hands-on making, we strive to build a community of practice that values local knowledge as much as scientific innovation. We believe in the power of design to imagine and prototype futures that are both ecologically sound and socially just.",
        pos: { top: "500px", left: "20%" }
    }
};

let activeTrigger = null;

function openVisionModal(section) {
    const modal = document.getElementById('visionModal');
    const title = document.getElementById('visionModalTitle');
    const text = document.getElementById('visionModalText');
    const content = visionContent[section];
    
    if (activeTrigger) activeTrigger.style.opacity = '1';

    const trigger = event.currentTarget;
    activeTrigger = trigger;
    const box = trigger.closest('.vision-box');
    
    if (content) {
        title.innerText = content.title;
        text.innerText = content.text;
        
        const boxTop = box.offsetTop;
        const boxLeft = box.offsetLeft;
        const boxHeight = box.offsetHeight;
        const boxWidth = box.offsetWidth;
        
        modal.style.top = (boxTop + boxHeight - 43) + "px"; 
        modal.style.left = (boxLeft + boxWidth - 460) + "px";
        
        modal.classList.add('active');
        trigger.style.opacity = '0';
    }
}

function closeVisionModal() {
    const modal = document.getElementById('visionModal');
    if (modal.classList.contains('active')) {
        modal.classList.remove('active');
        if (activeTrigger) {
            activeTrigger.style.opacity = '1';
            activeTrigger = null;
        }
    }
}

document.addEventListener('mousedown', (e) => {
    const modal = document.getElementById('visionModal');
    if (modal && modal.classList.contains('active')) {
        if (!modal.contains(e.target) && !e.target.closest('.vision-label')) {
            closeVisionModal();
        }
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        item.addEventListener('click', () => {
            item.classList.toggle('active');
        });
    });

    const mobileToggle = document.getElementById('mobileNavToggle');
    if (mobileToggle) {
        mobileToggle.addEventListener('click', toggleMobileMenu);
    }
});

function toggleMobileMenu() {
    const menu = document.getElementById('mobileMenu');
    const toggle = document.getElementById('mobileNavToggle');
    menu.classList.toggle('active');
    toggle.classList.toggle('active');
    
    if (menu.classList.contains('active')) {
        document.body.style.overflow = 'hidden';
    } else {
        document.body.style.overflow = '';
    }
}