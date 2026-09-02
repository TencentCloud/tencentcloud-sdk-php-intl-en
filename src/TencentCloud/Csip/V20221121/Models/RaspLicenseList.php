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
 * List of authorization packages for major event protection.
 *
 * @method string getQUUID() Obtain <p>Unique machine ID</p>
 * @method void setQUUID(string $QUUID) Set <p>Unique machine ID</p>
 * @method string getInstanceName() Obtain <p>Instance name.</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name.</p>
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method string getPublicIP() Obtain <p>Public IP Address</p>
 * @method void setPublicIP(string $PublicIP) Set <p>Public IP Address</p>
 * @method string getPrivateIP() Obtain <p>Private IP address.</p>
 * @method void setPrivateIP(string $PrivateIP) Set <p>Private IP address.</p>
 * @method array getTags() Obtain <p>Cloud tag information</p>
 * @method void setTags(array $Tags) Set <p>Cloud tag information</p>
 * @method array getProtectionVersion() Obtain <p>Protection edition information</p><ul><li>CriticalProtection Prioritized Protection package</li><li>Pro Container security-Pro Edition</li><li>Ultimate CWP-Flagship Edition</li></ul>
 * @method void setProtectionVersion(array $ProtectionVersion) Set <p>Protection edition information</p><ul><li>CriticalProtection Prioritized Protection package</li><li>Pro Container security-Pro Edition</li><li>Ultimate CWP-Flagship Edition</li></ul>
 * @method integer getConfigurationSetting() Obtain <p>Protection setting</p><ul><li>0 No configuration</li><li>1 Configured</li></ul>
 * @method void setConfigurationSetting(integer $ConfigurationSetting) Set <p>Protection setting</p><ul><li>0 No configuration</li><li>1 Configured</li></ul>
 * @method integer getEnable() Obtain <p>Master switch</p><ul><li>0 Not enabled</li><li>1 Enabled</li></ul>
 * @method void setEnable(integer $Enable) Set <p>Master switch</p><ul><li>0 Not enabled</li><li>1 Enabled</li></ul>
 * @method integer getVulDefEnable() Obtain <p>Vulnerability defense switch</p><ul><li>0 Not enabled</li><li>1 Enable</li></ul>
 * @method void setVulDefEnable(integer $VulDefEnable) Set <p>Vulnerability defense switch</p><ul><li>0 Not enabled</li><li>1 Enable</li></ul>
 * @method integer getVulDefMode() Obtain <p>Vulnerability defense mode</p><ul><li>0: standard</li><li>1: major event protection</li></ul>
 * @method void setVulDefMode(integer $VulDefMode) Set <p>Vulnerability defense mode</p><ul><li>0: standard</li><li>1: major event protection</li></ul>
 * @method integer getVulDefAction() Obtain <p>Vulnerability defense action</p><ul><li>0: Detection only</li><li>1: Detection and prevention</li></ul>
 * @method void setVulDefAction(integer $VulDefAction) Set <p>Vulnerability defense action</p><ul><li>0: Detection only</li><li>1: Detection and prevention</li></ul>
 * @method integer getMemShellDefEnable() Obtain <p>Java Webshell Defense switch</p><ul><li>0 Not enabled</li><li>1 Enable</li></ul>
 * @method void setMemShellDefEnable(integer $MemShellDefEnable) Set <p>Java Webshell Defense switch</p><ul><li>0 Not enabled</li><li>1 Enable</li></ul>
 * @method integer getSafeInject() Obtain <p>More protection</p><ul><li>0: Do not inject into processes that will restart </li><li>1: Inject into processes that will restart</li></ul>
 * @method void setSafeInject(integer $SafeInject) Set <p>More protection</p><ul><li>0: Do not inject into processes that will restart </li><li>1: Inject into processes that will restart</li></ul>
 * @method integer getPerformanceLimit() Obtain <p>Performance threshold configuration switch</p><ul><li>0 Not enabled</li><li>1 Enabled</li></ul>
 * @method void setPerformanceLimit(integer $PerformanceLimit) Set <p>Performance threshold configuration switch</p><ul><li>0 Not enabled</li><li>1 Enabled</li></ul>
 * @method integer getPerformanceLimitCpu() Obtain <p>CPU threshold. Value range: 1–99.</p>
 * @method void setPerformanceLimitCpu(integer $PerformanceLimitCpu) Set <p>CPU threshold. Value range: 1–99.</p>
 * @method integer getPerformanceLimitMem() Obtain <p>Memory threshold. Value range: 1–99</p>
 * @method void setPerformanceLimitMem(integer $PerformanceLimitMem) Set <p>Memory threshold. Value range: 1–99</p>
 * @method integer getPerformanceLimitMemAmount() Obtain <p>Remaining memory threshold</p>
 * @method void setPerformanceLimitMemAmount(integer $PerformanceLimitMemAmount) Set <p>Remaining memory threshold</p>
 * @method integer getRaspException() Obtain <p>Plug-in status</p><ul><li>0 Used normally</li><li>1 Anomaly exists</li><li>2 Inactive</li></ul>
 * @method void setRaspException(integer $RaspException) Set <p>Plug-in status</p><ul><li>0 Used normally</li><li>1 Anomaly exists</li><li>2 Inactive</li></ul>
 * @method string getLatestUpdateTime() Obtain <p>Latest update time.</p>
 * @method void setLatestUpdateTime(string $LatestUpdateTime) Set <p>Latest update time.</p>
 * @method string getClusterName() Obtain <p>Cluster ID, available only for container assets</p>
 * @method void setClusterName(string $ClusterName) Set <p>Cluster ID, available only for container assets</p>
 * @method string getClusterId() Obtain <p>Cluster name, only available for container assets</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster name, only available for container assets</p>
 * @method OrderDetail getOrderDetail() Obtain <p>Order information</p>
 * @method void setOrderDetail(OrderDetail $OrderDetail) Set <p>Order information</p>
 * @method boolean getIsUnBind() Obtain <p>Whether unbinding is allowed. false: not allowed; true: permission</p>
 * @method void setIsUnBind(boolean $IsUnBind) Set <p>Whether unbinding is allowed. false: not allowed; true: permission</p>
 * @method string getUUID() Obtain <p>uuid: unique ID of a machine. It has a value only when AssetType is CWP.</p>
 * @method void setUUID(string $UUID) Set <p>uuid: unique ID of a machine. It has a value only when AssetType is CWP.</p>
 * @method string getReason() Obtain <p>No injection/failure reason</p><p>Default value: empty</p><p>Values are available only if injection fails</p>
 * @method void setReason(string $Reason) Set <p>No injection/failure reason</p><p>Default value: empty</p><p>Values are available only if injection fails</p>
 */
class RaspLicenseList extends AbstractModel
{
    /**
     * @var string <p>Unique machine ID</p>
     */
    public $QUUID;

    /**
     * @var string <p>Instance name.</p>
     */
    public $InstanceName;

    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Public IP Address</p>
     */
    public $PublicIP;

    /**
     * @var string <p>Private IP address.</p>
     */
    public $PrivateIP;

    /**
     * @var array <p>Cloud tag information</p>
     */
    public $Tags;

    /**
     * @var array <p>Protection edition information</p><ul><li>CriticalProtection Prioritized Protection package</li><li>Pro Container security-Pro Edition</li><li>Ultimate CWP-Flagship Edition</li></ul>
     */
    public $ProtectionVersion;

    /**
     * @var integer <p>Protection setting</p><ul><li>0 No configuration</li><li>1 Configured</li></ul>
     */
    public $ConfigurationSetting;

    /**
     * @var integer <p>Master switch</p><ul><li>0 Not enabled</li><li>1 Enabled</li></ul>
     */
    public $Enable;

    /**
     * @var integer <p>Vulnerability defense switch</p><ul><li>0 Not enabled</li><li>1 Enable</li></ul>
     */
    public $VulDefEnable;

    /**
     * @var integer <p>Vulnerability defense mode</p><ul><li>0: standard</li><li>1: major event protection</li></ul>
     */
    public $VulDefMode;

    /**
     * @var integer <p>Vulnerability defense action</p><ul><li>0: Detection only</li><li>1: Detection and prevention</li></ul>
     */
    public $VulDefAction;

    /**
     * @var integer <p>Java Webshell Defense switch</p><ul><li>0 Not enabled</li><li>1 Enable</li></ul>
     */
    public $MemShellDefEnable;

    /**
     * @var integer <p>More protection</p><ul><li>0: Do not inject into processes that will restart </li><li>1: Inject into processes that will restart</li></ul>
     */
    public $SafeInject;

    /**
     * @var integer <p>Performance threshold configuration switch</p><ul><li>0 Not enabled</li><li>1 Enabled</li></ul>
     */
    public $PerformanceLimit;

    /**
     * @var integer <p>CPU threshold. Value range: 1–99.</p>
     */
    public $PerformanceLimitCpu;

    /**
     * @var integer <p>Memory threshold. Value range: 1–99</p>
     */
    public $PerformanceLimitMem;

    /**
     * @var integer <p>Remaining memory threshold</p>
     */
    public $PerformanceLimitMemAmount;

    /**
     * @var integer <p>Plug-in status</p><ul><li>0 Used normally</li><li>1 Anomaly exists</li><li>2 Inactive</li></ul>
     */
    public $RaspException;

    /**
     * @var string <p>Latest update time.</p>
     */
    public $LatestUpdateTime;

    /**
     * @var string <p>Cluster ID, available only for container assets</p>
     */
    public $ClusterName;

    /**
     * @var string <p>Cluster name, only available for container assets</p>
     */
    public $ClusterId;

    /**
     * @var OrderDetail <p>Order information</p>
     */
    public $OrderDetail;

    /**
     * @var boolean <p>Whether unbinding is allowed. false: not allowed; true: permission</p>
     */
    public $IsUnBind;

    /**
     * @var string <p>uuid: unique ID of a machine. It has a value only when AssetType is CWP.</p>
     */
    public $UUID;

    /**
     * @var string <p>No injection/failure reason</p><p>Default value: empty</p><p>Values are available only if injection fails</p>
     */
    public $Reason;

    /**
     * @param string $QUUID <p>Unique machine ID</p>
     * @param string $InstanceName <p>Instance name.</p>
     * @param string $InstanceId <p>Instance ID.</p>
     * @param string $PublicIP <p>Public IP Address</p>
     * @param string $PrivateIP <p>Private IP address.</p>
     * @param array $Tags <p>Cloud tag information</p>
     * @param array $ProtectionVersion <p>Protection edition information</p><ul><li>CriticalProtection Prioritized Protection package</li><li>Pro Container security-Pro Edition</li><li>Ultimate CWP-Flagship Edition</li></ul>
     * @param integer $ConfigurationSetting <p>Protection setting</p><ul><li>0 No configuration</li><li>1 Configured</li></ul>
     * @param integer $Enable <p>Master switch</p><ul><li>0 Not enabled</li><li>1 Enabled</li></ul>
     * @param integer $VulDefEnable <p>Vulnerability defense switch</p><ul><li>0 Not enabled</li><li>1 Enable</li></ul>
     * @param integer $VulDefMode <p>Vulnerability defense mode</p><ul><li>0: standard</li><li>1: major event protection</li></ul>
     * @param integer $VulDefAction <p>Vulnerability defense action</p><ul><li>0: Detection only</li><li>1: Detection and prevention</li></ul>
     * @param integer $MemShellDefEnable <p>Java Webshell Defense switch</p><ul><li>0 Not enabled</li><li>1 Enable</li></ul>
     * @param integer $SafeInject <p>More protection</p><ul><li>0: Do not inject into processes that will restart </li><li>1: Inject into processes that will restart</li></ul>
     * @param integer $PerformanceLimit <p>Performance threshold configuration switch</p><ul><li>0 Not enabled</li><li>1 Enabled</li></ul>
     * @param integer $PerformanceLimitCpu <p>CPU threshold. Value range: 1–99.</p>
     * @param integer $PerformanceLimitMem <p>Memory threshold. Value range: 1–99</p>
     * @param integer $PerformanceLimitMemAmount <p>Remaining memory threshold</p>
     * @param integer $RaspException <p>Plug-in status</p><ul><li>0 Used normally</li><li>1 Anomaly exists</li><li>2 Inactive</li></ul>
     * @param string $LatestUpdateTime <p>Latest update time.</p>
     * @param string $ClusterName <p>Cluster ID, available only for container assets</p>
     * @param string $ClusterId <p>Cluster name, only available for container assets</p>
     * @param OrderDetail $OrderDetail <p>Order information</p>
     * @param boolean $IsUnBind <p>Whether unbinding is allowed. false: not allowed; true: permission</p>
     * @param string $UUID <p>uuid: unique ID of a machine. It has a value only when AssetType is CWP.</p>
     * @param string $Reason <p>No injection/failure reason</p><p>Default value: empty</p><p>Values are available only if injection fails</p>
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
