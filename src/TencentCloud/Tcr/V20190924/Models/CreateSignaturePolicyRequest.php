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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSignaturePolicy request structure.
 *
 * @method string getRegistryId() Obtain Instance ID
 * @method void setRegistryId(string $RegistryId) Set Instance ID
 * @method string getName() Obtain Policy name
 * @method void setName(string $Name) Set Policy name
 * @method string getNamespaceName() Obtain Namespace name
 * @method void setNamespaceName(string $NamespaceName) Set Namespace name
 * @method string getKmsId() Obtain KMS key
 * @method void setKmsId(string $KmsId) Set KMS key
 * @method string getKmsRegion() Obtain Region of the KMS key
 * @method void setKmsRegion(string $KmsRegion) Set Region of the KMS key
 * @method string getDomain() Obtain Custom domain name. If this parameter is left empty, the default domain name of the TCR instance will be used to generate the signature.
 * @method void setDomain(string $Domain) Set Custom domain name. If this parameter is left empty, the default domain name of the TCR instance will be used to generate the signature.
 * @method boolean getDisabled() Obtain Whether to disable the signing policy. Default value: false.
 * @method void setDisabled(boolean $Disabled) Set Whether to disable the signing policy. Default value: false.
 */
class CreateSignaturePolicyRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $RegistryId;

    /**
     * @var string Policy name
     */
    public $Name;

    /**
     * @var string Namespace name
     */
    public $NamespaceName;

    /**
     * @var string KMS key
     */
    public $KmsId;

    /**
     * @var string Region of the KMS key
     */
    public $KmsRegion;

    /**
     * @var string Custom domain name. If this parameter is left empty, the default domain name of the TCR instance will be used to generate the signature.
     */
    public $Domain;

    /**
     * @var boolean Whether to disable the signing policy. Default value: false.
     */
    public $Disabled;

    /**
     * @param string $RegistryId Instance ID
     * @param string $Name Policy name
     * @param string $NamespaceName Namespace name
     * @param string $KmsId KMS key
     * @param string $KmsRegion Region of the KMS key
     * @param string $Domain Custom domain name. If this parameter is left empty, the default domain name of the TCR instance will be used to generate the signature.
     * @param boolean $Disabled Whether to disable the signing policy. Default value: false.
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("KmsId",$param) and $param["KmsId"] !== null) {
            $this->KmsId = $param["KmsId"];
        }

        if (array_key_exists("KmsRegion",$param) and $param["KmsRegion"] !== null) {
            $this->KmsRegion = $param["KmsRegion"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Disabled",$param) and $param["Disabled"] !== null) {
            $this->Disabled = $param["Disabled"];
        }
    }
}
