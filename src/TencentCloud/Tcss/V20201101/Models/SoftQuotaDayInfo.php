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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pay-as-you-go billing details
 *
 * @method string getPayTime() Obtain Deduction time
 * @method void setPayTime(string $PayTime) Set Deduction time
 * @method integer getCoresCnt() Obtain Number of billed cores
 * @method void setCoresCnt(integer $CoresCnt) Set Number of billed cores
 */
class SoftQuotaDayInfo extends AbstractModel
{
    /**
     * @var string Deduction time
     */
    public $PayTime;

    /**
     * @var integer Number of billed cores
     */
    public $CoresCnt;

    /**
     * @param string $PayTime Deduction time
     * @param integer $CoresCnt Number of billed cores
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
        if (array_key_exists("PayTime",$param) and $param["PayTime"] !== null) {
            $this->PayTime = $param["PayTime"];
        }

        if (array_key_exists("CoresCnt",$param) and $param["CoresCnt"] !== null) {
            $this->CoresCnt = $param["CoresCnt"];
        }
    }
}
