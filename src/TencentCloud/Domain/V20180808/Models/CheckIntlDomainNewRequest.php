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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckIntlDomainNew request structure.
 *
 * @method string getDomain() Obtain The name of the domain to be checked.
 * @method void setDomain(string $Domain) Set The name of the domain to be checked.
 * @method string getPeriod() Obtain Period, in years. If this parameter is left empty, premium domains cannot be queried.
 * @method void setPeriod(string $Period) Set Period, in years. If this parameter is left empty, premium domains cannot be queried.
 */
class CheckIntlDomainNewRequest extends AbstractModel
{
    /**
     * @var string The name of the domain to be checked.
     */
    public $Domain;

    /**
     * @var string Period, in years. If this parameter is left empty, premium domains cannot be queried.
     */
    public $Period;

    /**
     * @param string $Domain The name of the domain to be checked.
     * @param string $Period Period, in years. If this parameter is left empty, premium domains cannot be queried.
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

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }
    }
}
