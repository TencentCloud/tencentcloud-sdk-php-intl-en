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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource availability
 *
 * @method string getType() Obtain Specific ISP resource information. Values: `CMCC`, `CUCC`, `CTCC`, `BGP`.
 * @method void setType(string $Type) Set Specific ISP resource information. Values: `CMCC`, `CUCC`, `CTCC`, `BGP`.
 * @method string getAvailability() Obtain Whether the resource is available. Values: `Available`, `Unavailable`
 * @method void setAvailability(string $Availability) Set Whether the resource is available. Values: `Available`, `Unavailable`
 */
class ResourceAvailability extends AbstractModel
{
    /**
     * @var string Specific ISP resource information. Values: `CMCC`, `CUCC`, `CTCC`, `BGP`.
     */
    public $Type;

    /**
     * @var string Whether the resource is available. Values: `Available`, `Unavailable`
     */
    public $Availability;

    /**
     * @param string $Type Specific ISP resource information. Values: `CMCC`, `CUCC`, `CTCC`, `BGP`.
     * @param string $Availability Whether the resource is available. Values: `Available`, `Unavailable`
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Availability",$param) and $param["Availability"] !== null) {
            $this->Availability = $param["Availability"];
        }
    }
}
