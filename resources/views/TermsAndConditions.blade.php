@extends('layouts.main')

@section('header')
    <header class="header header_inner">
        @include('layouts.header_menu')
    </header>
@endsection

@section('content')

<main>
    <div class="page">
        <div class="page__content">
            <div class="container page__container">
                <ul class="breadcrumb page__breadcrumb">
                    <li class="breadcrumb__item">
                        <a href="/">Home</a>
                    </li>
                    <li class="breadcrumb__item">
                        <a href="{{ url('/terms') }}">Terms&amp;Conditions</a>
                    </li>
                </ul>
                <a class="back-button page__back-button" href="#">
                    <svg>
                        <use xlink:href="#long-arrow"></use>
                    </svg>
                </a>
                <h1 class="page__title">General terms and conditions</h1>
                <div class="cart">
                    <div class="cart-settings__box cart-settings__box_p-100 terms">
                        <h2>1. SUBJECT</h2>
                        <p>This document contains the general terms and conditions („GTC") determined by the Blue Bird Cafe Kft. (seat: 1074 Budapest, Rumbach Sebestyén utca 12. fszt.; company reg. No.: 01-09-198685) („Service Provider"). This GTC sets forth the rules upon which the private karaoke rooms operated by the Service Provider may be accessed. </p>
                        <h2>2. SZOLGÁLTATÁS</h2>
                        <p>2.1 Service Provider has established the facility of the BlueBird Karaoke Rooms in a basement apartment located in the Gozsdu courtyard (address: 1072 Budapest, Dob utca 16.). The BlueBird Karaoke Rooms consists of 5 unique private karaoke room, which can be hired between 8 p.m. and 3 a.m.("Service"). </p>
                        <p>2.2 Upon prior reservation the BlueBird Karaoke Rooms may be accessed by the persons ("Guest") appointed by the person, who made the reservation ("Customer"). </p>
                        <p>2.3 The Service may be booked in advance at https://bluebirdcafe.eu ("Website") subsequent to registration.</p>
                        <p>2.4 By the reservation of the Service, the Customer acknowledges and accepts the provisions of this GTC.</p>
                        <p>2.5 While at the premises the Guests shall conduct themselves in accordance with the rules set forth in this GTC, the rules contained at the Website and the rules of the Blue Bird Karaoke Rooms' Code of Conduct</p>
                        <h2>3. PAYMENT</h2>
                        <p>3.1 The Customer shall pay the hourly consideration ("Entrance Fee") set out at the Website with regards to the given room, according to the following: </p>
                        <p>
                            (i) if the Customer books the Service in advance according to Clause 2.2., then the Customer shall pay the total amount of the Entrance Fee to the Service Provider via payment credit/debit card as part of the reservation process; (ii) in any other case, the Customer shall pay the Entrance Fee at the reception of the BlueBird Karaoke Rooms to the employees of the Service Provider prior entering the karaoke rooms. </p>
                        <p>3.2 Upon the payment of the Entrance Fee the Service Provider shall issue an invoice in compliance with the applicable laws and regulations, and upon specific request of the Customer the Service Provider shall provide the Customer with an invoice according to Act CXXVII of 2007 on the VAT. </p>
                        <h2>4. USE OF THE SERVICE</h2>
                        <p>4.1 The Customer undertakes the obligation to inform the Guests about the provisions of this GTC and the Code of Conduct and about rules set out on the Website. </p>
                        <p>4.2 Prior entering the room at last one Guest shall sign the BlueBird Karaoke Rooms' Code of Conduct, and a declaration undertaking full responsibility for any damage caused by the Guests. Furthermore, such person shall hand over its identity card with photo to the employees of the Service Provider. </p>
                        <p>4.3 By entering the karaoke room the Guests declares, that they are aware of the BlueBird Karaoke Rooms' Code of Conduct and they acknowledge its content. </p>
                        <p>4.4 The karaoke room may be entered maximum as many person as indicated on the reservation. </p>
                        <p>4.5 Upon expiration of the timeframe specified in the reservation the Guests shall vacate the room. Should the Guests intend to consume the beverages remaining from the package booked by the Customer, then they shall to do so at the bar located within the BlueBird Karaoke Rooms in the lobby of the private karaoke rooms. </p>
                        <h2>5. PROVISIONS REGARDING DELAY </h2>
                        <p>5.1 The Customer shall notify the Service Provider, if it is anticipated that the Guest won't arrive in time to the BlueBird Karaoke Rooms. </p>
                        <p>5.2 Should the Customer fail to notify the Service Provider regarding their delay of more than 15 minutes, then the Service Provider is entitled to sell the room after 15 minutes.</p>
                        <p>Should the Guests arrive within 1 hour from the beginning of the reserved timeframe, but subsequent to the sale of the room according to this clause, then the Customer is entitled to modify its reservation according to Clause 6.2. For the avoidance of doubt, the Service Provider stipulates, that in such case the Service Provider shall not be obliged to repay the Entrance Fee. </p>
                        <p>5.3 For the avoidance of doubt, the Service Provider stipulates that the Guests' late arrival does not influence the expiration of the booked timeframe and the Guests shall vacate the karaoke rooms upon the expiration of the booked timeframe regardless of whether the Customer informed or not the Service Provider previously of the delay. </p>
                        <h2>6. MODIFICATION AND CANCELLATION </h2>
                        <p>6.1 Prior to the reserved timeframe, if the Customer intends to modify the date of its reservation or to change the reserved room to an other room, the Customer shall consult with the customer centre ("Customer Centre") (tel.: +36304618326) of the Service Provider. The Service Provider undertakes the obligation to cooperate with the Customer to modify the reservation according to the Customer's wish. </p>
                        <p>6.2 The Customer may cancel the reservation free of charge no later 96 hours prior to the reserved timeframe through an e-mail sent to the Customer Centre's e-mail address designated on the Website. </p>
                        <p>6.3 In case of a cancellation within the deadline contained in Clause 6.2., the contract, conducted by and between the Customer and the Service Provider, automatically terminates and the Service Provides shall transfer back the transferred amount of the Entrance Fee to the bank account which was designated by the Customer in the course of the reservation within 7 working days of the cancellation. </p>
                        <p>
                            6.4 Should the Customer wish to cancel the reservation no later 48 hours, but later than 96 hours prior to the reserved timeframe then the Customer shall act as defined in Clause 6.2. In case of such cancellation the Service Provider is entitled to receive a compensation for the cancellation in the amount equal to 50% of the Entrance Fee. By the acceptance of this GTC the Customer gives its consent and authorize the Service Provider to deduct the amount of the compensation for cancellation from the Entrance Fee. The Service Provider shall transfer the remaining 50% of the Entrance Fee to the bank account which was designated by the Customer in the course of the reservation within 7 working days of the cancellation. </p>
                        <p>6.5 For the avoidance of doubt, the Service Provider stipulates that in case the Customer cancel the reservation later than 48 hours prior to the reserved timeframe, then the Service Provider is entitled to keep the total amount of the Entrance Fee. </p>
                        <h2>7. RULES OF CONDUCT</h2>
                        <p>7.1 On the premises of the BlueBird Karaoke Rooms the Guests may not consume any food or drink purchased elsewhere. </p>
                        <p>7.2 Smoking and the use of e-cigarettes are strictly prohibited on the premises of the BlueBird Karaoke Rooms. </p>
                        <p>7.3 The Service Provider informs the Guests, that the sole purpose of the audio and/or video records played in the BlueBird Karaoke Rooms is to entertain the Guests, and the commercial recording or the broadcasting of such records is strictly prohibited. </p>
                        <p>7.4 The Service Provider's employees may ban any person from the premises of BlueBird Karaoke Rooms, who repeatedly violate the rules set out in Clauses 7.1., 7.2 and 7.3. </p>
                        <p>7.5 The Service Provider reserves the right to deny the admission of any person under heavy influence of alcohol, under influence of drugs, or of any person behaving in outrageous manner. </p>
                        <h2>8. RESPONSIBILITY </h2>
                        <p>8.1 The person who signs the declaration described in Clause 4.1. has full civil law responsibility under the civil law for any damage of the karaoke rooms or any other premises belonging to the BlueBird Karaoke Rooms. </p>
                        <p>8.2 The Service Provider is not responsible for any personal items or that are lost or stolen, or left unattended within our venues. </p>
                        <h2>9. OTHER PROVISIONS </h2>
                        <p>9.1 The Service Provider reserves the right to modify the terms and conditions of this GTC. </p>
                        <p>9.2 In case the Service Provider does not strictly persist on any provisions of this GTC in the course of the performance of this GTC, in no case should that be interpreted as the waiver of any right granted by this GTC. Furthermore, it would not deprive the right from the Service Provider to strictly persist on any provision of this GTC. Any waiver declaration shall be valid in writing and it shall be interpreted restrictedly. </p>
                        <p>9.3 If any provision of this GTC shall be held to be invalid or unenforceable in whole or in part, the validity and enforceability of the remaining provisions of this Agreement shall not in any way be affected or impaired thereby. If any provision in this Agreement shall be found or be held to be invalid or unenforceable under applicable law, then the meaning of said provision shall be construed, to the extent feasible, so as to render the provision enforceable, and if no feasible interpretation would save such provision, it shall be deemed replaced by such valid and enforceable provision as most nearly effects the Service Provider's intent. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection