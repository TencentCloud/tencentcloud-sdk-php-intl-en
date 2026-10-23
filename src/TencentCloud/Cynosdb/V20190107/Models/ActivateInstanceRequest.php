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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ActivateInstance request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method array getInstanceIdList() Obtain Instance ID list. A single instance ID is in the format of cynosdbmysql-ins-n7ocdslw, identical to the instance ID displayed on the TDSQL-C MySQL database console. You can obtain it through the query instance list API. Its value is the InstanceId field in the output parameter.
 * @method void setInstanceIdList(array $InstanceIdList) Set Instance ID list. A single instance ID is in the format of cynosdbmysql-ins-n7ocdslw, identical to the instance ID displayed on the TDSQL-C MySQL database console. You can obtain it through the query instance list API. Its value is the InstanceId field in the output parameter.
 */
class ActivateInstanceRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var array Instance ID list. A single instance ID is in the format of cynosdbmysql-ins-n7ocdslw, identical to the instance ID displayed on the TDSQL-C MySQL database console. You can obtain it through the query instance list API. Its value is the InstanceId field in the output parameter.
     */
    public $InstanceIdList;

    /**
     * @param string $ClusterId Cluster ID
     * @param array $InstanceIdList Instance ID list. A single instance ID is in the format of cynosdbmysql-ins-n7ocdslw, identical to the instance ID displayed on the TDSQL-C MySQL database console. You can obtain it through the query instance list API. Its value is the InstanceId field in the output parameter.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("InstanceIdList",$param) and $param["InstanceIdList"] !== null) {
            $this->InstanceIdList = $param["InstanceIdList"];
        }
    }
}
