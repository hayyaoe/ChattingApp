<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

use App\Models\User;
use App\Models\Contact;

class AddContact extends Component
{
    public $search = "";
    public $results = [];
    public $contacts = [];

    public function mount()
    {
        $this->updateContacts();
    }

    // This method is called when the search input is updated
    public function updatedSearch()
    {
        $this->searchUsers();
    }

    // This method performs the actual search query
    public function searchUsers()
    {
        // Perform the search query only if the search term is not empty
        if (!empty($this->search)) {
            $this->results = User::where(
                "username",
                "like",
                "%" . $this->search . "%"
            )->get();
        }
    }

    public function addContact($user_id)
    {
        $rules = [
            "user_id" => "required|integer|exists:users,id",
        ];

        $validator = Validator::make(["user_id" => $user_id], $rules);

        if ($validator->fails()) {
            // Handle validation errors (e.g., return an error message)
            // session()->flash(
            //     "error",
            //     "Validation failed: " .
            //         implode(", ", $validator->errors()->all())
            // );
            return;
        }

        Contact::create([
            "user" => Auth::user()->id,
            "contact" => $user_id,
        ]);

        $this->updateContacts();

        // session()->flash("message", "Contact successfully added.");
    }

    public function updateContacts()
    {
        $this->contacts = Auth::user()->contacts;
    }

    public function isContact($userId)
    {
        $contactIds = $this->contacts->pluck("contact")->toArray();
        return in_array($userId, $contactIds);
    }
}
