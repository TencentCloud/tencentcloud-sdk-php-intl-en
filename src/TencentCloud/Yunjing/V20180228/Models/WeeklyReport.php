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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Weekly report list.
 *
 * @method string getBeginDate() Obtain Weekly report start time.
 * @method void setBeginDate(string $BeginDate) Set Weekly report start time.
 * @method string getEndDate() Obtain Weekly report end time.
 * @method void setEndDate(string $EndDate) Set Weekly report end time.
 */
class WeeklyReport extends AbstractModel
{
    /**
     * @var string Weekly report start time.
     */
    public $BeginDate;

    /**
     * @var string Weekly report end time.
     */
    public $EndDate;

    /**
     * @param string $BeginDate Weekly report start time.
     * @param string $EndDate Weekly report end time.
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
