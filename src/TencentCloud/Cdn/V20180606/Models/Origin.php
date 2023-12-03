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
+ Hot backup origin server specified as multiple IPs. Supported port range: 1-65535. Weight configuration is not supported.
+ Hot backup origin server origin-pull domain name configuration
 *
 * @method array getOrigins() Obtain List of primary origin servers
<font color=red>When modifying the origins, you need to specify `OriginType`.</font>
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setOrigins(array $Origins) Set List of primary origin servers
<font color=red>When modifying the origins, you need to specify `OriginType`.</font>
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getOriginType() Obtain Primary origin server type
<font color=red>This field is used together with `Origins`.</font>
Input:
`domain`: Domain name
`domainv6`: IPv6 domain name
`cos`: COS bucket address
`third_party`: Third-party object storage origin
`igtm`: IGTM origin
`ip`: IP address
`ipv6`: One IPv6 address
`ip_ipv6`: Multiple IPv4 addresses and one IPv6 address
`ip_domain`: IP addresses and domain names (only available to beta users)
`ip_domainv6`: Multiple IPv4 addresses and one IPv6 domain name
`ipv6_domain`: Multiple IPv6 addresses and one domain name
`ipv6_domainv6`: Multiple IPv6 addresses and one IPv6 domain name
`domain_domainv6`: Multiple IPv4 domain names and one IPv6 domain name
`ip_ipv6_domain`: Multiple IPv4 and IPv6 addresses and one domain name
`ip_ipv6_domainv6`: Multiple IPv4 and IPv6 addresses and one IPv6 domain name
`ip_domain_domainv6`: Multiple IPv4 addresses and IPv4 domain names and one IPv6 domain name
`ipv6_domain_domainv6`: Multiple IPv4 domain names and IPv6 addresses and one IPv6 domain name
`ip_ipv6_domain_domainv6`: Multiple IPv4 and IPv6 addresses and IPv4 domain names and one IPv6 domain name
Output:
`image`: Cloud Infinite origin
`ftp`: FTP origin (disused)
When modifying `Origins`, you need to specify `OriginType`.
The IPv6 feature is now only available to beta users. Submit a ticket if you need it.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setOriginType(string $OriginType) Set Primary origin server type
<font color=red>This field is used together with `Origins`.</font>
Input:
`domain`: Domain name
`domainv6`: IPv6 domain name
`cos`: COS bucket address
`third_party`: Third-party object storage origin
`igtm`: IGTM origin
`ip`: IP address
`ipv6`: One IPv6 address
`ip_ipv6`: Multiple IPv4 addresses and one IPv6 address
`ip_domain`: IP addresses and domain names (only available to beta users)
`ip_domainv6`: Multiple IPv4 addresses and one IPv6 domain name
`ipv6_domain`: Multiple IPv6 addresses and one domain name
`ipv6_domainv6`: Multiple IPv6 addresses and one IPv6 domain name
`domain_domainv6`: Multiple IPv4 domain names and one IPv6 domain name
`ip_ipv6_domain`: Multiple IPv4 and IPv6 addresses and one domain name
`ip_ipv6_domainv6`: Multiple IPv4 and IPv6 addresses and one IPv6 domain name
`ip_domain_domainv6`: Multiple IPv4 addresses and IPv4 domain names and one IPv6 domain name
`ipv6_domain_domainv6`: Multiple IPv4 domain names and IPv6 addresses and one IPv6 domain name
`ip_ipv6_domain_domainv6`: Multiple IPv4 and IPv6 addresses and IPv4 domain names and one IPv6 domain name
Output:
`image`: Cloud Infinite origin
`ftp`: FTP origin (disused)
When modifying `Origins`, you need to specify `OriginType`.
The IPv6 feature is now only available to beta users. Submit a ticket if you need it.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getServerName() Obtain Origin-pull host header.
<font color=red>This field is required when `OriginType=cos/third-party`.</font>
If not specified, this field defaults to the acceleration domain name.
For a wildcard domain name, the sub-domain name during the access is used by default.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setServerName(string $ServerName) Set Origin-pull host header.
<font color=red>This field is required when `OriginType=cos/third-party`.</font>
If not specified, this field defaults to the acceleration domain name.
For a wildcard domain name, the sub-domain name during the access is used by default.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getCosPrivateAccess() Obtain When OriginType is COS, you can specify if access to private buckets is allowed.
Note: To enable this configuration, you need to first grant CDN access to the private bucket. Values: `on` and `off`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCosPrivateAccess(string $CosPrivateAccess) Set When OriginType is COS, you can specify if access to private buckets is allowed.
Note: To enable this configuration, you need to first grant CDN access to the private bucket. Values: `on` and `off`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getOriginPullProtocol() Obtain Origin-pull protocol configuration
http: forced HTTP origin-pull
follow: protocol follow origin-pull
https: forced HTTPS origin-pull. This only supports origin server port 443 for origin-pull.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setOriginPullProtocol(string $OriginPullProtocol) Set Origin-pull protocol configuration
http: forced HTTP origin-pull
follow: protocol follow origin-pull
https: forced HTTPS origin-pull. This only supports origin server port 443 for origin-pull.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getBackupOrigins() Obtain List of secondary origin servers
<font color=red>This field is used together with `BackupOriginType`.</font>
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setBackupOrigins(array $BackupOrigins) Set List of secondary origin servers
<font color=red>This field is used together with `BackupOriginType`.</font>
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getBackupOriginType() Obtain Secondary origin type
<font color=red>This field is used together with `BackupOrigins`.</font>
Values:
`domain`: Domain name
`ip`: IP address
The following secondary origin types are only available to beta users. Submit a ticket to use it.
`ipv6_domain`: Multiple IPv6 addresses and one domain name
`ip_ipv6`: Multiple IPv4 addresses and one IPv6 address
`ipv6_domain`: Multiple IPv6 addresses and one domain name
`ip_ipv6_domain`: Multiple IPv4 and IPv6 addresses and one domain name
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setBackupOriginType(string $BackupOriginType) Set Secondary origin type
<font color=red>This field is used together with `BackupOrigins`.</font>
Values:
`domain`: Domain name
`ip`: IP address
The following secondary origin types are only available to beta users. Submit a ticket to use it.
`ipv6_domain`: Multiple IPv6 addresses and one domain name
`ip_ipv6`: Multiple IPv4 addresses and one IPv6 address
`ipv6_domain`: Multiple IPv6 addresses and one domain name
`ip_ipv6_domain`: Multiple IPv4 and IPv6 addresses and one domain name
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getBackupServerName() Obtain Host header used when accessing the backup origin server. If it is left empty, the `ServerName` of primary origin server will be used by default.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setBackupServerName(string $BackupServerName) Set Host header used when accessing the backup origin server. If it is left empty, the `ServerName` of primary origin server will be used by default.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getBasePath() Obtain Origin-pull path
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setBasePath(string $BasePath) Set Origin-pull path
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getPathRules() Obtain Origin-pull path rewriting configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setPathRules(array $PathRules) Set Origin-pull path rewriting configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getPathBasedOrigin() Obtain Path-based origin-pull configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setPathBasedOrigin(array $PathBasedOrigin) Set Path-based origin-pull configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method OriginSni getSni() Obtain HTTPS origin-pull SNI
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSni(OriginSni $Sni) Set HTTPS origin-pull SNI
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method AdvanceHttps getAdvanceHttps() Obtain HTTPS advanced origin-pull configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setAdvanceHttps(AdvanceHttps $AdvanceHttps) Set HTTPS advanced origin-pull configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getOriginCompany() Obtain Third-party object storage service vendor
<font color=red>This field is required when `OriginType=third-party`.</font>
Values:
`aws_s3`: AWS S3
`ali_oss`: Alibaba Cloud OSS
`hw_obs`: Huawei Cloud OBS
`Qiniu_kodo`: Qiniu Kodo
`Others`: Other object storage service vendors. Only AWS signature-compatible object storage services are supported, such as Tencent Cloud COS for Finance Zone.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setOriginCompany(string $OriginCompany) Set Third-party object storage service vendor
<font color=red>This field is required when `OriginType=third-party`.</font>
Values:
`aws_s3`: AWS S3
`ali_oss`: Alibaba Cloud OSS
`hw_obs`: Huawei Cloud OBS
`Qiniu_kodo`: Qiniu Kodo
`Others`: Other object storage service vendors. Only AWS signature-compatible object storage services are supported, such as Tencent Cloud COS for Finance Zone.
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class Origin extends AbstractModel
{
    /**
     * @var array List of primary origin servers
<font color=red>When modifying the origins, you need to specify `OriginType`.</font>
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Origins;

    /**
     * @var string Primary origin server type
<font color=red>This field is used together with `Origins`.</font>
Input:
`domain`: Domain name
`domainv6`: IPv6 domain name
`cos`: COS bucket address
`third_party`: Third-party object storage origin
`igtm`: IGTM origin
`ip`: IP address
`ipv6`: One IPv6 address
`ip_ipv6`: Multiple IPv4 addresses and one IPv6 address
`ip_domain`: IP addresses and domain names (only available to beta users)
`ip_domainv6`: Multiple IPv4 addresses and one IPv6 domain name
`ipv6_domain`: Multiple IPv6 addresses and one domain name
`ipv6_domainv6`: Multiple IPv6 addresses and one IPv6 domain name
`domain_domainv6`: Multiple IPv4 domain names and one IPv6 domain name
`ip_ipv6_domain`: Multiple IPv4 and IPv6 addresses and one domain name
`ip_ipv6_domainv6`: Multiple IPv4 and IPv6 addresses and one IPv6 domain name
`ip_domain_domainv6`: Multiple IPv4 addresses and IPv4 domain names and one IPv6 domain name
`ipv6_domain_domainv6`: Multiple IPv4 domain names and IPv6 addresses and one IPv6 domain name
`ip_ipv6_domain_domainv6`: Multiple IPv4 and IPv6 addresses and IPv4 domain names and one IPv6 domain name
Output:
`image`: Cloud Infinite origin
`ftp`: FTP origin (disused)
When modifying `Origins`, you need to specify `OriginType`.
The IPv6 feature is now only available to beta users. Submit a ticket if you need it.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $OriginType;

    /**
     * @var string Origin-pull host header.
<font color=red>This field is required when `OriginType=cos/third-party`.</font>
If not specified, this field defaults to the acceleration domain name.
For a wildcard domain name, the sub-domain name during the access is used by default.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $ServerName;

    /**
     * @var string When OriginType is COS, you can specify if access to private buckets is allowed.
Note: To enable this configuration, you need to first grant CDN access to the private bucket. Values: `on` and `off`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $CosPrivateAccess;

    /**
     * @var string Origin-pull protocol configuration
http: forced HTTP origin-pull
follow: protocol follow origin-pull
https: forced HTTPS origin-pull. This only supports origin server port 443 for origin-pull.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $OriginPullProtocol;

    /**
     * @var array List of secondary origin servers
<font color=red>This field is used together with `BackupOriginType`.</font>
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $BackupOrigins;

    /**
     * @var string Secondary origin type
<font color=red>This field is used together with `BackupOrigins`.</font>
Values:
`domain`: Domain name
`ip`: IP address
The following secondary origin types are only available to beta users. Submit a ticket to use it.
`ipv6_domain`: Multiple IPv6 addresses and one domain name
`ip_ipv6`: Multiple IPv4 addresses and one IPv6 address
`ipv6_domain`: Multiple IPv6 addresses and one domain name
`ip_ipv6_domain`: Multiple IPv4 and IPv6 addresses and one domain name
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $BackupOriginType;

    /**
     * @var string Host header used when accessing the backup origin server. If it is left empty, the `ServerName` of primary origin server will be used by default.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $BackupServerName;

    /**
     * @var string Origin-pull path
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $BasePath;

    /**
     * @var array Origin-pull path rewriting configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $PathRules;

    /**
     * @var array Path-based origin-pull configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $PathBasedOrigin;

    /**
     * @var OriginSni HTTPS origin-pull SNI
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Sni;

    /**
     * @var AdvanceHttps HTTPS advanced origin-pull configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $AdvanceHttps;

    /**
     * @var string Third-party object storage service vendor
<font color=red>This field is required when `OriginType=third-party`.</font>
Values:
`aws_s3`: AWS S3
`ali_oss`: Alibaba Cloud OSS
`hw_obs`: Huawei Cloud OBS
`Qiniu_kodo`: Qiniu Kodo
`Others`: Other object storage service vendors. Only AWS signature-compatible object storage services are supported, such as Tencent Cloud COS for Finance Zone.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $OriginCompany;

    /**
     * @param array $Origins List of primary origin servers
<font color=red>When modifying the origins, you need to specify `OriginType`.</font>
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $OriginType Primary origin server type
<font color=red>This field is used together with `Origins`.</font>
Input:
`domain`: Domain name
`domainv6`: IPv6 domain name
`cos`: COS bucket address
`third_party`: Third-party object storage origin
`igtm`: IGTM origin
`ip`: IP address
`ipv6`: One IPv6 address
`ip_ipv6`: Multiple IPv4 addresses and one IPv6 address
`ip_domain`: IP addresses and domain names (only available to beta users)
`ip_domainv6`: Multiple IPv4 addresses and one IPv6 domain name
`ipv6_domain`: Multiple IPv6 addresses and one domain name
`ipv6_domainv6`: Multiple IPv6 addresses and one IPv6 domain name
`domain_domainv6`: Multiple IPv4 domain names and one IPv6 domain name
`ip_ipv6_domain`: Multiple IPv4 and IPv6 addresses and one domain name
`ip_ipv6_domainv6`: Multiple IPv4 and IPv6 addresses and one IPv6 domain name
`ip_domain_domainv6`: Multiple IPv4 addresses and IPv4 domain names and one IPv6 domain name
`ipv6_domain_domainv6`: Multiple IPv4 domain names and IPv6 addresses and one IPv6 domain name
`ip_ipv6_domain_domainv6`: Multiple IPv4 and IPv6 addresses and IPv4 domain names and one IPv6 domain name
Output:
`image`: Cloud Infinite origin
`ftp`: FTP origin (disused)
When modifying `Origins`, you need to specify `OriginType`.
The IPv6 feature is now only available to beta users. Submit a ticket if you need it.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $ServerName Origin-pull host header.
<font color=red>This field is required when `OriginType=cos/third-party`.</font>
If not specified, this field defaults to the acceleration domain name.
For a wildcard domain name, the sub-domain name during the access is used by default.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $CosPrivateAccess When OriginType is COS, you can specify if access to private buckets is allowed.
Note: To enable this configuration, you need to first grant CDN access to the private bucket. Values: `on` and `off`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $OriginPullProtocol Origin-pull protocol configuration
http: forced HTTP origin-pull
follow: protocol follow origin-pull
https: forced HTTPS origin-pull. This only supports origin server port 443 for origin-pull.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $BackupOrigins List of secondary origin servers
<font color=red>This field is used together with `BackupOriginType`.</font>
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $BackupOriginType Secondary origin type
<font color=red>This field is used together with `BackupOrigins`.</font>
Values:
`domain`: Domain name
`ip`: IP address
The following secondary origin types are only available to beta users. Submit a ticket to use it.
`ipv6_domain`: Multiple IPv6 addresses and one domain name
`ip_ipv6`: Multiple IPv4 addresses and one IPv6 address
`ipv6_domain`: Multiple IPv6 addresses and one domain name
`ip_ipv6_domain`: Multiple IPv4 and IPv6 addresses and one domain name
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $BackupServerName Host header used when accessing the backup origin server. If it is left empty, the `ServerName` of primary origin server will be used by default.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $BasePath Origin-pull path
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $PathRules Origin-pull path rewriting configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $PathBasedOrigin Path-based origin-pull configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param OriginSni $Sni HTTPS origin-pull SNI
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param AdvanceHttps $AdvanceHttps HTTPS advanced origin-pull configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $OriginCompany Third-party object storage service vendor
<font color=red>This field is required when `OriginType=third-party`.</font>
Values:
`aws_s3`: AWS S3
`ali_oss`: Alibaba Cloud OSS
`hw_obs`: Huawei Cloud OBS
`Qiniu_kodo`: Qiniu Kodo
`Others`: Other object storage service vendors. Only AWS signature-compatible object storage services are supported, such as Tencent Cloud COS for Finance Zone.
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

        if (array_key_exists("Sni",$param) and $param["Sni"] !== null) {
            $this->Sni = new OriginSni();
            $this->Sni->deserialize($param["Sni"]);
        }

        if (array_key_exists("AdvanceHttps",$param) and $param["AdvanceHttps"] !== null) {
            $this->AdvanceHttps = new AdvanceHttps();
            $this->AdvanceHttps->deserialize($param["AdvanceHttps"]);
        }

        if (array_key_exists("OriginCompany",$param) and $param["OriginCompany"] !== null) {
            $this->OriginCompany = $param["OriginCompany"];
        }
    }
}
