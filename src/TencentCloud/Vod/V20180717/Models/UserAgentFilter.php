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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UserAgent:blacklist/whitelist configuration
 *
 * @method string getSwitch() Obtain UserAgent blacklist and whitelist configuration switch, the values u200bu200bare: <li>on: on; </li> <li>off: off. </li>
 * @method void setSwitch(string $Switch) Set UserAgent blacklist and whitelist configuration switch, the values u200bu200bare: <li>on: on; </li> <li>off: off. </li>
 * @method array getFilterRules() Obtain UA blacklist/whitelist effect rule list
 * @method void setFilterRules(array $FilterRules) Set UA blacklist/whitelist effect rule list
 */
class UserAgentFilter extends AbstractModel
{
    /**
     * @var string UserAgent blacklist and whitelist configuration switch, the values u200bu200bare: <li>on: on; </li> <li>off: off. </li>
     */
    public $Switch;

    /**
     * @var array UA blacklist/whitelist effect rule list
     */
    public $FilterRules;

    /**
     * @param string $Switch UserAgent blacklist and whitelist configuration switch, the values u200bu200bare: <li>on: on; </li> <li>off: off. </li>
     * @param array $FilterRules UA blacklist/whitelist effect rule list
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

        if (array_key_exists("FilterRules",$param) and $param["FilterRules"] !== null) {
            $this->FilterRules = [];
            foreach ($param["FilterRules"] as $key => $value){
                $obj = new UserAgentFilterRule();
                $obj->deserialize($value);
                array_push($this->FilterRules, $obj);
            }
        }
    }
}
