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
 * Image information.
 *
 * @method string getRegion() Obtain Image region.
 * @method void setRegion(string $Region) Set Image region.
 * @method string getRegistryId() Obtain TCR instance ID.
 * @method void setRegistryId(string $RegistryId) Set TCR instance ID.
 * @method string getDomainName() Obtain Domain name.
 * @method void setDomainName(string $DomainName) Set Domain name.
 * @method string getNamespaceName() Obtain Namespace.
 * @method void setNamespaceName(string $NamespaceName) Set Namespace.
 * @method string getRepositoryName() Obtain Image repository name.
 * @method void setRepositoryName(string $RepositoryName) Set Image repository name.
 * @method string getImageVersion() Obtain Image version.
 * @method void setImageVersion(string $ImageVersion) Set Image version.
 * @method string getImagePullPolicy() Obtain Image pull policy.
 * @method void setImagePullPolicy(string $ImagePullPolicy) Set Image pull policy.
 * @method string getImage() Obtain Image address.
 * @method void setImage(string $Image) Set Image address.
 */
class ImageInfo extends AbstractModel
{
    /**
     * @var string Image region.
     */
    public $Region;

    /**
     * @var string TCR instance ID.
     */
    public $RegistryId;

    /**
     * @var string Domain name.
     */
    public $DomainName;

    /**
     * @var string Namespace.
     */
    public $NamespaceName;

    /**
     * @var string Image repository name.
     */
    public $RepositoryName;

    /**
     * @var string Image version.
     */
    public $ImageVersion;

    /**
     * @var string Image pull policy.
     */
    public $ImagePullPolicy;

    /**
     * @var string Image address.
     */
    public $Image;

    /**
     * @param string $Region Image region.
     * @param string $RegistryId TCR instance ID.
     * @param string $DomainName Domain name.
     * @param string $NamespaceName Namespace.
     * @param string $RepositoryName Image repository name.
     * @param string $ImageVersion Image version.
     * @param string $ImagePullPolicy Image pull policy.
     * @param string $Image Image address.
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("RepositoryName",$param) and $param["RepositoryName"] !== null) {
            $this->RepositoryName = $param["RepositoryName"];
        }

        if (array_key_exists("ImageVersion",$param) and $param["ImageVersion"] !== null) {
            $this->ImageVersion = $param["ImageVersion"];
        }

        if (array_key_exists("ImagePullPolicy",$param) and $param["ImagePullPolicy"] !== null) {
            $this->ImagePullPolicy = $param["ImagePullPolicy"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }
    }
}
