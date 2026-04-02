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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeScoresV2 request structure.
 *
 * @method string getStartTime() Obtain Start time.
 * @method void setStartTime(string $StartTime) Set Start time.
 * @method string getEndTime() Obtain End time.
 * @method void setEndTime(string $EndTime) Set End time.
 * @method array getIDList() Obtain Project ID list.
 * @method void setIDList(array $IDList) Set Project ID list.
 * @method string getType() Obtain Query granularity. Valid values: hour or day.
 * @method void setType(string $Type) Set Query granularity. Valid values: hour or day.
 * @method string getEnv() Obtain Environment.
 * @method void setEnv(string $Env) Set Environment.
 */
class DescribeScoresV2Request extends AbstractModel
{
    /**
     * @var string Start time.
     */
    public $StartTime;

    /**
     * @var string End time.
     */
    public $EndTime;

    /**
     * @var array Project ID list.
     */
    public $IDList;

    /**
     * @var string Query granularity. Valid values: hour or day.
     */
    public $Type;

    /**
     * @var string Environment.
     */
    public $Env;

    /**
     * @param string $StartTime Start time.
     * @param string $EndTime End time.
     * @param array $IDList Project ID list.
     * @param string $Type Query granularity. Valid values: hour or day.
     * @param string $Env Environment.
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

        if (array_key_exists("IDList",$param) and $param["IDList"] !== null) {
            $this->IDList = $param["IDList"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = $param["Env"];
        }
    }
}
