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
 * Skill power tag
 *
 * @method string getID() Obtain Capacity tag identification, suitable for program judgment, filtering or aggregation usage
 * @method void setID(string $ID) Set Capacity tag identification, suitable for program judgment, filtering or aggregation usage
 * @method string getName() Obtain Capacity Tag Display Name
 * @method void setName(string $Name) Set Capacity Tag Display Name
 */
class SkillCapabilityTag extends AbstractModel
{
    /**
     * @var string Capacity tag identification, suitable for program judgment, filtering or aggregation usage
     */
    public $ID;

    /**
     * @var string Capacity Tag Display Name
     */
    public $Name;

    /**
     * @param string $ID Capacity tag identification, suitable for program judgment, filtering or aggregation usage
     * @param string $Name Capacity Tag Display Name
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
