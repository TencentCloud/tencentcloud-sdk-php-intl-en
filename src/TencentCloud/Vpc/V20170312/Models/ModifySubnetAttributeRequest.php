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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySubnetAttribute request structure.
 *
 * @method string getSubnetId() Obtain Subnet instance ID, such as `subnet-pxir56ns`.
 * @method void setSubnetId(string $SubnetId) Set Subnet instance ID, such as `subnet-pxir56ns`.
 * @method string getSubnetName() Obtain The subnet name. The maximum length is 60 bytes.
 * @method void setSubnetName(string $SubnetName) Set The subnet name. The maximum length is 60 bytes.
 * @method string getEnableBroadcast() Obtain Whether the subnet has broadcast enabled.
 * @method void setEnableBroadcast(string $EnableBroadcast) Set Whether the subnet has broadcast enabled.
 */
class ModifySubnetAttributeRequest extends AbstractModel
{
    /**
     * @var string Subnet instance ID, such as `subnet-pxir56ns`.
     */
    public $SubnetId;

    /**
     * @var string The subnet name. The maximum length is 60 bytes.
     */
    public $SubnetName;

    /**
     * @var string Whether the subnet has broadcast enabled.
     */
    public $EnableBroadcast;

    /**
     * @param string $SubnetId Subnet instance ID, such as `subnet-pxir56ns`.
     * @param string $SubnetName The subnet name. The maximum length is 60 bytes.
     * @param string $EnableBroadcast Whether the subnet has broadcast enabled.
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
        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("EnableBroadcast",$param) and $param["EnableBroadcast"] !== null) {
            $this->EnableBroadcast = $param["EnableBroadcast"];
        }
    }
}
