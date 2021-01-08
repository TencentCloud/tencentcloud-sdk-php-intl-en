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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Complex origin server configurations. The following configurations are supported:
+ Origin server specified as a single domain name
+ Origin server specified as multiple IPs. Supported port range: 1-65535; Supported weight range: 1-100. Format: IP:Port:Weight.
+ Origin-pull domain name configuration
+ Cloud Object Storage (COS) specified as origin server
+ Hot backup origin server specified as a single domain name
+ Hot backup origin server specified as multiple IPs. Supported port range: 1-65535. At present, weight configuration is not supported.
+ Hot backup origin server origin-pull domain name configuration
 *
 * @method array getOrigins() Obtain Master origin server list
When modifying the origin server, you need to enter the corresponding OriginType.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOrigins(array $Origins) Set Master origin server list
When modifying the origin server, you need to enter the corresponding OriginType.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getOriginType() Obtain Master origin server type
The following types are supported for input parameters:
domain: domain name type
cos: COS origin
ip: IP list used as origin server
ipv6: origin server list is a single IPv6 address
ip_ipv6: origin server list is multiple IPv4 addresses and an IPv6 address
The following types of output parameters are added:
image: Cloud Infinite origin
ftp: legacy FTP origin, which is no longer maintained.
When modifying `Origins`, you need to enter the corresponding OriginType.
The IPv6 feature is not generally available yet. Please send in a whitelist application to use this feature.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOriginType(string $OriginType) Set Master origin server type
The following types are supported for input parameters:
domain: domain name type
cos: COS origin
ip: IP list used as origin server
ipv6: origin server list is a single IPv6 address
ip_ipv6: origin server list is multiple IPv4 addresses and an IPv6 address
The following types of output parameters are added:
image: Cloud Infinite origin
ftp: legacy FTP origin, which is no longer maintained.
When modifying `Origins`, you need to enter the corresponding OriginType.
The IPv6 feature is not generally available yet. Please send in a whitelist application to use this feature.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getServerName() Obtain Host header used when accessing the master origin server. If left empty, the acceleration domain name will be used by default.
If a wildcard domain name is accessed, then the sub-domain name during the access will be used by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setServerName(string $ServerName) Set Host header used when accessing the master origin server. If left empty, the acceleration domain name will be used by default.
If a wildcard domain name is accessed, then the sub-domain name during the access will be used by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCosPrivateAccess() Obtain When OriginType is COS, you can specify if access to private buckets is allowed.
Note: to enable this configuration, you need to first grant CDN access to the private bucket.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCosPrivateAccess(string $CosPrivateAccess) Set When OriginType is COS, you can specify if access to private buckets is allowed.
Note: to enable this configuration, you need to first grant CDN access to the private bucket.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getOriginPullProtocol() Obtain Origin-pull protocol configuration
http: forced HTTP origin-pull
follow: protocol follow origin-pull
https: forced HTTPS origin-pull. This only supports origin server port 443 for origin-pull.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOriginPullProtocol(string $OriginPullProtocol) Set Origin-pull protocol configuration
http: forced HTTP origin-pull
follow: protocol follow origin-pull
https: forced HTTPS origin-pull. This only supports origin server port 443 for origin-pull.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getBackupOrigins() Obtain Backup origin server list
When modifying the backup origin server, you need to enter the corresponding BackupOriginType.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBackupOrigins(array $BackupOrigins) Set Backup origin server list
When modifying the backup origin server, you need to enter the corresponding BackupOriginType.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getBackupOriginType() Obtain Backup origin server type, which supports the following types:
domain: domain name type
ip: IP list used as origin server
When modifying BackupOrigins, you need to enter the corresponding BackupOriginType.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBackupOriginType(string $BackupOriginType) Set Backup origin server type, which supports the following types:
domain: domain name type
ip: IP list used as origin server
When modifying BackupOrigins, you need to enter the corresponding BackupOriginType.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getBackupServerName() Obtain Host header used when accessing the backup origin server. If left empty, the ServerName of master origin server will be used by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBackupServerName(string $BackupServerName) Set Host header used when accessing the backup origin server. If left empty, the ServerName of master origin server will be used by default.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getBasePath() Obtain 
 * @method void setBasePath(string $BasePath) Set 
 * @method array getPathRules() Obtain Origin URL rewrite rule configuration
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setPathRules(array $PathRules) Set Origin URL rewrite rule configuration
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getPathBasedOrigin() Obtain 
 * @method void setPathBasedOrigin(array $PathBasedOrigin) Set 
 */
class Origin extends AbstractModel
{
    /**
     * @var array Master origin server list
When modifying the origin server, you need to enter the corresponding OriginType.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Origins;

    /**
     * @var string Master origin server type
The following types are supported for input parameters:
domain: domain name type
cos: COS origin
ip: IP list used as origin server
ipv6: origin server list is a single IPv6 address
ip_ipv6: origin server list is multiple IPv4 addresses and an IPv6 address
The following types of output parameters are added:
image: Cloud Infinite origin
ftp: legacy FTP origin, which is no longer maintained.
When modifying `Origins`, you need to enter the corresponding OriginType.
The IPv6 feature is not generally available yet. Please send in a whitelist application to use this feature.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OriginType;

    /**
     * @var string Host header used when accessing the master origin server. If left empty, the acceleration domain name will be used by default.
If a wildcard domain name is accessed, then the sub-domain name during the access will be used by default.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ServerName;

    /**
     * @var string When OriginType is COS, you can specify if access to private buckets is allowed.
Note: to enable this configuration, you need to first grant CDN access to the private bucket.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CosPrivateAccess;

    /**
     * @var string Origin-pull protocol configuration
http: forced HTTP origin-pull
follow: protocol follow origin-pull
https: forced HTTPS origin-pull. This only supports origin server port 443 for origin-pull.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OriginPullProtocol;

    /**
     * @var array Backup origin server list
When modifying the backup origin server, you need to enter the corresponding BackupOriginType.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $BackupOrigins;

    /**
     * @var string Backup origin server type, which supports the following types:
domain: domain name type
ip: IP list used as origin server
When modifying BackupOrigins, you need to enter the corresponding BackupOriginType.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $BackupOriginType;

    /**
     * @var string Host header used when accessing the backup origin server. If left empty, the ServerName of master origin server will be used by default.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $BackupServerName;

    /**
     * @var string 
     */
    public $BasePath;

    /**
     * @var array Origin URL rewrite rule configuration
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $PathRules;

    /**
     * @var array 
     */
    public $PathBasedOrigin;

    /**
     * @param array $Origins Master origin server list
When modifying the origin server, you need to enter the corresponding OriginType.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $OriginType Master origin server type
The following types are supported for input parameters:
domain: domain name type
cos: COS origin
ip: IP list used as origin server
ipv6: origin server list is a single IPv6 address
ip_ipv6: origin server list is multiple IPv4 addresses and an IPv6 address
The following types of output parameters are added:
image: Cloud Infinite origin
ftp: legacy FTP origin, which is no longer maintained.
When modifying `Origins`, you need to enter the corresponding OriginType.
The IPv6 feature is not generally available yet. Please send in a whitelist application to use this feature.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ServerName Host header used when accessing the master origin server. If left empty, the acceleration domain name will be used by default.
If a wildcard domain name is accessed, then the sub-domain name during the access will be used by default.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CosPrivateAccess When OriginType is COS, you can specify if access to private buckets is allowed.
Note: to enable this configuration, you need to first grant CDN access to the private bucket.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $OriginPullProtocol Origin-pull protocol configuration
http: forced HTTP origin-pull
follow: protocol follow origin-pull
https: forced HTTPS origin-pull. This only supports origin server port 443 for origin-pull.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $BackupOrigins Backup origin server list
When modifying the backup origin server, you need to enter the corresponding BackupOriginType.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $BackupOriginType Backup origin server type, which supports the following types:
domain: domain name type
ip: IP list used as origin server
When modifying BackupOrigins, you need to enter the corresponding BackupOriginType.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $BackupServerName Host header used when accessing the backup origin server. If left empty, the ServerName of master origin server will be used by default.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $BasePath 
     * @param array $PathRules Origin URL rewrite rule configuration
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $PathBasedOrigin 
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

        if (array_key_exists("CosPrivateAccess",$param) and $param["CosPrivateAccess"] !== null) {
            $this->CosPrivateAccess = $param["CosPrivateAccess"];
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

        if (array_key_exists("BasePath",$param) and $param["BasePath"] !== null) {
            $this->BasePath = $param["BasePath"];
        }

        if (array_key_exists("PathRules",$param) and $param["PathRules"] !== null) {
            $this->PathRules = [];
            foreach ($param["PathRules"] as $key => $value){
                $obj = new PathRule();
                $obj->deserialize($value);
                array_push($this->PathRules, $obj);
            }
        }

        if (array_key_exists("PathBasedOrigin",$param) and $param["PathBasedOrigin"] !== null) {
            $this->PathBasedOrigin = [];
            foreach ($param["PathBasedOrigin"] as $key => $value){
                $obj = new PathBasedOriginRule();
                $obj->deserialize($value);
                array_push($this->PathBasedOrigin, $obj);
            }
        }
    }
}
