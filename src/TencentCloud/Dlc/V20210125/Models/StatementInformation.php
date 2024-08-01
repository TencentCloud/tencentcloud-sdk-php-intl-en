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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Statement information
 *
 * @method string getTaskId() Obtain Unique ID of the SQL task
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskId(string $TaskId) Set Unique ID of the SQL task
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSQL() Obtain SQL content
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSQL(string $SQL) Set SQL content
Note: This field may return null, indicating that no valid values can be obtained.
 */
class StatementInformation extends AbstractModel
{
    /**
     * @var string Unique ID of the SQL task
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var string SQL content
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SQL;

    /**
     * @param string $TaskId Unique ID of the SQL task
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SQL SQL content
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("SQL",$param) and $param["SQL"] !== null) {
            $this->SQL = $param["SQL"];
        }
    }
}
