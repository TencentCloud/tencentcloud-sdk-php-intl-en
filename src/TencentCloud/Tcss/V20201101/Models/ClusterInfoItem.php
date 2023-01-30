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
 * Response parameters structure of the cluster asset
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
 * @method integer getClusterNodeNum() Obtain Number of nodes in the cluster
 * @method void setClusterNodeNum(integer $ClusterNodeNum) Set Number of nodes in the cluster
 * @method string getRegion() Obtain Cluster region
 * @method void setRegion(string $Region) Set Cluster region
 * @method string getDefenderStatus() Obtain Status of the monitoring component. Valid values: `Defender_Uninstall`, `Defender_Normal`, `Defender_Error`, `Defender_Installing`.
 * @method void setDefenderStatus(string $DefenderStatus) Set Status of the monitoring component. Valid values: `Defender_Uninstall`, `Defender_Normal`, `Defender_Error`, `Defender_Installing`.
 * @method string getClusterStatus() Obtain Cluster status
 * @method void setClusterStatus(string $ClusterStatus) Set Cluster status
 * @method string getClusterCheckMode() Obtain Cluster check mode. Valid values: `Cluster_Normal`, `Cluster_Actived`.
 * @method void setClusterCheckMode(string $ClusterCheckMode) Set Cluster check mode. Valid values: `Cluster_Normal`, `Cluster_Actived`.
 * @method boolean getClusterAutoCheck() Obtain Whether automatic and regular check is enabled
 * @method void setClusterAutoCheck(boolean $ClusterAutoCheck) Set Whether automatic and regular check is enabled
 * @method string getDefenderErrorReason() Obtain Cause of the failure to deploy the defender. When it is `UserDaemonSetNotReady`, `UnreadyNodeNum` is changed to "The defenders on N nodes are ready". If it is another value, the error message is directly displayed.
 * @method void setDefenderErrorReason(string $DefenderErrorReason) Set Cause of the failure to deploy the defender. When it is `UserDaemonSetNotReady`, `UnreadyNodeNum` is changed to "The defenders on N nodes are ready". If it is another value, the error message is directly displayed.
 * @method integer getUnreadyNodeNum() Obtain Number of nodes where the defender is not ready
 * @method void setUnreadyNodeNum(integer $UnreadyNodeNum) Set Number of nodes where the defender is not ready
 * @method integer getSeriousRiskCount() Obtain Number of critical check items
 * @method void setSeriousRiskCount(integer $SeriousRiskCount) Set Number of critical check items
 * @method integer getHighRiskCount() Obtain Number of high-risk check items
 * @method void setHighRiskCount(integer $HighRiskCount) Set Number of high-risk check items
 * @method integer getMiddleRiskCount() Obtain Number of medium-risk check items
 * @method void setMiddleRiskCount(integer $MiddleRiskCount) Set Number of medium-risk check items
 * @method integer getHintRiskCount() Obtain Number of prompt-risk check items
 * @method void setHintRiskCount(integer $HintRiskCount) Set Number of prompt-risk check items
 * @method string getCheckFailReason() Obtain Check failure cause
 * @method void setCheckFailReason(string $CheckFailReason) Set Check failure cause
 * @method string getCheckStatus() Obtain Check status. Valid values: `Task_Running`, `NoRisk`, `HasRisk`, `Uncheck`, `Task_Error`.
 * @method void setCheckStatus(string $CheckStatus) Set Check status. Valid values: `Task_Running`, `NoRisk`, `HasRisk`, `Uncheck`, `Task_Error`.
 * @method string getTaskCreateTime() Obtain Task creation time and check time
 * @method void setTaskCreateTime(string $TaskCreateTime) Set Task creation time and check time
 */
class ClusterInfoItem extends AbstractModel
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
     * @var integer Number of nodes in the cluster
     */
    public $ClusterNodeNum;

    /**
     * @var string Cluster region
     */
    public $Region;

    /**
     * @var string Status of the monitoring component. Valid values: `Defender_Uninstall`, `Defender_Normal`, `Defender_Error`, `Defender_Installing`.
     */
    public $DefenderStatus;

    /**
     * @var string Cluster status
     */
    public $ClusterStatus;

    /**
     * @var string Cluster check mode. Valid values: `Cluster_Normal`, `Cluster_Actived`.
     */
    public $ClusterCheckMode;

    /**
     * @var boolean Whether automatic and regular check is enabled
     */
    public $ClusterAutoCheck;

    /**
     * @var string Cause of the failure to deploy the defender. When it is `UserDaemonSetNotReady`, `UnreadyNodeNum` is changed to "The defenders on N nodes are ready". If it is another value, the error message is directly displayed.
     */
    public $DefenderErrorReason;

    /**
     * @var integer Number of nodes where the defender is not ready
     */
    public $UnreadyNodeNum;

    /**
     * @var integer Number of critical check items
     */
    public $SeriousRiskCount;

    /**
     * @var integer Number of high-risk check items
     */
    public $HighRiskCount;

    /**
     * @var integer Number of medium-risk check items
     */
    public $MiddleRiskCount;

    /**
     * @var integer Number of prompt-risk check items
     */
    public $HintRiskCount;

    /**
     * @var string Check failure cause
     */
    public $CheckFailReason;

    /**
     * @var string Check status. Valid values: `Task_Running`, `NoRisk`, `HasRisk`, `Uncheck`, `Task_Error`.
     */
    public $CheckStatus;

    /**
     * @var string Task creation time and check time
     */
    public $TaskCreateTime;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $ClusterName Cluster name
     * @param string $ClusterVersion Cluster version
     * @param string $ClusterOs Cluster OS
     * @param string $ClusterType Cluster type
     * @param integer $ClusterNodeNum Number of nodes in the cluster
     * @param string $Region Cluster region
     * @param string $DefenderStatus Status of the monitoring component. Valid values: `Defender_Uninstall`, `Defender_Normal`, `Defender_Error`, `Defender_Installing`.
     * @param string $ClusterStatus Cluster status
     * @param string $ClusterCheckMode Cluster check mode. Valid values: `Cluster_Normal`, `Cluster_Actived`.
     * @param boolean $ClusterAutoCheck Whether automatic and regular check is enabled
     * @param string $DefenderErrorReason Cause of the failure to deploy the defender. When it is `UserDaemonSetNotReady`, `UnreadyNodeNum` is changed to "The defenders on N nodes are ready". If it is another value, the error message is directly displayed.
     * @param integer $UnreadyNodeNum Number of nodes where the defender is not ready
     * @param integer $SeriousRiskCount Number of critical check items
     * @param integer $HighRiskCount Number of high-risk check items
     * @param integer $MiddleRiskCount Number of medium-risk check items
     * @param integer $HintRiskCount Number of prompt-risk check items
     * @param string $CheckFailReason Check failure cause
     * @param string $CheckStatus Check status. Valid values: `Task_Running`, `NoRisk`, `HasRisk`, `Uncheck`, `Task_Error`.
     * @param string $TaskCreateTime Task creation time and check time
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

        if (array_key_exists("ClusterNodeNum",$param) and $param["ClusterNodeNum"] !== null) {
            $this->ClusterNodeNum = $param["ClusterNodeNum"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("DefenderStatus",$param) and $param["DefenderStatus"] !== null) {
            $this->DefenderStatus = $param["DefenderStatus"];
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }

        if (array_key_exists("ClusterCheckMode",$param) and $param["ClusterCheckMode"] !== null) {
            $this->ClusterCheckMode = $param["ClusterCheckMode"];
        }

        if (array_key_exists("ClusterAutoCheck",$param) and $param["ClusterAutoCheck"] !== null) {
            $this->ClusterAutoCheck = $param["ClusterAutoCheck"];
        }

        if (array_key_exists("DefenderErrorReason",$param) and $param["DefenderErrorReason"] !== null) {
            $this->DefenderErrorReason = $param["DefenderErrorReason"];
        }

        if (array_key_exists("UnreadyNodeNum",$param) and $param["UnreadyNodeNum"] !== null) {
            $this->UnreadyNodeNum = $param["UnreadyNodeNum"];
        }

        if (array_key_exists("SeriousRiskCount",$param) and $param["SeriousRiskCount"] !== null) {
            $this->SeriousRiskCount = $param["SeriousRiskCount"];
        }

        if (array_key_exists("HighRiskCount",$param) and $param["HighRiskCount"] !== null) {
            $this->HighRiskCount = $param["HighRiskCount"];
        }

        if (array_key_exists("MiddleRiskCount",$param) and $param["MiddleRiskCount"] !== null) {
            $this->MiddleRiskCount = $param["MiddleRiskCount"];
        }

        if (array_key_exists("HintRiskCount",$param) and $param["HintRiskCount"] !== null) {
            $this->HintRiskCount = $param["HintRiskCount"];
        }

        if (array_key_exists("CheckFailReason",$param) and $param["CheckFailReason"] !== null) {
            $this->CheckFailReason = $param["CheckFailReason"];
        }

        if (array_key_exists("CheckStatus",$param) and $param["CheckStatus"] !== null) {
            $this->CheckStatus = $param["CheckStatus"];
        }

        if (array_key_exists("TaskCreateTime",$param) and $param["TaskCreateTime"] !== null) {
            $this->TaskCreateTime = $param["TaskCreateTime"];
        }
    }
}
