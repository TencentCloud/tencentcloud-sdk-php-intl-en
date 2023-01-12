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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyEnvironment request structure.
 *
 * @method string getEnvironmentId() Obtain Environment ID
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment ID
 * @method string getEnvironmentName() Obtain Environment name
 * @method void setEnvironmentName(string $EnvironmentName) Set Environment name
 * @method string getDescription() Obtain Environment description
 * @method void setDescription(string $Description) Set Environment description
 * @method string getVpc() Obtain VPC name
 * @method void setVpc(string $Vpc) Set VPC name
 * @method array getSubnetIds() Obtain Subnets
 * @method void setSubnetIds(array $SubnetIds) Set Subnets
 * @method integer getSourceChannel() Obtain Source channel
 * @method void setSourceChannel(integer $SourceChannel) Set Source channel
 * @method string getEnvType() Obtain Environment type. Values: `test`, `pre`, `prod`
 * @method void setEnvType(string $EnvType) Set Environment type. Values: `test`, `pre`, `prod`
 */
class ModifyEnvironmentRequest extends AbstractModel
{
    /**
     * @var string Environment ID
     */
    public $EnvironmentId;

    /**
     * @var string Environment name
     */
    public $EnvironmentName;

    /**
     * @var string Environment description
     */
    public $Description;

    /**
     * @var string VPC name
     */
    public $Vpc;

    /**
     * @var array Subnets
     */
    public $SubnetIds;

    /**
     * @var integer Source channel
     */
    public $SourceChannel;

    /**
     * @var string Environment type. Values: `test`, `pre`, `prod`
     */
    public $EnvType;

    /**
     * @param string $EnvironmentId Environment ID
     * @param string $EnvironmentName Environment name
     * @param string $Description Environment description
     * @param string $Vpc VPC name
     * @param array $SubnetIds Subnets
     * @param integer $SourceChannel Source channel
     * @param string $EnvType Environment type. Values: `test`, `pre`, `prod`
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("EnvironmentName",$param) and $param["EnvironmentName"] !== null) {
            $this->EnvironmentName = $param["EnvironmentName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Vpc",$param) and $param["Vpc"] !== null) {
            $this->Vpc = $param["Vpc"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }

        if (array_key_exists("EnvType",$param) and $param["EnvType"] !== null) {
            $this->EnvType = $param["EnvType"];
        }
    }
}
