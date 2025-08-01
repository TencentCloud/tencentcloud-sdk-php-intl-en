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
 * DescribeApplicationServiceList request structure.
 *
 * @method string getEnvironmentId() Obtain ID of the environment
 * @method void setEnvironmentId(string $EnvironmentId) Set ID of the environment
 * @method string getApplicationId() Obtain ID of the application
 * @method void setApplicationId(string $ApplicationId) Set ID of the application
 * @method integer getSourceChannel() Obtain xx
 * @method void setSourceChannel(integer $SourceChannel) Set xx
 */
class DescribeApplicationServiceListRequest extends AbstractModel
{
    /**
     * @var string ID of the environment
     */
    public $EnvironmentId;

    /**
     * @var string ID of the application
     */
    public $ApplicationId;

    /**
     * @var integer xx
     */
    public $SourceChannel;

    /**
     * @param string $EnvironmentId ID of the environment
     * @param string $ApplicationId ID of the application
     * @param integer $SourceChannel xx
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

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }
    }
}
