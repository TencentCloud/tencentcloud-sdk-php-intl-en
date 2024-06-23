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
 * Basic Information of Task Type
 *
 * @method string getTypeDesc() Obtain Task Type Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTypeDesc(string $TypeDesc) Set Task Type Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTypeId() Obtain Task Type ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTypeId(integer $TypeId) Set Task Type ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTypeSort() Obtain Task Type Categorization
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTypeSort(string $TypeSort) Set Task Type Categorization
Note: This field may return null, indicating that no valid value can be obtained.
 */
class TaskTypeOpsDto extends AbstractModel
{
    /**
     * @var string Task Type Description
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TypeDesc;

    /**
     * @var integer Task Type ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TypeId;

    /**
     * @var string Task Type Categorization
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TypeSort;

    /**
     * @param string $TypeDesc Task Type Description
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TypeId Task Type ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TypeSort Task Type Categorization
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
        if (array_key_exists("TypeDesc",$param) and $param["TypeDesc"] !== null) {
            $this->TypeDesc = $param["TypeDesc"];
        }

        if (array_key_exists("TypeId",$param) and $param["TypeId"] !== null) {
            $this->TypeId = $param["TypeId"];
        }

        if (array_key_exists("TypeSort",$param) and $param["TypeSort"] !== null) {
            $this->TypeSort = $param["TypeSort"];
        }
    }
}
