<?php
namespace app\common;

use Yii;
use app\models\Contact;
use app\models\ContactForm;
use app\models\Tag;

?>

<?php 
class ModelAdapter {

	public static function getModelFromContactForm(ContactForm $contactForm) {
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
	
	public static function getContactFormFromModel(Contact $contact) {
		$contactForm = new ContactForm();
	
		$contactForm->firstname = $contact->firstname;
		$contactForm->lastname = $contact->lastname;
		$contactForm->title = $contact->title;
		$contactForm->position = $contact->position;
		$contactForm->company = $contact->company;
		$contactForm->phone_home = $contact->phone_home;
		$contactForm->phone_work = $contact->phone_work;
		$contactForm->mobile = $contact->mobile;
		$contactForm->mobile2 = $contact->mobile2;
		$contactForm->fax = $contact->fax;
		$contactForm->email_personal = $contact->email_personal;
		$contactForm->email_work = $contact->email_work;
		$contactForm->address_home = $contact->address_home;
		$contactForm->address_work = $contact->address_work;
		$contactForm->notes = $contact->notes;
		
		if($contact->getTags()->all() != null) {
			$tags = '';
			foreach ($contact->getTags()->all() as $tag) {
				$tags .= $tag->name . ';';
			}
			$contactForm->tags = $tags;
		}
	
		return $contactForm;
	}
}

?>