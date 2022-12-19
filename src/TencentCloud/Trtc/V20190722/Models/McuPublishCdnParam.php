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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The relaying parameters.
 *
 * @method string getPublishCdnUrl() Obtain The URLs of the CDNs to relay to.
 * @method void setPublishCdnUrl(string $PublishCdnUrl) Set The URLs of the CDNs to relay to.
 * @method integer getIsTencentCdn() Obtain Whether to relay to Tencent Cloud’s CDN. `0`: Third-party CDN; `1` (default): Tencent Cloud’s CDN. Relaying to a third-party CDN will incur fees. To avoid unexpected charges, we recommend you pass in a specific value. For details, see the API document.
 * @method void setIsTencentCdn(integer $IsTencentCdn) Set Whether to relay to Tencent Cloud’s CDN. `0`: Third-party CDN; `1` (default): Tencent Cloud’s CDN. Relaying to a third-party CDN will incur fees. To avoid unexpected charges, we recommend you pass in a specific value. For details, see the API document.
 */
class McuPublishCdnParam extends AbstractModel
{
    /**
     * @var string The URLs of the CDNs to relay to.
     */
    public $PublishCdnUrl;

    /**
     * @var integer Whether to relay to Tencent Cloud’s CDN. `0`: Third-party CDN; `1` (default): Tencent Cloud’s CDN. Relaying to a third-party CDN will incur fees. To avoid unexpected charges, we recommend you pass in a specific value. For details, see the API document.
     */
    public $IsTencentCdn;

    /**
     * @param string $PublishCdnUrl The URLs of the CDNs to relay to.
     * @param integer $IsTencentCdn Whether to relay to Tencent Cloud’s CDN. `0`: Third-party CDN; `1` (default): Tencent Cloud’s CDN. Relaying to a third-party CDN will incur fees. To avoid unexpected charges, we recommend you pass in a specific value. For details, see the API document.
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
        if (array_key_exists("PublishCdnUrl",$param) and $param["PublishCdnUrl"] !== null) {
            $this->PublishCdnUrl = $param["PublishCdnUrl"];
        }

        if (array_key_exists("IsTencentCdn",$param) and $param["IsTencentCdn"] !== null) {
            $this->IsTencentCdn = $param["IsTencentCdn"];
        }
    }
}
