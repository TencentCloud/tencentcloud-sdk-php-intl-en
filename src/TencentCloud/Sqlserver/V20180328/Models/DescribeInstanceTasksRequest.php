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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceTasks request structure.
 *
 * @method string getInstanceId() Obtain Database instance ID, in the format of mssql-njj2mtpl.
 * @method void setInstanceId(string $InstanceId) Set Database instance ID, in the format of mssql-njj2mtpl.
 * @method integer getLimit() Obtain Pagination size.
 * @method void setLimit(integer $Limit) Set Pagination size.
 * @method integer getStatus() Obtain Asynchronous task status. 1 - running; 2 - running successful; 3 - running failed.
 * @method void setStatus(integer $Status) Set Asynchronous task status. 1 - running; 2 - running successful; 3 - running failed.
 * @method integer getOffset() Obtain Pagination offset.
 * @method void setOffset(integer $Offset) Set Pagination offset.
 */
class DescribeInstanceTasksRequest extends AbstractModel
{
    /**
     * @var string Database instance ID, in the format of mssql-njj2mtpl.
     */
    public $InstanceId;

    /**
     * @var integer Pagination size.
     */
    public $Limit;

    /**
     * @var integer Asynchronous task status. 1 - running; 2 - running successful; 3 - running failed.
     */
    public $Status;

    /**
     * @var integer Pagination offset.
     */
    public $Offset;

    /**
     * @param string $InstanceId Database instance ID, in the format of mssql-njj2mtpl.
     * @param integer $Limit Pagination size.
     * @param integer $Status Asynchronous task status. 1 - running; 2 - running successful; 3 - running failed.
     * @param integer $Offset Pagination offset.
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
