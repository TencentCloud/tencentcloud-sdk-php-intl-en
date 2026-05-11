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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Image processing configuration.
 *
 * @method integer getDefinition() Obtain Image asynchronous processing template ID.
 * @method void setDefinition(integer $Definition) Set Image asynchronous processing template ID.
 * @method ProcessImageAsyncInputExtendedParameter getExtendedParameter() Obtain Extended parameters for asynchronous image processing.
 * @method void setExtendedParameter(ProcessImageAsyncInputExtendedParameter $ExtendedParameter) Set Extended parameters for asynchronous image processing.
 */
class ProcessImageAsyncTaskInput extends AbstractModel
{
    /**
     * @var integer Image asynchronous processing template ID.
     */
    public $Definition;

    /**
     * @var ProcessImageAsyncInputExtendedParameter Extended parameters for asynchronous image processing.
     */
    public $ExtendedParameter;

    /**
     * @param integer $Definition Image asynchronous processing template ID.
     * @param ProcessImageAsyncInputExtendedParameter $ExtendedParameter Extended parameters for asynchronous image processing.
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("ExtendedParameter",$param) and $param["ExtendedParameter"] !== null) {
            $this->ExtendedParameter = new ProcessImageAsyncInputExtendedParameter();
            $this->ExtendedParameter->deserialize($param["ExtendedParameter"]);
        }
    }
}
