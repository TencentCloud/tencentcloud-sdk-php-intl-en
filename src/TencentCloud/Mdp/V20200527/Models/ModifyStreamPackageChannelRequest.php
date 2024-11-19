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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyStreamPackageChannel request structure.
 *
 * @method string getId() Obtain Channel ID.
 * @method void setId(string $Id) Set Channel ID.
 * @method string getName() Obtain New channel name.
 * @method void setName(string $Name) Set New channel name.
 * @method string getProtocol() Obtain New channel protocol. Valid values: HLS, DASH, CMAF.
 * @method void setProtocol(string $Protocol) Set New channel protocol. Valid values: HLS, DASH, CMAF.
 * @method CacheInfo getCacheInfo() Obtain Cache configuration.
 * @method void setCacheInfo(CacheInfo $CacheInfo) Set Cache configuration.
 */
class ModifyStreamPackageChannelRequest extends AbstractModel
{
    /**
     * @var string Channel ID.
     */
    public $Id;

    /**
     * @var string New channel name.
     */
    public $Name;

    /**
     * @var string New channel protocol. Valid values: HLS, DASH, CMAF.
     */
    public $Protocol;

    /**
     * @var CacheInfo Cache configuration.
     */
    public $CacheInfo;

    /**
     * @param string $Id Channel ID.
     * @param string $Name New channel name.
     * @param string $Protocol New channel protocol. Valid values: HLS, DASH, CMAF.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
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
