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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateConfig request structure.
 *
 * @method string getName() Obtain Collection configuration name
 * @method void setName(string $Name) Set Collection configuration name
 * @method string getOutput() Obtain Log topic ID (TopicId) of collection configuration
 * @method void setOutput(string $Output) Set Log topic ID (TopicId) of collection configuration
 * @method string getPath() Obtain Log collection path containing the filename
 * @method void setPath(string $Path) Set Log collection path containing the filename
 * @method string getLogType() Obtain Type of the log to be collected. Valid values: `json_log`: log in JSON format; `delimiter_log`: log in delimited format; `minimalist_log`: minimalist log; `multiline_log`: log in multi-line format; `fullregex_log`: log in full regex format. Default value: `minimalist_log`
 * @method void setLogType(string $LogType) Set Type of the log to be collected. Valid values: `json_log`: log in JSON format; `delimiter_log`: log in delimited format; `minimalist_log`: minimalist log; `multiline_log`: log in multi-line format; `fullregex_log`: log in full regex format. Default value: `minimalist_log`
 * @method ExtractRuleInfo getExtractRule() Obtain Extraction rule. If `ExtractRule` is set, `LogType` must be set.
 * @method void setExtractRule(ExtractRuleInfo $ExtractRule) Set Extraction rule. If `ExtractRule` is set, `LogType` must be set.
 * @method array getExcludePaths() Obtain Collection path blocklist
 * @method void setExcludePaths(array $ExcludePaths) Set Collection path blocklist
 * @method string getUserDefineRule() Obtain Custom collection rule, which is a serialized JSON string
 * @method void setUserDefineRule(string $UserDefineRule) Set Custom collection rule, which is a serialized JSON string
 */
class CreateConfigRequest extends AbstractModel
{
    /**
     * @var string Collection configuration name
     */
    public $Name;

    /**
     * @var string Log topic ID (TopicId) of collection configuration
     */
    public $Output;

    /**
     * @var string Log collection path containing the filename
     */
    public $Path;

    /**
     * @var string Type of the log to be collected. Valid values: `json_log`: log in JSON format; `delimiter_log`: log in delimited format; `minimalist_log`: minimalist log; `multiline_log`: log in multi-line format; `fullregex_log`: log in full regex format. Default value: `minimalist_log`
     */
    public $LogType;

    /**
     * @var ExtractRuleInfo Extraction rule. If `ExtractRule` is set, `LogType` must be set.
     */
    public $ExtractRule;

    /**
     * @var array Collection path blocklist
     */
    public $ExcludePaths;

    /**
     * @var string Custom collection rule, which is a serialized JSON string
     */
    public $UserDefineRule;

    /**
     * @param string $Name Collection configuration name
     * @param string $Output Log topic ID (TopicId) of collection configuration
     * @param string $Path Log collection path containing the filename
     * @param string $LogType Type of the log to be collected. Valid values: `json_log`: log in JSON format; `delimiter_log`: log in delimited format; `minimalist_log`: minimalist log; `multiline_log`: log in multi-line format; `fullregex_log`: log in full regex format. Default value: `minimalist_log`
     * @param ExtractRuleInfo $ExtractRule Extraction rule. If `ExtractRule` is set, `LogType` must be set.
     * @param array $ExcludePaths Collection path blocklist
     * @param string $UserDefineRule Custom collection rule, which is a serialized JSON string
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

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = $param["Output"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("ExtractRule",$param) and $param["ExtractRule"] !== null) {
            $this->ExtractRule = new ExtractRuleInfo();
            $this->ExtractRule->deserialize($param["ExtractRule"]);
        }

        if (array_key_exists("ExcludePaths",$param) and $param["ExcludePaths"] !== null) {
            $this->ExcludePaths = [];
            foreach ($param["ExcludePaths"] as $key => $value){
                $obj = new ExcludePathInfo();
                $obj->deserialize($value);
                array_push($this->ExcludePaths, $obj);
            }
        }

        if (array_key_exists("UserDefineRule",$param) and $param["UserDefineRule"] !== null) {
            $this->UserDefineRule = $param["UserDefineRule"];
        }
    }
}
