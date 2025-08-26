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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Driver'S license type in brazil.
 *
 * @method string getNOME() Obtain Name.
 * @method void setNOME(string $NOME) Set Name.
 * @method string getCatHab() Obtain Specifies the driver's license type.
 * @method void setCatHab(string $CatHab) Set Specifies the driver's license type.
 * @method string getCNHNumber() Obtain Driver’s license id.
 * @method void setCNHNumber(string $CNHNumber) Set Driver’s license id.
 * @method string getVALIDADE() Obtain Expiration date.
 * @method void setVALIDADE(string $VALIDADE) Set Expiration date.
 * @method string getQUALIFICATION() Obtain Indicates the qualification.
 * @method void setQUALIFICATION(string $QUALIFICATION) Set Indicates the qualification.
 * @method string getIDENTIDADE() Obtain Identity card number.
 * @method void setIDENTIDADE(string $IDENTIDADE) Set Identity card number.
 * @method string getCPF() Obtain Tax number of the person.
 * @method void setCPF(string $CPF) Set Tax number of the person.
 * @method string getNASCIMENTO() Obtain Date of birth.
 * @method void setNASCIMENTO(string $NASCIMENTO) Set Date of birth.
 * @method string getMEMBERSHIP() Obtain Membership status.
 * @method void setMEMBERSHIP(string $MEMBERSHIP) Set Membership status.
 * @method string getREGISTRO() Obtain Registration number.
 * @method void setREGISTRO(string $REGISTRO) Set Registration number.
 * @method string getOBSERVATIONS() Obtain Remarks.
 * @method void setOBSERVATIONS(string $OBSERVATIONS) Set Remarks.
 * @method string getIssueDate() Obtain Issue date.
 * @method void setIssueDate(string $IssueDate) Set Issue date.
 * @method string getLOCAL() Obtain Issuing location.
 * @method void setLOCAL(string $LOCAL) Set Issuing location.
 * @method string getBackNumber() Obtain Record number.
 * @method void setBackNumber(string $BackNumber) Set Record number.
 * @method string getPortraitImage() Obtain Specifies the avatar in base64 format.
 * @method void setPortraitImage(string $PortraitImage) Set Specifies the avatar in base64 format.
 */
class BrazilDriverLicenseInfo extends AbstractModel
{
    /**
     * @var string Name.
     */
    public $NOME;

    /**
     * @var string Specifies the driver's license type.
     */
    public $CatHab;

    /**
     * @var string Driver’s license id.
     */
    public $CNHNumber;

    /**
     * @var string Expiration date.
     */
    public $VALIDADE;

    /**
     * @var string Indicates the qualification.
     */
    public $QUALIFICATION;

    /**
     * @var string Identity card number.
     */
    public $IDENTIDADE;

    /**
     * @var string Tax number of the person.
     */
    public $CPF;

    /**
     * @var string Date of birth.
     */
    public $NASCIMENTO;

    /**
     * @var string Membership status.
     */
    public $MEMBERSHIP;

    /**
     * @var string Registration number.
     */
    public $REGISTRO;

    /**
     * @var string Remarks.
     */
    public $OBSERVATIONS;

    /**
     * @var string Issue date.
     */
    public $IssueDate;

    /**
     * @var string Issuing location.
     */
    public $LOCAL;

    /**
     * @var string Record number.
     */
    public $BackNumber;

    /**
     * @var string Specifies the avatar in base64 format.
     */
    public $PortraitImage;

    /**
     * @param string $NOME Name.
     * @param string $CatHab Specifies the driver's license type.
     * @param string $CNHNumber Driver’s license id.
     * @param string $VALIDADE Expiration date.
     * @param string $QUALIFICATION Indicates the qualification.
     * @param string $IDENTIDADE Identity card number.
     * @param string $CPF Tax number of the person.
     * @param string $NASCIMENTO Date of birth.
     * @param string $MEMBERSHIP Membership status.
     * @param string $REGISTRO Registration number.
     * @param string $OBSERVATIONS Remarks.
     * @param string $IssueDate Issue date.
     * @param string $LOCAL Issuing location.
     * @param string $BackNumber Record number.
     * @param string $PortraitImage Specifies the avatar in base64 format.
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
        if (array_key_exists("NOME",$param) and $param["NOME"] !== null) {
            $this->NOME = $param["NOME"];
        }

        if (array_key_exists("CatHab",$param) and $param["CatHab"] !== null) {
            $this->CatHab = $param["CatHab"];
        }

        if (array_key_exists("CNHNumber",$param) and $param["CNHNumber"] !== null) {
            $this->CNHNumber = $param["CNHNumber"];
        }

        if (array_key_exists("VALIDADE",$param) and $param["VALIDADE"] !== null) {
            $this->VALIDADE = $param["VALIDADE"];
        }

        if (array_key_exists("QUALIFICATION",$param) and $param["QUALIFICATION"] !== null) {
            $this->QUALIFICATION = $param["QUALIFICATION"];
        }

        if (array_key_exists("IDENTIDADE",$param) and $param["IDENTIDADE"] !== null) {
            $this->IDENTIDADE = $param["IDENTIDADE"];
        }

        if (array_key_exists("CPF",$param) and $param["CPF"] !== null) {
            $this->CPF = $param["CPF"];
        }

        if (array_key_exists("NASCIMENTO",$param) and $param["NASCIMENTO"] !== null) {
            $this->NASCIMENTO = $param["NASCIMENTO"];
        }

        if (array_key_exists("MEMBERSHIP",$param) and $param["MEMBERSHIP"] !== null) {
            $this->MEMBERSHIP = $param["MEMBERSHIP"];
        }

        if (array_key_exists("REGISTRO",$param) and $param["REGISTRO"] !== null) {
            $this->REGISTRO = $param["REGISTRO"];
        }

        if (array_key_exists("OBSERVATIONS",$param) and $param["OBSERVATIONS"] !== null) {
            $this->OBSERVATIONS = $param["OBSERVATIONS"];
        }

        if (array_key_exists("IssueDate",$param) and $param["IssueDate"] !== null) {
            $this->IssueDate = $param["IssueDate"];
        }

        if (array_key_exists("LOCAL",$param) and $param["LOCAL"] !== null) {
            $this->LOCAL = $param["LOCAL"];
        }

        if (array_key_exists("BackNumber",$param) and $param["BackNumber"] !== null) {
            $this->BackNumber = $param["BackNumber"];
        }

        if (array_key_exists("PortraitImage",$param) and $param["PortraitImage"] !== null) {
            $this->PortraitImage = $param["PortraitImage"];
        }
    }
}
