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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getDomainName() 获取PAI instance domain name.
 * @method void setDomainName(string $DomainName) 设置PAI instance domain name.
 * @method InternetAccessible getInternetAccessible() 获取Information of the public network bandwidth configuration.
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) 设置Information of the public network bandwidth configuration.
 * @method string getInitScript() 获取Base64-encoded string of the launch script.
 * @method void setInitScript(string $InitScript) 设置Base64-encoded string of the launch script.
 * @method array getZones() 获取List of availability zones.
 * @method void setZones(array $Zones) 设置List of availability zones.
 * @method string getVpcId() 获取VpcId.
 * @method void setVpcId(string $VpcId) 设置VpcId.
 * @method array getSubnetIds() 获取List of subnets.
 * @method void setSubnetIds(array $SubnetIds) 设置List of subnets.
 * @method string getInstanceName() 获取Instance display name.
 * @method void setInstanceName(string $InstanceName) 设置Instance display name.
 * @method array getInstanceTypes() 获取List of instance models.
 * @method void setInstanceTypes(array $InstanceTypes) 设置List of instance models.
 * @method LoginSettings getLoginSettings() 获取Instance login settings.
 * @method void setLoginSettings(LoginSettings $LoginSettings) 设置Instance login settings.
 * @method string getInstanceChargeType() 获取Instance billing type.
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置Instance billing type.
 * @method InstanceChargePrepaid getInstanceChargePrepaid() 获取Relevant parameter settings for the prepaid mode (i.e., monthly subscription). This parameter can specify the purchased usage period, whether to set automatic renewal, and other attributes of the instance purchased on a prepaid basis. If the billing method of the specified instance is prepaid, this parameter is required.
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) 设置Relevant parameter settings for the prepaid mode (i.e., monthly subscription). This parameter can specify the purchased usage period, whether to set automatic renewal, and other attributes of the instance purchased on a prepaid basis. If the billing method of the specified instance is prepaid, this parameter is required.
 */

/**
 *CreatePaiInstance request structure.
 */
class CreatePaiInstanceRequest extends AbstractModel
{
    /**
     * @var string PAI instance domain name.
     */
    public $DomainName;

    /**
     * @var InternetAccessible Information of the public network bandwidth configuration.
     */
    public $InternetAccessible;

    /**
     * @var string Base64-encoded string of the launch script.
     */
    public $InitScript;

    /**
     * @var array List of availability zones.
     */
    public $Zones;

    /**
     * @var string VpcId.
     */
    public $VpcId;

    /**
     * @var array List of subnets.
     */
    public $SubnetIds;

    /**
     * @var string Instance display name.
     */
    public $InstanceName;

    /**
     * @var array List of instance models.
     */
    public $InstanceTypes;

    /**
     * @var LoginSettings Instance login settings.
     */
    public $LoginSettings;

    /**
     * @var string Instance billing type.
     */
    public $InstanceChargeType;

    /**
     * @var InstanceChargePrepaid Relevant parameter settings for the prepaid mode (i.e., monthly subscription). This parameter can specify the purchased usage period, whether to set automatic renewal, and other attributes of the instance purchased on a prepaid basis. If the billing method of the specified instance is prepaid, this parameter is required.
     */
    public $InstanceChargePrepaid;
    /**
     * @param string $DomainName PAI instance domain name.
     * @param InternetAccessible $InternetAccessible Information of the public network bandwidth configuration.
     * @param string $InitScript Base64-encoded string of the launch script.
     * @param array $Zones List of availability zones.
     * @param string $VpcId VpcId.
     * @param array $SubnetIds List of subnets.
     * @param string $InstanceName Instance display name.
     * @param array $InstanceTypes List of instance models.
     * @param LoginSettings $LoginSettings Instance login settings.
     * @param string $InstanceChargeType Instance billing type.
     * @param InstanceChargePrepaid $InstanceChargePrepaid Relevant parameter settings for the prepaid mode (i.e., monthly subscription). This parameter can specify the purchased usage period, whether to set automatic renewal, and other attributes of the instance purchased on a prepaid basis. If the billing method of the specified instance is prepaid, this parameter is required.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("InitScript",$param) and $param["InitScript"] !== null) {
            $this->InitScript = $param["InitScript"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceTypes",$param) and $param["InstanceTypes"] !== null) {
            $this->InstanceTypes = $param["InstanceTypes"];
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }
    }
}
