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
 * Asset information
 *
 * @method integer getCustomerAssetId() Obtain <p>Customer asset ID.</p>
 * @method void setCustomerAssetId(integer $CustomerAssetId) Set <p>Customer asset ID.</p>
 * @method string getAssetType() Obtain <p>Asset category.</p>
 * @method void setAssetType(string $AssetType) Set <p>Asset category.</p>
 * @method string getAssetName() Obtain <p>Asset name.</p>
 * @method void setAssetName(string $AssetName) Set <p>Asset name.</p>
 * @method string getImageTag() Obtain <p>When the asset is an image, this field represents the image tag.</p>
 * @method void setImageTag(string $ImageTag) Set <p>When the asset is an image, this field represents the image tag.</p>
 * @method string getHostIP() Obtain <p>The host IP address where the asset is located.</p>
 * @method void setHostIP(string $HostIP) Set <p>The host IP address where the asset is located.</p>
 * @method string getNodeName() Obtain <p>Name of the node to which the asset belongs.</p>
 * @method void setNodeName(string $NodeName) Set <p>Name of the node to which the asset belongs.</p>
 * @method string getCheckStatus() Obtain <p>Check status.</p><p>CHECK_INIT: pending check</p><p>CHECK_RUNNING: checking</p><p>CHECK_FINISHED: check completed</p><p>CHECK_FAILED: check failed</p>
 * @method void setCheckStatus(string $CheckStatus) Set <p>Check status.</p><p>CHECK_INIT: pending check</p><p>CHECK_RUNNING: checking</p><p>CHECK_FINISHED: check completed</p><p>CHECK_FAILED: check failed</p>
 * @method integer getPassedPolicyItemCount() Obtain <p>Number of check items passed by this type of asset.</p>
 * @method void setPassedPolicyItemCount(integer $PassedPolicyItemCount) Set <p>Number of check items passed by this type of asset.</p>
 * @method integer getFailedPolicyItemCount() Obtain <p>Number of check items failed by this type of asset.</p>
 * @method void setFailedPolicyItemCount(integer $FailedPolicyItemCount) Set <p>Number of check items failed by this type of asset.</p>
 * @method string getLastCheckTime() Obtain <p>Last check time.</p>
 * @method void setLastCheckTime(string $LastCheckTime) Set <p>Last check time.</p>
 * @method string getCheckResult() Obtain <p>Check result:<br>RESULT_FAILED: failed<br>RESULT_PASSED: passed</p>
 * @method void setCheckResult(string $CheckResult) Set <p>Check result:<br>RESULT_FAILED: failed<br>RESULT_PASSED: passed</p>
 * @method string getInstanceId() Obtain <p>Host node instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Host node instance ID.</p>
 * @method ImageRegistryInfo getImageRegistryInfo() Obtain <p>Image repository information.</p>
 * @method void setImageRegistryInfo(ImageRegistryInfo $ImageRegistryInfo) Set <p>Image repository information.</p>
 * @method string getClusterID() Obtain <p>Cluster ID.</p>
 * @method void setClusterID(string $ClusterID) Set <p>Cluster ID.</p>
 * @method string getClusterName() Obtain <p>Cluster name.</p>
 * @method void setClusterName(string $ClusterName) Set <p>Cluster name.</p>
 * @method string getAssetUniqueID() Obtain <p>Unique asset ID.</p><p>Default value: -</p>
 * @method void setAssetUniqueID(string $AssetUniqueID) Set <p>Unique asset ID.</p><p>Default value: -</p>
 */
class ComplianceAssetInfo extends AbstractModel
{
    /**
     * @var integer <p>Customer asset ID.</p>
     */
    public $CustomerAssetId;

    /**
     * @var string <p>Asset category.</p>
     */
    public $AssetType;

    /**
     * @var string <p>Asset name.</p>
     */
    public $AssetName;

    /**
     * @var string <p>When the asset is an image, this field represents the image tag.</p>
     */
    public $ImageTag;

    /**
     * @var string <p>The host IP address where the asset is located.</p>
     */
    public $HostIP;

    /**
     * @var string <p>Name of the node to which the asset belongs.</p>
     */
    public $NodeName;

    /**
     * @var string <p>Check status.</p><p>CHECK_INIT: pending check</p><p>CHECK_RUNNING: checking</p><p>CHECK_FINISHED: check completed</p><p>CHECK_FAILED: check failed</p>
     */
    public $CheckStatus;

    /**
     * @var integer <p>Number of check items passed by this type of asset.</p>
     */
    public $PassedPolicyItemCount;

    /**
     * @var integer <p>Number of check items failed by this type of asset.</p>
     */
    public $FailedPolicyItemCount;

    /**
     * @var string <p>Last check time.</p>
     */
    public $LastCheckTime;

    /**
     * @var string <p>Check result:<br>RESULT_FAILED: failed<br>RESULT_PASSED: passed</p>
     */
    public $CheckResult;

    /**
     * @var string <p>Host node instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var ImageRegistryInfo <p>Image repository information.</p>
     */
    public $ImageRegistryInfo;

    /**
     * @var string <p>Cluster ID.</p>
     */
    public $ClusterID;

    /**
     * @var string <p>Cluster name.</p>
     */
    public $ClusterName;

    /**
     * @var string <p>Unique asset ID.</p><p>Default value: -</p>
     */
    public $AssetUniqueID;

    /**
     * @param integer $CustomerAssetId <p>Customer asset ID.</p>
     * @param string $AssetType <p>Asset category.</p>
     * @param string $AssetName <p>Asset name.</p>
     * @param string $ImageTag <p>When the asset is an image, this field represents the image tag.</p>
     * @param string $HostIP <p>The host IP address where the asset is located.</p>
     * @param string $NodeName <p>Name of the node to which the asset belongs.</p>
     * @param string $CheckStatus <p>Check status.</p><p>CHECK_INIT: pending check</p><p>CHECK_RUNNING: checking</p><p>CHECK_FINISHED: check completed</p><p>CHECK_FAILED: check failed</p>
     * @param integer $PassedPolicyItemCount <p>Number of check items passed by this type of asset.</p>
     * @param integer $FailedPolicyItemCount <p>Number of check items failed by this type of asset.</p>
     * @param string $LastCheckTime <p>Last check time.</p>
     * @param string $CheckResult <p>Check result:<br>RESULT_FAILED: failed<br>RESULT_PASSED: passed</p>
     * @param string $InstanceId <p>Host node instance ID.</p>
     * @param ImageRegistryInfo $ImageRegistryInfo <p>Image repository information.</p>
     * @param string $ClusterID <p>Cluster ID.</p>
     * @param string $ClusterName <p>Cluster name.</p>
     * @param string $AssetUniqueID <p>Unique asset ID.</p><p>Default value: -</p>
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
        if (array_key_exists("CustomerAssetId",$param) and $param["CustomerAssetId"] !== null) {
            $this->CustomerAssetId = $param["CustomerAssetId"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("ImageTag",$param) and $param["ImageTag"] !== null) {
            $this->ImageTag = $param["ImageTag"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("CheckStatus",$param) and $param["CheckStatus"] !== null) {
            $this->CheckStatus = $param["CheckStatus"];
        }

        if (array_key_exists("PassedPolicyItemCount",$param) and $param["PassedPolicyItemCount"] !== null) {
            $this->PassedPolicyItemCount = $param["PassedPolicyItemCount"];
        }

        if (array_key_exists("FailedPolicyItemCount",$param) and $param["FailedPolicyItemCount"] !== null) {
            $this->FailedPolicyItemCount = $param["FailedPolicyItemCount"];
        }

        if (array_key_exists("LastCheckTime",$param) and $param["LastCheckTime"] !== null) {
            $this->LastCheckTime = $param["LastCheckTime"];
        }

        if (array_key_exists("CheckResult",$param) and $param["CheckResult"] !== null) {
            $this->CheckResult = $param["CheckResult"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ImageRegistryInfo",$param) and $param["ImageRegistryInfo"] !== null) {
            $this->ImageRegistryInfo = new ImageRegistryInfo();
            $this->ImageRegistryInfo->deserialize($param["ImageRegistryInfo"]);
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("AssetUniqueID",$param) and $param["AssetUniqueID"] !== null) {
            $this->AssetUniqueID = $param["AssetUniqueID"];
        }
    }
}
