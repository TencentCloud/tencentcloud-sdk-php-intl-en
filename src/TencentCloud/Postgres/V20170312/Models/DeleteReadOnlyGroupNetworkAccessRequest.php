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
 * DeleteReadOnlyGroupNetworkAccess request structure.
 *
 * @method string getReadOnlyGroupId() Obtain RO group ID in the format of pgro-4t9c6g7k.
 * @method void setReadOnlyGroupId(string $ReadOnlyGroupId) Set RO group ID in the format of pgro-4t9c6g7k.
 * @method string getVpcId() Obtain Unified VPC ID. If you want to delete the classic network, set the parameter to `0`.
 * @method void setVpcId(string $VpcId) Set Unified VPC ID. If you want to delete the classic network, set the parameter to `0`.
 * @method string getSubnetId() Obtain Subnet ID. If you want to delete the classic network, set the parameter to `0`.
 * @method void setSubnetId(string $SubnetId) Set Subnet ID. If you want to delete the classic network, set the parameter to `0`.
 * @method string getVip() Obtain Target VIP.
 * @method void setVip(string $Vip) Set Target VIP.
 */
class DeleteReadOnlyGroupNetworkAccessRequest extends AbstractModel
{
    /**
     * @var string RO group ID in the format of pgro-4t9c6g7k.
     */
    public $ReadOnlyGroupId;

    /**
     * @var string Unified VPC ID. If you want to delete the classic network, set the parameter to `0`.
     */
    public $VpcId;

    /**
     * @var string Subnet ID. If you want to delete the classic network, set the parameter to `0`.
     */
    public $SubnetId;

    /**
     * @var string Target VIP.
     */
    public $Vip;

    /**
     * @param string $ReadOnlyGroupId RO group ID in the format of pgro-4t9c6g7k.
     * @param string $VpcId Unified VPC ID. If you want to delete the classic network, set the parameter to `0`.
     * @param string $SubnetId Subnet ID. If you want to delete the classic network, set the parameter to `0`.
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

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }
    }
}
