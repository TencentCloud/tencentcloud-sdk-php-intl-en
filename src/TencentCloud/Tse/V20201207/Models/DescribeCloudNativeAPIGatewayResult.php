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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Retrieve the response result of the Cloud Native API gateway basic information.
 *
 * @method string getGatewayId() Obtain Cloud Native API Gateway ID.
 * @method void setGatewayId(string $GatewayId) Set Cloud Native API Gateway ID.
 * @method string getStatus() Obtain Cloud native API gateway status.
 * @method void setStatus(string $Status) Set Cloud native API gateway status.
 * @method string getName() Obtain Cloud native API gateway name.
 * @method void setName(string $Name) Set Cloud native API gateway name.
 * @method string getType() Obtain Cloud native API gateway type.
 * @method void setType(string $Type) Set Cloud native API gateway type.
 * @method string getGatewayVersion() Obtain Instance version:
- 2.4.1
- 2.5.1
 * @method void setGatewayVersion(string $GatewayVersion) Set Instance version:
- 2.4.1
- 2.5.1
 * @method CloudNativeAPIGatewayNodeConfig getNodeConfig() Obtain Cloud native API gateway node information.
 * @method void setNodeConfig(CloudNativeAPIGatewayNodeConfig $NodeConfig) Set Cloud native API gateway node information.
 * @method CloudNativeAPIGatewayVpcConfig getVpcConfig() Obtain Cloud native API gateway vpc configuration.
 * @method void setVpcConfig(CloudNativeAPIGatewayVpcConfig $VpcConfig) Set Cloud native API gateway vpc configuration.
 * @method string getDescription() Obtain Cloud native API gateway description.
 * @method void setDescription(string $Description) Set Cloud native API gateway description.
 * @method string getCreateTime() Obtain Creation time of the cloud native API gateway.
 * @method void setCreateTime(string $CreateTime) Set Creation time of the cloud native API gateway.
 * @method array getTags() Obtain Tag information of the instance
 * @method void setTags(array $Tags) Set Tag information of the instance
 * @method boolean getEnableCls() Obtain Is cls log enabled?
 * @method void setEnableCls(boolean $EnableCls) Set Is cls log enabled?
 * @method integer getTradeType() Obtain Payment mode. 0 indicates postpaid, and 1 indicates prepaid.
 * @method void setTradeType(integer $TradeType) Set Payment mode. 0 indicates postpaid, and 1 indicates prepaid.
 * @method string getFeatureVersion() Obtain Instance version. Currently supported: development edition, standard version, and professional version [TRIAL, STANDARD, PROFESSIONAL].
 * @method void setFeatureVersion(string $FeatureVersion) Set Instance version. Currently supported: development edition, standard version, and professional version [TRIAL, STANDARD, PROFESSIONAL].
 * @method integer getInternetMaxBandwidthOut() Obtain Public network outbound traffic bandwidth, [1,2048]Mbps
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set Public network outbound traffic bandwidth, [1,2048]Mbps
 * @method integer getAutoRenewFlag() Obtain Auto-renewal flag. 0 means the default state (not set by the user, that is, the initial state).
1 means auto-renew, 2 means no automatic renewal (set by the user). If the business has no renewal concept or no need for auto-renewal, set it to 0.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Auto-renewal flag. 0 means the default state (not set by the user, that is, the initial state).
1 means auto-renew, 2 means no automatic renewal (set by the user). If the business has no renewal concept or no need for auto-renewal, set it to 0.
 * @method string getCurDeadline() Obtain Expiry time, used when prepaid
 * @method void setCurDeadline(string $CurDeadline) Set Expiry time, used when prepaid
 * @method string getIsolateTime() Obtain Isolation time. Used when an instance is isolated.
 * @method void setIsolateTime(string $IsolateTime) Set Isolation time. Used when an instance is isolated.
 * @method boolean getEnableInternet() Obtain Is client public network enabled?
 * @method void setEnableInternet(boolean $EnableInternet) Set Is client public network enabled?
 * @method string getEngineRegion() Obtain Actual regional information of the instance
 * @method void setEngineRegion(string $EngineRegion) Set Actual regional information of the instance
 * @method string getIngressClassName() Obtain Ingress class name
 * @method void setIngressClassName(string $IngressClassName) Set Ingress class name
 * @method string getInternetPayMode() Obtain Public network billing method. Selectable values: BANDWIDTH | TRAFFIC, representing billing by bandwidth and by traffic.
 * @method void setInternetPayMode(string $InternetPayMode) Set Public network billing method. Selectable values: BANDWIDTH | TRAFFIC, representing billing by bandwidth and by traffic.
 * @method string getGatewayMinorVersion() Obtain Cloud Native API Gateway minor version number
 * @method void setGatewayMinorVersion(string $GatewayMinorVersion) Set Cloud Native API Gateway minor version number
 * @method InstancePort getInstancePort() Obtain Ports monitored by the instance
 * @method void setInstancePort(InstancePort $InstancePort) Set Ports monitored by the instance
 * @method string getLoadBalancerType() Obtain Public network CLB default type
 * @method void setLoadBalancerType(string $LoadBalancerType) Set Public network CLB default type
 * @method array getPublicIpAddresses() Obtain Public IP address list
 * @method void setPublicIpAddresses(array $PublicIpAddresses) Set Public IP address list
 * @method boolean getDeleteProtect() Obtain Whether to enable deletion protection
 * @method void setDeleteProtect(boolean $DeleteProtect) Set Whether to enable deletion protection
 * @method array getAvailableVersions() Obtain Version number that can be upgraded
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAvailableVersions(array $AvailableVersions) Set Version number that can be upgraded
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAvailableUpgradeVersions() Obtain Version list for gateway upgrade
 * @method void setAvailableUpgradeVersions(array $AvailableUpgradeVersions) Set Version list for gateway upgrade
 * @method boolean getAvailableUpgrade() Obtain Whether to prompt for upgrade
 * @method void setAvailableUpgrade(boolean $AvailableUpgrade) Set Whether to prompt for upgrade
 * @method string getAvailableRollbackVersion() Obtain Rollback version
 * @method void setAvailableRollbackVersion(string $AvailableRollbackVersion) Set Rollback version
 */
class DescribeCloudNativeAPIGatewayResult extends AbstractModel
{
    /**
     * @var string Cloud Native API Gateway ID.
     */
    public $GatewayId;

    /**
     * @var string Cloud native API gateway status.
     */
    public $Status;

    /**
     * @var string Cloud native API gateway name.
     */
    public $Name;

    /**
     * @var string Cloud native API gateway type.
     */
    public $Type;

    /**
     * @var string Instance version:
- 2.4.1
- 2.5.1
     */
    public $GatewayVersion;

    /**
     * @var CloudNativeAPIGatewayNodeConfig Cloud native API gateway node information.
     */
    public $NodeConfig;

    /**
     * @var CloudNativeAPIGatewayVpcConfig Cloud native API gateway vpc configuration.
     */
    public $VpcConfig;

    /**
     * @var string Cloud native API gateway description.
     */
    public $Description;

    /**
     * @var string Creation time of the cloud native API gateway.
     */
    public $CreateTime;

    /**
     * @var array Tag information of the instance
     */
    public $Tags;

    /**
     * @var boolean Is cls log enabled?
     */
    public $EnableCls;

    /**
     * @var integer Payment mode. 0 indicates postpaid, and 1 indicates prepaid.
     */
    public $TradeType;

    /**
     * @var string Instance version. Currently supported: development edition, standard version, and professional version [TRIAL, STANDARD, PROFESSIONAL].
     */
    public $FeatureVersion;

    /**
     * @var integer Public network outbound traffic bandwidth, [1,2048]Mbps
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var integer Auto-renewal flag. 0 means the default state (not set by the user, that is, the initial state).
1 means auto-renew, 2 means no automatic renewal (set by the user). If the business has no renewal concept or no need for auto-renewal, set it to 0.
     */
    public $AutoRenewFlag;

    /**
     * @var string Expiry time, used when prepaid
     */
    public $CurDeadline;

    /**
     * @var string Isolation time. Used when an instance is isolated.
     */
    public $IsolateTime;

    /**
     * @var boolean Is client public network enabled?
     */
    public $EnableInternet;

    /**
     * @var string Actual regional information of the instance
     */
    public $EngineRegion;

    /**
     * @var string Ingress class name
     */
    public $IngressClassName;

    /**
     * @var string Public network billing method. Selectable values: BANDWIDTH | TRAFFIC, representing billing by bandwidth and by traffic.
     */
    public $InternetPayMode;

    /**
     * @var string Cloud Native API Gateway minor version number
     */
    public $GatewayMinorVersion;

    /**
     * @var InstancePort Ports monitored by the instance
     */
    public $InstancePort;

    /**
     * @var string Public network CLB default type
     */
    public $LoadBalancerType;

    /**
     * @var array Public IP address list
     */
    public $PublicIpAddresses;

    /**
     * @var boolean Whether to enable deletion protection
     */
    public $DeleteProtect;

    /**
     * @var array Version number that can be upgraded
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AvailableVersions;

    /**
     * @var array Version list for gateway upgrade
     */
    public $AvailableUpgradeVersions;

    /**
     * @var boolean Whether to prompt for upgrade
     */
    public $AvailableUpgrade;

    /**
     * @var string Rollback version
     */
    public $AvailableRollbackVersion;

    /**
     * @param string $GatewayId Cloud Native API Gateway ID.
     * @param string $Status Cloud native API gateway status.
     * @param string $Name Cloud native API gateway name.
     * @param string $Type Cloud native API gateway type.
     * @param string $GatewayVersion Instance version:
- 2.4.1
- 2.5.1
     * @param CloudNativeAPIGatewayNodeConfig $NodeConfig Cloud native API gateway node information.
     * @param CloudNativeAPIGatewayVpcConfig $VpcConfig Cloud native API gateway vpc configuration.
     * @param string $Description Cloud native API gateway description.
     * @param string $CreateTime Creation time of the cloud native API gateway.
     * @param array $Tags Tag information of the instance
     * @param boolean $EnableCls Is cls log enabled?
     * @param integer $TradeType Payment mode. 0 indicates postpaid, and 1 indicates prepaid.
     * @param string $FeatureVersion Instance version. Currently supported: development edition, standard version, and professional version [TRIAL, STANDARD, PROFESSIONAL].
     * @param integer $InternetMaxBandwidthOut Public network outbound traffic bandwidth, [1,2048]Mbps
     * @param integer $AutoRenewFlag Auto-renewal flag. 0 means the default state (not set by the user, that is, the initial state).
1 means auto-renew, 2 means no automatic renewal (set by the user). If the business has no renewal concept or no need for auto-renewal, set it to 0.
     * @param string $CurDeadline Expiry time, used when prepaid
     * @param string $IsolateTime Isolation time. Used when an instance is isolated.
     * @param boolean $EnableInternet Is client public network enabled?
     * @param string $EngineRegion Actual regional information of the instance
     * @param string $IngressClassName Ingress class name
     * @param string $InternetPayMode Public network billing method. Selectable values: BANDWIDTH | TRAFFIC, representing billing by bandwidth and by traffic.
     * @param string $GatewayMinorVersion Cloud Native API Gateway minor version number
     * @param InstancePort $InstancePort Ports monitored by the instance
     * @param string $LoadBalancerType Public network CLB default type
     * @param array $PublicIpAddresses Public IP address list
     * @param boolean $DeleteProtect Whether to enable deletion protection
     * @param array $AvailableVersions Version number that can be upgraded
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $AvailableUpgradeVersions Version list for gateway upgrade
     * @param boolean $AvailableUpgrade Whether to prompt for upgrade
     * @param string $AvailableRollbackVersion Rollback version
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("GatewayVersion",$param) and $param["GatewayVersion"] !== null) {
            $this->GatewayVersion = $param["GatewayVersion"];
        }

        if (array_key_exists("NodeConfig",$param) and $param["NodeConfig"] !== null) {
            $this->NodeConfig = new CloudNativeAPIGatewayNodeConfig();
            $this->NodeConfig->deserialize($param["NodeConfig"]);
        }

        if (array_key_exists("VpcConfig",$param) and $param["VpcConfig"] !== null) {
            $this->VpcConfig = new CloudNativeAPIGatewayVpcConfig();
            $this->VpcConfig->deserialize($param["VpcConfig"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new InstanceTagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("EnableCls",$param) and $param["EnableCls"] !== null) {
            $this->EnableCls = $param["EnableCls"];
        }

        if (array_key_exists("TradeType",$param) and $param["TradeType"] !== null) {
            $this->TradeType = $param["TradeType"];
        }

        if (array_key_exists("FeatureVersion",$param) and $param["FeatureVersion"] !== null) {
            $this->FeatureVersion = $param["FeatureVersion"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("CurDeadline",$param) and $param["CurDeadline"] !== null) {
            $this->CurDeadline = $param["CurDeadline"];
        }

        if (array_key_exists("IsolateTime",$param) and $param["IsolateTime"] !== null) {
            $this->IsolateTime = $param["IsolateTime"];
        }

        if (array_key_exists("EnableInternet",$param) and $param["EnableInternet"] !== null) {
            $this->EnableInternet = $param["EnableInternet"];
        }

        if (array_key_exists("EngineRegion",$param) and $param["EngineRegion"] !== null) {
            $this->EngineRegion = $param["EngineRegion"];
        }

        if (array_key_exists("IngressClassName",$param) and $param["IngressClassName"] !== null) {
            $this->IngressClassName = $param["IngressClassName"];
        }

        if (array_key_exists("InternetPayMode",$param) and $param["InternetPayMode"] !== null) {
            $this->InternetPayMode = $param["InternetPayMode"];
        }

        if (array_key_exists("GatewayMinorVersion",$param) and $param["GatewayMinorVersion"] !== null) {
            $this->GatewayMinorVersion = $param["GatewayMinorVersion"];
        }

        if (array_key_exists("InstancePort",$param) and $param["InstancePort"] !== null) {
            $this->InstancePort = new InstancePort();
            $this->InstancePort->deserialize($param["InstancePort"]);
        }

        if (array_key_exists("LoadBalancerType",$param) and $param["LoadBalancerType"] !== null) {
            $this->LoadBalancerType = $param["LoadBalancerType"];
        }

        if (array_key_exists("PublicIpAddresses",$param) and $param["PublicIpAddresses"] !== null) {
            $this->PublicIpAddresses = $param["PublicIpAddresses"];
        }

        if (array_key_exists("DeleteProtect",$param) and $param["DeleteProtect"] !== null) {
            $this->DeleteProtect = $param["DeleteProtect"];
        }

        if (array_key_exists("AvailableVersions",$param) and $param["AvailableVersions"] !== null) {
            $this->AvailableVersions = $param["AvailableVersions"];
        }

        if (array_key_exists("AvailableUpgradeVersions",$param) and $param["AvailableUpgradeVersions"] !== null) {
            $this->AvailableUpgradeVersions = $param["AvailableUpgradeVersions"];
        }

        if (array_key_exists("AvailableUpgrade",$param) and $param["AvailableUpgrade"] !== null) {
            $this->AvailableUpgrade = $param["AvailableUpgrade"];
        }

        if (array_key_exists("AvailableRollbackVersion",$param) and $param["AvailableRollbackVersion"] !== null) {
            $this->AvailableRollbackVersion = $param["AvailableRollbackVersion"];
        }
    }
}
