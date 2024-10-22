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
 * Information about the target operating system for operating system switching.
 *
 * @method string getTargetOSType() Obtain Target operating system type.
 * @method void setTargetOSType(string $TargetOSType) Set Target operating system type.
 * @method string getTargetOSVersion() Obtain Target operating system version.
 * @method void setTargetOSVersion(string $TargetOSVersion) Set Target operating system version.
 */
class TargetOS extends AbstractModel
{
    /**
     * @var string Target operating system type.
     */
    public $TargetOSType;

    /**
     * @var string Target operating system version.
     */
    public $TargetOSVersion;

    /**
     * @param string $TargetOSType Target operating system type.
     * @param string $TargetOSVersion Target operating system version.
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
        if (array_key_exists("TargetOSType",$param) and $param["TargetOSType"] !== null) {
            $this->TargetOSType = $param["TargetOSType"];
        }

        if (array_key_exists("TargetOSVersion",$param) and $param["TargetOSVersion"] !== null) {
            $this->TargetOSVersion = $param["TargetOSVersion"];
        }
    }
}
