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
 * Node attributes.
 *
 * @method string getZone() Obtain Node AZ.
 * @method void setZone(string $Zone) Set Node AZ.
 * @method string getNodeName() Obtain Node name.
 * @method void setNodeName(string $NodeName) Set Node name.
 * @method string getAddress() Obtain Node access address.
 * @method void setAddress(string $Address) Set Node access address.
 * @method string getWanServiceAddress() Obtain Public network access address (IP address or domain name) of the node. The example value is an IP address.
 * @method void setWanServiceAddress(string $WanServiceAddress) Set Public network access address (IP address or domain name) of the node. The example value is an IP address.
 * @method string getRole() Obtain Node role.
- PRIMARY: primary node.
- SECONDARY: secondary node.
- READONLY: read-only node.
- ARBITER: arbitration node.
 * @method void setRole(string $Role) Set Node role.
- PRIMARY: primary node.
- SECONDARY: secondary node.
- READONLY: read-only node.
- ARBITER: arbitration node.
 * @method boolean getHidden() Obtain Whether the node is a hidden node.
- true: a hidden node.
- false: not a hidden node.
 * @method void setHidden(boolean $Hidden) Set Whether the node is a hidden node.
- true: a hidden node.
- false: not a hidden node.
 * @method string getStatus() Obtain Node status.
- NORMAL: running normally.
- STARTUP: starting.
- STARTUP2: starting and processing the intermediate data.
- RECOVERING: recovering and not available.
- DOWN: offline.
- UNKNOWN: unknown status.
- ROLLBACK: rolling back.
- REMOVED: removed.
 * @method void setStatus(string $Status) Set Node status.
- NORMAL: running normally.
- STARTUP: starting.
- STARTUP2: starting and processing the intermediate data.
- RECOVERING: recovering and not available.
- DOWN: offline.
- UNKNOWN: unknown status.
- ROLLBACK: rolling back.
- REMOVED: removed.
 * @method integer getSlaveDelay() Obtain Delay time of primary-secondary synchronization, in seconds.
 * @method void setSlaveDelay(integer $SlaveDelay) Set Delay time of primary-secondary synchronization, in seconds.
 * @method integer getPriority() Obtain Node priority. Value range: [0, 100]. A larger value indicates a higher priority.
 * @method void setPriority(integer $Priority) Set Node priority. Value range: [0, 100]. A larger value indicates a higher priority.
 * @method integer getVotes() Obtain Node voting right.
- 1: The node has the right to vote.
- 0: The node does not have the right to vote.
 * @method void setVotes(integer $Votes) Set Node voting right.
- 1: The node has the right to vote.
- 0: The node does not have the right to vote.
 * @method array getTags() Obtain Node tag.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Node tag.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getReplicateSetId() Obtain Replica set ID.
 * @method void setReplicateSetId(string $ReplicateSetId) Set Replica set ID.
 */
class NodeProperty extends AbstractModel
{
    /**
     * @var string Node AZ.
     */
    public $Zone;

    /**
     * @var string Node name.
     */
    public $NodeName;

    /**
     * @var string Node access address.
     */
    public $Address;

    /**
     * @var string Public network access address (IP address or domain name) of the node. The example value is an IP address.
     */
    public $WanServiceAddress;

    /**
     * @var string Node role.
- PRIMARY: primary node.
- SECONDARY: secondary node.
- READONLY: read-only node.
- ARBITER: arbitration node.
     */
    public $Role;

    /**
     * @var boolean Whether the node is a hidden node.
- true: a hidden node.
- false: not a hidden node.
     */
    public $Hidden;

    /**
     * @var string Node status.
- NORMAL: running normally.
- STARTUP: starting.
- STARTUP2: starting and processing the intermediate data.
- RECOVERING: recovering and not available.
- DOWN: offline.
- UNKNOWN: unknown status.
- ROLLBACK: rolling back.
- REMOVED: removed.
     */
    public $Status;

    /**
     * @var integer Delay time of primary-secondary synchronization, in seconds.
     */
    public $SlaveDelay;

    /**
     * @var integer Node priority. Value range: [0, 100]. A larger value indicates a higher priority.
     */
    public $Priority;

    /**
     * @var integer Node voting right.
- 1: The node has the right to vote.
- 0: The node does not have the right to vote.
     */
    public $Votes;

    /**
     * @var array Node tag.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var string Replica set ID.
     */
    public $ReplicateSetId;

    /**
     * @param string $Zone Node AZ.
     * @param string $NodeName Node name.
     * @param string $Address Node access address.
     * @param string $WanServiceAddress Public network access address (IP address or domain name) of the node. The example value is an IP address.
     * @param string $Role Node role.
- PRIMARY: primary node.
- SECONDARY: secondary node.
- READONLY: read-only node.
- ARBITER: arbitration node.
     * @param boolean $Hidden Whether the node is a hidden node.
- true: a hidden node.
- false: not a hidden node.
     * @param string $Status Node status.
- NORMAL: running normally.
- STARTUP: starting.
- STARTUP2: starting and processing the intermediate data.
- RECOVERING: recovering and not available.
- DOWN: offline.
- UNKNOWN: unknown status.
- ROLLBACK: rolling back.
- REMOVED: removed.
     * @param integer $SlaveDelay Delay time of primary-secondary synchronization, in seconds.
     * @param integer $Priority Node priority. Value range: [0, 100]. A larger value indicates a higher priority.
     * @param integer $Votes Node voting right.
- 1: The node has the right to vote.
- 0: The node does not have the right to vote.
     * @param array $Tags Node tag.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ReplicateSetId Replica set ID.
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

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("WanServiceAddress",$param) and $param["WanServiceAddress"] !== null) {
            $this->WanServiceAddress = $param["WanServiceAddress"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Hidden",$param) and $param["Hidden"] !== null) {
            $this->Hidden = $param["Hidden"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SlaveDelay",$param) and $param["SlaveDelay"] !== null) {
            $this->SlaveDelay = $param["SlaveDelay"];
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

        if (array_key_exists("ReplicateSetId",$param) and $param["ReplicateSetId"] !== null) {
            $this->ReplicateSetId = $param["ReplicateSetId"];
        }
    }
}
