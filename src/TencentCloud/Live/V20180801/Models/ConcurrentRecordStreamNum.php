<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * Number of concurrent recording channels
 *
 * @method string getTime() Obtain Time point.
 * @method void setTime(string $Time) Set Time point.
 * @method integer getNum() Obtain Number of channels.
 * @method void setNum(integer $Num) Set Number of channels.
 */
class ConcurrentRecordStreamNum extends AbstractModel
{
    /**
     * @var string Time point.
     */
    public $Time;

    /**
     * @var integer Number of channels.
     */
    public $Num;

    /**
     * @param string $Time Time point.
     * @param integer $Num Number of channels.
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
