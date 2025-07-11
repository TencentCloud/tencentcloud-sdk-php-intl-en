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
 * CreateStreamPackageChannel request structure.
 *
 * @method string getName() Obtain Channel name.
 * @method void setName(string $Name) Set Channel name.
 * @method string getProtocol() Obtain Channel protocol. Valid values: HLS, DASH, CMAF.
 * @method void setProtocol(string $Protocol) Set Channel protocol. Valid values: HLS, DASH, CMAF.
 * @method CacheInfo getCacheInfo() Obtain Cache configuration.
 * @method void setCacheInfo(CacheInfo $CacheInfo) Set Cache configuration.
 */
class CreateStreamPackageChannelRequest extends AbstractModel
{
    /**
     * @var string Channel name.
     */
    public $Name;

    /**
     * @var string Channel protocol. Valid values: HLS, DASH, CMAF.
     */
    public $Protocol;

    /**
     * @var CacheInfo Cache configuration.
     */
    public $CacheInfo;

    /**
     * @param string $Name Channel name.
     * @param string $Protocol Channel protocol. Valid values: HLS, DASH, CMAF.
     * @param CacheInfo $CacheInfo Cache configuration.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("CacheInfo",$param) and $param["CacheInfo"] !== null) {
            $this->CacheInfo = new CacheInfo();
            $this->CacheInfo->deserialize($param["CacheInfo"]);
        }
    }
}
