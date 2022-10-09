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
 * The number of tasks.
 *
 * @method string getTime() Obtain The time of query.
 * @method void setTime(string $Time) Set The time of query.
 * @method integer getCodeRate() Obtain The bitrate.
 * @method void setCodeRate(integer $CodeRate) Set The bitrate.
 * @method integer getNum() Obtain The number of tasks.
 * @method void setNum(integer $Num) Set The number of tasks.
 */
class TranscodeTaskNum extends AbstractModel
{
    /**
     * @var string The time of query.
     */
    public $Time;

    /**
     * @var integer The bitrate.
     */
    public $CodeRate;

    /**
     * @var integer The number of tasks.
     */
    public $Num;

    /**
     * @param string $Time The time of query.
     * @param integer $CodeRate The bitrate.
     * @param integer $Num The number of tasks.
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

        if (array_key_exists("CodeRate",$param) and $param["CodeRate"] !== null) {
            $this->CodeRate = $param["CodeRate"];
        }

        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }
    }
}
