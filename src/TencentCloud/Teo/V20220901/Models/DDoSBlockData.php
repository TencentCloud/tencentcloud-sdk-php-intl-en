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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The blocking time of a DDoS attack
 *
 * @method integer getStartTime() Obtain The start time recorded in UNIX timestamp.
 * @method void setStartTime(integer $StartTime) Set The start time recorded in UNIX timestamp.
 * @method integer getEndTime() Obtain The start time recorded in UNIX timestamp.
 * @method void setEndTime(integer $EndTime) Set The start time recorded in UNIX timestamp.
 */
class DDoSBlockData extends AbstractModel
{
    /**
     * @var integer The start time recorded in UNIX timestamp.
     */
    public $StartTime;

    /**
     * @var integer The start time recorded in UNIX timestamp.
     */
    public $EndTime;

    /**
     * @param integer $StartTime The start time recorded in UNIX timestamp.
     * @param integer $EndTime The start time recorded in UNIX timestamp.
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
