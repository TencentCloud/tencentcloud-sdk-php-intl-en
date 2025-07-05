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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Bot intelligence rule items
 *
 * @method string getLabel() Obtain Malicious bot, which is used to tag bad bots
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLabel(string $Label) Set Malicious bot, which is used to tag bad bots
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAction() Obtain Action
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAction(string $Action) Set Action
Note: This field may return null, indicating that no valid values can be obtained.
 */
class IntelligenceRuleItem extends AbstractModel
{
    /**
     * @var string Malicious bot, which is used to tag bad bots
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Label;

    /**
     * @var string Action
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Action;

    /**
     * @param string $Label Malicious bot, which is used to tag bad bots
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Action Action
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }
    }
}
