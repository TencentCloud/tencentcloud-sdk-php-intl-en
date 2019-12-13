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
 * @method string getCertificateId() 获取Certificate ID
 * @method void setCertificateId(string $CertificateId) 设置Certificate ID
 * @method string getCertificateName() 获取Certificate name; It’s an old parameter, please switch to CertificateAlias.
 * @method void setCertificateName(string $CertificateName) 设置Certificate name; It’s an old parameter, please switch to CertificateAlias.
 * @method integer getCertificateType() 获取Certificate type
 * @method void setCertificateType(integer $CertificateType) 设置Certificate type
 * @method string getCertificateAlias() 获取Certificate name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCertificateAlias(string $CertificateAlias) 设置Certificate name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCreateTime() 获取Certificate creation time. Using the UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (Midnight in UTC/GMT).
 * @method void setCreateTime(integer $CreateTime) 设置Certificate creation time. Using the UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (Midnight in UTC/GMT).
 * @method integer getBeginTime() 获取Certificate effective time. Using the UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (Midnight in UTC/GMT).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBeginTime(integer $BeginTime) 设置Certificate effective time. Using the UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (Midnight in UTC/GMT).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getEndTime() 获取Certificate expiration time. Using the UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (Midnight in UTC/GMT).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(integer $EndTime) 设置Certificate expiration time. Using the UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (Midnight in UTC/GMT).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIssuerCN() 获取Common name of the certificate issuer.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIssuerCN(string $IssuerCN) 设置Common name of the certificate issuer.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubjectCN() 获取Common name of the certificate subject.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubjectCN(string $SubjectCN) 设置Common name of the certificate subject.
Note: This field may return null, indicating that no valid values can be obtained.
 */

/**
 *Server Certificate
 */
class Certificate extends AbstractModel
{
    /**
     * @var string Certificate ID
     */
    public $CertificateId;

    /**
     * @var string Certificate name; It’s an old parameter, please switch to CertificateAlias.
     */
    public $CertificateName;

    /**
     * @var integer Certificate type
     */
    public $CertificateType;

    /**
     * @var string Certificate name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CertificateAlias;

    /**
     * @var integer Certificate creation time. Using the UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (Midnight in UTC/GMT).
     */
    public $CreateTime;

    /**
     * @var integer Certificate effective time. Using the UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (Midnight in UTC/GMT).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BeginTime;

    /**
     * @var integer Certificate expiration time. Using the UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (Midnight in UTC/GMT).
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
     * @param string $CertificateName Certificate name; It’s an old parameter, please switch to CertificateAlias.
     * @param integer $CertificateType Certificate type
     * @param string $CertificateAlias Certificate name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CreateTime Certificate creation time. Using the UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (Midnight in UTC/GMT).
     * @param integer $BeginTime Certificate effective time. Using the UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (Midnight in UTC/GMT).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $EndTime Certificate expiration time. Using the UNIX timestamp, indicating the number of seconds that have elapsed since January 1, 1970 (Midnight in UTC/GMT).
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
     * 内部实现，用户禁止调用
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
