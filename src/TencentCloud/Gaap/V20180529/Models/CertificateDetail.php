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
 * Certificate details, including the certificate ID, name, type, content, and key content.
 *
 * @method string getCertificateId() Obtain Certificate ID
 * @method void setCertificateId(string $CertificateId) Set Certificate ID
 * @method integer getCertificateType() Obtain Certificate type.
 * @method void setCertificateType(integer $CertificateType) Set Certificate type.
 * @method string getCertificateAlias() Obtain Certificate name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCertificateAlias(string $CertificateAlias) Set Certificate name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCertificateContent() Obtain Certificate content.
 * @method void setCertificateContent(string $CertificateContent) Set Certificate content.
 * @method string getCertificateKey() Obtain Key content. This field will be returned if the certificate type is the SSL certificate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCertificateKey(string $CertificateKey) Set Key content. This field will be returned if the certificate type is the SSL certificate.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCreateTime() Obtain Creation time in the format of UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (midnight in UTC/GMT).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(integer $CreateTime) Set Creation time in the format of UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (midnight in UTC/GMT).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBeginTime() Obtain Time that the certificate takes effect. Using the UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (Midnight in UTC/GMT).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBeginTime(integer $BeginTime) Set Time that the certificate takes effect. Using the UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (Midnight in UTC/GMT).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEndTime() Obtain Certificate expiration time. Using the UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (Midnight in UTC/GMT).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(integer $EndTime) Set Certificate expiration time. Using the UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (Midnight in UTC/GMT).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIssuerCN() Obtain Common name of the certificate’s issuer.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIssuerCN(string $IssuerCN) Set Common name of the certificate’s issuer.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubjectCN() Obtain Common name of the certificate subject.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubjectCN(string $SubjectCN) Set Common name of the certificate subject.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CertificateDetail extends AbstractModel
{
    /**
     * @var string Certificate ID
     */
    public $CertificateId;

    /**
     * @var integer Certificate type.
     */
    public $CertificateType;

    /**
     * @var string Certificate name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CertificateAlias;

    /**
     * @var string Certificate content.
     */
    public $CertificateContent;

    /**
     * @var string Key content. This field will be returned if the certificate type is the SSL certificate.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CertificateKey;

    /**
     * @var integer Creation time in the format of UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (midnight in UTC/GMT).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var integer Time that the certificate takes effect. Using the UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (Midnight in UTC/GMT).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BeginTime;

    /**
     * @var integer Certificate expiration time. Using the UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (Midnight in UTC/GMT).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var string Common name of the certificate’s issuer.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IssuerCN;

    /**
     * @var string Common name of the certificate subject.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubjectCN;

    /**
     * @param string $CertificateId Certificate ID
     * @param integer $CertificateType Certificate type.
     * @param string $CertificateAlias Certificate name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CertificateContent Certificate content.
     * @param string $CertificateKey Key content. This field will be returned if the certificate type is the SSL certificate.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CreateTime Creation time in the format of UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (midnight in UTC/GMT).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BeginTime Time that the certificate takes effect. Using the UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (Midnight in UTC/GMT).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EndTime Certificate expiration time. Using the UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (Midnight in UTC/GMT).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IssuerCN Common name of the certificate’s issuer.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubjectCN Common name of the certificate subject.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("CertificateType",$param) and $param["CertificateType"] !== null) {
            $this->CertificateType = $param["CertificateType"];
        }

        if (array_key_exists("CertificateAlias",$param) and $param["CertificateAlias"] !== null) {
            $this->CertificateAlias = $param["CertificateAlias"];
        }

        if (array_key_exists("CertificateContent",$param) and $param["CertificateContent"] !== null) {
            $this->CertificateContent = $param["CertificateContent"];
        }

        if (array_key_exists("CertificateKey",$param) and $param["CertificateKey"] !== null) {
            $this->CertificateKey = $param["CertificateKey"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("IssuerCN",$param) and $param["IssuerCN"] !== null) {
            $this->IssuerCN = $param["IssuerCN"];
        }

        if (array_key_exists("SubjectCN",$param) and $param["SubjectCN"] !== null) {
            $this->SubjectCN = $param["SubjectCN"];
        }
    }
}
