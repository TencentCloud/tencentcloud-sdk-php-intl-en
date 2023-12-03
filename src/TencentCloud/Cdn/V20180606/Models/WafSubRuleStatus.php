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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * WAF sub-rule switch status
 *
 * @method string getSwitch() Obtain Whether to enable WAF sub-rules. Values:
`on`: Enable
`off`: Disable
 * @method void setSwitch(string $Switch) Set Whether to enable WAF sub-rules. Values:
`on`: Enable
`off`: Disable
 * @method array getSubIds() Obtain List of rule IDs
 * @method void setSubIds(array $SubIds) Set List of rule IDs
 */
class WafSubRuleStatus extends AbstractModel
{
    /**
     * @var string Whether to enable WAF sub-rules. Values:
`on`: Enable
`off`: Disable
     */
    public $Switch;

    /**
     * @var array List of rule IDs
     */
    public $SubIds;

    /**
     * @param string $Switch Whether to enable WAF sub-rules. Values:
`on`: Enable
`off`: Disable
     * @param array $SubIds List of rule IDs
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("SubIds",$param) and $param["SubIds"] !== null) {
            $this->SubIds = $param["SubIds"];
        }
    }
}
