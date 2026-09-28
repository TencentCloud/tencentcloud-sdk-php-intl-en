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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClusterSlaveZone request structure.
 *
 * @method string getClusterId() Obtain <p>Cluster Id.</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster Id.</p>
 * @method string getOldSlaveZone() Obtain <p>Old secondary AZ</p>
 * @method void setOldSlaveZone(string $OldSlaveZone) Set <p>Old secondary AZ</p>
 * @method string getNewSlaveZone() Obtain <p>New secondary AZ</p>
 * @method void setNewSlaveZone(string $NewSlaveZone) Set <p>New secondary AZ</p>
 * @method string getBinlogSyncWay() Obtain <p>binlog synchronization mode. Default value: async. Available values: sync, semisync, async</p>
 * @method void setBinlogSyncWay(string $BinlogSyncWay) Set <p>binlog synchronization mode. Default value: async. Available values: sync, semisync, async</p>
 * @method integer getSemiSyncTimeout() Obtain <p>Semi-sync timeout period, in milliseconds. To ensure business stability, semi-sync replication has a degradation logic. If the primary AZ cluster exceeds this timeout period while waiting for the standby AZ cluster to confirm a transaction, the replication method degrades to asynchronous replication. The minimum is set to 1000 ms, with support up to 4294967295 ms. Default: 10000 ms.</p>
 * @method void setSemiSyncTimeout(integer $SemiSyncTimeout) Set <p>Semi-sync timeout period, in milliseconds. To ensure business stability, semi-sync replication has a degradation logic. If the primary AZ cluster exceeds this timeout period while waiting for the standby AZ cluster to confirm a transaction, the replication method degrades to asynchronous replication. The minimum is set to 1000 ms, with support up to 4294967295 ms. Default: 10000 ms.</p>
 */
class ModifyClusterSlaveZoneRequest extends AbstractModel
{
    /**
     * @var string <p>Cluster Id.</p>
     */
    public $ClusterId;

    /**
     * @var string <p>Old secondary AZ</p>
     */
    public $OldSlaveZone;

    /**
     * @var string <p>New secondary AZ</p>
     */
    public $NewSlaveZone;

    /**
     * @var string <p>binlog synchronization mode. Default value: async. Available values: sync, semisync, async</p>
     */
    public $BinlogSyncWay;

    /**
     * @var integer <p>Semi-sync timeout period, in milliseconds. To ensure business stability, semi-sync replication has a degradation logic. If the primary AZ cluster exceeds this timeout period while waiting for the standby AZ cluster to confirm a transaction, the replication method degrades to asynchronous replication. The minimum is set to 1000 ms, with support up to 4294967295 ms. Default: 10000 ms.</p>
     */
    public $SemiSyncTimeout;

    /**
     * @param string $ClusterId <p>Cluster Id.</p>
     * @param string $OldSlaveZone <p>Old secondary AZ</p>
     * @param string $NewSlaveZone <p>New secondary AZ</p>
     * @param string $BinlogSyncWay <p>binlog synchronization mode. Default value: async. Available values: sync, semisync, async</p>
     * @param integer $SemiSyncTimeout <p>Semi-sync timeout period, in milliseconds. To ensure business stability, semi-sync replication has a degradation logic. If the primary AZ cluster exceeds this timeout period while waiting for the standby AZ cluster to confirm a transaction, the replication method degrades to asynchronous replication. The minimum is set to 1000 ms, with support up to 4294967295 ms. Default: 10000 ms.</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("OldSlaveZone",$param) and $param["OldSlaveZone"] !== null) {
            $this->OldSlaveZone = $param["OldSlaveZone"];
        }

        if (array_key_exists("NewSlaveZone",$param) and $param["NewSlaveZone"] !== null) {
            $this->NewSlaveZone = $param["NewSlaveZone"];
        }

        if (array_key_exists("BinlogSyncWay",$param) and $param["BinlogSyncWay"] !== null) {
            $this->BinlogSyncWay = $param["BinlogSyncWay"];
        }

        if (array_key_exists("SemiSyncTimeout",$param) and $param["SemiSyncTimeout"] !== null) {
            $this->SemiSyncTimeout = $param["SemiSyncTimeout"];
        }
    }
}
