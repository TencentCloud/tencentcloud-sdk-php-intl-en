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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Consumption group information over kafka protocol
 *
 * @method string getGroup() Obtain Consumer group name
 * @method void setGroup(string $Group) Set Consumer group name
 * @method string getState() Obtain Status.

-Empty: The group has no members but has submitted offsets. All consumers left but retained offsets.
-Dead: The group has no members and no submitted offsets. The group is deleted or has long-term inactivity.
-Stable: Members in the group consume normally with balanced partition allocation. Normal operating status.
-PreparingRebalance: The group is preparing to rebalance. New members join or existing members leave.
-CompletingRebalance: The group is preparing to rebalance. New members join or existing members leave.

 * @method void setState(string $State) Set Status.

-Empty: The group has no members but has submitted offsets. All consumers left but retained offsets.
-Dead: The group has no members and no submitted offsets. The group is deleted or has long-term inactivity.
-Stable: Members in the group consume normally with balanced partition allocation. Normal operating status.
-PreparingRebalance: The group is preparing to rebalance. New members join or existing members leave.
-CompletingRebalance: The group is preparing to rebalance. New members join or existing members leave.

 * @method string getProtocolName() Obtain Partition allocation policy balancing algorithm name.

-Common load balancing algorithms are as follows:
-range: Allocate by partition range
-roundrobin: Poll-based allocation
-sticky: Sticky assignment (avoid unnecessary rebalance)
 * @method void setProtocolName(string $ProtocolName) Set Partition allocation policy balancing algorithm name.

-Common load balancing algorithms are as follows:
-range: Allocate by partition range
-roundrobin: Poll-based allocation
-sticky: Sticky assignment (avoid unnecessary rebalance)
 */
class ConsumerGroup extends AbstractModel
{
    /**
     * @var string Consumer group name
     */
    public $Group;

    /**
     * @var string Status.

-Empty: The group has no members but has submitted offsets. All consumers left but retained offsets.
-Dead: The group has no members and no submitted offsets. The group is deleted or has long-term inactivity.
-Stable: Members in the group consume normally with balanced partition allocation. Normal operating status.
-PreparingRebalance: The group is preparing to rebalance. New members join or existing members leave.
-CompletingRebalance: The group is preparing to rebalance. New members join or existing members leave.

     */
    public $State;

    /**
     * @var string Partition allocation policy balancing algorithm name.

-Common load balancing algorithms are as follows:
-range: Allocate by partition range
-roundrobin: Poll-based allocation
-sticky: Sticky assignment (avoid unnecessary rebalance)
     */
    public $ProtocolName;

    /**
     * @param string $Group Consumer group name
     * @param string $State Status.

-Empty: The group has no members but has submitted offsets. All consumers left but retained offsets.
-Dead: The group has no members and no submitted offsets. The group is deleted or has long-term inactivity.
-Stable: Members in the group consume normally with balanced partition allocation. Normal operating status.
-PreparingRebalance: The group is preparing to rebalance. New members join or existing members leave.
-CompletingRebalance: The group is preparing to rebalance. New members join or existing members leave.

     * @param string $ProtocolName Partition allocation policy balancing algorithm name.

-Common load balancing algorithms are as follows:
-range: Allocate by partition range
-roundrobin: Poll-based allocation
-sticky: Sticky assignment (avoid unnecessary rebalance)
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
        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("ProtocolName",$param) and $param["ProtocolName"] !== null) {
            $this->ProtocolName = $param["ProtocolName"];
        }
    }
}
