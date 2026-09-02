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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCLSLogListV3 request structure.
 *
 * @method integer getFrom() Obtain <p>Start time.</p>
 * @method void setFrom(integer $From) Set <p>Start time.</p>
 * @method integer getTo() Obtain <p>End time.</p>
 * @method void setTo(integer $To) Set <p>End time.</p>
 * @method string getQuery() Obtain <p>Query condition</p>
 * @method void setQuery(string $Query) Set <p>Query condition</p>
 * @method integer getSyntaxRule() Obtain <p>Grammar.</p>
 * @method void setSyntaxRule(integer $SyntaxRule) Set <p>Grammar.</p>
 * @method array getTopics() Obtain <p>Topic</p>
 * @method void setTopics(array $Topics) Set <p>Topic</p>
 * @method array getMemberId() Obtain <p>Group account member id.</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id.</p>
 * @method string getSort() Obtain <p>Sort</p>
 * @method void setSort(string $Sort) Set <p>Sort</p>
 * @method integer getLimit() Obtain <p>limit</p>
 * @method void setLimit(integer $Limit) Set <p>limit</p>
 * @method integer getOffset() Obtain <p>offset</p>
 * @method void setOffset(integer $Offset) Set <p>offset</p>
 * @method float getSamplingRate() Obtain <p>Sampling</p>
 * @method void setSamplingRate(float $SamplingRate) Set <p>Sampling</p>
 * @method boolean getHighLight() Obtain <p>Highlight or not</p>
 * @method void setHighLight(boolean $HighLight) Set <p>Highlight or not</p>
 * @method boolean getUseNewAnalysis() Obtain <p>Whether to adopt new analytics</p>
 * @method void setUseNewAnalysis(boolean $UseNewAnalysis) Set <p>Whether to adopt new analytics</p>
 * @method integer getQueryOptimize() Obtain <p>Query optimization</p>
 * @method void setQueryOptimize(integer $QueryOptimize) Set <p>Query optimization</p>
 * @method string getTopicId() Obtain <p>Topic id</p>
 * @method void setTopicId(string $TopicId) Set <p>Topic id</p>
 * @method string getContext() Obtain <p>context information</p>
 * @method void setContext(string $Context) Set <p>context information</p>
 * @method array getSubQueryTypes() Obtain <p>Query type.</p>
 * @method void setSubQueryTypes(array $SubQueryTypes) Set <p>Query type.</p>
 */
class DescribeCLSLogListV3Request extends AbstractModel
{
    /**
     * @var integer <p>Start time.</p>
     */
    public $From;

    /**
     * @var integer <p>End time.</p>
     */
    public $To;

    /**
     * @var string <p>Query condition</p>
     */
    public $Query;

    /**
     * @var integer <p>Grammar.</p>
     */
    public $SyntaxRule;

    /**
     * @var array <p>Topic</p>
     */
    public $Topics;

    /**
     * @var array <p>Group account member id.</p>
     */
    public $MemberId;

    /**
     * @var string <p>Sort</p>
     */
    public $Sort;

    /**
     * @var integer <p>limit</p>
     */
    public $Limit;

    /**
     * @var integer <p>offset</p>
     */
    public $Offset;

    /**
     * @var float <p>Sampling</p>
     */
    public $SamplingRate;

    /**
     * @var boolean <p>Highlight or not</p>
     */
    public $HighLight;

    /**
     * @var boolean <p>Whether to adopt new analytics</p>
     */
    public $UseNewAnalysis;

    /**
     * @var integer <p>Query optimization</p>
     */
    public $QueryOptimize;

    /**
     * @var string <p>Topic id</p>
     */
    public $TopicId;

    /**
     * @var string <p>context information</p>
     */
    public $Context;

    /**
     * @var array <p>Query type.</p>
     */
    public $SubQueryTypes;

    /**
     * @param integer $From <p>Start time.</p>
     * @param integer $To <p>End time.</p>
     * @param string $Query <p>Query condition</p>
     * @param integer $SyntaxRule <p>Grammar.</p>
     * @param array $Topics <p>Topic</p>
     * @param array $MemberId <p>Group account member id.</p>
     * @param string $Sort <p>Sort</p>
     * @param integer $Limit <p>limit</p>
     * @param integer $Offset <p>offset</p>
     * @param float $SamplingRate <p>Sampling</p>
     * @param boolean $HighLight <p>Highlight or not</p>
     * @param boolean $UseNewAnalysis <p>Whether to adopt new analytics</p>
     * @param integer $QueryOptimize <p>Query optimization</p>
     * @param string $TopicId <p>Topic id</p>
     * @param string $Context <p>context information</p>
     * @param array $SubQueryTypes <p>Query type.</p>
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
        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("To",$param) and $param["To"] !== null) {
            $this->To = $param["To"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("SyntaxRule",$param) and $param["SyntaxRule"] !== null) {
            $this->SyntaxRule = $param["SyntaxRule"];
        }

        if (array_key_exists("Topics",$param) and $param["Topics"] !== null) {
            $this->Topics = [];
            foreach ($param["Topics"] as $key => $value){
                $obj = new LogContextInfo();
                $obj->deserialize($value);
                array_push($this->Topics, $obj);
            }
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("SamplingRate",$param) and $param["SamplingRate"] !== null) {
            $this->SamplingRate = $param["SamplingRate"];
        }

        if (array_key_exists("HighLight",$param) and $param["HighLight"] !== null) {
            $this->HighLight = $param["HighLight"];
        }

        if (array_key_exists("UseNewAnalysis",$param) and $param["UseNewAnalysis"] !== null) {
            $this->UseNewAnalysis = $param["UseNewAnalysis"];
        }

        if (array_key_exists("QueryOptimize",$param) and $param["QueryOptimize"] !== null) {
            $this->QueryOptimize = $param["QueryOptimize"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("SubQueryTypes",$param) and $param["SubQueryTypes"] !== null) {
            $this->SubQueryTypes = $param["SubQueryTypes"];
        }
    }
}
