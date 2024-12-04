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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Available region information.
 *
 * @method string getRegion() Obtain Region

Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRegion(string $Region) Set Region

Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getAvailableZones() Obtain AZ information.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAvailableZones(array $AvailableZones) Set AZ information.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class AvailableRegion extends AbstractModel
{
    /**
     * @var string Region

Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Region;

    /**
     * @var array AZ information.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $AvailableZones;

    /**
     * @param string $Region Region

Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $AvailableZones AZ information.
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("AvailableZones",$param) and $param["AvailableZones"] !== null) {
            $this->AvailableZones = $param["AvailableZones"];
        }
    }
}
