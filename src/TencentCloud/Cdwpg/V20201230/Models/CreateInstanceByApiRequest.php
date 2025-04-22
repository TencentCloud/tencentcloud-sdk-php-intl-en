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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstanceByApi request structure.
 *
 * @method string getInstanceName() Obtain Instance name.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
 * @method string getZone() Obtain Availability zone.
 * @method void setZone(string $Zone) Set Availability zone.
 * @method string getUserVPCId() Obtain Virtual Private Cloud (VPC).
 * @method void setUserVPCId(string $UserVPCId) Set Virtual Private Cloud (VPC).
 * @method string getUserSubnetId() Obtain Subnet.
 * @method void setUserSubnetId(string $UserSubnetId) Set Subnet.
 * @method ChargeProperties getChargeProperties() Obtain Billing method.
 * @method void setChargeProperties(ChargeProperties $ChargeProperties) Set Billing method.
 * @method string getAdminPassword() Obtain Instance password.
 * @method void setAdminPassword(string $AdminPassword) Set Instance password.
 * @method array getResources() Obtain Resource information.
 * @method void setResources(array $Resources) Set Resource information.
 * @method Tag getTags() Obtain Tag list.Deprecated, use TagItems.
 * @method void setTags(Tag $Tags) Set Tag list.Deprecated, use TagItems.
 * @method string getProductVersion() Obtain Version.
 * @method void setProductVersion(string $ProductVersion) Set Version.
 * @method array getTagItems() Obtain  TagItems list.
 * @method void setTagItems(array $TagItems) Set  TagItems list.
 */
class CreateInstanceByApiRequest extends AbstractModel
{
    /**
     * @var string Instance name.
     */
    public $InstanceName;

    /**
     * @var string Availability zone.
     */
    public $Zone;

    /**
     * @var string Virtual Private Cloud (VPC).
     */
    public $UserVPCId;

    /**
     * @var string Subnet.
     */
    public $UserSubnetId;

    /**
     * @var ChargeProperties Billing method.
     */
    public $ChargeProperties;

    /**
     * @var string Instance password.
     */
    public $AdminPassword;

    /**
     * @var array Resource information.
     */
    public $Resources;

    /**
     * @var Tag Tag list.Deprecated, use TagItems.
     */
    public $Tags;

    /**
     * @var string Version.
     */
    public $ProductVersion;

    /**
     * @var array  TagItems list.
     */
    public $TagItems;

    /**
     * @param string $InstanceName Instance name.
     * @param string $Zone Availability zone.
     * @param string $UserVPCId Virtual Private Cloud (VPC).
     * @param string $UserSubnetId Subnet.
     * @param ChargeProperties $ChargeProperties Billing method.
     * @param string $AdminPassword Instance password.
     * @param array $Resources Resource information.
     * @param Tag $Tags Tag list.Deprecated, use TagItems.
     * @param string $ProductVersion Version.
     * @param array $TagItems  TagItems list.
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("UserVPCId",$param) and $param["UserVPCId"] !== null) {
            $this->UserVPCId = $param["UserVPCId"];
        }

        if (array_key_exists("UserSubnetId",$param) and $param["UserSubnetId"] !== null) {
            $this->UserSubnetId = $param["UserSubnetId"];
        }

        if (array_key_exists("ChargeProperties",$param) and $param["ChargeProperties"] !== null) {
            $this->ChargeProperties = new ChargeProperties();
            $this->ChargeProperties->deserialize($param["ChargeProperties"]);
        }

        if (array_key_exists("AdminPassword",$param) and $param["AdminPassword"] !== null) {
            $this->AdminPassword = $param["AdminPassword"];
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = [];
            foreach ($param["Resources"] as $key => $value){
                $obj = new ResourceSpecNew();
                $obj->deserialize($value);
                array_push($this->Resources, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = new Tag();
            $this->Tags->deserialize($param["Tags"]);
        }

        if (array_key_exists("ProductVersion",$param) and $param["ProductVersion"] !== null) {
            $this->ProductVersion = $param["ProductVersion"];
        }

        if (array_key_exists("TagItems",$param) and $param["TagItems"] !== null) {
            $this->TagItems = [];
            foreach ($param["TagItems"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagItems, $obj);
            }
        }
    }
}
