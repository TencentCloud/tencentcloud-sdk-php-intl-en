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
 * @method integer getZoneId() 获取Unique AZ ID in a numeric form, such as 100001
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneId(integer $ZoneId) 设置Unique AZ ID in a numeric form, such as 100001
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getZone() 获取Unique AZ ID in a string form, such as ap-guangzhou-1
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZone(string $Zone) 设置Unique AZ ID in a string form, such as ap-guangzhou-1
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getZoneName() 获取AZ name, such as Guangzhou Zone 1
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneName(string $ZoneName) 设置AZ name, such as Guangzhou Zone 1
Note: This field may return null, indicating that no valid values can be obtained.
 */

/**
 *AZ information
 */
class ZoneInfo extends AbstractModel
{
    /**
     * @var integer Unique AZ ID in a numeric form, such as 100001
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneId;

    /**
     * @var string Unique AZ ID in a string form, such as ap-guangzhou-1
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Zone;

    /**
     * @var string AZ name, such as Guangzhou Zone 1
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneName;
    /**
     * @param integer $ZoneId Unique AZ ID in a numeric form, such as 100001
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Zone Unique AZ ID in a string form, such as ap-guangzhou-1
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ZoneName AZ name, such as Guangzhou Zone 1
Note: This field may return null, indicating that no valid values can be obtained.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }
    }
}
