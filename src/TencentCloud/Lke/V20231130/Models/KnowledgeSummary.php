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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Retrieve knowledge.
 *
 * @method integer getType() Obtain 1: Q&A; 2: document fragment.
 * @method void setType(integer $Type) Set 1: Q&A; 2: document fragment.
 * @method string getContent() Obtain Knowledge content.
 * @method void setContent(string $Content) Set Knowledge content.
 */
class KnowledgeSummary extends AbstractModel
{
    /**
     * @var integer 1: Q&A; 2: document fragment.
     */
    public $Type;

    /**
     * @var string Knowledge content.
     */
    public $Content;

    /**
     * @param integer $Type 1: Q&A; 2: document fragment.
     * @param string $Content Knowledge content.
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

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
