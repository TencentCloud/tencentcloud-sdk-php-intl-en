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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Multi-Dimensional analysis dimension
 *
 * @method string getName() Obtain Analysis name
 * @method void setName(string $Name) Set Analysis name
 * @method string getType() Obtain Analysis type. Valid values: `query`, `field`
 * @method void setType(string $Type) Set Analysis type. Valid values: `query`, `field`
 * @method string getContent() Obtain Analysis content
 * @method void setContent(string $Content) Set Analysis content
 */
class AnalysisDimensional extends AbstractModel
{
    /**
     * @var string Analysis name
     */
    public $Name;

    /**
     * @var string Analysis type. Valid values: `query`, `field`
     */
    public $Type;

    /**
     * @var string Analysis content
     */
    public $Content;

    /**
     * @param string $Name Analysis name
     * @param string $Type Analysis type. Valid values: `query`, `field`
     * @param string $Content Analysis content
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
