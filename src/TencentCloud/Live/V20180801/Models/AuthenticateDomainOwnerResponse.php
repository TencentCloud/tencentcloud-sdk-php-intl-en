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
 * AuthenticateDomainOwner response structure.
 *
 * @method string getContent() Obtain The content verified.
If `VerifyType` is `dnsCheck`, this is the TXT record that should be added for verification.
If `VerifyType` is `fileCheck`, this is the file that should be uploaded for verification.
 * @method void setContent(string $Content) Set The content verified.
If `VerifyType` is `dnsCheck`, this is the TXT record that should be added for verification.
If `VerifyType` is `fileCheck`, this is the file that should be uploaded for verification.
 * @method integer getStatus() Obtain The verification status.
If the value of this parameter is 0 or greater, the domain has been verified.
If the value of this parameter is smaller than 0, the domain has not been verified.
 * @method void setStatus(integer $Status) Set The verification status.
If the value of this parameter is 0 or greater, the domain has been verified.
If the value of this parameter is smaller than 0, the domain has not been verified.
 * @method string getMainDomain() Obtain The primary domain of the domain verified.
Verification is not required if another domain under the same primary domain has been successfully verified.
 * @method void setMainDomain(string $MainDomain) Set The primary domain of the domain verified.
Verification is not required if another domain under the same primary domain has been successfully verified.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class AuthenticateDomainOwnerResponse extends AbstractModel
{
    /**
     * @var string The content verified.
If `VerifyType` is `dnsCheck`, this is the TXT record that should be added for verification.
If `VerifyType` is `fileCheck`, this is the file that should be uploaded for verification.
     */
    public $Content;

    /**
     * @var integer The verification status.
If the value of this parameter is 0 or greater, the domain has been verified.
If the value of this parameter is smaller than 0, the domain has not been verified.
     */
    public $Status;

    /**
     * @var string The primary domain of the domain verified.
Verification is not required if another domain under the same primary domain has been successfully verified.
     */
    public $MainDomain;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Content The content verified.
If `VerifyType` is `dnsCheck`, this is the TXT record that should be added for verification.
If `VerifyType` is `fileCheck`, this is the file that should be uploaded for verification.
     * @param integer $Status The verification status.
If the value of this parameter is 0 or greater, the domain has been verified.
If the value of this parameter is smaller than 0, the domain has not been verified.
     * @param string $MainDomain The primary domain of the domain verified.
Verification is not required if another domain under the same primary domain has been successfully verified.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MainDomain",$param) and $param["MainDomain"] !== null) {
            $this->MainDomain = $param["MainDomain"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
