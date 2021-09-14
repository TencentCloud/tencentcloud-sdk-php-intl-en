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
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMigrateJobs request structure.
 *
 * @method string getJobId() Obtain Data migration task ID
 * @method void setJobId(string $JobId) Set Data migration task ID
 * @method string getJobName() Obtain Data migration task name
 * @method void setJobName(string $JobName) Set Data migration task name
 * @method string getOrder() Obtain Sort by field. Value range: JobId, Status, JobName, MigrateType, RunMode, CreateTime
 * @method void setOrder(string $Order) Set Sort by field. Value range: JobId, Status, JobName, MigrateType, RunMode, CreateTime
 * @method string getOrderSeq() Obtain Sorting order. Value range: ASC (ascending), DESC (descending)
 * @method void setOrderSeq(string $OrderSeq) Set Sorting order. Value range: ASC (ascending), DESC (descending)
 * @method integer getOffset() Obtain Offset. Default value: 0
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0
 * @method integer getLimit() Obtain Number of the returned instances. Value range: [1, 100]. Default value: 20
 * @method void setLimit(integer $Limit) Set Number of the returned instances. Value range: [1, 100]. Default value: 20
 * @method array getTagFilters() Obtain Tag filter.
 * @method void setTagFilters(array $TagFilters) Set Tag filter.
 */
class DescribeMigrateJobsRequest extends AbstractModel
{
    /**
     * @var string Data migration task ID
     */
    public $JobId;

    /**
     * @var string Data migration task name
     */
    public $JobName;

    /**
     * @var string Sort by field. Value range: JobId, Status, JobName, MigrateType, RunMode, CreateTime
     */
    public $Order;

    /**
     * @var string Sorting order. Value range: ASC (ascending), DESC (descending)
     */
    public $OrderSeq;

    /**
     * @var integer Offset. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Number of the returned instances. Value range: [1, 100]. Default value: 20
     */
    public $Limit;

    /**
     * @var array Tag filter.
     */
    public $TagFilters;

    /**
     * @param string $JobId Data migration task ID
     * @param string $JobName Data migration task name
     * @param string $Order Sort by field. Value range: JobId, Status, JobName, MigrateType, RunMode, CreateTime
     * @param string $OrderSeq Sorting order. Value range: ASC (ascending), DESC (descending)
     * @param integer $Offset Offset. Default value: 0
     * @param integer $Limit Number of the returned instances. Value range: [1, 100]. Default value: 20
     * @param array $TagFilters Tag filter.
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderSeq",$param) and $param["OrderSeq"] !== null) {
            $this->OrderSeq = $param["OrderSeq"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }
    }
}
