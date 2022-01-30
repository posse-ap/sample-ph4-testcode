<?php

namespace Tests\Unit\Repositories;

use App\Models\QiitaArticle;
use Tests\TestCase;
use App\Repositories\CreateQiitaArticles;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateQiitaArticlesTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
    }

    # TODO 問6
    # $articles_dataが空のCollectionの時、1件も登録されていないことをUnitテストで担保してください
    public function test_empty_collection_given()
    {
        # ここを実装してください
    }

    # TODO 問6
    # upsertした結果、3件だけDBに登録されていることをUnitテストで担保してください
    public function test_not_empty_collection_given()
    {
        # ここを実装してください
    }
}
