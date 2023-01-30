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
 * List of image IDs
 *
 * @method string getImageID() Obtain Image ID
 * @method void setImageID(string $ImageID) Set Image ID
 * @method string getImageName() Obtain Image name
 * @method void setImageName(string $ImageName) Set Image name
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method integer getSize() Obtain Image size
 * @method void setSize(integer $Size) Set Image size
 * @method integer getHostCnt() Obtain Number of servers
 * @method void setHostCnt(integer $HostCnt) Set Number of servers
 * @method integer getContainerCnt() Obtain Number of containers
 * @method void setContainerCnt(integer $ContainerCnt) Set Number of containers
 * @method string getScanTime() Obtain Scan time
 * @method void setScanTime(string $ScanTime) Set Scan time
 * @method integer getVulCnt() Obtain Number of vulnerabilities
 * @method void setVulCnt(integer $VulCnt) Set Number of vulnerabilities
 * @method integer getVirusCnt() Obtain Number of viruses
 * @method void setVirusCnt(integer $VirusCnt) Set Number of viruses
 * @method integer getRiskCnt() Obtain Number of sensitive data items
 * @method void setRiskCnt(integer $RiskCnt) Set Number of sensitive data items
 * @method boolean getIsTrustImage() Obtain Whether it is a trusted image
 * @method void setIsTrustImage(boolean $IsTrustImage) Set Whether it is a trusted image
 * @method string getOsName() Obtain Image system
 * @method void setOsName(string $OsName) Set Image system
 * @method string getAgentError() Obtain Image scan error in the agent
 * @method void setAgentError(string $AgentError) Set Image scan error in the agent
 * @method string getScanError() Obtain Image scan error on the backend
 * @method void setScanError(string $ScanError) Set Image scan error on the backend
 * @method string getScanStatus() Obtain Scanning status
 * @method void setScanStatus(string $ScanStatus) Set Scanning status
 * @method string getScanVirusError() Obtain Trojan scan error message
 * @method void setScanVirusError(string $ScanVirusError) Set Trojan scan error message
 * @method string getScanVulError() Obtain Vulnerability scan error message
 * @method void setScanVulError(string $ScanVulError) Set Vulnerability scan error message
 * @method string getScanRiskError() Obtain Risk scan error message
 * @method void setScanRiskError(string $ScanRiskError) Set Risk scan error message
 * @method integer getIsSuggest() Obtain Whether the image is of high priority. Valid values: `0` (no); others (yes).
 * @method void setIsSuggest(integer $IsSuggest) Set Whether the image is of high priority. Valid values: `0` (no); others (yes).
 * @method integer getIsAuthorized() Obtain Whether it is licensed. Valid values: `1` (yes); `0` (no).
 * @method void setIsAuthorized(integer $IsAuthorized) Set Whether it is licensed. Valid values: `1` (yes); `0` (no).
 * @method integer getComponentCnt() Obtain Number of components
 * @method void setComponentCnt(integer $ComponentCnt) Set Number of components
 */
class ImagesInfo extends AbstractModel
{
    /**
     * @var string Image ID
     */
    public $ImageID;

    /**
     * @var string Image name
     */
    public $ImageName;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var integer Image size
     */
    public $Size;

    /**
     * @var integer Number of servers
     */
    public $HostCnt;

    /**
     * @var integer Number of containers
     */
    public $ContainerCnt;

    /**
     * @var string Scan time
     */
    public $ScanTime;

    /**
     * @var integer Number of vulnerabilities
     */
    public $VulCnt;

    /**
     * @var integer Number of viruses
     */
    public $VirusCnt;

    /**
     * @var integer Number of sensitive data items
     */
    public $RiskCnt;

    /**
     * @var boolean Whether it is a trusted image
     */
    public $IsTrustImage;

    /**
     * @var string Image system
     */
    public $OsName;

    /**
     * @var string Image scan error in the agent
     */
    public $AgentError;

    /**
     * @var string Image scan error on the backend
     */
    public $ScanError;

    /**
     * @var string Scanning status
     */
    public $ScanStatus;

    /**
     * @var string Trojan scan error message
     */
    public $ScanVirusError;

    /**
     * @var string Vulnerability scan error message
     */
    public $ScanVulError;

    /**
     * @var string Risk scan error message
     */
    public $ScanRiskError;

    /**
     * @var integer Whether the image is of high priority. Valid values: `0` (no); others (yes).
     */
    public $IsSuggest;

    /**
     * @var integer Whether it is licensed. Valid values: `1` (yes); `0` (no).
     */
    public $IsAuthorized;

    /**
     * @var integer Number of components
     */
    public $ComponentCnt;

    /**
     * @param string $ImageID Image ID
     * @param string $ImageName Image name
     * @param string $CreateTime Creation time
     * @param integer $Size Image size
     * @param integer $HostCnt Number of servers
     * @param integer $ContainerCnt Number of containers
     * @param string $ScanTime Scan time
     * @param integer $VulCnt Number of vulnerabilities
     * @param integer $VirusCnt Number of viruses
     * @param integer $RiskCnt Number of sensitive data items
     * @param boolean $IsTrustImage Whether it is a trusted image
     * @param string $OsName Image system
     * @param string $AgentError Image scan error in the agent
     * @param string $ScanError Image scan error on the backend
     * @param string $ScanStatus Scanning status
     * @param string $ScanVirusError Trojan scan error message
     * @param string $ScanVulError Vulnerability scan error message
     * @param string $ScanRiskError Risk scan error message
     * @param integer $IsSuggest Whether the image is of high priority. Valid values: `0` (no); others (yes).
     * @param integer $IsAuthorized Whether it is licensed. Valid values: `1` (yes); `0` (no).
     * @param integer $ComponentCnt Number of components
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
        if (array_key_exists("ImageID",$param) and $param["ImageID"] !== null) {
            $this->ImageID = $param["ImageID"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("HostCnt",$param) and $param["HostCnt"] !== null) {
            $this->HostCnt = $param["HostCnt"];
        }

        if (array_key_exists("ContainerCnt",$param) and $param["ContainerCnt"] !== null) {
            $this->ContainerCnt = $param["ContainerCnt"];
        }

        if (array_key_exists("ScanTime",$param) and $param["ScanTime"] !== null) {
            $this->ScanTime = $param["ScanTime"];
        }

        if (array_key_exists("VulCnt",$param) and $param["VulCnt"] !== null) {
            $this->VulCnt = $param["VulCnt"];
        }

        if (array_key_exists("VirusCnt",$param) and $param["VirusCnt"] !== null) {
            $this->VirusCnt = $param["VirusCnt"];
        }

        if (array_key_exists("RiskCnt",$param) and $param["RiskCnt"] !== null) {
            $this->RiskCnt = $param["RiskCnt"];
        }

        if (array_key_exists("IsTrustImage",$param) and $param["IsTrustImage"] !== null) {
            $this->IsTrustImage = $param["IsTrustImage"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("AgentError",$param) and $param["AgentError"] !== null) {
            $this->AgentError = $param["AgentError"];
        }

        if (array_key_exists("ScanError",$param) and $param["ScanError"] !== null) {
            $this->ScanError = $param["ScanError"];
        }

        if (array_key_exists("ScanStatus",$param) and $param["ScanStatus"] !== null) {
            $this->ScanStatus = $param["ScanStatus"];
        }

        if (array_key_exists("ScanVirusError",$param) and $param["ScanVirusError"] !== null) {
            $this->ScanVirusError = $param["ScanVirusError"];
        }

        if (array_key_exists("ScanVulError",$param) and $param["ScanVulError"] !== null) {
            $this->ScanVulError = $param["ScanVulError"];
        }

        if (array_key_exists("ScanRiskError",$param) and $param["ScanRiskError"] !== null) {
            $this->ScanRiskError = $param["ScanRiskError"];
        }

        if (array_key_exists("IsSuggest",$param) and $param["IsSuggest"] !== null) {
            $this->IsSuggest = $param["IsSuggest"];
        }

        if (array_key_exists("IsAuthorized",$param) and $param["IsAuthorized"] !== null) {
            $this->IsAuthorized = $param["IsAuthorized"];
        }

        if (array_key_exists("ComponentCnt",$param) and $param["ComponentCnt"] !== null) {
            $this->ComponentCnt = $param["ComponentCnt"];
        }
    }
}
