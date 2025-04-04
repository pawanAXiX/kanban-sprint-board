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
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.1.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.1.0.js") }}"></script>

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
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-tasks">
                                <a href="#endpoints-GETapi-tasks">GET api/tasks</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-tasks">
                                <a href="#endpoints-POSTapi-tasks">POST api/tasks</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-tasks--id-">
                                <a href="#endpoints-PUTapi-tasks--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-tasks--id-">
                                <a href="#endpoints-DELETEapi-tasks--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-tasks--task_id--reorder">
                                <a href="#endpoints-POSTapi-tasks--task_id--reorder">POST api/tasks/{task_id}/reorder</a>
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
        <li>Last updated: April 4, 2025</li>
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

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-tasks">GET api/tasks</h2>

<p>
</p>



<span id="example-requests-GETapi-tasks">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/tasks" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tasks"
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

<span id="example-responses-GETapi-tasks">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;status&quot;: &quot;not started&quot;,
        &quot;tasks&quot;: [
            {
                &quot;id&quot;: 11,
                &quot;name&quot;: &quot;Lolita Zieme&quot;,
                &quot;description&quot;: &quot;A et quod rerum quibusdam quae. Dolores eligendi natus vitae dolores. Qui molestias vitae aliquid necessitatibus quibusdam accusantium rem.&quot;,
                &quot;priority&quot;: &quot;low&quot;,
                &quot;order&quot;: 0,
                &quot;status&quot;: &quot;not started&quot;
            },
            {
                &quot;id&quot;: 14,
                &quot;name&quot;: &quot;Lulu Boyer&quot;,
                &quot;description&quot;: &quot;Quo facere accusamus modi omnis porro consequatur. Ab numquam doloremque sit consequuntur modi molestias placeat.&quot;,
                &quot;priority&quot;: &quot;medium&quot;,
                &quot;order&quot;: 1,
                &quot;status&quot;: &quot;not started&quot;
            }
        ]
    },
    {
        &quot;status&quot;: &quot;in progress&quot;,
        &quot;tasks&quot;: [
            {
                &quot;id&quot;: 20,
                &quot;name&quot;: &quot;Alexandria Haag&quot;,
                &quot;description&quot;: &quot;Cumque natus et laborum corporis. Est neque quis provident recusandae maxime ratione quibusdam. Eaque et velit libero est. Nihil sunt eos quos voluptatem facilis dolorem.&quot;,
                &quot;priority&quot;: &quot;high&quot;,
                &quot;order&quot;: 0,
                &quot;status&quot;: &quot;in progress&quot;
            },
            {
                &quot;id&quot;: 12,
                &quot;name&quot;: &quot;Tracey Kessler Sr.&quot;,
                &quot;description&quot;: &quot;Sint non quaerat sed. Sit et dignissimos ut unde dolorem. Sed facere voluptas aperiam harum accusantium aspernatur ut sapiente.&quot;,
                &quot;priority&quot;: &quot;high&quot;,
                &quot;order&quot;: 1,
                &quot;status&quot;: &quot;in progress&quot;
            },
            {
                &quot;id&quot;: 17,
                &quot;name&quot;: &quot;Ruth Windler&quot;,
                &quot;description&quot;: &quot;Minus id aut itaque officia accusamus aliquam delectus. Qui voluptas consequuntur nihil quibusdam tempore est autem.&quot;,
                &quot;priority&quot;: &quot;medium&quot;,
                &quot;order&quot;: 2,
                &quot;status&quot;: &quot;in progress&quot;
            }
        ]
    },
    {
        &quot;status&quot;: &quot;active&quot;,
        &quot;tasks&quot;: [
            {
                &quot;id&quot;: 15,
                &quot;name&quot;: &quot;Jerome Hammes&quot;,
                &quot;description&quot;: &quot;Quo vel corporis temporibus et. Mollitia eius consequatur accusantium cupiditate omnis. Labore quam at nihil amet qui alias distinctio. Quibusdam accusamus velit minus quia.&quot;,
                &quot;priority&quot;: &quot;low&quot;,
                &quot;order&quot;: 0,
                &quot;status&quot;: &quot;active&quot;
            },
            {
                &quot;id&quot;: 16,
                &quot;name&quot;: &quot;Mr. Kristian Medhurst&quot;,
                &quot;description&quot;: &quot;Facilis asperiores totam quia atque dolore et veniam. Sunt ad sed perferendis asperiores perferendis. Ipsam velit fugit enim eum vitae.&quot;,
                &quot;priority&quot;: &quot;high&quot;,
                &quot;order&quot;: 1,
                &quot;status&quot;: &quot;active&quot;
            },
            {
                &quot;id&quot;: 18,
                &quot;name&quot;: &quot;Ms. Vanessa Breitenberg III&quot;,
                &quot;description&quot;: &quot;Distinctio iure in ex modi minus. Temporibus inventore ratione debitis ratione placeat aut. Provident nemo minima praesentium asperiores molestiae rem tempora expedita.&quot;,
                &quot;priority&quot;: &quot;medium&quot;,
                &quot;order&quot;: 2,
                &quot;status&quot;: &quot;active&quot;
            },
            {
                &quot;id&quot;: 21,
                &quot;name&quot;: &quot;test&quot;,
                &quot;description&quot;: null,
                &quot;priority&quot;: &quot;low&quot;,
                &quot;order&quot;: 3,
                &quot;status&quot;: &quot;active&quot;
            }
        ]
    },
    {
        &quot;status&quot;: &quot;archived&quot;,
        &quot;tasks&quot;: [
            {
                &quot;id&quot;: 13,
                &quot;name&quot;: &quot;Dayna Hoppe PhD&quot;,
                &quot;description&quot;: &quot;Nobis rem aut ut vero. Accusantium debitis voluptatibus officiis eum magnam deserunt. Enim ducimus sed qui et voluptatem placeat. Cumque deleniti et quis.&quot;,
                &quot;priority&quot;: &quot;low&quot;,
                &quot;order&quot;: 0,
                &quot;status&quot;: &quot;archived&quot;
            },
            {
                &quot;id&quot;: 19,
                &quot;name&quot;: &quot;Jayson Gleason&quot;,
                &quot;description&quot;: &quot;Exercitationem eum sequi culpa minus. Cumque veniam nihil rerum. Aut cupiditate est dignissimos dolorem aut praesentium. Nesciunt eligendi nihil vel consequatur earum.&quot;,
                &quot;priority&quot;: &quot;low&quot;,
                &quot;order&quot;: 1,
                &quot;status&quot;: &quot;archived&quot;
            }
        ]
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-tasks" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-tasks"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tasks"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-tasks" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tasks">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-tasks" data-method="GET"
      data-path="api/tasks"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-tasks', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-tasks"
                    onclick="tryItOut('GETapi-tasks');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-tasks"
                    onclick="cancelTryOut('GETapi-tasks');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-tasks"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/tasks</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-tasks"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-tasks"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-tasks">POST api/tasks</h2>

<p>
</p>



<span id="example-requests-POSTapi-tasks">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/tasks" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"architecto\",
    \"description\": \"Eius et animi quos velit et.\",
    \"status\": \"active\",
    \"priority\": \"medium\",
    \"order\": 4326.41688
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tasks"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "architecto",
    "description": "Eius et animi quos velit et.",
    "status": "active",
    "priority": "medium",
    "order": 4326.41688
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-tasks">
</span>
<span id="execution-results-POSTapi-tasks" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-tasks"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-tasks"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-tasks" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-tasks">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-tasks" data-method="POST"
      data-path="api/tasks"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-tasks', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-tasks"
                    onclick="tryItOut('POSTapi-tasks');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-tasks"
                    onclick="cancelTryOut('POSTapi-tasks');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-tasks"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/tasks</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-tasks"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-tasks"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-tasks"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-tasks"
               value="Eius et animi quos velit et."
               data-component="body">
    <br>
<p>Example: <code>Eius et animi quos velit et.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-tasks"
               value="active"
               data-component="body">
    <br>
<p>Example: <code>active</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>not started</code></li> <li><code>in progress</code></li> <li><code>active</code></li> <li><code>archived</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>priority</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="priority"                data-endpoint="POSTapi-tasks"
               value="medium"
               data-component="body">
    <br>
<p>Example: <code>medium</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>low</code></li> <li><code>medium</code></li> <li><code>high</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>order</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="order"                data-endpoint="POSTapi-tasks"
               value="4326.41688"
               data-component="body">
    <br>
<p>Example: <code>4326.41688</code></p>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-tasks--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-tasks--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/tasks/11" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"architecto\",
    \"description\": \"Eius et animi quos velit et.\",
    \"priority\": \"medium\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tasks/11"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "architecto",
    "description": "Eius et animi quos velit et.",
    "priority": "medium"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-tasks--id-">
</span>
<span id="execution-results-PUTapi-tasks--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-tasks--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-tasks--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-tasks--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-tasks--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-tasks--id-" data-method="PUT"
      data-path="api/tasks/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-tasks--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-tasks--id-"
                    onclick="tryItOut('PUTapi-tasks--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-tasks--id-"
                    onclick="cancelTryOut('PUTapi-tasks--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-tasks--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/tasks/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/tasks/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-tasks--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-tasks--id-"
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
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-tasks--id-"
               value="11"
               data-component="url">
    <br>
<p>The ID of the task. Example: <code>11</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-tasks--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-tasks--id-"
               value="Eius et animi quos velit et."
               data-component="body">
    <br>
<p>Example: <code>Eius et animi quos velit et.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>priority</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="priority"                data-endpoint="PUTapi-tasks--id-"
               value="medium"
               data-component="body">
    <br>
<p>Example: <code>medium</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>low</code></li> <li><code>medium</code></li> <li><code>high</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-tasks--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-tasks--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/tasks/11" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tasks/11"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-tasks--id-">
</span>
<span id="execution-results-DELETEapi-tasks--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-tasks--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-tasks--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-tasks--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-tasks--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-tasks--id-" data-method="DELETE"
      data-path="api/tasks/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-tasks--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-tasks--id-"
                    onclick="tryItOut('DELETEapi-tasks--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-tasks--id-"
                    onclick="cancelTryOut('DELETEapi-tasks--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-tasks--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/tasks/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-tasks--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-tasks--id-"
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
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-tasks--id-"
               value="11"
               data-component="url">
    <br>
<p>The ID of the task. Example: <code>11</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-tasks--task_id--reorder">POST api/tasks/{task_id}/reorder</h2>

<p>
</p>



<span id="example-requests-POSTapi-tasks--task_id--reorder">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/tasks/11/reorder" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"newStatus\": \"not started\",
    \"index\": 16
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/tasks/11/reorder"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "newStatus": "not started",
    "index": 16
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-tasks--task_id--reorder">
</span>
<span id="execution-results-POSTapi-tasks--task_id--reorder" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-tasks--task_id--reorder"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-tasks--task_id--reorder"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-tasks--task_id--reorder" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-tasks--task_id--reorder">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-tasks--task_id--reorder" data-method="POST"
      data-path="api/tasks/{task_id}/reorder"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-tasks--task_id--reorder', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-tasks--task_id--reorder"
                    onclick="tryItOut('POSTapi-tasks--task_id--reorder');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-tasks--task_id--reorder"
                    onclick="cancelTryOut('POSTapi-tasks--task_id--reorder');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-tasks--task_id--reorder"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/tasks/{task_id}/reorder</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-tasks--task_id--reorder"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-tasks--task_id--reorder"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>task_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="task_id"                data-endpoint="POSTapi-tasks--task_id--reorder"
               value="11"
               data-component="url">
    <br>
<p>The ID of the task. Example: <code>11</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>newStatus</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="newStatus"                data-endpoint="POSTapi-tasks--task_id--reorder"
               value="not started"
               data-component="body">
    <br>
<p>Example: <code>not started</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>not started</code></li> <li><code>in progress</code></li> <li><code>active</code></li> <li><code>archived</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>index</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="index"                data-endpoint="POSTapi-tasks--task_id--reorder"
               value="16"
               data-component="body">
    <br>
<p>Example: <code>16</code></p>
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
