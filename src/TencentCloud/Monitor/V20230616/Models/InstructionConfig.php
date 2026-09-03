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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Clone prompt configuration
 *
 * @method string getRolePosition() Obtain <p>Role definition</p>
 * @method void setRolePosition(string $RolePosition) Set <p>Role definition</p>
 * @method string getCoreDuty() Obtain <p>Core responsibility</p>
 * @method void setCoreDuty(string $CoreDuty) Set <p>Core responsibility</p>
 * @method string getCoreTruths() Obtain <p>Core principle</p>
 * @method void setCoreTruths(string $CoreTruths) Set <p>Core principle</p>
 * @method string getVibe() Obtain <p>Style constraints</p>
 * @method void setVibe(string $Vibe) Set <p>Style constraints</p>
 * @method string getBoundaries() Obtain <p>Notes</p>
 * @method void setBoundaries(string $Boundaries) Set <p>Notes</p>
 */
class InstructionConfig extends AbstractModel
{
    /**
     * @var string <p>Role definition</p>
     */
    public $RolePosition;

    /**
     * @var string <p>Core responsibility</p>
     */
    public $CoreDuty;

    /**
     * @var string <p>Core principle</p>
     */
    public $CoreTruths;

    /**
     * @var string <p>Style constraints</p>
     */
    public $Vibe;

    /**
     * @var string <p>Notes</p>
     */
    public $Boundaries;

    /**
     * @param string $RolePosition <p>Role definition</p>
     * @param string $CoreDuty <p>Core responsibility</p>
     * @param string $CoreTruths <p>Core principle</p>
     * @param string $Vibe <p>Style constraints</p>
     * @param string $Boundaries <p>Notes</p>
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
        if (array_key_exists("RolePosition",$param) and $param["RolePosition"] !== null) {
            $this->RolePosition = $param["RolePosition"];
        }

        if (array_key_exists("CoreDuty",$param) and $param["CoreDuty"] !== null) {
            $this->CoreDuty = $param["CoreDuty"];
        }

        if (array_key_exists("CoreTruths",$param) and $param["CoreTruths"] !== null) {
            $this->CoreTruths = $param["CoreTruths"];
        }

        if (array_key_exists("Vibe",$param) and $param["Vibe"] !== null) {
            $this->Vibe = $param["Vibe"];
        }

        if (array_key_exists("Boundaries",$param) and $param["Boundaries"] !== null) {
            $this->Boundaries = $param["Boundaries"];
        }
    }
}
