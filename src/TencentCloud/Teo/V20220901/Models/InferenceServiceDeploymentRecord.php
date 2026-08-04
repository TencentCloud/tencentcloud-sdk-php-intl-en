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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Service deployment history record for reasoning.
 *
 * @method string getRecordId() Obtain Deployment record ID.
 * @method void setRecordId(string $RecordId) Set Deployment record ID.
 * @method string getOperation() Obtain Deployment operation type, value:
<li>create: creation</li>
<li>update: refresh;</li>
<li>resume: enabled;</li>
<li>stop: disable.</li>
 * @method void setOperation(string $Operation) Set Deployment operation type, value:
<li>create: creation</li>
<li>update: refresh;</li>
<li>resume: enabled;</li>
<li>stop: disable.</li>
 * @method string getStatus() Obtain Deployment state. Valid values:
<li>processing: deployment in progress;</li>
<li>succeeded: Deployment successful;</li>
<li>failed: Deployment failed.</li>
 * @method void setStatus(string $Status) Set Deployment state. Valid values:
<li>processing: deployment in progress;</li>
<li>succeeded: Deployment successful;</li>
<li>failed: Deployment failed.</li>
 * @method integer getDuration() Obtain Deployment duration, unit: second.
 * @method void setDuration(integer $Duration) Set Deployment duration, unit: second.
 * @method InferenceServiceConfig getInferenceServiceConfig() Obtain Configuration for this service deployment.
 * @method void setInferenceServiceConfig(InferenceServiceConfig $InferenceServiceConfig) Set Configuration for this service deployment.
 * @method string getCreateTime() Obtain Deployment initiation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setCreateTime(string $CreateTime) Set Deployment initiation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getActiveStatus() Obtain Whether the deployment configuration is the effective configuration. Value:
<li> active: effective configuration;</li>
<li> inactive: earlier version or abnormal version configuration.</li>
 * @method void setActiveStatus(string $ActiveStatus) Set Whether the deployment configuration is the effective configuration. Value:
<li> active: effective configuration;</li>
<li> inactive: earlier version or abnormal version configuration.</li>
 */
class InferenceServiceDeploymentRecord extends AbstractModel
{
    /**
     * @var string Deployment record ID.
     */
    public $RecordId;

    /**
     * @var string Deployment operation type, value:
<li>create: creation</li>
<li>update: refresh;</li>
<li>resume: enabled;</li>
<li>stop: disable.</li>
     */
    public $Operation;

    /**
     * @var string Deployment state. Valid values:
<li>processing: deployment in progress;</li>
<li>succeeded: Deployment successful;</li>
<li>failed: Deployment failed.</li>
     */
    public $Status;

    /**
     * @var integer Deployment duration, unit: second.
     */
    public $Duration;

    /**
     * @var InferenceServiceConfig Configuration for this service deployment.
     */
    public $InferenceServiceConfig;

    /**
     * @var string Deployment initiation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $CreateTime;

    /**
     * @var string Whether the deployment configuration is the effective configuration. Value:
<li> active: effective configuration;</li>
<li> inactive: earlier version or abnormal version configuration.</li>
     */
    public $ActiveStatus;

    /**
     * @param string $RecordId Deployment record ID.
     * @param string $Operation Deployment operation type, value:
<li>create: creation</li>
<li>update: refresh;</li>
<li>resume: enabled;</li>
<li>stop: disable.</li>
     * @param string $Status Deployment state. Valid values:
<li>processing: deployment in progress;</li>
<li>succeeded: Deployment successful;</li>
<li>failed: Deployment failed.</li>
     * @param integer $Duration Deployment duration, unit: second.
     * @param InferenceServiceConfig $InferenceServiceConfig Configuration for this service deployment.
     * @param string $CreateTime Deployment initiation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $ActiveStatus Whether the deployment configuration is the effective configuration. Value:
<li> active: effective configuration;</li>
<li> inactive: earlier version or abnormal version configuration.</li>
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
        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("InferenceServiceConfig",$param) and $param["InferenceServiceConfig"] !== null) {
            $this->InferenceServiceConfig = new InferenceServiceConfig();
            $this->InferenceServiceConfig->deserialize($param["InferenceServiceConfig"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ActiveStatus",$param) and $param["ActiveStatus"] !== null) {
            $this->ActiveStatus = $param["ActiveStatus"];
        }
    }
}
