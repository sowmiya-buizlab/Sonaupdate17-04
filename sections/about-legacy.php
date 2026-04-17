<section class="lf-sec">

  <!-- TOP -->
  <div class="lf-top">
    <div class="lf-wrap">

      <h2 class="lf-title">Our Legacy & Foundation</h2>

      <p class="lf-text">
        N.M.S.S. Vijayalakshmi Sanjeeviamalayan Kalviagam is a unit of N.M.S.S. Sa. Vellachamy Nadar Kalloori Peravai , Madurai, which manages N.M.S.S. Vellachamy Nadar College. The college was established in 1965 and named after Virudhunagar philanthropist kodaiVallal S. Vellachamy Nadar.
      </p>

      <p class="lf-text">
        The school is affiliated to Central Board of Secondary Education- New Delhi. It is named after philanthropist Sri. Sanjeeviamalayan and his wife Srimathi Vijayalakshmi for their generous donation of one crore rupees.
      </p>

      <p class="lf-highlight">
        To nurture creativity, critical thinking and problem solving
      </p>

      <!-- PROMISE -->
      <div class="lf-promise">
        <div class="lf-p-left">
          OUR<br> PROMISE
        </div>
        <div class="lf-p-right">
          We are committed to creating an environment where every child enjoys learning while growing into a confident, capable, and well-rounded individual.
        </div>
      </div>

    </div>
  </div>

  <!-- SECTION 1 -->
  <div class="lf-block">
    <div class="lf-flex">

      <div class="lf-img">
        <img src="person1.jpg" alt="">
        <h4>Mr. T. Issac Muthuraj</h4>
        <span>Correspondent</span>
      </div>

      <div class="lf-content">
        <h3>Correspondent’s Message</h3>

        <p>Dear Parents,</p>

        <p>Your child is growing in a rapidly changing world where technology and career paths evolve every day. Yet, traditional education often focuses only on marks and memorization, rather than real understanding and life skills.</p>

        <p>At ViSa, we believe education should go beyond exams. Our focus is on holistic development building critical thinking, confidence, and real-world abilities, not just academic scores. We aim to nurture students who are not only job seekers, but future leaders and creators.</p>

        <p>We also believe in staying rooted in our culture, values, and mother tongue, while preparing students to succeed globally.</p>

        <p>Our commitment is to provide a strong, knowledge-based foundation that helps every child grow into a confident, capable, and responsible individual.</p>

       <a href="#" class="lf-btn" onclick="openProfile('academic')">
  View Academic Chief’s Profile
</a>

      </div>

    </div>
  </div>

  <!-- SECTION 2 -->
  <div class="lf-block alt">
    <div class="lf-flex reverse">

      <div class="lf-content">
        <h3>Academic Chief’s Message</h3>

        <p>Education is the foundation that shapes not just individuals, but the future of society.</p>

        <p>In a rapidly evolving world, it is essential that learning goes beyond textbooks and focuses on building knowledge, character, and real-world understanding.</p>

        <p>At ViSa, we believe in nurturing students with a balanced approach where academic excellence meets values, discipline, and life skills. Our goal is to create an environment where students are encouraged to think independently, act responsibly, and grow with confidence.</p>

       <a href="#" class="lf-btn" onclick="openProfile('correspondent')">
  View Correspondent’s Profile
</a>
      </div>

      <div class="lf-img">
        <img src="person2.jpg" alt="">
        <h4>Mr. S.RETHINAVELU, B.Com., B.L.,</h4>
        <span>Academic Chief</span>
      </div>

    </div>
  </div>

  <!-- SECTION 3 -->
  <div class="lf-block">
    <div class="lf-flex">

      <div class="lf-img">
        <img src="person3.jpg" alt="">
        <h4>R. Shiva Ranjani</h4>
        <span>Principal</span>
      </div>

      <div class="lf-content">
        <h3>Principal’s Message</h3>

        <p>Education is not just about learning facts, but about igniting curiosity, passion, and purpose in every child.</p>

        <p>At ViSa, we focus on new era education, nurturing both the mind and heart through innovative learning, activities, and teamwork.</p>

        <p>We provide a supportive environment where every child can explore their talents, build confidence, and grow into a well-rounded individual ready to face the challenges of the 21st century.</p>

       <a href="#" class="lf-btn" onclick="openProfile('principal')">
  View Principal’s Profile
</a>
      </div>

    </div>
  </div>

</section>

<!-- POPUP MODAL -->
<div class="pf-modal" id="profileModal">
  <div class="pf-box">

    <!-- CLOSE -->
    <span class="pf-close" onclick="closeProfile()">×</span>

    <div class="pf-grid">

      <!-- LEFT -->
      <div class="pf-left">
        <h2 id="pf-name">Mr. S. RETHINAVELU</h2>

        <p id="pf-desc">
          A visionary leader and “Infra Man” of Madurai...
        </p>

        <p class="pf-degree" id="pf-degree">B.Com., B.L.</p>

        <div class="pf-tags">
          <span>Academic Chief</span>
          <span>Founder & CMD</span>
        </div>

        <!-- SECTIONS -->
        <div class="pf-section">
          <h4>KEY POSITIONS</h4>
          <ul id="pf-positions"></ul>
        </div>

        <div class="pf-section">
          <h4>MAJOR ACHIEVEMENTS</h4>
          <ul id="pf-achievements"></ul>
        </div>

        <div class="pf-section">
          <h4>LEADERSHIP & CONTRIBUTIONS</h4>
          <ul id="pf-leadership"></ul>
        </div>
      </div>

      <!-- RIGHT -->
      <div class="pf-right">
        <img id="pf-img" src="" alt="profile">

        <div class="pf-card">
          <h4>ACADEMIC & GOVERNMENT ROLES</h4>
          <ul id="pf-roles"></ul>
        </div>

        <div class="pf-card">
          <h4>SPECIAL PROJECTS</h4>
          <ul id="pf-projects"></ul>
        </div>
      </div>

    </div>

    <!-- FOOT -->
    <div class="pf-footer">
      To live everyday with passion to create positive change in others’ lives.
    </div>

  </div>
</div>

<script>
function openProfile(type) {

  const modal = document.getElementById("profileModal");

  if(type === "academic") {
    document.getElementById("pf-name").innerText = "Mr. S. RETHINAVELU";
    document.getElementById("pf-img").src = "person2.jpg";

    document.getElementById("pf-desc").innerText =
      "A visionary leader and Infra Man of Madurai...";

    document.getElementById("pf-degree").innerText = "B.Com., B.L.";

    document.getElementById("pf-positions").innerHTML = `
      <li>Founder & CMD – AFTC</li>
      <li>President – Trade Chamber</li>
    `;

    document.getElementById("pf-achievements").innerHTML = `
      <li>Infrastructure Project ₹200 Cr</li>
      <li>Airport upgraded</li>
    `;

    document.getElementById("pf-leadership").innerHTML = `
      <li>30+ years leadership</li>
    `;

    document.getElementById("pf-roles").innerHTML = `
      <li>Academic Council Member</li>
    `;

    document.getElementById("pf-projects").innerHTML = `
      <li>Senior Living Project</li>
    `;
  }

  modal.style.display = "flex";
}

function closeProfile() {
  document.getElementById("profileModal").style.display = "none";
}
</script>