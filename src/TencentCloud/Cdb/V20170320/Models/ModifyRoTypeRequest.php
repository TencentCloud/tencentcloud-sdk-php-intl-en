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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRoType request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getSrcRoInstType() Obtain The original type of an RO replica. Valid values: `NORMAL` (do not support delayed replication), `DELAY_REPLICATION` (support delayed replication).
 * @method void setSrcRoInstType(string $SrcRoInstType) Set The original type of an RO replica. Valid values: `NORMAL` (do not support delayed replication), `DELAY_REPLICATION` (support delayed replication).
 * @method string getDstRoInstType() Obtain The target type of an RO replica. Valid values: `NORMAL` (do not support delayed replication), `DELAY_REPLICATION` (support delayed replication).
 * @method void setDstRoInstType(string $DstRoInstType) Set The target type of an RO replica. Valid values: `NORMAL` (do not support delayed replication), `DELAY_REPLICATION` (support delayed replication).
 * @method integer getReplicationDelay() Obtain Replication delay in seconds. This parameter is required when a regular RO replica is switched to a delayed one. Value range: 1 to 259200.
 * @method void setReplicationDelay(integer $ReplicationDelay) Set Replication delay in seconds. This parameter is required when a regular RO replica is switched to a delayed one. Value range: 1 to 259200.
 */
class ModifyRoTypeRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string The original type of an RO replica. Valid values: `NORMAL` (do not support delayed replication), `DELAY_REPLICATION` (support delayed replication).
     */
    public $SrcRoInstType;

    /**
     * @var string The target type of an RO replica. Valid values: `NORMAL` (do not support delayed replication), `DELAY_REPLICATION` (support delayed replication).
     */
    public $DstRoInstType;

    /**
     * @var integer Replication delay in seconds. This parameter is required when a regular RO replica is switched to a delayed one. Value range: 1 to 259200.
     */
    public $ReplicationDelay;

    /**
     * @param string $InstanceId Instance ID
     * @param string $SrcRoInstType The original type of an RO replica. Valid values: `NORMAL` (do not support delayed replication), `DELAY_REPLICATION` (support delayed replication).
     * @param string $DstRoInstType The target type of an RO replica. Valid values: `NORMAL` (do not support delayed replication), `DELAY_REPLICATION` (support delayed replication).
     * @param integer $ReplicationDelay Replication delay in seconds. This parameter is required when a regular RO replica is switched to a delayed one. Value range: 1 to 259200.
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

        if (array_key_exists("SrcRoInstType",$param) and $param["SrcRoInstType"] !== null) {
            $this->SrcRoInstType = $param["SrcRoInstType"];
        }

        if (array_key_exists("DstRoInstType",$param) and $param["DstRoInstType"] !== null) {
            $this->DstRoInstType = $param["DstRoInstType"];
        }

        if (array_key_exists("ReplicationDelay",$param) and $param["ReplicationDelay"] !== null) {
            $this->ReplicationDelay = $param["ReplicationDelay"];
        }
    }
}
