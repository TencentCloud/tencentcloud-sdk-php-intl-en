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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of the instance node group
 *
 * @method integer getGroupId() Obtain Node group ID
 * @method void setGroupId(integer $GroupId) Set Node group ID
 * @method string getGroupName() Obtain Node group name, which is empty for the master node
 * @method void setGroupName(string $GroupName) Set Node group name, which is empty for the master node
 * @method string getZoneId() Obtain Node AZ ID, such as ap-guangzhou-1
 * @method void setZoneId(string $ZoneId) Set Node AZ ID, such as ap-guangzhou-1
 * @method string getRole() Obtain Node group type. master: primary node; replica: replica node.
 * @method void setRole(string $Role) Set Node group type. master: primary node; replica: replica node.
 * @method array getRedisNodes() Obtain List of nodes in the node group
 * @method void setRedisNodes(array $RedisNodes) Set List of nodes in the node group
 */
class ReplicaGroup extends AbstractModel
{
    /**
     * @var integer Node group ID
     */
    public $GroupId;

    /**
     * @var string Node group name, which is empty for the master node
     */
    public $GroupName;

    /**
     * @var string Node AZ ID, such as ap-guangzhou-1
     */
    public $ZoneId;

    /**
     * @var string Node group type. master: primary node; replica: replica node.
     */
    public $Role;

    /**
     * @var array List of nodes in the node group
     */
    public $RedisNodes;

    /**
     * @param integer $GroupId Node group ID
     * @param string $GroupName Node group name, which is empty for the master node
     * @param string $ZoneId Node AZ ID, such as ap-guangzhou-1
     * @param string $Role Node group type. master: primary node; replica: replica node.
     * @param array $RedisNodes List of nodes in the node group
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("RedisNodes",$param) and $param["RedisNodes"] !== null) {
            $this->RedisNodes = [];
            foreach ($param["RedisNodes"] as $key => $value){
                $obj = new RedisNode();
                $obj->deserialize($value);
                array_push($this->RedisNodes, $obj);
            }
        }
    }
}
