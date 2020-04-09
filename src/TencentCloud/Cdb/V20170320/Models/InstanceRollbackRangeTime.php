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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Time range available for instance rollback
 *
 * @method integer getCode() Obtain Queries database error code
 * @method void setCode(integer $Code) Set Queries database error code
 * @method string getMessage() Obtain Queries database error message
 * @method void setMessage(string $Message) Set Queries database error message
 * @method string getInstanceId() Obtain List of instance IDs. An instance ID is in the format of cdb-c1nl9rpv, which is the same as the instance ID displayed on the TencentDB Console page.
 * @method void setInstanceId(string $InstanceId) Set List of instance IDs. An instance ID is in the format of cdb-c1nl9rpv, which is the same as the instance ID displayed on the TencentDB Console page.
 * @method array getTimes() Obtain Time range available for rollback
 * @method void setTimes(array $Times) Set Time range available for rollback
 */
class InstanceRollbackRangeTime extends AbstractModel
{
    /**
     * @var integer Queries database error code
     */
    public $Code;

    /**
     * @var string Queries database error message
     */
    public $Message;

    /**
     * @var string List of instance IDs. An instance ID is in the format of cdb-c1nl9rpv, which is the same as the instance ID displayed on the TencentDB Console page.
     */
    public $InstanceId;

    /**
     * @var array Time range available for rollback
     */
    public $Times;

    /**
     * @param integer $Code Queries database error code
     * @param string $Message Queries database error message
     * @param string $InstanceId List of instance IDs. An instance ID is in the format of cdb-c1nl9rpv, which is the same as the instance ID displayed on the TencentDB Console page.
     * @param array $Times Time range available for rollback
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Times",$param) and $param["Times"] !== null) {
            $this->Times = [];
            foreach ($param["Times"] as $key => $value){
                $obj = new RollbackTimeRange();
                $obj->deserialize($value);
                array_push($this->Times, $obj);
            }
        }
    }
}
