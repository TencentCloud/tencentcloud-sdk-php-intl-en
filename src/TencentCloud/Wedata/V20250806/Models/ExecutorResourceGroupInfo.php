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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource group details
 *
 * @method string getId() Obtain Resource group unique id.
 * @method void setId(string $Id) Set Resource group unique id.
 * @method string getName() Obtain Resource group name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Resource group name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Resource group description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Resource group description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getResourceGroupType() Obtain Execute the resource group type. values cannot be empty.

-Schedule --- scheduling resource group.
-Integration - integration resource group.
-DataService - data service resource group.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceGroupType(string $ResourceGroupType) Set Execute the resource group type. values cannot be empty.

-Schedule --- scheduling resource group.
-Integration - integration resource group.
-DataService - data service resource group.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAssociateProjects() Obtain Project set.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAssociateProjects(array $AssociateProjects) Set Project set.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain Region.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Region.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVpcId() Obtain vpcId
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set vpcId
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubNet() Obtain Subnet ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubNet(string $SubNet) Set Subnet ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getAutoRenewEnabled() Obtain Whether to perform auto-renewal.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAutoRenewEnabled(boolean $AutoRenewEnabled) Set Whether to perform auto-renewal.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ExecutorResourceGroupInfo extends AbstractModel
{
    /**
     * @var string Resource group unique id.
     */
    public $Id;

    /**
     * @var string Resource group name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Resource group description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Execute the resource group type. values cannot be empty.

-Schedule --- scheduling resource group.
-Integration - integration resource group.
-DataService - data service resource group.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceGroupType;

    /**
     * @var array Project set.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AssociateProjects;

    /**
     * @var string Region.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var string vpcId
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var string Subnet ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubNet;

    /**
     * @var boolean Whether to perform auto-renewal.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AutoRenewEnabled;

    /**
     * @param string $Id Resource group unique id.
     * @param string $Name Resource group name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Resource group description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ResourceGroupType Execute the resource group type. values cannot be empty.

-Schedule --- scheduling resource group.
-Integration - integration resource group.
-DataService - data service resource group.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $AssociateProjects Project set.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Region Region.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VpcId vpcId
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubNet Subnet ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $AutoRenewEnabled Whether to perform auto-renewal.
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ResourceGroupType",$param) and $param["ResourceGroupType"] !== null) {
            $this->ResourceGroupType = $param["ResourceGroupType"];
        }

        if (array_key_exists("AssociateProjects",$param) and $param["AssociateProjects"] !== null) {
            $this->AssociateProjects = [];
            foreach ($param["AssociateProjects"] as $key => $value){
                $obj = new BindProject();
                $obj->deserialize($value);
                array_push($this->AssociateProjects, $obj);
            }
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubNet",$param) and $param["SubNet"] !== null) {
            $this->SubNet = $param["SubNet"];
        }

        if (array_key_exists("AutoRenewEnabled",$param) and $param["AutoRenewEnabled"] !== null) {
            $this->AutoRenewEnabled = $param["AutoRenewEnabled"];
        }
    }
}
