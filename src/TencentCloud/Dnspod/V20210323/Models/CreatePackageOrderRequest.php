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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePackageOrder request structure.
 *
 * @method string getDomain() Obtain Domain
 * @method void setDomain(string $Domain) Set Domain
 * @method string getGrade() Obtain Valid options for the package version are as follows:
DPG_PROFESSIONAL
DPG_ENTERPRISE
DPG_ULTIMATE
 * @method void setGrade(string $Grade) Set Valid options for the package version are as follows:
DPG_PROFESSIONAL
DPG_ENTERPRISE
DPG_ULTIMATE
 */
class CreatePackageOrderRequest extends AbstractModel
{
    /**
     * @var string Domain
     */
    public $Domain;

    /**
     * @var string Valid options for the package version are as follows:
DPG_PROFESSIONAL
DPG_ENTERPRISE
DPG_ULTIMATE
     */
    public $Grade;

    /**
     * @param string $Domain Domain
     * @param string $Grade Valid options for the package version are as follows:
DPG_PROFESSIONAL
DPG_ENTERPRISE
DPG_ULTIMATE
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

        if (array_key_exists("Grade",$param) and $param["Grade"] !== null) {
            $this->Grade = $param["Grade"];
        }
    }
}
