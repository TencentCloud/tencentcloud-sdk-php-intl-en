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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBillSummaryByTag request structure.
 *
 * @method string getPayerUin() Obtain Payer UIN
 * @method void setPayerUin(string $PayerUin) Set Payer UIN
 * @method string getBeginTime() Obtain Currently the period to be queried must start from a time point in the current month, and the starting time and the end time must be in the same month. Example: 2018-09-01 00:00:00.
 * @method void setBeginTime(string $BeginTime) Set Currently the period to be queried must start from a time point in the current month, and the starting time and the end time must be in the same month. Example: 2018-09-01 00:00:00.
 * @method string getEndTime() Obtain Currently the period to be queried must end at a time point in the current month, and the starting time and the end time must be in the same month. Example: 2018-09-30 23:59:59.
 * @method void setEndTime(string $EndTime) Set Currently the period to be queried must end at a time point in the current month, and the starting time and the end time must be in the same month. Example: 2018-09-30 23:59:59.
 * @method string getTagKey() Obtain Cost allocation tag key
 * @method void setTagKey(string $TagKey) Set Cost allocation tag key
 */
class DescribeBillSummaryByTagRequest extends AbstractModel
{
    /**
     * @var string Payer UIN
     */
    public $PayerUin;

    /**
     * @var string Currently the period to be queried must start from a time point in the current month, and the starting time and the end time must be in the same month. Example: 2018-09-01 00:00:00.
     */
    public $BeginTime;

    /**
     * @var string Currently the period to be queried must end at a time point in the current month, and the starting time and the end time must be in the same month. Example: 2018-09-30 23:59:59.
     */
    public $EndTime;

    /**
     * @var string Cost allocation tag key
     */
    public $TagKey;

    /**
     * @param string $PayerUin Payer UIN
     * @param string $BeginTime Currently the period to be queried must start from a time point in the current month, and the starting time and the end time must be in the same month. Example: 2018-09-01 00:00:00.
     * @param string $EndTime Currently the period to be queried must end at a time point in the current month, and the starting time and the end time must be in the same month. Example: 2018-09-30 23:59:59.
     * @param string $TagKey Cost allocation tag key
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
        if (array_key_exists("PayerUin",$param) and $param["PayerUin"] !== null) {
            $this->PayerUin = $param["PayerUin"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }
    }
}
