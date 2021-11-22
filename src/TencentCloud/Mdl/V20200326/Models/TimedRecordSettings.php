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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Timed recording settings
 *
 * @method string getAutoClear() Obtain Whether to automatically delete finished recording events. Valid values: `CLOSE`, `OPEN`. If this parameter is left empty, `CLOSE` will be used.
If it is set to `OPEN`, a recording event will be deleted 7 days after it is finished.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setAutoClear(string $AutoClear) Set Whether to automatically delete finished recording events. Valid values: `CLOSE`, `OPEN`. If this parameter is left empty, `CLOSE` will be used.
If it is set to `OPEN`, a recording event will be deleted 7 days after it is finished.
Note: This field may return `null`, indicating that no valid value was found.
 */
class TimedRecordSettings extends AbstractModel
{
    /**
     * @var string Whether to automatically delete finished recording events. Valid values: `CLOSE`, `OPEN`. If this parameter is left empty, `CLOSE` will be used.
If it is set to `OPEN`, a recording event will be deleted 7 days after it is finished.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $AutoClear;

    /**
     * @param string $AutoClear Whether to automatically delete finished recording events. Valid values: `CLOSE`, `OPEN`. If this parameter is left empty, `CLOSE` will be used.
If it is set to `OPEN`, a recording event will be deleted 7 days after it is finished.
Note: This field may return `null`, indicating that no valid value was found.
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
        if (array_key_exists("AutoClear",$param) and $param["AutoClear"] !== null) {
            $this->AutoClear = $param["AutoClear"];
        }
    }
}
