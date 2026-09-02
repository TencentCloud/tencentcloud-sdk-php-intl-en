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
 * DescribeClusterSummary response structure.
 *
 * @method integer getTotalClusterCount() Obtain <p>Total number of clusters</p>
 * @method void setTotalClusterCount(integer $TotalClusterCount) Set <p>Total number of clusters</p>
 * @method integer getAlarmClusterCount() Obtain <p>Total number of clusters with alarms</p>
 * @method void setAlarmClusterCount(integer $AlarmClusterCount) Set <p>Total number of clusters with alarms</p>
 * @method integer getRiskClusterCount() Obtain <p>Total number of clusters at risk</p>
 * @method void setRiskClusterCount(integer $RiskClusterCount) Set <p>Total number of clusters at risk</p>
 * @method integer getTotalNodeCount() Obtain <p>Total nodes</p>
 * @method void setTotalNodeCount(integer $TotalNodeCount) Set <p>Total nodes</p>
 * @method integer getTotalCoreCount() Obtain <p>Total cores.</p>
 * @method void setTotalCoreCount(integer $TotalCoreCount) Set <p>Total cores.</p>
 * @method integer getAlarmEventCount() Obtain <p>Total number of alarm events</p>
 * @method void setAlarmEventCount(integer $AlarmEventCount) Set <p>Total number of alarm events</p>
 * @method integer getCriticalAlarmEventCount() Obtain <p>Number of critical alarm events</p>
 * @method void setCriticalAlarmEventCount(integer $CriticalAlarmEventCount) Set <p>Number of critical alarm events</p>
 * @method integer getHighAlarmEventCount() Obtain <p>Number of high-risk alarm events</p>
 * @method void setHighAlarmEventCount(integer $HighAlarmEventCount) Set <p>Number of high-risk alarm events</p>
 * @method integer getMiddleAlarmEventCount() Obtain <p>Number of medium-risk alarm events</p>
 * @method void setMiddleAlarmEventCount(integer $MiddleAlarmEventCount) Set <p>Number of medium-risk alarm events</p>
 * @method integer getLowAlarmEventCount() Obtain <p>Number of low-risk alarm events</p>
 * @method void setLowAlarmEventCount(integer $LowAlarmEventCount) Set <p>Number of low-risk alarm events</p>
 * @method integer getRiskEventCount() Obtain <p>Total number of risk events</p>
 * @method void setRiskEventCount(integer $RiskEventCount) Set <p>Total number of risk events</p>
 * @method integer getCriticalRiskEventCount() Obtain <p>Number of critical risk events</p>
 * @method void setCriticalRiskEventCount(integer $CriticalRiskEventCount) Set <p>Number of critical risk events</p>
 * @method integer getHighRiskEventCount() Obtain <p>Number of high-severity risk events</p>
 * @method void setHighRiskEventCount(integer $HighRiskEventCount) Set <p>Number of high-severity risk events</p>
 * @method integer getMiddleRiskEventCount() Obtain <p>Number of medium-risk risk events</p>
 * @method void setMiddleRiskEventCount(integer $MiddleRiskEventCount) Set <p>Number of medium-risk risk events</p>
 * @method integer getLowRiskEventCount() Obtain <p>Number of low-risk events</p>
 * @method void setLowRiskEventCount(integer $LowRiskEventCount) Set <p>Number of low-risk events</p>
 * @method integer getUsedCoreQuota() Obtain <p>Used core amount limit</p>
 * @method void setUsedCoreQuota(integer $UsedCoreQuota) Set <p>Used core amount limit</p>
 * @method integer getPurchasedCoreQuota() Obtain <p>Number of purchased cores limit</p>
 * @method void setPurchasedCoreQuota(integer $PurchasedCoreQuota) Set <p>Number of purchased cores limit</p>
 * @method integer getElasticCoreQuota() Obtain <p>Elastic Billing Cores</p>
 * @method void setElasticCoreQuota(integer $ElasticCoreQuota) Set <p>Elastic Billing Cores</p>
 * @method integer getUnprotectedCoreCount() Obtain <p>Unprotected cores in the cluster</p>
 * @method void setUnprotectedCoreCount(integer $UnprotectedCoreCount) Set <p>Unprotected cores in the cluster</p>
 * @method integer getProtectedCoreCount() Obtain <p>Number of protected cores in the cluster</p>
 * @method void setProtectedCoreCount(integer $ProtectedCoreCount) Set <p>Number of protected cores in the cluster</p>
 * @method integer getUnprotectedClusterCount() Obtain <p>Number of unprotected clusters</p>
 * @method void setUnprotectedClusterCount(integer $UnprotectedClusterCount) Set <p>Number of unprotected clusters</p>
 * @method integer getProtectedClusterCount() Obtain <p>Number of protected clusters</p>
 * @method void setProtectedClusterCount(integer $ProtectedClusterCount) Set <p>Number of protected clusters</p>
 * @method integer getTkeClusterCount() Obtain <p>Number of Tencent Cloud TKE clusters</p>
 * @method void setTkeClusterCount(integer $TkeClusterCount) Set <p>Number of Tencent Cloud TKE clusters</p>
 * @method integer getSelfBuiltClusterCount() Obtain <p>Number of self-built clusters</p>
 * @method void setSelfBuiltClusterCount(integer $SelfBuiltClusterCount) Set <p>Number of self-built clusters</p>
 * @method integer getCriticalAlarmClusterCount() Obtain <p>Number of clusters with critical alerts</p>
 * @method void setCriticalAlarmClusterCount(integer $CriticalAlarmClusterCount) Set <p>Number of clusters with critical alerts</p>
 * @method integer getHighAlarmClusterCount() Obtain <p>Number of high-risk alert clusters</p>
 * @method void setHighAlarmClusterCount(integer $HighAlarmClusterCount) Set <p>Number of high-risk alert clusters</p>
 * @method integer getCriticalRiskClusterCount() Obtain <p>Number of clusters at critical risk</p>
 * @method void setCriticalRiskClusterCount(integer $CriticalRiskClusterCount) Set <p>Number of clusters at critical risk</p>
 * @method integer getHighRiskClusterCount() Obtain <p>Number of high-risk clusters</p>
 * @method void setHighRiskClusterCount(integer $HighRiskClusterCount) Set <p>Number of high-risk clusters</p>
 * @method integer getUnboundUltimateNodeCount() Obtain <p>Number of nodes not bound to the Ultimate Edition</p>
 * @method void setUnboundUltimateNodeCount(integer $UnboundUltimateNodeCount) Set <p>Number of nodes not bound to the Ultimate Edition</p>
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class DescribeClusterSummaryResponse extends AbstractModel
{
    /**
     * @var integer <p>Total number of clusters</p>
     */
    public $TotalClusterCount;

    /**
     * @var integer <p>Total number of clusters with alarms</p>
     * @deprecated
     */
    public $AlarmClusterCount;

    /**
     * @var integer <p>Total number of clusters at risk</p>
     * @deprecated
     */
    public $RiskClusterCount;

    /**
     * @var integer <p>Total nodes</p>
     */
    public $TotalNodeCount;

    /**
     * @var integer <p>Total cores.</p>
     */
    public $TotalCoreCount;

    /**
     * @var integer <p>Total number of alarm events</p>
     * @deprecated
     */
    public $AlarmEventCount;

    /**
     * @var integer <p>Number of critical alarm events</p>
     * @deprecated
     */
    public $CriticalAlarmEventCount;

    /**
     * @var integer <p>Number of high-risk alarm events</p>
     * @deprecated
     */
    public $HighAlarmEventCount;

    /**
     * @var integer <p>Number of medium-risk alarm events</p>
     * @deprecated
     */
    public $MiddleAlarmEventCount;

    /**
     * @var integer <p>Number of low-risk alarm events</p>
     * @deprecated
     */
    public $LowAlarmEventCount;

    /**
     * @var integer <p>Total number of risk events</p>
     * @deprecated
     */
    public $RiskEventCount;

    /**
     * @var integer <p>Number of critical risk events</p>
     * @deprecated
     */
    public $CriticalRiskEventCount;

    /**
     * @var integer <p>Number of high-severity risk events</p>
     * @deprecated
     */
    public $HighRiskEventCount;

    /**
     * @var integer <p>Number of medium-risk risk events</p>
     * @deprecated
     */
    public $MiddleRiskEventCount;

    /**
     * @var integer <p>Number of low-risk events</p>
     * @deprecated
     */
    public $LowRiskEventCount;

    /**
     * @var integer <p>Used core amount limit</p>
     */
    public $UsedCoreQuota;

    /**
     * @var integer <p>Number of purchased cores limit</p>
     */
    public $PurchasedCoreQuota;

    /**
     * @var integer <p>Elastic Billing Cores</p>
     */
    public $ElasticCoreQuota;

    /**
     * @var integer <p>Unprotected cores in the cluster</p>
     */
    public $UnprotectedCoreCount;

    /**
     * @var integer <p>Number of protected cores in the cluster</p>
     */
    public $ProtectedCoreCount;

    /**
     * @var integer <p>Number of unprotected clusters</p>
     */
    public $UnprotectedClusterCount;

    /**
     * @var integer <p>Number of protected clusters</p>
     */
    public $ProtectedClusterCount;

    /**
     * @var integer <p>Number of Tencent Cloud TKE clusters</p>
     */
    public $TkeClusterCount;

    /**
     * @var integer <p>Number of self-built clusters</p>
     */
    public $SelfBuiltClusterCount;

    /**
     * @var integer <p>Number of clusters with critical alerts</p>
     * @deprecated
     */
    public $CriticalAlarmClusterCount;

    /**
     * @var integer <p>Number of high-risk alert clusters</p>
     * @deprecated
     */
    public $HighAlarmClusterCount;

    /**
     * @var integer <p>Number of clusters at critical risk</p>
     * @deprecated
     */
    public $CriticalRiskClusterCount;

    /**
     * @var integer <p>Number of high-risk clusters</p>
     * @deprecated
     */
    public $HighRiskClusterCount;

    /**
     * @var integer <p>Number of nodes not bound to the Ultimate Edition</p>
     */
    public $UnboundUltimateNodeCount;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalClusterCount <p>Total number of clusters</p>
     * @param integer $AlarmClusterCount <p>Total number of clusters with alarms</p>
     * @param integer $RiskClusterCount <p>Total number of clusters at risk</p>
     * @param integer $TotalNodeCount <p>Total nodes</p>
     * @param integer $TotalCoreCount <p>Total cores.</p>
     * @param integer $AlarmEventCount <p>Total number of alarm events</p>
     * @param integer $CriticalAlarmEventCount <p>Number of critical alarm events</p>
     * @param integer $HighAlarmEventCount <p>Number of high-risk alarm events</p>
     * @param integer $MiddleAlarmEventCount <p>Number of medium-risk alarm events</p>
     * @param integer $LowAlarmEventCount <p>Number of low-risk alarm events</p>
     * @param integer $RiskEventCount <p>Total number of risk events</p>
     * @param integer $CriticalRiskEventCount <p>Number of critical risk events</p>
     * @param integer $HighRiskEventCount <p>Number of high-severity risk events</p>
     * @param integer $MiddleRiskEventCount <p>Number of medium-risk risk events</p>
     * @param integer $LowRiskEventCount <p>Number of low-risk events</p>
     * @param integer $UsedCoreQuota <p>Used core amount limit</p>
     * @param integer $PurchasedCoreQuota <p>Number of purchased cores limit</p>
     * @param integer $ElasticCoreQuota <p>Elastic Billing Cores</p>
     * @param integer $UnprotectedCoreCount <p>Unprotected cores in the cluster</p>
     * @param integer $ProtectedCoreCount <p>Number of protected cores in the cluster</p>
     * @param integer $UnprotectedClusterCount <p>Number of unprotected clusters</p>
     * @param integer $ProtectedClusterCount <p>Number of protected clusters</p>
     * @param integer $TkeClusterCount <p>Number of Tencent Cloud TKE clusters</p>
     * @param integer $SelfBuiltClusterCount <p>Number of self-built clusters</p>
     * @param integer $CriticalAlarmClusterCount <p>Number of clusters with critical alerts</p>
     * @param integer $HighAlarmClusterCount <p>Number of high-risk alert clusters</p>
     * @param integer $CriticalRiskClusterCount <p>Number of clusters at critical risk</p>
     * @param integer $HighRiskClusterCount <p>Number of high-risk clusters</p>
     * @param integer $UnboundUltimateNodeCount <p>Number of nodes not bound to the Ultimate Edition</p>
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("TotalClusterCount",$param) and $param["TotalClusterCount"] !== null) {
            $this->TotalClusterCount = $param["TotalClusterCount"];
        }

        if (array_key_exists("AlarmClusterCount",$param) and $param["AlarmClusterCount"] !== null) {
            $this->AlarmClusterCount = $param["AlarmClusterCount"];
        }

        if (array_key_exists("RiskClusterCount",$param) and $param["RiskClusterCount"] !== null) {
            $this->RiskClusterCount = $param["RiskClusterCount"];
        }

        if (array_key_exists("TotalNodeCount",$param) and $param["TotalNodeCount"] !== null) {
            $this->TotalNodeCount = $param["TotalNodeCount"];
        }

        if (array_key_exists("TotalCoreCount",$param) and $param["TotalCoreCount"] !== null) {
            $this->TotalCoreCount = $param["TotalCoreCount"];
        }

        if (array_key_exists("AlarmEventCount",$param) and $param["AlarmEventCount"] !== null) {
            $this->AlarmEventCount = $param["AlarmEventCount"];
        }

        if (array_key_exists("CriticalAlarmEventCount",$param) and $param["CriticalAlarmEventCount"] !== null) {
            $this->CriticalAlarmEventCount = $param["CriticalAlarmEventCount"];
        }

        if (array_key_exists("HighAlarmEventCount",$param) and $param["HighAlarmEventCount"] !== null) {
            $this->HighAlarmEventCount = $param["HighAlarmEventCount"];
        }

        if (array_key_exists("MiddleAlarmEventCount",$param) and $param["MiddleAlarmEventCount"] !== null) {
            $this->MiddleAlarmEventCount = $param["MiddleAlarmEventCount"];
        }

        if (array_key_exists("LowAlarmEventCount",$param) and $param["LowAlarmEventCount"] !== null) {
            $this->LowAlarmEventCount = $param["LowAlarmEventCount"];
        }

        if (array_key_exists("RiskEventCount",$param) and $param["RiskEventCount"] !== null) {
            $this->RiskEventCount = $param["RiskEventCount"];
        }

        if (array_key_exists("CriticalRiskEventCount",$param) and $param["CriticalRiskEventCount"] !== null) {
            $this->CriticalRiskEventCount = $param["CriticalRiskEventCount"];
        }

        if (array_key_exists("HighRiskEventCount",$param) and $param["HighRiskEventCount"] !== null) {
            $this->HighRiskEventCount = $param["HighRiskEventCount"];
        }

        if (array_key_exists("MiddleRiskEventCount",$param) and $param["MiddleRiskEventCount"] !== null) {
            $this->MiddleRiskEventCount = $param["MiddleRiskEventCount"];
        }

        if (array_key_exists("LowRiskEventCount",$param) and $param["LowRiskEventCount"] !== null) {
            $this->LowRiskEventCount = $param["LowRiskEventCount"];
        }

        if (array_key_exists("UsedCoreQuota",$param) and $param["UsedCoreQuota"] !== null) {
            $this->UsedCoreQuota = $param["UsedCoreQuota"];
        }

        if (array_key_exists("PurchasedCoreQuota",$param) and $param["PurchasedCoreQuota"] !== null) {
            $this->PurchasedCoreQuota = $param["PurchasedCoreQuota"];
        }

        if (array_key_exists("ElasticCoreQuota",$param) and $param["ElasticCoreQuota"] !== null) {
            $this->ElasticCoreQuota = $param["ElasticCoreQuota"];
        }

        if (array_key_exists("UnprotectedCoreCount",$param) and $param["UnprotectedCoreCount"] !== null) {
            $this->UnprotectedCoreCount = $param["UnprotectedCoreCount"];
        }

        if (array_key_exists("ProtectedCoreCount",$param) and $param["ProtectedCoreCount"] !== null) {
            $this->ProtectedCoreCount = $param["ProtectedCoreCount"];
        }

        if (array_key_exists("UnprotectedClusterCount",$param) and $param["UnprotectedClusterCount"] !== null) {
            $this->UnprotectedClusterCount = $param["UnprotectedClusterCount"];
        }

        if (array_key_exists("ProtectedClusterCount",$param) and $param["ProtectedClusterCount"] !== null) {
            $this->ProtectedClusterCount = $param["ProtectedClusterCount"];
        }

        if (array_key_exists("TkeClusterCount",$param) and $param["TkeClusterCount"] !== null) {
            $this->TkeClusterCount = $param["TkeClusterCount"];
        }

        if (array_key_exists("SelfBuiltClusterCount",$param) and $param["SelfBuiltClusterCount"] !== null) {
            $this->SelfBuiltClusterCount = $param["SelfBuiltClusterCount"];
        }

        if (array_key_exists("CriticalAlarmClusterCount",$param) and $param["CriticalAlarmClusterCount"] !== null) {
            $this->CriticalAlarmClusterCount = $param["CriticalAlarmClusterCount"];
        }

        if (array_key_exists("HighAlarmClusterCount",$param) and $param["HighAlarmClusterCount"] !== null) {
            $this->HighAlarmClusterCount = $param["HighAlarmClusterCount"];
        }

        if (array_key_exists("CriticalRiskClusterCount",$param) and $param["CriticalRiskClusterCount"] !== null) {
            $this->CriticalRiskClusterCount = $param["CriticalRiskClusterCount"];
        }

        if (array_key_exists("HighRiskClusterCount",$param) and $param["HighRiskClusterCount"] !== null) {
            $this->HighRiskClusterCount = $param["HighRiskClusterCount"];
        }

        if (array_key_exists("UnboundUltimateNodeCount",$param) and $param["UnboundUltimateNodeCount"] !== null) {
            $this->UnboundUltimateNodeCount = $param["UnboundUltimateNodeCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
