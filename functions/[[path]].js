export async function onRequest(context) {
  const response = await context.next();

  // Keep normal responses untouched; only rewrite real 404 responses.
  if (response.status !== 404) {
    return response;
  }

  const custom404Url = new URL(context.request.url);
  custom404Url.pathname = "/404.html";

  const custom404Response = await context.env.ASSETS.fetch(
    new Request(custom404Url.toString(), context.request)
  );

  if (!custom404Response.ok) {
    return response;
  }

  const body = await custom404Response.text();
  const headers = new Headers(custom404Response.headers);
  headers.set("content-type", "text/html; charset=utf-8");
  headers.set("cache-control", "no-store");

  return new Response(body, {
    status: 404,
    headers,
  });
}
