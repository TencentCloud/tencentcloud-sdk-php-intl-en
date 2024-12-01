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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Basic information of a file system
 *
 * @method string getCreationTime() Obtain Creation time
 * @method void setCreationTime(string $CreationTime) Set Creation time
 * @method string getCreationToken() Obtain Custom name
 * @method void setCreationToken(string $CreationToken) Set Custom name
 * @method string getFileSystemId() Obtain File system ID
 * @method void setFileSystemId(string $FileSystemId) Set File system ID
 * @method string getLifeCycleState() Obtain File system status. Valid values:
- creating
- mounting
- create_failed
- available
- unserviced
- upgrading
 * @method void setLifeCycleState(string $LifeCycleState) Set File system status. Valid values:
- creating
- mounting
- create_failed
- available
- unserviced
- upgrading
 * @method integer getSizeByte() Obtain Used file system capacity
 * @method void setSizeByte(integer $SizeByte) Set Used file system capacity
 * @method integer getSizeLimit() Obtain Maximum storage limit of a file system
 * @method void setSizeLimit(integer $SizeLimit) Set Maximum storage limit of a file system
 * @method integer getZoneId() Obtain Region ID
 * @method void setZoneId(integer $ZoneId) Set Region ID
 * @method string getZone() Obtain Region name
 * @method void setZone(string $Zone) Set Region name
 * @method string getProtocol() Obtain File system protocol type
 * @method void setProtocol(string $Protocol) Set File system protocol type
 * @method string getStorageType() Obtain File system storage class
 * @method void setStorageType(string $StorageType) Set File system storage class
 * @method string getStorageResourcePkg() Obtain Prepaid storage pack bound with the file system
 * @method void setStorageResourcePkg(string $StorageResourcePkg) Set Prepaid storage pack bound with the file system
 * @method string getBandwidthResourcePkg() Obtain Prepaid bandwidth pack bound to a file system (not supported currently)
 * @method void setBandwidthResourcePkg(string $BandwidthResourcePkg) Set Prepaid bandwidth pack bound to a file system (not supported currently)
 * @method PGroup getPGroup() Obtain Information of permission groups bound to a file system
 * @method void setPGroup(PGroup $PGroup) Set Information of permission groups bound to a file system
 * @method string getFsName() Obtain Custom name
 * @method void setFsName(string $FsName) Set Custom name
 * @method boolean getEncrypted() Obtain Whether a file system is encrypted
 * @method void setEncrypted(boolean $Encrypted) Set Whether a file system is encrypted
 * @method string getKmsKeyId() Obtain Key used for encryption, which can be the key ID or ARN
 * @method void setKmsKeyId(string $KmsKeyId) Set Key used for encryption, which can be the key ID or ARN
 * @method integer getAppId() Obtain Application ID
 * @method void setAppId(integer $AppId) Set Application ID
 * @method float getBandwidthLimit() Obtain The upper limit on the file system’s throughput, which is determined based on its current usage, and bound resource packs for both storage and throughput
 * @method void setBandwidthLimit(float $BandwidthLimit) Set The upper limit on the file system’s throughput, which is determined based on its current usage, and bound resource packs for both storage and throughput
 * @method string getAutoSnapshotPolicyId() Obtain 
 * @method void setAutoSnapshotPolicyId(string $AutoSnapshotPolicyId) Set 
 * @method string getSnapStatus() Obtain 
 * @method void setSnapStatus(string $SnapStatus) Set 
 * @method integer getCapacity() Obtain Total capacity of the file system
 * @method void setCapacity(integer $Capacity) Set Total capacity of the file system
 * @method array getTags() Obtain File system tag list
 * @method void setTags(array $Tags) Set File system tag list
 * @method string getTieringState() Obtain The lifecycle management status of a file system.
 * @method void setTieringState(string $TieringState) Set The lifecycle management status of a file system.
 * @method TieringDetailInfo getTieringDetail() Obtain The details about tiered storage.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTieringDetail(TieringDetailInfo $TieringDetail) Set The details about tiered storage.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AutoScaleUpRule getAutoScaleUpRule() Obtain 
 * @method void setAutoScaleUpRule(AutoScaleUpRule $AutoScaleUpRule) Set 
 */
class FileSystemInfo extends AbstractModel
{
    /**
     * @var string Creation time
     */
    public $CreationTime;

    /**
     * @var string Custom name
     */
    public $CreationToken;

    /**
     * @var string File system ID
     */
    public $FileSystemId;

    /**
     * @var string File system status. Valid values:
- creating
- mounting
- create_failed
- available
- unserviced
- upgrading
     */
    public $LifeCycleState;

    /**
     * @var integer Used file system capacity
     */
    public $SizeByte;

    /**
     * @var integer Maximum storage limit of a file system
     */
    public $SizeLimit;

    /**
     * @var integer Region ID
     */
    public $ZoneId;

    /**
     * @var string Region name
     */
    public $Zone;

    /**
     * @var string File system protocol type
     */
    public $Protocol;

    /**
     * @var string File system storage class
     */
    public $StorageType;

    /**
     * @var string Prepaid storage pack bound with the file system
     */
    public $StorageResourcePkg;

    /**
     * @var string Prepaid bandwidth pack bound to a file system (not supported currently)
     */
    public $BandwidthResourcePkg;

    /**
     * @var PGroup Information of permission groups bound to a file system
     */
    public $PGroup;

    /**
     * @var string Custom name
     */
    public $FsName;

    /**
     * @var boolean Whether a file system is encrypted
     */
    public $Encrypted;

    /**
     * @var string Key used for encryption, which can be the key ID or ARN
     */
    public $KmsKeyId;

    /**
     * @var integer Application ID
     */
    public $AppId;

    /**
     * @var float The upper limit on the file system’s throughput, which is determined based on its current usage, and bound resource packs for both storage and throughput
     */
    public $BandwidthLimit;

    /**
     * @var string 
     */
    public $AutoSnapshotPolicyId;

    /**
     * @var string 
     */
    public $SnapStatus;

    /**
     * @var integer Total capacity of the file system
     */
    public $Capacity;

    /**
     * @var array File system tag list
     */
    public $Tags;

    /**
     * @var string The lifecycle management status of a file system.
     */
    public $TieringState;

    /**
     * @var TieringDetailInfo The details about tiered storage.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TieringDetail;

    /**
     * @var AutoScaleUpRule 
     */
    public $AutoScaleUpRule;

    /**
     * @param string $CreationTime Creation time
     * @param string $CreationToken Custom name
     * @param string $FileSystemId File system ID
     * @param string $LifeCycleState File system status. Valid values:
- creating
- mounting
- create_failed
- available
- unserviced
- upgrading
     * @param integer $SizeByte Used file system capacity
     * @param integer $SizeLimit Maximum storage limit of a file system
     * @param integer $ZoneId Region ID
     * @param string $Zone Region name
     * @param string $Protocol File system protocol type
     * @param string $StorageType File system storage class
     * @param string $StorageResourcePkg Prepaid storage pack bound with the file system
     * @param string $BandwidthResourcePkg Prepaid bandwidth pack bound to a file system (not supported currently)
     * @param PGroup $PGroup Information of permission groups bound to a file system
     * @param string $FsName Custom name
     * @param boolean $Encrypted Whether a file system is encrypted
     * @param string $KmsKeyId Key used for encryption, which can be the key ID or ARN
     * @param integer $AppId Application ID
     * @param float $BandwidthLimit The upper limit on the file system’s throughput, which is determined based on its current usage, and bound resource packs for both storage and throughput
     * @param string $AutoSnapshotPolicyId 
     * @param string $SnapStatus 
     * @param integer $Capacity Total capacity of the file system
     * @param array $Tags File system tag list
     * @param string $TieringState The lifecycle management status of a file system.
     * @param TieringDetailInfo $TieringDetail The details about tiered storage.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AutoScaleUpRule $AutoScaleUpRule 
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
    }
}
