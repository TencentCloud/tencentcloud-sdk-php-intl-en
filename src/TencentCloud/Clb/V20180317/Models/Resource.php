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
 * Resource details
 *
 * @method array getType() Obtain Specific ISP resource information, Vaules: `CMCC`, `CUCC`, `CTCC`, `BGP`, and `INTERNAL`.
 * @method void setType(array $Type) Set Specific ISP resource information, Vaules: `CMCC`, `CUCC`, `CTCC`, `BGP`, and `INTERNAL`.
 * @method string getIsp() Obtain ISP information, such as `CMCC`, `CUCC`, `CTCC`, `BGP`, and `INTERNAL`.
 * @method void setIsp(string $Isp) Set ISP information, such as `CMCC`, `CUCC`, `CTCC`, `BGP`, and `INTERNAL`.
 */
class Resource extends AbstractModel
{
    /**
     * @var array Specific ISP resource information, Vaules: `CMCC`, `CUCC`, `CTCC`, `BGP`, and `INTERNAL`.
     */
    public $Type;

    /**
     * @var string ISP information, such as `CMCC`, `CUCC`, `CTCC`, `BGP`, and `INTERNAL`.
     */
    public $Isp;

    /**
     * @param array $Type Specific ISP resource information, Vaules: `CMCC`, `CUCC`, `CTCC`, `BGP`, and `INTERNAL`.
     * @param string $Isp ISP information, such as `CMCC`, `CUCC`, `CTCC`, `BGP`, and `INTERNAL`.
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

        if (array_key_exists("Isp",$param) and $param["Isp"] !== null) {
            $this->Isp = $param["Isp"];
        }
    }
}
