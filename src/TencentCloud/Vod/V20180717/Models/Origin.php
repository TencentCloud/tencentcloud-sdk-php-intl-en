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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method array getOrigins() Obtain Primary origin server list.
When modifying the primary origin server, fill in the corresponding OriginType at the same time.
 * @method void setOrigins(array $Origins) Set Primary origin server list.
When modifying the primary origin server, fill in the corresponding OriginType at the same time.
 * @method string getOriginType() Obtain Primary origin server type. The input parameter supports the following types:
<li>domain: Domain type;</li>
<li>ip: IP list as the origin server;</li>
<li>third_party: third-party object storage origin.</li>
 * @method void setOriginType(string $OriginType) Set Primary origin server type. The input parameter supports the following types:
<li>domain: Domain type;</li>
<li>ip: IP list as the origin server;</li>
<li>third_party: third-party object storage origin.</li>
 * @method string getServerName() Obtain Host header when accessing the primary origin server. If not filled in, it defaults to the acceleration domain name.
When the origin server type is COS, the ServerName field is required.
 * @method void setServerName(string $ServerName) Set Host header when accessing the primary origin server. If not filled in, it defaults to the acceleration domain name.
When the origin server type is COS, the ServerName field is required.
 * @method string getOriginPullProtocol() Obtain Origin-pull protocol configuration:
<li>http: Force HTTP origin-pull.</li>
<li>follow: follow protocol for origin-pull;</li>
<li>`https`: Switch HTTP requests to HTTPS. This only supports port 443 on the origin server.</li>
 * @method void setOriginPullProtocol(string $OriginPullProtocol) Set Origin-pull protocol configuration:
<li>http: Force HTTP origin-pull.</li>
<li>follow: follow protocol for origin-pull;</li>
<li>`https`: Switch HTTP requests to HTTPS. This only supports port 443 on the origin server.</li>
 * @method array getBackupOrigins() Obtain Backup origin list.
When modifying the standby origin server, fill in the corresponding OriginType at the same time.
 * @method void setBackupOrigins(array $BackupOrigins) Set Backup origin list.
When modifying the standby origin server, fill in the corresponding OriginType at the same time.
 * @method string getBackupOriginType() Obtain Secondary origin type. Input supports the following types:
<li>domain: Domain type;</li>
<li>ip: IP list as the origin server;</li>
<li>third_party: third-party object storage origin.</li>
 * @method void setBackupOriginType(string $BackupOriginType) Set Secondary origin type. Input supports the following types:
<li>domain: Domain type;</li>
<li>ip: IP list as the origin server;</li>
<li>third_party: third-party object storage origin.</li>
 * @method string getBackupServerName() Obtain 
 * @method void setBackupServerName(string $BackupServerName) Set 
 * @method string getOriginCompany() Obtain Object storage origin service vendor. Required when the origin server type is third-party object storage origin (third_party). Optional values include:
<li>aws_s3:AWS S3;</li>
<li>ali_oss: Alibaba Cloud OSS;</li>
<li>hw_obs: Huawei OBS;</li>
<li>others: other vendor's object storage. Only object storage compatible with the AWS signature algorithm is supported, such as Tencent Cloud COS.</li>
 * @method void setOriginCompany(string $OriginCompany) Set Object storage origin service vendor. Required when the origin server type is third-party object storage origin (third_party). Optional values include:
<li>aws_s3:AWS S3;</li>
<li>ali_oss: Alibaba Cloud OSS;</li>
<li>hw_obs: Huawei OBS;</li>
<li>others: other vendor's object storage. Only object storage compatible with the AWS signature algorithm is supported, such as Tencent Cloud COS.</li>
 */
class Origin extends AbstractModel
{
    /**
     * @var array Primary origin server list.
When modifying the primary origin server, fill in the corresponding OriginType at the same time.
     */
    public $Origins;

    /**
     * @var string Primary origin server type. The input parameter supports the following types:
<li>domain: Domain type;</li>
<li>ip: IP list as the origin server;</li>
<li>third_party: third-party object storage origin.</li>
     */
    public $OriginType;

    /**
     * @var string Host header when accessing the primary origin server. If not filled in, it defaults to the acceleration domain name.
When the origin server type is COS, the ServerName field is required.
     */
    public $ServerName;

    /**
     * @var string Origin-pull protocol configuration:
<li>http: Force HTTP origin-pull.</li>
<li>follow: follow protocol for origin-pull;</li>
<li>`https`: Switch HTTP requests to HTTPS. This only supports port 443 on the origin server.</li>
     */
    public $OriginPullProtocol;

    /**
     * @var array Backup origin list.
When modifying the standby origin server, fill in the corresponding OriginType at the same time.
     */
    public $BackupOrigins;

    /**
     * @var string Secondary origin type. Input supports the following types:
<li>domain: Domain type;</li>
<li>ip: IP list as the origin server;</li>
<li>third_party: third-party object storage origin.</li>
     */
    public $BackupOriginType;

    /**
     * @var string 
     */
    public $BackupServerName;

    /**
     * @var string Object storage origin service vendor. Required when the origin server type is third-party object storage origin (third_party). Optional values include:
<li>aws_s3:AWS S3;</li>
<li>ali_oss: Alibaba Cloud OSS;</li>
<li>hw_obs: Huawei OBS;</li>
<li>others: other vendor's object storage. Only object storage compatible with the AWS signature algorithm is supported, such as Tencent Cloud COS.</li>
     */
    public $OriginCompany;

    /**
     * @param array $Origins Primary origin server list.
When modifying the primary origin server, fill in the corresponding OriginType at the same time.
     * @param string $OriginType Primary origin server type. The input parameter supports the following types:
<li>domain: Domain type;</li>
<li>ip: IP list as the origin server;</li>
<li>third_party: third-party object storage origin.</li>
     * @param string $ServerName Host header when accessing the primary origin server. If not filled in, it defaults to the acceleration domain name.
When the origin server type is COS, the ServerName field is required.
     * @param string $OriginPullProtocol Origin-pull protocol configuration:
<li>http: Force HTTP origin-pull.</li>
<li>follow: follow protocol for origin-pull;</li>
<li>`https`: Switch HTTP requests to HTTPS. This only supports port 443 on the origin server.</li>
     * @param array $BackupOrigins Backup origin list.
When modifying the standby origin server, fill in the corresponding OriginType at the same time.
     * @param string $BackupOriginType Secondary origin type. Input supports the following types:
<li>domain: Domain type;</li>
<li>ip: IP list as the origin server;</li>
<li>third_party: third-party object storage origin.</li>
     * @param string $BackupServerName 
     * @param string $OriginCompany Object storage origin service vendor. Required when the origin server type is third-party object storage origin (third_party). Optional values include:
<li>aws_s3:AWS S3;</li>
<li>ali_oss: Alibaba Cloud OSS;</li>
<li>hw_obs: Huawei OBS;</li>
<li>others: other vendor's object storage. Only object storage compatible with the AWS signature algorithm is supported, such as Tencent Cloud COS.</li>
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

        if (array_key_exists("BackupServerName",$param) and $param["BackupServerName"] !== null) {
            $this->BackupServerName = $param["BackupServerName"];
        }

        if (array_key_exists("OriginCompany",$param) and $param["OriginCompany"] !== null) {
            $this->OriginCompany = $param["OriginCompany"];
        }
    }
}
