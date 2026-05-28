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
 * Specifies the identity card type in brazil.
 *
 * @method string getNome() Obtain Name.
 * @method void setNome(string $Nome) Set Name.
 * @method string getMemberShip() Obtain Parent information.
 * @method void setMemberShip(string $MemberShip) Set Parent information.
 * @method string getDataNascimento() Obtain Date of birth.
 * @method void setDataNascimento(string $DataNascimento) Set Date of birth.
 * @method string getIssuingAgency() Obtain Issuing organization.
 * @method void setIssuingAgency(string $IssuingAgency) Set Issuing organization.
 * @method string getFatorrh() Obtain Specifies the blood type.
 * @method void setFatorrh(string $Fatorrh) Set Specifies the blood type.
 * @method string getNaturalIDade() Obtain Birthplace.
 * @method void setNaturalIDade(string $NaturalIDade) Set Birthplace.
 * @method string getObservations() Obtain Remarks.
 * @method void setObservations(string $Observations) Set Remarks.
 * @method string getCPF() Obtain CPF Type
 * @method void setCPF(string $CPF) Set CPF Type
 * @method string getDNI() Obtain DNI Type
 * @method void setDNI(string $DNI) Set DNI Type
 * @method string getRegistroGeral() Obtain Common registration.
 * @method void setRegistroGeral(string $RegistroGeral) Set Common registration.
 * @method string getDispatchDate() Obtain Issue date. valid values: dd/mm/yyyy.
 * @method void setDispatchDate(string $DispatchDate) Set Issue date. valid values: dd/mm/yyyy.
 * @method string getRegistro() Obtain Address.
 * @method void setRegistro(string $Registro) Set Address.
 * @method string getPortraitImage() Obtain Specifies the avatar in Base64 format of the id card.
 * @method void setPortraitImage(string $PortraitImage) Set Specifies the avatar in Base64 format of the id card.
 * @method string getDocOrigem() Obtain Original identity information.
 * @method void setDocOrigem(string $DocOrigem) Set Original identity information.
 */
class BrazilIDCardInfo extends AbstractModel
{
    /**
     * @var string Name.
     */
    public $Nome;

    /**
     * @var string Parent information.
     */
    public $MemberShip;

    /**
     * @var string Date of birth.
     */
    public $DataNascimento;

    /**
     * @var string Issuing organization.
     */
    public $IssuingAgency;

    /**
     * @var string Specifies the blood type.
     */
    public $Fatorrh;

    /**
     * @var string Birthplace.
     */
    public $NaturalIDade;

    /**
     * @var string Remarks.
     */
    public $Observations;

    /**
     * @var string CPF Type
     */
    public $CPF;

    /**
     * @var string DNI Type
     */
    public $DNI;

    /**
     * @var string Common registration.
     */
    public $RegistroGeral;

    /**
     * @var string Issue date. valid values: dd/mm/yyyy.
     */
    public $DispatchDate;

    /**
     * @var string Address.
     */
    public $Registro;

    /**
     * @var string Specifies the avatar in Base64 format of the id card.
     */
    public $PortraitImage;

    /**
     * @var string Original identity information.
     */
    public $DocOrigem;

    /**
     * @param string $Nome Name.
     * @param string $MemberShip Parent information.
     * @param string $DataNascimento Date of birth.
     * @param string $IssuingAgency Issuing organization.
     * @param string $Fatorrh Specifies the blood type.
     * @param string $NaturalIDade Birthplace.
     * @param string $Observations Remarks.
     * @param string $CPF CPF Type
     * @param string $DNI DNI Type
     * @param string $RegistroGeral Common registration.
     * @param string $DispatchDate Issue date. valid values: dd/mm/yyyy.
     * @param string $Registro Address.
     * @param string $PortraitImage Specifies the avatar in Base64 format of the id card.
     * @param string $DocOrigem Original identity information.
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
        if (array_key_exists("Nome",$param) and $param["Nome"] !== null) {
            $this->Nome = $param["Nome"];
        }

        if (array_key_exists("MemberShip",$param) and $param["MemberShip"] !== null) {
            $this->MemberShip = $param["MemberShip"];
        }

        if (array_key_exists("DataNascimento",$param) and $param["DataNascimento"] !== null) {
            $this->DataNascimento = $param["DataNascimento"];
        }

        if (array_key_exists("IssuingAgency",$param) and $param["IssuingAgency"] !== null) {
            $this->IssuingAgency = $param["IssuingAgency"];
        }

        if (array_key_exists("Fatorrh",$param) and $param["Fatorrh"] !== null) {
            $this->Fatorrh = $param["Fatorrh"];
        }

        if (array_key_exists("NaturalIDade",$param) and $param["NaturalIDade"] !== null) {
            $this->NaturalIDade = $param["NaturalIDade"];
        }

        if (array_key_exists("Observations",$param) and $param["Observations"] !== null) {
            $this->Observations = $param["Observations"];
        }

        if (array_key_exists("CPF",$param) and $param["CPF"] !== null) {
            $this->CPF = $param["CPF"];
        }

        if (array_key_exists("DNI",$param) and $param["DNI"] !== null) {
            $this->DNI = $param["DNI"];
        }

        if (array_key_exists("RegistroGeral",$param) and $param["RegistroGeral"] !== null) {
            $this->RegistroGeral = $param["RegistroGeral"];
        }

        if (array_key_exists("DispatchDate",$param) and $param["DispatchDate"] !== null) {
            $this->DispatchDate = $param["DispatchDate"];
        }

        if (array_key_exists("Registro",$param) and $param["Registro"] !== null) {
            $this->Registro = $param["Registro"];
        }

        if (array_key_exists("PortraitImage",$param) and $param["PortraitImage"] !== null) {
            $this->PortraitImage = $param["PortraitImage"];
        }

        if (array_key_exists("DocOrigem",$param) and $param["DocOrigem"] !== null) {
            $this->DocOrigem = $param["DocOrigem"];
        }
    }
}
