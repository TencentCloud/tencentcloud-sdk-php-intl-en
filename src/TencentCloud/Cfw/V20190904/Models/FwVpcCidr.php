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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Firewall IP range of the VPC
 *
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method string getFwCidr() Obtain IP range of the firewall. The mask must be at least /24.
 * @method void setFwCidr(string $FwCidr) Set IP range of the firewall. The mask must be at least /24.
 */
class FwVpcCidr extends AbstractModel
{
    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string IP range of the firewall. The mask must be at least /24.
     */
    public $FwCidr;

    /**
     * @param string $VpcId VPC ID
     * @param string $FwCidr IP range of the firewall. The mask must be at least /24.
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("FwCidr",$param) and $param["FwCidr"] !== null) {
            $this->FwCidr = $param["FwCidr"];
        }
    }
}
