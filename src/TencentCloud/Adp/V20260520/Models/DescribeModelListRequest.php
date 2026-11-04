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
 * DescribeModelList request structure.
 *
 * @method integer getModelScene() Obtain <p>Model scenario. 0-case-insensitive, 1-standard generation, 2-standard thinking, 3-Agent thinking, 4-multimodal understanding, 5-multimodal QA, 6-rewrite, 7-long-term memory, 8-natural language to SQL, 9-AI optimization, 10-real-time file parsing, 11-file parsing, 12-GraphRAG, 13-OpenClaw, 14-multimodal Embedding, 15-Rerank, 16-text Embedding, 17-Widget, 18-Claw mode, 19-workflow code generation, 20-workflow large model node, 21-dedicated vectorization for workflow node, 22-workflow parameter extraction, 23-workflow large model knowledge q&a, 24-workflow tag extraction, 25-workflow intent recognition, 26-workflow tab, 27-workflow logical judgment, 28-documentation generation QA, 29-knowledge base Schema</p><p>Enumeration values:</p><ul><li>0: case-insensitive</li><li>1: standard generation</li><li>2: standard thinking</li><li>3: Agent thinking</li><li>4: multimodal understanding</li><li>5: multimodal QA</li><li>6: rewrite</li><li>7: long-term memory</li><li>8: natural language to SQL</li><li>9: AI optimization</li><li>10: real-time file parsing</li><li>11: file parsing</li><li>12: GraphRAG</li><li>13: OpenClaw</li><li>14: multimodal Embedding</li><li>15: Rerank</li><li>16: text Embedding</li><li>17: Widget</li><li>18: Claw mode</li><li>19: workflow code generation</li><li>20: workflow large model node</li><li>21: dedicated vectorization for workflow node</li><li>22: workflow parameter extraction</li><li>23: workflow large model knowledge q&a</li><li>24: workflow tag extraction</li><li>25: workflow intent recognition</li><li>26: workflow tab</li><li>27: workflow logical judgment</li><li>28: documentation generation QA</li><li>29: knowledge base Schema</li></ul>
 * @method void setModelScene(integer $ModelScene) Set <p>Model scenario. 0-case-insensitive, 1-standard generation, 2-standard thinking, 3-Agent thinking, 4-multimodal understanding, 5-multimodal QA, 6-rewrite, 7-long-term memory, 8-natural language to SQL, 9-AI optimization, 10-real-time file parsing, 11-file parsing, 12-GraphRAG, 13-OpenClaw, 14-multimodal Embedding, 15-Rerank, 16-text Embedding, 17-Widget, 18-Claw mode, 19-workflow code generation, 20-workflow large model node, 21-dedicated vectorization for workflow node, 22-workflow parameter extraction, 23-workflow large model knowledge q&a, 24-workflow tag extraction, 25-workflow intent recognition, 26-workflow tab, 27-workflow logical judgment, 28-documentation generation QA, 29-knowledge base Schema</p><p>Enumeration values:</p><ul><li>0: case-insensitive</li><li>1: standard generation</li><li>2: standard thinking</li><li>3: Agent thinking</li><li>4: multimodal understanding</li><li>5: multimodal QA</li><li>6: rewrite</li><li>7: long-term memory</li><li>8: natural language to SQL</li><li>9: AI optimization</li><li>10: real-time file parsing</li><li>11: file parsing</li><li>12: GraphRAG</li><li>13: OpenClaw</li><li>14: multimodal Embedding</li><li>15: Rerank</li><li>16: text Embedding</li><li>17: Widget</li><li>18: Claw mode</li><li>19: workflow code generation</li><li>20: workflow large model node</li><li>21: dedicated vectorization for workflow node</li><li>22: workflow parameter extraction</li><li>23: workflow large model knowledge q&a</li><li>24: workflow tag extraction</li><li>25: workflow intent recognition</li><li>26: workflow tab</li><li>27: workflow logical judgment</li><li>28: documentation generation QA</li><li>29: knowledge base Schema</li></ul>
 * @method array getFilterList() Obtain <p>Filter conditions (multiple Filters are combined with AND, and multiple Values within the same Filter are combined with OR)<br>DeveloperName: model author name<br>ProviderName: model provider name<br>ProviderType: model provider type</p>
 * @method void setFilterList(array $FilterList) Set <p>Filter conditions (multiple Filters are combined with AND, and multiple Values within the same Filter are combined with OR)<br>DeveloperName: model author name<br>ProviderName: model provider name<br>ProviderType: model provider type</p>
 * @method integer getPageNumber() Obtain <p>Page number. Starts from 0</p>
 * @method void setPageNumber(integer $PageNumber) Set <p>Page number. Starts from 0</p>
 * @method integer getPageSize() Obtain <p>Number of items per page. Default: 20. Maximum: 100</p>
 * @method void setPageSize(integer $PageSize) Set <p>Number of items per page. Default: 20. Maximum: 100</p>
 * @method string getQuery() Obtain <p>Fuzzy search by keyword</p>
 * @method void setQuery(string $Query) Set <p>Fuzzy search by keyword</p>
 * @method string getSpaceId() Obtain <p>Space ID</p>
 * @method void setSpaceId(string $SpaceId) Set <p>Space ID</p>
 */
class DescribeModelListRequest extends AbstractModel
{
    /**
     * @var integer <p>Model scenario. 0-case-insensitive, 1-standard generation, 2-standard thinking, 3-Agent thinking, 4-multimodal understanding, 5-multimodal QA, 6-rewrite, 7-long-term memory, 8-natural language to SQL, 9-AI optimization, 10-real-time file parsing, 11-file parsing, 12-GraphRAG, 13-OpenClaw, 14-multimodal Embedding, 15-Rerank, 16-text Embedding, 17-Widget, 18-Claw mode, 19-workflow code generation, 20-workflow large model node, 21-dedicated vectorization for workflow node, 22-workflow parameter extraction, 23-workflow large model knowledge q&a, 24-workflow tag extraction, 25-workflow intent recognition, 26-workflow tab, 27-workflow logical judgment, 28-documentation generation QA, 29-knowledge base Schema</p><p>Enumeration values:</p><ul><li>0: case-insensitive</li><li>1: standard generation</li><li>2: standard thinking</li><li>3: Agent thinking</li><li>4: multimodal understanding</li><li>5: multimodal QA</li><li>6: rewrite</li><li>7: long-term memory</li><li>8: natural language to SQL</li><li>9: AI optimization</li><li>10: real-time file parsing</li><li>11: file parsing</li><li>12: GraphRAG</li><li>13: OpenClaw</li><li>14: multimodal Embedding</li><li>15: Rerank</li><li>16: text Embedding</li><li>17: Widget</li><li>18: Claw mode</li><li>19: workflow code generation</li><li>20: workflow large model node</li><li>21: dedicated vectorization for workflow node</li><li>22: workflow parameter extraction</li><li>23: workflow large model knowledge q&a</li><li>24: workflow tag extraction</li><li>25: workflow intent recognition</li><li>26: workflow tab</li><li>27: workflow logical judgment</li><li>28: documentation generation QA</li><li>29: knowledge base Schema</li></ul>
     */
    public $ModelScene;

    /**
     * @var array <p>Filter conditions (multiple Filters are combined with AND, and multiple Values within the same Filter are combined with OR)<br>DeveloperName: model author name<br>ProviderName: model provider name<br>ProviderType: model provider type</p>
     */
    public $FilterList;

    /**
     * @var integer <p>Page number. Starts from 0</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>Number of items per page. Default: 20. Maximum: 100</p>
     */
    public $PageSize;

    /**
     * @var string <p>Fuzzy search by keyword</p>
     */
    public $Query;

    /**
     * @var string <p>Space ID</p>
     */
    public $SpaceId;

    /**
     * @param integer $ModelScene <p>Model scenario. 0-case-insensitive, 1-standard generation, 2-standard thinking, 3-Agent thinking, 4-multimodal understanding, 5-multimodal QA, 6-rewrite, 7-long-term memory, 8-natural language to SQL, 9-AI optimization, 10-real-time file parsing, 11-file parsing, 12-GraphRAG, 13-OpenClaw, 14-multimodal Embedding, 15-Rerank, 16-text Embedding, 17-Widget, 18-Claw mode, 19-workflow code generation, 20-workflow large model node, 21-dedicated vectorization for workflow node, 22-workflow parameter extraction, 23-workflow large model knowledge q&a, 24-workflow tag extraction, 25-workflow intent recognition, 26-workflow tab, 27-workflow logical judgment, 28-documentation generation QA, 29-knowledge base Schema</p><p>Enumeration values:</p><ul><li>0: case-insensitive</li><li>1: standard generation</li><li>2: standard thinking</li><li>3: Agent thinking</li><li>4: multimodal understanding</li><li>5: multimodal QA</li><li>6: rewrite</li><li>7: long-term memory</li><li>8: natural language to SQL</li><li>9: AI optimization</li><li>10: real-time file parsing</li><li>11: file parsing</li><li>12: GraphRAG</li><li>13: OpenClaw</li><li>14: multimodal Embedding</li><li>15: Rerank</li><li>16: text Embedding</li><li>17: Widget</li><li>18: Claw mode</li><li>19: workflow code generation</li><li>20: workflow large model node</li><li>21: dedicated vectorization for workflow node</li><li>22: workflow parameter extraction</li><li>23: workflow large model knowledge q&a</li><li>24: workflow tag extraction</li><li>25: workflow intent recognition</li><li>26: workflow tab</li><li>27: workflow logical judgment</li><li>28: documentation generation QA</li><li>29: knowledge base Schema</li></ul>
     * @param array $FilterList <p>Filter conditions (multiple Filters are combined with AND, and multiple Values within the same Filter are combined with OR)<br>DeveloperName: model author name<br>ProviderName: model provider name<br>ProviderType: model provider type</p>
     * @param integer $PageNumber <p>Page number. Starts from 0</p>
     * @param integer $PageSize <p>Number of items per page. Default: 20. Maximum: 100</p>
     * @param string $Query <p>Fuzzy search by keyword</p>
     * @param string $SpaceId <p>Space ID</p>
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
        if (array_key_exists("ModelScene",$param) and $param["ModelScene"] !== null) {
            $this->ModelScene = $param["ModelScene"];
        }

        if (array_key_exists("FilterList",$param) and $param["FilterList"] !== null) {
            $this->FilterList = [];
            foreach ($param["FilterList"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->FilterList, $obj);
            }
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }
    }
}
