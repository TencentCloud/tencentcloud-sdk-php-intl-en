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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The credential verification parameters.
 *
 * @method integer getCptId() Obtain The claim protocol type (CPT) ID.
 * @method void setCptId(integer $CptId) Set The claim protocol type (CPT) ID.
 * @method string getIssuer() Obtain The issuer DID.
 * @method void setIssuer(string $Issuer) Set The issuer DID.
 * @method integer getExpirationDate() Obtain The expiration time.
 * @method void setExpirationDate(integer $ExpirationDate) Set The expiration time.
 * @method string getClaimJson() Obtain The claim.
 * @method void setClaimJson(string $ClaimJson) Set The claim.
 * @method integer getIssuanceDate() Obtain The time when the credential was issued.
 * @method void setIssuanceDate(integer $IssuanceDate) Set The time when the credential was issued.
 * @method string getContext() Obtain The context.
 * @method void setContext(string $Context) Set The context.
 * @method string getId() Obtain The ID.
 * @method void setId(string $Id) Set The ID.
 * @method Proof getProof() Obtain The signature.
 * @method void setProof(Proof $Proof) Set The signature.
 * @method array getType() Obtain The type.
 * @method void setType(array $Type) Set The type.
 */
class VerifyFunctionArg extends AbstractModel
{
    /**
     * @var integer The claim protocol type (CPT) ID.
     */
    public $CptId;

    /**
     * @var string The issuer DID.
     */
    public $Issuer;

    /**
     * @var integer The expiration time.
     */
    public $ExpirationDate;

    /**
     * @var string The claim.
     */
    public $ClaimJson;

    /**
     * @var integer The time when the credential was issued.
     */
    public $IssuanceDate;

    /**
     * @var string The context.
     */
    public $Context;

    /**
     * @var string The ID.
     */
    public $Id;

    /**
     * @var Proof The signature.
     */
    public $Proof;

    /**
     * @var array The type.
     */
    public $Type;

    /**
     * @param integer $CptId The claim protocol type (CPT) ID.
     * @param string $Issuer The issuer DID.
     * @param integer $ExpirationDate The expiration time.
     * @param string $ClaimJson The claim.
     * @param integer $IssuanceDate The time when the credential was issued.
     * @param string $Context The context.
     * @param string $Id The ID.
     * @param Proof $Proof The signature.
     * @param array $Type The type.
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
        if (array_key_exists("CptId",$param) and $param["CptId"] !== null) {
            $this->CptId = $param["CptId"];
        }

        if (array_key_exists("Issuer",$param) and $param["Issuer"] !== null) {
            $this->Issuer = $param["Issuer"];
        }

        if (array_key_exists("ExpirationDate",$param) and $param["ExpirationDate"] !== null) {
            $this->ExpirationDate = $param["ExpirationDate"];
        }

        if (array_key_exists("ClaimJson",$param) and $param["ClaimJson"] !== null) {
            $this->ClaimJson = $param["ClaimJson"];
        }

        if (array_key_exists("IssuanceDate",$param) and $param["IssuanceDate"] !== null) {
            $this->IssuanceDate = $param["IssuanceDate"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Proof",$param) and $param["Proof"] !== null) {
            $this->Proof = new Proof();
            $this->Proof->deserialize($param["Proof"]);
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
