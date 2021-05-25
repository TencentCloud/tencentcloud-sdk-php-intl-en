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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Internet Key Exchange (IKE) configuration. IKE has a self-protection mechanism. The network security protocol is configured by the user.
 *
 * @method string getPropoEncryAlgorithm() Obtain Encryption algorithm. Valid values: `3DES-CBC`, `AES-CBC-128`, `AES-CBS-192`, `AES-CBC-256`, `DES-CBC`, and `SM4`; default value: `3DES-CBC`.
 * @method void setPropoEncryAlgorithm(string $PropoEncryAlgorithm) Set Encryption algorithm. Valid values: `3DES-CBC`, `AES-CBC-128`, `AES-CBS-192`, `AES-CBC-256`, `DES-CBC`, and `SM4`; default value: `3DES-CBC`.
 * @method string getPropoAuthenAlgorithm() Obtain Authentication algorithm. Valid values: `MD5`, `SHA1` and `SHA-256`; default value: `MD5`.
 * @method void setPropoAuthenAlgorithm(string $PropoAuthenAlgorithm) Set Authentication algorithm. Valid values: `MD5`, `SHA1` and `SHA-256`; default value: `MD5`.
 * @method string getExchangeMode() Obtain Negotiation mode. Available values: 'AGGRESSIVE' and 'MAIN'. Default is MAIN.
 * @method void setExchangeMode(string $ExchangeMode) Set Negotiation mode. Available values: 'AGGRESSIVE' and 'MAIN'. Default is MAIN.
 * @method string getLocalIdentity() Obtain Type of local identity. Available values: 'ADDRESS' and 'FQDN'. Default is ADDRESS.
 * @method void setLocalIdentity(string $LocalIdentity) Set Type of local identity. Available values: 'ADDRESS' and 'FQDN'. Default is ADDRESS.
 * @method string getRemoteIdentity() Obtain Type of remote identity. Available values: 'ADDRESS' and 'FQDN'. Default is ADDRESS.
 * @method void setRemoteIdentity(string $RemoteIdentity) Set Type of remote identity. Available values: 'ADDRESS' and 'FQDN'. Default is ADDRESS.
 * @method string getLocalAddress() Obtain Local identity. When ADDRESS is selected for LocalIdentity, LocalAddress is required. The default LocalAddress is the public IP of the VPN gateway.
 * @method void setLocalAddress(string $LocalAddress) Set Local identity. When ADDRESS is selected for LocalIdentity, LocalAddress is required. The default LocalAddress is the public IP of the VPN gateway.
 * @method string getRemoteAddress() Obtain Remote identity. When ADDRESS is selected for RemoteIdentity, RemoteAddress is required.
 * @method void setRemoteAddress(string $RemoteAddress) Set Remote identity. When ADDRESS is selected for RemoteIdentity, RemoteAddress is required.
 * @method string getLocalFqdnName() Obtain Local identity. When FQDN is selected for LocalIdentity, LocalFqdnName is required.
 * @method void setLocalFqdnName(string $LocalFqdnName) Set Local identity. When FQDN is selected for LocalIdentity, LocalFqdnName is required.
 * @method string getRemoteFqdnName() Obtain Remote identity. When FQDN is selected for RemoteIdentity, RemoteFqdnName is required.
 * @method void setRemoteFqdnName(string $RemoteFqdnName) Set Remote identity. When FQDN is selected for RemoteIdentity, RemoteFqdnName is required.
 * @method string getDhGroupName() Obtain DH group. Specify the DH group used for exchanging the key via IKE. Available values: 'GROUP1', 'GROUP2', 'GROUP5', 'GROUP14', and 'GROUP24'.
 * @method void setDhGroupName(string $DhGroupName) Set DH group. Specify the DH group used for exchanging the key via IKE. Available values: 'GROUP1', 'GROUP2', 'GROUP5', 'GROUP14', and 'GROUP24'.
 * @method integer getIKESaLifetimeSeconds() Obtain IKE SA lifetime (in sec). Value range: 60-604800
 * @method void setIKESaLifetimeSeconds(integer $IKESaLifetimeSeconds) Set IKE SA lifetime (in sec). Value range: 60-604800
 * @method string getIKEVersion() Obtain IKE version
 * @method void setIKEVersion(string $IKEVersion) Set IKE version
 */
class IKEOptionsSpecification extends AbstractModel
{
    /**
     * @var string Encryption algorithm. Valid values: `3DES-CBC`, `AES-CBC-128`, `AES-CBS-192`, `AES-CBC-256`, `DES-CBC`, and `SM4`; default value: `3DES-CBC`.
     */
    public $PropoEncryAlgorithm;

    /**
     * @var string Authentication algorithm. Valid values: `MD5`, `SHA1` and `SHA-256`; default value: `MD5`.
     */
    public $PropoAuthenAlgorithm;

    /**
     * @var string Negotiation mode. Available values: 'AGGRESSIVE' and 'MAIN'. Default is MAIN.
     */
    public $ExchangeMode;

    /**
     * @var string Type of local identity. Available values: 'ADDRESS' and 'FQDN'. Default is ADDRESS.
     */
    public $LocalIdentity;

    /**
     * @var string Type of remote identity. Available values: 'ADDRESS' and 'FQDN'. Default is ADDRESS.
     */
    public $RemoteIdentity;

    /**
     * @var string Local identity. When ADDRESS is selected for LocalIdentity, LocalAddress is required. The default LocalAddress is the public IP of the VPN gateway.
     */
    public $LocalAddress;

    /**
     * @var string Remote identity. When ADDRESS is selected for RemoteIdentity, RemoteAddress is required.
     */
    public $RemoteAddress;

    /**
     * @var string Local identity. When FQDN is selected for LocalIdentity, LocalFqdnName is required.
     */
    public $LocalFqdnName;

    /**
     * @var string Remote identity. When FQDN is selected for RemoteIdentity, RemoteFqdnName is required.
     */
    public $RemoteFqdnName;

    /**
     * @var string DH group. Specify the DH group used for exchanging the key via IKE. Available values: 'GROUP1', 'GROUP2', 'GROUP5', 'GROUP14', and 'GROUP24'.
     */
    public $DhGroupName;

    /**
     * @var integer IKE SA lifetime (in sec). Value range: 60-604800
     */
    public $IKESaLifetimeSeconds;

    /**
     * @var string IKE version
     */
    public $IKEVersion;

    /**
     * @param string $PropoEncryAlgorithm Encryption algorithm. Valid values: `3DES-CBC`, `AES-CBC-128`, `AES-CBS-192`, `AES-CBC-256`, `DES-CBC`, and `SM4`; default value: `3DES-CBC`.
     * @param string $PropoAuthenAlgorithm Authentication algorithm. Valid values: `MD5`, `SHA1` and `SHA-256`; default value: `MD5`.
     * @param string $ExchangeMode Negotiation mode. Available values: 'AGGRESSIVE' and 'MAIN'. Default is MAIN.
     * @param string $LocalIdentity Type of local identity. Available values: 'ADDRESS' and 'FQDN'. Default is ADDRESS.
     * @param string $RemoteIdentity Type of remote identity. Available values: 'ADDRESS' and 'FQDN'. Default is ADDRESS.
     * @param string $LocalAddress Local identity. When ADDRESS is selected for LocalIdentity, LocalAddress is required. The default LocalAddress is the public IP of the VPN gateway.
     * @param string $RemoteAddress Remote identity. When ADDRESS is selected for RemoteIdentity, RemoteAddress is required.
     * @param string $LocalFqdnName Local identity. When FQDN is selected for LocalIdentity, LocalFqdnName is required.
     * @param string $RemoteFqdnName Remote identity. When FQDN is selected for RemoteIdentity, RemoteFqdnName is required.
     * @param string $DhGroupName DH group. Specify the DH group used for exchanging the key via IKE. Available values: 'GROUP1', 'GROUP2', 'GROUP5', 'GROUP14', and 'GROUP24'.
     * @param integer $IKESaLifetimeSeconds IKE SA lifetime (in sec). Value range: 60-604800
     * @param string $IKEVersion IKE version
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
        if (array_key_exists("PropoEncryAlgorithm",$param) and $param["PropoEncryAlgorithm"] !== null) {
            $this->PropoEncryAlgorithm = $param["PropoEncryAlgorithm"];
        }

        if (array_key_exists("PropoAuthenAlgorithm",$param) and $param["PropoAuthenAlgorithm"] !== null) {
            $this->PropoAuthenAlgorithm = $param["PropoAuthenAlgorithm"];
        }

        if (array_key_exists("ExchangeMode",$param) and $param["ExchangeMode"] !== null) {
            $this->ExchangeMode = $param["ExchangeMode"];
        }

        if (array_key_exists("LocalIdentity",$param) and $param["LocalIdentity"] !== null) {
            $this->LocalIdentity = $param["LocalIdentity"];
        }

        if (array_key_exists("RemoteIdentity",$param) and $param["RemoteIdentity"] !== null) {
            $this->RemoteIdentity = $param["RemoteIdentity"];
        }

        if (array_key_exists("LocalAddress",$param) and $param["LocalAddress"] !== null) {
            $this->LocalAddress = $param["LocalAddress"];
        }

        if (array_key_exists("RemoteAddress",$param) and $param["RemoteAddress"] !== null) {
            $this->RemoteAddress = $param["RemoteAddress"];
        }

        if (array_key_exists("LocalFqdnName",$param) and $param["LocalFqdnName"] !== null) {
            $this->LocalFqdnName = $param["LocalFqdnName"];
        }

        if (array_key_exists("RemoteFqdnName",$param) and $param["RemoteFqdnName"] !== null) {
            $this->RemoteFqdnName = $param["RemoteFqdnName"];
        }

        if (array_key_exists("DhGroupName",$param) and $param["DhGroupName"] !== null) {
            $this->DhGroupName = $param["DhGroupName"];
        }

        if (array_key_exists("IKESaLifetimeSeconds",$param) and $param["IKESaLifetimeSeconds"] !== null) {
            $this->IKESaLifetimeSeconds = $param["IKESaLifetimeSeconds"];
        }

        if (array_key_exists("IKEVersion",$param) and $param["IKEVersion"] !== null) {
            $this->IKEVersion = $param["IKEVersion"];
        }
    }
}
