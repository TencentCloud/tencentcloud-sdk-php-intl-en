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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance traffic package details
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method array getTrafficPackageSet() Obtain List of traffic package details.
 * @method void setTrafficPackageSet(array $TrafficPackageSet) Set List of traffic package details.
 */
class InstanceTrafficPackage extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var array List of traffic package details.
     */
    public $TrafficPackageSet;

    /**
     * @param string $InstanceId Instance ID.
     * @param array $TrafficPackageSet List of traffic package details.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("TrafficPackageSet",$param) and $param["TrafficPackageSet"] !== null) {
            $this->TrafficPackageSet = [];
            foreach ($param["TrafficPackageSet"] as $key => $value){
                $obj = new TrafficPackage();
                $obj->deserialize($value);
                array_push($this->TrafficPackageSet, $obj);
            }
        }
    }
}
