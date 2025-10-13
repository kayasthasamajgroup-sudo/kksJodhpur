
document.addEventListener('DOMContentLoaded', function () {
  const steps = Array.from(document.querySelectorAll('.step'));
  const nextBtns = document.querySelectorAll('.next-btn');
  const prevBtns = document.querySelectorAll('.prev-btn');
  const stepIndicators = document.querySelectorAll('.step-indicator');
  let currentStep = 0;

  function showStep(n) {
    steps.forEach((s, i) => s.classList.toggle('active', i === n));
    stepIndicators.forEach((ind, i) => ind.classList.toggle('active', i <= n));
  }

  function validateStep(index) {
    const step = steps[index];
    const fields = Array.from(step.querySelectorAll('input, select'));
    let valid = true;

    fields.forEach(field => {
      if (!field.checkValidity()) {
        field.classList.add('is-invalid');
        valid = false;
      } else {
        // Extra file checks
        if (field.type === 'file' && field.files.length) {
          const file = field.files[0];
          const maxSize = (field.name === 'receipt') ? 5 : 2; // receipt 5MB, others 2MB
          if (!file.type.startsWith('image/')) {
            field.classList.add('is-invalid');
            valid = false;
          } else if (file.size > maxSize * 1024 * 1024) {
            field.classList.add('is-invalid');
            valid = false;
          } else {
            field.classList.remove('is-invalid');
          }
        } else {
          field.classList.remove('is-invalid');
        }
      }
    });

    return valid;
  }

  nextBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      if (!validateStep(currentStep)) return;
      if (currentStep < steps.length - 1) {
        currentStep++;
        showStep(currentStep);
      }
    });
  });

  prevBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      if (currentStep > 0) {
        currentStep--;
        showStep(currentStep);
      }
    });
  });

  document.getElementById('multiStepForm').addEventListener('submit', function (e) {
    for (let i = 0; i < steps.length; i++) {
      if (!validateStep(i)) {
        e.preventDefault();
        currentStep = i;
        showStep(currentStep);
        return false;
      }
    }
    // form passes -> let Laravel handle it
  });

  showStep(0);
});

document.addEventListener('DOMContentLoaded', function () {
  var toastEl = document.getElementById('successToast');
  if(toastEl){
      var toast = new bootstrap.Toast(toastEl, { delay: 50000 });
      toast.show();
  }
});

$(document).ready(function(){
  $('.testimonial-carousel').owlCarousel({
      margin:25,
      nav:true,
      autoWidth:false,
      responsive:{
          0:{      // Mobile
              items:3,
              loop:false,    // 👈 clones off
              margin:5       // tight spacing
          },
          576:{ items:3, loop:true },
          768:{ items:3, loop:true },
          992:{ items:3, loop:true }
      }
  });
});


document.addEventListener('DOMContentLoaded', function () {
  const steps = Array.from(document.querySelectorAll('.step'));
  let currentStep = 0;

  function showStep(n) {
    steps.forEach((s, i) => s.classList.toggle('active', i === n));
  }

  function validateStep(index) {
    const step = steps[index];
    const fields = Array.from(step.querySelectorAll('input, select'));
    let valid = true;

    fields.forEach(field => {
      const feedback = field.nextElementSibling; // assumes .invalid-feedback is next
      if (!field.checkValidity()) {
        field.classList.add('is-invalid');
        if (feedback) feedback.style.display = 'block';
        valid = false;
      } else {
        field.classList.remove('is-invalid');
        if (feedback) feedback.style.display = 'none';
      }

      // Real-time listener to hide message as user types/selects
      field.addEventListener('input', () => {
        if (field.checkValidity()) {
          field.classList.remove('is-invalid');
          if (feedback) feedback.style.display = 'none';
        }
      });
      field.addEventListener('change', () => {
        if (field.checkValidity()) {
          field.classList.remove('is-invalid');
          if (feedback) feedback.style.display = 'none';
        }
      });
    });

    return valid;
  }

  // Next/Prev buttons (same as before)
  document.querySelectorAll('.next-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      if (!validateStep(currentStep)) return;
      if (currentStep < steps.length - 1) currentStep++;
      showStep(currentStep);
    });
  });

  document.querySelectorAll('.prev-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      if (currentStep > 0) currentStep--;
      showStep(currentStep);
    });
  });

  document.getElementById('multiStepForm').addEventListener('submit', function (e) {
    for (let i = 0; i < steps.length; i++) {
      if (!validateStep(i)) {
        e.preventDefault();
        currentStep = i;
        showStep(currentStep);
        return false;
      }
    }
  });

  showStep(0);
});


