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
                                                    <li class="tocify-item level-2" data-unique="rankings-GETapi-v1-rankings-weekly">
                                <a href="#rankings-GETapi-v1-rankings-weekly">Top semanal
* Retorna o ranking dos jogos com melhor desempenho na última semana.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="rankings-GETapi-v1-rankings-monthly">
                                <a href="#rankings-GETapi-v1-rankings-monthly">Top mensal
* Retorna o ranking dos jogos com melhor desempenho no último mês.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="rankings-GETapi-v1-rankings-yearly">
                                <a href="#rankings-GETapi-v1-rankings-yearly">Top anual
* Retorna o ranking dos jogos com melhor desempenho no último ano.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="rankings-GETapi-v1-rankings-history--id-">
                                <a href="#rankings-GETapi-v1-rankings-history--id-">Histórico de ranking
* Retorna a evolução de um jogo específico ao longo do tempo.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="rankings-GETapi-v1-games-most-played">
                                <a href="#rankings-GETapi-v1-games-most-played">Jogos mais jogados
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
        <li>Last updated: April 18, 2026</li>
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

    

                                <h2 id="rankings-GETapi-v1-rankings-weekly">Top semanal
* Retorna o ranking dos jogos com melhor desempenho na última semana.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-rankings-weekly">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/rankings/weekly" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/rankings/weekly"
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

<span id="example-responses-GETapi-v1-rankings-weekly">
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
x-ratelimit-remaining: 49
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 12,
        &quot;name&quot;: &quot;Call of Duty: Warzone&quot;,
        &quot;platform&quot;: &quot;Battle.net&quot;,
        &quot;active_players&quot;: 933732,
        &quot;weekly_points&quot;: 857,
        &quot;monthly_points&quot;: 4936,
        &quot;yearly_points&quot;: 44623,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 4,
        &quot;name&quot;: &quot;Helldivers 2&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 589021,
        &quot;weekly_points&quot;: 833,
        &quot;monthly_points&quot;: 9947,
        &quot;yearly_points&quot;: 78223,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 6,
        &quot;name&quot;: &quot;Fortnite&quot;,
        &quot;platform&quot;: &quot;Epic Games&quot;,
        &quot;active_players&quot;: 418738,
        &quot;weekly_points&quot;: 813,
        &quot;monthly_points&quot;: 6995,
        &quot;yearly_points&quot;: 22527,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 7,
        &quot;name&quot;: &quot;Grand Theft Auto V&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 1509381,
        &quot;weekly_points&quot;: 812,
        &quot;monthly_points&quot;: 7911,
        &quot;yearly_points&quot;: 17211,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 8,
        &quot;name&quot;: &quot;EA SPORTS FC 24&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 1075170,
        &quot;weekly_points&quot;: 776,
        &quot;monthly_points&quot;: 6337,
        &quot;yearly_points&quot;: 70015,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 13,
        &quot;name&quot;: &quot;Minecraft&quot;,
        &quot;platform&quot;: &quot;Multiplataforma&quot;,
        &quot;active_players&quot;: 1058688,
        &quot;weekly_points&quot;: 768,
        &quot;monthly_points&quot;: 6013,
        &quot;yearly_points&quot;: 97008,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 15,
        &quot;name&quot;: &quot;Stardew Valley&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 94038,
        &quot;weekly_points&quot;: 682,
        &quot;monthly_points&quot;: 5436,
        &quot;yearly_points&quot;: 54743,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;name&quot;: &quot;Elden Ring&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 799796,
        &quot;weekly_points&quot;: 647,
        &quot;monthly_points&quot;: 8422,
        &quot;yearly_points&quot;: 76612,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 9,
        &quot;name&quot;: &quot;Roblox&quot;,
        &quot;platform&quot;: &quot;Multiplataforma&quot;,
        &quot;active_players&quot;: 139569,
        &quot;weekly_points&quot;: 636,
        &quot;monthly_points&quot;: 8679,
        &quot;yearly_points&quot;: 12637,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 10,
        &quot;name&quot;: &quot;League of Legends&quot;,
        &quot;platform&quot;: &quot;Riot Launcher&quot;,
        &quot;active_players&quot;: 1682586,
        &quot;weekly_points&quot;: 587,
        &quot;monthly_points&quot;: 1858,
        &quot;yearly_points&quot;: 56745,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-rankings-weekly" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-rankings-weekly"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-rankings-weekly"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-rankings-weekly" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-rankings-weekly">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-rankings-weekly" data-method="GET"
      data-path="api/v1/rankings/weekly"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-rankings-weekly', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-rankings-weekly"
                    onclick="tryItOut('GETapi-v1-rankings-weekly');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-rankings-weekly"
                    onclick="cancelTryOut('GETapi-v1-rankings-weekly');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-rankings-weekly"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/rankings/weekly</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-rankings-weekly"
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
                              name="Accept"                data-endpoint="GETapi-v1-rankings-weekly"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="rankings-GETapi-v1-rankings-monthly">Top mensal
* Retorna o ranking dos jogos com melhor desempenho no último mês.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-rankings-monthly">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/rankings/monthly" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/rankings/monthly"
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

<span id="example-responses-GETapi-v1-rankings-monthly">
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
x-ratelimit-remaining: 48
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 4,
        &quot;name&quot;: &quot;Helldivers 2&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 589021,
        &quot;weekly_points&quot;: 833,
        &quot;monthly_points&quot;: 9947,
        &quot;yearly_points&quot;: 78223,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 9,
        &quot;name&quot;: &quot;Roblox&quot;,
        &quot;platform&quot;: &quot;Multiplataforma&quot;,
        &quot;active_players&quot;: 139569,
        &quot;weekly_points&quot;: 636,
        &quot;monthly_points&quot;: 8679,
        &quot;yearly_points&quot;: 12637,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;name&quot;: &quot;Elden Ring&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 799796,
        &quot;weekly_points&quot;: 647,
        &quot;monthly_points&quot;: 8422,
        &quot;yearly_points&quot;: 76612,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 11,
        &quot;name&quot;: &quot;Apex Legends&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 558948,
        &quot;weekly_points&quot;: 219,
        &quot;monthly_points&quot;: 8214,
        &quot;yearly_points&quot;: 80587,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 7,
        &quot;name&quot;: &quot;Grand Theft Auto V&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 1509381,
        &quot;weekly_points&quot;: 812,
        &quot;monthly_points&quot;: 7911,
        &quot;yearly_points&quot;: 17211,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 6,
        &quot;name&quot;: &quot;Fortnite&quot;,
        &quot;platform&quot;: &quot;Epic Games&quot;,
        &quot;active_players&quot;: 418738,
        &quot;weekly_points&quot;: 813,
        &quot;monthly_points&quot;: 6995,
        &quot;yearly_points&quot;: 22527,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 8,
        &quot;name&quot;: &quot;EA SPORTS FC 24&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 1075170,
        &quot;weekly_points&quot;: 776,
        &quot;monthly_points&quot;: 6337,
        &quot;yearly_points&quot;: 70015,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 13,
        &quot;name&quot;: &quot;Minecraft&quot;,
        &quot;platform&quot;: &quot;Multiplataforma&quot;,
        &quot;active_players&quot;: 1058688,
        &quot;weekly_points&quot;: 768,
        &quot;monthly_points&quot;: 6013,
        &quot;yearly_points&quot;: 97008,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 15,
        &quot;name&quot;: &quot;Stardew Valley&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 94038,
        &quot;weekly_points&quot;: 682,
        &quot;monthly_points&quot;: 5436,
        &quot;yearly_points&quot;: 54743,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Counter-Strike 2&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 564671,
        &quot;weekly_points&quot;: 554,
        &quot;monthly_points&quot;: 5004,
        &quot;yearly_points&quot;: 60724,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-rankings-monthly" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-rankings-monthly"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-rankings-monthly"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-rankings-monthly" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-rankings-monthly">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-rankings-monthly" data-method="GET"
      data-path="api/v1/rankings/monthly"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-rankings-monthly', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-rankings-monthly"
                    onclick="tryItOut('GETapi-v1-rankings-monthly');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-rankings-monthly"
                    onclick="cancelTryOut('GETapi-v1-rankings-monthly');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-rankings-monthly"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/rankings/monthly</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-rankings-monthly"
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
                              name="Accept"                data-endpoint="GETapi-v1-rankings-monthly"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="rankings-GETapi-v1-rankings-yearly">Top anual
* Retorna o ranking dos jogos com melhor desempenho no último ano.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-rankings-yearly">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/rankings/yearly" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/rankings/yearly"
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

<span id="example-responses-GETapi-v1-rankings-yearly">
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
x-ratelimit-remaining: 47
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 3,
        &quot;name&quot;: &quot;Valorant&quot;,
        &quot;platform&quot;: &quot;Riot Launcher&quot;,
        &quot;active_players&quot;: 1153799,
        &quot;weekly_points&quot;: 155,
        &quot;monthly_points&quot;: 2662,
        &quot;yearly_points&quot;: 99544,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 13,
        &quot;name&quot;: &quot;Minecraft&quot;,
        &quot;platform&quot;: &quot;Multiplataforma&quot;,
        &quot;active_players&quot;: 1058688,
        &quot;weekly_points&quot;: 768,
        &quot;monthly_points&quot;: 6013,
        &quot;yearly_points&quot;: 97008,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 11,
        &quot;name&quot;: &quot;Apex Legends&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 558948,
        &quot;weekly_points&quot;: 219,
        &quot;monthly_points&quot;: 8214,
        &quot;yearly_points&quot;: 80587,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 4,
        &quot;name&quot;: &quot;Helldivers 2&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 589021,
        &quot;weekly_points&quot;: 833,
        &quot;monthly_points&quot;: 9947,
        &quot;yearly_points&quot;: 78223,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;name&quot;: &quot;Elden Ring&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 799796,
        &quot;weekly_points&quot;: 647,
        &quot;monthly_points&quot;: 8422,
        &quot;yearly_points&quot;: 76612,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 8,
        &quot;name&quot;: &quot;EA SPORTS FC 24&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 1075170,
        &quot;weekly_points&quot;: 776,
        &quot;monthly_points&quot;: 6337,
        &quot;yearly_points&quot;: 70015,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 5,
        &quot;name&quot;: &quot;Baldur&#039;s Gate 3&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 847989,
        &quot;weekly_points&quot;: 198,
        &quot;monthly_points&quot;: 1404,
        &quot;yearly_points&quot;: 66933,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Counter-Strike 2&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 564671,
        &quot;weekly_points&quot;: 554,
        &quot;monthly_points&quot;: 5004,
        &quot;yearly_points&quot;: 60724,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 10,
        &quot;name&quot;: &quot;League of Legends&quot;,
        &quot;platform&quot;: &quot;Riot Launcher&quot;,
        &quot;active_players&quot;: 1682586,
        &quot;weekly_points&quot;: 587,
        &quot;monthly_points&quot;: 1858,
        &quot;yearly_points&quot;: 56745,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 14,
        &quot;name&quot;: &quot;Cyberpunk 2077&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 1700019,
        &quot;weekly_points&quot;: 221,
        &quot;monthly_points&quot;: 2723,
        &quot;yearly_points&quot;: 56740,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-rankings-yearly" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-rankings-yearly"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-rankings-yearly"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-rankings-yearly" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-rankings-yearly">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-rankings-yearly" data-method="GET"
      data-path="api/v1/rankings/yearly"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-rankings-yearly', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-rankings-yearly"
                    onclick="tryItOut('GETapi-v1-rankings-yearly');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-rankings-yearly"
                    onclick="cancelTryOut('GETapi-v1-rankings-yearly');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-rankings-yearly"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/rankings/yearly</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-rankings-yearly"
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
                              name="Accept"                data-endpoint="GETapi-v1-rankings-yearly"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="rankings-GETapi-v1-rankings-history--id-">Histórico de ranking
* Retorna a evolução de um jogo específico ao longo do tempo.</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-rankings-history--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/rankings/history/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/rankings/history/1"
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

<span id="example-responses-GETapi-v1-rankings-history--id-">
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
x-ratelimit-remaining: 46
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;game&quot;: &quot;Counter-Strike 2&quot;,
    &quot;history&quot;: [
        {
            &quot;period&quot;: &quot;Semana 1&quot;,
            &quot;points&quot;: 554
        },
        {
            &quot;period&quot;: &quot;M&ecirc;s Atual&quot;,
            &quot;points&quot;: 5004
        },
        {
            &quot;period&quot;: &quot;Ano Atual&quot;,
            &quot;points&quot;: 60724
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-rankings-history--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-rankings-history--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-rankings-history--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-rankings-history--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-rankings-history--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-rankings-history--id-" data-method="GET"
      data-path="api/v1/rankings/history/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-rankings-history--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-rankings-history--id-"
                    onclick="tryItOut('GETapi-v1-rankings-history--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-rankings-history--id-"
                    onclick="cancelTryOut('GETapi-v1-rankings-history--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-rankings-history--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/rankings/history/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-rankings-history--id-"
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
                              name="Accept"                data-endpoint="GETapi-v1-rankings-history--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-rankings-history--id-"
               value="1"
               data-component="url">
    <br>
<p>O ID do jogo. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="rankings-GETapi-v1-games-most-played">Jogos mais jogados
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
x-ratelimit-remaining: 45
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 14,
        &quot;name&quot;: &quot;Cyberpunk 2077&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 1700019,
        &quot;weekly_points&quot;: 221,
        &quot;monthly_points&quot;: 2723,
        &quot;yearly_points&quot;: 56740,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 10,
        &quot;name&quot;: &quot;League of Legends&quot;,
        &quot;platform&quot;: &quot;Riot Launcher&quot;,
        &quot;active_players&quot;: 1682586,
        &quot;weekly_points&quot;: 587,
        &quot;monthly_points&quot;: 1858,
        &quot;yearly_points&quot;: 56745,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 7,
        &quot;name&quot;: &quot;Grand Theft Auto V&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 1509381,
        &quot;weekly_points&quot;: 812,
        &quot;monthly_points&quot;: 7911,
        &quot;yearly_points&quot;: 17211,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 3,
        &quot;name&quot;: &quot;Valorant&quot;,
        &quot;platform&quot;: &quot;Riot Launcher&quot;,
        &quot;active_players&quot;: 1153799,
        &quot;weekly_points&quot;: 155,
        &quot;monthly_points&quot;: 2662,
        &quot;yearly_points&quot;: 99544,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 8,
        &quot;name&quot;: &quot;EA SPORTS FC 24&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 1075170,
        &quot;weekly_points&quot;: 776,
        &quot;monthly_points&quot;: 6337,
        &quot;yearly_points&quot;: 70015,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 13,
        &quot;name&quot;: &quot;Minecraft&quot;,
        &quot;platform&quot;: &quot;Multiplataforma&quot;,
        &quot;active_players&quot;: 1058688,
        &quot;weekly_points&quot;: 768,
        &quot;monthly_points&quot;: 6013,
        &quot;yearly_points&quot;: 97008,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 12,
        &quot;name&quot;: &quot;Call of Duty: Warzone&quot;,
        &quot;platform&quot;: &quot;Battle.net&quot;,
        &quot;active_players&quot;: 933732,
        &quot;weekly_points&quot;: 857,
        &quot;monthly_points&quot;: 4936,
        &quot;yearly_points&quot;: 44623,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 5,
        &quot;name&quot;: &quot;Baldur&#039;s Gate 3&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 847989,
        &quot;weekly_points&quot;: 198,
        &quot;monthly_points&quot;: 1404,
        &quot;yearly_points&quot;: 66933,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;name&quot;: &quot;Elden Ring&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 799796,
        &quot;weekly_points&quot;: 647,
        &quot;monthly_points&quot;: 8422,
        &quot;yearly_points&quot;: 76612,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 4,
        &quot;name&quot;: &quot;Helldivers 2&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 589021,
        &quot;weekly_points&quot;: 833,
        &quot;monthly_points&quot;: 9947,
        &quot;yearly_points&quot;: 78223,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
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
x-ratelimit-remaining: 44
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 14,
        &quot;name&quot;: &quot;Cyberpunk 2077&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 1700019,
        &quot;weekly_points&quot;: 221,
        &quot;monthly_points&quot;: 2723,
        &quot;yearly_points&quot;: 56740,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 7,
        &quot;name&quot;: &quot;Grand Theft Auto V&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 1509381,
        &quot;weekly_points&quot;: 812,
        &quot;monthly_points&quot;: 7911,
        &quot;yearly_points&quot;: 17211,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 8,
        &quot;name&quot;: &quot;EA SPORTS FC 24&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 1075170,
        &quot;weekly_points&quot;: 776,
        &quot;monthly_points&quot;: 6337,
        &quot;yearly_points&quot;: 70015,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 5,
        &quot;name&quot;: &quot;Baldur&#039;s Gate 3&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 847989,
        &quot;weekly_points&quot;: 198,
        &quot;monthly_points&quot;: 1404,
        &quot;yearly_points&quot;: 66933,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;name&quot;: &quot;Elden Ring&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 799796,
        &quot;weekly_points&quot;: 647,
        &quot;monthly_points&quot;: 8422,
        &quot;yearly_points&quot;: 76612,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 4,
        &quot;name&quot;: &quot;Helldivers 2&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 589021,
        &quot;weekly_points&quot;: 833,
        &quot;monthly_points&quot;: 9947,
        &quot;yearly_points&quot;: 78223,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Counter-Strike 2&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 564671,
        &quot;weekly_points&quot;: 554,
        &quot;monthly_points&quot;: 5004,
        &quot;yearly_points&quot;: 60724,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 11,
        &quot;name&quot;: &quot;Apex Legends&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 558948,
        &quot;weekly_points&quot;: 219,
        &quot;monthly_points&quot;: 8214,
        &quot;yearly_points&quot;: 80587,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
    },
    {
        &quot;id&quot;: 15,
        &quot;name&quot;: &quot;Stardew Valley&quot;,
        &quot;platform&quot;: &quot;Steam&quot;,
        &quot;active_players&quot;: 94038,
        &quot;weekly_points&quot;: 682,
        &quot;monthly_points&quot;: 5436,
        &quot;yearly_points&quot;: 54743,
        &quot;created_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-04-18T01:47:16.000000Z&quot;
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
