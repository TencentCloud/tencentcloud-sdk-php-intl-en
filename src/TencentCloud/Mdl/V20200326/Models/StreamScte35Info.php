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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SCTE-35 information.
 *
 * @method integer getPid() Obtain SCTE-35 `Pid`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPid(integer $Pid) Set SCTE-35 `Pid`.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class StreamScte35Info extends AbstractModel
{
    /**
     * @var integer SCTE-35 `Pid`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Pid;

    /**
     * @param integer $Pid SCTE-35 `Pid`.
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
        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }
    }
}
