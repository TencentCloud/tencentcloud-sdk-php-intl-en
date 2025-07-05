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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Query Instance Criteria (new)
 *
 * @method SearchConditionInstanceNew getInstance() Obtain Query Framework, required
 * @method void setInstance(SearchConditionInstanceNew $Instance) Set Query Framework, required
 * @method string getKeyword() Obtain Query keyword (Task ID exact match, Task Name fuzzy match), optional
 * @method void setKeyword(string $Keyword) Set Query keyword (Task ID exact match, Task Name fuzzy match), optional
 * @method string getSort() Obtain Sorting Order (asc, desc)
 * @method void setSort(string $Sort) Set Sorting Order (asc, desc)
 * @method string getSortCol() Obtain Sort Column (costTime Runtime duration, startTime Start Time, state Instance status, curRunDate Data Timestamp)
 * @method void setSortCol(string $SortCol) Set Sort Column (costTime Runtime duration, startTime Start Time, state Instance status, curRunDate Data Timestamp)
 */
class SearchConditionNew extends AbstractModel
{
    /**
     * @var SearchConditionInstanceNew Query Framework, required
     */
    public $Instance;

    /**
     * @var string Query keyword (Task ID exact match, Task Name fuzzy match), optional
     */
    public $Keyword;

    /**
     * @var string Sorting Order (asc, desc)
     */
    public $Sort;

    /**
     * @var string Sort Column (costTime Runtime duration, startTime Start Time, state Instance status, curRunDate Data Timestamp)
     */
    public $SortCol;

    /**
     * @param SearchConditionInstanceNew $Instance Query Framework, required
     * @param string $Keyword Query keyword (Task ID exact match, Task Name fuzzy match), optional
     * @param string $Sort Sorting Order (asc, desc)
     * @param string $SortCol Sort Column (costTime Runtime duration, startTime Start Time, state Instance status, curRunDate Data Timestamp)
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
        if (array_key_exists("Instance",$param) and $param["Instance"] !== null) {
            $this->Instance = new SearchConditionInstanceNew();
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
    }
}
