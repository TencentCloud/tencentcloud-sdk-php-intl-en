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
 * Operation execution result.
 *
 * @method string getItemId() Obtain Operate entity ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setItemId(string $ItemId) Set Operate entity ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getItemName() Obtain Operate the entity name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setItemName(string $ItemName) Set Operate the entity name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExecutionActionId() Obtain Operation ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExecutionActionId(string $ExecutionActionId) Set Operation ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getErrorMessage() Obtain Failure information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setErrorMessage(string $ErrorMessage) Set Failure information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getOpStatus() Obtain Operation status. true: successful, false: unsuccessful.
 * @method void setOpStatus(boolean $OpStatus) Set Operation status. true: successful, false: unsuccessful.
 */
class ExecutionActionBrief extends AbstractModel
{
    /**
     * @var string Operate entity ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ItemId;

    /**
     * @var string Operate the entity name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ItemName;

    /**
     * @var string Operation ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExecutionActionId;

    /**
     * @var string Failure information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ErrorMessage;

    /**
     * @var boolean Operation status. true: successful, false: unsuccessful.
     */
    public $OpStatus;

    /**
     * @param string $ItemId Operate entity ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ItemName Operate the entity name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExecutionActionId Operation ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ErrorMessage Failure information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $OpStatus Operation status. true: successful, false: unsuccessful.
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
        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("ItemName",$param) and $param["ItemName"] !== null) {
            $this->ItemName = $param["ItemName"];
        }

        if (array_key_exists("ExecutionActionId",$param) and $param["ExecutionActionId"] !== null) {
            $this->ExecutionActionId = $param["ExecutionActionId"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("OpStatus",$param) and $param["OpStatus"] !== null) {
            $this->OpStatus = $param["OpStatus"];
        }
    }
}
