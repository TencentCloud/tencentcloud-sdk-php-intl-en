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
 * BrazilRNEInfo
 *
 * @method string getRNE() Obtain RNE
 * @method void setRNE(string $RNE) Set RNE
 * @method string getCLASSIFICATION() Obtain CLASSIFICAÇÃO(CLASSIFICATION)
 * @method void setCLASSIFICATION(string $CLASSIFICATION) Set CLASSIFICAÇÃO(CLASSIFICATION)
 * @method string getVALIDADE() Obtain VALIDADE
 * @method void setVALIDADE(string $VALIDADE) Set VALIDADE
 * @method string getNOME() Obtain NOME
 * @method void setNOME(string $NOME) Set NOME
 * @method string getMembership() Obtain FILIAÇÃO(MEMBERSHIP)
 * @method void setMembership(string $Membership) Set FILIAÇÃO(MEMBERSHIP)
 * @method string getNACIONALIDADE() Obtain NACIONALIDADE
 * @method void setNACIONALIDADE(string $NACIONALIDADE) Set NACIONALIDADE
 * @method string getNATURALIDADE() Obtain NATURALIDADE(PAÍS)
 * @method void setNATURALIDADE(string $NATURALIDADE) Set NATURALIDADE(PAÍS)
 * @method string getIssuingAgency() Obtain ORGÃO EXPEDIDOR(IssuingAgency)
 * @method void setIssuingAgency(string $IssuingAgency) Set ORGÃO EXPEDIDOR(IssuingAgency)
 * @method string getDateOfBirth() Obtain DATA DE NASCIMENTO(DateOfBirth)
 * @method void setDateOfBirth(string $DateOfBirth) Set DATA DE NASCIMENTO(DateOfBirth)
 * @method string getSex() Obtain SEXO
 * @method void setSex(string $Sex) Set SEXO
 * @method string getEntryDate() Obtain DATA DE ENTRADA(EntryDate)
 * @method void setEntryDate(string $EntryDate) Set DATA DE ENTRADA(EntryDate)
 * @method string getVIA() Obtain VIA
 * @method void setVIA(string $VIA) Set VIA
 * @method string getDispatchDate() Obtain DATA DE EXPEDIÇÃO(DispatchDate)
 * @method void setDispatchDate(string $DispatchDate) Set DATA DE EXPEDIÇÃO(DispatchDate)
 * @method string getMRZ() Obtain MRZ
 * @method void setMRZ(string $MRZ) Set MRZ
 * @method string getPortraitImage() Obtain PortraitImage
 * @method void setPortraitImage(string $PortraitImage) Set PortraitImage
 */
class BrazilRNEInfo extends AbstractModel
{
    /**
     * @var string RNE
     */
    public $RNE;

    /**
     * @var string CLASSIFICAÇÃO(CLASSIFICATION)
     */
    public $CLASSIFICATION;

    /**
     * @var string VALIDADE
     */
    public $VALIDADE;

    /**
     * @var string NOME
     */
    public $NOME;

    /**
     * @var string FILIAÇÃO(MEMBERSHIP)
     */
    public $Membership;

    /**
     * @var string NACIONALIDADE
     */
    public $NACIONALIDADE;

    /**
     * @var string NATURALIDADE(PAÍS)
     */
    public $NATURALIDADE;

    /**
     * @var string ORGÃO EXPEDIDOR(IssuingAgency)
     */
    public $IssuingAgency;

    /**
     * @var string DATA DE NASCIMENTO(DateOfBirth)
     */
    public $DateOfBirth;

    /**
     * @var string SEXO
     */
    public $Sex;

    /**
     * @var string DATA DE ENTRADA(EntryDate)
     */
    public $EntryDate;

    /**
     * @var string VIA
     */
    public $VIA;

    /**
     * @var string DATA DE EXPEDIÇÃO(DispatchDate)
     */
    public $DispatchDate;

    /**
     * @var string MRZ
     */
    public $MRZ;

    /**
     * @var string PortraitImage
     */
    public $PortraitImage;

    /**
     * @param string $RNE RNE
     * @param string $CLASSIFICATION CLASSIFICAÇÃO(CLASSIFICATION)
     * @param string $VALIDADE VALIDADE
     * @param string $NOME NOME
     * @param string $Membership FILIAÇÃO(MEMBERSHIP)
     * @param string $NACIONALIDADE NACIONALIDADE
     * @param string $NATURALIDADE NATURALIDADE(PAÍS)
     * @param string $IssuingAgency ORGÃO EXPEDIDOR(IssuingAgency)
     * @param string $DateOfBirth DATA DE NASCIMENTO(DateOfBirth)
     * @param string $Sex SEXO
     * @param string $EntryDate DATA DE ENTRADA(EntryDate)
     * @param string $VIA VIA
     * @param string $DispatchDate DATA DE EXPEDIÇÃO(DispatchDate)
     * @param string $MRZ MRZ
     * @param string $PortraitImage PortraitImage
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
        if (array_key_exists("RNE",$param) and $param["RNE"] !== null) {
            $this->RNE = $param["RNE"];
        }

        if (array_key_exists("CLASSIFICATION",$param) and $param["CLASSIFICATION"] !== null) {
            $this->CLASSIFICATION = $param["CLASSIFICATION"];
        }

        if (array_key_exists("VALIDADE",$param) and $param["VALIDADE"] !== null) {
            $this->VALIDADE = $param["VALIDADE"];
        }

        if (array_key_exists("NOME",$param) and $param["NOME"] !== null) {
            $this->NOME = $param["NOME"];
        }

        if (array_key_exists("Membership",$param) and $param["Membership"] !== null) {
            $this->Membership = $param["Membership"];
        }

        if (array_key_exists("NACIONALIDADE",$param) and $param["NACIONALIDADE"] !== null) {
            $this->NACIONALIDADE = $param["NACIONALIDADE"];
        }

        if (array_key_exists("NATURALIDADE",$param) and $param["NATURALIDADE"] !== null) {
            $this->NATURALIDADE = $param["NATURALIDADE"];
        }

        if (array_key_exists("IssuingAgency",$param) and $param["IssuingAgency"] !== null) {
            $this->IssuingAgency = $param["IssuingAgency"];
        }

        if (array_key_exists("DateOfBirth",$param) and $param["DateOfBirth"] !== null) {
            $this->DateOfBirth = $param["DateOfBirth"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("EntryDate",$param) and $param["EntryDate"] !== null) {
            $this->EntryDate = $param["EntryDate"];
        }

        if (array_key_exists("VIA",$param) and $param["VIA"] !== null) {
            $this->VIA = $param["VIA"];
        }

        if (array_key_exists("DispatchDate",$param) and $param["DispatchDate"] !== null) {
            $this->DispatchDate = $param["DispatchDate"];
        }

        if (array_key_exists("MRZ",$param) and $param["MRZ"] !== null) {
            $this->MRZ = $param["MRZ"];
        }

        if (array_key_exists("PortraitImage",$param) and $param["PortraitImage"] !== null) {
            $this->PortraitImage = $param["PortraitImage"];
        }
    }
}
