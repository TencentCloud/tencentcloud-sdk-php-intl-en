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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyApplicationService request structure.
 *
 * @method string getApplicationId() Obtain Application ID
 * @method void setApplicationId(string $ApplicationId) Set Application ID
 * @method string getEnvironmentId() Obtain Environment ID
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment ID
 * @method integer getSourceChannel() Obtain Source channel. Please keep the default value.
 * @method void setSourceChannel(integer $SourceChannel) Set Source channel. Please keep the default value.
 * @method EksService getService() Obtain Full access mode settings
 * @method void setService(EksService $Service) Set Full access mode settings
 * @method ServicePortMapping getData() Obtain Single entry access mode settings
 * @method void setData(ServicePortMapping $Data) Set Single entry access mode settings
 */
class ModifyApplicationServiceRequest extends AbstractModel
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
     * @var EksService Full access mode settings
     */
    public $Service;

    /**
     * @var ServicePortMapping Single entry access mode settings
     */
    public $Data;

    /**
     * @param string $ApplicationId Application ID
     * @param string $EnvironmentId Environment ID
     * @param integer $SourceChannel Source channel. Please keep the default value.
     * @param EksService $Service Full access mode settings
     * @param ServicePortMapping $Data Single entry access mode settings
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

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = new EksService();
            $this->Service->deserialize($param["Service"]);
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = new ServicePortMapping();
            $this->Data->deserialize($param["Data"]);
        }
    }
}
