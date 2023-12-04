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
 * Response parameters structure of the network cluster asset
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getClusterName() Obtain Cluster name
 * @method void setClusterName(string $ClusterName) Set Cluster name
 * @method string getClusterVersion() Obtain Cluster version
 * @method void setClusterVersion(string $ClusterVersion) Set Cluster version
 * @method string getClusterOs() Obtain Cluster OS
 * @method void setClusterOs(string $ClusterOs) Set Cluster OS
 * @method string getClusterType() Obtain Cluster type
 * @method void setClusterType(string $ClusterType) Set Cluster type
 * @method string getRegion() Obtain Cluster region
 * @method void setRegion(string $Region) Set Cluster region
 * @method string getNetworkPolicyPlugin() Obtain Cluster network plugin
 * @method void setNetworkPolicyPlugin(string $NetworkPolicyPlugin) Set Cluster network plugin
 * @method string getClusterStatus() Obtain Cluster status
 * @method void setClusterStatus(string $ClusterStatus) Set Cluster status
 * @method integer getTotalRuleCount() Obtain Total number of policies
 * @method void setTotalRuleCount(integer $TotalRuleCount) Set Total number of policies
 * @method integer getEnableRuleCount() Obtain Number of enabled policies
 * @method void setEnableRuleCount(integer $EnableRuleCount) Set Number of enabled policies
 * @method string getNetworkPolicyPluginStatus() Obtain Status of the cluster network plugin. Valid values: `Running` (normal); `Error` (abnormal).
 * @method void setNetworkPolicyPluginStatus(string $NetworkPolicyPluginStatus) Set Status of the cluster network plugin. Valid values: `Running` (normal); `Error` (abnormal).
 * @method string getNetworkPolicyPluginError() Obtain Error message of the cluster network plugin
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNetworkPolicyPluginError(string $NetworkPolicyPluginError) Set Error message of the cluster network plugin
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClusterNetworkSettings() Obtain Cluster network plugin
Note: This field may return·`null`, indicating that no valid values can be obtained.
 * @method void setClusterNetworkSettings(string $ClusterNetworkSettings) Set Cluster network plugin
Note: This field may return·`null`, indicating that no valid values can be obtained.
 */
class NetworkClusterInfoItem extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Cluster name
     */
    public $ClusterName;

    /**
     * @var string Cluster version
     */
    public $ClusterVersion;

    /**
     * @var string Cluster OS
     */
    public $ClusterOs;

    /**
     * @var string Cluster type
     */
    public $ClusterType;

    /**
     * @var string Cluster region
     */
    public $Region;

    /**
     * @var string Cluster network plugin
     */
    public $NetworkPolicyPlugin;

    /**
     * @var string Cluster status
     */
    public $ClusterStatus;

    /**
     * @var integer Total number of policies
     */
    public $TotalRuleCount;

    /**
     * @var integer Number of enabled policies
     */
    public $EnableRuleCount;

    /**
     * @var string Status of the cluster network plugin. Valid values: `Running` (normal); `Error` (abnormal).
     */
    public $NetworkPolicyPluginStatus;

    /**
     * @var string Error message of the cluster network plugin
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NetworkPolicyPluginError;

    /**
     * @var string Cluster network plugin
Note: This field may return·`null`, indicating that no valid values can be obtained.
     */
    public $ClusterNetworkSettings;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $ClusterName Cluster name
     * @param string $ClusterVersion Cluster version
     * @param string $ClusterOs Cluster OS
     * @param string $ClusterType Cluster type
     * @param string $Region Cluster region
     * @param string $NetworkPolicyPlugin Cluster network plugin
     * @param string $ClusterStatus Cluster status
     * @param integer $TotalRuleCount Total number of policies
     * @param integer $EnableRuleCount Number of enabled policies
     * @param string $NetworkPolicyPluginStatus Status of the cluster network plugin. Valid values: `Running` (normal); `Error` (abnormal).
     * @param string $NetworkPolicyPluginError Error message of the cluster network plugin
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClusterNetworkSettings Cluster network plugin
Note: This field may return·`null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }

        if (array_key_exists("ClusterOs",$param) and $param["ClusterOs"] !== null) {
            $this->ClusterOs = $param["ClusterOs"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("NetworkPolicyPlugin",$param) and $param["NetworkPolicyPlugin"] !== null) {
            $this->NetworkPolicyPlugin = $param["NetworkPolicyPlugin"];
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }

        if (array_key_exists("TotalRuleCount",$param) and $param["TotalRuleCount"] !== null) {
            $this->TotalRuleCount = $param["TotalRuleCount"];
        }

        if (array_key_exists("EnableRuleCount",$param) and $param["EnableRuleCount"] !== null) {
            $this->EnableRuleCount = $param["EnableRuleCount"];
        }

        if (array_key_exists("NetworkPolicyPluginStatus",$param) and $param["NetworkPolicyPluginStatus"] !== null) {
            $this->NetworkPolicyPluginStatus = $param["NetworkPolicyPluginStatus"];
        }

        if (array_key_exists("NetworkPolicyPluginError",$param) and $param["NetworkPolicyPluginError"] !== null) {
            $this->NetworkPolicyPluginError = $param["NetworkPolicyPluginError"];
        }

        if (array_key_exists("ClusterNetworkSettings",$param) and $param["ClusterNetworkSettings"] !== null) {
            $this->ClusterNetworkSettings = $param["ClusterNetworkSettings"];
        }
    }
}
