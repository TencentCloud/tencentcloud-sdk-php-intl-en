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
 * Search configuration of each knowledge base
 *
 * @method DBRetrievalConfig getDbRetrievalConfig() Obtain <p>Database search configuration</p>
 * @method void setDbRetrievalConfig(DBRetrievalConfig $DbRetrievalConfig) Set <p>Database search configuration</p>
 * @method DocRetrievalConfig getDocRetrievalConfig() Obtain <p>Document retrieval configuration.</p>
 * @method void setDocRetrievalConfig(DocRetrievalConfig $DocRetrievalConfig) Set <p>Document retrieval configuration.</p>
 * @method string getKbId() Obtain <p>Knowledge base ID</p>
 * @method void setKbId(string $KbId) Set <p>Knowledge base ID</p>
 * @method RetrievalOption getOptionConfig() Obtain <p>Retrieval optional configuration</p>
 * @method void setOptionConfig(RetrievalOption $OptionConfig) Set <p>Retrieval optional configuration</p>
 * @method QARetrievalConfig getQaRetrievalConfig() Obtain <p>QA search configuration</p>
 * @method void setQaRetrievalConfig(QARetrievalConfig $QaRetrievalConfig) Set <p>QA search configuration</p>
 * @method RerankConfig getRerankConfig() Obtain <p>ReRank configuration</p>
 * @method void setRerankConfig(RerankConfig $RerankConfig) Set <p>ReRank configuration</p>
 * @method SearchFilterConfig getSearchFilterConfig() Obtain <p>Search filter configuration</p>
 * @method void setSearchFilterConfig(SearchFilterConfig $SearchFilterConfig) Set <p>Search filter configuration</p>
 * @method integer getStrategyType() Obtain <p>Retrieval strategy: 1=hybrid, 2=semantic, 3=keyword, 4=none<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>SEARCH_STRATEGY_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SEARCH_STRATEGY_TYPE_MIXING</td><td>1</td><td>Hybrid retrieval</td></tr><tr><td>SEARCH_STRATEGY_TYPE_SEMANTIC</td><td>2</td><td>Semantic retrieval</td></tr><tr><td>SEARCH_STRATEGY_TYPE_KEYWORD</td><td>3</td><td>Keyword retrieval</td></tr><tr><td>SEARCH_STRATEGY_TYPE_NONE</td><td>4</td><td>No semantic/vector retrieval</td></tr></tbody></table></p>
 * @method void setStrategyType(integer $StrategyType) Set <p>Retrieval strategy: 1=hybrid, 2=semantic, 3=keyword, 4=none<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>SEARCH_STRATEGY_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SEARCH_STRATEGY_TYPE_MIXING</td><td>1</td><td>Hybrid retrieval</td></tr><tr><td>SEARCH_STRATEGY_TYPE_SEMANTIC</td><td>2</td><td>Semantic retrieval</td></tr><tr><td>SEARCH_STRATEGY_TYPE_KEYWORD</td><td>3</td><td>Keyword retrieval</td></tr><tr><td>SEARCH_STRATEGY_TYPE_NONE</td><td>4</td><td>No semantic/vector retrieval</td></tr></tbody></table></p>
 * @method ModelDetailInfo getTextToSqlModel() Obtain <p>Text2SQL model</p>
 * @method void setTextToSqlModel(ModelDetailInfo $TextToSqlModel) Set <p>Text2SQL model</p>
 */
class KBRetrievalConfig extends AbstractModel
{
    /**
     * @var DBRetrievalConfig <p>Database search configuration</p>
     */
    public $DbRetrievalConfig;

    /**
     * @var DocRetrievalConfig <p>Document retrieval configuration.</p>
     */
    public $DocRetrievalConfig;

    /**
     * @var string <p>Knowledge base ID</p>
     */
    public $KbId;

    /**
     * @var RetrievalOption <p>Retrieval optional configuration</p>
     */
    public $OptionConfig;

    /**
     * @var QARetrievalConfig <p>QA search configuration</p>
     */
    public $QaRetrievalConfig;

    /**
     * @var RerankConfig <p>ReRank configuration</p>
     */
    public $RerankConfig;

    /**
     * @var SearchFilterConfig <p>Search filter configuration</p>
     */
    public $SearchFilterConfig;

    /**
     * @var integer <p>Retrieval strategy: 1=hybrid, 2=semantic, 3=keyword, 4=none<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>SEARCH_STRATEGY_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SEARCH_STRATEGY_TYPE_MIXING</td><td>1</td><td>Hybrid retrieval</td></tr><tr><td>SEARCH_STRATEGY_TYPE_SEMANTIC</td><td>2</td><td>Semantic retrieval</td></tr><tr><td>SEARCH_STRATEGY_TYPE_KEYWORD</td><td>3</td><td>Keyword retrieval</td></tr><tr><td>SEARCH_STRATEGY_TYPE_NONE</td><td>4</td><td>No semantic/vector retrieval</td></tr></tbody></table></p>
     */
    public $StrategyType;

    /**
     * @var ModelDetailInfo <p>Text2SQL model</p>
     */
    public $TextToSqlModel;

    /**
     * @param DBRetrievalConfig $DbRetrievalConfig <p>Database search configuration</p>
     * @param DocRetrievalConfig $DocRetrievalConfig <p>Document retrieval configuration.</p>
     * @param string $KbId <p>Knowledge base ID</p>
     * @param RetrievalOption $OptionConfig <p>Retrieval optional configuration</p>
     * @param QARetrievalConfig $QaRetrievalConfig <p>QA search configuration</p>
     * @param RerankConfig $RerankConfig <p>ReRank configuration</p>
     * @param SearchFilterConfig $SearchFilterConfig <p>Search filter configuration</p>
     * @param integer $StrategyType <p>Retrieval strategy: 1=hybrid, 2=semantic, 3=keyword, 4=none<table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>SEARCH_STRATEGY_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>SEARCH_STRATEGY_TYPE_MIXING</td><td>1</td><td>Hybrid retrieval</td></tr><tr><td>SEARCH_STRATEGY_TYPE_SEMANTIC</td><td>2</td><td>Semantic retrieval</td></tr><tr><td>SEARCH_STRATEGY_TYPE_KEYWORD</td><td>3</td><td>Keyword retrieval</td></tr><tr><td>SEARCH_STRATEGY_TYPE_NONE</td><td>4</td><td>No semantic/vector retrieval</td></tr></tbody></table></p>
     * @param ModelDetailInfo $TextToSqlModel <p>Text2SQL model</p>
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
        if (array_key_exists("DbRetrievalConfig",$param) and $param["DbRetrievalConfig"] !== null) {
            $this->DbRetrievalConfig = new DBRetrievalConfig();
            $this->DbRetrievalConfig->deserialize($param["DbRetrievalConfig"]);
        }

        if (array_key_exists("DocRetrievalConfig",$param) and $param["DocRetrievalConfig"] !== null) {
            $this->DocRetrievalConfig = new DocRetrievalConfig();
            $this->DocRetrievalConfig->deserialize($param["DocRetrievalConfig"]);
        }

        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }

        if (array_key_exists("OptionConfig",$param) and $param["OptionConfig"] !== null) {
            $this->OptionConfig = new RetrievalOption();
            $this->OptionConfig->deserialize($param["OptionConfig"]);
        }

        if (array_key_exists("QaRetrievalConfig",$param) and $param["QaRetrievalConfig"] !== null) {
            $this->QaRetrievalConfig = new QARetrievalConfig();
            $this->QaRetrievalConfig->deserialize($param["QaRetrievalConfig"]);
        }

        if (array_key_exists("RerankConfig",$param) and $param["RerankConfig"] !== null) {
            $this->RerankConfig = new RerankConfig();
            $this->RerankConfig->deserialize($param["RerankConfig"]);
        }

        if (array_key_exists("SearchFilterConfig",$param) and $param["SearchFilterConfig"] !== null) {
            $this->SearchFilterConfig = new SearchFilterConfig();
            $this->SearchFilterConfig->deserialize($param["SearchFilterConfig"]);
        }

        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("TextToSqlModel",$param) and $param["TextToSqlModel"] !== null) {
            $this->TextToSqlModel = new ModelDetailInfo();
            $this->TextToSqlModel->deserialize($param["TextToSqlModel"]);
        }
    }
}
