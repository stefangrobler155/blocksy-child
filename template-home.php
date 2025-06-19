<?php
/**
 * Template Name: Custom Homepage
 * Description: A fully custom homepage layout for GraphQL for Beginners.
 */

get_header(); ?>

<main id="main" class="site-main">

  <!-- SECTION 1: Hero -->
  <section class="hero-section">
    <div class="container">
      <h1 class="headline">GraphQL for Beginners</h1>
      <p class="subtext">Learn the modern way to work with APIs — structured, efficient, and flexible.</p>
      <a href="#start-learning" class="btn-primary">Start Learning</a>
    </div>
  </section>

  <!-- SECTION 2: Why GraphQL -->
  <section class="why-graphql-section">
    <div class="container">
      <h2>Why Learn GraphQL?</h2>
      <ul class="feature-list">
        <li><strong>Get only the data you need</strong> — no more overfetching.</li>
        <li><strong>Single endpoint</strong> — one query, multiple results.</li>
        <li><strong>Powerful tooling</strong> — introspection, docs, and playgrounds built-in.</li>
      </ul>
    </div>
  </section>

  <!-- SECTION 3: Simple Example -->
  <section class="example-section">
    <div class="container">
      <h2>A Simple Query</h2>
      <p>This query fetches a user's name and email:</p>
      <pre class="code-box">
{
  user(id: 1) {
    name
    email
  }
}
      </pre>
    </div>
  </section>

  <!-- SECTION 4: How to Use This Site -->
  <section class="how-to-section" id="start-learning">
    <div class="container">
      <h2>How to Use This Site</h2>
      <ol>
        <li>Read the sections in order — each builds on the last.</li>
        <li>Try the examples in your own GraphQL playground (like Apollo Sandbox).</li>
        <li>Bookmark or download the cheat sheet at the end.</li>
      </ol>
    </div>
  </section>

  <!-- SECTION 5: CTA -->
  <section class="cta-section">
    <div class="container">
      <h2>Ready to dive deeper?</h2>
      <a href="/what-is-graphql" class="btn-secondary">Continue Learning</a>
    </div>
  </section>

</main>

<?php get_footer(); ?>
