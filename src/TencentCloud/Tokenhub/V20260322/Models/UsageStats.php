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
 * Statistical aggregate values within a time period (indexed by metric key). Declares that both the tokens and search field families are in this schema, with values obtained based on the actual MetricKeys returned. See the top-level `MetricKeys` field in the response.
 *
 * @method integer getTotalToken() Obtain <p>Total tokens accumulated within a time period.</p>
 * @method void setTotalToken(integer $TotalToken) Set <p>Total tokens accumulated within a time period.</p>
 * @method integer getInputTotalToken() Obtain <p>[tokens family] Total input tokens within a time period.</p>
 * @method void setInputTotalToken(integer $InputTotalToken) Set <p>[tokens family] Total input tokens within a time period.</p>
 * @method integer getOutputTotalToken() Obtain <p>[tokens family] Total output tokens within a time period.</p>
 * @method void setOutputTotalToken(integer $OutputTotalToken) Set <p>[tokens family] Total output tokens within a time period.</p>
 * @method integer getCacheTotalToken() Obtain <p>[token family] Cumulative number of tokens read from the cache within a time period (cache hit part)</p>
 * @method void setCacheTotalToken(integer $CacheTotalToken) Set <p>[token family] Cumulative number of tokens read from the cache within a time period (cache hit part)</p>
 * @method integer getSearchRequestCount() Obtain <p>Total online search requests in the [search group]</p>
 * @method void setSearchRequestCount(integer $SearchRequestCount) Set <p>Total online search requests in the [search group]</p>
 * @method integer getSearchCount() Obtain <p>[search family] Total search engine calls</p>
 * @method void setSearchCount(integer $SearchCount) Set <p>[search family] Total search engine calls</p>
 */
class UsageStats extends AbstractModel
{
    /**
     * @var integer <p>Total tokens accumulated within a time period.</p>
     */
    public $TotalToken;

    /**
     * @var integer <p>[tokens family] Total input tokens within a time period.</p>
     */
    public $InputTotalToken;

    /**
     * @var integer <p>[tokens family] Total output tokens within a time period.</p>
     */
    public $OutputTotalToken;

    /**
     * @var integer <p>[token family] Cumulative number of tokens read from the cache within a time period (cache hit part)</p>
     */
    public $CacheTotalToken;

    /**
     * @var integer <p>Total online search requests in the [search group]</p>
     */
    public $SearchRequestCount;

    /**
     * @var integer <p>[search family] Total search engine calls</p>
     */
    public $SearchCount;

    /**
     * @param integer $TotalToken <p>Total tokens accumulated within a time period.</p>
     * @param integer $InputTotalToken <p>[tokens family] Total input tokens within a time period.</p>
     * @param integer $OutputTotalToken <p>[tokens family] Total output tokens within a time period.</p>
     * @param integer $CacheTotalToken <p>[token family] Cumulative number of tokens read from the cache within a time period (cache hit part)</p>
     * @param integer $SearchRequestCount <p>Total online search requests in the [search group]</p>
     * @param integer $SearchCount <p>[search family] Total search engine calls</p>
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
