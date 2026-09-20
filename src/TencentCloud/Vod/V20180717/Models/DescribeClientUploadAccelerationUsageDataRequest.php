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
 * DescribeClientUploadAccelerationUsageData request structure.
 *
 * @method string getStartTime() Obtain Start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
 * @method void setStartTime(string $StartTime) Set Start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
 * @method string getEndTime() Obtain End date, which should be greater than or equal to the start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
 * @method void setEndTime(string $EndTime) Set End date, which should be greater than or equal to the start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether in the default application or a newly created application.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether in the default application or a newly created application.</b>
 * @method string getType() Obtain Client upload acceleration type. Valid values:
<li> AccelerationWithHTTP: Upload acceleration over HTTP transmission method.</li>
<li> AccelerationWithQUIC: upload acceleration over QUIC transmission mode.</li>
Default query for the amount of all acceleration types.
 * @method void setType(string $Type) Set Client upload acceleration type. Valid values:
<li> AccelerationWithHTTP: Upload acceleration over HTTP transmission method.</li>
<li> AccelerationWithQUIC: upload acceleration over QUIC transmission mode.</li>
Default query for the amount of all acceleration types.
 */
class DescribeClientUploadAccelerationUsageDataRequest extends AbstractModel
{
    /**
     * @var string Start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
     */
    public $StartTime;

    /**
     * @var string End date, which should be greater than or equal to the start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
     */
    public $EndTime;

    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether in the default application or a newly created application.</b>
     */
    public $SubAppId;

    /**
     * @var string Client upload acceleration type. Valid values:
<li> AccelerationWithHTTP: Upload acceleration over HTTP transmission method.</li>
<li> AccelerationWithQUIC: upload acceleration over QUIC transmission mode.</li>
Default query for the amount of all acceleration types.
     */
    public $Type;

    /**
     * @param string $StartTime Start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
     * @param string $EndTime End date, which should be greater than or equal to the start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether in the default application or a newly created application.</b>
     * @param string $Type Client upload acceleration type. Valid values:
<li> AccelerationWithHTTP: Upload acceleration over HTTP transmission method.</li>
<li> AccelerationWithQUIC: upload acceleration over QUIC transmission mode.</li>
Default query for the amount of all acceleration types.
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
