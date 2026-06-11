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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Basic image information
 *
 * @method string getImageId() Obtain Image id
 * @method void setImageId(string $ImageId) Set Image id
 * @method string getRegistryType() Obtain repository type
 * @method void setRegistryType(string $RegistryType) Set repository type
 * @method string getImageRepoAddress() Obtain Image repository address
 * @method void setImageRepoAddress(string $ImageRepoAddress) Set Image repository address
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getInstanceName() Obtain Instance name.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
 * @method string getNamespace() Obtain Namespace
 * @method void setNamespace(string $Namespace) Set Namespace
 * @method string getImageName() Obtain repository name
 * @method void setImageName(string $ImageName) Set repository name
 * @method string getImageTag() Obtain Image tag
 * @method void setImageTag(string $ImageTag) Set Image tag
 * @method string getScanStatus() Obtain Image scan status
 * @method void setScanStatus(string $ScanStatus) Set Image scan status
 * @method integer getCveProgress() Obtain Mirror cve scan progress
 * @method void setCveProgress(integer $CveProgress) Set Mirror cve scan progress
 * @method integer getRiskProgress() Obtain Mirror sensitivity scan progress
 * @method void setRiskProgress(integer $RiskProgress) Set Mirror sensitivity scan progress
 * @method integer getVirusProgress() Obtain Trojan mirror scan progress
 * @method void setVirusProgress(integer $VirusProgress) Set Trojan mirror scan progress
 */
class ImageProgress extends AbstractModel
{
    /**
     * @var string Image id
     */
    public $ImageId;

    /**
     * @var string repository type
     */
    public $RegistryType;

    /**
     * @var string Image repository address
     */
    public $ImageRepoAddress;

    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Instance name.
     */
    public $InstanceName;

    /**
     * @var string Namespace
     */
    public $Namespace;

    /**
     * @var string repository name
     */
    public $ImageName;

    /**
     * @var string Image tag
     */
    public $ImageTag;

    /**
     * @var string Image scan status
     */
    public $ScanStatus;

    /**
     * @var integer Mirror cve scan progress
     */
    public $CveProgress;

    /**
     * @var integer Mirror sensitivity scan progress
     */
    public $RiskProgress;

    /**
     * @var integer Trojan mirror scan progress
     */
    public $VirusProgress;

    /**
     * @param string $ImageId Image id
     * @param string $RegistryType repository type
     * @param string $ImageRepoAddress Image repository address
     * @param string $InstanceId Instance ID.
     * @param string $InstanceName Instance name.
     * @param string $Namespace Namespace
     * @param string $ImageName repository name
     * @param string $ImageTag Image tag
     * @param string $ScanStatus Image scan status
     * @param integer $CveProgress Mirror cve scan progress
     * @param integer $RiskProgress Mirror sensitivity scan progress
     * @param integer $VirusProgress Trojan mirror scan progress
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
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("RegistryType",$param) and $param["RegistryType"] !== null) {
            $this->RegistryType = $param["RegistryType"];
        }

        if (array_key_exists("ImageRepoAddress",$param) and $param["ImageRepoAddress"] !== null) {
            $this->ImageRepoAddress = $param["ImageRepoAddress"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageTag",$param) and $param["ImageTag"] !== null) {
            $this->ImageTag = $param["ImageTag"];
        }

        if (array_key_exists("ScanStatus",$param) and $param["ScanStatus"] !== null) {
            $this->ScanStatus = $param["ScanStatus"];
        }

        if (array_key_exists("CveProgress",$param) and $param["CveProgress"] !== null) {
            $this->CveProgress = $param["CveProgress"];
        }

        if (array_key_exists("RiskProgress",$param) and $param["RiskProgress"] !== null) {
            $this->RiskProgress = $param["RiskProgress"];
        }

        if (array_key_exists("VirusProgress",$param) and $param["VirusProgress"] !== null) {
            $this->VirusProgress = $param["VirusProgress"];
        }
    }
}
