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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePostpaidUsage request structure.
 *
 * @method string getBeginTime() Obtain Start time of the query period.
 * @method void setBeginTime(string $BeginTime) Set Start time of the query period.
 * @method string getEndTime() Obtain End time of the query period.
 * @method void setEndTime(string $EndTime) Set End time of the query period.
 */
class DescribePostpaidUsageRequest extends AbstractModel
{
    /**
     * @var string Start time of the query period.
     */
    public $BeginTime;

    /**
     * @var string End time of the query period.
     */
    public $EndTime;

    /**
     * @param string $BeginTime Start time of the query period.
     * @param string $EndTime End time of the query period.
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
        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
