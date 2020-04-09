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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceProject request structure.
 *
 * @method array getInstanceIdSet() Obtain Array of instance IDs in the format of mssql-j8kv137v
 * @method void setInstanceIdSet(array $InstanceIdSet) Set Array of instance IDs in the format of mssql-j8kv137v
 * @method integer getProjectId() Obtain Project ID. If this parameter is 0, the default project will be used
 * @method void setProjectId(integer $ProjectId) Set Project ID. If this parameter is 0, the default project will be used
 */
class ModifyDBInstanceProjectRequest extends AbstractModel
{
    /**
     * @var array Array of instance IDs in the format of mssql-j8kv137v
     */
    public $InstanceIdSet;

    /**
     * @var integer Project ID. If this parameter is 0, the default project will be used
     */
    public $ProjectId;

    /**
     * @param array $InstanceIdSet Array of instance IDs in the format of mssql-j8kv137v
     * @param integer $ProjectId Project ID. If this parameter is 0, the default project will be used
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
        if (array_key_exists("InstanceIdSet",$param) and $param["InstanceIdSet"] !== null) {
            $this->InstanceIdSet = $param["InstanceIdSet"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
