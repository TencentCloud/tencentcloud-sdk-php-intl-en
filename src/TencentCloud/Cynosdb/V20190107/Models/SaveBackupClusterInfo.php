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
 * Legacy backup list.
 *
 * @method integer getBackupId() Obtain Backup id of the deceased.
 * @method void setBackupId(integer $BackupId) Set Backup id of the deceased.
 * @method string getClusterId() Obtain Cluster ID.
 * @method void setClusterId(string $ClusterId) Set Cluster ID.
 * @method string getClusterName() Obtain Cluster name.
 * @method void setClusterName(string $ClusterName) Set Cluster name.
 * @method string getRegion() Obtain Region.
 * @method void setRegion(string $Region) Set Region.
 * @method string getZone() Obtain Availability zone
 * @method void setZone(string $Zone) Set Availability zone
 * @method string getBackupTime() Obtain Backup time
 * @method void setBackupTime(string $BackupTime) Set Backup time
 * @method string getDbVersion() Obtain Database version.
 * @method void setDbVersion(string $DbVersion) Set Database version.
 * @method string getDbMode() Obtain Db type (NORMAL, SERVERLESS).
 * @method void setDbMode(string $DbMode) Set Db type (NORMAL, SERVERLESS).
 * @method string getClusterStatus() Obtain Cluster status.
 * @method void setClusterStatus(string $ClusterStatus) Set Cluster status.
 * @method array getTasks() Obtain Task list.
 * @method void setTasks(array $Tasks) Set Task list.
 */
class SaveBackupClusterInfo extends AbstractModel
{
    /**
     * @var integer Backup id of the deceased.
     */
    public $BackupId;

    /**
     * @var string Cluster ID.
     */
    public $ClusterId;

    /**
     * @var string Cluster name.
     */
    public $ClusterName;

    /**
     * @var string Region.
     */
    public $Region;

    /**
     * @var string Availability zone
     */
    public $Zone;

    /**
     * @var string Backup time
     */
    public $BackupTime;

    /**
     * @var string Database version.
     */
    public $DbVersion;

    /**
     * @var string Db type (NORMAL, SERVERLESS).
     */
    public $DbMode;

    /**
     * @var string Cluster status.
     */
    public $ClusterStatus;

    /**
     * @var array Task list.
     */
    public $Tasks;

    /**
     * @param integer $BackupId Backup id of the deceased.
     * @param string $ClusterId Cluster ID.
     * @param string $ClusterName Cluster name.
     * @param string $Region Region.
     * @param string $Zone Availability zone
     * @param string $BackupTime Backup time
     * @param string $DbVersion Database version.
     * @param string $DbMode Db type (NORMAL, SERVERLESS).
     * @param string $ClusterStatus Cluster status.
     * @param array $Tasks Task list.
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
        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("BackupTime",$param) and $param["BackupTime"] !== null) {
            $this->BackupTime = $param["BackupTime"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }

        if (array_key_exists("DbMode",$param) and $param["DbMode"] !== null) {
            $this->DbMode = $param["DbMode"];
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new ObjectTask();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }
    }
}
