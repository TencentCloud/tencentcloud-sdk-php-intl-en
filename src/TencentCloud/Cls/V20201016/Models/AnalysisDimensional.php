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
 * Multi-Dimensional analysis dimension
 *
 * @method string getName() Obtain Analysis name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Analysis name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain Type of data being analyzed. Valid values: `query`, `field`, `original`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Type of data being analyzed. Valid values: `query`, `field`, `original`
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getContent() Obtain Analysis content
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContent(string $Content) Set Analysis content
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getConfigInfo() Obtain Configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConfigInfo(array $ConfigInfo) Set Configuration
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AnalysisDimensional extends AbstractModel
{
    /**
     * @var string Analysis name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Type of data being analyzed. Valid values: `query`, `field`, `original`
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Analysis content
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Content;

    /**
     * @var array Configuration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConfigInfo;

    /**
     * @param string $Name Analysis name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type Type of data being analyzed. Valid values: `query`, `field`, `original`
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Content Analysis content
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ConfigInfo Configuration
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("ConfigInfo",$param) and $param["ConfigInfo"] !== null) {
            $this->ConfigInfo = [];
            foreach ($param["ConfigInfo"] as $key => $value){
                $obj = new AlarmAnalysisConfig();
                $obj->deserialize($value);
                array_push($this->ConfigInfo, $obj);
            }
        }
    }
}
