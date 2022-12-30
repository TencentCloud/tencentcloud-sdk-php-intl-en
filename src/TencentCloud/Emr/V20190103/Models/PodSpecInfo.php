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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Other pod information.
 *
 * @method PodNewSpec getPodSpec() Obtain The specified information such as pod spec and source for scale-out with pod resources.
 * @method void setPodSpec(PodNewSpec $PodSpec) Set The specified information such as pod spec and source for scale-out with pod resources.
 * @method PodNewParameter getPodParameter() Obtain The custom pod permission and parameter.
 * @method void setPodParameter(PodNewParameter $PodParameter) Set The custom pod permission and parameter.
 */
class PodSpecInfo extends AbstractModel
{
    /**
     * @var PodNewSpec The specified information such as pod spec and source for scale-out with pod resources.
     */
    public $PodSpec;

    /**
     * @var PodNewParameter The custom pod permission and parameter.
     */
    public $PodParameter;

    /**
     * @param PodNewSpec $PodSpec The specified information such as pod spec and source for scale-out with pod resources.
     * @param PodNewParameter $PodParameter The custom pod permission and parameter.
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
        if (array_key_exists("PodSpec",$param) and $param["PodSpec"] !== null) {
            $this->PodSpec = new PodNewSpec();
            $this->PodSpec->deserialize($param["PodSpec"]);
        }

        if (array_key_exists("PodParameter",$param) and $param["PodParameter"] !== null) {
            $this->PodParameter = new PodNewParameter();
            $this->PodParameter->deserialize($param["PodParameter"]);
        }
    }
}
