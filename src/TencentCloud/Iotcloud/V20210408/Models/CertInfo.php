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
namespace TencentCloud\Iotcloud\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * X.509 certificate information
 *
 * @method string getCertName() Obtain Certificate name
 * @method void setCertName(string $CertName) Set Certificate name
 * @method string getCertSN() Obtain Hex sequence number of a certificate
 * @method void setCertSN(string $CertSN) Set Hex sequence number of a certificate
 * @method string getIssuerName() Obtain Certificate issuer
 * @method void setIssuerName(string $IssuerName) Set Certificate issuer
 * @method string getSubject() Obtain Certificate subject
 * @method void setSubject(string $Subject) Set Certificate subject
 * @method integer getCreateTime() Obtain Certificate creation time (timestamp in milliseconds)
 * @method void setCreateTime(integer $CreateTime) Set Certificate creation time (timestamp in milliseconds)
 * @method integer getEffectiveTime() Obtain Certificate effective time (timestamp in milliseconds)
 * @method void setEffectiveTime(integer $EffectiveTime) Set Certificate effective time (timestamp in milliseconds)
 * @method integer getExpireTime() Obtain Certificate expiration time (timestamp in milliseconds)
 * @method void setExpireTime(integer $ExpireTime) Set Certificate expiration time (timestamp in milliseconds)
 * @method string getCertText() Obtain X.509 certificate content
 * @method void setCertText(string $CertText) Set X.509 certificate content
 */
class CertInfo extends AbstractModel
{
    /**
     * @var string Certificate name
     */
    public $CertName;

    /**
     * @var string Hex sequence number of a certificate
     */
    public $CertSN;

    /**
     * @var string Certificate issuer
     */
    public $IssuerName;

    /**
     * @var string Certificate subject
     */
    public $Subject;

    /**
     * @var integer Certificate creation time (timestamp in milliseconds)
     */
    public $CreateTime;

    /**
     * @var integer Certificate effective time (timestamp in milliseconds)
     */
    public $EffectiveTime;

    /**
     * @var integer Certificate expiration time (timestamp in milliseconds)
     */
    public $ExpireTime;

    /**
     * @var string X.509 certificate content
     */
    public $CertText;

    /**
     * @param string $CertName Certificate name
     * @param string $CertSN Hex sequence number of a certificate
     * @param string $IssuerName Certificate issuer
     * @param string $Subject Certificate subject
     * @param integer $CreateTime Certificate creation time (timestamp in milliseconds)
     * @param integer $EffectiveTime Certificate effective time (timestamp in milliseconds)
     * @param integer $ExpireTime Certificate expiration time (timestamp in milliseconds)
     * @param string $CertText X.509 certificate content
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
        if (array_key_exists("CertName",$param) and $param["CertName"] !== null) {
            $this->CertName = $param["CertName"];
        }

        if (array_key_exists("CertSN",$param) and $param["CertSN"] !== null) {
            $this->CertSN = $param["CertSN"];
        }

        if (array_key_exists("IssuerName",$param) and $param["IssuerName"] !== null) {
            $this->IssuerName = $param["IssuerName"];
        }

        if (array_key_exists("Subject",$param) and $param["Subject"] !== null) {
            $this->Subject = $param["Subject"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EffectiveTime",$param) and $param["EffectiveTime"] !== null) {
            $this->EffectiveTime = $param["EffectiveTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("CertText",$param) and $param["CertText"] !== null) {
            $this->CertText = $param["CertText"];
        }
    }
}
