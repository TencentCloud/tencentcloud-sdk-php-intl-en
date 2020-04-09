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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * `GroupInfo` response data entity
 *
 * @method string getErrorCode() Obtain Error code. 0: success
 * @method void setErrorCode(string $ErrorCode) Set Error code. 0: success
 * @method string getState() Obtain Group status description (common valid values: Empty, Stable, Dead):
Dead: the consumer group does not exist
Empty: there are currently no consumer subscriptions in the consumer group
PreparingRebalance: the consumer group is currently in `rebalance` state
CompletingRebalance: the consumer group is currently in `rebalance` state
Stable: each consumer in the consumer group has joined and is in stable state
 * @method void setState(string $State) Set Group status description (common valid values: Empty, Stable, Dead):
Dead: the consumer group does not exist
Empty: there are currently no consumer subscriptions in the consumer group
PreparingRebalance: the consumer group is currently in `rebalance` state
CompletingRebalance: the consumer group is currently in `rebalance` state
Stable: each consumer in the consumer group has joined and is in stable state
 * @method string getProtocolType() Obtain The type of protocol selected by the consumer group, which is `consumer` for common consumers. However, some systems use their own protocols; for example, the protocol used by kafka-connect is `connect`. Only with the standard `consumer` protocol can this API get to know the specific assigning method and parse the specific partition assignment
 * @method void setProtocolType(string $ProtocolType) Set The type of protocol selected by the consumer group, which is `consumer` for common consumers. However, some systems use their own protocols; for example, the protocol used by kafka-connect is `connect`. Only with the standard `consumer` protocol can this API get to know the specific assigning method and parse the specific partition assignment
 * @method string getProtocol() Obtain Consumer partition assignment algorithm, such as `range` (which is the default value for the Kafka consumer SDK), `roundrobin`, and `sticky`
 * @method void setProtocol(string $Protocol) Set Consumer partition assignment algorithm, such as `range` (which is the default value for the Kafka consumer SDK), `roundrobin`, and `sticky`
 * @method array getMembers() Obtain This array contains information only if `state` is `Stable` and `protocol_type` is `consumer`
 * @method void setMembers(array $Members) Set This array contains information only if `state` is `Stable` and `protocol_type` is `consumer`
 * @method string getGroup() Obtain Kafka consumer group
 * @method void setGroup(string $Group) Set Kafka consumer group
 */
class GroupInfoResponse extends AbstractModel
{
    /**
     * @var string Error code. 0: success
     */
    public $ErrorCode;

    /**
     * @var string Group status description (common valid values: Empty, Stable, Dead):
Dead: the consumer group does not exist
Empty: there are currently no consumer subscriptions in the consumer group
PreparingRebalance: the consumer group is currently in `rebalance` state
CompletingRebalance: the consumer group is currently in `rebalance` state
Stable: each consumer in the consumer group has joined and is in stable state
     */
    public $State;

    /**
     * @var string The type of protocol selected by the consumer group, which is `consumer` for common consumers. However, some systems use their own protocols; for example, the protocol used by kafka-connect is `connect`. Only with the standard `consumer` protocol can this API get to know the specific assigning method and parse the specific partition assignment
     */
    public $ProtocolType;

    /**
     * @var string Consumer partition assignment algorithm, such as `range` (which is the default value for the Kafka consumer SDK), `roundrobin`, and `sticky`
     */
    public $Protocol;

    /**
     * @var array This array contains information only if `state` is `Stable` and `protocol_type` is `consumer`
     */
    public $Members;

    /**
     * @var string Kafka consumer group
     */
    public $Group;

    /**
     * @param string $ErrorCode Error code. 0: success
     * @param string $State Group status description (common valid values: Empty, Stable, Dead):
Dead: the consumer group does not exist
Empty: there are currently no consumer subscriptions in the consumer group
PreparingRebalance: the consumer group is currently in `rebalance` state
CompletingRebalance: the consumer group is currently in `rebalance` state
Stable: each consumer in the consumer group has joined and is in stable state
     * @param string $ProtocolType The type of protocol selected by the consumer group, which is `consumer` for common consumers. However, some systems use their own protocols; for example, the protocol used by kafka-connect is `connect`. Only with the standard `consumer` protocol can this API get to know the specific assigning method and parse the specific partition assignment
     * @param string $Protocol Consumer partition assignment algorithm, such as `range` (which is the default value for the Kafka consumer SDK), `roundrobin`, and `sticky`
     * @param array $Members This array contains information only if `state` is `Stable` and `protocol_type` is `consumer`
     * @param string $Group Kafka consumer group
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
        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("ProtocolType",$param) and $param["ProtocolType"] !== null) {
            $this->ProtocolType = $param["ProtocolType"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Members",$param) and $param["Members"] !== null) {
            $this->Members = [];
            foreach ($param["Members"] as $key => $value){
                $obj = new GroupInfoMember();
                $obj->deserialize($value);
                array_push($this->Members, $obj);
            }
        }

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }
    }
}
