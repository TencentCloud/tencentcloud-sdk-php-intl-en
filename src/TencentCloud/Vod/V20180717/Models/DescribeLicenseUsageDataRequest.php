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
 * DescribeLicenseUsageData request structure.
 *
 * @method string getStartTime() Obtain Start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
 * @method void setStartTime(string $StartTime) Set Start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
 * @method string getEndTime() Obtain End date, which must be greater than or equal to the start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
 * @method void setEndTime(string $EndTime) Set End date, which must be greater than or equal to the start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
 * @method string getLicenseType() Obtain License type, defaults to CommercialDRMLicense. Currently supports license types including:
<li> CommercialDRMLicense: enterprise-grade DRM License</li>
 * @method void setLicenseType(string $LicenseType) Set License type, defaults to CommercialDRMLicense. Currently supports license types including:
<li> CommercialDRMLicense: enterprise-grade DRM License</li>
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
 */
class DescribeLicenseUsageDataRequest extends AbstractModel
{
    /**
     * @var string Start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
     */
    public $StartTime;

    /**
     * @var string End date, which must be greater than or equal to the start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
     */
    public $EndTime;

    /**
     * @var string License type, defaults to CommercialDRMLicense. Currently supports license types including:
<li> CommercialDRMLicense: enterprise-grade DRM License</li>
     */
    public $LicenseType;

    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @param string $StartTime Start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
     * @param string $EndTime End date, which must be greater than or equal to the start date. Use the [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#52).
     * @param string $LicenseType License type, defaults to CommercialDRMLicense. Currently supports license types including:
<li> CommercialDRMLicense: enterprise-grade DRM License</li>
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate VOD services after December 25, 2023 must fill this field with the application ID when accessing resources in on-demand applications (whether default or newly created).</b>
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

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
