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
 * Cluster container list item
 *
 * @method integer getAppID() Obtain <p>appid</p>
 * @method void setAppID(integer $AppID) Set <p>appid</p>
 * @method string getAssetId() Obtain <p>Asset id</p>
 * @method void setAssetId(string $AssetId) Set <p>Asset id</p>
 * @method string getContainerId() Obtain <p>Container id</p>
 * @method void setContainerId(string $ContainerId) Set <p>Container id</p>
 * @method string getContainerName() Obtain <p>Container name</p>
 * @method void setContainerName(string $ContainerName) Set <p>Container name</p>
 * @method string getRunStatus() Obtain <p>Running state</p>
 * @method void setRunStatus(string $RunStatus) Set <p>Running state</p>
 * @method string getNodeId() Obtain <p>Node ID.</p>
 * @method void setNodeId(string $NodeId) Set <p>Node ID.</p>
 * @method string getNodeType() Obtain <p>Node type</p>
 * @method void setNodeType(string $NodeType) Set <p>Node type</p>
 * @method string getPodUid() Obtain <p>Unique pod id</p>
 * @method void setPodUid(string $PodUid) Set <p>Unique pod id</p>
 * @method string getPodName() Obtain <p>Pod name.</p>
 * @method void setPodName(string $PodName) Set <p>Pod name.</p>
 * @method string getImageId() Obtain <p>Image ID.</p>
 * @method void setImageId(string $ImageId) Set <p>Image ID.</p>
 * @method string getImageName() Obtain <p>Image name.</p>
 * @method void setImageName(string $ImageName) Set <p>Image name.</p>
 * @method string getIsolateStatus() Obtain <p>Isolation status</p>
 * @method void setIsolateStatus(string $IsolateStatus) Set <p>Isolation status</p>
 * @method integer getRiskEventCriticalCount() Obtain <p>Critical risk count</p>
 * @method void setRiskEventCriticalCount(integer $RiskEventCriticalCount) Set <p>Critical risk count</p>
 * @method integer getRiskEventHighCount() Obtain <p>Number of high-level risks</p>
 * @method void setRiskEventHighCount(integer $RiskEventHighCount) Set <p>Number of high-level risks</p>
 * @method integer getRiskEventMiddleCount() Obtain <p>Number of medium-risk items</p>
 * @method void setRiskEventMiddleCount(integer $RiskEventMiddleCount) Set <p>Number of medium-risk items</p>
 * @method integer getRiskEventLowCount() Obtain <p>Number of low risks</p>
 * @method void setRiskEventLowCount(integer $RiskEventLowCount) Set <p>Number of low risks</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method integer getAlarmCount() Obtain <p>Number of associated alarms</p>
 * @method void setAlarmCount(integer $AlarmCount) Set <p>Number of associated alarms</p>
 */
class ClusterContainerListItem extends AbstractModel
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
     * @var string <p>Container id</p>
     */
    public $ContainerId;

    /**
     * @var string <p>Container name</p>
     */
    public $ContainerName;

    /**
     * @var string <p>Running state</p>
     */
    public $RunStatus;

    /**
     * @var string <p>Node ID.</p>
     */
    public $NodeId;

    /**
     * @var string <p>Node type</p>
     */
    public $NodeType;

    /**
     * @var string <p>Unique pod id</p>
     */
    public $PodUid;

    /**
     * @var string <p>Pod name.</p>
     */
    public $PodName;

    /**
     * @var string <p>Image ID.</p>
     */
    public $ImageId;

    /**
     * @var string <p>Image name.</p>
     */
    public $ImageName;

    /**
     * @var string <p>Isolation status</p>
     */
    public $IsolateStatus;

    /**
     * @var integer <p>Critical risk count</p>
     * @deprecated
     */
    public $RiskEventCriticalCount;

    /**
     * @var integer <p>Number of high-level risks</p>
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
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>Number of associated alarms</p>
     */
    public $AlarmCount;

    /**
     * @param integer $AppID <p>appid</p>
     * @param string $AssetId <p>Asset id</p>
     * @param string $ContainerId <p>Container id</p>
     * @param string $ContainerName <p>Container name</p>
     * @param string $RunStatus <p>Running state</p>
     * @param string $NodeId <p>Node ID.</p>
     * @param string $NodeType <p>Node type</p>
     * @param string $PodUid <p>Unique pod id</p>
     * @param string $PodName <p>Pod name.</p>
     * @param string $ImageId <p>Image ID.</p>
     * @param string $ImageName <p>Image name.</p>
     * @param string $IsolateStatus <p>Isolation status</p>
     * @param integer $RiskEventCriticalCount <p>Critical risk count</p>
     * @param integer $RiskEventHighCount <p>Number of high-level risks</p>
     * @param integer $RiskEventMiddleCount <p>Number of medium-risk items</p>
     * @param integer $RiskEventLowCount <p>Number of low risks</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param integer $AlarmCount <p>Number of associated alarms</p>
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

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("RunStatus",$param) and $param["RunStatus"] !== null) {
            $this->RunStatus = $param["RunStatus"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("PodUid",$param) and $param["PodUid"] !== null) {
            $this->PodUid = $param["PodUid"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("IsolateStatus",$param) and $param["IsolateStatus"] !== null) {
            $this->IsolateStatus = $param["IsolateStatus"];
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("AlarmCount",$param) and $param["AlarmCount"] !== null) {
            $this->AlarmCount = $param["AlarmCount"];
        }
    }
}
