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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteOwaspWhiteRule request structure.
 *
 * @method array getIds() Obtain ID list of allowlisted rules.
 * @method void setIds(array $Ids) Set ID list of allowlisted rules.
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 */
class DeleteOwaspWhiteRuleRequest extends AbstractModel
{
    /**
     * @var array ID list of allowlisted rules.
     */
    public $Ids;

    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @param array $Ids ID list of allowlisted rules.
     * @param string $Domain Domain name
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
        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
