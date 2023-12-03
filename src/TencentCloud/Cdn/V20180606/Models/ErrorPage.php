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
 * Status code redirect configuration, which is disabled by default.
 *
 * @method string getSwitch() Obtain Whether to enable status code-based redirection. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSwitch(string $Switch) Set Whether to enable status code-based redirection. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getPageRules() Obtain Status code redirect rules configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setPageRules(array $PageRules) Set Status code redirect rules configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class ErrorPage extends AbstractModel
{
    /**
     * @var string Whether to enable status code-based redirection. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Switch;

    /**
     * @var array Status code redirect rules configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $PageRules;

    /**
     * @param string $Switch Whether to enable status code-based redirection. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $PageRules Status code redirect rules configuration
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

        if (array_key_exists("PageRules",$param) and $param["PageRules"] !== null) {
            $this->PageRules = [];
            foreach ($param["PageRules"] as $key => $value){
                $obj = new ErrorPageRule();
                $obj->deserialize($value);
                array_push($this->PageRules, $obj);
            }
        }
    }
}
