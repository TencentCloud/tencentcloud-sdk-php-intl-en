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
namespace TencentCloud\Ctsdb\V20230202\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance network information (influxdb).
 *
 * @method string getVpcId() Obtain vpc id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set vpc id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubnetId() Obtain vpc subnet id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubnetId(string $SubnetId) Set vpc subnet id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVIP() Obtain VPC IP address.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVIP(string $VIP) Set VPC IP address.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPort() Obtain VPC port address.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPort(integer $Port) Set VPC port address.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Network extends AbstractModel
{
    /**
     * @var string vpc id
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var string vpc subnet id
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubnetId;

    /**
     * @var string VPC IP address.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VIP;

    /**
     * @var integer VPC port address.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Port;

    /**
     * @param string $VpcId vpc id
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubnetId vpc subnet id
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VIP VPC IP address.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Port VPC port address.
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("VIP",$param) and $param["VIP"] !== null) {
            $this->VIP = $param["VIP"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
