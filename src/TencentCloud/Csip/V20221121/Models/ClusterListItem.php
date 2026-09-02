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
 * Cluster list item
 *
 * @method integer getAppID() Obtain <p>appid</p>
 * @method void setAppID(integer $AppID) Set <p>appid</p>
 * @method string getAssetId() Obtain <p>Asset id</p>
 * @method void setAssetId(string $AssetId) Set <p>Asset id</p>
 * @method string getClusterId() Obtain <p>Cluster ID.</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID.</p>
 * @method string getClusterName() Obtain <p>Cluster name.</p>
 * @method void setClusterName(string $ClusterName) Set <p>Cluster name.</p>
 * @method string getClusterType() Obtain <p>Cluster type<br>MANAGED_CLUSTER: managed cluster</p>
 * @method void setClusterType(string $ClusterType) Set <p>Cluster type<br>MANAGED_CLUSTER: managed cluster</p>
 * @method integer getAlarmEventCriticalCount() Obtain <p>Number of critical alarm events</p>
 * @method void setAlarmEventCriticalCount(integer $AlarmEventCriticalCount) Set <p>Number of critical alarm events</p>
 * @method integer getAlarmEventHighCount() Obtain <p>Number of high-risk alarm events</p>
 * @method void setAlarmEventHighCount(integer $AlarmEventHighCount) Set <p>Number of high-risk alarm events</p>
 * @method integer getAlarmEventMiddleCount() Obtain <p>Number of medium-risk alarm events</p>
 * @method void setAlarmEventMiddleCount(integer $AlarmEventMiddleCount) Set <p>Number of medium-risk alarm events</p>
 * @method integer getAlarmEventLowCount() Obtain <p>Number of low-risk alarm events</p>
 * @method void setAlarmEventLowCount(integer $AlarmEventLowCount) Set <p>Number of low-risk alarm events</p>
 * @method integer getRiskEventCriticalCount() Obtain <p>Number of critical risk events</p>
 * @method void setRiskEventCriticalCount(integer $RiskEventCriticalCount) Set <p>Number of critical risk events</p>
 * @method integer getRiskEventHighCount() Obtain <p>Number of high-severity risk events</p>
 * @method void setRiskEventHighCount(integer $RiskEventHighCount) Set <p>Number of high-severity risk events</p>
 * @method integer getRiskEventMiddleCount() Obtain <p>Number of medium-risk events</p>
 * @method void setRiskEventMiddleCount(integer $RiskEventMiddleCount) Set <p>Number of medium-risk events</p>
 * @method integer getRiskEventLowCount() Obtain <p>Number of low-risk events</p>
 * @method void setRiskEventLowCount(integer $RiskEventLowCount) Set <p>Number of low-risk events</p>
 * @method integer getNodeCount() Obtain <p>Total nodes</p>
 * @method void setNodeCount(integer $NodeCount) Set <p>Total nodes</p>
 * @method integer getOfflineNodeCount() Obtain <p>Total number of offline nodes</p>
 * @method void setOfflineNodeCount(integer $OfflineNodeCount) Set <p>Total number of offline nodes</p>
 * @method integer getUninstallNodeCount() Obtain <p>Total number of nodes not installed</p>
 * @method void setUninstallNodeCount(integer $UninstallNodeCount) Set <p>Total number of nodes not installed</p>
 * @method integer getTotalCoresCount() Obtain <p>Total cores.</p>
 * @method void setTotalCoresCount(integer $TotalCoresCount) Set <p>Total cores.</p>
 * @method integer getDefendCoresCount() Obtain <p>Number of protected cores</p>
 * @method void setDefendCoresCount(integer $DefendCoresCount) Set <p>Number of protected cores</p>
 * @method integer getAuditLogSwitchStatus() Obtain <p>Audit log switch<br>(0: off; 1: on; 2: activation fail; 3: failed to close)</p>
 * @method void setAuditLogSwitchStatus(integer $AuditLogSwitchStatus) Set <p>Audit log switch<br>(0: off; 1: on; 2: activation fail; 3: failed to close)</p>
 * @method string getDefendStatus() Obtain <p>Protection status<br>Defended: Defended</p>
 * @method void setDefendStatus(string $DefendStatus) Set <p>Protection status<br>Defended: Defended</p>
 * @method string getRunStatus() Obtain <p>Cluster status</p>
 * @method void setRunStatus(string $RunStatus) Set <p>Cluster status</p>
 * @method string getRegion() Obtain <p>Region.</p>
 * @method void setRegion(string $Region) Set <p>Region.</p>
 * @method string getVersion() Obtain <p>K8s version.</p>
 * @method void setVersion(string $Version) Set <p>K8s version.</p>
 * @method string getLastAssetSyncTime() Obtain <p>Most recent asset synchronization time</p>
 * @method void setLastAssetSyncTime(string $LastAssetSyncTime) Set <p>Most recent asset synchronization time</p>
 * @method string getLastRiskCheckTime() Obtain <p>Last risk check time</p>
 * @method void setLastRiskCheckTime(string $LastRiskCheckTime) Set <p>Last risk check time</p>
 * @method string getRiskStatus() Obtain <p>Risk status</p>
 * @method void setRiskStatus(string $RiskStatus) Set <p>Risk status</p>
 * @method array getTags() Obtain <p>Tag list.</p>
 * @method void setTags(array $Tags) Set <p>Tag list.</p>
 * @method string getOwnerName() Obtain <p>Owner name</p>
 * @method void setOwnerName(string $OwnerName) Set <p>Owner name</p>
 * @method string getFailMessage() Obtain <p>Failure reason</p>
 * @method void setFailMessage(string $FailMessage) Set <p>Failure reason</p>
 * @method string getRunSubStatus() Obtain <p>Operating sub-status</p>
 * @method void setRunSubStatus(string $RunSubStatus) Set <p>Operating sub-status</p>
 * @method string getAccessedStatus() Obtain <p>Cluster access status</p><p>Enumeration values:</p><ul><li>AccessedNone: not connected</li><li>AccessedInstalling: connecting</li><li>AccessedInstalled: connected - unprotected</li><li>AccessedUninstalling: uninstalling</li><li>AccessedUninstallException: uninstallation exception</li><li>AccessedDefended: connected - defended</li><li>AccessedPartialDefence: connected - partially defended</li><li>AccessedException: access exception</li></ul>
 * @method void setAccessedStatus(string $AccessedStatus) Set <p>Cluster access status</p><p>Enumeration values:</p><ul><li>AccessedNone: not connected</li><li>AccessedInstalling: connecting</li><li>AccessedInstalled: connected - unprotected</li><li>AccessedUninstalling: uninstalling</li><li>AccessedUninstallException: uninstallation exception</li><li>AccessedDefended: connected - defended</li><li>AccessedPartialDefence: connected - partially defended</li><li>AccessedException: access exception</li></ul>
 * @method string getAccessedSubStatus() Obtain <p>Integration sub-status</p>
 * @method void setAccessedSubStatus(string $AccessedSubStatus) Set <p>Integration sub-status</p>
 * @method string getClusterCaMD5() Obtain <p>Cluster ca certificate md5 value, unique cluster id</p>
 * @method void setClusterCaMD5(string $ClusterCaMD5) Set <p>Cluster ca certificate md5 value, unique cluster id</p>
 * @method string getAssetSyncStatus() Obtain <p>Asset synchronization status</p><p>Enumeration values:</p><ul><li>AssetCheckNone: initial state</li><li>AssetCheckSync: synchronizing</li><li>AssetCheckFinished: synchronization complete</li><li>AssetCheckFailed: synchronization failed</li></ul>
 * @method void setAssetSyncStatus(string $AssetSyncStatus) Set <p>Asset synchronization status</p><p>Enumeration values:</p><ul><li>AssetCheckNone: initial state</li><li>AssetCheckSync: synchronizing</li><li>AssetCheckFinished: synchronization complete</li><li>AssetCheckFailed: synchronization failed</li></ul>
 * @method integer getRiskConfigCount() Obtain <p>Number of cluster configuration risks</p>
 * @method void setRiskConfigCount(integer $RiskConfigCount) Set <p>Number of cluster configuration risks</p>
 * @method string getAccessFailedMessage() Obtain <p>Cluster access failure reason</p>
 * @method void setAccessFailedMessage(string $AccessFailedMessage) Set <p>Cluster access failure reason</p>
 * @method string getRegionName() Obtain <p>Region Chinese Name</p>
 * @method void setRegionName(string $RegionName) Set <p>Region Chinese Name</p>
 * @method string getRegionNameEn() Obtain <p>Region English name</p>
 * @method void setRegionNameEn(string $RegionNameEn) Set <p>Region English name</p>
 * @method integer getUnboundUltimateNodeCount() Obtain <p>Number of nodes not bound to the Ultimate Edition</p>
 * @method void setUnboundUltimateNodeCount(integer $UnboundUltimateNodeCount) Set <p>Number of nodes not bound to the Ultimate Edition</p>
 */
class ClusterListItem extends AbstractModel
{
    /**
     * @var integer <p>appid</p>
     */
    public $AppID;

    /**
     * @var string <p>Asset id</p>
     * @deprecated
     */
    public $AssetId;

    /**
     * @var string <p>Cluster ID.</p>
     */
    public $ClusterId;

    /**
     * @var string <p>Cluster name.</p>
     */
    public $ClusterName;

    /**
     * @var string <p>Cluster type<br>MANAGED_CLUSTER: managed cluster</p>
     */
    public $ClusterType;

    /**
     * @var integer <p>Number of critical alarm events</p>
     * @deprecated
     */
    public $AlarmEventCriticalCount;

    /**
     * @var integer <p>Number of high-risk alarm events</p>
     * @deprecated
     */
    public $AlarmEventHighCount;

    /**
     * @var integer <p>Number of medium-risk alarm events</p>
     * @deprecated
     */
    public $AlarmEventMiddleCount;

    /**
     * @var integer <p>Number of low-risk alarm events</p>
     * @deprecated
     */
    public $AlarmEventLowCount;

    /**
     * @var integer <p>Number of critical risk events</p>
     * @deprecated
     */
    public $RiskEventCriticalCount;

    /**
     * @var integer <p>Number of high-severity risk events</p>
     * @deprecated
     */
    public $RiskEventHighCount;

    /**
     * @var integer <p>Number of medium-risk events</p>
     * @deprecated
     */
    public $RiskEventMiddleCount;

    /**
     * @var integer <p>Number of low-risk events</p>
     * @deprecated
     */
    public $RiskEventLowCount;

    /**
     * @var integer <p>Total nodes</p>
     */
    public $NodeCount;

    /**
     * @var integer <p>Total number of offline nodes</p>
     */
    public $OfflineNodeCount;

    /**
     * @var integer <p>Total number of nodes not installed</p>
     */
    public $UninstallNodeCount;

    /**
     * @var integer <p>Total cores.</p>
     */
    public $TotalCoresCount;

    /**
     * @var integer <p>Number of protected cores</p>
     * @deprecated
     */
    public $DefendCoresCount;

    /**
     * @var integer <p>Audit log switch<br>(0: off; 1: on; 2: activation fail; 3: failed to close)</p>
     */
    public $AuditLogSwitchStatus;

    /**
     * @var string <p>Protection status<br>Defended: Defended</p>
     */
    public $DefendStatus;

    /**
     * @var string <p>Cluster status</p>
     */
    public $RunStatus;

    /**
     * @var string <p>Region.</p>
     */
    public $Region;

    /**
     * @var string <p>K8s version.</p>
     */
    public $Version;

    /**
     * @var string <p>Most recent asset synchronization time</p>
     */
    public $LastAssetSyncTime;

    /**
     * @var string <p>Last risk check time</p>
     */
    public $LastRiskCheckTime;

    /**
     * @var string <p>Risk status</p>
     */
    public $RiskStatus;

    /**
     * @var array <p>Tag list.</p>
     */
    public $Tags;

    /**
     * @var string <p>Owner name</p>
     */
    public $OwnerName;

    /**
     * @var string <p>Failure reason</p>
     */
    public $FailMessage;

    /**
     * @var string <p>Operating sub-status</p>
     */
    public $RunSubStatus;

    /**
     * @var string <p>Cluster access status</p><p>Enumeration values:</p><ul><li>AccessedNone: not connected</li><li>AccessedInstalling: connecting</li><li>AccessedInstalled: connected - unprotected</li><li>AccessedUninstalling: uninstalling</li><li>AccessedUninstallException: uninstallation exception</li><li>AccessedDefended: connected - defended</li><li>AccessedPartialDefence: connected - partially defended</li><li>AccessedException: access exception</li></ul>
     */
    public $AccessedStatus;

    /**
     * @var string <p>Integration sub-status</p>
     */
    public $AccessedSubStatus;

    /**
     * @var string <p>Cluster ca certificate md5 value, unique cluster id</p>
     */
    public $ClusterCaMD5;

    /**
     * @var string <p>Asset synchronization status</p><p>Enumeration values:</p><ul><li>AssetCheckNone: initial state</li><li>AssetCheckSync: synchronizing</li><li>AssetCheckFinished: synchronization complete</li><li>AssetCheckFailed: synchronization failed</li></ul>
     */
    public $AssetSyncStatus;

    /**
     * @var integer <p>Number of cluster configuration risks</p>
     * @deprecated
     */
    public $RiskConfigCount;

    /**
     * @var string <p>Cluster access failure reason</p>
     * @deprecated
     */
    public $AccessFailedMessage;

    /**
     * @var string <p>Region Chinese Name</p>
     */
    public $RegionName;

    /**
     * @var string <p>Region English name</p>
     */
    public $RegionNameEn;

    /**
     * @var integer <p>Number of nodes not bound to the Ultimate Edition</p>
     */
    public $UnboundUltimateNodeCount;

    /**
     * @param integer $AppID <p>appid</p>
     * @param string $AssetId <p>Asset id</p>
     * @param string $ClusterId <p>Cluster ID.</p>
     * @param string $ClusterName <p>Cluster name.</p>
     * @param string $ClusterType <p>Cluster type<br>MANAGED_CLUSTER: managed cluster</p>
     * @param integer $AlarmEventCriticalCount <p>Number of critical alarm events</p>
     * @param integer $AlarmEventHighCount <p>Number of high-risk alarm events</p>
     * @param integer $AlarmEventMiddleCount <p>Number of medium-risk alarm events</p>
     * @param integer $AlarmEventLowCount <p>Number of low-risk alarm events</p>
     * @param integer $RiskEventCriticalCount <p>Number of critical risk events</p>
     * @param integer $RiskEventHighCount <p>Number of high-severity risk events</p>
     * @param integer $RiskEventMiddleCount <p>Number of medium-risk events</p>
     * @param integer $RiskEventLowCount <p>Number of low-risk events</p>
     * @param integer $NodeCount <p>Total nodes</p>
     * @param integer $OfflineNodeCount <p>Total number of offline nodes</p>
     * @param integer $UninstallNodeCount <p>Total number of nodes not installed</p>
     * @param integer $TotalCoresCount <p>Total cores.</p>
     * @param integer $DefendCoresCount <p>Number of protected cores</p>
     * @param integer $AuditLogSwitchStatus <p>Audit log switch<br>(0: off; 1: on; 2: activation fail; 3: failed to close)</p>
     * @param string $DefendStatus <p>Protection status<br>Defended: Defended</p>
     * @param string $RunStatus <p>Cluster status</p>
     * @param string $Region <p>Region.</p>
     * @param string $Version <p>K8s version.</p>
     * @param string $LastAssetSyncTime <p>Most recent asset synchronization time</p>
     * @param string $LastRiskCheckTime <p>Last risk check time</p>
     * @param string $RiskStatus <p>Risk status</p>
     * @param array $Tags <p>Tag list.</p>
     * @param string $OwnerName <p>Owner name</p>
     * @param string $FailMessage <p>Failure reason</p>
     * @param string $RunSubStatus <p>Operating sub-status</p>
     * @param string $AccessedStatus <p>Cluster access status</p><p>Enumeration values:</p><ul><li>AccessedNone: not connected</li><li>AccessedInstalling: connecting</li><li>AccessedInstalled: connected - unprotected</li><li>AccessedUninstalling: uninstalling</li><li>AccessedUninstallException: uninstallation exception</li><li>AccessedDefended: connected - defended</li><li>AccessedPartialDefence: connected - partially defended</li><li>AccessedException: access exception</li></ul>
     * @param string $AccessedSubStatus <p>Integration sub-status</p>
     * @param string $ClusterCaMD5 <p>Cluster ca certificate md5 value, unique cluster id</p>
     * @param string $AssetSyncStatus <p>Asset synchronization status</p><p>Enumeration values:</p><ul><li>AssetCheckNone: initial state</li><li>AssetCheckSync: synchronizing</li><li>AssetCheckFinished: synchronization complete</li><li>AssetCheckFailed: synchronization failed</li></ul>
     * @param integer $RiskConfigCount <p>Number of cluster configuration risks</p>
     * @param string $AccessFailedMessage <p>Cluster access failure reason</p>
     * @param string $RegionName <p>Region Chinese Name</p>
     * @param string $RegionNameEn <p>Region English name</p>
     * @param integer $UnboundUltimateNodeCount <p>Number of nodes not bound to the Ultimate Edition</p>
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
        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("AlarmEventCriticalCount",$param) and $param["AlarmEventCriticalCount"] !== null) {
            $this->AlarmEventCriticalCount = $param["AlarmEventCriticalCount"];
        }

        if (array_key_exists("AlarmEventHighCount",$param) and $param["AlarmEventHighCount"] !== null) {
            $this->AlarmEventHighCount = $param["AlarmEventHighCount"];
        }

        if (array_key_exists("AlarmEventMiddleCount",$param) and $param["AlarmEventMiddleCount"] !== null) {
            $this->AlarmEventMiddleCount = $param["AlarmEventMiddleCount"];
        }

        if (array_key_exists("AlarmEventLowCount",$param) and $param["AlarmEventLowCount"] !== null) {
            $this->AlarmEventLowCount = $param["AlarmEventLowCount"];
        }

        if (array_key_exists("RiskEventCriticalCount",$param) and $param["RiskEventCriticalCount"] !== null) {
            $this->RiskEventCriticalCount = $param["RiskEventCriticalCount"];
        }

        if (array_key_exists("RiskEventHighCount",$param) and $param["RiskEventHighCount"] !== null) {
            $this->RiskEventHighCount = $param["RiskEventHighCount"];
        }

        if (array_key_exists("RiskEventMiddleCount",$param) and $param["RiskEventMiddleCount"] !== null) {
            $this->RiskEventMiddleCount = $param["RiskEventMiddleCount"];
        }

        if (array_key_exists("RiskEventLowCount",$param) and $param["RiskEventLowCount"] !== null) {
            $this->RiskEventLowCount = $param["RiskEventLowCount"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("OfflineNodeCount",$param) and $param["OfflineNodeCount"] !== null) {
            $this->OfflineNodeCount = $param["OfflineNodeCount"];
        }

        if (array_key_exists("UninstallNodeCount",$param) and $param["UninstallNodeCount"] !== null) {
            $this->UninstallNodeCount = $param["UninstallNodeCount"];
        }

        if (array_key_exists("TotalCoresCount",$param) and $param["TotalCoresCount"] !== null) {
            $this->TotalCoresCount = $param["TotalCoresCount"];
        }

        if (array_key_exists("DefendCoresCount",$param) and $param["DefendCoresCount"] !== null) {
            $this->DefendCoresCount = $param["DefendCoresCount"];
        }

        if (array_key_exists("AuditLogSwitchStatus",$param) and $param["AuditLogSwitchStatus"] !== null) {
            $this->AuditLogSwitchStatus = $param["AuditLogSwitchStatus"];
        }

        if (array_key_exists("DefendStatus",$param) and $param["DefendStatus"] !== null) {
            $this->DefendStatus = $param["DefendStatus"];
        }

        if (array_key_exists("RunStatus",$param) and $param["RunStatus"] !== null) {
            $this->RunStatus = $param["RunStatus"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("LastAssetSyncTime",$param) and $param["LastAssetSyncTime"] !== null) {
            $this->LastAssetSyncTime = $param["LastAssetSyncTime"];
        }

        if (array_key_exists("LastRiskCheckTime",$param) and $param["LastRiskCheckTime"] !== null) {
            $this->LastRiskCheckTime = $param["LastRiskCheckTime"];
        }

        if (array_key_exists("RiskStatus",$param) and $param["RiskStatus"] !== null) {
            $this->RiskStatus = $param["RiskStatus"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new AssetTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("OwnerName",$param) and $param["OwnerName"] !== null) {
            $this->OwnerName = $param["OwnerName"];
        }

        if (array_key_exists("FailMessage",$param) and $param["FailMessage"] !== null) {
            $this->FailMessage = $param["FailMessage"];
        }

        if (array_key_exists("RunSubStatus",$param) and $param["RunSubStatus"] !== null) {
            $this->RunSubStatus = $param["RunSubStatus"];
        }

        if (array_key_exists("AccessedStatus",$param) and $param["AccessedStatus"] !== null) {
            $this->AccessedStatus = $param["AccessedStatus"];
        }

        if (array_key_exists("AccessedSubStatus",$param) and $param["AccessedSubStatus"] !== null) {
            $this->AccessedSubStatus = $param["AccessedSubStatus"];
        }

        if (array_key_exists("ClusterCaMD5",$param) and $param["ClusterCaMD5"] !== null) {
            $this->ClusterCaMD5 = $param["ClusterCaMD5"];
        }

        if (array_key_exists("AssetSyncStatus",$param) and $param["AssetSyncStatus"] !== null) {
            $this->AssetSyncStatus = $param["AssetSyncStatus"];
        }

        if (array_key_exists("RiskConfigCount",$param) and $param["RiskConfigCount"] !== null) {
            $this->RiskConfigCount = $param["RiskConfigCount"];
        }

        if (array_key_exists("AccessFailedMessage",$param) and $param["AccessFailedMessage"] !== null) {
            $this->AccessFailedMessage = $param["AccessFailedMessage"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("RegionNameEn",$param) and $param["RegionNameEn"] !== null) {
            $this->RegionNameEn = $param["RegionNameEn"];
        }

        if (array_key_exists("UnboundUltimateNodeCount",$param) and $param["UnboundUltimateNodeCount"] !== null) {
            $this->UnboundUltimateNodeCount = $param["UnboundUltimateNodeCount"];
        }
    }
}
