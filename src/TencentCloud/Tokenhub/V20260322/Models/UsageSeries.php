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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of time series points within the usage time period (indexed by metric key). It is a JSON array in string form. The array length matches the response Timestamps, and null is used where there is no data point. The specific keys included are determined by the response MetricKeys.
 *
 * @method string getTotalToken() Obtain <p>Amount of total tokens used within a time period in JSON string form, for example, <code>&quot;[12,null,15]&quot;</code>.</p>
 * @method void setTotalToken(string $TotalToken) Set <p>Amount of total tokens used within a time period in JSON string form, for example, <code>&quot;[12,null,15]&quot;</code>.</p>
 * @method string getInputTotalToken() Obtain <p>Amount of input tokens used within a time period in JSON string form, for example, <code>&quot;[7,null,9]&quot;</code>.</p>
 * @method void setInputTotalToken(string $InputTotalToken) Set <p>Amount of input tokens used within a time period in JSON string form, for example, <code>&quot;[7,null,9]&quot;</code>.</p>
 * @method string getOutputTotalToken() Obtain <p>Amount of output tokens used within a time period in JSON string form, for example, <code>&quot;[5,null,6]&quot;</code>.</p>
 * @method void setOutputTotalToken(string $OutputTotalToken) Set <p>Amount of output tokens used within a time period in JSON string form, for example, <code>&quot;[5,null,6]&quot;</code>.</p>
 * @method string getCacheTotalToken() Obtain <p>Read cache token count usage of the tokens family in JSON string form within a time period, for example, <code>&quot;[5,null,6]&quot;</code>.</p>
 * @method void setCacheTotalToken(string $CacheTotalToken) Set <p>Read cache token count usage of the tokens family in JSON string form within a time period, for example, <code>&quot;[5,null,6]&quot;</code>.</p>
 * @method string getSearchRequestCount() Obtain <p>Usage of search requests in JSON string form within a time period, for example, <code>&quot;[5,null,6]&quot;</code>.</p>
 * @method void setSearchRequestCount(string $SearchRequestCount) Set <p>Usage of search requests in JSON string form within a time period, for example, <code>&quot;[5,null,6]&quot;</code>.</p>
 * @method string getSearchCount() Obtain <p>Usage of search engine call count in JSON string form within a time period, for example, <code>&quot;[5,null,6]&quot;</code>.</p>
 * @method void setSearchCount(string $SearchCount) Set <p>Usage of search engine call count in JSON string form within a time period, for example, <code>&quot;[5,null,6]&quot;</code>.</p>
 */
class UsageSeries extends AbstractModel
{
    /**
     * @var string <p>Amount of total tokens used within a time period in JSON string form, for example, <code>&quot;[12,null,15]&quot;</code>.</p>
     */
    public $TotalToken;

    /**
     * @var string <p>Amount of input tokens used within a time period in JSON string form, for example, <code>&quot;[7,null,9]&quot;</code>.</p>
     */
    public $InputTotalToken;

    /**
     * @var string <p>Amount of output tokens used within a time period in JSON string form, for example, <code>&quot;[5,null,6]&quot;</code>.</p>
     */
    public $OutputTotalToken;

    /**
     * @var string <p>Read cache token count usage of the tokens family in JSON string form within a time period, for example, <code>&quot;[5,null,6]&quot;</code>.</p>
     */
    public $CacheTotalToken;

    /**
     * @var string <p>Usage of search requests in JSON string form within a time period, for example, <code>&quot;[5,null,6]&quot;</code>.</p>
     */
    public $SearchRequestCount;

    /**
     * @var string <p>Usage of search engine call count in JSON string form within a time period, for example, <code>&quot;[5,null,6]&quot;</code>.</p>
     */
    public $SearchCount;

    /**
     * @param string $TotalToken <p>Amount of total tokens used within a time period in JSON string form, for example, <code>&quot;[12,null,15]&quot;</code>.</p>
     * @param string $InputTotalToken <p>Amount of input tokens used within a time period in JSON string form, for example, <code>&quot;[7,null,9]&quot;</code>.</p>
     * @param string $OutputTotalToken <p>Amount of output tokens used within a time period in JSON string form, for example, <code>&quot;[5,null,6]&quot;</code>.</p>
     * @param string $CacheTotalToken <p>Read cache token count usage of the tokens family in JSON string form within a time period, for example, <code>&quot;[5,null,6]&quot;</code>.</p>
     * @param string $SearchRequestCount <p>Usage of search requests in JSON string form within a time period, for example, <code>&quot;[5,null,6]&quot;</code>.</p>
     * @param string $SearchCount <p>Usage of search engine call count in JSON string form within a time period, for example, <code>&quot;[5,null,6]&quot;</code>.</p>
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
        if (array_key_exists("TotalToken",$param) and $param["TotalToken"] !== null) {
            $this->TotalToken = $param["TotalToken"];
        }

        if (array_key_exists("InputTotalToken",$param) and $param["InputTotalToken"] !== null) {
            $this->InputTotalToken = $param["InputTotalToken"];
        }

        if (array_key_exists("OutputTotalToken",$param) and $param["OutputTotalToken"] !== null) {
            $this->OutputTotalToken = $param["OutputTotalToken"];
        }

        if (array_key_exists("CacheTotalToken",$param) and $param["CacheTotalToken"] !== null) {
            $this->CacheTotalToken = $param["CacheTotalToken"];
        }

        if (array_key_exists("SearchRequestCount",$param) and $param["SearchRequestCount"] !== null) {
            $this->SearchRequestCount = $param["SearchRequestCount"];
        }

        if (array_key_exists("SearchCount",$param) and $param["SearchCount"] !== null) {
            $this->SearchCount = $param["SearchCount"];
        }
    }
}
