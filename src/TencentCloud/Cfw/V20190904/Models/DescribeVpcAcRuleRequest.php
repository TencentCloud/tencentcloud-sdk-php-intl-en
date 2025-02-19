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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVpcAcRule request structure.
 *
 * @method integer getLimit() Obtain Limit
 * @method void setLimit(integer $Limit) Set Limit
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method string getIndex() Obtain Index to be queried, used in specific scenarios, can be left blank
 * @method void setIndex(string $Index) Set Index to be queried, used in specific scenarios, can be left blank
 * @method array getFilters() Obtain Filter combinations
 * @method void setFilters(array $Filters) Set Filter combinations
 * @method string getStartTime() Obtain Search start time
 * @method void setStartTime(string $StartTime) Set Search start time
 * @method string getEndTime() Obtain Search end time
 * @method void setEndTime(string $EndTime) Set Search end time
 * @method string getOrder() Obtain Order Type:desc,asc
 * @method void setOrder(string $Order) Set Order Type:desc,asc
 * @method string getBy() Obtain Order By FileName
 * @method void setBy(string $By) Set Order By FileName
 */
class DescribeVpcAcRuleRequest extends AbstractModel
{
    /**
     * @var integer Limit
     */
    public $Limit;

    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @var string Index to be queried, used in specific scenarios, can be left blank
     */
    public $Index;

    /**
     * @var array Filter combinations
     */
    public $Filters;

    /**
     * @var string Search start time
     */
    public $StartTime;

    /**
     * @var string Search end time
     */
    public $EndTime;

    /**
     * @var string Order Type:desc,asc
     */
    public $Order;

    /**
     * @var string Order By FileName
     */
    public $By;

    /**
     * @param integer $Limit Limit
     * @param integer $Offset Offset
     * @param string $Index Index to be queried, used in specific scenarios, can be left blank
     * @param array $Filters Filter combinations
     * @param string $StartTime Search start time
     * @param string $EndTime Search end time
     * @param string $Order Order Type:desc,asc
     * @param string $By Order By FileName
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new CommonFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
