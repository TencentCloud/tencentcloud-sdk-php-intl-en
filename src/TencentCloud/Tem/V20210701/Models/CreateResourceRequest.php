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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateResource request structure.
 *
 * @method string getEnvironmentId() Obtain Environment ID
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment ID
 * @method string getResourceType() Obtain Resource type. Valid values: `CFS` (file system), `CLS` (log service), `TSE_SRE` (registry)
 * @method void setResourceType(string $ResourceType) Set Resource type. Valid values: `CFS` (file system), `CLS` (log service), `TSE_SRE` (registry)
 * @method string getResourceId() Obtain Resource ID
 * @method void setResourceId(string $ResourceId) Set Resource ID
 * @method integer getSourceChannel() Obtain Source channel
 * @method void setSourceChannel(integer $SourceChannel) Set Source channel
 */
class CreateResourceRequest extends AbstractModel
{
    /**
     * @var string Environment ID
     */
    public $EnvironmentId;

    /**
     * @var string Resource type. Valid values: `CFS` (file system), `CLS` (log service), `TSE_SRE` (registry)
     */
    public $ResourceType;

    /**
     * @var string Resource ID
     */
    public $ResourceId;

    /**
     * @var integer Source channel
     */
    public $SourceChannel;

    /**
     * @param string $EnvironmentId Environment ID
     * @param string $ResourceType Resource type. Valid values: `CFS` (file system), `CLS` (log service), `TSE_SRE` (registry)
     * @param string $ResourceId Resource ID
     * @param integer $SourceChannel Source channel
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }
    }
}
