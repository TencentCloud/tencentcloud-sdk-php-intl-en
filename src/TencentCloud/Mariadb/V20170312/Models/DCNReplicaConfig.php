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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DCN configuration
 *
 * @method string getRoReplicationMode() Obtain DCN running status. Valid values: `START` (running), `STOP` (pause)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRoReplicationMode(string $RoReplicationMode) Set DCN running status. Valid values: `START` (running), `STOP` (pause)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDelayReplicationType() Obtain Delayed replication type. Valid values: `DEFAULT` (no delay), `DUE_TIME` (specified replication time)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDelayReplicationType(string $DelayReplicationType) Set Delayed replication type. Valid values: `DEFAULT` (no delay), `DUE_TIME` (specified replication time)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDueTime() Obtain Specified time for delayed replication
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDueTime(string $DueTime) Set Specified time for delayed replication
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getReplicationDelay() Obtain The number of seconds to delay the replication
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReplicationDelay(integer $ReplicationDelay) Set The number of seconds to delay the replication
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DCNReplicaConfig extends AbstractModel
{
    /**
     * @var string DCN running status. Valid values: `START` (running), `STOP` (pause)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RoReplicationMode;

    /**
     * @var string Delayed replication type. Valid values: `DEFAULT` (no delay), `DUE_TIME` (specified replication time)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DelayReplicationType;

    /**
     * @var string Specified time for delayed replication
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DueTime;

    /**
     * @var integer The number of seconds to delay the replication
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReplicationDelay;

    /**
     * @param string $RoReplicationMode DCN running status. Valid values: `START` (running), `STOP` (pause)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DelayReplicationType Delayed replication type. Valid values: `DEFAULT` (no delay), `DUE_TIME` (specified replication time)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DueTime Specified time for delayed replication
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ReplicationDelay The number of seconds to delay the replication
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("RoReplicationMode",$param) and $param["RoReplicationMode"] !== null) {
            $this->RoReplicationMode = $param["RoReplicationMode"];
        }

        if (array_key_exists("DelayReplicationType",$param) and $param["DelayReplicationType"] !== null) {
            $this->DelayReplicationType = $param["DelayReplicationType"];
        }

        if (array_key_exists("DueTime",$param) and $param["DueTime"] !== null) {
            $this->DueTime = $param["DueTime"];
        }

        if (array_key_exists("ReplicationDelay",$param) and $param["ReplicationDelay"] !== null) {
            $this->ReplicationDelay = $param["ReplicationDelay"];
        }
    }
}
