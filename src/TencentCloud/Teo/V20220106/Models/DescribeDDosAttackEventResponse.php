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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDDosAttackEvent response structure.
 *
 * @method DDosAttackEventData getData() Obtain DDoS attack event data
 * @method void setData(DDosAttackEventData $Data) Set DDoS attack event data
 * @method integer getStatus() Obtain Status. 1: failed; 0: succeeded
 * @method void setStatus(integer $Status) Set Status. 1: failed; 0: succeeded
 * @method string getMsg() Obtain Returned message
 * @method void setMsg(string $Msg) Set Returned message
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeDDosAttackEventResponse extends AbstractModel
{
    /**
     * @var DDosAttackEventData DDoS attack event data
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
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param DDosAttackEventData $Data DDoS attack event data
     * @param integer $Status Status. 1: failed; 0: succeeded
     * @param string $Msg Returned message
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
            $this->Data = new DDosAttackEventData();
            $this->Data->deserialize($param["Data"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
