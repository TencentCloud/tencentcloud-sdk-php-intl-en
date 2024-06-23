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
 * Development Space - Script-related Response
 *
 * @method string getResourceId() Obtain Resource IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setResourceId(string $ResourceId) Set Resource IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getFileName() Obtain Script Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFileName(string $FileName) Set Script Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getFileExtensionType() Obtain File Extension Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFileExtensionType(string $FileExtensionType) Set File Extension Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getType() Obtain File TypeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setType(string $Type) Set File TypeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getMd5Value() Obtain md5 Value
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMd5Value(string $Md5Value) Set md5 Value
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreateTime() Obtain Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getUpdateTime() Obtain Update timeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update timeNote: This field may return null, indicating that no valid value can be obtained.
 * @method float getSize() Obtain File sizeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setSize(float $Size) Set File sizeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getLocalPath() Obtain Local Path
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLocalPath(string $LocalPath) Set Local Path
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getRemotePath() Obtain Remote Path
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRemotePath(string $RemotePath) Set Remote Path
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getOwnerName() Obtain UsernameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setOwnerName(string $OwnerName) Set UsernameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getOwner() Obtain User ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOwner(string $Owner) Set User ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getPathDepth() Obtain Path Depth
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPathDepth(integer $PathDepth) Set Path Depth
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectId() Obtain Project IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getExtraInfo() Obtain Additional Information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExtraInfo(string $ExtraInfo) Set Additional Information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getLocalTempPath() Obtain Local Temporary File Path
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLocalTempPath(string $LocalTempPath) Set Local Temporary File Path
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getZipPath() Obtain Local Compressed File Path
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setZipPath(string $ZipPath) Set Local Compressed File Path
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getBucket() Obtain COS Bucket Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setBucket(string $Bucket) Set COS Bucket Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getRegion() Obtain COS Region
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRegion(string $Region) Set COS Region
Note: This field may return null, indicating that no valid value can be obtained.
 */
class ScriptInfoResponse extends AbstractModel
{
    /**
     * @var string Resource IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ResourceId;

    /**
     * @var string Script Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FileName;

    /**
     * @var string File Extension Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FileExtensionType;

    /**
     * @var string File TypeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Type;

    /**
     * @var string md5 Value
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Md5Value;

    /**
     * @var string Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Update timeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $UpdateTime;

    /**
     * @var float File sizeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Size;

    /**
     * @var string Local Path
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LocalPath;

    /**
     * @var string Remote Path
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RemotePath;

    /**
     * @var string UsernameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $OwnerName;

    /**
     * @var string User ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Owner;

    /**
     * @var integer Path Depth
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $PathDepth;

    /**
     * @var string Project IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Additional Information
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExtraInfo;

    /**
     * @var string Local Temporary File Path
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LocalTempPath;

    /**
     * @var string Local Compressed File Path
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ZipPath;

    /**
     * @var string COS Bucket Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Bucket;

    /**
     * @var string COS Region
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Region;

    /**
     * @param string $ResourceId Resource IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $FileName Script Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $FileExtensionType File Extension Type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Type File TypeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Md5Value md5 Value
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreateTime Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $UpdateTime Update timeNote: This field may return null, indicating that no valid value can be obtained.
     * @param float $Size File sizeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $LocalPath Local Path
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $RemotePath Remote Path
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $OwnerName UsernameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Owner User ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $PathDepth Path Depth
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectId Project IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ExtraInfo Additional Information
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $LocalTempPath Local Temporary File Path
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ZipPath Local Compressed File Path
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Bucket COS Bucket Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Region COS Region
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileExtensionType",$param) and $param["FileExtensionType"] !== null) {
            $this->FileExtensionType = $param["FileExtensionType"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Md5Value",$param) and $param["Md5Value"] !== null) {
            $this->Md5Value = $param["Md5Value"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("LocalPath",$param) and $param["LocalPath"] !== null) {
            $this->LocalPath = $param["LocalPath"];
        }

        if (array_key_exists("RemotePath",$param) and $param["RemotePath"] !== null) {
            $this->RemotePath = $param["RemotePath"];
        }

        if (array_key_exists("OwnerName",$param) and $param["OwnerName"] !== null) {
            $this->OwnerName = $param["OwnerName"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("PathDepth",$param) and $param["PathDepth"] !== null) {
            $this->PathDepth = $param["PathDepth"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ExtraInfo",$param) and $param["ExtraInfo"] !== null) {
            $this->ExtraInfo = $param["ExtraInfo"];
        }

        if (array_key_exists("LocalTempPath",$param) and $param["LocalTempPath"] !== null) {
            $this->LocalTempPath = $param["LocalTempPath"];
        }

        if (array_key_exists("ZipPath",$param) and $param["ZipPath"] !== null) {
            $this->ZipPath = $param["ZipPath"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
