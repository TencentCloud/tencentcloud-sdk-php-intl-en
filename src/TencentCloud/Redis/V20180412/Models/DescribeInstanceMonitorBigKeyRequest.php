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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceMonitorBigKey request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method integer getReqType() Obtain Request type. 1: string type; 2: all types
 * @method void setReqType(integer $ReqType) Set Request type. 1: string type; 2: all types
 * @method string getDate() Obtain Time, such as "20190219"
 * @method void setDate(string $Date) Set Time, such as "20190219"
 */
class DescribeInstanceMonitorBigKeyRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var integer Request type. 1: string type; 2: all types
     */
    public $ReqType;

    /**
     * @var string Time, such as "20190219"
     */
    public $Date;

    /**
     * @param string $InstanceId Instance ID
     * @param integer $ReqType Request type. 1: string type; 2: all types
     * @param string $Date Time, such as "20190219"
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

        if (array_key_exists("ReqType",$param) and $param["ReqType"] !== null) {
            $this->ReqType = $param["ReqType"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }
    }
}
