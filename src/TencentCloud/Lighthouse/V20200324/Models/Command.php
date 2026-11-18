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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getContent() Obtain 
 * @method void setContent(string $Content) Set 
 * @method integer getTimeout() Obtain 
 * @method void setTimeout(integer $Timeout) Set 
 * @method string getWorkingDirectory() Obtain 
 * @method void setWorkingDirectory(string $WorkingDirectory) Set 
 * @method string getUsername() Obtain 
 * @method void setUsername(string $Username) Set 
 */
class Command extends AbstractModel
{
    /**
     * @var string 
     */
    public $Content;

    /**
     * @var integer 
     */
    public $Timeout;

    /**
     * @var string 
     */
    public $WorkingDirectory;

    /**
     * @var string 
     */
    public $Username;

    /**
     * @param string $Content 
     * @param integer $Timeout 
     * @param string $WorkingDirectory 
     * @param string $Username 
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("WorkingDirectory",$param) and $param["WorkingDirectory"] !== null) {
            $this->WorkingDirectory = $param["WorkingDirectory"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }
    }
}
