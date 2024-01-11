@extends('layouts.master', ['title' => 'Faqs'])
<style>
    .element{
        transition: display 1s;
    }
</style>
@section('content')
    <div class="before:content-[''] before:absolute before:bottom-0 before:left-0 before:right-0 before:bg-heroSvg2 before:bg-bottom before:bg-repeat-x before:top-0 relative bg-faqBanner after:content-[''] after:bg-top-center after:absolute after:top-0 after:left-0 after:right-0 after:bottom-0 after:bg-heroSvg1 bg-cover bg-center" style="width: 100%; height: calc(100vh - 175px);" >
        <div class="relative z-10 h-full max-w-[1024px] w-full p-4 mx-auto flex items-center">
            <div class="">
                <div class="space-y-4 ">
                    <h2 class="text-white font-semibold font-work text-5xl leading-12">
                        Frequently Asked Questions
                    </h2>
                </div>
                

                
            </div>
        </div>
    </div>
    <section class="w-full space-y-8 mt-8 px-4">
        <div class="w-full max-w-[1024px] mx-auto space-y-8">
            <p class="text-slate-800 text-center">
                Like most parents, pet owners may be understandably anxious about transporting and being separated from their pet – especially if they have never managed it before. Pet Express trained and experienced Pet Relocation Specialists are happy to answer your questions, address any concerns, and work with you to design and implement a customized pet transport solution that will be safe and comfortable for your pet, and practical for your family during your relocation.
            </p>
            <div class="w-full px-4">
                <h2 class="text-center text-3xl text-slate-800 font-bold">
                    FAQs
                </h2>
                
                <div class="w-full max-w-[1024px] mx-auto space-y-3">
                    <div class="item py-4 border-b border-black overflow-hidden cursor-pointer">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-medium">
                                Is it safe for pets to fly?
                            </h3>
                            <div class="text-primary mr-2 font-semibold text-xl border w-8 h-8 flex justify-center items-center text-center rounded-full border-2 border-primary">
                                +
                            </div>
                        </div>
                        <div class="element hidden" >
                            <p class="py-4 desc" >
                                <p>
                                    Air travel is as safe for pets as it is for people. Your pet will travel in a special cargo compartment within the aircraft. This compartment is both climate controlled and pressurized for your pet’s safety and comfort, and it is on the same air circulation system as the cabin. Many of our customers are envious that their pets are laying down comfortably on soft bedding in their crates, while the owners are confined to squeezy airline seats!
                                </p>
                                <p class="py-2">
                                    Pet Express can provide strong and sturdy travel crates that provide protection during loading and unloading, and prevent your pet escaping whereas lightweight crates that some owners source from pet stores may flex during handling, enabling the door to accidentally open.
                                </p>
                                <p class="py-2">
                                    If you can imagine keeping your pet in a crate in the laundry overnight, this is similar to what your pet will experience while in the pet-compartment within the aircraft.
                                </p>
                            </p>
                        </div>
                        
                    </div>
                    <div class="item py-4 border-b border-black overflow-hidden cursor-pointer">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-medium">
                                What about “snub nose” (brachycephalic) breeds?
                            </h3>
                            <div class="text-primary mr-2 font-semibold text-xl border w-8 h-8 flex justify-center items-center text-center rounded-full border-2 border-primary">
                                +
                            </div>
                        </div>
                        <div class="element hidden" >
                            <div class="py-4 desc" >
                               <div class="flex justify-between gap-12">
                                <img class="w-5/12" src="https://pet-express.com/wp-content/uploads/2019/03/toshi-1171446-unsplash-683x1024.jpg" alt="">
                                <div class="space-y-4">
                                    <p>
                                        Dogs with flat or snub noses, including Pugs, Boxers and Bulldogs, and cat breeds including Burmese or Persian are classified as brachycephalic breeds, which may pose a higher risk during transport.  These breeds have a compromised respiratory system and cannot breathe as efficiently as non-brachycephalic breeds. As pets regulate their body temperature by panting, snub-nose breeds are more inclined to overheat in warm weather.  More information on this condition can be found here.
                                    </p>
                                    <p>
                                        There are more than 30 breeds of dogs and cats that are considered brachycephalic, as outlined in this Wikipedia page.
                                    </p>
                                    <p>
                                        Each airline has its own policy regarding brachycephalic breeds, and may impose restrictions for some or all breeds.  Some airlines prohibit the transport of snub-nose breeds, otherwise they may impose tighter regulations such as increased temperature restrictions, or a requirement to transport the pet in a larger crate to enable increased air circulation around your pet.
                                    </p>
                                    <p>
                                        You can find more information on this at the American Veterinary Medical Association website.
                                    </p>
                                    <p>
                                        Pet-Express works with all major airlines and understands the restrictions imposed by each airline.  Speak to a Pet Relocation Specialist to discuss travel options and ways to prepare your pet for travel.
                                    </p>
                                </div>
                            </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="item py-4 border-b border-black overflow-hidden cursor-pointer">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-medium">
                                What about temperature extremes?
                            </h3>
                            <div class="text-primary mr-2 font-semibold text-xl border w-8 h-8 flex justify-center items-center text-center rounded-full border-2 border-primary">
                                +
                            </div>
                        </div>
                        <div class="element hidden" >
                            <div class="py-4 desc" >
                               <div class="space-y-4">
                                    <p>
                                        Airlines do not ship pets in extreme heat or cold, as your pet will be briefly exposed to weather on the tarmac during loading & unloading. Once loaded onto the aircraft, your pet will enjoy temperature-controlled air conditioning in the pet compartment within the aircraft, and experience temperatures similar to those in the passenger cabin.
                                    </p>
                                    <p>
                                        Airlines consider the temperature on the ground at origin, destination, and any transit points along the way. Should temperatures fall outside of approved ranges at origin, destination or transit points, your pet may not be permitted to travel on its scheduled flight. Some locations such as Phoenix, Arizona are commonly embargoed for all pet transport during summer months.
                                    </p>
                                    <p>
                                        All airlines have different policies, however most will only permit pet travel when temperatures exceed minimums (ranging between 10 deg F to 40 deg F) or are below maximum temperatures of usually around 85 deg F.
                                    </p>
                                    <p>
                                        With access to many flights, Pet Express can schedule your pet’s travel for the coolest time of day (or night) in hot weather and the warmest time of day in cold weather.
                                    </p>
                                    <p>
                                        If you plan to travel with your pet on the same flight, please be aware that an unexpected temperature restriction may impact your own travel plans which may result in delays and amendment fees to your own ticket.
                                    </p>
                                    <p>
                                        Speak to a Pet Travel Consultant for more information.
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="item py-4 border-b border-black overflow-hidden cursor-pointer">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-medium">
                                Should my pet be tranquilized or sedated for the trip?
                            </h3>
                            <div class="text-primary mr-2 font-semibold text-xl border w-8 h-8 flex justify-center items-center text-center rounded-full border-2 border-primary">
                                +
                            </div>
                        </div>
                        <div class="element hidden" >
                            <div class="py-4 desc" >
                               <div class="space-y-4">
                                    <p>
                                        The American Veterinary Medical Association and International Pet & Animal Transport Association (IPATA) strongly recommend against tranquilizing your pet. Some airlines may also refuse to transport an animal that appears to be sedated.

                                    </p>
                                    <p>
                                        Many pets travel well without sedation if they have had time to become accustomed to their crates before travel, and if their owners remain relaxed and don’t transfer stress to their pets. While some pet owners may be anxious about being separated from their pet, we urge owners to remain calm when around your pets so as not to unnecessarily transfer stress to your pets.
                                    </p>
                                    <p>
                                        Should your pet have an extremely anxious temperament, please speak with your Pet Travel Consultant to discuss options which may include mild sedatives administered under veterinary supervision. Never sedate your pet for travel without advising Pet Express.
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="item py-4 border-b border-black overflow-hidden cursor-pointer">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-medium">
                                Will my pet need to change planes?
                            </h3>
                            <div class="text-primary mr-2 font-semibold text-xl border w-8 h-8 flex justify-center items-center text-center rounded-full border-2 border-primary">
                                +
                            </div>
                        </div>
                        <div class="element hidden" >
                            <div class="py-4 desc" >
                               <div class="space-y-4">
                                    <p>
                                        Whenever possible, we ship pets on non-stop flights.
                                    </p>
                                    <p>
                                        If a change of plane is necessary, we will choose the route that minimizes travel time and provides the maximum safety and comfort for your pet. If your pet will require a long stopover/connection, we can provide a “comfort stop” where your pet will be cared for, fed, watered and exercized while waiting for its next flight. Pets with medical conditions may require a comfort stop so that medication can be administered.
                                    </p>
                                    <img src="https://pet-express.com/wp-content/uploads/2019/03/7901-180224-CharlotteReeves-2.jpg" alt="">
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="item py-4 border-b border-black overflow-hidden cursor-pointer">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-medium">
                                Can I take my pet on vacation with me?
                            </h3>
                            <div class="text-primary mr-2 font-semibold text-xl border w-8 h-8 flex justify-center items-center text-center rounded-full border-2 border-primary">
                                +
                            </div>
                        </div>
                        <div class="element hidden" >
                            <div class="py-4 desc" >
                               <div class="space-y-4">
                                    <p>
                                        In most cases you can take your pet with you on vacation, however, there are many factors to consider, especially if travelling overseas or to Hawaii. Sometimes preparatory veterinary work or timeframes may be impractical for short journeys, or your pet may be quarantined at destination or upon return home. Some larger pets may also be unable to travel to remote locations that are serviced by small aircraft. As vacations can vary, please speak with a Pet Travel Consultant to discuss options.
                                    </p>
                                  
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="item py-4 border-b border-black overflow-hidden cursor-pointer">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-medium">
                                Will my pet have food and water during the journey?
                            </h3>
                            <div class="text-primary mr-2 font-semibold text-xl border w-8 h-8 flex justify-center items-center text-center rounded-full border-2 border-primary">
                                +
                            </div>
                        </div>
                        <div class="element hidden" >
                            <div class="py-4 desc" >
                               <div class="space-y-4">
                                    <p>
                                        We will give your pet a drink of water at the airport before departure. We try not to overfill water containers because water invariably spills during transit which may make bedding wet or moist. Where possible, we may also provide frozen water, as this enables the crate to be moved without the water spilling, and your pet can take water as the ice melts during travel. Your pet is likely to be thirsty after the flight (just as you may be), so please provide a drink as soon as you can safely take the pet out of the crate. If your pet doesn’t drink when settling into its new home, you may consider adding a food flavoring to the water.
                                    </p>
                                    <p>
                                        Food is not provided during the flight because it can be a choking hazard, and large amounts of food may make your pet feel uncomfortable in its crate which may lead to sickness. However, please prepare two portions of your pet’s food in two separate plastic bags. We will attach these portions to the outside of the crate at pick-up time, and they will be available in the unlikely event that your pet’s trip is delayed.
                                    </p>
                                  
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="item py-4 border-b border-black overflow-hidden cursor-pointer">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-medium">
                                May I send personal belongings with my pet?
                            </h3>
                            <div class="text-primary mr-2 font-semibold text-xl border w-8 h-8 flex justify-center items-center text-center rounded-full border-2 border-primary">
                                +
                            </div>
                        </div>
                        <div class="element hidden" >
                            <div class="py-4 desc" >
                               <div class="space-y-4">
                                    <p>
                                        Yes. You can attach small personal items – a serving-size bag of food, a leash and collar – to the top of the crate, but please don’t send anything valuable since these items can become detached during shipping, or be confiscated by the airline, customs or quarantine. Comfort items or items with a familiar smell – a blanket or towel can go inside the crate on top of a thick layer of absorbent newspaper.
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="item py-4 border-b border-black overflow-hidden cursor-pointer">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-medium">
                                What if my pet needs to urinate during the flight?
                            </h3>
                            <div class="text-primary mr-2 font-semibold text-xl border w-8 h-8 flex justify-center items-center text-center rounded-full border-2 border-primary">
                                +
                            </div>
                        </div>
                        <div class="element hidden" >
                            <div class="py-4 desc" >
                               <div class="space-y-4">
                                    <p>
                                        “Potty accidents” are common, so we line the bottom of the crate with a thick layer of paper and personal bedding items to absorb any in-flight accidents. Like humans, your pet may experience a little dehydration during the flight, which will reduce the need for urination.
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="item py-4 border-b border-black overflow-hidden cursor-pointer">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-medium">
                                Is it better to book a layover for long haul relocations?
                            </h3>
                            <div class="text-primary mr-2 font-semibold text-xl border w-8 h-8 flex justify-center items-center text-center rounded-full border-2 border-primary">
                                +
                            </div>
                        </div>
                        <div class="element hidden" >
                            <div class="py-4 desc" >
                               <div class="space-y-4">
                                    <p>
                                        Layovers on long-haul flights could potentially bring about possible complications for your pet. A direct flight is strongly recommended to reduce the stress on your dog. A layover means more time in the cargo hold and more variation in the temperature on the tarmac. Additionally, there are other issues that could arise in the process of international pet transfer such as the pet’s carrier being misplaced leading to a missed connection. 
                                    </p>
                                    <p>
                                        Researching your airline before booking your pet relocation is very important as some airlines will not transfer a pet from one airline to another. To avoid this problem, book your flight transfer with the same airline.
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="item py-4 border-b border-black overflow-hidden cursor-pointer">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-medium">
                                What happens if my pet is sick?
                            </h3>
                            <div class="text-primary mr-2 font-semibold text-xl border w-8 h-8 flex justify-center items-center text-center rounded-full border-2 border-primary">
                                +
                            </div>
                        </div>
                        <div class="element hidden" >
                            <div class="py-4 desc" >
                               <div class="space-y-4">
                                    <p>
                                        During the process of international pet travel, a veterinary health official from the destination country will inspect your cat or dog on arrival. Your pet must be in the best condition to pass this inspection. Some countries have a more thorough inspection like New Zealand, even the sight of flea dirt on your furry friend can result in a longer quarantine direction, or in severe cases your pet will not be let into the country. 
                                    </p>
                                    <p>
                                        Planning your international trip is a long process even without the thought of pet relocation. Paperwork and documentation aside, the most essential part of the process is your dog or cat’s health and wellbeing. When including your pet in your international travel plans, make sure that you start the process early with a priority on your pet’s health. If you think your pet may be too sick to travel, please get in touch with us to discuss your options.
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="item py-4 border-b border-black overflow-hidden cursor-pointer">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-medium">
                                What is the EU 5 day rule?
                            </h3>
                            <div class="text-primary mr-2 font-semibold text-xl border w-8 h-8 flex justify-center items-center text-center rounded-full border-2 border-primary">
                                +
                            </div>
                        </div>
                        <div class="element hidden" >
                            <div class="py-4 desc" >
                               <div class="space-y-4">
                                    <p>
                                        The EU 5 day rule relates to the regulations of the European Pet Travel Scheme which applies to only non-commercial pre relocation. Non-commercial pet relocation is defined by the EU as when the pet’s owner is are either traveling five days earlier or later than their pet. The pet relocation must not be for resale or adoption purposes. In addition, the number of pets must not exceed five during a single movement. 
                                    </p>
                                    <p>
                                        If either you or your designated representative cannot travel with or within 5 days of your pet, it will travel under the commercial regulations. These regulations apply if the pet is traveling for the purpose of being sold or transferred to a new owner in a EU country, the number of pets accompanying an owner is more than five, and the dog or cat is traveling earlier or later than five days of the owner.
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="item py-4 border-b border-black overflow-hidden cursor-pointer">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-medium">
                                Should I take my pet for a health assessment before travel?
                            </h3>
                            <div class="text-primary mr-2 font-semibold text-xl border w-8 h-8 flex justify-center items-center text-center rounded-full border-2 border-primary">
                                +
                            </div>
                        </div>
                        <div class="element hidden" >
                            <div class="py-4 desc" >
                               <div class="space-y-4">
                                    <p>
                                        Every time there is a major change in your pet’s daily routine, it is worth taking your pet to the vet for a health check up. When it comes to international pet travel, it is recommended you visit the veterinarian at least 2-6 weeks prior to your departure date. This will allow your veterinarian enough time to give your pet a thorough health check-up and make certain your furry friend is up to date with vaccinations, worming treatment and to talk over if any parasite preventative treatment is needed for the location you’re heading to.
                                    </p>
                                    <p>
                                        It is crucial to your pet that this is done at a minimum of 2 weeks prior to your departure date because if your pet requires a vaccination booster then it gives your pet’s immune system time to respond to the vaccine and be at its prime during your vacation.
                                    </p>
                                    <p>
                                        If you know your pet is well overdue for their vaccinations, it is required that you see your vet at least 6 weeks before leaving as your pet may need 2 booster vaccination shots that are 4 weeks apart to guarantee they are fully protected.
                                    </p>
                                    <p>
                                        During the check up, your vet will also be able to check if your pet’s microchip is scannable and you can also check online to verify that their microchip registration contact details are correct, in the case that anything may happen.
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="item py-4 border-b border-black overflow-hidden cursor-pointer">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-medium">
                                Should I take my pet for a health assessment before travel?
                            </h3>
                            <div class="text-primary mr-2 font-semibold text-xl border w-8 h-8 flex justify-center items-center text-center rounded-full border-2 border-primary">
                                +
                            </div>
                        </div>
                        <div class="element hidden" >
                            <div class="py-4 desc" >
                               <div class="space-y-4">
                                    <p>
                                        Every time there is a major change in your pet’s daily routine, it is worth taking your pet to the vet for a health check up. When it comes to international pet travel, it is recommended you visit the veterinarian at least 2-6 weeks prior to your departure date. This will allow your veterinarian enough time to give your pet a thorough health check-up and make certain your furry friend is up to date with vaccinations, worming treatment and to talk over if any parasite preventative treatment is needed for the location you’re heading to.
                                    </p>
                                    <p>
                                        It is crucial to your pet that this is done at a minimum of 2 weeks prior to your departure date because if your pet requires a vaccination booster then it gives your pet’s immune system time to respond to the vaccine and be at its prime during your vacation.
                                    </p>
                                    <p>
                                        If you know your pet is well overdue for their vaccinations, it is required that you see your vet at least 6 weeks before leaving as your pet may need 2 booster vaccination shots that are 4 weeks apart to guarantee they are fully protected.
                                    </p>
                                    <p>
                                        During the check up, your vet will also be able to check if your pet’s microchip is scannable and you can also check online to verify that their microchip registration contact details are correct, in the case that anything may happen.
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="item py-4 border-b border-black overflow-hidden cursor-pointer">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-medium">
                                Will my pet need to be quarantined?
                            </h3>
                            <div class="text-primary mr-2 font-semibold text-xl border w-8 h-8 flex justify-center items-center text-center rounded-full border-2 border-primary">
                                +
                            </div>
                        </div>
                        <div class="element hidden" >
                            <div class="py-4 desc" >
                               <div class="space-y-4">
                                    <p>
                                        International pet travel in and out of the US can be quite complex at times as rules are different depending on the country your pet is traveling from. Every regulation needs to be followed to be granted entry into the country, if any requirements fail to be complied with will result in your pet being denied entry.
                                    </p>
                                    <p>
                                        Most states in the US and territories do not require both dogs and cats to quarantine entering from other countries, on condition that other health and veterinary conditions are met. However, territories such as Hawaii and Guam are rabies-free so require both cats and dogs to be quarantined upon entry.
                                    </p>
                                    <p>
                                        If you know your pet is well overdue for their vaccinations, it is required that you see your vet at least 6 weeks before leaving as your pet may need 2 booster vaccination shots that are 4 weeks apart to guarantee they are fully protected.
                                    </p>
                                    <p>
                                        During the check up, your vet will also be able to check if your pet’s microchip is scannable and you can also check online to verify that their microchip registration contact details are correct, in the case that anything may happen.
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="item py-4 border-b border-black overflow-hidden cursor-pointer">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-medium">
                                How do I find out the requirements of my destination country?
                            </h3>
                            <div class="text-primary mr-2 font-semibold text-xl border w-8 h-8 flex justify-center items-center text-center rounded-full border-2 border-primary">
                                +
                            </div>
                        </div>
                        <div class="element hidden" >
                            <div class="py-4 desc" >
                               <div class="space-y-4">
                                    <p>
                                        The US Department of State recommends calling the appropriate embassy or consulate in Washington, DC to confirm the entry requirements for the country you will be visiting. Certain embassies will provide forms that are printed in English and in the host language for your veterinarian to complete. You will need to know this information as some countries do not permit the importation of pets or require long quarantine periods.
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="item py-4 border-b border-black overflow-hidden cursor-pointer">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-medium">
                                Is there a time of year most suited to pet travel?
                            </h3>
                            <div class="text-primary mr-2 font-semibold text-xl border w-8 h-8 flex justify-center items-center text-center rounded-full border-2 border-primary">
                                +
                            </div>
                        </div>
                        <div class="element hidden" >
                            <div class="py-4 desc" >
                               <div class="space-y-4">
                                    <p>
                                        It is strongly advised that owners avoid booking international pet travel during the hottest parts of the year. We suggest that you observe the forecasted temperatures around the time of your expected travel. If temperatures reach above average, you revise your plans and change the flight to either early morning or late afternoon/evening departure. 
                                    </p>
                                    <p>
                                        It is also advised against booking travel during extremely busy periods such as holidays. However, if you must travel during a holiday, we suggest that you book during less busy hours to make it easier on your pet.
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="item py-4 border-b border-black overflow-hidden cursor-pointer">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl font-medium">
                                Does someone check on my pet during the flight?
                            </h3>
                            <div class="text-primary mr-2 font-semibold text-xl border w-8 h-8 flex justify-center items-center text-center rounded-full border-2 border-primary">
                                +
                            </div>
                        </div>
                        <div class="element hidden" >
                            <div class="py-4 desc" >
                               <div class="space-y-4">
                                    <p>
                                        The hold cannot be accessed by the cabin crew during the flight. However the ground staff will make sure your pet is unloaded as soon as possible after the plane has landed.
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="before:content-[''] before:absolute before:bottom-0 before:left-0 before:right-0 before:bg-heroSvg2 before:bg-bottom before:bg-repeat-x before:top-0 relative bg-teamBanner  after:content-[''] after:bg-top-center after:absolute after:top-0 after:left-0 after:right-0 after:bottom-0 after:bg-heroSvg1 bg-cover bg-center" style="width: 100%;" >
        <div class="relative z-10 w-full p-8 mx-auto flex justify-center items-center">
            <div class="py-12 w-10/12">
                
                <div class="bg-second w-full px-8 pt-4 pb-8 mt-3  space-y-6 rounded-sm">
                    <div class="flex items-center gap-6">
                        <h3 class="text-white m-0 font-semibold text-3xl font-work">
                            Get a pet travel quote 
                        </h3>
                        <div class="w-10 h-10 ">
                            <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 256 256" class="rotate-90 fill-primary"><path   d="M235.58 128.84L160 91.06V48a32 32 0 0 0-64 0v43.06l-75.58 37.78A8 8 0 0 0 16 136v32a8 8 0 0 0 9.57 7.84L96 161.76v18.93l-13.66 13.65A8 8 0 0 0 80 200v32a8 8 0 0 0 11 7.43l37-14.81l37 14.81a8 8 0 0 0 11-7.43v-32a8 8 0 0 0-2.34-5.66L160 180.69v-18.93l70.43 14.08A8 8 0 0 0 240 168v-32a8 8 0 0 0-4.42-7.16M224 158.24l-70.43-14.08A8 8 0 0 0 144 152v32a8 8 0 0 0 2.34 5.66L160 203.31v16.87l-29-11.61a8 8 0 0 0-5.94 0L96 220.18v-16.87l13.66-13.65A8 8 0 0 0 112 184v-32a8 8 0 0 0-9.57-7.84L32 158.24v-17.3l75.58-37.78A8 8 0 0 0 112 96V48a16 16 0 0 1 32 0v48a8 8 0 0 0 4.42 7.16L224 140.94Z"/></svg>
                        </div>
                        
                    </div>
                    <div class="flex gap-4 items-center">
                        <div class="bg-white rounded-sm px-3 py-3 flex items-center w-full gap-4">
                            <label for="from"> FROM</label>
                            <input type="text" class="w-full outline-none" placeholder="Start typing to find a location">
                        </div>
                        <div class="bg-white rounded-sm px-3 py-3 flex items-center gap-4 w-full">
                            <label for="from"> TO</label>
                            <input type="text" class="w-full outline-none" placeholder="Start typing to find a location">
                        </div>
                        <div class="bg-primary rounded-sm px-6 py-3.5 flex items-center ">
                            <button class="text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                  </svg>
                                  
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    Master &copy; 2022
@endsection

@push('scripts.footer')
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <script>
        const items = document.querySelectorAll('.item')
        items.forEach(el => {
            el.onclick = () => {
                let desc = el.querySelector('.element')
                if (desc.classList.contains("hidden")) {
                    desc.classList.remove("hidden")
                    desc.classList.add("block")
                } else if(desc.classList.contains("block")) {
                    desc.classList.remove("block")
                    desc.classList.add("hidden")
                }
            }
        });
        </script>
    @endpush
