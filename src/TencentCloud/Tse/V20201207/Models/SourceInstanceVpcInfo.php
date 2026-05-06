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
 * VPC information of the microservice engine instance
 *
 * @method string getVpcID() Obtain VPC information of the microservice engine
 * @method void setVpcID(string $VpcID) Set VPC information of the microservice engine
 * @method string getSubnetID() Obtain Microservice engine subnet info
 * @method void setSubnetID(string $SubnetID) Set Microservice engine subnet info
 */
class SourceInstanceVpcInfo extends AbstractModel
{
    /**
     * @var string VPC information of the microservice engine
     */
    public $VpcID;

    /**
     * @var string Microservice engine subnet info
     */
    public $SubnetID;

    /**
     * @param string $VpcID VPC information of the microservice engine
     * @param string $SubnetID Microservice engine subnet info
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
        if (array_key_exists("VpcID",$param) and $param["VpcID"] !== null) {
            $this->VpcID = $param["VpcID"];
        }

        if (array_key_exists("SubnetID",$param) and $param["SubnetID"] !== null) {
            $this->SubnetID = $param["SubnetID"];
        }
    }
}
