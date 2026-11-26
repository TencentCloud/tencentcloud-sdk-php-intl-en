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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDoS unblocking information
 *
 * @method integer getStartTime() Obtain Start time in unix timestamp.
 * @method void setStartTime(integer $StartTime) Set Start time in unix timestamp.
 * @method integer getEndTime() Obtain Termination time in unix timestamp. 0 means the ban is still in effect.
 * @method void setEndTime(integer $EndTime) Set Termination time in unix timestamp. 0 means the ban is still in effect.
 * @method string getBlockArea() Obtain Block the affected area.
 * @method void setBlockArea(string $BlockArea) Set Block the affected area.
 */
class DDoSBlockData extends AbstractModel
{
    /**
     * @var integer Start time in unix timestamp.
     */
    public $StartTime;

    /**
     * @var integer Termination time in unix timestamp. 0 means the ban is still in effect.
     */
    public $EndTime;

    /**
     * @var string Block the affected area.
     */
    public $BlockArea;

    /**
     * @param integer $StartTime Start time in unix timestamp.
     * @param integer $EndTime Termination time in unix timestamp. 0 means the ban is still in effect.
     * @param string $BlockArea Block the affected area.
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

        if (array_key_exists("BlockArea",$param) and $param["BlockArea"] !== null) {
            $this->BlockArea = $param["BlockArea"];
        }
    }
}
