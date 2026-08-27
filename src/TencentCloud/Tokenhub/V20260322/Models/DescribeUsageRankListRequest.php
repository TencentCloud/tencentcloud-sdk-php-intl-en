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
 * DescribeUsageRankList request structure.
 *
 * @method string getDimension() Obtain <p>Statistical dimension. Values: apikey (statistics by APIKey), endpoint (statistics by access point), model (statistics by model).</p>
 * @method void setDimension(string $Dimension) Set <p>Statistical dimension. Values: apikey (statistics by APIKey), endpoint (statistics by access point), model (statistics by model).</p>
 * @method string getStartTime() Obtain <p>Start time (inclusive interval), in RFC3339 format.</p>
 * @method void setStartTime(string $StartTime) Set <p>Start time (inclusive interval), in RFC3339 format.</p>
 * @method string getEndTime() Obtain <p>End time (open interval) in RFC3339 format. The maximum span from StartTime is 90 days.</p>
 * @method void setEndTime(string $EndTime) Set <p>End time (open interval) in RFC3339 format. The maximum span from StartTime is 90 days.</p>
 * @method string getMetricType() Obtain <p>Metric family switch field.</p><ul><li>tokens (default): Token consumption chart (statistics=sum), supports Dimension = apikey/endpoint/model</li><li>search [to be launched]: Online search call count (statistics=sum), only supports Dimension = model</li><li>Other values return InvalidParameter.</li></ul><p>Enum values:</p><ul><li>tokens: tokens</li></ul>
 * @method void setMetricType(string $MetricType) Set <p>Metric family switch field.</p><ul><li>tokens (default): Token consumption chart (statistics=sum), supports Dimension = apikey/endpoint/model</li><li>search [to be launched]: Online search call count (statistics=sum), only supports Dimension = model</li><li>Other values return InvalidParameter.</li></ul><p>Enum values:</p><ul><li>tokens: tokens</li></ul>
 * @method string getTarget() Obtain <p>Dimension filtering value. An empty string indicates querying all objects; a non-empty string indicates querying only the specified single object (for example, a designated APIKey ID). Maximum 256 characters.</p>
 * @method void setTarget(string $Target) Set <p>Dimension filtering value. An empty string indicates querying all objects; a non-empty string indicates querying only the specified single object (for example, a designated APIKey ID). Maximum 256 characters.</p>
 * @method integer getPeriod() Obtain <p>Statistical granularity (seconds). Value: 60, 300, 3600, 86400. Must not be less than the lower limit corresponding to the span: span ≤ 1 day → 60; 1–5 days → 300; 5–10 days → 3600; &gt; 10 days → 86400. Used only when ShowAll=false.</p>
 * @method void setPeriod(integer $Period) Set <p>Statistical granularity (seconds). Value: 60, 300, 3600, 86400. Must not be less than the lower limit corresponding to the span: span ≤ 1 day → 60; 1–5 days → 300; 5–10 days → 3600; &gt; 10 days → 86400. Used only when ShowAll=false.</p>
 * @method integer getOffset() Obtain <p>Pagination starting point, starting from 0, default 0. Ignore timing when ShowAll=true. Page size fixed as 10.</p>
 * @method void setOffset(integer $Offset) Set <p>Pagination starting point, starting from 0, default 0. Ignore timing when ShowAll=true. Page size fixed as 10.</p>
 * @method boolean getShowAll() Obtain <p>Whether to return full result.</p><ul><li>false (default): Return TopList in pages by Offset (10 items per page). Each object contains <br>Series time series points for drawing curves.</li><li>true: Ignore Offset and return the full object list without Series (CSV export scenario).</li></ul>
 * @method void setShowAll(boolean $ShowAll) Set <p>Whether to return full result.</p><ul><li>false (default): Return TopList in pages by Offset (10 items per page). Each object contains <br>Series time series points for drawing curves.</li><li>true: Ignore Offset and return the full object list without Series (CSV export scenario).</li></ul>
 */
class DescribeUsageRankListRequest extends AbstractModel
{
    /**
     * @var string <p>Statistical dimension. Values: apikey (statistics by APIKey), endpoint (statistics by access point), model (statistics by model).</p>
     */
    public $Dimension;

    /**
     * @var string <p>Start time (inclusive interval), in RFC3339 format.</p>
     */
    public $StartTime;

    /**
     * @var string <p>End time (open interval) in RFC3339 format. The maximum span from StartTime is 90 days.</p>
     */
    public $EndTime;

    /**
     * @var string <p>Metric family switch field.</p><ul><li>tokens (default): Token consumption chart (statistics=sum), supports Dimension = apikey/endpoint/model</li><li>search [to be launched]: Online search call count (statistics=sum), only supports Dimension = model</li><li>Other values return InvalidParameter.</li></ul><p>Enum values:</p><ul><li>tokens: tokens</li></ul>
     */
    public $MetricType;

    /**
     * @var string <p>Dimension filtering value. An empty string indicates querying all objects; a non-empty string indicates querying only the specified single object (for example, a designated APIKey ID). Maximum 256 characters.</p>
     */
    public $Target;

    /**
     * @var integer <p>Statistical granularity (seconds). Value: 60, 300, 3600, 86400. Must not be less than the lower limit corresponding to the span: span ≤ 1 day → 60; 1–5 days → 300; 5–10 days → 3600; &gt; 10 days → 86400. Used only when ShowAll=false.</p>
     */
    public $Period;

    /**
     * @var integer <p>Pagination starting point, starting from 0, default 0. Ignore timing when ShowAll=true. Page size fixed as 10.</p>
     */
    public $Offset;

    /**
     * @var boolean <p>Whether to return full result.</p><ul><li>false (default): Return TopList in pages by Offset (10 items per page). Each object contains <br>Series time series points for drawing curves.</li><li>true: Ignore Offset and return the full object list without Series (CSV export scenario).</li></ul>
     */
    public $ShowAll;

    /**
     * @param string $Dimension <p>Statistical dimension. Values: apikey (statistics by APIKey), endpoint (statistics by access point), model (statistics by model).</p>
     * @param string $StartTime <p>Start time (inclusive interval), in RFC3339 format.</p>
     * @param string $EndTime <p>End time (open interval) in RFC3339 format. The maximum span from StartTime is 90 days.</p>
     * @param string $MetricType <p>Metric family switch field.</p><ul><li>tokens (default): Token consumption chart (statistics=sum), supports Dimension = apikey/endpoint/model</li><li>search [to be launched]: Online search call count (statistics=sum), only supports Dimension = model</li><li>Other values return InvalidParameter.</li></ul><p>Enum values:</p><ul><li>tokens: tokens</li></ul>
     * @param string $Target <p>Dimension filtering value. An empty string indicates querying all objects; a non-empty string indicates querying only the specified single object (for example, a designated APIKey ID). Maximum 256 characters.</p>
     * @param integer $Period <p>Statistical granularity (seconds). Value: 60, 300, 3600, 86400. Must not be less than the lower limit corresponding to the span: span ≤ 1 day → 60; 1–5 days → 300; 5–10 days → 3600; &gt; 10 days → 86400. Used only when ShowAll=false.</p>
     * @param integer $Offset <p>Pagination starting point, starting from 0, default 0. Ignore timing when ShowAll=true. Page size fixed as 10.</p>
     * @param boolean $ShowAll <p>Whether to return full result.</p><ul><li>false (default): Return TopList in pages by Offset (10 items per page). Each object contains <br>Series time series points for drawing curves.</li><li>true: Ignore Offset and return the full object list without Series (CSV export scenario).</li></ul>
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
        if (array_key_exists("Dimension",$param) and $param["Dimension"] !== null) {
            $this->Dimension = $param["Dimension"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MetricType",$param) and $param["MetricType"] !== null) {
            $this->MetricType = $param["MetricType"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ShowAll",$param) and $param["ShowAll"] !== null) {
            $this->ShowAll = $param["ShowAll"];
        }
    }
}
