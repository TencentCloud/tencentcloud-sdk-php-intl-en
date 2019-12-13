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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getPolicyId() 获取Policy ID
 * @method void setPolicyId(integer $PolicyId) 设置Policy ID
 * @method integer getDetachUin() 获取Sub-account UIN
 * @method void setDetachUin(integer $DetachUin) 设置Sub-account UIN
 */

/**
 *DetachUserPolicy request structure.
 */
class DetachUserPolicyRequest extends AbstractModel
{
    /**
     * @var integer Policy ID
     */
    public $PolicyId;

    /**
     * @var integer Sub-account UIN
     */
    public $DetachUin;
    /**
     * @param integer $PolicyId Policy ID
     * @param integer $DetachUin Sub-account UIN
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("DetachUin",$param) and $param["DetachUin"] !== null) {
            $this->DetachUin = $param["DetachUin"];
        }
    }
}
