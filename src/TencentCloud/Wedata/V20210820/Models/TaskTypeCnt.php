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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TaskTypeCnt
 *
 * @method string getNumber() Obtain Statistical value
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setNumber(string $Number) Set Statistical value
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTaskType() Obtain Task TypeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskType(string $TaskType) Set Task TypeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getTypeName() Obtain Type name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTypeName(string $TypeName) Set Type name
Note: This field may return null, indicating that no valid value can be obtained.
 */
class TaskTypeCnt extends AbstractModel
{
    /**
     * @var string Statistical value
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Number;

    /**
     * @var string Task TypeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskType;

    /**
     * @var string Type name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TypeName;

    /**
     * @param string $Number Statistical value
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TaskType Task TypeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $TypeName Type name
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TypeName",$param) and $param["TypeName"] !== null) {
            $this->TypeName = $param["TypeName"];
        }
    }
}
