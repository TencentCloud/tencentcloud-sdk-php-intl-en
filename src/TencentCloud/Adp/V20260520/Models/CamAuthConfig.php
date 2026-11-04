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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CAM authorization information
 *
 * @method string getRoleName() Obtain <p>Role name.</p>
 * @method void setRoleName(string $RoleName) Set <p>Role name.</p>
 * @method integer getKeyLocation() Obtain <p>Key location HEADER/QUERY</p><p>Enumeration values:<br>| uint | Description |<br>| --- | --- |<br>| 0 | Header authentication |<br>| 1 | Request information authentication |</p>
 * @method void setKeyLocation(integer $KeyLocation) Set <p>Key location HEADER/QUERY</p><p>Enumeration values:<br>| uint | Description |<br>| --- | --- |<br>| 0 | Header authentication |<br>| 1 | Request information authentication |</p>
 * @method string getSecretIdName() Obtain <p>SecretId field name</p>
 * @method void setSecretIdName(string $SecretIdName) Set <p>SecretId field name</p>
 * @method string getSecretKeyName() Obtain <p>SecretKey field name</p>
 * @method void setSecretKeyName(string $SecretKeyName) Set <p>SecretKey field name</p>
 * @method array getParamList() Obtain <p>CAM Access Key Field Configuration</p>
 * @method void setParamList(array $ParamList) Set <p>CAM Access Key Field Configuration</p>
 * @method boolean getSupportRoleAuth() Obtain <p>Whether CAM role authorization is supported.</p>
 * @method void setSupportRoleAuth(boolean $SupportRoleAuth) Set <p>Whether CAM role authorization is supported.</p>
 */
class CamAuthConfig extends AbstractModel
{
    /**
     * @var string <p>Role name.</p>
     */
    public $RoleName;

    /**
     * @var integer <p>Key location HEADER/QUERY</p><p>Enumeration values:<br>| uint | Description |<br>| --- | --- |<br>| 0 | Header authentication |<br>| 1 | Request information authentication |</p>
     */
    public $KeyLocation;

    /**
     * @var string <p>SecretId field name</p>
     */
    public $SecretIdName;

    /**
     * @var string <p>SecretKey field name</p>
     */
    public $SecretKeyName;

    /**
     * @var array <p>CAM Access Key Field Configuration</p>
     */
    public $ParamList;

    /**
     * @var boolean <p>Whether CAM role authorization is supported.</p>
     */
    public $SupportRoleAuth;

    /**
     * @param string $RoleName <p>Role name.</p>
     * @param integer $KeyLocation <p>Key location HEADER/QUERY</p><p>Enumeration values:<br>| uint | Description |<br>| --- | --- |<br>| 0 | Header authentication |<br>| 1 | Request information authentication |</p>
     * @param string $SecretIdName <p>SecretId field name</p>
     * @param string $SecretKeyName <p>SecretKey field name</p>
     * @param array $ParamList <p>CAM Access Key Field Configuration</p>
     * @param boolean $SupportRoleAuth <p>Whether CAM role authorization is supported.</p>
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

        if (array_key_exists("KeyLocation",$param) and $param["KeyLocation"] !== null) {
            $this->KeyLocation = $param["KeyLocation"];
        }

        if (array_key_exists("SecretIdName",$param) and $param["SecretIdName"] !== null) {
            $this->SecretIdName = $param["SecretIdName"];
        }

        if (array_key_exists("SecretKeyName",$param) and $param["SecretKeyName"] !== null) {
            $this->SecretKeyName = $param["SecretKeyName"];
        }

        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->ParamList = [];
            foreach ($param["ParamList"] as $key => $value){
                $obj = new AccessKeyParamConfig();
                $obj->deserialize($value);
                array_push($this->ParamList, $obj);
            }
        }

        if (array_key_exists("SupportRoleAuth",$param) and $param["SupportRoleAuth"] !== null) {
            $this->SupportRoleAuth = $param["SupportRoleAuth"];
        }
    }
}
