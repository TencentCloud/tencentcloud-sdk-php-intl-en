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
 * Instance filter parameters on the business side
 *
 * @method string getName() Obtain <p>Filter field.</p><p>Enumeration value:</p><ul><li>InstanceId: Instance ID.</li><li>InstanceName: Instance name.</li><li>TagKey: Tag key.</li><li>InstanceTags: Instance tag key-value, tag key & tag value.</li></ul>
 * @method void setName(string $Name) Set <p>Filter field.</p><p>Enumeration value:</p><ul><li>InstanceId: Instance ID.</li><li>InstanceName: Instance name.</li><li>TagKey: Tag key.</li><li>InstanceTags: Instance tag key-value, tag key & tag value.</li></ul>
 * @method array getValues() Obtain <p>Value of the filter field.</p>
 * @method void setValues(array $Values) Set <p>Value of the filter field.</p>
 * @method boolean getExactMatch() Obtain <p>Exact match switch.</p><ul><li>false: Turn off.</li><li>true: Turn on.</li></ul>
 * @method void setExactMatch(boolean $ExactMatch) Set <p>Exact match switch.</p><ul><li>false: Turn off.</li><li>true: Turn on.</li></ul>
 */
class Filter extends AbstractModel
{
    /**
     * @var string <p>Filter field.</p><p>Enumeration value:</p><ul><li>InstanceId: Instance ID.</li><li>InstanceName: Instance name.</li><li>TagKey: Tag key.</li><li>InstanceTags: Instance tag key-value, tag key & tag value.</li></ul>
     */
    public $Name;

    /**
     * @var array <p>Value of the filter field.</p>
     */
    public $Values;

    /**
     * @var boolean <p>Exact match switch.</p><ul><li>false: Turn off.</li><li>true: Turn on.</li></ul>
     */
    public $ExactMatch;

    /**
     * @param string $Name <p>Filter field.</p><p>Enumeration value:</p><ul><li>InstanceId: Instance ID.</li><li>InstanceName: Instance name.</li><li>TagKey: Tag key.</li><li>InstanceTags: Instance tag key-value, tag key & tag value.</li></ul>
     * @param array $Values <p>Value of the filter field.</p>
     * @param boolean $ExactMatch <p>Exact match switch.</p><ul><li>false: Turn off.</li><li>true: Turn on.</li></ul>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("ExactMatch",$param) and $param["ExactMatch"] !== null) {
            $this->ExactMatch = $param["ExactMatch"];
        }
    }
}
