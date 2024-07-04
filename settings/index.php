<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#00001" /><meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link href="/src/styles/styles.css" rel="stylesheet">
    <link href="/src/styles/timeline.css" rel="stylesheet">
    <link href="/src/styles/menus.css" rel="stylesheet">
    <link href="/src/styles/responsive.css" rel="stylesheet">
  
    <script defer src="https://cdn.jsdelivr.net/npm/@twemoji/api@latest/dist/twemoji.min.js"
        crossorigin="anonymous"></script>
    <script src="/src/scripts/general.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>Settings / Chirp</title>
</head>

<body>
    <header>
        <div id="desktopMenu">
            <nav>
         <img src="/src/images/icons/chirp.svg" alt="Chirp" onclick="playChirpSound()">
                <a href="/"><img src="/src/images/icons/house.svg" alt=""> Home</a>
                <a href="/explore"><img src="/src/images/icons/search.svg" alt=""> Explore</a>
                <a href="/notifications"><img src="/src/images/icons/bell.svg" alt=""> Notifications</a>
                <a href="/messages"><img src="/src/images/icons/envelope.svg" alt=""> Messages</a>
            <a href="/user/?id=<?php echo isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'guest'; ?>"><img src="/src/images/icons/person.svg" alt=""> Profile</a>
                <a href="/compose" class="newchirp">Chirp</a>
            </nav>
            <div id="menuSettings">
                <a href="settings">⚙️ Settings</a>
                <?php if (isset($_SESSION['username'])): ?>
                <a href="/signout.php">🚪 Sign Out</a>
                <?php else: ?>
                <a href="/signin/">🚪 Sign In</a>
                <?php endif; ?>
            </div>
            <button id="settingsButtonWrapper" type="button" onclick="showMenuSettings()">
                <img class="userPic"
                    src="<?php echo isset($_SESSION['profile_pic']) ? htmlspecialchars($_SESSION['profile_pic']) : '/src/images/users/guest/user.svg'; ?>"
                    alt="<?php echo isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'guest'; ?>">
                <div>
                    <p class="usernameMenu"><?php echo isset($_SESSION['name']) ? htmlspecialchars($_SESSION['name']) : 'Guest'; ?>
                        <?php if (isset($_SESSION['is_verified']) && $_SESSION['is_verified']): ?>
                            <img class="emoji" src="/src/images/icons/verified.svg" alt="Verified">
                        <?php endif; ?>
                    </p>
                    <p class="subText">
                        @<?php echo isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'guest'; ?>
                    </p>
                </div>
                <p class="settingsButton">⚙️</p>
            </button>
        </div>
    </header>
    <main>
        <div id="feed">
            <div id="iconChirp" onclick="playChirpSound()">
         <img src="/src/images/icons/chirp.svg" alt="Chirp">
            </div>
            <div class="title">
                <p class="selcted">Settings</p>
            </div>
   <div id="exploreer">
        <textarea maxlength="240" placeholder="Find a setting..."></textarea>
      </div>
      <ul class="settingsList">
        <li>
        
        <a href="settings/content-you-see">Content you see</a>
        <hr>
                        <select id="language-picker">
            <option value="en">English</option>
            <option value="sv-se">Svenska</option>
            </select>
          
        </li>
      </ul>
        </div>
    </main>
    <aside id="sideBar">
        <div id="whotfollow">
            <p>Suggested accounts</p>
            <div>
                <div>
                    <img class="userPic"
                        src="https://pbs.twimg.com/user_images/1717013664954499072/2dcJ0Unw_400x400.png" alt="Apple">
                    <div>
                        <p>Apple <img class="verified" src="/src/images/icons/verified.svg" alt="Verified"></p>
                        <p class="subText">@apple</p>
                    </div>
                </div>
                <a class="followButton following">Following</a>
            </div>
            <div>
                <div>
                    <img class="userPic"
                        src="https://pbs.twimg.com/user_images/1380530524779859970/TfwVAbyX_400x400.jpg"
                        alt="President Biden">
                    <div>
                        <p>President Biden <img class="verified" src="/src/images/icons/verified.svg" alt="Verified"></p>
                        <p class="subText">@POTUS</p>
                    </div>
                </div>
                <a class="followButton">Follow</a>
            </div>
        </div>
        </div>
        <div>
            <p class="subText">Inspired by Twitter/X. No code has been sourced from Twitter/X. Twemoji by Twitter Inc/X Corp is licensed under CC-BY 4.0.
<br><br>You're running: Chirp Beta 0.0.1b</p>
        </div>
    </aside>
    <footer>
        <div>
            <a href="/"><img src="/src/images/icons/house.svg" alt="Home"></a>
            <a href="/explore"><img src="/src/images/icons/search.svg" alt="Explore"></a>
            <a href="/notifications"><img src="/src/images/icons/bell.svg" alt="Notifications"></a>
            <a href="/messages"><img src="/src/images/icons/envelope.svg" alt="Messages"></a>
    <a href="/user/?id=<?php echo isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'guest'; ?>"><img src="/src/images/icons/person.svg" alt="Profile"></a>
        </div>
    </footer>
</body>

</html>