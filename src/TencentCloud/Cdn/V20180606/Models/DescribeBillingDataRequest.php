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
 * @method string getStartTime() Obtain Start time of the query, e.g., 2018-09-04 10:40:00.
The specified start time will be rounded down based on the granularity parameter `Interval`. For example, if you set the start time to 2018-09-04 10:40:00 with 1-hour granularity, the time will be rounded down to 2018-09-04 10:00:00.
The period between the start time and end time can be up to 90 days.
 * @method void setStartTime(string $StartTime) Set Start time of the query, e.g., 2018-09-04 10:40:00.
The specified start time will be rounded down based on the granularity parameter `Interval`. For example, if you set the start time to 2018-09-04 10:40:00 with 1-hour granularity, the time will be rounded down to 2018-09-04 10:00:00.
The period between the start time and end time can be up to 90 days.
 * @method string getEndTime() Obtain End time of the query, e.g. 2018-09-04 10:40:00.
The specified end time will be rounded down based on the granularity parameter `Interval`. For example, if you set the end time to 2018-09-04 10:40:00 with 1-hour granularity, the time will be rounded down to 2018-09-04 10:00:00.
The period between the start time and end time can be up to 90 days.
 * @method void setEndTime(string $EndTime) Set End time of the query, e.g. 2018-09-04 10:40:00.
The specified end time will be rounded down based on the granularity parameter `Interval`. For example, if you set the end time to 2018-09-04 10:40:00 with 1-hour granularity, the time will be rounded down to 2018-09-04 10:00:00.
The period between the start time and end time can be up to 90 days.
 * @method string getInterval() Obtain Time granularity, which can be:
`min`: 1-minute granularity. The query period cannot exceed 24 hours.
`5min`: 5-minute granularity. The query range cannot exceed 31 days.
`hour`: 1-hour granularity. The query period cannot exceed 31 days.
`day`: 1-day granularity. The query period cannot exceed 31 days.

`min` is not supported if the `Area` field is `overseas`.
 * @method void setInterval(string $Interval) Set Time granularity, which can be:
`min`: 1-minute granularity. The query period cannot exceed 24 hours.
`5min`: 5-minute granularity. The query range cannot exceed 31 days.
`hour`: 1-hour granularity. The query period cannot exceed 31 days.
`day`: 1-day granularity. The query period cannot exceed 31 days.

`min` is not supported if the `Area` field is `overseas`.
 * @method string getDomain() Obtain Domain name whose billing data is to be queried
 * @method void setDomain(string $Domain) Set Domain name whose billing data is to be queried
 * @method integer getProject() Obtain Specifies the project ID to be queried. [Check project ID in the console](https://console.cloud.tencent.com/project)
If the `Domain` parameter is passed in, the `Proejct` parameter is ignored. Only the billing data of the specified domain name is returned. 
 * @method void setProject(integer $Project) Set Specifies the project ID to be queried. [Check project ID in the console](https://console.cloud.tencent.com/project)
If the `Domain` parameter is passed in, the `Proejct` parameter is ignored. Only the billing data of the specified domain name is returned. 
 * @method string getArea() Obtain Acceleration region whose billing data is to be queried:
`mainland`: Regions within the Chinese mainland
`overseas`: Regions outside the Chinese mainland
If this parameter is left empty, `mainland` will be used by default
 * @method void setArea(string $Area) Set Acceleration region whose billing data is to be queried:
`mainland`: Regions within the Chinese mainland
`overseas`: Regions outside the Chinese mainland
If this parameter is left empty, `mainland` will be used by default
 * @method integer getDistrict() Obtain Country/region to be queried if `Area` is `overseas`
To view codes of provinces or countries/regions, see [Province Code Mappings](https://intl.cloud.tencent.com/document/product/228/6316?from_cn_redirect=1#.E7.9C.81.E4.BB.BD.E6.98.A0.E5.B0.84)
If this parameter is left empty, all countries/regions will be queried
 * @method void setDistrict(integer $District) Set Country/region to be queried if `Area` is `overseas`
To view codes of provinces or countries/regions, see [Province Code Mappings](https://intl.cloud.tencent.com/document/product/228/6316?from_cn_redirect=1#.E7.9C.81.E4.BB.BD.E6.98.A0.E5.B0.84)
If this parameter is left empty, all countries/regions will be queried
 * @method string getMetric() Obtain Billing statistics type
`flux`: Bill by traffic
`bandwidth`: Bill by bandwidth
Default value: `bandwidth`
 * @method void setMetric(string $Metric) Set Billing statistics type
`flux`: Bill by traffic
`bandwidth`: Bill by bandwidth
Default value: `bandwidth`
 * @method string getProduct() Obtain Specifies the product to query, either `cdn` (default) or `ecdn`.
 * @method void setProduct(string $Product) Set Specifies the product to query, either `cdn` (default) or `ecdn`.
 * @method string getTimeZone() Obtain 
 * @method void setTimeZone(string $TimeZone) Set 
 */
class DescribeBillingDataRequest extends AbstractModel
{
    /**
     * @var string Start time of the query, e.g., 2018-09-04 10:40:00.
The specified start time will be rounded down based on the granularity parameter `Interval`. For example, if you set the start time to 2018-09-04 10:40:00 with 1-hour granularity, the time will be rounded down to 2018-09-04 10:00:00.
The period between the start time and end time can be up to 90 days.
     */
    public $StartTime;

    /**
     * @var string End time of the query, e.g. 2018-09-04 10:40:00.
The specified end time will be rounded down based on the granularity parameter `Interval`. For example, if you set the end time to 2018-09-04 10:40:00 with 1-hour granularity, the time will be rounded down to 2018-09-04 10:00:00.
The period between the start time and end time can be up to 90 days.
     */
    public $EndTime;

    /**
     * @var string Time granularity, which can be:
`min`: 1-minute granularity. The query period cannot exceed 24 hours.
`5min`: 5-minute granularity. The query range cannot exceed 31 days.
`hour`: 1-hour granularity. The query period cannot exceed 31 days.
`day`: 1-day granularity. The query period cannot exceed 31 days.

`min` is not supported if the `Area` field is `overseas`.
     */
    public $Interval;

    /**
     * @var string Domain name whose billing data is to be queried
     */
    public $Domain;

    /**
     * @var integer Specifies the project ID to be queried. [Check project ID in the console](https://console.cloud.tencent.com/project)
If the `Domain` parameter is passed in, the `Proejct` parameter is ignored. Only the billing data of the specified domain name is returned. 
     */
    public $Project;

    /**
     * @var string Acceleration region whose billing data is to be queried:
`mainland`: Regions within the Chinese mainland
`overseas`: Regions outside the Chinese mainland
If this parameter is left empty, `mainland` will be used by default
     */
    public $Area;

    /**
     * @var integer Country/region to be queried if `Area` is `overseas`
To view codes of provinces or countries/regions, see [Province Code Mappings](https://intl.cloud.tencent.com/document/product/228/6316?from_cn_redirect=1#.E7.9C.81.E4.BB.BD.E6.98.A0.E5.B0.84)
If this parameter is left empty, all countries/regions will be queried
     */
    public $District;

    /**
     * @var string Billing statistics type
`flux`: Bill by traffic
`bandwidth`: Bill by bandwidth
Default value: `bandwidth`
     */
    public $Metric;

    /**
     * @var string Specifies the product to query, either `cdn` (default) or `ecdn`.
     */
    public $Product;

    /**
     * @var string 
     */
    public $TimeZone;

    /**
     * @param string $StartTime Start time of the query, e.g., 2018-09-04 10:40:00.
The specified start time will be rounded down based on the granularity parameter `Interval`. For example, if you set the start time to 2018-09-04 10:40:00 with 1-hour granularity, the time will be rounded down to 2018-09-04 10:00:00.
The period between the start time and end time can be up to 90 days.
     * @param string $EndTime End time of the query, e.g. 2018-09-04 10:40:00.
The specified end time will be rounded down based on the granularity parameter `Interval`. For example, if you set the end time to 2018-09-04 10:40:00 with 1-hour granularity, the time will be rounded down to 2018-09-04 10:00:00.
The period between the start time and end time can be up to 90 days.
     * @param string $Interval Time granularity, which can be:
`min`: 1-minute granularity. The query period cannot exceed 24 hours.
`5min`: 5-minute granularity. The query range cannot exceed 31 days.
`hour`: 1-hour granularity. The query period cannot exceed 31 days.
`day`: 1-day granularity. The query period cannot exceed 31 days.

`min` is not supported if the `Area` field is `overseas`.
     * @param string $Domain Domain name whose billing data is to be queried
     * @param integer $Project Specifies the project ID to be queried. [Check project ID in the console](https://console.cloud.tencent.com/project)
If the `Domain` parameter is passed in, the `Proejct` parameter is ignored. Only the billing data of the specified domain name is returned. 
     * @param string $Area Acceleration region whose billing data is to be queried:
`mainland`: Regions within the Chinese mainland
`overseas`: Regions outside the Chinese mainland
If this parameter is left empty, `mainland` will be used by default
     * @param integer $District Country/region to be queried if `Area` is `overseas`
To view codes of provinces or countries/regions, see [Province Code Mappings](https://intl.cloud.tencent.com/document/product/228/6316?from_cn_redirect=1#.E7.9C.81.E4.BB.BD.E6.98.A0.E5.B0.84)
If this parameter is left empty, all countries/regions will be queried
     * @param string $Metric Billing statistics type
`flux`: Bill by traffic
`bandwidth`: Bill by bandwidth
Default value: `bandwidth`
     * @param string $Product Specifies the product to query, either `cdn` (default) or `ecdn`.
     * @param string $TimeZone 
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

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }
    }
}
