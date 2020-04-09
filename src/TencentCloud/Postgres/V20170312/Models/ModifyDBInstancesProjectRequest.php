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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstancesProject request structure.
 *
 * @method array getDBInstanceIdSet() Obtain TencentDB for PostgreSQL instance ID array
 * @method void setDBInstanceIdSet(array $DBInstanceIdSet) Set TencentDB for PostgreSQL instance ID array
 * @method string getProjectId() Obtain New project ID of TencentDB for PostgreSQL instance
 * @method void setProjectId(string $ProjectId) Set New project ID of TencentDB for PostgreSQL instance
 */
class ModifyDBInstancesProjectRequest extends AbstractModel
{
    /**
     * @var array TencentDB for PostgreSQL instance ID array
     */
    public $DBInstanceIdSet;

    /**
     * @var string New project ID of TencentDB for PostgreSQL instance
     */
    public $ProjectId;

    /**
     * @param array $DBInstanceIdSet TencentDB for PostgreSQL instance ID array
     * @param string $ProjectId New project ID of TencentDB for PostgreSQL instance
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
        if (array_key_exists("DBInstanceIdSet",$param) and $param["DBInstanceIdSet"] !== null) {
            $this->DBInstanceIdSet = $param["DBInstanceIdSet"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
