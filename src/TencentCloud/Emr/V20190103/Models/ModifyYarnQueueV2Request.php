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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyYarnQueueV2 request structure.
 *
 * @method string getInstanceId() Obtain Cluster ID
 * @method void setInstanceId(string $InstanceId) Set Cluster ID
 * @method string getScheduler() Obtain Scheduler type. The values are as follows:

1. capacity
2. fair
 * @method void setScheduler(string $Scheduler) Set Scheduler type. The values are as follows:

1. capacity
2. fair
 * @method array getConfigModifyInfoList() Obtain Resource pool data
 * @method void setConfigModifyInfoList(array $ConfigModifyInfoList) Set Resource pool data
 */
class ModifyYarnQueueV2Request extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $InstanceId;

    /**
     * @var string Scheduler type. The values are as follows:

1. capacity
2. fair
     */
    public $Scheduler;

    /**
     * @var array Resource pool data
     */
    public $ConfigModifyInfoList;

    /**
     * @param string $InstanceId Cluster ID
     * @param string $Scheduler Scheduler type. The values are as follows:

1. capacity
2. fair
     * @param array $ConfigModifyInfoList Resource pool data
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

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("ConfigModifyInfoList",$param) and $param["ConfigModifyInfoList"] !== null) {
            $this->ConfigModifyInfoList = [];
            foreach ($param["ConfigModifyInfoList"] as $key => $value){
                $obj = new ConfigModifyInfoV2();
                $obj->deserialize($value);
                array_push($this->ConfigModifyInfoList, $obj);
            }
        }
    }
}
