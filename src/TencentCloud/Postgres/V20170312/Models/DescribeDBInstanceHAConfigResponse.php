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
 * DescribeDBInstanceHAConfig response structure.
 *
 * @method string getSyncMode() Obtain Primary-Standby sync mode.
<Li>Semi-Sync: semi-sync</li>.
<Li>Async: asynchronous</li>.
 * @method void setSyncMode(string $SyncMode) Set Primary-Standby sync mode.
<Li>Semi-Sync: semi-sync</li>.
<Li>Async: asynchronous</li>.
 * @method integer getMaxStandbyLatency() Obtain Specifies the maximum delayed data volume of the high-availability standby server. the backup node can switchover to the primary node when its latency data volume is less than or equal to this value and its delay time is less than or equal to MaxStandbyLag.
<Li>Unit: byte</li>.
<Li>Value range: [1073741824, 322122547200]</li>.
 * @method void setMaxStandbyLatency(integer $MaxStandbyLatency) Set Specifies the maximum delayed data volume of the high-availability standby server. the backup node can switchover to the primary node when its latency data volume is less than or equal to this value and its delay time is less than or equal to MaxStandbyLag.
<Li>Unit: byte</li>.
<Li>Value range: [1073741824, 322122547200]</li>.
 * @method integer getMaxStandbyLag() Obtain Maximum delay time of the high-availability standby server. the secondary node can be switched to the primary node when the backup node latency is less than or equal to this value and the delayed data volume is less than or equal to MaxStandbyLatency.
<Li>Specifies the unit in seconds.</li>.
<Li>Parameter range: [5, 10].</li>.
 * @method void setMaxStandbyLag(integer $MaxStandbyLag) Set Maximum delay time of the high-availability standby server. the secondary node can be switched to the primary node when the backup node latency is less than or equal to this value and the delayed data volume is less than or equal to MaxStandbyLatency.
<Li>Specifies the unit in seconds.</li>.
<Li>Parameter range: [5, 10].</li>.
 * @method integer getMaxSyncStandbyLatency() Obtain Maximum data sync lag for standby server. If data lag of the standby node and the delay time are both less than or equals to the values of `MaxSyncStandbyLatency` and `MaxSyncStandbyLag` respectively, the standby server adopts semi-sync replication; if not, it adopts async replication.
This value is only valid for the instance with `SyncMode` set to `Semi-sync`.
This field returns null for async instance
and semi-sync (non-downgradable to async) instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxSyncStandbyLatency(integer $MaxSyncStandbyLatency) Set Maximum data sync lag for standby server. If data lag of the standby node and the delay time are both less than or equals to the values of `MaxSyncStandbyLatency` and `MaxSyncStandbyLag` respectively, the standby server adopts semi-sync replication; if not, it adopts async replication.
This value is only valid for the instance with `SyncMode` set to `Semi-sync`.
This field returns null for async instance
and semi-sync (non-downgradable to async) instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxSyncStandbyLag() Obtain Maximum sync delay time for standby server. If the delay time for standby server and the data lag are both less than or equals to the values of `MaxSyncStandbyLag` and `MaxSyncStandbyLatency` respectively, the standby server adopts sync replication mode; if not, it adopts async replication.
This value is only valid for the instance with `SyncMode` set to `Semi-sync`.
This field will not return for async instance
and semi-sync (non-downgradable to async) instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxSyncStandbyLag(integer $MaxSyncStandbyLag) Set Maximum sync delay time for standby server. If the delay time for standby server and the data lag are both less than or equals to the values of `MaxSyncStandbyLag` and `MaxSyncStandbyLatency` respectively, the standby server adopts sync replication mode; if not, it adopts async replication.
This value is only valid for the instance with `SyncMode` set to `Semi-sync`.
This field will not return for async instance
and semi-sync (non-downgradable to async) instance.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeDBInstanceHAConfigResponse extends AbstractModel
{
    /**
     * @var string Primary-Standby sync mode.
<Li>Semi-Sync: semi-sync</li>.
<Li>Async: asynchronous</li>.
     */
    public $SyncMode;

    /**
     * @var integer Specifies the maximum delayed data volume of the high-availability standby server. the backup node can switchover to the primary node when its latency data volume is less than or equal to this value and its delay time is less than or equal to MaxStandbyLag.
<Li>Unit: byte</li>.
<Li>Value range: [1073741824, 322122547200]</li>.
     */
    public $MaxStandbyLatency;

    /**
     * @var integer Maximum delay time of the high-availability standby server. the secondary node can be switched to the primary node when the backup node latency is less than or equal to this value and the delayed data volume is less than or equal to MaxStandbyLatency.
<Li>Specifies the unit in seconds.</li>.
<Li>Parameter range: [5, 10].</li>.
     */
    public $MaxStandbyLag;

    /**
     * @var integer Maximum data sync lag for standby server. If data lag of the standby node and the delay time are both less than or equals to the values of `MaxSyncStandbyLatency` and `MaxSyncStandbyLag` respectively, the standby server adopts semi-sync replication; if not, it adopts async replication.
This value is only valid for the instance with `SyncMode` set to `Semi-sync`.
This field returns null for async instance
and semi-sync (non-downgradable to async) instance.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxSyncStandbyLatency;

    /**
     * @var integer Maximum sync delay time for standby server. If the delay time for standby server and the data lag are both less than or equals to the values of `MaxSyncStandbyLag` and `MaxSyncStandbyLatency` respectively, the standby server adopts sync replication mode; if not, it adopts async replication.
This value is only valid for the instance with `SyncMode` set to `Semi-sync`.
This field will not return for async instance
and semi-sync (non-downgradable to async) instance.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxSyncStandbyLag;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $SyncMode Primary-Standby sync mode.
<Li>Semi-Sync: semi-sync</li>.
<Li>Async: asynchronous</li>.
     * @param integer $MaxStandbyLatency Specifies the maximum delayed data volume of the high-availability standby server. the backup node can switchover to the primary node when its latency data volume is less than or equal to this value and its delay time is less than or equal to MaxStandbyLag.
<Li>Unit: byte</li>.
<Li>Value range: [1073741824, 322122547200]</li>.
     * @param integer $MaxStandbyLag Maximum delay time of the high-availability standby server. the secondary node can be switched to the primary node when the backup node latency is less than or equal to this value and the delayed data volume is less than or equal to MaxStandbyLatency.
<Li>Specifies the unit in seconds.</li>.
<Li>Parameter range: [5, 10].</li>.
     * @param integer $MaxSyncStandbyLatency Maximum data sync lag for standby server. If data lag of the standby node and the delay time are both less than or equals to the values of `MaxSyncStandbyLatency` and `MaxSyncStandbyLag` respectively, the standby server adopts semi-sync replication; if not, it adopts async replication.
This value is only valid for the instance with `SyncMode` set to `Semi-sync`.
This field returns null for async instance
and semi-sync (non-downgradable to async) instance.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxSyncStandbyLag Maximum sync delay time for standby server. If the delay time for standby server and the data lag are both less than or equals to the values of `MaxSyncStandbyLag` and `MaxSyncStandbyLatency` respectively, the standby server adopts sync replication mode; if not, it adopts async replication.
This value is only valid for the instance with `SyncMode` set to `Semi-sync`.
This field will not return for async instance
and semi-sync (non-downgradable to async) instance.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
