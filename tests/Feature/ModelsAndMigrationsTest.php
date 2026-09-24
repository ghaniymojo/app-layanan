<?php

namespace Tests\Feature;

use App\Models\Approval;
use App\Models\Assessment;
use App\Models\Client;
use App\Models\ClientCategory;
use App\Models\Complaint;
use App\Models\ComplaintAttachment;
use App\Models\ComplaintCategory;
use App\Models\Disposition;
use App\Models\District;
use App\Models\DownloadableForm;
use App\Models\DtsenCertificate;
use App\Models\DtsenPurpose;
use App\Models\Faq;
use App\Models\InformationPage;
use App\Models\MonitoringRecord;
use App\Models\NumberSequence;
use App\Models\PageVisit;
use App\Models\PbiReactivation;
use App\Models\Referral;
use App\Models\ReferralInstitution;
use App\Models\RehabilitationCase;
use App\Models\SearchLog;
use App\Models\ServiceRequest;
use App\Models\ServiceRequestDocument;
use App\Models\ServiceRequirement;
use App\Models\ServiceType;
use App\Models\StatusHistory;
use App\Models\User;
use App\Models\Village;
use App\Models\WorkUnit;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class ModelsAndMigrationsTest extends TestCase
{
    use RefreshDatabase;

    public function test_all_prd_tables_exist(): void
    {
        $tables = [
            'work_units',
            'districts',
            'villages',
            'users',
            'service_types',
            'service_requirements',
            'service_requests',
            'service_request_documents',
            'dtsen_purposes',
            'dtsen_certificates',
            'pbi_reactivations',
            'approvals',
            'client_categories',
            'clients',
            'complaint_categories',
            'complaints',
            'complaint_attachments',
            'rehabilitation_cases',
            'assessments',
            'referral_institutions',
            'referrals',
            'monitoring_records',
            'information_pages',
            'downloadable_forms',
            'faqs',
            'page_visits',
            'search_logs',
            'status_histories',
            'dispositions',
            'number_sequences',
        ];

        foreach ($tables as $table) {
            $this->assertTrue(Schema::hasTable($table), "Table {$table} does not exist.");
        }
    }

    public function test_all_models_can_query_tables(): void
    {
        $models = [
            WorkUnit::class,
            District::class,
            Village::class,
            User::class,
            ServiceType::class,
            ServiceRequirement::class,
            ServiceRequest::class,
            ServiceRequestDocument::class,
            DtsenPurpose::class,
            DtsenCertificate::class,
            PbiReactivation::class,
            Approval::class,
            ClientCategory::class,
            Client::class,
            ComplaintCategory::class,
            Complaint::class,
            ComplaintAttachment::class,
            RehabilitationCase::class,
            Assessment::class,
            ReferralInstitution::class,
            Referral::class,
            MonitoringRecord::class,
            InformationPage::class,
            DownloadableForm::class,
            Faq::class,
            PageVisit::class,
            SearchLog::class,
            StatusHistory::class,
            Disposition::class,
            NumberSequence::class,
        ];

        foreach ($models as $modelClass) {
            $this->assertIsInt($modelClass::count());
        }
    }
}
