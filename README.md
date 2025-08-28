# Ussd Simulator  

## About  

**Ussd Simulator** is a Laravel-based open-source application that allows developers to test USSD endpoints during development without needing to rely on live telecom integrations.  

It currently supports the following aggregators and can be easily extended to others:  

- Korba  
- Nsano  
- Nalo
- Arkesel

This tool contributes to the **Digital Public Goods Alliance (DPGA)** ecosystem by enabling inclusive, low-cost, and scalable development of services that reach underserved communities where **USSD remains the most widely accessible channel**.  

---

## Why It Matters  

- 🌍 **Inclusive Access**: USSD bridges the digital divide, especially in emerging markets where smartphones and data access remain limited.  
- 🛠 **Developer Empowerment**: Makes it easier for innovators to build, test, and deploy services in financial inclusion, health, agriculture, and education.  
- 🔓 **Open Source for Public Good**: Freely available to use, modify, and redistribute, ensuring global collaboration.  
- 🎯 **Aligned with the UN SDGs**: Supports goals such as **SDG 9 (Industry, Innovation, and Infrastructure)**, **SDG 10 (Reduced Inequalities)**, and **SDG 17 (Partnerships for the Goals)**.  

---

## Digital Public Goods Metadata  

This project aligns with the [DPG Standard](https://digitalpublicgoods.net/standard/) through the following:  

### 1. Relevance to Sustainable Development Goals (SDGs)  
- **SDG 9**: Fosters innovation by enabling rapid prototyping of USSD services.  
- **SDG 10**: Reduces inequalities by empowering access to digital services for populations without internet access.  
- **SDG 17**: Encourages open collaboration across governments, NGOs, and developers.  

### 2. Use of Open Standards, Open Data, Open AI Models, Open Content, and Open Source Software  
- Licensed under the [MIT License](https://opensource.org/licenses/MIT).  
- Built on **Laravel**, a widely adopted open-source PHP framework.  
- Interoperable with multiple USSD aggregators through configurable adapters.  

### 3. Do No Harm  
- **Privacy & Security**: The simulator does not store personally identifiable information (PII) from end-users, as it is only used for development/testing.  
- **Transparency**: All code is publicly available for audit and improvement.  
- **Localization**: Designed to be extended for different contexts without vendor lock-in.  

### 4. Interoperability  
- Supports integration with multiple aggregators and can be extended to others with minimal configuration.  
- Compatible with standard **USSD request/response formats (MTN, Vodafone, Airtel, etc.)**.  

### 5. Documentation  
- [Installation Guide](#getting-started-laravel--php)  
- [Usage Guide](#configuring-aggregators)  
- [Extending Aggregators](#typical-laravel-endpoints-examples)  

---

## Getting Started (Laravel + PHP)

### Prerequisites
- **PHP** 8.1+ (8.2/8.3 recommended) with extensions: `mbstring`, `openssl`, `pdo`, `ctype`, `json`, `tokenizer`, `xml`, `curl`
- **Composer** (latest)
- Optional (for local USSD callback testing): **ngrok** or **Cloudflared**

### Quick Start (6 commands)
```bash
git clone https://github.com/spesohq/simulator.git
cd simulator
cp .env.example .env
composer install
php artisan key:generate
php artisan serve
```

Open: `http://127.0.0.1:8000`

### Full Setup

1) **Install dependencies**
```bash
composer install
```

2) **Environment configuration**
```bash
cp .env.example .env
php artisan key:generate
```

3) **Run the app**
```bash
php artisan serve
# http://127.0.0.1:8000
```

---

## Local Webhook/Callback Testing (ngrok)

```bash
ngrok http http://127.0.0.1:8000
# Copy the https URL ngrok gives you
```

---

## Testing

```bash
php artisan test
./vendor/bin/phpunit
```

---

## Contributing  

We welcome contributions from developers, researchers, and organizations.  
- Add support for new aggregators.  
- Improve the UI.  
- Enhance reporting features.  

---

## License  

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).  
