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
 * ModifySpartaProtection request structure.
 *
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method string getDomainId() Obtain Required. Unique domain name ID
 * @method void setDomainId(string $DomainId) Set Required. Unique domain name ID
 * @method string getInstanceID() Obtain Required. Instance ID of the domain name
 * @method void setInstanceID(string $InstanceID) Set Required. Instance ID of the domain name
 * @method integer getCertType() Obtain Certificate type. 0: no certificate, with only the HTTP listening port configured; 1: self-owned certificate; 2: managed certificate.
 * @method void setCertType(integer $CertType) Set Certificate type. 0: no certificate, with only the HTTP listening port configured; 1: self-owned certificate; 2: managed certificate.
 * @method string getCert() Obtain When CertType is 1, this parameter is required, indicating the self-owned certificate chain
 * @method void setCert(string $Cert) Set When CertType is 1, this parameter is required, indicating the self-owned certificate chain
 * @method string getPrivateKey() Obtain When CertType=1, this parameter is required, indicating the private key of the self-owned certificate.
 * @method void setPrivateKey(string $PrivateKey) Set When CertType=1, this parameter is required, indicating the private key of the self-owned certificate.
 * @method string getSSLId() Obtain When CertType is 2, this parameter must be filled, indicating the certificate ID hosted on Tencent Cloud's SSL platform
 * @method void setSSLId(string $SSLId) Set When CertType is 2, this parameter must be filled, indicating the certificate ID hosted on Tencent Cloud's SSL platform
 * @method integer getIsCdn() Obtain Whether a layer-7 proxy service is deployed before the WAF. 0: No proxy service is deployed; 1: The proxy service is deployed. The WAF will use XFF to obtain the client IP address; 2: The proxy service is deployed. The WAF will use remote_addr to obtain the client IP address; 3: The proxy service is deployed. The WAF will use a custom header in ip_headers to obtain the client IP address.
 * @method void setIsCdn(integer $IsCdn) Set Whether a layer-7 proxy service is deployed before the WAF. 0: No proxy service is deployed; 1: The proxy service is deployed. The WAF will use XFF to obtain the client IP address; 2: The proxy service is deployed. The WAF will use remote_addr to obtain the client IP address; 3: The proxy service is deployed. The WAF will use a custom header in ip_headers to obtain the client IP address.
 * @method string getUpstreamScheme() Obtain Origin-pull protocol for HTTPS when the service is configured with an HTTPS port.
http: Use the HTTP protocol for origin-pull. It is used with HttpsUpstreamPort.
https: Use the HTTPS protocol for origin-pull.
 * @method void setUpstreamScheme(string $UpstreamScheme) Set Origin-pull protocol for HTTPS when the service is configured with an HTTPS port.
http: Use the HTTP protocol for origin-pull. It is used with HttpsUpstreamPort.
https: Use the HTTPS protocol for origin-pull.
 * @method string getHttpsUpstreamPort() Obtain HTTPS upstream port, required only when UpstreamScheme is http
 * @method void setHttpsUpstreamPort(string $HttpsUpstreamPort) Set HTTPS upstream port, required only when UpstreamScheme is http
 * @method integer getHttpsRewrite() Obtain Whether to enable forced redirection from HTTP to HTTPS. 0: disable; 1: enable
 * @method void setHttpsRewrite(integer $HttpsRewrite) Set Whether to enable forced redirection from HTTP to HTTPS. 0: disable; 1: enable
 * @method integer getUpstreamType() Obtain upstream type. 0: proxy to upstream by IP; 1: proxy to upstream by domain name
 * @method void setUpstreamType(integer $UpstreamType) Set upstream type. 0: proxy to upstream by IP; 1: proxy to upstream by domain name
 * @method string getUpstreamDomain() Obtain Upstream domain when proxy to upstream by domain. When UpstreamType=1, this field needs to be filled
 * @method void setUpstreamDomain(string $UpstreamDomain) Set Upstream domain when proxy to upstream by domain. When UpstreamType=1, this field needs to be filled
 * @method array getSrcList() Obtain Upstream IP list when proxy to upstream by IP. When UpstreamType=0, this field is required
 * @method void setSrcList(array $SrcList) Set Upstream IP list when proxy to upstream by IP. When UpstreamType=0, this field is required
 * @method integer getIsHttp2() Obtain Whether to enable HTTP2. You should enable HTTPS as well. 0: disable; 1: enable
 * @method void setIsHttp2(integer $IsHttp2) Set Whether to enable HTTP2. You should enable HTTPS as well. 0: disable; 1: enable
 * @method integer getIsWebsocket() Obtain Whether to enable WebSocket. 0: disable; 1: enable
 * @method void setIsWebsocket(integer $IsWebsocket) Set Whether to enable WebSocket. 0: disable; 1: enable
 * @method integer getLoadBalance() Obtain Load balancing policy for upstream. 0: round-robin scheduling; 1: IP hash; 2: weighted round-robin scheduling
 * @method void setLoadBalance(integer $LoadBalance) Set Load balancing policy for upstream. 0: round-robin scheduling; 1: IP hash; 2: weighted round-robin scheduling
 * @method integer getIsGray() Obtain To be deprecated, can be left blank. Whether to enable grayscale: 0 indicates not to enable grayscale.
 * @method void setIsGray(integer $IsGray) Set To be deprecated, can be left blank. Whether to enable grayscale: 0 indicates not to enable grayscale.
 * @method string getEdition() Obtain Instance type of the domain name
 * @method void setEdition(string $Edition) Set Instance type of the domain name
 * @method array getPorts() Obtain Port information, which can be obtained through the DescribeDomains API
 * @method void setPorts(array $Ports) Set Port information, which can be obtained through the DescribeDomains API
 * @method string getIsKeepAlive() Obtain Whether to enable persistent connection. 0: non-persistent connection; 1: persistent connection
 * @method void setIsKeepAlive(string $IsKeepAlive) Set Whether to enable persistent connection. 0: non-persistent connection; 1: persistent connection
 * @method integer getAnycast() Obtain To be deprecated. Currently, set this parameter to 0. Anycast IP type switch. 0: common IP; 1: Anycast IP
 * @method void setAnycast(integer $Anycast) Set To be deprecated. Currently, set this parameter to 0. Anycast IP type switch. 0: common IP; 1: Anycast IP
 * @method array getWeights() Obtain Weight of each IP in the upstream IP List, corresponding to SrcList. Required only when UpstreamType is 0, and SrcList contains multiple IPs, and LoadBalance is 2; otherwise, fill in [ ].
 * @method void setWeights(array $Weights) Set Weight of each IP in the upstream IP List, corresponding to SrcList. Required only when UpstreamType is 0, and SrcList contains multiple IPs, and LoadBalance is 2; otherwise, fill in [ ].
 * @method integer getActiveCheck() Obtain Whether to enable proactive health detection. 0: disable; 1: enable
 * @method void setActiveCheck(integer $ActiveCheck) Set Whether to enable proactive health detection. 0: disable; 1: enable
 * @method integer getTLSVersion() Obtain TLS version information
 * @method void setTLSVersion(integer $TLSVersion) Set TLS version information
 * @method array getCiphers() Obtain Cipher suite information
 * @method void setCiphers(array $Ciphers) Set Cipher suite information
 * @method integer getCipherTemplate() Obtain Cipher suite template. 0: default template (no selection); 1: general template; 2: secure template; 3: custom template
 * @method void setCipherTemplate(integer $CipherTemplate) Set Cipher suite template. 0: default template (no selection); 1: general template; 2: secure template; 3: custom template
 * @method integer getProxyReadTimeout() Obtain Read timeout between WAF and upstream server, 300s by default.
 * @method void setProxyReadTimeout(integer $ProxyReadTimeout) Set Read timeout between WAF and upstream server, 300s by default.
 * @method integer getProxySendTimeout() Obtain WAF and origin server write timeout, 300s by default.
 * @method void setProxySendTimeout(integer $ProxySendTimeout) Set WAF and origin server write timeout, 300s by default.
 * @method integer getSniType() Obtain SNI type when proxy to upstream.
0: Disable SNI and do not configure server_name in client_hello.
1: Enable SNI. server_name in client_hello is the protected domain name.
2: Enable SNI. SNI is the origin server domain name when proxy to upstream by domain.
3: Enable SNI. SNI is the custom domain name.
 * @method void setSniType(integer $SniType) Set SNI type when proxy to upstream.
0: Disable SNI and do not configure server_name in client_hello.
1: Enable SNI. server_name in client_hello is the protected domain name.
2: Enable SNI. SNI is the origin server domain name when proxy to upstream by domain.
3: Enable SNI. SNI is the custom domain name.
 * @method string getSniHost() Obtain When SniType=3, this parameter is required, indicating a custom SNI;
 * @method void setSniHost(string $SniHost) Set When SniType=3, this parameter is required, indicating a custom SNI;
 * @method array getIpHeaders() Obtain IsCdn=3 required for this parameter, indicates custom header
 * @method void setIpHeaders(array $IpHeaders) Set IsCdn=3 required for this parameter, indicates custom header
 * @method integer getXFFReset() Obtain Whether to enable XFF reset. 0: disable; 1: enable
 * @method void setXFFReset(integer $XFFReset) Set Whether to enable XFF reset. 0: disable; 1: enable
 * @method string getNote() Obtain Domain name remarks
 * @method void setNote(string $Note) Set Domain name remarks
 * @method string getUpstreamHost() Obtain Custom upstream host. The default value is a null string, indicating that the protected domain name is used as the upstream host.
 * @method void setUpstreamHost(string $UpstreamHost) Set Custom upstream host. The default value is a null string, indicating that the protected domain name is used as the upstream host.
 * @method integer getProxyBuffer() Obtain Whether to enable caching. 0: disable; 1: enable.
 * @method void setProxyBuffer(integer $ProxyBuffer) Set Whether to enable caching. 0: disable; 1: enable.
 * @method integer getProbeStatus() Obtain Whether to enable the test. 0: disable; 1: enable. The test is enabled by default.
 * @method void setProbeStatus(integer $ProbeStatus) Set Whether to enable the test. 0: disable; 1: enable. The test is enabled by default.
 * @method integer getGmType() Obtain SM option. 0: do not enable SM; 1: add support for SM based on the existing TLS option; 2: enable SM and support only SM client access.
 * @method void setGmType(integer $GmType) Set SM option. 0: do not enable SM; 1: add support for SM based on the existing TLS option; 2: enable SM and support only SM client access.
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
class ModifySpartaProtectionRequest extends AbstractModel
{
    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var string Required. Unique domain name ID
     */
    public $DomainId;

    /**
     * @var string Required. Instance ID of the domain name
     */
    public $InstanceID;

    /**
     * @var integer Certificate type. 0: no certificate, with only the HTTP listening port configured; 1: self-owned certificate; 2: managed certificate.
     */
    public $CertType;

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
     * @var integer Whether a layer-7 proxy service is deployed before the WAF. 0: No proxy service is deployed; 1: The proxy service is deployed. The WAF will use XFF to obtain the client IP address; 2: The proxy service is deployed. The WAF will use remote_addr to obtain the client IP address; 3: The proxy service is deployed. The WAF will use a custom header in ip_headers to obtain the client IP address.
     */
    public $IsCdn;

    /**
     * @var string Origin-pull protocol for HTTPS when the service is configured with an HTTPS port.
http: Use the HTTP protocol for origin-pull. It is used with HttpsUpstreamPort.
https: Use the HTTPS protocol for origin-pull.
     */
    public $UpstreamScheme;

    /**
     * @var string HTTPS upstream port, required only when UpstreamScheme is http
     */
    public $HttpsUpstreamPort;

    /**
     * @var integer Whether to enable forced redirection from HTTP to HTTPS. 0: disable; 1: enable
     */
    public $HttpsRewrite;

    /**
     * @var integer upstream type. 0: proxy to upstream by IP; 1: proxy to upstream by domain name
     */
    public $UpstreamType;

    /**
     * @var string Upstream domain when proxy to upstream by domain. When UpstreamType=1, this field needs to be filled
     */
    public $UpstreamDomain;

    /**
     * @var array Upstream IP list when proxy to upstream by IP. When UpstreamType=0, this field is required
     */
    public $SrcList;

    /**
     * @var integer Whether to enable HTTP2. You should enable HTTPS as well. 0: disable; 1: enable
     */
    public $IsHttp2;

    /**
     * @var integer Whether to enable WebSocket. 0: disable; 1: enable
     */
    public $IsWebsocket;

    /**
     * @var integer Load balancing policy for upstream. 0: round-robin scheduling; 1: IP hash; 2: weighted round-robin scheduling
     */
    public $LoadBalance;

    /**
     * @var integer To be deprecated, can be left blank. Whether to enable grayscale: 0 indicates not to enable grayscale.
     */
    public $IsGray;

    /**
     * @var string Instance type of the domain name
     */
    public $Edition;

    /**
     * @var array Port information, which can be obtained through the DescribeDomains API
     */
    public $Ports;

    /**
     * @var string Whether to enable persistent connection. 0: non-persistent connection; 1: persistent connection
     */
    public $IsKeepAlive;

    /**
     * @var integer To be deprecated. Currently, set this parameter to 0. Anycast IP type switch. 0: common IP; 1: Anycast IP
     */
    public $Anycast;

    /**
     * @var array Weight of each IP in the upstream IP List, corresponding to SrcList. Required only when UpstreamType is 0, and SrcList contains multiple IPs, and LoadBalance is 2; otherwise, fill in [ ].
     */
    public $Weights;

    /**
     * @var integer Whether to enable proactive health detection. 0: disable; 1: enable
     */
    public $ActiveCheck;

    /**
     * @var integer TLS version information
     */
    public $TLSVersion;

    /**
     * @var array Cipher suite information
     */
    public $Ciphers;

    /**
     * @var integer Cipher suite template. 0: default template (no selection); 1: general template; 2: secure template; 3: custom template
     */
    public $CipherTemplate;

    /**
     * @var integer Read timeout between WAF and upstream server, 300s by default.
     */
    public $ProxyReadTimeout;

    /**
     * @var integer WAF and origin server write timeout, 300s by default.
     */
    public $ProxySendTimeout;

    /**
     * @var integer SNI type when proxy to upstream.
0: Disable SNI and do not configure server_name in client_hello.
1: Enable SNI. server_name in client_hello is the protected domain name.
2: Enable SNI. SNI is the origin server domain name when proxy to upstream by domain.
3: Enable SNI. SNI is the custom domain name.
     */
    public $SniType;

    /**
     * @var string When SniType=3, this parameter is required, indicating a custom SNI;
     */
    public $SniHost;

    /**
     * @var array IsCdn=3 required for this parameter, indicates custom header
     */
    public $IpHeaders;

    /**
     * @var integer Whether to enable XFF reset. 0: disable; 1: enable
     */
    public $XFFReset;

    /**
     * @var string Domain name remarks
     */
    public $Note;

    /**
     * @var string Custom upstream host. The default value is a null string, indicating that the protected domain name is used as the upstream host.
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
     * @var integer SM option. 0: do not enable SM; 1: add support for SM based on the existing TLS option; 2: enable SM and support only SM client access.
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
     * @param string $Domain Domain name
     * @param string $DomainId Required. Unique domain name ID
     * @param string $InstanceID Required. Instance ID of the domain name
     * @param integer $CertType Certificate type. 0: no certificate, with only the HTTP listening port configured; 1: self-owned certificate; 2: managed certificate.
     * @param string $Cert When CertType is 1, this parameter is required, indicating the self-owned certificate chain
     * @param string $PrivateKey When CertType=1, this parameter is required, indicating the private key of the self-owned certificate.
     * @param string $SSLId When CertType is 2, this parameter must be filled, indicating the certificate ID hosted on Tencent Cloud's SSL platform
     * @param integer $IsCdn Whether a layer-7 proxy service is deployed before the WAF. 0: No proxy service is deployed; 1: The proxy service is deployed. The WAF will use XFF to obtain the client IP address; 2: The proxy service is deployed. The WAF will use remote_addr to obtain the client IP address; 3: The proxy service is deployed. The WAF will use a custom header in ip_headers to obtain the client IP address.
     * @param string $UpstreamScheme Origin-pull protocol for HTTPS when the service is configured with an HTTPS port.
http: Use the HTTP protocol for origin-pull. It is used with HttpsUpstreamPort.
https: Use the HTTPS protocol for origin-pull.
     * @param string $HttpsUpstreamPort HTTPS upstream port, required only when UpstreamScheme is http
     * @param integer $HttpsRewrite Whether to enable forced redirection from HTTP to HTTPS. 0: disable; 1: enable
     * @param integer $UpstreamType upstream type. 0: proxy to upstream by IP; 1: proxy to upstream by domain name
     * @param string $UpstreamDomain Upstream domain when proxy to upstream by domain. When UpstreamType=1, this field needs to be filled
     * @param array $SrcList Upstream IP list when proxy to upstream by IP. When UpstreamType=0, this field is required
     * @param integer $IsHttp2 Whether to enable HTTP2. You should enable HTTPS as well. 0: disable; 1: enable
     * @param integer $IsWebsocket Whether to enable WebSocket. 0: disable; 1: enable
     * @param integer $LoadBalance Load balancing policy for upstream. 0: round-robin scheduling; 1: IP hash; 2: weighted round-robin scheduling
     * @param integer $IsGray To be deprecated, can be left blank. Whether to enable grayscale: 0 indicates not to enable grayscale.
     * @param string $Edition Instance type of the domain name
     * @param array $Ports Port information, which can be obtained through the DescribeDomains API
     * @param string $IsKeepAlive Whether to enable persistent connection. 0: non-persistent connection; 1: persistent connection
     * @param integer $Anycast To be deprecated. Currently, set this parameter to 0. Anycast IP type switch. 0: common IP; 1: Anycast IP
     * @param array $Weights Weight of each IP in the upstream IP List, corresponding to SrcList. Required only when UpstreamType is 0, and SrcList contains multiple IPs, and LoadBalance is 2; otherwise, fill in [ ].
     * @param integer $ActiveCheck Whether to enable proactive health detection. 0: disable; 1: enable
     * @param integer $TLSVersion TLS version information
     * @param array $Ciphers Cipher suite information
     * @param integer $CipherTemplate Cipher suite template. 0: default template (no selection); 1: general template; 2: secure template; 3: custom template
     * @param integer $ProxyReadTimeout Read timeout between WAF and upstream server, 300s by default.
     * @param integer $ProxySendTimeout WAF and origin server write timeout, 300s by default.
     * @param integer $SniType SNI type when proxy to upstream.
0: Disable SNI and do not configure server_name in client_hello.
1: Enable SNI. server_name in client_hello is the protected domain name.
2: Enable SNI. SNI is the origin server domain name when proxy to upstream by domain.
3: Enable SNI. SNI is the custom domain name.
     * @param string $SniHost When SniType=3, this parameter is required, indicating a custom SNI;
     * @param array $IpHeaders IsCdn=3 required for this parameter, indicates custom header
     * @param integer $XFFReset Whether to enable XFF reset. 0: disable; 1: enable
     * @param string $Note Domain name remarks
     * @param string $UpstreamHost Custom upstream host. The default value is a null string, indicating that the protected domain name is used as the upstream host.
     * @param integer $ProxyBuffer Whether to enable caching. 0: disable; 1: enable.
     * @param integer $ProbeStatus Whether to enable the test. 0: disable; 1: enable. The test is enabled by default.
     * @param integer $GmType SM option. 0: do not enable SM; 1: add support for SM based on the existing TLS option; 2: enable SM and support only SM client access.
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

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
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

        if (array_key_exists("IsCdn",$param) and $param["IsCdn"] !== null) {
            $this->IsCdn = $param["IsCdn"];
        }

        if (array_key_exists("UpstreamScheme",$param) and $param["UpstreamScheme"] !== null) {
            $this->UpstreamScheme = $param["UpstreamScheme"];
        }

        if (array_key_exists("HttpsUpstreamPort",$param) and $param["HttpsUpstreamPort"] !== null) {
            $this->HttpsUpstreamPort = $param["HttpsUpstreamPort"];
        }

        if (array_key_exists("HttpsRewrite",$param) and $param["HttpsRewrite"] !== null) {
            $this->HttpsRewrite = $param["HttpsRewrite"];
        }

        if (array_key_exists("UpstreamType",$param) and $param["UpstreamType"] !== null) {
            $this->UpstreamType = $param["UpstreamType"];
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

        if (array_key_exists("IsWebsocket",$param) and $param["IsWebsocket"] !== null) {
            $this->IsWebsocket = $param["IsWebsocket"];
        }

        if (array_key_exists("LoadBalance",$param) and $param["LoadBalance"] !== null) {
            $this->LoadBalance = $param["LoadBalance"];
        }

        if (array_key_exists("IsGray",$param) and $param["IsGray"] !== null) {
            $this->IsGray = $param["IsGray"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("Ports",$param) and $param["Ports"] !== null) {
            $this->Ports = [];
            foreach ($param["Ports"] as $key => $value){
                $obj = new SpartaProtectionPort();
                $obj->deserialize($value);
                array_push($this->Ports, $obj);
            }
        }

        if (array_key_exists("IsKeepAlive",$param) and $param["IsKeepAlive"] !== null) {
            $this->IsKeepAlive = $param["IsKeepAlive"];
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
