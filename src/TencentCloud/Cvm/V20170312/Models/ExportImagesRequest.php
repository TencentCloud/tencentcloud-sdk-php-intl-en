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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportImages request structure.
 *
 * @method string getBucketName() Obtain COS bucket name
 * @method void setBucketName(string $BucketName) Set COS bucket name
 * @method array getImageIds() Obtain List of image IDs
 * @method void setImageIds(array $ImageIds) Set List of image IDs
 * @method string getExportFormat() Obtain Format of the exported image file. Valid values: `RAW`, `QCOW2`, `VHD` and `VMDK`. Default value: `RAW`.
 * @method void setExportFormat(string $ExportFormat) Set Format of the exported image file. Valid values: `RAW`, `QCOW2`, `VHD` and `VMDK`. Default value: `RAW`.
 * @method array getFileNamePrefixList() Obtain Prefix list of the name of exported files
 * @method void setFileNamePrefixList(array $FileNamePrefixList) Set Prefix list of the name of exported files
 * @method boolean getOnlyExportRootDisk() Obtain Whether to export only the system disk
 * @method void setOnlyExportRootDisk(boolean $OnlyExportRootDisk) Set Whether to export only the system disk
 * @method boolean getDryRun() Obtain Check whether the image can be exported
 * @method void setDryRun(boolean $DryRun) Set Check whether the image can be exported
 * @method string getRoleName() Obtain Role name (Default: `CVM_QcsRole`). Before exporting the images, make sure the role exists, and it has write permission to COS.
 * @method void setRoleName(string $RoleName) Set Role name (Default: `CVM_QcsRole`). Before exporting the images, make sure the role exists, and it has write permission to COS.
 */
class ExportImagesRequest extends AbstractModel
{
    /**
     * @var string COS bucket name
     */
    public $BucketName;

    /**
     * @var array List of image IDs
     */
    public $ImageIds;

    /**
     * @var string Format of the exported image file. Valid values: `RAW`, `QCOW2`, `VHD` and `VMDK`. Default value: `RAW`.
     */
    public $ExportFormat;

    /**
     * @var array Prefix list of the name of exported files
     */
    public $FileNamePrefixList;

    /**
     * @var boolean Whether to export only the system disk
     */
    public $OnlyExportRootDisk;

    /**
     * @var boolean Check whether the image can be exported
     */
    public $DryRun;

    /**
     * @var string Role name (Default: `CVM_QcsRole`). Before exporting the images, make sure the role exists, and it has write permission to COS.
     */
    public $RoleName;

    /**
     * @param string $BucketName COS bucket name
     * @param array $ImageIds List of image IDs
     * @param string $ExportFormat Format of the exported image file. Valid values: `RAW`, `QCOW2`, `VHD` and `VMDK`. Default value: `RAW`.
     * @param array $FileNamePrefixList Prefix list of the name of exported files
     * @param boolean $OnlyExportRootDisk Whether to export only the system disk
     * @param boolean $DryRun Check whether the image can be exported
     * @param string $RoleName Role name (Default: `CVM_QcsRole`). Before exporting the images, make sure the role exists, and it has write permission to COS.
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
        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("ImageIds",$param) and $param["ImageIds"] !== null) {
            $this->ImageIds = $param["ImageIds"];
        }

        if (array_key_exists("ExportFormat",$param) and $param["ExportFormat"] !== null) {
            $this->ExportFormat = $param["ExportFormat"];
        }

        if (array_key_exists("FileNamePrefixList",$param) and $param["FileNamePrefixList"] !== null) {
            $this->FileNamePrefixList = $param["FileNamePrefixList"];
        }

        if (array_key_exists("OnlyExportRootDisk",$param) and $param["OnlyExportRootDisk"] !== null) {
            $this->OnlyExportRootDisk = $param["OnlyExportRootDisk"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }
    }
}
