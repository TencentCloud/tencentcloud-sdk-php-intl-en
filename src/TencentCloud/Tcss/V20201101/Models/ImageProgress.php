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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Basic image information
 *
 * @method string getImageId() Obtain Image ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImageId(string $ImageId) Set Image ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegistryType() Obtain Repository type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegistryType(string $RegistryType) Set Repository type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getImageRepoAddress() Obtain Image repository address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImageRepoAddress(string $ImageRepoAddress) Set Image repository address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceName() Obtain Instance name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceName(string $InstanceName) Set Instance name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNamespace() Obtain Namespace
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNamespace(string $Namespace) Set Namespace
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getImageName() Obtain Repository name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImageName(string $ImageName) Set Repository name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getImageTag() Obtain Image tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setImageTag(string $ImageTag) Set Image tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getScanStatus() Obtain Image scanning status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScanStatus(string $ScanStatus) Set Image scanning status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCveProgress() Obtain CVE scanning progress of the image
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCveProgress(integer $CveProgress) Set CVE scanning progress of the image
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRiskProgress() Obtain Sensitive data scanning progress of the image
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRiskProgress(integer $RiskProgress) Set Sensitive data scanning progress of the image
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getVirusProgress() Obtain Trojan scanning progress of the image
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVirusProgress(integer $VirusProgress) Set Trojan scanning progress of the image
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ImageProgress extends AbstractModel
{
    /**
     * @var string Image ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImageId;

    /**
     * @var string Repository type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegistryType;

    /**
     * @var string Image repository address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImageRepoAddress;

    /**
     * @var string Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string Instance name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceName;

    /**
     * @var string Namespace
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Namespace;

    /**
     * @var string Repository name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImageName;

    /**
     * @var string Image tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ImageTag;

    /**
     * @var string Image scanning status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ScanStatus;

    /**
     * @var integer CVE scanning progress of the image
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CveProgress;

    /**
     * @var integer Sensitive data scanning progress of the image
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RiskProgress;

    /**
     * @var integer Trojan scanning progress of the image
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VirusProgress;

    /**
     * @param string $ImageId Image ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RegistryType Repository type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ImageRepoAddress Image repository address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceName Instance name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Namespace Namespace
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ImageName Repository name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ImageTag Image tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ScanStatus Image scanning status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CveProgress CVE scanning progress of the image
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RiskProgress Sensitive data scanning progress of the image
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $VirusProgress Trojan scanning progress of the image
Note: This field may return null, indicating that no valid values can be obtained.
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
