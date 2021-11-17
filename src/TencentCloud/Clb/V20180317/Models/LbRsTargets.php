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
 * Querying the output data types
 *
 * @method string getType() Obtain Private network IP type, which can be `cvm` or `eni`.
 * @method void setType(string $Type) Set Private network IP type, which can be `cvm` or `eni`.
 * @method string getPrivateIp() Obtain Private network IP of the real server.
 * @method void setPrivateIp(string $PrivateIp) Set Private network IP of the real server.
 * @method integer getPort() Obtain Port bound to the real server.
 * @method void setPort(integer $Port) Set Port bound to the real server.
 * @method integer getVpcId() Obtain VPC ID of the real server.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setVpcId(integer $VpcId) Set VPC ID of the real server.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method integer getWeight() Obtain Weight of the real server.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setWeight(integer $Weight) Set Weight of the real server.
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class LbRsTargets extends AbstractModel
{
    /**
     * @var string Private network IP type, which can be `cvm` or `eni`.
     */
    public $Type;

    /**
     * @var string Private network IP of the real server.
     */
    public $PrivateIp;

    /**
     * @var integer Port bound to the real server.
     */
    public $Port;

    /**
     * @var integer VPC ID of the real server.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var integer Weight of the real server.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Weight;

    /**
     * @param string $Type Private network IP type, which can be `cvm` or `eni`.
     * @param string $PrivateIp Private network IP of the real server.
     * @param integer $Port Port bound to the real server.
     * @param integer $VpcId VPC ID of the real server.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param integer $Weight Weight of the real server.
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
