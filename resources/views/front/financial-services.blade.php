@extends('layouts.front.app')
@php
if(isset($title) && $title != '')
{
    $title=$title;
}else {
    $title='AdiRoha Solutions';
}

@endphp
@section('title', $title )
@section('meta_description', 'AdiRoha Solutions')
@section('meta_keywords', 'AdiRoha Solutions')
@section('meta_author', 'AdiRoha Solutions')
@section('meta')

@endsection

@section('page-style')
@endsection
@section('content')

<section class="index-page-bg Service-main-sec courses-main-sec">
    <section class="Service-main">
      <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist" data-aos="fade-up" data-aos-duration="1200">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Financial <i class="fas fa-chevron-right"></i></button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Financial Services</button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="service-set-border-bottom border-bottom-0" data-aos="fade-up" data-aos-duration="1200">
              <div class="row">
                <div class="col-lg-12">
                    <h2 class="comman-title-home pb-0">Security Beyond Compliance Needs</h2>
                    <p class="comman-preegraph">Owing to the increasing dependence on technology, every field had witnessed cyber attacks and breaches, in particular, the financial sector. Any financial body like insurance companies, banks, credit card unions, are specifically targeted by the cyber attackers, heaving the firms with the great risk of security firms, which can lead to compliance fines, loss of brand value and reputation and pressure from the stake holders' anxiety.</p>
                    <p  class="comman-preegraph">Join hands with Adiroha and have no worries of security regarding your dynamic business requirements, financial compliances, or for the security of client and customer data. We offer help protecting your data, to live up to the financial compliances, and also to be resilient against cyber attacks with our expert security personnel with industry expertise of having worked for large-scale financial firms, specialized in securing businesses from losing workflow and to meet compliance standards using practical methodologies which are agile, variable and trustworthy.</p>
                </div>
              </div>
              <section class="hunting-main-sec" data-aos="fade-up" data-aos-duration="1200">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="hunting-inner our-web-pentest">
                      <h2 class="cyber-title pb-0">Challenges to the Financial Sector</h2>
                      <p class="comman-preegraph pt-2"></p>
                    </div>
                    <div class="hunting-inner">
                      <h2 class="methodology-type pb-0">1. Financial Compliance Requirements</h2>
                      <p class="comman-preegraph pt-2">For any financial firm, the need for financial compliance arises with the aim to be transparent and accountable to the clients, and be a reliable firm. For that compliance requires particular regulations that can lay down the laws and rules to be applied to the industry and its operations, followed by the determination of required procedure to be implemented. Following that, the compliance processes are documented and changes are monitored frequently.</p>
                    </div>
                    <div class="hunting-inner">
                      <h2 class="methodology-type mb-3 border-bottom pb-2">Potential impacts in Finance </h2>
                      <h2 class="methodology-type pb-0">Service Downtime/Operational losses</h2>
                      <p class="comman-preegraph pt-2">While working with the softwares and technologies, operational issues are bound to arise like service timeout or any other operational losses which can either be due to technical refreshment of the operational portals or even technical failures. The maintenance teams should readily implement remedial measures in eradicating these losses and ensure quality work flow.</p>
                      <h2 class="methodology-type pb-0">Compliance and PCI Fines</h2>
                      <p class="comman-preegraph pt-2">The primary duty of a financial firm should be focussed on keeping every action performed is bound to obey the financial compliances and PCI; else the consequences include PCI fines, regulatory actions and severe loss of reputation.</p>
                      <h2 class="methodology-type pb-0">Reputation Impacts</h2>
                      <p class="comman-preegraph pt-2">Even if the instances like overruling of financial compliances are managed with appropriate counter actions, the resulting impact on the company’s reputation can be critical. Building back the lost reputation can be very tedious and a major pullback to the growth of the financial organization.</p>
                      <h2 class="methodology-type pb-0">Negative Press/Public Relations</h2>
                      <p class="comman-preegraph pt-2">With great technological advancements, public awareness and reach of the press and media took a great leap. For the legal representatives of the organization and the authorities, having a healthy and positive relation with the public and the press is as better as having a good monitoring team for the regulation of the financial firm.</p>
                      <h2 class="methodology-type pb-0">Breach Lawsuits/Legal Fees</h2>
                      <p class="comman-preegraph pt-2">Any case of a lawsuit being breached leads to the claim of damage by the other concerned parties incurring the loss. Such legal issues are to be professionally dealt with by expert teams and Adiroha offers a team of industry-expert panel to guide throughout all the financial dealings and exchanges and ensures no breaching of lawsuits and no legal fee needs to be paid.</p>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div>

          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="service-set-border-bottom">
              <div class="row">
                <div class="col-lg-12">
                    <h2 class="comman-title-home pb-0">For Corporates</h2>
                    <p class="comman-preegraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>

                    <div class="service-btn">
                      <a class="btn-solid-sm" href="#">Schedule Meeting</a>
                      <a class="btn-solid-sm" href="{{ route('front.contactus') }}">Contact Us</a>
                    </div>
                </div>
              </div>
              <section class="hunting-main-sec">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="hunting-inner our-web-pentest">
                        <h2 class="cyber-title pb-0">Hunting Vulnerabilities in WebApps and APIs</h2>
                        <p class="comman-preegraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                      </div>
                      <div class="hunting-inner our-web-pentest">
                        <h2 class="cyber-title pb-0">Manual vs. Automated Application PenTesting</h2>
                        <p class="comman-preegraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                      </div>
                      <div class="hunting-inner our-web-pentest">
                        <h2 class="cyber-title pb-0">Challenges to the Financial Sector</h2>
                      </div>
                      <div class="hunting-inner">
                        <h2 class="methodology-type pb-0">1. Financial Compliance Requirements</h2>
                        <p class="comman-preegraph pt-2">For any financial firm, the need for financial compliance arises with the aim to be transparent and accountable to the clients, and be a reliable firm. For that compliance requires particular regulations that can lay down the laws and rules to be applied to the industry and its operations, followed by the determination of required procedure to be implemented. Following that, the compliance processes are documented and changes are monitored frequently.</p>
                      </div>
                      <div class="hunting-inner">
                        <h2 class=" methodology-type pb-0">2. Information Gathering</h2>
                        <p class="comman-preegraph pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                      </div>
                      <div class="hunting-inner">
                        <h2 class=" methodology-type pb-0">3. Enumeration</h2>
                        <p class="comman-preegraph pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                      </div>
                      <div class="hunting-inner">
                        <h2 class=" methodology-type pb-0">4. Attack and Penetration</h2>
                        <p class="comman-preegraph pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            <section class="related-services">
              <div class="row">
                <div class="col-lg-12">
                    <h2 class="comman-title-home pb-0">Related Services</h2>
                </div>
              </div>
              <!-- Swiper -->
              <div class="swiper swiper-for-corporates">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="industry_slider_img">
                      <img src="{{ asset('front/images/sliderimg.png') }}" alt="">
                      <h3>Cloud Penetration Testing</h3>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="industry_slider_img">
                      <img src="{{ asset('front/images/service1.png') }}" alt="">
                      <h3>Mobile App Testing</h3>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="industry_slider_img">
                      <img src="{{ asset('front/images/sliderimg.png') }}" alt="">
                      <h3>Vulnerability Testing</h3>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="industry_slider_img">
                      <img src="{{ asset('front/images/service1.png') }}" alt="">
                      <h3>Cloud Penetration Testing</h3>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </section>
  </section>

@endsection
@section('page-script')
    <script defer src="{{ asset('front/js/custom-scroll-count.js') }}"></script>
    <script>
        var swiper = new Swiper('.swiper', {
          slidesPerView: 1,
          spaceBetween: 20,
          // centeredSlides: true,
          // autoplay: {
          //   delay: 4500,
          // }
          breakpoints: {
            575: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            640: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            768: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            991: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            1024: {
              slidesPerView: 3,
              spaceBetween: 20,
            },
          }
        });


        var swiper = new Swiper('.swiper-popular', {
          slidesPerView: 1,
          spaceBetween: 20,
          // centeredSlides: true,
          // autoplay: {
          //   delay: 4500,
          // }
          breakpoints: {
            575: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            640: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            768: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            991: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            1024: {
              slidesPerView: 3,
              spaceBetween: 20,
            },
          }
        });

      </script>
@endsection
