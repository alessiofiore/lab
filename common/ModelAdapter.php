<?php
namespace app\common;


use app\models\Contact;
use app\models\ContactForm;

?>

<?php 
class ModelAdapter {

	public function rules(ContactForm $contactForm) {
		$contact = new Contact();
		
		$contact->firstname = $contactForm->firstname;
		$contact->lastname = $contactForm->lastname;
		$contact->title = $contactForm->title;
		$contact->position = $contactForm->position;
		$contact->company = $contactForm->company;
		$contact->phone_home = $contactForm->phone_home;
		$contact->phone_work = $contactForm->phone_work;
		$contact->mobile = $contactForm->mobile;
		$contact->mobile2 = $contactForm->mobile2;
		$contact->fax = $contactForm->fax;
		$contact->email_personal = $contactForm->email_personal;
		$contact->email_work = $contactForm->email_work;
		$contact->address_home = $contactForm->address_home;
		$contact->address_work = $contactForm->address_work;
		$contact->notes = $contactForm->notes;
		
		return $contact;
	}
}

?>