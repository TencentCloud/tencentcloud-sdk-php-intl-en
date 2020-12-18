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
 * StartDelayReplication request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getDelayReplicationType() Obtain Delayed replication mode. Valid values: `DEFAULT` (replicate according to the specified replication delay), `GTID` (replicate according to the specified GTID), `DUE_TIME` (replicate according to the specified point in time).
 * @method void setDelayReplicationType(string $DelayReplicationType) Set Delayed replication mode. Valid values: `DEFAULT` (replicate according to the specified replication delay), `GTID` (replicate according to the specified GTID), `DUE_TIME` (replicate according to the specified point in time).
 * @method integer getDueTime() Obtain Specified point in time. Default value: 0. The maximum value cannot be later than the current time.
 * @method void setDueTime(integer $DueTime) Set Specified point in time. Default value: 0. The maximum value cannot be later than the current time.
 * @method string getGtid() Obtain Specified GITD. This parameter is required when the delayed replication mode is `GTID`.
 * @method void setGtid(string $Gtid) Set Specified GITD. This parameter is required when the delayed replication mode is `GTID`.
 */
class StartDelayReplicationRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Delayed replication mode. Valid values: `DEFAULT` (replicate according to the specified replication delay), `GTID` (replicate according to the specified GTID), `DUE_TIME` (replicate according to the specified point in time).
     */
    public $DelayReplicationType;

    /**
     * @var integer Specified point in time. Default value: 0. The maximum value cannot be later than the current time.
     */
    public $DueTime;

    /**
     * @var string Specified GITD. This parameter is required when the delayed replication mode is `GTID`.
     */
    public $Gtid;

    /**
     * @param string $InstanceId Instance ID
     * @param string $DelayReplicationType Delayed replication mode. Valid values: `DEFAULT` (replicate according to the specified replication delay), `GTID` (replicate according to the specified GTID), `DUE_TIME` (replicate according to the specified point in time).
     * @param integer $DueTime Specified point in time. Default value: 0. The maximum value cannot be later than the current time.
     * @param string $Gtid Specified GITD. This parameter is required when the delayed replication mode is `GTID`.
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

        if (array_key_exists("DelayReplicationType",$param) and $param["DelayReplicationType"] !== null) {
            $this->DelayReplicationType = $param["DelayReplicationType"];
        }

        if (array_key_exists("DueTime",$param) and $param["DueTime"] !== null) {
            $this->DueTime = $param["DueTime"];
        }

        if (array_key_exists("Gtid",$param) and $param["Gtid"] !== null) {
            $this->Gtid = $param["Gtid"];
        }
    }
}
