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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of a CDN instance
 *
 * @method string getDomain() Obtain The domain.
 * @method void setDomain(string $Domain) Set The domain.
 * @method string getCertId() Obtain The ID of the deployed certificate.
 * @method void setCertId(string $CertId) Set The ID of the deployed certificate.
 * @method string getStatus() Obtain Domain name status: rejected - the domain name failed the review or its registration has expired/been canceled; processing - deploying; online - started; offline - closed.
 * @method void setStatus(string $Status) Set Domain name status: rejected - the domain name failed the review or its registration has expired/been canceled; processing - deploying; online - started; offline - closed.
 * @method string getHttpsBillingSwitch() Obtain Domain billing status, where on indicates enable and off indicates disable.
 * @method void setHttpsBillingSwitch(string $HttpsBillingSwitch) Set Domain billing status, where on indicates enable and off indicates disable.
 */
class CdnInstanceDetail extends AbstractModel
{
    /**
     * @var string The domain.
     */
    public $Domain;

    /**
     * @var string The ID of the deployed certificate.
     */
    public $CertId;

    /**
     * @var string Domain name status: rejected - the domain name failed the review or its registration has expired/been canceled; processing - deploying; online - started; offline - closed.
     */
    public $Status;

    /**
     * @var string Domain billing status, where on indicates enable and off indicates disable.
     */
    public $HttpsBillingSwitch;

    /**
     * @param string $Domain The domain.
     * @param string $CertId The ID of the deployed certificate.
     * @param string $Status Domain name status: rejected - the domain name failed the review or its registration has expired/been canceled; processing - deploying; online - started; offline - closed.
     * @param string $HttpsBillingSwitch Domain billing status, where on indicates enable and off indicates disable.
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("HttpsBillingSwitch",$param) and $param["HttpsBillingSwitch"] !== null) {
            $this->HttpsBillingSwitch = $param["HttpsBillingSwitch"];
        }
    }
}
