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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecIndex response structure.
 *
 * @method array getData() Obtain Field value as follows:
AttackIpCount: number of attacked IPs
AttackCount: number of attacks
BlockCount: number of blockings
MaxMbps: attack bandwidth peak in Mbps
IpNum: IP statistics
 * @method void setData(array $Data) Set Field value as follows:
AttackIpCount: number of attacked IPs
AttackCount: number of attacks
BlockCount: number of blockings
MaxMbps: attack bandwidth peak in Mbps
IpNum: IP statistics
 * @method string getBeginDate() Obtain Start time of the current month
 * @method void setBeginDate(string $BeginDate) Set Start time of the current month
 * @method string getEndDate() Obtain End time of the current month
 * @method void setEndDate(string $EndDate) Set End time of the current month
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeSecIndexResponse extends AbstractModel
{
    /**
     * @var array Field value as follows:
AttackIpCount: number of attacked IPs
AttackCount: number of attacks
BlockCount: number of blockings
MaxMbps: attack bandwidth peak in Mbps
IpNum: IP statistics
     */
    public $Data;

    /**
     * @var string Start time of the current month
     */
    public $BeginDate;

    /**
     * @var string End time of the current month
     */
    public $EndDate;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $Data Field value as follows:
AttackIpCount: number of attacked IPs
AttackCount: number of attacks
BlockCount: number of blockings
MaxMbps: attack bandwidth peak in Mbps
IpNum: IP statistics
     * @param string $BeginDate Start time of the current month
     * @param string $EndDate End time of the current month
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new KeyValue();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("BeginDate",$param) and $param["BeginDate"] !== null) {
            $this->BeginDate = $param["BeginDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
