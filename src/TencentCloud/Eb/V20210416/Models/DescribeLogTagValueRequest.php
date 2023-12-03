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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLogTagValue request structure.
 *
 * @method integer getStartTime() Obtain The query start time.
 * @method void setStartTime(integer $StartTime) Set The query start time.
 * @method integer getEndTime() Obtain The query end time.
 * @method void setEndTime(integer $EndTime) Set The query end time.
 * @method string getEventBusId() Obtain Event bus ID
 * @method void setEventBusId(string $EventBusId) Set Event bus ID
 * @method string getGroupField() Obtain Aggregation field
 * @method void setGroupField(string $GroupField) Set Aggregation field
 * @method integer getPage() Obtain Number of pages.
 * @method void setPage(integer $Page) Set Number of pages.
 * @method integer getLimit() Obtain Logs returned per page
 * @method void setLimit(integer $Limit) Set Logs returned per page
 * @method array getFilter() Obtain Filter conditions
 * @method void setFilter(array $Filter) Set Filter conditions
 */
class DescribeLogTagValueRequest extends AbstractModel
{
    /**
     * @var integer The query start time.
     */
    public $StartTime;

    /**
     * @var integer The query end time.
     */
    public $EndTime;

    /**
     * @var string Event bus ID
     */
    public $EventBusId;

    /**
     * @var string Aggregation field
     */
    public $GroupField;

    /**
     * @var integer Number of pages.
     */
    public $Page;

    /**
     * @var integer Logs returned per page
     */
    public $Limit;

    /**
     * @var array Filter conditions
     */
    public $Filter;

    /**
     * @param integer $StartTime The query start time.
     * @param integer $EndTime The query end time.
     * @param string $EventBusId Event bus ID
     * @param string $GroupField Aggregation field
     * @param integer $Page Number of pages.
     * @param integer $Limit Logs returned per page
     * @param array $Filter Filter conditions
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

        if (array_key_exists("EventBusId",$param) and $param["EventBusId"] !== null) {
            $this->EventBusId = $param["EventBusId"];
        }

        if (array_key_exists("GroupField",$param) and $param["GroupField"] !== null) {
            $this->GroupField = $param["GroupField"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = [];
            foreach ($param["Filter"] as $key => $value){
                $obj = new LogFilter();
                $obj->deserialize($value);
                array_push($this->Filter, $obj);
            }
        }
    }
}
