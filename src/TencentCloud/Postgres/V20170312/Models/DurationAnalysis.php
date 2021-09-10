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
 * Analyze the execution time of slow query statements by classifying them to different time ranges
 *
 * @method string getTimeSegment() Obtain Time range
 * @method void setTimeSegment(string $TimeSegment) Set Time range
 * @method integer getCount() Obtain The number of slow query statements whose execution time falls within the time range
 * @method void setCount(integer $Count) Set The number of slow query statements whose execution time falls within the time range
 */
class DurationAnalysis extends AbstractModel
{
    /**
     * @var string Time range
     */
    public $TimeSegment;

    /**
     * @var integer The number of slow query statements whose execution time falls within the time range
     */
    public $Count;

    /**
     * @param string $TimeSegment Time range
     * @param integer $Count The number of slow query statements whose execution time falls within the time range
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
        if (array_key_exists("TimeSegment",$param) and $param["TimeSegment"] !== null) {
            $this->TimeSegment = $param["TimeSegment"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
