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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateReadOnlyGroupNetworkAccess request structure.
 *
 * @method string getReadOnlyGroupId() Obtain RO group ID in the format of pgro-4t9c6g7k.
 * @method void setReadOnlyGroupId(string $ReadOnlyGroupId) Set RO group ID in the format of pgro-4t9c6g7k.
 * @method string getVpcId() Obtain Unified VPC ID.
 * @method void setVpcId(string $VpcId) Set Unified VPC ID.
 * @method string getSubnetId() Obtain Subnet ID.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID.
 * @method boolean getIsAssignVip() Obtain Whether to manually assign the VIP. Valid values: `true` (manually assign), `false` (automatically assign).
 * @method void setIsAssignVip(boolean $IsAssignVip) Set Whether to manually assign the VIP. Valid values: `true` (manually assign), `false` (automatically assign).
 * @method string getVip() Obtain Target VIP.
 * @method void setVip(string $Vip) Set Target VIP.
 */
class CreateReadOnlyGroupNetworkAccessRequest extends AbstractModel
{
    /**
     * @var string RO group ID in the format of pgro-4t9c6g7k.
     */
    public $ReadOnlyGroupId;

    /**
     * @var string Unified VPC ID.
     */
    public $VpcId;

    /**
     * @var string Subnet ID.
     */
    public $SubnetId;

    /**
     * @var boolean Whether to manually assign the VIP. Valid values: `true` (manually assign), `false` (automatically assign).
     */
    public $IsAssignVip;

    /**
     * @var string Target VIP.
     */
    public $Vip;

    /**
     * @param string $ReadOnlyGroupId RO group ID in the format of pgro-4t9c6g7k.
     * @param string $VpcId Unified VPC ID.
     * @param string $SubnetId Subnet ID.
     * @param boolean $IsAssignVip Whether to manually assign the VIP. Valid values: `true` (manually assign), `false` (automatically assign).
     * @param string $Vip Target VIP.
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
        if (array_key_exists("ReadOnlyGroupId",$param) and $param["ReadOnlyGroupId"] !== null) {
            $this->ReadOnlyGroupId = $param["ReadOnlyGroupId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("IsAssignVip",$param) and $param["IsAssignVip"] !== null) {
            $this->IsAssignVip = $param["IsAssignVip"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }
    }
}
