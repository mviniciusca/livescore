@props(['logo', 'team_name'])
<div>
    <div class="max-w-xs uppercase mt-10">
        <x-app.score :logo="'https://pickem-cdn.overwatchleague.com/teams/hangzhou-spark.svg'" :team_mode="'home'"
            :team_name="'Hangzhou Spark'" :score="$home_score" />

        <x-app.score :logo="'https://pickem-cdn.overwatchleague.com/teams/los-angeles-gladiators.svg'"
            :team_mode="'visitor'" :team_name="'Los Angeles Gladiators'" :score="$visitor_score" />

        <x-app.ui.badge :message='$result' />

    </div>
</div>
