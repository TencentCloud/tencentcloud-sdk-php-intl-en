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
 * HTTPS configuration of domain name.
 *
 * @method string getSwitch() Obtain HTTPS configuration switch. Valid values: on, off. If the domain name with HTTPS configuration enabled is being deployed, this switch will be `off`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSwitch(string $Switch) Set HTTPS configuration switch. Valid values: on, off. If the domain name with HTTPS configuration enabled is being deployed, this switch will be `off`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getHttp2() Obtain Whether to enable HTTP2. Valid values: on, off.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setHttp2(string $Http2) Set Whether to enable HTTP2. Valid values: on, off.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getOcspStapling() Obtain Whether to enable the OCSP feature. Valid values: on, off.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOcspStapling(string $OcspStapling) Set Whether to enable the OCSP feature. Valid values: on, off.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getVerifyClient() Obtain Whether to enable the client certificate verification feature. Valid values: on, off. The client certificate information must be uploaded if this feature is enabled.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVerifyClient(string $VerifyClient) Set Whether to enable the client certificate verification feature. Valid values: on, off. The client certificate information must be uploaded if this feature is enabled.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method ServerCert getCertInfo() Obtain Server certificate configuration information.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCertInfo(ServerCert $CertInfo) Set Server certificate configuration information.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method ClientCert getClientCertInfo() Obtain Client certificate configuration information.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setClientCertInfo(ClientCert $ClientCertInfo) Set Client certificate configuration information.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getSpdy() Obtain Whether to enable SPDY. Valid values: on, off.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSpdy(string $Spdy) Set Whether to enable SPDY. Valid values: on, off.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getSslStatus() Obtain HTTPS certificate deployment status. Valid values: closed (disabled), deploying (deploying), deployed (deployment succeeded), failed (deployment failed). This parameter cannot be used as an input parameter.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSslStatus(string $SslStatus) Set HTTPS certificate deployment status. Valid values: closed (disabled), deploying (deploying), deployed (deployment succeeded), failed (deployment failed). This parameter cannot be used as an input parameter.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method Hsts getHsts() Obtain HSTS configuration
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setHsts(Hsts $Hsts) Set HSTS configuration
Note: this field may return null, indicating that no valid values can be obtained.
 */
class Https extends AbstractModel
{
    /**
     * @var string HTTPS configuration switch. Valid values: on, off. If the domain name with HTTPS configuration enabled is being deployed, this switch will be `off`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Switch;

    /**
     * @var string Whether to enable HTTP2. Valid values: on, off.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Http2;

    /**
     * @var string Whether to enable the OCSP feature. Valid values: on, off.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OcspStapling;

    /**
     * @var string Whether to enable the client certificate verification feature. Valid values: on, off. The client certificate information must be uploaded if this feature is enabled.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $VerifyClient;

    /**
     * @var ServerCert Server certificate configuration information.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CertInfo;

    /**
     * @var ClientCert Client certificate configuration information.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ClientCertInfo;

    /**
     * @var string Whether to enable SPDY. Valid values: on, off.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Spdy;

    /**
     * @var string HTTPS certificate deployment status. Valid values: closed (disabled), deploying (deploying), deployed (deployment succeeded), failed (deployment failed). This parameter cannot be used as an input parameter.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SslStatus;

    /**
     * @var Hsts HSTS configuration
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Hsts;

    /**
     * @param string $Switch HTTPS configuration switch. Valid values: on, off. If the domain name with HTTPS configuration enabled is being deployed, this switch will be `off`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Http2 Whether to enable HTTP2. Valid values: on, off.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $OcspStapling Whether to enable the OCSP feature. Valid values: on, off.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $VerifyClient Whether to enable the client certificate verification feature. Valid values: on, off. The client certificate information must be uploaded if this feature is enabled.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param ServerCert $CertInfo Server certificate configuration information.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param ClientCert $ClientCertInfo Client certificate configuration information.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Spdy Whether to enable SPDY. Valid values: on, off.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $SslStatus HTTPS certificate deployment status. Valid values: closed (disabled), deploying (deploying), deployed (deployment succeeded), failed (deployment failed). This parameter cannot be used as an input parameter.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param Hsts $Hsts HSTS configuration
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Http2",$param) and $param["Http2"] !== null) {
            $this->Http2 = $param["Http2"];
        }

        if (array_key_exists("OcspStapling",$param) and $param["OcspStapling"] !== null) {
            $this->OcspStapling = $param["OcspStapling"];
        }

        if (array_key_exists("VerifyClient",$param) and $param["VerifyClient"] !== null) {
            $this->VerifyClient = $param["VerifyClient"];
        }

        if (array_key_exists("CertInfo",$param) and $param["CertInfo"] !== null) {
            $this->CertInfo = new ServerCert();
            $this->CertInfo->deserialize($param["CertInfo"]);
        }

        if (array_key_exists("ClientCertInfo",$param) and $param["ClientCertInfo"] !== null) {
            $this->ClientCertInfo = new ClientCert();
            $this->ClientCertInfo->deserialize($param["ClientCertInfo"]);
        }

        if (array_key_exists("Spdy",$param) and $param["Spdy"] !== null) {
            $this->Spdy = $param["Spdy"];
        }

        if (array_key_exists("SslStatus",$param) and $param["SslStatus"] !== null) {
            $this->SslStatus = $param["SslStatus"];
        }

        if (array_key_exists("Hsts",$param) and $param["Hsts"] !== null) {
            $this->Hsts = new Hsts();
            $this->Hsts->deserialize($param["Hsts"]);
        }
    }
}
