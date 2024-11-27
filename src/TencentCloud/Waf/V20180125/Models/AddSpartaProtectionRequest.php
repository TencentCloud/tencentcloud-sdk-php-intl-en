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
 * AddSpartaProtection request structure.
 *
 * @method string getDomain() Obtain Domain requiring protection
 * @method void setDomain(string $Domain) Set Domain requiring protection
 * @method integer getCertType() Obtain Certificate type
0: no certificate, with only the HTTP listening port configured
1: self-owned certificate
2: managed certificate
 * @method void setCertType(integer $CertType) Set Certificate type
0: no certificate, with only the HTTP listening port configured
1: self-owned certificate
2: managed certificate
 * @method integer getIsCdn() Obtain Whether a layer-7 proxy service is deployed before WAF
0: No proxy service deployed
1: Proxy service deployed, and WAF will use XFF to obtain the client IP address
2: Proxy service deployed and WAF will use remote_addr to obtain the client IP address
3: Proxy service deployed, and WAF will use a custom header in ip_headers to obtain the client IP address
 * @method void setIsCdn(integer $IsCdn) Set Whether a layer-7 proxy service is deployed before WAF
0: No proxy service deployed
1: Proxy service deployed, and WAF will use XFF to obtain the client IP address
2: Proxy service deployed and WAF will use remote_addr to obtain the client IP address
3: Proxy service deployed, and WAF will use a custom header in ip_headers to obtain the client IP address
 * @method integer getUpstreamType() Obtain Upstream type
0: proxy to upstream by IP address
1: proxy to upstream by domain name
 * @method void setUpstreamType(integer $UpstreamType) Set Upstream type
0: proxy to upstream by IP address
1: proxy to upstream by domain name
 * @method integer getIsWebsocket() Obtain Whether to enable websocket
0: disable
1: enable
 * @method void setIsWebsocket(integer $IsWebsocket) Set Whether to enable websocket
0: disable
1: enable
 * @method string getLoadBalance() Obtain Load balancing policy for upstream
0: round-robin
1: IP hash
2: weighted round-robin
 * @method void setLoadBalance(string $LoadBalance) Set Load balancing policy for upstream
0: round-robin
1: IP hash
2: weighted round-robin
 * @method array getPorts() Obtain Service port list configuration
NginxServerId: fill in '0' in this function
Port: listening port number
Protocol: port protocol
UpstreamPort: same as Port
UpstreamProtocol: same as Protocol
 * @method void setPorts(array $Ports) Set Service port list configuration
NginxServerId: fill in '0' in this function
Port: listening port number
Protocol: port protocol
UpstreamPort: same as Port
UpstreamProtocol: same as Protocol
 * @method string getIsKeepAlive() Obtain (Required) Whether to enable persistent connection
0: non-persistent connection
1: persistent connection
 * @method void setIsKeepAlive(string $IsKeepAlive) Set (Required) Whether to enable persistent connection
0: non-persistent connection
1: persistent connection
 * @method string getInstanceID() Obtain (Required) Instance ID of the domain name
 * @method void setInstanceID(string $InstanceID) Set (Required) Instance ID of the domain name
 * @method string getCert() Obtain When CertType is 1, this parameter is required, indicating the self-owned certificate chain
 * @method void setCert(string $Cert) Set When CertType is 1, this parameter is required, indicating the self-owned certificate chain
 * @method string getPrivateKey() Obtain When CertType=1, this parameter is required, indicating the private key of the self-owned certificate.
 * @method void setPrivateKey(string $PrivateKey) Set When CertType=1, this parameter is required, indicating the private key of the self-owned certificate.
 * @method string getSSLId() Obtain When CertType is 2, this parameter must be filled, indicating the certificate ID hosted on Tencent Cloud's SSL platform
 * @method void setSSLId(string $SSLId) Set When CertType is 2, this parameter must be filled, indicating the certificate ID hosted on Tencent Cloud's SSL platform
 * @method string getResourceId() Obtain To be deprecated, not required. WAF resource ID.
 * @method void setResourceId(string $ResourceId) Set To be deprecated, not required. WAF resource ID.
 * @method array getIpHeaders() Obtain When IsCdn is 3, this parameter is required, indicating a custom header.
 * @method void setIpHeaders(array $IpHeaders) Set When IsCdn is 3, this parameter is required, indicating a custom header.
 * @method string getUpstreamScheme() Obtain Upstream protocol for HTTPS when the service is configured with an HTTPS port
http: Use the HTTP protocol for upstream. It is used together with HttpsUpstreamPort.
https: Use the HTTPS protocol for upstream.
 * @method void setUpstreamScheme(string $UpstreamScheme) Set Upstream protocol for HTTPS when the service is configured with an HTTPS port
http: Use the HTTP protocol for upstream. It is used together with HttpsUpstreamPort.
https: Use the HTTPS protocol for upstream.
 * @method string getHttpsUpstreamPort() Obtain HTTPS upstream port, required only when UpstreamScheme is http
 * @method void setHttpsUpstreamPort(string $HttpsUpstreamPort) Set HTTPS upstream port, required only when UpstreamScheme is http
 * @method integer getIsGray() Obtain To be deprecated, can be left blank. Whether to enable grayscale: 0 indicates not to enable grayscale.
 * @method void setIsGray(integer $IsGray) Set To be deprecated, can be left blank. Whether to enable grayscale: 0 indicates not to enable grayscale.
 * @method array getGrayAreas() Obtain To be deprecated, can be left blank. Grayscale area.
 * @method void setGrayAreas(array $GrayAreas) Set To be deprecated, can be left blank. Grayscale area.
 * @method integer getHttpsRewrite() Obtain (Required) Whether to enable forced redirection from HTTP to HTTPS
0: do not force redirect
1: enable forced redirect
 * @method void setHttpsRewrite(integer $HttpsRewrite) Set (Required) Whether to enable forced redirection from HTTP to HTTPS
0: do not force redirect
1: enable forced redirect
 * @method string getUpstreamDomain() Obtain Upstream domain when proxy to upstream by domain. When UpstreamType=1, this field needs to be filled
 * @method void setUpstreamDomain(string $UpstreamDomain) Set Upstream domain when proxy to upstream by domain. When UpstreamType=1, this field needs to be filled
 * @method array getSrcList() Obtain Upstream IP list when IP is back to source. When UpstreamType=0, this field is required
 * @method void setSrcList(array $SrcList) Set Upstream IP list when IP is back to source. When UpstreamType=0, this field is required
 * @method integer getIsHttp2() Obtain (Required) Whether to enable HTTP2. You should enable HTTPS as well.
0: disable
1: enable
 * @method void setIsHttp2(integer $IsHttp2) Set (Required) Whether to enable HTTP2. You should enable HTTPS as well.
0: disable
1: enable
 * @method string getEdition() Obtain WAF instance type. This parameter will be deprecated in later versions and is not required in the current version.
sparta-waf: SaaS WAF
clb-waf: CLB WAF
cdn-waf: web protection capability on CDN
 * @method void setEdition(string $Edition) Set WAF instance type. This parameter will be deprecated in later versions and is not required in the current version.
sparta-waf: SaaS WAF
clb-waf: CLB WAF
cdn-waf: web protection capability on CDN
 * @method integer getAnycast() Obtain To be deprecated, currently just fill in 0. Anycast IP type switch: 0 Ordinary IP, 1 Anycast IP
 * @method void setAnycast(integer $Anycast) Set To be deprecated, currently just fill in 0. Anycast IP type switch: 0 Ordinary IP, 1 Anycast IP
 * @method array getWeights() Obtain Weight of each IP in the back-to-source IP List, corresponding to SrcList. Required only when UpstreamType is 0, and SrcList contains multiple IPs, and LoadBalance is 2; otherwise, fill in [ ].
 * @method void setWeights(array $Weights) Set Weight of each IP in the back-to-source IP List, corresponding to SrcList. Required only when UpstreamType is 0, and SrcList contains multiple IPs, and LoadBalance is 2; otherwise, fill in [ ].
 * @method integer getActiveCheck() Obtain (Required) Whether to enable active health check
0: disable
1: enable
 * @method void setActiveCheck(integer $ActiveCheck) Set (Required) Whether to enable active health check
0: disable
1: enable
 * @method integer getTLSVersion() Obtain TLS version information
 * @method void setTLSVersion(integer $TLSVersion) Set TLS version information
 * @method integer getCipherTemplate() Obtain (Required) Cipher suite template
0: default template
1: general template
2: security template
3: custom template
 * @method void setCipherTemplate(integer $CipherTemplate) Set (Required) Cipher suite template
0: default template
1: general template
2: security template
3: custom template
 * @method array getCiphers() Obtain Custom encryption suite list. When CipherTemplate is 3, this field is required, indicating the custom encryption suite, value obtained through DescribeCiphersDetail API.
 * @method void setCiphers(array $Ciphers) Set Custom encryption suite list. When CipherTemplate is 3, this field is required, indicating the custom encryption suite, value obtained through DescribeCiphersDetail API.
 * @method integer getProxyReadTimeout() Obtain Read timeout between WAF and upstream server, 300s by default.
 * @method void setProxyReadTimeout(integer $ProxyReadTimeout) Set Read timeout between WAF and upstream server, 300s by default.
 * @method integer getProxySendTimeout() Obtain WAF and upstream server write timeout, 300s by default.
 * @method void setProxySendTimeout(integer $ProxySendTimeout) Set WAF and upstream server write timeout, 300s by default.
 * @method integer getSniType() Obtain SNI type during WAF sending request to upstream
0: Disable SNI and do not configure server_name in client_hello.
1: Enable SNI. server_name in client_hello is a protected domain name.
2: Enable SNI. SNI is the origin server domain name during the domain name origin-pull.
3: Enable SNI. SNI is a custom domain name.
 * @method void setSniType(integer $SniType) Set SNI type during WAF sending request to upstream
0: Disable SNI and do not configure server_name in client_hello.
1: Enable SNI. server_name in client_hello is a protected domain name.
2: Enable SNI. SNI is the origin server domain name during the domain name origin-pull.
3: Enable SNI. SNI is a custom domain name.
 * @method string getSniHost() Obtain When SniType=3, this parameter is required, indicating a custom SNI;
 * @method void setSniHost(string $SniHost) Set When SniType=3, this parameter is required, indicating a custom SNI;
 * @method integer getXFFReset() Obtain Whether to enable XFF reset. 0: disable; 1: enable.
 * @method void setXFFReset(integer $XFFReset) Set Whether to enable XFF reset. 0: disable; 1: enable.
 * @method string getNote() Obtain Domain name remarks
 * @method void setNote(string $Note) Set Domain name remarks
 * @method string getUpstreamHost() Obtain Custom upstream host. The default value is an empty string, indicating that  protected domain is used as the upstream host.
 * @method void setUpstreamHost(string $UpstreamHost) Set Custom upstream host. The default value is an empty string, indicating that  protected domain is used as the upstream host.
 * @method integer getProxyBuffer() Obtain Whether to enable caching. 0: disable; 1: enable.
 * @method void setProxyBuffer(integer $ProxyBuffer) Set Whether to enable caching. 0: disable; 1: enable.
 * @method integer getProbeStatus() Obtain Whether to enable the test. 0: disable; 1: enable. The test is enabled by default.
 * @method void setProbeStatus(integer $ProbeStatus) Set Whether to enable the test. 0: disable; 1: enable. The test is enabled by default.
 * @method integer getGmType() Obtain Whether to enable SM. 0: do not enable SM; 1: add support for SM based on the existing TLS option; 2: enable SM and support only SM client access.
 * @method void setGmType(integer $GmType) Set Whether to enable SM. 0: do not enable SM; 1: add support for SM based on the existing TLS option; 2: enable SM and support only SM client access.
 * @method integer getGmCertType() Obtain SM certificate type. 0: no SM certificate is available; 1: the certificate is a self-owned SM certificate; 2: the certificate is a managed SM certificate.
 * @method void setGmCertType(integer $GmCertType) Set SM certificate type. 0: no SM certificate is available; 1: the certificate is a self-owned SM certificate; 2: the certificate is a managed SM certificate.
 * @method string getGmCert() Obtain When GmCertType is 1, this parameter needs to be set, indicating the certificate chain of the self-owned SM certificate.
 * @method void setGmCert(string $GmCert) Set When GmCertType is 1, this parameter needs to be set, indicating the certificate chain of the self-owned SM certificate.
 * @method string getGmPrivateKey() Obtain When GmCertType is 1, this parameter needs to be set, indicating the private key of the self-owned SM certificate.
 * @method void setGmPrivateKey(string $GmPrivateKey) Set When GmCertType is 1, this parameter needs to be set, indicating the private key of the self-owned SM certificate.
 * @method string getGmEncCert() Obtain When GmCertType is 1, this parameter needs to be set, indicating the encryption certificate of the self-owned SM certificate.
 * @method void setGmEncCert(string $GmEncCert) Set When GmCertType is 1, this parameter needs to be set, indicating the encryption certificate of the self-owned SM certificate.
 * @method string getGmEncPrivateKey() Obtain When GmCertType is 1, this parameter needs to be set, indicating the private key of the encryption certificate for the self-owned SM certificate.
 * @method void setGmEncPrivateKey(string $GmEncPrivateKey) Set When GmCertType is 1, this parameter needs to be set, indicating the private key of the encryption certificate for the self-owned SM certificate.
 * @method string getGmSSLId() Obtain When GmCertType is 2, this parameter needs to be set, indicating the ID of the certificate managed by the Tencent Cloud SSL platform.
 * @method void setGmSSLId(string $GmSSLId) Set When GmCertType is 2, this parameter needs to be set, indicating the ID of the certificate managed by the Tencent Cloud SSL platform.
 */
class AddSpartaProtectionRequest extends AbstractModel
{
    /**
     * @var string Domain requiring protection
     */
    public $Domain;

    /**
     * @var integer Certificate type
0: no certificate, with only the HTTP listening port configured
1: self-owned certificate
2: managed certificate
     */
    public $CertType;

    /**
     * @var integer Whether a layer-7 proxy service is deployed before WAF
0: No proxy service deployed
1: Proxy service deployed, and WAF will use XFF to obtain the client IP address
2: Proxy service deployed and WAF will use remote_addr to obtain the client IP address
3: Proxy service deployed, and WAF will use a custom header in ip_headers to obtain the client IP address
     */
    public $IsCdn;

    /**
     * @var integer Upstream type
0: proxy to upstream by IP address
1: proxy to upstream by domain name
     */
    public $UpstreamType;

    /**
     * @var integer Whether to enable websocket
0: disable
1: enable
     */
    public $IsWebsocket;

    /**
     * @var string Load balancing policy for upstream
0: round-robin
1: IP hash
2: weighted round-robin
     */
    public $LoadBalance;

    /**
     * @var array Service port list configuration
NginxServerId: fill in '0' in this function
Port: listening port number
Protocol: port protocol
UpstreamPort: same as Port
UpstreamProtocol: same as Protocol
     */
    public $Ports;

    /**
     * @var string (Required) Whether to enable persistent connection
0: non-persistent connection
1: persistent connection
     */
    public $IsKeepAlive;

    /**
     * @var string (Required) Instance ID of the domain name
     */
    public $InstanceID;

    /**
     * @var string When CertType is 1, this parameter is required, indicating the self-owned certificate chain
     */
    public $Cert;

    /**
     * @var string When CertType=1, this parameter is required, indicating the private key of the self-owned certificate.
     */
    public $PrivateKey;

    /**
     * @var string When CertType is 2, this parameter must be filled, indicating the certificate ID hosted on Tencent Cloud's SSL platform
     */
    public $SSLId;

    /**
     * @var string To be deprecated, not required. WAF resource ID.
     */
    public $ResourceId;

    /**
     * @var array When IsCdn is 3, this parameter is required, indicating a custom header.
     */
    public $IpHeaders;

    /**
     * @var string Upstream protocol for HTTPS when the service is configured with an HTTPS port
http: Use the HTTP protocol for upstream. It is used together with HttpsUpstreamPort.
https: Use the HTTPS protocol for upstream.
     */
    public $UpstreamScheme;

    /**
     * @var string HTTPS upstream port, required only when UpstreamScheme is http
     */
    public $HttpsUpstreamPort;

    /**
     * @var integer To be deprecated, can be left blank. Whether to enable grayscale: 0 indicates not to enable grayscale.
     */
    public $IsGray;

    /**
     * @var array To be deprecated, can be left blank. Grayscale area.
     */
    public $GrayAreas;

    /**
     * @var integer (Required) Whether to enable forced redirection from HTTP to HTTPS
0: do not force redirect
1: enable forced redirect
     */
    public $HttpsRewrite;

    /**
     * @var string Upstream domain when proxy to upstream by domain. When UpstreamType=1, this field needs to be filled
     */
    public $UpstreamDomain;

    /**
     * @var array Upstream IP list when IP is back to source. When UpstreamType=0, this field is required
     */
    public $SrcList;

    /**
     * @var integer (Required) Whether to enable HTTP2. You should enable HTTPS as well.
0: disable
1: enable
     */
    public $IsHttp2;

    /**
     * @var string WAF instance type. This parameter will be deprecated in later versions and is not required in the current version.
sparta-waf: SaaS WAF
clb-waf: CLB WAF
cdn-waf: web protection capability on CDN
     */
    public $Edition;

    /**
     * @var integer To be deprecated, currently just fill in 0. Anycast IP type switch: 0 Ordinary IP, 1 Anycast IP
     */
    public $Anycast;

    /**
     * @var array Weight of each IP in the back-to-source IP List, corresponding to SrcList. Required only when UpstreamType is 0, and SrcList contains multiple IPs, and LoadBalance is 2; otherwise, fill in [ ].
     */
    public $Weights;

    /**
     * @var integer (Required) Whether to enable active health check
0: disable
1: enable
     */
    public $ActiveCheck;

    /**
     * @var integer TLS version information
     */
    public $TLSVersion;

    /**
     * @var integer (Required) Cipher suite template
0: default template
1: general template
2: security template
3: custom template
     */
    public $CipherTemplate;

    /**
     * @var array Custom encryption suite list. When CipherTemplate is 3, this field is required, indicating the custom encryption suite, value obtained through DescribeCiphersDetail API.
     */
    public $Ciphers;

    /**
     * @var integer Read timeout between WAF and upstream server, 300s by default.
     */
    public $ProxyReadTimeout;

    /**
     * @var integer WAF and upstream server write timeout, 300s by default.
     */
    public $ProxySendTimeout;

    /**
     * @var integer SNI type during WAF sending request to upstream
0: Disable SNI and do not configure server_name in client_hello.
1: Enable SNI. server_name in client_hello is a protected domain name.
2: Enable SNI. SNI is the origin server domain name during the domain name origin-pull.
3: Enable SNI. SNI is a custom domain name.
     */
    public $SniType;

    /**
     * @var string When SniType=3, this parameter is required, indicating a custom SNI;
     */
    public $SniHost;

    /**
     * @var integer Whether to enable XFF reset. 0: disable; 1: enable.
     */
    public $XFFReset;

    /**
     * @var string Domain name remarks
     */
    public $Note;

    /**
     * @var string Custom upstream host. The default value is an empty string, indicating that  protected domain is used as the upstream host.
     */
    public $UpstreamHost;

    /**
     * @var integer Whether to enable caching. 0: disable; 1: enable.
     */
    public $ProxyBuffer;

    /**
     * @var integer Whether to enable the test. 0: disable; 1: enable. The test is enabled by default.
     */
    public $ProbeStatus;

    /**
     * @var integer Whether to enable SM. 0: do not enable SM; 1: add support for SM based on the existing TLS option; 2: enable SM and support only SM client access.
     */
    public $GmType;

    /**
     * @var integer SM certificate type. 0: no SM certificate is available; 1: the certificate is a self-owned SM certificate; 2: the certificate is a managed SM certificate.
     */
    public $GmCertType;

    /**
     * @var string When GmCertType is 1, this parameter needs to be set, indicating the certificate chain of the self-owned SM certificate.
     */
    public $GmCert;

    /**
     * @var string When GmCertType is 1, this parameter needs to be set, indicating the private key of the self-owned SM certificate.
     */
    public $GmPrivateKey;

    /**
     * @var string When GmCertType is 1, this parameter needs to be set, indicating the encryption certificate of the self-owned SM certificate.
     */
    public $GmEncCert;

    /**
     * @var string When GmCertType is 1, this parameter needs to be set, indicating the private key of the encryption certificate for the self-owned SM certificate.
     */
    public $GmEncPrivateKey;

    /**
     * @var string When GmCertType is 2, this parameter needs to be set, indicating the ID of the certificate managed by the Tencent Cloud SSL platform.
     */
    public $GmSSLId;

    /**
     * @param string $Domain Domain requiring protection
     * @param integer $CertType Certificate type
0: no certificate, with only the HTTP listening port configured
1: self-owned certificate
2: managed certificate
     * @param integer $IsCdn Whether a layer-7 proxy service is deployed before WAF
0: No proxy service deployed
1: Proxy service deployed, and WAF will use XFF to obtain the client IP address
2: Proxy service deployed and WAF will use remote_addr to obtain the client IP address
3: Proxy service deployed, and WAF will use a custom header in ip_headers to obtain the client IP address
     * @param integer $UpstreamType Upstream type
0: proxy to upstream by IP address
1: proxy to upstream by domain name
     * @param integer $IsWebsocket Whether to enable websocket
0: disable
1: enable
     * @param string $LoadBalance Load balancing policy for upstream
0: round-robin
1: IP hash
2: weighted round-robin
     * @param array $Ports Service port list configuration
NginxServerId: fill in '0' in this function
Port: listening port number
Protocol: port protocol
UpstreamPort: same as Port
UpstreamProtocol: same as Protocol
     * @param string $IsKeepAlive (Required) Whether to enable persistent connection
0: non-persistent connection
1: persistent connection
     * @param string $InstanceID (Required) Instance ID of the domain name
     * @param string $Cert When CertType is 1, this parameter is required, indicating the self-owned certificate chain
     * @param string $PrivateKey When CertType=1, this parameter is required, indicating the private key of the self-owned certificate.
     * @param string $SSLId When CertType is 2, this parameter must be filled, indicating the certificate ID hosted on Tencent Cloud's SSL platform
     * @param string $ResourceId To be deprecated, not required. WAF resource ID.
     * @param array $IpHeaders When IsCdn is 3, this parameter is required, indicating a custom header.
     * @param string $UpstreamScheme Upstream protocol for HTTPS when the service is configured with an HTTPS port
http: Use the HTTP protocol for upstream. It is used together with HttpsUpstreamPort.
https: Use the HTTPS protocol for upstream.
     * @param string $HttpsUpstreamPort HTTPS upstream port, required only when UpstreamScheme is http
     * @param integer $IsGray To be deprecated, can be left blank. Whether to enable grayscale: 0 indicates not to enable grayscale.
     * @param array $GrayAreas To be deprecated, can be left blank. Grayscale area.
     * @param integer $HttpsRewrite (Required) Whether to enable forced redirection from HTTP to HTTPS
0: do not force redirect
1: enable forced redirect
     * @param string $UpstreamDomain Upstream domain when proxy to upstream by domain. When UpstreamType=1, this field needs to be filled
     * @param array $SrcList Upstream IP list when IP is back to source. When UpstreamType=0, this field is required
     * @param integer $IsHttp2 (Required) Whether to enable HTTP2. You should enable HTTPS as well.
0: disable
1: enable
     * @param string $Edition WAF instance type. This parameter will be deprecated in later versions and is not required in the current version.
sparta-waf: SaaS WAF
clb-waf: CLB WAF
cdn-waf: web protection capability on CDN
     * @param integer $Anycast To be deprecated, currently just fill in 0. Anycast IP type switch: 0 Ordinary IP, 1 Anycast IP
     * @param array $Weights Weight of each IP in the back-to-source IP List, corresponding to SrcList. Required only when UpstreamType is 0, and SrcList contains multiple IPs, and LoadBalance is 2; otherwise, fill in [ ].
     * @param integer $ActiveCheck (Required) Whether to enable active health check
0: disable
1: enable
     * @param integer $TLSVersion TLS version information
     * @param integer $CipherTemplate (Required) Cipher suite template
0: default template
1: general template
2: security template
3: custom template
     * @param array $Ciphers Custom encryption suite list. When CipherTemplate is 3, this field is required, indicating the custom encryption suite, value obtained through DescribeCiphersDetail API.
     * @param integer $ProxyReadTimeout Read timeout between WAF and upstream server, 300s by default.
     * @param integer $ProxySendTimeout WAF and upstream server write timeout, 300s by default.
     * @param integer $SniType SNI type during WAF sending request to upstream
0: Disable SNI and do not configure server_name in client_hello.
1: Enable SNI. server_name in client_hello is a protected domain name.
2: Enable SNI. SNI is the origin server domain name during the domain name origin-pull.
3: Enable SNI. SNI is a custom domain name.
     * @param string $SniHost When SniType=3, this parameter is required, indicating a custom SNI;
     * @param integer $XFFReset Whether to enable XFF reset. 0: disable; 1: enable.
     * @param string $Note Domain name remarks
     * @param string $UpstreamHost Custom upstream host. The default value is an empty string, indicating that  protected domain is used as the upstream host.
     * @param integer $ProxyBuffer Whether to enable caching. 0: disable; 1: enable.
     * @param integer $ProbeStatus Whether to enable the test. 0: disable; 1: enable. The test is enabled by default.
     * @param integer $GmType Whether to enable SM. 0: do not enable SM; 1: add support for SM based on the existing TLS option; 2: enable SM and support only SM client access.
     * @param integer $GmCertType SM certificate type. 0: no SM certificate is available; 1: the certificate is a self-owned SM certificate; 2: the certificate is a managed SM certificate.
     * @param string $GmCert When GmCertType is 1, this parameter needs to be set, indicating the certificate chain of the self-owned SM certificate.
     * @param string $GmPrivateKey When GmCertType is 1, this parameter needs to be set, indicating the private key of the self-owned SM certificate.
     * @param string $GmEncCert When GmCertType is 1, this parameter needs to be set, indicating the encryption certificate of the self-owned SM certificate.
     * @param string $GmEncPrivateKey When GmCertType is 1, this parameter needs to be set, indicating the private key of the encryption certificate for the self-owned SM certificate.
     * @param string $GmSSLId When GmCertType is 2, this parameter needs to be set, indicating the ID of the certificate managed by the Tencent Cloud SSL platform.
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

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }

        if (array_key_exists("IsCdn",$param) and $param["IsCdn"] !== null) {
            $this->IsCdn = $param["IsCdn"];
        }

        if (array_key_exists("UpstreamType",$param) and $param["UpstreamType"] !== null) {
            $this->UpstreamType = $param["UpstreamType"];
        }

        if (array_key_exists("IsWebsocket",$param) and $param["IsWebsocket"] !== null) {
            $this->IsWebsocket = $param["IsWebsocket"];
        }

        if (array_key_exists("LoadBalance",$param) and $param["LoadBalance"] !== null) {
            $this->LoadBalance = $param["LoadBalance"];
        }

        if (array_key_exists("Ports",$param) and $param["Ports"] !== null) {
            $this->Ports = [];
            foreach ($param["Ports"] as $key => $value){
                $obj = new PortItem();
                $obj->deserialize($value);
                array_push($this->Ports, $obj);
            }
        }

        if (array_key_exists("IsKeepAlive",$param) and $param["IsKeepAlive"] !== null) {
            $this->IsKeepAlive = $param["IsKeepAlive"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("Cert",$param) and $param["Cert"] !== null) {
            $this->Cert = $param["Cert"];
        }

        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            $this->PrivateKey = $param["PrivateKey"];
        }

        if (array_key_exists("SSLId",$param) and $param["SSLId"] !== null) {
            $this->SSLId = $param["SSLId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("IpHeaders",$param) and $param["IpHeaders"] !== null) {
            $this->IpHeaders = $param["IpHeaders"];
        }

        if (array_key_exists("UpstreamScheme",$param) and $param["UpstreamScheme"] !== null) {
            $this->UpstreamScheme = $param["UpstreamScheme"];
        }

        if (array_key_exists("HttpsUpstreamPort",$param) and $param["HttpsUpstreamPort"] !== null) {
            $this->HttpsUpstreamPort = $param["HttpsUpstreamPort"];
        }

        if (array_key_exists("IsGray",$param) and $param["IsGray"] !== null) {
            $this->IsGray = $param["IsGray"];
        }

        if (array_key_exists("GrayAreas",$param) and $param["GrayAreas"] !== null) {
            $this->GrayAreas = $param["GrayAreas"];
        }

        if (array_key_exists("HttpsRewrite",$param) and $param["HttpsRewrite"] !== null) {
            $this->HttpsRewrite = $param["HttpsRewrite"];
        }

        if (array_key_exists("UpstreamDomain",$param) and $param["UpstreamDomain"] !== null) {
            $this->UpstreamDomain = $param["UpstreamDomain"];
        }

        if (array_key_exists("SrcList",$param) and $param["SrcList"] !== null) {
            $this->SrcList = $param["SrcList"];
        }

        if (array_key_exists("IsHttp2",$param) and $param["IsHttp2"] !== null) {
            $this->IsHttp2 = $param["IsHttp2"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("Anycast",$param) and $param["Anycast"] !== null) {
            $this->Anycast = $param["Anycast"];
        }

        if (array_key_exists("Weights",$param) and $param["Weights"] !== null) {
            $this->Weights = $param["Weights"];
        }

        if (array_key_exists("ActiveCheck",$param) and $param["ActiveCheck"] !== null) {
            $this->ActiveCheck = $param["ActiveCheck"];
        }

        if (array_key_exists("TLSVersion",$param) and $param["TLSVersion"] !== null) {
            $this->TLSVersion = $param["TLSVersion"];
        }

        if (array_key_exists("CipherTemplate",$param) and $param["CipherTemplate"] !== null) {
            $this->CipherTemplate = $param["CipherTemplate"];
        }

        if (array_key_exists("Ciphers",$param) and $param["Ciphers"] !== null) {
            $this->Ciphers = $param["Ciphers"];
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

        if (array_key_exists("XFFReset",$param) and $param["XFFReset"] !== null) {
            $this->XFFReset = $param["XFFReset"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("UpstreamHost",$param) and $param["UpstreamHost"] !== null) {
            $this->UpstreamHost = $param["UpstreamHost"];
        }

        if (array_key_exists("ProxyBuffer",$param) and $param["ProxyBuffer"] !== null) {
            $this->ProxyBuffer = $param["ProxyBuffer"];
        }

        if (array_key_exists("ProbeStatus",$param) and $param["ProbeStatus"] !== null) {
            $this->ProbeStatus = $param["ProbeStatus"];
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
    }
}
