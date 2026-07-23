<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The basic IP network information
 *
 * @method string getISP() Obtain <p>Internet service provider</p>
 * @method void setISP(string $ISP) Set <p>Internet service provider</p>
 * @method string getASN() Obtain <p>Autonomous system number</p>
 * @method void setASN(string $ASN) Set <p>Autonomous system number</p>
 * @method string getOrganization() Obtain <p>IP registration organization name</p>
 * @method void setOrganization(string $Organization) Set <p>IP registration organization name</p>
 * @method boolean getIsReserved() Obtain <p>Whether it is a reserved IP address</p>
 * @method void setIsReserved(boolean $IsReserved) Set <p>Whether it is a reserved IP address</p>
 * @method boolean getIsGateway() Obtain <p>Whether it is a gateway IP address</p>
 * @method void setIsGateway(boolean $IsGateway) Set <p>Whether it is a gateway IP address</p>
 * @method boolean getIsAnycast() Obtain <p>Whether it belongs to an anycast network</p>
 * @method void setIsAnycast(boolean $IsAnycast) Set <p>Whether it belongs to an anycast network</p>
 * @method boolean getIsMobile() Obtain <p>Whether it is from a mobile network</p>
 * @method void setIsMobile(boolean $IsMobile) Set <p>Whether it is from a mobile network</p>
 * @method boolean getIsDynamic() Obtain <p>Whether it is a dynamic IP address</p>
 * @method void setIsDynamic(boolean $IsDynamic) Set <p>Whether it is a dynamic IP address</p>
 * @method boolean getIsEgress() Obtain <p>Whether it is a network egress</p>
 * @method void setIsEgress(boolean $IsEgress) Set <p>Whether it is a network egress</p>
 * @method boolean getIsDNS() Obtain <p>Whether it is used for domain name resolution</p>
 * @method void setIsDNS(boolean $IsDNS) Set <p>Whether it is used for domain name resolution</p>
 * @method boolean getIsEducation() Obtain <p>Whether it is an educational institution</p>
 * @method void setIsEducation(boolean $IsEducation) Set <p>Whether it is an educational institution</p>
 * @method boolean getIsInstitution() Obtain <p>Whether it is an organization</p>
 * @method void setIsInstitution(boolean $IsInstitution) Set <p>Whether it is an organization</p>
 * @method boolean getIsCompany() Obtain <p>Whether it is an enterprise dedicated line</p>
 * @method void setIsCompany(boolean $IsCompany) Set <p>Whether it is an enterprise dedicated line</p>
 * @method boolean getIsResidence() Obtain <p>Whether it is a residence broadband connection</p>
 * @method void setIsResidence(boolean $IsResidence) Set <p>Whether it is a residence broadband connection</p>
 * @method boolean getIsCloudService() Obtain <p>Whether it is cloud service</p>
 * @method void setIsCloudService(boolean $IsCloudService) Set <p>Whether it is cloud service</p>
 * @method boolean getIsInfrastructure() Obtain <p>Whether it is infrastructure</p>
 * @method void setIsInfrastructure(boolean $IsInfrastructure) Set <p>Whether it is infrastructure</p>
 * @method boolean getIsMXServer() Obtain <p>Whether it is an mail exchange service</p>
 * @method void setIsMXServer(boolean $IsMXServer) Set <p>Whether it is an mail exchange service</p>
 */
class IPNetwork extends AbstractModel
{
    /**
     * @var string <p>Internet service provider</p>
     */
    public $ISP;

    /**
     * @var string <p>Autonomous system number</p>
     */
    public $ASN;

    /**
     * @var string <p>IP registration organization name</p>
     */
    public $Organization;

    /**
     * @var boolean <p>Whether it is a reserved IP address</p>
     */
    public $IsReserved;

    /**
     * @var boolean <p>Whether it is a gateway IP address</p>
     */
    public $IsGateway;

    /**
     * @var boolean <p>Whether it belongs to an anycast network</p>
     */
    public $IsAnycast;

    /**
     * @var boolean <p>Whether it is from a mobile network</p>
     */
    public $IsMobile;

    /**
     * @var boolean <p>Whether it is a dynamic IP address</p>
     */
    public $IsDynamic;

    /**
     * @var boolean <p>Whether it is a network egress</p>
     */
    public $IsEgress;

    /**
     * @var boolean <p>Whether it is used for domain name resolution</p>
     */
    public $IsDNS;

    /**
     * @var boolean <p>Whether it is an educational institution</p>
     */
    public $IsEducation;

    /**
     * @var boolean <p>Whether it is an organization</p>
     */
    public $IsInstitution;

    /**
     * @var boolean <p>Whether it is an enterprise dedicated line</p>
     */
    public $IsCompany;

    /**
     * @var boolean <p>Whether it is a residence broadband connection</p>
     */
    public $IsResidence;

    /**
     * @var boolean <p>Whether it is cloud service</p>
     */
    public $IsCloudService;

    /**
     * @var boolean <p>Whether it is infrastructure</p>
     */
    public $IsInfrastructure;

    /**
     * @var boolean <p>Whether it is an mail exchange service</p>
     */
    public $IsMXServer;

    /**
     * @param string $ISP <p>Internet service provider</p>
     * @param string $ASN <p>Autonomous system number</p>
     * @param string $Organization <p>IP registration organization name</p>
     * @param boolean $IsReserved <p>Whether it is a reserved IP address</p>
     * @param boolean $IsGateway <p>Whether it is a gateway IP address</p>
     * @param boolean $IsAnycast <p>Whether it belongs to an anycast network</p>
     * @param boolean $IsMobile <p>Whether it is from a mobile network</p>
     * @param boolean $IsDynamic <p>Whether it is a dynamic IP address</p>
     * @param boolean $IsEgress <p>Whether it is a network egress</p>
     * @param boolean $IsDNS <p>Whether it is used for domain name resolution</p>
     * @param boolean $IsEducation <p>Whether it is an educational institution</p>
     * @param boolean $IsInstitution <p>Whether it is an organization</p>
     * @param boolean $IsCompany <p>Whether it is an enterprise dedicated line</p>
     * @param boolean $IsResidence <p>Whether it is a residence broadband connection</p>
     * @param boolean $IsCloudService <p>Whether it is cloud service</p>
     * @param boolean $IsInfrastructure <p>Whether it is infrastructure</p>
     * @param boolean $IsMXServer <p>Whether it is an mail exchange service</p>
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
        if (array_key_exists("ISP",$param) and $param["ISP"] !== null) {
            $this->ISP = $param["ISP"];
        }

        if (array_key_exists("ASN",$param) and $param["ASN"] !== null) {
            $this->ASN = $param["ASN"];
        }

        if (array_key_exists("Organization",$param) and $param["Organization"] !== null) {
            $this->Organization = $param["Organization"];
        }

        if (array_key_exists("IsReserved",$param) and $param["IsReserved"] !== null) {
            $this->IsReserved = $param["IsReserved"];
        }

        if (array_key_exists("IsGateway",$param) and $param["IsGateway"] !== null) {
            $this->IsGateway = $param["IsGateway"];
        }

        if (array_key_exists("IsAnycast",$param) and $param["IsAnycast"] !== null) {
            $this->IsAnycast = $param["IsAnycast"];
        }

        if (array_key_exists("IsMobile",$param) and $param["IsMobile"] !== null) {
            $this->IsMobile = $param["IsMobile"];
        }

        if (array_key_exists("IsDynamic",$param) and $param["IsDynamic"] !== null) {
            $this->IsDynamic = $param["IsDynamic"];
        }

        if (array_key_exists("IsEgress",$param) and $param["IsEgress"] !== null) {
            $this->IsEgress = $param["IsEgress"];
        }

        if (array_key_exists("IsDNS",$param) and $param["IsDNS"] !== null) {
            $this->IsDNS = $param["IsDNS"];
        }

        if (array_key_exists("IsEducation",$param) and $param["IsEducation"] !== null) {
            $this->IsEducation = $param["IsEducation"];
        }

        if (array_key_exists("IsInstitution",$param) and $param["IsInstitution"] !== null) {
            $this->IsInstitution = $param["IsInstitution"];
        }

        if (array_key_exists("IsCompany",$param) and $param["IsCompany"] !== null) {
            $this->IsCompany = $param["IsCompany"];
        }

        if (array_key_exists("IsResidence",$param) and $param["IsResidence"] !== null) {
            $this->IsResidence = $param["IsResidence"];
        }

        if (array_key_exists("IsCloudService",$param) and $param["IsCloudService"] !== null) {
            $this->IsCloudService = $param["IsCloudService"];
        }

        if (array_key_exists("IsInfrastructure",$param) and $param["IsInfrastructure"] !== null) {
            $this->IsInfrastructure = $param["IsInfrastructure"];
        }

        if (array_key_exists("IsMXServer",$param) and $param["IsMXServer"] !== null) {
            $this->IsMXServer = $param["IsMXServer"];
        }
    }
}
