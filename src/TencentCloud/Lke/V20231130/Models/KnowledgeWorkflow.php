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
 * Q&A knowledge library workflow configuration.
 *
 * @method boolean getIsEnabled() Obtain Whether to enable the workflow.
 * @method void setIsEnabled(boolean $IsEnabled) Set Whether to enable the workflow.
 * @method boolean getUsePdl() Obtain Whether to enable PDL.
 * @method void setUsePdl(boolean $UsePdl) Set Whether to enable PDL.
 */
class KnowledgeWorkflow extends AbstractModel
{
    /**
     * @var boolean Whether to enable the workflow.
     */
    public $IsEnabled;

    /**
     * @var boolean Whether to enable PDL.
     */
    public $UsePdl;

    /**
     * @param boolean $IsEnabled Whether to enable the workflow.
     * @param boolean $UsePdl Whether to enable PDL.
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
        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("UsePdl",$param) and $param["UsePdl"] !== null) {
            $this->UsePdl = $param["UsePdl"];
        }
    }
}
