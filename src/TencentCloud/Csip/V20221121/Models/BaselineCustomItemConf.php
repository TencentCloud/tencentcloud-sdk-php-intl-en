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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configuration item for overriding the built-in detection item with a custom value in a policy.
 *
 * @method integer getRuleID() Obtain <p>Built-in detection item rule ID. Either this or CustomItemID needs to be imported.</p>
 * @method void setRuleID(integer $RuleID) Set <p>Built-in detection item rule ID. Either this or CustomItemID needs to be imported.</p>
 * @method array getCustomValueList() Obtain <p>User-defined judgment value list, which must comply with the value constraints defined by the detection item WebEditParam.</p>
 * @method void setCustomValueList(array $CustomValueList) Set <p>User-defined judgment value list, which must comply with the value constraints defined by the detection item WebEditParam.</p>
 * @method integer getCustomItemID() Obtain <p>Existing custom configuration ID. It can be omitted when projects are added and is filled in when editing.</p>
 * @method void setCustomItemID(integer $CustomItemID) Set <p>Existing custom configuration ID. It can be omitted when projects are added and is filled in when editing.</p>
 */
class BaselineCustomItemConf extends AbstractModel
{
    /**
     * @var integer <p>Built-in detection item rule ID. Either this or CustomItemID needs to be imported.</p>
     */
    public $RuleID;

    /**
     * @var array <p>User-defined judgment value list, which must comply with the value constraints defined by the detection item WebEditParam.</p>
     */
    public $CustomValueList;

    /**
     * @var integer <p>Existing custom configuration ID. It can be omitted when projects are added and is filled in when editing.</p>
     */
    public $CustomItemID;

    /**
     * @param integer $RuleID <p>Built-in detection item rule ID. Either this or CustomItemID needs to be imported.</p>
     * @param array $CustomValueList <p>User-defined judgment value list, which must comply with the value constraints defined by the detection item WebEditParam.</p>
     * @param integer $CustomItemID <p>Existing custom configuration ID. It can be omitted when projects are added and is filled in when editing.</p>
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
        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("CustomValueList",$param) and $param["CustomValueList"] !== null) {
            $this->CustomValueList = $param["CustomValueList"];
        }

        if (array_key_exists("CustomItemID",$param) and $param["CustomItemID"] !== null) {
            $this->CustomItemID = $param["CustomItemID"];
        }
    }
}
