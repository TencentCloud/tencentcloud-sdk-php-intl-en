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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceReadOnlyGroup request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID
 * @method string getReadOnlyGroupId() Obtain ID of the RO group to which the read-only replica belongs
 * @method void setReadOnlyGroupId(string $ReadOnlyGroupId) Set ID of the RO group to which the read-only replica belongs
 * @method string getNewReadOnlyGroupId() Obtain ID of the new RO group into which the read-only replica will move
 * @method void setNewReadOnlyGroupId(string $NewReadOnlyGroupId) Set ID of the new RO group into which the read-only replica will move
 */
class ModifyDBInstanceReadOnlyGroupRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $DBInstanceId;

    /**
     * @var string ID of the RO group to which the read-only replica belongs
     */
    public $ReadOnlyGroupId;

    /**
     * @var string ID of the new RO group into which the read-only replica will move
     */
    public $NewReadOnlyGroupId;

    /**
     * @param string $DBInstanceId Instance ID
     * @param string $ReadOnlyGroupId ID of the RO group to which the read-only replica belongs
     * @param string $NewReadOnlyGroupId ID of the new RO group into which the read-only replica will move
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("ReadOnlyGroupId",$param) and $param["ReadOnlyGroupId"] !== null) {
            $this->ReadOnlyGroupId = $param["ReadOnlyGroupId"];
        }

        if (array_key_exists("NewReadOnlyGroupId",$param) and $param["NewReadOnlyGroupId"] !== null) {
            $this->NewReadOnlyGroupId = $param["NewReadOnlyGroupId"];
        }
    }
}
