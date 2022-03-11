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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Supported OS type. Valid values: Windows, Linux.
 *
 * @method array getWindows() Obtain Supported Windows OS
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setWindows(array $Windows) Set Supported Windows OS
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getLinux() Obtain Supported Linux OS
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLinux(array $Linux) Set Supported Linux OS
Note: this field may return null, indicating that no valid values can be obtained.
 */
class ImageOsList extends AbstractModel
{
    /**
     * @var array Supported Windows OS
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Windows;

    /**
     * @var array Supported Linux OS
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Linux;

    /**
     * @param array $Windows Supported Windows OS
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Linux Supported Linux OS
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Windows",$param) and $param["Windows"] !== null) {
            $this->Windows = $param["Windows"];
        }

        if (array_key_exists("Linux",$param) and $param["Linux"] !== null) {
            $this->Linux = $param["Linux"];
        }
    }
}
