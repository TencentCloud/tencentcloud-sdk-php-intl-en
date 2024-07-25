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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRuns request structure.
 *
 * @method string getProjectId() Obtain Project ID
(If you leave it blank, the default item in the specified region will be used.)
 * @method void setProjectId(string $ProjectId) Set Project ID
(If you leave it blank, the default item in the specified region will be used.)
 * @method integer getLimit() Obtain Quantity of returns. It is 10 by default, and the maximum value is 100.
 * @method void setLimit(integer $Limit) Set Quantity of returns. It is 10 by default, and the maximum value is 100.
 * @method integer getOffset() Obtain Offset, which defaults to 0.
 * @method void setOffset(integer $Offset) Set Offset, which defaults to 0.
 * @method array getFilters() Obtain Filter, which supports filtering fields:
- RunGroupId: run group ID
- Status: run status
- RunUuid: run UUID
- UserDefinedId: user-defined ID
 * @method void setFilters(array $Filters) Set Filter, which supports filtering fields:
- RunGroupId: run group ID
- Status: run status
- RunUuid: run UUID
- UserDefinedId: user-defined ID
 */
class DescribeRunsRequest extends AbstractModel
{
    /**
     * @var string Project ID
(If you leave it blank, the default item in the specified region will be used.)
     */
    public $ProjectId;

    /**
     * @var integer Quantity of returns. It is 10 by default, and the maximum value is 100.
     */
    public $Limit;

    /**
     * @var integer Offset, which defaults to 0.
     */
    public $Offset;

    /**
     * @var array Filter, which supports filtering fields:
- RunGroupId: run group ID
- Status: run status
- RunUuid: run UUID
- UserDefinedId: user-defined ID
     */
    public $Filters;

    /**
     * @param string $ProjectId Project ID
(If you leave it blank, the default item in the specified region will be used.)
     * @param integer $Limit Quantity of returns. It is 10 by default, and the maximum value is 100.
     * @param integer $Offset Offset, which defaults to 0.
     * @param array $Filters Filter, which supports filtering fields:
- RunGroupId: run group ID
- Status: run status
- RunUuid: run UUID
- UserDefinedId: user-defined ID
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
