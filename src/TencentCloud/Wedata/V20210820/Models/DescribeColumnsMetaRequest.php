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
 * DescribeColumnsMeta request structure.
 *
 * @method string getTableId() Obtain Table ID
 * @method void setTableId(string $TableId) Set Table ID
 * @method integer getPageNumber() Obtain Page Number
 * @method void setPageNumber(integer $PageNumber) Set Page Number
 * @method integer getPageSize() Obtain Page Size
 * @method void setPageSize(integer $PageSize) Set Page Size
 * @method array getFilterSet() Obtain Filter
 * @method void setFilterSet(array $FilterSet) Set Filter
 * @method array getOrderFieldSet() Obtain Sort Fields
 * @method void setOrderFieldSet(array $OrderFieldSet) Set Sort Fields
 * @method boolean getIsPartitionQuery() Obtain Whether to Query Partition Field, Default false
 * @method void setIsPartitionQuery(boolean $IsPartitionQuery) Set Whether to Query Partition Field, Default false
 * @method integer getComplianceId() Obtain Compliance Group ID
 * @method void setComplianceId(integer $ComplianceId) Set Compliance Group ID
 */
class DescribeColumnsMetaRequest extends AbstractModel
{
    /**
     * @var string Table ID
     */
    public $TableId;

    /**
     * @var integer Page Number
     */
    public $PageNumber;

    /**
     * @var integer Page Size
     */
    public $PageSize;

    /**
     * @var array Filter
     */
    public $FilterSet;

    /**
     * @var array Sort Fields
     */
    public $OrderFieldSet;

    /**
     * @var boolean Whether to Query Partition Field, Default false
     */
    public $IsPartitionQuery;

    /**
     * @var integer Compliance Group ID
     */
    public $ComplianceId;

    /**
     * @param string $TableId Table ID
     * @param integer $PageNumber Page Number
     * @param integer $PageSize Page Size
     * @param array $FilterSet Filter
     * @param array $OrderFieldSet Sort Fields
     * @param boolean $IsPartitionQuery Whether to Query Partition Field, Default false
     * @param integer $ComplianceId Compliance Group ID
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
        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("FilterSet",$param) and $param["FilterSet"] !== null) {
            $this->FilterSet = [];
            foreach ($param["FilterSet"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->FilterSet, $obj);
            }
        }

        if (array_key_exists("OrderFieldSet",$param) and $param["OrderFieldSet"] !== null) {
            $this->OrderFieldSet = [];
            foreach ($param["OrderFieldSet"] as $key => $value){
                $obj = new OrderField();
                $obj->deserialize($value);
                array_push($this->OrderFieldSet, $obj);
            }
        }

        if (array_key_exists("IsPartitionQuery",$param) and $param["IsPartitionQuery"] !== null) {
            $this->IsPartitionQuery = $param["IsPartitionQuery"];
        }

        if (array_key_exists("ComplianceId",$param) and $param["ComplianceId"] !== null) {
            $this->ComplianceId = $param["ComplianceId"];
        }
    }
}
