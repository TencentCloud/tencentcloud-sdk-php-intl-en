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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The policy to deal with resources in the cluster when the cluster is deleted.
 *
 * @method string getResourceType() Obtain Resource type, for example `CBS`
 * @method void setResourceType(string $ResourceType) Set Resource type, for example `CBS`
 * @method string getDeleteMode() Obtain Specifies the policy to deal with resources in the cluster when the cluster is deleted. It can be `terminate` or `retain`.
 * @method void setDeleteMode(string $DeleteMode) Set Specifies the policy to deal with resources in the cluster when the cluster is deleted. It can be `terminate` or `retain`.
 */
class ResourceDeleteOption extends AbstractModel
{
    /**
     * @var string Resource type, for example `CBS`
     */
    public $ResourceType;

    /**
     * @var string Specifies the policy to deal with resources in the cluster when the cluster is deleted. It can be `terminate` or `retain`.
     */
    public $DeleteMode;

    /**
     * @param string $ResourceType Resource type, for example `CBS`
     * @param string $DeleteMode Specifies the policy to deal with resources in the cluster when the cluster is deleted. It can be `terminate` or `retain`.
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("DeleteMode",$param) and $param["DeleteMode"] !== null) {
            $this->DeleteMode = $param["DeleteMode"];
        }
    }
}
