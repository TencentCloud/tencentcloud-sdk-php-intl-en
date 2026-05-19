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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCDNUsageData request structure.
 *
 * @method string getStartTime() Obtain Start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setStartTime(string $StartTime) Set Start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getEndTime() Obtain End date, which must be greater than the start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setEndTime(string $EndTime) Set End date, which must be greater than the start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getDataType() Obtain CDN statistics data type. Valid value:
<li>Flux: Traffic volume, unit: byte.</li>
<li>Bandwidth: bandwidth, in bps.</li>
 * @method void setDataType(string $DataType) Set CDN statistics data type. Valid value:
<li>Flux: Traffic volume, unit: byte.</li>
<li>Bandwidth: bandwidth, in bps.</li>
 * @method integer getSubAppId() Obtain <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method integer getDataInterval() Obtain Time granularity of usage data, unit: minute. Valid values:
<li>5: 5 minutes, return detailed data at a minute granularity for the specified query time.</li>
<li>60: Hourly granularity. Returns the data of 1-hour granularity within the specified query time.</li>
<li>1440: Day granularity. Returns data with day granularity within the specified query time.</li>
The default value is 1440, which returns data with day granularity.
 * @method void setDataInterval(integer $DataInterval) Set Time granularity of usage data, unit: minute. Valid values:
<li>5: 5 minutes, return detailed data at a minute granularity for the specified query time.</li>
<li>60: Hourly granularity. Returns the data of 1-hour granularity within the specified query time.</li>
<li>1440: Day granularity. Returns data with day granularity within the specified query time.</li>
The default value is 1440, which returns data with day granularity.
 * @method array getDomainNames() Obtain Domain name list. Up to 20 domain names can be queried for usage data. Multiple values can be specified to query the superimposed usage data of these domains. Default returns the overlaid usage data of all domains.
 * @method void setDomainNames(array $DomainNames) Set Domain name list. Up to 20 domain names can be queried for usage data. Multiple values can be specified to query the superimposed usage data of these domains. Default returns the overlaid usage data of all domains.
 */
class DescribeCDNUsageDataRequest extends AbstractModel
{
    /**
     * @var string Start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $StartTime;

    /**
     * @var string End date, which must be greater than the start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $EndTime;

    /**
     * @var string CDN statistics data type. Valid value:
<li>Flux: Traffic volume, unit: byte.</li>
<li>Bandwidth: bandwidth, in bps.</li>
     */
    public $DataType;

    /**
     * @var integer <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var integer Time granularity of usage data, unit: minute. Valid values:
<li>5: 5 minutes, return detailed data at a minute granularity for the specified query time.</li>
<li>60: Hourly granularity. Returns the data of 1-hour granularity within the specified query time.</li>
<li>1440: Day granularity. Returns data with day granularity within the specified query time.</li>
The default value is 1440, which returns data with day granularity.
     */
    public $DataInterval;

    /**
     * @var array Domain name list. Up to 20 domain names can be queried for usage data. Multiple values can be specified to query the superimposed usage data of these domains. Default returns the overlaid usage data of all domains.
     */
    public $DomainNames;

    /**
     * @param string $StartTime Start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $EndTime End date, which must be greater than the start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $DataType CDN statistics data type. Valid value:
<li>Flux: Traffic volume, unit: byte.</li>
<li>Bandwidth: bandwidth, in bps.</li>
     * @param integer $SubAppId <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param integer $DataInterval Time granularity of usage data, unit: minute. Valid values:
<li>5: 5 minutes, return detailed data at a minute granularity for the specified query time.</li>
<li>60: Hourly granularity. Returns the data of 1-hour granularity within the specified query time.</li>
<li>1440: Day granularity. Returns data with day granularity within the specified query time.</li>
The default value is 1440, which returns data with day granularity.
     * @param array $DomainNames Domain name list. Up to 20 domain names can be queried for usage data. Multiple values can be specified to query the superimposed usage data of these domains. Default returns the overlaid usage data of all domains.
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

        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            $this->DataType = $param["DataType"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("DataInterval",$param) and $param["DataInterval"] !== null) {
            $this->DataInterval = $param["DataInterval"];
        }

        if (array_key_exists("DomainNames",$param) and $param["DomainNames"] !== null) {
            $this->DomainNames = $param["DomainNames"];
        }
    }
}
