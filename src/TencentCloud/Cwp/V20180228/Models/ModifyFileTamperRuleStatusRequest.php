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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyFileTamperRuleStatus request structure.
 *
 * @method integer getStatus() Obtain 0: enable; 1: disable; 2: delete
 * @method void setStatus(integer $Status) Set 0: enable; 1: disable; 2: delete
 * @method array getIds() Obtain Corresponding event ID
 * @method void setIds(array $Ids) Set Corresponding event ID
 * @method integer getRuleCategory() Obtain Whether a system rule: 0: system rule; 1: user defined rule. System rule Status cannot be deleted.
 * @method void setRuleCategory(integer $RuleCategory) Set Whether a system rule: 0: system rule; 1: user defined rule. System rule Status cannot be deleted.
 */
class ModifyFileTamperRuleStatusRequest extends AbstractModel
{
    /**
     * @var integer 0: enable; 1: disable; 2: delete
     */
    public $Status;

    /**
     * @var array Corresponding event ID
     */
    public $Ids;

    /**
     * @var integer Whether a system rule: 0: system rule; 1: user defined rule. System rule Status cannot be deleted.
     */
    public $RuleCategory;

    /**
     * @param integer $Status 0: enable; 1: disable; 2: delete
     * @param array $Ids Corresponding event ID
     * @param integer $RuleCategory Whether a system rule: 0: system rule; 1: user defined rule. System rule Status cannot be deleted.
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("RuleCategory",$param) and $param["RuleCategory"] !== null) {
            $this->RuleCategory = $param["RuleCategory"];
        }
    }
}
