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
 * DeleteCustomWhiteRule request structure.
 *
 * @method string getDomain() Obtain Deleted domain
 * @method void setDomain(string $Domain) Set Deleted domain
 * @method integer getRuleId() Obtain Deleted rule ID
 * @method void setRuleId(integer $RuleId) Set Deleted rule ID
 */
class DeleteCustomWhiteRuleRequest extends AbstractModel
{
    /**
     * @var string Deleted domain
     */
    public $Domain;

    /**
     * @var integer Deleted rule ID
     */
    public $RuleId;

    /**
     * @param string $Domain Deleted domain
     * @param integer $RuleId Deleted rule ID
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

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }
    }
}
