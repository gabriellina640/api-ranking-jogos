<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.9.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.9.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-rankings" class="tocify-header">
                <li class="tocify-item level-1" data-unique="rankings">
                    <a href="#rankings">Rankings</a>
                </li>
                                    <ul id="tocify-subheader-rankings" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="rankings-GETapi-v1-rankings-general">
                                <a href="#rankings-GETapi-v1-rankings-general">Ranking Geral
* Retorna o top 10 jogos baseado no período informado.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="rankings-GETapi-v1-games-most-played">
                                <a href="#rankings-GETapi-v1-games-most-played">Jogos Mais Jogados
* Retorna o top 10 jogos com base no número de jogadores ativos.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="rankings-GETapi-v1-rankings-platforms--platform-">
                                <a href="#rankings-GETapi-v1-rankings-platforms--platform-">Ranking por Plataforma
* Retorna os jogos mais bem ranqueados de uma plataforma específica.</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: April 14, 2026</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="rankings">Rankings</h1>

    <p>APIs para visualização de rankings de jogos</p>

                                <h2 id="rankings-GETapi-v1-rankings-general">Ranking Geral
* Retorna o top 10 jogos baseado no período informado.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-rankings-general">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/rankings/general?period=weekly" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/rankings/general"
);

const params = {
    "period": "weekly",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-rankings-general">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 4,
        &quot;name&quot;: &quot;League of Legends&quot;,
        &quot;platform&quot;: &quot;Riot Launcher&quot;,
        &quot;active_players&quot;: 871182,
        &quot;weekly_points&quot;: 973,
        &quot;monthly_points&quot;: 1984,
        &quot;yearly_points&quot;: 80768,
        &quot;created_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 12,
        &quot;name&quot;: &quot;Baldur&#039;s Gate 3&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 1275998,
        &quot;weekly_points&quot;: 915,
        &quot;monthly_points&quot;: 5889,
        &quot;yearly_points&quot;: 52943,
        &quot;created_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 15,
        &quot;name&quot;: &quot;Stardew Valley&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 376396,
        &quot;weekly_points&quot;: 876,
        &quot;monthly_points&quot;: 2187,
        &quot;yearly_points&quot;: 35250,
        &quot;created_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Counter-Strike 2&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 929392,
        &quot;weekly_points&quot;: 823,
        &quot;monthly_points&quot;: 1188,
        &quot;yearly_points&quot;: 81765,
        &quot;created_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 9,
        &quot;name&quot;: &quot;Fortnite&quot;,
        &quot;platform&quot;: &quot;Epic Games&quot;,
        &quot;active_players&quot;: 1114470,
        &quot;weekly_points&quot;: 797,
        &quot;monthly_points&quot;: 7803,
        &quot;yearly_points&quot;: 40254,
        &quot;created_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 6,
        &quot;name&quot;: &quot;EA SPORTS FC 24&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 921786,
        &quot;weekly_points&quot;: 696,
        &quot;monthly_points&quot;: 3010,
        &quot;yearly_points&quot;: 87627,
        &quot;created_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 3,
        &quot;name&quot;: &quot;Valorant&quot;,
        &quot;platform&quot;: &quot;Riot Launcher&quot;,
        &quot;active_players&quot;: 870657,
        &quot;weekly_points&quot;: 604,
        &quot;monthly_points&quot;: 3181,
        &quot;yearly_points&quot;: 51833,
        &quot;created_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 10,
        &quot;name&quot;: &quot;Grand Theft Auto V&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 219252,
        &quot;weekly_points&quot;: 603,
        &quot;monthly_points&quot;: 8711,
        &quot;yearly_points&quot;: 55435,
        &quot;created_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 5,
        &quot;name&quot;: &quot;Helldivers 2&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 740974,
        &quot;weekly_points&quot;: 591,
        &quot;monthly_points&quot;: 7606,
        &quot;yearly_points&quot;: 20462,
        &quot;created_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 13,
        &quot;name&quot;: &quot;Warzone&quot;,
        &quot;platform&quot;: &quot;Battle.net&quot;,
        &quot;active_players&quot;: 1362862,
        &quot;weekly_points&quot;: 415,
        &quot;monthly_points&quot;: 1747,
        &quot;yearly_points&quot;: 22846,
        &quot;created_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-rankings-general" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-rankings-general"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-rankings-general"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-rankings-general" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-rankings-general">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-rankings-general" data-method="GET"
      data-path="api/v1/rankings/general"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-rankings-general', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-rankings-general"
                    onclick="tryItOut('GETapi-v1-rankings-general');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-rankings-general"
                    onclick="cancelTryOut('GETapi-v1-rankings-general');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-rankings-general"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/rankings/general</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-rankings-general"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-rankings-general"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>period</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="period"                data-endpoint="GETapi-v1-rankings-general"
               value="weekly"
               data-component="query">
    <br>
<p>O período do ranking (weekly, monthly, yearly). Example: <code>weekly</code></p>
            </div>
                </form>

                    <h2 id="rankings-GETapi-v1-games-most-played">Jogos Mais Jogados
* Retorna o top 10 jogos com base no número de jogadores ativos.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-games-most-played">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/games/most-played" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/games/most-played"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-games-most-played">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 11,
        &quot;name&quot;: &quot;Cyberpunk 2077&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 1395488,
        &quot;weekly_points&quot;: 131,
        &quot;monthly_points&quot;: 8565,
        &quot;yearly_points&quot;: 96534,
        &quot;created_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 13,
        &quot;name&quot;: &quot;Warzone&quot;,
        &quot;platform&quot;: &quot;Battle.net&quot;,
        &quot;active_players&quot;: 1362862,
        &quot;weekly_points&quot;: 415,
        &quot;monthly_points&quot;: 1747,
        &quot;yearly_points&quot;: 22846,
        &quot;created_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 14,
        &quot;name&quot;: &quot;Apex Legends&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 1301140,
        &quot;weekly_points&quot;: 378,
        &quot;monthly_points&quot;: 7466,
        &quot;yearly_points&quot;: 49160,
        &quot;created_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 12,
        &quot;name&quot;: &quot;Baldur&#039;s Gate 3&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 1275998,
        &quot;weekly_points&quot;: 915,
        &quot;monthly_points&quot;: 5889,
        &quot;yearly_points&quot;: 52943,
        &quot;created_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 9,
        &quot;name&quot;: &quot;Fortnite&quot;,
        &quot;platform&quot;: &quot;Epic Games&quot;,
        &quot;active_players&quot;: 1114470,
        &quot;weekly_points&quot;: 797,
        &quot;monthly_points&quot;: 7803,
        &quot;yearly_points&quot;: 40254,
        &quot;created_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;name&quot;: &quot;Elden Ring&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 1041606,
        &quot;weekly_points&quot;: 240,
        &quot;monthly_points&quot;: 4402,
        &quot;yearly_points&quot;: 77492,
        &quot;created_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Counter-Strike 2&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 929392,
        &quot;weekly_points&quot;: 823,
        &quot;monthly_points&quot;: 1188,
        &quot;yearly_points&quot;: 81765,
        &quot;created_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 6,
        &quot;name&quot;: &quot;EA SPORTS FC 24&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 921786,
        &quot;weekly_points&quot;: 696,
        &quot;monthly_points&quot;: 3010,
        &quot;yearly_points&quot;: 87627,
        &quot;created_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 4,
        &quot;name&quot;: &quot;League of Legends&quot;,
        &quot;platform&quot;: &quot;Riot Launcher&quot;,
        &quot;active_players&quot;: 871182,
        &quot;weekly_points&quot;: 973,
        &quot;monthly_points&quot;: 1984,
        &quot;yearly_points&quot;: 80768,
        &quot;created_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 3,
        &quot;name&quot;: &quot;Valorant&quot;,
        &quot;platform&quot;: &quot;Riot Launcher&quot;,
        &quot;active_players&quot;: 870657,
        &quot;weekly_points&quot;: 604,
        &quot;monthly_points&quot;: 3181,
        &quot;yearly_points&quot;: 51833,
        &quot;created_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-games-most-played" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-games-most-played"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-games-most-played"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-games-most-played" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-games-most-played">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-games-most-played" data-method="GET"
      data-path="api/v1/games/most-played"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-games-most-played', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-games-most-played"
                    onclick="tryItOut('GETapi-v1-games-most-played');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-games-most-played"
                    onclick="cancelTryOut('GETapi-v1-games-most-played');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-games-most-played"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/games/most-played</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-games-most-played"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-games-most-played"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="rankings-GETapi-v1-rankings-platforms--platform-">Ranking por Plataforma
* Retorna os jogos mais bem ranqueados de uma plataforma específica.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-rankings-platforms--platform-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/rankings/platforms/Steam" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/rankings/platforms/Steam"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-rankings-platforms--platform-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 11,
        &quot;name&quot;: &quot;Cyberpunk 2077&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 1395488,
        &quot;weekly_points&quot;: 131,
        &quot;monthly_points&quot;: 8565,
        &quot;yearly_points&quot;: 96534,
        &quot;created_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 14,
        &quot;name&quot;: &quot;Apex Legends&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 1301140,
        &quot;weekly_points&quot;: 378,
        &quot;monthly_points&quot;: 7466,
        &quot;yearly_points&quot;: 49160,
        &quot;created_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 12,
        &quot;name&quot;: &quot;Baldur&#039;s Gate 3&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 1275998,
        &quot;weekly_points&quot;: 915,
        &quot;monthly_points&quot;: 5889,
        &quot;yearly_points&quot;: 52943,
        &quot;created_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;name&quot;: &quot;Elden Ring&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 1041606,
        &quot;weekly_points&quot;: 240,
        &quot;monthly_points&quot;: 4402,
        &quot;yearly_points&quot;: 77492,
        &quot;created_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Counter-Strike 2&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 929392,
        &quot;weekly_points&quot;: 823,
        &quot;monthly_points&quot;: 1188,
        &quot;yearly_points&quot;: 81765,
        &quot;created_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 6,
        &quot;name&quot;: &quot;EA SPORTS FC 24&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 921786,
        &quot;weekly_points&quot;: 696,
        &quot;monthly_points&quot;: 3010,
        &quot;yearly_points&quot;: 87627,
        &quot;created_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 5,
        &quot;name&quot;: &quot;Helldivers 2&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 740974,
        &quot;weekly_points&quot;: 591,
        &quot;monthly_points&quot;: 7606,
        &quot;yearly_points&quot;: 20462,
        &quot;created_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 15,
        &quot;name&quot;: &quot;Stardew Valley&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 376396,
        &quot;weekly_points&quot;: 876,
        &quot;monthly_points&quot;: 2187,
        &quot;yearly_points&quot;: 35250,
        &quot;created_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;
    },
    {
        &quot;id&quot;: 10,
        &quot;name&quot;: &quot;Grand Theft Auto V&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 219252,
        &quot;weekly_points&quot;: 603,
        &quot;monthly_points&quot;: 8711,
        &quot;yearly_points&quot;: 55435,
        &quot;created_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-14T02:35:43.000000Z&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-rankings-platforms--platform-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-rankings-platforms--platform-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-rankings-platforms--platform-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-rankings-platforms--platform-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-rankings-platforms--platform-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-rankings-platforms--platform-" data-method="GET"
      data-path="api/v1/rankings/platforms/{platform}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-rankings-platforms--platform-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-rankings-platforms--platform-"
                    onclick="tryItOut('GETapi-v1-rankings-platforms--platform-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-rankings-platforms--platform-"
                    onclick="cancelTryOut('GETapi-v1-rankings-platforms--platform-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-rankings-platforms--platform-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/rankings/platforms/{platform}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-rankings-platforms--platform-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-rankings-platforms--platform-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>platform</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="platform"                data-endpoint="GETapi-v1-rankings-platforms--platform-"
               value="Steam"
               data-component="url">
    <br>
<p>O nome da plataforma. Example: <code>Steam</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
