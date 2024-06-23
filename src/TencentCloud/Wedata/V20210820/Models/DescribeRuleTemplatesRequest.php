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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRuleTemplates request structure.
 *
 * @method integer getType() Obtain Template Type 1. System Template 2. Custom Definition Template
 * @method void setType(integer $Type) Set Template Type 1. System Template 2. Custom Definition Template
 * @method integer getSourceObjectType() Obtain 1. Constant 2. Offline Table Level 2. Offline Field Level
 * @method void setSourceObjectType(integer $SourceObjectType) Set 1. Constant 2. Offline Table Level 2. Offline Field Level
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method array getSourceEngineTypes() Obtain Corresponding Engine Type of the Source
 * @method void setSourceEngineTypes(array $SourceEngineTypes) Set Corresponding Engine Type of the Source
 */
class DescribeRuleTemplatesRequest extends AbstractModel
{
    /**
     * @var integer Template Type 1. System Template 2. Custom Definition Template
     */
    public $Type;

    /**
     * @var integer 1. Constant 2. Offline Table Level 2. Offline Field Level
     */
    public $SourceObjectType;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var array Corresponding Engine Type of the Source
     */
    public $SourceEngineTypes;

    /**
     * @param integer $Type Template Type 1. System Template 2. Custom Definition Template
     * @param integer $SourceObjectType 1. Constant 2. Offline Table Level 2. Offline Field Level
     * @param string $ProjectId Project ID
     * @param array $SourceEngineTypes Corresponding Engine Type of the Source
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SourceObjectType",$param) and $param["SourceObjectType"] !== null) {
            $this->SourceObjectType = $param["SourceObjectType"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("SourceEngineTypes",$param) and $param["SourceEngineTypes"] !== null) {
            $this->SourceEngineTypes = $param["SourceEngineTypes"];
        }
    }
}
