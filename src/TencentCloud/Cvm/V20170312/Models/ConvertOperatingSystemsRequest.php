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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ConvertOperatingSystems request structure.
 *
 * @method array getInstanceIds() Obtain ID of an instance to execute operating system switching.
 * @method void setInstanceIds(array $InstanceIds) Set ID of an instance to execute operating system switching.
 * @method boolean getMinimalConversion() Obtain Whether it is a minimum scale switching.
 * @method void setMinimalConversion(boolean $MinimalConversion) Set Whether it is a minimum scale switching.
 * @method boolean getDryRun() Obtain Whether it is pre-check only.
 * @method void setDryRun(boolean $DryRun) Set Whether it is pre-check only.
 * @method string getTargetOSType() Obtain Target operating system type for switching. Only TencentOS is supported.
 * @method void setTargetOSType(string $TargetOSType) Set Target operating system type for switching. Only TencentOS is supported.
 */
class ConvertOperatingSystemsRequest extends AbstractModel
{
    /**
     * @var array ID of an instance to execute operating system switching.
     */
    public $InstanceIds;

    /**
     * @var boolean Whether it is a minimum scale switching.
     */
    public $MinimalConversion;

    /**
     * @var boolean Whether it is pre-check only.
     */
    public $DryRun;

    /**
     * @var string Target operating system type for switching. Only TencentOS is supported.
     */
    public $TargetOSType;

    /**
     * @param array $InstanceIds ID of an instance to execute operating system switching.
     * @param boolean $MinimalConversion Whether it is a minimum scale switching.
     * @param boolean $DryRun Whether it is pre-check only.
     * @param string $TargetOSType Target operating system type for switching. Only TencentOS is supported.
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("MinimalConversion",$param) and $param["MinimalConversion"] !== null) {
            $this->MinimalConversion = $param["MinimalConversion"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("TargetOSType",$param) and $param["TargetOSType"] !== null) {
            $this->TargetOSType = $param["TargetOSType"];
        }
    }
}
