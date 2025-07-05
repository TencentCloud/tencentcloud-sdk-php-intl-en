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
 * DestroyEnvironment request structure.
 *
 * @method string getEnvironmentId() Obtain Namespace ID.
 * @method void setEnvironmentId(string $EnvironmentId) Set Namespace ID.
 * @method integer getSourceChannel() Obtain Namespace
 * @method void setSourceChannel(integer $SourceChannel) Set Namespace
 */
class DestroyEnvironmentRequest extends AbstractModel
{
    /**
     * @var string Namespace ID.
     */
    public $EnvironmentId;

    /**
     * @var integer Namespace
     */
    public $SourceChannel;

    /**
     * @param string $EnvironmentId Namespace ID.
     * @param integer $SourceChannel Namespace
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

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }
    }
}
