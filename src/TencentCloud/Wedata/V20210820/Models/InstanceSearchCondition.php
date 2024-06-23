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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance Retrieval Criteria
 *
 * @method array getCycleList() Obtain Task Scheduling Cycle Type
 * @method void setCycleList(array $CycleList) Set Task Scheduling Cycle Type
 * @method string getDateFrom() Obtain Start time
 * @method void setDateFrom(string $DateFrom) Set Start time
 * @method string getDateTo() Obtain Expire Time
 * @method void setDateTo(string $DateTo) Set Expire Time
 * @method InstanceCondition getInstance() Obtain Instance Filtering Conditions
 * @method void setInstance(InstanceCondition $Instance) Set Instance Filtering Conditions
 * @method string getKeyword() Obtain Fuzzy Query Keywords
 * @method void setKeyword(string $Keyword) Set Fuzzy Query Keywords
 * @method string getSort() Obtain Sorting Method
 * @method void setSort(string $Sort) Set Sorting Method
 * @method string getSortCol() Obtain Sort Fields
 * @method void setSortCol(string $SortCol) Set Sort Fields
 * @method array getStateList() Obtain Instance Status Type
 * @method void setStateList(array $StateList) Set Instance Status Type
 */
class InstanceSearchCondition extends AbstractModel
{
    /**
     * @var array Task Scheduling Cycle Type
     */
    public $CycleList;

    /**
     * @var string Start time
     */
    public $DateFrom;

    /**
     * @var string Expire Time
     */
    public $DateTo;

    /**
     * @var InstanceCondition Instance Filtering Conditions
     */
    public $Instance;

    /**
     * @var string Fuzzy Query Keywords
     */
    public $Keyword;

    /**
     * @var string Sorting Method
     */
    public $Sort;

    /**
     * @var string Sort Fields
     */
    public $SortCol;

    /**
     * @var array Instance Status Type
     */
    public $StateList;

    /**
     * @param array $CycleList Task Scheduling Cycle Type
     * @param string $DateFrom Start time
     * @param string $DateTo Expire Time
     * @param InstanceCondition $Instance Instance Filtering Conditions
     * @param string $Keyword Fuzzy Query Keywords
     * @param string $Sort Sorting Method
     * @param string $SortCol Sort Fields
     * @param array $StateList Instance Status Type
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
        if (array_key_exists("CycleList",$param) and $param["CycleList"] !== null) {
            $this->CycleList = $param["CycleList"];
        }

        if (array_key_exists("DateFrom",$param) and $param["DateFrom"] !== null) {
            $this->DateFrom = $param["DateFrom"];
        }

        if (array_key_exists("DateTo",$param) and $param["DateTo"] !== null) {
            $this->DateTo = $param["DateTo"];
        }

        if (array_key_exists("Instance",$param) and $param["Instance"] !== null) {
            $this->Instance = new InstanceCondition();
            $this->Instance->deserialize($param["Instance"]);
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("SortCol",$param) and $param["SortCol"] !== null) {
            $this->SortCol = $param["SortCol"];
        }

        if (array_key_exists("StateList",$param) and $param["StateList"] !== null) {
            $this->StateList = $param["StateList"];
        }
    }
}
