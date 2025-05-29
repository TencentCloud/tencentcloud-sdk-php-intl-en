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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Call type.
 *
 * @method string getId() Obtain Associated ID.
 * @method void setId(string $Id) Set Associated ID.
 * @method string getCallTime() Obtain Call time.
 * @method void setCallTime(string $CallTime) Set Call time.
 * @method float getTotalTokenUsage() Obtain Total token consumption.
 * @method void setTotalTokenUsage(float $TotalTokenUsage) Set Total token consumption.
 * @method float getInputTokenUsage() Obtain Token consumption for input.
 * @method void setInputTokenUsage(float $InputTokenUsage) Set Token consumption for input.
 * @method float getOutputTokenUsage() Obtain Token consumption for output.
 * @method void setOutputTokenUsage(float $OutputTokenUsage) Set Token consumption for output.
 * @method integer getSearchUsage() Obtain Number of search service calls.
 * @method void setSearchUsage(integer $SearchUsage) Set Number of search service calls.
 * @method string getModelName() Obtain Model name.
 * @method void setModelName(string $ModelName) Set Model name.
 * @method string getCallType() Obtain Call type.
 * @method void setCallType(string $CallType) Set Call type.
 * @method string getUinAccount() Obtain Account.
 * @method void setUinAccount(string $UinAccount) Set Account.
 * @method string getAppName() Obtain Application name.
 * @method void setAppName(string $AppName) Set Application name.
 * @method integer getPageUsage() Obtain Total number of consumed pages.
 * @method void setPageUsage(integer $PageUsage) Set Total number of consumed pages.
 * @method string getSubScene() Obtain Filter sub-scenario.
 * @method void setSubScene(string $SubScene) Set Filter sub-scenario.
 */
class CallDetail extends AbstractModel
{
    /**
     * @var string Associated ID.
     */
    public $Id;

    /**
     * @var string Call time.
     */
    public $CallTime;

    /**
     * @var float Total token consumption.
     */
    public $TotalTokenUsage;

    /**
     * @var float Token consumption for input.
     */
    public $InputTokenUsage;

    /**
     * @var float Token consumption for output.
     */
    public $OutputTokenUsage;

    /**
     * @var integer Number of search service calls.
     */
    public $SearchUsage;

    /**
     * @var string Model name.
     */
    public $ModelName;

    /**
     * @var string Call type.
     */
    public $CallType;

    /**
     * @var string Account.
     */
    public $UinAccount;

    /**
     * @var string Application name.
     */
    public $AppName;

    /**
     * @var integer Total number of consumed pages.
     */
    public $PageUsage;

    /**
     * @var string Filter sub-scenario.
     */
    public $SubScene;

    /**
     * @param string $Id Associated ID.
     * @param string $CallTime Call time.
     * @param float $TotalTokenUsage Total token consumption.
     * @param float $InputTokenUsage Token consumption for input.
     * @param float $OutputTokenUsage Token consumption for output.
     * @param integer $SearchUsage Number of search service calls.
     * @param string $ModelName Model name.
     * @param string $CallType Call type.
     * @param string $UinAccount Account.
     * @param string $AppName Application name.
     * @param integer $PageUsage Total number of consumed pages.
     * @param string $SubScene Filter sub-scenario.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("CallTime",$param) and $param["CallTime"] !== null) {
            $this->CallTime = $param["CallTime"];
        }

        if (array_key_exists("TotalTokenUsage",$param) and $param["TotalTokenUsage"] !== null) {
            $this->TotalTokenUsage = $param["TotalTokenUsage"];
        }

        if (array_key_exists("InputTokenUsage",$param) and $param["InputTokenUsage"] !== null) {
            $this->InputTokenUsage = $param["InputTokenUsage"];
        }

        if (array_key_exists("OutputTokenUsage",$param) and $param["OutputTokenUsage"] !== null) {
            $this->OutputTokenUsage = $param["OutputTokenUsage"];
        }

        if (array_key_exists("SearchUsage",$param) and $param["SearchUsage"] !== null) {
            $this->SearchUsage = $param["SearchUsage"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("CallType",$param) and $param["CallType"] !== null) {
            $this->CallType = $param["CallType"];
        }

        if (array_key_exists("UinAccount",$param) and $param["UinAccount"] !== null) {
            $this->UinAccount = $param["UinAccount"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("PageUsage",$param) and $param["PageUsage"] !== null) {
            $this->PageUsage = $param["PageUsage"];
        }

        if (array_key_exists("SubScene",$param) and $param["SubScene"] !== null) {
            $this->SubScene = $param["SubScene"];
        }
    }
}
