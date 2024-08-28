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
 * DescribeAttackSourceEvents request structure.
 *
 * @method string getUuid() Obtain Host UUID
 * @method void setUuid(string $Uuid) Set Host UUID
 * @method string getBeginDate() Obtain Start date
 * @method void setBeginDate(string $BeginDate) Set Start date
 * @method string getEndDate() Obtain End date
 * @method void setEndDate(string $EndDate) Set End date
 * @method string getEventInfoParam() Obtain EventInfoParam returned by DescribeAttackSource API
 * @method void setEventInfoParam(string $EventInfoParam) Set EventInfoParam returned by DescribeAttackSource API
 * @method integer getLimit() Obtain Maximum number of paginations, which is 10 by default.
 * @method void setLimit(integer $Limit) Set Maximum number of paginations, which is 10 by default.
 * @method integer getOffset() Obtain Starting step size, which is 0 by default.
 * @method void setOffset(integer $Offset) Set Starting step size, which is 0 by default.
 */
class DescribeAttackSourceEventsRequest extends AbstractModel
{
    /**
     * @var string Host UUID
     */
    public $Uuid;

    /**
     * @var string Start date
     */
    public $BeginDate;

    /**
     * @var string End date
     */
    public $EndDate;

    /**
     * @var string EventInfoParam returned by DescribeAttackSource API
     */
    public $EventInfoParam;

    /**
     * @var integer Maximum number of paginations, which is 10 by default.
     */
    public $Limit;

    /**
     * @var integer Starting step size, which is 0 by default.
     */
    public $Offset;

    /**
     * @param string $Uuid Host UUID
     * @param string $BeginDate Start date
     * @param string $EndDate End date
     * @param string $EventInfoParam EventInfoParam returned by DescribeAttackSource API
     * @param integer $Limit Maximum number of paginations, which is 10 by default.
     * @param integer $Offset Starting step size, which is 0 by default.
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

        if (array_key_exists("BeginDate",$param) and $param["BeginDate"] !== null) {
            $this->BeginDate = $param["BeginDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("EventInfoParam",$param) and $param["EventInfoParam"] !== null) {
            $this->EventInfoParam = $param["EventInfoParam"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
