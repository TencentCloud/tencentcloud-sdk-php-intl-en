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
 * Basic information of a file system
 *
 * @method string getCreationTime() Obtain <p>Creation time.</p>
 * @method void setCreationTime(string $CreationTime) Set <p>Creation time.</p>
 * @method string getCreationToken() Obtain <p>User-defined name.</p>
 * @method void setCreationToken(string $CreationToken) Set <p>User-defined name.</p>
 * @method string getFileSystemId() Obtain <p>File system ID.</p>
 * @method void setFileSystemId(string $FileSystemId) Set <p>File system ID.</p>
 * @method string getLifeCycleState() Obtain <p>File system status. Valid values:</p><ul><li>creating: Creating</li><li>mounting: Mounting</li><li>create_failed: Failed to create</li><li>available: Available</li><li>unserviced: Service suspended</li><li>upgrading: Upgrading</li></ul>
 * @method void setLifeCycleState(string $LifeCycleState) Set <p>File system status. Valid values:</p><ul><li>creating: Creating</li><li>mounting: Mounting</li><li>create_failed: Failed to create</li><li>available: Available</li><li>unserviced: Service suspended</li><li>upgrading: Upgrading</li></ul>
 * @method integer getSizeByte() Obtain <p>Used capacity of the file system. Unit: Byte.</p>
 * @method void setSizeByte(integer $SizeByte) Set <p>Used capacity of the file system. Unit: Byte.</p>
 * @method integer getSizeLimit() Obtain <p>File system space limit. Unit: GiB.</p>
 * @method void setSizeLimit(integer $SizeLimit) Set <p>File system space limit. Unit: GiB.</p>
 * @method integer getZoneId() Obtain <p>Region ID.</p>
 * @method void setZoneId(integer $ZoneId) Set <p>Region ID.</p>
 * @method string getZone() Obtain <p>Region name.</p>
 * @method void setZone(string $Zone) Set <p>Region name.</p>
 * @method string getProtocol() Obtain <p>File system protocol type. Valid values: NFS, CIFS, and TURBO.</p>
 * @method void setProtocol(string $Protocol) Set <p>File system protocol type. Valid values: NFS, CIFS, and TURBO.</p>
 * @method string getStorageType() Obtain <p>Storage type. Valid values: HP: General performance; SD: General standard; TP: turbo performance; TB: turbo standard; THP: Throughput.</p>
 * @method void setStorageType(string $StorageType) Set <p>Storage type. Valid values: HP: General performance; SD: General standard; TP: turbo performance; TB: turbo standard; THP: Throughput.</p>
 * @method string getStorageResourcePkg() Obtain <p>Prepaid storage pack bound to the file system.</p>
 * @method void setStorageResourcePkg(string $StorageResourcePkg) Set <p>Prepaid storage pack bound to the file system.</p>
 * @method string getBandwidthResourcePkg() Obtain <p>Prepaid bandwidth pack bound to the file system (not supported yet).</p>
 * @method void setBandwidthResourcePkg(string $BandwidthResourcePkg) Set <p>Prepaid bandwidth pack bound to the file system (not supported yet).</p>
 * @method PGroup getPGroup() Obtain <p>Information of the permission group bound to the file system.</p>
 * @method void setPGroup(PGroup $PGroup) Set <p>Information of the permission group bound to the file system.</p>
 * @method string getFsName() Obtain <p>User-defined name.</p>
 * @method void setFsName(string $FsName) Set <p>User-defined name.</p>
 * @method boolean getEncrypted() Obtain <p>Whether the file system is encrypted. true: encrypted; false: not encrypted.</p>
 * @method void setEncrypted(boolean $Encrypted) Set <p>Whether the file system is encrypted. true: encrypted; false: not encrypted.</p>
 * @method string getKmsKeyId() Obtain <p>Key used for encryption, which can be the key ID or ARN.</p>
 * @method void setKmsKeyId(string $KmsKeyId) Set <p>Key used for encryption, which can be the key ID or ARN.</p>
 * @method integer getAppId() Obtain <p>Application ID.</p>
 * @method void setAppId(integer $AppId) Set <p>Application ID.</p>
 * @method float getBandwidthLimit() Obtain <p>Maximum file system throughput, which is determined by the current used storage capacity of the file system, the bound storage pack, and the throughput pack. Unit: MiB/s.</p>
 * @method void setBandwidthLimit(float $BandwidthLimit) Set <p>Maximum file system throughput, which is determined by the current used storage capacity of the file system, the bound storage pack, and the throughput pack. Unit: MiB/s.</p>
 * @method string getAutoSnapshotPolicyId() Obtain <p>Snapshot policy associated with the file system.</p>
 * @method void setAutoSnapshotPolicyId(string $AutoSnapshotPolicyId) Set <p>Snapshot policy associated with the file system.</p>
 * @method string getSnapStatus() Obtain <p>Snapshot processing status of the file system. snapping: snapshot in progress; normal: normal status.</p>
 * @method void setSnapStatus(string $SnapStatus) Set <p>Snapshot processing status of the file system. snapping: snapshot in progress; normal: normal status.</p>
 * @method integer getCapacity() Obtain <p>Maximum capacity specification of the file system.<br>Unit: GiB.</p>
 * @method void setCapacity(integer $Capacity) Set <p>Maximum capacity specification of the file system.<br>Unit: GiB.</p>
 * @method array getTags() Obtain <p>List of file system tags.</p>
 * @method void setTags(array $Tags) Set <p>List of file system tags.</p>
 * @method string getTieringState() Obtain <p>Lifecycle management status of the file system.<br>NotAvailable: Unavailable.<br>Available: Available.</p>
 * @method void setTieringState(string $TieringState) Set <p>Lifecycle management status of the file system.<br>NotAvailable: Unavailable.<br>Available: Available.</p>
 * @method TieringDetailInfo getTieringDetail() Obtain <p>Tiered storage details.</p>
 * @method void setTieringDetail(TieringDetailInfo $TieringDetail) Set <p>Tiered storage details.</p>
 * @method AutoScaleUpRule getAutoScaleUpRule() Obtain <p>Automatic scaling policy of the file system.</p>
 * @method void setAutoScaleUpRule(AutoScaleUpRule $AutoScaleUpRule) Set <p>Automatic scaling policy of the file system.</p>
 * @method string getVersion() Obtain <p>File system version.</p>
 * @method void setVersion(string $Version) Set <p>File system version.</p>
 * @method array getExstraPerformanceInfo() Obtain <p>Additional performance information.</p>
 * @method void setExstraPerformanceInfo(array $ExstraPerformanceInfo) Set <p>Additional performance information.</p>
 * @method string getMetaType() Obtain <p>basic: standard metadata type.<br>enhanced: enhanced metadata type.</p>
 * @method void setMetaType(string $MetaType) Set <p>basic: standard metadata type.<br>enhanced: enhanced metadata type.</p>
 * @method string getScenario() Obtain <p>Business scenario.</p><p>Valid values:</p><ul><li>AgentSandbox: Create AgentCFS.</li></ul>
 * @method void setScenario(string $Scenario) Set <p>Business scenario.</p><p>Valid values:</p><ul><li>AgentSandbox: Create AgentCFS.</li></ul>
 * @method float getFullDeleteCapacityUsage() Obtain <p>Overfull deletion capacity ratio. 0.0 indicates disabled.</p><p>Value range: [0.0, 1.0].</p>
 * @method void setFullDeleteCapacityUsage(float $FullDeleteCapacityUsage) Set <p>Overfull deletion capacity ratio. 0.0 indicates disabled.</p><p>Value range: [0.0, 1.0].</p>
 * @method integer getFullDeleteMinTtl() Obtain <p>Minimum survival time before overfull deletion, in seconds.</p><p>Unit: seconds.</p>
 * @method void setFullDeleteMinTtl(integer $FullDeleteMinTtl) Set <p>Minimum survival time before overfull deletion, in seconds.</p><p>Unit: seconds.</p>
 * @method integer getExpireDeleteTtl() Obtain <p>Expiration deletion TTL, in seconds. 0 indicates disabled.</p><p>Unit: seconds.</p>
 * @method void setExpireDeleteTtl(integer $ExpireDeleteTtl) Set <p>Expiration deletion TTL, in seconds. 0 indicates disabled.</p><p>Unit: seconds.</p>
 */
class FileSystemInfo extends AbstractModel
{
    /**
     * @var string <p>Creation time.</p>
     */
    public $CreationTime;

    /**
     * @var string <p>User-defined name.</p>
     */
    public $CreationToken;

    /**
     * @var string <p>File system ID.</p>
     */
    public $FileSystemId;

    /**
     * @var string <p>File system status. Valid values:</p><ul><li>creating: Creating</li><li>mounting: Mounting</li><li>create_failed: Failed to create</li><li>available: Available</li><li>unserviced: Service suspended</li><li>upgrading: Upgrading</li></ul>
     */
    public $LifeCycleState;

    /**
     * @var integer <p>Used capacity of the file system. Unit: Byte.</p>
     */
    public $SizeByte;

    /**
     * @var integer <p>File system space limit. Unit: GiB.</p>
     */
    public $SizeLimit;

    /**
     * @var integer <p>Region ID.</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Region name.</p>
     */
    public $Zone;

    /**
     * @var string <p>File system protocol type. Valid values: NFS, CIFS, and TURBO.</p>
     */
    public $Protocol;

    /**
     * @var string <p>Storage type. Valid values: HP: General performance; SD: General standard; TP: turbo performance; TB: turbo standard; THP: Throughput.</p>
     */
    public $StorageType;

    /**
     * @var string <p>Prepaid storage pack bound to the file system.</p>
     */
    public $StorageResourcePkg;

    /**
     * @var string <p>Prepaid bandwidth pack bound to the file system (not supported yet).</p>
     */
    public $BandwidthResourcePkg;

    /**
     * @var PGroup <p>Information of the permission group bound to the file system.</p>
     */
    public $PGroup;

    /**
     * @var string <p>User-defined name.</p>
     */
    public $FsName;

    /**
     * @var boolean <p>Whether the file system is encrypted. true: encrypted; false: not encrypted.</p>
     */
    public $Encrypted;

    /**
     * @var string <p>Key used for encryption, which can be the key ID or ARN.</p>
     */
    public $KmsKeyId;

    /**
     * @var integer <p>Application ID.</p>
     */
    public $AppId;

    /**
     * @var float <p>Maximum file system throughput, which is determined by the current used storage capacity of the file system, the bound storage pack, and the throughput pack. Unit: MiB/s.</p>
     */
    public $BandwidthLimit;

    /**
     * @var string <p>Snapshot policy associated with the file system.</p>
     */
    public $AutoSnapshotPolicyId;

    /**
     * @var string <p>Snapshot processing status of the file system. snapping: snapshot in progress; normal: normal status.</p>
     */
    public $SnapStatus;

    /**
     * @var integer <p>Maximum capacity specification of the file system.<br>Unit: GiB.</p>
     */
    public $Capacity;

    /**
     * @var array <p>List of file system tags.</p>
     */
    public $Tags;

    /**
     * @var string <p>Lifecycle management status of the file system.<br>NotAvailable: Unavailable.<br>Available: Available.</p>
     */
    public $TieringState;

    /**
     * @var TieringDetailInfo <p>Tiered storage details.</p>
     */
    public $TieringDetail;

    /**
     * @var AutoScaleUpRule <p>Automatic scaling policy of the file system.</p>
     */
    public $AutoScaleUpRule;

    /**
     * @var string <p>File system version.</p>
     */
    public $Version;

    /**
     * @var array <p>Additional performance information.</p>
     */
    public $ExstraPerformanceInfo;

    /**
     * @var string <p>basic: standard metadata type.<br>enhanced: enhanced metadata type.</p>
     */
    public $MetaType;

    /**
     * @var string <p>Business scenario.</p><p>Valid values:</p><ul><li>AgentSandbox: Create AgentCFS.</li></ul>
     */
    public $Scenario;

    /**
     * @var float <p>Overfull deletion capacity ratio. 0.0 indicates disabled.</p><p>Value range: [0.0, 1.0].</p>
     */
    public $FullDeleteCapacityUsage;

    /**
     * @var integer <p>Minimum survival time before overfull deletion, in seconds.</p><p>Unit: seconds.</p>
     */
    public $FullDeleteMinTtl;

    /**
     * @var integer <p>Expiration deletion TTL, in seconds. 0 indicates disabled.</p><p>Unit: seconds.</p>
     */
    public $ExpireDeleteTtl;

    /**
     * @param string $CreationTime <p>Creation time.</p>
     * @param string $CreationToken <p>User-defined name.</p>
     * @param string $FileSystemId <p>File system ID.</p>
     * @param string $LifeCycleState <p>File system status. Valid values:</p><ul><li>creating: Creating</li><li>mounting: Mounting</li><li>create_failed: Failed to create</li><li>available: Available</li><li>unserviced: Service suspended</li><li>upgrading: Upgrading</li></ul>
     * @param integer $SizeByte <p>Used capacity of the file system. Unit: Byte.</p>
     * @param integer $SizeLimit <p>File system space limit. Unit: GiB.</p>
     * @param integer $ZoneId <p>Region ID.</p>
     * @param string $Zone <p>Region name.</p>
     * @param string $Protocol <p>File system protocol type. Valid values: NFS, CIFS, and TURBO.</p>
     * @param string $StorageType <p>Storage type. Valid values: HP: General performance; SD: General standard; TP: turbo performance; TB: turbo standard; THP: Throughput.</p>
     * @param string $StorageResourcePkg <p>Prepaid storage pack bound to the file system.</p>
     * @param string $BandwidthResourcePkg <p>Prepaid bandwidth pack bound to the file system (not supported yet).</p>
     * @param PGroup $PGroup <p>Information of the permission group bound to the file system.</p>
     * @param string $FsName <p>User-defined name.</p>
     * @param boolean $Encrypted <p>Whether the file system is encrypted. true: encrypted; false: not encrypted.</p>
     * @param string $KmsKeyId <p>Key used for encryption, which can be the key ID or ARN.</p>
     * @param integer $AppId <p>Application ID.</p>
     * @param float $BandwidthLimit <p>Maximum file system throughput, which is determined by the current used storage capacity of the file system, the bound storage pack, and the throughput pack. Unit: MiB/s.</p>
     * @param string $AutoSnapshotPolicyId <p>Snapshot policy associated with the file system.</p>
     * @param string $SnapStatus <p>Snapshot processing status of the file system. snapping: snapshot in progress; normal: normal status.</p>
     * @param integer $Capacity <p>Maximum capacity specification of the file system.<br>Unit: GiB.</p>
     * @param array $Tags <p>List of file system tags.</p>
     * @param string $TieringState <p>Lifecycle management status of the file system.<br>NotAvailable: Unavailable.<br>Available: Available.</p>
     * @param TieringDetailInfo $TieringDetail <p>Tiered storage details.</p>
     * @param AutoScaleUpRule $AutoScaleUpRule <p>Automatic scaling policy of the file system.</p>
     * @param string $Version <p>File system version.</p>
     * @param array $ExstraPerformanceInfo <p>Additional performance information.</p>
     * @param string $MetaType <p>basic: standard metadata type.<br>enhanced: enhanced metadata type.</p>
     * @param string $Scenario <p>Business scenario.</p><p>Valid values:</p><ul><li>AgentSandbox: Create AgentCFS.</li></ul>
     * @param float $FullDeleteCapacityUsage <p>Overfull deletion capacity ratio. 0.0 indicates disabled.</p><p>Value range: [0.0, 1.0].</p>
     * @param integer $FullDeleteMinTtl <p>Minimum survival time before overfull deletion, in seconds.</p><p>Unit: seconds.</p>
     * @param integer $ExpireDeleteTtl <p>Expiration deletion TTL, in seconds. 0 indicates disabled.</p><p>Unit: seconds.</p>
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
        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("CreationToken",$param) and $param["CreationToken"] !== null) {
            $this->CreationToken = $param["CreationToken"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("LifeCycleState",$param) and $param["LifeCycleState"] !== null) {
            $this->LifeCycleState = $param["LifeCycleState"];
        }

        if (array_key_exists("SizeByte",$param) and $param["SizeByte"] !== null) {
            $this->SizeByte = $param["SizeByte"];
        }

        if (array_key_exists("SizeLimit",$param) and $param["SizeLimit"] !== null) {
            $this->SizeLimit = $param["SizeLimit"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("StorageResourcePkg",$param) and $param["StorageResourcePkg"] !== null) {
            $this->StorageResourcePkg = $param["StorageResourcePkg"];
        }

        if (array_key_exists("BandwidthResourcePkg",$param) and $param["BandwidthResourcePkg"] !== null) {
            $this->BandwidthResourcePkg = $param["BandwidthResourcePkg"];
        }

        if (array_key_exists("PGroup",$param) and $param["PGroup"] !== null) {
            $this->PGroup = new PGroup();
            $this->PGroup->deserialize($param["PGroup"]);
        }

        if (array_key_exists("FsName",$param) and $param["FsName"] !== null) {
            $this->FsName = $param["FsName"];
        }

        if (array_key_exists("Encrypted",$param) and $param["Encrypted"] !== null) {
            $this->Encrypted = $param["Encrypted"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("BandwidthLimit",$param) and $param["BandwidthLimit"] !== null) {
            $this->BandwidthLimit = $param["BandwidthLimit"];
        }

        if (array_key_exists("AutoSnapshotPolicyId",$param) and $param["AutoSnapshotPolicyId"] !== null) {
            $this->AutoSnapshotPolicyId = $param["AutoSnapshotPolicyId"];
        }

        if (array_key_exists("SnapStatus",$param) and $param["SnapStatus"] !== null) {
            $this->SnapStatus = $param["SnapStatus"];
        }

        if (array_key_exists("Capacity",$param) and $param["Capacity"] !== null) {
            $this->Capacity = $param["Capacity"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("TieringState",$param) and $param["TieringState"] !== null) {
            $this->TieringState = $param["TieringState"];
        }

        if (array_key_exists("TieringDetail",$param) and $param["TieringDetail"] !== null) {
            $this->TieringDetail = new TieringDetailInfo();
            $this->TieringDetail->deserialize($param["TieringDetail"]);
        }

        if (array_key_exists("AutoScaleUpRule",$param) and $param["AutoScaleUpRule"] !== null) {
            $this->AutoScaleUpRule = new AutoScaleUpRule();
            $this->AutoScaleUpRule->deserialize($param["AutoScaleUpRule"]);
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("ExstraPerformanceInfo",$param) and $param["ExstraPerformanceInfo"] !== null) {
            $this->ExstraPerformanceInfo = [];
            foreach ($param["ExstraPerformanceInfo"] as $key => $value){
                $obj = new ExstraPerformanceInfo();
                $obj->deserialize($value);
                array_push($this->ExstraPerformanceInfo, $obj);
            }
        }

        if (array_key_exists("MetaType",$param) and $param["MetaType"] !== null) {
            $this->MetaType = $param["MetaType"];
        }

        if (array_key_exists("Scenario",$param) and $param["Scenario"] !== null) {
            $this->Scenario = $param["Scenario"];
        }

        if (array_key_exists("FullDeleteCapacityUsage",$param) and $param["FullDeleteCapacityUsage"] !== null) {
            $this->FullDeleteCapacityUsage = $param["FullDeleteCapacityUsage"];
        }

        if (array_key_exists("FullDeleteMinTtl",$param) and $param["FullDeleteMinTtl"] !== null) {
            $this->FullDeleteMinTtl = $param["FullDeleteMinTtl"];
        }

        if (array_key_exists("ExpireDeleteTtl",$param) and $param["ExpireDeleteTtl"] !== null) {
            $this->ExpireDeleteTtl = $param["ExpireDeleteTtl"];
        }
    }
}
