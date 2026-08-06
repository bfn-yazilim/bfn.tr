export default {
  async fetch(request, env) {
    try {
      if (!env || !env.ASSETS || typeof env.ASSETS.fetch !== "function") {
        return new Response("ASSETS binding is missing.", { status: 500 });
      }

      const response = await env.ASSETS.fetch(request);
      if (response.status !== 404) {
        return response;
      }

      // Custom 404 rendering is only meaningful for browser navigation requests.
      if (request.method !== "GET" && request.method !== "HEAD") {
        return response;
      }

      const url = new URL(request.url);
      if (url.pathname === "/404" || url.pathname === "/404.html") {
        return response;
      }

      const custom404Url = new URL(request.url);
      custom404Url.pathname = "/404.html";

      const custom404Request = new Request(custom404Url.toString(), {
        method: request.method,
        headers: request.headers,
      });
      const custom404Response = await env.ASSETS.fetch(custom404Request);
      if (!custom404Response.ok) {
        return response;
      }

      const headers = new Headers(custom404Response.headers);
      headers.set("content-type", "text/html; charset=utf-8");
      headers.set("cache-control", "no-store");
      headers.set("x-custom-404", "1");

      return new Response(custom404Response.body, {
        status: 404,
        headers,
      });
    } catch (_err) {
      return new Response("Not Found", { status: 404 });
    }
  },
};
