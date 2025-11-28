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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RetryRocketMQDlqMessage request structure.
 *
 * @method string getClusterId() Obtain Cluster ID.
 * @method void setClusterId(string $ClusterId) Set Cluster ID.
 * @method string getNamespaceId() Obtain Specifies the namespace name.
 * @method void setNamespaceId(string $NamespaceId) Set Specifies the namespace name.
 * @method string getGroupName() Obtain Group Name
 * @method void setGroupName(string $GroupName) Set Group Name
 * @method array getMessageIds() Obtain Dead Letter Message ID
 * @method void setMessageIds(array $MessageIds) Set Dead Letter Message ID
 */
class RetryRocketMQDlqMessageRequest extends AbstractModel
{
    /**
     * @var string Cluster ID.
     */
    public $ClusterId;

    /**
     * @var string Specifies the namespace name.
     */
    public $NamespaceId;

    /**
     * @var string Group Name
     */
    public $GroupName;

    /**
     * @var array Dead Letter Message ID
     */
    public $MessageIds;

    /**
     * @param string $ClusterId Cluster ID.
     * @param string $NamespaceId Specifies the namespace name.
     * @param string $GroupName Group Name
     * @param array $MessageIds Dead Letter Message ID
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

        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("MessageIds",$param) and $param["MessageIds"] !== null) {
            $this->MessageIds = $param["MessageIds"];
        }
    }
}
