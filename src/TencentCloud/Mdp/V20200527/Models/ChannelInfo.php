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
 * Channel information.
 *
 * @method string getId() Obtain Channel ID.
 * @method void setId(string $Id) Set Channel ID.
 * @method string getName() Obtain Channel name.
 * @method void setName(string $Name) Set Channel name.
 * @method string getProtocol() Obtain Channel protocol.
 * @method void setProtocol(string $Protocol) Set Channel protocol.
 * @method PointInfo getPoints() Obtain Channel input and output.
 * @method void setPoints(PointInfo $Points) Set Channel input and output.
 * @method CacheInfo getCacheInfo() Obtain Cache configuration
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setCacheInfo(CacheInfo $CacheInfo) Set Cache configuration
Note: this field may return `null`, indicating that no valid value was found.
 */
class ChannelInfo extends AbstractModel
{
    /**
     * @var string Channel ID.
     */
    public $Id;

    /**
     * @var string Channel name.
     */
    public $Name;

    /**
     * @var string Channel protocol.
     */
    public $Protocol;

    /**
     * @var PointInfo Channel input and output.
     */
    public $Points;

    /**
     * @var CacheInfo Cache configuration
Note: this field may return `null`, indicating that no valid value was found.
     * @deprecated
     */
    public $CacheInfo;

    /**
     * @param string $Id Channel ID.
     * @param string $Name Channel name.
     * @param string $Protocol Channel protocol.
     * @param PointInfo $Points Channel input and output.
     * @param CacheInfo $CacheInfo Cache configuration
Note: this field may return `null`, indicating that no valid value was found.
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

        if (array_key_exists("Points",$param) and $param["Points"] !== null) {
            $this->Points = new PointInfo();
            $this->Points->deserialize($param["Points"]);
        }

        if (array_key_exists("CacheInfo",$param) and $param["CacheInfo"] !== null) {
            $this->CacheInfo = new CacheInfo();
            $this->CacheInfo->deserialize($param["CacheInfo"]);
        }
    }
}
