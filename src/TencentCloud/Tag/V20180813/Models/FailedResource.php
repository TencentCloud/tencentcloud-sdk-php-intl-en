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
namespace TencentCloud\Tag\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of failed resources.
This is returned when resource tag binding or unbinding fails.
 *
 * @method string getResource() Obtain Six-segment descriptions of failed resources
 * @method void setResource(string $Resource) Set Six-segment descriptions of failed resources
 * @method string getCode() Obtain Error code
 * @method void setCode(string $Code) Set Error code
 * @method string getMessage() Obtain Error message
 * @method void setMessage(string $Message) Set Error message
 */
class FailedResource extends AbstractModel
{
    /**
     * @var string Six-segment descriptions of failed resources
     */
    public $Resource;

    /**
     * @var string Error code
     */
    public $Code;

    /**
     * @var string Error message
     */
    public $Message;

    /**
     * @param string $Resource Six-segment descriptions of failed resources
     * @param string $Code Error code
     * @param string $Message Error message
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
