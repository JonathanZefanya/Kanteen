<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MenuTableSeeder::class);
        $this->call(MenuTemplateTableSeeder::class);
        $this->call(MenuSectionTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(CompanyTableSeeder::class);
        $this->call(SiteTableSeeder::class);
        $this->call(NotificationTableSeeder::class);
        $this->call(NotificationAlertTableSeeder::class);
        $this->call(PaymentGatewayTableSeederVersionOne::class);
        $this->call(PaymentGatewayTableSeederVersionTwo::class);
        $this->call(PaymentGatewayDataTableSeeder::class);
        $this->call(SmsGatewayTableSeederVersionOne::class);
        $this->call(LanguageTableSeeder::class);
        $this->call(CurrencyTableSeeder::class);
        $this->call(BranchTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(RolePermissionTableSeeder::class);
        $this->call(MailTableSeeder::class);
        $this->call(OrderSetupTableSeeder::class);
        $this->call(OtpTableSeeder::class);
        $this->call(ThemeTableSeeder::class);
        $this->call(LicenseTableSeeder::class);
        $this->call(SocialMediaTableSeeder::class);
        $this->call(TaxTableSeeder::class);
        $this->call(PageTableSeeder::class);
        $this->call(ItemCategoryTableSeeder::class);
        $this->call(ItemAttributeTableSeeder::class);
        $this->call(PaymentGatewayDataTableSeeder::class);
        $this->call(ItemTableSeeder::class);
        $this->call(ItemVariationTableSeeder::class);
        $this->call(ItemExtraTableSeeder::class);
        $this->call(ItemAddonTableSeeder::class);
        $this->call(OfferTableSeeder::class);
        $this->call(OfferItemTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(OrderItemTableSeeder::class);
        $this->call(DiningTableTableSeeder::class);
        $this->call(KdsOrderTableSeeder::class);
    }
}