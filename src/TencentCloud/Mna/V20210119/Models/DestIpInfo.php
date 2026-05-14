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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Target IP info
 *
 * @method string getTime() Obtain Time: s
 * @method void setTime(string $Time) Set Time: s
 * @method string getGatewayIp() Obtain Gateway IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGatewayIp(string $GatewayIp) Set Gateway IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGatewaySite() Obtain gateway address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGatewaySite(string $GatewaySite) Set gateway address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIpCount() Obtain Number of target IPs
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIpCount(integer $IpCount) Set Number of target IPs
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getIpList() Obtain Target IP list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIpList(array $IpList) Set Target IP list
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DestIpInfo extends AbstractModel
{
    /**
     * @var string Time: s
     */
    public $Time;

    /**
     * @var string Gateway IP
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GatewayIp;

    /**
     * @var string gateway address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GatewaySite;

    /**
     * @var integer Number of target IPs
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IpCount;

    /**
     * @var array Target IP list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IpList;

    /**
     * @param string $Time Time: s
     * @param string $GatewayIp Gateway IP
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GatewaySite gateway address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IpCount Number of target IPs
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $IpList Target IP list
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("GatewayIp",$param) and $param["GatewayIp"] !== null) {
            $this->GatewayIp = $param["GatewayIp"];
        }

        if (array_key_exists("GatewaySite",$param) and $param["GatewaySite"] !== null) {
            $this->GatewaySite = $param["GatewaySite"];
        }

        if (array_key_exists("IpCount",$param) and $param["IpCount"] !== null) {
            $this->IpCount = $param["IpCount"];
        }

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }
    }
}
