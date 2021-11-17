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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Querying the input data types
 *
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method string getPrivateIp() Obtain Private network IP to be queried, which can be of the CVM or ENI.
 * @method void setPrivateIp(string $PrivateIp) Set Private network IP to be queried, which can be of the CVM or ENI.
 */
class LbRsItem extends AbstractModel
{
    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string Private network IP to be queried, which can be of the CVM or ENI.
     */
    public $PrivateIp;

    /**
     * @param string $VpcId VPC ID
     * @param string $PrivateIp Private network IP to be queried, which can be of the CVM or ENI.
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

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }
    }
}
