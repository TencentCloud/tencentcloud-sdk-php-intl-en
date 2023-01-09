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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Basic information of a parameter template
 *
 * @method string getTemplateId() Obtain Parameter template ID
 * @method void setTemplateId(string $TemplateId) Set Parameter template ID
 * @method string getTemplateName() Obtain Parameter template name
 * @method void setTemplateName(string $TemplateName) Set Parameter template name
 * @method string getDBMajorVersion() Obtain Database version applicable to a parameter template
 * @method void setDBMajorVersion(string $DBMajorVersion) Set Database version applicable to a parameter template
 * @method string getDBEngine() Obtain Database engine applicable to a parameter template
 * @method void setDBEngine(string $DBEngine) Set Database engine applicable to a parameter template
 * @method string getTemplateDescription() Obtain Parameter template description
 * @method void setTemplateDescription(string $TemplateDescription) Set Parameter template description
 */
class ParameterTemplate extends AbstractModel
{
    /**
     * @var string Parameter template ID
     */
    public $TemplateId;

    /**
     * @var string Parameter template name
     */
    public $TemplateName;

    /**
     * @var string Database version applicable to a parameter template
     */
    public $DBMajorVersion;

    /**
     * @var string Database engine applicable to a parameter template
     */
    public $DBEngine;

    /**
     * @var string Parameter template description
     */
    public $TemplateDescription;

    /**
     * @param string $TemplateId Parameter template ID
     * @param string $TemplateName Parameter template name
     * @param string $DBMajorVersion Database version applicable to a parameter template
     * @param string $DBEngine Database engine applicable to a parameter template
     * @param string $TemplateDescription Parameter template description
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("DBMajorVersion",$param) and $param["DBMajorVersion"] !== null) {
            $this->DBMajorVersion = $param["DBMajorVersion"];
        }

        if (array_key_exists("DBEngine",$param) and $param["DBEngine"] !== null) {
            $this->DBEngine = $param["DBEngine"];
        }

        if (array_key_exists("TemplateDescription",$param) and $param["TemplateDescription"] !== null) {
            $this->TemplateDescription = $param["TemplateDescription"];
        }
    }
}
