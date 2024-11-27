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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of domain names protected by SaaS WAF
 *
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method string getDomainId() Obtain Unique domain name ID
 * @method void setDomainId(string $DomainId) Set Unique domain name ID
 * @method string getInstanceId() Obtain Unique instance ID of the domain name
 * @method void setInstanceId(string $InstanceId) Set Unique instance ID of the domain name
 * @method string getEdition() Obtain Instance type of the domain name
 * @method void setEdition(string $Edition) Set Instance type of the domain name
 * @method string getInstanceName() Obtain Instance name of the domain name
 * @method void setInstanceName(string $InstanceName) Set Instance name of the domain name
 * @method string getCert() Obtain Certificate
 * @method void setCert(string $Cert) Set Certificate
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method integer getEngine() Obtain Status of the rule engine and AI engine
1: initial status. Interception for the rule engine and disabled for the AI engine.
10: observation for the rule engine and disabled for the AI engine
11: observation for both the rule engine and AI engine
12: observation for the rule engine and interception for the AI engine
20: interception for the rule engine and disabled for the AI engine
21: interception for the rule engine and observation for the AI engine
22: interception for both the rule engine and AI engine
 * @method void setEngine(integer $Engine) Set Status of the rule engine and AI engine
1: initial status. Interception for the rule engine and disabled for the AI engine.
10: observation for the rule engine and disabled for the AI engine
11: observation for both the rule engine and AI engine
12: observation for the rule engine and interception for the AI engine
20: interception for the rule engine and disabled for the AI engine
21: interception for the rule engine and observation for the AI engine
22: interception for both the rule engine and AI engine
 * @method integer getHttpsRewrite() Obtain Whether to enable forced redirection from HTTP to HTTPS
0: do not force redirection
1: enable forced redirection
 * @method void setHttpsRewrite(integer $HttpsRewrite) Set Whether to enable forced redirection from HTTP to HTTPS
0: do not force redirection
1: enable forced redirection
 * @method string getHttpsUpstreamPort() Obtain HTTPS origin-pull port
 * @method void setHttpsUpstreamPort(string $HttpsUpstreamPort) Set HTTPS origin-pull port
 * @method integer getIsCdn() Obtain Whether a layer-7 proxy service is deployed before WAF
0: No proxy service deployed
1: Proxy service deployed, and WAF will use XFF to obtain the client IP address
2: Proxy service deployed and WAF will use remote_addr to obtain the client IP address
3: Proxy service deployed and WAF will use the custom header in ip_headers to obtain the client IP address
 * @method void setIsCdn(integer $IsCdn) Set Whether a layer-7 proxy service is deployed before WAF
0: No proxy service deployed
1: Proxy service deployed, and WAF will use XFF to obtain the client IP address
2: Proxy service deployed and WAF will use remote_addr to obtain the client IP address
3: Proxy service deployed and WAF will use the custom header in ip_headers to obtain the client IP address
 * @method integer getIsGray() Obtain This parameter has been deprecated.
 * @method void setIsGray(integer $IsGray) Set This parameter has been deprecated.
 * @method integer getIsHttp2() Obtain Whether to enable HTTP2. You should enable HTTPS as well.
0: disable
1: enable
 * @method void setIsHttp2(integer $IsHttp2) Set Whether to enable HTTP2. You should enable HTTPS as well.
0: disable
1: enable
 * @method integer getIsWebsocket() Obtain Whether to enable support for WebSocket
0: disable
1: enable
 * @method void setIsWebsocket(integer $IsWebsocket) Set Whether to enable support for WebSocket
0: disable
1: enable
 * @method integer getLoadBalance() Obtain Load balancing policy for origin-pull
0: round-robin
1: IP hash
2: weighted round-robin
 * @method void setLoadBalance(integer $LoadBalance) Set Load balancing policy for origin-pull
0: round-robin
1: IP hash
2: weighted round-robin
 * @method integer getMode() Obtain Protection mode
0: observation mode
1: interception mode
 * @method void setMode(integer $Mode) Set Protection mode
0: observation mode
1: interception mode
 * @method string getPrivateKey() Obtain Private key of the self-owned certificate
 * @method void setPrivateKey(string $PrivateKey) Set Private key of the self-owned certificate
 * @method string getSSLId() Obtain When CertType is 2, this parameter must be filled, indicating the certificate ID hosted on Tencent Cloud's SSL platform
 * @method void setSSLId(string $SSLId) Set When CertType is 2, this parameter must be filled, indicating the certificate ID hosted on Tencent Cloud's SSL platform
 * @method string getUpstreamDomain() Obtain Origin domain when domain is back to source. When UpstreamType=1, this field needs to be filled
 * @method void setUpstreamDomain(string $UpstreamDomain) Set Origin domain when domain is back to source. When UpstreamType=1, this field needs to be filled
 * @method integer getUpstreamType() Obtain Origin-pull type
0: origin-pull via IP address
1: origin-pull via domain name
 * @method void setUpstreamType(integer $UpstreamType) Set Origin-pull type
0: origin-pull via IP address
1: origin-pull via domain name
 * @method array getSrcList() Obtain Origin IP list when IP is back to source. When UpstreamType=0, this field is required
 * @method void setSrcList(array $SrcList) Set Origin IP list when IP is back to source. When UpstreamType=0, this field is required
 * @method array getPorts() Obtain  Domain name port configuration
 * @method void setPorts(array $Ports) Set  Domain name port configuration
 * @method integer getCertType() Obtain Certificate type
0: no certificate, with only the HTTP listening port configured
1: self-owned certificate
2: managed certificate
 * @method void setCertType(integer $CertType) Set Certificate type
0: no certificate, with only the HTTP listening port configured
1: self-owned certificate
2: managed certificate
 * @method string getUpstreamScheme() Obtain Origin-pull protocol for HTTPS when the service is configured with an HTTPS port
http: Use the HTTP protocol for origin-pull. It is used together with HttpsUpstreamPort.
https: Use the HTTPS protocol for origin-pull.
 * @method void setUpstreamScheme(string $UpstreamScheme) Set Origin-pull protocol for HTTPS when the service is configured with an HTTPS port
http: Use the HTTP protocol for origin-pull. It is used together with HttpsUpstreamPort.
https: Use the HTTPS protocol for origin-pull.
 * @method integer getCls() Obtain Whether to enable access logging
0: disable
1: enable
 * @method void setCls(integer $Cls) Set Whether to enable access logging
0: disable
1: enable
 * @method string getCname() Obtain CNAME record for accessing a domain name protected by SaaS WAF
 * @method void setCname(string $Cname) Set CNAME record for accessing a domain name protected by SaaS WAF
 * @method integer getIsKeepAlive() Obtain Whether to enable persistent connection
0: non-persistent connection
1: persistent connection
 * @method void setIsKeepAlive(integer $IsKeepAlive) Set Whether to enable persistent connection
0: non-persistent connection
1: persistent connection
 * @method integer getActiveCheck() Obtain Whether to enable proactive health check
0: disable
1: enable
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setActiveCheck(integer $ActiveCheck) Set Whether to enable proactive health check
0: disable
1: enable
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTLSVersion() Obtain TLS version information

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTLSVersion(integer $TLSVersion) Set TLS version information

Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getCiphers() Obtain Custom encryption suite list. When CipherTemplate is 3, this field is required, indicating the custom encryption suite, value obtained through DescribeCiphersDetail API.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCiphers(array $Ciphers) Set Custom encryption suite list. When CipherTemplate is 3, this field is required, indicating the custom encryption suite, value obtained through DescribeCiphersDetail API.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCipherTemplate() Obtain Cipher suite template
0: default template
1: general template
2: security template
3: custom template
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCipherTemplate(integer $CipherTemplate) Set Cipher suite template
0: default template
1: general template
2: security template
3: custom template
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getProxyReadTimeout() Obtain Read timeout between WAF and origin server, 300s by default.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProxyReadTimeout(integer $ProxyReadTimeout) Set Read timeout between WAF and origin server, 300s by default.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getProxySendTimeout() Obtain WAF and origin server write timeout, 300s by default.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProxySendTimeout(integer $ProxySendTimeout) Set WAF and origin server write timeout, 300s by default.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSniType() Obtain SNI type during WAF origin-pull
0: Disable SNI and do not configure server_name in client_hello.
1: Enable SNI. server_name in client_hello is a protected domain name.
2: Enable SNI. SNI is the origin server domain name during the domain name origin-pull.
3: Enable SNI. SNI is a custom domain name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSniType(integer $SniType) Set SNI type during WAF origin-pull
0: Disable SNI and do not configure server_name in client_hello.
1: Enable SNI. server_name in client_hello is a protected domain name.
2: Enable SNI. SNI is the origin server domain name during the domain name origin-pull.
3: Enable SNI. SNI is a custom domain name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSniHost() Obtain When SniType=3, this parameter is required, indicating a custom SNI;

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSniHost(string $SniHost) Set When SniType=3, this parameter is required, indicating a custom SNI;

Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getWeights() Obtain Weight of the IP address for origin-pull
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWeights(array $Weights) Set Weight of the IP address for origin-pull
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getIpHeaders() Obtain IsCdn=3 indicates custom header

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIpHeaders(array $IpHeaders) Set IsCdn=3 indicates custom header

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getXFFReset() Obtain Whether to enable XFF reset
0: disable
1: enable
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setXFFReset(integer $XFFReset) Set Whether to enable XFF reset
0: disable
1: enable
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNote() Obtain Domain name remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNote(string $Note) Set Domain name remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpstreamHost() Obtain Custom origin-pull host. The default value is a null string, indicating that a protected domain name is used as the origin-pull host.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpstreamHost(string $UpstreamHost) Set Custom origin-pull host. The default value is a null string, indicating that a protected domain name is used as the origin-pull host.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLevel() Obtain Protection rule
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLevel(string $Level) Set Protection rule
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getProxyBuffer() Obtain Whether to enable caching. 0: disable; 1: enable.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProxyBuffer(integer $ProxyBuffer) Set Whether to enable caching. 0: disable; 1: enable.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getGmType() Obtain Whether to enable SM. 0: do not enable SM; 1: add support for SM based on the existing TLS option; 2: enable SM and support only SM client access.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGmType(integer $GmType) Set Whether to enable SM. 0: do not enable SM; 1: add support for SM based on the existing TLS option; 2: enable SM and support only SM client access.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getGmCertType() Obtain SM certificate type. 0: no SM certificate is available; 1: the certificate is a self-owned SM certificate; 2: the certificate is a managed SM certificate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGmCertType(integer $GmCertType) Set SM certificate type. 0: no SM certificate is available; 1: the certificate is a self-owned SM certificate; 2: the certificate is a managed SM certificate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGmCert() Obtain When GmCertType is 1, this parameter needs to be set, indicating the certificate chain of the self-owned SM certificate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGmCert(string $GmCert) Set When GmCertType is 1, this parameter needs to be set, indicating the certificate chain of the self-owned SM certificate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGmPrivateKey() Obtain When GmCertType is 1, this parameter needs to be set, indicating the private key of the self-owned SM certificate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGmPrivateKey(string $GmPrivateKey) Set When GmCertType is 1, this parameter needs to be set, indicating the private key of the self-owned SM certificate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGmEncCert() Obtain When GmCertType is 1, this parameter needs to be set, indicating the encryption certificate of the self-owned SM certificate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGmEncCert(string $GmEncCert) Set When GmCertType is 1, this parameter needs to be set, indicating the encryption certificate of the self-owned SM certificate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGmEncPrivateKey() Obtain When GmCertType is 1, this parameter needs to be set, indicating the private key of the encryption certificate for the self-owned SM certificate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGmEncPrivateKey(string $GmEncPrivateKey) Set When GmCertType is 1, this parameter needs to be set, indicating the private key of the encryption certificate for the self-owned SM certificate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGmSSLId() Obtain When GmCertType is 2, this parameter needs to be set, indicating the ID of the certificate managed by the Tencent Cloud SSL platform.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGmSSLId(string $GmSSLId) Set When GmCertType is 2, this parameter needs to be set, indicating the ID of the certificate managed by the Tencent Cloud SSL platform.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getLabels() Obtain Domain name tag.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLabels(array $Labels) Set Domain name tag.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DomainsPartInfo extends AbstractModel
{
    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var string Unique domain name ID
     */
    public $DomainId;

    /**
     * @var string Unique instance ID of the domain name
     */
    public $InstanceId;

    /**
     * @var string Instance type of the domain name
     */
    public $Edition;

    /**
     * @var string Instance name of the domain name
     */
    public $InstanceName;

    /**
     * @var string Certificate
     */
    public $Cert;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var integer Status of the rule engine and AI engine
1: initial status. Interception for the rule engine and disabled for the AI engine.
10: observation for the rule engine and disabled for the AI engine
11: observation for both the rule engine and AI engine
12: observation for the rule engine and interception for the AI engine
20: interception for the rule engine and disabled for the AI engine
21: interception for the rule engine and observation for the AI engine
22: interception for both the rule engine and AI engine
     */
    public $Engine;

    /**
     * @var integer Whether to enable forced redirection from HTTP to HTTPS
0: do not force redirection
1: enable forced redirection
     */
    public $HttpsRewrite;

    /**
     * @var string HTTPS origin-pull port
     */
    public $HttpsUpstreamPort;

    /**
     * @var integer Whether a layer-7 proxy service is deployed before WAF
0: No proxy service deployed
1: Proxy service deployed, and WAF will use XFF to obtain the client IP address
2: Proxy service deployed and WAF will use remote_addr to obtain the client IP address
3: Proxy service deployed and WAF will use the custom header in ip_headers to obtain the client IP address
     */
    public $IsCdn;

    /**
     * @var integer This parameter has been deprecated.
     */
    public $IsGray;

    /**
     * @var integer Whether to enable HTTP2. You should enable HTTPS as well.
0: disable
1: enable
     */
    public $IsHttp2;

    /**
     * @var integer Whether to enable support for WebSocket
0: disable
1: enable
     */
    public $IsWebsocket;

    /**
     * @var integer Load balancing policy for origin-pull
0: round-robin
1: IP hash
2: weighted round-robin
     */
    public $LoadBalance;

    /**
     * @var integer Protection mode
0: observation mode
1: interception mode
     */
    public $Mode;

    /**
     * @var string Private key of the self-owned certificate
     */
    public $PrivateKey;

    /**
     * @var string When CertType is 2, this parameter must be filled, indicating the certificate ID hosted on Tencent Cloud's SSL platform
     */
    public $SSLId;

    /**
     * @var string Origin domain when domain is back to source. When UpstreamType=1, this field needs to be filled
     */
    public $UpstreamDomain;

    /**
     * @var integer Origin-pull type
0: origin-pull via IP address
1: origin-pull via domain name
     */
    public $UpstreamType;

    /**
     * @var array Origin IP list when IP is back to source. When UpstreamType=0, this field is required
     */
    public $SrcList;

    /**
     * @var array  Domain name port configuration
     */
    public $Ports;

    /**
     * @var integer Certificate type
0: no certificate, with only the HTTP listening port configured
1: self-owned certificate
2: managed certificate
     */
    public $CertType;

    /**
     * @var string Origin-pull protocol for HTTPS when the service is configured with an HTTPS port
http: Use the HTTP protocol for origin-pull. It is used together with HttpsUpstreamPort.
https: Use the HTTPS protocol for origin-pull.
     */
    public $UpstreamScheme;

    /**
     * @var integer Whether to enable access logging
0: disable
1: enable
     */
    public $Cls;

    /**
     * @var string CNAME record for accessing a domain name protected by SaaS WAF
     */
    public $Cname;

    /**
     * @var integer Whether to enable persistent connection
0: non-persistent connection
1: persistent connection
     */
    public $IsKeepAlive;

    /**
     * @var integer Whether to enable proactive health check
0: disable
1: enable
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ActiveCheck;

    /**
     * @var integer TLS version information

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TLSVersion;

    /**
     * @var array Custom encryption suite list. When CipherTemplate is 3, this field is required, indicating the custom encryption suite, value obtained through DescribeCiphersDetail API.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Ciphers;

    /**
     * @var integer Cipher suite template
0: default template
1: general template
2: security template
3: custom template
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CipherTemplate;

    /**
     * @var integer Read timeout between WAF and origin server, 300s by default.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProxyReadTimeout;

    /**
     * @var integer WAF and origin server write timeout, 300s by default.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProxySendTimeout;

    /**
     * @var integer SNI type during WAF origin-pull
0: Disable SNI and do not configure server_name in client_hello.
1: Enable SNI. server_name in client_hello is a protected domain name.
2: Enable SNI. SNI is the origin server domain name during the domain name origin-pull.
3: Enable SNI. SNI is a custom domain name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SniType;

    /**
     * @var string When SniType=3, this parameter is required, indicating a custom SNI;

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SniHost;

    /**
     * @var array Weight of the IP address for origin-pull
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Weights;

    /**
     * @var array IsCdn=3 indicates custom header

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IpHeaders;

    /**
     * @var integer Whether to enable XFF reset
0: disable
1: enable
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $XFFReset;

    /**
     * @var string Domain name remarks
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Note;

    /**
     * @var string Custom origin-pull host. The default value is a null string, indicating that a protected domain name is used as the origin-pull host.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpstreamHost;

    /**
     * @var string Protection rule
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Level;

    /**
     * @var integer Whether to enable caching. 0: disable; 1: enable.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProxyBuffer;

    /**
     * @var integer Whether to enable SM. 0: do not enable SM; 1: add support for SM based on the existing TLS option; 2: enable SM and support only SM client access.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GmType;

    /**
     * @var integer SM certificate type. 0: no SM certificate is available; 1: the certificate is a self-owned SM certificate; 2: the certificate is a managed SM certificate.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GmCertType;

    /**
     * @var string When GmCertType is 1, this parameter needs to be set, indicating the certificate chain of the self-owned SM certificate.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GmCert;

    /**
     * @var string When GmCertType is 1, this parameter needs to be set, indicating the private key of the self-owned SM certificate.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GmPrivateKey;

    /**
     * @var string When GmCertType is 1, this parameter needs to be set, indicating the encryption certificate of the self-owned SM certificate.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GmEncCert;

    /**
     * @var string When GmCertType is 1, this parameter needs to be set, indicating the private key of the encryption certificate for the self-owned SM certificate.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GmEncPrivateKey;

    /**
     * @var string When GmCertType is 2, this parameter needs to be set, indicating the ID of the certificate managed by the Tencent Cloud SSL platform.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GmSSLId;

    /**
     * @var array Domain name tag.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Labels;

    /**
     * @param string $Domain Domain name
     * @param string $DomainId Unique domain name ID
     * @param string $InstanceId Unique instance ID of the domain name
     * @param string $Edition Instance type of the domain name
     * @param string $InstanceName Instance name of the domain name
     * @param string $Cert Certificate
     * @param string $CreateTime Creation time
     * @param integer $Engine Status of the rule engine and AI engine
1: initial status. Interception for the rule engine and disabled for the AI engine.
10: observation for the rule engine and disabled for the AI engine
11: observation for both the rule engine and AI engine
12: observation for the rule engine and interception for the AI engine
20: interception for the rule engine and disabled for the AI engine
21: interception for the rule engine and observation for the AI engine
22: interception for both the rule engine and AI engine
     * @param integer $HttpsRewrite Whether to enable forced redirection from HTTP to HTTPS
0: do not force redirection
1: enable forced redirection
     * @param string $HttpsUpstreamPort HTTPS origin-pull port
     * @param integer $IsCdn Whether a layer-7 proxy service is deployed before WAF
0: No proxy service deployed
1: Proxy service deployed, and WAF will use XFF to obtain the client IP address
2: Proxy service deployed and WAF will use remote_addr to obtain the client IP address
3: Proxy service deployed and WAF will use the custom header in ip_headers to obtain the client IP address
     * @param integer $IsGray This parameter has been deprecated.
     * @param integer $IsHttp2 Whether to enable HTTP2. You should enable HTTPS as well.
0: disable
1: enable
     * @param integer $IsWebsocket Whether to enable support for WebSocket
0: disable
1: enable
     * @param integer $LoadBalance Load balancing policy for origin-pull
0: round-robin
1: IP hash
2: weighted round-robin
     * @param integer $Mode Protection mode
0: observation mode
1: interception mode
     * @param string $PrivateKey Private key of the self-owned certificate
     * @param string $SSLId When CertType is 2, this parameter must be filled, indicating the certificate ID hosted on Tencent Cloud's SSL platform
     * @param string $UpstreamDomain Origin domain when domain is back to source. When UpstreamType=1, this field needs to be filled
     * @param integer $UpstreamType Origin-pull type
0: origin-pull via IP address
1: origin-pull via domain name
     * @param array $SrcList Origin IP list when IP is back to source. When UpstreamType=0, this field is required
     * @param array $Ports  Domain name port configuration
     * @param integer $CertType Certificate type
0: no certificate, with only the HTTP listening port configured
1: self-owned certificate
2: managed certificate
     * @param string $UpstreamScheme Origin-pull protocol for HTTPS when the service is configured with an HTTPS port
http: Use the HTTP protocol for origin-pull. It is used together with HttpsUpstreamPort.
https: Use the HTTPS protocol for origin-pull.
     * @param integer $Cls Whether to enable access logging
0: disable
1: enable
     * @param string $Cname CNAME record for accessing a domain name protected by SaaS WAF
     * @param integer $IsKeepAlive Whether to enable persistent connection
0: non-persistent connection
1: persistent connection
     * @param integer $ActiveCheck Whether to enable proactive health check
0: disable
1: enable
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TLSVersion TLS version information

Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Ciphers Custom encryption suite list. When CipherTemplate is 3, this field is required, indicating the custom encryption suite, value obtained through DescribeCiphersDetail API.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CipherTemplate Cipher suite template
0: default template
1: general template
2: security template
3: custom template
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ProxyReadTimeout Read timeout between WAF and origin server, 300s by default.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ProxySendTimeout WAF and origin server write timeout, 300s by default.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SniType SNI type during WAF origin-pull
0: Disable SNI and do not configure server_name in client_hello.
1: Enable SNI. server_name in client_hello is a protected domain name.
2: Enable SNI. SNI is the origin server domain name during the domain name origin-pull.
3: Enable SNI. SNI is a custom domain name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SniHost When SniType=3, this parameter is required, indicating a custom SNI;

Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Weights Weight of the IP address for origin-pull
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $IpHeaders IsCdn=3 indicates custom header

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $XFFReset Whether to enable XFF reset
0: disable
1: enable
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Note Domain name remarks
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpstreamHost Custom origin-pull host. The default value is a null string, indicating that a protected domain name is used as the origin-pull host.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Level Protection rule
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ProxyBuffer Whether to enable caching. 0: disable; 1: enable.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $GmType Whether to enable SM. 0: do not enable SM; 1: add support for SM based on the existing TLS option; 2: enable SM and support only SM client access.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $GmCertType SM certificate type. 0: no SM certificate is available; 1: the certificate is a self-owned SM certificate; 2: the certificate is a managed SM certificate.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GmCert When GmCertType is 1, this parameter needs to be set, indicating the certificate chain of the self-owned SM certificate.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GmPrivateKey When GmCertType is 1, this parameter needs to be set, indicating the private key of the self-owned SM certificate.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GmEncCert When GmCertType is 1, this parameter needs to be set, indicating the encryption certificate of the self-owned SM certificate.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GmEncPrivateKey When GmCertType is 1, this parameter needs to be set, indicating the private key of the encryption certificate for the self-owned SM certificate.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GmSSLId When GmCertType is 2, this parameter needs to be set, indicating the ID of the certificate managed by the Tencent Cloud SSL platform.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Labels Domain name tag.
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Cert",$param) and $param["Cert"] !== null) {
            $this->Cert = $param["Cert"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Engine",$param) and $param["Engine"] !== null) {
            $this->Engine = $param["Engine"];
        }

        if (array_key_exists("HttpsRewrite",$param) and $param["HttpsRewrite"] !== null) {
            $this->HttpsRewrite = $param["HttpsRewrite"];
        }

        if (array_key_exists("HttpsUpstreamPort",$param) and $param["HttpsUpstreamPort"] !== null) {
            $this->HttpsUpstreamPort = $param["HttpsUpstreamPort"];
        }

        if (array_key_exists("IsCdn",$param) and $param["IsCdn"] !== null) {
            $this->IsCdn = $param["IsCdn"];
        }

        if (array_key_exists("IsGray",$param) and $param["IsGray"] !== null) {
            $this->IsGray = $param["IsGray"];
        }

        if (array_key_exists("IsHttp2",$param) and $param["IsHttp2"] !== null) {
            $this->IsHttp2 = $param["IsHttp2"];
        }

        if (array_key_exists("IsWebsocket",$param) and $param["IsWebsocket"] !== null) {
            $this->IsWebsocket = $param["IsWebsocket"];
        }

        if (array_key_exists("LoadBalance",$param) and $param["LoadBalance"] !== null) {
            $this->LoadBalance = $param["LoadBalance"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            $this->PrivateKey = $param["PrivateKey"];
        }

        if (array_key_exists("SSLId",$param) and $param["SSLId"] !== null) {
            $this->SSLId = $param["SSLId"];
        }

        if (array_key_exists("UpstreamDomain",$param) and $param["UpstreamDomain"] !== null) {
            $this->UpstreamDomain = $param["UpstreamDomain"];
        }

        if (array_key_exists("UpstreamType",$param) and $param["UpstreamType"] !== null) {
            $this->UpstreamType = $param["UpstreamType"];
        }

        if (array_key_exists("SrcList",$param) and $param["SrcList"] !== null) {
            $this->SrcList = $param["SrcList"];
        }

        if (array_key_exists("Ports",$param) and $param["Ports"] !== null) {
            $this->Ports = [];
            foreach ($param["Ports"] as $key => $value){
                $obj = new PortInfo();
                $obj->deserialize($value);
                array_push($this->Ports, $obj);
            }
        }

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }

        if (array_key_exists("UpstreamScheme",$param) and $param["UpstreamScheme"] !== null) {
            $this->UpstreamScheme = $param["UpstreamScheme"];
        }

        if (array_key_exists("Cls",$param) and $param["Cls"] !== null) {
            $this->Cls = $param["Cls"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("IsKeepAlive",$param) and $param["IsKeepAlive"] !== null) {
            $this->IsKeepAlive = $param["IsKeepAlive"];
        }

        if (array_key_exists("ActiveCheck",$param) and $param["ActiveCheck"] !== null) {
            $this->ActiveCheck = $param["ActiveCheck"];
        }

        if (array_key_exists("TLSVersion",$param) and $param["TLSVersion"] !== null) {
            $this->TLSVersion = $param["TLSVersion"];
        }

        if (array_key_exists("Ciphers",$param) and $param["Ciphers"] !== null) {
            $this->Ciphers = $param["Ciphers"];
        }

        if (array_key_exists("CipherTemplate",$param) and $param["CipherTemplate"] !== null) {
            $this->CipherTemplate = $param["CipherTemplate"];
        }

        if (array_key_exists("ProxyReadTimeout",$param) and $param["ProxyReadTimeout"] !== null) {
            $this->ProxyReadTimeout = $param["ProxyReadTimeout"];
        }

        if (array_key_exists("ProxySendTimeout",$param) and $param["ProxySendTimeout"] !== null) {
            $this->ProxySendTimeout = $param["ProxySendTimeout"];
        }

        if (array_key_exists("SniType",$param) and $param["SniType"] !== null) {
            $this->SniType = $param["SniType"];
        }

        if (array_key_exists("SniHost",$param) and $param["SniHost"] !== null) {
            $this->SniHost = $param["SniHost"];
        }

        if (array_key_exists("Weights",$param) and $param["Weights"] !== null) {
            $this->Weights = $param["Weights"];
        }

        if (array_key_exists("IpHeaders",$param) and $param["IpHeaders"] !== null) {
            $this->IpHeaders = $param["IpHeaders"];
        }

        if (array_key_exists("XFFReset",$param) and $param["XFFReset"] !== null) {
            $this->XFFReset = $param["XFFReset"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("UpstreamHost",$param) and $param["UpstreamHost"] !== null) {
            $this->UpstreamHost = $param["UpstreamHost"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("ProxyBuffer",$param) and $param["ProxyBuffer"] !== null) {
            $this->ProxyBuffer = $param["ProxyBuffer"];
        }

        if (array_key_exists("GmType",$param) and $param["GmType"] !== null) {
            $this->GmType = $param["GmType"];
        }

        if (array_key_exists("GmCertType",$param) and $param["GmCertType"] !== null) {
            $this->GmCertType = $param["GmCertType"];
        }

        if (array_key_exists("GmCert",$param) and $param["GmCert"] !== null) {
            $this->GmCert = $param["GmCert"];
        }

        if (array_key_exists("GmPrivateKey",$param) and $param["GmPrivateKey"] !== null) {
            $this->GmPrivateKey = $param["GmPrivateKey"];
        }

        if (array_key_exists("GmEncCert",$param) and $param["GmEncCert"] !== null) {
            $this->GmEncCert = $param["GmEncCert"];
        }

        if (array_key_exists("GmEncPrivateKey",$param) and $param["GmEncPrivateKey"] !== null) {
            $this->GmEncPrivateKey = $param["GmEncPrivateKey"];
        }

        if (array_key_exists("GmSSLId",$param) and $param["GmSSLId"] !== null) {
            $this->GmSSLId = $param["GmSSLId"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = $param["Labels"];
        }
    }
}
