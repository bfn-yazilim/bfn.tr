# bfn.tr

bfn.tr, alt alan adlarında çalışan projeleri tek bir sayfada listeleyen, hızlı ve statik bir dizin sitesidir.

## Ne İşe Yarar

- bfn.tr altındaki projeleri kategorilere göre listeler.
- Kullanıcıların proje bağlantılarını arama ve filtreleme ile hızlı bulmasını sağlar.
- Kurumsal ve yasal sayfaları tek bir yapıda sunar.

## Teknik Özet

- Mimari: Statik HTML + CSS + Vanilla JS
- Build adımı: Yok
- Yayın ortamı: Cloudflare Pages (no-build)
- Ana veri kaynağı: Ana sayfadaki `SITES` dizisi

## Proje Yapısı

- `index.html`: Ana dizin sayfası, arama/filtreleme ve proje kartları
- `assets/site.css`: Ortak tasarım sistemi
- `assets/img/links/`: Proje ekran görüntüleri (WebP)
- `hakkinda/`, `iletisim/`, `reklam/`: Kurumsal içerikler
- `gizlilik/`, `sartlar/`, `cerez/`, `yayin-ilkeleri/`, `yasal-uyari/`: Yasal ve politika sayfaları
- `robots.txt`, `sitemap.xml`, `ads.txt`: SEO ve reklam doğrulama dosyaları
- `.editorconfig`: Kodlama ve satır sonu standardı
- `AGENTS.md`: Ajan/otomasyon çalışma kuralları

## Yerel Çalıştırma

Bu proje statik olduğu için doğrudan açılabilir, ancak en sağlıklı yöntem bir yerel sunucu kullanmaktır.

Örnek:

```powershell
python -m http.server 5500
```

Ardından tarayıcıdan `http://localhost:5500` adresini açın.

## Cloudflare Pages Yayını

Bu repo no-build yaklaşımıyla Cloudflare Pages'e uygundur.

- Framework preset: None
- Build command: boş bırak
- Build output directory: `/` (repo kökü)

GitHub bağlantısı kurulduktan sonra `main` dalına gelen commitler otomatik yayınlanır.

## Yeni Proje Ekleme

1. `index.html` içindeki `SITES` dizisine yeni kayıt ekleyin.
2. Kategori değeri `labels` içinde yoksa ekleyin.
3. Ekran görüntüsünü `assets/img/links/` altına `.webp` olarak koyun.
4. Gerekliyse açıklama metnini ve durum bilgisini (`live` veya `planned`) güncelleyin.

## İçerik ve SEO Kontrolü

- Tüm sayfalarda anlamlı `title` ve `meta description` bulunduğunu kontrol edin.
- `sitemap.xml` içinde yeni sayfa URL'lerinin yer aldığını doğrulayın.
- `robots.txt` dosyasında sitemap adresinin güncel olduğundan emin olun.
- Footer bağlantılarının tüm sayfalarda tutarlı kaldığını kontrol edin.

## Kodlama Standardı

- Tüm metin dosyaları UTF-8 olmalıdır.
- Türkçe karakterler korunmalıdır.
- Kodlama/ajan kuralları için `AGENTS.md` dosyasını referans alın.