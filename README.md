# V1K Insurance CRM (Filament Edition) 🛡️

Este es un **MVP de CRM especializado para Productores y Compañías de Seguros**. El objetivo del proyecto es proporcionar una base sólida, escalable y segura para la gestión de carteras de clientes y sus respectivas pólizas.

## 🚀 Key Technical Highlights

- **Modern TALL Stack:** Construido con Laravel 11+, Filament V3, Alpine.js y Tailwind CSS.
- **Role-Based Access Control (RBAC):** Integración profunda con `spatie/laravel-permission` para una gestión granular de accesos (Admin, Operador, etc.).
- **Domain-Driven Entities:** Arquitectura centrada en el negocio, diferenciando claramente entre Entidades de Cliente (`InsuranceClient`) y Contratos de Póliza (`Policy`).
- **Rapid Admin Development:** Uso de Resources de Filament para una gestión de datos eficiente y una experiencia de usuario (UX) administrativa superior.

## 🛠️ Stack Tecnológico

- **Backend:** PHP 8.2+ / Laravel.
- **Admin UI:** Filament PHP v3 (TALL Stack).
- **Database:** PostgreSQL / MySQL (Compatible).
- **Auth:** Laravel Breeze + Spatie Permissions.

## 📁 Estructura del Core
- `app/Models/Policy.php`: Gestión de contratos, vigencias y coberturas.
- `app/Models/InsuranceClient.php`: Datos maestros de asegurados.
- `app/Filament/Resources/`: Implementación de la lógica de negocio en la interfaz administrativa.

---
Desarrollado con foco en la **estabilidad** y el **cumplimiento normativo** de la industria de seguros.
