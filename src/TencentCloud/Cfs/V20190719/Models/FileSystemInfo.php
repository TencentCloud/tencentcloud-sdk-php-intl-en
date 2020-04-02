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
 * @method string getCreationTime() Obtain Creation time
 * @method void setCreationTime(string $CreationTime) Set Creation time
 * @method string getCreationToken() Obtain Custom name
 * @method void setCreationToken(string $CreationToken) Set Custom name
 * @method string getFileSystemId() Obtain File system ID
 * @method void setFileSystemId(string $FileSystemId) Set File system ID
 * @method string getLifeCycleState() Obtain File system status
 * @method void setLifeCycleState(string $LifeCycleState) Set File system status
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
 * @method string getStorageResourcePkg() Obtain Prepaid storage pack bound to a file system (not supported currently)
 * @method void setStorageResourcePkg(string $StorageResourcePkg) Set Prepaid storage pack bound to a file system (not supported currently)
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
 */

/**
 *Basic information of a file system
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
     * @var string File system status
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
     * @var string Prepaid storage pack bound to a file system (not supported currently)
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
     * @param string $CreationTime Creation time
     * @param string $CreationToken Custom name
     * @param string $FileSystemId File system ID
     * @param string $LifeCycleState File system status
     * @param integer $SizeByte Used file system capacity
     * @param integer $SizeLimit Maximum storage limit of a file system
     * @param integer $ZoneId Region ID
     * @param string $Zone Region name
     * @param string $Protocol File system protocol type
     * @param string $StorageType File system storage class
     * @param string $StorageResourcePkg Prepaid storage pack bound to a file system (not supported currently)
     * @param string $BandwidthResourcePkg Prepaid bandwidth pack bound to a file system (not supported currently)
     * @param PGroup $PGroup Information of permission groups bound to a file system
     * @param string $FsName Custom name
     * @param boolean $Encrypted Whether a file system is encrypted
     * @param string $KmsKeyId Key used for encryption, which can be the key ID or ARN
     * @param integer $AppId Application ID
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
    }
}
