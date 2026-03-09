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
 * CreateResourceGroup request structure.
 *
 * @method string getName() Obtain Resource group name. specifies the name of a general resource group. it must start with a letter, may include letters, numbers, and underscores (_), and can contain up to 64 characters.
 * @method void setName(string $Name) Set Resource group name. specifies the name of a general resource group. it must start with a letter, may include letters, numbers, and underscores (_), and can contain up to 64 characters.
 * @method ResourceType getType() Obtain Opened resource group information.
 * @method void setType(ResourceType $Type) Set Opened resource group information.
 * @method boolean getAutoRenewEnabled() Obtain Whether to perform auto-renewal.
 * @method void setAutoRenewEnabled(boolean $AutoRenewEnabled) Set Whether to perform auto-renewal.
 * @method integer getPurchasePeriod() Obtain Purchase duration, in unit month.
 * @method void setPurchasePeriod(integer $PurchasePeriod) Set Purchase duration, in unit month.
 * @method string getVpcId() Obtain vpcId
 * @method void setVpcId(string $VpcId) Set vpcId
 * @method string getSubNet() Obtain Subnet
 * @method void setSubNet(string $SubNet) Set Subnet
 * @method string getResourceRegion() Obtain Resource purchase region.
 * @method void setResourceRegion(string $ResourceRegion) Set Resource purchase region.
 * @method string getAssociatedProjectId() Obtain Project id of the associated project space.
 * @method void setAssociatedProjectId(string $AssociatedProjectId) Set Project id of the associated project space.
 * @method string getDescription() Obtain Resource group description
 * @method void setDescription(string $Description) Set Resource group description
 */
class CreateResourceGroupRequest extends AbstractModel
{
    /**
     * @var string Resource group name. specifies the name of a general resource group. it must start with a letter, may include letters, numbers, and underscores (_), and can contain up to 64 characters.
     */
    public $Name;

    /**
     * @var ResourceType Opened resource group information.
     */
    public $Type;

    /**
     * @var boolean Whether to perform auto-renewal.
     */
    public $AutoRenewEnabled;

    /**
     * @var integer Purchase duration, in unit month.
     */
    public $PurchasePeriod;

    /**
     * @var string vpcId
     */
    public $VpcId;

    /**
     * @var string Subnet
     */
    public $SubNet;

    /**
     * @var string Resource purchase region.
     */
    public $ResourceRegion;

    /**
     * @var string Project id of the associated project space.
     */
    public $AssociatedProjectId;

    /**
     * @var string Resource group description
     */
    public $Description;

    /**
     * @param string $Name Resource group name. specifies the name of a general resource group. it must start with a letter, may include letters, numbers, and underscores (_), and can contain up to 64 characters.
     * @param ResourceType $Type Opened resource group information.
     * @param boolean $AutoRenewEnabled Whether to perform auto-renewal.
     * @param integer $PurchasePeriod Purchase duration, in unit month.
     * @param string $VpcId vpcId
     * @param string $SubNet Subnet
     * @param string $ResourceRegion Resource purchase region.
     * @param string $AssociatedProjectId Project id of the associated project space.
     * @param string $Description Resource group description
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
            $this->Type = new ResourceType();
            $this->Type->deserialize($param["Type"]);
        }

        if (array_key_exists("AutoRenewEnabled",$param) and $param["AutoRenewEnabled"] !== null) {
            $this->AutoRenewEnabled = $param["AutoRenewEnabled"];
        }

        if (array_key_exists("PurchasePeriod",$param) and $param["PurchasePeriod"] !== null) {
            $this->PurchasePeriod = $param["PurchasePeriod"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubNet",$param) and $param["SubNet"] !== null) {
            $this->SubNet = $param["SubNet"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("AssociatedProjectId",$param) and $param["AssociatedProjectId"] !== null) {
            $this->AssociatedProjectId = $param["AssociatedProjectId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
