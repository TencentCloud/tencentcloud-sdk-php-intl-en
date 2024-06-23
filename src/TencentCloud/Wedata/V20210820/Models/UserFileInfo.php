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
 * Development Space - Data Development Script Information Response Body
 *
 * @method string getResourceId() Obtain Resource ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setResourceId(string $ResourceId) Set Resource ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getFileName() Obtain File NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setFileName(string $FileName) Set File NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getFileExtensionType() Obtain File Type, such as jar, zip, etc.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFileExtensionType(string $FileExtensionType) Set File Type, such as jar, zip, etc.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getType() Obtain File Upload Type, Resource Management as resource
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setType(string $Type) Set File Upload Type, Resource Management as resource
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getMd5Value() Obtain File MD5 Value
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMd5Value(string $Md5Value) Set File MD5 Value
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreateTime() Obtain Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getUpdateTime() Obtain Update timeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update timeNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getSize() Obtain File Size, in bytes
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSize(integer $Size) Set File Size, in bytes
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getLocalPath() Obtain Local Path
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLocalPath(string $LocalPath) Set Local Path
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getLocalTempPath() Obtain Local Temporary Path
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLocalTempPath(string $LocalTempPath) Set Local Temporary Path
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getRemotePath() Obtain Remote Path
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRemotePath(string $RemotePath) Set Remote Path
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getOwnerName() Obtain File Owner's Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOwnerName(string $OwnerName) Set File Owner's Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getOwner() Obtain File owner's uin
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOwner(string $Owner) Set File owner's uin
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getPathDepth() Obtain File depth
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPathDepth(integer $PathDepth) Set File depth
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectId() Obtain Project IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method array getExtraInfo() Obtain Additional information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExtraInfo(array $ExtraInfo) Set Additional information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getZipPath() Obtain Absolute path of local temporary compressed file
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setZipPath(string $ZipPath) Set Absolute path of local temporary compressed file
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getBucket() Obtain File's belonging bucket 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setBucket(string $Bucket) Set File's belonging bucket 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getRegion() Obtain Region of the file's belonging bucket
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRegion(string $Region) Set Region of the file's belonging bucket
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDeleteName() Obtain NoNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDeleteName(string $DeleteName) Set NoNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getDeleteOwner() Obtain NoNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setDeleteOwner(string $DeleteOwner) Set NoNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getOperator() Obtain NoNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setOperator(string $Operator) Set NoNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getOperatorName() Obtain NoNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setOperatorName(string $OperatorName) Set NoNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getEncodeExtraInfo() Obtain Additional information base64 encoded
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEncodeExtraInfo(string $EncodeExtraInfo) Set Additional information base64 encoded
Note: This field may return null, indicating that no valid value can be obtained.
 */
class UserFileInfo extends AbstractModel
{
    /**
     * @var string Resource ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ResourceId;

    /**
     * @var string File NameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $FileName;

    /**
     * @var string File Type, such as jar, zip, etc.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FileExtensionType;

    /**
     * @var string File Upload Type, Resource Management as resource
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Type;

    /**
     * @var string File MD5 Value
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
     * @var integer File Size, in bytes
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Size;

    /**
     * @var string Local Path
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LocalPath;

    /**
     * @var string Local Temporary Path
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LocalTempPath;

    /**
     * @var string Remote Path
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RemotePath;

    /**
     * @var string File Owner's Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OwnerName;

    /**
     * @var string File owner's uin
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Owner;

    /**
     * @var integer File depth
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $PathDepth;

    /**
     * @var string Project IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectId;

    /**
     * @var array Additional information
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExtraInfo;

    /**
     * @var string Absolute path of local temporary compressed file
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ZipPath;

    /**
     * @var string File's belonging bucket 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Bucket;

    /**
     * @var string Region of the file's belonging bucket
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Region;

    /**
     * @var string NoNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $DeleteName;

    /**
     * @var string NoNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $DeleteOwner;

    /**
     * @var string NoNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Operator;

    /**
     * @var string NoNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $OperatorName;

    /**
     * @var string Additional information base64 encoded
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $EncodeExtraInfo;

    /**
     * @param string $ResourceId Resource ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $FileName File NameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $FileExtensionType File Type, such as jar, zip, etc.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Type File Upload Type, Resource Management as resource
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Md5Value File MD5 Value
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreateTime Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $UpdateTime Update timeNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Size File Size, in bytes
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $LocalPath Local Path
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $LocalTempPath Local Temporary Path
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $RemotePath Remote Path
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $OwnerName File Owner's Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Owner File owner's uin
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $PathDepth File depth
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectId Project IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param array $ExtraInfo Additional information
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ZipPath Absolute path of local temporary compressed file
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Bucket File's belonging bucket 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Region Region of the file's belonging bucket
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DeleteName NoNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $DeleteOwner NoNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Operator NoNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $OperatorName NoNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $EncodeExtraInfo Additional information base64 encoded
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

        if (array_key_exists("LocalTempPath",$param) and $param["LocalTempPath"] !== null) {
            $this->LocalTempPath = $param["LocalTempPath"];
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
            $this->ExtraInfo = [];
            foreach ($param["ExtraInfo"] as $key => $value){
                $obj = new ParamInfo();
                $obj->deserialize($value);
                array_push($this->ExtraInfo, $obj);
            }
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

        if (array_key_exists("DeleteName",$param) and $param["DeleteName"] !== null) {
            $this->DeleteName = $param["DeleteName"];
        }

        if (array_key_exists("DeleteOwner",$param) and $param["DeleteOwner"] !== null) {
            $this->DeleteOwner = $param["DeleteOwner"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("OperatorName",$param) and $param["OperatorName"] !== null) {
            $this->OperatorName = $param["OperatorName"];
        }

        if (array_key_exists("EncodeExtraInfo",$param) and $param["EncodeExtraInfo"] !== null) {
            $this->EncodeExtraInfo = $param["EncodeExtraInfo"];
        }
    }
}
