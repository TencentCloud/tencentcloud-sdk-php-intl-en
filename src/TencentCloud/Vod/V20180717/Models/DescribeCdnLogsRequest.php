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
 * DescribeCdnLogs request structure.
 *
 * @method string getDomainName() Obtain <p>Domain name.</p>
 * @method void setDomainName(string $DomainName) Set <p>Domain name.</p>
 * @method string getStartTime() Obtain <p>Get log start time point. Use the <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p><p>Parameter format: YYYY-MM-DDThh:mm:ssZ</p>
 * @method void setStartTime(string $StartTime) Set <p>Get log start time point. Use the <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p><p>Parameter format: YYYY-MM-DDThh:mm:ssZ</p>
 * @method string getEndTime() Obtain <p>End time must be greater than start time. Use the <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p><p>Parameter format: YYYY-MM-DDThh:mm:ssZ.</p>
 * @method void setEndTime(string $EndTime) Set <p>End time must be greater than start time. Use the <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p><p>Parameter format: YYYY-MM-DDThh:mm:ssZ.</p>
 * @method integer getSubAppId() Obtain <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b></p>
 * @method integer getLimit() Obtain <p>Maximum number of results returned for pagination pull. Default value: 100; maximum value: 1000.</p>
 * @method void setLimit(integer $Limit) Set <p>Maximum number of results returned for pagination pull. Default value: 100; maximum value: 1000.</p>
 * @method integer getOffset() Obtain <p>Starting offset for pagination pull. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Starting offset for pagination pull. Default value: 0.</p>
 */
class DescribeCdnLogsRequest extends AbstractModel
{
    /**
     * @var string <p>Domain name.</p>
     */
    public $DomainName;

    /**
     * @var string <p>Get log start time point. Use the <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p><p>Parameter format: YYYY-MM-DDThh:mm:ssZ</p>
     */
    public $StartTime;

    /**
     * @var string <p>End time must be greater than start time. Use the <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p><p>Parameter format: YYYY-MM-DDThh:mm:ssZ.</p>
     */
    public $EndTime;

    /**
     * @var integer <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b></p>
     */
    public $SubAppId;

    /**
     * @var integer <p>Maximum number of results returned for pagination pull. Default value: 100; maximum value: 1000.</p>
     */
    public $Limit;

    /**
     * @var integer <p>Starting offset for pagination pull. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @param string $DomainName <p>Domain name.</p>
     * @param string $StartTime <p>Get log start time point. Use the <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p><p>Parameter format: YYYY-MM-DDThh:mm:ssZ</p>
     * @param string $EndTime <p>End time must be greater than start time. Use the <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p><p>Parameter format: YYYY-MM-DDThh:mm:ssZ.</p>
     * @param integer $SubAppId <p><b>VOD <a href="/document/product/266/14574?from_cn_redirect=1">application</a> ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b></p>
     * @param integer $Limit <p>Maximum number of results returned for pagination pull. Default value: 100; maximum value: 1000.</p>
     * @param integer $Offset <p>Starting offset for pagination pull. Default value: 0.</p>
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
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
