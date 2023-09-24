@props(['team_name','logo','score','team_mode', 'message'])
<div class="bg-gray-50 mb-2 text-slate-500 p-2 text-sm flex gap-4 justify-between items-center">
    <x-app.team-logo :logo="$logo" />
    <div class="text-left w-40" id="team_name">{{ $team_name }}</div>
    <x-app.team-score :score="$score" />
    <x-app.score-vote :team_mode="$team_mode" />

</div>
