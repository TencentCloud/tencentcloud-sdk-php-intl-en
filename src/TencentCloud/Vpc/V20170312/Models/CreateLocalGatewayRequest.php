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
 * CreateLocalGateway request structure.
 *
 * @method string getLocalGatewayName() Obtain Local gateway name
 * @method void setLocalGatewayName(string $LocalGatewayName) Set Local gateway name
 * @method string getVpcId() Obtain VPC instance ID
 * @method void setVpcId(string $VpcId) Set VPC instance ID
 * @method string getCdcId() Obtain CDC instance ID
 * @method void setCdcId(string $CdcId) Set CDC instance ID
 */
class CreateLocalGatewayRequest extends AbstractModel
{
    /**
     * @var string Local gateway name
     */
    public $LocalGatewayName;

    /**
     * @var string VPC instance ID
     */
    public $VpcId;

    /**
     * @var string CDC instance ID
     */
    public $CdcId;

    /**
     * @param string $LocalGatewayName Local gateway name
     * @param string $VpcId VPC instance ID
     * @param string $CdcId CDC instance ID
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
        if (array_key_exists("LocalGatewayName",$param) and $param["LocalGatewayName"] !== null) {
            $this->LocalGatewayName = $param["LocalGatewayName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }
    }
}
