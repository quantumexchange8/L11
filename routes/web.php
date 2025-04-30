<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/index', function () {
//     return view('index');
// });

Route::get('/home', function () {
    return view('home');
});

Route::get('/', function () {
    return view('index-2');
});

// Route::get('/index-3', function () {
//     return view('index-3');
// });

Route::get('lang/{locale}', [\App\Http\Controllers\LocalizationController::class, 'setLang'])->name('setLang');


Route::get('/our-firm', function () {
    return view('our-firm');
});

Route::get('/contact-us', function () {
    return view('web.contact-us.index');
});

// Private Banking
Route::prefix('private-banking')->as('web.private-banking.')->group(function () {
    Route::get('', function() { return view('web.private-banking.index'); })->name('index');
    Route::get('/private-equity', function() { return view('web.private-banking.private_equity'); })->name('private_equity');
    Route::get('/private-wealth-management', function() { return view('web.private-banking.private_wealth_management'); })->name('private_wealth_management');
    Route::get('/corporate-advisory-and-banking', function() { return view('web.private-banking.corporate_advisory_and_banking'); })->name('corporate_advisory_and_banking');
});
// Private Banking > Corporate Advisory and Banking
Route::controller(PageController::class)->prefix('private-banking/corporate-advisory-and-banking')->as('web.private-banking.corporate-advisory-and-banking.')->group(function () {
    Route::get('/center-for-family-business', 'centerForFamilyBusiness')->name('center_for_family_business');
    Route::get('/corporate-advisory', 'corporateAdvisory')->name('corporate_advisory');
    Route::get('/corporate-banking', 'corporateBanking')->name('corporate_banking');
});
    // Private Banking > Private Equity
Route::controller(PageController::class)->prefix('private-banking/private-equity')->as('web.private-banking.private-equity.')->group(function () {
    Route::get('/about-vanward', 'aboutVanward')->name('about_vanward');
    Route::get('/investment-profile', 'investmentProfile')->name('investment_profile');
    Route::get('/investment-strategy-and-transaction-types', 'investmentStrategyAndTransactionTypes')->name('investment_strategy_and_transaction_types');
    Route::get('/select-portfolio-companies', 'selectPortfolioCompanies')->name('select_portfolio_companies');
});
    // Private Banking > Private Wealth Management
Route::controller(PageController::class)->prefix('private-banking/private-wealth-management')->as('web.private-banking.private-wealth-management.')->group(function () {
    Route::get('/center-for-women-and-wealth', 'centerForWomenAndWealth')->name('center_for_women_and_wealth');
    Route::get('/investment-advisory', 'investmentAdvisory')->name('investment_advisory');
    Route::get('/philanthropic-advisory', 'philanthropicAdvisory')->name('philanthropic_advisory');
    Route::get('/private-client-lending', 'privateClientLanding')->name('private_client_landing');
    Route::get('/trust-services', 'trustServices')->name('trust_services');
    Route::get('/wealth-planning', 'wealthPlanning')->name('wealth_planning');
});



// Investment Management
Route::prefix('investment-management')->as('web.investment-management.')->group(function () {
    Route::get('', function() { return view('web.investment-management.index'); })->name('index');
    Route::get('/public-equity', function() { return view('web.investment-management.public_equity'); })->name('public_equity');
    Route::get('/fixed-income', function() { return view('web.investment-management.fixed_income'); })->name('fixed_income');
    Route::get('/open-account', function() { return view('web.investment-management.open_account'); })->name('open_account');
    Route::get('/est-approach', function() { return view('web.investment-management.est_approach'); })->name('esg_approach');
});
// Investment Management > Fixed Income
Route::controller(PageController::class)->prefix('investment-management/fixed-income')->as('web.investment-management.fixed-income.')->group(function () {
    // Route::get('', 'listingFixedIncome')->name('listing');
    Route::get('/tax-exempt-fixed-income-strategy', 'taxExemptFixedIncomeStrategy')->name('tax_exempt_fixed_income_strategy');
    Route::get('/taxable-fixed-income-strategies', 'taxableFixedIncomeStrategies')->name('taxable_fixed_income_strategies');
    Route::get('/us-tips-strategy', 'usTipsStrategy')->name('us_tips_strategy');
});
    // Investment Management > Open Account
Route::controller(PageController::class)->prefix('investment-management/open-account')->as('web.investment-management.')->group(function () {
    // Route::get('', 'openAccount')->name('open_account');
});
    // Investment Management > Public Equity
Route::controller(PageController::class)->prefix('investment-management/public-equity')->as('web.investment-management.public-equity.')->group(function () {
    // Route::get('', 'listingPublicEquity')->name('listing');
    Route::get('/global-equity', 'globalEquity')->name('global_equity');
    Route::get('/us-large-cap-equity', 'usLargeCapEquity')->name('us_large_cap_equity');
    Route::get('/us-small-and-mid-cap-equity', 'usSmallAndMidCapEquity')->name('us_small_and_mid_cap_equity');
});



// Investor Services
Route::prefix('investor-services')->as('web.investor-services.')->group(function () {
    Route::get('', function() { return view('web.investor-services.index'); })->name('index');
    Route::get('/custody-and-fund-services', function() { return view('web.investor-services.custody_and_fund_services'); })->name('custody_and_fund_services');
    Route::get('/specialist-expertise', function() { return view('web.investor-services.specialist_expertise'); })->name('specialist_expertise');
    Route::get('/markets', function() { return view('web.investor-services.markets'); })->name('markets');
    Route::get('/investment-operations-and-technology-solutions', function() { return view('web.investor-services.investment_operations_and_technology_solutions'); })->name('investment_operations_and_technology_solutions');
});
// Investor Services > Custody and Fund Services
Route::controller(PageController::class)->prefix('investor-services/custody-and-fund-services')->as('web.investor-services.custody-and-fund-services.')->group(function () {
    // Route::get('', 'listingCustodyAndFundServices')->name('listing');
    Route::get('/collateral-management', 'collateralManagementCustody')->name('collateral_management');
    Route::get('/custody', 'custody')->name('custody');
    Route::get('/depositary-and-trustee', 'depositaryAndTrustee')->name('depositary_and_trustee');
    Route::get('/fund-accounting', 'fundAccounting')->name('fund_accounting');
    Route::get('/fund-administration', 'fundAdministration')->name('fund_administration');
    Route::get('/fund-order-and-custody', 'fundOrderAndCustody')->name('fund_order_and_custody');
    Route::get('/global-tax', 'globalTax')->name('global_tax');
    Route::get('/transfer-agency', 'transferAgency')->name('transfer_agency');
});
    // Investor Services > Investment Operations and Technology Solutions
Route::controller(PageController::class)->prefix('investor-services/investment-operations-and-technology-solutions')->as('web.investor-services.investment-operations-and-technology-solutions.')->group(function () {
    // Route::get('', 'listingInvestmentOperationsAndTechnologySolutions')->name('listing');
    Route::get('/middle-office-outsourcing', 'middleOfficeOutsourcing')->name('middle_office_outsourcing');
    Route::get('/technology-services', 'technologyServices')->name('technology_services');
});
    // Investor Services > Investment Operations and Technology Solutions > Middle Office Outsourcing
Route::controller(PageController::class)->prefix('investor-services/investment-operations-and-technology-solutions/middle-office-outsourcing')->as('web.investor-services.')->group(function () {
    Route::get('/collateral-management', 'collateralManagementInvestment')->name('collateral_management');
    Route::get('/hosted-operations-and-reporting', 'hostedOperationsAndReporting')->name('hosted_operations_and_reporting');
    Route::get('/investment-accounting-and-enterprise-data-support', 'investmentAccountingAndEnterpriseDataSupport')->name('investment_accounting_and_enterprise_data_support');
    Route::get('/targeted-technology-solutions-via-infomediary', 'targetedTechnologySolutionsViaInfomediary')->name('targeted_technology_solutions_via_infomediary');
});
    // Investor Services > Investment Operations and Technology Solutions > Middle Office Outsourcing > Targeted Technology Solutions
Route::controller(PageController::class)->prefix('investor-services/investment-operations-and-technology-solutions/middle-office-outsourcing/targeted-technology-solutions-via-infomediary')->as('web.investor-services.')->group(function () {
    Route::get('/infonav', 'infoNav')->name('infoNav');
    Route::get('/inforecon', 'infoRecon')->name('infoRecon');
    Route::get('/infoaction', 'infoAction')->name('infoAction');
});
    // Investor Services > Investment Operations and Technology Solutions > Technology Services
Route::controller(PageController::class)->prefix('investor-services/investment-operations-and-technology-solutions/technology-services')->as('web.investor-services.')->group(function () {
    Route::get('/account-operator-direct-for-us-depositories', 'accountOperatorDirectForUsDepositories')->name('account_operator_direct_for_us_depositories');
    Route::get('/data-connectivity-and-applications-via-infomediary', 'dataConnectivityAndApplicationsViaInfomediary')->name('data_connectivity_and_applications_via_infomediary');
    Route::get('/global-custody-direct', 'globalCustodyDirect')->name('global_custody_direct');
});
    // Investor Services > Markets
Route::controller(PageController::class)->prefix('investor-services/markets')->as('web.investor-services.markets.')->group(function () {
    // Route::get('', 'listingMarkets')->name('listing');
    Route::get('/active-fx-execution', 'activeFxExecution')->name('active_fx_execution');
    Route::get('/currency-hedging', 'currencyHedging')->name('currency_hedging');
    Route::get('/foreign-exchange', 'foreignExchange')->name('foreign_exchange');
    Route::get('/infofx', 'infoFx')->name('infofx');
    Route::get('/securities-lending', 'securitiesLending')->name('securities_lending');
    Route::get('/market-intelligence', 'marketIntelligence')->name('market_intelligence');
});
    // Investor Services > Markets > Foreign Exchange
Route::controller(PageController::class)->prefix('investor-services/markets/foreign-exchange')->as('web.investor-services.markets.foreign-exchange.')->group(function () {
    Route::get('/fx-disclosure-statement', 'fxDisclosureStatement')->name('fx_disclosure_statement');
    Route::get('/regulatory-reporting-requirements', 'regulatoryReportingRequirements')->name('regulatory_reporting_requirements');
    Route::get('/terms-and-conditions', 'termsAndConditions')->name('terms_and_conditions');
    Route::get('/tokyo-fixing-rates', 'tokyoFixingRates')->name('tokyo_fixing_rates');
});
    // Investor Services > Markets > Securities Lending
Route::controller(PageController::class)->prefix('investor-services/markets/securities-lending')->as('web.investor-services.markets.securities-lending.')->group(function () {
    Route::get('/waml-securities-lending-execution-policy', 'wamlSecuritiesLendingExecutionPolicy')->name('waml_securities_lending_execution_policy');
});
    // Investor Services > Specialist Expertise
Route::controller(PageController::class)->prefix('investor-services/specialist-expertise')->as('web.investor-services.specialist-expertise.')->group(function () {
    // Route::get('', 'listingSpecialistExpertise')->name('listing');
    Route::get('/alternative-funds', 'alternativeFunds')->name('alternative_funds');
    Route::get('/consultants-and-advisors', 'consultantsAndAdvisors')->name('consultants_and_advisors');
    Route::get('/cross-border-funds', 'crossBorderFunds')->name('cross_border_funds');
    Route::get('/distribution-intelligence', 'distributionIntelligence')->name('distribution_intelligence');
    Route::get('/exchange-traded-funds', 'exchangeTradedFunds')->name('exchange_traded_funds');
    Route::get('/insurance', 'insurance')->name('insurance');
    Route::get('/regulatory-intelligence', 'regulatoryIntelligence')->name('regulatory_intelligence');
    Route::get('/us-funds', 'usFunds')->name('us_funds');
});
    // Investor Services > Specialist Expertise > Alternative Funds
Route::controller(PageController::class)->prefix('investor-services/specialist-expertise/alternative-funds')->as('web.investor-services.specialist-expertise.alternative-funds.')->group(function () {
    Route::get('/hedge-funds', 'hedgeFunds')->name('hedge_funds');
    Route::get('/private-equity', 'privateEquityAlternativeFunds')->name('private_equity');
    Route::get('/real-assets-and-infrastructure', 'realAssetsAndInfrastructure')->name('real_assets_and_infrastructure');
    Route::get('/syndicated-and-originated-debt', 'syndicatedAndOriginatedDebt')->name('syndicated_and_originated_debt');
});
    // Investor Services > Specialist Expertise > Cross-border Funds
Route::controller(PageController::class)->prefix('investor-services/specialist-expertise/cross-border-funds')->as('web.investor-services.specialist-expertise.cross-border-funds.')->group(function () {
    Route::get('/dublin', 'dublin')->name('dublin');
    Route::get('/global-service-model', 'globalServiceModel')->name('global_service_model');
    Route::get('/greater-china', 'greaterChina')->name('greater_china');
    Route::get('/japan', 'japan')->name('japan');
    Route::get('/latin-america', 'latinAmerica')->name('latin_america');
    Route::get('/luxembourg', 'luxembourg')->name('luxembourg');
});


// Careers
Route::prefix('careers')->as('web.careers.')->group(function () {
    Route::get('', function() { return view('web.careers.index'); })->name('index');
    Route::get('/what-we-look-for', function() { return view('web.careers.what_we_look_for'); })->name('what_we_look_for');
    Route::get('/total-rewards', function() { return view('web.careers.total_rewards'); })->name('total_rewards');
    Route::get('/life-here', function() { return view('web.careers.life_here'); })->name('life_here');
});

// Careers > Life Here
Route::controller(PageController::class)->prefix('careers/life-here')->as('web.careers.')->group(function () {
    Route::get('/cares', 'cares')->name('cares');
    Route::get('/core-values', 'coreValues')->name('core_values');
    Route::get('/our-culture', 'ourCulture')->name('our_culture');
    Route::get('/affinity-network-community', 'affinityNetworkCommunity')->name('affinity_network_community');
});
    // Careers > Life Here > Affinity Network Community
Route::controller(PageController::class)->prefix('careers/life-here/affinity-network-community')->as('web.careers.')->group(function () {
    Route::get('/asia-link-network', 'asiaLinkNetwork')->name('asia_link_network');
    Route::get('/black-affinity-network', 'blackAffinityNetwork')->name('black_affinity_network');
    Route::get('/diverse-ability-allies-network', 'diverseAbilityAlliesNetwork')->name('diverse_ability_allies_network');
    Route::get('/global-employee-network', 'globalEmployeeNetwork')->name('global_employee_network');
    Route::get('/latino-cultural-network', 'latinoCulturalNetwork')->name('latino_cultural_network');
    Route::get('/military-veterans-network', 'militaryVeteransNetwork')->name('military_veterans_network');
    Route::get('/parenting-network', 'parentingNetwork')->name('parenting_network');
    Route::get('/pride-network', 'prideNetwork')->name('pride_network');
    Route::get('/womens-network', 'womensNetwork')->name('womens_network');
    Route::get('/young-professionals-network', 'youngProfessionalsNetwork')->name('young_professionals_network');
});
    // Careers > Total Rewards
Route::controller(PageController::class)->prefix('careers/total-rewards')->as('web.careers.')->group(function () {
    Route::get('/benefits-wellness-and-compensation', 'benefitsWellnessAndCompensation')->name('benefits_wellness_and_compensation');
    Route::get('/career-management', 'careerManagement')->name('career_management');
    Route::get('/mobility', 'mobility')->name('mobility');
    Route::get('/ongoing-learning', 'ongoingLearning')->name('ongoing_learning');
});
    // Careers > Total Rewards > benefits
Route::controller(PageController::class)->prefix('careers/total-rewards/benefits-wellness-and-compensation')->as('web.careers.')->group(function () {
    Route::get('/thrive-financially', 'thriveFinancially')->name('thrive_financially');
    Route::get('/thrive-personally', 'thrivePersonally')->name('thrive_personally');
    Route::get('/thrive-physically', 'thrivePhysically')->name('thrive_physically');
});
    // Careers > Total Rewards > Ongoing Learning
Route::controller(PageController::class)->prefix('careers/total-rewards/ongoing-learning')->as('web.careers.')->group(function () {
    Route::get('/signature-programs', 'signaturePrograms')->name('signature_programs');
});
    // Careers > What We Look For
Route::controller(PageController::class)->prefix('careers/what-we-look-for')->as('web.careers.')->group(function () {
    Route::get('/entry-level-professionals', 'entryLevelProfessionals')->name('entry_level_professionals');
    Route::get('/experienced-professionals', 'experiencedProfessionals')->name('experienced_professionals');
    Route::get('/restart', 'restart')->name('restart');
    Route::get('/undergraduate-internships', 'undergraduateInternships')->name('undergraduate_internships');
});

// Our Firm
Route::prefix('our-firm')->as('web.our-firm.')->group(function () {
    Route::get('', function() { return view('web.our-firm.index'); })->name('index');
    Route::get('/the-partnership', function() { return view('web.our-firm.the_partnership'); })->name('the_partnership');
    Route::get('/our-mission-and-profile', function() { return view('web.our-firm.our_mission_and_profile'); })->name('our_mission_and_profile');
    Route::get('/sustainability', function() { return view('web.our-firm.sustainability'); })->name('sustainability');
    Route::get('/philanthropy', function() { return view('web.our-firm.philanthropy'); })->name('philanthropy');
    Route::get('/policies-and-disclosures', function() { return view('web.our-firm.policies_and_disclosures'); })->name('policies_and_disclosures');
});

// Our Firm > Policies and Disclosures
Route::controller(PageController::class)->prefix('our-firm/policies-and-disclosures')->as('web.our-firm.')->group(function () {
    Route::get('/important-statements-and-disclosures', 'importantStatementsAndDisclosures')->name('important-statements-and-disclosures');
    Route::get('/legal', 'legal')->name('legal');
    Route::get('/privacy-policy', 'privacyPolicy')->name('privacy_policy');
    Route::get('/new-account-policy', 'newAccountPolicy')->name('new_account_policy');
    Route::get('/usa-patriot-act', 'usaPatriotAct')->name('usa_patriot_act');
});
// Our Firm > Policies and Disclosures / Important Statements and Disclosures
Route::controller(PageController::class)->prefix('our-firm/policies-and-disclosures/important-statements-and-disclosures')->as('web.our-firm.')->group(function () {
    Route::get('/additional-disclosures', 'additionalDisclosures')->name('additional_disclosures');
    Route::get('/bcp-statement', 'bcpStatement')->name('bcp_statement');
    Route::get('/confidential-ethics-reporting', 'confidentialEthicsReporting')->name('confidential_ethics_reporting');
    Route::get('/data-protection-notice', 'dataProtectionNotice')->name('data_protection_notice');
    Route::get('/online-security', 'onlineSecurity')->name('online_security');
    Route::get('/regulation-e', 'regulationE')->name('regulation_e');
});
// Our Firm > Policies and Disclosures / Privacy Policy
Route::controller(PageController::class)->prefix('our-firm/policies-and-disclosures/privacy-policy')->as('web.our-firm.')->group(function () {
    Route::get('/cookie-policy', 'cookiePolicy')->name('cookie_policy');
    Route::get('/manage-cookies', 'manageCookies')->name('manage_cookies');
    Route::get('/personal-information-request', 'personalInformationRequest')->name('personal_information_request');
});