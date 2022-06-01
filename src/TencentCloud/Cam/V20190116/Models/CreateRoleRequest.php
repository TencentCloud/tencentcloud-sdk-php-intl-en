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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRole request structure.
 *
 * @method string getRoleName() Obtain Role name
 * @method void setRoleName(string $RoleName) Set Role name
 * @method string getPolicyDocument() Obtain Policy document
 * @method void setPolicyDocument(string $PolicyDocument) Set Policy document
 * @method string getDescription() Obtain Role description
 * @method void setDescription(string $Description) Set Role description
 * @method integer getConsoleLogin() Obtain Whether login is allowed. 1: yes, 0: no
 * @method void setConsoleLogin(integer $ConsoleLogin) Set Whether login is allowed. 1: yes, 0: no
 * @method integer getSessionDuration() Obtain The maximum validity period of the temporary key for creating a role (range: 0-43200)
 * @method void setSessionDuration(integer $SessionDuration) Set The maximum validity period of the temporary key for creating a role (range: 0-43200)
 * @method array getTags() Obtain Tags bound to the role.
 * @method void setTags(array $Tags) Set Tags bound to the role.
 */
class CreateRoleRequest extends AbstractModel
{
    /**
     * @var string Role name
     */
    public $RoleName;

    /**
     * @var string Policy document
     */
    public $PolicyDocument;

    /**
     * @var string Role description
     */
    public $Description;

    /**
     * @var integer Whether login is allowed. 1: yes, 0: no
     */
    public $ConsoleLogin;

    /**
     * @var integer The maximum validity period of the temporary key for creating a role (range: 0-43200)
     */
    public $SessionDuration;

    /**
     * @var array Tags bound to the role.
     */
    public $Tags;

    /**
     * @param string $RoleName Role name
     * @param string $PolicyDocument Policy document
     * @param string $Description Role description
     * @param integer $ConsoleLogin Whether login is allowed. 1: yes, 0: no
     * @param integer $SessionDuration The maximum validity period of the temporary key for creating a role (range: 0-43200)
     * @param array $Tags Tags bound to the role.
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
        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("PolicyDocument",$param) and $param["PolicyDocument"] !== null) {
            $this->PolicyDocument = $param["PolicyDocument"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ConsoleLogin",$param) and $param["ConsoleLogin"] !== null) {
            $this->ConsoleLogin = $param["ConsoleLogin"];
        }

        if (array_key_exists("SessionDuration",$param) and $param["SessionDuration"] !== null) {
            $this->SessionDuration = $param["SessionDuration"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new RoleTags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
