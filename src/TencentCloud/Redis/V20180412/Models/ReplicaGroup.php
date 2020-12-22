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
 * Instance node information
 *
 * @method integer getGroupId() Obtain Node group ID
 * @method void setGroupId(integer $GroupId) Set Node group ID
 * @method string getGroupName() Obtain Node group name
 * @method void setGroupName(string $GroupName) Set Node group name
 * @method string getZoneId() Obtain Node availability zone ID, such as ap-guangzhou-1
 * @method void setZoneId(string $ZoneId) Set Node availability zone ID, such as ap-guangzhou-1
 * @method string getRole() Obtain Node group type. Valid values: `master` (master node group), `replica` (replica node group)
 * @method void setRole(string $Role) Set Node group type. Valid values: `master` (master node group), `replica` (replica node group)
 * @method array getRedisNodes() Obtain The list of nodes in a node group
 * @method void setRedisNodes(array $RedisNodes) Set The list of nodes in a node group
 */
class ReplicaGroup extends AbstractModel
{
    /**
     * @var integer Node group ID
     */
    public $GroupId;

    /**
     * @var string Node group name
     */
    public $GroupName;

    /**
     * @var string Node availability zone ID, such as ap-guangzhou-1
     */
    public $ZoneId;

    /**
     * @var string Node group type. Valid values: `master` (master node group), `replica` (replica node group)
     */
    public $Role;

    /**
     * @var array The list of nodes in a node group
     */
    public $RedisNodes;

    /**
     * @param integer $GroupId Node group ID
     * @param string $GroupName Node group name
     * @param string $ZoneId Node availability zone ID, such as ap-guangzhou-1
     * @param string $Role Node group type. Valid values: `master` (master node group), `replica` (replica node group)
     * @param array $RedisNodes The list of nodes in a node group
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
