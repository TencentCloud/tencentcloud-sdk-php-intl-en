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
 * AddClusterSlaveZone request structure.
 *
 * @method string getClusterId() Obtain Cluster ID.
 * @method void setClusterId(string $ClusterId) Set Cluster ID.
 * @method string getSlaveZone() Obtain Replica AZ.
 * @method void setSlaveZone(string $SlaveZone) Set Replica AZ.
 * @method string getBinlogSyncWay() Obtain Binlog sync mode. Default value: async. Optional values: sync, semisync, async.
 * @method void setBinlogSyncWay(string $BinlogSyncWay) Set Binlog sync mode. Default value: async. Optional values: sync, semisync, async.
 * @method integer getSemiSyncTimeout() Obtain Semi-sync timeout period in milliseconds. To ensure business stability, semi-sync replication has a degradation logic. When the primary availability zone cluster waits for the secondary availability zone cluster to confirm a transaction and exceeds the timeout period, the replication method will degrade to asynchronous replication. The minimum value is set to 1000 ms, support up to 4294967295 ms, and defaults to 10000 ms.
 * @method void setSemiSyncTimeout(integer $SemiSyncTimeout) Set Semi-sync timeout period in milliseconds. To ensure business stability, semi-sync replication has a degradation logic. When the primary availability zone cluster waits for the secondary availability zone cluster to confirm a transaction and exceeds the timeout period, the replication method will degrade to asynchronous replication. The minimum value is set to 1000 ms, support up to 4294967295 ms, and defaults to 10000 ms.
 */
class AddClusterSlaveZoneRequest extends AbstractModel
{
    /**
     * @var string Cluster ID.
     */
    public $ClusterId;

    /**
     * @var string Replica AZ.
     */
    public $SlaveZone;

    /**
     * @var string Binlog sync mode. Default value: async. Optional values: sync, semisync, async.
     */
    public $BinlogSyncWay;

    /**
     * @var integer Semi-sync timeout period in milliseconds. To ensure business stability, semi-sync replication has a degradation logic. When the primary availability zone cluster waits for the secondary availability zone cluster to confirm a transaction and exceeds the timeout period, the replication method will degrade to asynchronous replication. The minimum value is set to 1000 ms, support up to 4294967295 ms, and defaults to 10000 ms.
     */
    public $SemiSyncTimeout;

    /**
     * @param string $ClusterId Cluster ID.
     * @param string $SlaveZone Replica AZ.
     * @param string $BinlogSyncWay Binlog sync mode. Default value: async. Optional values: sync, semisync, async.
     * @param integer $SemiSyncTimeout Semi-sync timeout period in milliseconds. To ensure business stability, semi-sync replication has a degradation logic. When the primary availability zone cluster waits for the secondary availability zone cluster to confirm a transaction and exceeds the timeout period, the replication method will degrade to asynchronous replication. The minimum value is set to 1000 ms, support up to 4294967295 ms, and defaults to 10000 ms.
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

        if (array_key_exists("SlaveZone",$param) and $param["SlaveZone"] !== null) {
            $this->SlaveZone = $param["SlaveZone"];
        }

        if (array_key_exists("BinlogSyncWay",$param) and $param["BinlogSyncWay"] !== null) {
            $this->BinlogSyncWay = $param["BinlogSyncWay"];
        }

        if (array_key_exists("SemiSyncTimeout",$param) and $param["SemiSyncTimeout"] !== null) {
            $this->SemiSyncTimeout = $param["SemiSyncTimeout"];
        }
    }
}
