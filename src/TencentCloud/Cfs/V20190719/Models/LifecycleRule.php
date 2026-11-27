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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Manage rule associated with the lifecycle management policy.
 *
 * @method string getStorageType() Obtain <p>Storage type after data dumping. Valid values: InfrequentAccess: Infrequent Access storage. ColdStorage: Cold storage.</p>
 * @method void setStorageType(string $StorageType) Set <p>Storage type after data dumping. Valid values: InfrequentAccess: Infrequent Access storage. ColdStorage: Cold storage.</p>
 * @method string getFileType() Obtain <p>File type for data dumping. Valid values: BIG_FILE: Very large files. STD_FILE: Standard files. SMALL_FILE: Small files. ALL: All files.</p>
 * @method void setFileType(string $FileType) Set <p>File type for data dumping. Valid values: BIG_FILE: Very large files. STD_FILE: Standard files. SMALL_FILE: Small files. ALL: All files.</p>
 * @method string getAction() Obtain <p>Data dumping behavior. Valid values: Archive: Archive. Noarchive: Do not archive.</p>
 * @method void setAction(string $Action) Set <p>Data dumping behavior. Valid values: Archive: Archive. Noarchive: Do not archive.</p>
 * @method string getInterval() Obtain <p>Trigger time for data dumping. It consists of "DEFAULT_ATIME_" and a number, in the unit of days. Leave this parameter empty when Action is Noarchive.</p>
 * @method void setInterval(string $Interval) Set <p>Trigger time for data dumping. It consists of "DEFAULT_ATIME_" and a number, in the unit of days. Leave this parameter empty when Action is Noarchive.</p>
 * @method string getFileMaxSize() Obtain <p>Maximum size of a file for data dumping. The value must be in the format of "number + unit". Supported units: K (KiB), M (MiB), and G (GiB).</p>
 * @method void setFileMaxSize(string $FileMaxSize) Set <p>Maximum size of a file for data dumping. The value must be in the format of "number + unit". Supported units: K (KiB), M (MiB), and G (GiB).</p>
 * @method string getFileMinSize() Obtain <p>Minimum size of a file for data dumping. The value must be in the format of "number + unit". Supported units: K (KiB), M (MiB), and G (GiB).</p>
 * @method void setFileMinSize(string $FileMinSize) Set <p>Minimum size of a file for data dumping. The value must be in the format of "number + unit". Supported units: K (KiB), M (MiB), and G (GiB).</p>
 * @method string getPolicyType() Obtain <p>Policy type</p>
 * @method void setPolicyType(string $PolicyType) Set <p>Policy type</p>
 * @method integer getExpireThreshold() Obtain <p>Threshold range [10-90]</p>
 * @method void setExpireThreshold(integer $ExpireThreshold) Set <p>Threshold range [10-90]</p>
 * @method integer getTargetThreshold() Obtain <p>Threshold range [10-90]</p>
 * @method void setTargetThreshold(integer $TargetThreshold) Set <p>Threshold range [10-90]</p>
 * @method boolean getIsOverwrite() Obtain <p>Whether to overwrite a file in CFSTurbo if it has the same name as a file in the external storage.</p><p>true: Overwrite.</p><p>false: Do not overwrite (and hot storage data will not be released).</p><p>If this parameter is left empty, the default value is false.</p>
 * @method void setIsOverwrite(boolean $IsOverwrite) Set <p>Whether to overwrite a file in CFSTurbo if it has the same name as a file in the external storage.</p><p>true: Overwrite.</p><p>false: Do not overwrite (and hot storage data will not be released).</p><p>If this parameter is left empty, the default value is false.</p>
 * @method boolean getIsCreateRealTimeSync() Obtain <p>Whether to sync new files to S3 in near real time. true: Near real-time sync (within 30 seconds). false: Sync based on the time configured in the policy. The default value is false. This parameter takes effect only when StorageType=ExternalStorage.</p>
 * @method void setIsCreateRealTimeSync(boolean $IsCreateRealTimeSync) Set <p>Whether to sync new files to S3 in near real time. true: Near real-time sync (within 30 seconds). false: Sync based on the time configured in the policy. The default value is false. This parameter takes effect only when StorageType=ExternalStorage.</p>
 * @method boolean getIsModifyRealTimeSync() Obtain <p>Whether to sync modified files to S3 in near real time. true: Near real-time sync (within 30 seconds) / false: Sync based on the time configured in the policy. The default value is false. This parameter takes effect only when StorageType=ExternalStorage. It is independent of IsOverwrite.</p>
 * @method void setIsModifyRealTimeSync(boolean $IsModifyRealTimeSync) Set <p>Whether to sync modified files to S3 in near real time. true: Near real-time sync (within 30 seconds) / false: Sync based on the time configured in the policy. The default value is false. This parameter takes effect only when StorageType=ExternalStorage. It is independent of IsOverwrite.</p>
 * @method boolean getIsSyncDelete() Obtain <p>Whether to sync file deletion to S3. true: Sync deletion (within 30 seconds) / false: Do not sync deletion. The default value is false. If this parameter is set to true, versioning must be enabled for the destination COS Bucket. This parameter takes effect only when StorageType=ExternalStorage.</p>
 * @method void setIsSyncDelete(boolean $IsSyncDelete) Set <p>Whether to sync file deletion to S3. true: Sync deletion (within 30 seconds) / false: Do not sync deletion. The default value is false. If this parameter is set to true, versioning must be enabled for the destination COS Bucket. This parameter takes effect only when StorageType=ExternalStorage.</p>
 */
class LifecycleRule extends AbstractModel
{
    /**
     * @var string <p>Storage type after data dumping. Valid values: InfrequentAccess: Infrequent Access storage. ColdStorage: Cold storage.</p>
     */
    public $StorageType;

    /**
     * @var string <p>File type for data dumping. Valid values: BIG_FILE: Very large files. STD_FILE: Standard files. SMALL_FILE: Small files. ALL: All files.</p>
     */
    public $FileType;

    /**
     * @var string <p>Data dumping behavior. Valid values: Archive: Archive. Noarchive: Do not archive.</p>
     */
    public $Action;

    /**
     * @var string <p>Trigger time for data dumping. It consists of "DEFAULT_ATIME_" and a number, in the unit of days. Leave this parameter empty when Action is Noarchive.</p>
     */
    public $Interval;

    /**
     * @var string <p>Maximum size of a file for data dumping. The value must be in the format of "number + unit". Supported units: K (KiB), M (MiB), and G (GiB).</p>
     */
    public $FileMaxSize;

    /**
     * @var string <p>Minimum size of a file for data dumping. The value must be in the format of "number + unit". Supported units: K (KiB), M (MiB), and G (GiB).</p>
     */
    public $FileMinSize;

    /**
     * @var string <p>Policy type</p>
     */
    public $PolicyType;

    /**
     * @var integer <p>Threshold range [10-90]</p>
     */
    public $ExpireThreshold;

    /**
     * @var integer <p>Threshold range [10-90]</p>
     */
    public $TargetThreshold;

    /**
     * @var boolean <p>Whether to overwrite a file in CFSTurbo if it has the same name as a file in the external storage.</p><p>true: Overwrite.</p><p>false: Do not overwrite (and hot storage data will not be released).</p><p>If this parameter is left empty, the default value is false.</p>
     */
    public $IsOverwrite;

    /**
     * @var boolean <p>Whether to sync new files to S3 in near real time. true: Near real-time sync (within 30 seconds). false: Sync based on the time configured in the policy. The default value is false. This parameter takes effect only when StorageType=ExternalStorage.</p>
     */
    public $IsCreateRealTimeSync;

    /**
     * @var boolean <p>Whether to sync modified files to S3 in near real time. true: Near real-time sync (within 30 seconds) / false: Sync based on the time configured in the policy. The default value is false. This parameter takes effect only when StorageType=ExternalStorage. It is independent of IsOverwrite.</p>
     */
    public $IsModifyRealTimeSync;

    /**
     * @var boolean <p>Whether to sync file deletion to S3. true: Sync deletion (within 30 seconds) / false: Do not sync deletion. The default value is false. If this parameter is set to true, versioning must be enabled for the destination COS Bucket. This parameter takes effect only when StorageType=ExternalStorage.</p>
     */
    public $IsSyncDelete;

    /**
     * @param string $StorageType <p>Storage type after data dumping. Valid values: InfrequentAccess: Infrequent Access storage. ColdStorage: Cold storage.</p>
     * @param string $FileType <p>File type for data dumping. Valid values: BIG_FILE: Very large files. STD_FILE: Standard files. SMALL_FILE: Small files. ALL: All files.</p>
     * @param string $Action <p>Data dumping behavior. Valid values: Archive: Archive. Noarchive: Do not archive.</p>
     * @param string $Interval <p>Trigger time for data dumping. It consists of "DEFAULT_ATIME_" and a number, in the unit of days. Leave this parameter empty when Action is Noarchive.</p>
     * @param string $FileMaxSize <p>Maximum size of a file for data dumping. The value must be in the format of "number + unit". Supported units: K (KiB), M (MiB), and G (GiB).</p>
     * @param string $FileMinSize <p>Minimum size of a file for data dumping. The value must be in the format of "number + unit". Supported units: K (KiB), M (MiB), and G (GiB).</p>
     * @param string $PolicyType <p>Policy type</p>
     * @param integer $ExpireThreshold <p>Threshold range [10-90]</p>
     * @param integer $TargetThreshold <p>Threshold range [10-90]</p>
     * @param boolean $IsOverwrite <p>Whether to overwrite a file in CFSTurbo if it has the same name as a file in the external storage.</p><p>true: Overwrite.</p><p>false: Do not overwrite (and hot storage data will not be released).</p><p>If this parameter is left empty, the default value is false.</p>
     * @param boolean $IsCreateRealTimeSync <p>Whether to sync new files to S3 in near real time. true: Near real-time sync (within 30 seconds). false: Sync based on the time configured in the policy. The default value is false. This parameter takes effect only when StorageType=ExternalStorage.</p>
     * @param boolean $IsModifyRealTimeSync <p>Whether to sync modified files to S3 in near real time. true: Near real-time sync (within 30 seconds) / false: Sync based on the time configured in the policy. The default value is false. This parameter takes effect only when StorageType=ExternalStorage. It is independent of IsOverwrite.</p>
     * @param boolean $IsSyncDelete <p>Whether to sync file deletion to S3. true: Sync deletion (within 30 seconds) / false: Do not sync deletion. The default value is false. If this parameter is set to true, versioning must be enabled for the destination COS Bucket. This parameter takes effect only when StorageType=ExternalStorage.</p>
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
        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("FileMaxSize",$param) and $param["FileMaxSize"] !== null) {
            $this->FileMaxSize = $param["FileMaxSize"];
        }

        if (array_key_exists("FileMinSize",$param) and $param["FileMinSize"] !== null) {
            $this->FileMinSize = $param["FileMinSize"];
        }

        if (array_key_exists("PolicyType",$param) and $param["PolicyType"] !== null) {
            $this->PolicyType = $param["PolicyType"];
        }

        if (array_key_exists("ExpireThreshold",$param) and $param["ExpireThreshold"] !== null) {
            $this->ExpireThreshold = $param["ExpireThreshold"];
        }

        if (array_key_exists("TargetThreshold",$param) and $param["TargetThreshold"] !== null) {
            $this->TargetThreshold = $param["TargetThreshold"];
        }

        if (array_key_exists("IsOverwrite",$param) and $param["IsOverwrite"] !== null) {
            $this->IsOverwrite = $param["IsOverwrite"];
        }

        if (array_key_exists("IsCreateRealTimeSync",$param) and $param["IsCreateRealTimeSync"] !== null) {
            $this->IsCreateRealTimeSync = $param["IsCreateRealTimeSync"];
        }

        if (array_key_exists("IsModifyRealTimeSync",$param) and $param["IsModifyRealTimeSync"] !== null) {
            $this->IsModifyRealTimeSync = $param["IsModifyRealTimeSync"];
        }

        if (array_key_exists("IsSyncDelete",$param) and $param["IsSyncDelete"] !== null) {
            $this->IsSyncDelete = $param["IsSyncDelete"];
        }
    }
}
