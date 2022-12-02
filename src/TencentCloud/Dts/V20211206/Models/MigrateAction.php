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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task operation information, which contains the list of all operations in the migration task as well as the list of allowed operations under the current status.
 *
 * @method array getAllAction() Obtain List of all operations in the task
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAllAction(array $AllAction) Set List of all operations in the task
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAllowedAction() Obtain List of allowed operations in the task under the current status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAllowedAction(array $AllowedAction) Set List of allowed operations in the task under the current status
Note: This field may return null, indicating that no valid values can be obtained.
 */
class MigrateAction extends AbstractModel
{
    /**
     * @var array List of all operations in the task
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AllAction;

    /**
     * @var array List of allowed operations in the task under the current status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AllowedAction;

    /**
     * @param array $AllAction List of all operations in the task
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $AllowedAction List of allowed operations in the task under the current status
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
        if (array_key_exists("AllAction",$param) and $param["AllAction"] !== null) {
            $this->AllAction = $param["AllAction"];
        }

        if (array_key_exists("AllowedAction",$param) and $param["AllowedAction"] !== null) {
            $this->AllowedAction = $param["AllowedAction"];
        }
    }
}
