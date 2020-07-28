<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI-based sample management - tag operation.
 *
 * @method string getType() Obtain Operation type. Valid values: add, delete, reset.
 * @method void setType(string $Type) Set Operation type. Valid values: add, delete, reset.
 * @method array getTags() Obtain Tag. Length limit: 128 characters.
 * @method void setTags(array $Tags) Set Tag. Length limit: 128 characters.
 */
class AiSampleTagOperation extends AbstractModel
{
    /**
     * @var string Operation type. Valid values: add, delete, reset.
     */
    public $Type;

    /**
     * @var array Tag. Length limit: 128 characters.
     */
    public $Tags;

    /**
     * @param string $Type Operation type. Valid values: add, delete, reset.
     * @param array $Tags Tag. Length limit: 128 characters.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }
    }
}
