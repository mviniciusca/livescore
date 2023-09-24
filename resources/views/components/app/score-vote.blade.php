@props(['team_mode'])
<div>
    <div class="flex">
        <x-app.ui.score-vote-button :method="'decrement'" :team_mode='$team_mode' :icon="'-'" />
        <x-app.ui.score-vote-button :method="'increment'" :team_mode='$team_mode' :icon="'+'" />
    </div>
</div>
