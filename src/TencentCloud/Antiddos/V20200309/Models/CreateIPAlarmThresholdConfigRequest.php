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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateIPAlarmThresholdConfig request structure.
 *
 * @method array getIpAlarmThresholdConfigList() Obtain List of IP alarm threshold configurations
 * @method void setIpAlarmThresholdConfigList(array $IpAlarmThresholdConfigList) Set List of IP alarm threshold configurations
 */
class CreateIPAlarmThresholdConfigRequest extends AbstractModel
{
    /**
     * @var array List of IP alarm threshold configurations
     */
    public $IpAlarmThresholdConfigList;

    /**
     * @param array $IpAlarmThresholdConfigList List of IP alarm threshold configurations
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
        if (array_key_exists("IpAlarmThresholdConfigList",$param) and $param["IpAlarmThresholdConfigList"] !== null) {
            $this->IpAlarmThresholdConfigList = [];
            foreach ($param["IpAlarmThresholdConfigList"] as $key => $value){
                $obj = new IPAlarmThresholdRelation();
                $obj->deserialize($value);
                array_push($this->IpAlarmThresholdConfigList, $obj);
            }
        }
    }
}
