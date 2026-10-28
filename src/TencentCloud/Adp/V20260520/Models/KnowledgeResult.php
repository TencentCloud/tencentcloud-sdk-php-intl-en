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
 * A single retrieval result
 *
 * @method float getConfidence() Obtain <p>Confidence degree</p>
 * @method void setConfidence(float $Confidence) Set <p>Confidence degree</p>
 * @method integer getKnowledgeType() Obtain <p>Hit knowledge type: 1=QA, 2=document fragment, 3=database, 4=map<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_QA</td><td>1</td><td>QA</td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_DOC</td><td>2</td><td>Document fragment</td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_DB</td><td>3</td><td>Database</td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_GRAPH</td><td>4</td><td>Map</td></tr></tbody></table></p>
 * @method void setKnowledgeType(integer $KnowledgeType) Set <p>Hit knowledge type: 1=QA, 2=document fragment, 3=database, 4=map<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_QA</td><td>1</td><td>QA</td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_DOC</td><td>2</td><td>Document fragment</td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_DB</td><td>3</td><td>Database</td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_GRAPH</td><td>4</td><td>Map</td></tr></tbody></table></p>
 * @method array getRecallTypeList() Obtain <p>Recall type list</p>
 * @method void setRecallTypeList(array $RecallTypeList) Set <p>Recall type list</p>
 * @method SearchResultPayload getResultPayload() Obtain <p>Result payload</p>
 * @method void setResultPayload(SearchResultPayload $ResultPayload) Set <p>Result payload</p>
 * @method integer getResultType() Obtain <p>Result type<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>SEARCH_RESULT_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SEARCH_RESULT_TYPE_RETRIEVAL</td><td>1</td><td>Standard search result</td></tr><tr><td>SEARCH_RESULT_TYPE_TEXT_TO_SQL</td><td>2</td><td>text2sql result</td></tr><tr><td>SEARCH_RESULT_TYPE_IMAGE_SEARCH_IMAGE</td><td>3</td><td></td></tr><tr><td>SEARCH_RESULT_TYPE_TEXT_SEARCH_IMAGE</td><td>4</td><td></td></tr></tbody></table></p>
 * @method void setResultType(integer $ResultType) Set <p>Result type<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>SEARCH_RESULT_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SEARCH_RESULT_TYPE_RETRIEVAL</td><td>1</td><td>Standard search result</td></tr><tr><td>SEARCH_RESULT_TYPE_TEXT_TO_SQL</td><td>2</td><td>text2sql result</td></tr><tr><td>SEARCH_RESULT_TYPE_IMAGE_SEARCH_IMAGE</td><td>3</td><td></td></tr><tr><td>SEARCH_RESULT_TYPE_TEXT_SEARCH_IMAGE</td><td>4</td><td></td></tr></tbody></table></p>
 * @method SimilarQuestionExtra getSimilarQuestionExtra() Obtain <p>Additional information for similar questions.</p>
 * @method void setSimilarQuestionExtra(SimilarQuestionExtra $SimilarQuestionExtra) Set <p>Additional information for similar questions.</p>
 * @method KnowledgeSnippetProfile getSnippetProfile() Obtain <p>Basic information of knowledge fragment</p>
 * @method void setSnippetProfile(KnowledgeSnippetProfile $SnippetProfile) Set <p>Basic information of knowledge fragment</p>
 * @method KnowledgeSource getSourceInfo() Obtain <p>Knowledge source information</p>
 * @method void setSourceInfo(KnowledgeSource $SourceInfo) Set <p>Knowledge source information</p>
 */
class KnowledgeResult extends AbstractModel
{
    /**
     * @var float <p>Confidence degree</p>
     */
    public $Confidence;

    /**
     * @var integer <p>Hit knowledge type: 1=QA, 2=document fragment, 3=database, 4=map<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_QA</td><td>1</td><td>QA</td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_DOC</td><td>2</td><td>Document fragment</td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_DB</td><td>3</td><td>Database</td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_GRAPH</td><td>4</td><td>Map</td></tr></tbody></table></p>
     */
    public $KnowledgeType;

    /**
     * @var array <p>Recall type list</p>
     */
    public $RecallTypeList;

    /**
     * @var SearchResultPayload <p>Result payload</p>
     */
    public $ResultPayload;

    /**
     * @var integer <p>Result type<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>SEARCH_RESULT_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SEARCH_RESULT_TYPE_RETRIEVAL</td><td>1</td><td>Standard search result</td></tr><tr><td>SEARCH_RESULT_TYPE_TEXT_TO_SQL</td><td>2</td><td>text2sql result</td></tr><tr><td>SEARCH_RESULT_TYPE_IMAGE_SEARCH_IMAGE</td><td>3</td><td></td></tr><tr><td>SEARCH_RESULT_TYPE_TEXT_SEARCH_IMAGE</td><td>4</td><td></td></tr></tbody></table></p>
     */
    public $ResultType;

    /**
     * @var SimilarQuestionExtra <p>Additional information for similar questions.</p>
     */
    public $SimilarQuestionExtra;

    /**
     * @var KnowledgeSnippetProfile <p>Basic information of knowledge fragment</p>
     */
    public $SnippetProfile;

    /**
     * @var KnowledgeSource <p>Knowledge source information</p>
     */
    public $SourceInfo;

    /**
     * @param float $Confidence <p>Confidence degree</p>
     * @param integer $KnowledgeType <p>Hit knowledge type: 1=QA, 2=document fragment, 3=database, 4=map<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_QA</td><td>1</td><td>QA</td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_DOC</td><td>2</td><td>Document fragment</td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_DB</td><td>3</td><td>Database</td></tr><tr><td>KNOWLEDGE_SOURCE_TYPE_GRAPH</td><td>4</td><td>Map</td></tr></tbody></table></p>
     * @param array $RecallTypeList <p>Recall type list</p>
     * @param SearchResultPayload $ResultPayload <p>Result payload</p>
     * @param integer $ResultType <p>Result type<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>SEARCH_RESULT_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SEARCH_RESULT_TYPE_RETRIEVAL</td><td>1</td><td>Standard search result</td></tr><tr><td>SEARCH_RESULT_TYPE_TEXT_TO_SQL</td><td>2</td><td>text2sql result</td></tr><tr><td>SEARCH_RESULT_TYPE_IMAGE_SEARCH_IMAGE</td><td>3</td><td></td></tr><tr><td>SEARCH_RESULT_TYPE_TEXT_SEARCH_IMAGE</td><td>4</td><td></td></tr></tbody></table></p>
     * @param SimilarQuestionExtra $SimilarQuestionExtra <p>Additional information for similar questions.</p>
     * @param KnowledgeSnippetProfile $SnippetProfile <p>Basic information of knowledge fragment</p>
     * @param KnowledgeSource $SourceInfo <p>Knowledge source information</p>
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
        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("KnowledgeType",$param) and $param["KnowledgeType"] !== null) {
            $this->KnowledgeType = $param["KnowledgeType"];
        }

        if (array_key_exists("RecallTypeList",$param) and $param["RecallTypeList"] !== null) {
            $this->RecallTypeList = $param["RecallTypeList"];
        }

        if (array_key_exists("ResultPayload",$param) and $param["ResultPayload"] !== null) {
            $this->ResultPayload = new SearchResultPayload();
            $this->ResultPayload->deserialize($param["ResultPayload"]);
        }

        if (array_key_exists("ResultType",$param) and $param["ResultType"] !== null) {
            $this->ResultType = $param["ResultType"];
        }

        if (array_key_exists("SimilarQuestionExtra",$param) and $param["SimilarQuestionExtra"] !== null) {
            $this->SimilarQuestionExtra = new SimilarQuestionExtra();
            $this->SimilarQuestionExtra->deserialize($param["SimilarQuestionExtra"]);
        }

        if (array_key_exists("SnippetProfile",$param) and $param["SnippetProfile"] !== null) {
            $this->SnippetProfile = new KnowledgeSnippetProfile();
            $this->SnippetProfile->deserialize($param["SnippetProfile"]);
        }

        if (array_key_exists("SourceInfo",$param) and $param["SourceInfo"] !== null) {
            $this->SourceInfo = new KnowledgeSource();
            $this->SourceInfo->deserialize($param["SourceInfo"]);
        }
    }
}
