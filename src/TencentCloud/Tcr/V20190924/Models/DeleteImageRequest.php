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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteImage request structure.
 *
 * @method string getRegistryId() Obtain Instance ID
 * @method void setRegistryId(string $RegistryId) Set Instance ID
 * @method string getRepositoryName() Obtain Image repository name
 * @method void setRepositoryName(string $RepositoryName) Set Image repository name
 * @method string getImageVersion() Obtain Image tag
 * @method void setImageVersion(string $ImageVersion) Set Image tag
 * @method string getNamespaceName() Obtain Namespace name
 * @method void setNamespaceName(string $NamespaceName) Set Namespace name
 */
class DeleteImageRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $RegistryId;

    /**
     * @var string Image repository name
     */
    public $RepositoryName;

    /**
     * @var string Image tag
     */
    public $ImageVersion;

    /**
     * @var string Namespace name
     */
    public $NamespaceName;

    /**
     * @param string $RegistryId Instance ID
     * @param string $RepositoryName Image repository name
     * @param string $ImageVersion Image tag
     * @param string $NamespaceName Namespace name
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("RepositoryName",$param) and $param["RepositoryName"] !== null) {
            $this->RepositoryName = $param["RepositoryName"];
        }

        if (array_key_exists("ImageVersion",$param) and $param["ImageVersion"] !== null) {
            $this->ImageVersion = $param["ImageVersion"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }
    }
}
