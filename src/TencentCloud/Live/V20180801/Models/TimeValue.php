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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Metric value at a specified point in time.
 *
 * @method string getTime() Obtain UTC time in the format of `yyyy-mm-ddTHH:MM:SSZ`.
 * @method void setTime(string $Time) Set UTC time in the format of `yyyy-mm-ddTHH:MM:SSZ`.
 * @method integer getNum() Obtain Value.
 * @method void setNum(integer $Num) Set Value.
 */
class TimeValue extends AbstractModel
{
    /**
     * @var string UTC time in the format of `yyyy-mm-ddTHH:MM:SSZ`.
     */
    public $Time;

    /**
     * @var integer Value.
     */
    public $Num;

    /**
     * @param string $Time UTC time in the format of `yyyy-mm-ddTHH:MM:SSZ`.
     * @param integer $Num Value.
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }
    }
}
