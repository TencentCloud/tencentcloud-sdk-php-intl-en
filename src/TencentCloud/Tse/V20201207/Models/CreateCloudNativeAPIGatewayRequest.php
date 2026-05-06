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
 * CreateCloudNativeAPIGateway request structure.
 *
 * @method string getName() Obtain Cloud native API gateway name supports up to 60 characters.
 * @method void setName(string $Name) Set Cloud native API gateway name supports up to 60 characters.
 * @method string getType() Obtain Cloud native API gateway type, currently only support kong.
 * @method void setType(string $Type) Set Cloud native API gateway type, currently only support kong.
 * @method string getGatewayVersion() Obtain Cloud Native API gateway version. Reference value:
- 2.4.1
- 2.5.1
 * @method void setGatewayVersion(string $GatewayVersion) Set Cloud Native API gateway version. Reference value:
- 2.4.1
- 2.5.1
 * @method CloudNativeAPIGatewayNodeConfig getNodeConfig() Obtain Cloud Native API gateway node configuration.
 * @method void setNodeConfig(CloudNativeAPIGatewayNodeConfig $NodeConfig) Set Cloud Native API gateway node configuration.
 * @method CloudNativeAPIGatewayVpcConfig getVpcConfig() Obtain Cloud native API gateway vpc configuration.
 * @method void setVpcConfig(CloudNativeAPIGatewayVpcConfig $VpcConfig) Set Cloud native API gateway vpc configuration.
 * @method string getDescription() Obtain Cloud native API gateway description supports up to 120 characters.
 * @method void setDescription(string $Description) Set Cloud native API gateway description supports up to 120 characters.
 * @method array getTags() Obtain Tag list
 * @method void setTags(array $Tags) Set Tag list
 * @method boolean getEnableCls() Obtain Whether CLS log is enabled. Default value: false.
 * @method void setEnableCls(boolean $EnableCls) Set Whether CLS log is enabled. Default value: false.
 * @method string getFeatureVersion() Obtain Product version. Reference value:
-TRIAL: Development edition
-STANDARD: Standard version (default value)
-PROFESSIONAL: Pro Edition
 * @method void setFeatureVersion(string $FeatureVersion) Set Product version. Reference value:
-TRIAL: Development edition
-STANDARD: Standard version (default value)
-PROFESSIONAL: Pro Edition
 * @method integer getInternetMaxBandwidthOut() Obtain Public network outbound traffic bandwidth, [1,2048]Mbps
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set Public network outbound traffic bandwidth, [1,2048]Mbps
 * @method string getEngineRegion() Obtain Actual region information of the instance. Default value: ap-guangzhou.
 * @method void setEngineRegion(string $EngineRegion) Set Actual region information of the instance. Default value: ap-guangzhou.
 * @method string getIngressClassName() Obtain ingress Class name
 * @method void setIngressClassName(string $IngressClassName) Set ingress Class name
 * @method integer getTradeType() Obtain Payment type. Reference value:
0: Postpaid (default value)
1: Prepayment (The API does not currently support creating prepaid instances)
 * @method void setTradeType(integer $TradeType) Set Payment type. Reference value:
0: Postpaid (default value)
1: Prepayment (The API does not currently support creating prepaid instances)
 * @method InternetConfig getInternetConfig() Obtain Public network configuration
 * @method void setInternetConfig(InternetConfig $InternetConfig) Set Public network configuration
 * @method string getPromId() Obtain Associated prometheus ID
 * @method void setPromId(string $PromId) Set Associated prometheus ID
 */
class CreateCloudNativeAPIGatewayRequest extends AbstractModel
{
    /**
     * @var string Cloud native API gateway name supports up to 60 characters.
     */
    public $Name;

    /**
     * @var string Cloud native API gateway type, currently only support kong.
     */
    public $Type;

    /**
     * @var string Cloud Native API gateway version. Reference value:
- 2.4.1
- 2.5.1
     */
    public $GatewayVersion;

    /**
     * @var CloudNativeAPIGatewayNodeConfig Cloud Native API gateway node configuration.
     */
    public $NodeConfig;

    /**
     * @var CloudNativeAPIGatewayVpcConfig Cloud native API gateway vpc configuration.
     */
    public $VpcConfig;

    /**
     * @var string Cloud native API gateway description supports up to 120 characters.
     */
    public $Description;

    /**
     * @var array Tag list
     */
    public $Tags;

    /**
     * @var boolean Whether CLS log is enabled. Default value: false.
     */
    public $EnableCls;

    /**
     * @var string Product version. Reference value:
-TRIAL: Development edition
-STANDARD: Standard version (default value)
-PROFESSIONAL: Pro Edition
     */
    public $FeatureVersion;

    /**
     * @var integer Public network outbound traffic bandwidth, [1,2048]Mbps
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string Actual region information of the instance. Default value: ap-guangzhou.
     */
    public $EngineRegion;

    /**
     * @var string ingress Class name
     */
    public $IngressClassName;

    /**
     * @var integer Payment type. Reference value:
0: Postpaid (default value)
1: Prepayment (The API does not currently support creating prepaid instances)
     */
    public $TradeType;

    /**
     * @var InternetConfig Public network configuration
     */
    public $InternetConfig;

    /**
     * @var string Associated prometheus ID
     */
    public $PromId;

    /**
     * @param string $Name Cloud native API gateway name supports up to 60 characters.
     * @param string $Type Cloud native API gateway type, currently only support kong.
     * @param string $GatewayVersion Cloud Native API gateway version. Reference value:
- 2.4.1
- 2.5.1
     * @param CloudNativeAPIGatewayNodeConfig $NodeConfig Cloud Native API gateway node configuration.
     * @param CloudNativeAPIGatewayVpcConfig $VpcConfig Cloud native API gateway vpc configuration.
     * @param string $Description Cloud native API gateway description supports up to 120 characters.
     * @param array $Tags Tag list
     * @param boolean $EnableCls Whether CLS log is enabled. Default value: false.
     * @param string $FeatureVersion Product version. Reference value:
-TRIAL: Development edition
-STANDARD: Standard version (default value)
-PROFESSIONAL: Pro Edition
     * @param integer $InternetMaxBandwidthOut Public network outbound traffic bandwidth, [1,2048]Mbps
     * @param string $EngineRegion Actual region information of the instance. Default value: ap-guangzhou.
     * @param string $IngressClassName ingress Class name
     * @param integer $TradeType Payment type. Reference value:
0: Postpaid (default value)
1: Prepayment (The API does not currently support creating prepaid instances)
     * @param InternetConfig $InternetConfig Public network configuration
     * @param string $PromId Associated prometheus ID
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

        if (array_key_exists("FeatureVersion",$param) and $param["FeatureVersion"] !== null) {
            $this->FeatureVersion = $param["FeatureVersion"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("EngineRegion",$param) and $param["EngineRegion"] !== null) {
            $this->EngineRegion = $param["EngineRegion"];
        }

        if (array_key_exists("IngressClassName",$param) and $param["IngressClassName"] !== null) {
            $this->IngressClassName = $param["IngressClassName"];
        }

        if (array_key_exists("TradeType",$param) and $param["TradeType"] !== null) {
            $this->TradeType = $param["TradeType"];
        }

        if (array_key_exists("InternetConfig",$param) and $param["InternetConfig"] !== null) {
            $this->InternetConfig = new InternetConfig();
            $this->InternetConfig->deserialize($param["InternetConfig"]);
        }

        if (array_key_exists("PromId",$param) and $param["PromId"] !== null) {
            $this->PromId = $param["PromId"];
        }
    }
}
