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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DuplicateDomainConfig request structure.
 *
 * @method string getDomain() Obtain Adds a domain name.
 * @method void setDomain(string $Domain) Set Adds a domain name.
 * @method string getReferenceDomain() Obtain Specifies the configured domain name to be copied.
 * @method void setReferenceDomain(string $ReferenceDomain) Set Specifies the configured domain name to be copied.
 */
class DuplicateDomainConfigRequest extends AbstractModel
{
    /**
     * @var string Adds a domain name.
     */
    public $Domain;

    /**
     * @var string Specifies the configured domain name to be copied.
     */
    public $ReferenceDomain;

    /**
     * @param string $Domain Adds a domain name.
     * @param string $ReferenceDomain Specifies the configured domain name to be copied.
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

        if (array_key_exists("ReferenceDomain",$param) and $param["ReferenceDomain"] !== null) {
            $this->ReferenceDomain = $param["ReferenceDomain"];
        }
    }
}
