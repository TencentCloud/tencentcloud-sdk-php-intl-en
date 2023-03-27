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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Ingress configuration
 *
 * @method string getEnvironmentId() Obtain Environment ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getClusterNamespace() Obtain Environment namespace
 * @method void setClusterNamespace(string $ClusterNamespace) Set Environment namespace
 * @method string getAddressIPVersion() Obtain ip version
 * @method void setAddressIPVersion(string $AddressIPVersion) Set ip version
 * @method string getIngressName() Obtain ingress name
 * @method void setIngressName(string $IngressName) Set ingress name
 * @method array getRules() Obtain Rules configuration
 * @method void setRules(array $Rules) Set Rules configuration
 * @method string getClbId() Obtain clb ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setClbId(string $ClbId) Set clb ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method array getTls() Obtain TLS configuration
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setTls(array $Tls) Set TLS configuration
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getClusterId() Obtain Environment cluster ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setClusterId(string $ClusterId) Set Environment cluster ID
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getVip() Obtain clb ip
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setVip(string $Vip) Set clb ip
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getMixed() Obtain Whether to listen on both the HTTP 80 port and HTTPS 443 port. The default value is `false`. The optional value `true` means listening on both the HTTP 80 port and HTTPS 443 port.
 * @method void setMixed(boolean $Mixed) Set Whether to listen on both the HTTP 80 port and HTTPS 443 port. The default value is `false`. The optional value `true` means listening on both the HTTP 80 port and HTTPS 443 port.
 * @method string getRewriteType() Obtain Redirection mode. Values:
- `AUTO` (automatically redirect HTTP to HTTPS)
- `NONE` (no redirection)
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRewriteType(string $RewriteType) Set Redirection mode. Values:
- `AUTO` (automatically redirect HTTP to HTTPS)
- `NONE` (no redirection)
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getDomain() Obtain CLB domain name
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setDomain(string $Domain) Set CLB domain name
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class IngressInfo extends AbstractModel
{
    /**
     * @var string Environment ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $EnvironmentId;

    /**
     * @var string Environment namespace
     */
    public $ClusterNamespace;

    /**
     * @var string ip version
     */
    public $AddressIPVersion;

    /**
     * @var string ingress name
     */
    public $IngressName;

    /**
     * @var array Rules configuration
     */
    public $Rules;

    /**
     * @var string clb ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ClbId;

    /**
     * @var array TLS configuration
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Tls;

    /**
     * @var string Environment cluster ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ClusterId;

    /**
     * @var string clb ip
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Vip;

    /**
     * @var string Creation time
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var boolean Whether to listen on both the HTTP 80 port and HTTPS 443 port. The default value is `false`. The optional value `true` means listening on both the HTTP 80 port and HTTPS 443 port.
     */
    public $Mixed;

    /**
     * @var string Redirection mode. Values:
- `AUTO` (automatically redirect HTTP to HTTPS)
- `NONE` (no redirection)
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RewriteType;

    /**
     * @var string CLB domain name
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Domain;

    /**
     * @param string $EnvironmentId Environment ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ClusterNamespace Environment namespace
     * @param string $AddressIPVersion ip version
     * @param string $IngressName ingress name
     * @param array $Rules Rules configuration
     * @param string $ClbId clb ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param array $Tls TLS configuration
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $ClusterId Environment cluster ID
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $Vip clb ip
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $Mixed Whether to listen on both the HTTP 80 port and HTTPS 443 port. The default value is `false`. The optional value `true` means listening on both the HTTP 80 port and HTTPS 443 port.
     * @param string $RewriteType Redirection mode. Values:
- `AUTO` (automatically redirect HTTP to HTTPS)
- `NONE` (no redirection)
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Domain CLB domain name
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("ClusterNamespace",$param) and $param["ClusterNamespace"] !== null) {
            $this->ClusterNamespace = $param["ClusterNamespace"];
        }

        if (array_key_exists("AddressIPVersion",$param) and $param["AddressIPVersion"] !== null) {
            $this->AddressIPVersion = $param["AddressIPVersion"];
        }

        if (array_key_exists("IngressName",$param) and $param["IngressName"] !== null) {
            $this->IngressName = $param["IngressName"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new IngressRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("ClbId",$param) and $param["ClbId"] !== null) {
            $this->ClbId = $param["ClbId"];
        }

        if (array_key_exists("Tls",$param) and $param["Tls"] !== null) {
            $this->Tls = [];
            foreach ($param["Tls"] as $key => $value){
                $obj = new IngressTls();
                $obj->deserialize($value);
                array_push($this->Tls, $obj);
            }
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Mixed",$param) and $param["Mixed"] !== null) {
            $this->Mixed = $param["Mixed"];
        }

        if (array_key_exists("RewriteType",$param) and $param["RewriteType"] !== null) {
            $this->RewriteType = $param["RewriteType"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
