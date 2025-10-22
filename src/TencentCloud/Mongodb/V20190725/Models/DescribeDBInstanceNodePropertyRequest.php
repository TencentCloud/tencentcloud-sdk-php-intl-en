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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstanceNodeProperty request structure.
 *
 * @method string getInstanceId() Obtain Instance ID. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.
 * @method array getNodeIds() Obtain Node ID. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), go to Node Management, and copy the node ID.
 * @method void setNodeIds(array $NodeIds) Set Node ID. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), go to Node Management, and copy the node ID.
 * @method array getRoles() Obtain Node role. Valid values:
- PRIMARY: primary node.
- SECONDARY: secondary node.
- READONLY: read-only node.
- ARBITER: arbitration node.
 * @method void setRoles(array $Roles) Set Node role. Valid values:
- PRIMARY: primary node.
- SECONDARY: secondary node.
- READONLY: read-only node.
- ARBITER: arbitration node.
 * @method boolean getOnlyHidden() Obtain Whether the node is a hidden node. Default value: false.
 * @method void setOnlyHidden(boolean $OnlyHidden) Set Whether the node is a hidden node. Default value: false.
 * @method integer getPriority() Obtain Priority of the node for electing it as the new primary node. Value range: [0, 100]. A larger value indicates a higher priority.
 * @method void setPriority(integer $Priority) Set Priority of the node for electing it as the new primary node. Value range: [0, 100]. A larger value indicates a higher priority.
 * @method integer getVotes() Obtain Node voting right.- 1: The node has the right to vote.
- 0: The node does not have the right to vote.
 * @method void setVotes(integer $Votes) Set Node voting right.- 1: The node has the right to vote.
- 0: The node does not have the right to vote.
 * @method array getTags() Obtain Node tag.
 * @method void setTags(array $Tags) Set Node tag.
 */
class DescribeDBInstanceNodePropertyRequest extends AbstractModel
{
    /**
     * @var string Instance ID. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.
     */
    public $InstanceId;

    /**
     * @var array Node ID. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), go to Node Management, and copy the node ID.
     */
    public $NodeIds;

    /**
     * @var array Node role. Valid values:
- PRIMARY: primary node.
- SECONDARY: secondary node.
- READONLY: read-only node.
- ARBITER: arbitration node.
     */
    public $Roles;

    /**
     * @var boolean Whether the node is a hidden node. Default value: false.
     */
    public $OnlyHidden;

    /**
     * @var integer Priority of the node for electing it as the new primary node. Value range: [0, 100]. A larger value indicates a higher priority.
     */
    public $Priority;

    /**
     * @var integer Node voting right.- 1: The node has the right to vote.
- 0: The node does not have the right to vote.
     */
    public $Votes;

    /**
     * @var array Node tag.
     */
    public $Tags;

    /**
     * @param string $InstanceId Instance ID. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), and copy the instance ID from the instance list.
     * @param array $NodeIds Node ID. Log in to the [TencentDB for MongoDB console](https://console.cloud.tencent.com/mongodb), go to Node Management, and copy the node ID.
     * @param array $Roles Node role. Valid values:
- PRIMARY: primary node.
- SECONDARY: secondary node.
- READONLY: read-only node.
- ARBITER: arbitration node.
     * @param boolean $OnlyHidden Whether the node is a hidden node. Default value: false.
     * @param integer $Priority Priority of the node for electing it as the new primary node. Value range: [0, 100]. A larger value indicates a higher priority.
     * @param integer $Votes Node voting right.- 1: The node has the right to vote.
- 0: The node does not have the right to vote.
     * @param array $Tags Node tag.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("NodeIds",$param) and $param["NodeIds"] !== null) {
            $this->NodeIds = $param["NodeIds"];
        }

        if (array_key_exists("Roles",$param) and $param["Roles"] !== null) {
            $this->Roles = $param["Roles"];
        }

        if (array_key_exists("OnlyHidden",$param) and $param["OnlyHidden"] !== null) {
            $this->OnlyHidden = $param["OnlyHidden"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Votes",$param) and $param["Votes"] !== null) {
            $this->Votes = $param["Votes"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new NodeTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
