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
namespace TencentCloud\Makers\V20261113\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Variable in the environment.
 *
 * @method integer getId() Obtain <p>Variable ID</p>
 * @method void setId(integer $Id) Set <p>Variable ID</p>
 * @method string getKey() Obtain <p>Variable name</p>
 * @method void setKey(string $Key) Set <p>Variable name</p>
 * @method string getValue() Obtain <p>Variable value</p>
 * @method void setValue(string $Value) Set <p>Variable value</p>
 * @method string getComment() Obtain <p>Remarks.</p>
 * @method void setComment(string $Comment) Set <p>Remarks.</p>
 * @method array getEnv() Obtain <p>Effective environment slug</p>
 * @method void setEnv(array $Env) Set <p>Effective environment slug</p>
 */
class EnvironmentEnvVar extends AbstractModel
{
    /**
     * @var integer <p>Variable ID</p>
     */
    public $Id;

    /**
     * @var string <p>Variable name</p>
     */
    public $Key;

    /**
     * @var string <p>Variable value</p>
     */
    public $Value;

    /**
     * @var string <p>Remarks.</p>
     */
    public $Comment;

    /**
     * @var array <p>Effective environment slug</p>
     */
    public $Env;

    /**
     * @param integer $Id <p>Variable ID</p>
     * @param string $Key <p>Variable name</p>
     * @param string $Value <p>Variable value</p>
     * @param string $Comment <p>Remarks.</p>
     * @param array $Env <p>Effective environment slug</p>
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

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = $param["Env"];
        }
    }
}
