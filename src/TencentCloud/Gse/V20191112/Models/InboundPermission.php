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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Allowed network range.
 *
 * @method integer getFromPort() Obtain Start port number. Minimum value: 1025.
 * @method void setFromPort(integer $FromPort) Set Start port number. Minimum value: 1025.
 * @method string getIpRange() Obtain IP range. Valid range of the input IPv4 addresses in CIDR format; for example, 0.0.0.0.0/0.
 * @method void setIpRange(string $IpRange) Set IP range. Valid range of the input IPv4 addresses in CIDR format; for example, 0.0.0.0.0/0.
 * @method string getProtocol() Obtain Protocol type: TCP or UDP.
 * @method void setProtocol(string $Protocol) Set Protocol type: TCP or UDP.
 * @method integer getToPort() Obtain End port number. Maximum value: 60000.
 * @method void setToPort(integer $ToPort) Set End port number. Maximum value: 60000.
 */
class InboundPermission extends AbstractModel
{
    /**
     * @var integer Start port number. Minimum value: 1025.
     */
    public $FromPort;

    /**
     * @var string IP range. Valid range of the input IPv4 addresses in CIDR format; for example, 0.0.0.0.0/0.
     */
    public $IpRange;

    /**
     * @var string Protocol type: TCP or UDP.
     */
    public $Protocol;

    /**
     * @var integer End port number. Maximum value: 60000.
     */
    public $ToPort;

    /**
     * @param integer $FromPort Start port number. Minimum value: 1025.
     * @param string $IpRange IP range. Valid range of the input IPv4 addresses in CIDR format; for example, 0.0.0.0.0/0.
     * @param string $Protocol Protocol type: TCP or UDP.
     * @param integer $ToPort End port number. Maximum value: 60000.
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
        if (array_key_exists("FromPort",$param) and $param["FromPort"] !== null) {
            $this->FromPort = $param["FromPort"];
        }

        if (array_key_exists("IpRange",$param) and $param["IpRange"] !== null) {
            $this->IpRange = $param["IpRange"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("ToPort",$param) and $param["ToPort"] !== null) {
            $this->ToPort = $param["ToPort"];
        }
    }
}
