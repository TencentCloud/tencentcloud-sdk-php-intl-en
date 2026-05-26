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
 * OpenAccountCAM request structure.
 *
 * @method string getDBInstanceId() Obtain Database instance ID.
 * @method void setDBInstanceId(string $DBInstanceId) Set Database instance ID.
 * @method string getUserName() Obtain Account name that requires enabling the CAM service.
 * @method void setUserName(string $UserName) Set Account name that requires enabling the CAM service.
 */
class OpenAccountCAMRequest extends AbstractModel
{
    /**
     * @var string Database instance ID.
     */
    public $DBInstanceId;

    /**
     * @var string Account name that requires enabling the CAM service.
     */
    public $UserName;

    /**
     * @param string $DBInstanceId Database instance ID.
     * @param string $UserName Account name that requires enabling the CAM service.
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

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }
    }
}
