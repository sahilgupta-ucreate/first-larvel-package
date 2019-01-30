<?php

namespace Sahil\First;

use Sahil\First\Models\ContactForm;

class ContactHelper
{
   Public function GetAllMessages(){
        return ContactForm::latest()->get()->toArray();
   }
}