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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Subnet information
 *
 * @method string getSubnetName() Obtain Subnet information (name).
 * @method void setSubnetName(string $SubnetName) Set Subnet information (name).
 * @method string getSubnetId() Obtain Subnet information (ID).
 * @method void setSubnetId(string $SubnetId) Set Subnet information (ID).
 */
class SubnetInfo extends AbstractModel
{
    /**
     * @var string Subnet information (name).
     */
    public $SubnetName;

    /**
     * @var string Subnet information (ID).
     */
    public $SubnetId;

    /**
     * @param string $SubnetName Subnet information (name).
     * @param string $SubnetId Subnet information (ID).
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
        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }
    }
}
