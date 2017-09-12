Symfony Standard Edition
========================

Welcome to Symfony standard edition 2.8.*.

This repository has been create by APX Development Limited, you can use it change it or do whatever you want with it.

Bundle included 
========================
FOSJsRoutingBundle()
NelmioApiDocBundle()
LexikJWTAuthenticationBundle()
NelmioCorsBundle()
KnpPaginatorBundle()
FOSRestBundle()
JMSSerializerBundle()
IvoryCKEditorBundle()

JWT - Must create public/private key
========================
openssl genrsa -out var/jwt/private.pem -aes256 4096
openssl rsa -pubout -in var/jwt/private.pem -out var/jwt/public.pem


Css Framework
========================
Uikit 3.0

Virtual machine
========================
This bundle include Vagrantfile with debian 8