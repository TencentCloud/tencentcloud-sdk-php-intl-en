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
 * ImportImage request structure.
 *
 * @method string getArchitecture() Obtain OS architecture of the image to be imported, `x86_64` or `i386`.
 * @method void setArchitecture(string $Architecture) Set OS architecture of the image to be imported, `x86_64` or `i386`.
 * @method string getOsType() Obtain OS type of the image to be imported. You can call `DescribeImportImageOs` to obtain the list of supported operating systems.
 * @method void setOsType(string $OsType) Set OS type of the image to be imported. You can call `DescribeImportImageOs` to obtain the list of supported operating systems.
 * @method string getOsVersion() Obtain OS version of the image to be imported. You can call `DescribeImportImageOs` to obtain the list of supported operating systems.
 * @method void setOsVersion(string $OsVersion) Set OS version of the image to be imported. You can call `DescribeImportImageOs` to obtain the list of supported operating systems.
 * @method string getImageUrl() Obtain Address on COS where the image to be imported is stored.
 * @method void setImageUrl(string $ImageUrl) Set Address on COS where the image to be imported is stored.
 * @method string getImageName() Obtain Image name
 * @method void setImageName(string $ImageName) Set Image name
 * @method string getImageDescription() Obtain Image description
 * @method void setImageDescription(string $ImageDescription) Set Image description
 * @method boolean getDryRun() Obtain Dry run to check the parameters without performing the operation
 * @method void setDryRun(boolean $DryRun) Set Dry run to check the parameters without performing the operation
 * @method boolean getForce() Obtain Whether to force import the image. For more information, see [Forcibly Import Image](https://intl.cloud.tencent.com/document/product/213/12849).
 * @method void setForce(boolean $Force) Set Whether to force import the image. For more information, see [Forcibly Import Image](https://intl.cloud.tencent.com/document/product/213/12849).
 * @method array getTagSpecification() Obtain Tag description list. This parameter is used to bind a tag to a custom image.
 * @method void setTagSpecification(array $TagSpecification) Set Tag description list. This parameter is used to bind a tag to a custom image.
 * @method string getLicenseType() Obtain The license type used to activate the OS after importing an image.
Valid values:
`TencentCloud`: Tencent Cloud official license
`BYOL`: Bring Your Own License
 * @method void setLicenseType(string $LicenseType) Set The license type used to activate the OS after importing an image.
Valid values:
`TencentCloud`: Tencent Cloud official license
`BYOL`: Bring Your Own License
 * @method string getBootMode() Obtain Boot mode
 * @method void setBootMode(string $BootMode) Set Boot mode
 * @method string getImageFamily() Obtain Image family
 * @method void setImageFamily(string $ImageFamily) Set Image family
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
     * @var array Tag description list. This parameter is used to bind a tag to a custom image.
     */
    public $TagSpecification;

    /**
     * @var string The license type used to activate the OS after importing an image.
Valid values:
`TencentCloud`: Tencent Cloud official license
`BYOL`: Bring Your Own License
     */
    public $LicenseType;

    /**
     * @var string Boot mode
     */
    public $BootMode;

    /**
     * @var string Image family
     */
    public $ImageFamily;

    /**
     * @param string $Architecture OS architecture of the image to be imported, `x86_64` or `i386`.
     * @param string $OsType OS type of the image to be imported. You can call `DescribeImportImageOs` to obtain the list of supported operating systems.
     * @param string $OsVersion OS version of the image to be imported. You can call `DescribeImportImageOs` to obtain the list of supported operating systems.
     * @param string $ImageUrl Address on COS where the image to be imported is stored.
     * @param string $ImageName Image name
     * @param string $ImageDescription Image description
     * @param boolean $DryRun Dry run to check the parameters without performing the operation
     * @param boolean $Force Whether to force import the image. For more information, see [Forcibly Import Image](https://intl.cloud.tencent.com/document/product/213/12849).
     * @param array $TagSpecification Tag description list. This parameter is used to bind a tag to a custom image.
     * @param string $LicenseType The license type used to activate the OS after importing an image.
Valid values:
`TencentCloud`: Tencent Cloud official license
`BYOL`: Bring Your Own License
     * @param string $BootMode Boot mode
     * @param string $ImageFamily Image family
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

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = [];
            foreach ($param["TagSpecification"] as $key => $value){
                $obj = new TagSpecification();
                $obj->deserialize($value);
                array_push($this->TagSpecification, $obj);
            }
        }

        if (array_key_exists("LicenseType",$param) and $param["LicenseType"] !== null) {
            $this->LicenseType = $param["LicenseType"];
        }

        if (array_key_exists("BootMode",$param) and $param["BootMode"] !== null) {
            $this->BootMode = $param["BootMode"];
        }

        if (array_key_exists("ImageFamily",$param) and $param["ImageFamily"] !== null) {
            $this->ImageFamily = $param["ImageFamily"];
        }
    }
}
