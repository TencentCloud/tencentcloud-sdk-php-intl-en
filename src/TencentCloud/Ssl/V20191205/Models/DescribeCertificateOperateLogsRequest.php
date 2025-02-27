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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCertificateOperateLogs request structure.
 *
 * @method integer getOffset() Obtain Offset. The default value is 0.
 * @method void setOffset(integer $Offset) Set Offset. The default value is 0.
 * @method integer getLimit() Obtain Number of requested logs, 20 by default, with a maximum value of 1000. if it exceeds 1000, it will be treated as 1000.
 * @method void setLimit(integer $Limit) Set Number of requested logs, 20 by default, with a maximum value of 1000. if it exceeds 1000, it will be treated as 1000.
 * @method string getStartTime() Obtain Start time. The default value is 15 days ago.
 * @method void setStartTime(string $StartTime) Set Start time. The default value is 15 days ago.
 * @method string getEndTime() Obtain End time. The default value is the current time.
 * @method void setEndTime(string $EndTime) Set End time. The default value is the current time.
 */
class DescribeCertificateOperateLogsRequest extends AbstractModel
{
    /**
     * @var integer Offset. The default value is 0.
     */
    public $Offset;

    /**
     * @var integer Number of requested logs, 20 by default, with a maximum value of 1000. if it exceeds 1000, it will be treated as 1000.
     */
    public $Limit;

    /**
     * @var string Start time. The default value is 15 days ago.
     */
    public $StartTime;

    /**
     * @var string End time. The default value is the current time.
     */
    public $EndTime;

    /**
     * @param integer $Offset Offset. The default value is 0.
     * @param integer $Limit Number of requested logs, 20 by default, with a maximum value of 1000. if it exceeds 1000, it will be treated as 1000.
     * @param string $StartTime Start time. The default value is 15 days ago.
     * @param string $EndTime End time. The default value is the current time.
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
