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
namespace TencentCloud\Tag\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getTotalCount() 获取Total number of results.
 * @method void setTotalCount(integer $TotalCount) 设置Total number of results.
 * @method integer getOffset() 获取Data offset.
 * @method void setOffset(integer $Offset) 设置Data offset.
 * @method integer getLimit() 获取Number of entries per page.
Note: This field may return null, indicating that no valid value is found.
 * @method void setLimit(integer $Limit) 设置Number of entries per page.
Note: This field may return null, indicating that no valid value is found.
 * @method array getRows() 获取Resource tag.
 * @method void setRows(array $Rows) 设置Resource tag.
 * @method string getRequestId() 获取The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) 设置The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *DescribeResourcesByTags response structure.
 */
class DescribeResourcesByTagsResponse extends AbstractModel
{
    /**
     * @var integer Total number of results.
     */
    public $TotalCount;

    /**
     * @var integer Data offset.
     */
    public $Offset;

    /**
     * @var integer Number of entries per page.
Note: This field may return null, indicating that no valid value is found.
     */
    public $Limit;

    /**
     * @var array Resource tag.
     */
    public $Rows;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param integer $TotalCount Total number of results.
     * @param integer $Offset Data offset.
     * @param integer $Limit Number of entries per page.
Note: This field may return null, indicating that no valid value is found.
     * @param array $Rows Resource tag.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Rows",$param) and $param["Rows"] !== null) {
            $this->Rows = [];
            foreach ($param["Rows"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->Rows, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
