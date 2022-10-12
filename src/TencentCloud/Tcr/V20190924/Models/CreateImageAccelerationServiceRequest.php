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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateImageAccelerationService request structure.
 *
 * @method string getRegistryId() Obtain Instance ID
 * @method void setRegistryId(string $RegistryId) Set Instance ID
 * @method string getVpcId() Obtain ID of the VPC where the CFS file system to be created resides
 * @method void setVpcId(string $VpcId) Set ID of the VPC where the CFS file system to be created resides
 * @method string getSubnetId() Obtain ID of the subnet where the CFS file system to be created resides
 * @method void setSubnetId(string $SubnetId) Set ID of the subnet where the CFS file system to be created resides
 * @method string getStorageType() Obtain Storage class of the CFS file system to be created. Valid values: SD: Standard; HP: High-Performance.
 * @method void setStorageType(string $StorageType) Set Storage class of the CFS file system to be created. Valid values: SD: Standard; HP: High-Performance.
 * @method string getPGroupId() Obtain Permission group ID
 * @method void setPGroupId(string $PGroupId) Set Permission group ID
 * @method string getZone() Obtain AZ name, such as `ap-beijing-1`. For more information, see the list of regions and AZs in Overview.
 * @method void setZone(string $Zone) Set AZ name, such as `ap-beijing-1`. For more information, see the list of regions and AZs in Overview.
 * @method TagSpecification getTagSpecification() Obtain Cloud tag description
 * @method void setTagSpecification(TagSpecification $TagSpecification) Set Cloud tag description
 */
class CreateImageAccelerationServiceRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $RegistryId;

    /**
     * @var string ID of the VPC where the CFS file system to be created resides
     */
    public $VpcId;

    /**
     * @var string ID of the subnet where the CFS file system to be created resides
     */
    public $SubnetId;

    /**
     * @var string Storage class of the CFS file system to be created. Valid values: SD: Standard; HP: High-Performance.
     */
    public $StorageType;

    /**
     * @var string Permission group ID
     */
    public $PGroupId;

    /**
     * @var string AZ name, such as `ap-beijing-1`. For more information, see the list of regions and AZs in Overview.
     */
    public $Zone;

    /**
     * @var TagSpecification Cloud tag description
     */
    public $TagSpecification;

    /**
     * @param string $RegistryId Instance ID
     * @param string $VpcId ID of the VPC where the CFS file system to be created resides
     * @param string $SubnetId ID of the subnet where the CFS file system to be created resides
     * @param string $StorageType Storage class of the CFS file system to be created. Valid values: SD: Standard; HP: High-Performance.
     * @param string $PGroupId Permission group ID
     * @param string $Zone AZ name, such as `ap-beijing-1`. For more information, see the list of regions and AZs in Overview.
     * @param TagSpecification $TagSpecification Cloud tag description
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("PGroupId",$param) and $param["PGroupId"] !== null) {
            $this->PGroupId = $param["PGroupId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = new TagSpecification();
            $this->TagSpecification->deserialize($param["TagSpecification"]);
        }
    }
}
