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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceEncryptAttributes request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getCertificateAttribution() Obtain Certificate ownership. Valid values: `self` (certificate of this account), `others` (certificate of the other account). Default value: `self`.
 * @method void setCertificateAttribution(string $CertificateAttribution) Set Certificate ownership. Valid values: `self` (certificate of this account), `others` (certificate of the other account). Default value: `self`.
 * @method string getQuoteUin() Obtain ID of the other referenced root account, which is required when `CertificateAttribution` is `others`.
 * @method void setQuoteUin(string $QuoteUin) Set ID of the other referenced root account, which is required when `CertificateAttribution` is `others`.
 */
class ModifyInstanceEncryptAttributesRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Certificate ownership. Valid values: `self` (certificate of this account), `others` (certificate of the other account). Default value: `self`.
     */
    public $CertificateAttribution;

    /**
     * @var string ID of the other referenced root account, which is required when `CertificateAttribution` is `others`.
     */
    public $QuoteUin;

    /**
     * @param string $InstanceId Instance ID
     * @param string $CertificateAttribution Certificate ownership. Valid values: `self` (certificate of this account), `others` (certificate of the other account). Default value: `self`.
     * @param string $QuoteUin ID of the other referenced root account, which is required when `CertificateAttribution` is `others`.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CertificateAttribution",$param) and $param["CertificateAttribution"] !== null) {
            $this->CertificateAttribution = $param["CertificateAttribution"];
        }

        if (array_key_exists("QuoteUin",$param) and $param["QuoteUin"] !== null) {
            $this->QuoteUin = $param["QuoteUin"];
        }
    }
}
