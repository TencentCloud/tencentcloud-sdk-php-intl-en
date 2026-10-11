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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUsersForUserManager request structure.
 *
 * @method string getInstanceId() Obtain Cluster ID.
 * @method void setInstanceId(string $InstanceId) Set Cluster ID.
 * @method integer getPageNo() Obtain Page number.
 * @method void setPageNo(integer $PageNo) Set Page number.
 * @method integer getPageSize() Obtain Number of entries per page.
All records are queried by default. If the PageNo and PageSize settings are inappropriate, all records are queried.
 * @method void setPageSize(integer $PageSize) Set Number of entries per page.
All records are queried by default. If the PageNo and PageSize settings are inappropriate, all records are queried.
 * @method UserManagerFilter getUserManagerFilter() Obtain User list filter.
 * @method void setUserManagerFilter(UserManagerFilter $UserManagerFilter) Set User list filter.
 * @method boolean getNeedKeytabInfo() Obtain Whether keytab file information is needed, only effective for clusters with Kerberos enabled. The default value is false.
 * @method void setNeedKeytabInfo(boolean $NeedKeytabInfo) Set Whether keytab file information is needed, only effective for clusters with Kerberos enabled. The default value is false.
 */
class DescribeUsersForUserManagerRequest extends AbstractModel
{
    /**
     * @var string Cluster ID.
     */
    public $InstanceId;

    /**
     * @var integer Page number.
     */
    public $PageNo;

    /**
     * @var integer Number of entries per page.
All records are queried by default. If the PageNo and PageSize settings are inappropriate, all records are queried.
     */
    public $PageSize;

    /**
     * @var UserManagerFilter User list filter.
     */
    public $UserManagerFilter;

    /**
     * @var boolean Whether keytab file information is needed, only effective for clusters with Kerberos enabled. The default value is false.
     */
    public $NeedKeytabInfo;

    /**
     * @param string $InstanceId Cluster ID.
     * @param integer $PageNo Page number.
     * @param integer $PageSize Number of entries per page.
All records are queried by default. If the PageNo and PageSize settings are inappropriate, all records are queried.
     * @param UserManagerFilter $UserManagerFilter User list filter.
     * @param boolean $NeedKeytabInfo Whether keytab file information is needed, only effective for clusters with Kerberos enabled. The default value is false.
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

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("UserManagerFilter",$param) and $param["UserManagerFilter"] !== null) {
            $this->UserManagerFilter = new UserManagerFilter();
            $this->UserManagerFilter->deserialize($param["UserManagerFilter"]);
        }

        if (array_key_exists("NeedKeytabInfo",$param) and $param["NeedKeytabInfo"] !== null) {
            $this->NeedKeytabInfo = $param["NeedKeytabInfo"];
        }
    }
}
