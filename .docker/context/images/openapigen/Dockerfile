FROM openapitools/openapi-generator-cli:v4.2.3
VOLUME /local
WORKDIR /local

CMD ["generate", "-i", "public/swagger/app-openapi.yaml", "-g", "php", "-o", "external/openapigen/models", "-c", "public/swagger/openapiconfig.json"]
