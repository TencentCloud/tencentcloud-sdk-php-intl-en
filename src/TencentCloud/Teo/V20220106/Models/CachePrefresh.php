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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cache prefresh
 *
 * @method string getSwitch() Obtain Configuration switch
 * @method void setSwitch(string $Switch) Set Configuration switch
 * @method integer getPercent() Obtain Cache prefresh percentage. Values: 1-99
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPercent(integer $Percent) Set Cache prefresh percentage. Values: 1-99
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CachePrefresh extends AbstractModel
{
    /**
     * @var string Configuration switch
     */
    public $Switch;

    /**
     * @var integer Cache prefresh percentage. Values: 1-99
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Percent;

    /**
     * @param string $Switch Configuration switch
     * @param integer $Percent Cache prefresh percentage. Values: 1-99
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }
    }
}
