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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyWebHookPolicyStatus request structure.
 *
 * @method integer getId() Obtain id
 * @method void setId(integer $Id) Set id
 * @method integer getIsDisabled() Obtain Switch: 1 - disabled; 0 - enabled
 * @method void setIsDisabled(integer $IsDisabled) Set Switch: 1 - disabled; 0 - enabled
 */
class ModifyWebHookPolicyStatusRequest extends AbstractModel
{
    /**
     * @var integer id
     */
    public $Id;

    /**
     * @var integer Switch: 1 - disabled; 0 - enabled
     */
    public $IsDisabled;

    /**
     * @param integer $Id id
     * @param integer $IsDisabled Switch: 1 - disabled; 0 - enabled
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("IsDisabled",$param) and $param["IsDisabled"] !== null) {
            $this->IsDisabled = $param["IsDisabled"];
        }
    }
}
