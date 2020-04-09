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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Slow query details
 *
 * @method float getTotalTime() Obtain Total time consumed
 * @method void setTotalTime(float $TotalTime) Set Total time consumed
 * @method integer getTotalCalls() Obtain Total number of calls
 * @method void setTotalCalls(integer $TotalCalls) Set Total number of calls
 * @method array getNormalQueries() Obtain List of slow SQL statements after desensitization
 * @method void setNormalQueries(array $NormalQueries) Set List of slow SQL statements after desensitization
 */
class SlowlogDetail extends AbstractModel
{
    /**
     * @var float Total time consumed
     */
    public $TotalTime;

    /**
     * @var integer Total number of calls
     */
    public $TotalCalls;

    /**
     * @var array List of slow SQL statements after desensitization
     */
    public $NormalQueries;

    /**
     * @param float $TotalTime Total time consumed
     * @param integer $TotalCalls Total number of calls
     * @param array $NormalQueries List of slow SQL statements after desensitization
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

        if (array_key_exists("TotalCalls",$param) and $param["TotalCalls"] !== null) {
            $this->TotalCalls = $param["TotalCalls"];
        }

        if (array_key_exists("NormalQueries",$param) and $param["NormalQueries"] !== null) {
            $this->NormalQueries = [];
            foreach ($param["NormalQueries"] as $key => $value){
                $obj = new NormalQueryItem();
                $obj->deserialize($value);
                array_push($this->NormalQueries, $obj);
            }
        }
    }
}
