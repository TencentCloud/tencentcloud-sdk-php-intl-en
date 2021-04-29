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
 * Local gateway information
 *
 * @method string getCdcId() Obtain CDC instance ID
 * @method void setCdcId(string $CdcId) Set CDC instance ID
 * @method string getVpcId() Obtain VPC instance ID
 * @method void setVpcId(string $VpcId) Set VPC instance ID
 * @method string getUniqLocalGwId() Obtain Local gateway instance ID
 * @method void setUniqLocalGwId(string $UniqLocalGwId) Set Local gateway instance ID
 * @method string getLocalGatewayName() Obtain Local gateway name
 * @method void setLocalGatewayName(string $LocalGatewayName) Set Local gateway name
 * @method string getLocalGwIp() Obtain Local gateway IP
 * @method void setLocalGwIp(string $LocalGwIp) Set Local gateway IP
 * @method string getCreateTime() Obtain Creation time of the local gateway
 * @method void setCreateTime(string $CreateTime) Set Creation time of the local gateway
 */
class LocalGateway extends AbstractModel
{
    /**
     * @var string CDC instance ID
     */
    public $CdcId;

    /**
     * @var string VPC instance ID
     */
    public $VpcId;

    /**
     * @var string Local gateway instance ID
     */
    public $UniqLocalGwId;

    /**
     * @var string Local gateway name
     */
    public $LocalGatewayName;

    /**
     * @var string Local gateway IP
     */
    public $LocalGwIp;

    /**
     * @var string Creation time of the local gateway
     */
    public $CreateTime;

    /**
     * @param string $CdcId CDC instance ID
     * @param string $VpcId VPC instance ID
     * @param string $UniqLocalGwId Local gateway instance ID
     * @param string $LocalGatewayName Local gateway name
     * @param string $LocalGwIp Local gateway IP
     * @param string $CreateTime Creation time of the local gateway
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
        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("UniqLocalGwId",$param) and $param["UniqLocalGwId"] !== null) {
            $this->UniqLocalGwId = $param["UniqLocalGwId"];
        }

        if (array_key_exists("LocalGatewayName",$param) and $param["LocalGatewayName"] !== null) {
            $this->LocalGatewayName = $param["LocalGatewayName"];
        }

        if (array_key_exists("LocalGwIp",$param) and $param["LocalGwIp"] !== null) {
            $this->LocalGwIp = $param["LocalGwIp"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
