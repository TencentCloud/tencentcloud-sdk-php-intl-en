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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteAccount request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, which is in the format of `tdsql-ow728lmc` and can be obtained through the `DescribeDBInstances` API.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, which is in the format of `tdsql-ow728lmc` and can be obtained through the `DescribeDBInstances` API.
 * @method string getUserName() Obtain Username
 * @method void setUserName(string $UserName) Set Username
 * @method string getHost() Obtain Access host allowed for user
 * @method void setHost(string $Host) Set Access host allowed for user
 */
class DeleteAccountRequest extends AbstractModel
{
    /**
     * @var string Instance ID, which is in the format of `tdsql-ow728lmc` and can be obtained through the `DescribeDBInstances` API.
     */
    public $InstanceId;

    /**
     * @var string Username
     */
    public $UserName;

    /**
     * @var string Access host allowed for user
     */
    public $Host;

    /**
     * @param string $InstanceId Instance ID, which is in the format of `tdsql-ow728lmc` and can be obtained through the `DescribeDBInstances` API.
     * @param string $UserName Username
     * @param string $Host Access host allowed for user
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

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }
    }
}
