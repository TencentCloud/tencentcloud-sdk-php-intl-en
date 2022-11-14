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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Unhandled event statistics
 *
 * @method string getEventName() Obtain Security event name
 * @method void setEventName(string $EventName) Set Security event name
 * @method integer getTotal() Obtain Number of unhandled events
 * @method void setTotal(integer $Total) Set Number of unhandled events
 */
class UnHandleEventDetail extends AbstractModel
{
    /**
     * @var string Security event name
     */
    public $EventName;

    /**
     * @var integer Number of unhandled events
     */
    public $Total;

    /**
     * @param string $EventName Security event name
     * @param integer $Total Number of unhandled events
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
        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }
    }
}
