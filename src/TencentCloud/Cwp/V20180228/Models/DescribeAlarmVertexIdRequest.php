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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAlarmVertexId request structure.
 *
 * @method string getUuid() Obtain Machine UUID
 * @method void setUuid(string $Uuid) Set Machine UUID
 * @method integer getStartTime() Obtain Start timestamp
 * @method void setStartTime(integer $StartTime) Set Start timestamp
 * @method integer getEndTime() Obtain End timestamp
 * @method void setEndTime(integer $EndTime) Set End timestamp
 */
class DescribeAlarmVertexIdRequest extends AbstractModel
{
    /**
     * @var string Machine UUID
     */
    public $Uuid;

    /**
     * @var integer Start timestamp
     */
    public $StartTime;

    /**
     * @var integer End timestamp
     */
    public $EndTime;

    /**
     * @param string $Uuid Machine UUID
     * @param integer $StartTime Start timestamp
     * @param integer $EndTime End timestamp
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
        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
