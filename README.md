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
```

### 2. SQLite 데이터베이스 설정

type nul > database\database.sqlite

.env 파일 설정:
#### dotenv
DB_CONNECTION=sqlite
DB_DATABASE=./database/database.sqlite

php artisan migrate

### 3. 프론트엔드 빌드 및 인증 UI 설치
bash
composer require laravel/breeze --dev
php artisan breeze:install
npm install && npm run dev

## 🚀 실행
bash
php artisan serve
→ http://localhost:8000

## 🧪 테스트 시나리오
1. 회원가입 및 로그인
2. /register-device로 이동해 디바이스 ID 등록 (my-laptop 등)
3. Postman에서 X-DEVICE-ID 헤더를 포함한 요청으로 /documents 접근
4. PDF 다운로드 시, 사용자 이메일과 타임스탬프가 포함된 워터마크 확인

## 💡 개발 중 학습 포인트
- Laravel에서 커스텀 미들웨어(CheckDeviceId) 작성 및 등록 방법
- Breeze 기반 인증 UI 구성
- 사용자 기반 동적 PDF 생성(dompdf 사용)
- Postman을 활용한 Header 기반 테스트
- 웹 요청과 API 요청의 차이 및 디버깅
