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
 * Back to the source 301/302 status code automatically follows the configuration, the default is off
 *
 * @method string getSwitch() Obtain Access forced redirect configuration switch <li>on：Enable;</li> <li>off：Disable.</li>
 * @method void setSwitch(string $Switch) Set Access forced redirect configuration switch <li>on：Enable;</li> <li>off：Disable.</li>
 */
class FollowRedirect extends AbstractModel
{
    /**
     * @var string Access forced redirect configuration switch <li>on：Enable;</li> <li>off：Disable.</li>
     */
    public $Switch;

    /**
     * @param string $Switch Access forced redirect configuration switch <li>on：Enable;</li> <li>off：Disable.</li>
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
    }
}