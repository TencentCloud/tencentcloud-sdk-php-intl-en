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
 * @method array getAvailabilitySet() Obtain Available resources
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setAvailabilitySet(array $AvailabilitySet) Set Available resources
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getTypeSet() Obtain ISP Type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTypeSet(array $TypeSet) Set ISP Type
Note: This field may return null, indicating that no valid values can be obtained.
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
     * @var array Available resources
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $AvailabilitySet;

    /**
     * @var array ISP Type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TypeSet;

    /**
     * @param array $Type Specific ISP resource information, Vaules: `CMCC`, `CUCC`, `CTCC`, `BGP`, and `INTERNAL`.
     * @param string $Isp ISP information, such as `CMCC`, `CUCC`, `CTCC`, `BGP`, and `INTERNAL`.
     * @param array $AvailabilitySet Available resources
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $TypeSet ISP Type
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("AvailabilitySet",$param) and $param["AvailabilitySet"] !== null) {
            $this->AvailabilitySet = [];
            foreach ($param["AvailabilitySet"] as $key => $value){
                $obj = new ResourceAvailability();
                $obj->deserialize($value);
                array_push($this->AvailabilitySet, $obj);
            }
        }

        if (array_key_exists("TypeSet",$param) and $param["TypeSet"] !== null) {
            $this->TypeSet = [];
            foreach ($param["TypeSet"] as $key => $value){
                $obj = new TypeInfo();
                $obj->deserialize($value);
                array_push($this->TypeSet, $obj);
            }
        }
    }
}
