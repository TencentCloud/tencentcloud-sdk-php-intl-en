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
 * Shows the association between the apm business system and other cloud products in the return format.
 *
 * @method string getPeerId() Obtain Associated product instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPeerId(string $PeerId) Set Associated product instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Association status: 1 (enabled), 2 (disabled), 3 (invalid).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Association status: 1 (enabled), 2 (disabled), 3 (invalid).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTopic() Obtain Specifies the CKafka message topic.
 * @method void setTopic(string $Topic) Set Specifies the CKafka message topic.
 */
class ApmAssociation extends AbstractModel
{
    /**
     * @var string Associated product instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PeerId;

    /**
     * @var integer Association status: 1 (enabled), 2 (disabled), 3 (invalid).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Specifies the CKafka message topic.
     */
    public $Topic;

    /**
     * @param string $PeerId Associated product instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Association status: 1 (enabled), 2 (disabled), 3 (invalid).
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("PeerId",$param) and $param["PeerId"] !== null) {
            $this->PeerId = $param["PeerId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }
    }
}
