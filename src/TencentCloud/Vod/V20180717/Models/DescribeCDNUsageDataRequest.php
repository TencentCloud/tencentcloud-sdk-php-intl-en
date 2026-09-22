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
 * @method string getEndTime() Obtain End date, which should be greater than the start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setEndTime(string $EndTime) Set End date, which should be greater than the start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getDataType() Obtain CDN statistics data type. Valid values:
<li>Flux: Traffic, unit: byte.</li>
<li>Bandwidth: bandwidth, in bps.</li>
 * @method void setDataType(string $DataType) Set CDN statistics data type. Valid values:
<li>Flux: Traffic, unit: byte.</li>
<li>Bandwidth: bandwidth, in bps.</li>
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD from December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether it is the default application or a newly created application.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD from December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether it is the default application or a newly created application.</b>
 * @method integer getDataInterval() Obtain Time granularity of usage data. Measurement unit: minute. Valid values:
<li>5: 5 minutes. Return detailed data at a 5-minute granularity within the specified query time.</li>
<li>60: 1-hour granularity, returns data at 1-hour granularity within the specified query time.</li>
<li>1440: day granularity, returns the data of 1-day granularity within the specified query time.</li>
Default value: 1440. The data of day granularity is returned.
 * @method void setDataInterval(integer $DataInterval) Set Time granularity of usage data. Measurement unit: minute. Valid values:
<li>5: 5 minutes. Return detailed data at a 5-minute granularity within the specified query time.</li>
<li>60: 1-hour granularity, returns data at 1-hour granularity within the specified query time.</li>
<li>1440: day granularity, returns the data of 1-day granularity within the specified query time.</li>
Default value: 1440. The data of day granularity is returned.
 * @method array getDomainNames() Obtain Domain name list. Up to 20 domain names can be queried for usage data at a time. Multiple domain names can be specified to query the combined usage data of these domain names. By default, the combined usage data of all domain names is returned.
 * @method void setDomainNames(array $DomainNames) Set Domain name list. Up to 20 domain names can be queried for usage data at a time. Multiple domain names can be specified to query the combined usage data of these domain names. By default, the combined usage data of all domain names is returned.
 */
class DescribeCDNUsageDataRequest extends AbstractModel
{
    /**
     * @var string Start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $StartTime;

    /**
     * @var string End date, which should be greater than the start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $EndTime;

    /**
     * @var string CDN statistics data type. Valid values:
<li>Flux: Traffic, unit: byte.</li>
<li>Bandwidth: bandwidth, in bps.</li>
     */
    public $DataType;

    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD from December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether it is the default application or a newly created application.</b>
     */
    public $SubAppId;

    /**
     * @var integer Time granularity of usage data. Measurement unit: minute. Valid values:
<li>5: 5 minutes. Return detailed data at a 5-minute granularity within the specified query time.</li>
<li>60: 1-hour granularity, returns data at 1-hour granularity within the specified query time.</li>
<li>1440: day granularity, returns the data of 1-day granularity within the specified query time.</li>
Default value: 1440. The data of day granularity is returned.
     */
    public $DataInterval;

    /**
     * @var array Domain name list. Up to 20 domain names can be queried for usage data at a time. Multiple domain names can be specified to query the combined usage data of these domain names. By default, the combined usage data of all domain names is returned.
     */
    public $DomainNames;

    /**
     * @param string $StartTime Start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $EndTime End date, which should be greater than the start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $DataType CDN statistics data type. Valid values:
<li>Flux: Traffic, unit: byte.</li>
<li>Bandwidth: bandwidth, in bps.</li>
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD from December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether it is the default application or a newly created application.</b>
     * @param integer $DataInterval Time granularity of usage data. Measurement unit: minute. Valid values:
<li>5: 5 minutes. Return detailed data at a 5-minute granularity within the specified query time.</li>
<li>60: 1-hour granularity, returns data at 1-hour granularity within the specified query time.</li>
<li>1440: day granularity, returns the data of 1-day granularity within the specified query time.</li>
Default value: 1440. The data of day granularity is returned.
     * @param array $DomainNames Domain name list. Up to 20 domain names can be queried for usage data at a time. Multiple domain names can be specified to query the combined usage data of these domain names. By default, the combined usage data of all domain names is returned.
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
