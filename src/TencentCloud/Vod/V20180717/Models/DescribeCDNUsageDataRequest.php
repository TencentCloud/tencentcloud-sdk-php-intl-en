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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCDNUsageData request structure.
 *
 * @method string getStartTime() Obtain Start date in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setStartTime(string $StartTime) Set Start date in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getEndTime() Obtain End date in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I). The end date must be after the start date.
 * @method void setEndTime(string $EndTime) Set End date in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I). The end date must be after the start date.
 * @method string getDataType() Obtain CDN statistics type. Valid values:
<li>Flux: traffic in bytes.</li>
<li>Bandwidth: bandwidth in bps.</li>
 * @method void setDataType(string $DataType) Set CDN statistics type. Valid values:
<li>Flux: traffic in bytes.</li>
<li>Bandwidth: bandwidth in bps.</li>
 * @method integer getDataInterval() Obtain Time granularity of usage data in minutes. Valid values:
<li>5: 5-minute granularity, which returns the details at the 5-minute granularity within the specified time range.</li>
<li>60: 1-hour granularity, which returns the details at the 1-hour granularity within the specified time range.</li>
<li>1440: 1-day granularity, which returns the details at the 1-day granularity within the specified time range.</li>
Default value: 1440. Data at the 1-day granularity will be returned.
When the value of this field is 1, the total usage of all subapplications (including primary application) are queried by an admin.
 * @method void setDataInterval(integer $DataInterval) Set Time granularity of usage data in minutes. Valid values:
<li>5: 5-minute granularity, which returns the details at the 5-minute granularity within the specified time range.</li>
<li>60: 1-hour granularity, which returns the details at the 1-hour granularity within the specified time range.</li>
<li>1440: 1-day granularity, which returns the details at the 1-day granularity within the specified time range.</li>
Default value: 1440. Data at the 1-day granularity will be returned.
When the value of this field is 1, the total usage of all subapplications (including primary application) are queried by an admin.
 * @method array getDomainNames() Obtain List of domain names. The usage data of up to 20 domain names can be queried at a time. You can specify multiple domain names and query their combined usage data. The usage data of all domain names will be returned by default.
 * @method void setDomainNames(array $DomainNames) Set List of domain names. The usage data of up to 20 domain names can be queried at a time. You can specify multiple domain names and query their combined usage data. The usage data of all domain names will be returned by default.
 * @method integer getSubAppId() Obtain ID of a [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
When the value of this field is 1, the total usage of all subapplications (including primary application) are queried by an admin. In this case, only 1-day granularity is supported.
 * @method void setSubAppId(integer $SubAppId) Set ID of a [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
When the value of this field is 1, the total usage of all subapplications (including primary application) are queried by an admin. In this case, only 1-day granularity is supported.
 */
class DescribeCDNUsageDataRequest extends AbstractModel
{
    /**
     * @var string Start date in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $StartTime;

    /**
     * @var string End date in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I). The end date must be after the start date.
     */
    public $EndTime;

    /**
     * @var string CDN statistics type. Valid values:
<li>Flux: traffic in bytes.</li>
<li>Bandwidth: bandwidth in bps.</li>
     */
    public $DataType;

    /**
     * @var integer Time granularity of usage data in minutes. Valid values:
<li>5: 5-minute granularity, which returns the details at the 5-minute granularity within the specified time range.</li>
<li>60: 1-hour granularity, which returns the details at the 1-hour granularity within the specified time range.</li>
<li>1440: 1-day granularity, which returns the details at the 1-day granularity within the specified time range.</li>
Default value: 1440. Data at the 1-day granularity will be returned.
When the value of this field is 1, the total usage of all subapplications (including primary application) are queried by an admin.
     */
    public $DataInterval;

    /**
     * @var array List of domain names. The usage data of up to 20 domain names can be queried at a time. You can specify multiple domain names and query their combined usage data. The usage data of all domain names will be returned by default.
     */
    public $DomainNames;

    /**
     * @var integer ID of a [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
When the value of this field is 1, the total usage of all subapplications (including primary application) are queried by an admin. In this case, only 1-day granularity is supported.
     */
    public $SubAppId;

    /**
     * @param string $StartTime Start date in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $EndTime End date in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I). The end date must be after the start date.
     * @param string $DataType CDN statistics type. Valid values:
<li>Flux: traffic in bytes.</li>
<li>Bandwidth: bandwidth in bps.</li>
     * @param integer $DataInterval Time granularity of usage data in minutes. Valid values:
<li>5: 5-minute granularity, which returns the details at the 5-minute granularity within the specified time range.</li>
<li>60: 1-hour granularity, which returns the details at the 1-hour granularity within the specified time range.</li>
<li>1440: 1-day granularity, which returns the details at the 1-day granularity within the specified time range.</li>
Default value: 1440. Data at the 1-day granularity will be returned.
When the value of this field is 1, the total usage of all subapplications (including primary application) are queried by an admin.
     * @param array $DomainNames List of domain names. The usage data of up to 20 domain names can be queried at a time. You can specify multiple domain names and query their combined usage data. The usage data of all domain names will be returned by default.
     * @param integer $SubAppId ID of a [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) in VOD. If you need to access a resource in a subapplication, enter the subapplication ID in this field; otherwise, leave it empty.
When the value of this field is 1, the total usage of all subapplications (including primary application) are queried by an admin. In this case, only 1-day granularity is supported.
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

        if (array_key_exists("DataInterval",$param) and $param["DataInterval"] !== null) {
            $this->DataInterval = $param["DataInterval"];
        }

        if (array_key_exists("DomainNames",$param) and $param["DomainNames"] !== null) {
            $this->DomainNames = $param["DomainNames"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
