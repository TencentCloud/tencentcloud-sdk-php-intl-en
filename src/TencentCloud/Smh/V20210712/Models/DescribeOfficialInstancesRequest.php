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
namespace TencentCloud\Smh\V20210712\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOfficialInstances request structure.
 *
 * @method boolean getSuperAdminAccount() Obtain Specifies whether to query the super admin account bound to the instance. default value is false.
 * @method void setSuperAdminAccount(boolean $SuperAdminAccount) Set Specifies whether to query the super admin account bound to the instance. default value is false.
 * @method array getInstanceIds() Obtain Specifies one or more instance ids for querying, with a maximum of 100 per request.
 * @method void setInstanceIds(array $InstanceIds) Set Specifies one or more instance ids for querying, with a maximum of 100 per request.
 * @method integer getPageNumber() Obtain Page number, int, used in conjunction with PageSize. default value is 1.
 * @method void setPageNumber(integer $PageNumber) Set Page number, int, used in conjunction with PageSize. default value is 1.
 * @method integer getPageSize() Obtain Number of items per page, integer, used in conjunction with PageNumber. default value is 20. maximum value is 100.
 * @method void setPageSize(integer $PageSize) Set Number of items per page, integer, used in conjunction with PageNumber. default value is 20. maximum value is 100.
 * @method string getOrderBy() Obtain Specifies the column to sort.
 * @method void setOrderBy(string $OrderBy) Set Specifies the column to sort.
 * @method string getOrderByType() Obtain Sorting method.
 * @method void setOrderByType(string $OrderByType) Set Sorting method.
 * @method integer getAutoRenew() Obtain Specifies the filter type for renewal management.
 * @method void setAutoRenew(integer $AutoRenew) Set Specifies the filter type for renewal management.
 * @method boolean getBindPhone() Obtain Specifies whether the super admin account is bound to a mobile number.
 * @method void setBindPhone(boolean $BindPhone) Set Specifies whether the super admin account is bound to a mobile number.
 */
class DescribeOfficialInstancesRequest extends AbstractModel
{
    /**
     * @var boolean Specifies whether to query the super admin account bound to the instance. default value is false.
     */
    public $SuperAdminAccount;

    /**
     * @var array Specifies one or more instance ids for querying, with a maximum of 100 per request.
     */
    public $InstanceIds;

    /**
     * @var integer Page number, int, used in conjunction with PageSize. default value is 1.
     */
    public $PageNumber;

    /**
     * @var integer Number of items per page, integer, used in conjunction with PageNumber. default value is 20. maximum value is 100.
     */
    public $PageSize;

    /**
     * @var string Specifies the column to sort.
     */
    public $OrderBy;

    /**
     * @var string Sorting method.
     */
    public $OrderByType;

    /**
     * @var integer Specifies the filter type for renewal management.
     */
    public $AutoRenew;

    /**
     * @var boolean Specifies whether the super admin account is bound to a mobile number.
     */
    public $BindPhone;

    /**
     * @param boolean $SuperAdminAccount Specifies whether to query the super admin account bound to the instance. default value is false.
     * @param array $InstanceIds Specifies one or more instance ids for querying, with a maximum of 100 per request.
     * @param integer $PageNumber Page number, int, used in conjunction with PageSize. default value is 1.
     * @param integer $PageSize Number of items per page, integer, used in conjunction with PageNumber. default value is 20. maximum value is 100.
     * @param string $OrderBy Specifies the column to sort.
     * @param string $OrderByType Sorting method.
     * @param integer $AutoRenew Specifies the filter type for renewal management.
     * @param boolean $BindPhone Specifies whether the super admin account is bound to a mobile number.
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
        if (array_key_exists("SuperAdminAccount",$param) and $param["SuperAdminAccount"] !== null) {
            $this->SuperAdminAccount = $param["SuperAdminAccount"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("BindPhone",$param) and $param["BindPhone"] !== null) {
            $this->BindPhone = $param["BindPhone"];
        }
    }
}
