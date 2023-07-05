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
 * CreateMigrationTask request structure.
 *
 * @method string getTaskName() Obtain Migration task name
 * @method void setTaskName(string $TaskName) Set Migration task name
 * @method integer getMigrationType() Obtain Migration type. Valid values: `0` (bucket) and `1` (list). Default value: `0`.
 * @method void setMigrationType(integer $MigrationType) Set Migration type. Valid values: `0` (bucket) and `1` (list). Default value: `0`.
 * @method integer getMigrationMode() Obtain Migration mode. Default value: `0` (full migration).
 * @method void setMigrationMode(integer $MigrationMode) Set Migration mode. Default value: `0` (full migration).
 * @method string getSrcSecretId() Obtain SecretId of the data source account
 * @method void setSrcSecretId(string $SrcSecretId) Set SecretId of the data source account
 * @method string getSrcSecretKey() Obtain SecretKey of the data source account
 * @method void setSrcSecretKey(string $SrcSecretKey) Set SecretKey of the data source account
 * @method string getFileSystemId() Obtain File system instance ID
 * @method void setFileSystemId(string $FileSystemId) Set File system instance ID
 * @method string getFsPath() Obtain File system path
 * @method void setFsPath(string $FsPath) Set File system path
 * @method integer getCoverType() Obtain Overwrite policy for files with the same name. Valid values: `0` (retain the file with the latest modified time), `1` (overwrite); and `2` (not overwrite). Default value: `0`.
 * @method void setCoverType(integer $CoverType) Set Overwrite policy for files with the same name. Valid values: `0` (retain the file with the latest modified time), `1` (overwrite); and `2` (not overwrite). Default value: `0`.
 * @method string getSrcService() Obtain Data source service provider. Valid values: `COS` (Tencent Cloud COS), `OSS` (Alibaba Cloud OSS), and `OBS` (Huawei Cloud OBS).
 * @method void setSrcService(string $SrcService) Set Data source service provider. Valid values: `COS` (Tencent Cloud COS), `OSS` (Alibaba Cloud OSS), and `OBS` (Huawei Cloud OBS).
 * @method string getBucketName() Obtain Data source bucket name. Specify at least one of the bucket name or address.
 * @method void setBucketName(string $BucketName) Set Data source bucket name. Specify at least one of the bucket name or address.
 * @method string getBucketRegion() Obtain Data source bucket region
 * @method void setBucketRegion(string $BucketRegion) Set Data source bucket region
 * @method string getBucketAddress() Obtain Data source bucket address. Specify at least one of the bucket name or address.
 * @method void setBucketAddress(string $BucketAddress) Set Data source bucket address. Specify at least one of the bucket name or address.
 * @method string getListAddress() Obtain List address. This parameter is required if `MigrationType` is set to `1` (list).
 * @method void setListAddress(string $ListAddress) Set List address. This parameter is required if `MigrationType` is set to `1` (list).
 * @method string getFsName() Obtain Target file system name
 * @method void setFsName(string $FsName) Set Target file system name
 * @method string getBucketPath() Obtain Source bucket path, which defaults to `/`
 * @method void setBucketPath(string $BucketPath) Set Source bucket path, which defaults to `/`
 */
class CreateMigrationTaskRequest extends AbstractModel
{
    /**
     * @var string Migration task name
     */
    public $TaskName;

    /**
     * @var integer Migration type. Valid values: `0` (bucket) and `1` (list). Default value: `0`.
     */
    public $MigrationType;

    /**
     * @var integer Migration mode. Default value: `0` (full migration).
     */
    public $MigrationMode;

    /**
     * @var string SecretId of the data source account
     */
    public $SrcSecretId;

    /**
     * @var string SecretKey of the data source account
     */
    public $SrcSecretKey;

    /**
     * @var string File system instance ID
     */
    public $FileSystemId;

    /**
     * @var string File system path
     */
    public $FsPath;

    /**
     * @var integer Overwrite policy for files with the same name. Valid values: `0` (retain the file with the latest modified time), `1` (overwrite); and `2` (not overwrite). Default value: `0`.
     */
    public $CoverType;

    /**
     * @var string Data source service provider. Valid values: `COS` (Tencent Cloud COS), `OSS` (Alibaba Cloud OSS), and `OBS` (Huawei Cloud OBS).
     */
    public $SrcService;

    /**
     * @var string Data source bucket name. Specify at least one of the bucket name or address.
     */
    public $BucketName;

    /**
     * @var string Data source bucket region
     */
    public $BucketRegion;

    /**
     * @var string Data source bucket address. Specify at least one of the bucket name or address.
     */
    public $BucketAddress;

    /**
     * @var string List address. This parameter is required if `MigrationType` is set to `1` (list).
     */
    public $ListAddress;

    /**
     * @var string Target file system name
     */
    public $FsName;

    /**
     * @var string Source bucket path, which defaults to `/`
     */
    public $BucketPath;

    /**
     * @param string $TaskName Migration task name
     * @param integer $MigrationType Migration type. Valid values: `0` (bucket) and `1` (list). Default value: `0`.
     * @param integer $MigrationMode Migration mode. Default value: `0` (full migration).
     * @param string $SrcSecretId SecretId of the data source account
     * @param string $SrcSecretKey SecretKey of the data source account
     * @param string $FileSystemId File system instance ID
     * @param string $FsPath File system path
     * @param integer $CoverType Overwrite policy for files with the same name. Valid values: `0` (retain the file with the latest modified time), `1` (overwrite); and `2` (not overwrite). Default value: `0`.
     * @param string $SrcService Data source service provider. Valid values: `COS` (Tencent Cloud COS), `OSS` (Alibaba Cloud OSS), and `OBS` (Huawei Cloud OBS).
     * @param string $BucketName Data source bucket name. Specify at least one of the bucket name or address.
     * @param string $BucketRegion Data source bucket region
     * @param string $BucketAddress Data source bucket address. Specify at least one of the bucket name or address.
     * @param string $ListAddress List address. This parameter is required if `MigrationType` is set to `1` (list).
     * @param string $FsName Target file system name
     * @param string $BucketPath Source bucket path, which defaults to `/`
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("MigrationType",$param) and $param["MigrationType"] !== null) {
            $this->MigrationType = $param["MigrationType"];
        }

        if (array_key_exists("MigrationMode",$param) and $param["MigrationMode"] !== null) {
            $this->MigrationMode = $param["MigrationMode"];
        }

        if (array_key_exists("SrcSecretId",$param) and $param["SrcSecretId"] !== null) {
            $this->SrcSecretId = $param["SrcSecretId"];
        }

        if (array_key_exists("SrcSecretKey",$param) and $param["SrcSecretKey"] !== null) {
            $this->SrcSecretKey = $param["SrcSecretKey"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("FsPath",$param) and $param["FsPath"] !== null) {
            $this->FsPath = $param["FsPath"];
        }

        if (array_key_exists("CoverType",$param) and $param["CoverType"] !== null) {
            $this->CoverType = $param["CoverType"];
        }

        if (array_key_exists("SrcService",$param) and $param["SrcService"] !== null) {
            $this->SrcService = $param["SrcService"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("BucketRegion",$param) and $param["BucketRegion"] !== null) {
            $this->BucketRegion = $param["BucketRegion"];
        }

        if (array_key_exists("BucketAddress",$param) and $param["BucketAddress"] !== null) {
            $this->BucketAddress = $param["BucketAddress"];
        }

        if (array_key_exists("ListAddress",$param) and $param["ListAddress"] !== null) {
            $this->ListAddress = $param["ListAddress"];
        }

        if (array_key_exists("FsName",$param) and $param["FsName"] !== null) {
            $this->FsName = $param["FsName"];
        }

        if (array_key_exists("BucketPath",$param) and $param["BucketPath"] !== null) {
            $this->BucketPath = $param["BucketPath"];
        }
    }
}
