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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Key used for obtaining an image.
 *
 * @method string getSourceNamespace() Obtain Namespace of the source key.
 * @method void setSourceNamespace(string $SourceNamespace) Set Namespace of the source key.
 * @method array getSecretNames() Obtain Key name list.
 * @method void setSecretNames(array $SecretNames) Set Key name list.
 */
class ImagePullSecret extends AbstractModel
{
    /**
     * @var string Namespace of the source key.
     */
    public $SourceNamespace;

    /**
     * @var array Key name list.
     */
    public $SecretNames;

    /**
     * @param string $SourceNamespace Namespace of the source key.
     * @param array $SecretNames Key name list.
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
        if (array_key_exists("SourceNamespace",$param) and $param["SourceNamespace"] !== null) {
            $this->SourceNamespace = $param["SourceNamespace"];
        }

        if (array_key_exists("SecretNames",$param) and $param["SecretNames"] !== null) {
            $this->SecretNames = $param["SecretNames"];
        }
    }
}
