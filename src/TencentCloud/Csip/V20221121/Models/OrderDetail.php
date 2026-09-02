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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Order detail
 *
 * @method string getResourceID() Obtain <p>Resource ID</p>
 * @method void setResourceID(string $ResourceID) Set <p>Resource ID</p>
 * @method string getInquireKey() Obtain <p>Billing item</p>
 * @method void setInquireKey(string $InquireKey) Set <p>Billing item</p>
 * @method integer getStatus() Obtain <p>Order status</p><ul><li>1: normal</li><li>2: isolation period</li><li>3: terminated</li></ul>
 * @method void setStatus(integer $Status) Set <p>Order status</p><ul><li>1: normal</li><li>2: isolation period</li><li>3: terminated</li></ul>
 * @method integer getSourceType() Obtain <p>Order type</p>
 * @method void setSourceType(integer $SourceType) Set <p>Order type</p>
 */
class OrderDetail extends AbstractModel
{
    /**
     * @var string <p>Resource ID</p>
     */
    public $ResourceID;

    /**
     * @var string <p>Billing item</p>
     */
    public $InquireKey;

    /**
     * @var integer <p>Order status</p><ul><li>1: normal</li><li>2: isolation period</li><li>3: terminated</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>Order type</p>
     */
    public $SourceType;

    /**
     * @param string $ResourceID <p>Resource ID</p>
     * @param string $InquireKey <p>Billing item</p>
     * @param integer $Status <p>Order status</p><ul><li>1: normal</li><li>2: isolation period</li><li>3: terminated</li></ul>
     * @param integer $SourceType <p>Order type</p>
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

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }
    }
}
