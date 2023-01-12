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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEnvironments request structure.
 *
 * @method integer getLimit() Obtain Pagination limit
 * @method void setLimit(integer $Limit) Set Pagination limit
 * @method integer getOffset() Obtain Page offset
 * @method void setOffset(integer $Offset) Set Page offset
 * @method integer getSourceChannel() Obtain Source
 * @method void setSourceChannel(integer $SourceChannel) Set Source
 * @method array getFilters() Obtain Filters for query 
 * @method void setFilters(array $Filters) Set Filters for query 
 * @method SortType getSortInfo() Obtain Sorting field
 * @method void setSortInfo(SortType $SortInfo) Set Sorting field
 * @method string getEnvironmentId() Obtain Environment ID
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment ID
 */
class DescribeEnvironmentsRequest extends AbstractModel
{
    /**
     * @var integer Pagination limit
     */
    public $Limit;

    /**
     * @var integer Page offset
     */
    public $Offset;

    /**
     * @var integer Source
     */
    public $SourceChannel;

    /**
     * @var array Filters for query 
     */
    public $Filters;

    /**
     * @var SortType Sorting field
     */
    public $SortInfo;

    /**
     * @var string Environment ID
     */
    public $EnvironmentId;

    /**
     * @param integer $Limit Pagination limit
     * @param integer $Offset Page offset
     * @param integer $SourceChannel Source
     * @param array $Filters Filters for query 
     * @param SortType $SortInfo Sorting field
     * @param string $EnvironmentId Environment ID
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

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new QueryFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("SortInfo",$param) and $param["SortInfo"] !== null) {
            $this->SortInfo = new SortType();
            $this->SortInfo->deserialize($param["SortInfo"]);
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }
    }
}
