# Ussd Simulator

**Ussd Simulator** is a Laravel-based open-source application that allows developers to test USSD endpoints during development without needing to rely on live telecom integrations.  

It currently supports the following aggregators and can be easily extended to others:  

- Korba  
- Nsano  
- Nalo
- Arkesel
- AfricasTalking

This tool contributes to the **Digital Public Goods Alliance (DPGA)** ecosystem by enabling inclusive, low-cost, and scalable development of services that reach underserved communities where **USSD remains the most widely accessible channel**.  



## Why It Matters  

- 🌍 **Inclusive Access**: USSD bridges the digital divide, especially in emerging markets where smartphones and data access remain limited.  
- 🛠 **Developer Empowerment**: Makes it easier for innovators to build, test, and deploy services in financial inclusion, health, agriculture, and education.  
- 🔓 **Open Source for Public Good**: Freely available to use, modify, and redistribute, ensuring global collaboration.  
- 🎯 **Aligned with the UN SDGs**: Supports goals such as **SDG 9 (Industry, Innovation, and Infrastructure)**, **SDG 10 (Reduced Inequalities)**, and **SDG 17 (Partnerships for the Goals)**.  



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


## Getting Started (Laravel + PHP)

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites
- **PHP** 8.1+ (8.2/8.3 recommended) with extensions: `mbstring`, `openssl`, `pdo`, `ctype`, `json`, `tokenizer`, `xml`, `curl`
- [Composer](https://getcomposer.org/doc/00-intro.md)
- Optional (for local USSD callback testing): **ngrok** or **Cloudflared**

### Installing

Please run the following commands to setup your development env up.

```bash
# clone this repository
git clone https://github.com/spesohq/simulator.git

# change directory
cd simulator/

# install the project's dependencies using Composer
composer install

# make a copy of the .env.example to configure the application for your local environment
# linux/unix
cp .env.example .env

# windows
copy .env.example .env

# generate your application encryption key using 
php artisan key:generate
```

### Running the application

You can use the development server the ships with Laravel by running, from the project root:

```bash
php artisan serve
```
You can visit [http://localhost:8000](http://localhost:8000) to see the application in action.


## Contributing  

We welcome contributions from developers, researchers, and organizations.  
- Add support for new aggregators.  
- Improve the UI.  
- Enhance reporting features.  


## License  

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).  
