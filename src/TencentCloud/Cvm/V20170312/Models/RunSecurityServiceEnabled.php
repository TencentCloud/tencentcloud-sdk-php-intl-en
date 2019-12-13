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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method boolean getEnabled() 获取Whether to enable [Cloud Security](/document/product/296). Valid values: <br><li>TRUE: enable Cloud Security <br><li>FALSE: do not enable Cloud Security <br><br>Default value: TRUE.
 * @method void setEnabled(boolean $Enabled) 设置Whether to enable [Cloud Security](/document/product/296). Valid values: <br><li>TRUE: enable Cloud Security <br><li>FALSE: do not enable Cloud Security <br><br>Default value: TRUE.
 */

/**
 *Describes information related to the Cloud Security service.
 */
class RunSecurityServiceEnabled extends AbstractModel
{
    /**
     * @var boolean Whether to enable [Cloud Security](/document/product/296). Valid values: <br><li>TRUE: enable Cloud Security <br><li>FALSE: do not enable Cloud Security <br><br>Default value: TRUE.
     */
    public $Enabled;
    /**
     * @param boolean $Enabled Whether to enable [Cloud Security](/document/product/296). Valid values: <br><li>TRUE: enable Cloud Security <br><li>FALSE: do not enable Cloud Security <br><br>Default value: TRUE.
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
