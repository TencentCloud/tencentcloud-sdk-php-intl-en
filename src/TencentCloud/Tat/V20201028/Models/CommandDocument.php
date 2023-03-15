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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Command execution details.
 *
 * @method string getContent() Obtain Base64-encoded command.
 * @method void setContent(string $Content) Set Base64-encoded command.
 * @method string getCommandType() Obtain Command type.
 * @method void setCommandType(string $CommandType) Set Command type.
 * @method integer getTimeout() Obtain Timeout period.
 * @method void setTimeout(integer $Timeout) Set Timeout period.
 * @method string getWorkingDirectory() Obtain Execution path.
 * @method void setWorkingDirectory(string $WorkingDirectory) Set Execution path.
 * @method string getUsername() Obtain The user who executes the command.
 * @method void setUsername(string $Username) Set The user who executes the command.
 * @method string getOutputCOSBucketUrl() Obtain URL of the COS bucket to store the output
 * @method void setOutputCOSBucketUrl(string $OutputCOSBucketUrl) Set URL of the COS bucket to store the output
 * @method string getOutputCOSKeyPrefix() Obtain Prefix of the output file name 
 * @method void setOutputCOSKeyPrefix(string $OutputCOSKeyPrefix) Set Prefix of the output file name 
 */
class CommandDocument extends AbstractModel
{
    /**
     * @var string Base64-encoded command.
     */
    public $Content;

    /**
     * @var string Command type.
     */
    public $CommandType;

    /**
     * @var integer Timeout period.
     */
    public $Timeout;

    /**
     * @var string Execution path.
     */
    public $WorkingDirectory;

    /**
     * @var string The user who executes the command.
     */
    public $Username;

    /**
     * @var string URL of the COS bucket to store the output
     */
    public $OutputCOSBucketUrl;

    /**
     * @var string Prefix of the output file name 
     */
    public $OutputCOSKeyPrefix;

    /**
     * @param string $Content Base64-encoded command.
     * @param string $CommandType Command type.
     * @param integer $Timeout Timeout period.
     * @param string $WorkingDirectory Execution path.
     * @param string $Username The user who executes the command.
     * @param string $OutputCOSBucketUrl URL of the COS bucket to store the output
     * @param string $OutputCOSKeyPrefix Prefix of the output file name 
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

        if (array_key_exists("CommandType",$param) and $param["CommandType"] !== null) {
            $this->CommandType = $param["CommandType"];
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

        if (array_key_exists("OutputCOSBucketUrl",$param) and $param["OutputCOSBucketUrl"] !== null) {
            $this->OutputCOSBucketUrl = $param["OutputCOSBucketUrl"];
        }

        if (array_key_exists("OutputCOSKeyPrefix",$param) and $param["OutputCOSKeyPrefix"] !== null) {
            $this->OutputCOSKeyPrefix = $param["OutputCOSKeyPrefix"];
        }
    }
}
