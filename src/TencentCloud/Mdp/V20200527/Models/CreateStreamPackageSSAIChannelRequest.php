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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateStreamPackageSSAIChannel request structure.
 *
 * @method string getName() Obtain Ad insertion configuration name, globally unique, cannot be repeated with other configurations
 * @method void setName(string $Name) Set Ad insertion configuration name, globally unique, cannot be repeated with other configurations
 * @method string getContentSource() Obtain Source stream url prefix
 * @method void setContentSource(string $ContentSource) Set Source stream url prefix
 * @method SSAIConf getSSAIInfo() Obtain Ad insertion configuration information
 * @method void setSSAIInfo(SSAIConf $SSAIInfo) Set Ad insertion configuration information
 */
class CreateStreamPackageSSAIChannelRequest extends AbstractModel
{
    /**
     * @var string Ad insertion configuration name, globally unique, cannot be repeated with other configurations
     */
    public $Name;

    /**
     * @var string Source stream url prefix
     */
    public $ContentSource;

    /**
     * @var SSAIConf Ad insertion configuration information
     */
    public $SSAIInfo;

    /**
     * @param string $Name Ad insertion configuration name, globally unique, cannot be repeated with other configurations
     * @param string $ContentSource Source stream url prefix
     * @param SSAIConf $SSAIInfo Ad insertion configuration information
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

        if (array_key_exists("ContentSource",$param) and $param["ContentSource"] !== null) {
            $this->ContentSource = $param["ContentSource"];
        }

        if (array_key_exists("SSAIInfo",$param) and $param["SSAIInfo"] !== null) {
            $this->SSAIInfo = new SSAIConf();
            $this->SSAIInfo->deserialize($param["SSAIInfo"]);
        }
    }
}
