<div>
    <form wire:submit.prevent="updateCart">
        <input type="number" wire:model="quantity" wire:change="updateCart">
        {{-- <input type="submit" class="button" value="Save"> --}}
    </form>
</div>
