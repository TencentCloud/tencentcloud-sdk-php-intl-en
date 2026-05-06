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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cloud Native API Gateway Node Information.
 *
 * @method string getNodeId() Obtain Cloud-native gateway node id
 * @method void setNodeId(string $NodeId) Set Cloud-native gateway node id
 * @method string getNodeIp() Obtain Node ip
 * @method void setNodeIp(string $NodeIp) Set Node ip
 * @method string getZoneId() Obtain Zone id
 * @method void setZoneId(string $ZoneId) Set Zone id
 * @method string getZone() Obtain Zone
 * @method void setZone(string $Zone) Set Zone
 * @method string getGroupId() Obtain group ID
 * @method void setGroupId(string $GroupId) Set group ID
 * @method string getGroupName() Obtain Group name
 * @method void setGroupName(string $GroupName) Set Group name
 * @method string getStatus() Obtain Status.
 * @method void setStatus(string $Status) Set Status.
 * @method integer getWeight() Obtain Node weight
 * @method void setWeight(integer $Weight) Set Node weight
 * @method boolean getIsDefaultWeight() Obtain Default weight required or not
 * @method void setIsDefaultWeight(boolean $IsDefaultWeight) Set Default weight required or not
 */
class CloudNativeAPIGatewayNode extends AbstractModel
{
    /**
     * @var string Cloud-native gateway node id
     */
    public $NodeId;

    /**
     * @var string Node ip
     */
    public $NodeIp;

    /**
     * @var string Zone id
     */
    public $ZoneId;

    /**
     * @var string Zone
     */
    public $Zone;

    /**
     * @var string group ID
     */
    public $GroupId;

    /**
     * @var string Group name
     */
    public $GroupName;

    /**
     * @var string Status.
     */
    public $Status;

    /**
     * @var integer Node weight
     */
    public $Weight;

    /**
     * @var boolean Default weight required or not
     */
    public $IsDefaultWeight;

    /**
     * @param string $NodeId Cloud-native gateway node id
     * @param string $NodeIp Node ip
     * @param string $ZoneId Zone id
     * @param string $Zone Zone
     * @param string $GroupId group ID
     * @param string $GroupName Group name
     * @param string $Status Status.
     * @param integer $Weight Node weight
     * @param boolean $IsDefaultWeight Default weight required or not
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
        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("NodeIp",$param) and $param["NodeIp"] !== null) {
            $this->NodeIp = $param["NodeIp"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("IsDefaultWeight",$param) and $param["IsDefaultWeight"] !== null) {
            $this->IsDefaultWeight = $param["IsDefaultWeight"];
        }
    }
}
