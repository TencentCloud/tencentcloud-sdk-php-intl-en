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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Core file monitoring rules
 *
 * @method string getProcessPath() Obtain Process path
 * @method void setProcessPath(string $ProcessPath) Set Process path
 * @method string getTarget() Obtain Accessed file path
 * @method void setTarget(string $Target) Set Accessed file path
 * @method string getAction() Obtain Recommended action: skip: skip; alarm: alert
 * @method void setAction(string $Action) Set Recommended action: skip: skip; alarm: alert
 * @method string getFileAction() Obtain Monitoring behavior
<li>read: read file</li>
<li>write: modify file</li>
<li>read-write: read and modify file</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileAction(string $FileAction) Set Monitoring behavior
<li>read: read file</li>
<li>write: modify file</li>
<li>read-write: read and modify file</li>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class FileTamperRule extends AbstractModel
{
    /**
     * @var string Process path
     */
    public $ProcessPath;

    /**
     * @var string Accessed file path
     */
    public $Target;

    /**
     * @var string Recommended action: skip: skip; alarm: alert
     */
    public $Action;

    /**
     * @var string Monitoring behavior
<li>read: read file</li>
<li>write: modify file</li>
<li>read-write: read and modify file</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileAction;

    /**
     * @param string $ProcessPath Process path
     * @param string $Target Accessed file path
     * @param string $Action Recommended action: skip: skip; alarm: alert
     * @param string $FileAction Monitoring behavior
<li>read: read file</li>
<li>write: modify file</li>
<li>read-write: read and modify file</li>
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ProcessPath",$param) and $param["ProcessPath"] !== null) {
            $this->ProcessPath = $param["ProcessPath"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("FileAction",$param) and $param["FileAction"] !== null) {
            $this->FileAction = $param["FileAction"];
        }
    }
}
