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
 * DescribeCostSummaryByRegion request structure.
 *
 * @method string getBeginTime() Obtain The value must be of the same month as `EndTime`. The query period must start and end on the same month and the query result returned will be of the entire month. For example, if both `BeginTime` and `EndTime` are `2018-09`, the data returned will be for the entire month of September 2018.
 * @method void setBeginTime(string $BeginTime) Set The value must be of the same month as `EndTime`. The query period must start and end on the same month and the query result returned will be of the entire month. For example, if both `BeginTime` and `EndTime` are `2018-09`, the data returned will be for the entire month of September 2018.
 * @method string getEndTime() Obtain The value must be of the same month as `BeginTime`. The query period must start and end on the same month and the query result returned will be of the entire month. For example, if both `BeginTime` and `EndTime` are `2018-09`, the data returned will be for the entire month of September 2018.
 * @method void setEndTime(string $EndTime) Set The value must be of the same month as `BeginTime`. The query period must start and end on the same month and the query result returned will be of the entire month. For example, if both `BeginTime` and `EndTime` are `2018-09`, the data returned will be for the entire month of September 2018.
 * @method integer getLimit() Obtain Data quantity per fetch. The maximum value is `100`.
 * @method void setLimit(integer $Limit) Set Data quantity per fetch. The maximum value is `100`.
 * @method integer getOffset() Obtain Offset, which starts from 0 by default
 * @method void setOffset(integer $Offset) Set Offset, which starts from 0 by default
 * @method string getPayerUin() Obtain UIN of the user querying the bill data
 * @method void setPayerUin(string $PayerUin) Set UIN of the user querying the bill data
 * @method integer getNeedRecordNum() Obtain Whether to return the record count. 0 for no, 1 for yes. Default is no.
 * @method void setNeedRecordNum(integer $NeedRecordNum) Set Whether to return the record count. 0 for no, 1 for yes. Default is no.
 */
class DescribeCostSummaryByRegionRequest extends AbstractModel
{
    /**
     * @var string The value must be of the same month as `EndTime`. The query period must start and end on the same month and the query result returned will be of the entire month. For example, if both `BeginTime` and `EndTime` are `2018-09`, the data returned will be for the entire month of September 2018.
     */
    public $BeginTime;

    /**
     * @var string The value must be of the same month as `BeginTime`. The query period must start and end on the same month and the query result returned will be of the entire month. For example, if both `BeginTime` and `EndTime` are `2018-09`, the data returned will be for the entire month of September 2018.
     */
    public $EndTime;

    /**
     * @var integer Data quantity per fetch. The maximum value is `100`.
     */
    public $Limit;

    /**
     * @var integer Offset, which starts from 0 by default
     */
    public $Offset;

    /**
     * @var string UIN of the user querying the bill data
     */
    public $PayerUin;

    /**
     * @var integer Whether to return the record count. 0 for no, 1 for yes. Default is no.
     */
    public $NeedRecordNum;

    /**
     * @param string $BeginTime The value must be of the same month as `EndTime`. The query period must start and end on the same month and the query result returned will be of the entire month. For example, if both `BeginTime` and `EndTime` are `2018-09`, the data returned will be for the entire month of September 2018.
     * @param string $EndTime The value must be of the same month as `BeginTime`. The query period must start and end on the same month and the query result returned will be of the entire month. For example, if both `BeginTime` and `EndTime` are `2018-09`, the data returned will be for the entire month of September 2018.
     * @param integer $Limit Data quantity per fetch. The maximum value is `100`.
     * @param integer $Offset Offset, which starts from 0 by default
     * @param string $PayerUin UIN of the user querying the bill data
     * @param integer $NeedRecordNum Whether to return the record count. 0 for no, 1 for yes. Default is no.
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("PayerUin",$param) and $param["PayerUin"] !== null) {
            $this->PayerUin = $param["PayerUin"];
        }

        if (array_key_exists("NeedRecordNum",$param) and $param["NeedRecordNum"] !== null) {
            $this->NeedRecordNum = $param["NeedRecordNum"];
        }
    }
}
