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
 * @method string getProductName() Obtain Associated product name. currently only supports Prometheus.
 * @method void setProductName(string $ProductName) Set Associated product name. currently only supports Prometheus.
 * @method integer getStatus() Obtain Status of the association relationship: // association status: 1 (enabled), 2 (disabled), 4 (deleted).
 * @method void setStatus(integer $Status) Set Status of the association relationship: // association status: 1 (enabled), 2 (disabled), 4 (deleted).
 * @method string getInstanceId() Obtain Business system ID
 * @method void setInstanceId(string $InstanceId) Set Business system ID
 * @method string getPeerId() Obtain Associated product instance ID.
 * @method void setPeerId(string $PeerId) Set Associated product instance ID.
 * @method string getTopic() Obtain Specifies the CKafka message topic.
 * @method void setTopic(string $Topic) Set Specifies the CKafka message topic.
 */
class ModifyApmAssociationRequest extends AbstractModel
{
    /**
     * @var string Associated product name. currently only supports Prometheus.
     */
    public $ProductName;

    /**
     * @var integer Status of the association relationship: // association status: 1 (enabled), 2 (disabled), 4 (deleted).
     */
    public $Status;

    /**
     * @var string Business system ID
     */
    public $InstanceId;

    /**
     * @var string Associated product instance ID.
     */
    public $PeerId;

    /**
     * @var string Specifies the CKafka message topic.
     */
    public $Topic;

    /**
     * @param string $ProductName Associated product name. currently only supports Prometheus.
     * @param integer $Status Status of the association relationship: // association status: 1 (enabled), 2 (disabled), 4 (deleted).
     * @param string $InstanceId Business system ID
     * @param string $PeerId Associated product instance ID.
     * @param string $Topic Specifies the CKafka message topic.
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
    }
}
