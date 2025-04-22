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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Slow SQL logs
 *
 * @method float getTotalTime() Obtain Total consumption time.
 * @method void setTotalTime(float $TotalTime) Set Total consumption time.
 * @method integer getTotalCallTimes() Obtain Total number of calls.
 * @method void setTotalCallTimes(integer $TotalCallTimes) Set Total number of calls.
 * @method array getNormalQuerys() Obtain Slow SQL.
 * @method void setNormalQuerys(array $NormalQuerys) Set Slow SQL.
 */
class SlowLogDetail extends AbstractModel
{
    /**
     * @var float Total consumption time.
     */
    public $TotalTime;

    /**
     * @var integer Total number of calls.
     */
    public $TotalCallTimes;

    /**
     * @var array Slow SQL.
     */
    public $NormalQuerys;

    /**
     * @param float $TotalTime Total consumption time.
     * @param integer $TotalCallTimes Total number of calls.
     * @param array $NormalQuerys Slow SQL.
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
        if (array_key_exists("TotalTime",$param) and $param["TotalTime"] !== null) {
            $this->TotalTime = $param["TotalTime"];
        }

        if (array_key_exists("TotalCallTimes",$param) and $param["TotalCallTimes"] !== null) {
            $this->TotalCallTimes = $param["TotalCallTimes"];
        }

        if (array_key_exists("NormalQuerys",$param) and $param["NormalQuerys"] !== null) {
            $this->NormalQuerys = [];
            foreach ($param["NormalQuerys"] as $key => $value){
                $obj = new NormQueryItem();
                $obj->deserialize($value);
                array_push($this->NormalQuerys, $obj);
            }
        }
    }
}
