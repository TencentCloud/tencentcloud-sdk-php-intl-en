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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Custom service domain name list
 *
 * @method string getDomainName() Obtain Domain name.
 * @method void setDomainName(string $DomainName) Set Domain name.
 * @method integer getStatus() Obtain Domain name resolution status. `1`: normal, `0`: failed
 * @method void setStatus(integer $Status) Set Domain name resolution status. `1`: normal, `0`: failed
 * @method string getCertificateId() Obtain Certificate ID.
 * @method void setCertificateId(string $CertificateId) Set Certificate ID.
 * @method boolean getIsDefaultMapping() Obtain Whether the default path mapping is used.
 * @method void setIsDefaultMapping(boolean $IsDefaultMapping) Set Whether the default path mapping is used.
 * @method string getProtocol() Obtain Custom domain name protocol type.
 * @method void setProtocol(string $Protocol) Set Custom domain name protocol type.
 * @method string getNetType() Obtain Network type. Valid values: INNER, OUTER.
 * @method void setNetType(string $NetType) Set Network type. Valid values: INNER, OUTER.
 * @method boolean getIsForcedHttps() Obtain Whether to force HTTP requests to redirect to HTTPS. Default value: `false`. When this parameter is `true`, API Gateway will redirect all requests using the custom domain name over the HTTP protocol to the HTTPS protocol for forwarding.
 * @method void setIsForcedHttps(boolean $IsForcedHttps) Set Whether to force HTTP requests to redirect to HTTPS. Default value: `false`. When this parameter is `true`, API Gateway will redirect all requests using the custom domain name over the HTTP protocol to the HTTPS protocol for forwarding.
 * @method boolean getRegistrationStatus() Obtain ICP filing status
 * @method void setRegistrationStatus(boolean $RegistrationStatus) Set ICP filing status
 */
class DomainSetList extends AbstractModel
{
    /**
     * @var string Domain name.
     */
    public $DomainName;

    /**
     * @var integer Domain name resolution status. `1`: normal, `0`: failed
     */
    public $Status;

    /**
     * @var string Certificate ID.
     */
    public $CertificateId;

    /**
     * @var boolean Whether the default path mapping is used.
     */
    public $IsDefaultMapping;

    /**
     * @var string Custom domain name protocol type.
     */
    public $Protocol;

    /**
     * @var string Network type. Valid values: INNER, OUTER.
     */
    public $NetType;

    /**
     * @var boolean Whether to force HTTP requests to redirect to HTTPS. Default value: `false`. When this parameter is `true`, API Gateway will redirect all requests using the custom domain name over the HTTP protocol to the HTTPS protocol for forwarding.
     */
    public $IsForcedHttps;

    /**
     * @var boolean ICP filing status
     */
    public $RegistrationStatus;

    /**
     * @param string $DomainName Domain name.
     * @param integer $Status Domain name resolution status. `1`: normal, `0`: failed
     * @param string $CertificateId Certificate ID.
     * @param boolean $IsDefaultMapping Whether the default path mapping is used.
     * @param string $Protocol Custom domain name protocol type.
     * @param string $NetType Network type. Valid values: INNER, OUTER.
     * @param boolean $IsForcedHttps Whether to force HTTP requests to redirect to HTTPS. Default value: `false`. When this parameter is `true`, API Gateway will redirect all requests using the custom domain name over the HTTP protocol to the HTTPS protocol for forwarding.
     * @param boolean $RegistrationStatus ICP filing status
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
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("IsDefaultMapping",$param) and $param["IsDefaultMapping"] !== null) {
            $this->IsDefaultMapping = $param["IsDefaultMapping"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("IsForcedHttps",$param) and $param["IsForcedHttps"] !== null) {
            $this->IsForcedHttps = $param["IsForcedHttps"];
        }

        if (array_key_exists("RegistrationStatus",$param) and $param["RegistrationStatus"] !== null) {
            $this->RegistrationStatus = $param["RegistrationStatus"];
        }
    }
}
