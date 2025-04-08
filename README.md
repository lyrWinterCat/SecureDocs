# SecureDocs 🔐

**SecureDocs**는 Laravel 기반의 보안 데모 애플리케이션으로,  
기기 인증(NAC)과 문서 보호(EDP) 개념을 웹 애플리케이션에서 간단히 시뮬레이션합니다.

---

## ✅ 주요 기능

- ✅ 인증된 기기에서만 로그인 후 접근 허용 (NAC 시뮬레이션)
- ✅ 로그인된 사용자만 문서 목록 열람 가능
- ✅ PDF 문서 다운로드 시 사용자 정보 워터마크 삽입 (EDP 시뮬레이션)

---

## 🛠️ 기술 스택

- PHP 8.1+
- Laravel 11
- Laravel Breeze (Auth scaffolding)
- dompdf (PDF 생성)
- MySQL / SQLite

---

## 🚀 시작 방법

### 1. 프로젝트 클론 및 설치
```bash
git clone https://github.com/your-id/secure-docs.git
cd secure-docs
composer install
cp .env.example .env
php artisan key:generate
