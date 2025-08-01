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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteDirectConnectGateway request structure.
 *
 * @method string getDirectConnectGatewayId() Obtain The unique `ID` of the direct connect gateway, such as `dcg-9o233uri`.
 * @method void setDirectConnectGatewayId(string $DirectConnectGatewayId) Set The unique `ID` of the direct connect gateway, such as `dcg-9o233uri`.
 */
class DeleteDirectConnectGatewayRequest extends AbstractModel
{
    /**
     * @var string The unique `ID` of the direct connect gateway, such as `dcg-9o233uri`.
     */
    public $DirectConnectGatewayId;

    /**
     * @param string $DirectConnectGatewayId The unique `ID` of the direct connect gateway, such as `dcg-9o233uri`.
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
        if (array_key_exists("DirectConnectGatewayId",$param) and $param["DirectConnectGatewayId"] !== null) {
            $this->DirectConnectGatewayId = $param["DirectConnectGatewayId"];
        }
    }
}
