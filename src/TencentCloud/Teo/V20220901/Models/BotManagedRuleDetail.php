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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Bot managed rule details
 *
 * @method integer getRuleId() Obtain The rule ID.
 * @method void setRuleId(integer $RuleId) Set The rule ID.
 * @method string getDescription() Obtain The rule description.
 * @method void setDescription(string $Description) Set The rule description.
 * @method string getRuleTypeName() Obtain Rule type
 * @method void setRuleTypeName(string $RuleTypeName) Set Rule type
 * @method string getStatus() Obtain The rule status.
 * @method void setStatus(string $Status) Set The rule status.
 */
class BotManagedRuleDetail extends AbstractModel
{
    /**
     * @var integer The rule ID.
     */
    public $RuleId;

    /**
     * @var string The rule description.
     */
    public $Description;

    /**
     * @var string Rule type
     */
    public $RuleTypeName;

    /**
     * @var string The rule status.
     */
    public $Status;

    /**
     * @param integer $RuleId The rule ID.
     * @param string $Description The rule description.
     * @param string $RuleTypeName Rule type
     * @param string $Status The rule status.
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RuleTypeName",$param) and $param["RuleTypeName"] !== null) {
            $this->RuleTypeName = $param["RuleTypeName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
