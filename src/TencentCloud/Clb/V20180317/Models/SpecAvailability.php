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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Specification availability
 *
 * @method string getSpecType() Obtain Specifies the specification type.
<Li>Clb.C2.Medium (standard type)</li><li>clb.c3.small (advanced type 1)</li><li>clb.c3.medium (advanced type 2)</li>.
<li>clb.c4.small (high-strength type 1)</li> <li>clb.c4.medium (high-strength type 2)</li> <li>clb.c4.large (high-strength type 3)</li> <li>clb.c4.xlarge (high-strength type 4)</li> <li>shared (shared type)</li>.

 * @method void setSpecType(string $SpecType) Set Specifies the specification type.
<Li>Clb.C2.Medium (standard type)</li><li>clb.c3.small (advanced type 1)</li><li>clb.c3.medium (advanced type 2)</li>.
<li>clb.c4.small (high-strength type 1)</li> <li>clb.c4.medium (high-strength type 2)</li> <li>clb.c4.large (high-strength type 3)</li> <li>clb.c4.xlarge (high-strength type 4)</li> <li>shared (shared type)</li>.

 * @method string getAvailability() Obtain Specification availability. resource availability, "Available": Available, "Unavailable": Unavailable.
 * @method void setAvailability(string $Availability) Set Specification availability. resource availability, "Available": Available, "Unavailable": Unavailable.
 */
class SpecAvailability extends AbstractModel
{
    /**
     * @var string Specifies the specification type.
<Li>Clb.C2.Medium (standard type)</li><li>clb.c3.small (advanced type 1)</li><li>clb.c3.medium (advanced type 2)</li>.
<li>clb.c4.small (high-strength type 1)</li> <li>clb.c4.medium (high-strength type 2)</li> <li>clb.c4.large (high-strength type 3)</li> <li>clb.c4.xlarge (high-strength type 4)</li> <li>shared (shared type)</li>.

     */
    public $SpecType;

    /**
     * @var string Specification availability. resource availability, "Available": Available, "Unavailable": Unavailable.
     */
    public $Availability;

    /**
     * @param string $SpecType Specifies the specification type.
<Li>Clb.C2.Medium (standard type)</li><li>clb.c3.small (advanced type 1)</li><li>clb.c3.medium (advanced type 2)</li>.
<li>clb.c4.small (high-strength type 1)</li> <li>clb.c4.medium (high-strength type 2)</li> <li>clb.c4.large (high-strength type 3)</li> <li>clb.c4.xlarge (high-strength type 4)</li> <li>shared (shared type)</li>.

     * @param string $Availability Specification availability. resource availability, "Available": Available, "Unavailable": Unavailable.
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
        if (array_key_exists("SpecType",$param) and $param["SpecType"] !== null) {
            $this->SpecType = $param["SpecType"];
        }

        if (array_key_exists("Availability",$param) and $param["Availability"] !== null) {
            $this->Availability = $param["Availability"];
        }
    }
}
