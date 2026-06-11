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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * order detail
 *
 * @method string getResourceID() Obtain Resource ID
 * @method void setResourceID(string $ResourceID) Set Resource ID
 * @method string getInquireKey() Obtain Billing item
 * @method void setInquireKey(string $InquireKey) Set Billing item
 * @method integer getStatus() Obtain Order status
-Normal
-Isolation period
-3 Terminated
 * @method void setStatus(integer $Status) Set Order status
-Normal
-Isolation period
-3 Terminated
 */
class OrderDetail extends AbstractModel
{
    /**
     * @var string Resource ID
     */
    public $ResourceID;

    /**
     * @var string Billing item
     */
    public $InquireKey;

    /**
     * @var integer Order status
-Normal
-Isolation period
-3 Terminated
     */
    public $Status;

    /**
     * @param string $ResourceID Resource ID
     * @param string $InquireKey Billing item
     * @param integer $Status Order status
-Normal
-Isolation period
-3 Terminated
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
        if (array_key_exists("ResourceID",$param) and $param["ResourceID"] !== null) {
            $this->ResourceID = $param["ResourceID"];
        }

        if (array_key_exists("InquireKey",$param) and $param["InquireKey"] !== null) {
            $this->InquireKey = $param["InquireKey"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
