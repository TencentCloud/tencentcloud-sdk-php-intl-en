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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSyncJobs request structure.
 *
 * @method string getJobId() Obtain Sync task ID, such as `sync-werwfs23`.
 * @method void setJobId(string $JobId) Set Sync task ID, such as `sync-werwfs23`.
 * @method string getJobName() Obtain Sync task name
 * @method void setJobName(string $JobName) Set Sync task name
 * @method string getOrder() Obtain Sort by field, such as `CreateTime`.
 * @method void setOrder(string $Order) Set Sort by field, such as `CreateTime`.
 * @method string getOrderSeq() Obtain Sorting order. Valid values: `ASC`, `DESC`. Default value: `DESC` by `CreateTime`.
 * @method void setOrderSeq(string $OrderSeq) Set Sorting order. Valid values: `ASC`, `DESC`. Default value: `DESC` by `CreateTime`.
 * @method integer getOffset() Obtain Offset. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Offset. Default value: `0`.
 * @method integer getLimit() Obtain Number of sync task instances to be returned. Value range: [1,100]. Default value: `20`.
 * @method void setLimit(integer $Limit) Set Number of sync task instances to be returned. Value range: [1,100]. Default value: `20`.
 * @method array getStatus() Obtain The set of status values, such as `Initialized,CheckPass,Running,ResumableErr,Stopped`.
 * @method void setStatus(array $Status) Set The set of status values, such as `Initialized,CheckPass,Running,ResumableErr,Stopped`.
 * @method string getRunMode() Obtain Running mode. Valid values: `Immediate`, `Timed`.
 * @method void setRunMode(string $RunMode) Set Running mode. Valid values: `Immediate`, `Timed`.
 * @method string getJobType() Obtain Task type, such as `mysql2mysql` (sync from MySQL to MySQL).
 * @method void setJobType(string $JobType) Set Task type, such as `mysql2mysql` (sync from MySQL to MySQL).
 * @method string getPayMode() Obtain Billing mode. Valid values: `PrePay` (prepaid); `PostPay` (postpaid).
 * @method void setPayMode(string $PayMode) Set Billing mode. Valid values: `PrePay` (prepaid); `PostPay` (postpaid).
 * @method array getTagFilters() Obtain tag
 * @method void setTagFilters(array $TagFilters) Set tag
 */
class DescribeSyncJobsRequest extends AbstractModel
{
    /**
     * @var string Sync task ID, such as `sync-werwfs23`.
     */
    public $JobId;

    /**
     * @var string Sync task name
     */
    public $JobName;

    /**
     * @var string Sort by field, such as `CreateTime`.
     */
    public $Order;

    /**
     * @var string Sorting order. Valid values: `ASC`, `DESC`. Default value: `DESC` by `CreateTime`.
     */
    public $OrderSeq;

    /**
     * @var integer Offset. Default value: `0`.
     */
    public $Offset;

    /**
     * @var integer Number of sync task instances to be returned. Value range: [1,100]. Default value: `20`.
     */
    public $Limit;

    /**
     * @var array The set of status values, such as `Initialized,CheckPass,Running,ResumableErr,Stopped`.
     */
    public $Status;

    /**
     * @var string Running mode. Valid values: `Immediate`, `Timed`.
     */
    public $RunMode;

    /**
     * @var string Task type, such as `mysql2mysql` (sync from MySQL to MySQL).
     */
    public $JobType;

    /**
     * @var string Billing mode. Valid values: `PrePay` (prepaid); `PostPay` (postpaid).
     */
    public $PayMode;

    /**
     * @var array tag
     */
    public $TagFilters;

    /**
     * @param string $JobId Sync task ID, such as `sync-werwfs23`.
     * @param string $JobName Sync task name
     * @param string $Order Sort by field, such as `CreateTime`.
     * @param string $OrderSeq Sorting order. Valid values: `ASC`, `DESC`. Default value: `DESC` by `CreateTime`.
     * @param integer $Offset Offset. Default value: `0`.
     * @param integer $Limit Number of sync task instances to be returned. Value range: [1,100]. Default value: `20`.
     * @param array $Status The set of status values, such as `Initialized,CheckPass,Running,ResumableErr,Stopped`.
     * @param string $RunMode Running mode. Valid values: `Immediate`, `Timed`.
     * @param string $JobType Task type, such as `mysql2mysql` (sync from MySQL to MySQL).
     * @param string $PayMode Billing mode. Valid values: `PrePay` (prepaid); `PostPay` (postpaid).
     * @param array $TagFilters tag
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RunMode",$param) and $param["RunMode"] !== null) {
            $this->RunMode = $param["RunMode"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
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
