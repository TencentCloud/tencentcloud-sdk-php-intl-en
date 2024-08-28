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
 * DescribeSecurityBroadcasts request structure.
 *
 * @method integer getOffset() Obtain Offset, which defaults to 0
 * @method void setOffset(integer $Offset) Set Offset, which defaults to 0
 * @method integer getLimit() Obtain Number of records to return, which is 10 by default, and 0 = all.
 * @method void setLimit(integer $Limit) Set Number of records to return, which is 10 by default, and 0 = all.
 * @method string getBeginDate() Obtain Filter release date: start time
 * @method void setBeginDate(string $BeginDate) Set Filter release date: start time
 * @method string getEndDate() Obtain Filter release date: end time
 * @method void setEndDate(string $EndDate) Set Filter release date: end time
 * @method string getBroadcastType() Obtain Filter security report type: 0 - emergency notification; 1 - feature update; 2 - industry honor; 3 - version release
 * @method void setBroadcastType(string $BroadcastType) Set Filter security report type: 0 - emergency notification; 1 - feature update; 2 - industry honor; 3 - version release
 */
class DescribeSecurityBroadcastsRequest extends AbstractModel
{
    /**
     * @var integer Offset, which defaults to 0
     */
    public $Offset;

    /**
     * @var integer Number of records to return, which is 10 by default, and 0 = all.
     */
    public $Limit;

    /**
     * @var string Filter release date: start time
     */
    public $BeginDate;

    /**
     * @var string Filter release date: end time
     */
    public $EndDate;

    /**
     * @var string Filter security report type: 0 - emergency notification; 1 - feature update; 2 - industry honor; 3 - version release
     */
    public $BroadcastType;

    /**
     * @param integer $Offset Offset, which defaults to 0
     * @param integer $Limit Number of records to return, which is 10 by default, and 0 = all.
     * @param string $BeginDate Filter release date: start time
     * @param string $EndDate Filter release date: end time
     * @param string $BroadcastType Filter security report type: 0 - emergency notification; 1 - feature update; 2 - industry honor; 3 - version release
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

        if (array_key_exists("BeginDate",$param) and $param["BeginDate"] !== null) {
            $this->BeginDate = $param["BeginDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("BroadcastType",$param) and $param["BroadcastType"] !== null) {
            $this->BroadcastType = $param["BroadcastType"];
        }
    }
}
