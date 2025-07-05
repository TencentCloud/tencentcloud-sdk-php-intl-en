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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUploadUrl request structure.
 *
 * @method string getTargetAction() Obtain Target API
 * @method void setTargetAction(string $TargetAction) Set Target API
 */
class CreateUploadUrlRequest extends AbstractModel
{
    /**
     * @var string Target API
     */
    public $TargetAction;

    /**
     * @param string $TargetAction Target API
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
        if (array_key_exists("TargetAction",$param) and $param["TargetAction"] !== null) {
            $this->TargetAction = $param["TargetAction"];
        }
    }
}
