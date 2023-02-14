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
 * The input parameters for creating a credential.
 *
 * @method integer getCptId() Obtain The claim protocol type (CPT) ID.
 * @method void setCptId(integer $CptId) Set The claim protocol type (CPT) ID.
 * @method string getIssuer() Obtain The DID of the issuer.
 * @method void setIssuer(string $Issuer) Set The DID of the issuer.
 * @method string getExpirationDate() Obtain The expiration time.
 * @method void setExpirationDate(string $ExpirationDate) Set The expiration time.
 * @method string getClaimJson() Obtain The claim.
 * @method void setClaimJson(string $ClaimJson) Set The claim.
 */
class FunctionArg extends AbstractModel
{
    /**
     * @var integer The claim protocol type (CPT) ID.
     */
    public $CptId;

    /**
     * @var string The DID of the issuer.
     */
    public $Issuer;

    /**
     * @var string The expiration time.
     */
    public $ExpirationDate;

    /**
     * @var string The claim.
     */
    public $ClaimJson;

    /**
     * @param integer $CptId The claim protocol type (CPT) ID.
     * @param string $Issuer The DID of the issuer.
     * @param string $ExpirationDate The expiration time.
     * @param string $ClaimJson The claim.
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
    }
}
