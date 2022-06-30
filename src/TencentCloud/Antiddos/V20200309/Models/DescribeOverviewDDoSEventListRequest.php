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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOverviewDDoSEventList request structure.
 *
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method string getAttackStatus() Obtain Filters by the attack status. `start`: The attack is ongoing; `end`: The attack ends.
 * @method void setAttackStatus(string $AttackStatus) Set Filters by the attack status. `start`: The attack is ongoing; `end`: The attack ends.
 * @method integer getOffset() Obtain The offset value
 * @method void setOffset(integer $Offset) Set The offset value
 * @method integer getLimit() Obtain Total number of records
 * @method void setLimit(integer $Limit) Set Total number of records
 */
class DescribeOverviewDDoSEventListRequest extends AbstractModel
{
    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var string Filters by the attack status. `start`: The attack is ongoing; `end`: The attack ends.
     */
    public $AttackStatus;

    /**
     * @var integer The offset value
     */
    public $Offset;

    /**
     * @var integer Total number of records
     */
    public $Limit;

    /**
     * @param string $StartTime Start time
     * @param string $EndTime End time
     * @param string $AttackStatus Filters by the attack status. `start`: The attack is ongoing; `end`: The attack ends.
     * @param integer $Offset The offset value
     * @param integer $Limit Total number of records
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

        if (array_key_exists("AttackStatus",$param) and $param["AttackStatus"] !== null) {
            $this->AttackStatus = $param["AttackStatus"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
