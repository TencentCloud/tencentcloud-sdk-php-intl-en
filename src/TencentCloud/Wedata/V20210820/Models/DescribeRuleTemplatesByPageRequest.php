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
 * DescribeRuleTemplatesByPage request structure.
 *
 * @method integer getPageNumber() Obtain Current Page
 * @method void setPageNumber(integer $PageNumber) Set Current Page
 * @method integer getPageSize() Obtain Number of records per page
 * @method void setPageSize(integer $PageSize) Set Number of records per page
 * @method string getProjectId() Obtain Workspace ID
 * @method void setProjectId(string $ProjectId) Set Workspace ID
 * @method array getOrderFields() Obtain Universal Sort Field
 * @method void setOrderFields(array $OrderFields) Set Universal Sort Field
 * @method array getFilters() Obtain Universal Filter Criteria
 * @method void setFilters(array $Filters) Set Universal Filter Criteria
 */
class DescribeRuleTemplatesByPageRequest extends AbstractModel
{
    /**
     * @var integer Current Page
     */
    public $PageNumber;

    /**
     * @var integer Number of records per page
     */
    public $PageSize;

    /**
     * @var string Workspace ID
     */
    public $ProjectId;

    /**
     * @var array Universal Sort Field
     */
    public $OrderFields;

    /**
     * @var array Universal Filter Criteria
     */
    public $Filters;

    /**
     * @param integer $PageNumber Current Page
     * @param integer $PageSize Number of records per page
     * @param string $ProjectId Workspace ID
     * @param array $OrderFields Universal Sort Field
     * @param array $Filters Universal Filter Criteria
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = [];
            foreach ($param["OrderFields"] as $key => $value){
                $obj = new OrderField();
                $obj->deserialize($value);
                array_push($this->OrderFields, $obj);
            }
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
