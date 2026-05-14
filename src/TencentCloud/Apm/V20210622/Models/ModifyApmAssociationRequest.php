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
 * ModifyApmAssociation request structure.
 *
 * @method string getProductName() Obtain <p>Associated product name, currently only support Prometheus, CKafka</p>
 * @method void setProductName(string $ProductName) Set <p>Associated product name, currently only support Prometheus, CKafka</p>
 * @method integer getStatus() Obtain <p>Status of the association relationship: // Association relationship status: 1 (enabled), 2 (disabled)</p>
 * @method void setStatus(integer $Status) Set <p>Status of the association relationship: // Association relationship status: 1 (enabled), 2 (disabled)</p>
 * @method string getInstanceId() Obtain <p>Business system ID</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Business system ID</p>
 * @method string getPeerId() Obtain <p>ID of the associated product instance</p>
 * @method void setPeerId(string $PeerId) Set <p>ID of the associated product instance</p>
 * @method string getTopic() Obtain <p>CKafka message topic</p>
 * @method void setTopic(string $Topic) Set <p>CKafka message topic</p>
 * @method string getMetricTopic() Obtain <p>Ckafka message topic</p>
 * @method void setMetricTopic(string $MetricTopic) Set <p>Ckafka message topic</p>
 */
class ModifyApmAssociationRequest extends AbstractModel
{
    /**
     * @var string <p>Associated product name, currently only support Prometheus, CKafka</p>
     */
    public $ProductName;

    /**
     * @var integer <p>Status of the association relationship: // Association relationship status: 1 (enabled), 2 (disabled)</p>
     */
    public $Status;

    /**
     * @var string <p>Business system ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>ID of the associated product instance</p>
     */
    public $PeerId;

    /**
     * @var string <p>CKafka message topic</p>
     */
    public $Topic;

    /**
     * @var string <p>Ckafka message topic</p>
     */
    public $MetricTopic;

    /**
     * @param string $ProductName <p>Associated product name, currently only support Prometheus, CKafka</p>
     * @param integer $Status <p>Status of the association relationship: // Association relationship status: 1 (enabled), 2 (disabled)</p>
     * @param string $InstanceId <p>Business system ID</p>
     * @param string $PeerId <p>ID of the associated product instance</p>
     * @param string $Topic <p>CKafka message topic</p>
     * @param string $MetricTopic <p>Ckafka message topic</p>
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
        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PeerId",$param) and $param["PeerId"] !== null) {
            $this->PeerId = $param["PeerId"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("MetricTopic",$param) and $param["MetricTopic"] !== null) {
            $this->MetricTopic = $param["MetricTopic"];
        }
    }
}
