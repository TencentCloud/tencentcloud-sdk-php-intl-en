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
 * DescribeDDoSAttackData request structure.
 *
 * @method string getStartTime() Obtain <p>Start time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.</p>
 * @method void setStartTime(string $StartTime) Set <p>Start time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.</p>
 * @method string getEndTime() Obtain <p>End time. The time is in Coordinated Universal Time (UTC), following the ISO 8601 standard date and time format. The query time range (<code>EndTime</code> - <code>StartTime</code>) must be less than or equal to 31 days.</p>
 * @method void setEndTime(string $EndTime) Set <p>End time. The time is in Coordinated Universal Time (UTC), following the ISO 8601 standard date and time format. The query time range (<code>EndTime</code> - <code>StartTime</code>) must be less than or equal to 31 days.</p>
 * @method array getMetricNames() Obtain <p>List of statistical metrics. Fill in at least 1, and duplication is not allowed.</p><p>Enumeration values:</p><ul><li>ddos_attackMaxBandwidth: Peak attack bandwidth, in bps;</li><li>ddos_attackMaxPackageRate: Peak attack packet rate, in pps;</li><li>ddos_attackBandwidth: Attack bandwidth curve, in bps;</li><li>ddos_attackPackageRate: Attack packet rate curve, in pps.</li></ul>
 * @method void setMetricNames(array $MetricNames) Set <p>List of statistical metrics. Fill in at least 1, and duplication is not allowed.</p><p>Enumeration values:</p><ul><li>ddos_attackMaxBandwidth: Peak attack bandwidth, in bps;</li><li>ddos_attackMaxPackageRate: Peak attack packet rate, in pps;</li><li>ddos_attackBandwidth: Attack bandwidth curve, in bps;</li><li>ddos_attackPackageRate: Attack packet rate curve, in pps.</li></ul>
 * @method array getZoneIds() Obtain <p>Site ID set. This parameter will change from optional to required after May 30, 2024. For details, see the announcement: <a href="https://www.tencentcloud.com/document/product/1552/104902?from_cn_redirect=1">[Tencent Cloud EdgeOne] Cloud API Change Notification</a>. You can import up to 100 site IDs. To query all site data under the Tencent Cloud root account, use <code>*</code> instead. To query account-level data, you must have permission for all site resources of this interface.</p>
 * @method void setZoneIds(array $ZoneIds) Set <p>Site ID set. This parameter will change from optional to required after May 30, 2024. For details, see the announcement: <a href="https://www.tencentcloud.com/document/product/1552/104902?from_cn_redirect=1">[Tencent Cloud EdgeOne] Cloud API Change Notification</a>. You can import up to 100 site IDs. To query all site data under the Tencent Cloud root account, use <code>*</code> instead. To query account-level data, you must have permission for all site resources of this interface.</p>
 * @method array getPolicyIds() Obtain <p>List of DDoS policy group IDs. If not specified, all policy IDs are selected by default.</p>
 * @method void setPolicyIds(array $PolicyIds) Set <p>List of DDoS policy group IDs. If not specified, all policy IDs are selected by default.</p>
 * @method string getInterval() Obtain <p>Query time granularity. If this parameter is not input, the granularity will be automatically inferred based on the interval between the start time and end time. Specifically, the granularity value is min, 5min, hour, and day respectively for queries of data within 1 hour, within 2 days, within 7 days, and over 7 days.</p><p>Enumeration values:</p><ul><li>min: 1 minute;</li><li>5min: 5 minutes;</li><li>hour: 1 hour;</li><li>day: 1 day.</li></ul>
 * @method void setInterval(string $Interval) Set <p>Query time granularity. If this parameter is not input, the granularity will be automatically inferred based on the interval between the start time and end time. Specifically, the granularity value is min, 5min, hour, and day respectively for queries of data within 1 hour, within 2 days, within 7 days, and over 7 days.</p><p>Enumeration values:</p><ul><li>min: 1 minute;</li><li>5min: 5 minutes;</li><li>hour: 1 hour;</li><li>day: 1 day.</li></ul>
 * @method string getArea() Obtain <p>Data ownership region.</p><p>Enumeration values:</p><ul><li>overseas: global data (excluding the Chinese mainland);</li><li>mainland: data in the Chinese mainland;</li><li>global: global data.</li></ul><p>Default value: global</p>
 * @method void setArea(string $Area) Set <p>Data ownership region.</p><p>Enumeration values:</p><ul><li>overseas: global data (excluding the Chinese mainland);</li><li>mainland: data in the Chinese mainland;</li><li>global: global data.</li></ul><p>Default value: global</p>
 * @method array getFilters() Obtain <p>Filter conditions. The maximum number of QueryCondition.Value collections is 20. The detailed filter conditions for QueryCondition.Key values are as follows:</p><li>ddos-attack-dip: filter by DDoS attack destination IP. QueryCondition.Operator only supports equals.</li>
 * @method void setFilters(array $Filters) Set <p>Filter conditions. The maximum number of QueryCondition.Value collections is 20. The detailed filter conditions for QueryCondition.Key values are as follows:</p><li>ddos-attack-dip: filter by DDoS attack destination IP. QueryCondition.Operator only supports equals.</li>
 */
class DescribeDDoSAttackDataRequest extends AbstractModel
{
    /**
     * @var string <p>Start time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.</p>
     */
    public $StartTime;

    /**
     * @var string <p>End time. The time is in Coordinated Universal Time (UTC), following the ISO 8601 standard date and time format. The query time range (<code>EndTime</code> - <code>StartTime</code>) must be less than or equal to 31 days.</p>
     */
    public $EndTime;

    /**
     * @var array <p>List of statistical metrics. Fill in at least 1, and duplication is not allowed.</p><p>Enumeration values:</p><ul><li>ddos_attackMaxBandwidth: Peak attack bandwidth, in bps;</li><li>ddos_attackMaxPackageRate: Peak attack packet rate, in pps;</li><li>ddos_attackBandwidth: Attack bandwidth curve, in bps;</li><li>ddos_attackPackageRate: Attack packet rate curve, in pps.</li></ul>
     */
    public $MetricNames;

    /**
     * @var array <p>Site ID set. This parameter will change from optional to required after May 30, 2024. For details, see the announcement: <a href="https://www.tencentcloud.com/document/product/1552/104902?from_cn_redirect=1">[Tencent Cloud EdgeOne] Cloud API Change Notification</a>. You can import up to 100 site IDs. To query all site data under the Tencent Cloud root account, use <code>*</code> instead. To query account-level data, you must have permission for all site resources of this interface.</p>
     */
    public $ZoneIds;

    /**
     * @var array <p>List of DDoS policy group IDs. If not specified, all policy IDs are selected by default.</p>
     */
    public $PolicyIds;

    /**
     * @var string <p>Query time granularity. If this parameter is not input, the granularity will be automatically inferred based on the interval between the start time and end time. Specifically, the granularity value is min, 5min, hour, and day respectively for queries of data within 1 hour, within 2 days, within 7 days, and over 7 days.</p><p>Enumeration values:</p><ul><li>min: 1 minute;</li><li>5min: 5 minutes;</li><li>hour: 1 hour;</li><li>day: 1 day.</li></ul>
     */
    public $Interval;

    /**
     * @var string <p>Data ownership region.</p><p>Enumeration values:</p><ul><li>overseas: global data (excluding the Chinese mainland);</li><li>mainland: data in the Chinese mainland;</li><li>global: global data.</li></ul><p>Default value: global</p>
     */
    public $Area;

    /**
     * @var array <p>Filter conditions. The maximum number of QueryCondition.Value collections is 20. The detailed filter conditions for QueryCondition.Key values are as follows:</p><li>ddos-attack-dip: filter by DDoS attack destination IP. QueryCondition.Operator only supports equals.</li>
     */
    public $Filters;

    /**
     * @param string $StartTime <p>Start time, which adopts Coordinated Universal Time (UTC) and follows the date and time format of the ISO 8601 standard.</p>
     * @param string $EndTime <p>End time. The time is in Coordinated Universal Time (UTC), following the ISO 8601 standard date and time format. The query time range (<code>EndTime</code> - <code>StartTime</code>) must be less than or equal to 31 days.</p>
     * @param array $MetricNames <p>List of statistical metrics. Fill in at least 1, and duplication is not allowed.</p><p>Enumeration values:</p><ul><li>ddos_attackMaxBandwidth: Peak attack bandwidth, in bps;</li><li>ddos_attackMaxPackageRate: Peak attack packet rate, in pps;</li><li>ddos_attackBandwidth: Attack bandwidth curve, in bps;</li><li>ddos_attackPackageRate: Attack packet rate curve, in pps.</li></ul>
     * @param array $ZoneIds <p>Site ID set. This parameter will change from optional to required after May 30, 2024. For details, see the announcement: <a href="https://www.tencentcloud.com/document/product/1552/104902?from_cn_redirect=1">[Tencent Cloud EdgeOne] Cloud API Change Notification</a>. You can import up to 100 site IDs. To query all site data under the Tencent Cloud root account, use <code>*</code> instead. To query account-level data, you must have permission for all site resources of this interface.</p>
     * @param array $PolicyIds <p>List of DDoS policy group IDs. If not specified, all policy IDs are selected by default.</p>
     * @param string $Interval <p>Query time granularity. If this parameter is not input, the granularity will be automatically inferred based on the interval between the start time and end time. Specifically, the granularity value is min, 5min, hour, and day respectively for queries of data within 1 hour, within 2 days, within 7 days, and over 7 days.</p><p>Enumeration values:</p><ul><li>min: 1 minute;</li><li>5min: 5 minutes;</li><li>hour: 1 hour;</li><li>day: 1 day.</li></ul>
     * @param string $Area <p>Data ownership region.</p><p>Enumeration values:</p><ul><li>overseas: global data (excluding the Chinese mainland);</li><li>mainland: data in the Chinese mainland;</li><li>global: global data.</li></ul><p>Default value: global</p>
     * @param array $Filters <p>Filter conditions. The maximum number of QueryCondition.Value collections is 20. The detailed filter conditions for QueryCondition.Key values are as follows:</p><li>ddos-attack-dip: filter by DDoS attack destination IP. QueryCondition.Operator only supports equals.</li>
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MetricNames",$param) and $param["MetricNames"] !== null) {
            $this->MetricNames = $param["MetricNames"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("PolicyIds",$param) and $param["PolicyIds"] !== null) {
            $this->PolicyIds = $param["PolicyIds"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new QueryCondition();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
