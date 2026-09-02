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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Mirror asset detail
 *
 * @method string getImageDigest() Obtain <p>Image digests.</p>
 * @method void setImageDigest(string $ImageDigest) Set <p>Image digests.</p>
 * @method string getImageRepoAddress() Obtain <p>Repository address</p>
 * @method void setImageRepoAddress(string $ImageRepoAddress) Set <p>Repository address</p>
 * @method string getRegistryType() Obtain <p>Repository type</p>
 * @method void setRegistryType(string $RegistryType) Set <p>Repository type</p>
 * @method string getImageName() Obtain <p>Image name.</p>
 * @method void setImageName(string $ImageName) Set <p>Image name.</p>
 * @method string getImageTag() Obtain <p>Image tag</p>
 * @method void setImageTag(string $ImageTag) Set <p>Image tag</p>
 * @method string getLatestScanTime() Obtain <p>Last scan time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method void setLatestScanTime(string $LatestScanTime) Set <p>Last scan time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method integer getScanStatus() Obtain <p>Scan status</p><p>Enumeration values:</p><ul><li>0: Initial state</li><li>1: Issued</li><li>2: Scanning</li><li>3: Scan complete</li><li>4: Scan timeout</li><li>5: Scan failure</li></ul>
 * @method void setScanStatus(integer $ScanStatus) Set <p>Scan status</p><p>Enumeration values:</p><ul><li>0: Initial state</li><li>1: Issued</li><li>2: Scanning</li><li>3: Scan complete</li><li>4: Scan timeout</li><li>5: Scan failure</li></ul>
 * @method integer getVulCnt() Obtain <p>Number of vulnerabilities</p>
 * @method void setVulCnt(integer $VulCnt) Set <p>Number of vulnerabilities</p>
 * @method integer getVirusCnt() Obtain <p>Number of Trojans</p>
 * @method void setVirusCnt(integer $VirusCnt) Set <p>Number of Trojans</p>
 * @method integer getSensitiveCnt() Obtain <p>Number of sensitive information entries.</p>
 * @method void setSensitiveCnt(integer $SensitiveCnt) Set <p>Number of sensitive information entries.</p>
 * @method string getInstanceId() Obtain <p>Repository instance id.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Repository instance id.</p>
 * @method string getInstanceName() Obtain <p>Image repository name</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Image repository name</p>
 * @method string getNamespace() Obtain <p>Namespace.</p>
 * @method void setNamespace(string $Namespace) Set <p>Namespace.</p>
 * @method integer getIsAuthorized() Obtain <p>Whether to authorize.</p>
 * @method void setIsAuthorized(integer $IsAuthorized) Set <p>Whether to authorize.</p>
 * @method integer getImageSize() Obtain <p>Image size.</p>
 * @method void setImageSize(integer $ImageSize) Set <p>Image size.</p>
 * @method string getImageId() Obtain <p>Image ID.</p>
 * @method void setImageId(string $ImageId) Set <p>Image ID.</p>
 * @method string getRegistryRegion() Obtain <p>Repository region</p>
 * @method void setRegistryRegion(string $RegistryRegion) Set <p>Repository region</p>
 * @method string getImageCreateTime() Obtain <p>Image creation time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method void setImageCreateTime(string $ImageCreateTime) Set <p>Image creation time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method string getId() Obtain <p>id</p>
 * @method void setId(string $Id) Set <p>id</p>
 * @method string getOwnerAccountName() Obtain <p>Account name associated with the mirror</p>
 * @method void setOwnerAccountName(string $OwnerAccountName) Set <p>Account name associated with the mirror</p>
 * @method string getOwnerUin() Obtain <p>uin of the associated account of the mirror</p>
 * @method void setOwnerUin(string $OwnerUin) Set <p>uin of the associated account of the mirror</p>
 * @method integer getOwnerAppId() Obtain <p>appid of the account associated with the mirror</p>
 * @method void setOwnerAppId(integer $OwnerAppId) Set <p>appid of the account associated with the mirror</p>
 * @method integer getLowLevelVulCnt() Obtain <p>Number of low-risk vulnerabilities</p>
 * @method void setLowLevelVulCnt(integer $LowLevelVulCnt) Set <p>Number of low-risk vulnerabilities</p>
 * @method integer getMediumLevelVulCnt() Obtain <p>Medium-risk vulnerability count</p>
 * @method void setMediumLevelVulCnt(integer $MediumLevelVulCnt) Set <p>Medium-risk vulnerability count</p>
 * @method integer getHighLevelVulCnt() Obtain <p>Number of high-risk vulnerabilities</p>
 * @method void setHighLevelVulCnt(integer $HighLevelVulCnt) Set <p>Number of high-risk vulnerabilities</p>
 * @method integer getCriticalLevelVulCnt() Obtain <p>Number of critical risk vulnerabilities</p>
 * @method void setCriticalLevelVulCnt(integer $CriticalLevelVulCnt) Set <p>Number of critical risk vulnerabilities</p>
 * @method integer getLowLevelVirusCnt() Obtain <p>Number of low-risk trojans</p>
 * @method void setLowLevelVirusCnt(integer $LowLevelVirusCnt) Set <p>Number of low-risk trojans</p>
 * @method integer getMediumLevelVirusCnt() Obtain <p>Number of medium-risk trojans</p>
 * @method void setMediumLevelVirusCnt(integer $MediumLevelVirusCnt) Set <p>Number of medium-risk trojans</p>
 * @method integer getHighLevelVirusCnt() Obtain <p>Number of high-risk trojans</p>
 * @method void setHighLevelVirusCnt(integer $HighLevelVirusCnt) Set <p>Number of high-risk trojans</p>
 * @method integer getCriticalLevelVirusCnt() Obtain <p>Number of severe trojans</p>
 * @method void setCriticalLevelVirusCnt(integer $CriticalLevelVirusCnt) Set <p>Number of severe trojans</p>
 * @method integer getEmergencyVulCnt() Obtain <p>Number of emergency vulnerabilities</p>
 * @method void setEmergencyVulCnt(integer $EmergencyVulCnt) Set <p>Number of emergency vulnerabilities</p>
 * @method integer getLowLevelSensitiveCnt() Obtain <p>Number of low-risk sensitive data items</p>
 * @method void setLowLevelSensitiveCnt(integer $LowLevelSensitiveCnt) Set <p>Number of low-risk sensitive data items</p>
 * @method integer getMediumLevelSensitiveCnt() Obtain <p>Number of medium-risk sensitive data items</p>
 * @method void setMediumLevelSensitiveCnt(integer $MediumLevelSensitiveCnt) Set <p>Number of medium-risk sensitive data items</p>
 * @method integer getHighLevelSensitiveCnt() Obtain <p>Number of high-risk sensitive data items</p>
 * @method void setHighLevelSensitiveCnt(integer $HighLevelSensitiveCnt) Set <p>Number of high-risk sensitive data items</p>
 * @method integer getCriticalLevelSensitiveCnt() Obtain <p>Number of critical sensitive data items</p>
 * @method void setCriticalLevelSensitiveCnt(integer $CriticalLevelSensitiveCnt) Set <p>Number of critical sensitive data items</p>
 */
class ImageAssetDetail extends AbstractModel
{
    /**
     * @var string <p>Image digests.</p>
     */
    public $ImageDigest;

    /**
     * @var string <p>Repository address</p>
     */
    public $ImageRepoAddress;

    /**
     * @var string <p>Repository type</p>
     */
    public $RegistryType;

    /**
     * @var string <p>Image name.</p>
     */
    public $ImageName;

    /**
     * @var string <p>Image tag</p>
     */
    public $ImageTag;

    /**
     * @var string <p>Last scan time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     */
    public $LatestScanTime;

    /**
     * @var integer <p>Scan status</p><p>Enumeration values:</p><ul><li>0: Initial state</li><li>1: Issued</li><li>2: Scanning</li><li>3: Scan complete</li><li>4: Scan timeout</li><li>5: Scan failure</li></ul>
     */
    public $ScanStatus;

    /**
     * @var integer <p>Number of vulnerabilities</p>
     */
    public $VulCnt;

    /**
     * @var integer <p>Number of Trojans</p>
     */
    public $VirusCnt;

    /**
     * @var integer <p>Number of sensitive information entries.</p>
     */
    public $SensitiveCnt;

    /**
     * @var string <p>Repository instance id.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Image repository name</p>
     */
    public $InstanceName;

    /**
     * @var string <p>Namespace.</p>
     */
    public $Namespace;

    /**
     * @var integer <p>Whether to authorize.</p>
     */
    public $IsAuthorized;

    /**
     * @var integer <p>Image size.</p>
     */
    public $ImageSize;

    /**
     * @var string <p>Image ID.</p>
     */
    public $ImageId;

    /**
     * @var string <p>Repository region</p>
     */
    public $RegistryRegion;

    /**
     * @var string <p>Image creation time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     */
    public $ImageCreateTime;

    /**
     * @var string <p>id</p>
     */
    public $Id;

    /**
     * @var string <p>Account name associated with the mirror</p>
     */
    public $OwnerAccountName;

    /**
     * @var string <p>uin of the associated account of the mirror</p>
     */
    public $OwnerUin;

    /**
     * @var integer <p>appid of the account associated with the mirror</p>
     */
    public $OwnerAppId;

    /**
     * @var integer <p>Number of low-risk vulnerabilities</p>
     */
    public $LowLevelVulCnt;

    /**
     * @var integer <p>Medium-risk vulnerability count</p>
     */
    public $MediumLevelVulCnt;

    /**
     * @var integer <p>Number of high-risk vulnerabilities</p>
     */
    public $HighLevelVulCnt;

    /**
     * @var integer <p>Number of critical risk vulnerabilities</p>
     */
    public $CriticalLevelVulCnt;

    /**
     * @var integer <p>Number of low-risk trojans</p>
     */
    public $LowLevelVirusCnt;

    /**
     * @var integer <p>Number of medium-risk trojans</p>
     */
    public $MediumLevelVirusCnt;

    /**
     * @var integer <p>Number of high-risk trojans</p>
     */
    public $HighLevelVirusCnt;

    /**
     * @var integer <p>Number of severe trojans</p>
     */
    public $CriticalLevelVirusCnt;

    /**
     * @var integer <p>Number of emergency vulnerabilities</p>
     */
    public $EmergencyVulCnt;

    /**
     * @var integer <p>Number of low-risk sensitive data items</p>
     */
    public $LowLevelSensitiveCnt;

    /**
     * @var integer <p>Number of medium-risk sensitive data items</p>
     */
    public $MediumLevelSensitiveCnt;

    /**
     * @var integer <p>Number of high-risk sensitive data items</p>
     */
    public $HighLevelSensitiveCnt;

    /**
     * @var integer <p>Number of critical sensitive data items</p>
     */
    public $CriticalLevelSensitiveCnt;

    /**
     * @param string $ImageDigest <p>Image digests.</p>
     * @param string $ImageRepoAddress <p>Repository address</p>
     * @param string $RegistryType <p>Repository type</p>
     * @param string $ImageName <p>Image name.</p>
     * @param string $ImageTag <p>Image tag</p>
     * @param string $LatestScanTime <p>Last scan time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     * @param integer $ScanStatus <p>Scan status</p><p>Enumeration values:</p><ul><li>0: Initial state</li><li>1: Issued</li><li>2: Scanning</li><li>3: Scan complete</li><li>4: Scan timeout</li><li>5: Scan failure</li></ul>
     * @param integer $VulCnt <p>Number of vulnerabilities</p>
     * @param integer $VirusCnt <p>Number of Trojans</p>
     * @param integer $SensitiveCnt <p>Number of sensitive information entries.</p>
     * @param string $InstanceId <p>Repository instance id.</p>
     * @param string $InstanceName <p>Image repository name</p>
     * @param string $Namespace <p>Namespace.</p>
     * @param integer $IsAuthorized <p>Whether to authorize.</p>
     * @param integer $ImageSize <p>Image size.</p>
     * @param string $ImageId <p>Image ID.</p>
     * @param string $RegistryRegion <p>Repository region</p>
     * @param string $ImageCreateTime <p>Image creation time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     * @param string $Id <p>id</p>
     * @param string $OwnerAccountName <p>Account name associated with the mirror</p>
     * @param string $OwnerUin <p>uin of the associated account of the mirror</p>
     * @param integer $OwnerAppId <p>appid of the account associated with the mirror</p>
     * @param integer $LowLevelVulCnt <p>Number of low-risk vulnerabilities</p>
     * @param integer $MediumLevelVulCnt <p>Medium-risk vulnerability count</p>
     * @param integer $HighLevelVulCnt <p>Number of high-risk vulnerabilities</p>
     * @param integer $CriticalLevelVulCnt <p>Number of critical risk vulnerabilities</p>
     * @param integer $LowLevelVirusCnt <p>Number of low-risk trojans</p>
     * @param integer $MediumLevelVirusCnt <p>Number of medium-risk trojans</p>
     * @param integer $HighLevelVirusCnt <p>Number of high-risk trojans</p>
     * @param integer $CriticalLevelVirusCnt <p>Number of severe trojans</p>
     * @param integer $EmergencyVulCnt <p>Number of emergency vulnerabilities</p>
     * @param integer $LowLevelSensitiveCnt <p>Number of low-risk sensitive data items</p>
     * @param integer $MediumLevelSensitiveCnt <p>Number of medium-risk sensitive data items</p>
     * @param integer $HighLevelSensitiveCnt <p>Number of high-risk sensitive data items</p>
     * @param integer $CriticalLevelSensitiveCnt <p>Number of critical sensitive data items</p>
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
        if (array_key_exists("ImageDigest",$param) and $param["ImageDigest"] !== null) {
            $this->ImageDigest = $param["ImageDigest"];
        }

        if (array_key_exists("ImageRepoAddress",$param) and $param["ImageRepoAddress"] !== null) {
            $this->ImageRepoAddress = $param["ImageRepoAddress"];
        }

        if (array_key_exists("RegistryType",$param) and $param["RegistryType"] !== null) {
            $this->RegistryType = $param["RegistryType"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageTag",$param) and $param["ImageTag"] !== null) {
            $this->ImageTag = $param["ImageTag"];
        }

        if (array_key_exists("LatestScanTime",$param) and $param["LatestScanTime"] !== null) {
            $this->LatestScanTime = $param["LatestScanTime"];
        }

        if (array_key_exists("ScanStatus",$param) and $param["ScanStatus"] !== null) {
            $this->ScanStatus = $param["ScanStatus"];
        }

        if (array_key_exists("VulCnt",$param) and $param["VulCnt"] !== null) {
            $this->VulCnt = $param["VulCnt"];
        }

        if (array_key_exists("VirusCnt",$param) and $param["VirusCnt"] !== null) {
            $this->VirusCnt = $param["VirusCnt"];
        }

        if (array_key_exists("SensitiveCnt",$param) and $param["SensitiveCnt"] !== null) {
            $this->SensitiveCnt = $param["SensitiveCnt"];
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

        if (array_key_exists("IsAuthorized",$param) and $param["IsAuthorized"] !== null) {
            $this->IsAuthorized = $param["IsAuthorized"];
        }

        if (array_key_exists("ImageSize",$param) and $param["ImageSize"] !== null) {
            $this->ImageSize = $param["ImageSize"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("RegistryRegion",$param) and $param["RegistryRegion"] !== null) {
            $this->RegistryRegion = $param["RegistryRegion"];
        }

        if (array_key_exists("ImageCreateTime",$param) and $param["ImageCreateTime"] !== null) {
            $this->ImageCreateTime = $param["ImageCreateTime"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("OwnerAccountName",$param) and $param["OwnerAccountName"] !== null) {
            $this->OwnerAccountName = $param["OwnerAccountName"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("OwnerAppId",$param) and $param["OwnerAppId"] !== null) {
            $this->OwnerAppId = $param["OwnerAppId"];
        }

        if (array_key_exists("LowLevelVulCnt",$param) and $param["LowLevelVulCnt"] !== null) {
            $this->LowLevelVulCnt = $param["LowLevelVulCnt"];
        }

        if (array_key_exists("MediumLevelVulCnt",$param) and $param["MediumLevelVulCnt"] !== null) {
            $this->MediumLevelVulCnt = $param["MediumLevelVulCnt"];
        }

        if (array_key_exists("HighLevelVulCnt",$param) and $param["HighLevelVulCnt"] !== null) {
            $this->HighLevelVulCnt = $param["HighLevelVulCnt"];
        }

        if (array_key_exists("CriticalLevelVulCnt",$param) and $param["CriticalLevelVulCnt"] !== null) {
            $this->CriticalLevelVulCnt = $param["CriticalLevelVulCnt"];
        }

        if (array_key_exists("LowLevelVirusCnt",$param) and $param["LowLevelVirusCnt"] !== null) {
            $this->LowLevelVirusCnt = $param["LowLevelVirusCnt"];
        }

        if (array_key_exists("MediumLevelVirusCnt",$param) and $param["MediumLevelVirusCnt"] !== null) {
            $this->MediumLevelVirusCnt = $param["MediumLevelVirusCnt"];
        }

        if (array_key_exists("HighLevelVirusCnt",$param) and $param["HighLevelVirusCnt"] !== null) {
            $this->HighLevelVirusCnt = $param["HighLevelVirusCnt"];
        }

        if (array_key_exists("CriticalLevelVirusCnt",$param) and $param["CriticalLevelVirusCnt"] !== null) {
            $this->CriticalLevelVirusCnt = $param["CriticalLevelVirusCnt"];
        }

        if (array_key_exists("EmergencyVulCnt",$param) and $param["EmergencyVulCnt"] !== null) {
            $this->EmergencyVulCnt = $param["EmergencyVulCnt"];
        }

        if (array_key_exists("LowLevelSensitiveCnt",$param) and $param["LowLevelSensitiveCnt"] !== null) {
            $this->LowLevelSensitiveCnt = $param["LowLevelSensitiveCnt"];
        }

        if (array_key_exists("MediumLevelSensitiveCnt",$param) and $param["MediumLevelSensitiveCnt"] !== null) {
            $this->MediumLevelSensitiveCnt = $param["MediumLevelSensitiveCnt"];
        }

        if (array_key_exists("HighLevelSensitiveCnt",$param) and $param["HighLevelSensitiveCnt"] !== null) {
            $this->HighLevelSensitiveCnt = $param["HighLevelSensitiveCnt"];
        }

        if (array_key_exists("CriticalLevelSensitiveCnt",$param) and $param["CriticalLevelSensitiveCnt"] !== null) {
            $this->CriticalLevelSensitiveCnt = $param["CriticalLevelSensitiveCnt"];
        }
    }
}
