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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApplications request structure.
 *
 * @method string getEnvironmentId() Obtain ID of the environment
 * @method void setEnvironmentId(string $EnvironmentId) Set ID of the environment
 * @method integer getLimit() Obtain Pagination limit
 * @method void setLimit(integer $Limit) Set Pagination limit
 * @method integer getOffset() Obtain Pagination offset
 * @method void setOffset(integer $Offset) Set Pagination offset
 * @method integer getSourceChannel() Obtain Source channel. Please keep the default value.
 * @method void setSourceChannel(integer $SourceChannel) Set Source channel. Please keep the default value.
 * @method string getApplicationId() Obtain Application ID
 * @method void setApplicationId(string $ApplicationId) Set Application ID
 * @method string getKeyword() Obtain Keyword for searching.
 * @method void setKeyword(string $Keyword) Set Keyword for searching.
 * @method array getFilters() Obtain Filters for query 
 * @method void setFilters(array $Filters) Set Filters for query 
 * @method SortType getSortInfo() Obtain Sorting field
 * @method void setSortInfo(SortType $SortInfo) Set Sorting field
 */
class DescribeApplicationsRequest extends AbstractModel
{
    /**
     * @var string ID of the environment
     */
    public $EnvironmentId;

    /**
     * @var integer Pagination limit
     */
    public $Limit;

    /**
     * @var integer Pagination offset
     */
    public $Offset;

    /**
     * @var integer Source channel. Please keep the default value.
     */
    public $SourceChannel;

    /**
     * @var string Application ID
     */
    public $ApplicationId;

    /**
     * @var string Keyword for searching.
     */
    public $Keyword;

    /**
     * @var array Filters for query 
     */
    public $Filters;

    /**
     * @var SortType Sorting field
     */
    public $SortInfo;

    /**
     * @param string $EnvironmentId ID of the environment
     * @param integer $Limit Pagination limit
     * @param integer $Offset Pagination offset
     * @param integer $SourceChannel Source channel. Please keep the default value.
     * @param string $ApplicationId Application ID
     * @param string $Keyword Keyword for searching.
     * @param array $Filters Filters for query 
     * @param SortType $SortInfo Sorting field
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
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

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
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
    }
}
