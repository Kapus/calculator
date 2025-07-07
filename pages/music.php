<div class="container mt-5 mb-5" style="max-width:900px;">
    <h2 class="mb-5">Musik</h2>
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="?page=music&song=1" class="list-group-item list-group-item-action small<?php if(!isset($_GET['song'])||$_GET['song']=='1') echo ' active'; ?>">Rock Anthem</a>
                <a href="?page=music&song=2" class="list-group-item list-group-item-action small<?php if(isset($_GET['song'])&&$_GET['song']=='2') echo ' active'; ?>">Electric Highway</a>
                <a href="?page=music&song=3" class="list-group-item list-group-item-action small<?php if(isset($_GET['song'])&&$_GET['song']=='3') echo ' active'; ?>">Guitar Hero</a>
                <a href="?page=music&song=4" class="list-group-item list-group-item-action small<?php if(isset($_GET['song'])&&$_GET['song']=='4') echo ' active'; ?>">Night Drive</a>
                <a href="?page=music&song=6" class="list-group-item list-group-item-action small<?php if(isset($_GET['song'])&&$_GET['song']=='6') echo ' active'; ?>">Thunder Road</a>
                <a href="?page=music&song=7" class="list-group-item list-group-item-action small<?php if(isset($_GET['song'])&&$_GET['song']=='7') echo ' active'; ?>">Starlight Jam</a>
                <a href="?page=music&song=8" class="list-group-item list-group-item-action small<?php if(isset($_GET['song'])&&$_GET['song']=='8') echo ' active'; ?>">Wild Ride</a>
                <a href="?page=music&song=9" class="list-group-item list-group-item-action small<?php if(isset($_GET['song'])&&$_GET['song']=='9') echo ' active'; ?>">Fire Escape</a>
            </div>
            <button id="randomizeSongsBtn" type="button" class="btn btn-primary w-100 mt-4">Slumpa låtlista</button>
        </div>
        <div class="col-md-9">
            <?php
            $songs = [
                '1' => [
                    'title' => 'Rock Anthem',
                    'src' => 'https://www.bensound.com/bensound-music/bensound-energy.mp3',
                    'img' => 'https://picsum.photos/id/1025/200/200',
                    'lyrics' => "We are the fire,\nWe are the sound,\nRocking the night,\nShaking the ground.\n\n(Instrumental)"
                ],
                '2' => [
                    'title' => 'Electric Highway',
                    'src' => 'https://www.bensound.com/bensound-music/bensound-extremeaction.mp3',
                    'img' => 'https://picsum.photos/id/1027/200/200',
                    'lyrics' => "Riding the electric highway,\nLights are flashing by,\nGuitars screaming louder,\nAs we reach the sky.\n\n(Instrumental)"
                ],
                '3' => [
                    'title' => 'Guitar Hero',
                    'src' => 'https://www.bensound.com/bensound-music/bensound-actionable.mp3',
                    'img' => 'https://picsum.photos/id/1035/200/200',
                    'lyrics' => "Fingers on the fretboard,\nSolo in the air,\nGuitar hero rising,\nMusic everywhere.\n\n(Instrumental)"
                ],
                '4' => [
                    'title' => 'Night Drive',
                    'src' => 'https://www.bensound.com/bensound-music/bensound-highoctane.mp3',
                    'img' => 'https://picsum.photos/id/1041/200/200',
                    'lyrics' => "Cruising through the city,\nNeon in our eyes,\nNight drive adventure,\nUnder velvet skies.\n\n(Instrumental)"
                ],
                '6' => [
                    'title' => 'Thunder Road',
                    'src' => 'https://www.bensound.com/bensound-music/bensound-happyrock.mp3',
                    'img' => 'https://picsum.photos/id/1043/200/200',
                    'lyrics' => "Thunder on the highway,\nEngines roaring loud,\nRocking down the thunder road,\nLost within the crowd.\n\n(Instrumental)"
                ],
                '7' => [
                    'title' => 'Starlight Jam',
                    'src' => 'https://www.bensound.com/bensound-music/bensound-funkyelement.mp3',
                    'img' => 'https://picsum.photos/id/1044/200/200',
                    'lyrics' => "Jamming under starlight,\nGrooving through the night,\nMusic takes us higher,\nEverything's alright.\n\n(Instrumental)"
                ],
                '8' => [
                    'title' => 'Wild Ride',
                    'src' => 'https://www.bensound.com/bensound-music/bensound-epic.mp3',
                    'img' => 'https://picsum.photos/id/1045/200/200',
                    'lyrics' => "On a wild ride,\nNever looking back,\nChasing down the freedom,\nOn this endless track.\n\n(Instrumental)"
                ],
                '9' => [
                    'title' => 'Fire Escape',
                    'src' => 'https://www.bensound.com/bensound-music/bensound-energetic.mp3',
                    'img' => 'https://picsum.photos/id/1051/200/200',
                    'lyrics' => "Running to the fire escape,\nLeaving all behind,\nIn the heat of the moment,\nFreedom is our find.\n\n(Instrumental)"
                ]
            ];
            $song_id = isset($_GET['song']) && isset($songs[$_GET['song']]) ? $_GET['song'] : '1';
            $song = $songs[$song_id];
            ?>
            <div class="d-flex align-items-center">
                <div class="flex-grow-1">
                    <h4 class="song-title"><?php echo htmlspecialchars($song['title']); ?></h4>
                    <audio id="musicPlayer" controls style="width:100%; max-width:700px;">
                        <source src="<?php echo htmlspecialchars($song['src']); ?>" type="audio/mpeg">
                        Din webbläsare stödjer inte ljuduppspelning.
                    </audio>
                </div>
                <div class="ms-4">
                    <img src="<?php echo htmlspecialchars($song['img']); ?>" alt="Song image" class="img-fluid rounded shadow" style="width:120px;height:120px;object-fit:cover;">
                </div>
            </div>
            <div class="mt-4">
                <div class="card card-body bg-light border">
                    <strong>Text:</strong><br>
                    <pre class="mb-0" style="background:transparent;border:none;font-family:inherit;font-size:1rem;white-space:pre-line;"><?php echo htmlspecialchars($song['lyrics']); ?></pre>
                </div>
            </div>
        </div>
    </div>
    <div class="alert alert-success mt-4 text-center" style="font-size:1.1rem;">Njut av musiken!</div>
</div>
<style>
.list-group-item {
    border-radius: 0 !important;
}
.list-group {
    border-radius: 0 !important;
}
.song-title {
    color: #198754 !important; /* Bootstrap green */
}
</style>
<script>
// Only auto-play if a song link was clicked
// Set a flag in sessionStorage when a song link is clicked
var songLinks = document.querySelectorAll('.list-group-item');
songLinks.forEach(function(link) {
    link.addEventListener('click', function() {
        sessionStorage.setItem('playMusic', '1');
    });
});

// Song data for randomization
var allSongs = [
    {id: '1', title: 'Rock Anthem'},
    {id: '2', title: 'Electric Highway'},
    {id: '3', title: 'Guitar Hero'},
    {id: '4', title: 'Night Drive'},
    {id: '6', title: 'Thunder Road'},
    {id: '7', title: 'Starlight Jam'},
    {id: '8', title: 'Wild Ride'},
    {id: '9', title: 'Fire Escape'}
];

document.getElementById('randomizeSongsBtn').addEventListener('click', function() {
    var listGroup = document.querySelector('.list-group');
    if (!listGroup) return;
    // Get current song from URL
    var params = new URLSearchParams(window.location.search);
    var currentSong = params.get('song') || '1';
    var current = allSongs.find(song => song.id === currentSong) || allSongs[0];
    var rest = allSongs.filter(song => song.id !== current.id);
    // Shuffle rest
    for (let i = rest.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [rest[i], rest[j]] = [rest[j], rest[i]];
    }
    // Always show 8 songs: current + 7 others (or as many as possible)
    var picked = rest.slice(0, Math.min(7, rest.length));
    var newOrder = [current].concat(picked);
    listGroup.innerHTML = '';
    newOrder.forEach(function(song) {
        var a = document.createElement('a');
        a.href = '?page=music&song=' + song.id;
        a.className = 'list-group-item list-group-item-action small';
        a.textContent = song.title;
        if (song.id === currentSong) a.classList.add('active');
        a.addEventListener('click', function() {
            sessionStorage.setItem('playMusic', '1');
        });
        listGroup.appendChild(a);
    });
});

// On page load, check the flag and play if set
window.addEventListener('DOMContentLoaded', function() {
    var audio = document.getElementById('musicPlayer');
    if (audio) {
        audio.volume = 0.3; // Set volume to 30% by default
        // Auto-play next song when current ends
        audio.addEventListener('ended', function() {
            var links = Array.from(document.querySelectorAll('.list-group-item'));
            var current = links.findIndex(function(link) {
                return link.classList.contains('active');
            });
            if (current !== -1 && current < links.length - 1) {
                // Go to next song
                window.location = links[current + 1].href;
            }
        });
    }
    if (sessionStorage.getItem('playMusic') === '1') {
        if (audio) {
            setTimeout(function() {
                audio.play().catch(function(){});
                sessionStorage.removeItem('playMusic');
            }, 100);
        }
    }
});
</script>
