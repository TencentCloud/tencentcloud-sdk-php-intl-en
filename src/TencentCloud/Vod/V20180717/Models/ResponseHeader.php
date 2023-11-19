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
 * Custom response header configuration. This is disabled by default.
 *
 * @method string getSwitch() Obtain Custom response header configuration switch, the values u200bu200bare: <li>on: on; </li> <li>off: off. </li>
 * @method void setSwitch(string $Switch) Set Custom response header configuration switch, the values u200bu200bare: <li>on: on; </li> <li>off: off. </li>
 * @method array getHeaderRules() Obtain Custom response header rules
 * @method void setHeaderRules(array $HeaderRules) Set Custom response header rules
 */
class ResponseHeader extends AbstractModel
{
    /**
     * @var string Custom response header configuration switch, the values u200bu200bare: <li>on: on; </li> <li>off: off. </li>
     */
    public $Switch;

    /**
     * @var array Custom response header rules
     */
    public $HeaderRules;

    /**
     * @param string $Switch Custom response header configuration switch, the values u200bu200bare: <li>on: on; </li> <li>off: off. </li>
     * @param array $HeaderRules Custom response header rules
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

        if (array_key_exists("HeaderRules",$param) and $param["HeaderRules"] !== null) {
            $this->HeaderRules = [];
            foreach ($param["HeaderRules"] as $key => $value){
                $obj = new HttpHeaderPathRule();
                $obj->deserialize($value);
                array_push($this->HeaderRules, $obj);
            }
        }
    }
}
