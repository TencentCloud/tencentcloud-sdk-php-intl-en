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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DNSSEC information
 *
 * @method integer getFlags() Obtain Flag
 * @method void setFlags(integer $Flags) Set Flag
 * @method string getAlgorithm() Obtain Encryption algorithm
 * @method void setAlgorithm(string $Algorithm) Set Encryption algorithm
 * @method string getKeyType() Obtain Encryption type
 * @method void setKeyType(string $KeyType) Set Encryption type
 * @method string getDigestType() Obtain Digest type
 * @method void setDigestType(string $DigestType) Set Digest type
 * @method string getDigestAlgorithm() Obtain Digest algorithm
 * @method void setDigestAlgorithm(string $DigestAlgorithm) Set Digest algorithm
 * @method string getDigest() Obtain Digest message
 * @method void setDigest(string $Digest) Set Digest message
 * @method string getDS() Obtain DS record value
 * @method void setDS(string $DS) Set DS record value
 * @method integer getKeyTag() Obtain Key tag
 * @method void setKeyTag(integer $KeyTag) Set Key tag
 * @method string getPublicKey() Obtain Public key
 * @method void setPublicKey(string $PublicKey) Set Public key
 */
class DnssecInfo extends AbstractModel
{
    /**
     * @var integer Flag
     */
    public $Flags;

    /**
     * @var string Encryption algorithm
     */
    public $Algorithm;

    /**
     * @var string Encryption type
     */
    public $KeyType;

    /**
     * @var string Digest type
     */
    public $DigestType;

    /**
     * @var string Digest algorithm
     */
    public $DigestAlgorithm;

    /**
     * @var string Digest message
     */
    public $Digest;

    /**
     * @var string DS record value
     */
    public $DS;

    /**
     * @var integer Key tag
     */
    public $KeyTag;

    /**
     * @var string Public key
     */
    public $PublicKey;

    /**
     * @param integer $Flags Flag
     * @param string $Algorithm Encryption algorithm
     * @param string $KeyType Encryption type
     * @param string $DigestType Digest type
     * @param string $DigestAlgorithm Digest algorithm
     * @param string $Digest Digest message
     * @param string $DS DS record value
     * @param integer $KeyTag Key tag
     * @param string $PublicKey Public key
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
        if (array_key_exists("Flags",$param) and $param["Flags"] !== null) {
            $this->Flags = $param["Flags"];
        }

        if (array_key_exists("Algorithm",$param) and $param["Algorithm"] !== null) {
            $this->Algorithm = $param["Algorithm"];
        }

        if (array_key_exists("KeyType",$param) and $param["KeyType"] !== null) {
            $this->KeyType = $param["KeyType"];
        }

        if (array_key_exists("DigestType",$param) and $param["DigestType"] !== null) {
            $this->DigestType = $param["DigestType"];
        }

        if (array_key_exists("DigestAlgorithm",$param) and $param["DigestAlgorithm"] !== null) {
            $this->DigestAlgorithm = $param["DigestAlgorithm"];
        }

        if (array_key_exists("Digest",$param) and $param["Digest"] !== null) {
            $this->Digest = $param["Digest"];
        }

        if (array_key_exists("DS",$param) and $param["DS"] !== null) {
            $this->DS = $param["DS"];
        }

        if (array_key_exists("KeyTag",$param) and $param["KeyTag"] !== null) {
            $this->KeyTag = $param["KeyTag"];
        }

        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }
    }
}
