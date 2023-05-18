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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Snapshot policy
 *
 * @method string getSnapshotPolicyName() Obtain Snapshot policy name
 * @method void setSnapshotPolicyName(string $SnapshotPolicyName) Set Snapshot policy name
 * @method string getBackupType() Obtain Backup policy type. Values: `operate` (Manual backup); `time` (Scheduled backup)
 * @method void setBackupType(string $BackupType) Set Backup policy type. Values: `operate` (Manual backup); `time` (Scheduled backup)
 * @method integer getKeepTime() Obtain Snapshot retention period in days. Range: 1 to 365.
 * @method void setKeepTime(integer $KeepTime) Set Snapshot retention period in days. Range: 1 to 365.
 * @method boolean getCreateNewCos() Obtain Whether to create a new COS bucket. It defaults to `False`.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setCreateNewCos(boolean $CreateNewCos) Set Whether to create a new COS bucket. It defaults to `False`.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getCosRegion() Obtain Region of the COS bucket
 * @method void setCosRegion(string $CosRegion) Set Region of the COS bucket
 * @method string getCosBucket() Obtain COS bucket
 * @method void setCosBucket(string $CosBucket) Set COS bucket
 * @method string getSnapshotPolicyId() Obtain Snapshot policy ID
 * @method void setSnapshotPolicyId(string $SnapshotPolicyId) Set Snapshot policy ID
 * @method array getBackupPolicies() Obtain Scheduled backup policies
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setBackupPolicies(array $BackupPolicies) Set Scheduled backup policies
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getEnable() Obtain Whether to enable the policy. Values: `True` (default), `False`
 * @method void setEnable(boolean $Enable) Set Whether to enable the policy. Values: `True` (default), `False`
 * @method string getCreateTime() Obtain Creation time
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class SnapshotPolicy extends AbstractModel
{
    /**
     * @var string Snapshot policy name
     */
    public $SnapshotPolicyName;

    /**
     * @var string Backup policy type. Values: `operate` (Manual backup); `time` (Scheduled backup)
     */
    public $BackupType;

    /**
     * @var integer Snapshot retention period in days. Range: 1 to 365.
     */
    public $KeepTime;

    /**
     * @var boolean Whether to create a new COS bucket. It defaults to `False`.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $CreateNewCos;

    /**
     * @var string Region of the COS bucket
     */
    public $CosRegion;

    /**
     * @var string COS bucket
     */
    public $CosBucket;

    /**
     * @var string Snapshot policy ID
     */
    public $SnapshotPolicyId;

    /**
     * @var array Scheduled backup policies
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $BackupPolicies;

    /**
     * @var boolean Whether to enable the policy. Values: `True` (default), `False`
     */
    public $Enable;

    /**
     * @var string Creation time
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @param string $SnapshotPolicyName Snapshot policy name
     * @param string $BackupType Backup policy type. Values: `operate` (Manual backup); `time` (Scheduled backup)
     * @param integer $KeepTime Snapshot retention period in days. Range: 1 to 365.
     * @param boolean $CreateNewCos Whether to create a new COS bucket. It defaults to `False`.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $CosRegion Region of the COS bucket
     * @param string $CosBucket COS bucket
     * @param string $SnapshotPolicyId Snapshot policy ID
     * @param array $BackupPolicies Scheduled backup policies
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $Enable Whether to enable the policy. Values: `True` (default), `False`
     * @param string $CreateTime Creation time
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("SnapshotPolicyName",$param) and $param["SnapshotPolicyName"] !== null) {
            $this->SnapshotPolicyName = $param["SnapshotPolicyName"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("KeepTime",$param) and $param["KeepTime"] !== null) {
            $this->KeepTime = $param["KeepTime"];
        }

        if (array_key_exists("CreateNewCos",$param) and $param["CreateNewCos"] !== null) {
            $this->CreateNewCos = $param["CreateNewCos"];
        }

        if (array_key_exists("CosRegion",$param) and $param["CosRegion"] !== null) {
            $this->CosRegion = $param["CosRegion"];
        }

        if (array_key_exists("CosBucket",$param) and $param["CosBucket"] !== null) {
            $this->CosBucket = $param["CosBucket"];
        }

        if (array_key_exists("SnapshotPolicyId",$param) and $param["SnapshotPolicyId"] !== null) {
            $this->SnapshotPolicyId = $param["SnapshotPolicyId"];
        }

        if (array_key_exists("BackupPolicies",$param) and $param["BackupPolicies"] !== null) {
            $this->BackupPolicies = [];
            foreach ($param["BackupPolicies"] as $key => $value){
                $obj = new BackupPolicy();
                $obj->deserialize($value);
                array_push($this->BackupPolicies, $obj);
            }
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
