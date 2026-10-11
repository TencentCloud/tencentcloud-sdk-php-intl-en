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
 * EMR on TKE cluster component image information.
 *
 * @method string getImageMode() Obtain <p>Image type.</p><p>Enumeration values:</p><ul><li>official: official image</li><li>custom: custom image</li><li>imageUrl: image URL</li></ul>
 * @method void setImageMode(string $ImageMode) Set <p>Image type.</p><p>Enumeration values:</p><ul><li>official: official image</li><li>custom: custom image</li><li>imageUrl: image URL</li></ul>
 * @method string getRegion() Obtain <p>Region.</p>
 * @method void setRegion(string $Region) Set <p>Region.</p>
 * @method boolean getLegacyCCR() Obtain <p>Whether it is an existing image.</p>
 * @method void setLegacyCCR(boolean $LegacyCCR) Set <p>Whether it is an existing image.</p>
 * @method string getFullImageUrl() Obtain <p>Image URL.</p>
 * @method void setFullImageUrl(string $FullImageUrl) Set <p>Image URL.</p>
 * @method string getMainVersion() Obtain <p>Version.</p>
 * @method void setMainVersion(string $MainVersion) Set <p>Version.</p>
 * @method string getRegistryUrl() Obtain <p>Image URL domain name.</p>
 * @method void setRegistryUrl(string $RegistryUrl) Set <p>Image URL domain name.</p>
 * @method string getNamespaceName() Obtain <p>Image namespace.</p>
 * @method void setNamespaceName(string $NamespaceName) Set <p>Image namespace.</p>
 * @method string getRepoName() Obtain <p>Image repository name.</p>
 * @method void setRepoName(string $RepoName) Set <p>Image repository name.</p>
 * @method string getTag() Obtain <p>Image version tag.</p>
 * @method void setTag(string $Tag) Set <p>Image version tag.</p>
 * @method string getUsername() Obtain <p>Username.</p>
 * @method void setUsername(string $Username) Set <p>Username.</p>
 * @method string getPassword() Obtain <p>Password.</p>
 * @method void setPassword(string $Password) Set <p>Password.</p>
 * @method ImagePullSecret getImagePullSecret() Obtain <p>Image pull secret.</p>
 * @method void setImagePullSecret(ImagePullSecret $ImagePullSecret) Set <p>Image pull secret.</p>
 * @method string getImagePullPolicy() Obtain <p>Image pull policy.</p>
 * @method void setImagePullPolicy(string $ImagePullPolicy) Set <p>Image pull policy.</p>
 */
class ImageInfoV2 extends AbstractModel
{
    /**
     * @var string <p>Image type.</p><p>Enumeration values:</p><ul><li>official: official image</li><li>custom: custom image</li><li>imageUrl: image URL</li></ul>
     */
    public $ImageMode;

    /**
     * @var string <p>Region.</p>
     */
    public $Region;

    /**
     * @var boolean <p>Whether it is an existing image.</p>
     */
    public $LegacyCCR;

    /**
     * @var string <p>Image URL.</p>
     */
    public $FullImageUrl;

    /**
     * @var string <p>Version.</p>
     */
    public $MainVersion;

    /**
     * @var string <p>Image URL domain name.</p>
     */
    public $RegistryUrl;

    /**
     * @var string <p>Image namespace.</p>
     */
    public $NamespaceName;

    /**
     * @var string <p>Image repository name.</p>
     */
    public $RepoName;

    /**
     * @var string <p>Image version tag.</p>
     */
    public $Tag;

    /**
     * @var string <p>Username.</p>
     */
    public $Username;

    /**
     * @var string <p>Password.</p>
     */
    public $Password;

    /**
     * @var ImagePullSecret <p>Image pull secret.</p>
     */
    public $ImagePullSecret;

    /**
     * @var string <p>Image pull policy.</p>
     */
    public $ImagePullPolicy;

    /**
     * @param string $ImageMode <p>Image type.</p><p>Enumeration values:</p><ul><li>official: official image</li><li>custom: custom image</li><li>imageUrl: image URL</li></ul>
     * @param string $Region <p>Region.</p>
     * @param boolean $LegacyCCR <p>Whether it is an existing image.</p>
     * @param string $FullImageUrl <p>Image URL.</p>
     * @param string $MainVersion <p>Version.</p>
     * @param string $RegistryUrl <p>Image URL domain name.</p>
     * @param string $NamespaceName <p>Image namespace.</p>
     * @param string $RepoName <p>Image repository name.</p>
     * @param string $Tag <p>Image version tag.</p>
     * @param string $Username <p>Username.</p>
     * @param string $Password <p>Password.</p>
     * @param ImagePullSecret $ImagePullSecret <p>Image pull secret.</p>
     * @param string $ImagePullPolicy <p>Image pull policy.</p>
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
        if (array_key_exists("ImageMode",$param) and $param["ImageMode"] !== null) {
            $this->ImageMode = $param["ImageMode"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("LegacyCCR",$param) and $param["LegacyCCR"] !== null) {
            $this->LegacyCCR = $param["LegacyCCR"];
        }

        if (array_key_exists("FullImageUrl",$param) and $param["FullImageUrl"] !== null) {
            $this->FullImageUrl = $param["FullImageUrl"];
        }

        if (array_key_exists("MainVersion",$param) and $param["MainVersion"] !== null) {
            $this->MainVersion = $param["MainVersion"];
        }

        if (array_key_exists("RegistryUrl",$param) and $param["RegistryUrl"] !== null) {
            $this->RegistryUrl = $param["RegistryUrl"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("RepoName",$param) and $param["RepoName"] !== null) {
            $this->RepoName = $param["RepoName"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("ImagePullSecret",$param) and $param["ImagePullSecret"] !== null) {
            $this->ImagePullSecret = new ImagePullSecret();
            $this->ImagePullSecret->deserialize($param["ImagePullSecret"]);
        }

        if (array_key_exists("ImagePullPolicy",$param) and $param["ImagePullPolicy"] !== null) {
            $this->ImagePullPolicy = $param["ImagePullPolicy"];
        }
    }
}
