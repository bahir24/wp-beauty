<?php
/* Template Name: Главная страница */
get_header();
?>
<div class="container">
      <section class="hero">
        <div class="hero__text">
          <h1 class="hero__text-head section-head">Welcome to Beaty Republic</h1>
          <p class="hero__text-desc">Individual approach to every client at a Reasonable price</p><button
            class="btn">more details</button>
        </div>
        <div class="hero__photo">
          <div class="hero__photo-container"><img class="hero__photo-image"
              src="./wp-content/themes/beauty-republic/images/73703c61c48aa12b5ccda2b802d55962.jpeg" alt="beauty republic welcome"></div>
        </div>
        <div class="hero__photo-rect"></div>
      </section>
      <section class="services">
        <h2 class="sevices__head section-head">Services</h2>
        <ul class="services__list">
          <li class="sevice__item">
            <div class="sevice__desc">
              <h3 class="sevice__desc-head">Lash extensions</h3>
              <p class="sevice__desc-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora eius, quae
                quas dolorem vel facere expedita blanditiis fugiat odit facilis? Vitae commodi in placeat officiis
                repudiandae nemo minus similique atque!</p><button class="btn">more details</button>
            </div>
            <div class="sevice__photo"><img class="sevice__photo-img" src="./wp-content/themes/beauty-republic/images/11746fabe2f516d370b862078373c198.jpeg"
                alt="#{service.head}"></div>
            <div class="service__item-rect"></div>
          </li>
          <li class="sevice__item">
            <div class="sevice__desc">
              <h3 class="sevice__desc-head">Facial Treatments</h3>
              <p class="sevice__desc-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora eius, quae
                quas dolorem vel facere expedita blanditiis fugiat odit facilis? Vitae commodi in placeat officiis
                repudiandae nemo minus similique atque!</p><button class="btn">more details</button>
            </div>
            <div class="sevice__photo"><img class="sevice__photo-img" src="./wp-content/themes/beauty-republic/images/e6df3566996357343c68aeaf145edabc.jpeg"
                alt="#{service.head}"></div>
            <div class="service__item-rect"></div>
          </li>
          <li class="sevice__item">
            <div class="sevice__desc">
              <h3 class="sevice__desc-head">Brows</h3>
              <p class="sevice__desc-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora eius, quae
                quas dolorem vel facere expedita blanditiis fugiat odit facilis? Vitae commodi in placeat officiis
                repudiandae nemo minus similique atque!</p><button class="btn">more details</button>
            </div>
            <div class="sevice__photo"><img class="sevice__photo-img" src="./wp-content/themes/beauty-republic/images/50309d35e68ee8f90d286c208773adfe.jpeg"
                alt="#{service.head}"></div>
            <div class="service__item-rect"></div>
          </li>
        </ul>
			</section>
			<section class="hero">
        <div class="hero__text">
          <h1 class="hero__text-head section-head">About us</h1>
					<p class="hero__text-desc desc-small">Our mission is to provide exceptional high-quality beauty services for all, with INDIVIDUAL approach to every client. Developing long-lasting relationships and trust at an affordable price.We are passionate about making our clients happier and being a part of their lives.</p>
					<div class="down__arrow"></div>
        </div>
        <div class="hero__photo">
          <div class="hero__photo-container"><img class="hero__photo-image"
              src="./wp-content/themes/beauty-republic/images/3c781a5ead272b2a8f8134e2f058ad5a.jpeg" alt="beauty republic welcome"></div>
        </div>
        <div class="hero__photo-rect"></div>
			</section>
			<section class="services">
        <h2 class="sevices__head section-head">About the owner</h2>
        <ul class="services__list">
          <li class="sevice__item">
            <div class="sevice__desc">
              <h3 class="sevice__desc-head">Violetta is a licensed esthetician with
a passion for beauty industry. </h3>
              <p class="sevice__desc-text">She is a multi-certified lash artist and skin care specialist. She will pick the best services depending on a client’s needs. Her goal is to make sure that her clients are fully satisfied with the services they get!</p><button class="btn">more details</button>
            </div>
            <div class="sevice__photo"><img class="sevice__photo-img" src="./wp-content/themes/beauty-republic/images/dec1c81b46223c9ea7229629591d7f07.jpeg"
                alt="#{service.head}"></div>
            <div class="service__item-rect"></div>
          </li>
    </div>
<?php
include('include-subscribe.php');
include('include-brands.php');
?>
<?php
get_footer();
?>
