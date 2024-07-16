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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstances request structure.
 *
 * @method string getSearchInstanceId() Obtain The name of the cluster ID for the search
 * @method void setSearchInstanceId(string $SearchInstanceId) Set The name of the cluster ID for the search
 * @method string getSearchInstanceName() Obtain The cluster name for the search
 * @method void setSearchInstanceName(string $SearchInstanceName) Set The cluster name for the search
 * @method integer getOffset() Obtain Pagination parameters. The first page is 0, and the second page is 10.
 * @method void setOffset(integer $Offset) Set Pagination parameters. The first page is 0, and the second page is 10.
 * @method integer getLimit() Obtain Pagination parameters. The pagination step length is 10 by default.
 * @method void setLimit(integer $Limit) Set Pagination parameters. The pagination step length is 10 by default.
 * @method array getSearchTags() Obtain Search tag list
 * @method void setSearchTags(array $SearchTags) Set Search tag list
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var string The name of the cluster ID for the search
     */
    public $SearchInstanceId;

    /**
     * @var string The cluster name for the search
     */
    public $SearchInstanceName;

    /**
     * @var integer Pagination parameters. The first page is 0, and the second page is 10.
     */
    public $Offset;

    /**
     * @var integer Pagination parameters. The pagination step length is 10 by default.
     */
    public $Limit;

    /**
     * @var array Search tag list
     */
    public $SearchTags;

    /**
     * @param string $SearchInstanceId The name of the cluster ID for the search
     * @param string $SearchInstanceName The cluster name for the search
     * @param integer $Offset Pagination parameters. The first page is 0, and the second page is 10.
     * @param integer $Limit Pagination parameters. The pagination step length is 10 by default.
     * @param array $SearchTags Search tag list
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
        if (array_key_exists("SearchInstanceId",$param) and $param["SearchInstanceId"] !== null) {
            $this->SearchInstanceId = $param["SearchInstanceId"];
        }

        if (array_key_exists("SearchInstanceName",$param) and $param["SearchInstanceName"] !== null) {
            $this->SearchInstanceName = $param["SearchInstanceName"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchTags",$param) and $param["SearchTags"] !== null) {
            $this->SearchTags = [];
            foreach ($param["SearchTags"] as $key => $value){
                $obj = new SearchTags();
                $obj->deserialize($value);
                array_push($this->SearchTags, $obj);
            }
        }
    }
}
