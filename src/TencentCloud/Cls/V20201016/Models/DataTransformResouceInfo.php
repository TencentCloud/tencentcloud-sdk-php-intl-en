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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information about the resource for data processing
 *
 * @method string getTopicId() Obtain Target topic ID
 * @method void setTopicId(string $TopicId) Set Target topic ID
 * @method string getAlias() Obtain Alias
 * @method void setAlias(string $Alias) Set Alias
 */
class DataTransformResouceInfo extends AbstractModel
{
    /**
     * @var string Target topic ID
     */
    public $TopicId;

    /**
     * @var string Alias
     */
    public $Alias;

    /**
     * @param string $TopicId Target topic ID
     * @param string $Alias Alias
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }
    }
}
