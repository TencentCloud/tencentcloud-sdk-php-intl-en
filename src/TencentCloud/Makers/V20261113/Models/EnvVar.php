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
 * Environment variable. An empty or default Env array means global. When writing, it unfolds to all current environments of the project.
 *
 * @method string getKey() Obtain <p>Variable name, up to 255 characters</p>
 * @method void setKey(string $Key) Set <p>Variable name, up to 255 characters</p>
 * @method string getValue() Obtain <p>Variable value, up to 1000</p>
 * @method void setValue(string $Value) Set <p>Variable value, up to 1000</p>
 * @method integer getId() Obtain <p>Variable ID. It is not passed in upon creation.</p>
 * @method void setId(integer $Id) Set <p>Variable ID. It is not passed in upon creation.</p>
 * @method string getComment() Obtain <p>Remark. Up to 255 characters</p>
 * @method void setComment(string $Comment) Set <p>Remark. Up to 255 characters</p>
 * @method array getEnv() Obtain <p>Effective environment slug, for example, Production, Preview. Multi-line environments with the same Key must not overlap</p>
 * @method void setEnv(array $Env) Set <p>Effective environment slug, for example, Production, Preview. Multi-line environments with the same Key must not overlap</p>
 */
class EnvVar extends AbstractModel
{
    /**
     * @var string <p>Variable name, up to 255 characters</p>
     */
    public $Key;

    /**
     * @var string <p>Variable value, up to 1000</p>
     */
    public $Value;

    /**
     * @var integer <p>Variable ID. It is not passed in upon creation.</p>
     */
    public $Id;

    /**
     * @var string <p>Remark. Up to 255 characters</p>
     */
    public $Comment;

    /**
     * @var array <p>Effective environment slug, for example, Production, Preview. Multi-line environments with the same Key must not overlap</p>
     */
    public $Env;

    /**
     * @param string $Key <p>Variable name, up to 255 characters</p>
     * @param string $Value <p>Variable value, up to 1000</p>
     * @param integer $Id <p>Variable ID. It is not passed in upon creation.</p>
     * @param string $Comment <p>Remark. Up to 255 characters</p>
     * @param array $Env <p>Effective environment slug, for example, Production, Preview. Multi-line environments with the same Key must not overlap</p>
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = $param["Env"];
        }
    }
}
