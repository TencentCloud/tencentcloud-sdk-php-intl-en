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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Rollback time range
 *
 * @method string getTimeRangeStart() Obtain Start time
 * @method void setTimeRangeStart(string $TimeRangeStart) Set Start time
 * @method string getTimeRangeEnd() Obtain End time
 * @method void setTimeRangeEnd(string $TimeRangeEnd) Set End time
 */
class RollbackTimeRange extends AbstractModel
{
    /**
     * @var string Start time
     */
    public $TimeRangeStart;

    /**
     * @var string End time
     */
    public $TimeRangeEnd;

    /**
     * @param string $TimeRangeStart Start time
     * @param string $TimeRangeEnd End time
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
        if (array_key_exists("TimeRangeStart",$param) and $param["TimeRangeStart"] !== null) {
            $this->TimeRangeStart = $param["TimeRangeStart"];
        }

        if (array_key_exists("TimeRangeEnd",$param) and $param["TimeRangeEnd"] !== null) {
            $this->TimeRangeEnd = $param["TimeRangeEnd"];
        }
    }
}
