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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List object of authorization packages
 *
 * @method string getQUUID() Obtain Machine unique ID
 * @method void setQUUID(string $QUUID) Set Machine unique ID
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getPublicIP() Obtain Public IP address
 * @method void setPublicIP(string $PublicIP) Set Public IP address
 * @method string getPrivateIP() Obtain Private IP address
 * @method void setPrivateIP(string $PrivateIP) Set Private IP address
 * @method array getTags() Obtain Cloud Tag Information
 * @method void setTags(array $Tags) Set Cloud Tag Information
 * @method array getProtectionVersion() Obtain Version information
-Prioritized Protection package
-Container Security - Pro Edition
-CWP - Flagship Edition
 * @method void setProtectionVersion(array $ProtectionVersion) Set Version information
-Prioritized Protection package
-Container Security - Pro Edition
-CWP - Flagship Edition
 * @method integer getConfigurationSetting() Obtain Protection setting
-0 unconfigured
-Configured
 * @method void setConfigurationSetting(integer $ConfigurationSetting) Set Protection setting
-0 unconfigured
-Configured
 * @method integer getEnable() Obtain Master switch
-0 Not enabled
- 1: enabled.
 * @method void setEnable(integer $Enable) Set Master switch
-0 Not enabled
- 1: enabled.
 * @method integer getVulDefEnable() Obtain Vulnerability defense switch
-0 Not enabled
- 1: enabled.
 * @method void setVulDefEnable(integer $VulDefEnable) Set Vulnerability defense switch
-0 Not enabled
- 1: enabled.
 * @method integer getVulDefMode() Obtain Vulnerability defense mode
-0 Standard
-1. Major Event Support
 * @method void setVulDefMode(integer $VulDefMode) Set Vulnerability defense mode
-0 Standard
-1. Major Event Support
 * @method integer getVulDefAction() Obtain Vulnerability defense action
-0 Detect only
-Detect + defend
 * @method void setVulDefAction(integer $VulDefAction) Set Vulnerability defense action
-0 Detect only
-Detect + defend
 * @method integer getMemShellDefEnable() Obtain Java Webshell Defense switch
-0 Not enabled
- 1: enabled.
 * @method void setMemShellDefEnable(integer $MemShellDefEnable) Set Java Webshell Defense switch
-0 Not enabled
- 1: enabled.
 * @method integer getSafeInject() Obtain More protection
-0 Do not inject processes that will restart 
-Inject a process that will restart
 * @method void setSafeInject(integer $SafeInject) Set More protection
-0 Do not inject processes that will restart 
-Inject a process that will restart
 * @method integer getPerformanceLimit() Obtain Performance threshold configuration switch
-0 Not enabled
- 1: enabled.
 * @method void setPerformanceLimit(integer $PerformanceLimit) Set Performance threshold configuration switch
-0 Not enabled
- 1: enabled.
 * @method integer getPerformanceLimitCpu() Obtain CPU threshold, Value 1-99
 * @method void setPerformanceLimitCpu(integer $PerformanceLimitCpu) Set CPU threshold, Value 1-99
 * @method integer getPerformanceLimitMem() Obtain Memory threshold, value 1-99
 * @method void setPerformanceLimitMem(integer $PerformanceLimitMem) Set Memory threshold, value 1-99
 * @method integer getPerformanceLimitMemAmount() Obtain Memory remaining threshold
 * @method void setPerformanceLimitMemAmount(integer $PerformanceLimitMemAmount) Set Memory remaining threshold
 * @method integer getRaspException() Obtain Plug-in status
-0 Use normally
-1: Existence of anomalies
-2 inactive
 * @method void setRaspException(integer $RaspException) Set Plug-in status
-0 Use normally
-1: Existence of anomalies
-2 inactive
 * @method string getLatestUpdateTime() Obtain Latest update time
 * @method void setLatestUpdateTime(string $LatestUpdateTime) Set Latest update time
 * @method string getClusterName() Obtain Cluster ID, only valid for container assets
 * @method void setClusterName(string $ClusterName) Set Cluster ID, only valid for container assets
 * @method string getClusterId() Obtain Cluster name, only container assets have values
 * @method void setClusterId(string $ClusterId) Set Cluster name, only container assets have values
 * @method OrderDetail getOrderDetail() Obtain Order information
 * @method void setOrderDetail(OrderDetail $OrderDetail) Set Order information
 * @method boolean getIsUnBind() Obtain Whether unbinding is allowed: false - not allowed, true - allowed.
 * @method void setIsUnBind(boolean $IsUnBind) Set Whether unbinding is allowed: false - not allowed, true - allowed.
 * @method string getUUID() Obtain uuid. Unique ID of the machine. Only valid when AssetType = CWP.
 * @method void setUUID(string $UUID) Set uuid. Unique ID of the machine. Only valid when AssetType = CWP.
 * @method string getReason() Obtain No injection/Failure reason of injection
 * @method void setReason(string $Reason) Set No injection/Failure reason of injection
 */
class RaspLicenseList extends AbstractModel
{
    /**
     * @var string Machine unique ID
     */
    public $QUUID;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Public IP address
     */
    public $PublicIP;

    /**
     * @var string Private IP address
     */
    public $PrivateIP;

    /**
     * @var array Cloud Tag Information
     */
    public $Tags;

    /**
     * @var array Version information
-Prioritized Protection package
-Container Security - Pro Edition
-CWP - Flagship Edition
     */
    public $ProtectionVersion;

    /**
     * @var integer Protection setting
-0 unconfigured
-Configured
     */
    public $ConfigurationSetting;

    /**
     * @var integer Master switch
-0 Not enabled
- 1: enabled.
     */
    public $Enable;

    /**
     * @var integer Vulnerability defense switch
-0 Not enabled
- 1: enabled.
     */
    public $VulDefEnable;

    /**
     * @var integer Vulnerability defense mode
-0 Standard
-1. Major Event Support
     */
    public $VulDefMode;

    /**
     * @var integer Vulnerability defense action
-0 Detect only
-Detect + defend
     */
    public $VulDefAction;

    /**
     * @var integer Java Webshell Defense switch
-0 Not enabled
- 1: enabled.
     */
    public $MemShellDefEnable;

    /**
     * @var integer More protection
-0 Do not inject processes that will restart 
-Inject a process that will restart
     */
    public $SafeInject;

    /**
     * @var integer Performance threshold configuration switch
-0 Not enabled
- 1: enabled.
     */
    public $PerformanceLimit;

    /**
     * @var integer CPU threshold, Value 1-99
     */
    public $PerformanceLimitCpu;

    /**
     * @var integer Memory threshold, value 1-99
     */
    public $PerformanceLimitMem;

    /**
     * @var integer Memory remaining threshold
     */
    public $PerformanceLimitMemAmount;

    /**
     * @var integer Plug-in status
-0 Use normally
-1: Existence of anomalies
-2 inactive
     */
    public $RaspException;

    /**
     * @var string Latest update time
     */
    public $LatestUpdateTime;

    /**
     * @var string Cluster ID, only valid for container assets
     */
    public $ClusterName;

    /**
     * @var string Cluster name, only container assets have values
     */
    public $ClusterId;

    /**
     * @var OrderDetail Order information
     */
    public $OrderDetail;

    /**
     * @var boolean Whether unbinding is allowed: false - not allowed, true - allowed.
     */
    public $IsUnBind;

    /**
     * @var string uuid. Unique ID of the machine. Only valid when AssetType = CWP.
     */
    public $UUID;

    /**
     * @var string No injection/Failure reason of injection
     */
    public $Reason;

    /**
     * @param string $QUUID Machine unique ID
     * @param string $InstanceName Instance name
     * @param string $InstanceId Instance ID
     * @param string $PublicIP Public IP address
     * @param string $PrivateIP Private IP address
     * @param array $Tags Cloud Tag Information
     * @param array $ProtectionVersion Version information
-Prioritized Protection package
-Container Security - Pro Edition
-CWP - Flagship Edition
     * @param integer $ConfigurationSetting Protection setting
-0 unconfigured
-Configured
     * @param integer $Enable Master switch
-0 Not enabled
- 1: enabled.
     * @param integer $VulDefEnable Vulnerability defense switch
-0 Not enabled
- 1: enabled.
     * @param integer $VulDefMode Vulnerability defense mode
-0 Standard
-1. Major Event Support
     * @param integer $VulDefAction Vulnerability defense action
-0 Detect only
-Detect + defend
     * @param integer $MemShellDefEnable Java Webshell Defense switch
-0 Not enabled
- 1: enabled.
     * @param integer $SafeInject More protection
-0 Do not inject processes that will restart 
-Inject a process that will restart
     * @param integer $PerformanceLimit Performance threshold configuration switch
-0 Not enabled
- 1: enabled.
     * @param integer $PerformanceLimitCpu CPU threshold, Value 1-99
     * @param integer $PerformanceLimitMem Memory threshold, value 1-99
     * @param integer $PerformanceLimitMemAmount Memory remaining threshold
     * @param integer $RaspException Plug-in status
-0 Use normally
-1: Existence of anomalies
-2 inactive
     * @param string $LatestUpdateTime Latest update time
     * @param string $ClusterName Cluster ID, only valid for container assets
     * @param string $ClusterId Cluster name, only container assets have values
     * @param OrderDetail $OrderDetail Order information
     * @param boolean $IsUnBind Whether unbinding is allowed: false - not allowed, true - allowed.
     * @param string $UUID uuid. Unique ID of the machine. Only valid when AssetType = CWP.
     * @param string $Reason No injection/Failure reason of injection
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
        if (array_key_exists("QUUID",$param) and $param["QUUID"] !== null) {
            $this->QUUID = $param["QUUID"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PublicIP",$param) and $param["PublicIP"] !== null) {
            $this->PublicIP = $param["PublicIP"];
        }

        if (array_key_exists("PrivateIP",$param) and $param["PrivateIP"] !== null) {
            $this->PrivateIP = $param["PrivateIP"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ProtectionVersion",$param) and $param["ProtectionVersion"] !== null) {
            $this->ProtectionVersion = $param["ProtectionVersion"];
        }

        if (array_key_exists("ConfigurationSetting",$param) and $param["ConfigurationSetting"] !== null) {
            $this->ConfigurationSetting = $param["ConfigurationSetting"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("VulDefEnable",$param) and $param["VulDefEnable"] !== null) {
            $this->VulDefEnable = $param["VulDefEnable"];
        }

        if (array_key_exists("VulDefMode",$param) and $param["VulDefMode"] !== null) {
            $this->VulDefMode = $param["VulDefMode"];
        }

        if (array_key_exists("VulDefAction",$param) and $param["VulDefAction"] !== null) {
            $this->VulDefAction = $param["VulDefAction"];
        }

        if (array_key_exists("MemShellDefEnable",$param) and $param["MemShellDefEnable"] !== null) {
            $this->MemShellDefEnable = $param["MemShellDefEnable"];
        }

        if (array_key_exists("SafeInject",$param) and $param["SafeInject"] !== null) {
            $this->SafeInject = $param["SafeInject"];
        }

        if (array_key_exists("PerformanceLimit",$param) and $param["PerformanceLimit"] !== null) {
            $this->PerformanceLimit = $param["PerformanceLimit"];
        }

        if (array_key_exists("PerformanceLimitCpu",$param) and $param["PerformanceLimitCpu"] !== null) {
            $this->PerformanceLimitCpu = $param["PerformanceLimitCpu"];
        }

        if (array_key_exists("PerformanceLimitMem",$param) and $param["PerformanceLimitMem"] !== null) {
            $this->PerformanceLimitMem = $param["PerformanceLimitMem"];
        }

        if (array_key_exists("PerformanceLimitMemAmount",$param) and $param["PerformanceLimitMemAmount"] !== null) {
            $this->PerformanceLimitMemAmount = $param["PerformanceLimitMemAmount"];
        }

        if (array_key_exists("RaspException",$param) and $param["RaspException"] !== null) {
            $this->RaspException = $param["RaspException"];
        }

        if (array_key_exists("LatestUpdateTime",$param) and $param["LatestUpdateTime"] !== null) {
            $this->LatestUpdateTime = $param["LatestUpdateTime"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("OrderDetail",$param) and $param["OrderDetail"] !== null) {
            $this->OrderDetail = new OrderDetail();
            $this->OrderDetail->deserialize($param["OrderDetail"]);
        }

        if (array_key_exists("IsUnBind",$param) and $param["IsUnBind"] !== null) {
            $this->IsUnBind = $param["IsUnBind"];
        }

        if (array_key_exists("UUID",$param) and $param["UUID"] !== null) {
            $this->UUID = $param["UUID"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
