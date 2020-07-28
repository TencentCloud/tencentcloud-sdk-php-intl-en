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
 * Server Certificate
 *
 * @method string getCertificateId() Obtain Certificate ID
 * @method void setCertificateId(string $CertificateId) Set Certificate ID
 * @method string getCertificateName() Obtain Certificate name; It's an old parameter, please switch to CertificateAlias.
 * @method void setCertificateName(string $CertificateName) Set Certificate name; It's an old parameter, please switch to CertificateAlias.
 * @method integer getCertificateType() Obtain Certificate type.
 * @method void setCertificateType(integer $CertificateType) Set Certificate type.
 * @method string getCertificateAlias() Obtain Certificate name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCertificateAlias(string $CertificateAlias) Set Certificate name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCreateTime() Obtain Certificate creation time in the format of UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (midnight in UTC/GMT).
 * @method void setCreateTime(integer $CreateTime) Set Certificate creation time in the format of UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (midnight in UTC/GMT).
 * @method integer getBeginTime() Obtain Certificate effective time in the format of UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (midnight in UTC/GMT).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBeginTime(integer $BeginTime) Set Certificate effective time in the format of UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (midnight in UTC/GMT).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEndTime() Obtain Certificate expiration time in the format of UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (midnight in UTC/GMT).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(integer $EndTime) Set Certificate expiration time in the format of UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (midnight in UTC/GMT).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIssuerCN() Obtain Common name of the certificate issuer.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIssuerCN(string $IssuerCN) Set Common name of the certificate issuer.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubjectCN() Obtain Common name of the certificate subject.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubjectCN(string $SubjectCN) Set Common name of the certificate subject.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Certificate extends AbstractModel
{
    /**
     * @var string Certificate ID
     */
    public $CertificateId;

    /**
     * @var string Certificate name; It's an old parameter, please switch to CertificateAlias.
     */
    public $CertificateName;

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
     * @var integer Certificate creation time in the format of UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (midnight in UTC/GMT).
     */
    public $CreateTime;

    /**
     * @var integer Certificate effective time in the format of UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (midnight in UTC/GMT).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BeginTime;

    /**
     * @var integer Certificate expiration time in the format of UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (midnight in UTC/GMT).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var string Common name of the certificate issuer.
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
     * @param string $CertificateName Certificate name; It's an old parameter, please switch to CertificateAlias.
     * @param integer $CertificateType Certificate type.
     * @param string $CertificateAlias Certificate name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CreateTime Certificate creation time in the format of UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (midnight in UTC/GMT).
     * @param integer $BeginTime Certificate effective time in the format of UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (midnight in UTC/GMT).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EndTime Certificate expiration time in the format of UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (midnight in UTC/GMT).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IssuerCN Common name of the certificate issuer.
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

        if (array_key_exists("CertificateName",$param) and $param["CertificateName"] !== null) {
            $this->CertificateName = $param["CertificateName"];
        }

        if (array_key_exists("CertificateType",$param) and $param["CertificateType"] !== null) {
            $this->CertificateType = $param["CertificateType"];
        }

        if (array_key_exists("CertificateAlias",$param) and $param["CertificateAlias"] !== null) {
            $this->CertificateAlias = $param["CertificateAlias"];
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
