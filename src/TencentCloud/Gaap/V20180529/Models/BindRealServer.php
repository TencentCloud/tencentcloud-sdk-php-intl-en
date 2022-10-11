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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Bound origin server information
 *
 * @method string getRealServerId() Obtain Origin server ID
 * @method void setRealServerId(string $RealServerId) Set Origin server ID
 * @method string getRealServerIP() Obtain Origin server IP or domain name
 * @method void setRealServerIP(string $RealServerIP) Set Origin server IP or domain name
 * @method integer getRealServerWeight() Obtain Origin server weight
 * @method void setRealServerWeight(integer $RealServerWeight) Set Origin server weight
 * @method integer getRealServerStatus() Obtain Origin server health check status. Valid values:
0: normal;
1: exceptional.
If health check is not enabled, this status will always be normal.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRealServerStatus(integer $RealServerStatus) Set Origin server health check status. Valid values:
0: normal;
1: exceptional.
If health check is not enabled, this status will always be normal.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getRealServerPort() Obtain Origin server port number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRealServerPort(integer $RealServerPort) Set Origin server port number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDownIPList() Obtain If the origin server is a domain name, the domain name will be resolved to one or multiple IPs. This field indicates the exceptional IP list.
 * @method void setDownIPList(array $DownIPList) Set If the origin server is a domain name, the domain name will be resolved to one or multiple IPs. This field indicates the exceptional IP list.
 * @method string getRealServerFailoverRole() Obtain Role of the origin server. Values: `master` (primary origin server); `slave` (secondary origin server). This parameter only takes effect when origin failover is enabled for the listener.
 * @method void setRealServerFailoverRole(string $RealServerFailoverRole) Set Role of the origin server. Values: `master` (primary origin server); `slave` (secondary origin server). This parameter only takes effect when origin failover is enabled for the listener.
 */
class BindRealServer extends AbstractModel
{
    /**
     * @var string Origin server ID
     */
    public $RealServerId;

    /**
     * @var string Origin server IP or domain name
     */
    public $RealServerIP;

    /**
     * @var integer Origin server weight
     */
    public $RealServerWeight;

    /**
     * @var integer Origin server health check status. Valid values:
0: normal;
1: exceptional.
If health check is not enabled, this status will always be normal.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $RealServerStatus;

    /**
     * @var integer Origin server port number
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RealServerPort;

    /**
     * @var array If the origin server is a domain name, the domain name will be resolved to one or multiple IPs. This field indicates the exceptional IP list.
     */
    public $DownIPList;

    /**
     * @var string Role of the origin server. Values: `master` (primary origin server); `slave` (secondary origin server). This parameter only takes effect when origin failover is enabled for the listener.
     */
    public $RealServerFailoverRole;

    /**
     * @param string $RealServerId Origin server ID
     * @param string $RealServerIP Origin server IP or domain name
     * @param integer $RealServerWeight Origin server weight
     * @param integer $RealServerStatus Origin server health check status. Valid values:
0: normal;
1: exceptional.
If health check is not enabled, this status will always be normal.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $RealServerPort Origin server port number
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $DownIPList If the origin server is a domain name, the domain name will be resolved to one or multiple IPs. This field indicates the exceptional IP list.
     * @param string $RealServerFailoverRole Role of the origin server. Values: `master` (primary origin server); `slave` (secondary origin server). This parameter only takes effect when origin failover is enabled for the listener.
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
        if (array_key_exists("RealServerId",$param) and $param["RealServerId"] !== null) {
            $this->RealServerId = $param["RealServerId"];
        }

        if (array_key_exists("RealServerIP",$param) and $param["RealServerIP"] !== null) {
            $this->RealServerIP = $param["RealServerIP"];
        }

        if (array_key_exists("RealServerWeight",$param) and $param["RealServerWeight"] !== null) {
            $this->RealServerWeight = $param["RealServerWeight"];
        }

        if (array_key_exists("RealServerStatus",$param) and $param["RealServerStatus"] !== null) {
            $this->RealServerStatus = $param["RealServerStatus"];
        }

        if (array_key_exists("RealServerPort",$param) and $param["RealServerPort"] !== null) {
            $this->RealServerPort = $param["RealServerPort"];
        }

        if (array_key_exists("DownIPList",$param) and $param["DownIPList"] !== null) {
            $this->DownIPList = $param["DownIPList"];
        }

        if (array_key_exists("RealServerFailoverRole",$param) and $param["RealServerFailoverRole"] !== null) {
            $this->RealServerFailoverRole = $param["RealServerFailoverRole"];
        }
    }
}
