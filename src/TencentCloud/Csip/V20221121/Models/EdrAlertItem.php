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
 * EDR alarm list information
 *
 * @method integer getId() Obtain <p>Alarm table id</p>
 * @method void setId(integer $Id) Set <p>Alarm table id</p>
 * @method integer getAppId() Obtain <p>APPID</p>
 * @method void setAppId(integer $AppId) Set <p>APPID</p>
 * @method string getAlertId() Obtain <p>Alarm ID</p>
 * @method void setAlertId(string $AlertId) Set <p>Alarm ID</p>
 * @method string getAlertCategory() Obtain <p>Major category of alarm</p>
 * @method void setAlertCategory(string $AlertCategory) Set <p>Major category of alarm</p>
 * @method string getAlertSubType() Obtain <p>Alarm subcategory</p>
 * @method void setAlertSubType(string $AlertSubType) Set <p>Alarm subcategory</p>
 * @method string getRuleId() Obtain <p>Policy ID.</p>
 * @method void setRuleId(string $RuleId) Set <p>Policy ID.</p>
 * @method integer getRuleType() Obtain <p>Policy type</p>
 * @method void setRuleType(integer $RuleType) Set <p>Policy type</p>
 * @method string getLevel() Obtain <p>Alarm level.</p>
 * @method void setLevel(string $Level) Set <p>Alarm level.</p>
 * @method string getStatus() Obtain <p>Alarm status</p>
 * @method void setStatus(string $Status) Set <p>Alarm status</p>
 * @method string getAttackStage() Obtain <p>Attack phase</p>
 * @method void setAttackStage(string $AttackStage) Set <p>Attack phase</p>
 * @method string getDetectMode() Obtain <p>Detection mode</p>
 * @method void setDetectMode(string $DetectMode) Set <p>Detection mode</p>
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method string getQuuid() Obtain <p>QUUID</p>
 * @method void setQuuid(string $Quuid) Set <p>QUUID</p>
 * @method integer getIsProVersion() Obtain <p>Whether to pay</p>
 * @method void setIsProVersion(integer $IsProVersion) Set <p>Whether to pay</p>
 * @method string getAlertSource() Obtain <p>Alarm source</p>
 * @method void setAlertSource(string $AlertSource) Set <p>Alarm source</p>
 * @method string getMachineType() Obtain <p>Machine type (specific to the list API; not limited to container alerts, and the same is returned for host alerts). Enriched from machines.machine_type by Quuid. The original enumeration value is passed through as-is without i18n translation, and the frontend performs row mapping for display. Parameter values include CVM / LH / Other / EKS-NATIVE. If no corresponding machine information is found, it is downgraded to an empty string "" (consistent with the downgrade action for asset enrichment fields such as InstanceName / PublicIp / PrivateIp). This field will not be returned by the alert details API (DescribeEdrAlertInfo)</p>
 * @method void setMachineType(string $MachineType) Set <p>Machine type (specific to the list API; not limited to container alerts, and the same is returned for host alerts). Enriched from machines.machine_type by Quuid. The original enumeration value is passed through as-is without i18n translation, and the frontend performs row mapping for display. Parameter values include CVM / LH / Other / EKS-NATIVE. If no corresponding machine information is found, it is downgraded to an empty string "" (consistent with the downgrade action for asset enrichment fields such as InstanceName / PublicIp / PrivateIp). This field will not be returned by the alert details API (DescribeEdrAlertInfo)</p>
 * @method string getImageId() Obtain <p>Image ID.</p>
 * @method void setImageId(string $ImageId) Set <p>Image ID.</p>
 * @method string getContainerId() Obtain <p>Container id</p>
 * @method void setContainerId(string $ContainerId) Set <p>Container id</p>
 * @method string getClusterId() Obtain <p>Cluster ID.</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID.</p>
 * @method integer getEventCount() Obtain <p>Number of alarms.</p>
 * @method void setEventCount(integer $EventCount) Set <p>Number of alarms.</p>
 * @method string getFirstDetectTime() Obtain <p>Initial discovery time</p>
 * @method void setFirstDetectTime(string $FirstDetectTime) Set <p>Initial discovery time</p>
 * @method string getLatestDetectTime() Obtain <p>Most recent discovery time</p>
 * @method void setLatestDetectTime(string $LatestDetectTime) Set <p>Most recent discovery time</p>
 * @method string getRuleName() Obtain <p>Rule name.</p>
 * @method void setRuleName(string $RuleName) Set <p>Rule name.</p>
 * @method string getContentType() Obtain <p>Policy type</p>
 * @method void setContentType(string $ContentType) Set <p>Policy type</p>
 * @method string getInstanceName() Obtain <p>Instance name</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name</p>
 * @method string getPublicIp() Obtain <p>Public IP</p>
 * @method void setPublicIp(string $PublicIp) Set <p>Public IP</p>
 * @method string getPrivateIp() Obtain <p>Private IP address.</p>
 * @method void setPrivateIp(string $PrivateIp) Set <p>Private IP address.</p>
 * @method boolean getRaspOpen() Obtain <p>Whether application protection is enabled for this machine</p>
 * @method void setRaspOpen(boolean $RaspOpen) Set <p>Whether application protection is enabled for this machine</p>
 * @method string getContainerName() Obtain <p>Container name</p>
 * @method void setContainerName(string $ContainerName) Set <p>Container name</p>
 * @method string getImageName() Obtain <p>Container image name</p>
 * @method void setImageName(string $ImageName) Set <p>Container image name</p>
 * @method string getClusterName() Obtain <p>Cluster name.</p>
 * @method void setClusterName(string $ClusterName) Set <p>Cluster name.</p>
 */
class EdrAlertItem extends AbstractModel
{
    /**
     * @var integer <p>Alarm table id</p>
     */
    public $Id;

    /**
     * @var integer <p>APPID</p>
     */
    public $AppId;

    /**
     * @var string <p>Alarm ID</p>
     */
    public $AlertId;

    /**
     * @var string <p>Major category of alarm</p>
     */
    public $AlertCategory;

    /**
     * @var string <p>Alarm subcategory</p>
     */
    public $AlertSubType;

    /**
     * @var string <p>Policy ID.</p>
     */
    public $RuleId;

    /**
     * @var integer <p>Policy type</p>
     */
    public $RuleType;

    /**
     * @var string <p>Alarm level.</p>
     */
    public $Level;

    /**
     * @var string <p>Alarm status</p>
     */
    public $Status;

    /**
     * @var string <p>Attack phase</p>
     */
    public $AttackStage;

    /**
     * @var string <p>Detection mode</p>
     */
    public $DetectMode;

    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>QUUID</p>
     */
    public $Quuid;

    /**
     * @var integer <p>Whether to pay</p>
     */
    public $IsProVersion;

    /**
     * @var string <p>Alarm source</p>
     */
    public $AlertSource;

    /**
     * @var string <p>Machine type (specific to the list API; not limited to container alerts, and the same is returned for host alerts). Enriched from machines.machine_type by Quuid. The original enumeration value is passed through as-is without i18n translation, and the frontend performs row mapping for display. Parameter values include CVM / LH / Other / EKS-NATIVE. If no corresponding machine information is found, it is downgraded to an empty string "" (consistent with the downgrade action for asset enrichment fields such as InstanceName / PublicIp / PrivateIp). This field will not be returned by the alert details API (DescribeEdrAlertInfo)</p>
     */
    public $MachineType;

    /**
     * @var string <p>Image ID.</p>
     */
    public $ImageId;

    /**
     * @var string <p>Container id</p>
     */
    public $ContainerId;

    /**
     * @var string <p>Cluster ID.</p>
     */
    public $ClusterId;

    /**
     * @var integer <p>Number of alarms.</p>
     */
    public $EventCount;

    /**
     * @var string <p>Initial discovery time</p>
     */
    public $FirstDetectTime;

    /**
     * @var string <p>Most recent discovery time</p>
     */
    public $LatestDetectTime;

    /**
     * @var string <p>Rule name.</p>
     */
    public $RuleName;

    /**
     * @var string <p>Policy type</p>
     */
    public $ContentType;

    /**
     * @var string <p>Instance name</p>
     */
    public $InstanceName;

    /**
     * @var string <p>Public IP</p>
     */
    public $PublicIp;

    /**
     * @var string <p>Private IP address.</p>
     */
    public $PrivateIp;

    /**
     * @var boolean <p>Whether application protection is enabled for this machine</p>
     */
    public $RaspOpen;

    /**
     * @var string <p>Container name</p>
     */
    public $ContainerName;

    /**
     * @var string <p>Container image name</p>
     */
    public $ImageName;

    /**
     * @var string <p>Cluster name.</p>
     */
    public $ClusterName;

    /**
     * @param integer $Id <p>Alarm table id</p>
     * @param integer $AppId <p>APPID</p>
     * @param string $AlertId <p>Alarm ID</p>
     * @param string $AlertCategory <p>Major category of alarm</p>
     * @param string $AlertSubType <p>Alarm subcategory</p>
     * @param string $RuleId <p>Policy ID.</p>
     * @param integer $RuleType <p>Policy type</p>
     * @param string $Level <p>Alarm level.</p>
     * @param string $Status <p>Alarm status</p>
     * @param string $AttackStage <p>Attack phase</p>
     * @param string $DetectMode <p>Detection mode</p>
     * @param string $InstanceId <p>Instance ID.</p>
     * @param string $Quuid <p>QUUID</p>
     * @param integer $IsProVersion <p>Whether to pay</p>
     * @param string $AlertSource <p>Alarm source</p>
     * @param string $MachineType <p>Machine type (specific to the list API; not limited to container alerts, and the same is returned for host alerts). Enriched from machines.machine_type by Quuid. The original enumeration value is passed through as-is without i18n translation, and the frontend performs row mapping for display. Parameter values include CVM / LH / Other / EKS-NATIVE. If no corresponding machine information is found, it is downgraded to an empty string "" (consistent with the downgrade action for asset enrichment fields such as InstanceName / PublicIp / PrivateIp). This field will not be returned by the alert details API (DescribeEdrAlertInfo)</p>
     * @param string $ImageId <p>Image ID.</p>
     * @param string $ContainerId <p>Container id</p>
     * @param string $ClusterId <p>Cluster ID.</p>
     * @param integer $EventCount <p>Number of alarms.</p>
     * @param string $FirstDetectTime <p>Initial discovery time</p>
     * @param string $LatestDetectTime <p>Most recent discovery time</p>
     * @param string $RuleName <p>Rule name.</p>
     * @param string $ContentType <p>Policy type</p>
     * @param string $InstanceName <p>Instance name</p>
     * @param string $PublicIp <p>Public IP</p>
     * @param string $PrivateIp <p>Private IP address.</p>
     * @param boolean $RaspOpen <p>Whether application protection is enabled for this machine</p>
     * @param string $ContainerName <p>Container name</p>
     * @param string $ImageName <p>Container image name</p>
     * @param string $ClusterName <p>Cluster name.</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AlertId",$param) and $param["AlertId"] !== null) {
            $this->AlertId = $param["AlertId"];
        }

        if (array_key_exists("AlertCategory",$param) and $param["AlertCategory"] !== null) {
            $this->AlertCategory = $param["AlertCategory"];
        }

        if (array_key_exists("AlertSubType",$param) and $param["AlertSubType"] !== null) {
            $this->AlertSubType = $param["AlertSubType"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AttackStage",$param) and $param["AttackStage"] !== null) {
            $this->AttackStage = $param["AttackStage"];
        }

        if (array_key_exists("DetectMode",$param) and $param["DetectMode"] !== null) {
            $this->DetectMode = $param["DetectMode"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("IsProVersion",$param) and $param["IsProVersion"] !== null) {
            $this->IsProVersion = $param["IsProVersion"];
        }

        if (array_key_exists("AlertSource",$param) and $param["AlertSource"] !== null) {
            $this->AlertSource = $param["AlertSource"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("EventCount",$param) and $param["EventCount"] !== null) {
            $this->EventCount = $param["EventCount"];
        }

        if (array_key_exists("FirstDetectTime",$param) and $param["FirstDetectTime"] !== null) {
            $this->FirstDetectTime = $param["FirstDetectTime"];
        }

        if (array_key_exists("LatestDetectTime",$param) and $param["LatestDetectTime"] !== null) {
            $this->LatestDetectTime = $param["LatestDetectTime"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("RaspOpen",$param) and $param["RaspOpen"] !== null) {
            $this->RaspOpen = $param["RaspOpen"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }
    }
}
