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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VerifyOwnership request structure.
 *
 * @method string getDomain() Obtain Specifies the site domain name or acceleration domain name under the site.
 * @method void setDomain(string $Domain) Set Specifies the site domain name or acceleration domain name under the site.
 */
class VerifyOwnershipRequest extends AbstractModel
{
    /**
     * @var string Specifies the site domain name or acceleration domain name under the site.
     */
    public $Domain;

    /**
     * @param string $Domain Specifies the site domain name or acceleration domain name under the site.
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
    }
}
