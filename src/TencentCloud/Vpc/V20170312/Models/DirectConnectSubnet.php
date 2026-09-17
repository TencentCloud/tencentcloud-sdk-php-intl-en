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
 * IDC subnet information.
 *
 * @method string getDirectConnectGatewayId() Obtain Direct Connect gateway ID.
 * @method void setDirectConnectGatewayId(string $DirectConnectGatewayId) Set Direct Connect gateway ID.
 * @method string getCidrBlock() Obtain IDC subnet CIDR block.
 * @method void setCidrBlock(string $CidrBlock) Set IDC subnet CIDR block.
 */
class DirectConnectSubnet extends AbstractModel
{
    /**
     * @var string Direct Connect gateway ID.
     */
    public $DirectConnectGatewayId;

    /**
     * @var string IDC subnet CIDR block.
     */
    public $CidrBlock;

    /**
     * @param string $DirectConnectGatewayId Direct Connect gateway ID.
     * @param string $CidrBlock IDC subnet CIDR block.
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

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }
    }
}
