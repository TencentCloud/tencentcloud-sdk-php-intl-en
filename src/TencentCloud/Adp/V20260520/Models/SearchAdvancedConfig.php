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
 * Retrieve advanced configuration
 *
 * @method FinalRerankConfig getFinalRerankConfig() Obtain <p>Final ReRank Configuration</p>
 * @method void setFinalRerankConfig(FinalRerankConfig $FinalRerankConfig) Set <p>Final ReRank Configuration</p>
 * @method array getKbRetrievalList() Obtain <p>Search configuration of each knowledge base</p>
 * @method void setKbRetrievalList(array $KbRetrievalList) Set <p>Search configuration of each knowledge base</p>
 * @method integer getKnowledgeType() Obtain <p>Retrieve knowledge type: 1=document and QA, 2=rejected question<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>SEARCH_KNOWLEDGE_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SEARCH_KNOWLEDGE_TYPE_DOC_QA</td><td>1</td><td>Document and QA</td></tr><tr><td>SEARCH_KNOWLEDGE_TYPE_REJECTED_QUESTION</td><td>2</td><td>Rejected question</td></tr></tbody></table></p>
 * @method void setKnowledgeType(integer $KnowledgeType) Set <p>Retrieve knowledge type: 1=document and QA, 2=rejected question<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>SEARCH_KNOWLEDGE_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SEARCH_KNOWLEDGE_TYPE_DOC_QA</td><td>1</td><td>Document and QA</td></tr><tr><td>SEARCH_KNOWLEDGE_TYPE_REJECTED_QUESTION</td><td>2</td><td>Rejected question</td></tr></tbody></table></p>
 * @method integer getRecallCount() Obtain <p>Number of final returned results</p>
 * @method void setRecallCount(integer $RecallCount) Set <p>Number of final returned results</p>
 */
class SearchAdvancedConfig extends AbstractModel
{
    /**
     * @var FinalRerankConfig <p>Final ReRank Configuration</p>
     */
    public $FinalRerankConfig;

    /**
     * @var array <p>Search configuration of each knowledge base</p>
     */
    public $KbRetrievalList;

    /**
     * @var integer <p>Retrieve knowledge type: 1=document and QA, 2=rejected question<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>SEARCH_KNOWLEDGE_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SEARCH_KNOWLEDGE_TYPE_DOC_QA</td><td>1</td><td>Document and QA</td></tr><tr><td>SEARCH_KNOWLEDGE_TYPE_REJECTED_QUESTION</td><td>2</td><td>Rejected question</td></tr></tbody></table></p>
     */
    public $KnowledgeType;

    /**
     * @var integer <p>Number of final returned results</p>
     */
    public $RecallCount;

    /**
     * @param FinalRerankConfig $FinalRerankConfig <p>Final ReRank Configuration</p>
     * @param array $KbRetrievalList <p>Search configuration of each knowledge base</p>
     * @param integer $KnowledgeType <p>Retrieve knowledge type: 1=document and QA, 2=rejected question<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>SEARCH_KNOWLEDGE_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SEARCH_KNOWLEDGE_TYPE_DOC_QA</td><td>1</td><td>Document and QA</td></tr><tr><td>SEARCH_KNOWLEDGE_TYPE_REJECTED_QUESTION</td><td>2</td><td>Rejected question</td></tr></tbody></table></p>
     * @param integer $RecallCount <p>Number of final returned results</p>
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
        if (array_key_exists("FinalRerankConfig",$param) and $param["FinalRerankConfig"] !== null) {
            $this->FinalRerankConfig = new FinalRerankConfig();
            $this->FinalRerankConfig->deserialize($param["FinalRerankConfig"]);
        }

        if (array_key_exists("KbRetrievalList",$param) and $param["KbRetrievalList"] !== null) {
            $this->KbRetrievalList = [];
            foreach ($param["KbRetrievalList"] as $key => $value){
                $obj = new KBRetrievalConfig();
                $obj->deserialize($value);
                array_push($this->KbRetrievalList, $obj);
            }
        }

        if (array_key_exists("KnowledgeType",$param) and $param["KnowledgeType"] !== null) {
            $this->KnowledgeType = $param["KnowledgeType"];
        }

        if (array_key_exists("RecallCount",$param) and $param["RecallCount"] !== null) {
            $this->RecallCount = $param["RecallCount"];
        }
    }
}
