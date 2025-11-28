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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Result after modifying the status of the migration topic.
 *
 * @method string getTopicName() Obtain Topic name
 * @method void setTopicName(string $TopicName) Set Topic name
 * @method boolean getSuccess() Obtain Success status
 * @method void setSuccess(boolean $Success) Set Success status
 * @method string getNamespace() Obtain Namespace. valid only for 4.x.
 * @method void setNamespace(string $Namespace) Set Namespace. valid only for 4.x.
 */
class TopicStageChangeResult extends AbstractModel
{
    /**
     * @var string Topic name
     */
    public $TopicName;

    /**
     * @var boolean Success status
     */
    public $Success;

    /**
     * @var string Namespace. valid only for 4.x.
     */
    public $Namespace;

    /**
     * @param string $TopicName Topic name
     * @param boolean $Success Success status
     * @param string $Namespace Namespace. valid only for 4.x.
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
        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Success",$param) and $param["Success"] !== null) {
            $this->Success = $param["Success"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }
    }
}
