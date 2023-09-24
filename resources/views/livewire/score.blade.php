@props(['team_mode'])
<div>
    <div class="mt-10 max-w-xs uppercase">

        <x-app.score :logo="'https://pickem-cdn.overwatchleague.com/teams/los-angeles-gladiators.svg'"
            :team_mode="'home'" :team_name="$name" :score="$home_score" />
        <x-app.score :logo="'https://pickem-cdn.overwatchleague.com/teams/los-angeles-gladiators.svg'"
            :team_mode="'visitor'" :team_name="$visitor_name" :score="$visitor_score" />

        <x-app.ui.badge :message='$result' />
    </div>
</div>
