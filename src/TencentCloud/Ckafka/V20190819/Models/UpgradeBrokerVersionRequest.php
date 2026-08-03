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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeBrokerVersion request structure.
 *
 * @method string getInstanceId() Obtain <p>ckafka cluster instance Id</p>
 * @method void setInstanceId(string $InstanceId) Set <p>ckafka cluster instance Id</p>
 * @method integer getType() Obtain <p>Upgrade type</p><p>Enumeration value:</p><ul><li>1: Minor version migration (recommended)</li></ul>
 * @method void setType(integer $Type) Set <p>Upgrade type</p><p>Enumeration value:</p><ul><li>1: Minor version migration (recommended)</li></ul>
 * @method string getSourceVersion() Obtain <p>Version number.</p>
 * @method void setSourceVersion(string $SourceVersion) Set <p>Version number.</p>
 * @method string getTargetVersion() Obtain <p>Version number.</p>
 * @method void setTargetVersion(string $TargetVersion) Set <p>Version number.</p>
 * @method string getDelayTimeStamp() Obtain <p>Delay time</p>
 * @method void setDelayTimeStamp(string $DelayTimeStamp) Set <p>Delay time</p>
 */
class UpgradeBrokerVersionRequest extends AbstractModel
{
    /**
     * @var string <p>ckafka cluster instance Id</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>Upgrade type</p><p>Enumeration value:</p><ul><li>1: Minor version migration (recommended)</li></ul>
     */
    public $Type;

    /**
     * @var string <p>Version number.</p>
     */
    public $SourceVersion;

    /**
     * @var string <p>Version number.</p>
     */
    public $TargetVersion;

    /**
     * @var string <p>Delay time</p>
     */
    public $DelayTimeStamp;

    /**
     * @param string $InstanceId <p>ckafka cluster instance Id</p>
     * @param integer $Type <p>Upgrade type</p><p>Enumeration value:</p><ul><li>1: Minor version migration (recommended)</li></ul>
     * @param string $SourceVersion <p>Version number.</p>
     * @param string $TargetVersion <p>Version number.</p>
     * @param string $DelayTimeStamp <p>Delay time</p>
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SourceVersion",$param) and $param["SourceVersion"] !== null) {
            $this->SourceVersion = $param["SourceVersion"];
        }

        if (array_key_exists("TargetVersion",$param) and $param["TargetVersion"] !== null) {
            $this->TargetVersion = $param["TargetVersion"];
        }

        if (array_key_exists("DelayTimeStamp",$param) and $param["DelayTimeStamp"] !== null) {
            $this->DelayTimeStamp = $param["DelayTimeStamp"];
        }
    }
}
