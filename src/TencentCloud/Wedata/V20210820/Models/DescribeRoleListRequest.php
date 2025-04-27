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
 * DescribeRoleList request structure.
 *
 * @method boolean getShowAllRoles() Obtain Return all Roles
 * @method void setShowAllRoles(boolean $ShowAllRoles) Set Return all Roles
 * @method array getIncludeRoleTypes() Obtain Role type (system, tenant, project) that needs to be returned
 * @method void setIncludeRoleTypes(array $IncludeRoleTypes) Set Role type (system, tenant, project) that needs to be returned
 * @method boolean getDescribeMemberCount() Obtain Specifies the statistics of role binding personnel. Only supported in the private edition.
 * @method void setDescribeMemberCount(boolean $DescribeMemberCount) Set Specifies the statistics of role binding personnel. Only supported in the private edition.
 * @method boolean getDescribeOperator() Obtain Specifies the operator information. describes the privatized multi-tenancy version.
 * @method void setDescribeOperator(boolean $DescribeOperator) Set Specifies the operator information. describes the privatized multi-tenancy version.
 * @method boolean getDescribeSystemRoleOnly() Obtain System Role
 * @method void setDescribeSystemRoleOnly(boolean $DescribeSystemRoleOnly) Set System Role
 * @method boolean getDescribeCustomRoleOnly() Obtain Custom Role
 * @method void setDescribeCustomRoleOnly(boolean $DescribeCustomRoleOnly) Set Custom Role
 * @method boolean getDescribePrivileges() Obtain Permission to view
 * @method void setDescribePrivileges(boolean $DescribePrivileges) Set Permission to view
 * @method array getRoleIds() Obtain Filter criteria for Role ID
 * @method void setRoleIds(array $RoleIds) Set Filter criteria for Role ID
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method integer getPageNumber() Obtain Page number
 * @method void setPageNumber(integer $PageNumber) Set Page number
 * @method integer getPageSize() Obtain Paging information
 * @method void setPageSize(integer $PageSize) Set Paging information
 * @method array getFilters() Obtain Query Field
 * @method void setFilters(array $Filters) Set Query Field
 * @method array getOrderFields() Obtain Sorting Field
 * @method void setOrderFields(array $OrderFields) Set Sorting Field
 */
class DescribeRoleListRequest extends AbstractModel
{
    /**
     * @var boolean Return all Roles
     */
    public $ShowAllRoles;

    /**
     * @var array Role type (system, tenant, project) that needs to be returned
     */
    public $IncludeRoleTypes;

    /**
     * @var boolean Specifies the statistics of role binding personnel. Only supported in the private edition.
     */
    public $DescribeMemberCount;

    /**
     * @var boolean Specifies the operator information. describes the privatized multi-tenancy version.
     */
    public $DescribeOperator;

    /**
     * @var boolean System Role
     */
    public $DescribeSystemRoleOnly;

    /**
     * @var boolean Custom Role
     */
    public $DescribeCustomRoleOnly;

    /**
     * @var boolean Permission to view
     */
    public $DescribePrivileges;

    /**
     * @var array Filter criteria for Role ID
     */
    public $RoleIds;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var integer Page number
     */
    public $PageNumber;

    /**
     * @var integer Paging information
     */
    public $PageSize;

    /**
     * @var array Query Field
     */
    public $Filters;

    /**
     * @var array Sorting Field
     */
    public $OrderFields;

    /**
     * @param boolean $ShowAllRoles Return all Roles
     * @param array $IncludeRoleTypes Role type (system, tenant, project) that needs to be returned
     * @param boolean $DescribeMemberCount Specifies the statistics of role binding personnel. Only supported in the private edition.
     * @param boolean $DescribeOperator Specifies the operator information. describes the privatized multi-tenancy version.
     * @param boolean $DescribeSystemRoleOnly System Role
     * @param boolean $DescribeCustomRoleOnly Custom Role
     * @param boolean $DescribePrivileges Permission to view
     * @param array $RoleIds Filter criteria for Role ID
     * @param string $ProjectId Project ID
     * @param integer $PageNumber Page number
     * @param integer $PageSize Paging information
     * @param array $Filters Query Field
     * @param array $OrderFields Sorting Field
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
        if (array_key_exists("ShowAllRoles",$param) and $param["ShowAllRoles"] !== null) {
            $this->ShowAllRoles = $param["ShowAllRoles"];
        }

        if (array_key_exists("IncludeRoleTypes",$param) and $param["IncludeRoleTypes"] !== null) {
            $this->IncludeRoleTypes = $param["IncludeRoleTypes"];
        }

        if (array_key_exists("DescribeMemberCount",$param) and $param["DescribeMemberCount"] !== null) {
            $this->DescribeMemberCount = $param["DescribeMemberCount"];
        }

        if (array_key_exists("DescribeOperator",$param) and $param["DescribeOperator"] !== null) {
            $this->DescribeOperator = $param["DescribeOperator"];
        }

        if (array_key_exists("DescribeSystemRoleOnly",$param) and $param["DescribeSystemRoleOnly"] !== null) {
            $this->DescribeSystemRoleOnly = $param["DescribeSystemRoleOnly"];
        }

        if (array_key_exists("DescribeCustomRoleOnly",$param) and $param["DescribeCustomRoleOnly"] !== null) {
            $this->DescribeCustomRoleOnly = $param["DescribeCustomRoleOnly"];
        }

        if (array_key_exists("DescribePrivileges",$param) and $param["DescribePrivileges"] !== null) {
            $this->DescribePrivileges = $param["DescribePrivileges"];
        }

        if (array_key_exists("RoleIds",$param) and $param["RoleIds"] !== null) {
            $this->RoleIds = $param["RoleIds"];
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
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = [];
            foreach ($param["OrderFields"] as $key => $value){
                $obj = new OrderFields();
                $obj->deserialize($value);
                array_push($this->OrderFields, $obj);
            }
        }
    }
}
