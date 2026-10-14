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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Detailed information of availability zones in multi-AZ deployment
 *
 * @method string getZone() Obtain AZ.
 * @method void setZone(string $Zone) Set AZ.
 * @method string getSubnetId() Obtain Subnet ID.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID.
 * @method boolean getHidden() Obtain Whether it is a hidden AZ
 * @method void setHidden(boolean $Hidden) Set Whether it is a hidden AZ
 */
class ZoneDetail extends AbstractModel
{
    /**
     * @var string AZ.
     */
    public $Zone;

    /**
     * @var string Subnet ID.
     */
    public $SubnetId;

    /**
     * @var boolean Whether it is a hidden AZ
     */
    public $Hidden;

    /**
     * @param string $Zone AZ.
     * @param string $SubnetId Subnet ID.
     * @param boolean $Hidden Whether it is a hidden AZ
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Hidden",$param) and $param["Hidden"] !== null) {
            $this->Hidden = $param["Hidden"];
        }
    }
}
