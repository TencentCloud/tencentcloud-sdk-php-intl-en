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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AuthenticateDomainOwner request structure.
 *
 * @method string getDomainName() Obtain The domain to verify.
 * @method void setDomainName(string $DomainName) Set The domain to verify.
 * @method string getVerifyType() Obtain The verification type. Valid values:
dnsCheck: Check immediately whether the verification DNS record has been added successfully. If so, record this verification result.
fileCheck: Check immediately whether the verification HTML file has been uploaded successfully. If so, record this verification result.
dbCheck: Check whether the domain has already been successfully verified.
 * @method void setVerifyType(string $VerifyType) Set The verification type. Valid values:
dnsCheck: Check immediately whether the verification DNS record has been added successfully. If so, record this verification result.
fileCheck: Check immediately whether the verification HTML file has been uploaded successfully. If so, record this verification result.
dbCheck: Check whether the domain has already been successfully verified.
 */
class AuthenticateDomainOwnerRequest extends AbstractModel
{
    /**
     * @var string The domain to verify.
     */
    public $DomainName;

    /**
     * @var string The verification type. Valid values:
dnsCheck: Check immediately whether the verification DNS record has been added successfully. If so, record this verification result.
fileCheck: Check immediately whether the verification HTML file has been uploaded successfully. If so, record this verification result.
dbCheck: Check whether the domain has already been successfully verified.
     */
    public $VerifyType;

    /**
     * @param string $DomainName The domain to verify.
     * @param string $VerifyType The verification type. Valid values:
dnsCheck: Check immediately whether the verification DNS record has been added successfully. If so, record this verification result.
fileCheck: Check immediately whether the verification HTML file has been uploaded successfully. If so, record this verification result.
dbCheck: Check whether the domain has already been successfully verified.
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

        if (array_key_exists("VerifyType",$param) and $param["VerifyType"] !== null) {
            $this->VerifyType = $param["VerifyType"];
        }
    }
}
