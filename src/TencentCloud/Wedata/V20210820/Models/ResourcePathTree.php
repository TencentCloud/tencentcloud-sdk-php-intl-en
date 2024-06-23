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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource Management Directory Tree Node
 *
 * @method string getName() Obtain Resource name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setName(string $Name) Set Resource name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getIsLeaf() Obtain Is leaf node
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setIsLeaf(boolean $IsLeaf) Set Is leaf node
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getResourceId() Obtain Resource ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setResourceId(string $ResourceId) Set Resource ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getLocalPath() Obtain Local path
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLocalPath(string $LocalPath) Set Local path
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getRemotePath() Obtain Remote path
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRemotePath(string $RemotePath) Set Remote path
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getFileExtensionType() Obtain File TypeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setFileExtensionType(string $FileExtensionType) Set File TypeNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getSize() Obtain File sizeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setSize(integer $Size) Set File sizeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getMd5Value() Obtain File MD5 value
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMd5Value(string $Md5Value) Set File MD5 value
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getOwnerName() Obtain File Owner's Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOwnerName(string $OwnerName) Set File Owner's Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getUpdateUser() Obtain Updater
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUpdateUser(string $UpdateUser) Set Updater
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getUpdateUserId() Obtain File Updater UIN
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUpdateUserId(string $UpdateUserId) Set File Updater UIN
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getCreateTime() Obtain Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateTime(integer $CreateTime) Set Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getUpdateTime() Obtain Update timeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setUpdateTime(integer $UpdateTime) Set Update timeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getCosBucket() Obtain COS Bucket Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCosBucket(string $CosBucket) Set COS Bucket Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCosRegion() Obtain COS Region
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCosRegion(string $CosRegion) Set COS Region
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getExtraInfo() Obtain Additional InformationNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setExtraInfo(string $ExtraInfo) Set Additional InformationNote: This field may return null, indicating that no valid value can be obtained.
 */
class ResourcePathTree extends AbstractModel
{
    /**
     * @var string Resource name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Name;

    /**
     * @var boolean Is leaf node
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $IsLeaf;

    /**
     * @var string Resource ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ResourceId;

    /**
     * @var string Local path
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LocalPath;

    /**
     * @var string Remote path
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RemotePath;

    /**
     * @var string File TypeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $FileExtensionType;

    /**
     * @var integer File sizeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Size;

    /**
     * @var string File MD5 value
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Md5Value;

    /**
     * @var string File Owner's Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OwnerName;

    /**
     * @var string Updater
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UpdateUser;

    /**
     * @var string File Updater UIN
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UpdateUserId;

    /**
     * @var integer Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @var integer Update timeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string COS Bucket Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CosBucket;

    /**
     * @var string COS Region
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CosRegion;

    /**
     * @var string Additional InformationNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExtraInfo;

    /**
     * @param string $Name Resource name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $IsLeaf Is leaf node
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ResourceId Resource ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $LocalPath Local path
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $RemotePath Remote path
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $FileExtensionType File TypeNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Size File sizeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Md5Value File MD5 value
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $OwnerName File Owner's Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $UpdateUser Updater
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $UpdateUserId File Updater UIN
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $CreateTime Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $UpdateTime Update timeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $CosBucket COS Bucket Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CosRegion COS Region
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ExtraInfo Additional InformationNote: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IsLeaf",$param) and $param["IsLeaf"] !== null) {
            $this->IsLeaf = $param["IsLeaf"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("LocalPath",$param) and $param["LocalPath"] !== null) {
            $this->LocalPath = $param["LocalPath"];
        }

        if (array_key_exists("RemotePath",$param) and $param["RemotePath"] !== null) {
            $this->RemotePath = $param["RemotePath"];
        }

        if (array_key_exists("FileExtensionType",$param) and $param["FileExtensionType"] !== null) {
            $this->FileExtensionType = $param["FileExtensionType"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Md5Value",$param) and $param["Md5Value"] !== null) {
            $this->Md5Value = $param["Md5Value"];
        }

        if (array_key_exists("OwnerName",$param) and $param["OwnerName"] !== null) {
            $this->OwnerName = $param["OwnerName"];
        }

        if (array_key_exists("UpdateUser",$param) and $param["UpdateUser"] !== null) {
            $this->UpdateUser = $param["UpdateUser"];
        }

        if (array_key_exists("UpdateUserId",$param) and $param["UpdateUserId"] !== null) {
            $this->UpdateUserId = $param["UpdateUserId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CosBucket",$param) and $param["CosBucket"] !== null) {
            $this->CosBucket = $param["CosBucket"];
        }

        if (array_key_exists("CosRegion",$param) and $param["CosRegion"] !== null) {
            $this->CosRegion = $param["CosRegion"];
        }

        if (array_key_exists("ExtraInfo",$param) and $param["ExtraInfo"] !== null) {
            $this->ExtraInfo = $param["ExtraInfo"];
        }
    }
}
