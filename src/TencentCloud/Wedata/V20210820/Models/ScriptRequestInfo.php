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
 * Development Space - Upload Script Request
 *
 * @method string getFilePath() Obtain Script path
Project area 1470575647377821696 project, under the f1 directory:
/datastudio/project/1470575647377821696/f1/sql1234.sql
Personal area:
/datastudio/personal/sqlTTT.sql
 * @method void setFilePath(string $FilePath) Set Script path
Project area 1470575647377821696 project, under the f1 directory:
/datastudio/project/1470575647377821696/f1/sql1234.sql
Personal area:
/datastudio/personal/sqlTTT.sql
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getVersion() Obtain Script Version
 * @method void setVersion(string $Version) Set Script Version
 * @method string getOperation() Obtain Operation Type
 * @method void setOperation(string $Operation) Set Operation Type
 * @method string getExtraInfo() Obtain Additional Information
 * @method void setExtraInfo(string $ExtraInfo) Set Additional Information
 * @method string getBucketName() Obtain Bucket Name
 * @method void setBucketName(string $BucketName) Set Bucket Name
 * @method string getRegion() Obtain Region
 * @method void setRegion(string $Region) Set Region
 * @method string getFileExtensionType() Obtain File Extension Type
 * @method void setFileExtensionType(string $FileExtensionType) Set File Extension Type
 */
class ScriptRequestInfo extends AbstractModel
{
    /**
     * @var string Script path
Project area 1470575647377821696 project, under the f1 directory:
/datastudio/project/1470575647377821696/f1/sql1234.sql
Personal area:
/datastudio/personal/sqlTTT.sql
     */
    public $FilePath;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Script Version
     */
    public $Version;

    /**
     * @var string Operation Type
     */
    public $Operation;

    /**
     * @var string Additional Information
     */
    public $ExtraInfo;

    /**
     * @var string Bucket Name
     */
    public $BucketName;

    /**
     * @var string Region
     */
    public $Region;

    /**
     * @var string File Extension Type
     */
    public $FileExtensionType;

    /**
     * @param string $FilePath Script path
Project area 1470575647377821696 project, under the f1 directory:
/datastudio/project/1470575647377821696/f1/sql1234.sql
Personal area:
/datastudio/personal/sqlTTT.sql
     * @param string $ProjectId Project ID
     * @param string $Version Script Version
     * @param string $Operation Operation Type
     * @param string $ExtraInfo Additional Information
     * @param string $BucketName Bucket Name
     * @param string $Region Region
     * @param string $FileExtensionType File Extension Type
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
        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("ExtraInfo",$param) and $param["ExtraInfo"] !== null) {
            $this->ExtraInfo = $param["ExtraInfo"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("FileExtensionType",$param) and $param["FileExtensionType"] !== null) {
            $this->FileExtensionType = $param["FileExtensionType"];
        }
    }
}
