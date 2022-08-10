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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWebManagedRulesData response structure.
 *
 * @method array getData() Obtain Web attack log entity
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setData(array $Data) Set Web attack log entity
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Status. 1: failed; 0: succeeded
 * @method void setStatus(integer $Status) Set Status. 1: failed; 0: succeeded
 * @method string getMsg() Obtain Returned message
 * @method void setMsg(string $Msg) Set Returned message
 * @method string getInterval() Obtain Query time granularity. Valid values: {min,5min,hour,day}
 * @method void setInterval(string $Interval) Set Query time granularity. Valid values: {min,5min,hour,day}
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeWebManagedRulesDataResponse extends AbstractModel
{
    /**
     * @var array Web attack log entity
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Data;

    /**
     * @var integer Status. 1: failed; 0: succeeded
     */
    public $Status;

    /**
     * @var string Returned message
     */
    public $Msg;

    /**
     * @var string Query time granularity. Valid values: {min,5min,hour,day}
     */
    public $Interval;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $Data Web attack log entity
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Status. 1: failed; 0: succeeded
     * @param string $Msg Returned message
     * @param string $Interval Query time granularity. Valid values: {min,5min,hour,day}
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
                $obj = new SecEntry();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
