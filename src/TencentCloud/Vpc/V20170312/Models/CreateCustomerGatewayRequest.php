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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCustomerGateway request structure.
 *
 * @method string getCustomerGatewayName() Obtain Customer gateway can be named freely, but the maximum length is 60 characters.
 * @method void setCustomerGatewayName(string $CustomerGatewayName) Set Customer gateway can be named freely, but the maximum length is 60 characters.
 * @method string getIpAddress() Obtain Customer gateway public IP.
 * @method void setIpAddress(string $IpAddress) Set Customer gateway public IP.
 * @method array getTags() Obtain Bound tags, such as [{"Key": "city", "Value": "shanghai"}].
 * @method void setTags(array $Tags) Set Bound tags, such as [{"Key": "city", "Value": "shanghai"}].
 */
class CreateCustomerGatewayRequest extends AbstractModel
{
    /**
     * @var string Customer gateway can be named freely, but the maximum length is 60 characters.
     */
    public $CustomerGatewayName;

    /**
     * @var string Customer gateway public IP.
     */
    public $IpAddress;

    /**
     * @var array Bound tags, such as [{"Key": "city", "Value": "shanghai"}].
     */
    public $Tags;

    /**
     * @param string $CustomerGatewayName Customer gateway can be named freely, but the maximum length is 60 characters.
     * @param string $IpAddress Customer gateway public IP.
     * @param array $Tags Bound tags, such as [{"Key": "city", "Value": "shanghai"}].
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
        if (array_key_exists("CustomerGatewayName",$param) and $param["CustomerGatewayName"] !== null) {
            $this->CustomerGatewayName = $param["CustomerGatewayName"];
        }

        if (array_key_exists("IpAddress",$param) and $param["IpAddress"] !== null) {
            $this->IpAddress = $param["IpAddress"];
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
