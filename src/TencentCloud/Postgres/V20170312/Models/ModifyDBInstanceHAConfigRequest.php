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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceHAConfig request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
 * @method string getSyncMode() Obtain Primary-Standby sync mode.
<Li>Semi-Sync: semi-sync</li>.
<Li>Async: asynchronous</li>.

 * @method void setSyncMode(string $SyncMode) Set Primary-Standby sync mode.
<Li>Semi-Sync: semi-sync</li>.
<Li>Async: asynchronous</li>.

 * @method integer getMaxStandbyLatency() Obtain Maximum delayed data volume for high-availability standby server. switchover to primary node is allowed when backup node latency is less than or equal to this value and standby lag time is less than or equal to MaxStandbyLag.
<Li>Unit: byte.</li>.
<Li>Value range: [1073741824, 322122547200]</li>.
 * @method void setMaxStandbyLatency(integer $MaxStandbyLatency) Set Maximum delayed data volume for high-availability standby server. switchover to primary node is allowed when backup node latency is less than or equal to this value and standby lag time is less than or equal to MaxStandbyLag.
<Li>Unit: byte.</li>.
<Li>Value range: [1073741824, 322122547200]</li>.
 * @method integer getMaxStandbyLag() Obtain Maximum delay time for high-availability standby servers. a backup node can switchover to the primary node when its latency is less than or equal to this value and its data volume is less than or equal to MaxStandbyLatency.
<Li>Unit: s.</li>.
<Li>Value range: [5, 10]</li>.
 * @method void setMaxStandbyLag(integer $MaxStandbyLag) Set Maximum delay time for high-availability standby servers. a backup node can switchover to the primary node when its latency is less than or equal to this value and its data volume is less than or equal to MaxStandbyLatency.
<Li>Unit: s.</li>.
<Li>Value range: [5, 10]</li>.
 * @method integer getMaxSyncStandbyLatency() Obtain Maximum data sync lag for standby server. If data lag of the standby node and the delay ime are both less than or equals to the values of `MaxSyncStandbyLatency` and `MaxSyncStandbyLag`, the standby server adopts semi-sync replication; if not, it adopts async replication.
This value is only valid for the instance with `SyncMode` set to `Semi-sync`.
When the semi-sync replication mode of the instance is not allowed to downgrade to async replication, `MaxSyncStandbyLatency` and `MaxSyncStandbyLag` are not required.
When the semi-sync instance is allowed to downgrade to async replication, `MaxSyncStandbyLatency` is required and `MaxSyncStandbyLag` must be left empty for PostgreSQL 9; `MaxSyncStandbyLatency` and MaxSyncStandbyLag` are required for PostgreSQL 10 and later.
 * @method void setMaxSyncStandbyLatency(integer $MaxSyncStandbyLatency) Set Maximum data sync lag for standby server. If data lag of the standby node and the delay ime are both less than or equals to the values of `MaxSyncStandbyLatency` and `MaxSyncStandbyLag`, the standby server adopts semi-sync replication; if not, it adopts async replication.
This value is only valid for the instance with `SyncMode` set to `Semi-sync`.
When the semi-sync replication mode of the instance is not allowed to downgrade to async replication, `MaxSyncStandbyLatency` and `MaxSyncStandbyLag` are not required.
When the semi-sync instance is allowed to downgrade to async replication, `MaxSyncStandbyLatency` is required and `MaxSyncStandbyLag` must be left empty for PostgreSQL 9; `MaxSyncStandbyLatency` and MaxSyncStandbyLag` are required for PostgreSQL 10 and later.
 * @method integer getMaxSyncStandbyLag() Obtain Maximum delay for sync standby server. If the delay time for standby server and the data lag are both less than or equals to the value of `MaxSyncStandbyLag` and `MaxSyncStandbyLatency` respectively, the standby server adopts sync replication mode; if not, it adopts async replication.
This value is only valid for the instance with `SyncMode` set to `Semi-sync`.
When the semi-sync replication mode of the instance is not allowed to downgrade to async replication, `MaxSyncStandbyLatency` and `MaxSyncStandbyLag` are not required.
When the semi-sync instance is allowed to downgrade to async replication, `MaxSyncStandbyLatency` is required and `MaxSyncStandbyLag` must be left empty for PostgreSQL 9; `MaxSyncStandbyLatency` and MaxSyncStandbyLag` are required for PostgreSQL 10 and later.
 * @method void setMaxSyncStandbyLag(integer $MaxSyncStandbyLag) Set Maximum delay for sync standby server. If the delay time for standby server and the data lag are both less than or equals to the value of `MaxSyncStandbyLag` and `MaxSyncStandbyLatency` respectively, the standby server adopts sync replication mode; if not, it adopts async replication.
This value is only valid for the instance with `SyncMode` set to `Semi-sync`.
When the semi-sync replication mode of the instance is not allowed to downgrade to async replication, `MaxSyncStandbyLatency` and `MaxSyncStandbyLag` are not required.
When the semi-sync instance is allowed to downgrade to async replication, `MaxSyncStandbyLatency` is required and `MaxSyncStandbyLag` must be left empty for PostgreSQL 9; `MaxSyncStandbyLatency` and MaxSyncStandbyLag` are required for PostgreSQL 10 and later.
 */
class ModifyDBInstanceHAConfigRequest extends AbstractModel
{
    /**
     * @var string Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
     */
    public $DBInstanceId;

    /**
     * @var string Primary-Standby sync mode.
<Li>Semi-Sync: semi-sync</li>.
<Li>Async: asynchronous</li>.

     */
    public $SyncMode;

    /**
     * @var integer Maximum delayed data volume for high-availability standby server. switchover to primary node is allowed when backup node latency is less than or equal to this value and standby lag time is less than or equal to MaxStandbyLag.
<Li>Unit: byte.</li>.
<Li>Value range: [1073741824, 322122547200]</li>.
     */
    public $MaxStandbyLatency;

    /**
     * @var integer Maximum delay time for high-availability standby servers. a backup node can switchover to the primary node when its latency is less than or equal to this value and its data volume is less than or equal to MaxStandbyLatency.
<Li>Unit: s.</li>.
<Li>Value range: [5, 10]</li>.
     */
    public $MaxStandbyLag;

    /**
     * @var integer Maximum data sync lag for standby server. If data lag of the standby node and the delay ime are both less than or equals to the values of `MaxSyncStandbyLatency` and `MaxSyncStandbyLag`, the standby server adopts semi-sync replication; if not, it adopts async replication.
This value is only valid for the instance with `SyncMode` set to `Semi-sync`.
When the semi-sync replication mode of the instance is not allowed to downgrade to async replication, `MaxSyncStandbyLatency` and `MaxSyncStandbyLag` are not required.
When the semi-sync instance is allowed to downgrade to async replication, `MaxSyncStandbyLatency` is required and `MaxSyncStandbyLag` must be left empty for PostgreSQL 9; `MaxSyncStandbyLatency` and MaxSyncStandbyLag` are required for PostgreSQL 10 and later.
     */
    public $MaxSyncStandbyLatency;

    /**
     * @var integer Maximum delay for sync standby server. If the delay time for standby server and the data lag are both less than or equals to the value of `MaxSyncStandbyLag` and `MaxSyncStandbyLatency` respectively, the standby server adopts sync replication mode; if not, it adopts async replication.
This value is only valid for the instance with `SyncMode` set to `Semi-sync`.
When the semi-sync replication mode of the instance is not allowed to downgrade to async replication, `MaxSyncStandbyLatency` and `MaxSyncStandbyLag` are not required.
When the semi-sync instance is allowed to downgrade to async replication, `MaxSyncStandbyLatency` is required and `MaxSyncStandbyLag` must be left empty for PostgreSQL 9; `MaxSyncStandbyLatency` and MaxSyncStandbyLag` are required for PostgreSQL 10 and later.
     */
    public $MaxSyncStandbyLag;

    /**
     * @param string $DBInstanceId Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
     * @param string $SyncMode Primary-Standby sync mode.
<Li>Semi-Sync: semi-sync</li>.
<Li>Async: asynchronous</li>.

     * @param integer $MaxStandbyLatency Maximum delayed data volume for high-availability standby server. switchover to primary node is allowed when backup node latency is less than or equal to this value and standby lag time is less than or equal to MaxStandbyLag.
<Li>Unit: byte.</li>.
<Li>Value range: [1073741824, 322122547200]</li>.
     * @param integer $MaxStandbyLag Maximum delay time for high-availability standby servers. a backup node can switchover to the primary node when its latency is less than or equal to this value and its data volume is less than or equal to MaxStandbyLatency.
<Li>Unit: s.</li>.
<Li>Value range: [5, 10]</li>.
     * @param integer $MaxSyncStandbyLatency Maximum data sync lag for standby server. If data lag of the standby node and the delay ime are both less than or equals to the values of `MaxSyncStandbyLatency` and `MaxSyncStandbyLag`, the standby server adopts semi-sync replication; if not, it adopts async replication.
This value is only valid for the instance with `SyncMode` set to `Semi-sync`.
When the semi-sync replication mode of the instance is not allowed to downgrade to async replication, `MaxSyncStandbyLatency` and `MaxSyncStandbyLag` are not required.
When the semi-sync instance is allowed to downgrade to async replication, `MaxSyncStandbyLatency` is required and `MaxSyncStandbyLag` must be left empty for PostgreSQL 9; `MaxSyncStandbyLatency` and MaxSyncStandbyLag` are required for PostgreSQL 10 and later.
     * @param integer $MaxSyncStandbyLag Maximum delay for sync standby server. If the delay time for standby server and the data lag are both less than or equals to the value of `MaxSyncStandbyLag` and `MaxSyncStandbyLatency` respectively, the standby server adopts sync replication mode; if not, it adopts async replication.
This value is only valid for the instance with `SyncMode` set to `Semi-sync`.
When the semi-sync replication mode of the instance is not allowed to downgrade to async replication, `MaxSyncStandbyLatency` and `MaxSyncStandbyLag` are not required.
When the semi-sync instance is allowed to downgrade to async replication, `MaxSyncStandbyLatency` is required and `MaxSyncStandbyLag` must be left empty for PostgreSQL 9; `MaxSyncStandbyLatency` and MaxSyncStandbyLag` are required for PostgreSQL 10 and later.
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("SyncMode",$param) and $param["SyncMode"] !== null) {
            $this->SyncMode = $param["SyncMode"];
        }

        if (array_key_exists("MaxStandbyLatency",$param) and $param["MaxStandbyLatency"] !== null) {
            $this->MaxStandbyLatency = $param["MaxStandbyLatency"];
        }

        if (array_key_exists("MaxStandbyLag",$param) and $param["MaxStandbyLag"] !== null) {
            $this->MaxStandbyLag = $param["MaxStandbyLag"];
        }

        if (array_key_exists("MaxSyncStandbyLatency",$param) and $param["MaxSyncStandbyLatency"] !== null) {
            $this->MaxSyncStandbyLatency = $param["MaxSyncStandbyLatency"];
        }

        if (array_key_exists("MaxSyncStandbyLag",$param) and $param["MaxSyncStandbyLag"] !== null) {
            $this->MaxSyncStandbyLag = $param["MaxSyncStandbyLag"];
        }
    }
}
