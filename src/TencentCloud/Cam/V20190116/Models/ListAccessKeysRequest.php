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
 * ListAccessKeys request structure.
 *
 * @method integer getTargetUin() Obtain `UIN` of the specified user. If this parameter is left empty, access keys of the current user will be listed by default
 * @method void setTargetUin(integer $TargetUin) Set `UIN` of the specified user. If this parameter is left empty, access keys of the current user will be listed by default
 */
class ListAccessKeysRequest extends AbstractModel
{
    /**
     * @var integer `UIN` of the specified user. If this parameter is left empty, access keys of the current user will be listed by default
     */
    public $TargetUin;

    /**
     * @param integer $TargetUin `UIN` of the specified user. If this parameter is left empty, access keys of the current user will be listed by default
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
        if (array_key_exists("TargetUin",$param) and $param["TargetUin"] !== null) {
            $this->TargetUin = $param["TargetUin"];
        }
    }
}
