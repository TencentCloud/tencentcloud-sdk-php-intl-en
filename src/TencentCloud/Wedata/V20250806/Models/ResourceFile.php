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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource file details.
 *
 * @method string getProjectId() Obtain Project ID.
 * @method void setProjectId(string $ProjectId) Set Project ID.
 * @method string getResourceId() Obtain Resource file ID.
 * @method void setResourceId(string $ResourceId) Set Resource file ID.
 * @method string getResourceName() Obtain Resource file name.
 * @method void setResourceName(string $ResourceName) Set Resource file name.
 * @method string getLocalPath() Obtain Source file path.
 * @method void setLocalPath(string $LocalPath) Set Source file path.
 * @method string getRemotePath() Obtain Specifies the COS storage path of the resource object.
 * @method void setRemotePath(string $RemotePath) Set Specifies the COS storage path of the resource object.
 * @method string getFileExtensionType() Obtain Specifies the resource file type.

 * @method void setFileExtensionType(string $FileExtensionType) Set Specifies the resource file type.

 * @method string getSize() Obtain Resource size
 * @method void setSize(string $Size) Set Resource size
 * @method string getCreatorUserUin() Obtain Creator user ID 
 * @method void setCreatorUserUin(string $CreatorUserUin) Set Creator user ID 
 * @method string getCreatorUserName() Obtain Creator name
 * @method void setCreatorUserName(string $CreatorUserName) Set Creator name
 * @method string getUpdateUserName() Obtain Last updated username.

 * @method void setUpdateUserName(string $UpdateUserName) Set Last updated username.

 * @method string getUpdateUserUin() Obtain Last updated user ID.

 * @method void setUpdateUserUin(string $UpdateUserUin) Set Last updated user ID.

 * @method string getBucketName() Obtain COS bucket.
 * @method void setBucketName(string $BucketName) Set COS bucket.
 * @method string getCosRegion() Obtain COS region
 * @method void setCosRegion(string $CosRegion) Set COS region
 * @method string getResourceSourceMode() Obtain Specifies the resource source mode.
 * @method void setResourceSourceMode(string $ResourceSourceMode) Set Specifies the resource source mode.
 * @method string getBundleId() Obtain Local project ID.

 * @method void setBundleId(string $BundleId) Set Local project ID.

 * @method string getBundleInfo() Obtain Local project information.

 * @method void setBundleInfo(string $BundleInfo) Set Local project information.
 */
class ResourceFile extends AbstractModel
{
    /**
     * @var string Project ID.
     */
    public $ProjectId;

    /**
     * @var string Resource file ID.
     */
    public $ResourceId;

    /**
     * @var string Resource file name.
     */
    public $ResourceName;

    /**
     * @var string Source file path.
     */
    public $LocalPath;

    /**
     * @var string Specifies the COS storage path of the resource object.
     */
    public $RemotePath;

    /**
     * @var string Specifies the resource file type.

     */
    public $FileExtensionType;

    /**
     * @var string Resource size
     */
    public $Size;

    /**
     * @var string Creator user ID 
     */
    public $CreatorUserUin;

    /**
     * @var string Creator name
     */
    public $CreatorUserName;

    /**
     * @var string Last updated username.

     */
    public $UpdateUserName;

    /**
     * @var string Last updated user ID.

     */
    public $UpdateUserUin;

    /**
     * @var string COS bucket.
     */
    public $BucketName;

    /**
     * @var string COS region
     */
    public $CosRegion;

    /**
     * @var string Specifies the resource source mode.
     */
    public $ResourceSourceMode;

    /**
     * @var string Local project ID.

     */
    public $BundleId;

    /**
     * @var string Local project information.

     */
    public $BundleInfo;

    /**
     * @param string $ProjectId Project ID.
     * @param string $ResourceId Resource file ID.
     * @param string $ResourceName Resource file name.
     * @param string $LocalPath Source file path.
     * @param string $RemotePath Specifies the COS storage path of the resource object.
     * @param string $FileExtensionType Specifies the resource file type.

     * @param string $Size Resource size
     * @param string $CreatorUserUin Creator user ID 
     * @param string $CreatorUserName Creator name
     * @param string $UpdateUserName Last updated username.

     * @param string $UpdateUserUin Last updated user ID.

     * @param string $BucketName COS bucket.
     * @param string $CosRegion COS region
     * @param string $ResourceSourceMode Specifies the resource source mode.
     * @param string $BundleId Local project ID.

     * @param string $BundleInfo Local project information.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
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

        if (array_key_exists("CreatorUserUin",$param) and $param["CreatorUserUin"] !== null) {
            $this->CreatorUserUin = $param["CreatorUserUin"];
        }

        if (array_key_exists("CreatorUserName",$param) and $param["CreatorUserName"] !== null) {
            $this->CreatorUserName = $param["CreatorUserName"];
        }

        if (array_key_exists("UpdateUserName",$param) and $param["UpdateUserName"] !== null) {
            $this->UpdateUserName = $param["UpdateUserName"];
        }

        if (array_key_exists("UpdateUserUin",$param) and $param["UpdateUserUin"] !== null) {
            $this->UpdateUserUin = $param["UpdateUserUin"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("CosRegion",$param) and $param["CosRegion"] !== null) {
            $this->CosRegion = $param["CosRegion"];
        }

        if (array_key_exists("ResourceSourceMode",$param) and $param["ResourceSourceMode"] !== null) {
            $this->ResourceSourceMode = $param["ResourceSourceMode"];
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("BundleInfo",$param) and $param["BundleInfo"] !== null) {
            $this->BundleInfo = $param["BundleInfo"];
        }
    }
}
