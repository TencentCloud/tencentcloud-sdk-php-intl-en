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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApmServiceMetric request structure.
 *
 * @method string getInstanceId() Obtain Business system ID
 * @method void setInstanceId(string $InstanceId) Set Business system ID
 * @method string getServiceName() Obtain Application name
 * @method void setServiceName(string $ServiceName) Set Application name
 * @method string getServiceID() Obtain Application ID
 * @method void setServiceID(string $ServiceID) Set Application ID
 * @method integer getStartTime() Obtain Start time.
 * @method void setStartTime(integer $StartTime) Set Start time.
 * @method integer getEndTime() Obtain End time.
 * @method void setEndTime(integer $EndTime) Set End time.
 * @method OrderBy getOrderBy() Obtain Order.
 * @method void setOrderBy(OrderBy $OrderBy) Set Order.
 * @method boolean getDemo() Obtain Whether to use the demo mode.
 * @method void setDemo(boolean $Demo) Set Whether to use the demo mode.
 * @method string getServiceStatus() Obtain Application status filter criteria. valid values: health, warning, error. if multiple statuses are selected, separate them by commas, for example: "warning,error".
 * @method void setServiceStatus(string $ServiceStatus) Set Application status filter criteria. valid values: health, warning, error. if multiple statuses are selected, separate them by commas, for example: "warning,error".
 * @method array getTags() Obtain Tag list
 * @method void setTags(array $Tags) Set Tag list
 * @method integer getPage() Obtain Page number.
 * @method void setPage(integer $Page) Set Page number.
 * @method integer getPageSize() Obtain Page size.
 * @method void setPageSize(integer $PageSize) Set Page size.
 * @method array getFilters() Obtain Filter criteria.
 * @method void setFilters(array $Filters) Set Filter criteria.
 */
class DescribeApmServiceMetricRequest extends AbstractModel
{
    /**
     * @var string Business system ID
     */
    public $InstanceId;

    /**
     * @var string Application name
     */
    public $ServiceName;

    /**
     * @var string Application ID
     */
    public $ServiceID;

    /**
     * @var integer Start time.
     */
    public $StartTime;

    /**
     * @var integer End time.
     */
    public $EndTime;

    /**
     * @var OrderBy Order.
     */
    public $OrderBy;

    /**
     * @var boolean Whether to use the demo mode.
     */
    public $Demo;

    /**
     * @var string Application status filter criteria. valid values: health, warning, error. if multiple statuses are selected, separate them by commas, for example: "warning,error".
     */
    public $ServiceStatus;

    /**
     * @var array Tag list
     */
    public $Tags;

    /**
     * @var integer Page number.
     */
    public $Page;

    /**
     * @var integer Page size.
     */
    public $PageSize;

    /**
     * @var array Filter criteria.
     */
    public $Filters;

    /**
     * @param string $InstanceId Business system ID
     * @param string $ServiceName Application name
     * @param string $ServiceID Application ID
     * @param integer $StartTime Start time.
     * @param integer $EndTime End time.
     * @param OrderBy $OrderBy Order.
     * @param boolean $Demo Whether to use the demo mode.
     * @param string $ServiceStatus Application status filter criteria. valid values: health, warning, error. if multiple statuses are selected, separate them by commas, for example: "warning,error".
     * @param array $Tags Tag list
     * @param integer $Page Page number.
     * @param integer $PageSize Page size.
     * @param array $Filters Filter criteria.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ServiceID",$param) and $param["ServiceID"] !== null) {
            $this->ServiceID = $param["ServiceID"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = new OrderBy();
            $this->OrderBy->deserialize($param["OrderBy"]);
        }

        if (array_key_exists("Demo",$param) and $param["Demo"] !== null) {
            $this->Demo = $param["Demo"];
        }

        if (array_key_exists("ServiceStatus",$param) and $param["ServiceStatus"] !== null) {
            $this->ServiceStatus = $param["ServiceStatus"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ApmTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
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
