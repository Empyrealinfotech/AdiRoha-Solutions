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

<header id="header" class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-5">
                <div class="text-container"  data-aos="fade-up" data-aos-duration="1200">
                    <h1 class="h1-large">Deep Dive Penetration Testing</h1>
                    <a class="btn-comman-home"  href="#security_expert">Talk to a security expert</a>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="index-page-bg">
<section class="advanced-security">
  <div class="security_assessments"  data-aos="fade-up" data-aos-duration="1200">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="comman-title-home">Advanced Security Assessments</h2>
                </div>
            </div>
            <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="advanced-security-detail">
                      <h5 class="">Web Application Penetration Testing</h5>
                      <p class="comman-preegraph">Adiroha provides help securing web applications by the identification and exploitation of vulnerabilities in them by carrying out simulated malicious attacks manually with aid of various automated tools.</p>
                      {{-- <!-- <a class="btn btn-comman-home" href="{{ route('front.services') }}">Service Details</a> --> --}}
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="advanced-security-detail">
                      <h5 class="">Network Penetration Testing</h5>
                      <p class="comman-preegraph">The network can be kept secure by Network Penetration Testing by detection of critical vulnerabilities which could provide the hackers with potential ability of compromising systems and gain unauthorised access to sensitive data, even take control of systems to perform malicious activities. </p>
                      {{-- <!-- <a class="btn btn-comman-home" href="{{ route('front.services') }}">Service Details</a> --> --}}
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="advanced-security-detail">
                      <h5 class="">Mobile Penetration Testing</h5>
                      <p class="comman-preegraph">Mobile penetration testing is top-notch at Adiroha, as we offer your application with all-round risk assessment from our team of well trained and industry-leading research experts. Both iPhone and Android security engineers are with us to have a deep-driven testing service on issues with both front-end and back-end web services, local security issues and on-device security including the API connecting all the front-end and back-end services.</p>
                      {{-- <!-- <a class="btn btn-comman-home" href="{{ route('front.services') }}">Service Details</a> --> --}}
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="advanced-security-detail">
                      <h5 class="">Cloud Penetration Testing</h5>
                      <p class="comman-preegraph">The focus of Cloud Penetration Testing is the exploration of all the possible ways of exploitation the cloud service is prone to. At Adiroha, we provide guaranteed top-class cloud security which is very essential for the online computing infra, by carrying out thorough penetration testing to the cloud platforms and services provided, including every minute levels of structure of the cloud organization and eliminate all the possible threats. </p>
                      {{-- <!-- <a class="btn btn-comman-home" href="{{ route('front.services') }}">Service Details</a> --> --}}
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="advanced-security-detail">
                      <h5 class="">IoT Penetration Testing</h5>
                      <p class="comman-preegraph"> The fact that the IoT devices are connected to technology and users strengthens the fact that it can be easily intruded, inviting the hackers to carry out malicious activities. This is where, Adiroha stands protection against any mishaps and provides end-to-end security on all connected devices and ensures no undesired access is processed. </p>
                      {{-- <!-- <a class="btn btn-comman-home" href="{{ route('front.services') }}">Service Details</a> --> --}}
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="advanced-security-detail">
                      <h5 class="">SecureCode Review</h5>
                      <p class="comman-preegraph"> The basic building step of any application or software is the codes that are written in the respective languages as per the requirements. These codes might have certain loopholes and weak points which can be exploited by the hackers. Adiroha offers security to these loopholes and the total codes written using a concept called SecureCode. This feature helps identifying the exploitable vulnerabilities and any flaws before they could lead to any damage. SecureCode aims at strengthening the codes and frameworks used ensuring no damage is witnessed. </p>
                      {{-- <!-- <a class="btn btn-comman-home" href="{{ route('front.services') }}">Service Details</a> --> --}}
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="advanced-security-detail">
                      <h5 class="">Remote Work Security</h5>
                      <p class="comman-preegraph"> Adiroha ensures security to the remotely accessible apps which work through internet. Cyber threats and interfering can be eliminated without any inconvenience in the workflow. Adiroha’s expert teams will monitor the network traffic and ensure no third-party access is authorized. </p>
                      {{-- <!-- <a class="btn btn-comman-home" href="{{ route('front.services') }}">Service Details</a> --> --}}
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="advanced-security-detail">
                      <h5 class="">DDoS Protection</h5>
                      <p class="comman-preegraph">Distributed Denial of Service (DDoS) is the type of hacking attack on the system or device which targets the system workflow, tending the system to compromise. Countering this, Adiroha offers a multi-layered defence mechanism, which helps withstanding high-level and strong, complex DDoS attacks. </p>
                      {{-- <!-- <a class="btn btn-comman-home" href="{{ route('front.services') }}">Service Details</a> --> --}}
                    </div>
                </div>
              </div>
            </div>
        </div>
  </div>

  <div class="training_program"  data-aos="fade-up" data-aos-duration="1200">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="comman-title-home">Compliance Management</h2>
            </div>
        </div>
        <div class="swiper swiper-popular">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="advanced-security-detail">
                <a href="{{ route('front.coursesindex') }}">
                  <h5 class="">PCI DSS</h5>
                  <p class="comman-preegraph">PCI DSS is the important and mandatory compliance in the online transactions or in the retaining of credit card data. These transactions should be kept secure, else the consequences could be severely penalised. Security of PCI DSS is highly prioritised and they can be tricky if comparative and competent authorities are not involved which Adiroha is well equipped with.</p>
                  {{-- <!-- <a class="btn btn-comman-home" href="{{ route('front.courses_sucess') }}">Sechedule Deemo</a> --> --}}
                </a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="advanced-security-detail">
                <a href="{{ route('front.coursesindex') }}">
                  <h5 class="">HIPAA</h5>
                  <p class="comman-preegraph">Developed with the aim to provide security and privacy to medical data, the Healthcare Insurance Portability and Accountability Act (HIPAA) is a United State's legislation, effective to all companies working within the U.S. Adiroha Solutions has been successfully remediating the compliance needs of many companies and clients in regard with HIPAA.</p>
                  {{-- <!-- <a class="btn btn-comman-home" href="{{ route('front.courses_sucess') }}">Schedule Demo</a> --> --}}
                </a>
              </div>
            </div>
            <div class="swiper-slide">
                <div class="advanced-security-detail">
                  <a  href="{{ route('front.coursesindex') }}">
                    <h5 class="">ISO 27001</h5>
                    <p class="comman-preegraph">ISO 27001 is determined to protect data of all formats. Beginning with determination of scope of work, Adiroha follows a 5-phase sequential approach following with the determination of ISMS objectives, risk analysis and gap analysis, which is made better with the additional security controls input from us. We also assess both technical and non-technical infrastructure.</p>
                    {{-- <!-- <a class="btn btn-comman-home" href="{{ route('front.courses_sucess') }}">Schedule Demo</a> --> --}}
                  </a>
                </div>
            </div>
            <div class="swiper-slide">
              <div class="advanced-security-detail">
                <a href="{{ route('front.coursesindex') }}">
                  <h5 class="">GDPR </h5>
                  <p class="comman-preegraph">Data Privacy amongst Europe citizens rose to a new standard with the introduction of General Data Protection Regulation (GDPR). The new regulation demands a greater look into the Personally Identification Information (PII) failing which is complemented with strict penalties imposed. Adiroha remediates strict GDPR compliances eliminating any breaches of data ensuring strict security.</p>
                  {{-- <!-- <a class="btn btn-comman-home" href="{{ route('front.courses_sucess') }}">Sechedule Deemo</a> --> --}}
                </a>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="advanced-security-detail">
                <a href="{{ route('front.coursesindex') }}">
                  <h5 class="">SOC2</h5>
                  <p class="comman-preegraph">Adiroha offers Service Organization Controls 2 (SOC 2) that are for organizations that provides services like SaaS, Cloud Data platforms, Collocations, Data Analytics, etc for which compliance are explicitly focused on controls affecting the data integrity, security of the systems and availablity of the data for the service organization to process. </p>
                  {{-- <!-- <a class="btn btn-comman-home" href="{{ route('front.courses_sucess') }}">Schedule Demo</a> --> --}}
                </a>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>

<section class="trusted_partner"  data-aos="fade-up" data-aos-duration="1200">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
          <h2 class="comman-title-home pb-0">Trusted Paetner in Penetration Testing</h2>
          <p class="comman-preegraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <img src="{{ asset('front/images/sec1.png') }}" alt="">
      </div>
      <div class="col-lg-3 col-md-6">
        <img src="{{ asset('front/images/sec2.png') }}" alt="">
      </div>
      <div class="col-lg-3 col-md-6">
        <img src="{{ asset("front/images/sec3.png") }}" alt="">
      </div>
      <div class="col-lg-3 col-md-6">
        <img src="{{ asset('front/images/sec4.png') }}" alt="">
      </div>
    </div>
  </div>
</section>

<section class="trusted_partner" id="security_expert" data-aos="fade-up" data-aos-duration="1200">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
          <h2 class="comman-title-home pb-0">Talk with a Security Expert</h2>
          <p class="comman-preegraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
      </div>
    </div>
    <div class="row form-sec">
      <div class="col-lg-6">
        <form>
          <div class="form-group">
              <input type="text" class="form-control-input" placeholder="First Name" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control-input" placeholder="Last Name" required>
        </div>
          <div class="form-group">
              <input type="email" class="form-control-input" placeholder="Email" required>
          </div>
          <div class="form-group">
              <input type="text" class="form-control-input" placeholder="Comapny" required>
          </div>
          <div class="form-group">
            <textarea class="form-control-textarea" name="textarea" id="" rows="4"  placeholder="Tell us a little about your security needs"></textarea>
          </div>
          <div class="form-group">
              <a href="{{ route('front.schedulemeeting') }}" type="submit" class="btn btn-comman-home">Schedule Meeting</a>
          </div>
        </form>
      </div>
      <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-8">
              <img src="{{ asset('front/images/form-img2.png') }}" alt="">
            </div>
            <div class="col-lg-4">
              <!-- <img src="{{ asset('front/images/sec1.png') }}" alt=""> -->
            </div>
            <div class="col-lg-4">
              <!-- <img src="{{ asset('front/images/sec1.png') }}" alt=""> -->
            </div>
            <div class="col-lg-8 mt-4">
              <img src="{{ asset('front/images/form-img1.png') }}" alt="">
            </div>
          </div>
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
