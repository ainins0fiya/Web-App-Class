@extends('master.layout')

@section('content')
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route"
        style="background-image: url(assets/img/overlay-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="contact-mf">
                        <div id="contact" class="box-shadow-full">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="title-box-2">
                                        <h5 class="title-left">
                                            List of Student
                                        </h5>
                                    </div>

                                    <button onclick="document.location='/add-student'" class="btn btn-primary">Add New Records</button>

                                    <div>

                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                  <th scope="col">No</th>
                                                  <th scope="col">First Name</th>
                                                  <th scope="col">Last Name</th>
                                                  <th scope="col">Email</th>
                                                  <th scope="col">Phone No</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                @foreach ($students as $student)
                                                <tr>
                                                    <td>{{ $student->matric_id }}</td>
                                                    <td>{{ $student->first_name }}</td>
                                                    <td>{{ $student->last_name }}</td>
                                                    <td>{{ $student->email }}</td>
                                                    <td>{{ $student->phone_no }}</td>
                                                </tr>

                                                @endforeach
                                                {{-- <tr>
                                                  <th scope="row">1</th>
                                                  <td>Azmi</td>
                                                  <td>Hassan</td>
                                                  <td>mkazmi@iium.edu.my</td>
                                                  <td>0196338473</td>
                                                </tr>
                                                <tr>
                                                  <th scope="row">2</th>
                                                  <td>Jacob</td>
                                                  <td>Thornton</td>
                                                  <td>fat@gmail.com</td>
                                                  <td>0140224384</td>
                                                </tr>
                                                <tr>
                                                  <th scope="row">3</th>
                                                  <td>Larry</td>
                                                  <td>Bird</td>
                                                  <td>twitt@yahoo.com</td>
                                                  <td>0127359243</td>
                                                </tr> --}}
                                              </tbody>
                                        </table>
                                        {{-- <form action="forms/contact.php" method="post" role="form"
                                            class="php-email-form">
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control"
                                                            id="name" placeholder="Your Name" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email"
                                                            id="email" placeholder="Your Email" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="subject"
                                                            id="subject" placeholder="Subject" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 text-center my-3">
                                                    <div class="loading">Loading</div>
                                                    <div class="error-message"></div>
                                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                                </div>
                                                <div class="col-md-12 text-center">
                                                    <button type="submit"
                                                        class="button button-a button-big button-rouded">Send
                                                        Message</button>
                                                </div>
                                            </div>
                                        </form> --}}
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                    <div class="title-box-2 pt-4 pt-md-0">
                                        <h5 class="title-left">
                                            Get in Touch
                                        </h5>
                                    </div>
                                    <div class="more-info">
                                        <p class="lead">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolorum dolorem
                                            soluta quidem
                                            expedita aperiam aliquid at.
                                            Totam magni ipsum suscipit amet? Autem nemo esse laboriosam ratione nobis
                                            mollitia inventore?
                                        </p>
                                        <ul class="list-ico">
                                            <li><span class="bi bi-geo-alt"></span> 329 WASHINGTON ST BOSTON, MA 02108</li>
                                            <li><span class="bi bi-phone"></span> (617) 557-0089</li>
                                            <li><span class="bi bi-envelope"></span> contact@example.com</li>
                                        </ul>
                                    </div>
                                    <div class="socials">
                                        <ul>
                                            <li><a href=""><span class="ico-circle"><i
                                                            class="bi bi-facebook"></i></span></a></li>
                                            <li><a href=""><span class="ico-circle"><i
                                                            class="bi bi-instagram"></i></span></a></li>
                                            <li><a href=""><span class="ico-circle"><i
                                                            class="bi bi-twitter"></i></span></a></li>
                                            <li><a href=""><span class="ico-circle"><i
                                                            class="bi bi-linkedin"></i></span></a></li>
                                        </ul>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->
@endsection
