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
namespace TencentCloud\Ecdn\V20191012\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Origin server configuration.
 *
 * @method array getOrigins() Obtain Primary origin server list. IP and the domain name of the origin server cannot be entered at the same time. Configure origin server port in the format of ["origin1:port1", "origin2:port2"]. Configure origin-pull weight in the format of ["origin1::weight1", "origin2::weight2"]. Configure both port and weight in the format of ["origin1:port1:weight1", "origin2:port2:weight2"]. Valid range of weight value: 0 - 100.
 * @method void setOrigins(array $Origins) Set Primary origin server list. IP and the domain name of the origin server cannot be entered at the same time. Configure origin server port in the format of ["origin1:port1", "origin2:port2"]. Configure origin-pull weight in the format of ["origin1::weight1", "origin2::weight2"]. Configure both port and weight in the format of ["origin1:port1:weight1", "origin2:port2:weight2"]. Valid range of weight value: 0 - 100.
 * @method string getOriginType() Obtain Primary origin server type. Valid values: domain (domain name origin server), ip (IP origin server).
This is required when setting `Origins`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOriginType(string $OriginType) Set Primary origin server type. Valid values: domain (domain name origin server), ip (IP origin server).
This is required when setting `Origins`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getServerName() Obtain Host header value during origin-pull.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServerName(string $ServerName) Set Host header value during origin-pull.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getOriginPullProtocol() Obtain Origin-pull protocol type. Valid values: http (forced HTTP origin-pull), follow (protocol follow), https (HTTPS origin-pull).
If this parameter is left empty, HTTP origin-pull will be used by default.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setOriginPullProtocol(string $OriginPullProtocol) Set Origin-pull protocol type. Valid values: http (forced HTTP origin-pull), follow (protocol follow), https (HTTPS origin-pull).
If this parameter is left empty, HTTP origin-pull will be used by default.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method array getBackupOrigins() Obtain Secondary origin server list.
 * @method void setBackupOrigins(array $BackupOrigins) Set Secondary origin server list.
 * @method string getBackupOriginType() Obtain Secondary origin server type, which is the same as `OriginType`.
This is required when setting `BackupOrigins`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBackupOriginType(string $BackupOriginType) Set Secondary origin server type, which is the same as `OriginType`.
This is required when setting `BackupOrigins`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method AdvanceHttps getAdvanceHttps() Obtain HTTPS advanced origin-pull configuration
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setAdvanceHttps(AdvanceHttps $AdvanceHttps) Set HTTPS advanced origin-pull configuration
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class Origin extends AbstractModel
{
    /**
     * @var array Primary origin server list. IP and the domain name of the origin server cannot be entered at the same time. Configure origin server port in the format of ["origin1:port1", "origin2:port2"]. Configure origin-pull weight in the format of ["origin1::weight1", "origin2::weight2"]. Configure both port and weight in the format of ["origin1:port1:weight1", "origin2:port2:weight2"]. Valid range of weight value: 0 - 100.
     */
    public $Origins;

    /**
     * @var string Primary origin server type. Valid values: domain (domain name origin server), ip (IP origin server).
This is required when setting `Origins`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OriginType;

    /**
     * @var string Host header value during origin-pull.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServerName;

    /**
     * @var string Origin-pull protocol type. Valid values: http (forced HTTP origin-pull), follow (protocol follow), https (HTTPS origin-pull).
If this parameter is left empty, HTTP origin-pull will be used by default.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $OriginPullProtocol;

    /**
     * @var array Secondary origin server list.
     */
    public $BackupOrigins;

    /**
     * @var string Secondary origin server type, which is the same as `OriginType`.
This is required when setting `BackupOrigins`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $BackupOriginType;

    /**
     * @var AdvanceHttps HTTPS advanced origin-pull configuration
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $AdvanceHttps;

    /**
     * @param array $Origins Primary origin server list. IP and the domain name of the origin server cannot be entered at the same time. Configure origin server port in the format of ["origin1:port1", "origin2:port2"]. Configure origin-pull weight in the format of ["origin1::weight1", "origin2::weight2"]. Configure both port and weight in the format of ["origin1:port1:weight1", "origin2:port2:weight2"]. Valid range of weight value: 0 - 100.
     * @param string $OriginType Primary origin server type. Valid values: domain (domain name origin server), ip (IP origin server).
This is required when setting `Origins`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ServerName Host header value during origin-pull.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $OriginPullProtocol Origin-pull protocol type. Valid values: http (forced HTTP origin-pull), follow (protocol follow), https (HTTPS origin-pull).
If this parameter is left empty, HTTP origin-pull will be used by default.
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param array $BackupOrigins Secondary origin server list.
     * @param string $BackupOriginType Secondary origin server type, which is the same as `OriginType`.
This is required when setting `BackupOrigins`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param AdvanceHttps $AdvanceHttps HTTPS advanced origin-pull configuration
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Origins",$param) and $param["Origins"] !== null) {
            $this->Origins = $param["Origins"];
        }

        if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
            $this->OriginType = $param["OriginType"];
        }

        if (array_key_exists("ServerName",$param) and $param["ServerName"] !== null) {
            $this->ServerName = $param["ServerName"];
        }

        if (array_key_exists("OriginPullProtocol",$param) and $param["OriginPullProtocol"] !== null) {
            $this->OriginPullProtocol = $param["OriginPullProtocol"];
        }

        if (array_key_exists("BackupOrigins",$param) and $param["BackupOrigins"] !== null) {
            $this->BackupOrigins = $param["BackupOrigins"];
        }

        if (array_key_exists("BackupOriginType",$param) and $param["BackupOriginType"] !== null) {
            $this->BackupOriginType = $param["BackupOriginType"];
        }

        if (array_key_exists("AdvanceHttps",$param) and $param["AdvanceHttps"] !== null) {
            $this->AdvanceHttps = new AdvanceHttps();
            $this->AdvanceHttps->deserialize($param["AdvanceHttps"]);
        }
    }
}
