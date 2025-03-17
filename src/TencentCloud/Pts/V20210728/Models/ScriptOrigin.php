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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Built-in script load model, not supported currently.
 *
 * @method integer getMachineNumber() Obtain Machine number.
 * @method void setMachineNumber(integer $MachineNumber) Set Machine number.
 * @method string getMachineSpecification() Obtain Machine specification.
 * @method void setMachineSpecification(string $MachineSpecification) Set Machine specification.
 * @method integer getDurationSeconds() Obtain Duration.
 * @method void setDurationSeconds(integer $DurationSeconds) Set Duration.
 */
class ScriptOrigin extends AbstractModel
{
    /**
     * @var integer Machine number.
     */
    public $MachineNumber;

    /**
     * @var string Machine specification.
     */
    public $MachineSpecification;

    /**
     * @var integer Duration.
     */
    public $DurationSeconds;

    /**
     * @param integer $MachineNumber Machine number.
     * @param string $MachineSpecification Machine specification.
     * @param integer $DurationSeconds Duration.
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
        if (array_key_exists("MachineNumber",$param) and $param["MachineNumber"] !== null) {
            $this->MachineNumber = $param["MachineNumber"];
        }

        if (array_key_exists("MachineSpecification",$param) and $param["MachineSpecification"] !== null) {
            $this->MachineSpecification = $param["MachineSpecification"];
        }

        if (array_key_exists("DurationSeconds",$param) and $param["DurationSeconds"] !== null) {
            $this->DurationSeconds = $param["DurationSeconds"];
        }
    }
}
