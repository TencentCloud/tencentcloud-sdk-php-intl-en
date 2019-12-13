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
 * @method boolean getZhiTong() 获取Whether to enable VIP direct connection
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZhiTong(boolean $ZhiTong) 设置Whether to enable VIP direct connection
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTgwGroupName() 获取TgwGroup name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTgwGroupName(string $TgwGroupName) 设置TgwGroup name
Note: This field may return null, indicating that no valid values can be obtained.
 */

/**
 *Reserved field which can be ignored generally.
 */
class ExtraInfo extends AbstractModel
{
    /**
     * @var boolean Whether to enable VIP direct connection
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZhiTong;

    /**
     * @var string TgwGroup name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TgwGroupName;
    /**
     * @param boolean $ZhiTong Whether to enable VIP direct connection
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TgwGroupName TgwGroup name
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
        if (array_key_exists("ZhiTong",$param) and $param["ZhiTong"] !== null) {
            $this->ZhiTong = $param["ZhiTong"];
        }

        if (array_key_exists("TgwGroupName",$param) and $param["TgwGroupName"] !== null) {
            $this->TgwGroupName = $param["TgwGroupName"];
        }
    }
}
