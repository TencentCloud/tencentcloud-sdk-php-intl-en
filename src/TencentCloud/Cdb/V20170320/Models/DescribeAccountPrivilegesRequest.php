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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAccountPrivileges request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
 * @method string getUser() Obtain Account name of the database. Obtain through the [DescribeAccounts](https://www.tencentcloud.com/document/api/236/17499?from_cn_redirect=1) API.
 * @method void setUser(string $User) Set Account name of the database. Obtain through the [DescribeAccounts](https://www.tencentcloud.com/document/api/236/17499?from_cn_redirect=1) API.
 * @method string getHost() Obtain Domain name of the database account. Obtain through the API [DescribeAccounts](https://www.tencentcloud.com/document/api/236/17499?from_cn_redirect=1).
 * @method void setHost(string $Host) Set Domain name of the database account. Obtain through the API [DescribeAccounts](https://www.tencentcloud.com/document/api/236/17499?from_cn_redirect=1).
 */
class DescribeAccountPrivilegesRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
     */
    public $InstanceId;

    /**
     * @var string Account name of the database. Obtain through the [DescribeAccounts](https://www.tencentcloud.com/document/api/236/17499?from_cn_redirect=1) API.
     */
    public $User;

    /**
     * @var string Domain name of the database account. Obtain through the API [DescribeAccounts](https://www.tencentcloud.com/document/api/236/17499?from_cn_redirect=1).
     */
    public $Host;

    /**
     * @param string $InstanceId Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
     * @param string $User Account name of the database. Obtain through the [DescribeAccounts](https://www.tencentcloud.com/document/api/236/17499?from_cn_redirect=1) API.
     * @param string $Host Domain name of the database account. Obtain through the API [DescribeAccounts](https://www.tencentcloud.com/document/api/236/17499?from_cn_redirect=1).
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

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }
    }
}
