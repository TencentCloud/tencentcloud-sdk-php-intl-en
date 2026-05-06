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
 * Retrieve the response result of the protocol port list for a cloud-native API gateway instance
 *
 * @method string getGatewayId() Obtain Cloud Native API Gateway ID
 * @method void setGatewayId(string $GatewayId) Set Cloud Native API Gateway ID
 * @method array getGatewayInstancePortList() Obtain Gateway instance protocol port list
 * @method void setGatewayInstancePortList(array $GatewayInstancePortList) Set Gateway instance protocol port list
 */
class DescribeGatewayInstancePortResult extends AbstractModel
{
    /**
     * @var string Cloud Native API Gateway ID
     */
    public $GatewayId;

    /**
     * @var array Gateway instance protocol port list
     */
    public $GatewayInstancePortList;

    /**
     * @param string $GatewayId Cloud Native API Gateway ID
     * @param array $GatewayInstancePortList Gateway instance protocol port list
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("GatewayInstancePortList",$param) and $param["GatewayInstancePortList"] !== null) {
            $this->GatewayInstancePortList = [];
            foreach ($param["GatewayInstancePortList"] as $key => $value){
                $obj = new GatewayInstanceSchemeAndPorts();
                $obj->deserialize($value);
                array_push($this->GatewayInstancePortList, $obj);
            }
        }
    }
}
