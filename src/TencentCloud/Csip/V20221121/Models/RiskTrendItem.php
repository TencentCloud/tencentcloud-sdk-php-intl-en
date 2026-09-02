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
 * Last day risk summary item
 *
 * @method string getKey() Obtain Risk item type: intrusion_alert / vulnerability
 * @method void setKey(string $Key) Set Risk item type: intrusion_alert / vulnerability
 * @method string getName() Obtain Display name, returned in the language of the request. Vulnerability items use different copywriting based on whether payment is required.
 * @method void setName(string $Name) Set Display name, returned in the language of the request. Vulnerability items use different copywriting based on whether payment is required.
 * @method integer getCount() Obtain Number of risks
 * @method void setCount(integer $Count) Set Number of risks
 */
class RiskTrendItem extends AbstractModel
{
    /**
     * @var string Risk item type: intrusion_alert / vulnerability
     */
    public $Key;

    /**
     * @var string Display name, returned in the language of the request. Vulnerability items use different copywriting based on whether payment is required.
     */
    public $Name;

    /**
     * @var integer Number of risks
     */
    public $Count;

    /**
     * @param string $Key Risk item type: intrusion_alert / vulnerability
     * @param string $Name Display name, returned in the language of the request. Vulnerability items use different copywriting based on whether payment is required.
     * @param integer $Count Number of risks
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
