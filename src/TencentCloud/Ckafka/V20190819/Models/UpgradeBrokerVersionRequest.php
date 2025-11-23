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
 * @method string getInstanceId() Obtain The ckafka cluster instance Id.
 * @method void setInstanceId(string $InstanceId) Set The ckafka cluster instance Id.
 * @method integer getType() Obtain 1. smooth configuration upgrade 2. vertical configuration upgrade.
 * @method void setType(integer $Type) Set 1. smooth configuration upgrade 2. vertical configuration upgrade.
 * @method string getSourceVersion() Obtain Version number
 * @method void setSourceVersion(string $SourceVersion) Set Version number
 * @method string getTargetVersion() Obtain Version number
 * @method void setTargetVersion(string $TargetVersion) Set Version number
 * @method string getDelayTimeStamp() Obtain Delay time.
 * @method void setDelayTimeStamp(string $DelayTimeStamp) Set Delay time.
 */
class UpgradeBrokerVersionRequest extends AbstractModel
{
    /**
     * @var string The ckafka cluster instance Id.
     */
    public $InstanceId;

    /**
     * @var integer 1. smooth configuration upgrade 2. vertical configuration upgrade.
     */
    public $Type;

    /**
     * @var string Version number
     */
    public $SourceVersion;

    /**
     * @var string Version number
     */
    public $TargetVersion;

    /**
     * @var string Delay time.
     */
    public $DelayTimeStamp;

    /**
     * @param string $InstanceId The ckafka cluster instance Id.
     * @param integer $Type 1. smooth configuration upgrade 2. vertical configuration upgrade.
     * @param string $SourceVersion Version number
     * @param string $TargetVersion Version number
     * @param string $DelayTimeStamp Delay time.
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
