<?php
/**
 * @OA\Schema(
 *   schema="Company",
 *   type="object",
 *       @OA\Property(property="id", type="string", example="WJxbojagwO", description="The company hash id"),
 *       @OA\Property(property="size_id", type="string", example="1", description="The company size ID"),
 *       @OA\Property(property="industry_id", type="string", example="1", description="The company industry ID"),
 *       @OA\Property(property="portal_mode", type="string", example="subdomain", description="Determines the client facing urls ie: subdomain,domain,iframe"),
 *       @OA\Property(property="domain", type="string", example="http://acmeco.invoicing.co", description="Determines the client facing url "),
 *       @OA\Property(property="portal_domain", type="string", example="https://subdomain.invoicing.co", description="The fully qualified domain for client facing URLS"),
 *       @OA\Property(property="enabled_tax_rates", type="integer", example="1", description="Number of taxes rates used per entity"),
 *       @OA\Property(property="fill_products", type="boolean", example=true, description="Toggles filling a product description based on product key"),
 *       @OA\Property(property="enable_invoice_quantity", type="boolean", example=true, description="Toggles filling a product description based on product key"),
 *       @OA\Property(property="convert_products", type="boolean", example=true, description="___________"),
 *       @OA\Property(property="update_products", type="boolean", example=true, description="Toggles updating a product description which description changes"),
 *       @OA\Property(property="custom_fields", type="object", description="Custom fields map"),
 *       @OA\Property(property="enable_product_cost", type="boolean", example=true, description="______________"),
 *       @OA\Property(property="enable_product_quantity", type="boolean", example=true, description="______________"),
 *       @OA\Property(property="default_quantity", type="boolean", example=true, description="______________"),
 *       @OA\Property(property="custom_surcharge_taxes1", type="boolean", example=true, description="Toggles charging taxes on custom surcharge amounts"),
 *       @OA\Property(property="custom_surcharge_taxes2", type="boolean", example=true, description="Toggles charging taxes on custom surcharge amounts"),
 *       @OA\Property(property="custom_surcharge_taxes3", type="boolean", example=true, description="Toggles charging taxes on custom surcharge amounts"),
 *       @OA\Property(property="custom_surcharge_taxes4", type="boolean", example=true, description="Toggles charging taxes on custom surcharge amounts"),
 *       @OA\Property(property="logo", type="object", example="logo.png", description="The company logo - binary"),
 *       @OA\Property(property="settings",ref="#/components/schemas/CompanySettings"),
 * )
 */

