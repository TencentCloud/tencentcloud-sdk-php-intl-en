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
 * Document type for brazil RNM.
 *
 * @method string getSOBRENOME() Obtain SOBRENOME Type
 * @method void setSOBRENOME(string $SOBRENOME) Set SOBRENOME Type
 * @method string getNOME() Obtain NOME Type
 * @method void setNOME(string $NOME) Set NOME Type
 * @method string getDATADENASCIMENTO() Obtain DATA DE NASCIMENTO
 * @method void setDATADENASCIMENTO(string $DATADENASCIMENTO) Set DATA DE NASCIMENTO
 * @method string getSEXO() Obtain SEXO F
 * @method void setSEXO(string $SEXO) Set SEXO F
 * @method string getMEMBERSHIP() Obtain FILIAÇÃO(MEMBERSHIP)
 * @method void setMEMBERSHIP(string $MEMBERSHIP) Set FILIAÇÃO(MEMBERSHIP)
 * @method string getNACIONALIDADE() Obtain NACIONALIDADE Type
 * @method void setNACIONALIDADE(string $NACIONALIDADE) Set NACIONALIDADE Type
 * @method string getVALIDADE() Obtain VALIDADE Type
 * @method void setVALIDADE(string $VALIDADE) Set VALIDADE Type
 * @method string getRNM() Obtain RNM Type
 * @method void setRNM(string $RNM) Set RNM Type
 * @method string getCPF() Obtain CPF Type
 * @method void setCPF(string $CPF) Set CPF Type
 * @method string getCLASSIFICATION() Obtain CLASSIFICAÇÃO(CLASSIFICATION)
 * @method void setCLASSIFICATION(string $CLASSIFICATION) Set CLASSIFICAÇÃO(CLASSIFICATION)
 * @method string getPRAZODERESIDENCIA() Obtain PRAZO DE RESIDENCIA
 * @method void setPRAZODERESIDENCIA(string $PRAZODERESIDENCIA) Set PRAZO DE RESIDENCIA
 * @method string getISSUANCE() Obtain EMISSÃO(ISSUANCE)
 * @method void setISSUANCE(string $ISSUANCE) Set EMISSÃO(ISSUANCE)
 * @method string getAMPAROLEGAL() Obtain AMPARO LEGAL(LegalHelp)
 * @method void setAMPAROLEGAL(string $AMPAROLEGAL) Set AMPARO LEGAL(LegalHelp)
 * @method string getMRZ() Obtain MRZCode
 * @method void setMRZ(string $MRZ) Set MRZCode
 * @method string getPortraitImage() Obtain Portrait Image
 * @method void setPortraitImage(string $PortraitImage) Set Portrait Image
 * @method string getPortraitImageBack() Obtain PortraitImage(Back)
 * @method void setPortraitImageBack(string $PortraitImageBack) Set PortraitImage(Back)
 */
class BrazilRNMInfo extends AbstractModel
{
    /**
     * @var string SOBRENOME Type
     */
    public $SOBRENOME;

    /**
     * @var string NOME Type
     */
    public $NOME;

    /**
     * @var string DATA DE NASCIMENTO
     */
    public $DATADENASCIMENTO;

    /**
     * @var string SEXO F
     */
    public $SEXO;

    /**
     * @var string FILIAÇÃO(MEMBERSHIP)
     */
    public $MEMBERSHIP;

    /**
     * @var string NACIONALIDADE Type
     */
    public $NACIONALIDADE;

    /**
     * @var string VALIDADE Type
     */
    public $VALIDADE;

    /**
     * @var string RNM Type
     */
    public $RNM;

    /**
     * @var string CPF Type
     */
    public $CPF;

    /**
     * @var string CLASSIFICAÇÃO(CLASSIFICATION)
     */
    public $CLASSIFICATION;

    /**
     * @var string PRAZO DE RESIDENCIA
     */
    public $PRAZODERESIDENCIA;

    /**
     * @var string EMISSÃO(ISSUANCE)
     */
    public $ISSUANCE;

    /**
     * @var string AMPARO LEGAL(LegalHelp)
     */
    public $AMPAROLEGAL;

    /**
     * @var string MRZCode
     */
    public $MRZ;

    /**
     * @var string Portrait Image
     */
    public $PortraitImage;

    /**
     * @var string PortraitImage(Back)
     */
    public $PortraitImageBack;

    /**
     * @param string $SOBRENOME SOBRENOME Type
     * @param string $NOME NOME Type
     * @param string $DATADENASCIMENTO DATA DE NASCIMENTO
     * @param string $SEXO SEXO F
     * @param string $MEMBERSHIP FILIAÇÃO(MEMBERSHIP)
     * @param string $NACIONALIDADE NACIONALIDADE Type
     * @param string $VALIDADE VALIDADE Type
     * @param string $RNM RNM Type
     * @param string $CPF CPF Type
     * @param string $CLASSIFICATION CLASSIFICAÇÃO(CLASSIFICATION)
     * @param string $PRAZODERESIDENCIA PRAZO DE RESIDENCIA
     * @param string $ISSUANCE EMISSÃO(ISSUANCE)
     * @param string $AMPAROLEGAL AMPARO LEGAL(LegalHelp)
     * @param string $MRZ MRZCode
     * @param string $PortraitImage Portrait Image
     * @param string $PortraitImageBack PortraitImage(Back)
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
        if (array_key_exists("SOBRENOME",$param) and $param["SOBRENOME"] !== null) {
            $this->SOBRENOME = $param["SOBRENOME"];
        }

        if (array_key_exists("NOME",$param) and $param["NOME"] !== null) {
            $this->NOME = $param["NOME"];
        }

        if (array_key_exists("DATADENASCIMENTO",$param) and $param["DATADENASCIMENTO"] !== null) {
            $this->DATADENASCIMENTO = $param["DATADENASCIMENTO"];
        }

        if (array_key_exists("SEXO",$param) and $param["SEXO"] !== null) {
            $this->SEXO = $param["SEXO"];
        }

        if (array_key_exists("MEMBERSHIP",$param) and $param["MEMBERSHIP"] !== null) {
            $this->MEMBERSHIP = $param["MEMBERSHIP"];
        }

        if (array_key_exists("NACIONALIDADE",$param) and $param["NACIONALIDADE"] !== null) {
            $this->NACIONALIDADE = $param["NACIONALIDADE"];
        }

        if (array_key_exists("VALIDADE",$param) and $param["VALIDADE"] !== null) {
            $this->VALIDADE = $param["VALIDADE"];
        }

        if (array_key_exists("RNM",$param) and $param["RNM"] !== null) {
            $this->RNM = $param["RNM"];
        }

        if (array_key_exists("CPF",$param) and $param["CPF"] !== null) {
            $this->CPF = $param["CPF"];
        }

        if (array_key_exists("CLASSIFICATION",$param) and $param["CLASSIFICATION"] !== null) {
            $this->CLASSIFICATION = $param["CLASSIFICATION"];
        }

        if (array_key_exists("PRAZODERESIDENCIA",$param) and $param["PRAZODERESIDENCIA"] !== null) {
            $this->PRAZODERESIDENCIA = $param["PRAZODERESIDENCIA"];
        }

        if (array_key_exists("ISSUANCE",$param) and $param["ISSUANCE"] !== null) {
            $this->ISSUANCE = $param["ISSUANCE"];
        }

        if (array_key_exists("AMPAROLEGAL",$param) and $param["AMPAROLEGAL"] !== null) {
            $this->AMPAROLEGAL = $param["AMPAROLEGAL"];
        }

        if (array_key_exists("MRZ",$param) and $param["MRZ"] !== null) {
            $this->MRZ = $param["MRZ"];
        }

        if (array_key_exists("PortraitImage",$param) and $param["PortraitImage"] !== null) {
            $this->PortraitImage = $param["PortraitImage"];
        }

        if (array_key_exists("PortraitImageBack",$param) and $param["PortraitImageBack"] !== null) {
            $this->PortraitImageBack = $param["PortraitImageBack"];
        }
    }
}
