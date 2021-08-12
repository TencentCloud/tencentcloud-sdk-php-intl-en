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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceParamRecords request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of mssql-dj5i29c5n. It is the same as the instance ID displayed in the TencentDB console and the response parameter `InstanceId` of the `DescribeDBInstances` API.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of mssql-dj5i29c5n. It is the same as the instance ID displayed in the TencentDB console and the response parameter `InstanceId` of the `DescribeDBInstances` API.
 * @method integer getOffset() Obtain Page number. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Page number. Default value: `0`.
 * @method integer getLimit() Obtain The maximum number of results returned per page. Maximum value: `100`. Default value: `20`.
 * @method void setLimit(integer $Limit) Set The maximum number of results returned per page. Maximum value: `100`. Default value: `20`.
 */
class DescribeInstanceParamRecordsRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of mssql-dj5i29c5n. It is the same as the instance ID displayed in the TencentDB console and the response parameter `InstanceId` of the `DescribeDBInstances` API.
     */
    public $InstanceId;

    /**
     * @var integer Page number. Default value: `0`.
     */
    public $Offset;

    /**
     * @var integer The maximum number of results returned per page. Maximum value: `100`. Default value: `20`.
     */
    public $Limit;

    /**
     * @param string $InstanceId Instance ID in the format of mssql-dj5i29c5n. It is the same as the instance ID displayed in the TencentDB console and the response parameter `InstanceId` of the `DescribeDBInstances` API.
     * @param integer $Offset Page number. Default value: `0`.
     * @param integer $Limit The maximum number of results returned per page. Maximum value: `100`. Default value: `20`.
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
