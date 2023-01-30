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
 * DescribeTcssSummary response structure.
 *
 * @method integer getImageCnt() Obtain Total number of images
 * @method void setImageCnt(integer $ImageCnt) Set Total number of images
 * @method integer getScannedImageCnt() Obtain Number of scanned images
 * @method void setScannedImageCnt(integer $ScannedImageCnt) Set Number of scanned images
 * @method integer getUnScannedImageCnt() Obtain Number of images to be scanned
 * @method void setUnScannedImageCnt(integer $UnScannedImageCnt) Set Number of images to be scanned
 * @method integer getLocalImageCnt() Obtain Number of local images
 * @method void setLocalImageCnt(integer $LocalImageCnt) Set Number of local images
 * @method integer getRepositoryImageCnt() Obtain Number of repository images
 * @method void setRepositoryImageCnt(integer $RepositoryImageCnt) Set Number of repository images
 * @method integer getRiskLocalImageCnt() Obtain Number of local images at risk
 * @method void setRiskLocalImageCnt(integer $RiskLocalImageCnt) Set Number of local images at risk
 * @method integer getRiskRepositoryImageCnt() Obtain Number of repository images at risk
 * @method void setRiskRepositoryImageCnt(integer $RiskRepositoryImageCnt) Set Number of repository images at risk
 * @method integer getContainerCnt() Obtain Number of containers
 * @method void setContainerCnt(integer $ContainerCnt) Set Number of containers
 * @method integer getRiskContainerCnt() Obtain Number of containers at risk
 * @method void setRiskContainerCnt(integer $RiskContainerCnt) Set Number of containers at risk
 * @method integer getClusterCnt() Obtain Number of clusters
 * @method void setClusterCnt(integer $ClusterCnt) Set Number of clusters
 * @method integer getRiskClusterCnt() Obtain Number of clusters at risk
 * @method void setRiskClusterCnt(integer $RiskClusterCnt) Set Number of clusters at risk
 * @method integer getUnScannedVulCnt() Obtain Number of vulnerabilities to be scanned
 * @method void setUnScannedVulCnt(integer $UnScannedVulCnt) Set Number of vulnerabilities to be scanned
 * @method integer getRiskVulCnt() Obtain Number of risk vulnerabilities
 * @method void setRiskVulCnt(integer $RiskVulCnt) Set Number of risk vulnerabilities
 * @method integer getUnScannedBaseLineCnt() Obtain Number of security baseline items to be scanned
 * @method void setUnScannedBaseLineCnt(integer $UnScannedBaseLineCnt) Set Number of security baseline items to be scanned
 * @method integer getRiskBaseLineCnt() Obtain Number of security baseline risks
 * @method void setRiskBaseLineCnt(integer $RiskBaseLineCnt) Set Number of security baseline risks
 * @method integer getRuntimeUnhandleEventCnt() Obtain Number of pending (high-risk) events at runtime
 * @method void setRuntimeUnhandleEventCnt(integer $RuntimeUnhandleEventCnt) Set Number of pending (high-risk) events at runtime
 * @method integer getUnScannedClusterCnt() Obtain Number of clusters to be scanned
 * @method void setUnScannedClusterCnt(integer $UnScannedClusterCnt) Set Number of clusters to be scanned
 * @method boolean getScanImageStatus() Obtain Whether images are scanned
 * @method void setScanImageStatus(boolean $ScanImageStatus) Set Whether images are scanned
 * @method boolean getScanClusterStatus() Obtain Whether clusters are scanned
 * @method void setScanClusterStatus(boolean $ScanClusterStatus) Set Whether clusters are scanned
 * @method boolean getScanBaseLineStatus() Obtain Whether baseline items are scanned
 * @method void setScanBaseLineStatus(boolean $ScanBaseLineStatus) Set Whether baseline items are scanned
 * @method boolean getScanVulStatus() Obtain Whether vulnerabilities are scanned for
 * @method void setScanVulStatus(boolean $ScanVulStatus) Set Whether vulnerabilities are scanned for
 * @method integer getVulRiskImageCnt() Obtain Number of images affected by vulnerabilities
 * @method void setVulRiskImageCnt(integer $VulRiskImageCnt) Set Number of images affected by vulnerabilities
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeTcssSummaryResponse extends AbstractModel
{
    /**
     * @var integer Total number of images
     */
    public $ImageCnt;

    /**
     * @var integer Number of scanned images
     */
    public $ScannedImageCnt;

    /**
     * @var integer Number of images to be scanned
     */
    public $UnScannedImageCnt;

    /**
     * @var integer Number of local images
     */
    public $LocalImageCnt;

    /**
     * @var integer Number of repository images
     */
    public $RepositoryImageCnt;

    /**
     * @var integer Number of local images at risk
     */
    public $RiskLocalImageCnt;

    /**
     * @var integer Number of repository images at risk
     */
    public $RiskRepositoryImageCnt;

    /**
     * @var integer Number of containers
     */
    public $ContainerCnt;

    /**
     * @var integer Number of containers at risk
     */
    public $RiskContainerCnt;

    /**
     * @var integer Number of clusters
     */
    public $ClusterCnt;

    /**
     * @var integer Number of clusters at risk
     */
    public $RiskClusterCnt;

    /**
     * @var integer Number of vulnerabilities to be scanned
     */
    public $UnScannedVulCnt;

    /**
     * @var integer Number of risk vulnerabilities
     */
    public $RiskVulCnt;

    /**
     * @var integer Number of security baseline items to be scanned
     */
    public $UnScannedBaseLineCnt;

    /**
     * @var integer Number of security baseline risks
     */
    public $RiskBaseLineCnt;

    /**
     * @var integer Number of pending (high-risk) events at runtime
     */
    public $RuntimeUnhandleEventCnt;

    /**
     * @var integer Number of clusters to be scanned
     */
    public $UnScannedClusterCnt;

    /**
     * @var boolean Whether images are scanned
     */
    public $ScanImageStatus;

    /**
     * @var boolean Whether clusters are scanned
     */
    public $ScanClusterStatus;

    /**
     * @var boolean Whether baseline items are scanned
     */
    public $ScanBaseLineStatus;

    /**
     * @var boolean Whether vulnerabilities are scanned for
     */
    public $ScanVulStatus;

    /**
     * @var integer Number of images affected by vulnerabilities
     */
    public $VulRiskImageCnt;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $ImageCnt Total number of images
     * @param integer $ScannedImageCnt Number of scanned images
     * @param integer $UnScannedImageCnt Number of images to be scanned
     * @param integer $LocalImageCnt Number of local images
     * @param integer $RepositoryImageCnt Number of repository images
     * @param integer $RiskLocalImageCnt Number of local images at risk
     * @param integer $RiskRepositoryImageCnt Number of repository images at risk
     * @param integer $ContainerCnt Number of containers
     * @param integer $RiskContainerCnt Number of containers at risk
     * @param integer $ClusterCnt Number of clusters
     * @param integer $RiskClusterCnt Number of clusters at risk
     * @param integer $UnScannedVulCnt Number of vulnerabilities to be scanned
     * @param integer $RiskVulCnt Number of risk vulnerabilities
     * @param integer $UnScannedBaseLineCnt Number of security baseline items to be scanned
     * @param integer $RiskBaseLineCnt Number of security baseline risks
     * @param integer $RuntimeUnhandleEventCnt Number of pending (high-risk) events at runtime
     * @param integer $UnScannedClusterCnt Number of clusters to be scanned
     * @param boolean $ScanImageStatus Whether images are scanned
     * @param boolean $ScanClusterStatus Whether clusters are scanned
     * @param boolean $ScanBaseLineStatus Whether baseline items are scanned
     * @param boolean $ScanVulStatus Whether vulnerabilities are scanned for
     * @param integer $VulRiskImageCnt Number of images affected by vulnerabilities
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("ImageCnt",$param) and $param["ImageCnt"] !== null) {
            $this->ImageCnt = $param["ImageCnt"];
        }

        if (array_key_exists("ScannedImageCnt",$param) and $param["ScannedImageCnt"] !== null) {
            $this->ScannedImageCnt = $param["ScannedImageCnt"];
        }

        if (array_key_exists("UnScannedImageCnt",$param) and $param["UnScannedImageCnt"] !== null) {
            $this->UnScannedImageCnt = $param["UnScannedImageCnt"];
        }

        if (array_key_exists("LocalImageCnt",$param) and $param["LocalImageCnt"] !== null) {
            $this->LocalImageCnt = $param["LocalImageCnt"];
        }

        if (array_key_exists("RepositoryImageCnt",$param) and $param["RepositoryImageCnt"] !== null) {
            $this->RepositoryImageCnt = $param["RepositoryImageCnt"];
        }

        if (array_key_exists("RiskLocalImageCnt",$param) and $param["RiskLocalImageCnt"] !== null) {
            $this->RiskLocalImageCnt = $param["RiskLocalImageCnt"];
        }

        if (array_key_exists("RiskRepositoryImageCnt",$param) and $param["RiskRepositoryImageCnt"] !== null) {
            $this->RiskRepositoryImageCnt = $param["RiskRepositoryImageCnt"];
        }

        if (array_key_exists("ContainerCnt",$param) and $param["ContainerCnt"] !== null) {
            $this->ContainerCnt = $param["ContainerCnt"];
        }

        if (array_key_exists("RiskContainerCnt",$param) and $param["RiskContainerCnt"] !== null) {
            $this->RiskContainerCnt = $param["RiskContainerCnt"];
        }

        if (array_key_exists("ClusterCnt",$param) and $param["ClusterCnt"] !== null) {
            $this->ClusterCnt = $param["ClusterCnt"];
        }

        if (array_key_exists("RiskClusterCnt",$param) and $param["RiskClusterCnt"] !== null) {
            $this->RiskClusterCnt = $param["RiskClusterCnt"];
        }

        if (array_key_exists("UnScannedVulCnt",$param) and $param["UnScannedVulCnt"] !== null) {
            $this->UnScannedVulCnt = $param["UnScannedVulCnt"];
        }

        if (array_key_exists("RiskVulCnt",$param) and $param["RiskVulCnt"] !== null) {
            $this->RiskVulCnt = $param["RiskVulCnt"];
        }

        if (array_key_exists("UnScannedBaseLineCnt",$param) and $param["UnScannedBaseLineCnt"] !== null) {
            $this->UnScannedBaseLineCnt = $param["UnScannedBaseLineCnt"];
        }

        if (array_key_exists("RiskBaseLineCnt",$param) and $param["RiskBaseLineCnt"] !== null) {
            $this->RiskBaseLineCnt = $param["RiskBaseLineCnt"];
        }

        if (array_key_exists("RuntimeUnhandleEventCnt",$param) and $param["RuntimeUnhandleEventCnt"] !== null) {
            $this->RuntimeUnhandleEventCnt = $param["RuntimeUnhandleEventCnt"];
        }

        if (array_key_exists("UnScannedClusterCnt",$param) and $param["UnScannedClusterCnt"] !== null) {
            $this->UnScannedClusterCnt = $param["UnScannedClusterCnt"];
        }

        if (array_key_exists("ScanImageStatus",$param) and $param["ScanImageStatus"] !== null) {
            $this->ScanImageStatus = $param["ScanImageStatus"];
        }

        if (array_key_exists("ScanClusterStatus",$param) and $param["ScanClusterStatus"] !== null) {
            $this->ScanClusterStatus = $param["ScanClusterStatus"];
        }

        if (array_key_exists("ScanBaseLineStatus",$param) and $param["ScanBaseLineStatus"] !== null) {
            $this->ScanBaseLineStatus = $param["ScanBaseLineStatus"];
        }

        if (array_key_exists("ScanVulStatus",$param) and $param["ScanVulStatus"] !== null) {
            $this->ScanVulStatus = $param["ScanVulStatus"];
        }

        if (array_key_exists("VulRiskImageCnt",$param) and $param["VulRiskImageCnt"] !== null) {
            $this->VulRiskImageCnt = $param["VulRiskImageCnt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
