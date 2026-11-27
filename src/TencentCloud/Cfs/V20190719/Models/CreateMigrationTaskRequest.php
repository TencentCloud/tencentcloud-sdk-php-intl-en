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
 * CreateMigrationTask request structure.
 *
 * @method string getTaskName() Obtain <p>Migration task name.</p>
 * @method void setTaskName(string $TaskName) Set <p>Migration task name.</p>
 * @method integer getMigrationType() Obtain <p>Migration mode flag. Default value: 0. 0: Bucket migration; 1: Inventory migration.</p>
 * @method void setMigrationType(integer $MigrationType) Set <p>Migration mode flag. Default value: 0. 0: Bucket migration; 1: Inventory migration.</p>
 * @method integer getMigrationMode() Obtain <p>Migration mode. Default value: 0. 0: Full migration.</p>
 * @method void setMigrationMode(integer $MigrationMode) Set <p>Migration mode. Default value: 0. 0: Full migration.</p>
 * @method string getSrcSecretId() Obtain <p>SecretId of the data source account.</p>
 * @method void setSrcSecretId(string $SrcSecretId) Set <p>SecretId of the data source account.</p>
 * @method string getSrcSecretKey() Obtain <p>SecretKey of the data source account.</p>
 * @method void setSrcSecretKey(string $SrcSecretKey) Set <p>SecretKey of the data source account.</p>
 * @method string getFileSystemId() Obtain <p>File system instance ID, which can be obtained through <a href="https://www.tencentcloud.com/document/product/582/38170?from_cn_redirect=1">DescribeCfsFileSystems</a>.</p>
 * @method void setFileSystemId(string $FileSystemId) Set <p>File system instance ID, which can be obtained through <a href="https://www.tencentcloud.com/document/product/582/38170?from_cn_redirect=1">DescribeCfsFileSystems</a>.</p>
 * @method string getFsPath() Obtain <p>Directory path in the file system. It does not involve the actual mounted subdirectory or root directory, and does not need to be prefixed with /cfs/.</p>
 * @method void setFsPath(string $FsPath) Set <p>Directory path in the file system. It does not involve the actual mounted subdirectory or root directory, and does not need to be prefixed with /cfs/.</p>
 * @method integer getCoverType() Obtain <p>Overwrite policy for files with the same name during migration. Default value: 0. 0: The file with the latest modification time takes precedence; 1: Full overwrite; 2: No overwrite.</p>
 * @method void setCoverType(integer $CoverType) Set <p>Overwrite policy for files with the same name during migration. Default value: 0. 0: The file with the latest modification time takes precedence; 1: Full overwrite; 2: No overwrite.</p>
 * @method string getSrcService() Obtain <p>Data source service provider.</p><p>Valid values:</p><ul><li>COS: Tencent Cloud COS</li><li>OSS: Alibaba Cloud OSS</li><li>OBS: Huawei Cloud OBS</li><li>BOS: Baidu Cloud BOS</li><li>TOS: Volcano Engine TOS</li></ul>
 * @method void setSrcService(string $SrcService) Set <p>Data source service provider.</p><p>Valid values:</p><ul><li>COS: Tencent Cloud COS</li><li>OSS: Alibaba Cloud OSS</li><li>OBS: Huawei Cloud OBS</li><li>BOS: Baidu Cloud BOS</li><li>TOS: Volcano Engine TOS</li></ul>
 * @method string getBucketName() Obtain <p>Name of the data source bucket. For bucket migration, either BucketName or BucketAddress is required. For inventory migration, this parameter is not required.</p>
 * @method void setBucketName(string $BucketName) Set <p>Name of the data source bucket. For bucket migration, either BucketName or BucketAddress is required. For inventory migration, this parameter is not required.</p>
 * @method string getBucketRegion() Obtain <p>Region of the data source bucket.</p>
 * @method void setBucketRegion(string $BucketRegion) Set <p>Region of the data source bucket.</p>
 * @method string getBucketAddress() Obtain <p>Address of the data source bucket. For bucket migration, either BucketName or BucketAddress is required. For inventory migration, this parameter is not required.</p>
 * @method void setBucketAddress(string $BucketAddress) Set <p>Address of the data source bucket. For bucket migration, either BucketName or BucketAddress is required. For inventory migration, this parameter is not required.</p>
 * @method string getListAddress() Obtain <p>Inventory address. Required when the migration mode is inventory migration.</p>
 * @method void setListAddress(string $ListAddress) Set <p>Inventory address. Required when the migration mode is inventory migration.</p>
 * @method string getFsName() Obtain <p>Name of the destination file system.</p>
 * @method void setFsName(string $FsName) Set <p>Name of the destination file system.</p>
 * @method string getBucketPath() Obtain <p>Source bucket path. Default value: /.</p>
 * @method void setBucketPath(string $BucketPath) Set <p>Source bucket path. Default value: /.</p>
 * @method integer getDirection() Obtain <p>Migration direction. 0: Migrate from object storage to file system. 1: Migrate from file system to object storage. Default value: 0.</p>
 * @method void setDirection(integer $Direction) Set <p>Migration direction. 0: Migrate from object storage to file system. 1: Migrate from file system to object storage. Default value: 0.</p>
 */
class CreateMigrationTaskRequest extends AbstractModel
{
    /**
     * @var string <p>Migration task name.</p>
     */
    public $TaskName;

    /**
     * @var integer <p>Migration mode flag. Default value: 0. 0: Bucket migration; 1: Inventory migration.</p>
     */
    public $MigrationType;

    /**
     * @var integer <p>Migration mode. Default value: 0. 0: Full migration.</p>
     */
    public $MigrationMode;

    /**
     * @var string <p>SecretId of the data source account.</p>
     */
    public $SrcSecretId;

    /**
     * @var string <p>SecretKey of the data source account.</p>
     */
    public $SrcSecretKey;

    /**
     * @var string <p>File system instance ID, which can be obtained through <a href="https://www.tencentcloud.com/document/product/582/38170?from_cn_redirect=1">DescribeCfsFileSystems</a>.</p>
     */
    public $FileSystemId;

    /**
     * @var string <p>Directory path in the file system. It does not involve the actual mounted subdirectory or root directory, and does not need to be prefixed with /cfs/.</p>
     */
    public $FsPath;

    /**
     * @var integer <p>Overwrite policy for files with the same name during migration. Default value: 0. 0: The file with the latest modification time takes precedence; 1: Full overwrite; 2: No overwrite.</p>
     */
    public $CoverType;

    /**
     * @var string <p>Data source service provider.</p><p>Valid values:</p><ul><li>COS: Tencent Cloud COS</li><li>OSS: Alibaba Cloud OSS</li><li>OBS: Huawei Cloud OBS</li><li>BOS: Baidu Cloud BOS</li><li>TOS: Volcano Engine TOS</li></ul>
     */
    public $SrcService;

    /**
     * @var string <p>Name of the data source bucket. For bucket migration, either BucketName or BucketAddress is required. For inventory migration, this parameter is not required.</p>
     */
    public $BucketName;

    /**
     * @var string <p>Region of the data source bucket.</p>
     */
    public $BucketRegion;

    /**
     * @var string <p>Address of the data source bucket. For bucket migration, either BucketName or BucketAddress is required. For inventory migration, this parameter is not required.</p>
     */
    public $BucketAddress;

    /**
     * @var string <p>Inventory address. Required when the migration mode is inventory migration.</p>
     */
    public $ListAddress;

    /**
     * @var string <p>Name of the destination file system.</p>
     */
    public $FsName;

    /**
     * @var string <p>Source bucket path. Default value: /.</p>
     */
    public $BucketPath;

    /**
     * @var integer <p>Migration direction. 0: Migrate from object storage to file system. 1: Migrate from file system to object storage. Default value: 0.</p>
     */
    public $Direction;

    /**
     * @param string $TaskName <p>Migration task name.</p>
     * @param integer $MigrationType <p>Migration mode flag. Default value: 0. 0: Bucket migration; 1: Inventory migration.</p>
     * @param integer $MigrationMode <p>Migration mode. Default value: 0. 0: Full migration.</p>
     * @param string $SrcSecretId <p>SecretId of the data source account.</p>
     * @param string $SrcSecretKey <p>SecretKey of the data source account.</p>
     * @param string $FileSystemId <p>File system instance ID, which can be obtained through <a href="https://www.tencentcloud.com/document/product/582/38170?from_cn_redirect=1">DescribeCfsFileSystems</a>.</p>
     * @param string $FsPath <p>Directory path in the file system. It does not involve the actual mounted subdirectory or root directory, and does not need to be prefixed with /cfs/.</p>
     * @param integer $CoverType <p>Overwrite policy for files with the same name during migration. Default value: 0. 0: The file with the latest modification time takes precedence; 1: Full overwrite; 2: No overwrite.</p>
     * @param string $SrcService <p>Data source service provider.</p><p>Valid values:</p><ul><li>COS: Tencent Cloud COS</li><li>OSS: Alibaba Cloud OSS</li><li>OBS: Huawei Cloud OBS</li><li>BOS: Baidu Cloud BOS</li><li>TOS: Volcano Engine TOS</li></ul>
     * @param string $BucketName <p>Name of the data source bucket. For bucket migration, either BucketName or BucketAddress is required. For inventory migration, this parameter is not required.</p>
     * @param string $BucketRegion <p>Region of the data source bucket.</p>
     * @param string $BucketAddress <p>Address of the data source bucket. For bucket migration, either BucketName or BucketAddress is required. For inventory migration, this parameter is not required.</p>
     * @param string $ListAddress <p>Inventory address. Required when the migration mode is inventory migration.</p>
     * @param string $FsName <p>Name of the destination file system.</p>
     * @param string $BucketPath <p>Source bucket path. Default value: /.</p>
     * @param integer $Direction <p>Migration direction. 0: Migrate from object storage to file system. 1: Migrate from file system to object storage. Default value: 0.</p>
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

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }
    }
}
