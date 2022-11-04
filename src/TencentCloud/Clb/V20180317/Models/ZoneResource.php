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
 * List of AZs
 *
 * @method string getMasterZone() Obtain Primary AZ, such as "ap-guangzhou-1".
 * @method void setMasterZone(string $MasterZone) Set Primary AZ, such as "ap-guangzhou-1".
 * @method array getResourceSet() Obtain List of resources
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceSet(array $ResourceSet) Set List of resources
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSlaveZone() Obtain Secondary AZ, such as "ap-guangzhou-2". 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSlaveZone(string $SlaveZone) Set Secondary AZ, such as "ap-guangzhou-2". 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIPVersion() Obtain IP version. Values: `IPv4`, `IPv6`, and `IPv6_Nat`.
 * @method void setIPVersion(string $IPVersion) Set IP version. Values: `IPv4`, `IPv6`, and `IPv6_Nat`.
 * @method string getZoneRegion() Obtain Region of the AZ, such as `ap-guangzhou`.
 * @method void setZoneRegion(string $ZoneRegion) Set Region of the AZ, such as `ap-guangzhou`.
 * @method boolean getLocalZone() Obtain Whether the AZ is a `LocalZone`. Values: `true`, `false`.
 * @method void setLocalZone(boolean $LocalZone) Set Whether the AZ is a `LocalZone`. Values: `true`, `false`.
 */
class ZoneResource extends AbstractModel
{
    /**
     * @var string Primary AZ, such as "ap-guangzhou-1".
     */
    public $MasterZone;

    /**
     * @var array List of resources
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceSet;

    /**
     * @var string Secondary AZ, such as "ap-guangzhou-2". 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SlaveZone;

    /**
     * @var string IP version. Values: `IPv4`, `IPv6`, and `IPv6_Nat`.
     */
    public $IPVersion;

    /**
     * @var string Region of the AZ, such as `ap-guangzhou`.
     */
    public $ZoneRegion;

    /**
     * @var boolean Whether the AZ is a `LocalZone`. Values: `true`, `false`.
     */
    public $LocalZone;

    /**
     * @param string $MasterZone Primary AZ, such as "ap-guangzhou-1".
     * @param array $ResourceSet List of resources
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SlaveZone Secondary AZ, such as "ap-guangzhou-2". 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IPVersion IP version. Values: `IPv4`, `IPv6`, and `IPv6_Nat`.
     * @param string $ZoneRegion Region of the AZ, such as `ap-guangzhou`.
     * @param boolean $LocalZone Whether the AZ is a `LocalZone`. Values: `true`, `false`.
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
        if (array_key_exists("MasterZone",$param) and $param["MasterZone"] !== null) {
            $this->MasterZone = $param["MasterZone"];
        }

        if (array_key_exists("ResourceSet",$param) and $param["ResourceSet"] !== null) {
            $this->ResourceSet = [];
            foreach ($param["ResourceSet"] as $key => $value){
                $obj = new Resource();
                $obj->deserialize($value);
                array_push($this->ResourceSet, $obj);
            }
        }

        if (array_key_exists("SlaveZone",$param) and $param["SlaveZone"] !== null) {
            $this->SlaveZone = $param["SlaveZone"];
        }

        if (array_key_exists("IPVersion",$param) and $param["IPVersion"] !== null) {
            $this->IPVersion = $param["IPVersion"];
        }

        if (array_key_exists("ZoneRegion",$param) and $param["ZoneRegion"] !== null) {
            $this->ZoneRegion = $param["ZoneRegion"];
        }

        if (array_key_exists("LocalZone",$param) and $param["LocalZone"] !== null) {
            $this->LocalZone = $param["LocalZone"];
        }
    }
}
