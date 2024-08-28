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
 * DescribeSecurityTrends request structure.
 *
 * @method string getBeginDate() Obtain Start time. Example: 2021-07-10
 * @method void setBeginDate(string $BeginDate) Set Start time. Example: 2021-07-10
 * @method string getEndDate() Obtain End time. Example: 2021-07-10
 * @method void setEndDate(string $EndDate) Set End time. Example: 2021-07-10
 */
class DescribeSecurityTrendsRequest extends AbstractModel
{
    /**
     * @var string Start time. Example: 2021-07-10
     */
    public $BeginDate;

    /**
     * @var string End time. Example: 2021-07-10
     */
    public $EndDate;

    /**
     * @param string $BeginDate Start time. Example: 2021-07-10
     * @param string $EndDate End time. Example: 2021-07-10
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
        if (array_key_exists("BeginDate",$param) and $param["BeginDate"] !== null) {
            $this->BeginDate = $param["BeginDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }
    }
}
