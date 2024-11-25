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
 * IPSec configuration. The IPSec secure session configuration is provided by Tencent Cloud.
 *
 * @method string getEncryptAlgorithm() Obtain Encryption algorithm. Valid values: `3DES-CBC`, `AES-CBC-128`, `AES-CBC-192`, `AES-CBC-256`, `DES-CBC`, `SM4`, and `NULL`; default value: `AES-CBC-128`.
 * @method void setEncryptAlgorithm(string $EncryptAlgorithm) Set Encryption algorithm. Valid values: `3DES-CBC`, `AES-CBC-128`, `AES-CBC-192`, `AES-CBC-256`, `DES-CBC`, `SM4`, and `NULL`; default value: `AES-CBC-128`.
 * @method string getIntegrityAlgorith() Obtain Authentication algorithm. Valid values: `MD5`, `SHA1` and `SHA-256`; default value: `SHA1`.
 * @method void setIntegrityAlgorith(string $IntegrityAlgorith) Set Authentication algorithm. Valid values: `MD5`, `SHA1` and `SHA-256`; default value: `SHA1`.
 * @method integer getIPSECSaLifetimeSeconds() Obtain IPsec SA lifetime (in sec). Value range: 180-604800
 * @method void setIPSECSaLifetimeSeconds(integer $IPSECSaLifetimeSeconds) Set IPsec SA lifetime (in sec). Value range: 180-604800
 * @method string getPfsDhGroup() Obtain PFS. Available value: 'NULL', 'DH-GROUP1', 'DH-GROUP2', 'DH-GROUP5', 'DH-GROUP14', and 'DH-GROUP24'. Default is NULL.
 * @method void setPfsDhGroup(string $PfsDhGroup) Set PFS. Available value: 'NULL', 'DH-GROUP1', 'DH-GROUP2', 'DH-GROUP5', 'DH-GROUP14', and 'DH-GROUP24'. Default is NULL.
 * @method integer getIPSECSaLifetimeTraffic() Obtain IPsec SA lifetime (in KB). Value range: 2560-604800
 * @method void setIPSECSaLifetimeTraffic(integer $IPSECSaLifetimeTraffic) Set IPsec SA lifetime (in KB). Value range: 2560-604800
 */
class IPSECOptionsSpecification extends AbstractModel
{
    /**
     * @var string Encryption algorithm. Valid values: `3DES-CBC`, `AES-CBC-128`, `AES-CBC-192`, `AES-CBC-256`, `DES-CBC`, `SM4`, and `NULL`; default value: `AES-CBC-128`.
     */
    public $EncryptAlgorithm;

    /**
     * @var string Authentication algorithm. Valid values: `MD5`, `SHA1` and `SHA-256`; default value: `SHA1`.
     * @deprecated
     */
    public $IntegrityAlgorith;

    /**
     * @var integer IPsec SA lifetime (in sec). Value range: 180-604800
     */
    public $IPSECSaLifetimeSeconds;

    /**
     * @var string PFS. Available value: 'NULL', 'DH-GROUP1', 'DH-GROUP2', 'DH-GROUP5', 'DH-GROUP14', and 'DH-GROUP24'. Default is NULL.
     */
    public $PfsDhGroup;

    /**
     * @var integer IPsec SA lifetime (in KB). Value range: 2560-604800
     */
    public $IPSECSaLifetimeTraffic;

    /**
     * @param string $EncryptAlgorithm Encryption algorithm. Valid values: `3DES-CBC`, `AES-CBC-128`, `AES-CBC-192`, `AES-CBC-256`, `DES-CBC`, `SM4`, and `NULL`; default value: `AES-CBC-128`.
     * @param string $IntegrityAlgorith Authentication algorithm. Valid values: `MD5`, `SHA1` and `SHA-256`; default value: `SHA1`.
     * @param integer $IPSECSaLifetimeSeconds IPsec SA lifetime (in sec). Value range: 180-604800
     * @param string $PfsDhGroup PFS. Available value: 'NULL', 'DH-GROUP1', 'DH-GROUP2', 'DH-GROUP5', 'DH-GROUP14', and 'DH-GROUP24'. Default is NULL.
     * @param integer $IPSECSaLifetimeTraffic IPsec SA lifetime (in KB). Value range: 2560-604800
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
        if (array_key_exists("EncryptAlgorithm",$param) and $param["EncryptAlgorithm"] !== null) {
            $this->EncryptAlgorithm = $param["EncryptAlgorithm"];
        }

        if (array_key_exists("IntegrityAlgorith",$param) and $param["IntegrityAlgorith"] !== null) {
            $this->IntegrityAlgorith = $param["IntegrityAlgorith"];
        }

        if (array_key_exists("IPSECSaLifetimeSeconds",$param) and $param["IPSECSaLifetimeSeconds"] !== null) {
            $this->IPSECSaLifetimeSeconds = $param["IPSECSaLifetimeSeconds"];
        }

        if (array_key_exists("PfsDhGroup",$param) and $param["PfsDhGroup"] !== null) {
            $this->PfsDhGroup = $param["PfsDhGroup"];
        }

        if (array_key_exists("IPSECSaLifetimeTraffic",$param) and $param["IPSECSaLifetimeTraffic"] !== null) {
            $this->IPSECSaLifetimeTraffic = $param["IPSECSaLifetimeTraffic"];
        }
    }
}
