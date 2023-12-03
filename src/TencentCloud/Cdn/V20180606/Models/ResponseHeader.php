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
 * Custom response header configuration. This is disabled by default.
 *
 * @method string getSwitch() Obtain Whether to enable custom response headers. Values:
`on`: Enable
`off`: Disable
 * @method void setSwitch(string $Switch) Set Whether to enable custom response headers. Values:
`on`: Enable
`off`: Disable
 * @method array getHeaderRules() Obtain Custom response header rules
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setHeaderRules(array $HeaderRules) Set Custom response header rules
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class ResponseHeader extends AbstractModel
{
    /**
     * @var string Whether to enable custom response headers. Values:
`on`: Enable
`off`: Disable
     */
    public $Switch;

    /**
     * @var array Custom response header rules
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $HeaderRules;

    /**
     * @param string $Switch Whether to enable custom response headers. Values:
`on`: Enable
`off`: Disable
     * @param array $HeaderRules Custom response header rules
Note: This field may return `null`, indicating that no valid value can be obtained.
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
