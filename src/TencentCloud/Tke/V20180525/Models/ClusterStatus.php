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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cluster status information
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getClusterState() Obtain Cluster status
 * @method void setClusterState(string $ClusterState) Set Cluster status
 * @method string getClusterInstanceState() Obtain Status of nodes in the cluster
 * @method void setClusterInstanceState(string $ClusterInstanceState) Set Status of nodes in the cluster
 * @method boolean getClusterBMonitor() Obtain Indicates whether the monitoring service is enabled for the cluster
 * @method void setClusterBMonitor(boolean $ClusterBMonitor) Set Indicates whether the monitoring service is enabled for the cluster
 * @method integer getClusterInitNodeNum() Obtain Number of cluster nodes being created. "-1" indicates that the request to obtain the node status timed out. "-2" indicates that the request failed.
 * @method void setClusterInitNodeNum(integer $ClusterInitNodeNum) Set Number of cluster nodes being created. "-1" indicates that the request to obtain the node status timed out. "-2" indicates that the request failed.
 * @method integer getClusterRunningNodeNum() Obtain Number of running nodes in the cluster. "-1" indicates that the request to obtain the node status timed out. "-2" indicates that the request failed.
 * @method void setClusterRunningNodeNum(integer $ClusterRunningNodeNum) Set Number of running nodes in the cluster. "-1" indicates that the request to obtain the node status timed out. "-2" indicates that the request failed.
 * @method integer getClusterFailedNodeNum() Obtain Number of abnormal nodes in the cluster.  "-1" indicates that the request to obtain the node status timed out. "-2" indicates that the request failed.
 * @method void setClusterFailedNodeNum(integer $ClusterFailedNodeNum) Set Number of abnormal nodes in the cluster.  "-1" indicates that the request to obtain the node status timed out. "-2" indicates that the request failed.
 * @method integer getClusterClosedNodeNum() Obtain Number of shutdown nodes in the cluster.  "-1" indicates that the request to obtain the node status timed out. "-2" indicates that the request failed.
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setClusterClosedNodeNum(integer $ClusterClosedNodeNum) Set Number of shutdown nodes in the cluster.  "-1" indicates that the request to obtain the node status timed out. "-2" indicates that the request failed.
Note: this field may return `null`, indicating that no valid value can be found.
 * @method integer getClusterClosingNodeNum() Obtain Number of nodes being shut down in the cluster.  "-1" indicates that the request to obtain the node status timed out. "-2" indicates that the request failed.
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setClusterClosingNodeNum(integer $ClusterClosingNodeNum) Set Number of nodes being shut down in the cluster.  "-1" indicates that the request to obtain the node status timed out. "-2" indicates that the request failed.
Note: this field may return `null`, indicating that no valid value can be found.
 * @method boolean getClusterDeletionProtection() Obtain Indicates whether to enable cluster deletion protection
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setClusterDeletionProtection(boolean $ClusterDeletionProtection) Set Indicates whether to enable cluster deletion protection
Note: this field may return `null`, indicating that no valid value can be found.
 * @method boolean getClusterAuditEnabled() Obtain Indicates whether the cluster is auditable
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setClusterAuditEnabled(boolean $ClusterAuditEnabled) Set Indicates whether the cluster is auditable
Note: this field may return `null`, indicating that no valid value can be found.
 */
class ClusterStatus extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Cluster status
     */
    public $ClusterState;

    /**
     * @var string Status of nodes in the cluster
     */
    public $ClusterInstanceState;

    /**
     * @var boolean Indicates whether the monitoring service is enabled for the cluster
     */
    public $ClusterBMonitor;

    /**
     * @var integer Number of cluster nodes being created. "-1" indicates that the request to obtain the node status timed out. "-2" indicates that the request failed.
     */
    public $ClusterInitNodeNum;

    /**
     * @var integer Number of running nodes in the cluster. "-1" indicates that the request to obtain the node status timed out. "-2" indicates that the request failed.
     */
    public $ClusterRunningNodeNum;

    /**
     * @var integer Number of abnormal nodes in the cluster.  "-1" indicates that the request to obtain the node status timed out. "-2" indicates that the request failed.
     */
    public $ClusterFailedNodeNum;

    /**
     * @var integer Number of shutdown nodes in the cluster.  "-1" indicates that the request to obtain the node status timed out. "-2" indicates that the request failed.
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $ClusterClosedNodeNum;

    /**
     * @var integer Number of nodes being shut down in the cluster.  "-1" indicates that the request to obtain the node status timed out. "-2" indicates that the request failed.
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $ClusterClosingNodeNum;

    /**
     * @var boolean Indicates whether to enable cluster deletion protection
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $ClusterDeletionProtection;

    /**
     * @var boolean Indicates whether the cluster is auditable
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $ClusterAuditEnabled;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $ClusterState Cluster status
     * @param string $ClusterInstanceState Status of nodes in the cluster
     * @param boolean $ClusterBMonitor Indicates whether the monitoring service is enabled for the cluster
     * @param integer $ClusterInitNodeNum Number of cluster nodes being created. "-1" indicates that the request to obtain the node status timed out. "-2" indicates that the request failed.
     * @param integer $ClusterRunningNodeNum Number of running nodes in the cluster. "-1" indicates that the request to obtain the node status timed out. "-2" indicates that the request failed.
     * @param integer $ClusterFailedNodeNum Number of abnormal nodes in the cluster.  "-1" indicates that the request to obtain the node status timed out. "-2" indicates that the request failed.
     * @param integer $ClusterClosedNodeNum Number of shutdown nodes in the cluster.  "-1" indicates that the request to obtain the node status timed out. "-2" indicates that the request failed.
Note: this field may return `null`, indicating that no valid value can be found.
     * @param integer $ClusterClosingNodeNum Number of nodes being shut down in the cluster.  "-1" indicates that the request to obtain the node status timed out. "-2" indicates that the request failed.
Note: this field may return `null`, indicating that no valid value can be found.
     * @param boolean $ClusterDeletionProtection Indicates whether to enable cluster deletion protection
Note: this field may return `null`, indicating that no valid value can be found.
     * @param boolean $ClusterAuditEnabled Indicates whether the cluster is auditable
Note: this field may return `null`, indicating that no valid value can be found.
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

        if (array_key_exists("ClusterState",$param) and $param["ClusterState"] !== null) {
            $this->ClusterState = $param["ClusterState"];
        }

        if (array_key_exists("ClusterInstanceState",$param) and $param["ClusterInstanceState"] !== null) {
            $this->ClusterInstanceState = $param["ClusterInstanceState"];
        }

        if (array_key_exists("ClusterBMonitor",$param) and $param["ClusterBMonitor"] !== null) {
            $this->ClusterBMonitor = $param["ClusterBMonitor"];
        }

        if (array_key_exists("ClusterInitNodeNum",$param) and $param["ClusterInitNodeNum"] !== null) {
            $this->ClusterInitNodeNum = $param["ClusterInitNodeNum"];
        }

        if (array_key_exists("ClusterRunningNodeNum",$param) and $param["ClusterRunningNodeNum"] !== null) {
            $this->ClusterRunningNodeNum = $param["ClusterRunningNodeNum"];
        }

        if (array_key_exists("ClusterFailedNodeNum",$param) and $param["ClusterFailedNodeNum"] !== null) {
            $this->ClusterFailedNodeNum = $param["ClusterFailedNodeNum"];
        }

        if (array_key_exists("ClusterClosedNodeNum",$param) and $param["ClusterClosedNodeNum"] !== null) {
            $this->ClusterClosedNodeNum = $param["ClusterClosedNodeNum"];
        }

        if (array_key_exists("ClusterClosingNodeNum",$param) and $param["ClusterClosingNodeNum"] !== null) {
            $this->ClusterClosingNodeNum = $param["ClusterClosingNodeNum"];
        }

        if (array_key_exists("ClusterDeletionProtection",$param) and $param["ClusterDeletionProtection"] !== null) {
            $this->ClusterDeletionProtection = $param["ClusterDeletionProtection"];
        }

        if (array_key_exists("ClusterAuditEnabled",$param) and $param["ClusterAuditEnabled"] !== null) {
            $this->ClusterAuditEnabled = $param["ClusterAuditEnabled"];
        }
    }
}
