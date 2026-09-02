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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Weak Password Risk Advanced Configuration
 *
 * @method integer getCheckItemId() Obtain Detection Item ID
 * @method void setCheckItemId(integer $CheckItemId) Set Detection Item ID
 * @method integer getEnable() Obtain Whether to enable. 0-Not to Enable; 1-Enable.
 * @method void setEnable(integer $Enable) Set Whether to enable. 0-Not to Enable; 1-Enable.
 */
class TaskCenterWeakPwdRiskInputParam extends AbstractModel
{
    /**
     * @var integer Detection Item ID
     */
    public $CheckItemId;

    /**
     * @var integer Whether to enable. 0-Not to Enable; 1-Enable.
     */
    public $Enable;

    /**
     * @param integer $CheckItemId Detection Item ID
     * @param integer $Enable Whether to enable. 0-Not to Enable; 1-Enable.
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
        if (array_key_exists("CheckItemId",$param) and $param["CheckItemId"] !== null) {
            $this->CheckItemId = $param["CheckItemId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
