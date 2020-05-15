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
 * Customer Gateway
 *
 * @method string getCustomerGatewayId() Obtain The unique ID of the customer gateway
 * @method void setCustomerGatewayId(string $CustomerGatewayId) Set The unique ID of the customer gateway
 * @method string getCustomerGatewayName() Obtain Gateway Name
 * @method void setCustomerGatewayName(string $CustomerGatewayName) Set Gateway Name
 * @method string getIpAddress() Obtain Public network address
 * @method void setIpAddress(string $IpAddress) Set Public network address
 * @method string getCreatedTime() Obtain The creation time.
 * @method void setCreatedTime(string $CreatedTime) Set The creation time.
 */
class CustomerGateway extends AbstractModel
{
    /**
     * @var string The unique ID of the customer gateway
     */
    public $CustomerGatewayId;

    /**
     * @var string Gateway Name
     */
    public $CustomerGatewayName;

    /**
     * @var string Public network address
     */
    public $IpAddress;

    /**
     * @var string The creation time.
     */
    public $CreatedTime;

    /**
     * @param string $CustomerGatewayId The unique ID of the customer gateway
     * @param string $CustomerGatewayName Gateway Name
     * @param string $IpAddress Public network address
     * @param string $CreatedTime The creation time.
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
        if (array_key_exists("CustomerGatewayId",$param) and $param["CustomerGatewayId"] !== null) {
            $this->CustomerGatewayId = $param["CustomerGatewayId"];
        }

        if (array_key_exists("CustomerGatewayName",$param) and $param["CustomerGatewayName"] !== null) {
            $this->CustomerGatewayName = $param["CustomerGatewayName"];
        }

        if (array_key_exists("IpAddress",$param) and $param["IpAddress"] !== null) {
            $this->IpAddress = $param["IpAddress"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
