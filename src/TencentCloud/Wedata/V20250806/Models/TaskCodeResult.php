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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task code.
 *
 * @method string getCodeInfo() Obtain Code content.
 * @method void setCodeInfo(string $CodeInfo) Set Code content.
 * @method string getCodeFileSize() Obtain Code file size. unit: KB.
 * @method void setCodeFileSize(string $CodeFileSize) Set Code file size. unit: KB.
 */
class TaskCodeResult extends AbstractModel
{
    /**
     * @var string Code content.
     */
    public $CodeInfo;

    /**
     * @var string Code file size. unit: KB.
     */
    public $CodeFileSize;

    /**
     * @param string $CodeInfo Code content.
     * @param string $CodeFileSize Code file size. unit: KB.
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
        if (array_key_exists("CodeInfo",$param) and $param["CodeInfo"] !== null) {
            $this->CodeInfo = $param["CodeInfo"];
        }

        if (array_key_exists("CodeFileSize",$param) and $param["CodeFileSize"] !== null) {
            $this->CodeFileSize = $param["CodeFileSize"];
        }
    }
}
