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
 * CreateVodDomain request structure.
 *
 * @method string getDomain() Obtain Domain name to add to VOD. Note: a wildcard domain name is not supported.
 * @method void setDomain(string $Domain) Set Domain name to add to VOD. Note: a wildcard domain name is not supported.
 * @method string getAccelerateArea() Obtain Region to enable acceleration. Valid values:
<li>`Chinese Mainland`</li>
<li>`Outside Chinese Mainland`</li>
<li>`Global`</li>
If `AccelerateArea` is not set, VOD will enable acceleration in `Chinese Mainland` or `Outside Chinese Mainland` according to the region set under the user’s Tencent Cloud account. To enable acceleration in Chinese mainland for a domain name, please finish [ICP filing](https://intl.cloud.tencent.com/document/product/243/18905?from_cn_redirect=1) for it first.
 * @method void setAccelerateArea(string $AccelerateArea) Set Region to enable acceleration. Valid values:
<li>`Chinese Mainland`</li>
<li>`Outside Chinese Mainland`</li>
<li>`Global`</li>
If `AccelerateArea` is not set, VOD will enable acceleration in `Chinese Mainland` or `Outside Chinese Mainland` according to the region set under the user’s Tencent Cloud account. To enable acceleration in Chinese mainland for a domain name, please finish [ICP filing](https://intl.cloud.tencent.com/document/product/243/18905?from_cn_redirect=1) for it first.
 * @method integer getSubAppId() Obtain VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.
 * @method void setSubAppId(integer $SubAppId) Set VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.
 */
class CreateVodDomainRequest extends AbstractModel
{
    /**
     * @var string Domain name to add to VOD. Note: a wildcard domain name is not supported.
     */
    public $Domain;

    /**
     * @var string Region to enable acceleration. Valid values:
<li>`Chinese Mainland`</li>
<li>`Outside Chinese Mainland`</li>
<li>`Global`</li>
If `AccelerateArea` is not set, VOD will enable acceleration in `Chinese Mainland` or `Outside Chinese Mainland` according to the region set under the user’s Tencent Cloud account. To enable acceleration in Chinese mainland for a domain name, please finish [ICP filing](https://intl.cloud.tencent.com/document/product/243/18905?from_cn_redirect=1) for it first.
     */
    public $AccelerateArea;

    /**
     * @var integer VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.
     */
    public $SubAppId;

    /**
     * @param string $Domain Domain name to add to VOD. Note: a wildcard domain name is not supported.
     * @param string $AccelerateArea Region to enable acceleration. Valid values:
<li>`Chinese Mainland`</li>
<li>`Outside Chinese Mainland`</li>
<li>`Global`</li>
If `AccelerateArea` is not set, VOD will enable acceleration in `Chinese Mainland` or `Outside Chinese Mainland` according to the region set under the user’s Tencent Cloud account. To enable acceleration in Chinese mainland for a domain name, please finish [ICP filing](https://intl.cloud.tencent.com/document/product/243/18905?from_cn_redirect=1) for it first.
     * @param integer $SubAppId VOD [subapplication](https://intl.cloud.tencent.com/document/product/266/14574?from_cn_redirect=1) ID. If you need to access a resource in a subapplication, set this parameter to the subapplication ID; otherwise, leave it empty.
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

        if (array_key_exists("AccelerateArea",$param) and $param["AccelerateArea"] !== null) {
            $this->AccelerateArea = $param["AccelerateArea"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
