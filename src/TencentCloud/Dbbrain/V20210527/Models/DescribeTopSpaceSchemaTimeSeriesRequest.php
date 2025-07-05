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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTopSpaceSchemaTimeSeries request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method integer getLimit() Obtain Number of returned top databases. Maximum value: `100`. Default value: `20`.
 * @method void setLimit(integer $Limit) Set Number of returned top databases. Maximum value: `100`. Default value: `20`.
 * @method string getSortBy() Obtain Field used to sort top databases. Valid values: `DataLength`, `IndexLength`, `TotalLength`, `DataFree`, `FragRatio`, `TableRows`, `PhysicalFileSize` (supported only by TencentDB for MySQL instances). For TencentDB for MySQL instances, the default value is `PhysicalFileSize`. For other database instances, the default value is `TotalLength`.
 * @method void setSortBy(string $SortBy) Set Field used to sort top databases. Valid values: `DataLength`, `IndexLength`, `TotalLength`, `DataFree`, `FragRatio`, `TableRows`, `PhysicalFileSize` (supported only by TencentDB for MySQL instances). For TencentDB for MySQL instances, the default value is `PhysicalFileSize`. For other database instances, the default value is `TotalLength`.
 * @method string getStartDate() Obtain Start date, such as "2021-01-01". It can be as early as 29 days before the current date and is 6 days before the end date by default.
 * @method void setStartDate(string $StartDate) Set Start date, such as "2021-01-01". It can be as early as 29 days before the current date and is 6 days before the end date by default.
 * @method string getEndDate() Obtain End date, such as "2021-01-01". It can be as early as 29 days before the current date and is the current date by default.
 * @method void setEndDate(string $EndDate) Set End date, such as "2021-01-01". It can be as early as 29 days before the current date and is the current date by default.
 * @method string getProduct() Obtain Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TDSQL-C for MySQL). Default value: `mysql`.
 * @method void setProduct(string $Product) Set Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TDSQL-C for MySQL). Default value: `mysql`.
 */
class DescribeTopSpaceSchemaTimeSeriesRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var integer Number of returned top databases. Maximum value: `100`. Default value: `20`.
     */
    public $Limit;

    /**
     * @var string Field used to sort top databases. Valid values: `DataLength`, `IndexLength`, `TotalLength`, `DataFree`, `FragRatio`, `TableRows`, `PhysicalFileSize` (supported only by TencentDB for MySQL instances). For TencentDB for MySQL instances, the default value is `PhysicalFileSize`. For other database instances, the default value is `TotalLength`.
     */
    public $SortBy;

    /**
     * @var string Start date, such as "2021-01-01". It can be as early as 29 days before the current date and is 6 days before the end date by default.
     */
    public $StartDate;

    /**
     * @var string End date, such as "2021-01-01". It can be as early as 29 days before the current date and is the current date by default.
     */
    public $EndDate;

    /**
     * @var string Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TDSQL-C for MySQL). Default value: `mysql`.
     */
    public $Product;

    /**
     * @param string $InstanceId Instance ID.
     * @param integer $Limit Number of returned top databases. Maximum value: `100`. Default value: `20`.
     * @param string $SortBy Field used to sort top databases. Valid values: `DataLength`, `IndexLength`, `TotalLength`, `DataFree`, `FragRatio`, `TableRows`, `PhysicalFileSize` (supported only by TencentDB for MySQL instances). For TencentDB for MySQL instances, the default value is `PhysicalFileSize`. For other database instances, the default value is `TotalLength`.
     * @param string $StartDate Start date, such as "2021-01-01". It can be as early as 29 days before the current date and is 6 days before the end date by default.
     * @param string $EndDate End date, such as "2021-01-01". It can be as early as 29 days before the current date and is the current date by default.
     * @param string $Product Service type. Valid values: `mysql` (TencentDB for MySQL), `cynosdb` (TDSQL-C for MySQL). Default value: `mysql`.
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
