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
 * CreateApplicationAutoscaler request structure.
 *
 * @method string getApplicationId() Obtain Application ID
 * @method void setApplicationId(string $ApplicationId) Set Application ID
 * @method string getEnvironmentId() Obtain Environment ID
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment ID
 * @method integer getSourceChannel() Obtain Source channel. Please keep the default value.
 * @method void setSourceChannel(integer $SourceChannel) Set Source channel. Please keep the default value.
 * @method Autoscaler getAutoscaler() Obtain Auto scaling rule
 * @method void setAutoscaler(Autoscaler $Autoscaler) Set Auto scaling rule
 */
class CreateApplicationAutoscalerRequest extends AbstractModel
{
    /**
     * @var string Application ID
     */
    public $ApplicationId;

    /**
     * @var string Environment ID
     */
    public $EnvironmentId;

    /**
     * @var integer Source channel. Please keep the default value.
     */
    public $SourceChannel;

    /**
     * @var Autoscaler Auto scaling rule
     */
    public $Autoscaler;

    /**
     * @param string $ApplicationId Application ID
     * @param string $EnvironmentId Environment ID
     * @param integer $SourceChannel Source channel. Please keep the default value.
     * @param Autoscaler $Autoscaler Auto scaling rule
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }

        if (array_key_exists("Autoscaler",$param) and $param["Autoscaler"] !== null) {
            $this->Autoscaler = new Autoscaler();
            $this->Autoscaler->deserialize($param["Autoscaler"]);
        }
    }
}
