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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UnbindSSAICDNDomainWithChannel request structure.
 *
 * @method string getChannelId() Obtain Channel Id
 * @method void setChannelId(string $ChannelId) Set Channel Id
 * @method string getCdnDomain() Obtain The domain name for CDN playback.
 * @method void setCdnDomain(string $CdnDomain) Set The domain name for CDN playback.
 */
class UnbindSSAICDNDomainWithChannelRequest extends AbstractModel
{
    /**
     * @var string Channel Id
     */
    public $ChannelId;

    /**
     * @var string The domain name for CDN playback.
     */
    public $CdnDomain;

    /**
     * @param string $ChannelId Channel Id
     * @param string $CdnDomain The domain name for CDN playback.
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
        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("CdnDomain",$param) and $param["CdnDomain"] !== null) {
            $this->CdnDomain = $param["CdnDomain"];
        }
    }
}
