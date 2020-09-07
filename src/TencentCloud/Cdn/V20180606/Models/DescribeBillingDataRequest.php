<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBillingData request structure.
 *
 * @method string getStartTime() Obtain Query start time, e.g., 2018-09-04 10:40:00. The returned result will be later than or equal to the specified time
The time will be rounded forward based on the granularity parameter `Interval`. For example, if the query start time is 2018-09-04 10:40:00 and the query time granularity is 1-hour, the time for the first returned entry will be 2018-09-04 10:00:00
The range between the start time and end time should be less than or equal to 90 days
 * @method void setStartTime(string $StartTime) Set Query start time, e.g., 2018-09-04 10:40:00. The returned result will be later than or equal to the specified time
The time will be rounded forward based on the granularity parameter `Interval`. For example, if the query start time is 2018-09-04 10:40:00 and the query time granularity is 1-hour, the time for the first returned entry will be 2018-09-04 10:00:00
The range between the start time and end time should be less than or equal to 90 days
 * @method string getEndTime() Obtain Query end time, e.g. 2018-09-04 10:40:00. The returned result will be earlier than or equal to the specified time
The time will be rounded forward based on the granularity parameter `Interval`. For example, if the query end time is 2018-09-04 10:40:00 and the query time granularity is 1-hour, the time for the last returned entry will be 2018-09-04 10:00:00
The range between the start time and end time should be less than or equal to 90 days
 * @method void setEndTime(string $EndTime) Set Query end time, e.g. 2018-09-04 10:40:00. The returned result will be earlier than or equal to the specified time
The time will be rounded forward based on the granularity parameter `Interval`. For example, if the query end time is 2018-09-04 10:40:00 and the query time granularity is 1-hour, the time for the last returned entry will be 2018-09-04 10:00:00
The range between the start time and end time should be less than or equal to 90 days
 * @method string getInterval() Obtain Time granularity, which can be:
min: 1-minute. The query range should be less than or equal to 24 hours
5min: 5-minute. The query range should be less than or equal to 31 days
hour: 1-hour. The query range should be less than or equal to 31 days
day: 1-day. The query period should be greater than 31 days

Currently, data query at 1-minute granularity is not supported if the `Area` field is `overseas`
 * @method void setInterval(string $Interval) Set Time granularity, which can be:
min: 1-minute. The query range should be less than or equal to 24 hours
5min: 5-minute. The query range should be less than or equal to 31 days
hour: 1-hour. The query range should be less than or equal to 31 days
day: 1-day. The query period should be greater than 31 days

Currently, data query at 1-minute granularity is not supported if the `Area` field is `overseas`
 * @method string getDomain() Obtain Domain name whose billing data is to be queried
 * @method void setDomain(string $Domain) Set Domain name whose billing data is to be queried
 * @method integer getProject() Obtain Project ID, which can be viewed [here](https://console.cloud.tencent.com/project)
If the `Domain` parameter is populated with specific domain name information, then the billing data of this domain name instead of the specified project will be returned
 * @method void setProject(integer $Project) Set Project ID, which can be viewed [here](https://console.cloud.tencent.com/project)
If the `Domain` parameter is populated with specific domain name information, then the billing data of this domain name instead of the specified project will be returned
 * @method string getArea() Obtain Acceleration region whose billing data is to be queried:
mainland: in the mainland of China
overseas: outside the mainland of China
If this parameter is left empty, `mainland` will be used by default
 * @method void setArea(string $Area) Set Acceleration region whose billing data is to be queried:
mainland: in the mainland of China
overseas: outside the mainland of China
If this parameter is left empty, `mainland` will be used by default
 * @method integer getDistrict() Obtain Country/region to be queried if `Area` is `overseas`
For district or country/region codes, please see [District Code Mappings](https://intl.cloud.tencent.com/document/product/228/6316?from_cn_redirect=1#.E7.9C.81.E4.BB.BD.E6.98.A0.E5.B0.84)
If this parameter is left empty, all countries/regions will be queried
 * @method void setDistrict(integer $District) Set Country/region to be queried if `Area` is `overseas`
For district or country/region codes, please see [District Code Mappings](https://intl.cloud.tencent.com/document/product/228/6316?from_cn_redirect=1#.E7.9C.81.E4.BB.BD.E6.98.A0.E5.B0.84)
If this parameter is left empty, all countries/regions will be queried
 * @method string getMetric() Obtain Billing statistics type
flux: bill-by-traffic
bandwidth: bill-by-bandwidth
Default value: `bandwidth`
 * @method void setMetric(string $Metric) Set Billing statistics type
flux: bill-by-traffic
bandwidth: bill-by-bandwidth
Default value: `bandwidth`
 */
class DescribeBillingDataRequest extends AbstractModel
{
    /**
     * @var string Query start time, e.g., 2018-09-04 10:40:00. The returned result will be later than or equal to the specified time
The time will be rounded forward based on the granularity parameter `Interval`. For example, if the query start time is 2018-09-04 10:40:00 and the query time granularity is 1-hour, the time for the first returned entry will be 2018-09-04 10:00:00
The range between the start time and end time should be less than or equal to 90 days
     */
    public $StartTime;

    /**
     * @var string Query end time, e.g. 2018-09-04 10:40:00. The returned result will be earlier than or equal to the specified time
The time will be rounded forward based on the granularity parameter `Interval`. For example, if the query end time is 2018-09-04 10:40:00 and the query time granularity is 1-hour, the time for the last returned entry will be 2018-09-04 10:00:00
The range between the start time and end time should be less than or equal to 90 days
     */
    public $EndTime;

    /**
     * @var string Time granularity, which can be:
min: 1-minute. The query range should be less than or equal to 24 hours
5min: 5-minute. The query range should be less than or equal to 31 days
hour: 1-hour. The query range should be less than or equal to 31 days
day: 1-day. The query period should be greater than 31 days

Currently, data query at 1-minute granularity is not supported if the `Area` field is `overseas`
     */
    public $Interval;

    /**
     * @var string Domain name whose billing data is to be queried
     */
    public $Domain;

    /**
     * @var integer Project ID, which can be viewed [here](https://console.cloud.tencent.com/project)
If the `Domain` parameter is populated with specific domain name information, then the billing data of this domain name instead of the specified project will be returned
     */
    public $Project;

    /**
     * @var string Acceleration region whose billing data is to be queried:
mainland: in the mainland of China
overseas: outside the mainland of China
If this parameter is left empty, `mainland` will be used by default
     */
    public $Area;

    /**
     * @var integer Country/region to be queried if `Area` is `overseas`
For district or country/region codes, please see [District Code Mappings](https://intl.cloud.tencent.com/document/product/228/6316?from_cn_redirect=1#.E7.9C.81.E4.BB.BD.E6.98.A0.E5.B0.84)
If this parameter is left empty, all countries/regions will be queried
     */
    public $District;

    /**
     * @var string Billing statistics type
flux: bill-by-traffic
bandwidth: bill-by-bandwidth
Default value: `bandwidth`
     */
    public $Metric;

    /**
     * @param string $StartTime Query start time, e.g., 2018-09-04 10:40:00. The returned result will be later than or equal to the specified time
The time will be rounded forward based on the granularity parameter `Interval`. For example, if the query start time is 2018-09-04 10:40:00 and the query time granularity is 1-hour, the time for the first returned entry will be 2018-09-04 10:00:00
The range between the start time and end time should be less than or equal to 90 days
     * @param string $EndTime Query end time, e.g. 2018-09-04 10:40:00. The returned result will be earlier than or equal to the specified time
The time will be rounded forward based on the granularity parameter `Interval`. For example, if the query end time is 2018-09-04 10:40:00 and the query time granularity is 1-hour, the time for the last returned entry will be 2018-09-04 10:00:00
The range between the start time and end time should be less than or equal to 90 days
     * @param string $Interval Time granularity, which can be:
min: 1-minute. The query range should be less than or equal to 24 hours
5min: 5-minute. The query range should be less than or equal to 31 days
hour: 1-hour. The query range should be less than or equal to 31 days
day: 1-day. The query period should be greater than 31 days

Currently, data query at 1-minute granularity is not supported if the `Area` field is `overseas`
     * @param string $Domain Domain name whose billing data is to be queried
     * @param integer $Project Project ID, which can be viewed [here](https://console.cloud.tencent.com/project)
If the `Domain` parameter is populated with specific domain name information, then the billing data of this domain name instead of the specified project will be returned
     * @param string $Area Acceleration region whose billing data is to be queried:
mainland: in the mainland of China
overseas: outside the mainland of China
If this parameter is left empty, `mainland` will be used by default
     * @param integer $District Country/region to be queried if `Area` is `overseas`
For district or country/region codes, please see [District Code Mappings](https://intl.cloud.tencent.com/document/product/228/6316?from_cn_redirect=1#.E7.9C.81.E4.BB.BD.E6.98.A0.E5.B0.84)
If this parameter is left empty, all countries/regions will be queried
     * @param string $Metric Billing statistics type
flux: bill-by-traffic
bandwidth: bill-by-bandwidth
Default value: `bandwidth`
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

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Project",$param) and $param["Project"] !== null) {
            $this->Project = $param["Project"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("District",$param) and $param["District"] !== null) {
            $this->District = $param["District"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }
    }
}
