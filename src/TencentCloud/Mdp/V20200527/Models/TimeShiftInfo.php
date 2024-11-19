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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Linearly assembled channel time-shift configuration information.
 *
 * @method integer getTimeWindows() Obtain Lookback window, in seconds.
 * @method void setTimeWindows(integer $TimeWindows) Set Lookback window, in seconds.
 */
class TimeShiftInfo extends AbstractModel
{
    /**
     * @var integer Lookback window, in seconds.
     */
    public $TimeWindows;

    /**
     * @param integer $TimeWindows Lookback window, in seconds.
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
        if (array_key_exists("TimeWindows",$param) and $param["TimeWindows"] !== null) {
            $this->TimeWindows = $param["TimeWindows"];
        }
    }
}
