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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MP4 configuration parameter.
 *
 * @method integer getInterval() Obtain Recording duration, in seconds. The interval can range from 10 minutes to 720 minutes. It is 60 minutes (3,600 seconds) by default.
 * @method void setInterval(integer $Interval) Set Recording duration, in seconds. The interval can range from 10 minutes to 720 minutes. It is 60 minutes (3,600 seconds) by default.
 */
class MP4ConfigureInfo extends AbstractModel
{
    /**
     * @var integer Recording duration, in seconds. The interval can range from 10 minutes to 720 minutes. It is 60 minutes (3,600 seconds) by default.
     */
    public $Interval;

    /**
     * @param integer $Interval Recording duration, in seconds. The interval can range from 10 minutes to 720 minutes. It is 60 minutes (3,600 seconds) by default.
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
        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }
    }
}
