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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceName request structure.
 *
 * @method string getInstanceId() Obtain ID of instance to be modified, which is in the format of `tdsql-ow728lmc` and can be obtained through the `DescribeDBInstances` API.
 * @method void setInstanceId(string $InstanceId) Set ID of instance to be modified, which is in the format of `tdsql-ow728lmc` and can be obtained through the `DescribeDBInstances` API.
 * @method string getInstanceName() Obtain New name of instance, which can contain letters, digits, underscores, and hyphens.
 * @method void setInstanceName(string $InstanceName) Set New name of instance, which can contain letters, digits, underscores, and hyphens.
 */
class ModifyDBInstanceNameRequest extends AbstractModel
{
    /**
     * @var string ID of instance to be modified, which is in the format of `tdsql-ow728lmc` and can be obtained through the `DescribeDBInstances` API.
     */
    public $InstanceId;

    /**
     * @var string New name of instance, which can contain letters, digits, underscores, and hyphens.
     */
    public $InstanceName;

    /**
     * @param string $InstanceId ID of instance to be modified, which is in the format of `tdsql-ow728lmc` and can be obtained through the `DescribeDBInstances` API.
     * @param string $InstanceName New name of instance, which can contain letters, digits, underscores, and hyphens.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }
    }
}
