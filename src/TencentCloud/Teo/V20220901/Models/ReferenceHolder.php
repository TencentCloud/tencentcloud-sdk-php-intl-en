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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Referenced instance information.
 *
 * @method string getZoneId() Obtain Site ID.
 * @method void setZoneId(string $ZoneId) Set Site ID.
 * @method string getType() Obtain Instance type. Values as follows:
<li>acceleration-domain: Acceleration domain name;</li>
 * @method void setType(string $Type) Set Instance type. Values as follows:
<li>acceleration-domain: Acceleration domain name;</li>
 * @method string getInstance() Obtain Referenced instance information.
 * @method void setInstance(string $Instance) Set Referenced instance information.
 */
class ReferenceHolder extends AbstractModel
{
    /**
     * @var string Site ID.
     */
    public $ZoneId;

    /**
     * @var string Instance type. Values as follows:
<li>acceleration-domain: Acceleration domain name;</li>
     */
    public $Type;

    /**
     * @var string Referenced instance information.
     */
    public $Instance;

    /**
     * @param string $ZoneId Site ID.
     * @param string $Type Instance type. Values as follows:
<li>acceleration-domain: Acceleration domain name;</li>
     * @param string $Instance Referenced instance information.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Instance",$param) and $param["Instance"] !== null) {
            $this->Instance = $param["Instance"];
        }
    }
}
