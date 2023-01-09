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
 * CreateParameterTemplate request structure.
 *
 * @method string getTemplateName() Obtain Template name, which can contain 1-60 letters, digits, and symbols (-_./()[]()+=:@).
 * @method void setTemplateName(string $TemplateName) Set Template name, which can contain 1-60 letters, digits, and symbols (-_./()[]()+=:@).
 * @method string getDBMajorVersion() Obtain The major database version number, such as 11, 12, 13.
 * @method void setDBMajorVersion(string $DBMajorVersion) Set The major database version number, such as 11, 12, 13.
 * @method string getDBEngine() Obtain Database engine, such as postgresql, mssql_compatible.
 * @method void setDBEngine(string $DBEngine) Set Database engine, such as postgresql, mssql_compatible.
 * @method string getTemplateDescription() Obtain Parameter template description, which can contain 1-60 letters, digits, and symbols (-_./()[]()+=:@).
 * @method void setTemplateDescription(string $TemplateDescription) Set Parameter template description, which can contain 1-60 letters, digits, and symbols (-_./()[]()+=:@).
 */
class CreateParameterTemplateRequest extends AbstractModel
{
    /**
     * @var string Template name, which can contain 1-60 letters, digits, and symbols (-_./()[]()+=:@).
     */
    public $TemplateName;

    /**
     * @var string The major database version number, such as 11, 12, 13.
     */
    public $DBMajorVersion;

    /**
     * @var string Database engine, such as postgresql, mssql_compatible.
     */
    public $DBEngine;

    /**
     * @var string Parameter template description, which can contain 1-60 letters, digits, and symbols (-_./()[]()+=:@).
     */
    public $TemplateDescription;

    /**
     * @param string $TemplateName Template name, which can contain 1-60 letters, digits, and symbols (-_./()[]()+=:@).
     * @param string $DBMajorVersion The major database version number, such as 11, 12, 13.
     * @param string $DBEngine Database engine, such as postgresql, mssql_compatible.
     * @param string $TemplateDescription Parameter template description, which can contain 1-60 letters, digits, and symbols (-_./()[]()+=:@).
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
