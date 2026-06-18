<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * User behavior analysis Event structure
 *
 * @method integer getEventType() Obtain Event type
1: Statement retrieval
2: Filter search
 * @method void setEventType(integer $EventType) Set Event type
1: Statement retrieval
2: Filter search
 * @method string getContent() Obtain Statement retrieval content
 * @method void setContent(string $Content) Set Statement retrieval content
 * @method array getFilters() Obtain retrieval condition

 * @method void setFilters(array $Filters) Set retrieval condition

 * @method StatisticalFilter getStatisticalFilter() Obtain Statistical condition
 * @method void setStatisticalFilter(StatisticalFilter $StatisticalFilter) Set Statistical condition
 */
class UebaEventContent extends AbstractModel
{
    /**
     * @var integer Event type
1: Statement retrieval
2: Filter search
     */
    public $EventType;

    /**
     * @var string Statement retrieval content
     */
    public $Content;

    /**
     * @var array retrieval condition

     */
    public $Filters;

    /**
     * @var StatisticalFilter Statistical condition
     */
    public $StatisticalFilter;

    /**
     * @param integer $EventType Event type
1: Statement retrieval
2: Filter search
     * @param string $Content Statement retrieval content
     * @param array $Filters retrieval condition

     * @param StatisticalFilter $StatisticalFilter Statistical condition
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
        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new WhereFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("StatisticalFilter",$param) and $param["StatisticalFilter"] !== null) {
            $this->StatisticalFilter = new StatisticalFilter();
            $this->StatisticalFilter->deserialize($param["StatisticalFilter"]);
        }
    }
}
