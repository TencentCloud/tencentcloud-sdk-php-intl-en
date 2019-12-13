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
 * @method string getArchitecture() 获取OS architecture of the image to be imported, `x86_64` or `i386`.
 * @method void setArchitecture(string $Architecture) 设置OS architecture of the image to be imported, `x86_64` or `i386`.
 * @method string getOsType() 获取OS type of the image to be imported. You can call `DescribeImportImageOs` to obtain the list of supported operating systems.
 * @method void setOsType(string $OsType) 设置OS type of the image to be imported. You can call `DescribeImportImageOs` to obtain the list of supported operating systems.
 * @method string getOsVersion() 获取OS version of the image to be imported. You can call `DescribeImportImageOs` to obtain the list of supported operating systems.
 * @method void setOsVersion(string $OsVersion) 设置OS version of the image to be imported. You can call `DescribeImportImageOs` to obtain the list of supported operating systems.
 * @method string getImageUrl() 获取Address on COS where the image to be imported is stored.
 * @method void setImageUrl(string $ImageUrl) 设置Address on COS where the image to be imported is stored.
 * @method string getImageName() 获取Image name
 * @method void setImageName(string $ImageName) 设置Image name
 * @method string getImageDescription() 获取Image description
 * @method void setImageDescription(string $ImageDescription) 设置Image description
 * @method boolean getDryRun() 获取Dry run to check the parameters without performing the operation
 * @method void setDryRun(boolean $DryRun) 设置Dry run to check the parameters without performing the operation
 * @method boolean getForce() 获取Whether to force import the image. For more information, see [Forcibly Import Image](https://intl.cloud.tencent.com/document/product/213/12849).
 * @method void setForce(boolean $Force) 设置Whether to force import the image. For more information, see [Forcibly Import Image](https://intl.cloud.tencent.com/document/product/213/12849).
 */

/**
 *ImportImage request structure.
 */
class ImportImageRequest extends AbstractModel
{
    /**
     * @var string OS architecture of the image to be imported, `x86_64` or `i386`.
     */
    public $Architecture;

    /**
     * @var string OS type of the image to be imported. You can call `DescribeImportImageOs` to obtain the list of supported operating systems.
     */
    public $OsType;

    /**
     * @var string OS version of the image to be imported. You can call `DescribeImportImageOs` to obtain the list of supported operating systems.
     */
    public $OsVersion;

    /**
     * @var string Address on COS where the image to be imported is stored.
     */
    public $ImageUrl;

    /**
     * @var string Image name
     */
    public $ImageName;

    /**
     * @var string Image description
     */
    public $ImageDescription;

    /**
     * @var boolean Dry run to check the parameters without performing the operation
     */
    public $DryRun;

    /**
     * @var boolean Whether to force import the image. For more information, see [Forcibly Import Image](https://intl.cloud.tencent.com/document/product/213/12849).
     */
    public $Force;
    /**
     * @param string $Architecture OS architecture of the image to be imported, `x86_64` or `i386`.
     * @param string $OsType OS type of the image to be imported. You can call `DescribeImportImageOs` to obtain the list of supported operating systems.
     * @param string $OsVersion OS version of the image to be imported. You can call `DescribeImportImageOs` to obtain the list of supported operating systems.
     * @param string $ImageUrl Address on COS where the image to be imported is stored.
     * @param string $ImageName Image name
     * @param string $ImageDescription Image description
     * @param boolean $DryRun Dry run to check the parameters without performing the operation
     * @param boolean $Force Whether to force import the image. For more information, see [Forcibly Import Image](https://intl.cloud.tencent.com/document/product/213/12849).
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Architecture",$param) and $param["Architecture"] !== null) {
            $this->Architecture = $param["Architecture"];
        }

        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            $this->OsType = $param["OsType"];
        }

        if (array_key_exists("OsVersion",$param) and $param["OsVersion"] !== null) {
            $this->OsVersion = $param["OsVersion"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageDescription",$param) and $param["ImageDescription"] !== null) {
            $this->ImageDescription = $param["ImageDescription"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("Force",$param) and $param["Force"] !== null) {
            $this->Force = $param["Force"];
        }
    }
}
