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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HSTS configuration
 *
 * @method string getSwitch() Obtain Specifies whether to enable. Valid values: `on` and `off`.
 * @method void setSwitch(string $Switch) Set Specifies whether to enable. Valid values: `on` and `off`.
 * @method integer getMaxAge() Obtain `MaxAge` value.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setMaxAge(integer $MaxAge) Set `MaxAge` value.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getIncludeSubDomains() Obtain Specifies whether to include subdomain names. Valid values: `on` and `off`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setIncludeSubDomains(string $IncludeSubDomains) Set Specifies whether to include subdomain names. Valid values: `on` and `off`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getPreload() Obtain Specifies whether to preload. Valid values: `on` and `off`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setPreload(string $Preload) Set Specifies whether to preload. Valid values: `on` and `off`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class Hsts extends AbstractModel
{
    /**
     * @var string Specifies whether to enable. Valid values: `on` and `off`.
     */
    public $Switch;

    /**
     * @var integer `MaxAge` value.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $MaxAge;

    /**
     * @var string Specifies whether to include subdomain names. Valid values: `on` and `off`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $IncludeSubDomains;

    /**
     * @var string Specifies whether to preload. Valid values: `on` and `off`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Preload;

    /**
     * @param string $Switch Specifies whether to enable. Valid values: `on` and `off`.
     * @param integer $MaxAge `MaxAge` value.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $IncludeSubDomains Specifies whether to include subdomain names. Valid values: `on` and `off`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Preload Specifies whether to preload. Valid values: `on` and `off`.
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("MaxAge",$param) and $param["MaxAge"] !== null) {
            $this->MaxAge = $param["MaxAge"];
        }

        if (array_key_exists("IncludeSubDomains",$param) and $param["IncludeSubDomains"] !== null) {
            $this->IncludeSubDomains = $param["IncludeSubDomains"];
        }

        if (array_key_exists("Preload",$param) and $param["Preload"] !== null) {
            $this->Preload = $param["Preload"];
        }
    }
}
