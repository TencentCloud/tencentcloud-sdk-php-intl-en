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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateParamTemplate request structure.
 *
 * @method string getTemplateName() Obtain Template name
 * @method void setTemplateName(string $TemplateName) Set Template name
 * @method string getEngineVersion() Obtain MySQL version number
 * @method void setEngineVersion(string $EngineVersion) Set MySQL version number
 * @method string getTemplateDescription() Obtain Template description
 * @method void setTemplateDescription(string $TemplateDescription) Set Template description
 * @method integer getTemplateId() Obtain ID of the template to be copied
 * @method void setTemplateId(integer $TemplateId) Set ID of the template to be copied
 * @method string getDbMode() Obtain Database type. Valid values:  `NORMAL` (default), `SERVERLESS`.
 * @method void setDbMode(string $DbMode) Set Database type. Valid values:  `NORMAL` (default), `SERVERLESS`.
 * @method array getParamList() Obtain List of the parameters
 * @method void setParamList(array $ParamList) Set List of the parameters
 */
class CreateParamTemplateRequest extends AbstractModel
{
    /**
     * @var string Template name
     */
    public $TemplateName;

    /**
     * @var string MySQL version number
     */
    public $EngineVersion;

    /**
     * @var string Template description
     */
    public $TemplateDescription;

    /**
     * @var integer ID of the template to be copied
     */
    public $TemplateId;

    /**
     * @var string Database type. Valid values:  `NORMAL` (default), `SERVERLESS`.
     */
    public $DbMode;

    /**
     * @var array List of the parameters
     */
    public $ParamList;

    /**
     * @param string $TemplateName Template name
     * @param string $EngineVersion MySQL version number
     * @param string $TemplateDescription Template description
     * @param integer $TemplateId ID of the template to be copied
     * @param string $DbMode Database type. Valid values:  `NORMAL` (default), `SERVERLESS`.
     * @param array $ParamList List of the parameters
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
        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("TemplateDescription",$param) and $param["TemplateDescription"] !== null) {
            $this->TemplateDescription = $param["TemplateDescription"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("DbMode",$param) and $param["DbMode"] !== null) {
            $this->DbMode = $param["DbMode"];
        }

        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->ParamList = [];
            foreach ($param["ParamList"] as $key => $value){
                $obj = new ParamItem();
                $obj->deserialize($value);
                array_push($this->ParamList, $obj);
            }
        }
    }
}
