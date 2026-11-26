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
 * Reasoning service deployment history.
 *
 * @method string getRecordId() Obtain Deployment record ID.
 * @method void setRecordId(string $RecordId) Set Deployment record ID.
 * @method string getOperation() Obtain Deployment operation type. Valid values:
<li>create: create;</li>
<li>update: update;</li>
<li>resume: enable;</li>
<li>stop: Disable.</li>
 * @method void setOperation(string $Operation) Set Deployment operation type. Valid values:
<li>create: create;</li>
<li>update: update;</li>
<li>resume: enable;</li>
<li>stop: Disable.</li>
 * @method string getStatus() Obtain Deployment state. Valid values:
<li>processing: deploying;</li>
<li>succeeded: Deployed successfully;</li>
<li>failed: Deployment failed.</li>
 * @method void setStatus(string $Status) Set Deployment state. Valid values:
<li>processing: deploying;</li>
<li>succeeded: Deployed successfully;</li>
<li>failed: Deployment failed.</li>
 * @method integer getDuration() Obtain Deployment duration. Unit: seconds.
 * @method void setDuration(integer $Duration) Set Deployment duration. Unit: seconds.
 * @method InferenceServiceConfig getInferenceServiceConfig() Obtain Configuration of this inference service deployment.
 * @method void setInferenceServiceConfig(InferenceServiceConfig $InferenceServiceConfig) Set Configuration of this inference service deployment.
 * @method string getCreateTime() Obtain Deployment initiation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setCreateTime(string $CreateTime) Set Deployment initiation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getActiveStatus() Obtain Whether the deployment configuration is currently effective. Value:
<li> active: effective configuration currently in use;</li>
<li> inactive: configuration of an earlier version or an abnormal version.</li>
 * @method void setActiveStatus(string $ActiveStatus) Set Whether the deployment configuration is currently effective. Value:
<li> active: effective configuration currently in use;</li>
<li> inactive: configuration of an earlier version or an abnormal version.</li>
 */
class InferenceServiceDeploymentRecord extends AbstractModel
{
    /**
     * @var string Deployment record ID.
     */
    public $RecordId;

    /**
     * @var string Deployment operation type. Valid values:
<li>create: create;</li>
<li>update: update;</li>
<li>resume: enable;</li>
<li>stop: Disable.</li>
     */
    public $Operation;

    /**
     * @var string Deployment state. Valid values:
<li>processing: deploying;</li>
<li>succeeded: Deployed successfully;</li>
<li>failed: Deployment failed.</li>
     */
    public $Status;

    /**
     * @var integer Deployment duration. Unit: seconds.
     */
    public $Duration;

    /**
     * @var InferenceServiceConfig Configuration of this inference service deployment.
     */
    public $InferenceServiceConfig;

    /**
     * @var string Deployment initiation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $CreateTime;

    /**
     * @var string Whether the deployment configuration is currently effective. Value:
<li> active: effective configuration currently in use;</li>
<li> inactive: configuration of an earlier version or an abnormal version.</li>
     */
    public $ActiveStatus;

    /**
     * @param string $RecordId Deployment record ID.
     * @param string $Operation Deployment operation type. Valid values:
<li>create: create;</li>
<li>update: update;</li>
<li>resume: enable;</li>
<li>stop: Disable.</li>
     * @param string $Status Deployment state. Valid values:
<li>processing: deploying;</li>
<li>succeeded: Deployed successfully;</li>
<li>failed: Deployment failed.</li>
     * @param integer $Duration Deployment duration. Unit: seconds.
     * @param InferenceServiceConfig $InferenceServiceConfig Configuration of this inference service deployment.
     * @param string $CreateTime Deployment initiation time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $ActiveStatus Whether the deployment configuration is currently effective. Value:
<li> active: effective configuration currently in use;</li>
<li> inactive: configuration of an earlier version or an abnormal version.</li>
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
