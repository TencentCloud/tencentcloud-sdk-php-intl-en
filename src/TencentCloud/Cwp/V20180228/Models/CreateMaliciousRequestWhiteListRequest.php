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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMaliciousRequestWhiteList request structure.
 *
 * @method string getDomain() Obtain Allowlisted domain names
 * @method void setDomain(string $Domain) Set Allowlisted domain names
 * @method string getMark() Obtain Remarks
 * @method void setMark(string $Mark) Set Remarks
 */
class CreateMaliciousRequestWhiteListRequest extends AbstractModel
{
    /**
     * @var string Allowlisted domain names
     */
    public $Domain;

    /**
     * @var string Remarks
     */
    public $Mark;

    /**
     * @param string $Domain Allowlisted domain names
     * @param string $Mark Remarks
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

        if (array_key_exists("Mark",$param) and $param["Mark"] !== null) {
            $this->Mark = $param["Mark"];
        }
    }
}
