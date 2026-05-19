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
 * CreateVodDomain request structure.
 *
 * @method string getDomain() Obtain Domain name for on-demand acceleration. Note: Filling in wildcard domains is not supported.
 * @method void setDomain(string $Domain) Set Domain name for on-demand acceleration. Note: Filling in wildcard domains is not supported.
 * @method integer getSubAppId() Obtain <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method string getAccelerateArea() Obtain Region to enable acceleration. Valid values:
<li>`Chinese Mainland`</li>
<li>`Outside Chinese Mainland`</li>
<li>`Global`</li>
If `AccelerateArea` is not specified, VOD will enable acceleration in or outside Chinese mainland based on the regional information a user has configured with Tencent Cloud.
 * @method void setAccelerateArea(string $AccelerateArea) Set Region to enable acceleration. Valid values:
<li>`Chinese Mainland`</li>
<li>`Outside Chinese Mainland`</li>
<li>`Global`</li>
If `AccelerateArea` is not specified, VOD will enable acceleration in or outside Chinese mainland based on the regional information a user has configured with Tencent Cloud.
 * @method string getType() Obtain Domain type. Valid values: <li>VOD: domain name distributed by the VOD product;</li> <li>EdgeOne: domain name distributed by the EdgeOne product.</li> The default value is VOD.
 * @method void setType(string $Type) Set Domain type. Valid values: <li>VOD: domain name distributed by the VOD product;</li> <li>EdgeOne: domain name distributed by the EdgeOne product.</li> The default value is VOD.
 */
class CreateVodDomainRequest extends AbstractModel
{
    /**
     * @var string Domain name for on-demand acceleration. Note: Filling in wildcard domains is not supported.
     */
    public $Domain;

    /**
     * @var integer <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @var string Region to enable acceleration. Valid values:
<li>`Chinese Mainland`</li>
<li>`Outside Chinese Mainland`</li>
<li>`Global`</li>
If `AccelerateArea` is not specified, VOD will enable acceleration in or outside Chinese mainland based on the regional information a user has configured with Tencent Cloud.
     */
    public $AccelerateArea;

    /**
     * @var string Domain type. Valid values: <li>VOD: domain name distributed by the VOD product;</li> <li>EdgeOne: domain name distributed by the EdgeOne product.</li> The default value is VOD.
     */
    public $Type;

    /**
     * @param string $Domain Domain name for on-demand acceleration. Note: Filling in wildcard domains is not supported.
     * @param integer $SubAppId <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     * @param string $AccelerateArea Region to enable acceleration. Valid values:
<li>`Chinese Mainland`</li>
<li>`Outside Chinese Mainland`</li>
<li>`Global`</li>
If `AccelerateArea` is not specified, VOD will enable acceleration in or outside Chinese mainland based on the regional information a user has configured with Tencent Cloud.
     * @param string $Type Domain type. Valid values: <li>VOD: domain name distributed by the VOD product;</li> <li>EdgeOne: domain name distributed by the EdgeOne product.</li> The default value is VOD.
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("AccelerateArea",$param) and $param["AccelerateArea"] !== null) {
            $this->AccelerateArea = $param["AccelerateArea"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
