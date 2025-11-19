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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteApmSampleConfig request structure.
 *
 * @method string getInstanceId() Obtain Business system ID
 * @method void setInstanceId(string $InstanceId) Set Business system ID
 * @method string getSampleName() Obtain Sampling rule name.
 * @method void setSampleName(string $SampleName) Set Sampling rule name.
 */
class DeleteApmSampleConfigRequest extends AbstractModel
{
    /**
     * @var string Business system ID
     */
    public $InstanceId;

    /**
     * @var string Sampling rule name.
     */
    public $SampleName;

    /**
     * @param string $InstanceId Business system ID
     * @param string $SampleName Sampling rule name.
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

        if (array_key_exists("SampleName",$param) and $param["SampleName"] !== null) {
            $this->SampleName = $param["SampleName"];
        }
    }
}
