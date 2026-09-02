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
 * Cluster pod list item
 *
 * @method string getAssetId() Obtain <p>Asset id</p>
 * @method void setAssetId(string $AssetId) Set <p>Asset id</p>
 * @method integer getAppID() Obtain <p>appid</p>
 * @method void setAppID(integer $AppID) Set <p>appid</p>
 * @method string getPodUid() Obtain <p>Unique pod id</p>
 * @method void setPodUid(string $PodUid) Set <p>Unique pod id</p>
 * @method string getPodName() Obtain <p>Pod name.</p>
 * @method void setPodName(string $PodName) Set <p>Pod name.</p>
 * @method array getPodIPs() Obtain <p>Pod IP array</p>
 * @method void setPodIPs(array $PodIPs) Set <p>Pod IP array</p>
 * @method string getRunStatus() Obtain <p>pod status</p>
 * @method void setRunStatus(string $RunStatus) Set <p>pod status</p>
 * @method integer getDefendCoresCount() Obtain <p>Number of protected cores</p>
 * @method void setDefendCoresCount(integer $DefendCoresCount) Set <p>Number of protected cores</p>
 * @method string getNodeId() Obtain <p>Node ID.</p>
 * @method void setNodeId(string $NodeId) Set <p>Node ID.</p>
 * @method string getNodeType() Obtain <p>Node type</p>
 * @method void setNodeType(string $NodeType) Set <p>Node type</p>
 * @method string getWorkloadName() Obtain <p>Load Name</p>
 * @method void setWorkloadName(string $WorkloadName) Set <p>Load Name</p>
 * @method string getWorkloadType() Obtain <p>Workload type</p>
 * @method void setWorkloadType(string $WorkloadType) Set <p>Workload type</p>
 * @method string getNamespace() Obtain <p>Namespace.</p>
 * @method void setNamespace(string $Namespace) Set <p>Namespace.</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method string getUniqueID() Obtain <p>Unique Pod identifier ID</p>
 * @method void setUniqueID(string $UniqueID) Set <p>Unique Pod identifier ID</p>
 * @method integer getRiskEventCriticalCount() Obtain <p>Critical risk count</p>
 * @method void setRiskEventCriticalCount(integer $RiskEventCriticalCount) Set <p>Critical risk count</p>
 * @method integer getRiskEventHighCount() Obtain <p>Number of high-risk items</p>
 * @method void setRiskEventHighCount(integer $RiskEventHighCount) Set <p>Number of high-risk items</p>
 * @method integer getRiskEventMiddleCount() Obtain <p>Number of medium-risk items</p>
 * @method void setRiskEventMiddleCount(integer $RiskEventMiddleCount) Set <p>Number of medium-risk items</p>
 * @method integer getRiskEventLowCount() Obtain <p>Number of low risks</p>
 * @method void setRiskEventLowCount(integer $RiskEventLowCount) Set <p>Number of low risks</p>
 * @method integer getAlarmEventCriticalCount() Obtain <p>Number of critical alerts</p>
 * @method void setAlarmEventCriticalCount(integer $AlarmEventCriticalCount) Set <p>Number of critical alerts</p>
 * @method integer getAlarmEventHighCount() Obtain <p>High-risk alarm count</p>
 * @method void setAlarmEventHighCount(integer $AlarmEventHighCount) Set <p>High-risk alarm count</p>
 * @method integer getAlarmEventMiddleCount() Obtain <p>Number of medium-risk alerts</p>
 * @method void setAlarmEventMiddleCount(integer $AlarmEventMiddleCount) Set <p>Number of medium-risk alerts</p>
 * @method integer getAlarmEventLowCount() Obtain <p>Number of low-risk alarms</p>
 * @method void setAlarmEventLowCount(integer $AlarmEventLowCount) Set <p>Number of low-risk alarms</p>
 * @method array getContainerList() Obtain <p>Associated container list</p>
 * @method void setContainerList(array $ContainerList) Set <p>Associated container list</p>
 * @method integer getAlarmCount() Obtain <p>Number of associated alarms</p>
 * @method void setAlarmCount(integer $AlarmCount) Set <p>Number of associated alarms</p>
 * @method integer getCoresCount() Obtain <p>Number of cores.</p><p>Unit: millicore.</p>
 * @method void setCoresCount(integer $CoresCount) Set <p>Number of cores.</p><p>Unit: millicore.</p>
 */
class ClusterPodListItem extends AbstractModel
{
    /**
     * @var string <p>Asset id</p>
     * @deprecated
     */
    public $AssetId;

    /**
     * @var integer <p>appid</p>
     */
    public $AppID;

    /**
     * @var string <p>Unique pod id</p>
     */
    public $PodUid;

    /**
     * @var string <p>Pod name.</p>
     */
    public $PodName;

    /**
     * @var array <p>Pod IP array</p>
     */
    public $PodIPs;

    /**
     * @var string <p>pod status</p>
     */
    public $RunStatus;

    /**
     * @var integer <p>Number of protected cores</p>
     * @deprecated
     */
    public $DefendCoresCount;

    /**
     * @var string <p>Node ID.</p>
     */
    public $NodeId;

    /**
     * @var string <p>Node type</p>
     */
    public $NodeType;

    /**
     * @var string <p>Load Name</p>
     */
    public $WorkloadName;

    /**
     * @var string <p>Workload type</p>
     */
    public $WorkloadType;

    /**
     * @var string <p>Namespace.</p>
     */
    public $Namespace;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Unique Pod identifier ID</p>
     */
    public $UniqueID;

    /**
     * @var integer <p>Critical risk count</p>
     * @deprecated
     */
    public $RiskEventCriticalCount;

    /**
     * @var integer <p>Number of high-risk items</p>
     * @deprecated
     */
    public $RiskEventHighCount;

    /**
     * @var integer <p>Number of medium-risk items</p>
     * @deprecated
     */
    public $RiskEventMiddleCount;

    /**
     * @var integer <p>Number of low risks</p>
     * @deprecated
     */
    public $RiskEventLowCount;

    /**
     * @var integer <p>Number of critical alerts</p>
     * @deprecated
     */
    public $AlarmEventCriticalCount;

    /**
     * @var integer <p>High-risk alarm count</p>
     * @deprecated
     */
    public $AlarmEventHighCount;

    /**
     * @var integer <p>Number of medium-risk alerts</p>
     * @deprecated
     */
    public $AlarmEventMiddleCount;

    /**
     * @var integer <p>Number of low-risk alarms</p>
     * @deprecated
     */
    public $AlarmEventLowCount;

    /**
     * @var array <p>Associated container list</p>
     */
    public $ContainerList;

    /**
     * @var integer <p>Number of associated alarms</p>
     */
    public $AlarmCount;

    /**
     * @var integer <p>Number of cores.</p><p>Unit: millicore.</p>
     */
    public $CoresCount;

    /**
     * @param string $AssetId <p>Asset id</p>
     * @param integer $AppID <p>appid</p>
     * @param string $PodUid <p>Unique pod id</p>
     * @param string $PodName <p>Pod name.</p>
     * @param array $PodIPs <p>Pod IP array</p>
     * @param string $RunStatus <p>pod status</p>
     * @param integer $DefendCoresCount <p>Number of protected cores</p>
     * @param string $NodeId <p>Node ID.</p>
     * @param string $NodeType <p>Node type</p>
     * @param string $WorkloadName <p>Load Name</p>
     * @param string $WorkloadType <p>Workload type</p>
     * @param string $Namespace <p>Namespace.</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param string $UniqueID <p>Unique Pod identifier ID</p>
     * @param integer $RiskEventCriticalCount <p>Critical risk count</p>
     * @param integer $RiskEventHighCount <p>Number of high-risk items</p>
     * @param integer $RiskEventMiddleCount <p>Number of medium-risk items</p>
     * @param integer $RiskEventLowCount <p>Number of low risks</p>
     * @param integer $AlarmEventCriticalCount <p>Number of critical alerts</p>
     * @param integer $AlarmEventHighCount <p>High-risk alarm count</p>
     * @param integer $AlarmEventMiddleCount <p>Number of medium-risk alerts</p>
     * @param integer $AlarmEventLowCount <p>Number of low-risk alarms</p>
     * @param array $ContainerList <p>Associated container list</p>
     * @param integer $AlarmCount <p>Number of associated alarms</p>
     * @param integer $CoresCount <p>Number of cores.</p><p>Unit: millicore.</p>
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
        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("PodUid",$param) and $param["PodUid"] !== null) {
            $this->PodUid = $param["PodUid"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("PodIPs",$param) and $param["PodIPs"] !== null) {
            $this->PodIPs = $param["PodIPs"];
        }

        if (array_key_exists("RunStatus",$param) and $param["RunStatus"] !== null) {
            $this->RunStatus = $param["RunStatus"];
        }

        if (array_key_exists("DefendCoresCount",$param) and $param["DefendCoresCount"] !== null) {
            $this->DefendCoresCount = $param["DefendCoresCount"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("WorkloadName",$param) and $param["WorkloadName"] !== null) {
            $this->WorkloadName = $param["WorkloadName"];
        }

        if (array_key_exists("WorkloadType",$param) and $param["WorkloadType"] !== null) {
            $this->WorkloadType = $param["WorkloadType"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UniqueID",$param) and $param["UniqueID"] !== null) {
            $this->UniqueID = $param["UniqueID"];
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

        if (array_key_exists("ContainerList",$param) and $param["ContainerList"] !== null) {
            $this->ContainerList = [];
            foreach ($param["ContainerList"] as $key => $value){
                $obj = new ClusterContainerListItem();
                $obj->deserialize($value);
                array_push($this->ContainerList, $obj);
            }
        }

        if (array_key_exists("AlarmCount",$param) and $param["AlarmCount"] !== null) {
            $this->AlarmCount = $param["AlarmCount"];
        }

        if (array_key_exists("CoresCount",$param) and $param["CoresCount"] !== null) {
            $this->CoresCount = $param["CoresCount"];
        }
    }
}
