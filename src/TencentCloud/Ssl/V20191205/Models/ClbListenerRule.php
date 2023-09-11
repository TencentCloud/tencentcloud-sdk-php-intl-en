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
 * Details of a CLB listener rule
 *
 * @method string getLocationId() Obtain The rule ID.
 * @method void setLocationId(string $LocationId) Set The rule ID.
 * @method string getDomain() Obtain The domains bound.
 * @method void setDomain(string $Domain) Set The domains bound.
 * @method boolean getIsMatch() Obtain Whether the rule matches the domains to be associated with a certificate.
 * @method void setIsMatch(boolean $IsMatch) Set Whether the rule matches the domains to be associated with a certificate.
 * @method Certificate getCertificate() Obtain The certificates associated with the rule.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCertificate(Certificate $Certificate) Set The certificates associated with the rule.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getNoMatchDomains() Obtain The list of non-matching domains.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNoMatchDomains(array $NoMatchDomains) Set The list of non-matching domains.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ClbListenerRule extends AbstractModel
{
    /**
     * @var string The rule ID.
     */
    public $LocationId;

    /**
     * @var string The domains bound.
     */
    public $Domain;

    /**
     * @var boolean Whether the rule matches the domains to be associated with a certificate.
     */
    public $IsMatch;

    /**
     * @var Certificate The certificates associated with the rule.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Certificate;

    /**
     * @var array The list of non-matching domains.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NoMatchDomains;

    /**
     * @param string $LocationId The rule ID.
     * @param string $Domain The domains bound.
     * @param boolean $IsMatch Whether the rule matches the domains to be associated with a certificate.
     * @param Certificate $Certificate The certificates associated with the rule.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $NoMatchDomains The list of non-matching domains.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("IsMatch",$param) and $param["IsMatch"] !== null) {
            $this->IsMatch = $param["IsMatch"];
        }

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = new Certificate();
            $this->Certificate->deserialize($param["Certificate"]);
        }

        if (array_key_exists("NoMatchDomains",$param) and $param["NoMatchDomains"] !== null) {
            $this->NoMatchDomains = $param["NoMatchDomains"];
        }
    }
}
