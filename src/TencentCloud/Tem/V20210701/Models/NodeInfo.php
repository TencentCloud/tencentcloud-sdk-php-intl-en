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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node information
 *
 * @method string getName() Obtain Node name
 * @method void setName(string $Name) Set Node name
 * @method string getZone() Obtain Availability zone of the node
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setZone(string $Zone) Set Availability zone of the node
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getSubnetId() Obtain Node subnet ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSubnetId(string $SubnetId) Set Node subnet ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getAvailableIpCount() Obtain Number of available IPs
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setAvailableIpCount(string $AvailableIpCount) Set Number of available IPs
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getCidr() Obtain CIDR block
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setCidr(string $Cidr) Set CIDR block
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class NodeInfo extends AbstractModel
{
    /**
     * @var string Node name
     */
    public $Name;

    /**
     * @var string Availability zone of the node
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Zone;

    /**
     * @var string Node subnet ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $SubnetId;

    /**
     * @var string Number of available IPs
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $AvailableIpCount;

    /**
     * @var string CIDR block
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Cidr;

    /**
     * @param string $Name Node name
     * @param string $Zone Availability zone of the node
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $SubnetId Node subnet ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $AvailableIpCount Number of available IPs
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $Cidr CIDR block
Note: This field may return `null`, indicating that no valid values can be obtained.
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

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("AvailableIpCount",$param) and $param["AvailableIpCount"] !== null) {
            $this->AvailableIpCount = $param["AvailableIpCount"];
        }

        if (array_key_exists("Cidr",$param) and $param["Cidr"] !== null) {
            $this->Cidr = $param["Cidr"];
        }
    }
}
