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
 * DeleteLocalGateway request structure.
 *
 * @method string getLocalGatewayId() Obtain Local gateway instance ID
 * @method void setLocalGatewayId(string $LocalGatewayId) Set Local gateway instance ID
 * @method string getCdcId() Obtain CDC instance ID
 * @method void setCdcId(string $CdcId) Set CDC instance ID
 * @method string getVpcId() Obtain VPC instance ID
 * @method void setVpcId(string $VpcId) Set VPC instance ID
 */
class DeleteLocalGatewayRequest extends AbstractModel
{
    /**
     * @var string Local gateway instance ID
     */
    public $LocalGatewayId;

    /**
     * @var string CDC instance ID
     */
    public $CdcId;

    /**
     * @var string VPC instance ID
     */
    public $VpcId;

    /**
     * @param string $LocalGatewayId Local gateway instance ID
     * @param string $CdcId CDC instance ID
     * @param string $VpcId VPC instance ID
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
        if (array_key_exists("LocalGatewayId",$param) and $param["LocalGatewayId"] !== null) {
            $this->LocalGatewayId = $param["LocalGatewayId"];
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }
    }
}
