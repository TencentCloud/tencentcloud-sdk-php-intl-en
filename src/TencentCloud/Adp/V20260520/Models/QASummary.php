<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QA digest information
 *
 * @method CategoryPath getCategoryPath() Obtain <p>Category path (including category ID, category ID path from the root node, and category name path)</p>
 * @method void setCategoryPath(CategoryPath $CategoryPath) Set <p>Category path (including category ID, category ID path from the root node, and category name path)</p>
 * @method KnowledgeScope getKnowledgeScope() Obtain <p>Knowledge effective scope</p>
 * @method void setKnowledgeScope(KnowledgeScope $KnowledgeScope) Set <p>Knowledge effective scope</p>
 * @method QALifecycle getLifecycle() Obtain <p>Lifecycle information.</p>
 * @method void setLifecycle(QALifecycle $Lifecycle) Set <p>Lifecycle information.</p>
 * @method QAMetadata getMetadata() Obtain <p>Meta information (question/answer/size statistics)</p>
 * @method void setMetadata(QAMetadata $Metadata) Set <p>Meta information (question/answer/size statistics)</p>
 * @method QAOperator getOperatorInfo() Obtain <p>Operator information.</p>
 * @method void setOperatorInfo(QAOperator $OperatorInfo) Set <p>Operator information.</p>
 * @method string getQaId() Obtain <p>QA ID</p>
 * @method void setQaId(string $QaId) Set <p>QA ID</p>
 * @method SimilarQuestionStat getSimilarQuestion() Obtain <p>Similar question statistics</p>
 * @method void setSimilarQuestion(SimilarQuestionStat $SimilarQuestion) Set <p>Similar question statistics</p>
 * @method QASourceInfo getSourceInfo() Obtain <p>Source information.</p>
 * @method void setSourceInfo(QASourceInfo $SourceInfo) Set <p>Source information.</p>
 */
class QASummary extends AbstractModel
{
    /**
     * @var CategoryPath <p>Category path (including category ID, category ID path from the root node, and category name path)</p>
     */
    public $CategoryPath;

    /**
     * @var KnowledgeScope <p>Knowledge effective scope</p>
     */
    public $KnowledgeScope;

    /**
     * @var QALifecycle <p>Lifecycle information.</p>
     */
    public $Lifecycle;

    /**
     * @var QAMetadata <p>Meta information (question/answer/size statistics)</p>
     */
    public $Metadata;

    /**
     * @var QAOperator <p>Operator information.</p>
     */
    public $OperatorInfo;

    /**
     * @var string <p>QA ID</p>
     */
    public $QaId;

    /**
     * @var SimilarQuestionStat <p>Similar question statistics</p>
     */
    public $SimilarQuestion;

    /**
     * @var QASourceInfo <p>Source information.</p>
     */
    public $SourceInfo;

    /**
     * @param CategoryPath $CategoryPath <p>Category path (including category ID, category ID path from the root node, and category name path)</p>
     * @param KnowledgeScope $KnowledgeScope <p>Knowledge effective scope</p>
     * @param QALifecycle $Lifecycle <p>Lifecycle information.</p>
     * @param QAMetadata $Metadata <p>Meta information (question/answer/size statistics)</p>
     * @param QAOperator $OperatorInfo <p>Operator information.</p>
     * @param string $QaId <p>QA ID</p>
     * @param SimilarQuestionStat $SimilarQuestion <p>Similar question statistics</p>
     * @param QASourceInfo $SourceInfo <p>Source information.</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("CategoryPath",$param) and $param["CategoryPath"] !== null) {
            $this->CategoryPath = new CategoryPath();
            $this->CategoryPath->deserialize($param["CategoryPath"]);
        }

        if (array_key_exists("KnowledgeScope",$param) and $param["KnowledgeScope"] !== null) {
            $this->KnowledgeScope = new KnowledgeScope();
            $this->KnowledgeScope->deserialize($param["KnowledgeScope"]);
        }

        if (array_key_exists("Lifecycle",$param) and $param["Lifecycle"] !== null) {
            $this->Lifecycle = new QALifecycle();
            $this->Lifecycle->deserialize($param["Lifecycle"]);
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = new QAMetadata();
            $this->Metadata->deserialize($param["Metadata"]);
        }

        if (array_key_exists("OperatorInfo",$param) and $param["OperatorInfo"] !== null) {
            $this->OperatorInfo = new QAOperator();
            $this->OperatorInfo->deserialize($param["OperatorInfo"]);
        }

        if (array_key_exists("QaId",$param) and $param["QaId"] !== null) {
            $this->QaId = $param["QaId"];
        }

        if (array_key_exists("SimilarQuestion",$param) and $param["SimilarQuestion"] !== null) {
            $this->SimilarQuestion = new SimilarQuestionStat();
            $this->SimilarQuestion->deserialize($param["SimilarQuestion"]);
        }

        if (array_key_exists("SourceInfo",$param) and $param["SourceInfo"] !== null) {
            $this->SourceInfo = new QASourceInfo();
            $this->SourceInfo->deserialize($param["SourceInfo"]);
        }
    }
}
