<x-layout>
    <x-slot name='title'>Contact</x-slot>
    <x-slot name='content'>
        <div class="container mt-5 row">
            <h1 class="text-warning mb-5 border-bottom">Contact Us</h1>
            <div class="row text-white mb-5">
                Do you have any question? Please do not hesitate to contact. I will be back to you within a matter of
                hours to help you.
            </div>
            <div class="col-sm-9 mb-5">
                <form action="">
                    <div class="row g-3 text-white">
                        <div class="col md-6 ">
                            <label for="inputName">Your Name</label>
                            <input type="text" class="form-control mt-2" id='inputName'>
                        </div>
                        <div class="col md-6">
                            <label for="inputEmail">Your Email *</label>
                            <input type="email" class="form-control mt-2" id='inputEmail' required>
                        </div>
                        <div class="col md-12">
                            <label for="inputSubject">Your Subject</label>
                            <input type="text" class="form-control mt-2" id='inputSubject'>
                        </div>
                        <div class="col-md12 mb-3">
                            <label for="inputTextArea">Your message *</label>
                            <textarea class="form-control mt-2" id="inputTextArea" required></textarea>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Send</button>
                </form>
            </div>
            <div class="col-sm-3 text-center text-white">
                <ul class="list-unstyled">
                    <li>
                        <i class="fas fa-map-marker-alt fa-2x i-color"></i>
                        <p>Mumbai, Maharashtra, India</p>
                    </li>
                    <li>
                        <i class="fas fa-phone mt-4 fa-2x i-color"></i>
                        <p>+91 9900000000</p>
                    </li>
                    <li>
                        <i class="fas fa-envelope mt-4 fa-2x i-color"></i>
                        <p>contact@email.com</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="text-center">
            <a href="#" target="_blank"><i class="fab fa-twitter i-color"></i></a>
            <a href="#" target="_blank"><i class="fab fa-facebook i-color"></i></a>
            <a href="#" target="_blank"><i class="fab fa-instagram i-color"></i></a>
            <a href="#" target="_blank"><i class="fab fa-dribbble i-color"></i></a>

        </div>
    </x-slot>
</x-layout>
