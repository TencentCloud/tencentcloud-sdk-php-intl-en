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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AttachInstances request structure.
 *
 * @method string getEnvId() Obtain Compute environment ID
 * @method void setEnvId(string $EnvId) Set Compute environment ID
 * @method array getInstances() Obtain List of instances that added to the compute environment
 * @method void setInstances(array $Instances) Set List of instances that added to the compute environment
 */
class AttachInstancesRequest extends AbstractModel
{
    /**
     * @var string Compute environment ID
     */
    public $EnvId;

    /**
     * @var array List of instances that added to the compute environment
     */
    public $Instances;

    /**
     * @param string $EnvId Compute environment ID
     * @param array $Instances List of instances that added to the compute environment
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("Instances",$param) and $param["Instances"] !== null) {
            $this->Instances = [];
            foreach ($param["Instances"] as $key => $value){
                $obj = new Instance();
                $obj->deserialize($value);
                array_push($this->Instances, $obj);
            }
        }
    }
}
