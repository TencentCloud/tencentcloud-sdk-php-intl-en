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
namespace TencentCloud\Mdp\V20200527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateStreamPackageVodRemuxTask request structure.
 *
 * @method string getName() Obtain VOD remux task name.
 * @method void setName(string $Name) Set VOD remux task name.
 * @method string getType() Obtain The supported remuxing formats for VOD remux tasks.
Optional values: WEBVTT.
 * @method void setType(string $Type) Set The supported remuxing formats for VOD remux tasks.
Optional values: WEBVTT.
 * @method InputFileInfo getInputFileInfo() Obtain Input configuration.
 * @method void setInputFileInfo(InputFileInfo $InputFileInfo) Set Input configuration.
 * @method OutputStorage getOutputStorage() Obtain Output configuration.
 * @method void setOutputStorage(OutputStorage $OutputStorage) Set Output configuration.
 */
class CreateStreamPackageVodRemuxTaskRequest extends AbstractModel
{
    /**
     * @var string VOD remux task name.
     */
    public $Name;

    /**
     * @var string The supported remuxing formats for VOD remux tasks.
Optional values: WEBVTT.
     */
    public $Type;

    /**
     * @var InputFileInfo Input configuration.
     */
    public $InputFileInfo;

    /**
     * @var OutputStorage Output configuration.
     */
    public $OutputStorage;

    /**
     * @param string $Name VOD remux task name.
     * @param string $Type The supported remuxing formats for VOD remux tasks.
Optional values: WEBVTT.
     * @param InputFileInfo $InputFileInfo Input configuration.
     * @param OutputStorage $OutputStorage Output configuration.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("InputFileInfo",$param) and $param["InputFileInfo"] !== null) {
            $this->InputFileInfo = new InputFileInfo();
            $this->InputFileInfo->deserialize($param["InputFileInfo"]);
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new OutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }
    }
}
