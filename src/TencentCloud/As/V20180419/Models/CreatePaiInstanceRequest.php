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
 * CreatePaiInstance request structure.
 *
 * @method string getDomainName() Obtain PAI instance domain name.
 * @method void setDomainName(string $DomainName) Set PAI instance domain name.
 * @method InternetAccessible getInternetAccessible() Obtain Information of the public network bandwidth configuration.
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) Set Information of the public network bandwidth configuration.
 * @method string getInitScript() Obtain Base64-encoded string of the launch script.
 * @method void setInitScript(string $InitScript) Set Base64-encoded string of the launch script.
 * @method array getZones() Obtain List of availability zones.
 * @method void setZones(array $Zones) Set List of availability zones.
 * @method string getVpcId() Obtain VPC ID.
 * @method void setVpcId(string $VpcId) Set VPC ID.
 * @method array getSubnetIds() Obtain List of subnets.
 * @method void setSubnetIds(array $SubnetIds) Set List of subnets.
 * @method string getInstanceName() Obtain Instance display name.
 * @method void setInstanceName(string $InstanceName) Set Instance display name.
 * @method array getInstanceTypes() Obtain List of instance models.
 * @method void setInstanceTypes(array $InstanceTypes) Set List of instance models.
 * @method LoginSettings getLoginSettings() Obtain Instance login settings.
 * @method void setLoginSettings(LoginSettings $LoginSettings) Set Instance login settings.
 * @method string getInstanceChargeType() Obtain Instance billing type.
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Instance billing type.
 * @method InstanceChargePrepaid getInstanceChargePrepaid() Obtain Relevant parameter settings for the prepaid mode (i.e., monthly subscription). This parameter can specify the purchased usage period, whether to set automatic renewal, and other attributes of the instance purchased on a prepaid basis. If the billing method of the specified instance is prepaid, this parameter is required.
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) Set Relevant parameter settings for the prepaid mode (i.e., monthly subscription). This parameter can specify the purchased usage period, whether to set automatic renewal, and other attributes of the instance purchased on a prepaid basis. If the billing method of the specified instance is prepaid, this parameter is required.
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
     * @var string VPC ID.
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
     * @param string $VpcId VPC ID.
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
     * For internal only. DO NOT USE IT.
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
