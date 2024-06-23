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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDataSourceInfoList request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method integer getPageNumber() Obtain Page Number
 * @method void setPageNumber(integer $PageNumber) Set Page Number
 * @method integer getPageSize() Obtain Page number
 * @method void setPageSize(integer $PageSize) Set Page number
 * @method Filter getFilters() Obtain Filter condition (not supported yet)
 * @method void setFilters(Filter $Filters) Set Filter condition (not supported yet)
 * @method OrderField getOrderFields() Obtain Sorting Configuration
 * @method void setOrderFields(OrderField $OrderFields) Set Sorting Configuration
 * @method string getType() Obtain Data Source Type, mandatory (e.g., MYSQL, DLC, etc.)
 * @method void setType(string $Type) Set Data Source Type, mandatory (e.g., MYSQL, DLC, etc.)
 * @method string getDatasourceName() Obtain Data Source Name Filter
 * @method void setDatasourceName(string $DatasourceName) Set Data Source Name Filter
 */
class DescribeDataSourceInfoListRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var integer Page Number
     */
    public $PageNumber;

    /**
     * @var integer Page number
     */
    public $PageSize;

    /**
     * @var Filter Filter condition (not supported yet)
     */
    public $Filters;

    /**
     * @var OrderField Sorting Configuration
     */
    public $OrderFields;

    /**
     * @var string Data Source Type, mandatory (e.g., MYSQL, DLC, etc.)
     */
    public $Type;

    /**
     * @var string Data Source Name Filter
     */
    public $DatasourceName;

    /**
     * @param string $ProjectId Project ID
     * @param integer $PageNumber Page Number
     * @param integer $PageSize Page number
     * @param Filter $Filters Filter condition (not supported yet)
     * @param OrderField $OrderFields Sorting Configuration
     * @param string $Type Data Source Type, mandatory (e.g., MYSQL, DLC, etc.)
     * @param string $DatasourceName Data Source Name Filter
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

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = new Filter();
            $this->Filters->deserialize($param["Filters"]);
        }

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = new OrderField();
            $this->OrderFields->deserialize($param["OrderFields"]);
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DatasourceName",$param) and $param["DatasourceName"] !== null) {
            $this->DatasourceName = $param["DatasourceName"];
        }
    }
}
