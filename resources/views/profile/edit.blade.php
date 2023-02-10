<x-app-layout :message="!is_null($message) ? $message : null" :type="!is_null($type) ? $type : null">
    <div class="row justify-content-center py-5">
        <div class="col-sm-12 col-md-6 col-lg-5">
            <x-card-bootstrap5>
                <div class="form-edit-profile mb-4">
                    @include('profile.partials.update-profile-information-form')
                </div>
                <div class="form-password">
                    @include('profile.partials.update-password-form')
                </div>
                <div class="form-delete">
                    @include('profile.partials.delete-user-form')
                </div>
            </x-card-bootstrap5>
        </div>
    </div>
</x-app-layout>
