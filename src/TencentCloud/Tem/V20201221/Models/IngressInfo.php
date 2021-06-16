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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Ingress configuration
 *
 * @method string getNamespaceId() Obtain tem namespaceId
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNamespaceId(string $NamespaceId) Set tem namespaceId
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getEksNamespace() Obtain eks namespace
 * @method void setEksNamespace(string $EksNamespace) Set eks namespace
 * @method string getAddressIPVersion() Obtain ip version
 * @method void setAddressIPVersion(string $AddressIPVersion) Set ip version
 * @method string getName() Obtain ingress name
 * @method void setName(string $Name) Set ingress name
 * @method array getRules() Obtain Rules configuration
 * @method void setRules(array $Rules) Set Rules configuration
 * @method string getClbId() Obtain clb ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setClbId(string $ClbId) Set clb ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getTls() Obtain TLS configuration
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTls(array $Tls) Set TLS configuration
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getClusterId() Obtain eks clusterId
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setClusterId(string $ClusterId) Set eks clusterId
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getVip() Obtain clb ip
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setVip(string $Vip) Set clb ip
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Creation time.
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
Note: this field may return `null`, indicating that no valid value can be obtained.
 * @method boolean getMixed() Obtain Whether to listen on both the HTTP Port 80 and HTTPS Port 443. The default value is `false`. The optional value `true` means listening on both the HTTP Port 80 and HTTPS Port 443.
 * @method void setMixed(boolean $Mixed) Set Whether to listen on both the HTTP Port 80 and HTTPS Port 443. The default value is `false`. The optional value `true` means listening on both the HTTP Port 80 and HTTPS Port 443.
 */
class IngressInfo extends AbstractModel
{
    /**
     * @var string tem namespaceId
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $NamespaceId;

    /**
     * @var string eks namespace
     */
    public $EksNamespace;

    /**
     * @var string ip version
     */
    public $AddressIPVersion;

    /**
     * @var string ingress name
     */
    public $Name;

    /**
     * @var array Rules configuration
     */
    public $Rules;

    /**
     * @var string clb ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ClbId;

    /**
     * @var array TLS configuration
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Tls;

    /**
     * @var string eks clusterId
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterId;

    /**
     * @var string clb ip
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Vip;

    /**
     * @var string Creation time.
Note: this field may return `null`, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @var boolean Whether to listen on both the HTTP Port 80 and HTTPS Port 443. The default value is `false`. The optional value `true` means listening on both the HTTP Port 80 and HTTPS Port 443.
     */
    public $Mixed;

    /**
     * @param string $NamespaceId tem namespaceId
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $EksNamespace eks namespace
     * @param string $AddressIPVersion ip version
     * @param string $Name ingress name
     * @param array $Rules Rules configuration
     * @param string $ClbId clb ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Tls TLS configuration
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ClusterId eks clusterId
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Vip clb ip
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Creation time.
Note: this field may return `null`, indicating that no valid value can be obtained.
     * @param boolean $Mixed Whether to listen on both the HTTP Port 80 and HTTPS Port 443. The default value is `false`. The optional value `true` means listening on both the HTTP Port 80 and HTTPS Port 443.
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
        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("EksNamespace",$param) and $param["EksNamespace"] !== null) {
            $this->EksNamespace = $param["EksNamespace"];
        }

        if (array_key_exists("AddressIPVersion",$param) and $param["AddressIPVersion"] !== null) {
            $this->AddressIPVersion = $param["AddressIPVersion"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
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
    }
}
