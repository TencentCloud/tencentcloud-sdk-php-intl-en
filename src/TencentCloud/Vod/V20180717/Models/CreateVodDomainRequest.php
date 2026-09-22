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
 * @method integer getSubAppId() Obtain <b>ID of the on-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>ID of the on-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b>
 * @method string getAccelerateArea() Obtain Regions where CDN acceleration needs to be enabled:
<li>Chinese Mainland: within the Chinese mainland (excluding Hong Kong (China), Macao (China), and Taiwan (China)).</li>
<li>Outside Chinese Mainland: outside the Chinese mainland.</li>
<li>Global: around the world.</li>
If AccelerateArea is not set, VOD will automatically activate CDN acceleration within or outside the Chinese mainland based on the user's regional information in Tencent Cloud Settings. To enable CDN acceleration within the Chinese mainland, the domain must be [ICP filed](https://www.tencentcloud.com/document/product/243/18905?from_cn_redirect=1) first.
 * @method void setAccelerateArea(string $AccelerateArea) Set Regions where CDN acceleration needs to be enabled:
<li>Chinese Mainland: within the Chinese mainland (excluding Hong Kong (China), Macao (China), and Taiwan (China)).</li>
<li>Outside Chinese Mainland: outside the Chinese mainland.</li>
<li>Global: around the world.</li>
If AccelerateArea is not set, VOD will automatically activate CDN acceleration within or outside the Chinese mainland based on the user's regional information in Tencent Cloud Settings. To enable CDN acceleration within the Chinese mainland, the domain must be [ICP filed](https://www.tencentcloud.com/document/product/243/18905?from_cn_redirect=1) first.
 * @method string getType() Obtain Domain type. Valid values: <li>VOD: domain name used to distribute VOD products</li> <li>EdgeOne: domain name used to distribute EdgeOne products</li> If not specified, the default value is VOD.
 * @method void setType(string $Type) Set Domain type. Valid values: <li>VOD: domain name used to distribute VOD products</li> <li>EdgeOne: domain name used to distribute EdgeOne products</li> If not specified, the default value is VOD.
 */
class CreateVodDomainRequest extends AbstractModel
{
    /**
     * @var string Domain name for on-demand acceleration. Note: Filling in wildcard domains is not supported.
     */
    public $Domain;

    /**
     * @var integer <b>ID of the on-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b>
     */
    public $SubAppId;

    /**
     * @var string Regions where CDN acceleration needs to be enabled:
<li>Chinese Mainland: within the Chinese mainland (excluding Hong Kong (China), Macao (China), and Taiwan (China)).</li>
<li>Outside Chinese Mainland: outside the Chinese mainland.</li>
<li>Global: around the world.</li>
If AccelerateArea is not set, VOD will automatically activate CDN acceleration within or outside the Chinese mainland based on the user's regional information in Tencent Cloud Settings. To enable CDN acceleration within the Chinese mainland, the domain must be [ICP filed](https://www.tencentcloud.com/document/product/243/18905?from_cn_redirect=1) first.
     */
    public $AccelerateArea;

    /**
     * @var string Domain type. Valid values: <li>VOD: domain name used to distribute VOD products</li> <li>EdgeOne: domain name used to distribute EdgeOne products</li> If not specified, the default value is VOD.
     */
    public $Type;

    /**
     * @param string $Domain Domain name for on-demand acceleration. Note: Filling in wildcard domains is not supported.
     * @param integer $SubAppId <b>ID of the on-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1). For customers who activate on-demand services after December 25, 2023, this field must be set to the app ID when accessing resources in on-demand applications (whether the default application or a newly created application).</b>
     * @param string $AccelerateArea Regions where CDN acceleration needs to be enabled:
<li>Chinese Mainland: within the Chinese mainland (excluding Hong Kong (China), Macao (China), and Taiwan (China)).</li>
<li>Outside Chinese Mainland: outside the Chinese mainland.</li>
<li>Global: around the world.</li>
If AccelerateArea is not set, VOD will automatically activate CDN acceleration within or outside the Chinese mainland based on the user's regional information in Tencent Cloud Settings. To enable CDN acceleration within the Chinese mainland, the domain must be [ICP filed](https://www.tencentcloud.com/document/product/243/18905?from_cn_redirect=1) first.
     * @param string $Type Domain type. Valid values: <li>VOD: domain name used to distribute VOD products</li> <li>EdgeOne: domain name used to distribute EdgeOne products</li> If not specified, the default value is VOD.
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
