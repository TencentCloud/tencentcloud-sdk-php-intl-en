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
 * @method string getDomain() 获取Forwarding rule domain name.
 * @method void setDomain(string $Domain) 设置Forwarding rule domain name.
 * @method array getRuleSet() 获取Forwarding rule list of the domain name.
 * @method void setRuleSet(array $RuleSet) 设置Forwarding rule list of the domain name.
 * @method string getCertificateId() 获取Server certificate ID of the domain. When it is `default`, it indicates that the default certificate will be used (i.e., the certificate configured for the listener).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCertificateId(string $CertificateId) 设置Server certificate ID of the domain. When it is `default`, it indicates that the default certificate will be used (i.e., the certificate configured for the listener).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCertificateAlias() 获取Server certificate name of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCertificateAlias(string $CertificateAlias) 设置Server certificate name of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClientCertificateId() 获取Client certificate ID of the domain. When it is `default`, it indicates that the default certificate will be used (i.e., the certificate configured for the listener).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClientCertificateId(string $ClientCertificateId) 设置Client certificate ID of the domain. When it is `default`, it indicates that the default certificate will be used (i.e., the certificate configured for the listener).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClientCertificateAlias() 获取Client certificate name of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClientCertificateAlias(string $ClientCertificateAlias) 设置Client certificate name of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBasicAuthConfId() 获取Basic authentication configuration ID of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBasicAuthConfId(string $BasicAuthConfId) 设置Basic authentication configuration ID of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBasicAuth() 获取Basic authentication status:
0: disabled;
1: enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBasicAuth(integer $BasicAuth) 设置Basic authentication status:
0: disabled;
1: enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBasicAuthConfAlias() 获取Basic authentication configuration name of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBasicAuthConfAlias(string $BasicAuthConfAlias) 设置Basic authentication configuration name of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRealServerCertificateId() 获取Origin server authentication certificate ID of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRealServerCertificateId(string $RealServerCertificateId) 设置Origin server authentication certificate ID of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRealServerAuth() 获取Origin server authentication status:
0: disabled;
1: enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRealServerAuth(integer $RealServerAuth) 设置Origin server authentication status:
0: disabled;
1: enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRealServerCertificateAlias() 获取Origin server authentication certificate name of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRealServerCertificateAlias(string $RealServerCertificateAlias) 设置Origin server authentication certificate name of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGaapCertificateId() 获取Connection authentication certificate ID of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGaapCertificateId(string $GaapCertificateId) 设置Connection authentication certificate ID of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getGaapAuth() 获取Connection authentication status:
0: disabled;
1: enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGaapAuth(integer $GaapAuth) 设置Connection authentication status:
0: disabled;
1: enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGaapCertificateAlias() 获取Connection authentication certificate name of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGaapCertificateAlias(string $GaapCertificateAlias) 设置Connection authentication certificate name of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRealServerCertificateDomain() 获取Origin server authentication domain name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRealServerCertificateDomain(string $RealServerCertificateDomain) 设置Origin server authentication domain name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPolyClientCertificateAliasInfo() 获取Returns IDs and list of multiple certificates when there are multiple client certificates.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPolyClientCertificateAliasInfo(array $PolyClientCertificateAliasInfo) 设置Returns IDs and list of multiple certificates when there are multiple client certificates.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPolyRealServerCertificateAliasInfo() 获取
 * @method void setPolyRealServerCertificateAliasInfo(array $PolyRealServerCertificateAliasInfo) 设置
 */

/**
 *Forwarding rule information of Layer-7 listeners classified by domain name
 */
class DomainRuleSet extends AbstractModel
{
    /**
     * @var string Forwarding rule domain name.
     */
    public $Domain;

    /**
     * @var array Forwarding rule list of the domain name.
     */
    public $RuleSet;

    /**
     * @var string Server certificate ID of the domain. When it is `default`, it indicates that the default certificate will be used (i.e., the certificate configured for the listener).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CertificateId;

    /**
     * @var string Server certificate name of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CertificateAlias;

    /**
     * @var string Client certificate ID of the domain. When it is `default`, it indicates that the default certificate will be used (i.e., the certificate configured for the listener).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClientCertificateId;

    /**
     * @var string Client certificate name of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClientCertificateAlias;

    /**
     * @var string Basic authentication configuration ID of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BasicAuthConfId;

    /**
     * @var integer Basic authentication status:
0: disabled;
1: enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BasicAuth;

    /**
     * @var string Basic authentication configuration name of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BasicAuthConfAlias;

    /**
     * @var string Origin server authentication certificate ID of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RealServerCertificateId;

    /**
     * @var integer Origin server authentication status:
0: disabled;
1: enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RealServerAuth;

    /**
     * @var string Origin server authentication certificate name of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RealServerCertificateAlias;

    /**
     * @var string Connection authentication certificate ID of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GaapCertificateId;

    /**
     * @var integer Connection authentication status:
0: disabled;
1: enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GaapAuth;

    /**
     * @var string Connection authentication certificate name of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GaapCertificateAlias;

    /**
     * @var string Origin server authentication domain name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RealServerCertificateDomain;

    /**
     * @var array Returns IDs and list of multiple certificates when there are multiple client certificates.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PolyClientCertificateAliasInfo;

    /**
     * @var array 
     */
    public $PolyRealServerCertificateAliasInfo;
    /**
     * @param string $Domain Forwarding rule domain name.
     * @param array $RuleSet Forwarding rule list of the domain name.
     * @param string $CertificateId Server certificate ID of the domain. When it is `default`, it indicates that the default certificate will be used (i.e., the certificate configured for the listener).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CertificateAlias Server certificate name of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClientCertificateId Client certificate ID of the domain. When it is `default`, it indicates that the default certificate will be used (i.e., the certificate configured for the listener).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClientCertificateAlias Client certificate name of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BasicAuthConfId Basic authentication configuration ID of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BasicAuth Basic authentication status:
0: disabled;
1: enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BasicAuthConfAlias Basic authentication configuration name of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RealServerCertificateId Origin server authentication certificate ID of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RealServerAuth Origin server authentication status:
0: disabled;
1: enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RealServerCertificateAlias Origin server authentication certificate name of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GaapCertificateId Connection authentication certificate ID of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $GaapAuth Connection authentication status:
0: disabled;
1: enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GaapCertificateAlias Connection authentication certificate name of the domain name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RealServerCertificateDomain Origin server authentication domain name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $PolyClientCertificateAliasInfo Returns IDs and list of multiple certificates when there are multiple client certificates.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $PolyRealServerCertificateAliasInfo 
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("RuleSet",$param) and $param["RuleSet"] !== null) {
            $this->RuleSet = [];
            foreach ($param["RuleSet"] as $key => $value){
                $obj = new RuleInfo();
                $obj->deserialize($value);
                array_push($this->RuleSet, $obj);
            }
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("CertificateAlias",$param) and $param["CertificateAlias"] !== null) {
            $this->CertificateAlias = $param["CertificateAlias"];
        }

        if (array_key_exists("ClientCertificateId",$param) and $param["ClientCertificateId"] !== null) {
            $this->ClientCertificateId = $param["ClientCertificateId"];
        }

        if (array_key_exists("ClientCertificateAlias",$param) and $param["ClientCertificateAlias"] !== null) {
            $this->ClientCertificateAlias = $param["ClientCertificateAlias"];
        }

        if (array_key_exists("BasicAuthConfId",$param) and $param["BasicAuthConfId"] !== null) {
            $this->BasicAuthConfId = $param["BasicAuthConfId"];
        }

        if (array_key_exists("BasicAuth",$param) and $param["BasicAuth"] !== null) {
            $this->BasicAuth = $param["BasicAuth"];
        }

        if (array_key_exists("BasicAuthConfAlias",$param) and $param["BasicAuthConfAlias"] !== null) {
            $this->BasicAuthConfAlias = $param["BasicAuthConfAlias"];
        }

        if (array_key_exists("RealServerCertificateId",$param) and $param["RealServerCertificateId"] !== null) {
            $this->RealServerCertificateId = $param["RealServerCertificateId"];
        }

        if (array_key_exists("RealServerAuth",$param) and $param["RealServerAuth"] !== null) {
            $this->RealServerAuth = $param["RealServerAuth"];
        }

        if (array_key_exists("RealServerCertificateAlias",$param) and $param["RealServerCertificateAlias"] !== null) {
            $this->RealServerCertificateAlias = $param["RealServerCertificateAlias"];
        }

        if (array_key_exists("GaapCertificateId",$param) and $param["GaapCertificateId"] !== null) {
            $this->GaapCertificateId = $param["GaapCertificateId"];
        }

        if (array_key_exists("GaapAuth",$param) and $param["GaapAuth"] !== null) {
            $this->GaapAuth = $param["GaapAuth"];
        }

        if (array_key_exists("GaapCertificateAlias",$param) and $param["GaapCertificateAlias"] !== null) {
            $this->GaapCertificateAlias = $param["GaapCertificateAlias"];
        }

        if (array_key_exists("RealServerCertificateDomain",$param) and $param["RealServerCertificateDomain"] !== null) {
            $this->RealServerCertificateDomain = $param["RealServerCertificateDomain"];
        }

        if (array_key_exists("PolyClientCertificateAliasInfo",$param) and $param["PolyClientCertificateAliasInfo"] !== null) {
            $this->PolyClientCertificateAliasInfo = [];
            foreach ($param["PolyClientCertificateAliasInfo"] as $key => $value){
                $obj = new CertificateAliasInfo();
                $obj->deserialize($value);
                array_push($this->PolyClientCertificateAliasInfo, $obj);
            }
        }

        if (array_key_exists("PolyRealServerCertificateAliasInfo",$param) and $param["PolyRealServerCertificateAliasInfo"] !== null) {
            $this->PolyRealServerCertificateAliasInfo = [];
            foreach ($param["PolyRealServerCertificateAliasInfo"] as $key => $value){
                $obj = new CertificateAliasInfo();
                $obj->deserialize($value);
                array_push($this->PolyRealServerCertificateAliasInfo, $obj);
            }
        }
    }
}
