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
 * ModifyDefaultDistributionConfig request structure.
 *
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
 * @method string getDomain() Obtain Distribution domain name. The value is a domain name in the VOD domain name list. Leave it empty or fill in the blank to indicate no domain name modification.
 * @method void setDomain(string $Domain) Set Distribution domain name. The value is a domain name in the VOD domain name list. Leave it empty or fill in the blank to indicate no domain name modification.
 * @method string getScheme() Obtain Distribution protocol. Value: HTTP or HTTPS.
 * @method void setScheme(string $Scheme) Set Distribution protocol. Value: HTTP or HTTPS.
 * @method string getPlayKey() Obtain Playback key, consisting of upper- and lower-case letters (a - Z) or numbers (0 - 9), with a length between 8 and 20 characters.
 * @method void setPlayKey(string $PlayKey) Set Playback key, consisting of upper- and lower-case letters (a - Z) or numbers (0 - 9), with a length between 8 and 20 characters.
 */
class ModifyDefaultDistributionConfigRequest extends AbstractModel
{
    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
     */
    public $SubAppId;

    /**
     * @var string Distribution domain name. The value is a domain name in the VOD domain name list. Leave it empty or fill in the blank to indicate no domain name modification.
     */
    public $Domain;

    /**
     * @var string Distribution protocol. Value: HTTP or HTTPS.
     */
    public $Scheme;

    /**
     * @var string Playback key, consisting of upper- and lower-case letters (a - Z) or numbers (0 - 9), with a length between 8 and 20 characters.
     */
    public $PlayKey;

    /**
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications (whether the default application or a newly created application).</b>
     * @param string $Domain Distribution domain name. The value is a domain name in the VOD domain name list. Leave it empty or fill in the blank to indicate no domain name modification.
     * @param string $Scheme Distribution protocol. Value: HTTP or HTTPS.
     * @param string $PlayKey Playback key, consisting of upper- and lower-case letters (a - Z) or numbers (0 - 9), with a length between 8 and 20 characters.
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Scheme",$param) and $param["Scheme"] !== null) {
            $this->Scheme = $param["Scheme"];
        }

        if (array_key_exists("PlayKey",$param) and $param["PlayKey"] !== null) {
            $this->PlayKey = $param["PlayKey"];
        }
    }
}
