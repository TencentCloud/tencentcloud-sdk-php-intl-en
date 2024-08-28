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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssetUserList request structure.
 *
 * @method string getQuuid() Obtain Query the information on the host with the specified QUUID
 * @method void setQuuid(string $Quuid) Set Query the information on the host with the specified QUUID
 * @method array getFilters() Obtain Filter criteria
<li>IP - String - required: no - host IP address</li>
<li>MachineName - String - required: no - host name</li>
<li>InstanceID - string - required: no - instance ID<li>
<li>Name - String - required: no - account name (fuzzy match)</li>
<li>NameStrict - String - required: no - account name (strict match)</li>
<li>Uid - uint64 - required: no - UID</li>
<li>Guid - uint64 - required: no - GUID</li>
<li>LoginTimeStart - String - required: no - start time, such as 2021-01-11</li>
<li>LoginTimeEnd - String - required: no - end time, such as 2021-01-11</li>
<li>LoginType - uint64 - required: no - 0 - not allowed to log in; 1 - only key-based log-in allowed; 2 - only password-based log-in allowed; 3 - both key-based and password-based log-in allowed (Linux only)</li>
<li>OsType - String - required: no - Windows or Linux</li>
<li>Status - uint64 - required: no - account status: 0 - disabled; 1 - enabled</li>
<li>UserType - uint64 - required: no - account type: 0 - guest user; 1 - standard user; 2 - administrator user (Windows Only)</li>
<li>IsDomain - uint64 - required: no - whether a domain account: 0 - no; 1 - yes (Windows only)</li>
<li>IsRoot - uint64 - required: no - whether there is root permission: 0 - no; 1 - yes (Linux only)</li>
<li>IsSudo - uint64 - required: no - whether there is sudo permission: 0 - no; 1 - yes (Linux only)</li>
<li>IsSshLogin - uint64 - required: no - whether to use SSH log-in: 0 - no; 1 - yes (Linux only)</li>
<li>ShellLoginStatus - uint64 - required: no - whether to use Shell log-in: 0 - no; 1 - yes (Linux only)</li>
<li>PasswordStatus - uint64 - required: no - password status: 1 - normal; 2 - expiring soon; 3 - expired; 4 - locked (Linux only)</li>
<li>Os -String required: no - operating system (the value of DescribeMachineOsList API)</li>
 * @method void setFilters(array $Filters) Set Filter criteria
<li>IP - String - required: no - host IP address</li>
<li>MachineName - String - required: no - host name</li>
<li>InstanceID - string - required: no - instance ID<li>
<li>Name - String - required: no - account name (fuzzy match)</li>
<li>NameStrict - String - required: no - account name (strict match)</li>
<li>Uid - uint64 - required: no - UID</li>
<li>Guid - uint64 - required: no - GUID</li>
<li>LoginTimeStart - String - required: no - start time, such as 2021-01-11</li>
<li>LoginTimeEnd - String - required: no - end time, such as 2021-01-11</li>
<li>LoginType - uint64 - required: no - 0 - not allowed to log in; 1 - only key-based log-in allowed; 2 - only password-based log-in allowed; 3 - both key-based and password-based log-in allowed (Linux only)</li>
<li>OsType - String - required: no - Windows or Linux</li>
<li>Status - uint64 - required: no - account status: 0 - disabled; 1 - enabled</li>
<li>UserType - uint64 - required: no - account type: 0 - guest user; 1 - standard user; 2 - administrator user (Windows Only)</li>
<li>IsDomain - uint64 - required: no - whether a domain account: 0 - no; 1 - yes (Windows only)</li>
<li>IsRoot - uint64 - required: no - whether there is root permission: 0 - no; 1 - yes (Linux only)</li>
<li>IsSudo - uint64 - required: no - whether there is sudo permission: 0 - no; 1 - yes (Linux only)</li>
<li>IsSshLogin - uint64 - required: no - whether to use SSH log-in: 0 - no; 1 - yes (Linux only)</li>
<li>ShellLoginStatus - uint64 - required: no - whether to use Shell log-in: 0 - no; 1 - yes (Linux only)</li>
<li>PasswordStatus - uint64 - required: no - password status: 1 - normal; 2 - expiring soon; 3 - expired; 4 - locked (Linux only)</li>
<li>Os -String required: no - operating system (the value of DescribeMachineOsList API)</li>
 * @method integer getLimit() Obtain Number of items to be returned. It is 10 by default, and the maximum value is 100.
 * @method void setLimit(integer $Limit) Set Number of items to be returned. It is 10 by default, and the maximum value is 100.
 * @method integer getOffset() Obtain Offset, which is 0 by default.
 * @method void setOffset(integer $Offset) Set Offset, which is 0 by default.
 * @method string getOrder() Obtain Sorting method: asc for ascending order or desc for descending order
 * @method void setOrder(string $Order) Set Sorting method: asc for ascending order or desc for descending order
 * @method string getBy() Obtain Optional sorting method: [FirstTime|LoginTime|PasswordChangeTime|PasswordDuaTime|PasswordLockDays]

 * @method void setBy(string $By) Set Optional sorting method: [FirstTime|LoginTime|PasswordChangeTime|PasswordDuaTime|PasswordLockDays]
 */
class DescribeAssetUserListRequest extends AbstractModel
{
    /**
     * @var string Query the information on the host with the specified QUUID
     */
    public $Quuid;

    /**
     * @var array Filter criteria
<li>IP - String - required: no - host IP address</li>
<li>MachineName - String - required: no - host name</li>
<li>InstanceID - string - required: no - instance ID<li>
<li>Name - String - required: no - account name (fuzzy match)</li>
<li>NameStrict - String - required: no - account name (strict match)</li>
<li>Uid - uint64 - required: no - UID</li>
<li>Guid - uint64 - required: no - GUID</li>
<li>LoginTimeStart - String - required: no - start time, such as 2021-01-11</li>
<li>LoginTimeEnd - String - required: no - end time, such as 2021-01-11</li>
<li>LoginType - uint64 - required: no - 0 - not allowed to log in; 1 - only key-based log-in allowed; 2 - only password-based log-in allowed; 3 - both key-based and password-based log-in allowed (Linux only)</li>
<li>OsType - String - required: no - Windows or Linux</li>
<li>Status - uint64 - required: no - account status: 0 - disabled; 1 - enabled</li>
<li>UserType - uint64 - required: no - account type: 0 - guest user; 1 - standard user; 2 - administrator user (Windows Only)</li>
<li>IsDomain - uint64 - required: no - whether a domain account: 0 - no; 1 - yes (Windows only)</li>
<li>IsRoot - uint64 - required: no - whether there is root permission: 0 - no; 1 - yes (Linux only)</li>
<li>IsSudo - uint64 - required: no - whether there is sudo permission: 0 - no; 1 - yes (Linux only)</li>
<li>IsSshLogin - uint64 - required: no - whether to use SSH log-in: 0 - no; 1 - yes (Linux only)</li>
<li>ShellLoginStatus - uint64 - required: no - whether to use Shell log-in: 0 - no; 1 - yes (Linux only)</li>
<li>PasswordStatus - uint64 - required: no - password status: 1 - normal; 2 - expiring soon; 3 - expired; 4 - locked (Linux only)</li>
<li>Os -String required: no - operating system (the value of DescribeMachineOsList API)</li>
     */
    public $Filters;

    /**
     * @var integer Number of items to be returned. It is 10 by default, and the maximum value is 100.
     */
    public $Limit;

    /**
     * @var integer Offset, which is 0 by default.
     */
    public $Offset;

    /**
     * @var string Sorting method: asc for ascending order or desc for descending order
     */
    public $Order;

    /**
     * @var string Optional sorting method: [FirstTime|LoginTime|PasswordChangeTime|PasswordDuaTime|PasswordLockDays]

     */
    public $By;

    /**
     * @param string $Quuid Query the information on the host with the specified QUUID
     * @param array $Filters Filter criteria
<li>IP - String - required: no - host IP address</li>
<li>MachineName - String - required: no - host name</li>
<li>InstanceID - string - required: no - instance ID<li>
<li>Name - String - required: no - account name (fuzzy match)</li>
<li>NameStrict - String - required: no - account name (strict match)</li>
<li>Uid - uint64 - required: no - UID</li>
<li>Guid - uint64 - required: no - GUID</li>
<li>LoginTimeStart - String - required: no - start time, such as 2021-01-11</li>
<li>LoginTimeEnd - String - required: no - end time, such as 2021-01-11</li>
<li>LoginType - uint64 - required: no - 0 - not allowed to log in; 1 - only key-based log-in allowed; 2 - only password-based log-in allowed; 3 - both key-based and password-based log-in allowed (Linux only)</li>
<li>OsType - String - required: no - Windows or Linux</li>
<li>Status - uint64 - required: no - account status: 0 - disabled; 1 - enabled</li>
<li>UserType - uint64 - required: no - account type: 0 - guest user; 1 - standard user; 2 - administrator user (Windows Only)</li>
<li>IsDomain - uint64 - required: no - whether a domain account: 0 - no; 1 - yes (Windows only)</li>
<li>IsRoot - uint64 - required: no - whether there is root permission: 0 - no; 1 - yes (Linux only)</li>
<li>IsSudo - uint64 - required: no - whether there is sudo permission: 0 - no; 1 - yes (Linux only)</li>
<li>IsSshLogin - uint64 - required: no - whether to use SSH log-in: 0 - no; 1 - yes (Linux only)</li>
<li>ShellLoginStatus - uint64 - required: no - whether to use Shell log-in: 0 - no; 1 - yes (Linux only)</li>
<li>PasswordStatus - uint64 - required: no - password status: 1 - normal; 2 - expiring soon; 3 - expired; 4 - locked (Linux only)</li>
<li>Os -String required: no - operating system (the value of DescribeMachineOsList API)</li>
     * @param integer $Limit Number of items to be returned. It is 10 by default, and the maximum value is 100.
     * @param integer $Offset Offset, which is 0 by default.
     * @param string $Order Sorting method: asc for ascending order or desc for descending order
     * @param string $By Optional sorting method: [FirstTime|LoginTime|PasswordChangeTime|PasswordDuaTime|PasswordLockDays]
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
