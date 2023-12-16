<x-app-layout>
    <x-slot name="header">
        <x-header>
            {{ __('Dashboard') }}
        </x-header>
    </x-slot>

    <x-container>
        <x-form :action="route('question.store')">
            <x-textarea label="Question" name="question"/>

            <x-button.primary type="submit">
                Save
            </x-button.primary>

            <x-button.reset type="reset">
                Cancel
            </x-button.reset>
        </x-form>
    </x-container>
</x-app-layout>
