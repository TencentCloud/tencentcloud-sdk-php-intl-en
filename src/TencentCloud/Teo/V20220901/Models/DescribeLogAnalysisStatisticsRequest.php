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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLogAnalysisStatistics request structure.
 *
 * @method string getZoneId() Obtain <p>Site ID.</p>
 * @method void setZoneId(string $ZoneId) Set <p>Site ID.</p>
 * @method string getArea() Obtain <p>Data ownership region. Available values:</p><ul><li>mainland: within the Chinese mainland;</li><li>overseas: global (excluding the Chinese mainland).</li></ul>Note: If the site service area is "global availability zone", to obtain all data, query the data of mainland and overseas separately.<p></p>
 * @method void setArea(string $Area) Set <p>Data ownership region. Available values:</p><ul><li>mainland: within the Chinese mainland;</li><li>overseas: global (excluding the Chinese mainland).</li></ul>Note: If the site service area is "global availability zone", to obtain all data, query the data of mainland and overseas separately.<p></p>
 * @method string getLogType() Obtain <p>Log type. Available values:</p><ul><li> l7-access-logs: L7 access log;</li><li>web-attack: managed rule log.</li></ul>Default value: l7-access-logs.<p></p>
 * @method void setLogType(string $LogType) Set <p>Log type. Available values:</p><ul><li> l7-access-logs: L7 access log;</li><li>web-attack: managed rule log.</li></ul>Default value: l7-access-logs.<p></p>
 * @method string getStartTime() Obtain <p>Start time. Example value: 2020-04-29T00:00:00Z. The maximum span from the query start time to this day varies by package version. For details, see <a href="https://www.tencentcloud.com/document/product/1552/94165?from_cn_redirect=1#45435466-9103-4ff6-be22-e31717044fb2">Package Selection Comparison</a>.</p>
 * @method void setStartTime(string $StartTime) Set <p>Start time. Example value: 2020-04-29T00:00:00Z. The maximum span from the query start time to this day varies by package version. For details, see <a href="https://www.tencentcloud.com/document/product/1552/94165?from_cn_redirect=1#45435466-9103-4ff6-be22-e31717044fb2">Package Selection Comparison</a>.</p>
 * @method string getEndTime() Obtain <p>End time, for example, 2020-04-30T00:00:00Z. The maximum time span from start time to end time per request is 31 days.</p>
 * @method void setEndTime(string $EndTime) Set <p>End time, for example, 2020-04-30T00:00:00Z. The maximum time span from start time to end time per request is 31 days.</p>
 * @method string getQuery() Obtain <p>Statistical query statement, composed of [<a href="https://www.tencentcloud.com/document/product/1552/124662?from_cn_redirect=1">retrieval criteria</a>] | [<a href="https://www.tencentcloud.com/document/product/1552/124662?from_cn_redirect=1">SQL statement</a>]. The SQL segment after the pipe character "|" is required. The retrieval criteria segment can be empty (for example, | SELECT ...), which means aggregation on full data. Maximum length: 12 KB. Default SQL Limit: 100. Maximum Limit: 10000.<br>Example:</p><p>With retrieval criteria: <code>${EdgeCacheStatus} in ['miss','other'] | select EdgeCacheStatus as status, count(*) as cnt group by status limit 2</code></p><p>Without retrieval criteria: <code>| select EdgeCacheStatus as status, count(*) as cnt group by status</code></p>
 * @method void setQuery(string $Query) Set <p>Statistical query statement, composed of [<a href="https://www.tencentcloud.com/document/product/1552/124662?from_cn_redirect=1">retrieval criteria</a>] | [<a href="https://www.tencentcloud.com/document/product/1552/124662?from_cn_redirect=1">SQL statement</a>]. The SQL segment after the pipe character "|" is required. The retrieval criteria segment can be empty (for example, | SELECT ...), which means aggregation on full data. Maximum length: 12 KB. Default SQL Limit: 100. Maximum Limit: 10000.<br>Example:</p><p>With retrieval criteria: <code>${EdgeCacheStatus} in ['miss','other'] | select EdgeCacheStatus as status, count(*) as cnt group by status limit 2</code></p><p>Without retrieval criteria: <code>| select EdgeCacheStatus as status, count(*) as cnt group by status</code></p>
 */
class DescribeLogAnalysisStatisticsRequest extends AbstractModel
{
    /**
     * @var string <p>Site ID.</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Data ownership region. Available values:</p><ul><li>mainland: within the Chinese mainland;</li><li>overseas: global (excluding the Chinese mainland).</li></ul>Note: If the site service area is "global availability zone", to obtain all data, query the data of mainland and overseas separately.<p></p>
     */
    public $Area;

    /**
     * @var string <p>Log type. Available values:</p><ul><li> l7-access-logs: L7 access log;</li><li>web-attack: managed rule log.</li></ul>Default value: l7-access-logs.<p></p>
     */
    public $LogType;

    /**
     * @var string <p>Start time. Example value: 2020-04-29T00:00:00Z. The maximum span from the query start time to this day varies by package version. For details, see <a href="https://www.tencentcloud.com/document/product/1552/94165?from_cn_redirect=1#45435466-9103-4ff6-be22-e31717044fb2">Package Selection Comparison</a>.</p>
     */
    public $StartTime;

    /**
     * @var string <p>End time, for example, 2020-04-30T00:00:00Z. The maximum time span from start time to end time per request is 31 days.</p>
     */
    public $EndTime;

    /**
     * @var string <p>Statistical query statement, composed of [<a href="https://www.tencentcloud.com/document/product/1552/124662?from_cn_redirect=1">retrieval criteria</a>] | [<a href="https://www.tencentcloud.com/document/product/1552/124662?from_cn_redirect=1">SQL statement</a>]. The SQL segment after the pipe character "|" is required. The retrieval criteria segment can be empty (for example, | SELECT ...), which means aggregation on full data. Maximum length: 12 KB. Default SQL Limit: 100. Maximum Limit: 10000.<br>Example:</p><p>With retrieval criteria: <code>${EdgeCacheStatus} in ['miss','other'] | select EdgeCacheStatus as status, count(*) as cnt group by status limit 2</code></p><p>Without retrieval criteria: <code>| select EdgeCacheStatus as status, count(*) as cnt group by status</code></p>
     */
    public $Query;

    /**
     * @param string $ZoneId <p>Site ID.</p>
     * @param string $Area <p>Data ownership region. Available values:</p><ul><li>mainland: within the Chinese mainland;</li><li>overseas: global (excluding the Chinese mainland).</li></ul>Note: If the site service area is "global availability zone", to obtain all data, query the data of mainland and overseas separately.<p></p>
     * @param string $LogType <p>Log type. Available values:</p><ul><li> l7-access-logs: L7 access log;</li><li>web-attack: managed rule log.</li></ul>Default value: l7-access-logs.<p></p>
     * @param string $StartTime <p>Start time. Example value: 2020-04-29T00:00:00Z. The maximum span from the query start time to this day varies by package version. For details, see <a href="https://www.tencentcloud.com/document/product/1552/94165?from_cn_redirect=1#45435466-9103-4ff6-be22-e31717044fb2">Package Selection Comparison</a>.</p>
     * @param string $EndTime <p>End time, for example, 2020-04-30T00:00:00Z. The maximum time span from start time to end time per request is 31 days.</p>
     * @param string $Query <p>Statistical query statement, composed of [<a href="https://www.tencentcloud.com/document/product/1552/124662?from_cn_redirect=1">retrieval criteria</a>] | [<a href="https://www.tencentcloud.com/document/product/1552/124662?from_cn_redirect=1">SQL statement</a>]. The SQL segment after the pipe character "|" is required. The retrieval criteria segment can be empty (for example, | SELECT ...), which means aggregation on full data. Maximum length: 12 KB. Default SQL Limit: 100. Maximum Limit: 10000.<br>Example:</p><p>With retrieval criteria: <code>${EdgeCacheStatus} in ['miss','other'] | select EdgeCacheStatus as status, count(*) as cnt group by status limit 2</code></p><p>Without retrieval criteria: <code>| select EdgeCacheStatus as status, count(*) as cnt group by status</code></p>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }
    }
}
