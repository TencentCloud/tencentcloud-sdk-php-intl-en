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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySubnetAttribute request structure.
 *
 * @method string getSubnetId() Obtain Subnet instance ID, such as `subnet-pxir56ns`.
 * @method void setSubnetId(string $SubnetId) Set Subnet instance ID, such as `subnet-pxir56ns`.
 * @method string getEcmRegion() Obtain ECM region
 * @method void setEcmRegion(string $EcmRegion) Set ECM region
 * @method string getSubnetName() Obtain Subnet name, which can contain up to 60 bytes.
 * @method void setSubnetName(string $SubnetName) Set Subnet name, which can contain up to 60 bytes.
 * @method string getEnableBroadcast() Obtain Whether to enable broadcast for the subnet.
 * @method void setEnableBroadcast(string $EnableBroadcast) Set Whether to enable broadcast for the subnet.
 * @method array getTags() Obtain Tag key value of the subnet
 * @method void setTags(array $Tags) Set Tag key value of the subnet
 */
class ModifySubnetAttributeRequest extends AbstractModel
{
    /**
     * @var string Subnet instance ID, such as `subnet-pxir56ns`.
     */
    public $SubnetId;

    /**
     * @var string ECM region
     */
    public $EcmRegion;

    /**
     * @var string Subnet name, which can contain up to 60 bytes.
     */
    public $SubnetName;

    /**
     * @var string Whether to enable broadcast for the subnet.
     */
    public $EnableBroadcast;

    /**
     * @var array Tag key value of the subnet
     */
    public $Tags;

    /**
     * @param string $SubnetId Subnet instance ID, such as `subnet-pxir56ns`.
     * @param string $EcmRegion ECM region
     * @param string $SubnetName Subnet name, which can contain up to 60 bytes.
     * @param string $EnableBroadcast Whether to enable broadcast for the subnet.
     * @param array $Tags Tag key value of the subnet
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
        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("EcmRegion",$param) and $param["EcmRegion"] !== null) {
            $this->EcmRegion = $param["EcmRegion"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("EnableBroadcast",$param) and $param["EnableBroadcast"] !== null) {
            $this->EnableBroadcast = $param["EnableBroadcast"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
