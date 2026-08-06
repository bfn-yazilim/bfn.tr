export default {
  async fetch(request, env) {
    const response = await env.ASSETS.fetch(request);

    if (response.status !== 404) {
      return response;
    }

    const custom404Url = new URL(request.url);
    custom404Url.pathname = "/404.html";

    const custom404Response = await env.ASSETS.fetch(custom404Url.toString());
    if (!custom404Response.ok) {
      return response;
    }

    const body = await custom404Response.text();
    const headers = new Headers(custom404Response.headers);
    headers.set("content-type", "text/html; charset=utf-8");
    headers.set("cache-control", "no-store");
    headers.set("x-custom-404", "1");

    return new Response(body, {
      status: 404,
      headers,
    });
  },
};
