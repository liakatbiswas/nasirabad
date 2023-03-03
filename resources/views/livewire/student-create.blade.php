<div>
    <form wire:submit.prevent="submit" class="w-8/12 mx-auto">
        <div class="px-4 mb-4">
            <label for="" class="sms-label">Name</label>
            <input type="text" class="sms-input" wire:model="name">
            @error('name')
            <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mx-4 mb-4">
            <label for="" class="sms-label">Father's Nmae</label>
            <input type="text" class="sms-input" wire:model="father">
            @error('father')
            <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mx-4 mb-4">
            <label for="" class="sms-label">Mother's Nmae</label>
            <input type="text" class="sms-input" wire:model="mother">
            @error('mother')
            <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="mx-4 mb-4">
            <label for="" class="sms-label">Date of Birth</label>
            <input type="date" class="sms-input" wire:model="dob">
            @error('dob')
            <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="sms-btn"> Save </button>
    </form>
</div>
